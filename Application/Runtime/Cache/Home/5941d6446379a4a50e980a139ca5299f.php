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



    <?php  ?>
    <link type="text/css" href="/demo.ready.net/Public/Home/css/optstyle.css" rel="stylesheet" />
    <link type="text/css" href="/demo.ready.net/Public/Home/css/style.css" rel="stylesheet" />
    <script type="text/javascript" src="/demo.ready.net/Public/common/js/jquery.min.js"></script>
    <script type="text/javascript" src="/demo.ready.net/Public/Home/css/basic/js/quick_links.js"></script>
    <script type="text/javascript" src="/demo.ready.net/Public/Home/js/jquery.imagezoom.min.js"></script>
    <script type="text/javascript" src="/demo.ready.net/Public/Home/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="/demo.ready.net/Public/Home/js/list.js"></script>

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
    <b class="line"></b>
    <div class="listMain">

        <!--分类-->
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
        <ol class="am-breadcrumb am-breadcrumb-slash">
            <li><a href="<?php echo U('index/index');?>">首页</a></li>
            <li><a href="#">分类</a></li>
            <li class="am-active">内容</li>
        </ol>
        <script type="text/javascript">
            $(function() {});
            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider) {
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <div class="scoll">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <?php if(is_array($data['detailpath'])): $i = 0; $__LIST__ = $data['detailpath'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                <img src="<?php echo ($vo); ?>" title="pic" />
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>

                    </ul>
                </div>
            </section>
        </div>

        <!--放大镜-->

        <div class="item-inform">
            <div class="clearfixLeft" id="clearcontent">

                <div class="box">
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $(".jqzoom").imagezoom();
                            $("#thumblist li a").click(function() {
                                $(this).parents("li").addClass("tb-selected").siblings().removeClass("tb-selected");
                                $(".jqzoom").attr('src', $(this).find("img").attr("mid"));
                                $(".jqzoom").attr('rel', $(this).find("img").attr("big"));
                            });
                        });
                    </script>

                    <div class="tb-booth tb-pic tb-s310">
                        <a href="/demo.ready.net/Public/Home/images/01.jpg"><img src="/demo.ready.net/Public/Home/images/01_mid.jpg" alt="细节展示放大镜特效" rel="/demo.ready.net/Public/Home/images/01.jpg" class="jqzoom" /></a>
                    </div>
                    <ul class="tb-thumb" id="thumblist">
                        <li class="tb-selected">
                            <div class="tb-pic tb-s40">
                                <a href="#"><img src="/demo.ready.net/Public/Home/images/01_small.jpg" mid="/demo.ready.net/Public/Home/images/01_mid.jpg" big="/demo.ready.net/Public/Home/images/01.jpg"></a>
                            </div>
                        </li>
                        <li>
                            <div class="tb-pic tb-s40">
                                <a href="#"><img src="/demo.ready.net/Public/Home/images/02_small.jpg" mid="/demo.ready.net/Public/Home/images/02_mid.jpg" big="/demo.ready.net/Public/Home/images/02.jpg"></a>
                            </div>
                        </li>
                        <li>
                            <div class="tb-pic tb-s40">
                                <a href="#"><img src="/demo.ready.net/Public/Home/images/03_small.jpg" mid="/demo.ready.net/Public/Home/images/03_mid.jpg" big="/demo.ready.net/Public/Home/images/03.jpg"></a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="clear"></div>
            </div>

            <div class="clearfixRight">

                <!--规格属性-->
                <!--名称-->
                <div class="tb-detail-hd">
                    <h1>
                        <?php echo ($data['name']); ?>
                    </h1>
                </div>
                <div class="tb-detail-list">
                    <!--价格-->
                    <div class="tb-detail-price">
                        <li class="price iteminfo_price">
                            <dt>促销价</dt>
                            <dd><em>¥</em><b class="sys_item_price"><?php echo ($data['price']); ?></b>  </dd>
                        </li>
                        <?php if($data['price3'] == 0.00): ?><li class="price iteminfo_mktprice">
                            <dt>代金券抵扣</dt>
                            <dd><em>¥</em><b class=""><?php echo ($data['price1']); ?></b></dd>
                        </li>
                            <li class="price iteminfo_mktprice">
                                <dt>奖金积分抵扣</dt>
                                <dd><em>¥</em><b class=""><?php echo ($data['price2']); ?></b></dd>
                            </li>
                            <?php else: ?> <li class="price iteminfo_mktprice">
                                <dt>复用币抵扣</dt>
                                <dd><em>¥</em><b class=""><?php echo ($data['price3']); ?></b></dd>
                            </li><?php endif; ?>

                        <div class="clear"></div>
                    </div>

                    <!--地址-->

                    <!--销量-->
                    <ul class="tm-ind-panel">
                        <li class="tm-ind-item tm-ind-sellCount canClick">
                            <div class="tm-indcon"><span class="tm-label">月销量</span><span class="tm-count">1015</span></div>
                        </li>
                        <li class="tm-ind-item tm-ind-sumCount canClick">
                            <div class="tm-indcon"><span class="tm-label">累计销量</span><span class="tm-count">6015</span></div>
                        </li>
                        <li class="tm-ind-item tm-ind-reviewCount canClick tm-line3">
                            <div class="tm-indcon"><span class="tm-label">累计评价</span><span class="tm-count">640</span></div>
                        </li>
                    </ul>
                    <div class="clear"></div>
                    <!--各种规格-->
                    <dl class="iteminfo_parameter sys_item_specpara">
                        <dd>
                            <!--操作页面-->

                            <div class="theme-popover-mask1"></div>

                            <div class="theme-popover1">
                                <div class="theme-span" style="height: 0px"></div>
                                <div class="theme-poptit" style="height: 0px!important;">
                                    <a href="javascript:;" title="关闭" class="close"></a>
                                </div>
                                <div class="theme-popbod dform">
                                    <form class="theme-signin" name="loginform" action="<?php echo U('user/ordering');?>" id="goodsform" method="post">

                                        <div class="theme-signin-left">

                                            <div class="theme-options">
                                                <div class="cart-title">包装</div>
                                                <ul>
                                                    <li class="sku-line selected">袋<i></i></li>
                                                </ul>
                                            </div>
                                            <div class="theme-options">
                                                <div class="cart-title number">数量</div>
                        <dd>
                            <input id="min" class="am-btn am-btn-default" name="" type="button" value="-" />
                            <input id="text_box" name="num" type="text" value="1" style="width:30px;" />
                            <input id="add" class="am-btn am-btn-default" name="" type="button" value="+" />
                            <span id="Stock" class="tb-hidden">库存<span class="stock">1000</span>件</span>
                        </dd>

                </div>
            </div>
                <input type="hidden" name="goods_id" value="<?php echo ($data['id']); ?>"/>
            </form>
        </div>
    </div>

    </dd>
    </dl>
    <div class="clear"></div>
    <!--活动	-->
    <div class="pay">
        <div class="pay-opt">
            <a href="<?php echo U('index/index');?>"><span class="am-icon-home am-icon-fw">首页</span></a>
            <a><span class="am-icon-heart am-icon-fw">收藏</span></a>

        </div>
        <li>
            <div class="clearfix tb-btn tb-btn-buy">
                <a id="buy" title="点此按钮到下一步确认购买信息" href="#">立即购买</a>
            </div>
        </li>
        <li>
            <div class="clearfix tb-btn tb-btn-basket">
                <a id="add_shop_cart" title="加入购物车" href="#"><i></i>加入购物车</a>
            </div>
        </li>
    </div>

    </div>

    <div class="clear"></div>

    </div>

    <!--优惠套装-->

    <div class="clear"></div>


    <!-- introduce-->

    <div class="introduce">
        <div class="introduceMain">
            <div class="am-tabs" data-am-tabs>
                <ul class="am-avg-sm-3 am-tabs-nav am-nav am-nav-tabs">
                    <li class="am-active">
                        <a href="#">

                            <span class="index-needs-dt-txt">宝贝详情</span></a>

                    </li>


                </ul>

                <div class="am-tabs-bd">

                    <div class="am-tab-panel am-fade am-in am-active">
                        <div class="J_Brand">

                            <div class="attr-list-hd tm-clear">
                                <h4>产品参数：</h4></div>
                            <div class="clear"></div>
                            <ul id="J_AttrUL">
                                <li title="">产品类型:&nbsp;烘炒类</li>
                                <li title="">原料产地:&nbsp;巴基斯坦</li>
                                <li title="">产地:&nbsp;湖北省武汉市</li>
                                <li title="">配料表:&nbsp;进口松子、食用盐</li>
                                <li title="">产品规格:&nbsp;210g</li>
                                <li title="">保质期:&nbsp;180天</li>
                                <li title="">产品标准号:&nbsp;GB/T 22165</li>
                                <li title="">生产许可证编号：&nbsp;QS4201 1801 0226</li>
                                <li title="">储存方法：&nbsp;请放置于常温、阴凉、通风、干燥处保存 </li>
                                <li title="">食用方法：&nbsp;开袋去壳即食</li>
                            </ul>
                            <div class="clear"></div>
                        </div>

                        <div class="details">
                            <div class="attr-list-hd after-market-hd">
                                <h4>商品细节</h4>
                            </div>
                            <div class="twlistNews">
                                <img src="/demo.ready.net/Public/Home/images/tw1.jpg" />
                                <img src="/demo.ready.net/Public/Home/images/tw2.jpg" />
                                <img src="/demo.ready.net/Public/Home/images/tw3.jpg" />
                                <img src="/demo.ready.net/Public/Home/images/tw4.jpg" />
                                <img src="/demo.ready.net/Public/Home/images/tw5.jpg" />
                                <img src="/demo.ready.net/Public/Home/images/tw6.jpg" />
                                <img src="/demo.ready.net/Public/Home/images/tw7.jpg" />
                            </div>
                        </div>
                        <div class="clear"></div>

                    </div>



                </div>

            </div>

            <div class="clear"></div>

            <div class="footer">
                <div class="footer-hd">
                    <p>
                        <a href="#">恒望科技</a>
                        <b>|</b>
                        <a href="#">商城首页</a>
                        <b>|</b>
                        <a href="#">支付宝</a>
                        <b>|</b>
                        <a href="#">物流</a>
                    </p>
                </div>
                <div class="footer-bd">
                    <p>
                        <a href="#">关于恒望</a>
                        <a href="#">合作伙伴</a>
                        <a href="#">联系我们</a>
                        <a href="#">网站地图</a>
                        <em>© 2015-2025 Hengwang.com 版权所有</em>
                    </p>
                </div>
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

    <script>
        $(function () {
            var form = $('#goodsform');
            $('#add_shop_cart').click(function () {
                    var goods_id = $('#goods_id').val();

                    $.post('<?php echo U("user/addCart");?>' ,form.serialize(),function (data) {
                        alert(data.msg);
                        if(data.code){
                            return false;
                        }else{

                        }
                    },'json')
            });

            $('#buy').click(function () {
                    form.submit();
            })
        })
    </script>

</body>

</html>