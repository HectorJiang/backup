<?php
    function connect()
    {
        $dbInfo = [
            'host' => 'localhost',
            'username' => 'root',
            'password' => '',
            'dbname' => 'jyx',
        ];

        $conn = mysqli_connect(
            $dbInfo['host'],
            $dbInfo['username'],
            $dbInfo['password'],
            $dbInfo['dbname']
        );//$con=mysqli_connect(....);先链接后判断是否链接成功，然后在选择数据表（mysql_select_db(

        if(!$conn){
            echo '连接数据库失败,错误信息为:'.mysqli_connect_error();
        }
        mysqli_query($conn , "set names utf8");
        return $conn;
    }
	?>