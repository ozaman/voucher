
<div id="home" style="background-color: #fff">
<?  include ("../../demo/mod/livechat/sub/popup/share_map.php");?> 
    <?  include ("../../demo/mod/livechat/sub/popup/share_map_realtime.php");?>   
    <?  include ("../../demo/mod/livechat/sub/popup/preview_map.php");?> 
    <?  include ("../../demo/mod/livechat/sub/popup/preview_map_realtime.php");?> 
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
			    
			    </ul>
				</td>
				<td width="3%"></td>
			</tr>
         
		</table>
	</div>
	<div style="padding: 3px 18px;text-shadow: none;margin-top: 48px;width: 100%"> 
		<table width="100%">
			<tr>
				<td colspan="2" style="" align="center">
					<span  ng-if="flagcheck == 1" style="font-size: 18px;">My Bookings</span>
					<span  ng-if="flagcheck == 2" style="font-size: 18px;">การจองของฉัน</span>
					<span  ng-if="flagcheck == 3" style="font-size: 18px;">我的预订</span>
					<span ng-bind="onholiday" style="font-size: 17px;"></span>
					<!-- <br>
					<span ng-bind="fffff/1000 | date:'yyyy-MM-dd HH:mm:ss'"></span> -->
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center" style="">
               
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
																<img src="images/driver.png?v=<?=$imcase;?>" width="30" align="absmiddle">
																<div ng-if="flagcheck == 1">Driver+Car</div>
																<div ng-if="flagcheck == 2">คนขับ+รถ</div>
																<div ng-if="flagcheck == 3">司机+车</div>

															</td>

															<td width="33%" align="center">
																<img src="images/callchat.png?v=<?=$imcase;?>" width="30" align="absmiddle">
																<div ng-if="flagcheck == 1">Service</div>
																<div ng-if="flagcheck == 2">บริการ</div>
																<div ng-if="flagcheck == 3">客服</div>
                                
															</td>
															<td width="33%" align="center">
																<img src="images/pluss.png?v=<?=$imcase;?>1" width="35" align="absmiddle">
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
												<img src="images/chats.png?v=<?=$imcase;?>" width="30" align="" style="">
											</td>
										</tr>
									</table>
                    
                    
								</td>
							</tr>
							<tr ><td colspan="7" style=" height:8px "></td>
							</tr>
						</table>
					</div>
             
				</td>
			</tr>
		</table>
		<div ng-repeat="x in voucherselect" ng-class="{evenhome: $even, oddhome: $odd}">
		<input type="hidden" name="vcidinfo" value="{{x.TB_order_order}}" id="vcclickinfohome"/>
							<input type="hidden" name="data" value="{{data}}" id="dataorderID"/>

							<input type="hidden" name="data" value="{{flagcheck}}" id="flagcheck"/>
							<div style="position: absolute; width: 35px; text-align: center; height: 35px;  background: #3b5998; border-radius: 8px 0px 45px 0px; line-height: 2; color: #fff;"><span ng-bind="$index+1"></span></div>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" >
			<tr>

				<td>

					<table width="100%" style="font-size: 17px;">

						<tr> 
							
							<td colspan="3" align="center" style="padding: 5px" >

							<div style="font-size: 17px; margin: 5px 24px; padding: 5px; color: #3b5998; border-bottom: 1px solid #3b5998;">
							<span ng-if="x.TB_order_type == 'transfer'">
								<span ng-if="flagcheck == 1" ng-bind="x.topic_en" ></span>
								<span ng-if="flagcheck == 2" ng-bind="x.topic_th" ></span>
								<span ng-if="flagcheck == 3" ng-bind="x.topic_cn" ></span>
							</span >
								
								<span ng-if="x.TB_order_type != 'transfer'">
									<span ng-if="flagcheck == 1" ng-bind="x.T_topic_en" ></span>
									<span ng-if="flagcheck == 2" ng-bind="x.T_topic_th" ></span>
									<span ng-if="flagcheck == 3" ng-bind="x.T_topic_cn" ></span>
								</span>
								

							</div>
							</td>
							<!-- <td colspan="3" align="center" style="padding: 5px" ng-if="x.TB_order_type != 'transfer'">
							<div style="font-size: 17px;margin: 5px 24px; padding: 5px; color: #3b5998; border-bottom: 1px solid #3b5998;">
								<span ng-if="flagcheck == 1" ng-bind="x.T_topic_en" ng-if="x.TB_order_type != 'transfer'"></span>
								<span ng-if="flagcheck == 2" ng-bind="x.T_topic_th" ng-if="x.TB_order_type != 'transfer'"></span>
								<span ng-if="flagcheck == 3" ng-bind="x.T_topic_cn" ng-if="x.TB_order_type != 'transfer'"></span>
								</div>
							</td> -->

						</tr>
						<tr>
							<td colspan="3">
								<table width="100%">
									<tr>
										<td width="10"></td>										
										<td width="25%" align="center" style=" ">
											<div class="main_iconhometyle" style="margin-right: -10px">
												<img src="images/icon_type/{{x.TB_order_type}}.png?v=<?=$imcase;?>1" width="35" >
											</div>
											
											<!-- <div style="text-align: center;">
												<span ng-if="x.TB_order_type == 'tour' && flagcheck == 1">Day Tour</span>
												<span ng-if="x.TB_order_type == 'tour' && flagcheck == 2">ทัวร์วันเดียว</span>
												<span ng-if="x.TB_order_type == 'tour' && flagcheck == 3">一日游</span>

												<span ng-if="x.TB_order_type == 'show' && flagcheck == 1">Ticket/Show</span>
												<span ng-if="x.TB_order_type == 'show' && flagcheck == 2">ตั๋ว/โชว์</span>
												<span ng-if="x.TB_order_type == 'show' && flagcheck == 3">表演/门票</span>

												<span ng-if="x.TB_order_type == 'transfer' && flagcheck == 1">Transfer</span>
												<span ng-if="x.TB_order_type == 'transfer' && flagcheck == 2">รถรับส่ง</span>
												<span ng-if="x.TB_order_type == 'transfer' && flagcheck == 3">车接送</span>

												<span ng-if="x.TB_order_type == 'golf' && flagcheck == 1">Golf</span>
												<span ng-if="x.TB_order_type == 'golf' && flagcheck == 2">กอล์ฟ</span>
												<span ng-if="x.TB_order_type == 'golf' && flagcheck == 3">高尔夫球</span>

												<span ng-if="x.TB_order_type == 'wedding' && flagcheck == 1">Wedding/Photo</span>
												<span ng-if="x.TB_order_type == 'wedding' && flagcheck == 2">เวดดิ้ง/ถ่ายภาพ</span>
												<span ng-if="x.TB_order_type == 'wedding' && flagcheck == 3">婚纱/拍照</span>

												<span ng-if="x.TB_order_type == 'boat' && flagcheck == 1">Charter Boat</span>
												<span ng-if="x.TB_order_type == 'boat' && flagcheck == 2">เรือเช่าเหมาลำ</span>
												<span ng-if="x.TB_order_type == 'boat' && flagcheck == 3">包船</span>

												<span ng-if="x.TB_order_type == 'package' && flagcheck == 1">Tour Package</span>
												<span ng-if="x.TB_order_type == 'package' && flagcheck == 2">แพ็คเกจทัวร์</span>
												<span ng-if="x.TB_order_type == 'package' && flagcheck == 3">旅游套餐</span>

												<span ng-if="x.TB_order_type == 'hotel' && flagcheck == 1">Hotel</span>
												<span ng-if="x.TB_order_type == 'hotel' && flagcheck == 2">โรงแรม</span>
												<span ng-if="x.TB_order_type == 'hotel' && flagcheck == 3">酒店</span>

												<span ng-if="x.TB_order_type == 'diving' && flagcheck == 1">Diving</span>
												<span ng-if="x.TB_order_type == 'diving' && flagcheck == 2">ดำน้ำ</span>
												<span ng-if="x.TB_order_type == 'diving' && flagcheck == 3">潜水</span>

												<span ng-if="x.TB_order_type == 'spa' && flagcheck == 1">Spa/Massage</span>
												<span ng-if="x.TB_order_type == 'spa' && flagcheck == 2">สปา/นวด</span>
												<span ng-if="x.TB_order_type == 'spa' && flagcheck == 3">Spa/按摩</span>

												<span ng-if="x.TB_order_type == 'plane' && flagcheck == 1">Plane</span>
												<span ng-if="x.TB_order_type == 'plane' && flagcheck == 2">เครื่องบิน</span>
												<span ng-if="x.TB_order_type == 'plane' && flagcheck == 3">飞机</span>
											</div> -->
										</td>
										
										<td style="padding: 0" colspan="2">
											<table width="100%">
												<tr>
													<td align="left" data-toggle="modal" data-target="#voucherweb" ng-click="voucherdialog(x)" valign="top">	
														<img src="images/yes.png?v=<?=$imcase;?>1"  align="" style="width: 18px; margin-top:-3px;    margin-right: 5px;" ng-if="x.TB_order_status != 'NEW' && x.TB_order_status != 'CANCEL'" >
														<i class="fa fa-hourglass-half" aria-hidden="true" style="display: inline-block; margin-top:-3px; margin-right: 5px;color: #d26200;font-size: 20px"  ng-if="x.TB_order_status == 'NEW' "  ></i>
														<!-- <img src="images/no.png?v=<?=$imcase;?>1" width="20"  align="" style="display: inline-block; margin-top:-3px; margin-right: 10px;"  ng-if="x.TB_order_status == 'NEW' "  > -->
														<i class="fa fa-hourglass-half" aria-hidden="true" style="display: inline-block; margin-top:-3px; margin-right: 5px;color: #d26200;font-size: 20px"  ng-if="x.TB_order_status == 'CANCEL' " ></i>
														<!-- <img src="images/no.png?v=<?=$imcase;?>1" width="20"  align="" style="display: inline-block; margin-top:-3px; margin-right: 10px;"  ng-if="x.TB_order_status == 'CANCEL' "> -->
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
														<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 3 && sub_reject != 2 && sub_confirm != 1">取消</span>/<span >VC</span>
											                <!-- <span  ng-if="flagcheck == 2">เลขวอเชอร์</span>
											                <span  ng-if="flagcheck == 3">凭证编号</span> -->
											                <span  ng-bind="':'+x.TB_order_order" style="margin-left: -2px;"></span>
														</td>
												</tr>
												<tr> 
													<td align="left" style="padding-top: 4px;"  valign="bottom" >
														 
														<img src="images/yes.png?v=<?=$imcase;?>1" width="18" align="" style="display: inline-block; margin-top:-3px; margin-right: 5px;"  ng-if="x.datessnew == 1" >
														<i class="fa fa-hourglass-half" aria-hidden="true" style="display: inline-block; margin-top:-3px; margin-right: 5px;color: #d26200;font-size: 20px"  ng-if="x.datessnew == 2"  ></i>
														<!-- <img src="images/no.png?v=<?=$imcase;?>1" width="20"  align="" style="display: inline-block; margin-top:-3px; margin-right: 10px;"  ng-if="x.datessnew == 2"  > -->
															<span ng-if="flagcheck == 1">Used</span>
															<span ng-if="flagcheck == 2">ใช้</span>
															<span ng-if="flagcheck == 3">使用</span>
														 &nbsp;<span ng-bind="x.ondatesplit+'/'+x.airout_h +':'+ x.airout_m"></span>
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
										<td width="10"></td>
										<td align="center" style="padding-top: 8px;padding: 0;" width="32%" ng-click="myinfo(x,$index)">
											<div class="main_iconhome">
					                          <i class="fa  fa fa-users " style="font-size:25px;color: #FFF; "  ></i>
					                         </div>
					                        <div ng-if="flagcheck == 1">Information</div>
					                        <div ng-if="flagcheck == 2">ข้อมูลฉัน</div>
					                        <div ng-if="flagcheck == 3">我的资料</div>
										</td>
										<td align="center" style="padding-top: 8px;padding: 0" width="32%" ng-click="getbookinfomation(x,$index);">							
												<div class="main_iconhome" ><img src="images/boolin.png?v=<?=$imcase;?>" width="30" style="margin-top: -12px;">
												<img src="images/yes.png?v=<?=$imcase;?>1"  align="" style="width: 20px; position: absolute; border-radius: 50%;    border: 2px solid #FFF;" ng-if="x.room_number.length > 0">
												<div ng-if="x.dateCompare == 'use' && x.room_number.length <= 0" style=" color: #FF9800; font-size: 28px;  width: 25px; height: 25px; position: absolute; background: #fff; border-radius: 50%; text-shadow: none; font-size: 16px; text-align: center; line-height: 1.3;border: 1px solid #3b5998;display: inline-block;"><i class="fa fa-bell faa-ring animated" aria-hidden="true" style=" "  ></i></div>

												</div>
												<!-- <img src="images/icon_type/{{x.TB_order_type}}.png" width="40" ng-if="x.TB_order_type == 'tour'">
												<img src="images/icon_type/{{x.TB_order_type}}.png" width="40" ng-if="x.TB_order_type == 'show'"> -->
												<div ng-if="flagcheck == 1"  >Details</div>
				                                <div ng-if="flagcheck == 2"  >ข้อมูลจอง</div>
				                                <div ng-if="flagcheck == 3"  >订单详情</div>
											</td>
											<!-- <td width="32%" align="center" style="padding-top: 8px;padding: 0;" ng-disabled="x.datessnew ==2"  ng-click="openpopupdriverOP(x)" ng-if="x.TB_order_type != 'transfer'">
												<div class="main_iconhome" id="{{x.TB_order_order}}" onclick="chatTOop(this.id)"><img src="images/callchat.png?v=<?=$imcase;?>" width="30" align="" style="margin-top: -12px;">
												</div>
												<span ng-if="flagcheck == 1">OP</span>
												<span ng-if="flagcheck == 2">โอพี</span>
												<span ng-if="flagcheck == 3">客服</span>
												
												<span class="length-statehomeredop" ng-if="i.count_op != '0' && i.invoice == x.TB_order_order" ng-repeat="i in nontifigcomment">
													<span ng-bind="i.count_op" ></span>
												</span>
												
                                
											</td> -->
											<!-- ng-disabled="x.datessnew ==2" -->
											<td width="32%" align="center" style="padding-top: 8px;padding: 0"    >
											<input type="hidden"  value="{{x.TB_order_order}}" ng-model="orderChat">	
											<div class="main_iconhome"  id="{{x.TB_order_order}}" onclick="opennavi(this.id)"  ng-click="navi(x)">
												<i class="fa fa-location-arrow" id="fa-location-arrow" aria-hidden="true" style="font-size: 30px;color: #fff"></i>
											</div>
											<style>
												.fa-location-arrow{
													-ms-transform: rotate(-45deg); /* IE 9 */
							                        -webkit-transform: rotate(-45deg); /* Chrome, Safari, Opera */
							                        transform: rotate(-45deg);
												}
											</style>						
												<span ng-if="flagcheck == 1">Navigation </span>
												<span ng-if="flagcheck == 2">นำทาง </span>
												<span ng-if="flagcheck == 3">导航</span>
											</td>
											
										<!-- 	<td width="32%" align="center" style="padding-top: 8px;padding: 0"  ng-disabled="x.datessnew ==2" ng-click="openpopupdriverinfo(x);openpopuptodriver(x.TB_order_order);testss()"  >
												
												<div class="main_iconhome"  id="{{x.TB_order_order}}" onclick="chatTOdriver(this.id)">

											
									<img src="images/driver.png?v=<?=$imcase;?>" width="30" align="" style="margin-top: -12px;">
												<div class="" ng-if="i.count_driver != '0' && i.invoice == x.TB_order_order" ng-repeat="i in nontifigcomment" style="  display: inline-block; width: 20px; height: 20px; position: absolute; background: red; color: #fff;    border-radius: 50%; text-shadow: none; font-size: 13px; text-align: center;    line-height: 1.5;  border:2px solid #fff ">
														<span ng-bind=" i.count_driver" ></span>
												</div>
												</div>
													<span ng-if="flagcheck == 1">Contact</span>
													<span ng-if="flagcheck == 2">ติดต่อ</span>
													<span ng-if="flagcheck == 3">联系</span> 
													
													
													
											</td> -->
											<td width="10"></td>
										</tr>
										<tr >
											
											
											<td width="10"></td>
											<!-- <td width="32%" align="center" style="padding-top: 8px;padding: 0;" ng-disabled="x.datessnew ==2"  ng-click="openpopupdriverOP(x)" ng-if="x.TB_order_type == 'transfer'">
												<div class="main_iconhome" id="{{x.TB_order_order}}" onclick="chatTOop(this.id)"><img src="images/callchat.png?v=<?=$imcase;?>" width="30" style="margin-top: -15px;" align="">
												<span ng-if="i.count_op != '0' && i.invoice == x.TB_order_order" ng-repeat="i in nontifigcomment" style="  display: inline-block; width: 20px; height: 20px; position: absolute; background: red; color: #fff;  border-radius: 50%; text-shadow: none; font-size: 13px; text-align: center;    line-height: 1.5; border:2px solid #fff ">
													<span ng-bind="i.count_op" ></span>
												</span>
												</div>
												<span ng-if="flagcheck == 1">OP</span>
												<span ng-if="flagcheck == 2">โอพี</span>
												<span ng-if="flagcheck == 3">客服</span>
												
												
												
                                
											</td> -->
											<td width="32%" align="center" style="padding-top: 8px;padding: 0"  ng-disabled="x.datessnew ==2" ng-click="openContact(x);openpopupdriverinfo(x)" data-toggle="modal" data-target="#sopencontact">
												<!-- data-toggle="modal" data-target="#chatdrivermodal" -->
												<div class="main_iconhome">

												<i class="fa fa-comments" aria-hidden="true" style="font-size: 30px;color: #fff"></i>
												
												<!-- <div class="" ng-if="i.count_driver != '0' && i.invoice == x.TB_order_order" ng-repeat="i in nontifigcomment" style="  display: inline-block; width: 20px; height: 20px; position: absolute; background: red; color: #fff;    border-radius: 50%; text-shadow: none; font-size: 13px; text-align: center;    line-height: 1.5;  border:2px solid #fff ">
														<span ng-bind=" i.count_driver" ></span>
												</div> -->
												</div>
													<span ng-if="flagcheck == 1">Contact</span>
													<span ng-if="flagcheck == 2">ติดต่อ</span>
													<span ng-if="flagcheck == 3">联系</span> 
													
													
													
											</td>
											<td width="32%" align="center" style="padding-top: 8px;padding: 0;" ng-click="openpopupdriverservice(x,$index)" ng-disabled="x.datessnew ==2" data-toggle="modal" data-target="#popupdriverservice" ng-if="x.TB_order_type == 'transfer'">
												<div class="main_iconhome"><img src="images/pluss.png?v=<?=$imcase;?>" width="30" align="absmiddle" style="margin-top:-15px ">
												<span class="" ng-if="i.count_service != '0' && i.invoice == x.TB_order_order"  ng-repeat="i in nontifigcomment" style="  display: inline-block; width: 20px; height: 20px; position: absolute; background: red; color: #fff;    border-radius: 50%; text-shadow: none; font-size: 13px; text-align: center;    line-height: 1.5;border:2px solid #fff ">
                                            	<span ng-bind="i.count_service" ></span>
                                            </span></div>
												<span ng-if="flagcheck == 1">Add Service</span>

                                            <span ng-if="flagcheck == 2"  >เพิ่มบริการ</span>
                                            <span ng-if="flagcheck == 3"  >添加服务</span>
                                           <!--  <span class="length-statehomegraservice" ng-if="i.count_service == '0' && i.invoice == x.TB_order_order"  ng-repeat="i in nontifigcomment">
                                            	<span ng-bind="i.count_service"></span>
                                            </span> -->
                                            
                                            
                                            
                                
											</td>
											<td width="32%" align="center" valign="" style="padding-top: 8px;padding: 0;" ng-click="getchatForvcher(x,$index)" data-toggle="modal" data-target="#commentmodal">
												<div class="main_iconhome"><img src="images/chats.png?v=<?=$imcase;?>1" width="30" align="" style="margin-top: -15px;">
												<img src="images/yes.png?v=<?=$imcase;?>1"  align="" style="width: 20px; position: absolute; border-radius: 50%;    border: 2px solid #FFF;" ng-if="x.comment == 1">
												<!-- <div ng-if="x.comment != 1" style="display: inline-block; width: 20px; height: 20px; position: absolute; background: #d26200; color: #fff; border-radius: 50%; text-shadow: none; font-size: 13px; text-align: center;    line-height: 1.5;  border:2px solid #fff ">
												<i class="fa fa-hourglass-half" aria-hidden="true" style="position:absolute;border-radius: 50%;   border: 2px solid #FFF; font-size: 20px;"   ></i></div> -->
												<div ng-if="x.comment != 1 && x.datessnew == 1" style=" color: #FF9800; font-size: 28px;  width: 25px; height: 25px; position: absolute; background: #fff; border-radius: 50%; text-shadow: none; font-size: 16px; text-align: center; line-height: 1.3;border: 1px solid #3b5998;display: inline-block;"><i class="fa fa-bell faa-ring animated" aria-hidden="true" style=" "></i></div>
												<!-- <img src="images/no.png?v=<?=$imcase;?>1"  ng-if="x.comment != 1" align="" style="width: 20px; position:absolute;border-radius: 50%;   border: 2px solid #FFF;" > --></div>
												
												
												<span ng-if="flagcheck == 1">Comment </span>
												<span ng-if="flagcheck == 2">ความคิดเห็น </span>
												<span ng-if="flagcheck == 3">评论</span>
											</td>
											
											<td width="10"></td>
										</tr>
										<!-- <td width="32%" align="center" valign="" style="padding-top: 8px;padding: 0;" ng-click="navigation(x,$index)" data-toggle="modal" data-target="#Navigator" ng-if="x.TB_order_type != 'transfer'" >
												<div class="main_iconhome"><img src="images/chats.png?v=<?=$imcase;?>1" width="30" align="" style="margin-top: -15px;">
												
												</div>
												
												
												<span ng-if="flagcheck == 1">Navigate </span>
												<span ng-if="flagcheck == 2">นำทาง </span>
												<span ng-if="flagcheck == 3">带领</span>
											</td>
											<td width="10"></td>
										</tr> -->
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


