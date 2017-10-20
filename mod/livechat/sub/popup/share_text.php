 
<div id="popup_chat_text_store" role="dialog"   aria-labelledby="myModalLabel"    style="width:100%; height:100%; padding:0px;  left:0px;  top:0px;   z-index:99999; background-color:#000000; position:fixed;  display:none; margin-top:0px; ; overflow-y:auto">
<script>
//$('#load_wait_upload').load('load/loading/page_sub.php'); 
</script>
   <div class="back-full-popup" style="background-color:#000000;">
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40"   ><div   id="btn_close_text_store_backd"><i class="fa  fa-share-alt" style="font-size:22px; color:#FFFFFF "> </div></i></td>
  <td   ><div style="font-size:18px; color:#FFFFFF " id="head_full_popup"> </div></td>
    <td width="50" align="right"   ><div style="font-size:18px; color:#FFFFFF " id="head_full_popup_icon"><i class='fa  fa-photo'></i></div></td>
  </tr>
</table><button type="button" class="btn btn-primary btn-flat" style="display:nones; width:50px; height:50px;"  id="chat_button_submit_store"><div style="margin-left:0px; ">ส่ง</div></button>
</div>
 <? //  include ("load/page/back_popup.php");?>
 <div class="modal-dialog"    style="width:auto; padding:0px; margin-top:-10px; " >

            <!-- Modal  class="modal fade" content-->
            <div class="modal-content" style="width:100%; padding-top:10px; margin-left:0px;" > 
 
                <div class="modal-body"   style="width:100%;    padding:0px; margin-left:0px; margin-top:10px; vertical-align: middle;  ">  
		<br>               
		<center><table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"><img id="preview_image_album" style="width:100%;border-radius: 0px; margin-left:13px;" /></td>
  </tr>
</table>
 </center>
 
		  
</div> 

 
                <div class="modal-footer" style="margin-top: 0px; border:none; display:none"><br>
 
 
				       <center>
					 <button type="button" class="btn btn-modal-no" data-dismiss="modal"  data-backdrop="static" id="btn_close_text_store" >ปิด</button>
					 <button type="button" class="btn btn-modal-ok"     data-backdrop="static" id="btn_send_text_store" >ส่ง </button>      <center>
 
    <script>
	  					 
	$("#preview_image_album").click(function(){   
   $( "#popup_chat_text_store" ).toggle("slide");
 
	 $(".messages").animate({ scrollTop: 99999 }, 3000);
  });							
							
 
	$("#btn_close_text_store").click(function(){   
   $( "#popup_chat_text_store" ).toggle("slide");
     $( "#show_chat_tool" ).slideToggle( "slow" );
	 $(".messages").animate({ scrollTop: 99999 }, 3000);
  });
  
  	$("#btn_close_text_store_back").click(function(){   
   $( "#popup_chat_text_store" ).toggle("slide");
     $( "#show_chat_tool" ).slideToggle( "slow" );
	 $(".messages").animate({ scrollTop: 99999 }, 3000);
  });
  
     </script>
	 </div> 
	 </div> 
	 </div> 
	  </div> </div> 