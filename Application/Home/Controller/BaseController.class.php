<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/16 0016
 * Time: 10:03
 */

namespace Home\Controller;

use Think\Controller;

class BaseController extends Controller
{
    protected $user_info;

    public function  __construct()
    {
        parent::__construct();

        $this->user_info=array('id'=>2);

//        $this->user_info =  session('User_yctr');
//        if(!$this->user_info){
//            $this->redirect('Public/login');
//        }

    }

}
