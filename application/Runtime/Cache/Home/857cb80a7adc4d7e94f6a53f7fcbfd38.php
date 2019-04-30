<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="/Public/Home/css/actcms.css" rel="stylesheet" type="text/css">
<title>忻州左所塑料袋厂-首页</title>
<meta name="keywords" content="忻州左所塑料袋厂">
<meta name="description" content="忻州左所塑料袋厂">

</head>
<style type=“text/css”>
body{width:auto;background:url(/Public/Home/images/body_bg.jpg) repeat-x; margin:0 auto;font-size:12px;font-family:"微软雅黑";}
</style>
<body>


 <!--网页头部-->

  <!--网页头部-->

<div style="background:url(/Public/Home/images/top_bg.jpg) no-repeat center top;width:auto;margin-left:auto;margin-right:auto;margin-top:0px; margin-bottom:0px;">
	<!--顶部-->
<div style="background:url(/Public/Home/images/logo_bg.jpg) no-repeat;width:1024px; margin-left:auto; margin-right:auto; margin-top:0px; margin-bottom:0px;overflow:hidden;">
		<!--logo-->
<div class="logo"></div>
</div>
	<!--导航菜单-->
<div class="menu">
<ul id="menu">
<li class="navthis"><li class=""><a href="<?php echo U('Home/Index/Index');?>">网站首页</a></li><li class="">
<a href="<?php echo U('Home/Company/Index');?>">企业概况</a></li><li class="">
<a href="<?php echo U('Home/Honor/Index');?>">资质荣誉</a></li><li class="">
<a href="<?php echo U('Home/Facility/Index');?>">设备工艺</a></li><li class="">
<a href="<?php echo U('Home/Live/Index');?>">工程示例</a></li><li class="">
<a href="<?php echo U('Home/Goods/Index');?>">产品介绍</a></li><li class="">
<a href="<?php echo U('Home/Contactus/Index');?>">联系我们</a></li>
</ul>
</div>
	<div style="text-align: center">
		<span><?php echo ($str); ?>&nbsp&nbsp今天是:<?php echo ($weatherData['date']); ?>&nbsp&nbsp<?php echo ($weatherData['results'][0]['weather_data'][0]['date']); ?>&nbsp&nbsp&nbsp&nbsp温度:&nbsp&nbsp<?php echo ($weatherData['results'][0]['weather_data'][0]['temperature']); ?>&nbsp&nbsp<?php echo ($weatherData['result']['windpower']); ?>&nbsp&nbsp天气：<?php echo ($weatherData['results'][0]['weather_data'][0]['weather']); ?>&nbsp&nbsp<img src="<?php echo ($weatherData['results'][0]['weather_data'][0]['dayPictureUrl']); ?>" width="20" height="20">～<img src="<?php echo ($weatherData['results'][0]['weather_data'][0]['nightPictureUrl']); ?>" width="20" height="20">&nbsp&nbsp&nbsp&nbsp<?php echo ($weatherData['results'][0]['weather_data'][0]['wind']); ?></span>
	</div>
</div>

<!--主要部分-->
<div class="main">
<div class="main_l">
<div class="about"><div class="pic_l2"><a href="http://www.jtcpw.com/List.asp?L-0730031663.Html"><img src="<?php echo (ltrim($info["illustration"],'.')); ?>" border="0" style="width: 300px" height="150px"></a></div>
<p><?php echo (substr($info["content"],0,800)); ?></p>
<div class="more"><a href="<?php echo U('Home/Company/Index');?>"><img src="/Public/Home/images/more.gif"></a></div> </div>
		<div class="pro">
			<!--标题-->
			<div class="pro_bt"><a href="http://www.jtcpw.com/List.asp?L-2623437845.html"><span>塑料袋知识</span></a></div>
			<div class="pro_nr"><img src="/Public/Home/images/pro1.jpg" width="210px" height="48px">
				<ul>
					<?php if(is_array($ret)): foreach($ret as $key=>$v): ?><li><a href="<?php echo U('knowledge', 'id='.$v[id]);?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
				</ul>
			</div>
		</div>
		<div class="pro">
			<!--标题-->
			<div class="pro_bt"><a href="http://www.jtcpw.com/List.asp?L-0715041351.html"><span>塑料袋价格</span></a></div>
			<div class="pro_nr"><img src="/Public/Home/images/pro2.jpg" width="210px" height="48px">
				<ul>
					<?php if(is_array($res)): foreach($res as $key=>$v): ?><li><a href="<?php echo U('price', 'id='.$v[id]);?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
				</ul>
			</div>
		</div>
		<div class="pro">
			<!--标题-->
			<div class="pro_bt"><a href="http://www.jtcpw.com/List.asp?L-3280592834.html"><span>通知中心</span></a></div>
			<div class="pro_nr"><img src="/Public/Home/images/pro3.jpg" width="210px" height="48px">
				<ul>
					<?php if(is_array($result)): foreach($result as $key=>$v): ?><li><a href="<?php echo U('notice', 'id='.$v[id]);?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
				</ul>
			</div>
</div>
</div>
<div class="main_r">
<div class="clear"></div>
<div class="zt">
<a href="http://www.jtcpw.com/List.asp?L-1811630630.html"><img src="/Public/Home/images/about_r.jpg" border="0"></a>
</div>
<div class="zt">
<p><img src="/Public/Home/images/tel.jpg" border="0"></p>
<p><img src="/Public/Home/images/email.jpg" border="0"></p>
</div>
 </div>
</div>
<div class="clear"></div>

<!--首页第二部分-->


<!--友情链接-->
<div class="act_link">
	<!--友情链接 标题-->

	<!--友情链接 内容-->
	<div class="act_link_nr">

	</div>
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