<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	$iipp = $_SERVER["REMOTE_ADDR"];
	echo $iipp ;
?>
<form method="post" action="action/ip.php">
	你是:<input  name="name" type="text"/>
	IP:<input  name="ip" type="text"/>
    <input  type="submit" value="提交"/>
</form>
<br />

<form method="post" action="action/addurl.php">
	你是:<input  name="name" type="text"/>
	路径:<input  name="url" type="text" style="width:250px;"/>
    <input type="radio" name="type" value="pc">PC
    <input type="radio" name="type" value="wap">WAP
    <input  type="submit" value="提交"/>
</form>

</body>
</html>
