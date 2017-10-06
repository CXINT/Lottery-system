<div class="sle">
    <form action="query.php" method="GET">
        <div style=" padding:7px 0px 7px 10px;">
            日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;期：					 
            <input type="text" class="mh_date"  name="select" placeholder="开始时间" />
            -
            <input type="text" class="mh_date"  name="select1" placeholder="结束时间" />
            &nbsp;&nbsp;&nbsp;关&nbsp;键&nbsp;字:&nbsp;&nbsp;&nbsp;<input   type="text" name="url" style="width:210px; height:28px; text-indent:7px; border: solid 2px #AA9FFF;border-radius:5px;" />
            &nbsp;
            <input type="hidden"  name="qs"  value="签收"/>
            
            <input type="submit" value="搜索"  class="cx"/>
			<select name="all_product">
            	<option value="" >关</option>
                <option value="on">开</option>
            </select>
        </div>
    </form>
</div>