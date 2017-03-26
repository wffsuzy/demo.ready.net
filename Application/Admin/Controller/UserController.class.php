<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/6 0006
 * Time: 16:09
 */

namespace Admin\Controller;

use Admin\Model\UserModel;
use Think\Page;

class UserController extends BaseController
{
    protected $user;

    public function __construct()
    {
        parent::__construct();
        $this->user = new UserModel();
    }


    public function userList()
    {
            $param = I('get.');
            if($param['start_time'] && !$param['end_time']){
                $param['start_time'] = substr($param['start_time'],0,-1);
                $map['create_time'] = array('gt',strtotime($param['start_time']));
            }
            if($param['end_time'] && !$param['start_time']){
                $param['end_time'] = substr($param['end_time'],0,-1);
                $map['create_time'] = array('lt',strtotime($param['end_time']));
            }

            if($param['start_time'] && $param['end_time']){
                $param['start_time'] = substr($param['start_time'],0,-1);
                $param['end_time'] = substr($param['end_time'],0,-1);
                $map['create_time'] = array(array('gt',strtotime($param['start_time'])),array('lt',strtotime($param['end_time'])));

            }

            if($param['status']){
                $map['status'] = $param['status'];
            }

            if($param['user_name']){
                $map['username'] = $param['user_name'];
            }

            if($param['medical']){
                $map['medical'] = $param['medical'];
            }

            $count = $this->user->where($map)->count();
        $this->assign('count',$count);
        $page = new Page($count,3);
        $this->assign('show',$page->show());
        $data = $this->user->where($map)->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('data',$data);
            $this->display();
    }


    //会员新增

    public function userAdd()
    {
        $map['pro_type'] = 1;
        $data = M('goods')->where($map)->select();
        foreach ($data as $k => $v){
            $data[$k]['pv'] = $v['price'] * 0.8;
        }
        $this->assign('data',$data);  //注册商品
        $this->assign('title','会员新增');
        $this->display();
    }
    //会员修改
    public function userEdit()
    {
        $this->assign('title','会员修改');
        $this->assign('data',$this->user->find(I('get.id')));
        $this->display('userAdd');
    }

    //修改、新增操作

    public function add_edit_user()
    {
        $param  = I('post.'); //user

        if($param['id']){
            $map['status'] = 2;
            $map['node_id'] = $param['node_id'];
            $map['left_right'] = $param['left_right'];
            if(M('user')->where($map)->find()){
                ajax_return(1,'左右区冲突');
            }
                if($this->user->save($param) === false){
                    ajax_return(1,'修改失败');
                }
        }else{
                if($this->user->getUserByname($param['username'])){
                    ajax_return(1,'该用户已经存在');
                }
                $users = $this->user->getUsersByname(array($param['higher_name'],$param['node_name']));
                $param['higher_id'] = $users[0]['id'];
                if(!$param['higher_id']){
                    ajax_return(1,'推荐人不存在');
                }
                 $param['node_id'] = $users[1]['id'];
                  if(!$param['node_id']){
                    ajax_return(1,'结点人不存在');
                }

            $map['status'] = 2;
            $map['node_id'] = $param['node_id'];
            $map['left_right'] = $param['left_right'];
            if(M('user')->where($map)->find()){
                ajax_return(1,'左右区冲突');
            }
                    $service_info = $this->user->getServiceByName($param['service_name']);


                  if(!$service_info){
                      ajax_return(1,'服务中心不存在');
                  }

            $param['service_id'] = $service_info['id'];
            if(!$id = $this->user->add($param)){
                ajax_return(1,'添加失败');
            }
            //添加订单信息
            $order['user_id'] = $id;
            $order['order_id'] = getOrderNum();
            $order['pv_amount']=0;
            $order['amount']=0;
            $suborder = M('suborder');
            foreach ($param['goods'] as $k => $v)
            {
                $order['pv_amount']+=$v['price']*$v['num'];
                $order['amount'] += $v['pv']* $v['num'];
                $order['goods_id'] = $v['id'];
            }



//            $order['num'] = implode(',',$num);
//            $order['goods_id'] = implode(',',$goods_ids);
            $order['create_time'] =time();

            if(!$order_id = M('order')->add($order)){
                ajax_return(1,'保存订单失败');  //总订单
            }
            foreach ($param['goods'] as $k => $v){//子订单
                $param1['order_id'] = $order_id;
                $param1['goods_id'] = $v['id'];
                $param1['num'] = $v['num'];
                $suborder->add($param1);
            }
            
        }

        ajax_return(0,'保存成功',U('userList'));

    }

    //会员后台开通

    public function activeUser()
    {
        if(IS_POST){
            $param = I('post.');
            $save['status'] = 2;
            $map['user_id'] = $param['user_id'];
            $map['is_reg'] = 2;
            //订单状态修改
//            if(M('order')->where($map)->save($save) === false){
//                ajax_return(1,'订单操作失败');
//            }
            $ad = M('user')->find($param['user_id']);

            //会员帐户充值
            //确定结点和推荐关系
                    $a =  $ad['id'];
        $b =  $ad['higher_id'];
        $c =  $ad['node_id'];
        $d =  $ad['left_right'];
        $db = M();
        $aa = $db->execute("call net_add($a,$b,$c,$d)");//正常

            if($aa){
                $where['id'] = $param['user_id'];
                $where['status'] =2; //改为已开通状态
                if(M('user')->save($where) === false){
                    ajax_return(1,'会员状态操作失败');
                }
            }else{
                ajax_return(1,'会员关系写入失败');
            }

            ajax_return(0,'开通成功',U('user/userList'));



        }
    }


    //查看会员推荐关系

    public function userMap()
    {
        if($username = I('post.username')){
            $this->assign('username',$username);
            $where['username'] = $username;
        }
        if(IS_POST){
            if($where['username']){
                $data = $this->user->where($where)->field('id')->find();
                $id = $data['id'];
            }else{
                $id = 0;
            }
                echo json_encode($this->selectChild($id));
        }else{
            $this->display();

        }

    }


    private function selectChild($pid)
    {       $data = array();
            $where['higher_id'] = $pid;
            if($info = $this->user->where($where)->select()){
                foreach ($info as $k=> $v){
                         $arr[$k]['name'] = $v['username'];
                         $arr[$k]['children']=  $this->selectChild($v['id']);
                         array_push($data,$arr[$k]);
                }
            }

        return $data;
    }
}