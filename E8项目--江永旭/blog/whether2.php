<?php
session_start();
if(isset($_SESSION['name'])==false){
echo ' <script language="javascript">  alert("请登录！！！"); window.location.href="login.php"   </script>';
exit;}else{header("Location:class.html");}
?>
