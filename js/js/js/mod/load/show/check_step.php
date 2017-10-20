 
<table width="100%" cellpadding="3">
  <tr>
    <td width="100%" valign="top"><div id="tab_to_<?=$arr[project][id];?>" style="margin-bottom:5px; padding:5px; border-bottom:  solid 1px #CDCDCD ; ">
        <table width="100%"  border="0" cellspacing="2" cellpadding="2" style="border-bottom: solid 0px #999999;  " >
          <tr>
            <td width="45" ><div class="checkinstep" id="checkstep_1_<?=$arr[project][id];?>">
                <center>
                  <b>1</b>
                </center>
              </div>
                <div  style="position:absolute; margin-top:-30px; margin-left: -10px;"><img src="images/no.png"  align="absmiddle"  id="iconchk_s1_<?=$arr[project][id];?>"   /></div></td>
            <td width="120" valign="middle">
 <?
 include("mod/load/show/step/to.php");
 ?>
	  
	  </td>
            <td><div id="mapto_<?=$arr[project][id];?>" > </div></td>
          </tr>
        </table>
    </div></td>
  </tr>
  <tr>
    <td colspan="2" valign="top" id="sub_see_guest<?=$arr[project][id];?>" style="display: none<? if($arr[project][driver_topoint] > 0){ echo "1"; } ?>"><div id="tab_pickup_<?=$arr[project][id];?>" style="margin-bottom:5px; padding:5px; border-bottom:  solid 1px #CDCDCD ; ">
        <? if($arr[project][driver_pickup] == 0 and $arr[project][driver_topoint] ==1){ ?>
        <script>
	  $('#tab_pickup_<?=$arr[project][id];?>').addClass("tab_alert");
	  </script>
        <? } ?>
        <table width="100%"  border="0" cellspacing="2" cellpadding="2" style="border-bottom: solid  0px #999999; margin-bottom:0px; ">
          <tr>
            <td width="45" ><div class="checkinstep" id="checkstep_2_<?=$arr[project][id];?>">
                <center>
                  <b>2</b>
                </center>
              </div>
                <div  style="position:absolute; margin-top:-30px; margin-left: -10px;"><img src="images/no.png"  align="absmiddle" id="iconchk_s2_<?=$arr[project][id];?>"    /></div></td>
            <td width="120" valign="middle">
 <?
 include("mod/load/show/step/pickup.php");
 ?>
	  
			</td>
            <td><div id="mappickup_<?=$arr[project][id];?>"></div>
                <? if($arr[project][driver_pickup] != 0 && $arr[project][driver_pickup] != ''){ ?>
                <? if($arr[project][driver_pickup] == 2){ $txt_pick_g = "ไม่เจอแขก"; }else{ $txt_pick_g = "เช็คชื่อแขก";   }?>
                <script type="text/javascript">
 $('#iconchk_s2_<?=$arr[project][id];?>').attr("src", "images/yes.png");
$('#checkstep_2_<?=$arr[project][id];?>').addClass("checkinstep_active");
 $('#tab_pickup_<?=$arr[project][id];?>').removeClass("tab_alert");
 
 $(document).ready(function(){

  
   $('#show_price<?=$arr[project][id];?>').show();
  });
  </script>
                <?	
		}
		?></td>
          </tr>
        </table>
    </div> </td>
  </tr>
  <tr id="sub_complete<?=$arr[project][id];?>"  style="display: none<? if($arr[project][driver_pickup] > 0 ){ ?> 1  <? } ?>">
    <td colspan="2"><div id="tab_complete_<?=$arr[project][id];?>" style="margin-bottom:5px; padding:5px; border-bottom:  solid 1px #CDCDCD ; ">
	<? if($arr[project][driver_pickup] == 1 or $arr[project][driver_pickup] ==0  ){ ?> 
				<script>
 $(document).ready(function(){
		$('#text_1_complete_<?=$arr[project][id];?>').show();
		$('#text_2_complete_<?=$arr[project][id];?>').hide();
		  });
		 </script>
		<? } ?>
		
			<? if($arr[project][driver_pickup] == 2){ ?> 
				<script>
 $(document).ready(function(){
		$('#text_1_complete_<?=$arr[project][id];?>').hide();
		$('#text_2_complete_<?=$arr[project][id];?>').show();
		  });
		 </script>
		<? } ?>
	
	
	
        <table width="100%"  border="0" cellspacing="2" cellpadding="2" style="border-bottom: solid 0px #999999; margin-bottom:0px; ">
          <tr>
            <td width="45" ><div class="checkinstep" id="checkstep_3_<?=$arr[project][id];?>">
                <center>
                  <b>3</b>
                </center>
              </div>
  <div  style="position:absolute; margin-top:-30px; margin-left: -10px;"><img src="images/no.png"  align="absmiddle" id="iconchk_s3_<?=$arr[project][id];?>"></div></td>
            <td width="120" valign="middle">

