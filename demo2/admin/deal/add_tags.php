<?php
require_once '../../sql.php';
header("content-type:text/html;charset=utf-8");
$type = $_GET['type'];
$name =$_POST['name'];
$rename =$_POST['rename'];
$fa_name =$_POST['fa_name'];
$date = $_POST['date'];

echo $type;
echo $name;
if($type=='tag'){
    $sql = "insert into tag(tid,tname,tdate) values ('','$name','$date')";
    $res = mysqli_query($con, $sql);
    if($res){
        header("location:../tag.php");
    }else{
        echo "失败!";
    }
}
if($type=='class'){
    $sql = "insert into class(cid,cname,crename,cfaname,cdate) values ('','$name','$rename','$fa_name','$date')";
    $res = mysqli_query($con, $sql);
    if($res){
        header("location:../class.php");
    }else{
        echo "失败!";
    }
}