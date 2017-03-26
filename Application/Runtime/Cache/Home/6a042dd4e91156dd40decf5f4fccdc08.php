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



    <link href="/demo.lgwsh.net/Public/Home/css/personal.css" rel="stylesheet" type="text/css">
    <link href="/demo.lgwsh.net/Public/Home/css/infstyle.css" rel="stylesheet" type="text/css">
    <div class="center">
        <div class="col-main">
            <div class="main-wrap">

                <div class="user-info">
                    <!--标题 -->
                    <div class="am-cf am-padding">
                        <div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">个人资料</strong> / <small>Personal&nbsp;information</small></div>
                    </div>
                    <hr/>

                    <!--头像 -->
                    <div class="user-infoPic">

                        <div class="filePic">
                            <input type="file" class="inputPic" allowexts="gif,jpeg,jpg,png,bmp" accept="image/*">
                            <img class="am-circle am-img-thumbnail" src="/demo.lgwsh.net/Public/Home/images/getAvatar.do.jpg" alt="" />
                        </div>

                        <p class="am-form-help">头像</p>

                        <div class="info-m">
                            <div><b>用户名：<i>小叮当</i></b></div>
                            <div class="u-level">
									<span class="rank r2">
							             <s class="vip1"></s><a class="classes" href="#">铜牌会员</a>
						            </span>
                            </div>
                            <div class="u-safety">
                                <a href="safety.html">
                                    账户安全
                                    <span class="u-profile"><i class="bc_ee0000" style="width: 60px;" width="0">60分</i></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!--个人信息 -->
                    <div class="info-main">
                        <form class="am-form am-form-horizontal" action="<?php echo U();?>" method="post" id="info">

                            <div class="am-form-group">
                                <label for="user-name2" class="am-form-label">昵称</label>
                                <div class="am-form-content">
                                    <input type="text" id="user-name2" placeholder="nickname">

                                </div>
                            </div>

                            <div class="am-form-group">
                                <label for="user-name" class="am-form-label">姓名</label>
                                <div class="am-form-content">
                                    <input type="text" id="user-name2" placeholder="name">

                                </div>
                            </div>

                            <div class="am-form-group">
                                <label for="user-phone" class="am-form-label">电话</label>
                                <div class="am-form-content">
                                    <input id="user-phone" placeholder="telephonenumber" type="tel">

                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="user-email" class="am-form-label">电子邮件</label>
                                <div class="am-form-content">
                                    <input id="user-email" placeholder="Email" type="email">

                                </div>
                            </div>
                            <div class="am-form-group address">
                                <label for="user-address" class="am-form-label">收货地址</label>
                                <div class="am-form-content address">
                                    <a href="address.html">
                                        <p class="new-mu_l2cw">
                                            <span class="province">湖北</span>省
                                            <span class="city">武汉</span>市
                                            <span class="dist">洪山</span>区
                                            <span class="street">雄楚大道666号(中南财经政法大学)</span>
                                            <span class="am-icon-angle-right"></span>
                                        </p>
                                    </a>

                                </div>
                            </div>
                            <!--<div class="am-form-group safety">-->
                                <!--<label for="user-safety" class="am-form-label">账号安全</label>-->
                                <!--<div class="am-form-content safety">-->
                                    <!--<a href="safety.html">-->

                                        <!--<span class="am-icon-angle-right"></span>-->

                                    <!--</a>-->

                                <!--</div>-->
                            <!--</div>-->
                            <div class="info-btn">
                                <div class="am-btn am-btn-danger" id="btn">保存修改</div>
                            </div>

                        </form>
                    </div>

                </div>

            </div>
            <!--底部-->
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

        <aside class="menu">
            <ul>
                <li class="person">
                    <a href="index.html">个人中心</a>
                </li>
                <li class="person">
                    <a href="#">个人资料</a>
                    <ul>
                        <li class="active"> <a href="information.html">个人信息</a></li>
                        <li> <a href="safety.html">安全设置</a></li>
                        <li> <a href="address.html">收货地址</a></li>
                    </ul>
                </li>
                <li class="person">
                    <a href="#">我的交易</a>
                    <ul>
                        <li><a href="order.html">订单管理</a></li>
                        <li> <a href="change.html">退款售后</a></li>
                    </ul>
                </li>
                <li class="person">
                    <a href="#">我的资产</a>
                    <ul>
                        <li> <a href="coupon.html">优惠券 </a></li>
                        <li> <a href="bonus.html">红包</a></li>
                        <li> <a href="bill.html">账单明细</a></li>
                    </ul>
                </li>

                <li class="person">
                    <a href="#">我的小窝</a>
                    <ul>
                        <li> <a href="collection.html">收藏</a></li>
                        <li> <a href="foot.html">足迹</a></li>
                        <li> <a href="comment.html">评价</a></li>
                        <li> <a href="news.html">消息</a></li>
                    </ul>
                </li>

            </ul>

        </aside>
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
            var form = $('#info');
            $('#btn').click(function () {
                $.post(form.attr('action'),form.serialize(),function (data) {
                    alert(data.msg);
                    if(data.code){
                        return false;
                    }else{
                        window.location.href=data.data;
                    }
                })
            })
        })
    </script>

</body>

</html>