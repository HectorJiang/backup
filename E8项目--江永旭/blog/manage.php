
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
    <meta charset="UTF-8">  
    <title>管理文章</title>  
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
							<a href="person.php" class="list-group-item ">个人信息</a>
                           
                            <a href="manage.php" class="list-group-item active">管理文章</a>
                           
                        </div>  
                    </div>  
                </div>  
                <div class="col-md-10">  
                    <div class="panel panel-default">  
                        <div class="panel-heading">  
                            <h4>文章管理列表</h4>  
                        </div> 
                        <div class="panel-body">  
                            <table class="table table-hover">  
                                <tr>  
                                    <th>ID</th>  
                                    <th>标题</th> 
                                    
                                    <th>操作</th>  
                                </tr>  
                                <tbody>
								<?php
								foreach($rows as $row){
								?>
                                    <tr>
                                            <td>    <?php echo $row['id'];?>    </td>
                                            <td>  <?php echo $row['title'];?>      </td>
                                            
                                            
                                        <td>
                                            <!--这里跳到修改文章页面,在后面传文章的id-->
                                           <a href="edit.php?id=<?php echo $row['id'];?>">
                                                <button type="button" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-pencil " ></i></button>
                                            </a>
                                            <a href="do_delete1.php?id=<?php echo $row['id'];?>" class="a">
                                                <button type="button" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash "></i></button>
                                            </a> 
                                        </td>  
                                    </tr>
                                   <?php
									}
									?>
		                        </tbody>
                            </table>  
                        </div>  
                    </div>  
                </div>  
            </div>  
        </div>  
    </div> 
  
</body>  
</html>  