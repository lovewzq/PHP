<?php
require_once '../dbconf.php';
header("content-type:text/html;charset=utf-8");
$ID = $_GET['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$tag = "生活";
$writer = "墨尘";
$date = date("y-m-d");
$pic = '2.jpg';
$sql = "update article set title='$title',date='$date',content='$content' where tid='$ID'";
$res = mysqli_query($link,$sql);

if($res){
    header("location:index.php");
}else{
    header("location:index.php");
}
