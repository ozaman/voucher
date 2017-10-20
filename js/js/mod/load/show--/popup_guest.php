 
  <div class="modal fade"  id="popup_chk_guest_<?=$arr[project][id];?>" role="dialog"   aria-labelledby="myModalLabel"  title="เช็คชื่อแขก"   >

 <div class="modal-dialog"  >

            <!-- Modal  class="modal fade" content-->
            <div class="modal-content" style="padding:5px; " > 
                    <h4 class="modal-title" style="font-size:26px; height:15px;   font-family:Arial, Helvetica, sans-serif; text-transform:uppercase"><center><b>เช็คชื่อแขก</b></center></h4>
 
                <div class="modal-body" >  
 
  <form id="frmUploadPhoto<?=$arr[project][id];?>" action="popup.php?name=action&file=send_guest_data&id=<?=$arr[project][id];?>&folder=<?=$arr[project][invoice];?>&photo=yes" method="post"  enctype="multipart/form-data"   target="uploadframe">
<table  style="width:100% " >
          
									<tr style=" display:none<? if($chk_logo==1){echo "show";} ?>">
                                       <td colspan="2"><div  align="left">
									   <? if($chk_logo==1){ ?>
									   <img src="../admin/file/logo/crop/<?=$arr[project][agent];?>.jpg" name="view01" height="80" border="0"       />
									   <br />
									   <? } ?>
									   </div></td>
                                    </tr>
									<tr>
                                       <td  ><div class="topictransfer">เอเย่นต์</div></td>
                                       
                                    </tr>
									<tr>
									  <td class="gay5"><?echo $arr[showlogo][company];?></td>
			    </tr>
									<tr>
                                       <td class="gay5"><div class="topictransfer">ชื่อแขก</div></td>
                                    </tr>
									<tr>
									  <td class="gay5"><? echo $arr[project][guest_name];?></td>
			    </tr>
									<tr>
                                       <td class="gay5"><div class="topictransfer">เบอร์โทรศัพท์แขก</div></td>
                                    </tr>
									<tr>
									  <td class="gay5"><? echo $arr[project][guest_phone];?></td>
			    </tr>
									<tr>
                                       <td class="gay5"><div class="topictransfer">วอเชอร์</div></td>
                                    </tr>
									<tr>
									  <td class="gay5"><?echo $arr[project][invoice];?></td>
			    </tr>
									<tr>
									  <td class="gay5"><div class="topictransfer">ถ่ายรูปแขก (ถ้ามี)</div>
 
										<div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        <i class="fa  fa-camera"></i>&nbsp;ถ่ายภาพ<input type="file" class="form-control" name="photo_checkguest_<?=$arr[project][id];?>_1" id="photo_checkguest_<?=$arr[project][id];?>_1" accept="image/*"  capture="camera"  style="display: none;"/> 
                    </span>
                </label>
                <input type="text" class="form-control" value="ยังไม่มีภาพถ่าย" readonly  style="padding-left:5px; padding-right:5px; width:160px" id="url_photo_checkguest_<?=$arr[project][id];?>_1">&nbsp;<button type="button" class="btn btn-default" data-toggle="modal"   style="padding-left:5px; padding-right:5px; width:30px" id="del_photo_checkguest_<?=$arr[project][id];?>_1"><i class="fa  fa-trash" style="font-size:20px; "></i></button>
 
 				 <script>
 
$('#del_photo_checkguest_<?=$arr[project][id];?>_1').click(function(){  
document.getElementById('photo_checkguest_<?=$arr[project][id];?>_1').value='';
document.getElementById('url_photo_checkguest_<?=$arr[project][id];?>_1').value='ยังไม่มีภาพถ่าย';
$('#url_photo_checkguest_<?=$arr[project][id];?>_1').css({"background": "#fa1431","color": "#333333", });

     	});
					
					</script> 
            </div> 

			
			<div class="input-group" style="margin-top:10px; ">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        <i class="fa  fa-camera"></i>&nbsp;ถ่ายภาพ<input type="file" class="form-control" name="photo_checkguest_<?=$arr[project][id];?>_2" id="photo_checkguest_<?=$arr[project][id];?>_2" accept="image/*"  capture="camera"  style="display: none;"/> 
                    </span>    
                </label>
                <input type="text" class="form-control" value="ยังไม่มีภาพถ่าย" readonly  style="padding-left:5px; padding-right:5px; width:160px" id="url_photo_checkguest_<?=$arr[project][id];?>_2">&nbsp;<button type="button" class="btn btn-default" data-toggle="modal"   style="padding-left:5px; padding-right:5px; width:30px" id="del_photo_checkguest_<?=$arr[project][id];?>_2"><i class="fa  fa-trash" style="font-size:20px; "></i></button>
				
				 <script>
 
