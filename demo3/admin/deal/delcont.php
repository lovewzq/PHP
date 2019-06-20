<?php
require_once '../../dbconf.php';
$ID = $_GET['id'];
if($_GET['tid']){
    $TID = $_GET['tid'];
}
$sql = "delete from comment where cid='$ID'";
//echo $sql;
$res = mysqli_query($link,$sql);
//var_dump($res);
if($_GET['tid']){
    header("location:../../pages.php?id=$TID");
}else{
    header("location:../index.php");
}
