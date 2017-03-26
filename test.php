<?php
//勿动
traceHttp();
define("TOKEN", 'mzs');
define("APPID", 'wxc3bbeac466ccc165');
define("APPSECRET", '200c7a94a01d5a5f75105fa7365170cb');

$wechatObj = new wechatCallbackapiTest();
if (isset($_GET['echostr'])) {
    $wechatObj->valid();
}else{
    $wechatObj->responseMsg();
}

class wechatCallbackapiTest
{
    public function _initialize(){
        $con = mysql_connect("127.0.0.1","root","qazwsx123456");
        mysql_select_db("sh0317", $cong);
        mysql_query("set names 'utf8'");
        if (!$con)
          {
          die('Could not connect: ' . mysql_error());
          }
          echo $con;
    }


    public function valid()
    {
        $echoStr = $_GET["echostr"];
        if($this->checkSignature()){
            echo $echoStr;
            exit;
        }
    }

    private function checkSignature()
    {
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];

        $token = TOKEN;
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );

        if( $tmpStr == $signature ){
            return true;
        }else{
            return false;
        }
    }

    public function responseMsg(){
        $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];

        if (!empty($postStr)){
            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $fromUsername = $postObj->FromUserName;
            $toUsername = $postObj->ToUserName;
            $eventKey = $postObj->EventKey;
            $ticket = $postObj->Ticket;
            $keyword = trim($postObj->Content);

            $time = time();
            $textTpl = "<xml>
                        <ToUserName><![CDATA[%s]]></ToUserName>
                        <FromUserName><![CDATA[%s]]></FromUserName>
                        <CreateTime>%s</CreateTime>
                        <MsgType><![CDATA[%s]]></MsgType>
                        <Content><![CDATA[%s]]></Content>
                        <FuncFlag>0</FuncFlag>
                        </xml>";
            // 用户已关注时的事件推送
            $SCANON = "<xml>
                        <ToUserName><![CDATA[toUser]]></ToUserName>
                        <FromUserName><![CDATA[FromUser]]></FromUserName>
                        <CreateTime>123456789</CreateTime>
                        <MsgType><![CDATA[event]]></MsgType>
                        <Event><![CDATA[SCAN]]></Event>
                        <EventKey><![CDATA[SCENE_VALUE]]></EventKey>
                        <Ticket><![CDATA[TICKET]]></Ticket>
                        </xml>";  
            // 用户未关注时，进行关注后的事件推送
            $SCANOFF = "<xml>
                        <ToUserName><![CDATA[toUser]]></ToUserName>
                        <FromUserName><![CDATA[FromUser]]></FromUserName>
                        <CreateTime>123456789</CreateTime>
                        <MsgType><![CDATA[event]]></MsgType>
                        <Event><![CDATA[subscribe]]></Event>
                        <EventKey><![CDATA[123123]]></EventKey>
                        <Ticket><![CDATA[TICKET]]></Ticket>
                        </xml>";          

            $ev = $postObj->Event;
            if ($ev == "subscribe"){
                $msgType = "text";
                $access_token = $this->access_token();
                $openid = $fromUsername;
                $jsoninfo = $this->getWxuserinfo($access_token, $openid);
                //用户首次关注时数据
                $sq=mysql_query("select openid from weixin_admin where openid='$openid'");
                $re=mysql_fetch_array($sq);
                $count = count($re['openid']);
                if($count>0){
                    $contentStr = $jsoninfo['nickname'].'您好，欢迎再次加入商城！感谢你对本商城的关注';
                }else{
                if(empty($ticket)){//直接关注 
                // $openid = $jsoninfo['openid'];
                // $sex = $jsoninfo['sex'];
                // $nickname = $jsoninfo['nickname'];
                // $city = $jsoninfo['city'];
                // $country = $jsoninfo['country'];
                // $province = $jsoninfo['province'];
                // $language = $jsoninfo['language'];
                // $headimgurl = $jsoninfo['headimgurl'];
                // $subscribe_time = $jsoninfo['subscribe_time'];
                // $remark = $jsoninfo['remark'];
                // $groupid = $jsoninfo['groupid'];
                // $usernames = $jsoninfo['openid'];
                // $time = time();
                // $sql="INSERT INTO weixin_admin(usernames,openid,sex,nickname,city,country,province,language,headimgurl,subscribe_time,remark,groupid) VALUES('$usernames','$openid','$sex','$nickname','$city','$country','$province','$language','$headimgurl','$subscribe_time','$remark','$groupid')";
                // mysql_query($sql);//借SQL语句插入数据


                // $sq_t2=mysql_query("select id from weixin_admin where openid='$openid'");//找出自己的id

                // $re_t2=mysql_fetch_array($sq_t2);
                //     //生成用户名17+id+random(4)
                //     $password = $random = $this->randomkeys(4);
                //     $username = '17'.$re_t2['id'].$random;
                //      $tuijain_level = $re_t2['id'].',16';
                //     $passwords = md5($password);
                // mysql_query("update weixin_admin set tuijain_level = '$tuijain_level',passwords = '$passwords',username = '$username',number='$password' where openid='$openid'");

                $contentStr = $jsoninfo['nickname'].'您好，欢迎加入商城！感谢你对本商城的关注';
                }else{//扫码关注
                // $openid = $jsoninfo['openid'];
                // $sex = $jsoninfo['sex'];
                // $nickname = $jsoninfo['nickname'];
                // $city = $jsoninfo['city'];
                // $country = $jsoninfo['country'];
                // $province = $jsoninfo['province'];
                // $language = $jsoninfo['language'];
                // $headimgurl = $jsoninfo['headimgurl'];
                // $subscribe_time = $jsoninfo['subscribe_time'];
                // $remark = $jsoninfo['remark'];
                // $groupid = $jsoninfo['groupid'];
                // $usernames = $jsoninfo['openid'];
                // $eventKey = substr($eventKey,8);
                // $time = time();
                // $sql="INSERT INTO weixin_admin(usernames,openid,sex,nickname,city,country,province,language,headimgurl,subscribe_time,remark,groupid,higher_member) VALUES('$usernames','$openid','$sex','$nickname','$city','$country','$province','$language','$headimgurl','$subscribe_time','$remark','$groupid','$eventKey')";
                // mysql_query($sql);//借SQL语句插入数据
                // $sq_t1=mysql_query("select tuijain_level,reward1,level from weixin_admin where id='$eventKey'");//找出自己的上级的推荐等级
                // $re_t1=mysql_fetch_array($sq_t1);
                // $sq_t2=mysql_query("select id from weixin_admin where openid='$openid'");//找出自己的id
                // $re_t2=mysql_fetch_array($sq_t2);
                //     //生成用户名17+id+random(4)
                //     $password = $random = $this->randomkeys(4);
                //     $username = '17'.$re_t2['id'].$random;
                // $tuijain_level = $re_t2['id'].','.$re_t1['tuijain_level'];
                // $passwords = md5($password);
                // mysql_query("update weixin_admin set tuijain_level = '$tuijain_level',passwords = '$passwords',username = '$username',number='$password'where openid='$openid'");

                // $data_con=mysql_query("select tuijian_level1,tuijian_level2,tuijian_level3 from weixin_config where id=1");
                // $re_con=mysql_fetch_array($data_con);//查配置
                // if($re_t1['level']='1'){
                //     $reward1 = $re_con['tuijian_level1']+$re_t1['reward1'];
                // }
                // elseif($re_t1['level']='2'){
                //     $reward1 = $re_con['tuijian_level2']+$re_t1['reward1'];
                // }
                // elseif($re_t1['level']='3'){
                //     $reward1 = $re_con['tuijian_level3']+$re_t1['reward1'];
                // }
                // else{
                //     $reward1 = '0';
                // }
                // mysql_query("update weixin_admin set reward1 = '$reward1' where id='$eventKey'");
                // .$username.' 密码为'.$password;
                $contentStr = $jsoninfo['nickname'].'您好，欢迎加入商城！感谢你对本商城的关注,你的用户名为';
                 }
                }
              $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
              echo $resultStr;
            }
            if($ev == "SCAN"){
                $msgType = "text";
                $contentStr = '扫码操作';
                $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                echo $resultStr;
            }            
            if($keyword == "1" || $keyword == "1")
            {   
                $msgType = "text";
                $access_token = $this->access_token();
                $jsoninfo = $this->getWxuserinfo($access_token, $fromUsername);
                $contentStr = $access_token;
                $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                echo $resultStr;
            }
            if($keyword == "3" || $keyword == "3")
            {
                $msgType = "text";
                $openid = $fromUsername;
                $url = '11';
                $contentStr = $url;
                $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                echo $resultStr;
            }
            elseif($keyword == "2" || $keyword == "2")
            {   
                $msgType = "text";
                $openid = $fromUsername;
                $sq2=mysql_query("select id from weixin_admin where openid='$openid'");
                $re2=mysql_fetch_array($sq2);
                $admin_id = $re2['id'];
                $qrcodeurl = $this->getEwm($admin_id);
                $openid = $fromUsername;
                $sqlll=mysql_query("INSERT INTO weixin_qrcode(openid,qrcodeurl) VALUES('$admin_id','$qrcodeurl')");
                $ret=mysql_fetch_array($sqlll);
                $contentStr = '二维码生成成功！';
                $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                echo $resultStr;
            }
            else{
                $msgType = "text";
                $contentStr = '无效指令';
                $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                echo $resultStr;
            }
        }else{
            echo " ";
            exit;
        }
    }



    function access_token() {
        $sql=mysql_query("select dateline,acctoken from weixin_accesstoken where id=1");
        $ret=mysql_fetch_array($sql);
        $dateline = $ret['dateline'];
        $acctoken = $ret['acctoken'];
        $time = time();
        if (($time - $dateline) > '7200') {
            $appid = APPID;
            $appsecret = APPSECRET;
            $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$appsecret."";
            $ret_json = $this->https_request($url);
            $ret = json_decode($ret_json);
            if ($ret -> access_token) {
                $dateline = $time;
                $acctoken = $ret -> access_token;
                $sq = "UPDATE weixin_accesstoken SET acctoken = '$acctoken',dateline = '$dateline' WHERE id = '1'";
                $re=mysql_query($sq);
                return $acctoken;
            } 
        }
        return $acctoken;
    }

  public function getEwm($fqid,$type = 1){
    $ACCESS_TOKEN = $this->access_token();
    $url = $this->getQrcodeurl($ACCESS_TOKEN,$fqid,1);
    return $this->DownLoadQr2($url,time());
  }

    private function getQrcodeurl($ACCESS_TOKEN,$fqid,$type = 1){
     
    $url = 'https://api.weixin.qq.com/cgi-bin/qrcode/create?access_token='.$ACCESS_TOKEN;
    $qrcode= '{"action_name": "QR_LIMIT_SCENE", "action_info": {"scene": {"scene_id": '.$fqid.'}}}';
    $result = $this->http_post_data($url,$qrcode);
    $result = json_decode($result,true);
    if(!$result['ticket']){
      $this->ErrorLogger('getQrcodeurl falied. Error Info: getQrcodeurl get failed');
      exit();
    }
    $url = 'https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket='.$result['ticket'].'';
    return $url;
  }





    //下载二维码到服务器
  protected function DownLoadQr($url,$filestring){
    if($url == ""){
      return false;
    }
    $filename = $filestring.'.jpg';
    ob_start();
    readfile($url);
    $img=ob_get_contents();
    ob_end_clean();
    $size=strlen($img);
    //$fp2=fopen('./Uploads/qrcode/'.$filename,"a");
    $fp2=fopen('Public/qrcode/'.$filename,"a");

    if(fwrite($fp2,$img) === false){
      $this->ErrorLogger('dolwload image falied. Error Info: 无法写入图片');
      exit();
    }

    $a = fclose($fp2);

    return 'Public/qrcode/'.$filename;
  }


    protected function DownLoadQr2($url, $filestring)  //20160913wy解决
    {  

        if ($url == "") {  
            return false;  
        }  
        $filename = $filestring . '.jpg';  
        $img = $this->curl_get_contents($url);  
        $size = strlen($img);  
        $fp2 = fopen('Public/qrcode/'.$filename, "a");  
  
        if (fwrite($fp2, $img) === false) {  
            $this->ErrorLogger('dolwload image falied. Error Info: 无法写入图片');  
            exit();  
        }  
  
        fclose($fp2);  
        return 'Public/qrcode/'.$filename;  
    } 



        protected function curl_get_contents($url)  
    {  
        $ch = curl_init();  
        curl_setopt($ch, CURLOPT_URL, $url);  
        curl_setopt($ch, CURLOPT_TIMEOUT, 3);  
        curl_setopt($ch, CURLOPT_USERAGENT, '');  
        curl_setopt($ch, CURLOPT_REFERER,'');  
        @curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
        $r = curl_exec($ch);  
        curl_close($ch);  
        return $r;  
    } 

