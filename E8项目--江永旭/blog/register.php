<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>注册</title>
	<link rel="stylesheet" href="./css/login.css">
</head>
<body>
	<div class="login register">
		<h3>注册</h3>
		<form action="do_reg.php" method="POST">

			<div>
				<label for="nickname">昵称</label>
				<input id="nickname" name="nickname" class="nickname" type="text" placeholder="请输入昵称">
			</div>
			<div>
				<label for="name">账号</label>
				<input id="name" class="name"name="name" type="text" placeholder="请输入账号">
			</div>
			<div>
				<label for="password">密&emsp;码</label>
				<input id="password" class="password" name="password"type="password" placeholder="请输入密码">
			</div>
			<div>
				<label for="password">确认密码</label>
				<input id="password" class="rePassword" name="rePassword"type="password" placeholder="请输入确认密码">
			</div>
			<input class="submit" type="submit" value="注册">
		</form>
		<a href="login.php">去登录</a></br>
		<a href="campuslife.php" >返回主页</a>
	</div>
</body>
</html>