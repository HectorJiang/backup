
<?php

header("Content-Type:text/html;charset=utf-8");
    include'function.php';
	$link=connect();
	

    //strip_tags()函数剥去字符串中的 HTML、XML 以及 PHP 的标签。
    //三元运算符
    $name = empty($_POST['name']) ? '' : strip_tags($_POST['name']);
    $password = empty($_POST['password']) ? '' : strip_tags($_POST['password']);

    //完善信息
    if(empty($name)||empty($password)){
        echo '<script language="javascript">  alert("请完善信息！！！"); window.location.href="login.php"   </script>';
    }
   
   

    //通过用户输入的用户名，去数据库中查找
    $sql = "select * from better where `name`='$name'";

    $res = mysqli_query($link,$sql);//如果没有打开的连接，本函数会尝试无参数调用 mysql_connect() 函数来建立一个连接并使用之。



    $val = mysqli_fetch_array($res , MYSQLI_ASSOC);
	
   if(empty($val)){
         echo '<script language="javascript">  alert("没有找到该用户，请注册后登录！！！"); window.location.href="register.php"   </script>';
    }
	
    //$password是用户输入的密码，$val['password']是数据库中用户的密码;
    if(md5($password)==$val['password']){
        session_start();
        $_SESSION['name'] = $val['name'];
		$_SESSION['id']=$val['id'];
       
		$_SESSION['sex']=$val['sex'];
		$_SESSION['ad']=$val['ad'];
		$_SESSION['year']=$val['year'];
		$_SESSION['nickname']=$val['nickname'];
        setcookie("name" , $val['name'] , time()+3600);
        setcookie("uId" , $val['id'] , time()+3600);
		
		 
        echo ' <script language="javascript">  alert("登录成功！！！"); window.location.href="person.php"   </script>';
    }else{
        echo ' <script language="javascript">  alert("登录失败！！！"); window.location.href="login.php"   </script>';
    }
?>












