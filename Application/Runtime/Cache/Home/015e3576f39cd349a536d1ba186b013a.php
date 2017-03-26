<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head lang="en">
		<meta charset="UTF-8">
		<title>注册</title>
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
								<li class="am-active"><a href="">用户注册</a></li>
								<a href="<?php echo U('login');?>" class="zcnext am-fr am-btn-default">登录</a>
							</ul>

							<div class="am-tabs-bd">
								<div class="am-tab-panel am-active">
									<form method="post" action="<?php echo U('register');?>">
										
							   <div class="user-email">
										<label for="email"><i class="am-icon-envelope-o"></i></label>
										<input type="text" name="username" required id="username" placeholder="请输入用户名">
                 </div>										
                 <div class="user-pass">
								    <label for="password"><i class="am-icon-lock"></i></label>
								    <input type="password" name="password" required id="password" placeholder="设置密码">
                 </div>										
                 <div class="user-pass">
								    <label for="passwordRepeat"><i class="am-icon-lock"></i></label>
								    <input type="password"  id="passwordRepeat" required placeholder="确认密码">
                 </div>

										<div class="user-email">
											<label for="email"><i class="am-icon-envelope-o"></i></label>
											<input type="text" name="higher_id" required id="email" placeholder="请输入推荐人帐号">
										</div>
										<div class="user-email">
											<label for="email"><i class="am-icon-envelope-o"></i></label>
											<input type="text" name="service_id" required id="email1" placeholder="请输入服务中心帐号">
										</div>
										<div class="user-email">
											<label for="email"><i class="am-icon-envelope-o"></i></label>
											<input type="text" name="node_id" required id="email2" placeholder="请输入结点人帐号">
										</div>
										<div class="am-form-group am-form-select">
											<?php  ?>
											<select name="level" style="width: 100%;height: 30px">
												<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>@<?php echo ($key+1); ?>"><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
											</select>
										</div>
										<div class="am-cf">
											<input type="submit" name="" id="btn" value="注册" class="am-btn am-btn-primary am-btn-sm am-fl">
										</div>
									</form>
                 


								</div>
							</div>
						</div>

				</div>
			</div>
			<script>
				$(function () {
					$('form').submit(function (e) {
					    if($('#password').val() != $('#passwordRepeat').val()){
                            alert('两次密码不一致');
                            e.preventDefault();
						}
                        e.preventDefault();
					    $.post($('form').attr('action'),$('form').serialize(),function (data) {
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