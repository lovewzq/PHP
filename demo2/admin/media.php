<?php
session_start();
require_once '../sql.php';
if(!isset($_SESSION['admin'])){
    echo "<script>alert('你还没有登录！！！')</script>";
    header("location:login.html");
}
$page = $_GET['page'];
if(!isset($page)){
    $page = 1;
}
$end_page = $page*8;
$start_page = $end_page-8;

$sql = "select * from media order by mid desc limit ".$start_page.",".$end_page ;
$res = mysqli_query($con,$sql);

$sql1 = "select * from media";
$res1 = mysqli_query($con,$sql1);
$num = mysqli_num_rows($res1);
if(($num%8==0)) {
    $N = $num/8;
}else{
    if($num%8<8){
        $N = $num/8+1;
    }
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
    <link rel="stylesheet" type="text/css"  href="css/main.css">
    <link rel="stylesheet" type="text/css"  href="css/pic.css">
    <link rel="stylesheet" type="text/css"  href="css/fenye.css">
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
                <li><a href="pages.php">页面</a></li>
                <li><a href="class.php">分类</a></li>
                <li><a href="tag.php">标签</a></li>
                <li class="active"><a href="media.php">媒体</a></li>
                <li><a href="setting.php">设置</a></li>
            </ul>
        </div>
        <div class="main_right">
            <div class="main_top">
                <h1 style="margin-left: 50px;margin-bottom: 8px">图片预览</h1>
                <hr style="border: 1px solid #888">
            </div>
            <?php


                        while ($row = mysqli_fetch_array($res)) {
                            echo "<ul class='pic'>";
                            echo "<li><img src='../update/" . $row[mname] . "'></li>";
                            echo "</ul>";
                        }

            ?>

            <div class="clear"></div>
            <div class="pic_update" style="position: absolute;right: 220px;margin-top: 50px">
                <form action="update.php" method="post" enctype="multipart/form-data" target="image-iframe">
                    <input type="file" name="image" accept="image/gif,image/jpeg,image/jpg,image/png,image/svg" style="width: 300px;height: 50px">
                    <input type="submit" value="上传" style="width: 100px;height: 50px">
                </form>
            </div>
            <div class="clear"></div>
            <hr>
            <ul class="pagination" style="position: absolute;right: 220px;margin-top: 150px;">

                <li><a href="<?php
                    if($page>1){
                        echo "media.php?page=".($page-1);
                    }
                    ?>">«</a></li>
                <?php
                for($i=1;$i<=$N;$i++){
                    if($i==$page){
                        echo '<li><a class="active" href="media.php?page='.$page.'">'.$page.'</a></li>';
                    }else{
                        echo '<li><a href="media.php?page='.$i.'">'.$i.'</a></li>';
                    }
                }
                ?>
                <li><a href="<?php
                    if($N>2&&$page<$N){
                        echo "media.php?page=".($page+1);
                    }
                    ?>">»</a></li>
            </ul>

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