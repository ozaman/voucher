
<div id="home" style="background-color: #fff">
<?  include ("../../driver/bootstrap/fonts/all.php");?> 
<?  include ("google/gps/check.php");?> 
<?  //include ("../../demo/mod/livechat/sub/popup/share_map.php");?> 
    <? // include ("../../demo/mod/livechat/sub/popup/share_map_realtime.php");?>   
    <? // include ("../../demo/mod/livechat/sub/popup/preview_map.php");?> 
    <? // include ("../../demo/mod/livechat/sub/popup/preview_map_realtime.php");?> 
	<div class="header" style="position: fixed;font-size: 16px;z-index: 1;top: 0" ng-dblClick="doubleClick()">
		<table width="100%">
			<tr >
				<td width="3%"></td>
				<td width="10%" >
					<div class="logoagent" data-toggle="modal" data-target="#">
						<img ng-src="images/logo/{{TB_order_agent}}.jpg"  width="30" height="30" ng-click="snapphoto(TB_order_agent)" ng-if="TB_order_agent != '' ">
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
			    <!--  <li><button ng-ckick="TurnOnlocation()" onclick="notifyMe()">test</button></li> -->
			    
			    </ul>
				</td>
				<td width="3%"></td>
			</tr>
         
		</table>
	</div>
	<div style="padding: 0 10px;    margin-top: 40px;">
		<div style="border: 2px solid #3b5998;
    border-radius: 8px;
    font-size: 16px;
    padding: 5px;
    margin-bottom: 9px;
    padding: 8px 18px;
    text-shadow: none;
    margin-top: 30px;
    width: 100%;
    color: #fff;
    text-align: center;
    background: #3b5998;
    font-size: 17px !important;" ng-click="booknew()">Book New</div>
</div>
	<div style="padding: 3px 18px;text-shadow: none;width: 100%;    font-size: 17px !important"> 
		<table width="100%">
			<tr>
				<td colspan="2" style="" align="center">
				<!-- <img src="https://goldenbeachgroup.com/app/data/fileupload/vc/1489310074.jpg"> -->
					<span  ng-if="flagcheck == 1" >My Bookings</span>
					<span  ng-if="flagcheck == 2" >การจองของฉัน</span>
					<span  ng-if="flagcheck == 3" >我的预订</span>
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
						<span ng-bind="timeSVH*1000 | date:'yyyy-MM-dd HH:mm:ss'"></span>
						<img ng-src="iconstatus/flag/test_f/{{timecountry}}.png" width="25">
					</span>

				</td>
			</tr>    
		</table>
	</div>
	<!-- <div class="box-body" style="padding:0px; padding-top:10px;padding-bottom: 9px; ">
     <table width="100%" border="0" cellspacing="2" cellpadding="2">
  		<tr>
    		<td width="33%" align="center" ng-click="allChat()">
    			 <div class="btn btn-app " style="background-color:#FFFFFF; width:auto">
                	<span class="badge bg-yellow"></span>
                		<i class="fa fa-commenting-o"  style="font-size: 20px; display: block;"></i>
               				<span ng-if="flagcheck == 1">Live Chat</span>
							<span ng-if="flagcheck == 2">สนทนาสด</span>
							<span ng-if="flagcheck == 3">在线聊天</span>
              	</div>
            </td>
    		<td width="33%" align="center">
    			<div class="btn btn-app" style="background-color:#FFFFFF ">
                	<span class="badge bg-teal"></span>
                	<i class="fa fa-info-circle" style="font-size: 20px; display: block;"></i> 
                		<span ng-if="flagcheck == 1">Explain</span>
						<span ng-if="flagcheck == 2">อธิบาย</span>
						<span ng-if="flagcheck == 3">解释</span>	
              	</div>
            </td>
    		<td width="33%" align="center">
    			<div class="btn btn-app" style="background-color:#FFFFFF ">
                	<span class="badge bg-red"></span>
                	<i class="fa fa-bell" style="font-size: 20px; display: block;"></i> 
                		<span ng-if="flagcheck == 1">แจ้งเตือน</span>
						<span ng-if="flagcheck == 2">แจ้งเตือน</span>
						<span ng-if="flagcheck == 3">แจ้งเตือน</span>	
                </div>
            </td>
  		</tr>
