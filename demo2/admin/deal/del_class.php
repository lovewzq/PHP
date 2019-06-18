<?php
require_once '../../sql.php';
$id = $_GET['id'];
$type = $_GET['type'];
if(!isset($_GET['id'])){
    echo "";
    header("location:../index.php");
}else{
    if($type == 'class'){

        $sql="delete from class where cid='$id'";
    }
    if($type == 'tag'){
        $sql="delete from class where tid='$id'";
    }
}
$res=mysqli_query($con,$sql);
if($res){
//    echo "<script>alert('删除成功！')</script>";
    header("location:../$type.php");
}else{
//    echo "<script>alert('删除失败！')</script>";
    header("location:../$type.php");
}
