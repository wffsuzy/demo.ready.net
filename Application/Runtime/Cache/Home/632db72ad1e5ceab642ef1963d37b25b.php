<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>搜索页面</title>

    <link href="/demo.ready.net/Public/Admin/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
    <link href="/demo.ready.net/Public/Admin/assets/css/admin.css" rel="stylesheet" type="text/css" />

    <link href="/demo.ready.net/Public/Home/css/basic/css/demo.css" rel="stylesheet" type="text/css" />

    <link href="/demo.ready.net/Public/Home/css/seastyle.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="/demo.ready.net/Public/common/js/jquery.min.js"></script>
    <script type="text/javascript" src="/demo.ready.net/Public/Home/js/script.js"></script>
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
<b class="line"></b>
<div class="search">
    <div class="search-list">
        <div class="nav-table">
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
        </div>


        <div class="am-g am-g-fixed">
            <div class="am-u-sm-12 am-u-md-12">
                <div class="theme-popover">

                    <ul class="select">
                        <p class="title font-normal">
                            <span class="fl"></span>
                            <span class="total fl"><strong class="num"></strong></span>
                        </p>
                        <div class="clear"></div>
                        <li class="select-result">
                            <dl>
                                <dt>已选</dt>
                                <dd class="select-no"></dd>
                                <p class="eliminateCriteria">清除</p>
                            </dl>
                        </li>
                        <div class="clear"></div>
                        <li class="select-list">
                            <dl id="select1">
                                <dt class="am-badge am-round">综合排序</dt>

                                <div class="dd-conent">
                                    <dd><a href="#">价格从高到低</a></dd>
                                    <dd><a href="#">价格从高到低</a></dd>
                                </div>

                            </dl>
                        </li>
                        <li class="select-list">
                            <dl id="select2">
                                <dt class="am-badge am-round">商品类别</dt>
                                <div class="dd-conent">
                                    <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dd><a href="<?php echo U('all',array('type'=>$vo['id']));?>"><?php echo ($vo['name']); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>

                                </div>
                            </dl>
                        </li>
                        <li class="select-list">
                            <dl id="select3">
                                <dt class="am-badge am-round">商品属性</dt>
                                <div class="dd-conent">
                                   <?php if(is_array($area)): $i = 0; $__LIST__ = $area;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dd><a href="<?php echo U('all',array('area_id'=>$key));?>"><?php echo ($vo); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </dl>
                        </li>

                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="search-content">
                    <div class="sort">

                    </div>
                    <div class="clear"></div>

                    <ul class="am-avg-sm-2 am-avg-md-3 am-avg-lg-4 boxes">
                        <?php if(empty($data)): ?>暂无商品<?php endif; ?>
                        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                <a href="<?php echo U('index/introduction',array('id'=>$vo['id']));?>">
                                <div class="i-pic limit">
                                    <img src="<?php echo ($vo['logopath']); ?>" />
                                    <p class="title fl"><?php echo ($vo['name']); ?></p>
                                    <p class="price fl">
                                        <b>¥</b>
                                        <strong><?php echo ($vo['price']); ?></strong>
                                    </p>
                                    <p class="number fl">
                                        PV:<span>800</span>
                                    </p>
                                </div>
                                </a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>

                    </ul>
                </div>

                <!--分页 -->
                <!--<ul class="am-pagination am-pagination-right">-->
                    <!--<li class="am-disabled"><a href="#">&laquo;</a></li>-->
                    <!--<li class="am-active"><a href="#">1</a></li>-->
                    <!--<li><a href="#">2</a></li>-->
                    <!--<li><a href="#">3</a></li>-->
                    <!--<li><a href="#">4</a></li>-->
                    <!--<li><a href="#">5</a></li>-->
                    <!--<li><a href="#">&raquo;</a></li>-->
                <!--</ul>-->

            </div>
        </div>
    </div>

</div>

<!--引导 -->
<div class="navCir">
    <li><a href="<?php echo U('index/index');?>"><i class="am-icon-home "></i>首页</a></li>
    <li><a href="<?php echo U('index/classify');?>"><i class="am-icon-list"></i>分类</a></li>
    <li class="active"><a href="<?php echo U('user/cart');?>"><i class="am-icon-shopping-basket"></i>购物车</a></li>
    <li><a href="<?php echo U('user/index');?>"><i class="am-icon-user"></i>我的</a></li>
</div>

<!--菜单 -->

<script type="text/javascript" src="/demo.ready.net/Public/Home/css/basic/js/quick_links.js"></script>

<div class="theme-popover-mask"></div>

</body>

</html>