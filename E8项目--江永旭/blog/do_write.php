<?php
session_start();

	if(isset($_POST['sub'])){

	$title=$_POST['title'];
	$content=$_POST['content'];}
	



	


if($content==''){
		echo '<script language="javascript">  alert("留言内容不能为空！！！"); window.location.href="write.php"   </script>';
		exit;
	}
if($title==''){
		echo '<script language="javascript">  alert("标题不能为空！！！"); window.location.href="write.php"   </script>';
		exit;
	}

	include('connect.php');
	$link=connect();
	$sql="INSERT INTO best(`title`,`content`,`nickname`)values('{$title}','{$content}','{$_SESSION['nickname']}')";
	$is= mysqli_query($link,$sql);
	if($is){

	

	

		echo '<script language="javascript">  alert("发表成功！！！"); window.location.href="campuslife.php"   </script>';
	}else{
		echo '<script language="javascript">  alert("发表失败，系统出现错误！！！"); window.location.href="campuslife.php"   </script>';
	}



	?>
	
	

    