</table>
 </div>  -->
	<div class="ui-content" style="padding-bottom: 50px !important;" >
		<div style="border:2px solid #3b5998;border-radius: 8px;font-size: 16px;padding: 5px;margin-bottom: 9px;">
			<table width="100%">
				<tr>
					<td  ng-click="clickslectVoucher()">
						<div style="padding-left: 10px;display: inline-block;    padding: 5px;">
							<span ng-bind="Typetext"></span>
						</div>
						<i class="fa fa-angle-down pull-right " aria-hidden="true" style="font-size: 30px" ng-click="iconDown()" ng-style="icondown"></i>
						<i class="fa fa-angle-up pull-right" aria-hidden="true" style="font-size: 30px;display: none;" ng-click="iconUp()" ng-style="iconup"></i>
					</td>
					<!-- <td align="center" width="35">
						<div style="width: 35px;
    border: 2px solid #3b5998; 
    height: 35px;
    border-radius: 50%;    padding: 5px;
    /* background-color: #00bb50 ; */">
    	<span ng-bind="numVocherpass"></span>
    </div>
					</td> -->
					<!-- <td align="center">
						<i class="fa fa-angle-down " aria-hidden="true" style="font-size: 30px" ng-click="iconDown()" ng-style="icondown"></i>
						<i class="fa fa-angle-up" aria-hidden="true" style="font-size: 30px;display: none;" ng-click="iconUp()" ng-style="iconup"></i>
					</td> -->
				</tr>
			</table>
			
		</div>
		
		<div ng-style="slectVoucher" style="display: none;  
    border: 1px solid #4897c9;
    margin-bottom: 9px;
    border-radius: 8px;
    font-size: 16px;
    ">
			<ul style="padding-left: 0">
				<li style="background: #f0f0f0;
    padding: 8px 25px;
    border-radius: 8px 8px 0 0;" ng-click="selectType(1)">
					<span ng-if="flagcheck == 1">All</span>
					<span ng-if="flagcheck == 2">ทั้งหมด</span>
					<span ng-if="flagcheck == 3">所有</span>
					<div class="sumdata">
    					<span ng-bind="numVocherpass1"></span>
    				</div>
				</li>
				<li style="padding: 8px 25px;" ng-click="selectType(2)">
					<span ng-if="flagcheck == 1">Used</span>
					<span ng-if="flagcheck == 2">ใช้แล้ว</span>
					<span ng-if="flagcheck == 3">已经使用</span>
					<div class="sumdata" >
    					<span ng-bind="numVocherpass2"></span>
    				</div>
				</li>
				<li style="padding: 8px 25px;background: #f0f0f0;" ng-click="selectType(3)">
					<span ng-if="flagcheck == 1">Unused</span>
					<span ng-if="flagcheck == 2">รอใช้</span>
					<span ng-if="flagcheck == 3">等待使用</span>
					<div class="sumdata">
				    	<span ng-bind="numVocherpass3"></span>
				    </div>
				</li>
				<li style="padding: 8px 25px;" ng-click="selectType(4)" ng-if="Vouchercancel.length != 0">
					<span ng-if="flagcheck == 1">Canceled</span>
					<span ng-if="flagcheck == 2">ที่ถูกยกเลิก</span>
					<span ng-if="flagcheck == 3">已取消</span>
					<div class="sumdata">
				    	<span ng-bind="numVocherpass4"></span>
				    </div>
				</li>
				<li style="padding: 8px 25px;background: #f0f0f0;border-radius: 0 0 8px 8px" ng-click="selectType(5)" ng-if="Voucherrej.length != 0">
					<span ng-if="flagcheck == 1">Rejected</span>
					<span ng-if="flagcheck == 2">ถูกปฏิเสธ</span>
					<span ng-if="flagcheck == 3">已拒绝</span>
					<div class="sumdata">
				    	<span ng-bind="numVocherpass5" ></span>
				    </div>
				</li>
			</ul>
		</div>


	

		<!-- VOUCHER Wait -->
		<div style="text-align: center;font-size: 18px ;color: red;margin-top: 30px;display: none" ng-style="noData">
			<span ng-if="flagcheck == 1">No information</span>
			<span ng-if="flagcheck == 2">ไม่มีข้อมูล</span>
			<span ng-if="flagcheck == 3">没有资料</span>
		</div>
		<div ng-repeat="x in VoucherSelect" ng-class="{evenhome: $even, oddhome: $odd}">
			<input type="hidden" name="vcidinfo" value="{{x.TB_order_order}}" id="vcclickinfohome"/>
			<input type="hidden" name="data" value="{{data}}" id="dataorderID"/>

			<input type="hidden" name="data" value="{{flagcheck}}" id="flagcheck"/>
			<input type="hidden" name="data" value="{{dataSV}}" id="dataSV"/>
			<input type="hidden" name="" value="{{Dataarea}}" ng-model="Dataarea" id="Dataarea">
			<input type="hidden" name="" value="{{Datatype}}" ng-model="Datatype" id="Datatype">
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
						</tr>
						<tr>
							<td colspan="3">
								<table width="100%">
									<tr>
										<td width="10"></td>										
										<td width="25%" align="center" style=" ">
											<div class="main_iconhometyle" style="margin-right: -10px">
												<!-- <img src="images/icon_type/{{x.TB_order_type}}.png?v=<?=$imcase;?>1" width="35" ng-if="x.TB_order_type != 'transfer' "> -->
												<i class="demo-icon icon-menu-spa" aria-hidden="true" ng-if="x.TB_order_type == 'spa'" style="font-size: 30px;color: #fff;line-height: 1.6;"></i>
												<i class="demo-icon icon-menu-comedy-and-tragedy" aria-hidden="true" ng-if="x.TB_order_type == 'show'" style="font-size: 30px;color: #fff;line-height: 1.6;"></i>
												<i class="demo-icon icon-menu-diver" aria-hidden="true" ng-if="x.TB_order_type == 'diving'" style="font-size: 30px;color: #fff;line-height: 1.6;"></i>
												<i class="demo-icon icon-menu-tour" aria-hidden="true" ng-if="x.TB_order_type == 'tour'" style="font-size: 30px;color: #fff;line-height: 1.6;"></i>
												<i class="demo-icon icon-menu-golf" aria-hidden="true" ng-if="x.TB_order_type == 'golf'" style="font-size: 30px;color: #fff;line-height: 1.6;"></i>
												<i class="demo-icon icon-menu-plane" aria-hidden="true" ng-if="x.TB_order_type == 'plane'" style="font-size: 30px;color: #fff;line-height: 1.6;"></i>
												<i class="demo-icon icon-menu-car" aria-hidden="true" ng-if="x.TB_order_type == 'transfer' && x.area == 'Point' || x.area == 'Rental' " style="font-size: 30px;color: #fff;line-height: 1.6;"></i>

												<!-- <img src="images/icon_type/{{x.TB_order_type}}.png?v=<?=$imcase;?>1" width="35" ng-if="x.TB_order_type == 'transfer' && x.area == 'Point' || x.area == 'Rental' "> -->
												<i class="flaticon-takeoff-the-plane" aria-hidden="true" ng-if="x.TB_order_type == 'transfer' && x.area == 'Out'" style="font-size: 30px;color: #fff;line-height: 1.6;"></i>
												<i class="flaticon-plane-landing" aria-hidden="true" ng-if="x.TB_order_type == 'transfer' && x.area == 'In'" style="font-size: 30px;color: #fff;line-height: 1.6;"></i>
											</div>
										</td>
										
										<td style="padding: 0" colspan="2">
											<table width="100%">
												<tr>
													<td align="left" data-toggle="modal" data-target="#" ng-click="voucherdialog(x)" valign="top">	
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
							                                    
														<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 1 && x.sub_confirm == 1">CXL</span>
														<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 2 && x.sub_confirm == 1"">ยกเลิก</span>
														<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 3 && sub_confirm == 1"">取消</span>
							                
														<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 1 && x.sub_reject == 1">REJ</span>
														<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 2 && x.sub_reject == 1"">ปฏิเสธ</span>
														<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 3 && x.sub_reject == 1"">拒绝</span>
							                
														<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 1 && x.sub_reject == 2">REJ</span>
														<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 2 && x.sub_reject == 2"">ปฏิเสธ</span>
														<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 3 && x.sub_reject == 2"">拒绝</span>
							                
														<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 1 && x.sub_reject != 2 && x.sub_confirm != 1" >CXL</span>
														<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 2 && x.sub_reject != 2 && x.sub_confirm != 1">ยกเลิก</span>
														<span id="{{state}}" ng-if="x.TB_order_status == 'CANCEL' && flagcheck == 3 && x.sub_reject != 2 && x.sub_confirm != 1">取消</span><span >VC</span>
											                <!-- <span  ng-if="flagcheck == 2">เลขวอเชอร์</span>
											                <span  ng-if="flagcheck == 3">凭证编号</span> -->
											                <a href="http://t-booking.com/print.php?name=admin/voucher&file=tour&no={{x.TB_order_id}}&order={{x.TB_book_agent_id}}&code={{x.TB_order_code}}" target="_blank" ng-if="dataSV == 'th' && x.TB_order_type != 'transfer'">
											                <span  ng-bind="':'+x.TB_order_order" style="margin-left: -2px;"></span>
											                </a>
											                <a href="http://t-booking.com/print.php?name=admin/voucher&file=tour&no={{x.TB_order_id}}&order={{x.TB_book_agent_id}}&code={{x.TB_order_code}}" target="_blank" ng-if="dataSV == 'cn' && x.TB_order_type != 'transfer'" >
											                <span  ng-bind="':'+x.TB_order_order" style="margin-left: -2px;"></span>
											                </a>
											               <a href="http://t-booking.com/print.php?name=admin/voucher&file=transfer&no={{x.TB_order_id}}&order={{x.TB_book_agent_id}}&code={{x.TB_order_code}}" target="_blank" ng-if="dataSV == 'th' && x.TB_order_type == 'transfer'">
											                <span  ng-bind="':'+x.TB_order_order" style="margin-left: -2px;"></span>
											                </a>
											                <a href="http://t-booking.com/print.php?name=admin/voucher&file=transfer&no={{x.TB_order_id}}&order={{x.TB_book_agent_id}}&code={{x.TB_order_code}}" target="_blank" ng-if="dataSV == 'cn' && x.TB_order_type == 'transfer'" >
											                <span  ng-bind="':'+x.TB_order_order" style="margin-left: -2px;"></span>
											                </a>
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
														 &nbsp;<span ng-if="x.TB_order_type == 'transfer'" ng-bind="x.TB_order_ondate+'/'+x.airout_h +':'+ x.airout_m"></span>
														 <span ng-if="x.TB_order_type != 'transfer' && x.transfer_in == ''" ng-bind="x.TB_order_ondate+'/'+x.TB_order_air_time"></span>
														 <span ng-if="x.TB_order_type != 'transfer' && x.transfer_in == 1" ng-bind="x.TB_order_ondate+'/'+x.airout_h +':'+ x.airout_m"></span>
												  </td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
								
							</td>
							
						</tr>
						
						
						<tr>
							<td align="center" colspan="3" width="" ng-if="x.TB_order_type == 'transfer'">
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
												<div class="main_iconhome" ><!-- <img src="images/boolin.png?v=<?=$imcase;?>" width="30" style="margin-top: -12px;"> -->
												<i class="fa fa-address-book-o" style="font-size: 25px;color: #fff"></i>
												<img src="images/yes.png?v=<?=$imcase;?>1"  align="" style="width: 20px; position: absolute; border-radius: 50%;    border: 2px solid #FFF;" ng-if="x.room_number.length > 0">
												<div ng-if="(x.dateCompare == 'use' || x.room_number == '') && x.area != 'In'" style=" color: #ff0f0f; font-size: 28px;  width: 25px; height: 25px; position: absolute; background: #fff; border-radius: 50%; text-shadow: none; font-size: 16px; text-align: center; line-height: 1.3;border: 1px solid #3b5998;display: inline-block;"><i class="fa fa-bell faa-ring animated" aria-hidden="true" style=" "  ></i></div>

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
											<td width="32%" align="center" style="padding-top: 8px;padding: 0"  ng-disabled="x.datessnew ==2" ng-click="openContact(x);openpopupdriverinfo(x)" ng-if="x.drivername == ''">
												<!-- data-toggle="modal" data-target="#chatdrivermodal" -->
												<div class="main_iconhome">

												<i class="fa fa-comments" aria-hidden="true" style="font-size: 25px;color: #fff"></i>
												
												<!-- <div class="" ng-if="i.count_driver != '0' && i.invoice == x.TB_order_order" ng-repeat="i in nontifigcomment" style="  display: inline-block; width: 20px; height: 20px; position: absolute; background: red; color: #fff;    border-radius: 50%; text-shadow: none; font-size: 13px; text-align: center;    line-height: 1.5;  border:2px solid #fff ">
														<span ng-bind=" i.count_driver" ></span>
												</div> -->
												</div>
													<span ng-if="flagcheck == 1">Contact</span>
													<span ng-if="flagcheck == 2">ติดต่อ</span>
													<span ng-if="flagcheck == 3">联系</span> 
													
													
													
											</td>
											<td width="32%" align="center" style="padding-top: 8px;padding: 0"  ng-disabled="x.datessnew ==2" ng-click="detailfirsthome(x)" ng-if="x.drivername != ''">
												<!-- data-toggle="modal" data-target="#chatdrivermodal" -->
												<div class="main_iconhome">

												<i class="fa fa-car" aria-hidden="true" style="font-size: 25px;color: #fff"></i>
												
												<!-- <div class="" ng-if="i.count_driver != '0' && i.invoice == x.TB_order_order" ng-repeat="i in nontifigcomment" style="  display: inline-block; width: 20px; height: 20px; position: absolute; background: red; color: #fff;    border-radius: 50%; text-shadow: none; font-size: 13px; text-align: center;    line-height: 1.5;  border:2px solid #fff ">
														<span ng-bind=" i.count_driver" ></span>
												</div> -->
												</div>
													<span ng-if="flagcheck == 1">Driver/Car</span>
													<span ng-if="flagcheck == 2">คนขับ/รถ</span>
													<span ng-if="flagcheck == 3">司机/车</span>
													
													
													
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
										<tr ng-if="x.TB_order_status != 'NEW' && x.TB_order_status != 'CANCEL' "">
											
											
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
											<td width="32%" align="center" style="padding-top: 8px;padding: 0"  ng-disabled="x.datessnew ==2" ng-click="openContact(x);openpopupdriverinfo(x)" ng-if="x.drivername != ''">
												<!-- data-toggle="modal" data-target="#chatdrivermodal" -->
												<div class="main_iconhome">

												<i class="fa fa-comments" aria-hidden="true" style="font-size: 25px;color: #fff"></i>
												
												<!-- <div class="" ng-if="i.count_driver != '0' && i.invoice == x.TB_order_order" ng-repeat="i in nontifigcomment" style="  display: inline-block; width: 20px; height: 20px; position: absolute; background: red; color: #fff;    border-radius: 50%; text-shadow: none; font-size: 13px; text-align: center;    line-height: 1.5;  border:2px solid #fff ">
														<span ng-bind=" i.count_driver" ></span>
												</div> -->
												</div>
													<span ng-if="flagcheck == 1">Contact</span>
													<span ng-if="flagcheck == 2">ติดต่อ</span>
													<span ng-if="flagcheck == 3">联系</span> 
													
													
													
											</td>
											<td width="32%" align="center" style="padding-top: 8px;padding: 0"    >
											<input type="hidden"  value="{{x.TB_order_order}}" ng-model="orderChat">	
											<div class="main_iconhome"  id="{{x.TB_order_order}}"   ng-click="QRcode(x)">
											<i class="fa fa-qrcode" aria-hidden="true" style="font-size: 25px;color: #fff"></i>
												
											</div>
																	
												<span ng-if="flagcheck == 1">VCQRCode </span>
												<span ng-if="flagcheck == 2">คิวอาร์โค้ด </span>
												<span ng-if="flagcheck == 3">确认单二维码</span>
											</td>
											

											<td width="32%" align="center" style="padding-top: 8px;padding: 0"    >
											<input type="hidden"  value="{{x.TB_order_order}}" ng-model="orderChat">	
											<div class="main_iconhome"  id="{{x.TB_order_order}}" onclick="opennavi(this.id)"  ng-click="navi(x)">

												<i class="fa fa-location-arrow" id="fa-location-arrow" aria-hidden="true" style="font-size: 25px;color: #fff"></i>
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
											
											<td width="32%" align="center" style="padding-top: 8px;padding: 0;" ng-click="openpopupdriverservice(x,$index);openpopupdriverinfo(x)" ng-disabled="x.datessnew ==2" data-toggle="modal" data-target="#popupdriverservice" ng-if="x.TB_order_type == 'transfer' && x.title == 'Service' ">
											<!-- && x.title == 'Service' -->
												<div class="main_iconhome"><i class="fa fa-plus-square-o" style="color: #fff;font-size: 25px"></i><!-- <img src="images/pluss.png?v=<?=$imcase;?>" width="30" align="absmiddle" style="margin-top:-15px "> -->
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
											
											
											<td width="10"></td>
										</tr>
										<tr>
									<td width="10"></td>
											<td width="32%" align="center" valign="" style="padding-top: 8px;padding: 0;" ng-click="getchatForvcher(x,$index)" data-toggle="modal" data-target="#commentmodal" ng-if="x.datessnew == 1 || x.transfer != 0 || x.type_other =='transfer'">
												<div class="main_iconhome"><i class="fa fa-pencil-square" style="color: #fff;font-size: 25px"></i><!-- <img src="images/chats.png?v=<?=$imcase;?>1" width="30" align="" style="margin-top: -15px;"> -->
												<img src="images/yes.png?v=<?=$imcase;?>1"  align="" style="width: 20px; position: absolute; border-radius: 50%;    border: 2px solid #FFF;" ng-if="x.comment == 1">
												<!-- <div ng-if="x.comment != 1" style="display: inline-block; width: 20px; height: 20px; position: absolute; background: #d26200; color: #fff; border-radius: 50%; text-shadow: none; font-size: 13px; text-align: center;    line-height: 1.5;  border:2px solid #fff ">
												<i class="fa fa-hourglass-half" aria-hidden="true" style="position:absolute;border-radius: 50%;   border: 2px solid #FFF; font-size: 20px;"   ></i></div> -->
												<div ng-if="x.comment != 1 && x.datessnew == 1" style=" color: #ff0f0f; font-size: 28px;  width: 25px; height: 25px; position: absolute; background: #fff; border-radius: 50%; text-shadow: none; font-size: 16px; text-align: center; line-height: 1.3;border: 1px solid #3b5998;display: inline-block;"><i class="fa fa-bell faa-ring animated" aria-hidden="true" style=" "></i></div>
												<!-- <img src="images/no.png?v=<?=$imcase;?>1"  ng-if="x.comment != 1" align="" style="width: 20px; position:absolute;border-radius: 50%;   border: 2px solid #FFF;" > --></div>
												
												
												<span ng-if="flagcheck == 1">Comment </span>
												<span ng-if="flagcheck == 2">ความคิดเห็น </span>
												<span ng-if="flagcheck == 3">评论</span>
											</td>
											
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
							<td align="center" colspan="3" width="" ng-if="x.TB_order_type != 'transfer'">
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
												<div class="main_iconhome" ><!-- <img src="images/boolin.png?v=<?=$imcase;?>" width="30" style="margin-top: -12px;"> -->
												<i class="fa fa-address-book-o" style="font-size: 25px;color: #fff"></i>
												<img src="images/yes.png?v=<?=$imcase;?>1"  align="" style="width: 20px; position: absolute; border-radius: 50%;    border: 2px solid #FFF;" ng-if="x.room_number.length > 0">
												<div ng-if="(x.dateCompare == 'use' || x.room_number =='') && x.area != 'In'" style=" color: #ff0f0f; font-size: 28px;  width: 25px; height: 25px; position: absolute; background: #fff; border-radius: 50%; text-shadow: none; font-size: 16px; text-align: center; line-height: 1.3;border: 1px solid #3b5998;display: inline-block;"><i class="fa fa-bell faa-ring animated" aria-hidden="true" style=" "  ></i></div>

												</div>
												
												<div ng-if="flagcheck == 1"  >Details</div>
				                                <div ng-if="flagcheck == 2"  >ข้อมูลจอง</div>
				                                <div ng-if="flagcheck == 3"  >订单详情</div>
											</td>
											
											<td width="32%" align="center" style="padding-top: 8px;padding: 0"  ng-disabled="x.datessnew ==2" ng-click="openContact(x);openpopupdriverinfo(x)">
												<!-- data-toggle="modal" data-target="#chatdrivermodal" -->
												<div class="main_iconhome">

												<i class="fa fa-comments" aria-hidden="true" style="font-size: 25px;color: #fff"></i>
												</div>
													<span ng-if="flagcheck == 1">Contact</span>
													<span ng-if="flagcheck == 2">ติดต่อ</span>
													<span ng-if="flagcheck == 3">联系</span> 
													
													
													
											</td>
											
											
											
										
											<td width="10"></td>
										</tr>
										<tr ng-if="x.TB_order_status != 'NEW' && x.TB_order_status != 'CANCEL' "">
											
											
											<td width="10"></td>

											
											

											<td width="32%" align="center" style="padding-top: 8px;padding: 0"    >
											<input type="hidden"  value="{{x.TB_order_order}}" ng-model="orderChat">	
											<div class="main_iconhome"  id="{{x.TB_order_order}}" onclick="opennavi(this.id)"  ng-click="navi(x)">
												<i class="fa fa-location-arrow" id="fa-location-arrow" aria-hidden="true" style="font-size: 25px;color: #fff"></i>
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

											<td width="32%" align="center" style="padding-top: 8px;padding: 0;" ng-click="openpopupdriverservice(x,$index);openpopupdriverinfo(x)" ng-disabled="x.datessnew ==2" data-toggle="modal" data-target="#popupdriverservice" ng-if="x.TB_order_type == 'transfer' && x.title == 'Service' ">
											<!-- && x.title == 'Service' -->
												<div class="main_iconhome"><i class="fa fa-plus-square-o" style="color: #fff;font-size: 25px"></i><!-- <img src="images/pluss.png?v=<?=$imcase;?>" width="30" align="absmiddle" style="margin-top:-15px "> -->
												<span class="" ng-if="i.count_service != '0' && i.invoice == x.TB_order_order"  ng-repeat="i in nontifigcomment" style="  display: inline-block; width: 20px; height: 20px; position: absolute; background: red; color: #fff;    border-radius: 50%; text-shadow: none; font-size: 13px; text-align: center;    line-height: 1.5;border:2px solid #fff ">
                                            	<span ng-bind="i.count_service" ></span>
                                            </span></div>
												<span ng-if="flagcheck == 1">Add Service</span>

                                            <span ng-if="flagcheck == 2"  >เพิ่มบริการ</span>
                                            <span ng-if="flagcheck == 3"  >添加服务</span>
                                            
                                            
                                
											</td>
											<td width="32%" align="center" valign="" style="padding-top: 8px;padding: 0;" ng-click="getchatForvcher(x,$index)" data-toggle="modal" data-target="#commentmodal" ng-if="x.datessnew == 1 && x.transfer != 0 && x.type_other =='transfer'">
												<div class="main_iconhome"><i class="fa fa-pencil-square" style="color: #fff;font-size: 25px"></i><!-- <img src="images/chats.png?v=<?=$imcase;?>1" width="30" align="" style="margin-top: -15px;"> -->
												<img src="images/yes.png?v=<?=$imcase;?>1"  align="" style="width: 20px; position: absolute; border-radius: 50%;    border: 2px solid #FFF;" ng-if="x.comment == 1">
												<div ng-if="x.comment != 1 && x.datessnew == 1" style=" color: #ff0f0f; font-size: 28px;  width: 25px; height: 25px; position: absolute; background: #fff; border-radius: 50%; text-shadow: none; font-size: 16px; text-align: center; line-height: 1.3;border: 1px solid #3b5998;display: inline-block;"><i class="fa fa-bell faa-ring animated" aria-hidden="true" style=" "></i></div>
												
												
												<span ng-if="flagcheck == 1">Comment </span>
												<span ng-if="flagcheck == 2">ความคิดเห็น </span>
												<span ng-if="flagcheck == 3">评论</span>
											</td>
											<td width="32%" align="center" style="padding-top: 8px;padding: 0"    >
											<input type="hidden"  value="{{x.TB_order_order}}" ng-model="orderChat">	
											<div class="main_iconhome"  id="{{x.TB_order_order}}"   ng-click="getVideo(x)">
											
												<i class="fa fa-video-camera" id="fa-location-arrow" aria-hidden="true" style="font-size: 25px;color: #fff"></i>
											</div>
											<style>
												.fa-location-arrow{
													-ms-transform: rotate(-45deg); /* IE 9 */
							                        -webkit-transform: rotate(-45deg); /* Chrome, Safari, Opera */
							                        transform: rotate(-45deg);
												}
											</style>						
												<span ng-if="flagcheck == 1">Video </span>
												<span ng-if="flagcheck == 2">วีดีโอ </span>
												<span ng-if="flagcheck == 3">視頻</span>
											</td>
											<td width="32%" align="center" valign="" style="padding-top: 8px;padding: 0;" ng-click="getchatForvcher(x,$index)" data-toggle="modal" data-target="#commentTour" ng-if="x.datessnew == 1 || x.type_other !='transfer'">
												<div class="main_iconhome"><i class="fa fa-pencil-square" style="color: #fff;font-size: 25px"></i><!-- <img src="images/chats.png?v=<?=$imcase;?>1" width="30" align="" style="margin-top: -15px;"> -->
												<img src="images/yes.png?v=<?=$imcase;?>1"  align="" style="width: 20px; position: absolute; border-radius: 50%;    border: 2px solid #FFF;" ng-if="x.comment == 1">
												<div ng-if="x.comment != 1 && x.datessnew == 1" style=" color: #ff0f0f; font-size: 28px;  width: 25px; height: 25px; position: absolute; background: #fff; border-radius: 50%; text-shadow: none; font-size: 16px; text-align: center; line-height: 1.3;border: 1px solid #3b5998;display: inline-block;"><i class="fa fa-bell faa-ring animated" aria-hidden="true" style=" "></i></div>
												<!-- <img src="images/no.png?v=<?=$imcase;?>1"  ng-if="x.comment != 1" align="" style="width: 20px; position:absolute;border-radius: 50%;   border: 2px solid #FFF;" > --></div>
												
												
												<span ng-if="flagcheck == 1">Comment </span>
												<span ng-if="flagcheck == 2">ความคิดเห็น </span>
												<span ng-if="flagcheck == 3">评论</span>
											</td>
										
										
											
											<td width="10"></td>
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
<div id="sopencontact" class="modal fade" role="dialog" >
  	<div class="modal-dialog" style="    margin: 100px 3%;" align="center" id="sopencontactposition">
    	<div class="modal-content" style="">
      		<div class="modal-body" style="padding: 15px 0;">
      			<table width="100%" style="font-size: 14px;color: rgba(97, 97, 97, 0.84);">
      			<!-- <tr>
      				<td><span ng-bind="online | date:'yyyy-MM-dd HH:mm:ss'"></span></td>
      				<td><span ng-bind="vconline | date:'yyyy-MM-dd HH:mm:ss'"></span></td>
      			</tr> -->
      			
				<tr>
					<td width="10"></td>		
					<td width="32%" align="center" style="padding-top: 8px;padding: 0"  ng-disabled="x.datessnew == 2" data-dismiss="modal" ng-if="orderType == 'transfer' &&  conDricer != null && conDricer != '' " >
						
						<input type="hidden" name="" value="{{orderChat}}" ng-model="orderChat">
						<!-- <input type="" name="" value="{{checkonline}}"> -->
						<div ng-if="checkonline == 'online'" align="center" style="color: #187a1c">
							<span ng-if="flagcheck == 1">Online</span>
							<span ng-if="flagcheck == 2">ออนไลน์</span>
							<span ng-if="flagcheck == 3">在线</span>
						</div>
						<div ng-if="checkonline == 'ofline'" align="center" style="color: red">
							<span ng-if="flagcheck == 1">Ofline</span>
							<span ng-if="flagcheck == 2">ออฟไลน์</span>
							<span ng-if="flagcheck == 3">离线</span>
						</div>	
						<div class="main_dri"  id="{{orderChat}}" ng-click="chatTOdriverangular(orderChat)" onclick="chatTOdriver(this.id)" style=" width: 50px;
    /* padding: 8px; */
    height: 50px;
    border: 2px solid #f5f5f5;
    text-align: center;
    border-radius: 60px;
    margin-left: 2%;
    line-height: 3.2;
    color: #3b5998;
    background: #3b5998;
    /*box-shadow: 1px 1px 5px #999999*/;">

							<img src="images/driver.png?v=<?=$imcase;?>" width="30" align="" style="margin-top: -12px;">
						<div ng-repeat="i in nontifigcomment" style="position: absolute;display: inline-block; width: 20px; height: 20px;  background: red; color: #fff;    border-radius: 50%; text-shadow: none; font-size: 13px; text-align: center;    line-height: 1.4;  border:2px solid #fff "  ng-if="checkonline == 'ofline'">
									<span ng-bind=" i.msg_driver_to_guest" ></span>
						</div>
						<div ng-repeat="i in nontifigcomment" style="position: absolute;display: inline-block; width: 20px; height: 20px;  background: #579f59; color: #fff;    border-radius: 50%; text-shadow: none; font-size: 13px; text-align: center;    line-height: 1.4;  border:2px solid #fff "  ng-if="checkonline == 'online'">
									<span ng-bind=" i.msg_driver_to_guest" ></span>
						</div>
						<!-- <div class="" ng-if="i.count_driver != '0' && i.invoice == x.TB_order_order && checkonline == 'online'" ng-repeat="i in nontifigcomment" style="  display: inline-block; width: 20px; height: 20px; position: absolute; background: #187a1c; color: #fff;    border-radius: 50%; text-shadow: none; font-size: 13px; text-align: center;    line-height: 1.5;  border:2px solid #fff ">
									<span ng-bind=" i.count_driver" ></span>
						</div> -->
						</div>
						



						<span ng-if="flagcheck == 1">Chat driver</span>
						<span ng-if="flagcheck == 2">พูดคุยคนขับ</span>
						<span ng-if="flagcheck == 3">司机交谈</span>
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
					<td width="32%" align="center" style="padding-top: 8px;padding: 0;" ng-disabled="x.datessnew ==2"  data-dismiss="modal" >
						<!-- ng-click="openpopupdriverOP(x)" -->
						<!-- <input type="" name="" value="{{checkonlineOp}}"> -->
						<div ng-if="checkonlineOp == 'online'" align="center" style="color: #187a1c">
							<span ng-if="flagcheck == 1">Online</span>
							<span ng-if="flagcheck == 2">ออนไลน์</span>
							<span ng-if="flagcheck == 3">在线</span>
						</div>
						<div ng-if="checkonlineOp == 'ofline'" align="center" style="color: red">
							<span ng-if="flagcheck == 1">Ofline</span>
							<span ng-if="flagcheck == 2">ออฟไลน์</span>
							<span ng-if="flagcheck == 3">离线</span>
						</div>
						<div class="main_op" id="{{orderChat}}" onclick="chatTOop(this.id)" style=" width: 50px;
    /* padding: 8px; */
    height: 50px;
    border: 2px solid #f5f5f5;
    text-align: center;
    border-radius: 60px;
    margin-left: 2%;
    line-height: 3.2;
    color: #3b5998;
    background: #3b5998;
    /*box-shadow: 1px 1px 5px #999999*/;">
						<img src="images/callchat.png?v=<?=$imcase;?>" width="30" style="margin-top: -15px;" align="">
						<!-- <div style="line-height: 1.2; height: 100%; width: 100%;"> -->
						
							<!-- <i class="flaticon-call-center-worker-with-headset" align="absmiddle" style=" font-size:45px;color: #fff;padding: 5px 0;"></i> -->
													<!-- </div> -->
							<div ng-repeat="i in nontifigcomment" style="position: absolute;display: inline-block; width: 20px; height: 20px;  background: red; color: #fff;    border-radius: 50%; text-shadow: none; font-size: 13px; text-align: center;    line-height: 1.4;  border:2px solid #fff " ng-if="checkonlineOp == 'ofline'">
									<span ng-bind=" i.msg_callcenter_to_guest" ></span>
						</div>
						<div ng-repeat="i in nontifigcomment" style="position: absolute;display: inline-block; width: 20px; height: 20px;  background: #579f59; color: #fff;    border-radius: 50%; text-shadow: none; font-size: 13px; text-align: center;    line-height: 1.4;  border:2px solid #fff " ng-if="checkonlineOp == 'online'">
									<span ng-bind=" i.msg_callcenter_to_guest" ></span>
						</div>
							</div>


							<span ng-if="flagcheck == 1">Chat OP</span>
							<span ng-if="flagcheck == 2">พูดคุยโอพี</span>
							<span ng-if="flagcheck == 3">客服交谈</span>
					</td>
					<td width="32%" align="center" style="padding-top: 8px;padding: 0"  ng-disabled="x.datessnew == 2" data-dismiss="modal" >
						
						
						<!-- <input type="" name="" value="{{checkonline}}"> -->
						<div ng-if="checkonlineAgent == 'online'" align="center" style="color: #187a1c">
							<span ng-if="flagcheck == 1">Online</span>
							<span ng-if="flagcheck == 2">ออนไลน์</span>
							<span ng-if="flagcheck == 3">在线</span>
						</div>
						<div ng-if="checkonlineAgent == 'ofline'" align="center" style="color: red">
							<span ng-if="flagcheck == 1">Ofline</span>
							<span ng-if="flagcheck == 2">ออฟไลน์</span>
							<span ng-if="flagcheck == 3">离线</span>
						</div>
						<input type="hidden" name="" value="{{idagent}}" id="idagent">	
						<div class="main_agent"  id="{{orderChat}}" ng-click="chatTOagent(orderChat)"  style=" width: 50px; height: 50px; border: 2px solid #f5f5f5;  text-align: center;  border-radius: 60px;  margin-left: 2%;   line-height: 3.2; color: #fff; background: #3b5998; ">
    						<!-- <i class="fa fa-user"  aria-hidden="true" style="font-size: 32px;line-height: 1.4;"></i> -->
    						<img src="images/agent.png?v=<?=$imcase;?>" width="30" align="" style="margin-top: -5px;">
							<!-- <img src="images/driver.png?v=<?=$imcase;?>" width="30" align="" style="margin-top: -12px;"> -->
						<!-- <div ng-repeat="i in nontifigcomment" style="position: absolute;display: inline-block; width: 20px; height: 20px;  background: red; color: #fff;    border-radius: 50%; text-shadow: none; font-size: 13px; text-align: center;    line-height: 1.4;  border:2px solid #fff "  ng-if="checkonline == 'ofline'">
									<span ng-bind=" i.msg_driver_to_guest" ></span>
						</div>
						<div ng-repeat="i in nontifigcomment" style="position: absolute;display: inline-block; width: 20px; height: 20px;  background: #579f59; color: #fff;    border-radius: 50%; text-shadow: none; font-size: 13px; text-align: center;    line-height: 1.4;  border:2px solid #fff "  ng-if="checkonline == 'online'">
									<span ng-bind=" i.msg_driver_to_guest" ></span>
						</div> -->
						<!-- <div class="" ng-if="i.count_driver != '0' && i.invoice == x.TB_order_order && checkonline == 'online'" ng-repeat="i in nontifigcomment" style="  display: inline-block; width: 20px; height: 20px; position: absolute; background: #187a1c; color: #fff;    border-radius: 50%; text-shadow: none; font-size: 13px; text-align: center;    line-height: 1.5;  border:2px solid #fff ">
									<span ng-bind=" i.count_driver" ></span>
						</div> -->
						</div>
						



						<span ng-if="flagcheck == 1">Chat seller</span>
						<span ng-if="flagcheck == 2">พูดคุยผู้ขาย</span>
						<span ng-if="flagcheck == 3">商家交谈</span>
					</td>								
					
						<td width="10"></td>
					</tr>
					<tr>
												<td height="5" colspan="4" style="border-top: 2px solid #f0f0f0; "></td>
											</tr>
								<tr>
					<tr>
						<td colspan="4" style="    padding: 0 8px;font-size: 14px">
							<table width="100%">
								<tr ng-if="checkarea == 'In' && checktour == 'transfer'">
									<td align="center" data-toggle="modal" data-target="" width="33%" style="padding: 3px" ng-click="flightdelaydrivermodal(dataSend)">
													<div class="boder-menu">
													<div style="line-height: 1.2; height: 100%; width: 100%;">
													<i class="flaticon-airliner" align="absmiddle" style=" font-size:45px;color: #3b5998;padding: 5px 0;"></i>
													</div>
														<!-- <img src="img/delayf.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" > -->
														</div>
														<!-- <br />	 -->	
														<span ng-if="flagcheck == 1" >flight delay</span>
														<span ng-if="flagcheck == 2">เที่ยวบินล่าช้า </span>
														<span ng-if="flagcheck == 3">航班延误</span>
													
												</td>
												<td width="10"></td>
												<td align="center" data-toggle="modal" data-target="#" width="33%" style="padding: 3px" ng-click="changedrivermodal(dataSend)">
												<div class="boder-menu">
												<div style="line-height: 1.3; height: 100%; width: 100%;">
												<i class="flaticon-planes-circling" style=" font-size:35px; font-weight:bold;color: #3b5998;padding: 5px 0; " ></i>
												</div>
													<!-- <img src="img/change.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" > -->
													</div>
													<!-- <br /> -->
													<span ng-if="flagcheck == 1" >Change flight</span>
													<span ng-if="flagcheck == 2">เปลี่ยนเที่ยวบิน </span>
													<span ng-if="flagcheck == 3">换航班</span>
													
												</td>
												
												<td width="10"></td>
												<td width="33%"  height="61" align="center" ng-click="popup_goto_beforefirst(vdIDclickinfo);beforedrivermodal(dataSend)" data-toggle="modal" data-target="#" style="padding: 3px">
												<div class="boder-menu">
													<!-- <img src="images/usercar_befor.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;"
													> -->
													<div style="line-height: 5; height: 100%; width: 100%;">
													<i class="icon icon-history" style=" font-size:35px;color: #3b5998;padding: 5px 0;    " ></i>
													</div>
													
													</div>
														</div>
													<!-- <br/> -->
													<!-- <div ng-click="blockBeforepopup(state4);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Before </span>
													<span ng-if="flagcheck == 2">ใช้ล่วงหน้า </span>
													<span ng-if="flagcheck == 3">提前使用</span>
													<!-- <div ng-bind="state4.length" class="length-state"></div> -->
													<!-- </div> -->
                                     			
												</td>
												
												
									
								</tr>
								
								<tr ng-if="checkarea != 'In' && x.type_other != transfer">
												
												<td width="10" ></td>
												<td width="33%" align="center" ng-click="popup_goto_delayfirst(vdIDclickinfo);delaydrivermodal(dataSend)" data-toggle="modal" data-target="#" style="padding: 3px;">
                                  					<div class="boder-menu">
                                  					<div style="margin-top: -2px;-webkit-transform:rotateY(180deg); -moz-transform:rotateY(180deg); -o-transform:rotateY(180deg);  -ms-transform:rotateY(180deg);line-height: 5; height: 100%; width: 100%; ">
                                  					<i class="icon icon-history" style=" font-size:35px; font-style: normal; color: #3b5998;padding: 5px 0;" ></i>
                                  					</div>
													<!-- <img src="images/usercar_after.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" > -->
													</div>
													<!-- <br /> -->
													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Delay </span>
													<span ng-if="flagcheck == 2">เลื่อนการใช้ </span>
													<span ng-if="flagcheck == 3">推迟使用</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
                                  					
												</td>
												
												
												<td width="10" ></td>
												<td width="33%" align="center" ng-click="popupallchat(vdIDclickinfo);popup_goto_waitfirst(vdIDclickinfo);waitImage(dataSend)" data-toggle="modal" data-target="" style="padding: 3px">
													<div class="boder-menu">
													<div style="line-height: 1.2; height: 100%; width: 100%;">
													<i class="flaticon-mother-and-son" style=" font-size:35px; color: #3b5998;padding: 5px 0;" ></i>
													</div>
													<!-- <img src="images/clock_wait.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" > -->
													</div>
													<!-- <br /> -->
													<!-- <div ng-click="blockBeforepopup(state3);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Waiting </span>
													<span ng-if="flagcheck == 2">ฉันรออยู่แล้ว </span>
													<span ng-if="flagcheck == 3">我已在等</span>
													<!-- <span ng-bind="state3.length" class="length-state"></span> -->
													<!-- </div> -->
                                 					
												</td>
												
												
								</tr>
								
								<tr ng-if="checkarea == 'In' && checktour == 'transfer'">
												
												
												<td width="33%" align="center" ng-click="popup_goto_delayfirst(vdIDclickinfo);delaydrivermodal(dataSend)" data-toggle="modal" data-target="#" style="padding: 3px">
                                  					<div class="boder-menu">
                                  					<div style="margin-top: -2px;-webkit-transform:rotateY(180deg); -moz-transform:rotateY(180deg); -o-transform:rotateY(180deg);  -ms-transform:rotateY(180deg);line-height: 5; height: 100%; width: 100%;">
                                  					<i class="icon icon-history" style=" font-size:35px; font-style: normal; color: #3b5998;padding: 5px 0;" ></i>
                                  					</div>
													<!-- <img src="images/usercar_after.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" > -->
													</div>
													<!-- <br /> -->
													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Delay </span>
													<span ng-if="flagcheck == 2">เลื่อนการใช้ </span>
													<span ng-if="flagcheck == 3">推迟使用</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
                                  					
												</td>
												<td width="10" ></td>
												<td width="30%" align="center" ng-click="landingdrivermodal(dataSend)" data-toggle="modal" data-target="#" style="padding: 3px" >
                                  					<div class="boder-menu">
													<!-- <img src="img/landing.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" > -->
													<div style="line-height: 1.2; height: 100%; width: 100%;">
													<i class="flaticon-plane-landing" style=" font-size:40px;color: #3b5998;padding: 5px 0;  " ></i>
													</div>
													</div>
													<!-- <br /> -->
													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->



													<span ng-if="flagcheck == 1" >Landing </span>
													<span ng-if="flagcheck == 2">เครื่องลงจอด </span>
													<span ng-if="flagcheck == 3">飞机降落</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
                                  					
												</td>
												
												
												<td width="10" ></td>
												<td width="33%" align="center" ng-click="popupallchat(vdIDclickinfo);popup_goto_waitfirst(vdIDclickinfo);waitImage(dataSend)" data-toggle="modal" data-target="" style="padding: 3px">
												<div class="boder-menu">
													<!-- <img src="images/clock_wait.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" > -->
													<div style="line-height: 1.2; height: 100%; width: 100%;">
													<i class="flaticon-mother-and-son" style=" font-size:35px; color: #3b5998;padding: 5px 0;" ></i>
													</div>
														</div>
													<!-- <br /> -->
													<!-- <div ng-click="blockBeforepopup(state3);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Waiting </span>
													<span ng-if="flagcheck == 2">ฉันรออยู่แล้ว </span>
													<span ng-if="flagcheck == 3">我已在等</span>
													<!-- <span ng-bind="state3.length" class="length-state"></span> -->
													<!-- </div> -->
                                 				
												</td>
												<!-- <td width="10" ></td> -->
												
												
												
												
								</tr>
								
								<tr ng-if="checkarea != 'In' && checktour == 'transfer' && type_other != 'tour'">
												<td width="33%"  height="61" align="center" ng-click="popup_goto_beforefirst(vdIDclickinfo);beforedrivermodal(dataSend)" data-toggle="modal" data-target="#" style="padding: 3px">
												<div class="boder-menu">
													<!-- <img src="images/usercar_befor.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;"
													> -->
													<div style="line-height: 5; height: 100%; width: 100%;">
													<i class="icon icon-history" style=" font-size:35px; font-style: normal; color: #3b5998;padding: 5px 0;" ></i>
													</div>
													</div>
													<!-- <br/> -->
													<!-- <div ng-click="blockBeforepopup(state4);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Before </span>
													<span ng-if="flagcheck == 2">ใช้ล่วงหน้า </span>
													<span ng-if="flagcheck == 3">提前使用</span>
													<!-- <div ng-bind="state4.length" class="length-state"></div> -->
													<!-- </div> -->
                                     				
												</td>
												<td width="10" ></td>
												<td width="33%" align="center" ng-click="popup_goto_delayfirst(vdIDclickinfo);delaydrivermodal(dataSend)" data-toggle="modal" data-target="" style="padding: 3px;">
                                  					<div class="boder-menu">
													<!-- <img src="images/usercar_after.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" > -->
														
														<div style="margin-top: -2px;-webkit-transform:rotateY(180deg); -moz-transform:rotateY(180deg); -o-transform:rotateY(180deg);  -ms-transform:rotateY(180deg);line-height: 5; height: 100%; width: 100%;">
														<i class="icon icon-history" style=" font-size:35px; font-style: normal; color: #3b5998;padding: 5px 0;" ></i>
														</div>
														</div>
													<!-- <br /> -->
													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Delay </span>
													<span ng-if="flagcheck == 2">เลื่อนการใช้ </span>
													<span ng-if="flagcheck == 3">推迟使用</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
                                  				
												</td>
												
												
												<td width="10" ></td>
												<td width="33%" align="center" ng-click="popupallchat(vdIDclickinfo);popup_goto_waitfirst(vdIDclickinfo);waitImage(dataSend)" data-toggle="modal" data-target="#" style="padding: 3px;">
												<div class="boder-menu">
													<!-- <img src="images/clock_wait.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" > -->
													<div style="line-height: 1.2; height: 100%; width: 100%;">
													<i class="flaticon-mother-and-son" style=" font-size:35px; color: #3b5998;padding: 5px 0;" ></i>
													</div>
													</div>
													<!-- <br /> -->
													<!-- <div ng-click="blockBeforepopup(state3);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Waiting </span>
													<span ng-if="flagcheck == 2">ฉันรออยู่แล้ว </span>
													<span ng-if="flagcheck == 3">我已在等</span>
													<!-- <span ng-bind="state3.length" class="length-state"></span> -->
													<!-- </div> -->
                                 					
												</td>
												
												
								</tr>
								<!-- <tr ng-if="checkarea == 'In' && checktour != 'transfer'">
												<td width="33%"  height="61" align="center" ng-click="popup_goto_beforefirst(vdIDclickinfo)" data-toggle="modal" data-target="#beforedrivermodal" style="padding: 3px;">
												<div class="boder-menu">
													<img src="images/usercar_befor.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;"
													>
														</div>
													
													<span ng-if="flagcheck == 1" >Before </span>
													<span ng-if="flagcheck == 2">ใช้ล่วงหน้า </span>
													<span ng-if="flagcheck == 3">提前使用</span>
													
                                     			
												</td>
												<td width="10" ></td>
												<td width="33%" align="center" ng-click="popup_goto_delayfirst(vdIDclickinfo)" data-toggle="modal" data-target="#delaydrivermodal" style="padding: 3px;">
                                  					<div class="boder-menu">
													<img src="images/usercar_after.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													</div>
													
													<span ng-if="flagcheck == 1" >Delay </span>
													<span ng-if="flagcheck == 2">เลื่อนการใช้ </span>
													<span ng-if="flagcheck == 3">推迟使用</span>
													
                                  					
												</td>
												
												
												<td width="10" ></td>
												<td width="33%" align="center" ng-click="popupallchat(vdIDclickinfo);popup_goto_waitfirst(vdIDclickinfo)" data-toggle="modal" data-target="#waitdrivermodal" style="padding: 3px;">
												<div class="boder-menu">
													<img src="images/clock_wait.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													</div>
													
													<span ng-if="flagcheck == 1" >Waiting </span>
													<span ng-if="flagcheck == 2">ฉันรออยู่แล้ว </span>
													<span ng-if="flagcheck == 3">我已在等</span>
													
                                 					
												</td>
												
												
								</tr>
								 -->
								<tr ng-if="checkarea == 'In' && checktour == 'transfer'">
												<td width="30%" align="center" data-toggle="modal" data-target="#" ng-click="location(dataSend)" style="padding: 3px;">
                                  					<div class="boder-menu">
													<i class="fa fa-map-marker" aria-hidden="true" style="font-size: 45px;    color: #3b5998;"></i>
													</div>
													<!-- <br /> -->





													<div ng-click=""> 
													
													<span ng-if="flagcheck == 1" >Location</span>
													<span ng-if="flagcheck == 2">ตำแหน่ง </span>
													<span ng-if="flagcheck == 3">位置</span>
													
                                  					
												</td>
												<td width="10" ></td>
												<td width="30%" align="center"  data-toggle="modal" data-target="" ng-click="onthecardrivermodal(dataSend)" style="padding: 3px;">
                                  					<div class="boder-menu">
                                  					<div style="line-height: 4; height: 100%; width: 100%;">
													<i class="fa fa-car" style="color: #3b5998;font-size: 35px"></i>
													</div>
													</div>
													<!-- <br /> -->



													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->

													<span ng-if="flagcheck == 1" >On the car</span>
													<span ng-if="flagcheck == 2">อยู่บนรถ </span>
													<span ng-if="flagcheck == 3">在车上</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
                                  					
												</td>
												
												<td width="10" ></td>
												<td width="30%" align="center"  data-toggle="modal" data-target="" ng-click="restaurantdrivermodal(dataSend)" style="padding: 3px;">
                                  					<div class="boder-menu">
                                  					<div style="line-height: 4; height: 100%; width: 100%;">
													<i class="fa fa-cutlery" style="color: #3b5998;font-size: 35px"></i>
													</div>
													</div>
													<!-- <br /> -->
													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->





													<span ng-if="flagcheck == 1" >Restaurant </span>
													<span ng-if="flagcheck == 2">ร้านอาหาร </span>
													<span ng-if="flagcheck == 3">餐厅</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
                                  					
												</td>
												
												
												
												
								</tr>
								<tr ng-if="checkarea == 'In' && checktour == 'transfer'">
												
												<td width="30%" align="center"  data-toggle="modal" data-target="" ng-click="attractiondrivermodal(dataSend)" style="padding: 3px;">
                                  					<div class="boder-menu">
													<i class="fa fa-street-view" style="color: #3b5998;font-size: 35px"></i>
													</div>
													<!-- <br /> -->





													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Attractions</span>
													<span ng-if="flagcheck == 2">แหล่งท่องเที่ยว </span>
													<span ng-if="flagcheck == 3">景点</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
													
                                  
												</td>
												<td width="10" ></td>
												<td align="center"  style="padding: 3px;">
													<input type="hidden" name="" value="{{orderChat}}" ng-model="orderChat">
													<!-- <span>{{driverPhone}}</span> -->
													<div class="boder-menu" data-toggle="modal" data-target="#tol">
													<i class="fa fa-phone-square" style="font-size: 35px;    line-height: 1.3;    color: #3b5998;"></i>
													<!-- <img src="images/phone.png?v=<?=$cache;?>" width="35" align="center" align="absmiddle" style="padding: 5px 0;"> -->
													</div>
													<!-- <br /> -->
													<span ng-if="flagcheck == 1" >Call</span>
													<span ng-if="flagcheck == 2">โทร </span>
													<span ng-if="flagcheck == 3">通话</span>
													
													
												</td>	
												
												
												
								</tr>
								<tr ng-if="checkarea != 'In' && checktour == 'transfer'">
												<td width="30%" align="center" data-toggle="modal" data-target="" ng-click="location(dataSend)" style="padding: 3px;">
                                  					<div class="boder-menu">
													<i class="fa fa-map-marker" aria-hidden="true" style="font-size: 45px;    color: #3b5998;"></i>
													</div>
													<!-- <br /> -->





													
													
													<span ng-if="flagcheck == 1" >Location</span>
													<span ng-if="flagcheck == 2">ตำแหน่ง </span>
													<span ng-if="flagcheck == 3">位置</span>
													
												</td>
												<td width="10" ></td>
												<td width="30%" align="center"  data-toggle="modal" data-target="" ng-click="onthecardrivermodal(dataSend)" style="padding: 3px;">
                                  					<div class="boder-menu">
                                  					<div style="line-height: 4; height: 100%; width: 100%;">
													<i class="fa fa-car" style="color: #3b5998;font-size: 35px"></i>
													</div>
													</div>
													<!-- <br /> -->



													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >On the car</span>
													<span ng-if="flagcheck == 2">อยู่บนรถ </span>
													<span ng-if="flagcheck == 3">在车上</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
                                  					
												</td>
												<td width="10" ></td>
												<td width="30%" align="center" data-toggle="modal" data-target="" ng-click="restaurantdrivermodal(dataSend)" style="padding: 3px;">
                                  					<div class="boder-menu">
                                  					<div style="line-height: 4; height: 100%; width: 100%;">
													<i class="fa fa-cutlery" style="color: #3b5998;font-size: 35px"></i>
													</div>
													</div>
													<!-- <br /> -->
													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->





													<span ng-if="flagcheck == 1" >Restaurant </span>
													<span ng-if="flagcheck == 2">ร้านอาหาร </span>
													<span ng-if="flagcheck == 3">餐厅</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
                                  				
												</td>
												
												
												
								</tr>
								<tr ng-if="checkarea != 'In' && checktour == 'transfer'">
										
										<td width="30%" align="center"  data-toggle="modal" data-target="" ng-click="attractiondrivermodal(dataSend)" style="padding: 3px;">
												<div class="boder-menu">
                                   
													<i class="fa fa-street-view" style="color: #3b5998;font-size: 35px"></i>
													</div>
													<!-- <br /> -->





													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Attractions</span>
													<span ng-if="flagcheck == 2">แหล่งท่องเที่ยว </span>
													<span ng-if="flagcheck == 3">景点</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
                                  					
												</td>
												<td width="10" ></td>
												<td align="center" style="padding: 3px;" >
													
													<div class="boder-menu"  data-toggle="modal" data-target="#tol">
													<!-- <span>{{driverPhone}}</span> -->
													
													<i class="fa fa-phone-square" style="font-size: 35px;    line-height: 1.3;    color: #3b5998;"></i>
													<!-- <img src="images/phone.png?v=<?=$cache;?>" width="35" align="center" align="absmiddle" style="padding: 5px 0;"> -->
													</div>
													<!-- <br /> -->
													<span ng-if="flagcheck == 1" >Call</span>
													<span ng-if="flagcheck == 2">โทร </span>
													<span ng-if="flagcheck == 3">通话</span>
													
													
												
												</td>			
								</tr>


								<!-- ******************************TOUR******************************* -->
								<tr ng-if="checktour != 'transfer'">
												<td width="30%" align="center" data-toggle="modal" data-target="#" ng-click="location(dataSend)" style="padding: 3px;">
												<div class="boder-menu">
                                  
													<i class="fa fa-map-marker" aria-hidden="true" style="font-size: 45px;    color: #3b5998;"></i>
													</div>
													<!-- <br /> -->





													<div ng-click=""> 
													
													<span ng-if="flagcheck == 1" >Location</span>
													<span ng-if="flagcheck == 2">ตำแหน่ง </span>
													<span ng-if="flagcheck == 3">位置</span>
													
													
                                  
												</td>
												<td width="10" ></td>
												<td width="30%" align="center" data-toggle="modal" data-target="" ng-click="onthecardrivermodal(dataSend)" style="padding: 3px;">
												<div class="boder-menu">
                                  					<div style="line-height: 4; height: 100%; width: 100%;">
													<i class="fa fa-car" style="color: #3b5998;font-size: 35px"></i>
													</div>
													</div>
													<!-- <br /> -->



													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >On the car</span>
													<span ng-if="flagcheck == 2">อยู่บนรถ </span>
													<span ng-if="flagcheck == 3">在车上</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
													
                                  
												</td>
												<td width="10" ></td>
												<td width="30%" align="center"  data-toggle="modal" data-target="" ng-click="restaurantdrivermodal(dataSend)" style="padding: 3px">
												<div class="boder-menu">
                                  					<div style="line-height: 4; height: 100%; width: 100%;">
													<i class="fa fa-cutlery" style="color: #3b5998;font-size: 35px"></i>
													</div>
													</div>
													<!-- <br /> -->
													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->





													<span ng-if="flagcheck == 1" >Restaurant </span>
													<span ng-if="flagcheck == 2">ร้านอาหาร </span>
													<span ng-if="flagcheck == 3">餐厅</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
													
                                  
												</td>
												
												
												
								</tr>
								<tr ng-if="checktour != 'transfer'">
										
										<td width="30%" align="center"  data-toggle="modal" data-target="" ng-click="attractiondrivermodal(dataSend)" style="padding: 3px;">
										<div class="boder-menu">
                                  					<div style="line-height: 1.2; height: 100%; width: 100%;">
													<i class="fa fa-street-view" style="color: #3b5998;font-size: 35px"></i>
													</div>
													</div>
													<!-- <br /> -->





													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Attractions</span>
													<span ng-if="flagcheck == 2">แหล่งท่องเที่ยว </span>
													<span ng-if="flagcheck == 3">景点</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
													
                                  
												</td>
												<td width="10" ></td>
												<td align="center" style="padding: 3px;" ng-if="orderiHavetransfer == 1">
													<input type="hidden" name="" value="{{orderChat}}" ng-model="orderChat">
													<div class="boder-menu"  data-toggle="modal" data-target="#tol">
													<!-- <span>{{driverPhone}}</span> -->
													
													<i class="fa fa-phone-square" style="font-size: 35px;    line-height: 1.3;    color: #3b5998;"></i>
													<!-- <img src="images/phone.png?v=<?=$cache;?>" width="35" align="center" align="absmiddle" style="padding: 5px 0;"> -->
													</div>
													<!-- <br /> -->

													<span ng-if="flagcheck == 1" >Call</span>
													<span ng-if="flagcheck == 2">โทร </span>
													<span ng-if="flagcheck == 3">通话</span>
													
													
												
												</td>
												<td align="center" style="padding: 3px;" ng-if="orderiHavetransfer == 0">
													<input type="hidden" name="" value="{{orderChat}}" ng-model="orderChat">
													<a href="tel:0630781168" ng-click="confirm_sendmaildelay(11,orderChat)" style="text-decoration: none;color: #555;">
													<div class="boder-menu">
													<!-- <span>{{driverPhone}}</span> -->
													
													<i class="fa fa-phone-square" style="font-size: 35px;     line-height: 1.3;   color: #3b5998;"></i>
													<!-- <img src="images/phone.png?v=<?=$cache;?>" width="35" align="center" align="absmiddle" style="padding: 5px 0;"> -->
													</div>
													<!-- <br /> -->

													<span ng-if="flagcheck == 1" >Call</span>
													<span ng-if="flagcheck == 2">โทร </span>
													<span ng-if="flagcheck == 3">通话</span>
													</a>
													
												
												</td>			
								</tr>
							<!-- 	<tr>
									<td colspan="3">
									<div style="width: 150px">
										<broadcaster
										    has-stream="hasStream"
										    room-name="roomName"
										    is-broadcasting="isBroadcasting" style="width: 100px"></broadcaster>
										 
										  <button ng-click="prepare()" ng-disabled="hasStream">Prepare to broadcast</button>
										  <div ng-show="hasStream">
										   <input type="text" ng-model="roomName" placeholder="Join room with name" />
