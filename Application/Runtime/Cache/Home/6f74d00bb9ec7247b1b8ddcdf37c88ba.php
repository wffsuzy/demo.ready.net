<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>购物车页面</title>

    <link href="/demo.lgwsh.net/Public/Admin/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
    <link href="/demo.lgwsh.net/Public/Home/css/basic/css/demo.css" rel="stylesheet" type="text/css" />
    <link href="/demo.lgwsh.net/Public/Home/css/cartstyle.css" rel="stylesheet" type="text/css" />
    <link href="/demo.lgwsh.net/Public/Home/css/optstyle.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="/demo.lgwsh.net/Public/common/js/jquery.min.js"></script>

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



    <link href="/demo.lgwsh.net/Public/Home/css/cartstyle.css" rel="stylesheet" type="text/css" />

    <link href="/demo.lgwsh.net/Public/Home/css/jsstyle.css" rel="stylesheet" type="text/css" />
    <div class="nav white">
        <div class="logo"><img src="/demo.lgwsh.net/Public/Home/images/logo.png" /></div>
        <div class="logoBig">
            <li><img src="/demo.lgwsh.net/Public/Home/images/logobig.png" /></li>
        </div>

        <div class="search-bar pr">
            <a name="index_none_header_sysc" href="#"></a>
            <form>
                <input id="searchInput" name="index_none_header_sysc" type="text" placeholder="搜索" autocomplete="off">
                <input id="ai-topsearch" class="submit am-btn" value="搜索" index="1" type="submit">
            </form>
        </div>
    </div>

    <div class="concent">
        <!--地址 -->
        <div class="paycont">
            <div class="address">
                <h3>确认收货地址 </h3>
                <div class="control">
                    <div class="tc-btn createAddr theme-login am-btn am-btn-danger">使用新地址</div>
                </div>
                <div class="clear"></div>
                <ul>
                    <div class="per-border"></div>
                    <li class="user-addresslist defaultAddr">

                        <div class="address-left">
                            <div class="user DefaultAddr">

										<span class="buy-address-detail">
                   <span class="buy-user">艾迪 </span>
										<span class="buy-phone">15871145629</span>
										</span>
                            </div>
                            <div class="default-address DefaultAddr">
                                <span class="buy-line-title buy-line-title-type">收货地址：</span>
                                <span class="buy--address-detail">
								   <span class="province">湖北</span>省
										<span class="city">武汉</span>市
										<span class="dist">洪山</span>区
										<span class="street">雄楚大道666号(中南财经政法大学)</span>
										</span>

                                </span>
                            </div>
                            <ins class="deftip">默认地址</ins>
                        </div>
                        <div class="address-right">
                            <a href="person/address.html">
                                <span class="am-icon-angle-right am-icon-lg"></span></a>
                        </div>
                        <div class="clear"></div>

                        <div class="new-addr-btn">
                            <a href="#" class="hidden">设为默认</a>
                            <span class="new-addr-bar hidden">|</span>
                            <a href="#">编辑</a>
                            <span class="new-addr-bar">|</span>
                            <a href="javascript:void(0);" onclick="delClick(this);">删除</a>
                        </div>

                    </li>
                    <div class="per-border"></div>
                    <li class="user-addresslist">
                        <div class="address-left">
                            <div class="user DefaultAddr">

										<span class="buy-address-detail">
                   <span class="buy-user">艾迪 </span>
										<span class="buy-phone">15871145629</span>
										</span>
                            </div>
                            <div class="default-address DefaultAddr">
                                <span class="buy-line-title buy-line-title-type">收货地址：</span>
                                <span class="buy--address-detail">
								   <span class="province">湖北</span>省
										<span class="city">武汉</span>市
										<span class="dist">武昌</span>区
										<span class="street">东湖路75号众环大厦2栋9层902</span>
										</span>

                                </span>
                            </div>
                            <ins class="deftip hidden">默认地址</ins>
                        </div>
                        <div class="address-right">
                            <span class="am-icon-angle-right am-icon-lg"></span>
                        </div>
                        <div class="clear"></div>

                        <div class="new-addr-btn">
                            <a href="#">设为默认</a>
                            <span class="new-addr-bar">|</span>
                            <a href="#">编辑</a>
                            <span class="new-addr-bar">|</span>
                            <a href="javascript:void(0);"  onclick="delClick(this);">删除</a>
                        </div>

                    </li>

                </ul>

                <div class="clear"></div>
            </div>
            <!--物流 -->


            <!--支付方式-->


            <!--订单 -->
            <div class="concent">
                <div id="payTable">
                    <h3>确认订单信息</h3>
                    <div class="cart-table-th">
                        <div class="wp">

                            <div class="th th-item">
                                <div class="td-inner">商品信息</div>
                            </div>
                            <div class="th th-price">
                                <div class="td-inner">单价</div>
                            </div>
                            <div class="th th-amount">
                                <div class="td-inner">数量</div>
                            </div>
                            <div class="th th-sum">
                                <div class="td-inner">金额</div>
                            </div>
                            <div class="th th-oplist">
                                <div class="td-inner">配送方式</div>
                            </div>

                        </div>
                    </div>
                    <div class="clear"></div>

                    <tr class="item-list">
                        <div class="bundle  bundle-last">

                            <div class="bundle-main">
                                <ul class="item-content clearfix">
                                    <div class="pay-phone">
                                        <li class="td td-item">
                                            <div class="item-pic">
                                                <a href="#" class="J_MakePoint">
                                                    <img src="/demo.lgwsh.net/Public/Home/images/kouhong.jpg_80x80.jpg" class="itempic J_ItemImg"></a>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-basic-info">
                                                    <a href="#" class="item-title J_MakePoint" data-point="tbcart.8.11">美康粉黛醉美唇膏 持久保湿滋润防水不掉色</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="td td-info">
                                            <div class="item-props">
                                                <span class="sku-line">颜色：12#川南玛瑙</span>
                                                <span class="sku-line">包装：裸装</span>
                                            </div>
                                        </li>
                                        <li class="td td-price">
                                            <div class="item-price price-promo-promo">
                                                <div class="price-content">
                                                    <em class="J_Price price-now">39.00</em>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                    <li class="td td-amount">
                                        <div class="amount-wrapper ">
                                            <div class="item-amount ">
                                                <span class="phone-title">购买数量</span>
                                                <div class="sl">
                                                    <input class="min am-btn" name="" type="button" value="-" />
                                                    <input class="text_box" name="" type="text" value="3" style="width:30px;" />
                                                    <input class="add am-btn" name="" type="button" value="+" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="td td-sum">
                                        <div class="td-inner">
                                            <em tabindex="0" class="J_ItemSum number">117.00</em>
                                        </div>
                                    </li>
                                </ul>
                                <div class="clear"></div>

                            </div>
                    </tr>
                    <div class="clear"></div>
                </div>

                <tr id="J_BundleList_s_1911116345_1" class="item-list">
                    <div id="J_Bundle_s_1911116345_1_0" class="bundle  bundle-last">
                        <div class="bundle-main">
                            <ul class="item-content clearfix">
                                <div class="pay-phone">
                                    <li class="td td-item">
                                        <div class="item-pic">
                                            <a href="#" class="J_MakePoint">
                                                <img src="/demo.lgwsh.net/Public/Home/images/kouhong.jpg_80x80.jpg" class="itempic J_ItemImg"></a>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-basic-info">
                                                <a href="#" target="_blank" title="美康粉黛醉美唇膏 持久保湿滋润防水不掉色" class="item-title J_MakePoint" data-point="tbcart.8.11">美康粉黛醉美唇膏 持久保湿滋润防水不掉色</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="td td-info">
                                        <div class="item-props">
                                            <span class="sku-line">颜色：10#蜜橘色+17#樱花粉</span>
                                            <span class="sku-line">包装：两支手袋装（送彩带）</span>
                                        </div>
                                    </li>
                                    <li class="td td-price">
                                        <div class="item-price price-promo-promo">
                                            <div class="price-content">
                                                <em class="J_Price price-now">39.00</em>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <li class="td td-amount">
                                    <div class="amount-wrapper ">
                                        <div class="item-amount ">
                                            <span class="phone-title">购买数量</span>
                                            <div class="sl">
                                                <input class="min am-btn" name="" type="button" value="-" />
                                                <input class="text_box" name="" type="text" value="3" style="width:30px;" />
                                                <input class="add am-btn" name="" type="button" value="+" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="td td-sum">
                                    <div class="td-inner">
                                        <em tabindex="0" class="J_ItemSum number">117.00</em>
                                    </div>
                                </li>

                            </ul>
                            <div class="clear"></div>

                        </div>
                </tr>
            </div>
            <div class="clear"></div>
            <div class="pay-total">
                <!--留言-->
                <div class="order-extra">
                    <div class="order-user-info">
                        <div id="holyshit257" class="memo">
                            <label>买家留言：</label>
                            <input type="text" title="选填,对本次交易的说明（建议填写已经和卖家达成一致的说明）" placeholder="选填,建议填写和卖家达成一致的说明" class="memo-input J_MakePoint c2c-text-default memo-close">
                            <div class="msg hidden J-msg">
                                <p class="error">最多输入500个字符</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!--优惠券 -->
                <div class="buy-agio">
                    <li class="td td-coupon">

                        <span class="coupon-title">优惠券</span>
                        <select data-am-selected>
                            <option value="a">
                                <div class="c-price">
                                    <strong>￥8</strong>
                                </div>
                                <div class="c-limit">
                                    【消费满95元可用】
                                </div>
                            </option>
                            <option value="b" selected>
                                <div class="c-price">
                                    <strong>￥3</strong>
                                </div>
                                <div class="c-limit">
                                    【无使用门槛】
                                </div>
                            </option>
                        </select>
                    </li>

                    <li class="td td-bonus">

                        <span class="bonus-title">红包</span>
                        <select data-am-selected>
                            <option value="a">
                                <div class="item-info">
                                    ¥50.00<span>元</span>
                                </div>
                                <div class="item-remainderprice">
                                    <span>还剩</span>10.40<span>元</span>
                                </div>
                            </option>
                            <option value="b" selected>
                                <div class="item-info">
                                    ¥50.00<span>元</span>
                                </div>
                                <div class="item-remainderprice">
                                    <span>还剩</span>50.00<span>元</span>
                                </div>
                            </option>
                        </select>

                    </li>

                </div>
                <div class="clear"></div>
            </div>
            <!--含运费小计 -->
            <div class="buy-point-discharge ">
                <p class="price g_price ">
                    合计（含运费） <span>¥</span><em class="pay-sum">244.00</em>
                </p>
            </div>

            <!--信息 -->
            <div class="order-go clearfix">
                <div class="pay-confirm clearfix">
                    <div class="box">
                        <div tabindex="0" id="holyshit267" class="realPay"><em class="t">实付款：</em>
                            <span class="price g_price ">
                                    <span>¥</span> <em class="style-large-bold-red " id="J_ActualFee">244.00</em>
											</span>
                        </div>

                        <div id="holyshit268" class="pay-address">

                            <p class="buy-footer-address">
                                <span class="buy-line-title buy-line-title-type">寄送至：</span>
                                <span class="buy--address-detail">
								   <span class="province">湖北</span>省
												<span class="city">武汉</span>市
												<span class="dist">洪山</span>区
												<span class="street">雄楚大道666号(中南财经政法大学)</span>
												</span>
                                </span>
                            </p>
                            <p class="buy-footer-address">
                                <span class="buy-line-title">收货人：</span>
                                <span class="buy-address-detail">
                                         <span class="buy-user">艾迪 </span>
												<span class="buy-phone">15871145629</span>
												</span>
                            </p>
                        </div>
                    </div>

                    <div class="float-bar-wrapper">
                        <div id="J_SelectAll2" class="select-all J_SelectAll">
                            <div class="cart-checkbox">
                                <label for="J_SelectAllCbx2"></label>
                            </div>
                        </div>
                        <div class="float-bar-right">
                            <div class="amount-sum">
                                <span class="txt">已选商品</span>
                                <em id="J_SelectedItemsCount">0</em><span class="txt">件</span>
                                <div class="arrow-box">
                                    <span class="selected-items-arrow"></span>
                                    <span class="arrow"></span>
                                </div>
                            </div>
                            <div class="price-sum">
                                <span class="txt">合计:</span>
                                <strong class="price">¥<em id="J_Total">0.00</em></strong>
                            </div>
                            <div class="btn-area">
                                <a href="pay.html" id="J_Go" class="submit-btn submit-btn-disabled" aria-label="请注意如果没有选择宝贝，将无法结算">
                                    <span>立即支付</span></a>
                            </div>
                        </div>

                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>

        <div class="clear"></div>
    </div>


<!--引导 -->
<div class="navCir">
    <li><a href="<?php echo U('index/index');?>"><i class="am-icon-home "></i>首页</a></li>
    <li><a href="<?php echo U('index/classify');?>"><i class="am-icon-list"></i>分类</a></li>
    <li class="active"><a href="<?php echo U('user/cart');?>"><i class="am-icon-shopping-basket"></i>购物车</a></li>
    <li><a href="<?php echo U('user/index');?>"><i class="am-icon-user"></i>我的</a></li>
</div>

</body>

</html>