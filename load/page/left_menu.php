
  <style>
  .textmain_left_menu  {
  font-size:20px; font-family:Arial, Helvetica, sans-serif;color:#666666;
  }
  
    .textsub_left_menu  {
  font-size:16px;  font-family:Arial, Helvetica, sans-serif;
  }
  
      .textsub_left_menu:hover  {
  font-size:16px;  font-family:Arial, Helvetica, sans-serif; color:#3C8DBC;
  }
  .l-menu-li {
  
  border-bottom:  solid 1px #999999;
  }
  
    .l-menu-li-icon { 
	font-size:24px; padding-right:30px; color:#3C8DBC;
   }
   
  </style>
  
   <section class="sidebar"   > 
  <ul class="sidebar-menu"> 
 
         
         
		       <li  id="menu_home" >
          <a href="index.php" >
            <i class="fa fa-home l-menu-li-icon"></i> <span class="textmain_left_menu">&nbsp;หน้าแรก</span>
      </a>
        </li>
		 
		 
		 
		 
        <li  id="menu_work_update" >
          <a href="?name=work_update" >  
		  <i class="fa  fa-circle-o-notch l-menu-li-icon"  ></i> 
            <span class="textmain_left_menu "  >&nbsp;อัพเดทงานใหม่</span>
            <span class="pull-right-container">
      
            </span>
          </a>
        </li>
				 
		 
        <li  id="menu_today">
          <a href="?name=today" >
            <i class="fa  fa-clock-o l-menu-li-icon"></i> <span class="textmain_left_menu">&nbsp;งานวันนี้</span>
            <span class="pull-right-container">
      
            </span>
          </a>
        </li>
		
		
		
         <li  id="menu_all">
          <a href="?name=all" >
            <i class="fa fa-calculator l-menu-li-icon"></i> <span class="textmain_left_menu">&nbsp;งานทั้งหมด</span>
      </a>
        </li>
		
		<? if(1==0){ ?>
		
		         <li  id="menu_all">
          <a href="chat.php?name=livechat" >
            <i class="fa fa-comments l-menu-li-icon"></i> <span class="textmain_left_menu">&nbsp;แชท</span>
      </a>
        </li>
		
		<? } ?>
		
 
		
		
		
		
		
		 <li  id="menu_user" class="treeview">
		         <a href="#" >
             <i class="fa fa-cogs l-menu-li-icon"></i> <span class="textmain_left_menu">&nbsp;จัดการรถ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"  >
		   <li ><a href="?name=checkcar&file=data" ><i class="fa fa-circle-o" ></i><span  class="textsub_left_menu">ข้อมูลรถ</span></a></li>
            <li ><a href="?name=checkcar" ><i class="fa fa-circle-o" ></i><span  class="textsub_left_menu">ตรวจเช็คสภาพรถ</span></a></li>
			<li><a href="?name=checkcar&file=repair"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">แจ้งซ่อมรถ</span></a></li>
			<li><a href="?name=checkcar&file=service"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">ศูนย์บริการและประกันภัย</span></a></li>
 
 
          </ul>
        </li>
		
		
		
		
		
		
		
		
		 <li  id="menu_user" class="treeview">
		         <a href="#" >
              <i class="fa fa-user l-menu-li-icon"></i> <span class="textmain_left_menu">&nbsp;ข้อมูลผู้ใช้งาน</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"  >
            <li ><a href="?name=user" ><i class="fa fa-circle-o" ></i><span  class="textsub_left_menu">ข้อมูลส่วนตัว</span></a></li>
			
			<li ><a href="?name=user&file=job" ><i class="fa fa-circle-o" ></i><span  class="textsub_left_menu">ข้อมูลการทำงาน</span></a></li>
			
			<li><a href="?name=user&file=network"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">ข้อมูลการติดต่อสื่อสาร</span></a></li>
			<li><a href="?name=user&file=phone"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">เบอร์โทรศัพท์ส่วนตัว</span></a></li>
			<? if(1==0){ ?>
			<li><a href="?name=user&file=pic"><i class="fa fa-circle-o" ></i><span  class="textsub_left_menu">เปลี่ยนภาพประจำตัว</span></a></li>
			<? } ?>
			<li><a href="?name=user&file=password"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">เปลี่ยนรหัสผ่าน</span></a></li>
			
			<? if(1==0){ ?>
			 <li><a href="?name=user&file=document"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">ไฟล์เอกสาร</span></a></li>
            
			<li><a href="?name=user&file=network"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">ข้อมูลการทำงาน</span></a></li>
			
			<? } ?>
          </ul>
        </li>
		
		
		<? if(1==1){ ?>
		
		 
 
 
 
		          
				<li  id="menu_pay" lass="treeview">
 
          <a  >
		  
		  <i class="fa fa-recycle l-menu-li-icon"></i> <span  class="textmain_left_menu">&nbsp;บัญชี การเงิน</span>
		     <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
		  
		   </a> 
		  
		   <ul class="treeview-menu">
            <li><a href="?name=pay&file=bank"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">บัญชีธนาคาร</span></a></li>
			<li><a href="?name=pay&file=pay"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">ค่าเที่ยว เบี้ยเลี้ยง</span></a></li>
			<li><a href="?name=pay&file=all"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">เงินเดือน ค่าโอที</span></a></li>
			 
		         </ul>
        </li>
		<? } ?>
		
		
		<li  id="menu_phone" lass="treeview">
 
          <a  >
		  
		  <i class="fa fa-phone l-menu-li-icon"></i> <span  class="textmain_left_menu">&nbsp;เบอร์โทรศัพท์</span>
		     <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
		  
		   </a> 
		  
		   <ul class="treeview-menu">
            <li><a href="?name=phone&file=phone"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">เบอร์โทรศัพท์ส่วนตัว</span></a></li>
			<li><a href="?name=phone&file=driver"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">เบอร์โทรศัพท์คนขับรถ</span></a></li>
 
			 
		         </ul>
        </li>
		
		
		
		
		
		<!------>
		<li  id="menu_pay" lass="treeview">
 
          <a  >
		  
		  <i class="fa fa-recycle l-menu-li-icon"></i> <span  class="textmain_left_menu">&nbsp;โปรแกรมช่วยเหลือ</span>
		     <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
		  
		   </a> 
		  
		   <ul class="treeview-menu">
            <li><a href="https://www.flightradar24.com/data/flights" target="_blank"><i class="fa fa-plane "></i><span  class="textsub_left_menu">เช็คเที่ยวบิน</span></a></li>
			 
			 
		         </ul>
        </li>
		
		<!------>
		
		
		
		
 
						<li  id="menu_logout">
          <a  id="l-logout" >
		  
            <i class="fa fa-share-square l-menu-li-icon" ></i> <span class="textmain_left_menu" >&nbsp;ออกจากระบบ</span>
      </a>
        </li>
		<br>
<br>
<br>
<br>
<br>
<br>
 
 

		<script>
		
		$("#l-logout").click(function(){ 
 
  
	   swal({
		title: "<font style='font-size:28px'><b> คุณแน่ใจหรือไม่",
		text: "ว่าต้องการออกจากระบบ",
		type: "error",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'ใช่',
		cancelButtonText: "ไม่ใช่",
		closeOnConfirm: true,
		closeOnCancel: true,
		html: true
	},
	function(isConfirm){
    if (isConfirm){
	 
	
swal("ออกจากระบบสำเร็จ", "success");

window.location = "signin.php";;
 
    
   
	//  alert('dd');
    } else {
      swal("Cancelled", "", "error");
    }
	});
	   
	    

});
		
		
		
		</script>
		
		
		
		
		
		
		
		
		
		
		