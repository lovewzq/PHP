<?php
session_start();
header("content-type:text/html;charset=utf-8");
require_once '../../dbconf.php';
$name = $_POST['user'];
$pass = $_POST['password'];
$sql = "select * from user where uname='$name' and upass='$pass'";
//echo $sql;
$res = mysqli_query($link,$sql);

$num = mysqli_num_rows($res);
//echo $num;
if($num>=1){
    echo "µÇÂ¼³É¹¦£¡";
    $_SESSION['admin'] = 1;
    header("location:../index.php");
}else{
    echo "µÇÂ¼Ê§°Ü£¡";
    header("location:../login.html");
}