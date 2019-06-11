<?php
session_start();
include ("config.php");
header("content-type:text/html;charset=utf-8");
$con = mysqli_connect(HOST, USER, PASS, DBNAME);
$user = $_POST['user'];
$password = $_POST['password'];

$sql = "select * from user_1 where name='$user' and password='$password'";
$res = mysqli_query($con,$sql);
$num = mysqli_num_rows($res);
//session_destroy();
if($num>0){
    echo "登录成功！";
    $_SESSION['admin'] = 1;
    header("Refresh:0.5;url=index.php");
}else{
    echo "登录失败！";
    header("Refresh:0.5;url=login.html");
}

