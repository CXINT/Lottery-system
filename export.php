<?php
//引入PHPExcel库文件（路径根据自己情况）
header("Content-type: text/html; charset=utf-8");
include './PHPExcel_1.8.0_doc/Classes/PHPExcel.php';

//创建对象

$excel = new PHPExcel();

//Excel表格式,这里简略写了8列

 $letter = array('A','B','C','D','E','F','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');

//表头数组

 $tableheader = array('id','编号','下单时间','产品名称','产品规格','订购的单数','价格','姓名','电话','地址','留言','网站路径','IP','订单状态','下单方式','快递','推广员','销售人','编辑时间','签收状态');

//填充表头信息

for($i = 0;$i < count($tableheader);$i++) {

	$excel->getActiveSheet()->setCellValue("$letter[$i]1","$tableheader[$i]");

}  
require("conn.php");
$sql=$_POST['export'];
//$sql="select * from wforderlist";
$result=mysql_query($sql);
$count =mysql_num_rows($result);
$lie =mysql_num_fields($result);
for($j=2;$j<=$count+1;$j++){
	$row=mysql_fetch_array($result);
	$i=0;
	$excel->getActiveSheet()->setCellValue("$letter[$i]$j","$row[id]");
	$i=++$i;
	$excel->getActiveSheet()->setCellValue("$letter[$i]$j","$row[wfddno]");
	$i=++$i;
	$excel->getActiveSheet()->setCellValue("$letter[$i]$j","$row[wfdate]");	
	$i=++$i;
	$excel->getActiveSheet()->setCellValue("$letter[$i]$j","$row[wfproduct]");
	$i=++$i;
	//空判断      如果这个值是空的话  导入到excel里面会被前面的字段覆盖在他的上面   不太好看  用一个空格处理就不会了
	if($row[wfproductb]==null){
		$excel->getActiveSheet()->setCellValue("$letter[$i]$j"," ");
	}else{
		$excel->getActiveSheet()->setCellValue("$letter[$i]$j","$row[wfproductb]");
	}
	
	$i=++$i;
	$excel->getActiveSheet()->setCellValue("$letter[$i]$j","$row[wfmun]");
	$i=++$i;
	$excel->getActiveSheet()->setCellValue("$letter[$i]$j","$row[wfprice]");
	$i=++$i;
	$excel->getActiveSheet()->setCellValue("$letter[$i]$j","$row[wfname]");
	$i=++$i;
	$excel->getActiveSheet()->setCellValue("$letter[$i]$j","$row[wfmob]");
	$i=++$i;
	$excel->getActiveSheet()->setCellValue("$letter[$i]$j","$row[wfaddress]");
	$i=++$i;
	if($row[wfguest]==null){
		$excel->getActiveSheet()->setCellValue("$letter[$i]$j"," ");
	}else{
		$excel->getActiveSheet()->setCellValue("$letter[$i]$j","$row[wfguest]");
	}
	
	$i=++$i;
	if($row[WFDDURL]==null){
		$excel->getActiveSheet()->setCellValue("$letter[$i]$j"," ");
	}else{
		$excel->getActiveSheet()->setCellValue("$letter[$i]$j","$row[WFDDURL]");
	}
	$i=++$i;
	if($row[wfipadd]==null){
		$excel->getActiveSheet()->setCellValue("$letter[$i]$j"," ");
	}else{
		$excel->getActiveSheet()->setCellValue("$letter[$i]$j","$row[wfipadd]");
	}
	$i=++$i;
	$excel->getActiveSheet()->setCellValue("$letter[$i]$j","$row[wfstatus]");
	$i=++$i;
	if($row[xdfs]==null){
		$excel->getActiveSheet()->setCellValue("$letter[$i]$j","后台");
	}else {
	$excel->getActiveSheet()->setCellValue("$letter[$i]$j","$row[xdfs]");
	}
	$i=++$i;
	$excel->getActiveSheet()->setCellValue("$letter[$i]$j","$row[kd]");
	$i=++$i;
	if($row[wfdirector]==null){
		$excel->getActiveSheet()->setCellValue("$letter[$i]$j"," ");
	}else{
		$excel->getActiveSheet()->setCellValue("$letter[$i]$j","$row[wfdirector]");
	}
	
	$i=++$i;
	if($row[wfdirectorxs]==null){
		$excel->getActiveSheet()->setCellValue("$letter[$i]$j"," ");
	}else{
		$excel->getActiveSheet()->setCellValue("$letter[$i]$j","$row[wfdirectorxs]");
	}
	
	$i=++$i;
	$excel->getActiveSheet()->setCellValue("$letter[$i]$j","$row[wfeditdate]");
	$i=++$i;
	if($row[wfdirectorxs]==null){
		$excel->getActiveSheet()->setCellValue("$letter[$i]$j"," ");
	}else{
		$excel->getActiveSheet()->setCellValue("$letter[$i]$j","$row[xszt]");
	}
	
} 
//表格数组

/* $data = array(

		array('1','小王','男','20','100'),

		array('2','小李','男','20','101'),

		array('3','小张','女','20','102'),

		array('4','小赵','女','20','103')

);


//填充表格信息


 for ($i = 2;$i <= count($data) + 1;$i++) {

	$j = 0;

	foreach ($data[$i - 2] as $key=>$value) {

		$excel->getActiveSheet()->setCellValue("$letter[$j]$i","$value");

		$j++;

	}

}  */





//创建Excel输入对象

$write = new PHPExcel_Writer_Excel5($excel);

header("Pragma: public");

header("Expires: 0");

header("Cache-Control:must-revalidate, post-check=0, pre-check=0");

header("Content-Type:application/force-download");

header("Content-Type:application/vnd.ms-execl");

header("Content-Type:application/octet-stream");

header("Content-Type:application/download");;

header('Content-Disposition:attachment;filename="data.xls"');

header("Content-Transfer-Encoding:binary");

$write->save('php://output');
