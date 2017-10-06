<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>网页标题</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="" />
	<style type="text/css"></style>
	<script type="text/javascript"></script>
</head>
<body>
<?php
	require("../conn.php");
	$id = $_GET['id'];	
	$result = mysql_query("delete from wforderlist where id=$id");
	

	
	if($result)
	{
		//echo "删除成功！";
		//header("location:../today.php");
	}
	else
	{
		echo "删除失败：" . mysql_error();
	}
	mysql_close($conn);
?>
<script>
	function run(){
		window.close();
	}
	run();
</script>
</body>
</html>
