<?php
namespace Home\Controller;
use Think\Controller;
class CompanyController extends Controller {
    public function index(){
        //1.实例化company模型
        $company = M('company');
        //2.调用find方法查询全部数据
        $info = $company ->where(array('isshow'=>1))->find();
        //3.分配查询结果到视图
        $this->assign('info',$info);
        $this->display('Index');
    }
}