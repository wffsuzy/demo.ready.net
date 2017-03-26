<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>购物车页面</title>

    <link href="/demo.ready.net/Public/Admin/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
    <link href="/demo.ready.net/Public/Home/css/basic/css/demo.css" rel="stylesheet" type="text/css" />
    <link href="/demo.ready.net/Public/Home/css/cartstyle.css" rel="stylesheet" type="text/css" />
    <link href="/demo.ready.net/Public/Home/css/optstyle.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="/demo.ready.net/Public/common/js/jquery.min.js"></script>

</head>

<body>

<!--顶部导航条 -->
<div class="am-container header">
    <ul class="message-l">
        <div class="topMessage">
            <div class="menu-hd">
                <a href="#" target="_top" class="h">亲，请登录</a>
                <a href="#" target="_top">免费注册</a>
            </div>
        </div>
    </ul>
    <ul class="message-r">
        <div class="topMessage home">
            <div class="menu-hd"><a href="#" target="_top" class="h">商城首页</a></div>
        </div>
        <div class="topMessage my-shangcheng">
            <div class="menu-hd MyShangcheng"><a href="#" target="_top"><i class="am-icon-user am-icon-fw"></i>个人中心</a></div>
        </div>
        <div class="topMessage mini-cart">
            <div class="menu-hd"><a id="mc-menu-hd" href="#" target="_top"><i class="am-icon-shopping-cart  am-icon-fw"></i><span>购物车</span><strong id="J_MiniCartNum" class="h">0</strong></a></div>
        </div>
        <div class="topMessage favorite">
            <div class="menu-hd"><a href="#" target="_top"><i class="am-icon-heart am-icon-fw"></i><span>收藏夹</span></a></div>
    </ul>
</div>

<!--悬浮搜索框-->



	<style>

	</style>
	<div class="nav white">
		<div class="logo"><img src="/demo.ready.net/Public/Home/images/logo.png" /></div>
		<div class="logoBig">
			<li><img src="/demo.ready.net/Public/Home/images/logobig.png" /></li>
		</div>

		<div class="search-bar pr">
			<a name="index_none_header_sysc" href="#"></a>
			<form>
				<input id="searchInput" name="index_none_header_sysc" type="text" placeholder="搜索" autocomplete="off">
				<input id="ai-topsearch" class="submit am-btn"  value="搜索" index="1" type="submit">
			</form>
		</div>
	</div>

	<div class="clear"></div>
	<ul class="am-list am-list-border" style="margin-top: 60px">
		<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('all',array('id'=>$vo['id']));?>"><i class="am-icon-pencil am-icon-fw"></i><?php echo ($vo['name']); ?><i style="float: right" class="am-icon-chevron-right"></i></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>


<!--引导 -->
<div class="navCir">
    <li><a href="<?php echo U('index/index');?>"><i class="am-icon-home "></i>首页</a></li>
    <li><a href="<?php echo U('index/classify');?>"><i class="am-icon-list"></i>分类</a></li>
    <li class="active"><a href="<?php echo U('user/cart');?>"><i class="am-icon-shopping-basket"></i>购物车</a></li>
    <li><a href="<?php echo U('user/index');?>"><i class="am-icon-user"></i>我的</a></li>
</div>

</body>

</html>