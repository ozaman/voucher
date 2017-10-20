 
<div id="popup_chat_preview_photo"   style="width:100%; height:100%; padding:0px;  left:0px;  top:0px;   z-index:99999; background-color:#000000; position:fixed;  display:none; margin-top:0px; ; overflow-y:auto">
<script>
//$('#load_wait_upload').load('load/loading/page_sub.php'); 
</script>
   <div class="back-full-popup" style="background-color:#000000;">
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40"   ><div   id="btn_close_preview_photo_backd"><i class="fa  fa-share-alt" style="font-size:22px; color:#FFFFFF "> </div></i></td>
  <td   ><div style="font-size:18px; color:#FFFFFF " id="head_full_popup"> </div></td>
    <td width="50" align="right"   ><div style="font-size:18px; color:#FFFFFF " id="head_full_popup_icon"><i class='fa  fa-photo'></i></div></td>
  </tr>
</table>
</div>
 
 <div style="margin-top: 45px;"  >  
<center><table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"><img id="preview_image_album" style="width:100%;border-radius: 0px; " /></td>
  </tr>
</table>
 </center>
 
</div> 
</div> 
 
             
	 
	  
	  
	    <script>
	  					 
	$("#preview_image_album").click(function(){   
   $( "#popup_chat_preview_photo" ).toggle("slide");
 
	 $(".messages").animate({ scrollTop: 99999 }, 3000);
  });							
							
 
	$("#btn_close_preview_photo").click(function(){   
   $( "#popup_chat_preview_photo" ).toggle("slide");
     $( "#show_chat_tool" ).slideToggle( "slow" );
	 $(".messages").animate({ scrollTop: 99999 }, 3000);
  });
  
  	$("#btn_close_preview_photo_back").click(function(){   
   $( "#popup_chat_preview_photo" ).toggle("slide");
     $( "#show_chat_tool" ).slideToggle( "slow" );
	 $(".messages").animate({ scrollTop: 99999 }, 3000);
  });
  
     </script>