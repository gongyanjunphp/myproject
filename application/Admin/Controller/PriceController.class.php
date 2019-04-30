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
class  PriceController extends CommonController{
    function index(){
        //模糊查询
        $where[] = '1=1';
        //获取查询的字段
        $keywords = I('post.keywords');
        if($keywords){
            $where['title'] = array('like',"%$keywords%");
        }
        // 定义每页显示数量
        $pagesize = C('PAGESIZE');
        // 接收当前页号
        $pageno = I('get.p', 1);
        //1.实例化price模型
        $price = D('price');
        //2.调用select方法查询全部数据
        $price_list = $price->page($pageno,$pagesize) ->select();
        //3.分配查询结果到视图
        $this->assign('price_list',$price_list);
        //产生分页导航条
        //1. 获取User表中的总记录数
        $count = $price->count();
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
        //5. 实例化price模型
        $price = D('price');
        $data['title'] =  $_POST['title'];
        $data['createtime'] =  date("Y-m-d H:i:s");
        $data['content'] = $_POST['content'];
        $data['isshow'] = $_POST['isshow'];
        //调用add方法进行数据表插入操作
        if($price->add($data)){
            $this->success('添加成功', U('index'), 3);
        } else {
            $this->error('添加失败', U('add'), 3);
        }
    }
    
    function del(){
        //1. 接收get传递的参数
        $id = I('get.id');
        //2. 实例化price模型
        $price = D('price');
        $info = $price -> find();
        unlink ($info['illustration']);
        //3. 调用delete方法来进行数据删除
        if($price->delete($id)){
            $this->success('删除成功', U('index'),3);
        } else {
            $this->error('删除失败', U('index'),3);
        }
    }

    function dels(){
        //1. 接收get方式传递的参数
        $ids = I('get.id');
        //echo $ids;die;
        //2. 实例化price模型
        $price = D('price');
        //3. 调用delete方法进行删除
        if($price->delete($ids)){
            $this->success('批量删除成功', U('index'), 3);
        } else {
            $this->error('批量删除失败', U('index'), 3);
        }
    }

    function edit(){
        //1. 接收id值
        $id = I('get.id');
        //2. 实例化price模型
        $price = D('price');
        //3. 根据id查询部门信息
        $price_info = $price->find($id);
        //4. 分配到模板
        $this->assign('info', $price_info);
        //5. 调用模板显示
        $this->display();
    }

    function modify(){
        //实例化price模型
        $price = D('price');
        //获取上传文件的保存路径
        $data['title'] = $_POST['title'];;
        $data['createtime'] =  date("Y-m-d H:i:s");
        $data['content'] = $_POST['content'];
        $data['isshow'] = $_POST['isshow'];
        $data['id'] = $_POST['id'];
        //6. 调用save方法进行数据表修改操作
        if($price->save($data)){
            $this->success('修改成功', U('index'), 3);
        } else {
            $this->error('修改失败', U('edit', 'id='.$info['price_id']), 3);
        }
    }
}