$('#del_photo_checkguest_<?=$arr[project][id];?>_2').click(function(){  
document.getElementById('photo_checkguest_<?=$arr[project][id];?>_2').value='';
document.getElementById('url_photo_checkguest_<?=$arr[project][id];?>_2').value='ยังไม่มีภาพถ่าย';
$('#url_photo_checkguest_<?=$arr[project][id];?>_2').css({"background": "#fa1431","color": "#333333", });
     	});
					
					</script> 
 
				
            </div>
										
										
										
																				 <div style="padding-bottom:5px; ">
																				 <div style=" display:none "><input id="btn_upload_photo_<?=$arr[project][id];?>" type="submit"  class="btn btn-primary"   data-backdrop="static" value="อัพโหลด">
									     
							          </div></td>
		  </tr>
									 
                          
            </table>
 </form>
                </div>
                <div class="modal-footer">
				                 
<center>
					 <button type="button" class="btn-modal-no"  data-backdrop="static" id="btn_cancel_guest_yes_<? echo $arr[project][id];?>"  >ไม่ถูกต้อง</button>&nbsp;
					 
					 <button type="button" class="btn-modal-ok"   style="background-color:<?=$ok_button_color?> "    id="btn_guest_yes_<? echo $arr[project][id];?>" data-target="#popup_confirm_guest_<?=$arr[project][id];?>" data-toggle="modal" data-backdrop="false" data-keyboard="false">ถูกต้อง</button>
					 
 </center>
 <script>
 
$('#btn_cancel_guest_yes_<? echo $arr[project][id];?>').click(function(){  
 
$('.modal').modal('hide');
     	});
					
					</script> 
                </div>
            </div>
        </div>
 
</div>	


<!--  End Guest -->						
 
  <div   class="modal fade" id="popup_chk_no_guest_<?=$arr[project][id];?>" role="dialog"   aria-labelledby="myModalLabel"  title="เช็คชื่อแขก"   >

 <div class="modal-dialog"  >

            <!-- Modal  class="modal fade" content-->
            <div class="modal-content" style="padding:5px; " > 
                    <h4 class="modal-title" style="font-size:26px; height:15px;   font-family:Arial, Helvetica, sans-serif; text-transform:uppercase"><center><b>สาเหตุที่ไม่เจอแขก</b></center></h4>
 
                <div class="modal-body" >  
 
		   <form id="frmUpload" action="popup.php?name=action&file=send_guest_data&id=<?=$arr[project][id];?>&vc_id=<?=$arr[project][vc_id];?>&report_id=<?=$arr[project][report_id];?>&order_id=<?=$arr[project][orderid];?>&drivername=<?=$arr[project][drivername];?>&folder=<?=$arr[project][invoice];?>&photo=no" method="post" enctype="multipart/form-data"    target="uploadframe">
<table border="0"  style="width:100%; ">
	<tr>
		<td><div class="topictransfer">สาเหตุ</div>  
		
		
		  <select name="driver_remark_noguest" id="driver_remark_noguest_<?=$arr[project][id];?>"  class="form-control" >
	  <option value="0">---- กรุณาเลือกสาเหตุที่ไม่เจอแขก ----</option>
  <?
  $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[remark_noguest] = $db->select_query("SELECT * FROM web_driver_remark WHERE status='1' and type = '2' ");
while($arr[remark_noguest] = $db->fetch($res[remark_noguest])){
?>	
	  <option value="<?=$arr[remark_noguest][id];?>"><?=$arr[remark_noguest][topic_th];?></option>
  <? } ?>	
            </select>		
			<div class="topictransfer" style="color:#FF0000; font-size:18px; display:none " id="alert_driver_remark_noguest_<?=$arr[project][id];?>">กรุณาเลือกสาเหตุที่ไม่เจอแขก</div>
			<script>
		
$('#driver_remark_noguest_<?=$arr[project][id];?>').on('change',function(){ 
 
 if($('#driver_remark_noguest_<?=$arr[project][id];?>').val() > 0){
		//alert(00);
		$('#alert_driver_remark_noguest_<?=$arr[project][id];?>').hide();
$('#driver_remark_noguest_<?=$arr[project][id];?>').removeClass("tab_alert");

}

 if($('#driver_remark_noguest_<?=$arr[project][id];?>').val() == 0){
		//alert(00);
		$('#alert_driver_remark_noguest_<?=$arr[project][id];?>').show();
$('#driver_remark_noguest_<?=$arr[project][id];?>').addClass("tab_alert");

}
		});
		</script>
			
			</td>
	</tr>
	<tr>
		<td><div class="topictransfer">ระบุสาเหตุอื่น ๆ </div>
		
		

		
		
		
		<input class="form-control"  type="text"  name="driver_remark_detail" id="driver_remark_detail_<?=$arr[project][id];?>"/></td>
	</tr>
	<tr>
		<td><div class="topictransfer">รูปภาพประกอบ (ถ้ามี)</div> 
		
		
		
										<div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        <i class="fa  fa-camera"></i>&nbsp;ถ่ายภาพ<input type="file" class="form-control" name="photo_noguest_<?=$arr[project][id];?>_1" id="photo_noguest_<?=$arr[project][id];?>_1" accept="image/*"  capture="camera"  style="display: none;"/> 
                    </span>
                </label>
                <input type="text" class="form-control" value="ยังไม่มีภาพถ่าย" readonly  style="padding-left:5px; padding-right:5px; width:160px" id="url_photo_noguest_<?=$arr[project][id];?>_1">&nbsp;<button type="button" class="btn btn-default" data-toggle="modal"   style="padding-left:5px; padding-right:5px; width:30px" id="del_photo_noguest_<?=$arr[project][id];?>_1"><i class="fa  fa-trash" style="font-size:20px; "></i></button>
 
 				 <script>
 