protected function http_post_data($url, $data_string) {
 
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
        'Content-Length: ' . strlen($data_string))
    );
    ob_start();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//20160913wy解决
    curl_exec($ch);

    if (curl_errno($ch)) {
      $this->ErrorLogger('curl falied. Error Info: '.curl_error($ch));

    }

    $return_content = ob_get_contents();

    ob_end_clean();
    $return_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    return $return_content;exit();
    return array($return_code, $return_content);
  }


  protected function https_post($url, $data = null) {
 
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL,$url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, $url);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
        'Content-Length: ' . strlen($data))
    );
    ob_start();
    curl_exec($curl);

    if (curl_errno($curl)) {
      $this->ErrorLogger('curl falied. Error Info: '.curl_error($curl));

    }

    $return_content = ob_get_contents();

    ob_end_clean();
    $return_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    return ;
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

  private function ErrorLogger($errMsg){
    $logger = fopen('./ErrorLog.txt', 'a+');
    fwrite($logger, date('Y-m-d H:i:s')." Error Info : ".$errMsg."\r\n");
  }
    Public function getWxuserinfo($access_token,$openid){
        $urls = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=".$access_token."&openid=".$openid."&lang=zh_CN";
        $results = $this->https_request($urls);
        $jsoninfo1 = json_decode($results, true);
        return $jsoninfo1;
    }


    function randomkeys($length){
        $pattern='1234567890';
        $key='';
        for($i=0;$i<$length;$i++)
        {
          $key .= $pattern{mt_rand(0,9)};    //生成php随机数
        }
        return $key;
    }


}

function traceHttp()
{
    logger("\n\nREMOTE_ADDR:".$_SERVER["REMOTE_ADDR"].(strstr($_SERVER["REMOTE_ADDR"],'101.226')? " FROM WeiXin": "Unknown IP"));
    logger("QUERY_STRING:".$_SERVER["QUERY_STRING"]);
}
function logger($log_content)
{
    if(isset($_SERVER['HTTP_APPNAME'])){   //SAE
        sae_set_display_errors(false);
        sae_debug($log_content);
        sae_set_display_errors(true);
    }else{ //LOCAL
        $max_size = 500000;
        $log_filename = "log.xml";
        if(file_exists($log_filename) and (abs(filesize($log_filename)) > $max_size)){unlink($log_filename);}
        file_put_contents($log_filename, date('Y-m-d H:i:s').$log_content."\r\n", FILE_APPEND);
    }
}
?>