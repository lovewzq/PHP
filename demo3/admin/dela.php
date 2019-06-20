<?php
require_once '../dbconf.php';
$ID = $_GET['id'];
$sql = "delete from article where tid='$ID'";
$res = mysqli_query($link,$sql);
if($res){
    header("location:index.php");
}