$('#del_photo_noguest_<?=$arr[project][id];?>_1').click(function(){  
document.getElementById('photo_noguest_<?=$arr[project][id];?>_1').value='';
document.getElementById('url_photo_noguest_<?=$arr[project][id];?>_1').value='ยังไม่มีภาพถ่าย';
$('#url_photo_noguest_<?=$arr[project][id];?>_1').css({"background": "#fa1431","color": "#333333", });

     	});
					
					</script> 
            </div> 
			
			
										<div class="input-group" style="margin-top:10px; ">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        <i class="fa  fa-camera"></i>&nbsp;ถ่ายภาพ<input type="file" class="form-control" name="photo_noguest_<?=$arr[project][id];?>_2" id="photo_noguest_<?=$arr[project][id];?>_2" accept="image/*"  capture="camera"  style="display: none;"/> 
                    </span>
                </label>
                <input type="text" class="form-control" value="ยังไม่มีภาพถ่าย" readonly  style="padding-left:5px; padding-right:5px; width:160px" id="url_photo_noguest_<?=$arr[project][id];?>_2">&nbsp;<button type="button" class="btn btn-default" data-toggle="modal"   style="padding-left:5px; padding-right:5px; width:30px" id="del_photo_noguest_<?=$arr[project][id];?>_2"><i class="fa  fa-trash" style="font-size:20px; "></i></button>
 
 				 <script>
 
$('#del_photo_noguest_<?=$arr[project][id];?>_2').click(function(){  
document.getElementById('photo_noguest_<?=$arr[project][id];?>_2').value='';
document.getElementById('url_photo_noguest_<?=$arr[project][id];?>_2').value='ยังไม่มีภาพถ่าย';
$('#url_photo_noguest_<?=$arr[project][id];?>_2').css({"background": "#fa1431","color": "#333333", });

     	});
					
					</script> 
            </div> 
			
			<div class="input-group" style="margin-top:10px; ">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        <i class="fa  fa-camera"></i>&nbsp;ถ่ายภาพ<input type="file" class="form-control" name="photo_noguest_<?=$arr[project][id];?>_3" id="photo_noguest_<?=$arr[project][id];?>_3" accept="image/*"  capture="camera"  style="display: none;"/> 
                    </span>
                </label>
                <input type="text" class="form-control" value="ยังไม่มีภาพถ่าย" readonly  style="padding-left:5px; padding-right:5px; width:160px" id="url_photo_noguest_<?=$arr[project][id];?>_3">&nbsp;<button type="button" class="btn btn-default" data-toggle="modal"   style="padding-left:5px; padding-right:5px; width:30px" id="del_photo_noguest_<?=$arr[project][id];?>_3"><i class="fa  fa-trash" style="font-size:20px; "></i></button>
 
 				 <script>
 
$('#del_photo_noguest_<?=$arr[project][id];?>_3').click(function(){  
document.getElementById('photo_noguest_<?=$arr[project][id];?>_3').value='';
document.getElementById('url_photo_noguest_<?=$arr[project][id];?>_3').value='ยังไม่มีภาพถ่าย';
$('#url_photo_noguest_<?=$arr[project][id];?>_3').css({"background": "#fa1431","color": "#333333", });

     	});
					
					</script> 
            </div> 
			
			<div class="input-group" style="margin-top:10px; ">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        <i class="fa  fa-camera"></i>&nbsp;ถ่ายภาพ<input type="file" class="form-control" name="photo_noguest_<?=$arr[project][id];?>_4" id="photo_noguest_<?=$arr[project][id];?>_4" accept="image/*"  capture="camera"  style="display: none;"/> 
                    </span>
                </label>
                <input type="text" class="form-control" value="ยังไม่มีภาพถ่าย" readonly  style="padding-left:5px; padding-right:5px; width:160px" id="url_photo_noguest_<?=$arr[project][id];?>_4">&nbsp;<button type="button" class="btn btn-default" data-toggle="modal"   style="padding-left:5px; padding-right:5px; width:30px" id="del_photo_noguest_<?=$arr[project][id];?>_4"><i class="fa  fa-trash" style="font-size:20px; "></i></button>
 
 				 <script>
 
