
<?php
include('connect.php');
$link=connect();
$id=$_GET['id'];
$sql = "select * from best where `id`='$id'";
$is=mysqli_query($link,$sql);
$val = mysqli_fetch_array($is , MYSQLI_ASSOC);
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>留言板</title>
	<link rel="stylesheet" href="./css/common.css">
	<link rel="stylesheet" href="./css/write.css">

</head>
<body>
	<div class="blog">
		<!-- 导航 -->
		<div class="nav" name="top">
			<a href="manage.php">返回管理文章</a>
		</div>
		<div class="main">
	
			<form action="do_edit.php?id=<?php echo $_GET['id'];?>" method="POST">
		<input  class="title" name="title"type="text" placeholder="请输入文章标题"  value=<?php echo $val['title']?>>
				<textarea  placeholder="请输入正文" class="content"name="content" ><?php echo $val['content']?></textarea>
				<input class="submitBtn" type="submit" name="sub" value="编辑留言">
			</form>
		</div>
		<!-- 底部 -->
		<div class="footer">
			<p>&copy;版权所有: 江永旭</p>
		</div>
	</div>
</body>
</html>