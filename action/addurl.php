<?php session_start();if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

<?php
include("../conn.php");
$url=$_POST[url];
$name=$_POST[name];
$type=$_POST[type];
if($name==""){echo "<script language='javascript'>alert('请输入名字！');history.back();</script>";exit;}
if($name!="wby"){echo "<script language='javascript'>alert('名字不正确！');history.back();</script>";exit;}
if($url==""){echo "<script language='javascript'>alert('请输入url！');history.back();</script>";exit;}
if($type==""){echo "<script language='javascript'>alert('请选择类型！');history.back();</script>";exit;}
if($type=="pc"){$sql="insert into catalogue(catalogue)values('fufei/pc/$url');";}
if($type=="wap"){$sql="insert into catalogue(catalogue)values('fufei/wap/$url');";}
$result = mysql_query($sql);
if($result){
		echo "添加成功!";
}else{
	echo "已经添加啦!";
}
mysql_close($conn);

?>

</body>
</html>
<?php }
else{
	exit;
}
?>