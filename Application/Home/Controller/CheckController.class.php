<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/24 0024
 * Time: 14:55
 */
namespace Home\Controller;
Vendor('WxpayV3.JSAPI');
class CheckController extends \Think\Controller
{

    public function index()
    {
        $tools = new \JsApiPay();
        $openid = $tools->GetOpenid();
        $map['open_id'] = $openid;
        if(($info = M('user')->where($map)->find())){
            session('User_yctr',$info);
            $this->redirect('Index/index');
        }else{
            $this->redirect('Public/login');
        }
    }


    public function bind_phone()
    {
        if(IS_POST){
            $user = M('user');
            $tools = new \JsApiPay();
            $openid = $tools->GetOpenid();
            $save['open_id'] = $openid;
            $where['username'] = I('post.username');
            $where['password'] = md5(I('post.password'));
            if(!($info = $user->where($where)->find())){
                ajax_return(1,'用户名不存在或者密码错误');
            }
            $save['id'] = $info['id'];
            if(M('user')->where($where)->save($save) === false){
                ajax_return(1,'绑定失败');
            }
            session('User_yctr',$info);
            ajax_return(0,'绑定成功',U('Index/index'));
        }

        $this->display();
    }

    public function access_token() {
        $con = mysql_connect("127.0.0.1","root","qazwsx123456");
        mysql_select_db("demoready", $con);
        mysql_query("set names 'UTF-8'");
        $sql=mysql_query("select dateline,acctoken from ms_weixin where id=1");
        $ret=mysql_fetch_array($sql);
        $dateline = $ret['dateline'];
        $acctoken = $ret['acctoken'];
        $time = time();
        if (($time - $dateline) > '7200') {
            $appid = C('appId');
            $appsecret = C('appscrete');
            $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$appsecret."";
            $ret_json = $this->https_request($url);
            $ret = json_decode($ret_json);
            if ($ret -> access_token) {
                $dateline = $time;
                $acctoken = $ret -> access_token;
                $sq = "UPDATE ms_weixin SET acctoken = '$acctoken',dateline = '$dateline' WHERE id = '1'";
                $re=mysql_query($sq);
                return $acctoken;
            }
        }
        return $acctoken;
    }


    Public function getWxuserinfo($access_token,$openid){
        $urls = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=".$access_token."&openid=".$openid."&lang=zh_CN";
        $results = $this->https_request($urls);
        $jsoninfo1 = json_decode($results, true);
        return $jsoninfo1;
    }

    public function https_request($url,$data = null){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        if (!empty($data)){
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($curl);
        curl_close($curl);
        return $output;
    }
}