$('#del_photo_noguest_<?=$arr[project][id];?>_4').click(function(){  
document.getElementById('photo_noguest_<?=$arr[project][id];?>_4').value='';
document.getElementById('url_photo_noguest_<?=$arr[project][id];?>_4').value='ยังไม่มีภาพถ่าย';
$('#url_photo_noguest_<?=$arr[project][id];?>_4').css({"background": "#fa1431","color": "#333333", });

     	});
 
					</script> 
            </div> 
		
		
		<div style=" display:none "><input id="btn_upload_<?=$arr[project][id];?>" type="submit"  class="btn btn-primary"   data-backdrop="static" value="อัพโหลด">
		<input  name="vc"  type="text" class="form-control" id="vc" value="0"/></div></td>
	</tr>
</table>
</form>
</div> 

 
                <div class="modal-footer">
				                 <center>

					 <button type="button" class="btn-modal-no" data-dismiss="modal" data-backdrop="static" >ปิด</button>
					 <button type="button" class="btn-modal-ok"   data-target="#popup_confirm_no_guest_<?=$arr[project][id];?>" data-toggle="modal" data-backdrop="static" data-keyboard="false"  id="btn_guest_no_<? echo $arr[project][id];?>">บึนทึกข้อมูล</button></center>
 
                </div>
            </div>
        </div>
 
</div>	









		  		   <form id="frmUpload" action="popup.php?name=action&file=send_guest_data&id=<?=$arr[project][id];?>&vc_id=<?=$arr[project][vc_id];?>&report_id=<?=$arr[project][report_id];?>&order_id=<?=$arr[project][orderid];?>&drivername=<?=$arr[project][drivername];?>&folder=<?=$arr[project][invoice];?>&photo=topoint" method="post" enctype="multipart/form-data"    target="uploadframe">
<div    class="modal fade" id="popup_topoint_<?=$arr[project][id];?>" role="dialog"   aria-labelledby="myModalLabel"    >

 <div class="modal-dialog"  >

            <!-- Modal  class="modal fade" content-->
            <div class="modal-content" style="padding:5px;border-radius: 15px;  " > 
			
			<div style="font-size:140px; color:#999999; padding-top:20px;"><center><i class="fa   fa-automobile"></i></center></div>
			
			
			
                    <h4 class="modal-title" style="font-size:30px; height:15px;   font-family:Arial, Helvetica, sans-serif; text-transform:uppercase">
					
					
					<center><b> คุณแน่ใจหรือไม่</b></center></h4>
 
              <div class="modal-body" >  
		  
		<center><div style="padding:2px; font-size:22px; margin-top:20px; color:#999999 ">ว่ามาถึงสถานที่รับแขกแล้ว</div>
		  

		  
        <table  style="width:100% " >
          <tr>
            <td class="gay5"><div class="topictransfer">ถ่ายสถานที่รับแขก (ถ้ามี)</div>
                <div class="input-group">
                  <label class="input-group-btn"> <span class="btn btn-primary"> <i class="fa  fa-camera"></i>&nbsp;ถ่ายภาพ
                  <input type="file" class="form-control" name="photo_topoint_<?=$arr[project][id];?>_1" id="photo_topoint_<?=$arr[project][id];?>_1" accept="image/*"  capture="camera"  style="display: none;"/>
                  </span> </label>
                  <input type="text" class="form-control" value="ยังไม่มีภาพถ่าย" readonly  style="padding-left:5px; padding-right:5px; width:160px" id="url_photo_topoint_<?=$arr[project][id];?>_1">
          &nbsp;
                  <button type="button" class="btn btn-default" data-toggle="modal"   style="padding-left:5px; padding-right:5px; width:30px" id="del_photo_topoint_<?=$arr[project][id];?>_1"><i class="fa  fa-trash" style="font-size:20px; "></i></button>
                  <script>
 
