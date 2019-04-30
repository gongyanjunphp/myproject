<?php
/**
 * Created by PhpStorm.
 * User: gongyanjun
 * Date: 2019/3/25
 * Time: 22:08
 */
//1. 声明命名空间
namespace Home\Controller;
//2. 引入控制器基类
use Think\Controller;
class  ContactusController extends Controller{
    function index(){
        //1.实例化company模型
        $company = M('contactus');
        //2.调用find方法查询全部数据
        $info = $company ->find();
        //3.分配查询结果到视图
        $this->assign('info',$info);
        $this->display('Index');
    }
}