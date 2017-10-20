 <style type="text/css">
<!--
.topictransfer { padding-top:10px; font-size:16px; font-weight:normal; color: #3C8DBC ; 
 
}
.style1 {font-size: 16px}
.style2 {font-size: 16}
-->
</style> 
  <?
 
if($daywork != ''){
	$daywork = $daywork;
}else{
$daywork = "2016-07-12";
}
 //echo $_SESSION['admin_user_dv'];
//  echo $_GET[server];
?>
 
 <?
 
 /*
if($_GET[server]=="th"){
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
}
if($_GET[server]=="cn"){
$db->connectdb_cn(DB_NAME,DB_USERNAME,DB_PASSWORD);
}
*/
//$daywork= $daywork;
$select_order="id,invoice,program,orderid,pickup_place,to_place,carno,cartype,drivername,air,airin_time,airout_time,driver_remark,total";


$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$res[project] = $db->select_query("SELECT $select_order FROM ".TB_order_car."  where drivername='".$driver_id."' and transfer_date='". $daywork."'   order by airin_h ASC,airin_time ASC  ");
$rows[project] = $db->rows($res[project]);

if($rows[project]){	
}else{
	$rows[project] = 0;
}
/*

$row_processing = $db->num_rows(TB_order_car,"id","drivername='".$driver_id."' and transfer_date='".$daywork."' and status = 'CONFIRM' and driver_complete  ='0' group by carno  ");
$row_complete = $db->num_rows(TB_order_car,"id","drivername='".$driver_id."' and transfer_date='".$daywork."' and status = 'CONFIRM' and driver_complete  ='1' group by carno  ");
*/
?>
 

      <div class="row" style="height:auto; padding:0px; margin-right:-10px; ">
				 
<?

