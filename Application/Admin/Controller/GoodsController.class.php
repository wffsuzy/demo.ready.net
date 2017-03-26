<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/6 0006
 * Time: 16:27
 */

namespace Admin\Controller;



class GoodsController extends BaseController
{
    protected $goods;
    public function __construct()
    {
        parent::__construct();
    }

    //商品列表
    public function goodslist()
    {

        $join = 'left join '.C('DB_PREFIX').'goods_class as gc on gc.id = g.type';
        $data = M('goods')->alias('g')->join($join)->order('create_time desc')->field('gc.name as gc_name,g.*')->select();

        $this->assign('data',$data);
            $this->display();
    }

    //添加商品
    public function add_goods()
    {

        $this->assign('data',$this->getGoodsClass());
        $this->display('add_goods');
    }

    //编辑商品
    public function edit_goods()
    {
        $this->assign('data',$this->getGoodsClass());
        $this->display('add_goods');
    }


    private function getGoodsClass()
    {
        return M('goods_class')->select();
    }
    //添加编辑商品
    public function edit_add_goods()
    {
            if(IS_POST){
                $param = I('post.');
                $param['detailpath'] = substr($param['detailpath'],1);
                $arr = explode('@',$param['detailpath']);
                $param['logopath'] = $arr[0]; //封面图片选取相册第一章
                $param['create_time'] = time();
                header("Content-type:text/html;charset=utf-8");
                $goods = M('goods');
                if(!$goods->add($param)){
                    $this->error('新增失败',U('goodslist'));
                }

                $this->success('新增成功',U('goodslist'));

            }
    }

    //商品分类

    public function goodsClass()
    {
        $this->assign('data',M('goods_class')->select());
        $this->display();
    }

    //添加分类
    public function add_goodsclass()
    {
        $this->assign('title','添加商品分类');
        $this->display();
    }
    //编辑分类

    public function edit_goodsclass()
    {
        $this->assign('title','编辑商品分类');
        $this->assign('data',M('goods_class')->find(I('id')));
        $this->display('add_goodsclass');
    }
    //添加编辑商品分类  暂时未作图片处理

    public function add_edit_goodsclass()
    {
        if(IS_POST){
            $param = I('post.');
            $goodsclass = M('goods_class');
            if($param['id']){
                //编辑操作
                if($goodsclass->save($param) ===  false){
                    ajax_return(1,'编辑失败');
                }
            }else{
                //添加操作
                if(!$goodsclass->add($param)){
                    ajax_return(1,'添加失败');
                }
            }

            ajax_return(0,'保存成功',U('goodsClass'));
        }
    }

    //轮播图
    public function lunbo()
    {
        $this->assign('data',M('lunbo')->select());
        $this->display();
    }

    //轮播图新增

    public function add_lunbo()
    {
        $this->assign('title','新增轮播图');
        $this->display();
    }

    //轮播图编辑


    public function edit_lunbo()
    {

        $this->assign('data',M('lunbo')->find(I('get.id')));
        $this->assign('title','编辑轮播图');
        $this->display('add_lunbo');
    }

    //轮播图新增和编辑
    public function add_edit_lunbo()
    {
           if(IS_POST){
               $param = I('post.');
               $upload = new \Think\Upload();
               $upload->maxSize = C('MAX_SIZE.goods');
               //设置上传文件类型
               $upload->allowExts = explode(',', 'jpg,png,jpeg');
               //设置附件上传目录
               $upload->rootPath = C('UPLOAD_PATH');

               if(!is_dir($upload->rootPath)){
                   mkdir($upload->rootPath);
                   chmod($upload->rootPath,0777);
               }
               $upload->autoSub = true;
               $upload->subName = array('date','Ymd');
               $upload->savePath = '';
               $upload->saveRule = 'uniqid';
               $info  = $upload->upload();

               if(!$info){
                   ajax_return(1,$upload->getError());
               }
               $param['logo'] = C('UPLOAD_PATH').$info['logo']['savepath'].$info['logo']['savename'];
               $lunbo = M('lunbo');
               if($param['id']){
                   if($lunbo->save($param) === false){
                       ajax_return(1,'编辑失败');
                   }
               }else{
                   if(!$lunbo->add($param)){
                       ajax_return(1,'添加失败');
                   }
               }
               ajax_return(0,'保存成功',U('goods/lunbo'));
           }
    }

    //基础设置
    public function front()
    {
        $this->assign('data',M('front')->select());
        $this->display();
    }


    //基础设置修改

    public function edit_front()
    {
        if(IS_POST){

        }
    }


}