<div id="sopencontact" class="modal fade" role="dialog" >
  	<div class="modal-dialog" style="    margin: 180px 3%;" align="center">
    	<div class="modal-content" style="">
      		<div class="modal-body" style="padding: 15px 0;">
      			<table width="100%" style="font-size: 17px;color: rgba(97, 97, 97, 0.84);">
				<tr>
					<td width="10"></td>		
					<td width="32%" align="center" style="padding-top: 8px;padding: 0"  ng-disabled="x.datessnew ==2" data-dismiss="modal" ng-if="orderType == 'transfer'" >
						<input type="hidden" name="" value="{{orderChat}}" ng-model="orderChat">	
						<div class="main_iconhome"  id="{{orderChat}}" onclick="chatTOdriver(this.id)">
							<img src="images/driver.png?v=<?=$imcase;?>" width="30" align="" style="margin-top: -12px;">
						<div class="" ng-if="i.count_driver != '0' && i.invoice == x.TB_order_order" ng-repeat="i in nontifigcomment" style="  display: inline-block; width: 20px; height: 20px; position: absolute; background: red; color: #fff;    border-radius: 50%; text-shadow: none; font-size: 13px; text-align: center;    line-height: 1.5;  border:2px solid #fff ">
									<span ng-bind=" i.count_driver" ></span>
						</div>
						</div>

						<span ng-if="flagcheck == 1">Driver</span>
						<span ng-if="flagcheck == 2">คนขับ</span>
						<span ng-if="flagcheck == 3">司机</span>
					</td>
					<!-- <td width="32%" align="center" style="padding-top: 8px;padding: 0"  ng-disabled="x.datessnew ==2" data-dismiss="modal" ng-if="orderiHavetransfer == 1 && orderType != 'transfer'" >
						<input type="hidden" name="" value="{{orderChat}}" ng-model="orderChat">	
						<div class="main_iconhome"  id="{{orderChat}}" onclick="chatTOdriver(this.id)">
							<img src="images/driver.png?v=<?=$imcase;?>" width="30" align="" style="margin-top: -12px;">
						<div class="" ng-if="i.count_driver != '0' && i.invoice == x.TB_order_order" ng-repeat="i in nontifigcomment" style="  display: inline-block; width: 20px; height: 20px; position: absolute; background: red; color: #fff;    border-radius: 50%; text-shadow: none; font-size: 13px; text-align: center;    line-height: 1.5;  border:2px solid #fff ">
									<span ng-bind=" i.count_driver" ></span>
						</div>
						</div>

						<span ng-if="flagcheck == 1">Driver</span>
						<span ng-if="flagcheck == 2">คนขับ</span>
						<span ng-if="flagcheck == 3">司机</span>
					</td> -->
					<td width="32%" align="center" style="padding-top: 8px;padding: 0;" ng-disabled="x.datessnew ==2"  data-dismiss="modal">
												<!-- ng-click="openpopupdriverOP(x)" -->
						<div class="main_iconhome" id="{{orderChat}}" onclick="chatTOop(this.id)"><img src="images/callchat.png?v=<?=$imcase;?>" width="30" style="margin-top: -15px;" align="">
							<span ng-if="i.count_op != '0' && i.invoice == x.TB_order_order" ng-repeat="i in nontifigcomment" style="  display: inline-block; width: 20px; height: 20px; position: absolute; background: red; color: #fff;  border-radius: 50%; text-shadow: none; font-size: 13px; text-align: center;    line-height: 1.5; border:2px solid #fff ">
								<span ng-bind="i.count_op" ></span>
							</span>
							</div>
							<span ng-if="flagcheck == 1">OP</span>
							<span ng-if="flagcheck == 2">โอพี</span>
							<span ng-if="flagcheck == 3">客服</span>
					</td>						
					
						<td width="10"></td>
					</tr>
					<tr>
												<td height="5" colspan="4" style="border-top: 2px solid #f0f0f0; "></td>
											</tr>
								<tr>
					<tr>
						<td colspan="4">
							<table width="100%">
								<tr ng-if="checkarea == 'In' && checktour == 'transfer'">
									<td align="center" data-toggle="modal" data-target="#flightdelaydrivermodal" width="33%">
													<img src="img/delayf.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />		
													<span ng-if="flagcheck == 1" >flight delay</span>
													<span ng-if="flagcheck == 2">เที่ยวบินล่าช้า </span>
													<span ng-if="flagcheck == 3">航班延误</span>
												</td>
												<td width="10"></td>
												<td align="center" data-toggle="modal" data-target="#changedrivermodal" width="33%">
													<img src="img/change.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													<span ng-if="flagcheck == 1" >Change flight</span>
													<span ng-if="flagcheck == 2">เปลี่ยนเที่ยวบิน </span>
													<span ng-if="flagcheck == 3">换航班</span>
													
												</td>
												
												<td width="10"></td>
												<td width="33%"  height="61" align="center" ng-click="popup_goto_beforefirst(vdIDclickinfo)" data-toggle="modal" data-target="#beforedrivermodal">
													<img src="images/usercar_befor.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;"
													>
													<br/>
													<!-- <div ng-click="blockBeforepopup(state4);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Before </span>
													<span ng-if="flagcheck == 2">ใช้ล่วงหน้า </span>
													<span ng-if="flagcheck == 3">提前使用</span>
													<!-- <div ng-bind="state4.length" class="length-state"></div> -->
													<!-- </div> -->
                                     
												</td>
									
								</tr>
								
								<tr ng-if="checkarea != 'In' && checktour != 'transfer'">
												<td width="33%"  height="61" align="center" ng-click="popup_goto_beforefirst(vdIDclickinfo)" data-toggle="modal" data-target="#beforedrivermodal">
													<img src="images/usercar_befor.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;"
													>
													<br/>
													<!-- <div ng-click="blockBeforepopup(state4);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Before </span>
													<span ng-if="flagcheck == 2">ใช้ล่วงหน้า </span>
													<span ng-if="flagcheck == 3">提前使用</span>
													<!-- <div ng-bind="state4.length" class="length-state"></div> -->
													<!-- </div> -->
                                     
												</td>
												<td width="10" ></td>
												<td width="33%" align="center" ng-click="popup_goto_delayfirst(vdIDclickinfo)" data-toggle="modal" data-target="#delaydrivermodal">
                                  
													<img src="images/usercar_after.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Delay </span>
													<span ng-if="flagcheck == 2">เลื่อนการใช้ </span>
													<span ng-if="flagcheck == 3">推迟使用</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
                                  
												</td>
												
												
												<td width="10" ></td>
												<td width="33%" align="center" ng-click="popupallchat(vdIDclickinfo);popup_goto_waitfirst(vdIDclickinfo)" data-toggle="modal" data-target="#waitdrivermodal">
													<img src="images/clock_wait.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													<!-- <div ng-click="blockBeforepopup(state3);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Waiting </span>
													<span ng-if="flagcheck == 2">ฉันรออยู่แล้ว </span>
													<span ng-if="flagcheck == 3">我已在等</span>
													<!-- <span ng-bind="state3.length" class="length-state"></span> -->
													<!-- </div> -->
                                 
												</td>
												
												
								</tr>
								
								<tr ng-if="checkarea == 'In' && checktour == 'transfer'">
												
												<td width="33%" align="center" ng-click="popup_goto_delayfirst(vdIDclickinfo)" data-toggle="modal" data-target="#delaydrivermodal">
                                  
													<img src="images/usercar_after.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Delay </span>
													<span ng-if="flagcheck == 2">เลื่อนการใช้ </span>
													<span ng-if="flagcheck == 3">推迟使用</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
                                  
												</td>
												
												
												<td width="10" ></td>
												<td width="33%" align="center" ng-click="popupallchat(vdIDclickinfo);popup_goto_waitfirst(vdIDclickinfo)" data-toggle="modal" data-target="#waitdrivermodal">
													<img src="images/clock_wait.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													<!-- <div ng-click="blockBeforepopup(state3);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Waiting </span>
													<span ng-if="flagcheck == 2">ฉันรออยู่แล้ว </span>
													<span ng-if="flagcheck == 3">我已在等</span>
													<!-- <span ng-bind="state3.length" class="length-state"></span> -->
													<!-- </div> -->
                                 
												</td>
												<td width="10" ></td>
												<td width="30%" align="center" data-toggle="modal" data-target="#location" ng-click="()">
                                  
													<i class="fa fa-map-marker" aria-hidden="true" style="font-size: 45px;    color: #3b5998;"></i>
													<br />





													<div ng-click=""> 
													
													<span ng-if="flagcheck == 1" >Location</span>
													<span ng-if="flagcheck == 2">ตำแหน่ง </span>
													<span ng-if="flagcheck == 3">位置</span>
													
                                  
												</td>
												
												
												
								</tr>
								
								<tr ng-if="checkarea != 'In' && checktour == 'transfer'">
												<td width="33%"  height="61" align="center" ng-click="popup_goto_beforefirst(vdIDclickinfo)" data-toggle="modal" data-target="#beforedrivermodal">
													<img src="images/usercar_befor.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;"
													>
													<br/>
													<!-- <div ng-click="blockBeforepopup(state4);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Before </span>
													<span ng-if="flagcheck == 2">ใช้ล่วงหน้า </span>
													<span ng-if="flagcheck == 3">提前使用</span>
													<!-- <div ng-bind="state4.length" class="length-state"></div> -->
													<!-- </div> -->
                                     
												</td>
												<td width="10" ></td>
												<td width="33%" align="center" ng-click="popup_goto_delayfirst(vdIDclickinfo)" data-toggle="modal" data-target="#delaydrivermodal">
                                  
													<img src="images/usercar_after.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Delay </span>
													<span ng-if="flagcheck == 2">เลื่อนการใช้ </span>
													<span ng-if="flagcheck == 3">推迟使用</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
                                  
												</td>
												
												
												<td width="10" ></td>
												<td width="33%" align="center" ng-click="popupallchat(vdIDclickinfo);popup_goto_waitfirst(vdIDclickinfo)" data-toggle="modal" data-target="#waitdrivermodal">
													<img src="images/clock_wait.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													<!-- <div ng-click="blockBeforepopup(state3);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Waiting </span>
													<span ng-if="flagcheck == 2">ฉันรออยู่แล้ว </span>
													<span ng-if="flagcheck == 3">我已在等</span>
													<!-- <span ng-bind="state3.length" class="length-state"></span> -->
													<!-- </div> -->
                                 
												</td>
												
												
								</tr>
								<tr ng-if="checkarea == 'In' && checktour != 'transfer'">
												<td width="33%"  height="61" align="center" ng-click="popup_goto_beforefirst(vdIDclickinfo)" data-toggle="modal" data-target="#beforedrivermodal">
													<img src="images/usercar_befor.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;"
													>
													<br/>
													<!-- <div ng-click="blockBeforepopup(state4);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Before </span>
													<span ng-if="flagcheck == 2">ใช้ล่วงหน้า </span>
													<span ng-if="flagcheck == 3">提前使用</span>
													<!-- <div ng-bind="state4.length" class="length-state"></div> -->
													<!-- </div> -->
                                     
												</td>
												<td width="10" ></td>
												<td width="33%" align="center" ng-click="popup_goto_delayfirst(vdIDclickinfo)" data-toggle="modal" data-target="#delaydrivermodal">
                                  
													<img src="images/usercar_after.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Delay </span>
													<span ng-if="flagcheck == 2">เลื่อนการใช้ </span>
													<span ng-if="flagcheck == 3">推迟使用</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
                                  
												</td>
												
												
												<td width="10" ></td>
												<td width="33%" align="center" ng-click="popupallchat(vdIDclickinfo);popup_goto_waitfirst(vdIDclickinfo)" data-toggle="modal" data-target="#waitdrivermodal">
													<img src="images/clock_wait.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													<!-- <div ng-click="blockBeforepopup(state3);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Waiting </span>
													<span ng-if="flagcheck == 2">ฉันรออยู่แล้ว </span>
													<span ng-if="flagcheck == 3">我已在等</span>
													<!-- <span ng-bind="state3.length" class="length-state"></span> -->
													<!-- </div> -->
                                 
												</td>
												
												
								</tr>
								
								<tr ng-if="checkarea == 'In' && checktour == 'transfer'">
									
												<td width="30%" align="center" ng-click="" data-toggle="modal" data-target="#onthecardrivermodal" ng-click="onthecardrivermodal()">
                                  
													<i class="fa fa-car" style="color: #3b5998;font-size: 35px"></i>
													<br />



													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >On the car</span>
													<span ng-if="flagcheck == 2">อยู่บนรถ </span>
													<span ng-if="flagcheck == 3">在车上</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
                                  
												</td>
												
												<td width="10" ></td>
												<td width="30%" align="center"  data-toggle="modal" data-target="#restaurantdrivermodal" ng-click="restaurantdrivermodal()">
                                  
													<i class="fa fa-cutlery" style="color: #3b5998;font-size: 35px"></i>
													<br />
													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->





													<span ng-if="flagcheck == 1" >Restaurant </span>
													<span ng-if="flagcheck == 2">ร้านอาหาร </span>
													<span ng-if="flagcheck == 3">餐厅</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
                                  
												</td>
												<td width="10" ></td>
												<td width="30%" align="center"  data-toggle="modal" data-target="#attractiondrivermodal" ng-click="attractiondrivermodal()">
                                  
													<i class="fa fa-street-view" style="color: #3b5998;font-size: 35px"></i>
													<br />





													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Attractions</span>
													<span ng-if="flagcheck == 2">แหล่งท่องเที่ยว </span>
													<span ng-if="flagcheck == 3">景点</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
                                  
												</td>	
												
												
												
								</tr>
								<tr ng-if="checkarea != 'In' && checktour == 'transfer'">
												<td width="30%" align="center" data-toggle="modal" data-target="#location" ng-click="()">
                                  
													<i class="fa fa-map-marker" aria-hidden="true" style="font-size: 45px;    color: #3b5998;"></i>
													<br />





													<div > 
													
													<span ng-if="flagcheck == 1" >Location</span>
													<span ng-if="flagcheck == 2">ตำแหน่ง </span>
													<span ng-if="flagcheck == 3">位置</span>
													</div>
													
                                  
												</td>
												<td width="10" ></td>
												<td width="30%" align="center"  data-toggle="modal" data-target="#onthecardrivermodal" ng-click="onthecardrivermodal()">
                                  
													<i class="fa fa-car" style="color: #3b5998;font-size: 35px"></i>
													<br />



													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >On the car</span>
													<span ng-if="flagcheck == 2">อยู่บนรถ </span>
													<span ng-if="flagcheck == 3">在车上</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
                                  
												</td>
												<td width="10" ></td>
												<td width="30%" align="center" data-toggle="modal" data-target="#restaurantdrivermodal" ng-click="restaurantdrivermodal()">
                                  
													<i class="fa fa-cutlery" style="color: #3b5998;font-size: 35px"></i>
													<br />
													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->





													<span ng-if="flagcheck == 1" >Restaurant </span>
													<span ng-if="flagcheck == 2">ร้านอาหาร </span>
													<span ng-if="flagcheck == 3">餐厅</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
                                  
												</td>
												
												
												
								</tr>
								<tr ng-if="checkarea != 'In' && checktour == 'transfer'">
										
										<td width="30%" align="center"  data-toggle="modal" data-target="#attractiondrivermodal" ng-click="attractiondrivermodal()">
                                  
													<i class="fa fa-street-view" style="color: #3b5998;font-size: 35px"></i>
													<br />





													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Attractions</span>
													<span ng-if="flagcheck == 2">แหล่งท่องเที่ยว </span>
													<span ng-if="flagcheck == 3">景点</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
                                  
												</td>		
								</tr>


								<!-- ******************************TOUR******************************* -->
								<tr ng-if="checktour != 'transfer'">
												<td width="30%" align="center" data-toggle="modal" data-target="#location" ng-click="()">
                                  
													<i class="fa fa-map-marker" aria-hidden="true" style="font-size: 45px;    color: #3b5998;"></i>
													<br />





													<div ng-click=""> 
													
													<span ng-if="flagcheck == 1" >Location</span>
													<span ng-if="flagcheck == 2">ตำแหน่ง </span>
													<span ng-if="flagcheck == 3">位置</span>
													
                                  
												</td>
												<td width="10" ></td>
												<td width="30%" align="center" data-toggle="modal" data-target="#onthecardrivermodal" ng-click="onthecardrivermodal()">
                                  
													<i class="fa fa-car" style="color: #3b5998;font-size: 35px"></i>
													<br />



													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >On the car</span>
													<span ng-if="flagcheck == 2">อยู่บนรถ </span>
													<span ng-if="flagcheck == 3">在车上</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
                                  
												</td>
												<td width="10" ></td>
												<td width="30%" align="center"  data-toggle="modal" data-target="#restaurantdrivermodal" ng-click="restaurantdrivermodal()" >
                                  
													<i class="fa fa-cutlery" style="color: #3b5998;font-size: 35px"></i>
													<br />
													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->





													<span ng-if="flagcheck == 1" >Restaurant </span>
													<span ng-if="flagcheck == 2">ร้านอาหาร </span>
													<span ng-if="flagcheck == 3">餐厅</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
                                  
												</td>
												
												
												
								</tr>
								<tr ng-if="checktour != 'transfer'">
										
										<td width="30%" align="center"  data-toggle="modal" data-target="#attractiondrivermodal" ng-click="attractiondrivermodal()">
                                  
													<i class="fa fa-street-view" style="color: #3b5998;font-size: 35px"></i>
													<br />





													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Attractions</span>
													<span ng-if="flagcheck == 2">แหล่งท่องเที่ยว </span>
													<span ng-if="flagcheck == 3">景点</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
                                  
												</td>		
								</tr>
								<!-- <tr>
									<td width="30%" align="center" data-toggle="modal" data-target="#attractiondrivermodal" ng-click="attractiondrivermodal()">
                                  
													<img src="img/attraction.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />





													<div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> 
													<span ng-if="flagcheck == 1" style="font-size: 18px;">Product recommend</span>
						<span ng-if="flagcheck == 2" style="font-size: 18px;">โปรดักแนะ </span>
						<span ng-if="flagcheck == 3" style="font-size: 18px;">推荐商品</span>
													<span ng-if="flagcheck == 1" >Attractions</span>
													<span ng-if="flagcheck == 2">แหล่งท่องเที่ยว </span>
													<span ng-if="flagcheck == 3">景点</span>
													
                                  
												</td>
								</tr> -->
								<!-- <tr ng-if="checkarea == 'In' && checktour != 'transfer'">
												
												
												<td align="center"  ng-click="popuppopupallhitory(vdIDclickinfo)" data-toggle="modal" data-target="#history">
												
												<img src="images/allhis.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;"   ><br>

													<span ng-if="flagcheck == 1">All history</span>
													<span ng-if="flagcheck == 2">ประวัติแชท</span>
													<span ng-if="flagcheck == 3">所有历史</span>
													<div class="length-state" ng-bind="state1.length+state2.length+state3.length+state4.length"></div> 
												
												</td>
								</tr> -->
								<!-- <tr ng-if="checkarea != 'In' && checktour == 'transfer'">
												
												
												<td align="center"  ng-click="popuppopupallhitory(vdIDclickinfo)" data-toggle="modal" data-target="#history">
												
												<img src="images/allhis.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;"   ><br>

													<span ng-if="flagcheck == 1">All history</span>
													<span ng-if="flagcheck == 2">ประวัติแชท</span>
													<span ng-if="flagcheck == 3">所有历史</span>
													<div class="length-state" ng-bind="state1.length+state2.length+state3.length+state4.length"></div> 
												
												</td>
								</tr> -->
								<!-- <tr ng-if="checkarea != 'In' && checktour != 'transfer'">
												
												
												<td align="center"  ng-click="popuppopupallhitory(vdIDclickinfo)" data-toggle="modal" data-target="#history">
												
												<img src="images/allhis.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;"   ><br>

													<span ng-if="flagcheck == 1">All history</span>
													<span ng-if="flagcheck == 2">ประวัติแชท</span>
													<span ng-if="flagcheck == 3">所有历史</span>
													<div class="length-state" ng-bind="state1.length+state2.length+state3.length+state4.length"></div>
												
												</td>
								</tr> -->
							</table>
						</td>
												
					</tr>						
				</table>
      		</div>
    	</div>
  	</div>
