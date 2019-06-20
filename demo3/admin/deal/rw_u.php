<?php
require_once '../../dbconf.php';
$ID = $_GET['id'];
$name = $_POST['user'];
$pass = $_POST['password'];
$sql1 = "update user set uname='$name',upass='$pass' where uid='$ID'";;
$res1 = mysqli_query($link, $sql1);
if($res1){
    header("location:../index.php");
}

