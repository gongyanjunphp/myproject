<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>网站后台管理</title>
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/main.css"/>
    <script type="text/javascript" charset="utf-8" src="/Public/Admin/ue/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/Admin/ue/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="/Public/Admin/ue/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript">
        //实例化编辑器
        var ue = UE.getEditor('ue',{toolbars: [[
                'fullscreen', 'source', '|', 'undo', 'redo', '|',
                'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
                'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
                'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
                'directionalityltr', 'directionalityrtl', 'indent', '|',
                'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
                'link', 'unlink', 'anchor', '|', 'imagenone', 'imageleft', 'imageright', 'imagecenter', '|',
                'simpleupload', 'insertimage', 'emotion', 'scrawl', 'insertvideo', 'music'
            ]]});

    </script>
    <script type="text/javascript" src="/Public/Admin/js/libs/modernizr.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/jquery1.42.min.js"></script>
    <script >
        $(function(){
            $("#nowtime").css({color:'red'});
            $("#host").html(location.host);
            //alert(location.host);
            window.setInterval('ShowTime()',1000);
        });
        function ShowTime(){
            var t = new Date();
            var str = t.getFullYear() + '年';
            str += t.getMonth()+1 + '月';
            str += t.getDate() + '日 ';
            str += t.getHours() + ':';
            str += t.getMinutes() + ':';
            str += t.getSeconds() + '';
            $("#nowtime").html(str);
        }

        function getOS() {
            var sUserAgent = navigator.userAgent;
            var isWin = (navigator.platform == "Win32") || (navigator.platform == "Windows");
            var isMac = (navigator.platform == "Mac68K") || (navigator.platform == "MacPPC") || (navigator.platform == "Macintosh") || (navigator.platform == "MacIntel");
            if (isMac) return "Mac";
            var isUnix = (navigator.platform == "X11") && !isWin && !isMac;
            if (isUnix) return "Unix";
            var isLinux = (String(navigator.platform).indexOf("Linux") > -1);
            if (isLinux) return "Linux";
            if (isWin) {
                var isWin2K = sUserAgent.indexOf("Windows NT 5.0") > -1 || sUserAgent.indexOf("Windows 2000") > -1;
                if (isWin2K) return "Win2000";
                var isWinXP = sUserAgent.indexOf("Windows NT 5.1") > -1 || sUserAgent.indexOf("Windows XP") > -1;
                if (isWinXP) return "WinXP";
                var isWin2003 = sUserAgent.indexOf("Windows NT 5.2") > -1 || sUserAgent.indexOf("Windows 2003") > -1;
                if (isWin2003) return "Win2003";
                var isWinVista= sUserAgent.indexOf("Windows NT 6.0") > -1 || sUserAgent.indexOf("Windows Vista") > -1;
                if (isWinVista) return "WinVista";
                var isWin7 = sUserAgent.indexOf("Windows NT 6.1") > -1 || sUserAgent.indexOf("Windows 7") > -1;
                if (isWin7) return "Win7";
                var isWin10 = sUserAgent.indexOf("Windows NT 10") > -1 || sUserAgent.indexOf("Windows 10") > -1;
                if (isWin10) return "Win10";
            }
            return "other";
        }

    </script>
</head>
<body>


<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="<?php echo U('Admin/index/index');?>">首页</a></li>
                <li><a href="./" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li>上次登录时间:<?php echo (date("Y-m-d H:i:s",session('time'))); ?></li>
                <li><a href=""><?php echo (session('name')); ?></a></li>
                <li><a href="<?php echo U('Admin/Login/logout');?>">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
<!--左侧菜单栏-->

<!--左侧菜单栏 begin-->
<div class="sidebar-wrap">
    <div class="sidebar-title">
        <h1>菜单</h1>
    </div>
    <div class="sidebar-content">
        <ul class="sidebar-list">
            <li>
                <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                <ul class="sub-menu">
                    <li><a href="<?php echo U('Admin/Comprofile/index');?>"><i class="icon-font">&#xe005;</i>企业概况</a></li>
                    <li><a href="<?php echo U('Admin/Honor/index');?>"><i class="icon-font">&#xe007;</i>资质荣誉</a></li>
                    <li><a href="<?php echo U('Admin/Facility/index');?>"><i class="icon-font">&#xe00f;</i>设备工艺</a></li>
                    <li><a href="<?php echo U('Admin/Live/index');?>"><i class="icon-font">&#xe01a;</i>生活示例</a></li>
                    <li><a href="<?php echo U('Admin/Goods/index');?>"><i class="icon-font">&#xe012;</i>产品介绍</a></li>
                    <li><a href="<?php echo U('Admin/Contactus/index');?>"><i class="icon-font">&#xe01d;</i>联系我们</a></li>
                    <li><a href="<?php echo U('Admin/Knowledge/index');?>"><i class="icon-font">&#xe013;</i>塑料袋知识</a></li>
                    <li><a href="<?php echo U('Admin/Price/index');?>"><i class="icon-font">&#xe016;</i>塑料袋价格</a></li>
                    <li><a href="<?php echo U('Admin/Notice/index');?>"><i class="icon-font">&#xe01c;</i>通知中心</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                <ul class="sub-menu">
                    <li><a href="<?php echo U('Admin/Login/editpwd');?>"><i class="icon-font">&#xe017;</i>修改密码</a></li>
                    <li><a href="#"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                    <li><a href="#"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!--左侧菜单栏 begin-->

    <!--右侧主操作区-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i>
                <a href="?p=back">首页</a>
                <span class="crumb-step">&gt;</span>
                <span class="crumb-name">塑料袋知识</span>
                <span class="crumb-step">&gt;</span>
                <span class="crumb-name">添加内容</span>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="<?php echo U('addOk');?>" method="post" id="myform" enctype='multipart/form-data'>
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>标题：</th>
                                <td>
                                    <input type="text" name="title"/>
                                </td>
                            </tr>
                            <tr>
                                <th>内容:</th>
                                <td>
                                    <textarea id="ue" style="width: 800px;height: 200px;" name="content" class="common-textarea" cols="60" rows="4"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <th><i class="require-red">*</i>是否开启：</th>
                                <td>
                                    <input type="radio" name="isshow" value="1" >开启
                                    <input type="radio" name="isshow" value="0"  checked="checked">关闭
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>

        </div>

    </div>
    <!--/右侧主操作区-->
</div>

</body>
</html>