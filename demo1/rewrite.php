<?php
session_start();
//var_dump($_SESSION['admin']);
include ("config.php");
$con=mysqli_connect(HOST,USER,PASS,DBNAME);
$ID = $_GET['id'];
$_SESSION['ID'] = $ID;

$sql="select * from comment where id='$ID'";
$res=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

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

<div class="container">
    <div class="row">
        <div class="span12">
            <ul class="nav nav-pills">
                <li class="active">
                    <a href="index.php">首页</a>
                </li>
                <li>
                    <a href="#">资料</a>
                </li>
                <li class="disabled">
                    <a href="#">信息</a>
                </li>
                <li class="dropdown pull-right">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">个人<strong class="caret"></strong></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">
                                <?php
                                if(empty($_SESSION['admin'])){
                                    echo "<a href='login.html'>登录</a>";
                                }else{
                                    echo "<a href='lgout.php'>注销</a>";
                                }
                                ?>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <h3 class="text-center">
                留言系统1.0
            </h3>
            <form action="deal.php?type=rw" method="post">
            <table class="table">
                <thead>
                <tr>
                    <th>
                        姓名
                    </th>
                    <th>
                        邮箱
                    </th>
                    <th>
                        发表时间
                    </th>
                    <th>
                        内容
                    </th>
                </tr>
                </thead>

                <?php
                while ($row = mysqli_fetch_array($res)){
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<td><input type='text' name='name' value='".$row['name']."'></td>";
                    echo "<td><input type='text' name='email' value='".$row['email']."'></td>";
                    echo "<td><input type='date' name='time' value='".$row['time']."'></td>";
                    echo "<td><input type='text' name='content' value='".$row['content']."'></td>";
                    echo "<td><input type='submit' value='修改'></td>";
                    echo "</tr>";
                    echo "</tbody>";
}
?>
            </form>
        </div>

    </div>

    <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
</body>
</html>