$('#del_photo_topoint_<?=$arr[project][id];?>_1').click(function(){  
document.getElementById('photo_topoint_<?=$arr[project][id];?>_1').value='';
document.getElementById('url_photo_topoint_<?=$arr[project][id];?>_1').value='ยังไม่มีภาพถ่าย';
$('#url_photo_topoint_<?=$arr[project][id];?>_1').css({"background": "#fa1431","color": "#333333", });

     	});
					
					</script>
                </div>
                <div class="input-group" style="margin-top:10px; ">
                  <label class="input-group-btn"> <span class="btn btn-primary"> <i class="fa  fa-camera"></i>&nbsp;ถ่ายภาพ
                  <input type="file" class="form-control" name="photo_topoint_<?=$arr[project][id];?>_2" id="photo_topoint_<?=$arr[project][id];?>_2" accept="image/*"  capture="camera"  style="display: none;"/>
                  </span> </label>
                  <input type="text" class="form-control" value="ยังไม่มีภาพถ่าย" readonly  style="padding-left:5px; padding-right:5px; width:160px" id="url_photo_topoint_<?=$arr[project][id];?>_2">
          &nbsp;
                  <button type="button" class="btn btn-default" data-toggle="modal"   style="padding-left:5px; padding-right:5px; width:30px" id="del_photo_topoint_<?=$arr[project][id];?>_2"><i class="fa  fa-trash" style="font-size:20px; "></i></button>
                  <script>
 
$('#del_photo_topoint_<?=$arr[project][id];?>_2').click(function(){  
document.getElementById('photo_topoint_<?=$arr[project][id];?>_2').value='';
document.getElementById('url_photo_topoint_<?=$arr[project][id];?>_2').value='ยังไม่มีภาพถ่าย';
$('#url_photo_topoint_<?=$arr[project][id];?>_2').css({"background": "#fa1431","color": "#333333", });
     	});
					
					</script>
                </div>
				
				
				<div class="input-group" style="margin-top:10px; ">
                  <label class="input-group-btn"> <span class="btn btn-primary"> <i class="fa  fa-camera"></i>&nbsp;ถ่ายภาพ
                  <input type="file" class="form-control" name="photo_topoint_<?=$arr[project][id];?>_3" id="photo_topoint_<?=$arr[project][id];?>_3" accept="image/*"  capture="camera"  style="display: none;"/>
                  </span> </label>
                  <input type="text" class="form-control" value="ยังไม่มีภาพถ่าย" readonly  style="padding-left:5px; padding-right:5px; width:160px" id="url_photo_topoint_<?=$arr[project][id];?>_3">
          &nbsp;
                  <button type="button" class="btn btn-default" data-toggle="modal"   style="padding-left:5px; padding-right:5px; width:30px" id="del_photo_topoint_<?=$arr[project][id];?>_3"><i class="fa  fa-trash" style="font-size:20px; "></i></button>
                  <script>
 
$('#del_photo_topoint_<?=$arr[project][id];?>_3').click(function(){  
document.getElementById('photo_topoint_<?=$arr[project][id];?>_3').value='';
document.getElementById('url_photo_topoint_<?=$arr[project][id];?>_3').value='ยังไม่มีภาพถ่าย';
$('#url_photo_topoint_<?=$arr[project][id];?>_3').css({"background": "#fa1431","color": "#333333", });
     	});
					
					</script>
                </div>
				
				
                <div style="padding-bottom:5px; ">
                  <div style=" display:none ">
                    <input id="btn_upload_photo_topoint_<?=$arr[project][id];?>" type="submit"  class="btn btn-primary"   data-backdrop="static" value="อัพโหลด">
                  </div>
              </div></td>
          </tr>
        </table>
		
		
              </div> 

 
                <div class="modal-footer" style="margin-top:-10px;">
				       <center>
					 <button type="button" class="btn btn-modal-no" data-dismiss="modal" data-backdrop="static" >ไม่แน่ใจ</button>
					 <button type="button" class="btn btn-modal-ok"   data-dismiss="modal" data-backdrop="static" id="btn_confirm_topoint_<? echo $arr[project][id];?>" >แน่ใจ</button>
 </center>          
                </div>
            </div>
        </div>
 
</div>	
</form>


 
</div>























		  		   <form id="frmUpload" action="popup.php?name=action&file=send_guest_data&id=<?=$arr[project][id];?>&vc_id=<?=$arr[project][vc_id];?>&report_id=<?=$arr[project][report_id];?>&order_id=<?=$arr[project][orderid];?>&drivername=<?=$arr[project][drivername];?>&folder=<?=$arr[project][invoice];?>&photo=finishpoint" method="post" enctype="multipart/form-data"    target="uploadframe">

