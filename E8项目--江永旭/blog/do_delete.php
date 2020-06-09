<?php
session_start();
if(isset($_SESSION['name'])==false){
echo ' <script language="javascript">  alert("请登录！！！"); window.location.href="login.php"   </script>';
exit;}
include('connect.php');
$link=connect();
$id=$_GET['id'];
$sql="DELETE from best where id='{$id}'";
$is=mysqli_query($link,$sql);
if($is==true){
	header("Location:campuslife.php");
}else{
	echo '<script>alert("删除失败,请刷新重试");</script>';
}