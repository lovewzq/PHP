<?php
session_start();
if(!isset($_SESSION['admin'])){
    echo "<script>alert('你还没有登录！！！')</script>";
    header("location:login.html");
}
require_once '../sql.php';
header("content-type:text/html;charset=utf-8");
$ID = $_GET['id'];
$sql = "select * from article where aid='$ID'";
$res = mysqli_query($con,$sql);
$row = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css"  href="css/main.css">
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
        <form action="deal/rw.php?id=<?php echo $ID;?>" method="post">
        <div class="main_right">
            <div class="main_top">
                <input type="text" name="title" required placeholder="请输入标题" value="<?php echo $row[atitle];?>" style="width: 100%;min-width: 1000px;height: 50px;line-height: 50px">
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div>

<div id="test-editor">
<!--    <textarea style="display:none;">### 关于 Editor.md-->
<!---->
<!--**Editor.md** 是一款开源的、可嵌入的 Markdown 在线编辑器（组件），基于 CodeMirror、jQuery 和 Marked 构建。-->
<!--    </textarea>-->

        <textarea style="display:none;" name="test-editormd-markdown-doc" id="content"" ><?php echo $row[content];?></textarea>

</div>
    <div class="main_foot">
        <input type="text" name="tag" required placeholder="请输入标签" value="<?php echo $row[atag];?>" style="width: 25%;min-width: 300px;height: 50px;line-height: 50px">

        <input type="text" name="class" required placeholder="请输入分类" value="<?php echo $row[aclass];?>" style="width: 25%;min-width: 300px;height: 50px;line-height: 50px">

        <input type="date" name="date" value="<?php echo $row[date];?>"  style="width: 25%;min-width: 300px;height: 50px;line-height: 50px;font-size: 14px">

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