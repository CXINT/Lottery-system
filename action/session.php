<html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv=X-UA-Compatible content=IE=EmulateIE8>
<title></title>
</head>
<body >
<?php
session_start();
include("../conn.php");
$username=$_POST[username];
$userpwd=$_POST[password];
$ck=$_POST[ck];



//$userpwd=md5($userpwd);//密码做了MD5加密
//echo $userpwd;
//exit;
if(isset($_POST["ck"]) && $_POST["ck"]=="login"){}else{echo "非法用户";exit;}//判断是否正常登录
if($username==""){echo "<script language='javascript'>alert('请输入用户名！');history.back();</script>";exit;}
if($userpwd==""){echo "<script language='javascript'>alert('请输入密码！');history.back();</script>";	exit;}


if($username=="super" || $userpwd =="admin"){
		$_SESSION['user'] = $username;
		echo "<script type=\"text/javascript\">window.location= \"../index.php\";</script>";
}else if($username=="user" || $userpwd =="password"){
    $_SESSION['user'] = $username;
    echo "<script type=\"text/javascript\">window.location= \"../youjiangjizan.php\";</script>";
}

$s="select * from wfadmin where wfadmin='$username'";
$sql=mysql_query($s);
echo $sql;
exit;
$info=mysql_fetch_array($sql);
if($info==false){
  echo "<script language='javascript'>alert('不存在此用户！');history.back();</script>";
  exit;
}
else{          
  if($info[wfpassword]==$userpwd)
	{  
		$_SESSION['user'] = $username;
		$_SESSION['product'] = '野燕麦';
		//echo $product;
		echo "<script type=\"text/javascript\">window.location= \"../index.php\";</script>";
	}
  else {
		echo "<script language='javascript'>alert('密码输入错误！');history.back();</script>";
	 	exit;
   }
}    
mysql_close($conn);
?>	
</body>
</html>
