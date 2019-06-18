<?php
require_once '../../sql.php';
$id = $_GET['id'];
$sql="delete from article where aid='$id'";
$res=mysqli_query($con,$sql);
if($res){

    header("location:../artical.php");
}else{

    header("location:../artical.php");
}
