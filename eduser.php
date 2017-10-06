<?php include("action/check_session.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet"  href="css/css.css" />
<link type="text/css" rel="stylesheet"  href="css/reset.css" />
<link href="img/log.ico" type="image/x-icon" rel="shortcut icon" />
<script type="text/javascript" src="js/js.js"></script>
<title>编辑用户信息</title>
</head>
<body>
<div style=" margin:0 auto; width:1000px;">
        <!--右边开始-->
        <div>

          		<style>
					.line table tr td input[type='text']{ width:100%; height:39px; text-align:left; text-indent:0.5em; border:1px #FF0000 solid;}
					.line table tr td textarea{ width:100%; height:39px; text-align:center;}
					.line table tr td input[type='radio']{ width:10px; text-align:center; color:#F00;}
					.line table tr td em{ line-height:10px !important;}
					.detailed{ float:left; width:80px; margin-left:140px;}
					.radio_style{ float:left; width:100px; text-align:left; letter-spacing:3px;}
                    </style>
				<div class="line">
              
    			 <?php
					require("conn.php");	//准备跟数据库打打交道了，所以引入该文件	
					//$id=$_GET["id"];
					$id=trim($_GET[id]);
					$sql = "select * from wforderlist where id=$id;";
					$result = mysql_query($sql);	//执行select：执行的结果：

					$len = mysql_num_rows( $result );	//获得留言条数：即mysql_num_rows()函数用于获得一个数据集合有多少行
					for($i = 1; $i < $len+1; $i++)
					{
						$oneLine = mysql_fetch_array( $result );
				?>                
                	<form method="post" action="action/eduser.php">
                	<table width="100%" border="1" cellpadding="0" cellspacing="1">
                          <tr>	
                            <td width="8%" height="41">订单编号：</td>
                            <td width="15%"><?php echo $oneLine['wfddno'];?></td>
                            <td width="8%">产品规格:</td>
                            <td width="28%"><input type="text" name="wfproductb" value="<?php echo $oneLine['wfproductb'];?>"/></td>
                            <td width="10%">产品名称：</td>
                            <td width="31%"><input type="text" name="wfproduct" value="<?php echo $oneLine['wfproduct'];?>"/></td>
                          </tr>
                          <tr>
                            <td width="8%" height="41">客户姓名：</td>
                            <td colspan="3"><input type="text" name="name" value="<?php echo $oneLine['wfname'];?>"/></td>
                            <td width="10%">下单时间</td>
                            <td width="31%"><?php echo $oneLine['wfdate'];?><input  type="hidden" name="wfdate" value="<?php echo $oneLine['wfdate'];?>"/></td>
                          </tr>
                          <tr>
                            <td width="8%" height="41">电话:</td>
                            <td colspan="1"><input type="text" name="phone" value="<?php echo $oneLine['wfmob'];?>" /></td>
                            <td>推广员:</td>
                            <td><input type="text" name="wfdirector" value="<?php echo $oneLine['wfdirector'];?>" /></td>
                            <td>销售员:</td>
                            <td><input type="text" name="wfdirectorxs" value="<?php echo $oneLine['wfdirectorxs'];?>" /></td>
                          </tr>
                          <tr>
                            <td width="8%" height="41">购买数量：</td>
                            <td width="15%"><input type="text" name="sum" value="<?php echo $oneLine['wfmun'];?>"/></td>
                            <td width="8%">产品金额：</td>
                            <td width="28%"><input type="text" name="price" value="<?php echo $oneLine['wfprice'];?>"/></td>
                            <td width="10%" height="41">快递</td>
                            <td>
								<input type="text" name="kd" value="<?php echo $oneLine['kd'];?>"/>
                            </td>

	                         </tr>
                          <tr>
                            <td width="8%" height="41">渠道:</td>
                            <td height="41" colspan="5">
								<div class="detailed"><font style="color:red; font-weight:bold;"><?php if($oneLine['xdfs']==null){echo "后台";}else{echo $oneLine['xdfs'];}?></font></div>
									<div class="radio_style">
                                          <input name="xd" value="400" type="radio" <?php if($oneLine['xdfs']=="400"){echo "checked";}?>>400</div>
                                    <div class="radio_style">
                                          <input name="xd" value="商务通" type="radio" <?php if($oneLine['xdfs']=="商务通"){echo "checked";}?>>商务通</div>
                                          <div class="radio_style">
                                          <input name="xd" value="后台" type="radio" <?php if($oneLine['xdfs']==null or $oneLine['xdfs']=="后台"){echo "checked";}?>>后台
                                          </div>
                                          <div class="radio_style">
                                          <input name="xd" value="淘单" type="radio" <?php if($oneLine['xdfs']=="淘单"){echo "checked";}?>>淘单
                                          </div>
                                          <div class="radio_style">
                                          <input name="xd" value="微信" type="radio" <?php if($oneLine['xdfs']=="微信"){echo "checked";}?>>微信
                                          </div>
                                          <div class="radio_style">
                                          <input name="xd" value="其他" type="radio" <?php if($oneLine['xdfs']=="其他"){echo "checked";}?> >其他  
                                          </div>
			
        			                
                            </td>

                          </tr>  
                          
                          <tr>
                           
                            <td width="8%" height="41">订单状态:</td>
                            <td height="41" colspan="5">
	                                   <div class="detailed"> <span style="color:#F00; font-weight:bold;"><?php echo $oneLine['wfstatus'];?></span>							</div>
                                       <div class="radio_style">
                                        <input type="radio" name="zt" value="未处理" <?php if($oneLine['wfstatus']=="未处理"){echo "checked";}?>/>未处理
                                        </div>
                                        <div class="radio_style">
                                        <input type="radio" name="zt" value="成交" <?php if($oneLine['wfstatus']=="成交"){echo "checked";}?>/> 成交
                                        </div>
                                        <div class="radio_style">                                        
                                        <input type="radio" name="zt" value="无效" <?php if($oneLine['wfstatus']=="无效"){echo "checked";}?>/>无效
                                        </div>
                                        <div class="radio_style">
                                        <input type="radio" name="zt" value="待淘" <?php if($oneLine['wfstatus']=="待淘"){echo "checked";}?>/>待淘
                                        </div>
                                        <div class="radio_style">
                                        <input type="radio" name="zt" value="未成交" <?php if($oneLine['wfstatus']=="未成交"){echo "checked";}?>/>未成交
                                        </div>                                  
                                 
                            </td>

                          </tr>  
                          <tr>
                            <td width="8%" height="41">签收状态:</td>
                            <td height="41" colspan="5">
                            <div class="detailed">
								<font style="color:red; font-weight:bold;"><?php if($oneLine['xszt']==null){echo "待定";}else{echo $oneLine['xszt'];}?></font>
                                </div>
									<div class="radio_style"> 
										  <input name="xszt" value="待定" type="radio" <?php if($oneLine['xszt']==null or $oneLine['xszt']=="待定"){echo "checked";}?>>待定
                                          </div>
                                          <div class="radio_style"> 
                                          <input name="xszt" value="发货" type="radio" <?php if($oneLine['xszt']=="发货"){echo "checked";}?>>发货
                                          </div>
                                          <div class="radio_style"> 
                                          <input name="xszt" value="签收" type="radio" <?php if($oneLine['xszt']=="签收"){echo "checked";}?>>签收
                                          </div>
                                          <div class="radio_style"> 
                                          
                                          <input name="xszt" value="取消" type="radio" <?php if($oneLine['xszt']=="取消"){echo "checked";}?>>取消
                                          </div>
                                          <div class="radio_style"> 
                                          <input name="xszt" value="退货" type="radio" <?php if($oneLine['xszt']=="退货"){echo "checked";}?> >退货  
                                          </div>
			
                            </td>

                          </tr>  
                          <tr>
                            <td width="8%" height="41">链接:</td>
                            <td colspan="5"><input name="wfddurl"  type="text" value="<?php echo $oneLine['WFDDURL'];?>"/></td>
                          </tr>
                          <tr>
                            <td width="8%" height="41">客户地址：</td>
                            <td colspan="5"><input type="text" name="url"  value="<?php echo $oneLine['wfaddress'];?>"/></td>
                          </tr>
                          <tr>
                            <td width="8%" height="41">备注信息:</td>
                            <td colspan="5"><input  type="text" name="info" value="<?php echo $oneLine['wfguest'];?>"/></td>
                          </tr>  
        
                          <tr>
                            <td height="79" colspan="6">
                            	<style>.xiugai{width:50px !important; height:26px !important; font-size:16px; color:#F00; line-height:16px;}</style>
                                <style>.del{width:50px !important; height:26px !important; font-size:16px; color:#000; line-height:16px;}</style>
                            	<style>.qingchu{width:50px !important; font-size:18px; font-weight:bold; line-height:30px;}</style>											 								<input  type="hidden" name="id" value="<?php echo $oneLine['id'];?>"/>
								<?php if (($_SESSION['user'])=="super"){?>
                                	<a href="javascript:void(0)" onClick="deal('del',<?php echo $oneLine['id']; ?>);">
                                    	<input type="button" value="删除" class="del"  />
                                    </a>
                                <?php }?>
                                <?php if (($_SESSION['user'])!="tuig"){?>
                                
                            	<input type="submit" value="修改" class="xiugai"  />
                                <button type="reset">重置</button>
                                <?php }?>
                            </td>
                          </tr>                                                  
					</table>
                    </form>
			<?php
			}
			?>
              </div>
        </div>
        <!--右边结束-->
</div>
</body>