</div>

<div id="sopennavi" class="modal fade" role="dialog" >
	<div class="back-full-popup" style="background-color: #3b5998">
	    <table width="100%" border="0" cellspacing="0" cellpadding="0">
		  	<tr>
		    <td width="40">
		    	<div id="btn_close_chat_preview_map_realtime" data-dismiss="modal" ng-click="test()">
		    		<i class="fa fa-arrow-circle-left" style="font-size:22px; color:#FFFFFF " > </i>
		    	</div>
		    </td>
		  	<td>
		  		<div style="font-size:18px; color:#FFFFFF " id="head_full_popup">ดูตำแหน่ง</div>
		  	</td>
		    <td width="50" align="right" >
		    	<div class="head_full_popup_icon" style="font-size:18px; color:#3b5998;background-color: #ffffff;border-radius: 8px;
    text-align: center;" id="head_full_popup_icon" ng-click="maskMap()" ng-if="updateMap == 0"><i class="fa  fa-map-marker " align="center"></i></div></td>
		  	</tr>
		</table>
	</div>
  	<div class="modal-dialog" style="margin: 0;width: 100%;height: 100%">
    	<div class="modal-content" style="height: 100%">
      		<div class="modal-body" style="height: 100%;padding: 0">
      			<iframe width="100%"  height="92%"  frameborder="0"  ng-src="{{iframe.navilink | trusted}}" allowfullscreen style="margin-top: 50px"></iframe> 
			</div>
		</div>
	</div>	