$i=1;
while($arr[project] = $db->fetch($res[project])){
 
	 $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[product] = $db->select_query("SELECT cartype,area FROM web_transferproduct WHERE id='".$arr[project][program]."' ");
	$arr[product] = $db->fetch($res[product]);
	$res[book] = $db->select_query("SELECT  id,guest FROM ".TB_book_agent." WHERE id='".$arr[project][orderid]."' ");
	$arr[book] = $db->fetch($res[book]);
 
	$res[place] = $db->select_query("SELECT topic FROM ".TB_transferplace." WHERE id='".$arr[project][pickup_place]."' ");
	$arr[place] = $db->fetch($res[place]);
	$res[to] = $db->select_query("SELECT topic FROM ".TB_transferplace." WHERE id='".$arr[project][to_place]."' ");
	$arr[to] = $db->fetch($res[to]);
	//////////
 
//for($i=1;$i<=6;$i++){
?>


 

        <div class="col-md-12" >
	  <div class="box box-danger" style="padding:10px; height:320px;  border: solid 2px #ECF0F5;display:none" onmouseover="this.style.border='solid 2px #FF6600';" onmouseout="this.style.border='solid 2px #ECF0F5';" id="booking_<?=$arr[project][invoice];?>"  >
	  
	 
		 
	  </div>  
   
              
  </div>  

 
   <!-- The time line -->
          <ul class="timeline">
            <!-- timeline time label -->
			
			<? if($i==1){?>
            <li class="time-label" style="margin-right:25px;  ">
<span class="bg-red font_35" style="font-size:28px; margin-left:15px; width:100% "><center>
<? echo $daywork;   ?> </center>
                  </span>
            </li>
			<? } ?>
 
			 

			
			
			
			
            <!-- timeline item -->
            <li style="margin-top:-5px;  ">
             

              <div class="timeline-item" style="margin-left:40px;  margin-right: 0px; margin-top:0px">
             
<? if($i==1){?>
             <table width="100%" border="0" cellspacing="2" cellpadding="2" style="margin-top: 20px ">
			 <? } ?>
			 
			 <? if($i<>1){?>
             <table width="100%" border="0" cellspacing="2" cellpadding="2" style="margin-top: 30px; height:40px; ">
			 <? } ?>
			 
  <tr>
    <td width="30"  style="background-color:#F6F6F6 "><div class="cirnumbershow" id="cir_<?=$arr[project][invoice];?>"><table width="100%"  border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td style="font-size:30px; color:#FFFFFF; font-weight:bold "><center><?=$i;?></center></td>
  </tr>
</table>
</div> </td>
    <td width="80" height="30" style="background-color:#F3F3F3;   ">
		
	
	
	<? if($arr[product][cartype] == 2){  
	
	$work_type="จอย";
	
	?>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
           <td style="font-size:22px ; color:#009999"><i class="fa fa-users"></i></td>
          <td  style="font-size:16px ; font-weight:bold; margin-left:-10px;">จอย </td>
        </tr>
      </table>
      <? }else{ 
	  $work_type="ไพรเวท";
	  
	  ?>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td style="font-size:22px ; color: #666666"><i class="fa fa-user"></i></td>
          <td  style="font-size:16px ; font-weight:bold">ไพรเวท</td>
        </tr>
      </table>
    <? } ?></td>
    <td valign="middle" style="font-size:16px ; font-weight:bold"> 
	
						<? if($arr[product][area] == 'In'){ 
						$work_area="รับเข้า";
						
						?> 
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr> 
 <td style="font-size:25px ; color: #3399CC  " width="35">&nbsp;<i class="fa   fa-arrow-down "></i></td>
    <td style="font-size:16px ; font-weight:bold">&nbsp;รับเข้า</td>
  </tr>
</table>  
						  
						 
						   
						   <?  } elseif($arr[product][area] == 'Out'){
						   $work_area="ส่งออก";
						    ?>
						   
						   <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr> 
 <td style="font-size:25px ; color: #FF0000  " width="35">&nbsp;<i class="fa   fa-arrow-up "></i></td>
    <td style="font-size:16px ; font-weight:bold">&nbsp;ส่งออก</td>
  </tr>
</table>  
 
						  
	 <? }elseif($arr[product][area] == 'Point'){ 
	 
	  $work_area="พ้อยท์ทูพ้อยท์";
	 ?>  
						<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr> 
 <td style="font-size:25px ; color: #666699 " width="35">&nbsp;<i class="fa   fa-share-alt"></i></td>
    <td style="font-size:16px ; font-weight:bold">&nbsp;พ้อยท์ทูพ้อยท์</td>
  </tr>
</table>  
						  
						   <? }else{ 
						   $work_area="เซอร์วิส";
						   
						   ?> 
												<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr> 
 <td style="font-size:22px ; color: #FF9900" width="35">&nbsp;<i class="fa  fa-taxi"></i></td>
    <td style="font-size:16px ; font-weight:bold">&nbsp;เซอร์วิส</td>
  </tr>
</table>
						 
						   <? } ?> </td>
    </tr>
</table><a rel="external" href="?name=view&file=show&day=<?=$daywork;?>&carno=<?=$arr[project][carno];?>&cartype=<?=$arr[project][cartype];?>&car_list=<?=$i;?>&sv=<?=$_GET[server]?>">
<div class="btn-startwork" ><?echo $arr[project][airout_time];?>&nbsp;&nbsp; &nbsp;จัดการงาน</div></a>
 
              
             <style>
.timeline-header a {
font-size:18px; color:#006699; font-weight:bold; padding:3px;
}
.timeline-header {
font-size:18px; color:#006699; font-weight:bold; padding:3px;
}
.timeline-l { padding:5px;margin-left:20px;
}

</style>
                <div class="timeline-body">
 
                </div>
 
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa  fa-map-marker bg-blue" style="z-index:1; color:#FFFFFF "></i>

              <div class="timeline-item"  style="margin-left:40px; margin-right: 0px;">
                <span class="time" style="font-size:16px"><i class="fa fa-clock-o"></i> รออัพเดท</span>

                <h3 class="timeline-header" style="padding-top:10px; padding-bottom:5px; "><a >สถานที่รับ</a></h3>
				<div class="timeline-body"  style="padding-top:5px; padding-bottom:5px; "><? if($arr_t_topic[$arr[project][pickup_place]] != ''){ ?>
                                   <? echo $arr_t_topic[$arr[project][pickup_place]];?> (
                                   <?=$arr_t_province[$arr[project][pickup_place]];?>
      /
      <?=$arr_t_amphur[$arr[project][pickup_place]];?>
      )
      <? } ?>

				
                </div>
				
				
              </div>
            </li>
 
			
            <!-- END timeline item -->
			
			<?
			 if($arr[product][area] == 'In'){ 
			 
			 $work_airin=" เที่ยวบิน".$arr[project][air]. " : ";
			  ?>
			   <!-- timeline item -->
            <li  >
              <i class="fa  fa fa-plane"  style="z-index:1 "></i>

              <div class="timeline-item" style="margin-left:40px; margin-right: 0px;">
                <span class="time"><i class="fa fa-clock-o"></i> <? echo $arr[project][airin_time];?></span>

                <div class="timeline-header"  style="padding-top:10px; padding-bottom:5px; "><a ><font color="#666666">เที่ยวบิน</font></a> <B><? // echo $arr[project][airin_time];?></B></div>

                <div class="timeline-body"  style="padding-top:5px; padding-bottom:5px; "> <?echo $arr[project][air];?> / <?echo $arr[project][airin_time];?>
                </div>
 
              </div>
            </li>
			<? } 
			
						if($arr[product][area] <> 'In'){ 
			
			$work_airin=" ";
			}
			
			?>
			
			
			
			
			
            <!-- timeline item -->
            <li  >
              <i class="fa  fa-users bg-green"  style="z-index:1 "></i>

              <div class="timeline-item" style="margin-left:40px; margin-right: 0px;">
                <span class="time" style="font-size:16px"><i class="fa fa-clock-o"></i> รออัพเดท</span>

                <div class="timeline-header"  style="padding-top:10px; padding-bottom:5px; "><a ><font color="#666666">รับแขก</font></a> <span class="font_26" style="margin-top:-5px; position:absolute "><B >&nbsp;&nbsp;<? echo $arr[project][airout_time];?></B></span></div>

                <div class="timeline-body"  style="padding-top:5px; padding-bottom:5px; ">
				
				<? echo $arr[project][orderid];?>
				
				<?=$arr[book][guest]?>
                </div>
 
              </div>
            </li>
            <!-- END timeline item -->
			
			
			
			 
			
			<!-- timeline item -->
            <li>
              <i class="fa fa-map-marker bg-blue"  style="z-index:1 "></i></i>

              <div class="timeline-item" style="margin-left:40px; margin-right: 0px;">
                <span class="time" style="font-size:16px"><i class="fa fa-clock-o"></i> รออัพเดท</span>

                <h3 class="timeline-header"  style="padding-top:10px; padding-bottom:5px; "><a >สถานที่ส่ง</a></h3>

                <div class="timeline-body"  style="padding-top:5px; padding-bottom:5px; ">
				

				
				
<? if($arr_t_topic[$arr[project][to_place]] != ''){ ?>
                                   <? echo $arr_t_topic[$arr[project][to_place]];?> (
                                   <?=$arr_t_province[$arr[project][to_place]];?>
      /
      <?=$arr_t_amphur[$arr[project][to_place]];?>
      )
      <? } ?>
                </div>
 
              </div>
            </li>
            <!-- END timeline item -->
			
			
           
			
			
			
            <!-- /.timeline-label -->
			
			
			<? if($arr[product][area] == 'Out'){  
			
			  $work_airout=" เที่ยวบิน".$arr[project][air]. " : ";
			
			?>
			   <!-- timeline item -->
            <li  >
              <i class="fa  fa fa-plane"  style="z-index:1 "></i>

              <div class="timeline-item" style="margin-left:40px; margin-right: 0px;">
                <span class="time" style="font-size:16px"><i class="fa fa-clock-o"></i> <? echo $arr[project][airin_time];?></span>

                <div class="timeline-header"  style="padding-top:10px; padding-bottom:5px; "><a ><font color="#666666">เที่ยวบิน</font></a> <B></B></div>

                <div class="timeline-body"  style="padding-top:5px; padding-bottom:5px; "> <?echo $arr[project][air];?> / <?echo $arr[project][airin_time];?>
                </div>
 
              </div>
            </li>
			<? }
			
			if($arr[product][area] <> 'Out'){ 
			
			$work_airout=" ";
			}
			
			
			 ?>
            <!-- END timeline item -->
            <!-- timeline item -->
          
            <!-- END timeline item -->
            <!-- timeline item -->
    <?  // $eng_date=strtotime($daywork);  echo thai_date($eng_date);   ?> 

     
<input onclick="responsiveVoice.speak('งานที่ <?=$i?> <? //$eng_date=strtotime($daywork);  echo thai_date($eng_date);   ?>  <?=$work_area?>   แขก <?=$work_type?> :    สถานที่รับ : <?=$arr_t_topic[$arr[project][pickup_place]];?>  <?=$work_airin?>   รับแขกเวลา : <? echo $arr[project][airout_time];?> น.  :  จำนวนแขก : <? echo $arr[project][total];?> คน : สถานที่ส่ง  : <?=$arr_t_topic[$arr[project][to_place]];?> :  <?=$work_airout?> :  ขอบคุณค่ะ', 'Thai Female');" type="button" value='🔊 Play' style="margin-left:25px; " />
 
 
            <!-- END timeline item -->
            <li style="margin-bottom:-30px; ">
              <i></i>
            </li>
			
          </ul>
 

<?
$i++;	
}
$db->closedb ();
?>  </div>  

 <? if($_GET[server]=="sssth"){ ?>

<script>
 
 
	/*
	var url_place_th = "go.php?name=load/all&file=all&server=th&day="+$("#date_report").val()+"";
	$('#load_th').show();
	$('#load_th').load('load/page/loading.php');
	$('#load_th').load(url_place_th); 
	*/
 
 
 
var url_place_cn = "go.php?name=load/all&file=all&server=cn&day="+$("#date_report").val()+"";
	$('#load_cn').show();
	$('#load_cn').load('load/page/loading.php');
	$('#load_cn').load(url_place_cn); 
	 
	//// cn
		
	//$('.loader').show();
  
</script>
<? } ?>
 