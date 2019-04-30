<?php
//用于密码加密的函数，参数是明文的密码，规则可以自己任意去写
function getPwd($pwd){
    $key = 'BJ_php_53';
    $str = substr(sha1($key), 9,10); //10位长度
    $pwd = substr(sha1($pwd), 19,10);   //10位长度
    return sha1($str . $pwd);
}
