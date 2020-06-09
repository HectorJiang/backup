<?php
include_once 'function.php';

session_start();
if($_GET['action']=='logout'){
	unset($_SESSION['name']);
	echo ' <script language="javascript">  alert("注销登录成功！！！"); window.location.href="campuslife.php"   </script>';

	}
	?>