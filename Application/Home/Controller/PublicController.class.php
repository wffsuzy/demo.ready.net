<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/6 0006
 * Time: 15:47
 */

namespace Home\Controller;
use Think\Controller;

class PublicController extends Controller
{
    public function login()
    {
        if(session('User_yctr')){
        $this->redirect('Index/index');
    }
        if(IS_POST){
            $param = I('post.');
            $param['password'] = md5($param['password']);
            if(!($info = M('user')->where($param)->find())){
                ajax_return(1,'用户名或者密码错误');
            }
            session('User_yctr',$info);
            ajax_return(0,'登录成功',U('Index/index'));
        }else{
            $this->display();
        }
    }


    public function getOut()
    {
            session_destroy();
            $this->redirect('login');
    }

    public function register()
    {
        if(IS_POST){
            $param = I('post.');
            $param['password'] = md5($param['password']);
            $user = M('user');
            if($user->where(array('username'=>$param['username']))->find()){
                ajax_return(1,'该用户名已经被注册');
            }

            if(!($info1 = $user->where(array('username'=>$param['higher_id'],'status'=>2))->find())){
                ajax_return(1,'推荐人不存在');
            }
            $param['higher_id'] = $info1['id'];
            if(!($info2 = $user->where(array('username'=>$param['service_id'],'status'=>2,'is_service'=>2))->find())){
                ajax_return(1,'报单中心不存在');
            }

            $param['service_id'] = $info2['id'];
            if(!($info3 = $user->where(array('username'=>$param['node_id'],'status'=>2))->find())){
                ajax_return(1,'结点人不存在');
            }

            $map['status'] = 2;
            $map['node_id'] = $param['node_id'];
            $map['left_right'] = $param['left_right'];
            if($user->where($map)->find()){
                ajax_return(1,'左右区冲突');
            }
            $param['node_id'] = $info3['id'];

            if(!$id =$user->add($param)){ //会员注册级别标识对应所选商品id，建议商品数据库清空后首先添加4个注册单商品
                ajax_return(1,'注册失败');
            }

           //写入订单

            $order['user_id'] = $id;
            $order['order_id'] = getOrderNum();
            $goods_info = M('goods')->find($param['level']);
            $order['pv_amount']=$goods_info['price']*0.8;
            $order['amount']=$goods_info['price'];
            $order['is_reg'] = 2;
            if(!M('order')->add($order)){
                ajax_return(1,'选择套餐失败');
            }
            ajax_return(0,'注册成功',U('Index/index'));


        }
        $this->assign('data',M('goods')->where(array('pro_type'=>1))->select());
        $this->display();
    }


    //绑定微信
    public function bing_wx()
    {
        if(IS_POST){
                $param =  I('post.');
                if(M('user')->save($param) === false){
                    ajax_return(1,'绑定失败');
                }
                ajax_return(0,'绑定成功');
        }else{
            $this->display();
        }
    }

    //微信登录
    public function wx_login(){
        if(session('User_yctr')){
            $this->redirect('Index/index');
        }
        $open_id = 'xxx';
        if($info =M('user')->where(array('open_id'=>$open_id))->find()){
                session('User_yctr',$info);
            $this->redirect('Index/index');
        }
    }



}