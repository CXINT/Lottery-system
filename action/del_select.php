<?php session_start();if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php  
header('Content-Type: text/html; charset=utf-8');  
include('../conn.php');  
if(empty($_POST['id'])){  
	echo"<script>alert('必须选择一条,才可以删除!');history.back(-1);</script>";  
	exit;  
}else{  
 $id= implode(",",$_POST['id']);  
 $str="DELETE FROM brand_shu_weixin_choujiang where id in ($id)";  
 //echo $str;
 $result= mysql_query($str);  
// echo "<script>alert('删除成功！');window.location.href='index.php';</script
 echo"<script>alert('删除成功!');history.back(-1);</script>";  
}  
?> 
</body>
</html>
<?php }
else{
	exit;
}
?>