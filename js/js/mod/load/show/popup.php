<?
$ok_button_color="#0CD314";
$no_button_color="#F50202";

?>
 

 <script>
  // Approve - Reject image
 
$(document).ready(function(){
 

  $(".btnstatus").click(function(){


   var col_name = $(this).attr('col_name');
   var data_id = $(this).attr("data_id");
   var data_val = $(this).attr("data_val");
     var data_vc = $(this).attr("data_vc");
	var data_report_id = $(this).attr("data_report_id");
   var data_sv = '<?=$_GET[sv];?>';
   
  //// alert(data_report_id);
 
    document.getElementById('vc').value=$(this).attr("data_vc");
 
//alert(data_id);
if(col_name == 'driver_topoint'){
 	var currentdate = new Date(); 
    var datetime = "" 
    	+ currentdate.getFullYear() + "-" 
        + (currentdate.getMonth()+1)  + "-" 
        + currentdate.getDate() + "<br /> " 
        + currentdate.getHours() + ":"  
        + currentdate.getMinutes() + ":" 
        + currentdate.getSeconds();

var currenttime = <?=time();?>; 
var bookimgtime = parseInt(<?=$time_booking;?>); 
 	currenttime = currenttime / 1000;
//alert(bookimgtime +' - '+currenttime);

//$('#test_time').html(bookimgtime +' - '+currenttime);			
	if(bookimgtime < currenttime){
		$("#dialog_remark_topoint").dialog({ resizable: false, modal: true, width: '90%', 
	minHeight: 200,
	     buttons: {
			"บันทึก": function () {
				
				
				if($('#driver_remark_topoint').val() == 0){
					//alert('กรุณาเลือกสาเหตุที่ไม่เจอแขก');
					$('#driver_remark_topoint').focus();
					return false;
				}
				driver_remark = $('#driver_remark_topoint').val();
				if(confirm("คุณแน่ใจหรือไม่ว่ามาถึงสถานที่รับแขกแล้ว") == true){
				$('#date_topiont'+data_id).html(datetime);
				$.post("popup.php?name=action&file=action", { col_name : col_name ,data_id: data_id ,data_val : data_val,driver_remark : driver_remark ,data_sv: data_sv   }, function(theResponse){ 
				var msg = theResponse;	$('#show_data_res'+data_id).html(msg);
					});
				$('#sub_complete'+data_id).show();
				$('#btn_pickup'+data_id+data_val).attr('disabled', true);
				$('#cc_tr_pickup'+data_id).hide(); 
				$('#tr_btn_pickup'+data_val).show();
				$('#tr_btn_pickup1').hide();
				
				$(this).dialog("close");
				}
			}
		}
	});
	}else{
 
 ////////// 
 
 
   $('#btn_confirm_topoint_'+data_id).click(function(){ 
 
 
 $('#btn_upload_photo_topoint_'+data_id ).click();
 /// สั่ง action ทำงาน ส่งข้อมูล
  $('#sub_see_guest'+data_id).fadeIn( "slow" );  
		$('#btn_topoint'+data_id).attr('disabled', true);
		//$('#btn_topoint'+data_id).css("height", "30px"); 

   	$('#date_topiont'+data_id).html(datetime);
	
 $.post("popup.php?name=action&file=action", { col_name : col_name ,data_id: data_id ,data_vc: data_vc,data_report_id: data_report_id ,data_sv: data_sv    }, function(theResponse){ var msg = theResponse;	
  $('#show_data_res'+data_id).html(msg);	});	
    
 
	});
	}
	
	
}
 

if(col_name == 'driver_pickup'){
 
 
 
var currentdate = new Date(); 
    var datetime = "" 
    	+ currentdate.getFullYear() + "-" 
        + (currentdate.getMonth()+1)  + "-" 
        + currentdate.getDate() + " <br />" 
        + currentdate.getHours() + ":"  
        + currentdate.getMinutes() + ":" 
        + currentdate.getSeconds();
if(data_val == 1){

$('#btn_guest_yes_'+data_id).click(function(){ 
 $('#popup_chk_guest_'+data_id).hide();
 });	

  $('#btn_confirm_guest_'+data_id).click(function(){ 
  
  
  var terminal = $('#terminal'+data_id).val();
  
 /// alert(terminal);
  
  
    $('.modal').modal('hide');
 
		$('#btn_upload_photo_'+data_id ).click();





	   ////// สั่ง action ทำงาน
$('#tr_btn_pickup'+data_val).show();
	$('#tr_btn_pickup2').hide();
	$('#date_pickup'+data_id).html(datetime);
	$.post("popup.php?name=action&file=action", { col_name : col_name ,data_id: data_id ,data_val : data_val,data_sv: data_sv ,data_report_id: data_report_id ,data_vc: data_vc,terminal:terminal  }, function(theResponse){
	
		var msg = theResponse;
  		$('#show_data_res'+data_id).html(msg);
	
	});	
	
	$('#sub_complete'+data_id).show();
	$('#btn_pickup'+data_id+data_val).attr('disabled', true);
	$('#cc_tr_pickup'+data_id).hide(); 
	$('#tr_btn_pickup2'+data_id).hide(); 
	
	//$('#btn_pickup'+data_id+data_val).css("height", "30px");
  
  ////// ปิด action


   });
	

}
else{
	
	
 $('#btn_guest_no_'+data_id).click(function(){ 
				
 
				var driver_remark =  $('#driver_remark_noguest_'+data_id).val();
				 
				//alert(driver_remark);
									if(driver_remark == 0){
									$('#alert_driver_remark_noguest_'+data_id).show();
									$('#driver_remark_noguest_'+data_id).addClass("tab_alert");
					//alert('กรุณาเลือกสาเหตุที่ไม่เจอแขก');
					$('#driver_remark_noguest_'+data_id).focus();
					return false;
				} else {
				
$('#alert_driver_remark_noguest_'+data_id).hide();
$('#driver_remark_noguest_'+data_id).removeClass("tab_alert");
				
 $('#popup_chk_no_guest_'+data_id).hide();
//$('#popup_chk_no_guest_'+data_id).modal('toggle');
$('.modal').modal('hide');

 ///// หาแขกไม่เจอ
  $('#btn_confirm_no_guest_'+data_id).click(function(){ 
 
 $('#btn_upload_'+data_id).click();
 
$('.modal').modal('hide');
 
 var data_vc =  document.getElementById('vc').value;
var driver_remark = $('#driver_remark_noguest').val();
var driver_remark_detail = $('#driver_remark_noguest_other').val();
	 
	//alert(driver_remark_detail);  
	  /////
	  /*
	   $.post('popup.php?name=action&file=action&id=<?=$arr[web_driver][id]?>',
	   
	   $('#no_guest_form').serialize(),function(response){
   $('#send_data').html(response);
  });
  */
	 //// 
	  

	  $('#date_pickup'+data_id).html(datetime);
				$.post("popup.php?name=action&file=action", { col_name : col_name ,data_id: data_id ,data_vc: data_vc ,data_report_id: data_report_id ,data_val : data_val ,driver_remark : driver_remark ,data_sv: data_sv ,driver_remark : driver_remark ,driver_remark_detail : driver_remark_detail   }, function(theResponse){ 
				var msg = theResponse;	$('#show_data_res'+data_id).html(msg);
					});
				$('#sub_complete'+data_id).fadeIn( "slow" );
				$('#btn_pickup'+data_id+data_val).attr('disabled', true);
				$('#cc_tr_pickup'+data_id).hide(); 
				$('#tr_btn_pickup'+data_val).show();
				$('#tr_btn_pickup1').hide();
				$('#no_guest'+data_id).show();
  
 ///
  	});
 ///
 }
///
 	});
	
} 
 	
   	
  	

}
if(col_name == 'driver_complete'){
/////
 

 $('#btn_confirm_complete_'+data_id).click(function(){ 
///

 
  $('#btn_upload_photo_finishpoint_'+data_id ).click();
	   ////// สั่ง action ทำงาน
   $('#iconchk_s3').attr("src", "images/yes.png");
  $('#checkstep_3').addClass("checkinstep_active");
 /////
 $('#btn_complete'+data_id).attr('disabled', true);
 
 	var currentdate = new Date(); 
    var datetime = "" 
    	+ currentdate.getFullYear() + "-" 
        + (currentdate.getMonth()+1)  + "-" 
        + currentdate.getDate() + "" 
        + currentdate.getHours() + ":"  
        + currentdate.getMinutes() + ":" 
        + currentdate.getSeconds();
   	$('#date_complete'+data_id).html(datetime);
 $.post("popup.php?name=action&file=action", { col_name : col_name ,data_id: data_id ,data_sv: data_sv,data_report_id: data_report_id ,data_vc: data_vc   }, function(theResponse){ 
 var msg = theResponse;	$('#show_data_res'+data_id).html(msg);  });		
   
	   
	 
	 
	});
 

	 
	
}
/* 
   var app_rej = '0';
   if($(this).hasClass('approve')){
      $(this).addClass('reject btn-warning');
      $(this).removeClass('approve btn-success');
      $(this).html('<i class="fa fa-times"></i>');
      app_rej = '0';
  }else if($(this).hasClass('reject')){
      $(this).removeClass('reject btn-warning');
      $(this).addClass('approve btn-success');
      $(this).html('<i class="fa fa-check"></i>');
      app_rej = '1';
  }
  if( col_name == 'in_transfer' ){
  	if(app_rej == '1'){
		$('.sub_in_transfer_'+pro_id).show();
	}else{
		$('.sub_in_transfer_'+pro_id).hide();
	}
  } 
//*
 $.post("index.php?name=admin/product/option", { col_name: col_name ,pro_id : pro_id , app_rej : app_rej  }, function(theResponse){ 	});
//   */ 
  });
 

  $(".btn_map").click(function(){


   var col_name = $(this).attr('col_name');
   var data_id = $(this).attr("data_id");
   var data_val = $(this).attr("data_val");
   var data_lat = $(this).attr("data_lat");
   var data_lng = $(this).attr("data_lng");
   var data_title = $(this).attr("data_title");
 
  $.post("popup.php?name=view&file=map", { col_name : col_name ,data_id: data_id ,data_val: data_val,data_lat: data_lat,data_lng: data_lng    }, function(theResponse){ 
 var msg = theResponse;	
 $('#show_data_map').html(msg);	
  
$("#dialog_map").dialog({ 
title: data_title, 
resizable: false, 
modal: true, width: '90%', 
	minHeight: 200,
	     buttons: {
			"ปิด": function () {
				
				$(this).dialog("close");
				}
		}
	});	
	
	
	});
 });	
 
 


 });
</script>
 

<style>
 .iframe-popup {
       border: none;
    top: 0; right: 0;
    bottom: 0; left: 0;
    width: 100%;
    height: 50%;
}
 
 </style>


 
 <!------ end---->  

    <style>
  /* Tooltip */
  .test + .tooltip > .tooltip-inner {
      background-color: #006699; text-align:left;
      color: #FFFFFF; 
      border: 0px solid #FF3300; 
 
      font-size: 13px;
  }
  /* Tooltip on top */
  .test + .tooltip.top > .tooltip-arrow {
      border-top: 5px solid #FF3300;
  }
  /* Tooltip on bottom */
  .test + .tooltip.bottom > .tooltip-arrow {
      border-bottom: 5px solid blue;
  }
  /* Tooltip on left */
  .test + .tooltip.left > .tooltip-arrow {
      border-left: 5px solid red;
  }
  /* Tooltip on right */
  .test + .tooltip.right > .tooltip-arrow {
      border-right: 5px solid black;
  }
  .test { width:500px: }
  </style>