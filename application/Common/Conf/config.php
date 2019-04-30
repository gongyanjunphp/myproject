<?php
return array(
    //'配置项'=>'配置值'
    'SHOW_PAGE_TRACE' =>true,
    // 默认阻止访问的模块
    'MODULE_DENY_LIST'      =>  array('Common','Runtime'),
    // 默认允许访问的模块
    'MODULE_ALLOW_LIST'      =>  array('Admin','Home'),
    // 默认访问模块
    'DEFAULT_MODULE'        =>  'Home',
    // 默认控制器名称
    'DEFAULT_CONTROLLER'    =>  'index',
    // 默认操作名称
    'DEFAULT_ACTION'        =>  'index',
    // 定义每页显示数量
    'PAGESIZE' => 9,
    'TMPL_PARSE_STRING'  => array(
        // 下标是路径常量
        // 值是绝对路径
        //  / 根路径，指代的就是  myoa目录
        '__ADMIN__' => '/Public/Admin',
        '__ADMINCSS__' => '/Public/Admin/css',
        '__ADMINJS__' => '/Public/Admin/js',
        '__ADMINIMG__' => '/Public/Admin/images',

        '__HOME__' => '/Public/Home',
        '__HOMECSS__' => '/Public/Home/css',
        '__HOMEJS__' => '/Public/Home/js',
        '__HOMEIMG__' => '/Public/Home/images',
        '__FAVICON__' => '/Public/Favicon/favicon.ico',
    ),

    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'myproject',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'sb_',    // 数据库表前缀
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8

);

