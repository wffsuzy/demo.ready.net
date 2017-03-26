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
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg"><?php echo ($title); ?></strong>  <small></small></div>
      </div>

      <hr/>

      <div class="am-g">
        <div class="am-u-sm-12 am-u-md-8 am-u-md-push-1">
          <form class="am-form am-form-horizontal" action="<?php echo U('add_edit_user');?>" method="post">
            <input type="hidden" name="id" value="<?php echo ($id); ?>">
            <div class="am-form-group">
              <label for="user-name" class="am-u-sm-3 am-form-label">会员用户名</label>
              <div class="am-u-sm-9">
                <input type="text" id="user-name" placeholder="" required name="username" value="<?php echo ($data["username"]); ?>">
              </div>
            </div>

            <div class="am-form-group">
              <label for="user-email" class="am-u-sm-3 am-form-label">会员姓名</label>
              <div class="am-u-sm-9">
                <input type="text" id="user-email" name="truename" required placeholder="" value="<?php echo ($data["truename"]); ?>">
              </div>
            </div>
            <div class="am-form-group">
              <label for="user-email" class="am-u-sm-3 am-form-label">会员手机号</label>
              <div class="am-u-sm-9">
                <input type="text" id="user-phone" name="phone" required placeholder="" value="<?php echo ($data["phone"]); ?>">
              </div>
            </div>
            <div class="am-form-group">
              <label for="user-email" class="am-u-sm-3 am-form-label">会员身份证号</label>
              <div class="am-u-sm-9">
                <input type="text" id="user-phone1" name="id_card" required placeholder="" value="<?php echo ($data["id_card"]); ?>">
              </div>
            </div>
            <div class="am-form-group">
              <label for="user-QQ" class="am-u-sm-3 am-form-label">会员既往病史</label>
              <?php $user_medical = C('USER_MEDICAL'); ?>
              <div class="am-u-sm-9">
                <select data-am-selected="{btnSize: 'sm'}" name="medical">
                  <?php if(is_array($user_medical)): $i = 0; $__LIST__ = $user_medical;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($key); ?>" <?php if($data['parent_id'] == $vo['id']) echo 'selected' ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>              </div>
            </div>
            <div class="am-form-group">
              <label for="user-email" class="am-u-sm-3 am-form-label">推荐人用户名</label>
              <div class="am-u-sm-9">
                <input type="text" id="user-tj" name="higher_name" required placeholder="" value="<?php echo ($data["phone"]); ?>">
              </div>
            </div>
            <div class="am-form-group">
              <label for="user-email" class="am-u-sm-3 am-form-label">结点人用户名</label>
              <div class="am-u-sm-9">
                <input type="text" id="user-tj2" name="node_name" required placeholder="" value="<?php echo ($data["phone"]); ?>">
              </div>
            </div>
            <div class="am-form-group">
              <label for="user-email" class="am-u-sm-3 am-form-label">服务中心</label>
              <div class="am-u-sm-9">
                <input type="text" id="user-tj1" name="service_name" required placeholder="" value="<?php echo ($data["phone"]); ?>">
              </div>
            </div>
            <div class="am-form-group">
              <label for="user-QQ" class="am-u-sm-3 am-form-label">会员级别</label>
              <?php $user_level = C('USER_LEVEL'); ?>
              <div class="am-u-sm-9">
                <select data-am-selected="{btnSize: 'sm'}" name="parent_id">
                  <?php if(is_array($user_level)): $i = 0; $__LIST__ = $user_level;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["cost"]); ?>" <?php if($data['parent_id'] == $vo['id']) echo 'selected' ?>><?php echo ($vo['level']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>              </div>
            </div>

            <div class="am-form-group">
              <?php $bank_list = C('BANK_LIST'); ?>
              <label for="user-QQ" class="am-u-sm-3 am-form-label">开户银行</label>
              <div class="am-u-sm-9">
                <select data-am-selected="{btnSize: 'sm'}" name="">
                  <?php if(is_array($bank_list)): $i = 0; $__LIST__ = $bank_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($key); ?>" <?php if($data['parent_id'] == $vo['id']) echo 'selected' ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>              </div>
            </div>
            <div class="am-form-group">
              <label for="user-email" class="am-u-sm-3 am-form-label">开户姓名</label>
              <div class="am-u-sm-9">
                <input type="text" id="user-kj1" name="bank_user" required placeholder="" value="<?php echo ($data["bank_user"]); ?>">
              </div>
            </div>
            <div class="am-form-group">
              <label for="user-email" class="am-u-sm-3 am-form-label">银行支行</label>
              <div class="am-u-sm-9">
                <input type="text" id="user-kj2" name="bank_tree" required placeholder="" value="<?php echo ($data["bank_tree"]); ?>">
              </div>
            </div>
            <div class="am-form-group">
              <label for="user-email" class="am-u-sm-3 am-form-label">收货地址</label>
              <div class="am-u-sm-9">
                <input type="text" id="user-kj3" name="address" required placeholder="" value="<?php echo ($data["address"]); ?>">
              </div>
            </div>
            <div class="am-form-group">
              <label for="user-QQ" class="am-u-sm-3 am-form-label">选择左右区</label>
             <div class="am-u-sm-9">
               <label class="am-radio-inline">
                 <input type="radio" name="left_right" value="1"  <?php if($data['left_right'] == 1 || !isset($data['is_show'])) echo 'checked' ?> data-am-ucheck> 左区
               </label>
               <label class="am-radio-inline">
                 <input type="radio" name="left_right" value="2" <?php if($data['left_right'] == 2) echo 'checked' ?>  data-am-ucheck> 右区
               </label>
             </div>
            </div>

            <div class="am-form-group">
              <label for="user-email" class="am-u-sm-3 am-form-label">选择商品</label>
              <div class="am-u-sm-9">
                <table class="am-table am-table-bordered am-table-radius am-table-striped">
                  <thead>
                  <tr>
                    <th>商品名称</th>
                    <th>产品售价</th>
                    <th>产品PV</th>
                    <th>产品数量</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                      <input type="hidden" name="goods[<?php echo ($key); ?>][id]" value="<?php echo ($vo['id']); ?>"/>
                      <!--<td>-->
                        <!--<img src=" /demo.lgwsh.net/<?php echo ($vo['logo']); ?>" style="width: 40px;height: 30px">-->
                      <!--</td>-->
                      <td>
                        <?php echo ($vo['name']); ?>
                      </td>
                      <td>
                        <?php echo ($vo['price']); ?>
                        <input type="hidden" name="goods[$key][price]" value=" <?php echo ($vo['price']); ?>">
                      </td>
                      <td>
                        <?php echo ($vo['pv']); ?>
                        <input type="hidden" name="goods[$key][pv]" value="10">
                      </td>
                      <td>
                        <input type="text" required name="goods[<?php echo ($key); ?>][num]"/>
                      </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                  </tbody>
                </table>

              </div>
            </div>

            <div class="am-form-group">
              <div class="am-u-sm-9 am-u-sm-push-3">
                <button type="submit" class="am-btn am-btn-primary">保存修改</button>
              </div>
            </div>
          </form>
        </div>
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

  <script>
    $(function () {
        var form = $('form');

        $('form').submit(function (e) {
         
            e.preventDefault();
            $.post(form.attr('action'),form.serialize(),function (data) {
                layer.msg(data.msg,{time:1000},function () {
                    if(data.code){
                        return false;
                    }else{
                        window.location.href=data.data;
                    }
                })

            },'json')
        })
    })
  </script>

</body>
</html>