<?php
session_start();
include('connect.php');
$link=connect();
$id=$_GET['id'];
$sql = "select * from best where `id`='$id'";
$is=mysqli_query($link,$sql);
$val = mysqli_fetch_array($is , MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
	<title>烟火阑珊处</title>
	<meta charset="utf-8">
	<link rel="stylesheet"type="text/css"href="readall.css">
</head>
<body class="bg-body">

	
<div class="background-container" id="laybackground">
	<div class="layout-head" >
		<div class="layout-head-inner" id="headcontainer" >
			<div class="head-info"style="width:215px;height:59px;">
				<h1 class="toptitle" id="toptitle">
					<span class="title-text">烟火阑珊处</span>
				</h1>
			    <div class="head-description">
					<span class="description-text">我们的世界</span>
				</div>

			</div>
		</div>
	</div>


	<div class="layout-nav">
		<div class="layout-nav-inner">
		<ul class="nav">
		<li class="list-item">
			<a href="campuslife.php">主页</a>
			</li>

		<li class="list-item">
			<a href="whether1.php">个人中心</a>
			</li>
		
		<li class="list-item">
			<a href="whether.php">文章</a>
			</li>
		<li class="list-item">
			<a href="image.php">相册</a>
			</li>
		<li class="list-item">
			<a href="dream.php">梦想墙</a>
			</li>
								
		<li class="list-item">
			<a href="class.html">学习网站</a>
			</li>
			</ul>

		</div>
		

	</div>

	<div class="layout-background">
	<div class="best">
	<div class="main">
		<div class="main-continer">
			<div class="main-left">

	

	<div class="mainleft" >
		<div class="item">
		<div class="name" ><?php  echo $_SESSION['nickname'];?></div>
		<span class="time"><?php echo $val['time'];?></span>
		<a href="do_delete.php?id=<?php echo $val['id'];?>" class="a">删除</a></br>
		<h><?php echo $val['title'];?></h>
		<P class="content"><?php echo $val['content'];?></P>
		</div>
	</div>
		</div>
			<div class="main-right">
			<audio controls="controls">
  <source src="1.ogg" type="audio/ogg">
  <source src="1.mp3" type="audio/mpeg">
</audio>
			
	<img src="g.jpeg">		
			
			</div>
		</div>

	</div>
	</div>

</div>


</body>
</html>
