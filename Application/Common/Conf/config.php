<?php
return array(
	//'配置项'=>'配置值'

    //数据库配置
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => '127.0.0.1', // 服务器地址
    'DB_NAME'   => 'demoready', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'root',  // 密码
    'DB_PORT'   => '3306', // 端口
    'DB_PREFIX' => 'ms_', // 数据库表前缀

    //微信配置
    'Token' => 'ms',
    'appId' => 'wx0069cc02be9b13c3',
    'appscrete'=> '8fb6c283119556d50ba4115fae93a61a',

    //聚合数据  appkey

    //短信配置
    'SMS' =>array(
      'uid'=>'xxxx',
      'psw'=> 'xxxx',
    ),

    'URL_CASE_INSENSITIVE' =>true,

    /* 模板相关配置 */
    'TMPL_PARSE_STRING' => array(
        '__STATIC__' => __ROOT__ . '/Public/static',
        '__ADDONS__' => __ROOT__ . '/Public/' . MODULE_NAME . '/Addons',
        '__IMG__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/images',
        '__CSS__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/css',
        '__JS__'     => __ROOT__ . '/Public/' . MODULE_NAME . '/js',
        '__ADMIN__'    =>__ROOT__ . '/Public/Admin/assets',
        '__COMMON__'  =>__ROOT__.'/Public/common',
        '__LIB__' => __ROOT__.'/Public/lib'
    ),

   'USER_LEVEL'=>array(
       array(
           'cost'=>500,
           'level'=> '普卡',
       ),
       array(
           'cost'=>3000,
           'level'=> '银卡',
       ),
       array(
           'cost'=>12000,
           'level'=> '金卡',
       ),
       array(
           'cost'=>24000,
           'level'=> '钻卡',
       ),
   ),

    'USER_LEVEL2'=>array(
        1 => '普卡套餐',
        2=>'银卡套餐',
        3=>'金卡套餐',
        4=>'钻卡套餐',
    ),
    'GOODS_PRICE'=>array(
        1=>500,
        2=>3000,
        3=>12000,
        4=>24000,
    ),
    'BANK_LIST'=>array(
       '中国建设银行',
        '中国农业银行',
        '中国交通银行',
    ),
    'MAX_SIZE'=>array(
        'header'=> 1048576,
        'goods' => 2097152,
        ),
    'UPLOAD_PATH'=>'./Uploads/',

    'AREA'=>array(
        1 => '热销',
        2 => '限时抢',
        3 => '新品上架',
        4 => '复消专区'
    ),
    'USER_MEDICAL'=>array(
         1 => '糖尿病',
         2 => '中风'
    ),

    'ROLE'=>array(
        1=>'普通会员',
        2=>'馆长',
        3=>'主任',
        4=>'经理',
        5=>'总监',
    ),

    'FORMAT'=>array(
        1=>'袋',
        2=>'盒',
        3=>'箱',
        4=>'个',
        5=>'瓶',
    ),
);

