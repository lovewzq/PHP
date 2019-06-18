<?php
session_start();
require_once '../sql.php';
if(!isset($_SESSION['admin'])){
    echo "<script>alert('你还没有登录！！！')</script>";
    header("location:login.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css"  href="css/main.css">
    <link rel="stylesheet" type="text/css"  href="css/pic.css">
    <link rel="stylesheet" href="editormd/css/editormd.css" />
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
                <li  class="active"><a href="artical.php">文章</a></li>
                <li><a href="pages.php">页面</a></li>
                <li><a href="class.php">分类</a></li>
                <li><a href="tag.php">标签</a></li>
                <li><a href="media.php">媒体</a></li>
                <li><a href="setting.php">设置</a></li>
            </ul>
        </div>
        <form action="deal/add.php" method="post">
        <div class="main_right">
            <div class="main_top">
                <input type="text" name="title" required placeholder="请输入标题" style="width: 100%;min-width: 1000px;height: 50px;line-height: 50px">
                <p>&nbsp;</p>
                <input type="text" name="pic_name" autocomplete="off" required placeholder="请选择图片" list="list" style="width: 100%;min-width: 1000px;height: 50px;line-height: 50px">
                <datalist id="list">
<!--                    <option value="aaa"></option>-->
                    <?php
                    $sql1 = "select * from media order by mid desc limit 5";
                    $res1 = mysqli_query($con,$sql1);
                    while ($row1 = mysqli_fetch_array($res1)){
                        echo "<option value='".$row1[mname]."'></option>";
                    }
                    ?>
                </datalist>
                <p>&nbsp;</p>
            </div>

<div id="test-editor">
<!--    <textarea style="display:none;">### 关于 Editor.md-->
<!---->
<!--**Editor.md** 是一款开源的、可嵌入的 Markdown 在线编辑器（组件），基于 CodeMirror、jQuery 和 Marked 构建。-->
<!--    </textarea>-->

        <textarea style="display:none;" name="test-editormd-markdown-doc" id="content"" ></textarea>

</div>
            <div class="main_foot">
        <input type="text" name="tag" autocomplete="off" list="tag" required placeholder="请输入标签" style="width: 20%;min-width: 200px;height: 50px;line-height: 50px">

                <datalist id="tag">
                    <!--                    <option value="aaa"></option>-->
                    <?php
                    $sql2 = "select * from tag order by tid desc limit 5";
                    $res2 = mysqli_query($con,$sql2);
                    while ($row1 = mysqli_fetch_array($res2)){
                        echo "<option value='".$row1[tname]."'></option>";
                    }
                    ?>
                </datalist>
            </div>

        <input type="text" name="class" autocomplete="off" list="class" required placeholder="请输入分类" style="width: 20%;min-width: 200px;height: 50px;line-height: 50px">
            <datalist id="class">
                <!--                    <option value="aaa"></option>-->
                <?php
                $sql3 = "select * from class order by cid desc limit 5";
                $res3 = mysqli_query($con,$sql3);
                while ($row1 = mysqli_fetch_array($res3)){
                    echo "<option value='".$row1[cname]."'></option>";
                }
                ?>
            </datalist>
        <input type="date" name="date"  style="width: 25%;min-width: 300px;height: 50px;line-height: 50px;font-size: 14px">

        <input type="submit" value="发布" style="min-width: 150px;height: 50px;line-height: 50px;">
    </div>

<script src="editormd/jquery.js"></script>
<script src="editormd/editormd.min.js"></script>

<script type="text/javascript">
    $(function() {
        var editor = editormd("test-editor", {
            width  : "100%",
            height : "500px",
            path   : "editormd/lib/"
        });
    });
</script>
            </form>
        </div>
    </div>

</div>
</body>
</html>