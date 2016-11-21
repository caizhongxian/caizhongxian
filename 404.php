<?php
    $curUrl = $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
?>
<!DOCTYPE html>
<html lang="zh-CN" >
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>这个页面全是报错不知道你是怎么跑到这里来的真心为你感到应该是为我感到可惜怎么把这样难看的一个页面展现在了用户面前我也为你感到可惜可是你到底怎么来的呢</title>
    <meta http-equiv="refresh" content="3;url=/?from=<?php echo $curUrl;?>">
</head>
<body>
<h1 style="position:absolute; left:0; top:30%; width: 100%; font:30px/50px Arial; text-align:center; vertical-align:bottom;">
    <span style="font-size:50px;">:)</span>啊哦，&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />木有找到该页面<br /><span id="gotime" style="font-size:20px;">3秒后跳转到首页</span>
</h1>
<script>
    window.onload=function(){
        var t=3;
        setInterval(function(){
            t--;
            if(t>1){
                document.getElementById('gotime').innerHTML=t+'秒后跳转到首页';
            }else{
                document.getElementById('gotime').innerHTML='即将跳转到首页';
            }
        },1000);
    }
</script>
</body>
</html>