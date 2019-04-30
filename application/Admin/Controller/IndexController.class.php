<?php
//1. 声明命名空间
namespace Admin\Controller;
//2. 引入控制器基类
use Think\Controller;

//3. 编写Index控制器
class IndexController extends CommonController{
    //4. 编写index方法
    function index(){
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
        $this->assign('str', $str);
        $this->assign('weatherData', $weatherData);
        $this->assign('ip', $_SERVER['SERVER_ADDR']);
        $this->display('index');
    }
}