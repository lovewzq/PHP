<?php
require_once '../sql.php';
//定义$image用于存储FILES的image信息
$image = $_FILES['image'];
//定义$filename获取image信息的filename
$filename = $image['name'];

if(move_uploaded_file($image['tmp_name'],"../update/".$image['name'])){
    $name = explode('.',$filename);
    $time = time();
    $newname = $time.".".$name[1];
    $newPath = '../update/'.$time.'.'.$name[1];
    $oldPath = '../update/'.$image['name'];
    rename($oldPath,$newPath);
    $sql = "insert into media(mid,mname) values ('','$newname')";
    $res = mysqli_query($con,$sql);
    if($res){
        header("location:media.php");
    }
} else{
    header("location:media.php");
}