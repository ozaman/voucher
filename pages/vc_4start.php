<div data-role="page" id="Place" style="" class="bg-body" ng-dblclick="doubleClick()">
<?php 
/*
$txt_name_en = "Start using"; 
$txt_name_th = "เริ่มใช้งาน";
$txt_name_cn = "开始使用"; 
//*/
$txt_name_en = "Contact "; 
$txt_name_th = "ติดต่อ ";
$txt_name_cn = "联系 "; 


?> 
<?php include "pages/vc_0header.php"; ?> 
    
    
    <div class="ui-content" style="background: none !important">
        <Br/>
        <div class="col" style="">
            <div class="borderdetail" style="padding: 0;" >  
                    
                    
                    <ul class="Inform-driver-ul-main" style="margin-bottom: 0;">
                    
                    
                    <!--<li  ng-click="popupselecttitleinform()" style="background-color: #f0f0f0;    ;border-radius: 8px 8px 0 0;">-->
                    <li  style=" border-radius: 8px 8px 0 0;">
                    <table width="100%">
                    	<tr>
                    		<td width="40" align="center" >
                    			
                            	<img src="images/driver.png?v=<?=$cache;?>" width="30" align="absmiddle">
                                <span ng-if="flagcheck == 1">Driver</span>
                                <span ng-if="flagcheck == 2">คนขับ</span>
                                <span ng-if="flagcheck == 3">司机</span>
                        	</td>
                        	<td>
                        		<table width="100%" cellpadding="8" cellspacing="8">
                        			<tr>
                        				<td width="30%"  height="61" align="center">
                        					
                                	<img src="images/usercar_befor.png?v=<?=$cache;?>" width="30" ng-click="popup_goto_before(VOUCHER)" align="absmiddle" style="padding: 5px 0;">
                                	<br />
                                <span ng-if="flagcheck == 1" >Before </span>
                                <span ng-if="flagcheck == 2">ใช้ล่วงหน้า </span>
                                <span ng-if="flagcheck == 3">提前使用</span>
                            				 
                        				</td>
                        				<td width="10"></td>
                        				<td width="30%" align="center">
                        					
                                	<img src="images/usercar_after.png?v=<?=$cache;?>" width="30" ng-click="popup_goto_delay(VOUCHER)" align="absmiddle" style="padding: 5px 0;">
                                	<br />
                                <span ng-if="flagcheck == 1" >Delay </span>
                                <span ng-if="flagcheck == 2">เลื่อนการใช้ </span>
                                <span ng-if="flagcheck == 3">推迟使用</span>
                            			
                        				</td>
                        				<td width="10"></td>
                        				<td width="30%" align="center">
                        					<img src="images/clock_wait.png?v=<?=$cache;?>" width="30" ng-click="popup_goto_wait(VOUCHER)" align="absmiddle" style="padding: 5px 0;">
                                	<br />
                                <span ng-if="flagcheck == 1" >Waiting </span>
                                <span ng-if="flagcheck == 2">ฉันรออยู่แล้ว </span>
                                <span ng-if="flagcheck == 3">我已经在等</span>
                        				 
                        				</td>
                        			</tr>
                        			<tr>
                        				<td height="5" colspan="5" style="border-top: 1px solid #f0f0f0; "></td>
                        			</tr>
                        			 
                        			<tr>
                        				<td align="center">
                        				<img src="images/find_message.png?v=<?=$cache;?>" width="30" ng-click="popup_goto_divermsg(VOUCHER)" align="absmiddle" style="padding: 5px 0;">
                                	<br />
                                <span ng-if="flagcheck == 1" >Frequent</span>
                                <span ng-if="flagcheck == 2">คำใช้บ่อย </span>
                                <span ng-if="flagcheck == 3">常用词句</span>
 
 
                        				</td>
                        				<td width="10"></td>
                        				<td align="center">
                        					<img src="images/all_message.png?v=<?=$cache;?>" width="30" ng-click="popup_goto_diverchat(VOUCHER)" align="absmiddle" style="padding: 5px 0;">
                                	<br />
                                <span ng-if="flagcheck == 1" >Chat</span>
                                <span ng-if="flagcheck == 2">การแชท </span>
                                <span ng-if="flagcheck == 3">交谈</span> 
                        				</td>
                        				<td width="10"></td>
                        				<td align="center">
                        					<img src="images/phone.png?v=<?=$cache;?>" width="30"   align="absmiddle" style="padding: 5px 0;">
                                	<br />
                                <span ng-if="flagcheck == 1" >Call</span>
                                <span ng-if="flagcheck == 2">โทร </span>
                                <span ng-if="flagcheck == 3">通话</span>
                                
                        				</td>
                        			</tr>
                        		</table>
                        	</td>
                    	</tr>
                    </table>
                    <span style="display: none;">            
                                <div class="btn-inform" style="background: #37c837">
                                	<i class="fa fa-paper-plane fa-lg " aria-hidden="true"></i>
                            	</div>
                                <span ng-if="flagcheck == 1" >Inform the driver </span>
                                <span ng-if="flagcheck == 2">แจ้งคนขับ </span>
                                <span ng-if="flagcheck == 3">通知司机</span>
                                <span style="color: #000">({{setionflight.length}})</span>
                                <i class="fa fa-commenting-o fa-lg" aria-hidden="true" style="float: right;  color: #37c837; padding: 5px 0; /* line-height: 0.8; */ font-size: 30px;" ng-click="openpopupcommentTodriver()"></i>
                    </span>      
                            
                    </li>
                    
                    
                    
                </ul>
                
                
            
        </div>
        
			<div class="borderdetail" style="padding: 0;border-radius:8px " >  
                    
                    
                    <ul class="Inform-driver-ul-main" style="margin-bottom: 0;">
                    
                    
                    <!--<li  ng-click="popupselecttitleinform()" style="background-color: #f0f0f0;    ;border-radius: 8px 8px 0 0;">-->
                    
                    <li style="background-color: #f0f0f0;border-radius:8px    ">
                    	<table width="100%" cellpadding="8" cellspacing="8">
                    	<tr>
                    		<td width="40" align="center">
                    			<img src="images/callchat.png?v=<?=$cache;?>" width="30">
                                <span ng-if="flagcheck == 1">OP</span>
                                <span ng-if="flagcheck == 2">โอพี</span>
                                <span ng-if="flagcheck == 3">客服</span>
                        	</td>
                        	<td>
                        		<table width="100%">
                        			<tr>
                        				<td width="30%" align="center">
                        					<img src="images/find_message.png?v=<?=$cache;?>" width="30" ng-click="popup_goto_callcentermsg(VOUCHER)"align="absmiddle" style="padding: 5px 0;">
                                	<br />
                                <span ng-if="flagcheck == 1" >Frequent</span>
                                <span ng-if="flagcheck == 2">คำใช้บ่อย </span>
                                <span ng-if="flagcheck == 3">常用词句</span>
                        				</td>
                        				<td width="10"></td>
                        				<td width="30%" align="center">
                        					<img src="images/all_message.png?v=<?=$cache;?>" width="30" ng-click="popup_goto_callcenterchat(VOUCHER)" align="absmiddle" style="padding: 5px 0;">
                        					<br />
                                <span ng-if="flagcheck == 1" >Chat</span>
                                <span ng-if="flagcheck == 2">การแชท </span>
                                <span ng-if="flagcheck == 3">交谈</span> 
                        				</td>
                        				<td width="10"></td>
                        				<td width="30%" align="center">
                        					
                        					<img src="images/phone.png?v=<?=$cache;?>" width="30"   align="absmiddle" style="padding: 5px 0;">
                                	<br />
                                <span ng-if="flagcheck == 1" >Call</span>
                                <span ng-if="flagcheck == 2">โทร </span>
                                <span ng-if="flagcheck == 3">通话</span>
                        				</td>
                        			</tr>
                        		</table>
                        	</td>
                    	</tr>
                    </table>
                    
                    
                        <span style="display: none;">
                                <span ng-if="flagcheck == 1">Call center</span>
                                <span ng-if="flagcheck == 2">ศูนย์รับแจ้ง</span>
                                <span ng-if="flagcheck == 3">客服</span>
                                
                        </span>
                                
                          
                    </li>
                    
                </ul>
                
                
            
        </div>

        <div class="borderdetail" style="padding: 0;" >  
                    
                    
                    <ul class="Inform-driver-ul-main" style="margin-bottom: 0;">
                    
                    
                    <!--<li  ng-click="popupselecttitleinform()" style="background-color: #f0f0f0;    ;border-radius: 8px 8px 0 0;">-->
                    
                    <li style="border-radius: 8px; margin-bottom: 0;" >
                    	<table width="100%" cellpadding="8" cellspacing="8">
                    	<tr>
                    		<td width="40" align="center" style="text-align: center">
                    			<a href="#increasetime" id="" data-transition="slide" class="add-service"  >
                                    <div style="width: 35px;  height: 35px; color: #fff; line-height: 2.2; border-radius: 50%; box-shadow: 1px 1px 5px #999999;text-align: center;" align="center">
                                    <img src="images/pluss.png?v=<?=$cache;?>" align="center" aria-hidden="true" ng-click="increasetimedialog" width="30" / >
                                    </div>
                                </a>
                        	</td>
                        	<td></td>
                        	<td valign="middle">
                             <a href="#increasetime" id="listitem" data-transition="slide" style="text-decoration: none;font-weight: normal;">
                        		<table width="100%">

                        			<tr>

                        				<td width="30%" align="center" valign="middle" colspan="3">
                        					<span ng-if="flagcheck == 1"  >Add Service to this Order</span>
                                            <span ng-if="flagcheck == 2"  >เพิ่มบริการในคำสั่งซื้อนี้</span>
                                            <span ng-if="flagcheck == 3"  >添加服务到此订单</span>
                        				</td>
                        				<!-- <td width="10"></td> -->
                        				
                        			</tr>
                        		</table>
                                </a>
                        		
                                
                                 
                        	</td>
                        	<td width="30" align="right">
                        		<i class="fa fa-chevron-circle-right fa-lg" aria-hidden="true" style="float: right;color: #b3b3b3;padding: 9px 0;line-height: 0.8;"></i>
                        	</td>
                    	</tr>
                    </table>
                    
                    <span style="display: none;">
                                
                          </span>  
                                
                         
                    </li>
                    
                </ul>
                
                
            
        </div>
        
    </div>
    
   
    </div>
    <div style="padding: 0 10px;    border-radius: 10px;margin-top: 5px;padding-bottom: 1px;" class="groob">
                <div align="left" style="font-size: 16px;
    padding: 12px 0;
    color: #fff;
    text-shadow: none !important;
    font-weight: 100 !important;margin-left: 5px">
                    <span ng-if="flagcheck == 1" style="font-weight: 200">History</span>
                    <span ng-if="flagcheck == 2">ประวัติ</span>
                    <span ng-if="flagcheck == 3">记录</span>
                    <span style="color: #fff" ng-bind="'('+setionflight.length+')'"></span>
                </div>
				
				<div id="load_chat">
				sss
				</div>
				
               <!--  <div class="record" ng-repeat="item in setionflight no"  >
 
                </div> -->
				
                </div>
    <Br/>
    <Br/>
    <Br/>
    <Br/>
    <Br/>
    
    

    
<?php include "pages/vc_9footer.php"; ?>
</div>