 
 
 
  <?
$db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);  
$res[vc] = $db->select_query("SELECT drivername  FROM web_order  WHERE invoice='".$_GET[vc]."'  "); 
$arr[vc] = $db->fetch($res[vc]);
  
  $arr[vc][drivername];
    
  ?>

  <input name="chat_driver_id" type="hidden" id="chat_driver_id" value="<?=$arr[vc][drivername]?>" />  <br />
   <input name="chat_vc_id" type="hidden" id="chat_vc_id" value="<?=$_GET[vc]?>" />  <br />
  
   <!-- Direct Chat -->

          <!-- DIRECT CHAT PRIMARY -->
          <div class="box box-primary direct-chat direct-chat-primary" style="height:400px; overflow:auto;padding-bottom:10px " id="main_message_chat">
            <div class="box-header with-border">
              <h3 class="box-title">Chat Room</h3>

              <div class="box-tools pull-right">
                <span data-toggle="tooltip" title="3 ข้อความใหม่" class="badge bg-light-blue">3</span>
				
				
				
				
                <button type="button" class="btn btn-box-tool" data-widget="collapse"> 
                </button>
                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
                  <i class="fa fa-comments"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
			
			 
			
			
 
            <!-- /.box-header -->
            <div class="box-body">
              <!-- เริมการแชท -->
       <div class="direct-chat-messages" style="height:100%; overflow:auto ;" id="load-direct-chat"> 
			  
			     <!-- Conversations are loaded here -->
			  
			  <?
 
 
 $db->connectdb(DB_NAME_CHAT,DB_USERNAME,DB_PASSWORD);
$limit = 1 ;
$SUMPAGE = $db->num_rows('all_message',"id","");
 

$res[chat] = $db->select_query("SELECT * FROM all_message  ORDER BY id asc LIMIT 10 ");
$count=0;
while($arr[chat] = $db->fetch($res[chat])){
 /// comment_from
?>
			  <? if($arr[chat][comment_from]=="guest"){?>
 
			             <!-- เราเอง -->
                <div class="direct-chat-msg right">
                  <div class="direct-chat-info clearfix">
				     <span class="direct-chat-name pull-right"><?=$data_driver_nickname?>You</span>
                    <span class="direct-chat-timestamp pull-left"> <?=$date = date('Y-m-d ',  $arr[chat][guest_topoint_date]);?>&nbsp;<font color="#000000"><?=$date = date('h:i:s',  $arr[chat][guest_topoint_date]);?></font></span>
                  </div>




  
  <!-- /.direct-chat-info -->
<img class="direct-chat-img" src="images/me.png?v=<?=$cache;?>" alt="Message User Image"><!-- /.direct-chat-img -->
<div class="direct-chat-text">
			<?=$arr[chat][comment]?> <? if($arr[chat][state]=="flight_delay"){?>&nbsp;<img src="images/usercar_after.png?v=<?=$cache;?>" width="25"  align="absmiddle" style="padding: 5px 0; display:none">&nbsp;<?=$arr[chat][flight_delay]?>
		    <? } ?>
			</div>
				 
                </div>
				
                <!-- /.direct-chat-msg -->
			  <? } ?>
			  
			  
			  
			  
			<? if($arr[chat][comment_from]<>"guest"){?>  
                <!-- เริ่มคนอื่น -->
                <div class="direct-chat-msg">
                  <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-left"><?=$guest_name?>Driver</span>
                    <span class="direct-chat-timestamp pull-right"> <?=$date = date('Y-m-d ',  $arr[chat][guest_topoint_date]);?>&nbsp;<font color="#000000"><?=$date = date('h:i:s',  $arr[chat][guest_topoint_date]);?></font></span>
                  </div>
                  <!-- ข้อความคนอื่น -->
                  <img class="direct-chat-img" src="images/driverchat.png?v=<?=$cache;?>" alt="Message User Image"><!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
           <?=$arr[chat][comment]?>  
		   
		   <? if($arr[chat][state]=="flight_delay"){?>&nbsp;<img src="images/usercar_after.png?v=<?=$cache;?>" width="25"  align="absmiddle" style="padding: 5px 0;">&nbsp;<?=$arr[chat][flight_delay]?>
 		   
		    <? } ?>
			
					   <? if($arr[chat][state]=="driver_to_point"){?><br>

 <img src="../data/fileupload/map/<?=$arr[chat][voucher]?>_<?=$arr[chat][flight_delay_date]?>.png?v=<?=$cache;?>"    align="absmiddle" style="padding: 5px; width:180px;">
 		   
		    <? } ?>
			
                  </div>
                  <!-- /จบข้อความคนอื่น -->
                </div>
                <!-- จบ -->
				<? } ?>
				
				  
				
				
				
				
				
				
				
				
				
				
				
				
				 
				<? } ?>
				
				
				 <!--/จบการทำงาน-->
              </div>
              <!--/.direct-chat-messages-->
			  
			  
			   
			  
			  
			  
			  
			  

              <!-- Contacts are loaded here -->
              <div class="direct-chat-contacts" >
                <ul class="contacts-list">
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg" alt="User Image">

                      <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Count Dracula
                              <small class="contacts-list-date pull-right">2/28/2015</small>
                            </span>
                        <span class="contacts-list-msg">How have you been? I was...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                  </li>
                  <!-- End Contact Item -->
                </ul>
                <!-- /.contatcts-list -->
              </div>
              <!-- /.direct-chat-pane -->
			 <div id="bottom_chat" style="bottom:0 "> </div>
            </div>
            <!-- /.box-body --> 

            
            <!-- /.box-footer-->
          </div>
		
          <!--/.direct-chat -->
        </div>
        <!-- /.col -->
		
 
		
 


 
				  <div id="send_chat_data">sssss </div>								
				  
   <form id="chat_form" name="chat_form"  action="?name=chat&file=savedata&type=guest"  target="uploadframe2" method="post">  
   <iframe id="uploadframe2" name="uploadframe2" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
				<div class="box-footer" style="position:fixeds; padding-bottom:5px;">
 			
                <div class="input-group">
				
				
				<div id="load_input_message">				 
                  <input type="text" name="message"  id="message" placeholder="เขียนข้อความ ..." class="form-control">    
    
     </div>
   </form>
				 
				 
				  
				
                      <span class="input-group-btn" style="width:auto ">
					  
					 
					  
