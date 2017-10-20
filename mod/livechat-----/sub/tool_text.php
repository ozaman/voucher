
 <script>
 $( document ).ready(function() {
$( "#btn_back_to_tool" ).click(function() {

///// tool status
 var tool_status = $( "#show_chat_tool" ).is(":hidden");
//////alert(tool_status);
/////
 $( "#show_chat_tool" ).slideToggle( "slow" );
  $( "#show_text_tool" ).slideToggle( "slow" );
 
});


$( "#chat_icon_text_life" ).click(function() {

   $('#load_text_store_block').show(); 

   var url_text = "go.php?name=livechat/sub/load&file=text_store&type=<?=$_GET[vc]?>";
   $('#load_text_store').load(url_text); 
});


 

 ////
});

</script>


 <div style="padding:10px;display:none;box-shadow: 0px -5px 5px #DADADA; margin-top:10px" id="show_text_tool">
 
       <table width="100%"  border="0" cellspacing="0" cellpadding="0" style="margin-bottom:15px; ">
  <tr>
    <td width="30">&nbsp;&nbsp;<i class="fa fa-arrow-circle-left" style="font-size:24px; color:#999999 " id="btn_back_to_tool"></td>
    <td style="font-size:20px; ">&nbsp;เลือกคำที่ใช้ประจำในระบบ</td>
  </tr>
</table>
<div id="load_text_store_block" style="padding-bottom:10px; display:none "><table width="90%"  border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:-5px; ">
  <tr>
    <td align="center"  id="load_text_store"><select name="message_store" size="1"   id="message_store"    style="font-size:20px; padding-bottom: 1px; padding: 5px;  background-color:#FFFFFF; height:50px; width:100%;" chosen width="'100%'">
	<option value="" selected>-- เลือกข้อความ --</option>
  <?  
$db->connectdb(DB_NAME_CHAT,DB_USERNAME,DB_PASSWORD);
$res[category] = $db->select_query("SELECT * FROM  message_data_store  ORDER BY id asc");
while ($arr[category] = $db->fetch($res[category])){
 
	   echo "<option value=\"".$arr[category][id]."\"";
	   if($arr[category][id] == $_GET[type]){echo " Selected";}
	   echo ">".$arr[category][topic_th]." </option>";
	   }
                      $db->closedb ();
                      ?>
    </select></td>
  <td width="55" align="right" style="padding-left:5px; "><button type="button" class="btn btn-primary btn-flat" style="display:nones; width:50px; height:50px;"  id="chat_button_submit_store"><div style="margin-left:0px; ">ส่ง</div></button></td>
  </tr>
</table></div>


 <table width="100%"  border="0" cellspacing="1" cellpadding="1" >
  <tr valign="top">
    <td width="25%">  <center>
      <button type="button" class="btn btn-default"  style="margin-right:0px;  margin-left:0px; padding:10px; width:60px;margin-right:0px;border-radius: 15px;  " id="chat_icon_text_car"> <i class="fa fa-car" style="font-size:40px; color: #3C8DBC;   border-color: #3C8DBC ; margin-left:-5px;"></i>  </button>
<br><div style="margin-top:5px; font-size:12px ">การเดินทาง</div>
</td>
    <td width="25%"> <center>
      <button type="button" class="btn btn-default"  style="margin-right:0px;  margin-left:0px; padding:10px; width:60px;margin-right:0px;border-radius: 15px;  " id="chat_icon_text_travel"> <i class="fa fa-street-view" style="font-size:40px; color: #3C8DBC;   border-color: #3C8DBC"></i>  </button>  </button>
<br>
<div style="margin-top:5px; font-size:12px "> ที่ท่องเที่ยว</div></td>


    <td width="25%"><center>
        <button type="button" class="btn btn-default"  style="margin-right:0px;  margin-left:0px; padding:10px; width:60px;margin-right:0px;border-radius: 15px;" id="chat_icon_text_food"> <i class="fa fa-cutlery" style="font-size:40px; color: #3C8DBC;   border-color: #3C8DBC"></i>  </button> </button>
        <br>
        <div style="margin-top:5px; font-size:12px ">ร้านอาหาร</div>
    </center></td>
    <td width="25%"> 
<center>
<button type="button" class="btn btn-default"  style="margin-right:0px;  margin-left:0px; padding:10px; width:60px;margin-right:0px;border-radius: 15px;  " id="chat_icon_text_life"  > 
<i class="fa fa-comments" style="font-size:40px; color: #3C8DBC;   border-color: #3C8DBC"></i>  </button>  </button>
<br><div style="margin-top:5px; font-size:12px ">ชีวิตประจำวัน</div></td>
  </tr>
 
 
</table>
</div>