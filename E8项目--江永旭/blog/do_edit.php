<?php
    

	if(isset($_POST['sub'])){

	$title=$_POST['title'];
	$content=$_POST['content'];}
	



	


if($content==''){
		echo '<script language="javascript">  alert("留言内容不能为空！！！"); window.location.href="edit.php"   </script>';
		exit;
	}
if($title==''){
		echo '<script language="javascript">  alert("标题不能为空！！！"); window.location.href="edit.php"   </script>';
		exit;
	}

	include('connect.php');
	$link=connect();
	$id=$_GET['id'];
	$sql="update best set title='$title',content='$content' where id='$id'";
	$is= mysqli_query($link,$sql);
	if($is){
		echo '<script language="javascript">  alert("编辑成功！！！"); window.location.href="campuslife.php"   </script>';
	}else{
		echo"编辑失败，系统出现错误";
	}



	?>