 
<script src="http://code.responsivevoice.org/responsivevoice.js"></script>
<input onclick='responsiveVoice.speak("Hello World");' type='button' value='🔊 Play' />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.jsss"></script>
        <script>
        var currFFZoom = 1;
        var currIEZoom = 100;

        function plus(){
            //alert('sad');
                var step = 0.02;
                currFFZoom += step;
                $('#load_content').css('MozTransform','scale(' + currFFZoom + ')');
                var stepie = 5;
                currIEZoom += stepie;
                $('#load_content').css('zoom', ' ' + currIEZoom + '%');

        };
        function minus(){
            //alert('sad');
                var step = 0.02;
                currFFZoom -= step;
                $('#load_content').css('MozTransform','scale(' + currFFZoom + ')');
                var stepie = 5;
                currIEZoom -= stepie;
                $('#load_content').css('zoom', ' ' + currIEZoom + '%');
        };
    </script>


<!--zoom controls-->
<? if(1==0) { ?>
                        <a id="minusBtn" onclick="minus()"><i class="fa fa-minus-square" style="font-size:36px "></i></a>&nbsp;&nbsp;
                        <a id="plusBtn" onclick="plus()"><i class="fa fa-plus-square" style="font-size:36px "></i></a>
						
						<? } ?>
 <div id="load_content">
 <?
 
//$_GET[day] ="2016-07-13";
if($_GET[day] != ''){
	$_GET[day] = $_GET[day];
}else{
$_GET[day] = date('Y-m-d');
}
$_GET[day] ='2016-08-10';

$_GET[server]='th';

///echo $driver_id;
 
///// update report <--- order
 
$select_order="id,invoice,program,orderid,transfer_date,pickup_place,to_place,carno,drivername,air,airin_time,airout_time,driver_remark,total";
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[update] = $db->select_query("SELECT *  FROM ".TB_order."  where drivername='".$driver_id."' and  transfer_date >= '".$_GET[day]."'  order by transfer_date  limit 30");
while($arr[update] = $db->fetch($res[update])){
/*
echo $arr[update] [transfer_date];
echo " &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;";
echo $arr[update] [invoice];
echo "<br>";
//echo $arr[update] [orderid] ;
echo "<br>";
*/
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$db->update_db(TB_order_car,array(
 
 		"total"=>$arr[update] [total] ,
 
 		"remark"=>$arr[update] [remark] ,
 		"pickup_place"=>$arr[update] [pickup_place] ,
		"to_place"=>$arr[update] [to_place] ,
		
		
		"airin_time"=>$arr[update] [airin_time] ,
		"airout_time"=>$arr[update] [airout_time] ,
		
		"orderid"=>$arr[update] [orderid] 
		
		)," invoice='".$arr[update] [invoice]."' ");

 
}
 
/// map
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[gg_map] = $db->select_query("SELECT id,map,transferplace_type,star FROM ".TB_transferplace_new."  ");
	while($arr[gg_map] = $db->fetch($res[gg_map])){
		$arr_map[$arr[gg_map][id]] = $arr[gg_map][map];
		$arr_type[$arr[gg_map][id]] = $arr[gg_map][transferplace_type];
		$arr_star[$arr[gg_map][id]] = $arr[gg_map][star];
	}
 
$res[gg_map] = $db->select_query("SELECT id,topic,province,amphur FROM ".TB_transferplace."  ");
	while($arr[gg_map] = $db->fetch($res[gg_map])){
		$arr_t_topic[$arr[gg_map][id]] = $arr[gg_map][topic];
		$arr_t_province[$arr[gg_map][id]] = $arr[gg_map][province];
		$arr_t_amphur[$arr[gg_map][id]] = $arr[gg_map][amphur];
	}
	 

///

//// $res[timeline] = $db->select_query("SELECT * FROM ".TB_order."  where drivername='".$driver_id."' and transfer_date='".$_GET[day]."'   order by airin_h ASC,airin_time ASC  ");

$res[timeline] = $db->select_query("SELECT * FROM date_loop  where  dayall >= '".$_GET[day]."' order by  id  asc  limit 15");
	while($arr[timeline] = $db->fetch($res[timeline])){
	 
	
 $daywork=$arr[timeline][dayall];
	
	
 ?>
<?   include("mod/load/today/timeline.php") ; ?>

 

 <? } 
 
 ?>
 
 <? // include("mod/load/today/timeline.php") ; ?></div>