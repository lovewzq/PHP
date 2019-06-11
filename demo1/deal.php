<?php

session_start();
include ("config.php");
header("content-type:text/html;charset=utf-8");
//数据库连接
$con = mysqli_connect(HOST, USER, PASS, DBNAME);

//获取用户提交的数据
$name = $_POST['name'];
$email = $_POST['email'];
$time = $_POST['time'];
$content = $_POST['content'];
$type = $_GET['type'];
$ID = $_SESSION['ID'];

//判断用户数据是从哪里来的

if($type=='add'){
    $sql = "insert into comment(id,name,email,time,content) values ('','$name','$email','$time','$content')";
    $res = mysqli_query($con, $sql);
    if($res){
        echo "添加成功！";
        header("Refresh:1;url=index.php");
    }else{
        echo "添加失败！";
        header("Refresh:1;url=index.php");
    }
}

if($type=='rw'){
    $sql="update comment set name='$name',email='$email',time='$time',content='$content' where id='$ID'";
    $res=mysqli_query($con,$sql);
    if($res){
        echo "修改成功！";
        header("Refresh:0;url=index.php");
    }else{
        echo "修改失败！";
        header("Refresh:0;url=index.php");
    }
}



