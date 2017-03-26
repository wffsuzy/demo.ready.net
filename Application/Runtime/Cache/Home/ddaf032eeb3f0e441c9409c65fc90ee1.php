<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title>用户登录</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<meta name="renderer" content="webkit">
	<meta http-equiv="Cache-Control" content="no-siteapp" />

	<link rel="stylesheet" href="/demo.lgwsh.net/Public/Admin/assets/css/amazeui.min.css" />
	<link href="/demo.lgwsh.net/Public/Home/css/dlstyle.css" rel="stylesheet" type="text/css">
	<script src="/demo.lgwsh.net/Public/Admin/assets/js/jquery.min.js"></script>
	<script src="/demo.lgwsh.net/Public/Admin/assets/js/amazeui.min.js"></script>

</head>

<body>

<div class="login-boxtitle">
	<a href="home/demo.html"><img alt="" src="/demo.lgwsh.net/Public/Home/images/logobig.png" /></a>
</div>

<div class="res-banner">
	<div class="res-main">
		<div class="login-banner-bg"><span></span><img src="/demo.lgwsh.net/Public/Home/images/big.jpg" /></div>
		<div class="login-box">

			<div class="am-tabs" id="doc-my-tabs">
				<ul class="am-tabs-nav am-nav am-nav-tabs am-nav-justify">
					<li class="am-active"><a href="">用户登录</a></li>
					<a href="<?php echo U('register');?>" class="zcnext am-fr am-btn-default">注册</a>
				</ul>

				<div class="am-tabs-bd">
					<div class="am-tab-panel am-active">
						<form method="post" action="<?php echo U('login');?>">
							<div class="user-email">
								<label for="email"><i class="am-icon-envelope-o"></i></label>
								<input type="text" name="username" required id="username" placeholder="请输入用户名">
							</div>
							<div class="user-pass">
								<label for="password"><i class="am-icon-lock"></i></label>
								<input type="password" name="password"  required id="password" placeholder="请输入密码">
							</div>
							<div class="am-cf">
								<input type="submit" name="" value="登录" class="am-btn am-btn-primary am-btn-sm am-fl">
							</div>
							<br>
							<?php $is_weixin = is_weixin(); ?>

							<?php if($is_weixin): ?><div class="am-cf">
								<input type="button" id="wx_login" name="" value="微信登录" class="am-btn am-btn-success am-btn-sm am-fl">
							</div><?php endif; ?>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
	<script>
		$(function () {

			var form = $('form');
			form.submit(function (e) {
				e.preventDefault();
				$.post(form.attr('action'),form.serialize(),function (data) {
					alert(data.msg);
					if(data.code){
							return;
					}else{
					    window.location.href=data.data;
					}
                },'json')
            });
        })
	</script>
</body>

</html>