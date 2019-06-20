<?php
session_start();
require_once 'dbconf.php';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>墨 尘</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
</head>
<body>


<!--导航栏-->
<div class="container">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">墨尘</a>
            </div>
            <ul class="nav navbar-nav navbar-left">
                <li><a class="" href="#">关于我</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if(isset($_SESSION['admin'])){
                    echo '<li><a href="admin/deal/lgout.php"><span class="glyphicon glyphicon-log-in"></span> 注销</a></li>';
                }else{
                    echo '<li><a href="admin/login.html"><span class="glyphicon glyphicon-user"></span> 登录</a></li>';
                }
                ?>

            </ul>
        </div>
    </nav>
</div>
<!--顶部巨幕-->
<div class="container">
    <div class="jumbotron">
        <h1>Hello, world!</h1>
        <p>...</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
    </div>
</div>
<!--中间内容-->
<div class="container">
    <!--第一个盒子-->
    <div class="row">
        <?php
        $sql = "select * from article";
        $res = mysqli_query($link,$sql);
        while ($row = mysqli_fetch_array($res)){

         echo '<div class="col-sm-6 col-md-4">';
         echo   '<div class="thumbnail">';
         echo '<img src="img/'.$row["pic"].'" alt="" style="width: 350px; height: 220px;">';
         echo      '<div class="caption">';
         echo         '<h3>'.$row["title"].'</h3>';
         echo         '<p><a href="pages.php?id='.$row["tid"].'" class="text-muted">';
         echo                 '<em>'.$row["content"].'</em></a></p>';
         echo        '<p class="text-muted text-right">发布时间：'.$row["date"].'</p>';
         echo     '</div>';
         echo '</div>';
         echo '</div>';

        }
        ?>
    </div>
</div>


<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
</body>
</html>