<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>登录到我们的世界</title>
	<link rel="stylesheet" href="./css/login.css">
</head>
<body>
	<div class="login">
		<h3>登录</h3>
		<form action="do_login.php?act=chk" method="post">
			
			<div>
				<label for="name">账号</label>
				<input id="name" name="name" class="input" type="text" placeholder="请输入账号">
			</div>
			<div>
				<label for="password">密&emsp;码</label>
				<input id="password" name="password" class="input" type="password" placeholder="请输入密码">
			</div>
			<input class="submit" type="submit" name="submievalue="登录">
		</form>
		<a href="register.php" >去注册</a></br>
		<a href="campuslife.php" >返回主页</a>
		
	</div>
</body>
</html>