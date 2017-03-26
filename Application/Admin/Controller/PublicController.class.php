<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/6 0006
 * Time: 15:47
 */

namespace Admin\Controller;

use Admin\Model\MenuModel;
use Think\Controller;

class PublicController extends Controller
{
    public function login()
    {
        if(session('Admin_yctr')){
            $this->redirect('Index/index');
        }

        if(IS_POST){
            $data = I('post.');
            $data['password'] = md5($data['password']);
            $data['status']   = 1;
            if(!$admin = M('admin')->where($data)->find())
            {
                ajax_return(1,'用户名或者密码错误');
            }

            session('Admin_yctr',$admin);//管理员信息

            $p_info = M('admin_group')->find($admin['id']);
//            echo M()->getLastSql();die;
//            dump($p_info);die;
            $menu = new MenuModel();
            session('Admin_menus',$menu->getMenusByPms(explode(',',$p_info['permission'])));//菜单信息
            session('Admin_permissions',explode(',',$p_info['permission']));//权限信息
            ajax_return(0,'登录成功',U('Index/index'));

        }else{
            $this->display();
        }
    }


    public function getOut()
    {
            session_destroy();
            $this->redirect('login');
    }
}