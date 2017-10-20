
<script>
 
 $( document ).ready(function() {
 
 
    $('#show_chat_tool').hide(); 
 
$( "#chat_icon_text" ).click(function() {

///// tool status
 var tool_status = $( "#show_chat_tool" ).is(":hidden");
//////alert(tool_status);
/////
 $( "#show_chat_tool" ).slideToggle( "slow" );
  $( "#show_text_tool" ).slideToggle( "slow" );

   $('#load_text_store').html(''); 
});

 
});

</script>


 
 <div style="padding:10px; display:nones;box-shadow: 0px -5px 5px #DADADA; margin-top:10px" id="show_chat_tool">
 
 <table width="100%"  border="0" cellspacing="1" cellpadding="1" >
  <tr align="center" valign="top">
    <td width="25%" class="tool-td-chat">  <center>
      <button type="button" class="btn btn-default tool-icon-chat"  id="chat_icon_text">
	 <i class="fa fa-comments-o" ></i>  </button>
<br><div style="margin-top:5px; font-size:12px "><?=chat_txt_store?></div>
</td>
    <td width="25%" class="tool-td-chat"> <center>
      <button type="button" class="btn btn-default tool-icon-chat"  id="chat_icon_album"> <i class="fa fa-photo" ></i>  </button>
<br>
<div style="margin-top:5px; font-size:12px "> <?=chat_photo?> </div></td>


    <td width="25%" class="tool-td-chat"><center>
        <button type="button"  class="btn btn-default tool-icon-chat"     id="chat_icon_camera"> <i class="fa fa-camera"  ></i> </button>
        <br>
        <div style="margin-top:5px; font-size:12px "><?=chat_camera?></div>
    </center></td>
    <td width="25%" class="tool-td-chat"> 
<center>
<button type="button" class="btn btn-default tool-icon-chat"   id="chat_icon_gps"  > 




<i class="fa fa-map-marker" ></i>  </button>
<br><div style="margin-top:5px; font-size:12px "><?=chat_location?></div></td>
  </tr>
 
 
</table>
</div>