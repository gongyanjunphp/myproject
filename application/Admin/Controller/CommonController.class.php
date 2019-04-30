<?php 
//声明命名空间
namespace Admin\Controller;
//引入基础控制器
use Think\Controller;
//创建通用控制器
class CommonController extends Controller{
	function _initialize(){

	if(!session('?name')){
		$this->error('请先登录后在访问',U('Admin/Login/login'),3);
		}
	}
}