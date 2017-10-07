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
<title>订单系统管理后台</title>
</head>
<body bgcolor="#626262">
<?php include("public/top.php");?>
    <div class="clear"></div>
<?php include("public/title.php");?>
    <div class="clear"></div>
    <div class="war" style="padding-top:10px; overflow:hidden;">
         <?php include("public/left.php");?>


        <!--右边开始-->
        <div class="right" style=" position:relative;">
        		<!--
        		<div class="right_tit">
                	<span style="font-size:15px;">您当前位置：订单管理>>订单列表</span>
                    <ul class="u">
                    	<a href="today.php?wfstatus=<?php echo $_GET['wfstatus']; ?>"><li>今日</li></a>
                        <a href="yesterday.php?wfstatus=<?php echo $_GET['wfstatus']; ?>"><li>昨日</li></a>
                    </ul>
                </div>
                -->
                <div class="clear"></div>
				<?php include("public/select.php");?>
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
						 							<li><a href="query.php?wfdirectorxs=<?php echo $row['directorxs']; ?>"><?php echo $row['directorxs']; ?></a></li>
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
						 							<li><a href="query.php?wfdirector=<?php echo $row['director']; ?>"><?php echo $row['director']; ?></a></li>
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
						                            <li><a href="query.php?xdfs=400">400</a></li>
						                            <li><a href="query.php?xdfs=商务通">商务通</a></li>
						                            <li><a href="query.php?xdfs=后台">后台</a></li>
						                            <li><a href="query.php?xdfs=淘单">淘单</a></li>
						                            <li><a href="query.php?xdfs=微信">微信</a></li>
                            						<li><a href="query.php?xdfs=其他">其他</a></li>
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
						                        	<?php
						                        	$wfdirectorxs=$_GET[wfdirectorxs];
						                        	$wfstatus=$_GET[wfstatus];
						                        	?>
						                            <li><a href="query.php?qs=待定&wfdirectorxs=<?php echo $wfdirectorxs;?>&wfstatus=<?php echo $wfstatus;?>">待定</a></li>
						                            <li><a href="query.php?qs=发货&wfdirectorxs=<?php echo $wfdirectorxs;?>&wfstatus=<?php echo $wfstatus;?>">发货</a></li>
						                            <li><a href="query.php?qs=签收&wfdirectorxs=<?php echo $wfdirectorxs;?>&wfstatus=<?php echo $wfstatus;?>">签收</a></li>
						                            <li><a href="query.php?qs=取消&wfdirectorxs=<?php echo $wfdirectorxs;?>&wfstatus=<?php echo $wfstatus;?>">取消</a></li>
						                            <li><a href="query.php?qs=退货&wfdirectorxs=<?php echo $wfdirectorxs;?>&wfstatus=<?php echo $wfstatus;?>">退货</a></li>

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
				//$product= $_SESSION['product'];//拿到产品session
				$select=$_GET['select'];//开始时间
				$select1=$_GET['select1'];//结束时间

				$url=$_GET['url'];//要模糊查询的数据
				$url= str_replace(' ','',$url);//把url空格去掉
				$wfstatus=$_GET['wfstatus'];//状态
				$xdfs=$_GET['xdfs'];//下单方式
				$product=$_GET['product'];//是否选择全部产品
				$qs=$_GET['qs'];//签收
				$wfdirectorxs=$_GET['wfdirectorxs'];//销售
				$wfdirector=$_GET['wfdirector'];//推广
				//echo $wfdirector;
				//$yj=$_GET['yj'];//忘记了这段代码是干嘛的
				$sql="select * from wforderlist where 1=1 ";//where 1=1 条件永远成立
				if($select!=""){$sql= $sql." and date(wfdate) >= '$select'";}//开始时间
				if($select1!=""){$sql= $sql." and date(wfdate) <= '$select1'";}//结束时间
				if($url!=""){$sql= $sql." and (wfprice like '%$url%' or WFDDURL like '%$url%' or wfmob like '%$url%' or wfname like '%$url%' or wfdirector like '%$url%'  or wfdirectorxs like '%$url%')";}//模糊查询
				if($wfstatus!=""){$sql= $sql." and wfstatus = '$wfstatus'";}//状态
				if($qs!=""){$sql= $sql." and xszt = '$qs'";}//签收
				if($xdfs=="后台")
				{$sql= $sql." and (xdfs = '$xdfs' or xdfs is null)";}
				else if($xdfs!=""){$sql= $sql." and xdfs = '$xdfs'";}
				//因为查询出来为NUll的都以为是后台下单处理   这里是查询来自什么渠道
				if($wfdirectorxs!=""){$sql= $sql." and wfdirectorxs like '%$wfdirectorxs%'";}
				if($wfdirector!=""){$sql= $sql." and wfdirector like '%$wfdirector%'";}
				//echo $sql;
				//if($xdfs!=""){$sql= $sql." and xdfs = '$xdfs'";}//下单方式
				if($product=="on" ||$product==""){
				}else{$sql=$sql." and wfproduct like '%$product%'";}
				//选择产品
				//echo $sql;
				$sql= $sql." order by id desc";
				//查出总价格,写在这里是因为下面只取10条数据
				echo $sql;
				exit;
				$export=$sql;
				//echo $export;

                $he=mysql_query("select sum(wfprice) as 'count' from($sql) bieming");//查询订单总数     这里使用 了子查询    子查询必须添加派生表别名
				//echo $sql;
                $Page_size=10;
                $result=mysql_query($sql);
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
                $sql="$sql"." limit $offset,$Page_size";
                $result=mysql_query($sql,$conn);

                while ($row=mysql_fetch_array($result)) {

                ?>
                   	<!--表格身体开始-->
                   		 <?php include("public/table_body.php");?>
                	<!--表格身体结束-->

                <?php
                }

			    $select=$_GET['select'];
				$select1=$_GET['select1'];
				$url=$_GET['url'];
                $page_len = ($page_len%2)?$page_len:$pagelen+1;//页码个数
                $pageoffset = ($page_len-1)/2;//页码个数左右偏移量

                $key='<div class="page">';
                $key.="<span>$page/$pages</span> "; //第几页,共几页
                if($page!=1){
                $key.="<a href=\"".$_SERVER['PHP_SELF']."?select=$select&select1=$select1&url=$url&qs=$qs&xdfs=$xdfs&wfdirectorxs=$wfdirectorxs&wfdirector=$wfdirector&wfstatus=$wfstatus&product=$product$page=1\">第一页</a> "; //第一页
                $key.="<a href=\"".$_SERVER['PHP_SELF']."?select=$select&select1=$select1&url=$url&qs=$qs&xdfs=$xdfs&wfdirectorxs=$wfdirectorxs&wfdirector=$wfdirector&wfstatus=$wfstatus&product=$product&page=".($page-1)."\">上一页</a>"; //上一页
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
                $key.=" <a href=\"".$_SERVER['PHP_SELF']."?select=$select&select1=$select1&url=$url&qs=$qs&xdfs=$xdfs&wfdirectorxs=$wfdirectorxs&wfdirector=$wfdirector&wfstatus=$wfstatus&product=$product&page=".$i."\">".$i."</a>";
                }
                }
                if($page!=$pages){
                $key.=" <a href=\"".$_SERVER['PHP_SELF']."?select=$select&select1=$select1&url=$url&qs=$qs&xdfs=$xdfs&wfdirectorxs=$wfdirectorxs&wfdirector=$wfdirector&wfstatus=$wfstatus&product=$product&page=".($page+1)."\">下一页</a> ";//下一页
                $key.="<a href=\"".$_SERVER['PHP_SELF']."?select=$select&select1=$select1&url=$url&qs=$qs&xdfs=$xdfs&wfdirectorxs=$wfdirectorxs&wfdirector=$wfdirector&wfstatus=$wfstatus&product=$product&page={$pages}\">最后一页</a>"; //最后一页
                }else {
                $key.="下一页 ";//下一页
                $key.="最后一页"; //最后一页
                }
                $key.='</div>';
                ?>

                <?php
                	if($count==0){
						echo "<tr>";
						echo "<td colspan=\"14\" style='font-size:20px;color:red; padding:20px 0px 20px 0px;'>";
						echo "查询不到你要的没有数据哦";
						echo "</td>";
						echo "</tr>";
                	}
                ?>

                <tr>

                <td colspan="14" bgcolor="#E0EEE0">
                <div align="center" style="margin-top:10px;">
                        <?php
								//$ddd=("select sum(wfprice) as 'count' from($sql) bieming");
								//echo $ddd;
                               // $he=mysql_query("select sum(wfprice) as 'count' from($sql) bieming");
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
                 	<!--订单导出   使用了定位样式-->
                    <?php if (($_SESSION['user'])=="super"){?>
                 		<form method="post" action="export.php">
                             <input type="hidden" name="export" value="<?php echo $export?>" />
                             <input  type="submit" class="export" value="导出"/>
     					</form>
                 <?php }?>

                <div align="center"><?php echo $key?>
		                 <form method="get" name="form11111" style="float:left; margin-top:5px;">
                            <input type="text" name="page" style="width:80px; height:23px;"/>
							<input type="hidden" name="select" value="<?php echo "$select";?>"/>
                            <input type="hidden" name="select1" value="<?php echo "$select1";?>"/>
                            <input type="hidden" name="url" value="<?php echo "$url";?>"/>
                            <input type="hidden" name="success" value="<?php echo "$success";?>"/>
                            <input type="button"  value="跳转" onClick="checkpage()"/>
						</form>
                </div>

                </td>
                </tr>
                </table>

      </div>
      </div>
      <?php mysql_close($conn);?>



</body>
</html>
