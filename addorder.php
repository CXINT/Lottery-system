<?php include("action/check_session.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet"  href="css/css.css" />
<link type="text/css" rel="stylesheet"  href="css/reset.css" />
<link href="img/log.ico" type="image/x-icon" rel="shortcut icon" />
<script type="text/javascript" src="js/jquery-1.5.1.js"></script>
<script type="text/javascript" src="js/js.js"></script>
<title>广州逆水网络公司订单系统管理后台</title>
</head>
<body bgcolor="#626262">
<?php
if (($_SESSION['user'])=="tuig"){
    echo "<script>alert('推广人员无法使用添加订单功能......!');history.back();</script>";
    exit;
}
?>
<?php include("public/top.php");?>
    <div class="clear"></div> 
<?php include("public/title.php");?>
    <div class="clear"></div>
    <div class="war" style="padding-top:10px; padding-bottom:30px;">
        <?php include("public/left.php");?>
        
        <!--右边开始-->
        <div class="right">
        		<div class="right_tit" style="text-align:center;">
                	<span style="font-size:15px;">添加订单</span><br />
                </div>
                <div class="clear"></div>

          <div class="clear"></div>
                <style>.line table tr td input[type='text']{ width:100%; height:39px; text-align:center; color:#F00; border:none;}</style>
				<div class="line" style="margin-top:20px;">
                <form action="action/adddd.php" method="post">
               	  <table width="100%" border="1">
                      <tr>
                        <td width="22%" height="40">产品名称</td>
                        <td width="20%">
                        	<select name="wfproduct" class="select_product">
                            	<option value="">选择产品名称</option>
                            	<option value="野燕麦">野燕麦</option>
                                <option value="卫裤">卫裤</option>
                                <option value="力戈">力戈</option>
                                <option value="减肥">减肥</option>
                            </select>
                        </td>
                        <td width="24%">购买数量</td>
                        <td width="34%"><input type="text" name="sum"  /></td>
                      </tr>
                      <tr>
                        <td height="40">客户姓名:</td>
                        <td><input type="text" name="name" /></td>
                        <td>电话:</td>
                        <td><input type="text" name="phone" /></td>
                      </tr>
                      <tr>
                        <td height="35">客户地址:</td>
                        <td colspan="3"><input type="text"  name="url"/></td>
                      </tr>
                      <tr>
                        <td height="40">来源</td>
                        <td colspan="3"><span style="font-size:13px;">
                          <label><input type="radio" name="xd"  value="400"/>400&nbsp;&nbsp;&nbsp;&nbsp;
                          <label><input type="radio" name="xd" checked="checked"  value="商务通"/>商务通</label>&nbsp;&nbsp;&nbsp;&nbsp;
                          <label><input type="radio" name="xd"  value="后台"/>后台</label>&nbsp;&nbsp;&nbsp;&nbsp;
                          <label><input type="radio" name="xd"  value="淘单"/>淘单</label>&nbsp;&nbsp;&nbsp;&nbsp;
                          <label><input type="radio" name="xd"  value="微信"/>微信</label>&nbsp;&nbsp;&nbsp;&nbsp;
                          <label><input type="radio" name="xd"  value="其他"/>其他</label>  

                        </span></td>
                      </tr>
                      <tr>
                        <td height="35">备注信息:</td>
                        <td colspan="3"><input type="text" name="info" /></td>
                      </tr>
                      <tr>
                        <td height="40">订单金额:</td>
                        <td><input type="text" name="price" /></td>
                        <td>状态</td>
                        <td>
                                <p style="font-size:13px;">
                                <label><input type="radio" checked="checked" name="zt" value="未处理"/>未处理</label>&nbsp;&nbsp;
                               <label> <input type="radio" name="zt" value="成交"/> 成交</label>&nbsp;&nbsp;&nbsp;
                                <label><input type="radio" name="zt" value="无效"/> 无效</label>&nbsp;&nbsp;&nbsp;
                                <label><input type="radio" name="zt" value="待淘"/> 待淘</label>&nbsp;&nbsp;
                                <label><input type="radio" name="zt" value="未成交"/>未成交</label>
                                </p>
                        
                        </td>
                    </tr>
                      <tr>
                      	<td>快递：</td>
                        <td><input type="text" name="kd" /></td>
                        <td height="40">
							产品规格:
                        </td>
                        <td height="40">
							<input type="text" name="wfproductb" />
                        </td>
                      </tr>
                      <tr>
                        <td height="40">签收状态</td>
                        <td colspan="3">
                                <p style="font-size:13px;">
                                <label><input type="radio" checked="checked" name="xszt" value="待定"/>待定</label>&nbsp;&nbsp;
                                <label><input type="radio" name="xszt" value="发货"/> 发货</label>&nbsp;&nbsp;&nbsp;
                                <label><input type="radio" name="xszt" value="签收"/> 签收</label>&nbsp;&nbsp;&nbsp;
                                <label><input type="radio" name="xszt" value="取消"/> 取消</label>&nbsp;&nbsp;&nbsp;
                                <label><input type="radio" name="xszt" value="退货"/> 退货</label>
                                </p>
                        
                        </td>
                    </tr>
                      <tr>
                      	<td colspan="4" height="65">
                        	<style>
								.tj{width:70px; height:30px;}
							</style>
                            <input class="tj" type="submit" name="button"  id="button" value="添加" />
                            -----
                            <input class="tj" type="reset" name="button2" id="button2" value="取消" />
                        </td>
                      </tr>
                    </table>

				</form>
          </div>
                <div class="clear"></div>
        </div>
        <!--右边结束-->
        <div class="clear"></div>
    </div>

</body>
</html>