<watch-room 
  room-name="roomName" 
  joined-room="joinedRoom" 
  muted="true"
  nick="myEmail"
  max-num-peers="maxAllowedWatchers"></watch-room>
  <button ng-click="joinRoom()">Join room</button>
  <button ng-click="leaveRoom()">Leave room</button>
										    <button ng-click="start()" ng-disabled="!roomName || broadcasting">Start room</button>
										  </div>
										  </div>
										
									</td>
								</tr> -->
								<!-- <tr>
									<td colspan="3">
										<button id="btn-open-room">Open Room</button>
<button id="btn-join-room">Join Room</button><hr>
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
<div id="images-photo" class="modal fade" role="dialog" >
	<div class="back-full-popup" style="background-color: #3b5998">
	    <table width="100%" border="0" cellspacing="0" cellpadding="0">
		  	<tr>
		    <td width="40">
		    	<div id="btn_close_chat_preview_map_realtime" data-dismiss="modal" ng-click="test()">
		    		<i class="fa fa-arrow-circle-left" style="font-size:22px; color:#FFFFFF " > </i>
		    	</div>
		    </td>
		  	<td>
		  		<div style="font-size:18px; color:#FFFFFF " id="head_full_popup"><span ng-if="flagcheck == 1" >Picture
</span>
													<span ng-if="flagcheck == 2">Photo </span>
													<span ng-if="flagcheck == 3">照片</span></div>
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
      			<div style="padding-top:60px">
	  				<table width="100%" border="0" align="center" cellpadding="5" cellspacing="5" style="display:nones" id="show_image_photo_view">
					  <tr>
					    <td align="center"><img src="images/nopic.png" id="image_photo_view" name="image_photo_view" style="width:90%;height: 100%; border-radius:10px; margin-bottom:5px;border: 1px solid #ddd  "></td>
					  </tr>
					</table>
  				</div>
  				<div class="input-group" style="background-color:#F6F6F6; padding:5PX;border-radius: 5px; margin-left:10px; margin-right:10px;border: 1px solid #ddd;">
				  <label class="input-group-btn">
				   <span class="btn btn-primary" style="height:35px;"> <i class="fa  fa-camera" style="margin-top:5px;" id="chat_icon_photo_view"></i> 
				  </span> </label>
				 
				  &nbsp;
				  <button type="button" class="btn btn-default" data-toggle="modal" style="padding-left:5px; padding-right:5px; width:30px; " id="del_photo_view"><i class="fa  fa-trash" style="font-size:20px; "></i></button>&nbsp;<a id="button_alert_show_wait_now"><span style="color:#000000; font-size:14px; ">&nbsp; Photo of your environment</span></a>
				  
				</div>
				<div style="padding-top:10px">
	  
				  	<table width="100%" border="0" align="center" cellpadding="5" cellspacing="5" style="display:nones" id="show_image_photo_you">
					  <tr>
					    <td align="center"><img src="images/nopic.png" id="image_photo_you" name="image_photo_you" style="width:90%;height: 100%; border-radius:10px; margin-bottom:5px;border: 1px solid #ddd  "></td>
					  </tr>
					</table>
			  </div>
			  <div class="input-group" style="background-color:#F6F6F6; padding:5PX;border-radius: 5px; margin-left:10px; margin-right:10px; border: 1px solid #ddd;">


			  <label class="input-group-btn"> <span class="btn btn-primary" style="height:35px;" id="chat_icon_photo_you"> <i class="fa  fa-camera" style="margin-top:5px;"></i> 
			   
			  </span> </label>
			 
			  &nbsp;
			  <button type="button" class="btn btn-default" data-toggle="modal" style="padding-left:5px; padding-right:5px; width:30px; " id="del_photo_you"><i class="fa  fa-trash" style="font-size:20px; "></i></button>&nbsp;<a id="button_alert_show_wait_now"><span style="color:#000000; font-size:14px; ">&nbsp; Photo of yourself</span></a>
			 
			</div>
			</div>
		</div>
	</div>	