<div    class="modal fade" id="popup_complete_<?=$arr[project][id];?>" role="dialog"   aria-labelledby="myModalLabel"    >

 <div class="modal-dialog"  >
   <!-- Modal  class="modal fade" content-->
            <div class="modal-content" style="padding:5px;border-radius: 15px;  " > 
 			<div style="font-size:140px; color:#999999; padding-top:20px;"><center><i class="fa   fa-automobile"></i></center></div>
			<h4 class="modal-title" style="font-size:30px; height:15px;   font-family:Arial, Helvetica, sans-serif; text-transform:uppercase">
 					<center><b> คุณแน่ใจหรือไม่</b></center></h4>
 
              <div class="modal-body" >  
		  
		<center><div style="padding:2px; font-size:22px; margin-top:20px; color:#999999 ">ว่ามาถึงสถานที่ส่งแขกแล้ว</div>
		  
		  
        <table  style="width:100% " >
          <tr>
            <td class="gay5"><div class="topictransfer">ถ่ายสถานที่ส่งแขก (ถ้ามี)</div>
                <div class="input-group">
                  <label class="input-group-btn"> <span class="btn btn-primary"> <i class="fa  fa-camera"></i>&nbsp;ถ่ายภาพ
                  <input type="file" class="form-control" name="photo_finishpoint_<?=$arr[project][id];?>_1" id="photo_finishpoint_<?=$arr[project][id];?>_1" accept="image/*"  capture="camera"  style="display: none;"/>
                  </span> </label>
                  <input type="text" class="form-control" value="ยังไม่มีภาพถ่าย" readonly  style="padding-left:5px; padding-right:5px; width:160px" id="url_photo_finishpoint_<?=$arr[project][id];?>_1">
&nbsp;
        <button type="button" class="btn btn-default" data-toggle="modal"   style="padding-left:5px; padding-right:5px; width:30px" id="del_photo_finishpoint_<?=$arr[project][id];?>_1"><i class="fa  fa-trash" style="font-size:20px; "></i></button>
        <script>
 
$('#del_photo_finishpoint_<?=$arr[project][id];?>_1').click(function(){  
document.getElementById('photo_finishpoint_<?=$arr[project][id];?>_1').value='';
document.getElementById('url_photo_finishpoint_<?=$arr[project][id];?>_1').value='ยังไม่มีภาพถ่าย';
$('#url_photo_finishpoint_<?=$arr[project][id];?>_1').css({"background": "#fa1431","color": "#333333", });

     	});
					
					</script>
                </div>
                <div class="input-group" style="margin-top:10px; ">
                  <label class="input-group-btn"> <span class="btn btn-primary"> <i class="fa  fa-camera"></i>&nbsp;ถ่ายภาพ
                  <input type="file" class="form-control" name="photo_finishpoint_<?=$arr[project][id];?>_2" id="photo_finishpoint_<?=$arr[project][id];?>_2" accept="image/*"  capture="camera"  style="display: none;"/>
                  </span> </label>
                  <input type="text" class="form-control" value="ยังไม่มีภาพถ่าย" readonly  style="padding-left:5px; padding-right:5px; width:160px" id="url_photo_finishpoint_<?=$arr[project][id];?>_2">
&nbsp;
        <button type="button" class="btn btn-default" data-toggle="modal"   style="padding-left:5px; padding-right:5px; width:30px" id="del_photo_finishpoint_<?=$arr[project][id];?>_2"><i class="fa  fa-trash" style="font-size:20px; "></i></button>
        <script>
 
$('#del_photo_finishpoint_<?=$arr[project][id];?>_2').click(function(){  
document.getElementById('photo_finishpoint_<?=$arr[project][id];?>_2').value='';
document.getElementById('url_photo_finishpoint_<?=$arr[project][id];?>_2').value='ยังไม่มีภาพถ่าย';
$('#url_photo_finishpoint_<?=$arr[project][id];?>_2').css({"background": "#fa1431","color": "#333333", });
     	});
					
					</script>
                </div>
                <div class="input-group" style="margin-top:10px; ">
                  <label class="input-group-btn"> <span class="btn btn-primary"> <i class="fa  fa-camera"></i>&nbsp;ถ่ายภาพ
                  <input type="file" class="form-control" name="photo_finishpoint_<?=$arr[project][id];?>_3" id="photo_finishpoint_<?=$arr[project][id];?>_3" accept="image/*"  capture="camera"  style="display: none;"/>
                  </span> </label>
                  <input type="text" class="form-control" value="ยังไม่มีภาพถ่าย" readonly  style="padding-left:5px; padding-right:5px; width:160px" id="url_photo_finishpoint_<?=$arr[project][id];?>_3">
&nbsp;
        <button type="button" class="btn btn-default" data-toggle="modal"   style="padding-left:5px; padding-right:5px; width:30px" id="del_photo_finishpoint_<?=$arr[project][id];?>_3"><i class="fa  fa-trash" style="font-size:20px; "></i></button>
        <script>
 
