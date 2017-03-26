<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/14 0014
 * Time: 17:24
 */

namespace Admin\Controller;

class NewsController extends BaseController
{
    public function newslist()
    {
        $this->assign('data',M('news')->select());
        $this->display();
    }


    public function  add_news()
    {
        $this->assign('title','添加公告');
        $this->display();

    }


    public function edit_news()
    {
        $this->assign('title','编辑公告');
        $this->assign('data',M('news')->find(I('get.id')));
        $this->display('add_news');

    }


    public function add_edit_news()
    {
        if(IS_POST){
            $news = M('news');
            $param = I('post.');
            $param['create_time'] =  time();
            if($param['id']){
                    if($news->save($param) === false){
                        ajax_return(1,'编辑失败');
                    }
            }else{
                if(!$news->add($param)){
                    ajax_return(1,'新增失败');
                }
            }

            ajax_return(0,'保存成功',U('newslist'));
        }
    }
}

