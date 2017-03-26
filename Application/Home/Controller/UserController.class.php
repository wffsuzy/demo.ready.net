<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/6 0006
 * Time: 15:47
 */
namespace Home\Controller;
use Admin\Model\UserModel;

class UserController extends BaseController
{

    private $user;
    public function __construct()
    {
        parent::__construct();
        $this->user = new UserModel();
    }

    //个人中心
    public function index()
    {
        $this->display();
    }
    // 购物车
    public function cart()
    {
        $join ='left join '.C('DB_PREFIX').'goods as g on g.id = c.goods_id';
        $map['c.user_id'] = $this->user_info['id'];
        $map['c.status'] = 1;
        $data = M('cart')->alias('c')->join($join)->order('c.create_time desc')->where($map)->field('g.*,c.*')->select();
        foreach ($data as $k => $v)
        {
            $data[$k]['all_amount'] = $v['num'] * $v['price'];

        }


        $this->assign('data',$data);
        $this->display();
    }
    //加入购物车

    public function addCart()
    {
        $map= I('post.');
        $map['user_id'] = $this->user_info['id'];
        $map['create_time'] = time();
        if(!M('cart')->add($map)){
            ajax_return(1,'加入购物车失败');
        }

        ajax_return(0,'加入购物车成功');

    }

    //立即购买
    public function ordering()
    {
        if(IS_POST){
            $param = I('post.');
            //从数据库读商品价格
            $info = M('goods')->find($param['goods_id']);
            $param['amount']  = $param['num'] * $info['price'];
            $param['pv_amount'] = $param['amount'] * 0.8;//暂时写死，PV可能会是活的
            $param['order_id'] = getOrderNum();
            $param['user_id'] = $this->user_info['id'];
            $param['create_time'] = time();
            if(!M('order')->add($param)){
                echo "<script>alert('提交订单失败');window.location.back(-2)</script>";
                    return;
            }
            $this->redirect(U('buying'),array('order_id'=>$param['order_id']));
        }
    }

    //购物车结算

    public function ordering_cart()
    {
        if(IS_POST){

        }
    }
    //支付页面
    public function buying()
    {
        $order = M('order');
        if(IS_POST){
                $param = I('post.');
                //校验密码
                $info = $this->user->getUserinfoById($this->user_info['id']);
                if(md5($param['password']) != $info['password2']){
                    ajax_return(1,'支付密码错误');
                }
                $map['user_id'] = $this->user_info['id'];
                $map['order_id'] = $param['order_id'];
                if(!$order->where($map)->find()){  //校验订单
                    ajax_return(1,'找不到订单');
                }

                    //todo 扣款

            //更改订单状态
                $where['order_id'] = $param['order_id'];
                $where['status'] = 2;
                $where['create_time'] = time();
                if($order->save($where) === false){
                    ajax_return(1,'支付失败');
                }
                ajax_return(0,'提交成功');
        }else{
            $this->assign('order_id',I('get.order_id'));
            $this->display();
        }

    }



    //修改密码
    public function change_password()
    {
        if(IS_POST){
            $param =  I('post.');
            $info = $this->user->getUserinfoById($this->user_info['id']);
            if($param['old_password'] != $info['password']){
                ajax_return(1,'旧密码错误');
            }

            $param['id'] = $this->user_info['id'];
            $param['password'] = md5($param['password']);
            if($this->user->save($param) === false){
                ajax_return(1,'保存失败');
            }
            ajax_return(0,'保存成功',U('info'));
        }else{
            $this->display();
        }
    }



    //提现
    public function withdraw()
    {
        if(IS_POST){

        }else{
            $this->display();
        }
    }
    //我的信息

    public function info()
    {
        if(IS_POST){
            $param = I('post.');
            $param['id'] =  $this->user_info['id'];
            if(M('user')->save($param) === false){
                ajax_return(1,'修改失败');
            }
            ajax_return(0,'修改成功',U('index'));
        }else{

            $user_info =$this->user->getUserinfoById($this->user_info['id']);
            $this->assign('user_info',$user_info);
            $this->display();
        }

    }

    //订单列表

    public function orderList()
    {
        $map['status'] = I('get.status',0);
        $map['user_id'] = $this->user_info['id'];
        $this->display();
    }

}