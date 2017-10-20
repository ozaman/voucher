<style>
body {
    margin : 0;
}

.outer-container {
    position: absolute; margin-left:-10px; margin-top:-10px;  
	
    display: table;
    width: 100%; /* This could be ANY width */
    height: 100%; /* This could be ANY height */
   z-index:99999;  
	background: url('images/bg-popup.png');  
}

.inner-container {
    display: table-cell;
    vertical-align: middle;
    text-align: center;
}

.centered-content {
    display: inline-block;
    text-align: left; width:80%;
   
 
    border : 1px solid #99999;  
	z-index:99999; background-color:#FFFFFF;   -moz-border-radius:10px;
  -webkit-border-radius:3px;

 border-radius:3px; 
}

</style>

 
<div id="alert_show_map" style="display:none;z-index:99999;  ">
<div class="outer-container" >
   <div class="inner-container">
     <div class="centered-content">
 
<a  id="button_alert_show_map_now"><div  class="drop-sub-menu-link" style="color:#000000; font-size:16px; ">&nbsp; ส่งตำแหน่ง</span></font></b></div></a>
<a id="button_alert_show_map_realtime"><div  class="drop-sub-menu-link" style="border:none; color:#000000; font-size:16px; ">&nbsp;  ตำแหน่งแบบเรียลไทม์</font></b>  </div></a>

</div>
     
<br>
 
     </div>
   </div>
</div>
 
 </div>