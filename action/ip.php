<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

<?php
include("../conn.php");
$ip=$_POST[ip];
$name=$_POST[name];
if($name==""){echo "<script language='javascript'>alert('请输入名字！');history.back();</script>";exit;}
if($name!="逆水"){echo "<script language='javascript'>alert('名字不正确！');history.back();</script>";exit;}
if($ip==""){echo "<script language='javascript'>alert('请输入ip！');history.back();</script>";exit;}
$sql="insert into ip(ip)values('$ip');";
$result = mysql_query($sql);
if($result){
		echo "<script>window.location='../index.php'</script>";	
}else{
	echo "已经添加啦!";
}
mysql_close($conn);

?>

</body>
</html>