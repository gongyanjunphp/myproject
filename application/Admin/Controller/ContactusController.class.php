<?php
/**
 * Created by PhpStorm.
 * User: gongyanjun
 * Date: 2019/3/25
 * Time: 22:08
 */
//1. 声明命名空间
namespace Admin\Controller;
//2. 引入控制器基类
use Think\Controller;
class  ContactusController extends CommonController{
    function index(){
        // 定义每页显示数量
        $pagesize = C('PAGESIZE');
        $this->assign('pagesize', $pagesize);
        // 接收当前页号
        $pageno = I('get.p', 1);
        //1.实例化contactus模型
        $contactus = D('contactus');
        //2.调用select方法查询全部数据
        $contactus_list = $contactus->page($pageno,$pagesize) ->select();
        //3.分配查询结果到视图
        $this->assign('contactus_list',$contactus_list);
        //产生分页导航条
        //1. 获取User表中的总记录数
        $count = $contactus->count();
        $this->assign('count', $count);
        //2. 实例化Page类
        $page = new \Think\Page($count, $pagesize);
        //3. 调用show方法产生分页导航条
        $str = $page->show();
        //4. 将导航条字符串分配到模板中输出
        $this->assign('str', $str);
        $this->display();
    }

    function add(){
        $this->display();
    }

    function addOk(){
        //实例化contactus模型
        $contactus = D('contactus');
        //获取上传文件的保存路径
        $data['company'] = $_POST['company'];
        $data['address'] = $_POST['address'];
        $data['postalcode'] = $_POST['postalcode'];
        $data['telephone'] = $_POST['telephone'];
        $data['email'] = $_POST['email'];
        $data['createtime'] =  date("Y-m-d H:i:s");
        //调用add方法进行数据表插入操作
        if($contactus->add($data)){
            $this->success('添加成功', U('index'), 3);
        } else {
            $this->error('添加失败', U('add'), 3);
        }
    }
    
    function del(){
        //1. 接收get传递的参数
        $id = I('get.id');
        //2. 实例化contactus模型
        $contactus = D('contactus');
        //3. 调用delete方法来进行数据删除
        if($contactus->delete($id)){
            $this->success('删除成功', U('index'),3);
        } else {
            $this->error('删除失败', U('index'),3);
        }
    }

    function dels(){
        //1. 接收get方式传递的参数
        $ids = I('get.id');
        //echo $ids;die;
        //2. 实例化contactus模型
        $contactus = D('contactus');
        //3. 调用delete方法进行删除
        if($contactus->delete($ids)){
            $this->success('批量删除成功', U('index'), 3);
        } else {
            $this->error('批量删除失败', U('index'), 3);
        }
    }

    function edit(){
        //1. 接收id值
        $id = I('get.id');
        //2. 实例化contactus模型
        $contactus = D('contactus');
        //3. 根据id查询部门信息
        $contactus_info = $contactus->find($id);
        //4. 分配到模板
        $this->assign('info', $contactus_info);
        //5. 调用模板显示
        $this->display();
    }

    function modify(){
        //实例化contactus模型
        $contactus = D('contactus');
        //1. 接收id值
        $id = I('post.id');
        $data['company'] = $_POST['company'];
        $data['address'] = $_POST['address'];
        $data['postalcode'] = $_POST['postalcode'];
        $data['telephone'] = $_POST['telephone'];
        $data['email'] = $_POST['email'];
        $data['createtime'] =  date("Y-m-d H:i:s");
        $data['id'] = $id;
        //6. 调用save方法进行数据表修改操作
        if($contactus->save($data)){
            $this->success('修改成功', U('index'), 3);
        } else {
            $this->error('修改失败', U('edit', 'id='.$info['contactus_id']), 3);
        }
    }
}