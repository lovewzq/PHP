<?php
session_start();
header("content-type:text/html;charset=utf-8");
unset($_SESSION['admin']);
echo "注销成功！";
header("Refresh:0.5;url=index.php");
