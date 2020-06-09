<?php
include('connect.php');
$link=connect();
$id=$_GET['id'];
$sql="DELETE from best where id='{$id}'";
$is=mysqli_query($link,$sql);
if($is==true){
	header("Location:manage.php");
}else{
	echo '<script>alert("删除失败,请刷新重试");</script>';
}