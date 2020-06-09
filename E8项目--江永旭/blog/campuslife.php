

<?php
session_start();
include('connect.php');

$link=connect();
$sql="SELECT *FROM best ORDER BY id DESC";
$mysqli_result=mysqli_query($link, $sql);
$rows=array();
while($row=$mysqli_result->fetch_array(MYSQLI_ASSOC)){
$rows[]=$row;}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   
	<title>烟火阑珊处</title>
	<meta charset="utf-8">
	<link rel="stylesheet"type="text/css"href="body.css">
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
			<a href="class.php">学习网站</a>
			</li>
			</ul>

		</div>
		

	</div>

	<div class="layout-background">
	<div class="best">
	<div class="main">
		<div class="main-continer">
			<div class="main-left">

	<?php
	foreach($rows as $row){
	?>

	<div class="mainleft" >
		<div class="item">
		<div class="name" ><?php  echo $row['nickname'];?></div>
		<span class="time"><?php echo $row['time'];?></span>
		<a href="readall.php?id=<?php echo $row['id'];?>" class="b">阅读全文</a>
		<a href="do_delete.php?id=<?php echo $row['id'];?>" class="a">删除</a></br>
		<h><?php echo $row['title'];?></h>
		<P class="content"><?php echo $row['content'];?></P>
		</div>
	</div>
	<?php
	}
	?>
			</div>
			<div class="main-right">
			<audio controls="controls">
  <source src="1.ogg" type="audio/ogg">
  <source src="1.mp3" type="audio/mpeg">
</audio>

</video>



<img src="g.jpeg">
			
			
			</div>
		</div>

	</div>
	</div>

</div>


</body>
</html>