$('#del_photo_finishpoint_<?=$arr[project][id];?>_3').click(function(){  
document.getElementById('photo_finishpoint_<?=$arr[project][id];?>_3').value='';
document.getElementById('url_photo_finishpoint_<?=$arr[project][id];?>_3').value='ยังไม่มีภาพถ่าย';
$('#url_photo_finishpoint_<?=$arr[project][id];?>_3').css({"background": "#fa1431","color": "#333333", });
     	});
					
					</script>
                </div>
                <div style="padding-bottom:5px; ">
                  <div style=" display:none ">
                    <input id="btn_upload_photo_finishpoint_<?=$arr[project][id];?>" type="submit"  class="btn btn-primary"   data-backdrop="static" value="อัพโหลด">
                  </div>
              </div></td>
          </tr>
        </table>
              </div> 

 
                <div class="modal-footer" style="margin-top:-10px;">
				       <center>
					 <button type="button" class="btn btn-modal-no" data-dismiss="modal" data-backdrop="static" >ไม่แน่ใจ</button>
					 <button type="button" class="btn btn-modal-ok"   data-dismiss="modal" data-backdrop="static" id="btn_confirm_complete_<? echo $arr[project][id];?>" >แน่ใจ</button>
 </center>          
                </div>
            </div>
        </div>
 
</div>	
 
</div>
</form>




















<div    class="modal fade" id="popup_confirm_guest_<?=$arr[project][id];?>" role="dialog"   aria-labelledby="myModalLabel"    >

 <div class="modal-dialog"  >

            <!-- Modal  class="modal fade" content-->
            <div class="modal-content" style="padding:5px;border-radius: 15px;  " > 
			
			<div style="font-size:140px; color:#999999; padding-top:20px;"><center><i class="fa   fa-users"></i></center></div>
			
			
			
                    <h4 class="modal-title" style="font-size:30px; height:15px;   font-family:Arial, Helvetica, sans-serif; text-transform:uppercase">
					
					
					<center><b> คุณแน่ใจหรือไม่</b></center></h4>
 
                <div class="modal-body" >  
		  
		<center><div style="padding:2px; font-size:22px; margin-top:20px; color:#999999 ">ว่าเช็คชื่อแขกถูกต้องแล้ว
 
		<? if($arr[project][product_area] == 'Out' and $arr[project][to_place]==193){  ?>
		
		
<div style="padding:2px; font-size:22px; margin-top:10px; margin-bottom:10px; color:#000000 ">
<table width="100%"  border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td><img src="images/airport/phuket_new.jpg"   align="bottom"  width="100%"  id="terminal_map_new<?=$arr[project][id];?>"   style="cursor:pointer " /></td>
  </tr>
  <tr>
    <td><img src="images/airport/phuket_old.jpg"   align="bottom"  width="100%"  id="terminal_map_old<?=$arr[project][id];?>"   style="cursor:pointer " /></td>
  </tr>
</table>

<br>
เลือกจุดส่งแขกที่สนามบิน</div>
<select name="terminal<?=$arr[project][id];?>"   id="terminal<?=$arr[project][id];?>"    style="font-size:30px; padding-bottom: 1px; background-color:#FFFDE9; height:40px; width:250px; color:#333333" chosen width="'100%'">
  <option value=""  selected>--กรุณาเลือก--</option>
  <option value="new"  >อาคารใหม่</option>
  <option value="old" >อาคารเก่า</option>
 
  </select>
  <script>
  $( document ).ready(function() {
  $('#btn_foot_confirm_guest_<? echo $arr[project][id];?>').hide();
 
 });
  
  </script>
  
  
  <? }  else {?>
  
    <input  name="terminal<?=$arr[project][id];?>"  type="hidden"   id="terminal<?=$arr[project][id];?>" value="0">
  <? } ?>
		</div>
		  
		  
</div> 

 
                <div class="modal-footer" style="margin-top:-10px;" >
				       <center>
					   <div id="btn_foot_confirm_guest_<? echo $arr[project][id];?>" >
					 <button type="button" class="btn btn-modal-no" data-dismiss="modal" data-backdrop="static"  id="btn_cancel_confirm_guest_<? echo $arr[project][id];?>">ไม่แน่ใจ</button>
					 
 
					 
					 <button type="button" class="btn btn-modal-ok"   data-dismiss="modal" data-backdrop="static" id="btn_confirm_guest_<? echo $arr[project][id];?>"   >แน่ใจ</button></div>
 </center>          
                </div>
            </div>
        </div>
 
