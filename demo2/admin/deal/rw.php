<?php
require_once '../../sql.php';
header("content-type:text/html;charset=utf-8");
$ID = $_GET['id'];
$title = $_POST['title'];
$content = $_POST['test-editormd-markdown-doc'];
$tag = $_POST['tag'];
$class = $_POST['class'];
$time = $_POST['date'];
$sql = "update article set atitle='$title',aclass='$class',atag='$tag',date='$time',content='$content' where aid='$ID';";
$res = mysqli_query($con,$sql);

if($res){
    header("location:../index.php");
}else{
    header("location:../artical.php");
}

