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
<script type="text/javascript" language="javascript">  
</script>
<title>广州逆水网络公司订单系统管理后台</title>
</head>
<body bgcolor="#626262">
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
                <table class="li" width="100%" height="103"  align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC"> 
                <!--表格头开始-->
                     <tr style="background:#EAEAEA;">
    					<th width="49">编辑日记</th>
                     </tr>
                <!--表格头结束-->
                <?php 
				require("conn.php");
                $Page_size=19; 
                $result=mysql_query("select * from log");	
                $count = mysql_num_rows($result); 
//				echo $count;
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
                $sql="select * from log  ORDER BY id desc limit $offset,$Page_size"; 
                $result=mysql_query($sql); 
                while ($row=mysql_fetch_array($result)) { 
				
                ?> 
                   	<!--表格身体开始-->
                    	<tr>
                   	       <td>
	                			<?php echo $row['log']; ?>
                            </td>
                        </tr> 
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

                        <div align="center">
						<?php echo $key?>						
                        <form method="get" name="form11111" style="float:left; margin-top:5px;">
                            <input type="text" name="page" style="width:80px; height:21px;"/>
                            <input  type="button"  value="跳转" onClick="checkpage()" style="height:25px;"/>
						</form>
                        </div>
                    </td> 
                </tr> 
                </table> 
      </div>
     </div>
</body>
</html>