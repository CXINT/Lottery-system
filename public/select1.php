<div class="clear"></div>
<div class="sle" style="position:relative;">
    <form action="query1.php" method="GET">
        <div style=" padding:7px 0px 7px 10px;">
            日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;期：
			<script language="javascript" type="text/javascript" src="My97DatePicker/WdatePicker.js"></script>
			<input style="width:26%;display:initial;float:none;" name="start_date" class="Wdate" type="text" onClick="WdatePicker()" placeholder="开始时间">
            -
            <input style="width:26%;display:initial;float:none;" name="end_date" class="Wdate" type="text" onClick="WdatePicker()" placeholder="结束时间">
            &nbsp;&nbsp;&nbsp;关&nbsp;键&nbsp;字:&nbsp;&nbsp;&nbsp;<input  type="text" name="url" style="width:210px; height:28px; text-indent:7px; border: solid 2px #AA9FFF;border-radius:5px;" />
            &nbsp;

            <input type="submit" value="搜索"  class="cx"/>
            <!--<input type="checkbox" name="all_product" title="勾选全局搜索,可以搜索所有的产品用户信息"/>-->
			<!--<select name="all_product">
            	<option value="">关</option>
                <option value="on">开</option>
            </select>-->
        </div>
    </form>
	<a href="high_query.php">
		<div style="position:absolute; width:25px; height:25px; background:url(img/8.gif) no-repeat; left:905px; top:-15px;"></div>
	</a>
	<a href="log.php">
		<div style="position:absolute; font-size:7px;  left:955px; top:-15px;">LOG</div>
	</a>
</div>
<div class="clear"></div>
