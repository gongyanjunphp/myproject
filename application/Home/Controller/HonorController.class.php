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
class  HonorController extends Controller{
    function index(){
        // 定义每页显示数量
        $pagesize = C('PAGESIZE');
        // 接收当前页号
        $pageno = I('get.p', 1);
        //1.实例化honor模型
        $honor = M('honor');
        //2.调用select方法查询全部数据
        $honor_list = $honor->page($pageno,$pagesize) ->select();
        //3.分配查询结果到视图
        $this->assign('honor_list',$honor_list);
        //产生分页导航条
        //1. 获取User表中的总记录数
        $count = $honor->count();
        $this->assign('count', $count);
        //2. 实例化Page类
        $page = new \Think\Page($count, $pagesize);
        //3. 调用show方法产生分页导航条
        $str = $page->show();
        //4. 将导航条字符串分配到模板中输出
        $this->assign('str', $str);
        $this->display('Index');
    }

    //查看图片详情
    function details(){
        // 接收当前图片编码
        $id = I('get.id');
        //实例化honor模型
        $honor = M('honor');
        //调用find方法查询全部数据
        $info = $honor ->where("id='$id'")->find();
        //分配变量到模板
        $this->assign('info',$info);
        $this->display('details');
    }
}