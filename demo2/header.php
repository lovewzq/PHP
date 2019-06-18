<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title><?php echo $web_title;?></title>
<!--    <link rel="stylesheet" type="text/css" href="Home/css/main.css">-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css"  href="admin/css/fenye.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <link rel="stylesheet" href="admin/editormd/css/editormd.css" />
    <link rel="stylesheet" href="css/font_awesome/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <div class="box">

        <div class="header">
            <div class="center">
                <ul class="nav">
                    <li><a href="index.php">主页</a></li>
                    <li><a href="">文摘</a></li>
                    <li><a href="">技术</a></li>
                    <li><a href="">生活</a></li>
                    <li><a href="">关于</a></li>
                </ul>
            </div>
        </div>


        <div class="content">
            <div class="body_nav">
                <img src="update/<?php echo $web_pic;?>" style="width: 100%;height: 100%;overflow: hidden;">
            </div>
            <div class="blank"></div>
            <div class="content_body">