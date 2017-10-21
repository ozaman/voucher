<!-- <script>
  // tell the embed parent frame the height of the content
  if (window.parent && window.parent.parent){
    window.parent.parent.postMessage(["resultsFrame", {
      height: document.body.getBoundingClientRect().height,
      slug: "qrKWq"
    }], "*")
  }
</script> -->
<div data-role="page" id="home" class="bg-body" style="">
	<div class="header" style="position: fixed;font-size: 16px;z-index: 1;top: 0" ng-dblClick="doubleClick()">
		<table width="100%">
			<tr >
				<td width="3%"></td>
				<td width="10%" >
					<div class="logoagent" data-toggle="modal" data-target="#upphotobycompany">
						<img ng-src="{{TB_order_agent}}.jpg" err-src="images/ctr.jpg" width="30" height="30" ng-click="snapphoto()">
					</div>
				</td>
				<td align="center" >
					<span  ng-bind="TB_admin_companyhome"></span>
				</td>
				<td width="10%" align="right">
					<div class="dropdown-toggle" id="ddAction" aria-hidden="true"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ng-click="test()">
					<i class=" fa fa-cog fa-lg "  style="font-size: 28px; color: #fff;line-height: 1;"></i> 
					</div>
					<ul class="dropdown-menu" role="menu"  aria-labelledby="ddaction" style="right: 0;color: #555;font-size: 16px" >
			      		<li data-toggle="modal" data-target="#Selectlanguage" style="padding: 10px 0;" ng-click="change_language()">
			      			<i class="fa fa-globe fa-lg pull-left" aria-hidden="true" style="margin-left: 15px; padding-right: 20px; line-height: 0.7; font-size: 30px; color: #9E9E9E;"></i>
						    <style type="text/css">
						    	.dropdown-menu{
						    		padding-bottom: 0px;
						    	}
						    </style>
			      			<span ng-if="flagcheck == 1">Language</span>
			      			<span ng-if="flagcheck == 2">ภาษา</span>
			      			<span ng-if="flagcheck == 3">语言</span>
			      		
							<img class=""  ng-src="images/{{''+flag}}"  ng-style="lstart"  align="right"  style="display: inline-block; width: 30px; border-radius: 8px; margin-right: 1.5%;  float: right;">
							
						
			      	</li>
			      <li data-toggle="modal" data-target="#Explain" style="padding: 10px 0;">
			      	<i class="fa fa-video-camera fa-lg pull-left" aria-hidden="true" style="margin-left: 15px; padding-right: 20px; line-height: 0.7; font-size: 30px; color: #9E9E9E;" ></i>
			
						<span ng-if="flagcheck == 1">Explain</span>
						<span ng-if="flagcheck == 2">อธิบาย</span>
						<span ng-if="flagcheck == 3">解释</span>			
			     </li>
			     <!-- <li>
			     <div  style="color: #fff;    background: #3b5998;">
					<div align="center" style=";font-size: 14px;padding-top: 4px;font-weight: 200" >
						<span  ng-if="flagcheck == 1" style="font-weight: 400">t-booking.com Travel Booking System</span>
						<span ng-if="flagcheck == 2"><span style="font-weight: 400">t-booking.com</span> ระบบจองการท่องเที่ยว</span>
						<span  ng-if="flagcheck == 3"><span style="font-weight: 400">t-booking.com</span> 旅游预订系统</span>
					</div>
					<div align="center" style="font-size: 14px;font-weight: 200">
						 <span  ng-if="flagcheck == 1" style="font-weight: 400">Real-time communication confirmation</span>
			            <span ng-if="flagcheck == 2">(ใบยืนยัน)โต้ตอบแบบ<span style="font-weight: 400"> Real-time</span></span>
			            <span  ng-if="flagcheck == 3">实时沟通确认单</span>
					</div>
				</div>
				</li> -->
			    </ul>
				</td>
				<td width="3%"></td>
			</tr>
         
		</table>
	</div>
	<div>Book New</div>
	<div style="padding: 3px 18px;text-shadow: none;margin-top: 55px;width: 100%"> 
		<table width="100%">
			<tr>
				<td colspan="2" style="color: rgba(255, 255, 255, 1.0)" align="center">
					<span  ng-if="flagcheck == 1" style="font-size: 18px;">My Bookings</span>
					<span  ng-if="flagcheck == 2" style="font-size: 18px;">การจองของฉัน</span>
					<span  ng-if="flagcheck == 3" style="font-size: 18px;">我的预订</span>
					<span ng-bind="onholiday" style="font-size: 17px;"></span>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center" style="color: #fff">
               
					<span style="font-size: 17px">
						<span ng-if="flagcheck == 1">Now</span>
						<span ng-if="flagcheck == 2">ตอนนี้</span>
						<span ng-if="flagcheck == 3">现在</span>
						<span ng-bind="clock | date:'yyyy-MM-dd HH:mm:ss'"></span>
						<img ng-src="iconstatus/flag/test_f/{{timecountry}}.png" width="25">
					</span>
				</td>
			</tr>    
		</table>
	</div> 
	<div class="ui-content" style="padding-bottom: 50px !important;" >
		<table width="100%" border="0" cellspacing="0" cellpadding="0" ng-repeat="x in voucherselect" ng-class="{evenhome: $even, oddhome: $odd}" style="display: none;font-size: 17px;" >
			<tr>
				<td>
					<div style="text-decoration:none !important;background-color: #fff ;text-shadow: none" >
						<table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-size: 17px;">
							<tr>
								<td width="70" valign="top">
									<table width="100%" border="0" cellspacing="5" cellpadding="0" style="color: #BDBDBD;">
										<tr>
											<td align="center" style="padding: 5px 0;color: #BDBDBD;">
                        
											</td>
										</tr>
                        
										<tr>
											<td  align="center" style="padding:5px 0">
												<div  class="{{x.styleiconhome}}" >
													<center>
														<i ng-if="x.TB_order_type == 'transfer'" class="fa fa-car" aria-hidden="true" style="font-size:30px;margin-top:12px;"></i>
													</center>
												</div>
											</td>
										</tr>
										<tr>
											<td align="center" style="padding:5px 0;text-shadow: none"> 
											<div>
												<span id="{{state}}">{{statusText}}</span>
												<span id="{{statehome}}" ng-if="x.TB_order_status == 'CONFIRM' && flagcheck == 1">Confirm</span>
												<span id="{{statehome}}" ng-if="x.TB_order_status == 'CONFIRM' && flagcheck == 2">ยืนยันแล้ว</span>
												<span id="{{statehome}}" ng-if="x.TB_order_status == 'CONFIRM' && flagcheck == 3">已確認</span>
                
												<span id="{{state}}" ng-if="x.TB_order_status == 'NEW' && flagcheck == 1">New</span>
												<span id="{{state}}" ng-if="x.TB_order_status == 'NEW' && flagcheck == 2">ใหม่</span>
												<span id="{{state}}" ng-if="x.TB_order_status == 'NEW' && flagcheck == 3">新訂單</span>
                                    
												<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 1 && sub_confirm == 1">CANCELED</span>
												<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 2 && sub_confirm == 1"">ยืนยันยกเลิก</span>
												<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 3 && sub_confirm == 1"">已接受取消訂單</span>
                
												<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 1 && sub_reject == 1">REJECT</span>
												<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 2 && sub_reject == 1"">ปฏิเสธ</span>
												<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 3 && sub_reject == 1"">拒绝訂單</span>
                
												<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 1 && sub_reject == 2">REJECTED</span>
												<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 2 && sub_reject == 2"">ยืนยันปฏิเสธ</span>
												<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 3 && sub_reject == 2"">已接受拒绝訂單</span>
                
												<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 1 && sub_reject != 2 && sub_confirm != 1" >CANCEL</span>
												<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 2 && sub_reject != 2 && sub_confirm != 1">ยกเลิก</span>
												<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 3 && sub_reject != 2 && sub_confirm != 1">取消訂單</span>
												</div>
												<!--  <p>{{x.datessnew}}</p> -->
											</td>
										</tr>
									</table>
								</td>
								<td width="10">&nbsp;</td><!--tab-->

								<td style=" font-weight: normal !important;padding-bottom: 0 " valign="top">
                    
									<table width="100%" border="0" cellspacing="0" cellpadding="0">

                 
										<tr >
											<td colspan="5" height="100" valign="top">
												<div>
												<span ng-if="flagcheck == 1" ng-bind="x.topic_en"></span>
												<span ng-if="flagcheck == 2" ng-bind="x.topic_th"></span>
												<span ng-if="flagcheck == 3" ng-bind="x.topic_cn"></span>
												</div>
												<div style="margin-top: 10px;">
													<table width="100%" style="font-size: 14px;color: #BDBDBD;">
														<tr >
															<td width="33%" align="center">
																<img src="images/driver.png?v=<?=$cache;?>" width="30" align="absmiddle">
																<div ng-if="flagcheck == 1">Driver+Car</div>
																<div ng-if="flagcheck == 2">คนขับ+รถ</div>
																<div ng-if="flagcheck == 3">司机+车</div>

															</td>
															<td width="33%" align="center">
																<img src="images/callchat.png?v=<?=$cache;?>" width="30" align="absmiddle">
																<div ng-if="flagcheck == 1">Service</div>
																<div ng-if="flagcheck == 2">บริการ</div>
																<div ng-if="flagcheck == 3">客服</div>
                                
															</td>
															<td width="33%" align="center">
																<img src="images/pluss.png?v=<?=$cache;?>1" width="35" align="absmiddle">
																<div ng-if="flagcheck == 1">Service</div>
																<div ng-if="flagcheck == 2">บริการ</div>
																<div ng-if="flagcheck == 3">客服</div>
                                
															</td>
														</tr>
													</table>
												</div>  
											</td>

										</tr>
                  
										<tr>
											<td width="10" class="{{x.styletabelhead}}" style="border-radius: 8px 0 0 8px;">&nbsp;</td>
											<td align="left" colspan="3" class="{{x.styletabelhead}}" style="padding-top: 5px;">
												<span style="font-size: 15px; " ng-bind="x.TB_order_outdate"></span> / 
												<span style="font-size: 15px;" ng-bind="x.airout_h+ ':' + x.airout_m"></span>
											</td>
											<td class="{{x.styletabelhead}}">&nbsp;</td>
											<td class="{{x.styletabelhead}}" align="right">
                        
												<!--  <span>{{x.datessss}}</span>
												<span>{{x.date}}</span> -->
											</td>
											<td width="10" class="{{x.styletabelhead}}" style="border-radius: 0 8px 8px 0;">
											</td>
										</tr>
									</table>
								</td>
								<td width="10"></td>
								<td width="20">
									<table>
										<tr>
											<td height="50">
                            
											</td>
										</tr>
										<tr >
											<td align="absmiddle" height="33%">
												<i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true" style="color: #616161; margin-right: 5px;"></i>
											</td>
                         
										</tr>
										<tr>
											<td valign="bottom" height="33%">                            
												<img src="images/chats.png?v=<?=$cache;?>" width="30" align="" style="">
											</td>
										</tr>
									</table>
                    
                    
								</td>
							</tr>
							<tr ><td colspan="7" style=" height:8px "></td>
							</tr>
						</table>
					</div>
             
				</td></tr></table>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" ng-repeat="x in voucherselect" ng-class="{evenhome: $even, oddhome: $odd}">
			<tr>
				<td>
					<table width="100%" style="font-size: 17px; margin-left:-5px;">
						<tr> 
							<td colspan="3" align="center" style="padding: 5px" ng-if="x.TB_order_type == 'transfer'">
								<span ng-if="flagcheck == 1" ng-bind="x.topic_en"></span>
								<span ng-if="flagcheck == 2" ng-bind="x.topic_th"></span>
								<span ng-if="flagcheck == 3" ng-bind="x.topic_cn"></span>
							</td>
							<td colspan="3" align="center" style="padding: 5px" ng-if="x.TB_order_type != 'transfer'">
								<span ng-if="flagcheck == 1" ng-bind="x.T_topic_en"></span>
								<span ng-if="flagcheck == 2" ng-bind="x.T_topic_th"></span>
								<span ng-if="flagcheck == 3" ng-bind="x.T_topic_cn"></span>
							</td>
						</tr>
						<tr>
							<td colspan="3">
								<table>
									<tr>
										<td>
											<img src="images/yes.png?v=<?=$cache;?>1"  align="" style="width: 20px; margin-top:-3px" >
										</td>
										<td width="10"></td>
										<td>
											<table>
												<tr>
													<td align="center" data-toggle="modal" data-target="#voucherweb" colspan="3" ng-click="voucherdialog(x)">	
														<img src="images/yes.png?v=<?=$cache;?>1"  align="" style="width: 20px; margin-top:-3px" ng-if="x.TB_order_status != 'NEW'">
														<span id="{{state}}" ng-bind="statusText"></span>
														<span id="{{statehome}}" ng-if="x.TB_order_status == 'CONFIRM' && flagcheck == 1">CFM</span>
														<span id="{{statehome}}" ng-if="x.TB_order_status == 'CONFIRM' && flagcheck == 2">ยืนยัน</span>
														<span id="{{statehome}}" ng-if="x.TB_order_status == 'CONFIRM' && flagcheck == 3">確認</span>
							                
														<span id="{{state}}" ng-if="x.TB_order_status == 'NEW' && flagcheck == 1">New</span>
														<span id="{{state}}" ng-if="x.TB_order_status == 'NEW' && flagcheck == 2">ใหม่</span>
														<span id="{{state}}" ng-if="x.TB_order_status == 'NEW' && flagcheck == 3">新訂單</span>
							                                    
														<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 1 && sub_confirm == 1">CXL</span>
														<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 2 && sub_confirm == 1"">ยกเลิก</span>
														<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 3 && sub_confirm == 1"">取消</span>
							                
														<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 1 && sub_reject == 1">REJ</span>
														<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 2 && sub_reject == 1"">ปฏิเสธ</span>
														<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 3 && sub_reject == 1"">拒绝</span>
							                
														<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 1 && sub_reject == 2">REJ</span>
														<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 2 && sub_reject == 2"">ปฏิเสธ</span>
														<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 3 && sub_reject == 2"">拒绝</span>
							                
														<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 1 && sub_reject != 2 && sub_confirm != 1" >CXL</span>
														<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 2 && sub_reject != 2 && sub_confirm != 1">ยกเลิก</span>
														<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 3 && sub_reject != 2 && sub_confirm != 1">取消</span>
							  /  
															<span  ng-if="flagcheck == 1">Voucher</span>
											                <span  ng-if="flagcheck == 2">เลขวอเชอร์</span>
											                <span  ng-if="flagcheck == 3">凭证编号</span>
											                <span  ng-bind="':'+x.TB_order_order" style="margin-left: -2px;"></span>
														</td>
												</tr>
												<tr> 
													<td align="center"  colspan="3"  style="color: rgba(97, 97, 97, 0.84);padding-top: 4px;"   >
														 
														<img src="images/yes.png?v=<?=$cache;?>1" width="20" align="" style="display: inline-block; margin-top:-3px;"  ng-if="x.datessnew == 1" >
														<img src="images/no.png?v=<?=$cache;?>1" width="20"  align="" style="display: inline-block; margin-top:-3px;"  ng-if="x.datessnew == 2"  >
															<span ng-if="flagcheck == 1">Used</span>
															<span ng-if="flagcheck == 2">ใช้</span>
															<span ng-if="flagcheck == 3">使用</span>
														 &nbsp;<span ng-bind="x.TB_order_outdate+' '+ '/'+' '+x.airout_h + ':' + x.airout_m"></span>
												  </td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
								
							</td>
							
						</tr>
						
						
						<tr>
							<td align="center" colspan="3" width="">
								<div style="margin-top: 10px;" >
									<table width="100%" style="font-size: 17px;color: rgba(97, 97, 97, 0.84);" >
										<tr >
										
										<td align="center" style="padding-top: 8px;padding: 10px 0px;padding-left: 14px;" width="20%" ng-click="myinfo(x)">
											
					                          <i class="fa  fa fa-users " style="font-size:35px;color: #3b5998; "  ></i>
					                        <div ng-if="flagcheck == 1">Information</div>
					                        <div ng-if="flagcheck == 2">ข้อมูลของฉัน</div>
					                        <div ng-if="flagcheck == 3">我的资料</div>
										</td>
										<td align="center" style="padding-top: 8px;padding: 14px 0px;" width="20%" ng-click="getbookinfomation(x)">							
												<img src="images/boolin.png" width="35" >
												<!-- <img src="images/icon_type/{{x.TB_order_type}}.png" width="40" ng-if="x.TB_order_type == 'tour'">
												<img src="images/icon_type/{{x.TB_order_type}}.png" width="40" ng-if="x.TB_order_type == 'show'"> -->
												<div ng-if="flagcheck == 1"  >Details</div>
				                                <div ng-if="flagcheck == 2"  >ข้อมูลการจอ</div>
				                                <div ng-if="flagcheck == 3"  >订单详情</div>
											</td>
											<td width="20%" align="center" style="padding-top: 8px;padding: 14px 0px;" ng-disabled="x.datessnew ==2"  ng-click="openpopupdriverOP(x)" ng-if="x.TB_order_type != 'transfer'">
												<img src="images/callchat.png?v=<?=$cache;?>" width="35" align="absmiddle"><Br/>
												<span ng-if="flagcheck == 1">OP</span>
												<span ng-if="flagcheck == 2">โอพี</span>
												<span ng-if="flagcheck == 3">客服</span>
												<!-- <span class="length-statehomegraop" ng-if="i.count_op == '0' && i.invoice == x.TB_order_order" ng-repeat="i in nontifigcomment">
													<span ng-bind="x.count_op" ></span>
												</span> -->
												<span class="length-statehomeredop" ng-if="i.count_op != '0' && i.invoice == x.TB_order_order" ng-repeat="i in nontifigcomment">
													<span ng-bind="i.count_op" ></span>
												</span>
												
                                
											</td>
											<td width="20%" align="center" style="padding-top: 8px;padding: 14px 0px;"  ng-disabled="x.datessnew ==2" ng-click="openpopupdriverinfo(x);openpopuptodriver(x.TB_order_order);myFunction()" data-toggle="modal" data-target="#myModal" id="vcid" onclick="myFunction(x.TB_order_order)" ng-if="x.TB_order_type == 'transfer'">

												<img src="images/driver.png?v=<?=$cache;?>" width="35" align="absmiddle"><Br/>
													<span ng-if="flagcheck == 1">Driver+Car</span>
													<span ng-if="flagcheck == 2">คนขับ+รถ</span>
													<span ng-if="flagcheck == 3">司机+车</span> 
													<!-- <span class="length-statehomegradriver" ng-if="i.count_driver == '0' && i.invoice == x.TB_order_order" ng-repeat="i in nontifigcomment">
														<span ng-bind=" i.count_driver" ></span>
													</span> -->
													<span class="" ng-if="i.count_driver != '0' && i.invoice == x.TB_order_order" ng-repeat="i in nontifigcomment" style="  display: inline-block; width: 20px; height: 20px; position: absolute; background: red; color: #fff;  margin-top: -45px;  border-radius: 50%; text-shadow: none; font-size: 13px; text-align: center;    line-height: 1.5;  margin-left: -40px;">
														<span ng-bind=" i.count_driver" ></span>
													</span>
													
											</td>
										</tr>
										<tr>
											
											

											<td width="20%" align="center" style="padding-top: 8px;padding: 14px 0px;" ng-disabled="x.datessnew ==2"  ng-click="openpopupdriverOP(x)" ng-if="x.TB_order_type == 'transfer'">
												<img src="images/callchat.png?v=<?=$cache;?>" width="35" align="absmiddle"><Br/>
												<span ng-if="flagcheck == 1">OP</span>
												<span ng-if="flagcheck == 2">โอพี</span>
												<span ng-if="flagcheck == 3">客服</span>
												<!-- <span class="length-statehomegraop" ng-if="i.count_op == '0' && i.invoice == x.TB_order_order" ng-repeat="i in nontifigcomment">
													<span ng-bind="x.count_op" ></span>
												</span> -->
												<span class="length-statehomeredop" ng-if="i.count_op != '0' && i.invoice == x.TB_order_order" ng-repeat="i in nontifigcomment">
													<span ng-bind="i.count_op" ></span>
												</span>
												
                                
											</td>
											<td width="20%" align="center" style="padding-top: 8px;padding: 14px 0px;" ng-click="openpopupdriverservice(x)" ng-disabled="x.datessnew ==2" data-toggle="modal" data-target="#popupdriverservice" ng-if="x.TB_order_type == 'transfer'">
												<img src="images/pluss.png?v=<?=$cache;?>" width="35" align="absmiddle" style="margin-top:-5px "><Br/>
												<span ng-if="flagcheck == 1">Add Service</span>

                                            <span ng-if="flagcheck == 2"  >เพิ่มบริการ</span>
                                            <span ng-if="flagcheck == 3"  >添加服务</span>
                                           <!--  <span class="length-statehomegraservice" ng-if="i.count_service == '0' && i.invoice == x.TB_order_order"  ng-repeat="i in nontifigcomment">
                                            	<span ng-bind="i.count_service"></span>
                                            </span> -->
                                            
                                            <span class="length-statehomeredservice" ng-if="i.count_service != '0' && i.invoice == x.TB_order_order"  ng-repeat="i in nontifigcomment">
                                            	<span ng-bind="i.count_service" ></span>
                                            </span>
                                            
                                
											</td>
											<td width="40" align="center" valign="" style="padding-right: 10px;" ng-click="getchatForvcher(x)" data-toggle="modal" data-target="#commentmodal">
												<img src="images/chats.png?v=<?=$cache;?>1" width="35" align="" style="">
												<img src="images/yes.png?v=<?=$cache;?>1"  align="" style="width: 20px;  position: absolute; margin-left: -12px;   margin-top: -7px;" ng-if="x.comment == 1">
												<img src="images/no.png?v=<?=$cache;?>1"  align="" style="width: 20px; position: absolute; margin-left: -12px;   margin-top: -7px;" ng-if="x.comment != 1">
												<Br/>
												<span ng-if="flagcheck == 1">Comment </span>
												<span ng-if="flagcheck == 2">ความคิดเห็น </span>
												<span ng-if="flagcheck == 3">评论</span>
											</td>
										</tr>
									</table>
								</div>  
							</td>
						</tr>
						<tr>
							<td align="center" valign="top"></td>
							<td  align="left" style="font-size: 17px" valign="top"></td>
							<td width="40" align="center" valign="top" style="padding-right: 10px;" >
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
</div> 
<div  id="footer"  class="footer"  ng-style="stylefooter" style="position: fixed;bottom: 0;">
		
		<div align="center" style=";font-size: 14px;padding-top: 4px;font-weight: 200" >
			<span  ng-if="flagcheck == 1" style="font-weight: 400">t-booking.com Travel Booking System</span>
			<span ng-if="flagcheck == 2"><span style="font-weight: 400">t-booking.com</span> ระบบจองการท่องเที่ยว</span>
			<span  ng-if="flagcheck == 3"><span style="font-weight: 400">t-booking.com</span> 旅游预订系统</span>
		</div>
		<div align="center" style="font-size: 14px;font-weight: 200">
			 <span  ng-if="flagcheck == 1" style="font-weight: 400">Real-time communication confirmation</span>
            <span ng-if="flagcheck == 2">(ใบยืนยัน)โต้ตอบแบบ<span style="font-weight: 400"> Real-time</span></span>
            <span  ng-if="flagcheck == 3">实时沟通确认单</span>
		</div>
		
	</div>