</div>
    	</div>
  	</div>
</div>
<div id="angularload" class="modal fade" role="dialog" >
  <div class="modal-dialog" style="margin: 220px 3%;" id="popnavi">

    <!-- Modal content-->
    <div class="modal-content">
      <!-- data-toggle="modal" data-target="#sopennavi" -->
      <div class="modal-body" style="padding: 0">
      <div style="padding: 25px; background: #fff;  width: 100%;z-index: 1200;border-radius: 8px 8px 0 0;">
      <i class="back_close " data-dismiss="modal" style="z-index: 1201; margin-top: 5px; position: absolute;right: 0;    top: 0;">&#10006</i>
      		
      </div>
        	<div id="angularload-link"></div>
        	<div style="padding:0 10px;font-size: 18px;" >
        		<div ng-repeat="x in goPlate" style="padding: 10px 5px; background: #f0f0f0;" ng-if="stype == 'transfer' && areatype != 'Rental'" >
        			<div ng-click="seleceplaceNavi(x)" style="padding: 10px 5px;background-color: #f0f0f0 ">
	        			<span ng-if="flagcheck == 1">Navigate</span>
	        			<span ng-if="flagcheck == 2">นำทางไป</span>
	        			<span ng-if="flagcheck == 3">導航去</span> - {{x.TB_transferplace_topic}}
        			</div>
        		</div>
        		<div ng-repeat="x in backPlate" style="padding: 10px 5px;" ng-if="stype == 'transfer'">
        			<div ng-click="seleceplaceNavi(x)" style="padding: 10px 5px; ">
        			<span ng-if="flagcheck == 1">Navigate</span>
        			<span ng-if="flagcheck == 2">นำทางไป</span>
        			<span ng-if="flagcheck == 3">導航去</span> - {{x.TB_transferplace_to_topic}}
        			</div>
        		</div>
        		<div ng-repeat="x in goPlate"  style="padding: 10px 5px; " ng-if="stype != 'transfer'">
        		<div ng-click="seleceplaceNavi(x)" style="padding: 10px 5px;background-color: #f0f0f0 ">
        			<span ng-if="flagcheck == 1">Navigate</span>
        			<span ng-if="flagcheck == 2">นำทางไป</span>
        			<span ng-if="flagcheck == 3">導航去</span> - {{x.TB_transferplace_topic}}
        		</div>
        		<div ng-click="seleceplaceNavi(x)" style="padding: 10px 5px; " ng-if="x.TB_transferplace_to_topic.length > 0 && x.TB_transferplace_topic != x.TB_transferplace_to_topic">
        			<span ng-if="flagcheck == 1">Navigate</span>
        			<span ng-if="flagcheck == 2">นำทางไป</span>
        			<span ng-if="flagcheck == 3">導航去</span> - {{x.TB_transferplace_to_topic}}
        		</div>

        		</div>
        		<!-- <div ng-click="seleceplaceNavi(backPlate)" style="padding: 10px 5px; " ng-if="backPlate.length >= 0 && areatype != 'Rental' || stype == 'transfer'">To - {{backPlate}}</div> -->
        	</div>
        	<div ng-if="areatype == 'Rental'" style="padding:0 10px;">
        		<div ng-click="seleceplaceNaviRental(topicTo)" style="padding: 10px;font-size: 18px; ">
        			<span ng-if="flagcheck == 1">Navigate</span>
        			<span ng-if="flagcheck == 2">นำทางไป</span>
        			<span ng-if="flagcheck == 3">導航去</span> - {{topicTo}}
        		</div>
        		<div style="padding: 10px;font-size: 18px;" ng-repeat="item in proDatapronavi" ng-if="item.place.length != 0 " ng-click="seleceplaceNavi(item)" ng-class="{evennavi: $even, oddnavi: $odd}"><span ng-if="flagcheck == 1">Navigate</span>
        			<span ng-if="flagcheck == 2">นำทางไป</span>
        			<span ng-if="flagcheck == 3">導航去</span> - {{item.TB_transferplace_topic}}</div>
        	</div>
      </div>
      
    </div>

  </div>
