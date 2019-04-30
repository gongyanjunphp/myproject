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
class  FacilityController extends CommonController{
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
        $this->assign('pagesize', $pagesize);
        // 接收当前页号
        $pageno = I('get.p', 1);
        //1.实例化facility模型
        $facility = D('facility');
        //2.调用select方法查询全部数据
        $facility_list = $facility->page($pageno,$pagesize) ->select();
        //3.分配查询结果到视图
        $this->assign('facility_list',$facility_list);
        //产生分页导航条
        //1. 获取User表中的总记录数
        $count = $facility->count();
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

        //5. 实例化facility模型
        $facility = D('facility');
        //获取上传文件的保存路径
        $data['picpath'] = I('post.picpath');
        $data['createtime'] =  date("Y-m-d H:i:s");
        $data['title'] = I('post.title');
        $data['status'] = I('post.status');
        //调用add方法进行数据表插入操作
        if($facility->add($data)){
            $this->success('添加成功', U('index'), 3);
        } else {
            $this->error('添加失败', U('add'), 3);
        }
    }
    
    function del(){
        //1. 接收get传递的参数
        $id = I('get.id');
        //2. 实例化facility模型
        $facility = D('facility');
        $info = $facility -> find();
        unlink ($info['picpath']);
        //3. 调用delete方法来进行数据删除
        if($facility->delete($id)){
            $this->success('删除成功', U('index'),3);
        } else {
            $this->error('删除失败', U('index'),3);
        }
    }

    function dels(){
        //1. 接收get方式传递的参数
        $ids = I('get.id');
        //echo $ids;die;
        //2. 实例化facility模型
        $facility = D('facility');
        //3. 调用delete方法进行删除
        if($facility->delete($ids)){
            $this->success('批量删除成功', U('index'), 3);
        } else {
            $this->error('批量删除失败', U('index'), 3);
        }
    }

    function edit(){
        //1. 接收id值
        $id = I('get.id');
        //2. 实例化facility模型
        $facility = D('facility');
        //3. 根据id查询部门信息
        $facility_info = $facility->find($id);
        //4. 分配到模板
        $this->assign('info', $facility_info);
        //5. 调用模板显示
        $this->display();
    }

    function modify(){
        //实例化facility模型
        $facility = D('facility');
        //1. 接收id值
        $id = I('post.id');
        //2.根据id查询部门信息
        $facility_info = $facility->find($id);
        //3.赋值
        $picpath = I('post.picpath');
        if($picpath){
            unlink ($facility_info['picpath']);
            $path = $picpath;
        }else{
            $path = $facility_info['picpath'];
        }


        //获取上传文件的保存路径
        $data['picpath'] = $path;
        $data['createtime'] =  date("Y-m-d H:i:s");
        $data['status'] = $_POST['status'];
        $data['title'] = $_POST['title'];
        $data['id'] = $_POST['id'];
        //6. 调用save方法进行数据表修改操作
        if($facility->save($data)){
            $this->success('修改成功', U('index'), 3);
        } else {
            $this->error('修改失败', U('edit', 'id='.I('post.id')), 3);
        }
    }

    function fileOk(){
        $facility = session('facility');
        if($facility){
            unlink ($facility);
        }
        //1. 自定义文件上传的配置项
        $config = array(
            'exts' => array('jpg', 'png' ,'gif', 'docx', 'rar'),
            'rootPath' => './Uploads/'
        );
        //2. 实例化文件上传类
        $upload = new \Think\Upload($config);
        //3. 调用upload方法进行上传
        $info = $upload->upload();
        //4. 判断返回值$info，如果为false，输出错误信息，反之，显示上传信息
        if(!$info){
            echo $upload->getError();
        }
        //获取上传文件的保存路径
        $path = './Uploads/'.$info['file']['savepath'].$info['file']['savename'];
        session('facility',$path);//图片地址
        if($path){
            $msg["code"] = 0;
            $msg["urlfile"] = $path;
        }else{
            $msg["code"] =1;
        }
        echo json_encode($msg);
        die();
    }
}