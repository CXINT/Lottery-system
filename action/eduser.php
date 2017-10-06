<?php session_start();if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {?>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<?php
include("../conn.php");
$id=$_POST[id];
$name=$_POST[name];
$phone=$_POST[phone];
$url=$_POST[url];
$sum=$_POST[sum];
$price=$_POST[price];
$info=$_POST[info];
$zt=$_POST[zt];
$kd=$_POST[kd];
$xd=$_POST[xd];
$wfdate=$_POST[wfdate];
$wfddurl=$_POST[wfddurl];
$wfdirector=$_POST[wfdirector];
$wfdirectorxs=$_POST[wfdirectorxs];
$wfproductb=$_POST[wfproductb];
$wfproduct=$_POST[wfproduct];
$xszt=$_POST[xszt];
$bh = date('Y-m-d H:i');
$success ="<script>alert('修改成功!');</script>";
$fail ="<script>alert('修改失败!');history.back();</script>";
$jump ="<script type=\"text/javascript\">window.location= \"../index.php\";</script>";
$sql = "update wforderlist set wfname='$name', wfmob='$phone', wfaddress='$url', wfmun=$sum, wfprice='$price', wfguest='$info' ,kd='$kd',wfdirector='$wfdirector',wfdirectorxs='$wfdirectorxs',xdfs='$xd',wfstatus='$zt',WFDDURL='$wfddurl',wfeditdate='$bh',wfproductb='$wfproductb',wfproduct='$wfproduct',xszt='$xszt' where id=$id;";

session_start();
$session =$_SESSION['user'];

$logsql ="$session"."用户更新了订单信息:"."___id是:"."$id"."____客户姓名是:"."$name"."____下单时间是:"."$wfdate";

$log = "insert into log(log) values ('$logsql')";
echo $log;

//exit;

mysql_query($log);

mysql_query($sql);
//if($result){echo $success;echo $jump;}else{echo $fail;}
mysql_close($conn);
?>
<script>
	function run(){
		window.close();
	}
	run();
</script>
<?php }
else{
	exit;
}
?>