</div>
<!-- <div id="viewlocation" class="modal fade" role="dialog" >
	<div class="back-full-popup">
    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
  			<tr>
    			<td width="40">
    				<div id="btn_close_gps_popup_back">
    					<i class="fa fa-arrow-circle-left" style="font-size:22px; color:#FFFFFF "> </i>
    				</div>
    			</td>
  			<td><div style="font-size:18px; color:#FFFFFF " id="head_full_popup">chat_location</div></td>
    		<td width="50" align="right"><div style="font-size:18px; color:#FFFFFF " id="head_full_popup_icon"><button type="button" class="btn" data-backdrop="static" id="btn_send_gps_point" style="padding:3px; width:60px; background-color: #FFCC00;font-size:15px; ">  <i class="fa  fa-send"></i> <span ng-bind="chat_send"></span></button>
 </div></td>
  </tr>
</table>
</div>
  	<div class="modal-dialog" style="margin: 0;width: 100%;height: 100%">
    	<div class="modal-content" style="height: 100%">
      		<div class="modal-body" style="height: 100%;padding: 0">
      			<div id="viewlocationmap">
      				
      			</div>
			</div>
		</div>
	</div>	
</div> -->



<div  id="footer"  class="footer"  ng-style="stylefooter" style="position: fixed;bottom: 0;">
		
		<div align="center" style=";font-size: 14px;padding-top: 4px;font-weight: 200" >
			<span  ng-if="flagcheck == 1" style="font-weight: 400">t-booking.com Travel Booking System</span>
			<span ng-if="flagcheck == 2"><span style="font-weight: 400">t-booking.com</span> ระบบจองการท่องเที่ยว</span>
			<span  ng-if="flagcheck == 3"><span style="font-weight: 400">t-booking.com</span> 旅游预订系统</span>
		</div>
		<div align="center" style="font-size: 14px;font-weight: 200">
			 <span  ng-if="flagcheck == 1" style="font-weight: 400">Real-time communication confirmation</span>
            <span ng-if="flagcheck == 2">(ใบยืนยัน)โต้ตอบแบบ<span style="font-weight: 400"> ทันที</span></span>
            <span  ng-if="flagcheck == 3">实时沟通确认单</span>
		</div>
		
	</div>
	
	<script type="text/javascript">
		// $('#chatvoucher').click(function(){
		// 	alert("aa");
		// 	var voucher,dataorderID,name,dataSV;
		// 	name = "livechat";
		// 	voucher = $('#vcclickinfohome').val();
		// 	dataorderID = $('#dataorderID').val();
		// 	flagcheck = $('#flagcheck').val();
		// 	//alert(name);
		// 	// $('#vcload').html(voucher);
		// 	// $('#nameload').html(name);
		// 	var url_chat = "vc_chat.php?name=chat&vc="+voucher+"&lang="+flagcheck+"&order="+dataorderID;
 	// 		$('#chat_load').load(url_chat);
 	// 		//alert(flagcheck) 
		// });
		// $('#chatvoucherop').click(function(){
		// 	var voucher,dataorderID,name,dataSV;
		// 	name = "livechat";
		// 	voucher = $('#vcclickinfohome').val();
		// 	dataorderID = $('#dataorderID').val();
		// 	flagcheck = $('#flagcheck').val();
		// 	//alert(name);
		// 	// $('#vcload').html(voucher);
		// 	// $('#nameload').html(name);
		// 	var url_chat = "vc_chat.php?name=chat&vc="+voucher+"&lang="+flagcheck+"&order="+dataorderID;
 	// 		$('#chat_load').load(url_chat);
 	// 		//alert(flagcheck) 
		// });
		function chatTOdriver(x){
			//console.log(x)
			var voucher,dataorderID,name,dataSV;
			name = "livechat";
			voucher = x;
			dataorderID = $('#dataorderID').val();
			flagcheck = $('#flagcheck').val();
			console.log(dataorderID)
			console.log(flagcheck)
			console.log(voucher)

			//alert(name);
			// $('#vcload').html(voucher);
			// $('#nameload').html(name);
			if(flagcheck==1){			
			var flagcheck='en';
			}
			if(flagcheck==2){			
			var flagcheck='th';
			}
			if(flagcheck==3){			
			var flagcheck='cn';
			}
 

 $( "#load_data_manage_work" ).slideToggle();
   var url_chat = "<?=$chat_part?>/load_page.php?name=livechat&file=index&vc="+voucher+"&lang="+flagcheck+"&order="+dataorderID+"&chat_from=customer&chat_to=driver";
   console.log(url_chat)
 $('#load_data_manage_work').load(url_chat);

 		}
		function chatTOop(x){
			//console.log(x)
		//alert("aaaa")
			var voucher,dataorderID,name,dataSV;
			name = "livechat";
			voucher = x;
			dataorderID = $('#dataorderID').val();
			flagcheck = $('#flagcheck').val();
			console.log(dataorderID)
			console.log(flagcheck)
			console.log(voucher)

			//alert(name);
			// $('#vcload').html(voucher);
			// $('#nameload').html(name);
			if(flagcheck==1){			
			var flagcheck='en';
			}
			if(flagcheck==2){			
			var flagcheck='th';
			}
			if(flagcheck==3){			
			var flagcheck='cn';
			}
 

		 $( "#load_data_manage_work" ).slideToggle();
		 ///$('#load_data_manage_work').html('55');
		   var url_chat = "<?=$chat_part?>/load_page.php?name=livechat&file=index&vc="+voucher+"&lang="+flagcheck+"&order="+dataorderID+"&chat_from=customer&chat_to=callcenter";
		 $('#load_data_manage_work').load(url_chat);
			
 
			
			
			
		}
		
		$("#chat_icon_gps").click(function(){   
  
  $( "#alert_show_map" ).slideToggle("slow");
 
 //  $( "#popup_chat_share_map" ).slideToggle("slow");
 /// $('#load_chat_share_map').load('google/check_system.php');
  });
	</script>
