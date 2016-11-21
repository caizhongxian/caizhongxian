<?php
    define('STATIC_URL' , '//static.caizhongxian.com/');
?>
<!DOCTYPE html>
<html>
<head>
<title>技术人</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link rel="Shortcut Icon" href="<?php echo STATIC_URL ?>images/favicon.ico"/>
<link rel="stylesheet" href="<?php echo STATIC_URL ?>css/reset.css" type="text/css" />
<link rel="stylesheet" href="<?php echo STATIC_URL ?>css/style20120618_black.css" type="text/css" />
<meta name="baidu-site-verification" content="AAoC6mqEr9LoTYB4" />
<meta name="msvalidate.01" content="A6E61DD5C53077B9E386A14828235A73" />
<!--[if IE 6]>
<script src="<?php echo STATIC_URL ?>js/DD_belatedPNG_0.0.8a.js"></script>
<script>
DD_belatedPNG.fix("#navigation li");
</script>
<![endif]-->
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?4f4925c6c309181b38e2216d5237715a";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>
<style>
</style>
<body>
<div id="wrap">
	<div id="header">
		<h1>Cai Zhongxian</h1>
		<h2>HTML<small>&</small>CSS<small>&</small>JS</h2>
		<p>心有多大 舞台就有多大</p>
	</div>
	<ul id="navigation" class="clear">
		<li class="home">
			<dl>
				<dt><a href="javascript:void(0);" hidefocus="true" class="off">首页</a></dt>
				<dd><a href="javascript:void(0);" hidefocus="true" class="on">首页</a></dd>
			</dl>
		</li>
		<li class="about">
			<dl>
				<dt><a href="javascript:void(0);" hidefocus="true" class="off">关于我</a></dt>
				<dd><a href="about" hidefocus="true" class="on" target="_blank">我的信息</a></dd>
			</dl>
		</li>
		<li class="model">
			<dl>
				<dt><a href="javascript:void(0);" hidefocus="true"  class="off">整站作品</a></dt>
				<dd><a href="exercise/qq/" hidefocus="true" class="on" target="_blank">企业门户</a></dd>
				<dd><a href="exercise/ds/" hidefocus="true" class="on" target="_blank">电子商务</a></dd>
				<dd><a href="exercise/yx/" hidefocus="true" class="on" target="_blank">游戏网站</a></dd>
			</dl>
		</li>
		<li class="cms">
			<dl>
				<dt><a href="javascript:void(0);" hidefocus="true"  class="off">CMS模型</a></dt>
				<dd><a href="javascript:void(0);" hidefocus="true" class="on" target="_blank">小型门户</a></dd>
			</dl>
		</li>
		<li class="blog">
			<dl>
				<dt><a href="javascript:void(0);" hidefocus="true" class="off">Blog模型</a></dt>
				<dd><a href="blog" hidefocus="true"  class="on" target="_blank">博客</a></dd>
			</dl>
		</li>
		<li class="html5">
			<dl>
				<dt><a href="javascript:void(0);" hidefocus="true"  class="off">HTML5</a></dt>
				<dd><a href="javascript:void(0);" hidefocus="true" class="on"><small>(模块建设中)</small></a></dd>
				<dd><a href="javascript:void(0);" hidefocus="true" class="on">HTML5</a></dd>
			</dl>
		</li>
		<li class="mobile">
			<dl>
				<dt><a href="javascript:void(0);" hidefocus="true" class="off">移动端</a></dt>
				<dd><a href="javascript:void(0);" hidefocus="true" class="on"><small>(模块建设中)</small></a></dd>
				<dd><a href="javascript:void(0);" hidefocus="true" class="on">IOS</a></dd>
				<dd><a href="javascript:void(0);" hidefocus="true" class="on">Android</a></dd>
				<dd><a href="javascript:void(0);" hidefocus="true" class="on">WP</a></dd>
			</dl>
		</li>
	</ul>
</div>
<script type="text/javascript" src="<?php echo STATIC_URL ?>js/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {
        var d=300;
        $('#navigation li').each(function(){
            $(this).stop().animate({
                'marginTop':'-80px'
            },d+=150);
        });

        $('#navigation > li').hover(
        function () {
            $($(this)).stop().animate({
                'marginTop':'-2px'
            },200,function(){
		$(this).find('dt').css('display','none');
		$(this).find('dd').fadeIn();
            });
        },
        function () {
            $($(this)).stop().animate({
                'marginTop':'-80px'
            },200,function(){
		$(this).find('dd').css('display','none');
		$(this).find('dt').fadeIn();
            });
        }
    );
    });
</script>
</body>
</html>