</div>	



 
</div>


 <script>
 $('#terminal_map_new<?=$arr[project][id];?>').click(function(){  
  $('#terminal_map_old<?=$arr[project][id];?>').removeClass("tab_alert");
 $('#terminal_map_new<?=$arr[project][id];?>').removeClass("tab_alert");
$('#terminal_map_new<?=$arr[project][id];?>').addClass("tab_alert");
 document.getElementById('terminal<?=$arr[project][id];?>').value = 'new' ;
   $('#btn_foot_confirm_guest_<? echo $arr[project][id];?>').show();
 
     	});
		
 $('#terminal_map_old<?=$arr[project][id];?>').click(function(){  
  $('#terminal_map_new<?=$arr[project][id];?>').removeClass("tab_alert");
  $('#terminal_map_old<?=$arr[project][id];?>').removeClass("tab_alert");
$('#terminal_map_old<?=$arr[project][id];?>').addClass("tab_alert");
document.getElementById('terminal<?=$arr[project][id];?>').value = 'old' ;
 $('#btn_foot_confirm_guest_<? echo $arr[project][id];?>').show();
 
     	});
 
 $('#terminal<?=$arr[project][id];?>').change(function(){
 if( document.getElementById('terminal<?=$arr[project][id];?>').value == 'new' ){

 $('#terminal_map_old<?=$arr[project][id];?>').removeClass("tab_alert");
 $('#terminal_map_new<?=$arr[project][id];?>').addClass("tab_alert");
  $('#btn_foot_confirm_guest_<? echo $arr[project][id];?>').show();
  }
   if( document.getElementById('terminal<?=$arr[project][id];?>').value == 'old' ){
    $('#btn_foot_confirm_guest_<? echo $arr[project][id];?>').show();
 
  $('#terminal_map_new<?=$arr[project][id];?>').removeClass("tab_alert");
$('#terminal_map_old<?=$arr[project][id];?>').addClass("tab_alert");
  }
  
     if( document.getElementById('terminal<?=$arr[project][id];?>').value == '' ){
  $('#terminal_map_new<?=$arr[project][id];?>').removeClass("tab_alert");
  $('#terminal_map_old<?=$arr[project][id];?>').removeClass("tab_alert");
  
   $('#btn_foot_confirm_guest_<? echo $arr[project][id];?>').hide();

  }
 
 
 
    	});
 
$('#btn_cancel_confirm_guest_<? echo $arr[project][id];?>').click(function(){  
 
$('.modal').modal('hide');
     	});
					
					</script> 












<div    class="modal fade" id="popup_confirm_no_guest_<?=$arr[project][id];?>" role="dialog"   aria-labelledby="myModalLabel"    >

 <div class="modal-dialog"  >

            <!-- Modal  class="modal fade" content-->
            <div class="modal-content" style="padding:5px;border-radius: 15px;  " > 
			
			<div style="font-size:140px; color:#999999; padding-top:20px;"><center><i class="fa   fa-users"></i></center></div>
			
			
			
                    <h4 class="modal-title" style="font-size:30px; height:15px;   font-family:Arial, Helvetica, sans-serif; text-transform:uppercase">
					
					
					<center><b> คุณแน่ใจหรือไม่</b></center></h4>
 
                <div class="modal-body" >  
		  
		<center><div style="padding:2px; font-size:22px; margin-top:20px; color:#999999 ">ว่าไม่เจอแขก</div>
		  
		  
</div> 

 
                <div class="modal-footer" style="margin-top:-10px;">
				       <center>
					 <button type="button" class="btn btn-modal-no" data-dismiss="modal" data-backdrop="static" id="btn_no_no_guest_<? echo $arr[project][id];?>" >ไม่แน่ใจ</button>
					 <button type="button" class="btn btn-modal-ok"   data-dismiss="modal" data-backdrop="static" id="btn_confirm_no_guest_<? echo $arr[project][id];?>" >แน่ใจ</button>

<script>
$('#btn_confirm_no_guest_<? echo $arr[project][id];?>').click(function(){ 
 
$('.modal').modal('hide');
   	});
					
					</script> 
					 
 </center>          
                </div>
            </div>
        </div>
 
</div>	



 
</div>







<?
$ok_button_color="#0ACB68";
$no_button_color="#F50202";

?>

<style>
.btnstatus{ box-shadow: 1px 1px 5px #999999; border:0px solid #FFFFFF; 
border-radius: 5px;padding:5px; height:40px; font-size:16px; width:100px; margin-right:15px; background-color:#367FA9;font-family:Arial, Helvetica, sans-serif ; color:#FFFFFF;

}
.btnstatus:hover{

background-color:#999999;font-family:Arial, Helvetica, sans-serif ; color:#FFFFFF; border:0px solid #FFFFFF; 
}


.btn-modal-ok{ box-shadow: 1px 1px 5px #999999; border:0px solid #FFFFFF; 
border-radius: 5px;padding:5px; font-size:22px; width:120px; background-color:<?=$ok_button_color?>;font-family:Arial, Helvetica, sans-serif ; color:#FFFFFF

}
.btn-modal-ok:hover{

background-color:#999999;font-family:Arial, Helvetica, sans-serif ; color:#FFFFFF
}

.btn-modal-no{ box-shadow: 1px 1px 5px #999999; border:0px solid #FFFFFF; 
border-radius: 5px;padding:5px; font-size:22px;  width:120px; background-color:<?=$no_button_color?>;font-family:Arial, Helvetica, sans-serif ; color:#FFFFFF
}

.btn-modal-no:hover{
background-color:#999999;font-family:Arial, Helvetica, sans-serif ; color:#FFFFFF
}
 
</style> 