<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<title>首页</title>

	<link href="/demo.ready.net/Public/Admin/assets/css/amazeui.css" rel="stylesheet" type="text/css" />

	<link href="/demo.ready.net/Public/Home/css/basic/css/demo.css" rel="stylesheet" type="text/css" />

	<link href="/demo.ready.net/Public/Home/css/hmstyle.css" rel="stylesheet" type="text/css"/>
	<link href="/demo.ready.net/Public/Home/css/skin.css" rel="stylesheet" type="text/css" />
	<script src="/demo.ready.net/Public/Admin/assets/js/jquery.min.js"></script>
	<script src="/demo.ready.net/Public/Admin/assets/js/amazeui.js"></script>

</head>

<body>
<div class="hmtop">
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

	<div class="nav white">
		<div class="logo"><img src="/demo.ready.net/Public/Home/images/logo.png" /></div>
		<div class="logoBig">
			<li><img src="/demo.ready.net/Public/Home/images/logobig.png" /></li>
		</div>

		<div class="search-bar pr">
			<a name="index_none_header_sysc" href="#"></a>
			<form>
				<input id="searchInput" name="index_none_header_sysc" type="text" placeholder="搜索" autocomplete="off">
				<input id="ai-topsearch" class="submit am-btn" value="搜索" index="1" type="submit">
			</form>
		</div>
	</div>

	<div class="clear"></div>
</div>
<div class="banner">
	<!--轮播 -->
	<div class="am-slider am-slider-default scoll" data-am-flexslider id="demo-slider-0">
		<ul class="am-slides">
			<li class="banner1"><a href="introduction.html"><img src="/demo.ready.net/Public/Home/images/ad1.jpg" /></a></li>
			<li class="banner2"><a><img src="/demo.ready.net/Public/Home/images/ad2.jpg" /></a></li>
			<li class="banner3"><a><img src="/demo.ready.net/Public/Home/images/ad3.jpg" /></a></li>
			<li class="banner4"><a><img src="/demo.ready.net/Public/Home/images/ad4.jpg" /></a></li>

		</ul>
	</div>
	<div class="clear"></div>
