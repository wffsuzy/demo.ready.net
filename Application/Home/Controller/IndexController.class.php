<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index()
    {
        $this->assign('lunbo',$this->getLunBo());
        $this->assign('goodslist',$this->getGoodsbysx());
        $this->assign('news',$this->getNews());
        $this->display();
    }

    public function classify()
    {
        $data = M('goods_class')->select();
        $this->assign('data',$data);
        $this->display();
    }

//    public function index1()
//    {
//        $signature = $_GET["signature"];
//        $timestamp = $_GET["timestamp"];
//        $nonce = $_GET["nonce"];
//
//        $token = C('Token');
//        $tmpArr = array($token, $timestamp, $nonce);
//        sort($tmpArr);
//        $tmpStr = implode( $tmpArr );
//        $tmpStr = sha1( $tmpStr );
//
//        if( $tmpStr == $signature ){
//            return true;
//        }else{
//            return false;
//        }
//    }

    //首页分类 3~4
    private function getGoodsClass()
    {
        $map['is_home'] = 1;
        return M('goods_class')->where($map)->limit(3)->order('sort')->field('id,name')->select();
    }

    //轮播图
    private function getLunBo()
    {
        return M('lunbo')->select();
    }

    //

    public function introduction()
    {
        $data = M('goods')->find(I('id'));
        $data['detailpath']=explode('@',$data['detailpath']);

            $this->assign('data',$data);
        $this->display();
    }



    public function all()
    {
        $area = I('get.area_id',0);
        $type = I('get.type',0);
        if($area){
            $map['home'] = $area;
        }
        if($type){
            $map['type'] = $type;
        }
        $this->assign('area',C('AREA'));
        $this->assign('type',M('goods_class')->select());
        $map['status'] = 1; //已经上架
        $map['pro_type'] = 2;//零售单
        $data = M('goods')->where($map)->select();
        $this->assign('data',$data);
        $this->display();
    }

    //按所有商品属性展示商品
    public function getGoodsbysx()
    {
        $areas = C('AREA');
        foreach ($areas as $k => $v){
            $data[$k]['area'] = $v;
            $data[$k]['id'] = $k;
        }

        $arr = array_keys($areas);
        $map['home'] = array('in',$arr);
        $map['status'] = 1;
        $map['pro_type'] = 2;
        $data1 = M('goods')->where($map)->select();
        foreach ($data1 as $k => $v)
        {
            $data[$v['home']]['children'][] = $v;
        }


       return $data;
    }
    //商城公告模块
    public function getNews()
    {
            $map['type'] = 1;
            $map['status'] = 1;
            return M('news')->where($map)->order('create_time desc')->limit(4)->field('title')->select();
    }

}