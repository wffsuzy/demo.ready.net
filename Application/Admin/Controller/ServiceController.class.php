<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/16 0016
 * Time: 9:30
 * 服务中心类
 */


namespace Admin\Controller;

class ServiceController extends  BaseController
{
    public function serviceList()
    {
        $this->assign('data',M('Service')->select());
        $this->display();
    }

    //添加服务中心
    public function addService()
    {
        $this->assign('title','服务中心添加');
        $this->display();
    }



    //修改服务中心

    public function editService()
    {
            $this->assign('title','服务中心设置');
            $this->assign('data',M('User')->find(I('get.id')));
            $this->display('addService');
    }


    //添加修改


    public function add_edit_service()
    {
            $param = I('post.');
            $service = M('User');
            if($param['id']){
                if($service->save($param) === false){
                    ajax_return(1,'修改失败');
                }
            }

            ajax_return(0,'保存成功',U('User/userList'));
    }

}
