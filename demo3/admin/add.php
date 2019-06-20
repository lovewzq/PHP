<?php
require_once '../dbconf.php';
header("content-type:text/html;charset=utf-8");
$title = $_POST['title'];
$content = $_POST['content'];
$tag = "生活";
$writer = "墨尘";
$date = date("y-m-d");
$pic = '2.jpg';
$sql = "insert into article(title,tag,writer,date,pic,content) values ('$title','$tag','$writer','$date','$pic','$content')";
$res = mysqli_query($link,$sql);

if($res){
    header("location:index.php");
}else{
    header("location:add_article.php");
}
