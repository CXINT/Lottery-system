<?php
require("../conn.php");


session_start();
if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
	echo "<script type=\"text/javascript\">window.location= \"../index.php\";</script>";
	exit;
}
?>
<html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv=X-UA-Compatible content=IE=EmulateIE8>
<link type="text/css" rel="stylesheet"  href="../css/reset.css" />
<title>订单系统后台管理</title>
</head>
<body>

<!--
<div style="margin:0 auto; width:1000px; margin-top:100px; text-align:center;">
	<img  src="../img/wflogin_logo.gif"/>
</div>

<div class="wflogin" style="width: 684px;height: 160px;margin: 0px auto;">
<form action="../action/session.php" method="post" >
<label style="background:url(../img/wflogin.png) no-repeat;float: left;width: 100px;height: 34px;background-position: 0px 0px;"></label>
<input name="username" type="text" style="float: left;width: 170px;height: 34px;line-height: 34px;font-size: 16px;font-weight: bold;color: #666;margin-right: 10px;padding: 0px 0px 0px 10px;border: 1px solid #AEAEAE;">
<label  style=" background:url(../img/wflogin.png);float: left;width: 100px;height: 34px;background-position: 0px -34px;"></label>
<input name="password"  type="password" style="float: left;width: 170px;height: 34px;line-height: 34px;font-size: 16px;font-weight: bold;color: #666;margin-right: 10px;padding: 0px 0px 0px 10px;border: 1px solid #AEAEAE;">
<input value=""  type="submit" style=" background:url(../img/wflogin.png);float: left;width: 100px;height: 34px;line-height: 34px;font-size: 18px;vertical-align: middle;cursor: pointer;border: 0px none;background-position: 0px -68px;">
</form>
</div>
-->

<!--<div style="width:100%;margin: 0 auto;">
    <div style="height:900px; margin:0 auto;background: url(../img/ht.jpg) center center no-repeat; ">
        <div style=" width:1920px;height:900px; margin:0 auto;background: url(../img/ht.jpg) center center no-repeat; ">
        	<div style="clear:both;"></div>
        	<div style=" width:120px; margin-left:850px; padding-top:382px; position:relative;">
            <form action="../action/session.php" method="post">
                <input name="username" type="text" style="width:262px;border-radius: 7px; height:45px; font-size:20px; text-align:center;">
                <div style="clear:both;"></div>
                <input name="password"  type="password" style="width:262px;border-radius: 7px; height:45px;  margin-top:16px; text-align:center;">
                <input value=""  type="submit" style="width:65px; height:125px; position:absolute; top:375px; left:285px; background:none; border:none; cursor:pointer;">            
            </form>
           	</div>
         </div>
	</div>
</div>
-->



<style>
	body{ background:url(../img/htbg.jpg); background-position: center;background-repeat: no-repeat;background-attachment: fixed;};
</style>
<!--<div style="width:100%;margin: 0 auto;">
    <div style="height:900px; width:1440px; margin:0 auto; ">
        	<div style="clear:both;"></div>

        	<div style=" width:120px; margin-left:610px; padding-top:382px; position:relative;">
            <form action="../action/session.php" method="post">
                <input name="username" type="text" style="width:262px;border-radius: 7px;  height:45px; font-size:20px; text-align:center;">
                <div style="clear:both;"></div>
                <input name="password"  type="password" style="width:262px;border-radius: 7px; height:45px;  margin-top:16px; text-align:center;">
                <input value=""  type="submit" style="width:65px; height:125px; position:absolute; top:375px; left:285px; background:none; border:none; cursor:pointer;">
                <input type="hidden" name="ck"  value="login"/>           
            </form>
           	</div>
	</div>
</div>-->
<div style="position: fixed; width:705px; height:518px; background:url(../img/htbgg.png) no-repeat; margin: auto;left: 0px;right: 0px;top: 0px;bottom: 0px;display: block;">	
	            <form action="../action/session.php" method="post" style="margin-top:265px; margin-left:265px;">
                <input name="username" type="text" style="width:215px; height:30px; text-align:left; text-indent:8px; background:#1a76c1; border:none;">
                <div style="clear:both;"></div>
                <input name="password"  type="password" style="width:215px; height:30px;  margin-top:17px;text-indent:8px; text-align:left;background:#1a76c1; border:none;">
                <div style="clear:both; margin-top:20px;"></div>
                <input value="登录"  type="submit" style=" width:103px; height:34px; color:#597a8b; letter-spacing:4px; cursor:pointer;">&nbsp;
                <input value="重置"  type="reset" style="  width:103px; height:34px; color:#597a8b; letter-spacing:4px;cursor:pointer;">
                <input type="hidden" name="ck"  value="login"/>           
            </form>
    
</div>









</body>
</html>
