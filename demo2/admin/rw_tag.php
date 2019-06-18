<?php
require_once '../sql.php';
$type = $_GET['type'];
$ID = $_GET['id'];
if(!isset($type)){
    echo '';
    header("location:index.php");
}else{
    if($type=='tag'){
        $sql = "select * from tag where tid='$ID'";
        $res = mysqli_query($con, $sql);
        if($res){
            $row = mysqli_fetch_array($res);
            $name = $row['tname'];
            $date = $row['tdate'];
        }else{
            echo "标签失败!";
            header("location:tag.php");
        }
        $T = 'rw';
        require_once 'Theam/tags.php';
    }
    if($type=='class'){
        $sql = "select * from class where cid='$ID'";
        $res = mysqli_query($con, $sql);
        if($res){
            $row = mysqli_fetch_array($res);
            $name = $row['cname'];
            $rename = $row['crename'];
            $fa_name = $row['faname'];
            $date = $row['cdate'];
        }else{
            echo "分类失败!";
            header("location:class.php");
        }
        $T = 'rw';
        require_once 'Theam/class.php';

    }

}
?>