</div>
    	<!-- </div> -->
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



<div  id="footer"  class="footer"  ng-style="stylefooter" style="position: fixed;bottom: 0;text-shadow: none !important">
		
		<div align="center" style=";font-size: 14px;padding-top: 4px;font-weight: 200" >
			<span  ng-if="flagcheck == 1" style="font-weight: 400">t-booking.com Travel Booking System</span>
			<span ng-if="flagcheck == 2"><span style="font-weight: 400">t-booking.com</span> ระบบจองการท่องเที่ยว</span>
			<span  ng-if="flagcheck == 3"><span style="font-weight: 400">t-booking.com</span> <B style="font-size: 12px;">旅游预订系统</B></span>
		</div>
		<div align="center" style="font-size: 14px;font-weight: 200">
			 <span  ng-if="flagcheck == 1" style="font-weight: 400">Real-time communication confirmation</span>
            <span ng-if="flagcheck == 2">(ใบยืนยัน)โต้ตอบแบบ<span style="font-weight: 400"> ทันที</span></span>
            <span  ng-if="flagcheck == 3"><B style="font-size: 12px;">实时沟通确认单</B></span>
		</div>
		
	</div>

    
    
    <div id="load_update_chat_online_status" style="display:nones"></div>
	<script type="text/javascript">
		 setInterval(function() {
 ////// อัพเดทตำแหน่ง customer 
 //console.log("in setInterval ")
 var dataorderID = $('#dataorderID').val();
 var url_check_data_time_chat = "load_blank.php?name=update&file=update_status&order="+dataorderID;
 //console.log(url_check_data_time_chat)
 
url_check_data_time_chat =url_check_data_time_chat+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
 url_check_data_time_chat =url_check_data_time_chat+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 $('#load_update_chat_online_status').load(url_check_data_time_chat);
}, 3000);  
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
	// 	function chatTOagent(x){
	// 		alert("aaaaaa")
	// 		var Dataarea,Datatype,postText.idagent;
	// 		Dataarea = $('#Dataarea').val();
	// 		Datatype = $('#Datatype').val();
			
			

	// 		if (Dataarea == 'In' && Datatype == 'transfer') {
 //            postText = '&type=transfer&subtype=in';

 //        }
 //        if (Dataarea == 'Out' && Datatype == 'transfer') {
 //            //alert("bbbb")
 //            postText = '&type=transfer&subtype=out';


 //        }
 //        if (Dataarea == 'Point' && Datatype == 'transfer') {
 //           //alert("ccc")
 //            postText = '&type=transfer&subtype=point';


 //        }
 //        if (Dataarea == 'Service' && Datatype == 'transfer') {
 //            //alert("ccc")
 //            postText = '&type=transfer&subtype=service';


 //        }
 //        if (Dataarea == 'Rental' && Datatype == 'transfer') {
 //            //alert("ccc")
 //            postText = '&type=transfer&subtype=rental';


 //        }
 //        if (Datatype != 'transfer') {
 //            //alert(data.TB_order_type)
 //            postText = '&type='+ Datatype+'&subtype=all';


 //        }
	// 		//console.log(x)
	// 		//alert("aaaaaaaaaaaaa")

	// 		var voucher,dataorderID,name,dataSV;
	// 		name = "livechat";
	// 		voucher = x;
	// 		dataorderID = $('#dataorderID').val();
	// 		flagcheck = $('#flagcheck').val();
	// 		dataSV = $('#dataSV').val();
	// 		idagent = $('#idagent').val();

	// 		console.log(dataorderID)
	// 		console.log(flagcheck)
	// 		console.log(voucher)

	// 		//alert(name);
	// 		// $('#vcload').html(voucher);
	// 		// $('#nameload').html(name);
	// 		if(flagcheck==1){			
	// 		var flagcheck='en';
	// 		}
	// 		if(flagcheck==2){			
	// 		var flagcheck='th';
	// 		}
	// 		if(flagcheck==3){			
	// 		var flagcheck='cn';
	// 		}
 

 // $( "#load_data_manage_work" ).slideToggle();
 //   //var url_chat = "<?=$chat_part?>/load_page.php?name=livechat&file=index&vc="+voucher+"&lang="+flagcheck+"&order="+dataorderID+"&chat_from=customer&chat_to=driver"+"&sv="+dataSV;
 //   var url_chat = "../driver/load_page.php?name=livechat&file=index&vc="+voucher+"&lang="+flagcheck+"&order="+dataorderID+"&chat_from=customer&chat_to=agent"+postText+"&agentid="+idagent;
 //   console.log(url_chat)
 // $('#load_data_manage_work').load(url_chat);

 // 		}
		function chatTOdriver(x){
			var Dataarea,Datatype,postText;
			Dataarea = $('#Dataarea').val();
			Datatype = $('#Datatype').val();
			

			if (Dataarea == 'In' && Datatype == 'transfer') {
            postText = '&type=transfer&subtype=in';

        }
        if (Dataarea == 'Out' && Datatype == 'transfer') {
            //alert("bbbb")
            postText = '&type=transfer&subtype=out';


        }
        if (Dataarea == 'Point' && Datatype == 'transfer') {
           //alert("ccc")
            postText = '&type=transfer&subtype=point';


        }
        if (Dataarea == 'Service' && Datatype == 'transfer') {
            //alert("ccc")
            postText = '&type=transfer&subtype=service';


        }
        if (Dataarea == 'Rental' && Datatype == 'transfer') {
            //alert("ccc")
            postText = '&type=transfer&subtype=rental';


        }
        if (Datatype != 'transfer') {
            //alert(data.TB_order_type)
            postText = '&type='+ Datatype+'&subtype=all';


        }
			//console.log(x)
			//alert("aaaaaaaaaaaaa")

			var voucher,dataorderID,name,dataSV;
			name = "livechat";
			voucher = x;
			dataorderID = $('#dataorderID').val();
			flagcheck = $('#flagcheck').val();
			dataSV = $('#dataSV').val();

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
   //var url_chat = "<?=$chat_part?>/load_page.php?name=livechat&file=index&vc="+voucher+"&lang="+flagcheck+"&order="+dataorderID+"&chat_from=customer&chat_to=driver"+"&sv="+dataSV;
   var url_chat = "../driver/load_page.php?name=livechat&file=index&vc="+voucher+"&lang="+flagcheck+"&order="+dataorderID+"&chat_from=customer&chat_to=driver"+postText;
   console.log(url_chat)
 $('#load_data_manage_work').load(url_chat);

 		}
		function chatTOop(x){
			var Dataarea,Datatype,postText;
			Dataarea = $('#Dataarea').val();
			Datatype = $('#Datatype').val();
			

			if (Dataarea == 'In' && Datatype == 'transfer') {
            postText = '&type=transfer&subtype=in';

        }
        if (Dataarea == 'Out' && Datatype == 'transfer') {
            //alert("bbbb")
            postText = '&type=transfer&subtype=out';


        }
        if (Dataarea == 'Point' && Datatype == 'transfer') {
           //alert("ccc")
            postText = '&type=transfer&subtype=point';


        }
        if (Dataarea == 'Service' && Datatype == 'transfer') {
            //alert("ccc")
            postText = '&type=transfer&subtype=service';


        }
        if (Dataarea == 'Rental' && Datatype == 'transfer') {
            //alert("ccc")
            postText = '&type=transfer&subtype=rental';


        }
        if (Datatype != 'transfer') {
            //alert(data.TB_order_type)
            postText = '&type='+ Datatype+'&subtype=all';


        }
			//console.log(x)
		//alert("aaaa")
			var voucher,dataorderID,name,dataSV;
			name = "livechat";
			voucher = x;
			dataorderID = $('#dataorderID').val();
			flagcheck = $('#flagcheck').val();
			dataSV = $('#dataSV').val();
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
		   //var url_chat = "<?=$chat_part?>/load_page.php?name=livechat&file=index&vc="+voucher+"&lang="+flagcheck+"&order="+dataorderID+"&chat_from=customer&chat_to=callcenter"+"&sv="+dataSV;
		   var url_chat = "../driver/load_page.php?name=livechat&file=index&vc="+voucher+"&lang="+flagcheck+"&order="+dataorderID+"&chat_from=customer&chat_to=callcenter"+postText;
		 $('#load_data_manage_work').load(url_chat);
		 
		 console.log(url_chat)
			
 
			
			
			
		}
		
		$("#chat_icon_gps").click(function(){   
  
  $( "#alert_show_map" ).slideToggle("slow");
 
 //  $( "#popup_chat_share_map" ).slideToggle("slow");
 /// $('#load_chat_share_map').load('google/check_system.php');
  });

	</script>
