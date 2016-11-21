<?php
    define('STATIC_URL' , '//static.caizhongxian.com/');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />
    <title>技术人</title>
    <link rel="Shortcut Icon" href="<?php echo STATIC_URL ?>images/favicon.ico" />
    <link href="<?php echo STATIC_URL ?>../css/about.css" rel="stylesheet" type="text/css" />
    <!-- <link href="http://fonts.googleapis.com/css?family=Cabin+Sketch:bold" rel="stylesheet" type="text/css" />-->
    <script src="<?php echo STATIC_URL ?>../js/jquery.js" type="text/javascript"></script>
    <script src="<?php echo STATIC_URL ?>../js/html5.js" type="text/javascript"></script>
    <script src="<?php echo STATIC_URL ?>../js/raphael.js" type="text/javascript"></script>
    <script src="<?php echo STATIC_URL ?>../js/init.js" type="text/javascript"></script>
    <!--[if IE 6]>
    <script src="../js/DD_belatedPNG_0.0.8a.js"></script>
    <script>DD_belatedPNG.fix(".png");</script><![endif]-->
</head>

<body>
<!--[if IE 9]><p style="font-size:10px; color:#999;">&lt;IE9下Bug正在研究解决，建议您使用标准浏览器浏览，体验HTML5带来的更多精彩，谢谢！&gt;</p><![endif]-->
<!--[if IE 6]><p style="font-size:10px; color:#999;">&lt;建议您使用标准浏览器浏览，体验HTML5带来的更多精彩，谢谢！&gt;</p><![endif]-->
<div id="content" class="clear">
    <div class="legend">
        <h1>About:</h1>
        <div class="skills">
            <ul class="clear">
                <li class="subject">前端开发工程师</li>
                <li class="subskills">精通网页制作&amp;JS探究ing</li>
                <li class="div">HTML+CSS</li>
                <li class="js">JS</li>
            </ul>
        </div>
    </div>
    <div id="diagram"></div>
</div>
<div class="footer">
    <div class="inside"><strong>Tel:</strong>&nbsp;<span>18888888888</span>&nbsp;<strong>QQ:</strong>&nbsp;<span>123456</span>&nbsp;<strong>Email:</strong>&nbsp;<a href="javascript:;">mail@domain.com</a></div>
</div>
<div class="get">
    <div class="arc"><span class="text">JavaScript</span>
        <input type="hidden" class="percent" value="95" />
        <input type="hidden" class="color" value="#97BE0D" />
    </div>
    <div class="arc"><span class="text">CSS3</span>
        <input type="hidden" class="percent" value="90" />
        <input type="hidden" class="color" value="#D84F5F" />
    </div>
    <div class="arc"><span class="text">HTML5</span>
        <input type="hidden" class="percent" value="80" />
        <input type="hidden" class="color" value="#88B8E6" />
    </div>
    <div class="arc"><span class="text">PHP</span>
        <input type="hidden" class="percent" value="53" />
        <input type="hidden" class="color" value="#BEDBE9" />
    </div>
    <div class="arc"><span class="text">MySQL</span>
        <input type="hidden" class="percent" value="45" />
        <input type="hidden" class="color" value="#EDEBEE" />
    </div>
</div>
</body>
</html>
