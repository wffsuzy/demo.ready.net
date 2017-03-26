<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/6 0006
 * Time: 16:27
 */

namespace Admin\Controller;



use Admin\Model\OrderModel;

class OrderController extends BaseController
{

    protected $order;
    public function __construct()
    {
        parent::__construct();
        $this->order =  new OrderModel();
    }
    //


    public function orderlist()
    {
        $this->assign('data',$this->order->select());
        $this->display();
    }


    public function edit_order()
    {
        $this->assign('data',M('order')->find(I('get.id')));
        $this->display();
    }

    //导出订单
    public function exportOrder()
    {
        $xlsName = 'Order';
        $xlsCell = array(
            ['id','帐号序列'],
            ['order_id','订单编号']

        );
        $data = M('order')->field('id,order_id')->select();
        exportExcel('order',$xlsCell,$data);
    }

    public function test()
    {
        include 'smsapi.fun.php';
        $uid = 'tianrui';
        $pwd = 'b167d0f2f913b8843a491ce9d02bfaf5';
        $mobile  = I('mobile');
        $mobile  = 13004488228;
      //  $code = randNumber();
        $code = 4444;
//       $data['tel'] = $mobile;
//        $data['code'] = $code;
//        M('msg_list')->add($data);
//
        $content = '【尚品惠】您的验证码是'.$code.',请于5分钟之内在注册页面中输入，如非本人，请勿理会，谢谢。';
        $content1=urlencode(mb_convert_encoding($content ,"gb2312","UTF-8"));
        $res = sendSMS($uid,$pwd,$mobile,$content1);
        ajax_return(1,'xxx',$res);
        $this->ajaxReturn('发送成功,请查看手机'.$res);
    }

}