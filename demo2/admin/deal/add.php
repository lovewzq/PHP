<?php
require_once '../../sql.php';
header("content-type:text/html;charset=utf-8");

$title = $_POST['title'];
$content = $_POST['test-editormd-markdown-doc'];
$tag = $_POST['tag'];
$pic = $_POST['pic_name'];
$class = $_POST['class'];
$time = $_POST['date'];
$sql = "insert into article(aid,atitle,aclass,atag,comment,date,images,content) values ('','$title','$class','$tag ','0','$time','$pic','$content')";
$res = mysqli_query($con,$sql);
if($res){
    echo "添加成功！";
    header("location:../artical.php");
}else{
    echo "添加失败！";
    header("location:../artical.php");
}
