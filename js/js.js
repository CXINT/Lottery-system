$(document).ready(function() {
	var menuParent = $('.menu > .ListTitlePanel > div');//获取menu下的父层的DIV
	var menuList = $('.menuList');
	$('.menu > .menuParent > .ListTitlePanel > .ListTitle').each(function(i) {//获取列表的大标题并遍历
		$(this).click(function(){
			if($(menuList[i]).css('display') == 'none'){
				$(menuList[i]).slideDown(300);
			}
			else{
				$(menuList[i]).slideUp(300);
			}
		});
	});
});


//搜索按钮
$(function (){
	$("input.mh_date").manhuaDate({					       
		Event : "click",//可选				       
		Left : 0,//弹出时间停靠的左边位置
		Top : -16,//弹出时间停靠的顶部边位置
		fuhao : "-",//日期连接符默认为-
		isTime : false,//是否开启时间值默认为false
		beginY : 2015,//年份的开始默认为1949
		endY :2017//年份的结束默认为2049
	});
	
});


//删除客户操作
function deal(arg,n) {
	if(arg == 'del') {
		var s = window.confirm('您确定要删除吗？');	//确认对话框,返回true/false
		if(s == true)
		{
			//此时才真正去做删除工作。。。。。
			location.href = "action/delete.php?id=" + n;	//这里就是传说中的使用get方式传数据到另一个页面
			
		}
	}

}


//批量删除的提示

function check(){
	var s = window.confirm('您确定要批量删除吗?\n此操作无法撤销,请慎重');
	if(s == true)
	{
		 form1.submit();
	}
}



//全选反选选择框
function selectBox(selectType){  
var checkboxis = document.getElementsByName("id[]");  

if(selectType == "reverse"){  
	for (var i=0; i<checkboxis.length; i++){  
		//alert(checkboxis[i].checked);  
		checkboxis[i].checked = !checkboxis[i].checked; 
	}  
}  
else if(selectType == "all")  
{  
	for (var i=0; i<checkboxis.length; i++){  
		//alert(checkboxis[i].checked);  
		checkboxis[i].checked = true;  
	}  
}  
}  

  function chknc(id)
  {
    window.open("eduser.php?id="+id,"newframe","width=1020,height=500,left=200,top=100,menubar=no,toolbar=no,location=no,scrollbars=no,location=no");
  }






//页码跳转验证代码
function checkpage(){
	var cardnumber=form11111.page.value;
	//alert(cardnumber);
	cardnumber = cardnumber.replace(/\s/ig,'');
	//alert(cardnumber);
	if(cardnumber==""){
	alert("请输入要跳转的页码!");
	exit;	
	}
	if(isNaN(cardnumber)){
	alert("请输入数字!");
	exit;
	}
	if (cardnumber.charAt(0) == '0') {
		alert('不能输入0!');
		exit;
	}
	else{
		form11111.submit();
	}
}