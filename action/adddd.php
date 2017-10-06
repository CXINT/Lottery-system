<?php session_start();if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {?>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<?php
include("../conn.php");
$id=$_POST[id];
$name=$_POST[name];
$phone=$_POST[phone];
$url=$_POST[url];
$xd=$_POST[xd];
$sum=$_POST[sum];
$price=$_POST[price];
$info=$_POST[info];
$zt=$_POST[zt];
$kd=$_POST[kd];
$xszt=$_POST[xszt];
$bh ="2016".date('His');
$adddate=date("Y-m-d H:i:s ");
$wfproduct=$_POST[wfproduct];
if($wfproduct==""){echo "<script language='javascript'>alert('请选择一种产品名称！');history.back();</script>";exit;}
$wfproductb=$_POST[wfproductb];
$s="select * from wforderlist where wfmob='$phone';";
$sqll=mysql_query($s);
$resultphone=mysql_fetch_array($sqll);
if($resultphone){echo "<script language='javascript'>alert('已经有相同的手机号,不能插入！');history.back();</script>";	exit;}
$sql="insert into wforderlist(wfddno,wfdate,wfproduct,wfproductb,wfmun,wfprice,wfname,wfmob,wfaddress,xdfs,wfguest,wfstatus,kd,xszt)values('$bh',NOW(),'$wfproduct','$wfproductb','$sum','$price','$name','$phone','$url','$xd','$info','$zt','$kd','$xszt');";


session_start();
$session =$_SESSION['user'];

$logsql ="$session"."用户添加了订单信息:"."____客户姓名是:"."$name"."____产品名称是:"."$wfproduct"."____添加时间是:"."$adddate";

$log = "insert into log(id,log) values (null,'$logsql')";
$result = mysql_query($log);

$result = mysql_query($sql);
if($result){
	echo "<script>window.location='../index.php'</script>";	
}else{
	echo "插入错误";
}
mysql_close($conn);
?>
<?php }
else{
	exit;
}
?>