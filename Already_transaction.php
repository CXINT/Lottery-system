<?php include("action/check_session.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<link type="text/css" rel="stylesheet"  href="css/css.css" />
<link type="text/css" rel="stylesheet"  href="css/reset.css" />
<link type="text/css" rel="stylesheet"  href="css/manhuaDate.1.0.css" />
<link href="img/log.ico" type="image/x-icon" rel="shortcut icon" />
<script type="text/javascript" src="js/jquery-1.5.1.js"></script>
<script type="text/javascript" src="js/manhuaDate.1.0.js"></script>
<script type="text/javascript" src="js/js.js"></script>
<title>广州逆水网络公司订单系统管理后台</title>
</head>
<body bgcolor="#626262">
<?php include("public/top.php");?>
    <div class="clear"></div> 
	<div class="war">
	    <div class="tit">
	        您好，(<font style="color:#F00;"><?php echo $_SESSION['user']?></font>)今天是（<?php echo date("Y-m-d");?>），欢迎登录订单管理系统。<a href="action/exit.php">退出</a>
	                    <ul class="u">
	                    	<a href="today.php?wfstatus=<?php echo $o_state = "成交"; ?>"><li>今日</li></a>
	                        <a href="yesterday.php?wfstatus=<?php echo $o_state = "成交"; ?>"><li>昨日</li></a>
	                    </ul>
	    </div>
	</div>
    
    <div class="clear"></div>
    <div class="war" style="padding-top:10px; overflow:hidden;">
<?php include("public/left.php");?>
        
        <!--右边开始-->
        <div class="right">

                <div class="clear"></div>
                
				 <div class="sle" style="position:relative;">
					    <form action="query.php" method="GET">
					        <div style=" padding:7px 0px 7px 10px;">
					            日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;期：					 
					            <input type="text" class="mh_date"  name="select" placeholder="开始时间" />
					            -
					            <input type="text" class="mh_date"  name="select1" placeholder="结束时间" />
					            &nbsp;&nbsp;&nbsp;关&nbsp;键&nbsp;字:&nbsp;&nbsp;&nbsp;<input   type="text" name="url" style="width:210px; height:28px; text-indent:7px; border: solid 2px #AA9FFF;border-radius:5px;" />
					            &nbsp;
					            <input type="hidden"  name="wfstatus"  value="成交"/>
					            
					            <input type="submit" value="搜索"  class="cx"/>
								
					        </div>
					    </form>
	<a href="high_query.php">    <div style="position:absolute; width:25px; height:25px; background:url(img/8.gif) no-repeat; left:905px; top:-15px;"></div></a>
				</div>
				
                <div class="clear"></div>
				<style>
				.li{ background:#F5F5F5;} 
				.li tr td{ border:1px solid #D2D2D2; color:#000; text-align:center;word-wrap:break-word;word-break:break-all;}							 				</style>
                <form id="form2" name="form1" method="post" action="action/del_select.php" >
                <table class="li" width="100%" height="103"  align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC"> 
                	<!--表格头开始-->
                   		 <tr style="background:#EAEAEA;">
						    <th width="49">状态</th>
						    <th width="58" class="menu">
                                <ul class="menucon">
                                            <li>
                                                <a href="javascript:void(0)">销售员</a>
                                                <ul class="zi">
                                                	<?php
                                                	require("conn.php");
	                                                $sql="select * from director where directorxs is not null order by id asc ";
	                                                $result=mysql_query($sql);
	                                                while ($row=mysql_fetch_array($result)) {
                                               		 ?>	
                                               		 <li><a href="query.php?wfdirectorxs=<?php echo $row['directorxs']; ?>&wfstatus=成交"><?php echo $row['directorxs']; ?></a></li>
                                                    <?php }?>
                                                    <li class="last"></li>
                                                </ul>
                                            </li>
                                </ul>
                            </th>
						    <th width="58" class="menu">
                                <ul class="menucon">
                                            <li>
                                                <a href="javascript:void(0)">推广员</a>
                                                <ul class="zi">
                                                	<?php
                                                	require("conn.php");
	                                                $sql="select * from director where director is not null order by id asc ";
	                                                $result=mysql_query($sql);
	                                                while ($row=mysql_fetch_array($result)) {
                                               		 ?>	
                                               		 <li><a href="query.php?wfdirector=<?php echo $row['director']; ?>&wfstatus=成交"><?php echo $row['director']; ?></a></li>
                                                    <?php }?>
                                                    <li class="last"></li>
                                                </ul>
                                            </li>
                                </ul>
                            </th>
						    <th width="58" class="menu">
								<ul class="menucon">
						                    <li>
						                        <a href="javascript:void(0)">渠道</a>
						                        <ul class="zi">
						                            <li><a href="query.php?xdfs=400&wfstatus=成交">400</a></li>
						                            <li><a href="query.php?xdfs=商务通&wfstatus=成交">商务通</a></li>
						                            <li><a href="query.php?xdfs=后台&wfstatus=成交">后台</a></li>
						                            <li><a href="query.php?xdfs=淘单&wfstatus=成交">淘单</a></li>
						                            <li><a href="query.php?xdfs=微信&wfstatus=成交">微信</a></li>
						                            <li><a href="query.php?xdfs=其他&wfstatus=成交">其他</a></li>
						                            <li class="last"></li>
						                        </ul>
						                    </li>
								</ul>
						    </th>
						    <th width="58">客户姓名</th>
						    <th width="110">产品名称</th>
						    <th width="86">下单时间</th>
						    <th width="80">编辑时间</th>
						    <th width="182">备注</th>
						    <th width="64">订单金额</th>
						    <th width="92">手机号码</th>
						    <th width="65" class="menu">
								<ul class="menucon">
						                    <li>

						                        <a href="javascript:void(0)" style="width:65px;">订单状态</a>
						                        <ul class="zi">
						                            <li><a href="query.php?qs=待定&wfstatus=成交">待定</a></li>
						                            <li><a href="query.php?qs=发货&wfstatus=成交">发货</a></li> 
						                            <li><a href="query.php?qs=签收&wfstatus=成交">签收</a></li>
						                            <li><a href="query.php?qs=取消&wfstatus=成交">取消</a></li>
						                            <li><a href="query.php?qs=退货&wfstatus=成交">退货</a></li>
						                            <li class="last"></li>
						                        </ul>
						                    </li>
								</ul>
						    
						    </th>    
						    <th width="20">编辑</th>
						    <th width="10"></th>
						</tr>
                	<!--表格头结束-->
                <?php 
				require("conn.php");
				$product= $_SESSION['product'];
                $Page_size=10; 
                $o_state = "成交";
                $result=mysql_query("select * from wforderlist where wfstatus='$o_state' and wfproduct like '%$product%' ;"); 
                $count = mysql_num_rows($result); 
                
                $page_count = ceil($count/$Page_size); 
                
                $init=1; 
                $page_len=7; 
                $max_p=$page_count; 
                $pages=$page_count; 
                
                //判断当前页码 
                if(empty($_GET['page'])||$_GET['page']<0){ 
                $page=1; 
                }else { 
                $page=$_GET['page']; 
                } 
                
                $offset=$Page_size*($page-1); 
                $sql="select * from wforderlist where wfstatus='$o_state' and wfproduct like '%$product%'  ORDER BY wfeditdate desc limit $offset,$Page_size"; 
                $result=mysql_query($sql,$conn); 
                while ($row=mysql_fetch_array($result)) { 
				
                ?> 
                   	<!--表格身体开始-->
                   		 <?php include("public/table_body.php");?>
                	<!--表格身体结束-->

                <?php 
                } 
                $page_len = ($page_len%2)?$page_len:$pagelen+1;//页码个数 
                $pageoffset = ($page_len-1)/2;//页码个数左右偏移量 
                
                $key='<div class="page">'; 
                $key.="<span>$page/$pages</span> "; //第几页,共几页 
                if($page!=1){ 
                $key.="<a href=\"".$_SERVER['PHP_SELF']."?page=1\">第一页</a> "; //第一页 
                $key.="<a href=\"".$_SERVER['PHP_SELF']."?page=".($page-1)."\">上一页</a>"; //上一页 
                }else { 
                $key.="第一页 ";//第一页 
                $key.="上一页"; //上一页 
                } 
                if($pages>$page_len){ 
                //如果当前页小于等于左偏移 
                if($page<=$pageoffset){ 
                $init=1; 
                $max_p = $page_len; 
                }else{//如果当前页大于左偏移 
                //如果当前页码右偏移超出最大分页数 
                if($page+$pageoffset>=$pages+1){ 
                $init = $pages-$page_len+1; 
                }else{ 
                //左右偏移都存在时的计算 
                $init = $page-$pageoffset; 
                $max_p = $page+$pageoffset; 
                } 
                } 
                } 
                for($i=$init;$i<=$max_p;$i++){ 
                if($i==$page){ 
                $key.=' <span>'.$i.'</span>'; 
                } else { 
                $key.=" <a href=\"".$_SERVER['PHP_SELF']."?page=".$i."\">".$i."</a>"; 
                } 
                } 
                if($page!=$pages){ 
                $key.=" <a href=\"".$_SERVER['PHP_SELF']."?page=".($page+1)."\">下一页</a> ";//下一页 
                $key.="<a href=\"".$_SERVER['PHP_SELF']."?page={$pages}\">最后一页</a>"; //最后一页 
                }else { 
                $key.="下一页 ";//下一页 
                $key.="最后一页"; //最后一页 
                } 
                $key.='</div>'; 
                ?> 
                <tr> 
                <td colspan="14" bgcolor="#E0EEE0">
                	<div align="center" style="margin-top:10px;">
                	<?php
							$he=mysql_query("select sum(wfprice) as 'count' from wforderlist where wfstatus='成交' and wfproduct like '%$product%';");
							
							echo "订单总数是:<font style='color:red; font-weight:bold;'>".$count."</font>";
							echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
							while ($sum=mysql_fetch_array($he)) {	
								echo "订单总价格是:<font style='color:red; font-weight:bold;'>".$sum['count']."</font>";
							}
                    ?>
                           <?php if (($_SESSION['user'])=="super"){?>
                              <input type="button" class="all_select" value="全选"  onClick="selectBox('all')"/>   
                              <input type="button" class="all_select" value="反选"  onClick="selectBox('reverse')"/>
                              <input type="button" class="del_all" value="删除" onClick="check()"/>     
                          <?php }?>
			                </form>                               

                    </div>
                <div align="center"><?php echo $key?>
                        <form method="get" name="form11111" style="float:left; margin-top:5px;">
                            <input type="text" name="page" style="width:80px; height:21px;"/>
                            <input  type="button"  value="跳转" onClick="checkpage()" style="height:25px;"/>
						</form>
                </div></td> 
                </tr> 
                </table> 

                
      </div>
    </div>
</body>
</html>