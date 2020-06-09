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
			<a href="campuslife.php">返回主页</a>
		</div>
		<div class="main">
			<form action="do_write.php" method="POST">
				<input class="title" name="title"type="text" placeholder="请输入文章标题">
				<textarea placeholder="请输入正文" class="content"name="content"></textarea>
				<input class="submitBtn" type="submit" name="sub" value="发表留言">
			</form>
		</div>
		<!-- 底部 -->
		<div class="footer">
			<p>&copy;版权所有: 江永旭</p>
		</div>
	</div>
</body>
</html>