<?php
session_start();
require_once '../../sql.php';
if(isset($_SESSION['admin'])){
    echo "<script>alert('���Ѿ���¼�ˣ���')</script>";
    header("location:login.html");
}

$user = $_POST['username'];
$pass = $_POST['password'];
$sql = "select * from user where user_name='$user' and user_password='$pass'";
$res = mysqli_query($con, $sql);
$num = mysqli_num_rows($res);

if ($num>=1){
    $_SESSION['admin']=1;
//    echo "��¼�ɹ���";
    header("location:../index.php");
}else{
//    echo "��¼ʧ�ܣ�";
    header("location:../login.html");
}

