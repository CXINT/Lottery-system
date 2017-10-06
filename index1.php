<?php
    include("action/check_session.php");
    
    if($_SESSION['user']!='super'){
        echo "你不能查看哦";
        exit;
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link type="text/css" rel="stylesheet"  href="css/css.css" />
<link type="text/css" rel="stylesheet"  href="css/reset.css" />
<!--<link type="text/css" rel="stylesheet"  href="css/manhuaDate.1.0.css" />-->
<link href="img/log.ico" type="image/x-icon" rel="shortcut icon" />
<script type="text/javascript" src="js/jquery-1.5.1.js"></script>
<!--<script type="text/javascript" src="js/manhuaDate.1.0.js"></script>-->
<!--<script type="text/javascript" src="js/laydate/laydate.js"></script>-->

<script type="text/javascript" src="js/js.js"></script>
<script type="text/javascript" language="javascript">
</script>
<script language="javascript" type="text/javascript" src="My97DatePicker/WdatePicker.js"></script>
<title>广州逆水网络公司订单系统管理后台</title>
</head>
<body bgcolor="#626262">
	<div class="clear"></div>
		<?php include("public/top.php");?>
    <div class="clear"></div> 
		<?php include("public/title.php");?>
    <div class="clear"></div>
    <div class="war" style="padding-top:10px; overflow:hidden;">
		 <?php include("public/left.php");?>
        <!--右边开始-->
        <div class="right">
        		<!--
        		<div class="right_tit">
                	<span style="font-size:15px;">您当前位置：订单管理>>订单列表</span>
                    <ul class="u">
                    	<a href="today.php"><li>今日</li></a>
                        <a href="yesterday.php"><li>昨日</li></a>
                    </ul>
                </div>-->
                <div class="clear"></div>
				 <?php include("public/select.php");?>
				 
                <div class="clear"></div>
				<form id="form2" name="form1" method="post" action="action/del_select.php" >
                <table class="li" width="100%" height="103"  align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC"> 
                <!--表格头开始-->
                     <?php include("public/table_top.php");?>
                <!--表格头结束-->

<?php
	//连接数据库
	require("conn.php");
	
	/****************** 搜索开始 ******************/
	$where = "where time between '$start_date' and '$end_date'";
	$search = '';

	
	$url=$_GET['url'];//要模糊查询的数据
	$url= str_replace(' ','',$url);//把url空格去掉
	//var_dump($url);
	$start_date = $_GET['start_date'];
	$end_date = $_GET['end_date'];
	
	//拼接时间搜索条件



		$search .= "&start_date='$start_date'&end_date='$end_date'";

	//拼接url
	if ( !empty($_GET['url']) ) {

		$where .= " and url=".$_GET['url'];

		$search .= '&url='.$_GET['url'];

	}
	/****************** 搜索结束 ******************/

	/****************** 分页开始 ******************/
	//1.设置每页显示条数
	$num = 10;

	//4.查出总条数
	$sql = "select count(*) from brand_shu_weixin_choujiang $where";

	$res = mysql_query($sql);
	var_dump($res);
	$total = mysql_num_rows($res);
	//$total = mysql_fetch_row($res);
	// echo $total;
	// exit;

	//5.计算总页码数
	$totalPage = ceil($total/$num);

	//2.获取当前页
	$p = isset($_GET['p'])?$_GET['p']:1;

	if ($p < 1) $p = 1;

	if ($p > $totalPage) $p = $totalPage;

	//3.计算偏移量
	$offset = ($p-1) * $num;

	$limit = "limit $offset,$num";
	/****************** 分页结束 ******************/

	$sql = "select * from brand_shu_weixin_choujiang $where order by id desc $limit";
	echo $sql;

	$res = mysql_query($sql);

	if ($res && mysql_num_rows($res) > 0) {

		while ($row = mysql_fetch_assoc($res)) {


			echo "<tr align='center'>
				<td>{$row['id']}</td>
				<td>{$row['openid']}</td>
				<td>{$row['time']}</td>
				<td>{$row['name']}</td>
				<td>{$row['phone']}</td>
				<td><{$row['address']}</td>
			</tr>";
		}	
	}
?>

		<!--表格分页信息开始-->
		<tr>
			<td colspan="8">
				共<?=$total?>条 第<?=$p?>/<?=$totalPage?>页
				<span style="float:right">
				<a href="index.php?p=1<?=$search?>">首页</a> |
				<a href="index.php?p=<?=($p-1).$search?>">上一页</a> |
				<a href="index.php?p=<?=($p+1).$search?>">下一页</a> |
				<a href="index.php?p=<?=$totalPage.$search?>">尾页</a>
				</span>
			</td>
		</tr>
		<!--表格分页信息结束-->
	</table>
	<!--用户数据遍历输出结束-->
</body>
</html>