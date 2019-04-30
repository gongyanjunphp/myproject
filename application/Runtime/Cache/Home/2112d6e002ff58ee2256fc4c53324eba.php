<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>产品介绍_忻州左所塑料袋厂 　</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="/Public/Home/css/actcms.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="__FAVICON__" />
<link rel="bookmark" href="__FAVICON__" />
 </head>

<body>
 <!--网页头部-->
  <!--网页头部-->

<div class="header">
	<!--顶部-->
<div style="background:url(/Public/Home/images/logo_bg.jpg) no-repeat;width:1024px; margin-left:auto; margin-right:auto; margin-top:0px; margin-bottom:0px;overflow:hidden;">
		<!--logo-->
	<div class="logo">
	</div>
</div>	<!--导航菜单-->
	<div class="menu">
		<ul id="menu">
			<li class="navthis"><li class=""><a href="<?php echo U('Home/Index/Index');?>">网站首页</a></li><li class="">
			<a href="<?php echo U('Home/Company/Index');?>">企业概况</a></li><li class="">
			<a href="<?php echo U('Home/Honor/Index');?>">资质荣誉</a></li><li class="">
			<a href="<?php echo U('Home/Facility/Index');?>">设备工艺</a></li><li class="">
			<a href="<?php echo U('Home/Live/Index');?>">生活场景</a></li><li class="">
			<a href="<?php echo U('Home/Goods/Index');?>">产品介绍</a></li><li class="">
			<a href="<?php echo U('Home/Contactus/Index');?>">联系我们</a></li>
		</ul>
	</div></div>


<!--主要部分-->
<div class="main">
	<!--左边区块-->
	<div class="act_mr">
		<!--内容-->
		<div class="act_content">
			<!--当前位置-->
			<div class="weizhi"><span>当前位置： <a href="#">首页</a> &gt;  <a class=" &gt; " href="#">关于我们</a> &gt;&gt; <a class=" &gt; " href="#">资质荣誉</a> </span></div>
			<!--文章列表-->
				<ul class="list_img list_img_main">
					<?php if(is_array($goods_list)): foreach($goods_list as $key=>$v): ?><li><a href="<?php echo U('details', 'id='.$v[id]);?>" class="a_img"><img src="<?php echo (ltrim($v["picpath"],'.')); ?>"</a><a href="#" class="a_txt"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
				</ul>

			<!--分页-->
			<div class="pages">
				<?php echo ($str); ?>
			</div>
		</div>


	</div>
	<!--右边区块-->
	<div class="act_ml">
		<!--热门排行-->
		<div class="hot">
			<!--标题-->
			<div class="hot_bt"><span>关于我们</span></div>
			<div class="hot_nr">
				<ul>
					<span><a href="<?php echo U('Home/Company/Index');?>">企业概况</a></span><span><a href="<?php echo U('Home/Honor/Index');?>">资质荣誉</a></span><span><a href="<?php echo U('Home/Facility/Index');?>">设备工艺</a></span><span><a href="<?php echo U('Home/Live/Index');?>">生活场景</a></span><span><a href="<?php echo U('Home/Contactus/Index');?>">联系我们</a></span>
				</ul>
			</div>
		</div>
		<div class="hot">
			<!--标题-->
		</div>

		<!--最新文章-->
<div class="zt">
<p><img src="/Public/Home/images/tel.jpg" border="0"></p>
<p><img src="/Public/Home/images/email.jpg" border="0"></p>
</div>

	</div>
	<div class="clear"></div>
</div>
<!--网页底部-->
 <div class="footer">
	 <p>       copyright©2017—2019  忻州左所塑料袋厂版权所有 <a href="http://www.miitbeian.gov.cn/" target="_blank">晋ICP备10223081号-1</a>  电话：13994113557   邮箱：597097315@qq.com</p>

	 <div style="width:300px;margin:0 auto; padding:10px 0;">
		 <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=32048202000083" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img scr="/Public/Home/images/gongan.png" style="float:left;padding-top:10px"><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#fff;">晋公网安备 32048202000083号</p></a>
	 </div>
 </div>



</body></html>
<!-- Created Page at 2019-3-20 10:40:45 ,By ActCMS.Com ,ACT Content Management System(ActCMS)  -->