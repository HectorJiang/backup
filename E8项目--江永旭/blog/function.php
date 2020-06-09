<?php
    include'connect.php';
	$link=connect();
    /**
     * @param $msg 显示的信息
     * @param $url 跳转的页面
     */
    function msg($msg , $url)
    {
        echo "<center><h2>$msg!</h2></center>";
        header("Refresh:2;url=$url.php");
        die;
    }

  
    
    function loginOrNot()
    {
        session_start();
        $sess_name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
        $cook_name = isset($_COOKIE['name']) ? $_COOKIE['name'] : '';
        if($sess_name){
            $sql = "select * from best where `name` = '$sess_name'";
        }elseif($cook_name){
            $sql = "select * from best where `name` = '$cook_name'";
        }else{
            return false;
        }
        $res = mysqli_query($link,$sql);
        if($res){
            return mysqli_fetch_array($res , MYSQLI_ASSOC);
        }else{
            return false;
        }
    }