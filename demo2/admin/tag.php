<?php

session_start();
if (!isset($_SESSION['admin'])) {
    echo "<script>alert('你还没有登录！！！')</script>";
    header("location:login.html");
}

require_once '../sql.php';
$page = $_GET['page'];
if(!isset($page)){
    $page = 1;
}
$end_page = $page*5;
$start_page = $end_page-5;

$sql = "select * from tag order by tid desc limit ".$start_page.",".$end_page ;
$res = mysqli_query($con,$sql);

$sql1 = "select * from tag";
$res1 = mysqli_query($con,$sql1);
$num = mysqli_num_rows($res1);
if(($num%5==0)) {
    $N = $num/5;
}else{
    if($num%5<5){
        $N = $num/5+1;
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
                <li class="active"><a href="tag.php">标签</a></li>
                <li><a href="media.php">媒体</a></li>
                <li><a href="setting.php">设置</a></li>
            </ul>
        </div>
        <div class="main_right">
            <div class="main_top">
                <h1 style="margin-left: 50px;margin-bottom: 8px">操作</h1>
                <hr style="border: 1px solid #888">
                <div class="part">
                    <p style="margin-top: 20px;margin-left: 100px;margin-bottom: 20px;font-size: 20px"><a href="add_tag.php?type=tag">添加标签</a></p>
                </div>
                <div class="clear"></div>
                <h1 style="margin-left: 50px;margin-bottom: 8px">管理[<?php echo $num ;?>]</h1>
                <hr style="border: 1px solid #888">
                <div class="part">
                    <table style="width: 85%;min-width: 1000px;margin-left: 50px;text-align: center">
                        <tr style="font-size: 20px">
                            <td>选择</td>
                            <td>名称</td>
                            <td>日期</td>
                            <td colspan="2">操作</td>
                        </tr>
                        <?php
                        while ($row = mysqli_fetch_array($res)){

                            echo "<tr style='font-size: 14px'>";
                            echo '  <td height="40px"><input type="checkbox"></td>';
                            echo "  <td height='40px'>".$row[tname]."</td>";
                            echo "  <td height='40px'>".$row[tdate]."</td>";
                            echo " <td height='40px'><a href='rw_tag.php?type=tag&&id=".$row[tid]."'>修改</a> </td>" ;
                            echo " <td height='40px'><a href='deal/del_class.php?type=tag&&id=".$row[tid]."' >删除</a></td>" ;
                            echo "</tr>";

                        }
                        ?>
                    </table>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="main_foot">

                <ul class="pagination" style="margin-top: 50px;position: absolute;right: 100px;">

                    <li><a href="<?php
                        if($page>1){
                            echo "class.php?page=".($page-1);
                        }
                        ?>">«</a></li>
                    <?php
                    for($i=1;$i<=$N;$i++){
                        if($i==$page){
                            echo '<li><a class="active" href="class.php?page='.$page.'">'.$page.'</a></li>';
                        }else{
                            echo '<li><a href="class.php?page='.$i.'">'.$i.'</a></li>';
                        }
                    }
                    ?>
                    <li><a href="<?php
                        if($N>2&&$page<$N){
                            echo "class.php?page=".($page+1);
                        }
                        ?>">»</a></li>
                </ul>
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