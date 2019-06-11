<?php
//数据删除
include ("config.php");
header("content-type:text/html;charset=utf-8");

$id=$_GET['id'];
//连接数据库
$con=mysqli_connect(HOST,USER,PASS,DBNAME);
$sql="delete from comment where id='$id'";
$res=mysqli_query($con,$sql);
if($res){
    echo "<script>alert('删除成功！')</script>";
    header("Refresh:0.5;url=index.php");
}else{
    echo "<script>alert('删除失败！')</script>";
    header("Refresh:0.5;url=index.php");
}

