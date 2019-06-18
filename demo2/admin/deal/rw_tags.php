<?php
require_once '../../sql.php';
header("content-type:text/html;charset=utf-8");
$type = $_GET['type'];
$name =$_POST['name'];
$rename =$_POST['rename'];
$fa_name =$_POST['fa_name'];
$date = $_POST['date'];
$ID = $_GET['id'];
if($type=='tag'){
    $sql = "update tag set tname='$name',tdate='$date' where tid='$ID'";
    $res = mysqli_query($con, $sql);
    if($res){
        header("location:../tag.php");
    }else{
        echo "失败!";
    }
}
if($type=='class'){
    $sql = "update class set cname='$name',crename='$rename',cfaname='$fa_name',cdate='$date' where cid='$ID'";
    $res = mysqli_query($con, $sql);
    if($res){
        header("location:../class.php");
    }else{
        echo "失败!";
    }
}