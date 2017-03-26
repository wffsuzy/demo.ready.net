<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js fixed-layout">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/demo.lgwsh.net/Public/Admin/assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/demo.lgwsh.net/Public/Admin/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/demo.lgwsh.net/Public/Admin/assets/css/amazeui.min.css"/>
    <link rel="stylesheet" href="/demo.lgwsh.net/Public/Admin/assets/css/admin.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
    以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <strong></strong> <small>后台管理系统</small>
    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    <span class="am-icon-users"></span> <?php echo session('Admin_yctr')['truename'] ?> <span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                    <!--<li><a href="#"><span class="am-icon-user"></span> 资料</a></li>-->
                    <!--<li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>-->
                    <li><a href="<?php echo U('Public/getOut');?>"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
            </li>
            <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
        </ul>
    </div>
</header>

<div class="am-cf admin-main">
    <!-- sidebar start -->
    <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
        <div class="am-offcanvas-bar admin-offcanvas-bar">
            <ul class="am-list admin-sidebar-list">
                <li><a href="<?php echo U('Index/index');?>"><span class="am-icon-home"></span> 首页</a></li>
                <?php if(is_array($admin_menu)): $i = 0; $__LIST__ = $admin_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="admin-parent">
                    <a class="am-cf" data-am-collapse="{target: '#collapse-nav-<?php echo ($key); ?>'}"><span class="am-icon-file"></span> <?php echo ($vo['name']); ?> <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                    <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav-<?php echo ($key); ?>">
                        <?php if(is_array($vo['children_menu'])): $i = 0; $__LIST__ = $vo['children_menu'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><li><a href="/demo.lgwsh.net/admin.php/<?php echo ($vv['url']); ?>" class="am-cf"><span class="am-icon-check"></span> <?php echo ($vv['name']); ?><span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                <!--<li class="admin-parent">-->
                    <!--<a class="am-cf" data-am-collapse="{target: '#collapse-nav_'}"><span class="am-icon-file"></span> 菜单管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>-->
                    <!--<ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav_">-->
                        <!--<li><a href="<?php echo U('Menu/menulist');?>" class="am-cf"><span class="am-icon-check"></span> 菜单列表<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>-->
                        <!--<li><a href="<?php echo U('Menu/add_menu');?>" class="am-cf"><span class="am-icon-check"></span> 新增菜单<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>-->

                    <!--</ul>-->
                <!--</li>-->
            </ul>

            <div class="am-panel am-panel-default admin-sidebar-panel">
                <div class="am-panel-bd">
                    <p><span class="am-icon-bookmark"></span>天气</p>
                    <iframe width="200" scrolling="no" height="60" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=12&icon=1&py=yancheng&num=5"></iframe>
                </div>
            </div>

            <div class="am-panel am-panel-default admin-sidebar-panel">
                <div class="am-panel-bd">
                    <p><span class="am-icon-tag"></span> wiki</p>
                    <p>Welcome to the Amaze UI wiki!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- sidebar end -->

    <!-- content start -->
    
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding am-padding-bottom-0">
                <div class="am-fl am-cf">
                    <strong class="am-text-primary am-text-lg">新增商品</strong>
                    <small></small>
                </div>
            </div>

            <hr>

            <div class="am-tabs am-margin" data-am-tabs>
                <form class="am-form" action="<?php echo U('edit_add_goods');?>" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <div class="am-form-group">
                            <label for="doc-ipt-email-1">商品名称</label>
                            <input type="text" required class="" id="doc-ipt-email-1" placeholder="" name="name">
                        </div>

                        <div class="am-form-group">
                            <label for="doc-ipt-pwd-1">商品价格</label>
                            <input type="text" required class="" id="doc-ipt-pwd-1" placeholder="" name="price">
                        </div>
                        <div class="am-form-group">
                            <label for="doc-ipt-pwd-1">奖金积分</label>
                            <input type="text" required class="" id="doc-ipt-pwd-2" placeholder="" name="price1">
                        </div>
                        <div class="am-form-group">
                            <label for="doc-ipt-pwd-1">充值积分</label>
                            <input type="text" required  class="" id="doc-ipt-pwd-3" placeholder="" name="price2">
                        </div>


                        <div class="am-form-group am-form-file">
                            <label for="doc-ipt-pwd-1">上传商品图片</label><br>
                            <div style="min-width: 628px" id="container2" name="" type="text/plain"></div>
                        </div>
                        <div id="file-list"></div>

                        <!--<div class="am-form-group">-->
                            <!--<label class="am-checkbox-inline">-->
                                <!--<input type="checkbox" value="option1"> 选我-->
                            <!--</label>-->
                            <!--<label class="am-checkbox-inline">-->
                                <!--<input type="checkbox" value="option2"> 同时可以选我-->
                            <!--</label>-->
                            <!--<label class="am-checkbox-inline">-->
                                <!--<input type="checkbox" value="option3"> 还可以选我-->
                            <!--</label>-->
                        <!--</div>-->

                        <div class="am-form-group">
                            <label for="doc-ipt-pwd-1">商品类型</label>
                            <br>
                            <label class="am-radio-inline">
                                <input type="radio"  value="1" name="pro_type"> 注册单
                            </label>
                            <label class="am-radio-inline">
                                <input type="radio" name="pro_type" value="2" checked> 零售单
                            </label>
                        </div>
                        <div class="am-form-group">
                            <label for="doc-ipt-pwd-1">是否上架</label>
                            <br>
                            <label class="am-radio-inline">
                                <input type="radio"  value="1" name="status" checked> 是
                            </label>
                            <label class="am-radio-inline">
                                <input type="radio" name="status" value="2"> 否
                            </label>
                        </div>
                        <div class="am-form-group">
                            <label for="doc-select-1">选择商品类别</label>
                            <select id="doc-select-1" name="type">
                                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>" <?php if($vo['id'] == $info['id']) echo 'selected' ?>><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>

                            </select>
                            <span class="am-form-caret"></span>
                        </div>
                        <div class="am-form-group">
                            <label for="doc-select-2">选择投放区域</label>
                            <?php $area = C('AREA'); ?>
                            <select id="doc-select-2" name="home">
                                <?php if(is_array($area)): $i = 0; $__LIST__ = $area;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($key); ?>"  <?php if($key == $info['home']) echo 'selected' ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>

                            </select>
                            <span class="am-form-caret"></span>
                        </div>

                        <div class="am-form-group">
                            <label for="doc-ta-1">商品描述</label>

                            <div style="min-width: 628px" id="container" name="content" type="text/plain"></div>

                            <!--<textarea class="" rows="5" id="doc-ta-1"></textarea>-->
                        </div>
                        <input type="hidden"  id="detailpath" name="detailpath" value="">
                        <p><button type="submit" id="btn" class="am-btn am-btn-default">提交</button></p>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>


    <footer class="admin-content-footer">
        <hr>
        <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
    </footer>
    <!-- content end -->

</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/demo.lgwsh.net/Public/Admin/assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/demo.lgwsh.net/Public/Admin/assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="/demo.lgwsh.net/Public/Admin/assets/js/amazeui.min.js"></script>
<script src="/demo.lgwsh.net/Public/Admin/assets/js/app.js"></script>

<script src="/demo.lgwsh.net/Public/lib/layer/layer.js"></script>
<script src="/demo.lgwsh.net/Public/common/js/common.js"></script>

    <script type="text/javascript" src="/demo.lgwsh.net/Public/lib/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="/demo.lgwsh.net/Public/lib/ueditor/ueditor.all.js"></script>
    <script type="text/javascript">
        var ue = UE.getEditor('container');
        var ue2 = UE.getEditor('container2');


    </script>
    <script>
        $(function() {
            $('.doc-form-file').on('change', function() {
                var fileNames = '';
                $.each(this.files, function() {
                    fileNames += '<span class="am-badge">' + this.name + '</span> ';
                });
                $('#file-list').append(fileNames);
            });

            $('#btn').click(function () {
                var imgReg = /<img.*?(?:>|\/>)/gi;
                var str = ue2.getContent();
                var arr = str.match(imgReg);
                var imgurl='';
                for (var i = 0; i < arr.length; i++) {

                    var srcReg = /src=[\'\"]?([^\'\"]*)[\'\"]?/i;
                    var src = arr[i].match(srcReg);
                    imgurl+='@'+src[1];

                }
               $('#detailpath').val(imgurl);
            })
        });
    </script>




</body>
</html>