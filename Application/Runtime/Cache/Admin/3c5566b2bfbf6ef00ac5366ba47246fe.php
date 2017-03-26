<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>管理员登录</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="alternate icon" type="image/png" href="/demo.ready.net/Public/Admin/assets/i/favicon.png">
  <link rel="stylesheet" href="/demo.ready.net/Public/Admin/assets/css/amazeui.min.css"/>
  <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
  </style>
</head>
<body>
<div class="header">
  <div class="am-g">
    <h1>Web Wide</h1>
  </div>
  <hr />
</div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
    <h3>管理员登录</h3>
    <hr>
    <div class="am-btn-group">
      <a href="#" class="am-btn am-btn-secondary am-btn-sm"><i class="am-icon-github am-icon-sm"></i> Github</a>
      <a href="#" class="am-btn am-btn-success am-btn-sm"><i class="am-icon-google-plus-square am-icon-sm"></i> Google+</a>
      <a href="#" class="am-btn am-btn-primary am-btn-sm"><i class="am-icon-stack-overflow am-icon-sm"></i> stackOverflow</a>
    </div>
    <br>
    <br>

    <form method="post" class="am-form" action="<?php echo U('Public/login');?>">
      <label for="username">用户名:</label>
      <input type="text" name="username" id="username" value="">
      <br>
      <label for="password">密码:</label>
      <input type="password" name="password" id="password" value="">
      <br>
      <br />
      <div class="am-cf">
        <input type="submit" id="sub" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm am-fl">
      </div>
    </form>
    <hr>
  </div>
</div>
<script src="/demo.ready.net/Public/common/js/jquery.min.js"></script>
<script src="/demo.ready.net/Public/lib/layer/layer.js"></script>
<script>
$(function () {
    $('form').submit(function (event) {
        event.preventDefault();
        var url = $('form').attr('action');
        $.post(url,$('form').serialize(),function (data) {
            layer.msg(data.msg);
            if(data.code){
                return false;
            }else{
                window.location.href=data.data;
            }
        },'json')
    })
})
</script>
</body>
</html>