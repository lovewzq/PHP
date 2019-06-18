<?php
session_start();
if(!isset($_SESSION['admin'])){
    echo "<script>alert('你还没有登录！！！')</script>";
    header("location:login.html");
}
require_once '../sql.php';
$sql1 = "select * from article";
$res1 = mysqli_query($con,$sql1);
$num1 = mysqli_num_rows($res1);
$sql2 = "select * from class";
$res2 = mysqli_query($con,$sql2);
$num2 = mysqli_num_rows($res2);
$sql3 = "select * from tag";
$res3 = mysqli_query($con,$sql3);
$num3 = mysqli_num_rows($res3);
$sql4 = "select sum(ahots) as num from article";
$res4 = mysqli_query($con,$sql4);
$row4 = mysqli_fetch_array($res4);
$num4 = $row4['num'];
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>主页</title>
    <link rel="stylesheet" type="text/css"  href="css/main.css">
    <link rel="stylesheet" href="../css/font_awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"  href="css/fenye.css">
</head>
<body>
<div class="box">
    <div class="top">
        <ul>
            <li class="logo"><a href="../index.php">缘憶青</a> </li>
            <div class="top_right">
                <li><span class="icon">&#xf002</span>搜索</li>
                <li><a href="index.php"><span class="icon">&#xf015</span>主页</a></li>
                <li><a href="#"><span class="icon">&#xf2c0</span>个人</a> </li>
                <li><a href="deal/lgout.php"><span class="icon">&#xf011</span>注销</a> </li>
            </div>
        </ul>
    </div>
    <div class="clear"></div>
    <div class="main">
        <div class="main_left">
            <ul>
                <li class="active"><a href="index.php"><span class="icon">&#xf200</span>报告</a></li>
                <li><a href="artical.php"><span class="icon">&#xf0f6</span>文章</a></li>
                <li><a href="pages.php"><span class="icon">&#xf1ea</span>页面</a></li>
                <li><a href="class.php"><span class="icon">&#xf0dc</span>分类</a></li>
                <li><a href="tag.php"><span class="icon">&#xf02b</span>标签</a></li>
                <li><a href="media.php"><span class="icon">&#xf03e</span>媒体</a></li>
                <li><a href="setting.php"><span class="icon">&#xf013</span>设置</a></li>
            </ul>
        </div>
        <div class="main_right">
            <div class="main_top">
                <h1 style="margin-left: 50px;margin-bottom: 8px">信息总览</h1>
                <hr style="border: 1px solid #888">
                <div class="part1">
                    <ul>
                        <li>
                            <p><h3>文章</h3></p>
                            <p><a href="artical.php" style="text-decoration: none;color: #000" ><?php echo $num1;?>篇</a></p>
                        </li>
                        <li>
                            <p><h3>分类</h3></p>
                            <p><a href="class.php" style="text-decoration: none;color: #000" ><?php echo $num2;?>种</a></p>
                        </li>
                        <li>
                            <p><h3>标签</h3></p>
                            <p><a href="tag.php" style="text-decoration: none;color: #000" ><?php echo $num3;?>个</a></p>
                        </li>
                        <li>
                            <p><h3>访问</h3></p>
                            <p><?php echo $num4;?>次</p>
                        </li>
                    </ul>
                </div>
                <div class="clear"></div>
                <h1 style="margin-left: 50px;margin-bottom: 8px">系统信息</h1>
                <hr style="border: 1px solid #888">
                <div class="part2">
                </div>

            </div>
        </div>
    </div>
</div>

<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="../Public/js/jquary.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="../Public/js/bootstrap.min.js"></script>
</body>
</html>