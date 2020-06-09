


<!DOCTYPE html>


<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>个人信息</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="page-header ex-page-header">
			<h1 class="title">个人中心</h1>
			<nav class="nav">
				<a class="login" href="campuslife.php">返回主页</a>
			</nav>
		</div>
		<div class="body-container">
			<div class="row">
				<div class="col-md-2">
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
						</div>
						<div class="list-group">
							<a href="person.html" class="list-group-item active">个人信息</a>
							<a href="manage.php" class="list-group-item">管理文章</a>
						
						</div>
					</div>
				</div>
				<div class="col-md-10">
					<div >
						<?php session_start();?>
						昵称：<?php echo $_SESSION['nickname'];?></br>
						账号:<?php echo $_SESSION['name'] ;?></br>
						
						<a href="logout.php?action=logout">注销</a>
						
						
						
					
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>