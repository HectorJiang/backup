<?php
    include_once 'function.php';
    $link = connect();
	$nickname = empty($_POST['nickname']) ? '' : strip_tags($_POST['nickname']);
    $name = empty($_POST['name']) ? '' : strip_tags($_POST['name']);
    $password = empty($_POST['password']) ? '' : strip_tags($_POST['password']);
    $rePassword = empty($_POST['rePassword']) ? '' : strip_tags($_POST['rePassword']);
	


  $sql = "select * from better where `nickname`='$nickname'";

    $res = mysqli_query($link,$sql);//如果没有打开的连接，本函数会尝试无参数调用 mysql_connect() 函数来建立一个连接并使用之。



    $val = mysqli_fetch_array($res , MYSQLI_ASSOC);
    if($val){
        echo '<script language="javascript">  alert("该昵称已被注册，请重新换个昵称！！！"); window.location.href="register.php"   </script>';
		exit;
    }
	


    if(empty($name)||empty($password)||empty($rePassword)||empty($nickname)){
        /*echo '请完善输入信息';
        header('Refresh:2;url=register.php');
        die;*/
        echo '<script language="javascript">  alert("请完善输入信息！！！"); window.location.href="register.php"   </script>';
		exit;
    }

    if($password != $rePassword){
        /*echo '两次输入的密码不一致';
        header('Refresh:2;url=register.php');
        die*/;
         echo '<script language="javascript">  alert("两次输入的密码不一致！！！"); window.location.href="register.php"   </script>';
		 exit;
    }
	if(strlen($name)>191||strlen($password)<5||strlen($password)>18||strlen($nickname)>191){
        echo '<script language="javascript">  alert("账号或密码或昵称过长或者过短！！！"); window.location.href="register.php"   </script>';
		exit;
    }
	
    $sql = "select * from better where `name`='$name'";
    $res = mysqli_query($link , $sql);
    $val = mysqli_fetch_array($res , MYSQLI_ASSOC);
    if($name == $val['name']){
        echo ' <script language="javascript">  alert("该账户已存在！！！"); window.location.href="register.php"   </script>';
    }

    $password = md5($password);
    $sql ="insert into better(`name` , `password`,`nickname`)values(? , ? ,?)";
    $stmt = $link -> prepare($sql);
    if($stmt){
        $stmt -> bind_param('sss',$dbName , $dbPassword,$dbnickname);
        $dbName = $name;
        $dbPassword = $password;
		$dbnickname=$nickname;
        $stmt -> execute();
        $stmt -> close();
        
		
		echo ' <script language="javascript">  alert("注册成功！！！"); window.location.href="login.php"   </script>';
    }else{
        echo ' <script language="javascript">  alert("注册失败！！！"); window.location.href="register.php"   </script>';
    }
?>