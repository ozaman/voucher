
<script>
 $( document ).ready(function() {
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


 
 <div style="padding:10px; display:none;box-shadow: 0px -5px 5px #DADADA; margin-top:10px" id="show_chat_tool">
       
 <table width="100%"  border="0" cellspacing="1" cellpadding="1" >
  <tr>
    <td width="25%">  <center><button type="button" class="btn btn-default"  style="margin-right:0px;  margin-left:0px; padding:10px; width:60px;margin-right:0px;border-radius: 15px;  " id="chat_icon_text"> <i class="fa fa-comments-o" style="font-size:40px; color: #999999 "></i>  </button>
<br><div style="margin-top:5px; font-size:12px "> คำที่ใช้บ่อย</div>
</td>
    <td width="25%"> <center><button type="button" class="btn btn-default"  style="margin-right:0px;  margin-left:0px; padding:10px; width:60px;margin-right:0px;border-radius: 15px;  " id="chat_icon_album"> <i class="fa fa-photo" style="font-size:40px; color: #999999 "></i>  </button>
<br>
<div style="margin-top:5px; font-size:12px "> อัลบั้ม </div></td>


    <td width="25%"><center>
        <button type="button" class="btn btn-default"  style="margin-right:0px;  margin-left:0px; padding:10px; width:60px;margin-right:0px;border-radius: 15px;  " id="chat_icon_camera"> <i class="fa fa-camera" style="font-size:40px; color: #999999 "></i> </button>
        <br>
        <div style="margin-top:5px; font-size:12px "> ถ่ายภาพ</div>
    </center></td>
    <td width="25%"> 
<center><button type="button" class="btn btn-default"  style="margin-right:0px;  margin-left:0px; padding:10px; width:60px;margin-right:0px;border-radius: 15px;  " id="chat_icon_gps"  > 




<i class="fa fa-map-marker" style="font-size:40px; color: #999999 "></i>  </button>
<br><div style="margin-top:5px; font-size:12px "> ตำแหน่ง</div></td>
  </tr>
 
 
</table>
</div>