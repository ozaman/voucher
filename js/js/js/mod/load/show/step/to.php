
			
			<? 
if($arr[project][driver_topoint] == 1){ $text_status = "check";$btn_status = "success  btn-block btn-md btnstatus approve"; ?>
                <script>
$('#iconchk_s1_<?=$arr[project][id];?>').attr("src", "images/yes.png");
$('#checkstep_1_<?=$arr[project][id];?>').addClass("checkinstep_active");
		 		</script>
            
                <?
}
else{$text_status = "times";$btn_status = "warning  btn-block btn-md btnstatus reject"; ?>
                <script>
$('#tab_to_<?=$arr[project][id];?>').addClass("tab_alert");
  </script>
                <?
} 
?>
      <button style="  color: #fffbfb;" class="btnstatus" data-target="#popup_topoint_<?=$arr[project][id];?>" data-toggle="modal" data-backdrop="static" data-keyboard="false" data_id="<?=$arr[project][id];?>"  data_vc="<?=$arr[project][invoice];?>"   data_report_id="<?=$arr[project][report_id];?>" col_name="driver_topoint"  id="btn_topoint<?=$arr[project][id];?>" <? if($arr[project][driver_topoint] > 0){ ?> disabled="disabled"  <? } ?> ><font class="font_14">ถึงสถานที่รับ</font></button>