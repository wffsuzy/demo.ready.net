<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/9 0009
 * Time: 17:43
 */
namespace Admin\Controller;

use Admin\Model\MenuModel;

class AdminController extends BaseController
{
    //权限列表
    public function authlist()
    {
        $this->assign('group_info',M('admin_group')->find(I('get.group_id')));
        $this->assign('title','修改权限');
        $menu = new MenuModel();
        $this->assign('menulist',$menu->menu_auth_list());
        $this->display();
    }

    //修改权限
    public function doauth()
    {
        if(IS_POST){
            $param = I('post.');
            $admin_group = M('admin_group');
           if(!$info = $admin_group->find($param['id'])){
               ajax_return(1,'用户组不存在');
           }

           $param['permission']  =  implode(',',$param['permission']);
           if($admin_group->save($param) === false){
                    ajax_return(1,'修改失败',$admin_group->getLastSql());
           }
            ajax_return(0,'修改成功',U('admin_group'));
        }
    }
    //角色列表
    public function admin_group()
    {
        $this->assign('data',M('admin_group')->select());
        $this->display();
    }


    public function admin_list()
    {

        $join = 'left join '.C('DB_PREFIX').'admin_group as g on a.group_id = g.id';
        $data = M('admin')->alias('a')->join($join)->field('a.*,g.group_name')->select();
        $this->assign('data',$data);
        $this->display();
    }

    //管理员添加

    public function add_admin()
    {
            $this->assign('title','管理员添加');
            $this->assign('admin_group',$this->getAdminGroup());
            $this->display();
    }

    //管理员编辑

    public function edit_admin()
    {
        $this->assign('title','管理员编辑');
        $this->assign('data',M('admin')->find(I('id')));
        $this->assign('admin_group',$this->getAdminGroup());
        $this->display('add_admin');
    }

    //管理员添加和修改

    public function add_edit_admin()
    {
       if(IS_POST){
           $param = I('post.');
           $admin =  M('admin');
           if($param['id']){
               if($admin->save($param) === false){
                   ajax_return(1,'编辑失败');
               }
           }else{
               if($this->getAdminByUsername($param['username'])){
                   ajax_return(1,'该用户名已经存在');
               }
               $param['password'] =  md5($param['password']);
               if(!$admin->add($param)){
                   ajax_return(1,'添加失败');
               }
           }

           ajax_return(0,'保存成功',U('admin_list'));
       }
    }

    //系统开关
    public function sysswitch()
    {
        $filename = 'switch.php';

            if(IS_POST){

            }else{
                $this->assign('data',file_exists($filename)? 1 : 2);
                $this->display();
            }
    }
    private function getAdminByUsername($username)
    {
        return M('admin')->where(array('username'=>$username))->find();
    }


    private function getAdminGroup()
    {
        return M('admin_group')->select();
    }






}