<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //1.实例化company模型
        $company = M('company');
        $model = D();
        //2.调用find方法查询全部数据
        $info = $company ->where(array('isshow'=>1))->find();
        session('hits',$info['hits']);//访问量
        //3.分配查询结果到视图
        $this->assign('info',$info);
        //1.实例化company模型
        $knowledge = M('knowledge');
        //2.调用select方法查询全部数据
        $ret = $knowledge ->where(array('isshow'=>1))->order('id desc')->select();
        //3.分配查询结果到视图
        $this->assign('ret',$ret);
        //1.实例化company模型
        $price = M('price');
        //2.调用select方法查询全部数据
        $res = $price ->where(array('isshow'=>1))->order('id desc')->select();
        //3.分配查询结果到视图
        $this->assign('res',$res);
        //1.实例化company模型
        $notice = M('notice');
        //2.调用select方法查询全部数据
        $result = $notice ->where(array('isshow'=>1))->order('id desc')->select();
        //3.分配查询结果到视图
        $this->assign('result',$result);
        $baiduak='CiEwAVN72cVAuHLzNRAMjzpY';//百度地图api的密钥
        $ip = get_ip();
        $getCity = getCity($ip,$baiduak);
        $weatherData = weatherData($getCity,$baiduak);
        $date = date('H');
        if($date <= 6 ){
            $str =  "夜深了,请注意休息哟&nbsp&nbsp ";
        }else if ($date<= 9){
            $str =  "早上好&nbsp&nbsp ";
        } else if( $date <= 11){
            $str =  "上午好&nbsp&nbsp ";
        }else if( $date <= 13){
            $str =  "中午好&nbsp&nbsp ";
        }else if( $date<= 17){
            $str =  "下午好&nbsp&nbsp ";
        }else if($date<= 19){
            $str =  "傍晚好&nbsp&nbsp ";
        } else if($date<= 23){
            $str =  "晚上好&nbsp&nbsp ";
        }
        $sql = "UPDATE sb_company set hits=hits+1 WHERE id =".$info['id'];
        $model->execute($sql);
        $this->assign('str', $str);
        $this->assign('weatherData', $weatherData);
        $this->display('Index');
    }

    //塑料袋小常识
    function knowledge(){
        //1. 接收id值
        $id = I('get.id');
        //2. 实例化goods模型
        $knowledge = D('knowledge');
        //3. 根据id查询部门信息
        $info = $knowledge->find($id);
        //4. 分配到模板
        $this->assign('info', $info);
        //5. 调用模板显示
        $this->display();
    }

    //塑料袋小常识
    function price(){
        //1. 接收id值
        $id = I('get.id');
        //2. 实例化goods模型
        $knowledge = D('price');
        //3. 根据id查询部门信息
        $info = $knowledge->find($id);
        //4. 分配到模板
        $this->assign('info', $info);
        //5. 调用模板显示
        $this->display();
    }

    //通知中心
    function notice(){
        //1. 接收id值
        $id = I('get.id');
        //2. 实例化goods模型
        $knowledge = D('notice');
        //3. 根据id查询部门信息
        $info = $knowledge->find($id);
        //4. 分配到模板
        $this->assign('info', $info);
        //5. 调用模板显示
        $this->display();
    }
}