<?
 include("mod/load/show/step/complete.php");
 ?>
						
			
			
			
			</td>
            <td><div id="mapcomplete_<?=$arr[project][id];?>"></div>
                <? if($arr[project][driver_complete] != 0 && $arr[project][driver_complete] != ''){ ?>
                <script>
$('#iconchk_s3_<?=$arr[project][id];?>').attr("src", "images/yes.png");
$('#checkstep_3_<?=$arr[project][id];?>').addClass("checkinstep_active");

 $('#tab_complete_<?=$arr[project][id];?>').removeClass("tab_alert");
 


		 		</script>
  
  
                <? } ?>
            </td>
          </tr>
        </table>
    </div></td>
  </tr>
</table>
<SCRIPT>
$( document ).ready(function() {

$('#mapto_<?=$arr[project][id];?>').html('<i class="fa fa-refresh fa-spin 2x" style="font-size:22px; color:#367FA9; " ></i>');
$('#mappickup_<?=$arr[project][id];?>').html('<i class="fa fa-refresh fa-spin 2x" style="font-size:22px; color:#367FA9; " ></i>');
 $('#mapcomplete_<?=$arr[project][id];?>').html('<i class="fa fa-refresh fa-spin 2x" style="font-size:22px; color:#367FA9; " ></i>');
//var url_price<?=$arr[project][id];?> = "popup.php?name=load/show&file=price&bookid=<?=$arr[project][id];?>";
//$('#show_price<?=$arr[project][id];?>').load(url_price<?=$arr[project][id];?>);

});
</SCRIPT>

<? 
if($arr[project][driver_topoint] == 1){ ?>
    <script type="text/javascript">
  $(document).ready(function(){
var url_mapto<?=$arr[project][id];?> = "load_small.php?name=map&file=view&sv=<?=$_GET[sv];?>&bookid=<?=$arr[project][id];?>&type=driver_topoint&data_val=<?=$arr[project][driver_topoint];?>";

setTimeout(function () {
$('#mapto_<?=$arr[project][id];?>').load(url_mapto<?=$arr[project][id];?>);
}, 3000); //w
   });  
  </script>

<? } ?>


<? 
if($arr[project][driver_pickup] > 0){ ?>
    <script type="text/javascript">
  $(document).ready(function(){
  
  	var url_mappickup<?=$arr[project][id];?> = "load_small.php?name=map&file=view&sv=<?=$_GET[sv];?>&bookid=<?=$arr[project][id];?>&type=driver_pickup&data_val=<?=$arr[project][driver_topoint];?>";
		
setTimeout(function () {
$('#mappickup_<?=$arr[project][id];?>').load(url_mappickup<?=$arr[project][id];?>);
},3000); //w
 
   });  
  </script>
  
  <? } ?>
  
  
  <? 
if($arr[project][driver_complete] > 0){ ?>
    <script type="text/javascript">
  $(document).ready(function(){
  
  	var url_mapcomplete<?=$arr[project][id];?> = "load_small.php?name=map&file=view&sv=<?=$_GET[sv];?>&bookid=<?=$arr[project][id];?>&type=driver_complete&data_val=<?=$arr[project][driver_topoint];?>";
		
setTimeout(function () {
$('#mapcomplete_<?=$arr[project][id];?>').load(url_mapcomplete<?=$arr[project][id];?>);
},3000); //w
 
   });  
  </script>

<? } ?>

 


<div id="show_price<?=$arr[project][id];?>" style="display:none ">
 
</div>