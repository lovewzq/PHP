<?php
session_start();
if(!isset($_SESSION['admin'])){
    echo "<script>alert('你还没有登录！！！')</script>";
    header("location:login.html");
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>主页</title>
    <!-- Bootstrap -->
    <link href="../Public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"  href="css/main.css">
</head>
<body>
<div class="box">
    <div class="top">
        <ul>
            <li class="logo">缘憶青</li>
            <div class="top_right">
                <li>搜索</li>
                <li><a href="#">主页</a></li>
                <li><a href="#">个人</a> </li>
                <li><a href="#">注销</a> </li>
            </div>
        </ul>
    </div>
    <div class="clear"></div>
    <div class="main">
        <div class="main_left">
            <ul>
                <li><a href="index.php">报告</a></li>
                <li><a href="artical.php">文章</a></li>
                <li class="active"><a href="pages.php">页面</a></li>
                <li><a href="class.php">分类</a></li>
                <li><a href="tag.php">标签</a></li>
                <li><a href="media.php">媒体</a></li>
                <li><a href="setting.php">设置</a></li>
            </ul>
        </div>
        <div class="main_right"></div>
    </div>
</div>

<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="../Public/js/jquary.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="../Public/js/bootstrap.min.js"></script>
</body>
</html>