</div>
<div class="shopNav">
	<div class="slideall">

		<div class="long-title"><span class="all-goods">全部分类</span></div>
		<div class="nav-cont">
			<ul>
				<li class="index"><a href="#">首页</a></li>
				<li class="qc"><a href="#">闪购</a></li>
				<li class="qc"><a href="#">限时抢</a></li>
				<li class="qc"><a href="#">团购</a></li>
				<li class="qc last"><a href="#">大包装</a></li>
			</ul>
			<div class="nav-extra">
				<i class="am-icon-user-secret am-icon-md nav-user"></i><b></b>我的福利
				<i class="am-icon-angle-right" style="padding-left: 10px;"></i>
			</div>
		</div>

		<!--侧边导航 -->
		<div id="nav" class="navfull">
			<div class="area clearfix">
				<div class="category-content" id="guide_2">

					<div class="category">
						<ul class="category-list" id="js_climit_li">
							<li class="appliance js_toggle relative first">
								<div class="category-info">
									<h3 class="category-name b-category-name"><i><img src="/demo.ready.net/Public/Home/images/cake.png"></i><a class="ml-22" title="点心">点心/蛋糕</a></h3>
									<em>&gt;</em></div>
								<div class="menu-item menu-in top">
									<div class="area-in">
										<div class="area-bg">
											<div class="menu-srot">
												<div class="sort-side">
													<dl class="dl-sort">
														<dt><span title="蛋糕">蛋糕</span></dt>
														<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
														<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
														<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
														<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
														<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
														<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
														<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
														<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
														<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="蛋糕">点心</span></dt>
														<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
														<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
														<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
														<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
														<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
														<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
														<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
														<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
														<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
													</dl>

												</div>
												<div class="brand-side">
													<dl class="dl-sort"><dt><span>实力商家</span></dt>
														<dd><a rel="nofollow" title="呵官方旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >呵官方旗舰店</span></a></dd>
														<dd><a rel="nofollow" title="格瑞旗舰店" target="_blank" href="#" rel="nofollow"><span >格瑞旗舰店</span></a></dd>
														<dd><a rel="nofollow" title="飞彦大厂直供" target="_blank" href="#" rel="nofollow"><span  class="red" >飞彦大厂直供</span></a></dd>
														<dd><a rel="nofollow" title="红e·艾菲妮" target="_blank" href="#" rel="nofollow"><span >红e·艾菲妮</span></a></dd>
														<dd><a rel="nofollow" title="本真旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >本真旗舰店</span></a></dd>
														<dd><a rel="nofollow" title="杭派女装批发网" target="_blank" href="#" rel="nofollow"><span  class="red" >杭派女装批发网</span></a></dd>
													</dl>
												</div>
											</div>
										</div>
									</div>
								</div>
								<b class="arrow"></b>
							</li>
							<li class="appliance js_toggle relative">
								<div class="category-info">
									<h3 class="category-name b-category-name"><i><img src="/demo.ready.net/Public/Home/images/cookies.png"></i><a class="ml-22" title="饼干、膨化">饼干/膨化</a></h3>
									<em>&gt;</em></div>
								<div class="menu-item menu-in top">
									<div class="area-in">
										<div class="area-bg">
											<div class="menu-srot">
												<div class="sort-side">
													<dl class="dl-sort">
														<dt><span title="饼干">饼干</span></dt>
														<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
														<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
														<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
														<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
														<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="薯片">薯片</span></dt>
														<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
														<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
														<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
														<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
														<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
														<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
														<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
														<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
														<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="蛋糕">虾条</span></dt>
														<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
														<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
														<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
														<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
														<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
														<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
														<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
														<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
														<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
													</dl>
												</div>
												<div class="brand-side">
													<dl class="dl-sort"><dt><span>实力商家</span></dt>
														<dd><a rel="nofollow" title="YYKCLOT" target="_blank" href="#" rel="nofollow"><span  class ="red" >YYKCLOT</span></a></dd>
														<dd><a rel="nofollow" title="池氏品牌男装" target="_blank" href="#" rel="nofollow"><span  class ="red" >池氏品牌男装</span></a></dd>
														<dd><a rel="nofollow" title="男装日志" target="_blank" href="#" rel="nofollow"><span >男装日志</span></a></dd>
														<dd><a rel="nofollow" title="索比诺官方旗舰店" target="_blank" href="#" rel="nofollow"><span >索比诺官方旗舰店</span></a></dd>
														<dd><a rel="nofollow" title="onTTno傲徒" target="_blank" href="#" rel="nofollow"><span  class ="red" >onTTno傲徒</span></a></dd>
														<dd><a rel="nofollow" title="玛狮路男装旗舰店" target="_blank" href="#" rel="nofollow"><span >玛狮路男装旗舰店</span></a></dd>
														<dd><a rel="nofollow" title="劳威特品牌男装" target="_blank" href="#" rel="nofollow"><span >劳威特品牌男装</span></a></dd>
														<dd><a rel="nofollow" title="卡斯郎世家批发城" target="_blank" href="#" rel="nofollow"><span  class ="red" >卡斯郎世家批发城</span></a></dd>
													</dl>
												</div>
											</div>
										</div>
									</div>
								</div>
								<b class="arrow"></b>
							</li>
							<li class="appliance js_toggle relative">
								<div class="category-info">
									<h3 class="category-name b-category-name"><i><img src="/demo.ready.net/Public/Home/images/meat.png"></i><a class="ml-22" title="熟食、肉类">熟食/肉类</a></h3>
									<em>&gt;</em></div>
								<div class="menu-item menu-in top">
									<div class="area-in">
										<div class="area-bg">
											<div class="menu-srot">
												<div class="sort-side">
													<dl class="dl-sort">
														<dt><span title="猪肉脯">猪肉脯</span></dt>
														<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
														<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
														<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
														<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
														<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="牛肉丝">牛肉丝</span></dt>
														<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
														<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
														<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
														<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
														<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="小香肠">小香肠</span></dt>
														<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
														<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
														<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
														<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
														<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
													</dl>
												</div>
												<div class="brand-side">
													<dl class="dl-sort"><dt><span>实力商家</span></dt>
														<dd><a rel="nofollow" title="花颜巧语 " target="_blank" href="#" rel="nofollow"><span  class="red" >花颜巧语 </span></a></dd>
														<dd><a rel="nofollow" title="糖衣小屋" target="_blank" href="#" rel="nofollow"><span >糖衣小屋</span></a></dd>
														<dd><a rel="nofollow" title="卡拉迪克  " target="_blank" href="#" rel="nofollow"><span  class="red" >卡拉迪克  </span></a></dd>
														<dd><a rel="nofollow" title="暖春童话 " target="_blank" href="#" rel="nofollow"><span >暖春童话 </span></a></dd>
														<dd><a rel="nofollow" title="华盛童装批发行 " target="_blank" href="#" rel="nofollow"><span >华盛童装批发行 </span></a></dd>
														<dd><a rel="nofollow" title="奈仕华童装旗舰店" target="_blank" href="#" rel="nofollow"><span >奈仕华童装旗舰店</span></a></dd>
														<dd><a rel="nofollow" title="斑蒂尼BONDYNI" target="_blank" href="#" rel="nofollow"><span  class="red" >斑蒂尼BONDYNI</span></a></dd>
														<dd><a rel="nofollow" title="猫儿朵朵 " target="_blank" href="#" rel="nofollow"><span >猫儿朵朵 </span></a></dd>
														<dd><a rel="nofollow" title="童衣阁" target="_blank" href="#" rel="nofollow"><span  class="red" >童衣阁</span></a></dd>
													</dl>
												</div>
											</div>
										</div>
									</div>
								</div>
								<b class="arrow"></b>
							</li>
							<li class="appliance js_toggle relative">
								<div class="category-info">
									<h3 class="category-name b-category-name"><i><img src="/demo.ready.net/Public/Home/images/bamboo.png"></i><a class="ml-22" title="素食、卤味">素食/卤味</a></h3>
									<em>&gt;</em></div>
								<div class="menu-item menu-in top">
									<div class="area-in">
										<div class="area-bg">
											<div class="menu-srot">
												<div class="sort-side">
													<dl class="dl-sort">
														<dt><span title="豆干">豆干</span></dt>
														<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
														<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
														<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
														<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="干笋">干笋</span></dt>
														<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
														<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
														<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
														<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="鸭脖">鸭脖</span></dt>
														<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
														<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
														<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
														<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
														<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
														<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
														<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
														<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
														<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
													</dl>
												</div>
												<div class="brand-side">
													<dl class="dl-sort"><dt><span>实力商家</span></dt>
														<dd><a rel="nofollow" title="歌芙品牌旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >歌芙品牌旗舰店</span></a></dd>
														<dd><a rel="nofollow" title="爱丝蓝内衣厂" target="_blank" href="#" rel="nofollow"><span >爱丝蓝内衣厂</span></a></dd>
														<dd><a rel="nofollow" title="香港优蓓尔防辐射" target="_blank" href="#" rel="nofollow"><span >香港优蓓尔防辐射</span></a></dd>
														<dd><a rel="nofollow" title="蓉莉娜内衣批发" target="_blank" href="#" rel="nofollow"><span >蓉莉娜内衣批发</span></a></dd>
													</dl>
												</div>
											</div>
										</div>
									</div>
								</div>
								<b class="arrow"></b>
							</li>
							<li class="appliance js_toggle relative">
								<div class="category-info">
									<h3 class="category-name b-category-name"><i><img src="/demo.ready.net/Public/Home/images/nut.png"></i><a class="ml-22" title="坚果、炒货">坚果/炒货</a></h3>
									<em>&gt;</em></div>
								<div class="menu-item menu-in top">
									<div class="area-in">
										<div class="area-bg">
											<div class="menu-srot">
												<div class="sort-side">
													<dl class="dl-sort">
														<dt><span title="蛋糕">坚果</span></dt>
														<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
														<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
														<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
														<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
														<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
														<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
														<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
														<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
														<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="蛋糕">锅巴</span></dt>
														<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
														<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
														<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
														<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
														<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
														<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
														<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
														<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
														<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
													</dl>
												</div>
												<div class="brand-side">
													<dl class="dl-sort"><dt><span>实力商家</span></dt>
														<dd><a rel="nofollow" title="呵呵嘿官方旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >呵呵嘿官方旗舰店</span></a></dd>
														<dd><a rel="nofollow" title="格瑞旗舰店" target="_blank" href="#" rel="nofollow"><span >格瑞旗舰店</span></a></dd>
														<dd><a rel="nofollow" title="飞彦大厂直供" target="_blank" href="#" rel="nofollow"><span  class="red" >飞彦大厂直供</span></a></dd>
														<dd><a rel="nofollow" title="红e·艾菲妮" target="_blank" href="#" rel="nofollow"><span >红e·艾菲妮</span></a></dd>
														<dd><a rel="nofollow" title="本真旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >本真旗舰店</span></a></dd>
														<dd><a rel="nofollow" title="杭派女装批发网" target="_blank" href="#" rel="nofollow"><span  class="red" >杭派女装批发网</span></a></dd>
														<dd><a rel="nofollow" title="华伊阁旗舰店" target="_blank" href="#" rel="nofollow"><span >华伊阁旗舰店</span></a></dd>
														<dd><a rel="nofollow" title="独家折扣旗舰店" target="_blank" href="#" rel="nofollow"><span >独家折扣旗舰店</span></a></dd>
													</dl>
												</div>
											</div>
										</div>
									</div>
								</div>
								<b class="arrow"></b>
							</li>
							<li class="appliance js_toggle relative">
								<div class="category-info">
									<h3 class="category-name b-category-name"><i><img src="/demo.ready.net/Public/Home/images/candy.png"></i><a class="ml-22" title="糖果、蜜饯">糖果/蜜饯</a></h3>
									<em>&gt;</em></div>
								<div class="menu-item menu-in top">
									<div class="area-in">
										<div class="area-bg">
											<div class="menu-srot">
												<div class="sort-side">
													<dl class="dl-sort">
														<dt><span title="糖果">糖果</span></dt>
														<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
														<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
														<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
														<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
														<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
														<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
														<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
														<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
														<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="蜜饯">蜜饯</span></dt>
														<dd><a title="猕猴桃干" href="#"><span>猕猴桃干</span></a></dd>
														<dd><a title="糖樱桃" href="#"><span>糖樱桃</span></a></dd>
														<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
														<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
														<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
														<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
														<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
														<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
														<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
													</dl>
												</div>
												<div class="brand-side">
													<dl class="dl-sort"><dt><span>实力商家</span></dt>
														<dd><a rel="nofollow" title="YYKCLOT" target="_blank" href="#" rel="nofollow"><span  class ="red" >YYKCLOT</span></a></dd>
														<dd><a rel="nofollow" title="池氏品牌男装" target="_blank" href="#" rel="nofollow"><span  class ="red" >池氏品牌男装</span></a></dd>
														<dd><a rel="nofollow" title="男装日志" target="_blank" href="#" rel="nofollow"><span >男装日志</span></a></dd>
														<dd><a rel="nofollow" title="索比诺官方旗舰店" target="_blank" href="#" rel="nofollow"><span >索比诺官方旗舰店</span></a></dd>
														<dd><a rel="nofollow" title="onTTno傲徒" target="_blank" href="#" rel="nofollow"><span  class ="red" >onTTno傲徒</span></a></dd>
														<dd><a rel="nofollow" title="卡斯郎世家批发城" target="_blank" href="#" rel="nofollow"><span  class ="red" >卡斯郎世家批发城</span></a></dd>
													</dl>
												</div>
											</div>
										</div>
									</div>
								</div>
								<b class="arrow"></b>
							</li>
							<li class="appliance js_toggle relative">
								<div class="category-info">
									<h3 class="category-name b-category-name"><i><img src="/demo.ready.net/Public/Home/images/chocolate.png"></i><a class="ml-22" title="巧克力">巧克力</a></h3>
									<em>&gt;</em></div>
								<div class="menu-item menu-in top">
									<div class="area-in">
										<div class="area-bg">
											<div class="menu-srot">
												<div class="sort-side">
													<dl class="dl-sort">
														<dt><span title="蛋糕">巧克力</span></dt>
														<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
														<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
														<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
														<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
														<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
														<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
														<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
														<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
														<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="蛋糕">果冻</span></dt>
														<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
														<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
														<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
														<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
														<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
														<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
														<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
														<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
														<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
													</dl>
												</div>
												<div class="brand-side">
													<dl class="dl-sort"><dt><span>实力商家</span></dt>
														<dd><a rel="nofollow" title="花颜巧语 " target="_blank" href="#" rel="nofollow"><span  class="red" >花颜巧语 </span></a></dd>
														<dd><a rel="nofollow" title="糖衣小屋" target="_blank" href="#" rel="nofollow"><span >糖衣小屋</span></a></dd>
														<dd><a rel="nofollow" title="卡拉迪克  " target="_blank" href="#" rel="nofollow"><span  class="red" >卡拉迪克  </span></a></dd>
														<dd><a rel="nofollow" title="暖春童话 " target="_blank" href="#" rel="nofollow"><span >暖春童话 </span></a></dd>
														<dd><a rel="nofollow" title="华盛童装批发行 " target="_blank" href="#" rel="nofollow"><span >华盛童装批发行 </span></a></dd>
														<dd><a rel="nofollow" title="奈仕华童装旗舰店" target="_blank" href="#" rel="nofollow"><span >奈仕华童装旗舰店</span></a></dd>
														<dd><a rel="nofollow" title="斑蒂尼BONDYNI" target="_blank" href="#" rel="nofollow"><span  class="red" >斑蒂尼BONDYNI</span></a></dd>
														<dd><a rel="nofollow" title="童衣阁" target="_blank" href="#" rel="nofollow"><span  class="red" >童衣阁</span></a></dd>
													</dl>
												</div>
											</div>
										</div>
									</div>
								</div>
								<b class="arrow"></b>
							</li>
							<li class="appliance js_toggle relative">
								<div class="category-info">
									<h3 class="category-name b-category-name"><i><img src="/demo.ready.net/Public/Home/images/fish.png"></i><a class="ml-22" title="海味、河鲜">海味/河鲜</a></h3>
									<em>&gt;</em></div>
								<div class="menu-item menu-in top">
									<div class="area-in">
										<div class="area-bg">
											<div class="menu-srot">
												<div class="sort-side">
													<dl class="dl-sort">
														<dt><span title="海带丝">海带丝</span></dt>
														<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
														<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
														<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
														<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
														<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
														<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
														<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
														<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
														<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="小鱼干">小鱼干</span></dt>
														<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
														<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
														<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
														<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="鱿鱼丝">鱿鱼丝</span></dt>
														<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
														<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
														<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
														<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
													</dl>
												</div>
												<div class="brand-side">
													<dl class="dl-sort"><dt><span>实力商家</span></dt>
														<dd><a rel="nofollow" title="歌芙品牌旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >歌芙品牌旗舰店</span></a></dd>
														<dd><a rel="nofollow" title="爱丝蓝内衣厂" target="_blank" href="#" rel="nofollow"><span >爱丝蓝内衣厂</span></a></dd>
														<dd><a rel="nofollow" title="炫点服饰" target="_blank" href="#" rel="nofollow"><span >炫点服饰</span></a></dd>
														<dd><a rel="nofollow" title="雪茵美内衣厂批发" target="_blank" href="#" rel="nofollow"><span >雪茵美内衣厂批发</span></a></dd>
														<dd><a rel="nofollow" title="金钻夫人" target="_blank" href="#" rel="nofollow"><span >金钻夫人</span></a></dd>
														<dd><a rel="nofollow" title="伊美莎内衣" target="_blank" href="#" rel="nofollow"><span  class="red" >伊美莎内衣</span></a></dd>
														<dd><a rel="nofollow" title="粉客内衣旗舰店" target="_blank" href="#" rel="nofollow"><span >粉客内衣旗舰店</span></a></dd>
														<dd><a rel="nofollow" title="泽芳行旗舰店" target="_blank" href="#" rel="nofollow"><span >泽芳行旗舰店</span></a></dd>
														<dd><a rel="nofollow" title="彩婷" target="_blank" href="#" rel="nofollow"><span  class="red" >彩婷</span></a></dd>
														<dd><a rel="nofollow" title="黛兰希" target="_blank" href="#" rel="nofollow"><span >黛兰希</span></a></dd>
														<dd><a rel="nofollow" title="香港优蓓尔防辐射" target="_blank" href="#" rel="nofollow"><span >香港优蓓尔防辐射</span></a></dd>
														<dd><a rel="nofollow" title="蓉莉娜内衣批发" target="_blank" href="#" rel="nofollow"><span >蓉莉娜内衣批发</span></a></dd>
													</dl>
												</div>
											</div>
										</div>
									</div>
								</div>
								<b class="arrow"></b>
							</li>
							<li class="appliance js_toggle relative">
								<div class="category-info">
									<h3 class="category-name b-category-name"><i><img src="/demo.ready.net/Public/Home/images/tea.png"></i><a class="ml-22" title="花茶、果茶">花茶/果茶</a></h3>
									<em>&gt;</em></div>
								<div class="menu-item menu-in top">
									<div class="area-in">
										<div class="area-bg">
											<div class="menu-srot">
												<div class="sort-side">
													<dl class="dl-sort">
														<dt><span title="蛋糕">蛋糕</span></dt>
														<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
														<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
														<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
														<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
														<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
														<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
														<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
														<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
														<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="蛋糕">点心</span></dt>
														<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
														<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
														<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
														<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
														<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
														<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
														<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
														<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
														<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
													</dl>
												</div>
												<div class="brand-side">
													<dl class="dl-sort"><dt><span>实力商家</span></dt>
														<dd><a title="今生只围你" target="_blank" href="#" rel="nofollow"><span >今生只围你</span></a></dd>
														<dd><a title="忆佳人" target="_blank" href="#" rel="nofollow"><span  class="red" >忆佳人</span></a></dd>
														<dd><a title="斐洱普斯" target="_blank" href="#" rel="nofollow"><span  class="red" >斐洱普斯</span></a></dd>
														<dd><a title="聚百坊" target="_blank" href="#" rel="nofollow"><span  class="red" >聚百坊</span></a></dd>
														<dd><a title="朵朵棉织直营店" target="_blank" href="#" rel="nofollow"><span >朵朵棉织直营店</span></a></dd>
													</dl>
												</div>
											</div>
										</div>
									</div>
								</div>
								<b class="arrow"></b>
							</li>
							<li class="appliance js_toggle relative last">
								<div class="category-info">
									<h3 class="category-name b-category-name"><i><img src="/demo.ready.net/Public/Home/images/package.png"></i><a class="ml-22" title="品牌、礼包">品牌/礼包</a></h3>
									<em>&gt;</em></div>
								<div class="menu-item menu-in top">
									<div class="area-in">
										<div class="area-bg">
											<div class="menu-srot">
												<div class="sort-side">
													<dl class="dl-sort">
														<dt><span title="大包装">大包装</span></dt>
														<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
														<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
														<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
														<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
														<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
														<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
														<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
														<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
														<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
													</dl>
													<dl class="dl-sort">
														<dt><span title="两件套">两件套</span></dt>
														<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
														<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
														<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
														<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
														<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
														<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
														<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
														<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
														<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
													</dl>
												</div>
												<div class="brand-side">
													<dl class="dl-sort"><dt><span>实力商家</span></dt>
														<dd><a title="琳琅鞋业" target="_blank" href="#" rel="nofollow"><span >琳琅鞋业</span></a></dd>
														<dd><a title="宏利鞋业" target="_blank" href="#" rel="nofollow"><span >宏利鞋业</span></a></dd>
														<dd><a title="比爱靓点鞋业" target="_blank" href="#" rel="nofollow"><span >比爱靓点鞋业</span></a></dd>
														<dd><a title="浪人怪怪" target="_blank" href="#" rel="nofollow"><span >浪人怪怪</span></a></dd>
													</dl>
												</div>
											</div>
										</div>
									</div>
								</div>

							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>


		<!--轮播-->

		<script type="text/javascript">
            (function() {
                $('.am-slider').flexslider();
            });
            $(document).ready(function() {
                $("li").hover(function() {
                    $(".category-content .category-list li.first .menu-in").css("display", "none");
                    $(".category-content .category-list li.first").removeClass("hover");
                    $(this).addClass("hover");
                    $(this).children("div.menu-in").css("display", "block")
                }, function() {
                    $(this).removeClass("hover")
                    $(this).children("div.menu-in").css("display", "none")
                });
            })
		</script>



		<!--小导航 -->
		<div class="am-g am-g-fixed smallnav">
			<div class="am-u-sm-3">
				<a href="<?php echo U('index/classify');?>"><img
						src="/demo.ready.net/Public/Home/images/navsmall.jpg" />
					<div class="title">商品分类</div>
				</a>
			</div>
			<div class="am-u-sm-3">
				<a href="<?php echo U('all',array('area_id'=>4));?>"><img src="/demo.ready.net/Public/Home/images/huismall.jpg"
				/>
					<div class="title">复消专区</div>
				</a>
			</div>
			<div class="am-u-sm-3">
				<a href="<?php echo U('user/index');?>"><img
						src="/demo.ready.net/Public/Home/images/mansmall.jpg" />
					<div class="title">个人中心</div>
				</a>
			</div>
			<div class="am-u-sm-3">
				<a href="<?php echo U('all');?>"><img
						src="/demo.ready.net/Public/Home/images/moneysmall.jpg" />
					<div class="title">全部商品</div>
				</a>
			</div>

		</div>

		<!--走马灯 -->

		<div class="marqueen">
			<span class="marqueen-title">商城头条</span>
			<div class="demo">
				<ul>
					<?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="#"><span>[公告]</span><?php echo ($vo['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<script type="text/javascript">
        if ($(window).width() < 640) {
            function autoScroll(obj) {
                $(obj).find("ul").animate({
                    marginTop: "-39px"
                }, 500, function() {
                    $(this).css({
                        marginTop: "0px"
                    }).find("li:first").appendTo(this);
                })
            }
            $(function() {
                setInterval('autoScroll(".demo")', 3000);
            })
        }
	</script>
</div>
<div class="shopMainbg">
	<div class="shopMain" id="shopmain">

		<!--今日推荐 -->

		<div class="am-g am-g-fixed recommendation">
			<div class="clock am-u-sm-3" ">
			<img src="/demo.ready.net/Public/Home/images/2016.png "></img>
			<p>今日<br>推荐</p>
		</div>
		<div class="am-u-sm-4 am-u-lg-3 ">
			<div class="info ">
				<h3>真的有鱼</h3>
				<h4>开年福利篇</h4>
			</div>
			<div class="recommendationMain one">
				<a href="introduction.html"><img src="/demo.ready.net/Public/Home/images/tj.png "></img></a>
			</div>
		</div>
		<div class="am-u-sm-4 am-u-lg-3 ">
			<div class="info ">
				<h3>囤货过冬</h3>
				<h4>让爱早回家</h4>
			</div>
			<div class="recommendationMain two">
				<img src="/demo.ready.net/Public/Home/images/tj1.png "></img>
			</div>
		</div>
		<div class="am-u-sm-4 am-u-lg-3 ">
			<div class="info ">
				<h3>浪漫情人节</h3>
				<h4>甜甜蜜蜜</h4>
			</div>
			<div class="recommendationMain three">
				<img src="/demo.ready.net/Public/Home/images/tj2.png "></img>
			</div>
		</div>

	</div>
	<div class="clear "></div>
	<!--热门活动 -->

	<?php if(is_array($goodslist)): $i = 0; $__LIST__ = $goodslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="am-container activity">
			<div class="shopTitle ">
				<h4><a href="<?php echo U('all',array('area_id'=>$vo['id']));?>"><?php echo ($vo['area']); ?></a></h4>
				<span class="more ">
                              <a href="<?php echo U('all',array('area_id'=>$vo['id']));?>">更多<i class="am-icon-angle-right" style="padding-left:10px ;" ></i></a>
                        </span>
			</div>
			<div class="am-g am-g-fixed ">
				<?php if(is_array($vo['children'])): $i = 0; $__LIST__ = array_slice($vo['children'],0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><a class="am-u-sm-3 " href="<?php echo U('introduction',array('id'=>$vv['id']));?>">
						<div class="activityMain ">
							<img src="<?php echo ($vv['logopath']); ?>">
						</div>
						<div class="info ">
							<h3 style="overflow: hidden"><?php echo ($vv['name']); ?></h3>
						</div>
					</a><?php endforeach; endif; else: echo "" ;endif; ?>

			</div>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>

	<div class="clear "></div>








	<div class="footer ">
		<div class="footer-hd ">
			<p>
				<a href="# ">恒望科技</a>
				<b>|</b>
				<a href="# ">商城首页</a>
				<b>|</b>
				<a href="# ">支付宝</a>
				<b>|</b>
				<a href="# ">物流</a>
			</p>
		</div>
		<div class="footer-bd ">
			<p>
				<a href="# ">关于恒望</a>
				<a href="# ">合作伙伴</a>
				<a href="# ">联系我们</a>
				<a href="# ">网站地图</a>
				<em>© 2015-2025 Hengwang.com 版权所有</em>
			</p>
		</div>
	</div>

</div>
</div>
<!--引导 -->
<div class="navCir">
	<li><a href="<?php echo U('index/index');?>"><i class="am-icon-home "></i>首页
	</a></li>
	<li><a href="<?php echo U('index/classify');?>"><i class="am-icon-list"></i>分
		类</a></li>
	<li class="active"><a href="<?php echo U('user/cart');?>"><i class="am-icon-shopping-basket"></i>购物车</a></li>
	<li><a href="<?php echo U('user/index');?>"><i class="am-icon-user"></i>我的
	</a></li>
</div>
</body>

</html>