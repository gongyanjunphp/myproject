<?php
/**
 * Created by PhpStorm.
 * User: gongyanjun
 * Date: 2019/3/28
 * Time: 21:09
 */

/**
 * 获取城市名称
 * @param string $ip ip地址(必须为有效ip)
 * return string $city  城市名称，如济南
 */
function getCity($ip='',$ak=''){
    $content = file_get_contents("http://api.map.baidu.com/location/ip?ak=$ak&ip=$ip&coor=bd09ll");
    $json = json_decode($content,true);
    if($json['status'] !=0){
        $city='忻州';     //如果状态码出错默认走济南
    }else{
        $address=$json['address'];
        $cityarr=explode("|", $address);
        $city=$cityarr['2'];//不带"市",如"济南",而不是"济南市"
    }
    return $city;
}
 function get_ip(){
    if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")){
        $ip = getenv("HTTP_CLIENT_IP");
    }else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
    {$ip = getenv("HTTP_X_FORWARDED_FOR");}
    else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
        $ip = getenv("REMOTE_ADDR");
    else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
        $ip = $_SERVER['REMOTE_ADDR'];
    else $ip = "unknown";
    return($ip);
}
//获取天气预报
function  weatherData($city='',$ak=''){
    $url = "http://api.map.baidu.com/telematics/v3/weather?location=$city&output=json&ak=$ak";
    $ch  = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    $data = curl_exec($ch);
    $result = json_decode($data,true);
    curl_close($ch);
    return $result;
}