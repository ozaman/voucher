
			  <? if($arr[chat][comment_from]==$chat_from){?>
                <div class="direct-chat-msg right" >
                  <div class="direct-chat-info clearfix" style="margin-top:10px; margin-bottom:10px; ">
				     <span class="direct-chat-name pull-right" style="text-transform:capitalize "><?=$arr[chat][comment_from]?></span>
                    <span class="direct-chat-timestamp pull-left"> <?=$date = date('Y-m-d ',  $arr[chat][flight_delay_date]);?>&nbsp;<font color="#000000"><?=$date = date('h:i:s',  $arr[chat][flight_delay_date]);?></font></span>
                  </div>
 
  <!-- /.direct-chat-info -->
<img class="direct-chat-img" src="../../admin/file/driver/pic/small/<?=$arr[web_driver][post_date];?>.jpg" alt="Message User Image"><!-- /.direct-chat-img -->

<? if($arr[chat][type_state]=="share_photo" or  $arr[chat][type_state]=="share_location"){?>
<div class="direct-chat-texts" style="text-align:right; padding-left:20px; ">
<script>

 
var url = "http://maps.googleapis.com/maps/api/geocode/json?latlng=<?=$arr[chat][latitude]?>,<?=$arr[chat][longitude]?>&sensor=false";
$.getJSON(url, function (data<?=$arr[chat][id]?>) {
    for(var i=0;i<1;i++) {
        var adress<?=$arr[chat][id]?> = data<?=$arr[chat][id]?>.results[i].formatted_address;
    
	  $( "#map_address_<?=$arr[chat][id]?>" ).html(adress<?=$arr[chat][id]?>);
    }
});


</script>

  <? } ?>
  <? if($arr[chat][type_state]<>"share_photo" and $arr[chat][type_state]<>"share_location"){?>
<div class="direct-chat-text">
  <? } ?>
  
  
   <? if($arr[chat][id_comment]>0){ ?>
   
   <?
    $arr[chat][comment]=$arr[storechat][topic_.$_GET[lang]];
   ?>
 
  <div id="translate_en_<?=$arr[chat][id]?> " style="margin-top:5px; padding-top:5px;   border-top:1px solid #C1C1C1; color:#FFFFFF;  display:none">
		<?=$arr[storechat][topic_en]?>
 </div>
 
 <div id="translate_cn_<?=$arr[chat][id]?> " style="margin-top:5px; padding-top:5px;   border-top:1px solid #C1C1C1; color:#FFFFFF;  display:none">
		<?=$arr[storechat][topic_cn]?>
 </div>
 
  <? } ?>
  
  
			<?=$arr[chat][comment]?>  
			
			
			
			<? if($arr[chat][type_state]=="share_photo"){?>
 
			&nbsp;<img src="../data/fileupload/photo/<?=$arr[chat][voucher];?>_<?=$arr[chat][flight_delay_date]?>_small.jpg"   align="absmiddle" style="padding: 5px display:nonex" class="img-chat-pic" id="button_photo_<?=$arr[chat][id]?>">&nbsp;<?=$arr[chat][flight_delay]?>
			
			<script>
			 $('#button_photo_<?=$arr[chat][id]?>').click(function(){  
    $( "#popup_chat_preview_photo" ).toggle("slide");
 $("#preview_image_album").attr("src", "../data/fileupload/photo/<?=$arr[chat][voucher];?>_<?=$arr[chat][flight_delay_date]?>_big.jpg");
 
 });
			
			</script>
			
		    <? } ?>
			
			
			<? if($arr[chat][type_state]=="share_location"){?>
 
 <table width="100"  border="0" align="right" cellpadding="0" cellspacing="0" class="img-chat-map">
  <tr>
    <td id="map_address_<?=$arr[chat][id]?>" style="padding:5px; font-size:13px; font-weight:bold; color:#333333 "> </td>
  </tr>
  <tr>
    <td align="center"><img src="../data/fileupload/map/<?=$arr[chat][voucher];?>_<?=$arr[chat][flight_delay_date]?>.png"   align="absmiddle"   id="button_map_<?=$arr[chat][id]?>" style=" width:200px; margin-left:5px; margin-bottom:5px; ">&nbsp;<?=$arr[chat][flight_delay]?></td>
  </tr>
</table>

 
 <? $google_api="AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90";?>
			
			<script>
$('#button_map_<?=$arr[chat][id]?>').click(function(){  
$( "#popup_chat_preview_map" ).toggle("slide");
  
  /// &origin=Oslo+Norway&destination=Telemark+Norway&avoid=tolls|highways
  
 ///$("#load_chat_preview_map").html('<iframe src = "https://maps.google.com/maps?q=<?=$arr[chat][latitude]?>,<?=$arr[chat][longitude]?>&hl=th;z=14&output=embed" style="width:100%; height:100%; border:none"></iframe>');
 
 
///$("#load_chat_preview_map").html('<iframe width="100%"  height="100%"  frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=<?=$google_api?>&q=<?=$arr[chat][latitude]?>,<?=$arr[chat][longitude]?>&zoom=17" allowfullscreen></iframe>');
  
 $("#load_chat_preview_map").html('<iframe width="100%"  height="100%"  frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?key=<?=$google_api?>&origin=<?=$arr[chat][latitude]?>,<?=$arr[chat][longitude]?>&destination=7.9021833,98.2997785&avoid=tolls|highways&zoom=14" allowfullscreen></iframe>');
 
 ///$("#load_chat_preview_map").html('<iframe width="100%"  height="100%"  frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/view?key=<?=$google_api?>&center=<?=$arr[chat][latitude]?>,<?=$arr[chat][longitude]?>&zoom=17" allowfullscreen></iframe>');
 
 
 
 var url = "http://maps.googleapis.com/maps/api/geocode/json?latlng=<?=$arr[chat][latitude]?>,<?=$arr[chat][longitude]?>&sensor=false";
$.getJSON(url, function (data) {
    for(var i=0;i<1;i++) {
        var adress = data.results[i].formatted_address;
 
	  $( "#load_chat_preview_map_address" ).html(adress);
    }
});
 
 
 
 });
			
			</script>
			
		    <? } ?>
			
			
			
			
			
			
  </div>
				 
</div>
				
                
			  <? } ?>