<button type="button" class="btn btn-default" style="margin-right:5px;  margin-left:5px; padding:5px; width:40px; "> <i class="fa fa-microphone" style="font-size:22px; color: #333333 " onclick="startDictation()"></i>  </button>
						      <!-- /.box-body -->                    
<button type="button" class="btn btn-default" style="margin-left:0px; padding:5px; width:40px; " data-toggle="dropdown"> <i class="fa fa fa-smile-o" style="font-size:22px; color: #333333 " ></i>  </button>  

<!-- /.box-body -->  
<button type="button" class="btn btn-default" style="margin-right:0px;  margin-left:5px; padding:5px; width:40px; " id="btn_emo"> <i class="fa fa-plus-square-o" style="font-size:22px; color: #333333 "></i>  </button>


 
 
	  
	  
 
 
						<!-- /.box-body --> 
						
						
						
						
												 
						<button type="button" class="btn btn-primary btn-flat" style="display:nones"  id="chat_submit">ส่งข้อความ</button>
                      </span>
                </div>
       
            </div>  
				  
				  
				 
 
						 
 
	 
  <script>
 
 
 

 
 
 
 
 
$('#chat_submit').click(function() {
 

  
   $.post('go.php?name=chat&file=savedata&type=new',$('#chat_form').serialize(),function(response){
 $('#send_chat_data').html(response);  });


  var url_chat = "go.php?name=chat&file=sub&vc=<?=$_GET[vc]?>";
  $('#load-direct-chat').load(url_chat); 
   document.getElementById('message').value="";
   
 

 
    return false;
	});


$('#message').on('keyup', function(e) {
 
 
	
///alert(text);

 
 
    if (e.keyCode === 13) {
  
  
 $.post('popup.php?name=check/save&file=register&type=user',$('#chat_form').serialize(),function(response){
 $('#send_chat_data').html(response);  });
 
		
		
		////
		
		
		document.getElementById('message').value="";
		// $('#message').unbind('keyup keydown keypress');
		 
		///document.getElementById('btn_emo').focus() ;
		
		//document.getElementById('message_blank').focus() ;
		
		///  alert(0);
		// $('#load_input_message').html("<input type='text' name='message'  id='message' placeholder='เขียนข้อความ' class='form-control' >");
    }
});

    
				  </script>
 <script>
  function startDictation() {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();
	  document.getElementById('message').value="";

      recognition.continuous = false;
      recognition.interimResults = false;
 
	   ////  recognition.lang = "zh-CN";
 
      recognition.lang = "th-TH";
      recognition.start();
 
      recognition.onresult = function(e) {
        document.getElementById('message').value
                                 = e.results[0][0].transcript;
								
        recognition.stop();
		
 
		 $('#chat_submit').click();
		
		 
 
     //    document.getElementById('labnol').submit();
      };
 
      recognition.onerror = function(e) {
        recognition.stop();
      }
 
    }
  }
  
  
 
				
</script>
 