<?php
require_once '../sql.php';
//����$image���ڴ洢FILES��image��Ϣ
$image = $_FILES['image'];
//����$filename��ȡimage��Ϣ��filename
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