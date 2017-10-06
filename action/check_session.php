<?php
require("conn.php");
session_start();
if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
    //echo "登录成功：".$_SESSION['user'];
	
	
}else{
    
	echo "<script type=\"text/javascript\">window.location= \"public/login.php\";</script>";
	exit;
}
//echo $product;
?>