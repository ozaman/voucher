<div class="modal-dialog" style="margin:0">
  
    <div class="modal-content" style="    margin-top: 45px;
    border-top-right-radius: 0;
    border-top-left-radius: 0;">	
    	<div class="modal-body" style="padding: 10px;padding-bottom: 0">
      		<input type="hidden" name="{{VCID}}"  id="{{VCID}}" value="{{VCID}}" ng-model="VCID">
			
			<input type="hidden" name="vc_{{VCID}}" id="vc_{{VCID}}"  value="{{VCID}}" ng-model="VCID">
			
 <script>
 
 alert(document.getElementById('vc_vcid').value);
 
 </script>
			
			
      		<div ng-if="getallchat.length == 0" align="center" style="font-size: 20px; padding: 5px;    color: red;">
      			<span ng-if="flagcheck == 1">No Histoty</span>
      			<span ng-if="flagcheck == 2">ไม่มีประวัติ</span>
      			<span ng-if="flagcheck == 3">没有历史</span>
      		</div>

<div class="record" ng-repeat="item in getallchat" id="menudriver{{item.id}}" style="border: 1px solid #ddd; border-radius: 8px;margin-bottom: 10px;">
                <table id="record" width="100%" style="font-size: 16px;border-color: none !important" >
                    <tr style="background-color: #ddd;">
                        <td width="40" style="padding: 8px 0;border-radius: 8px 0 0 0;" align="center">
                         
                              <img src="images/me.png?v=<?=$cache;?>" width="30">  
 
                        </td>
                        <td width="20"></td>
                        <td   colspan="4" style="padding: 8px 0" >
                        	<div ng-if="item.state == 2 || item.state == 5 || item.state == 13 || item.state == 13 || item.state == 31">
	                           	<span ng-if="flagcheck == 1" >Chat</span>
								<span ng-if="flagcheck == 2">การแชท </span>
								<span ng-if="flagcheck == 3">交谈</span>
							</div>
							<div ng-if="item.state == 1 || item.state == 8 || item.state == 16 || item.state == 23">
	                           	<span ng-if="flagcheck == 1" >Delay </span>
	                            <span ng-if="flagcheck == 2">เลื่อนการใช้ </span>
	                            <span ng-if="flagcheck == 3">推迟使用</span>
							</div>
							<div ng-if="item.state == 3 || item.state == 9">
	                           	 <span ng-if="flagcheck == 1" >Waiting </span>
	                            <span ng-if="flagcheck == 2">ฉันรออยู่แล้ว </span>
	                            <span ng-if="flagcheck == 3">我已在等</span>
							</div>
							<div ng-if="item.state == 4 || item.state == 7">
	                           	<span ng-if="flagcheck == 1" >Before </span>
	                            <span ng-if="flagcheck == 2">ใช้ล่วงหน้า </span>
	                            <span ng-if="flagcheck == 3">提前使用</span>
							</div> 
							<div ng-if="item.state == 15 || item.state == 14 || item.state == 33">
	                           	<span ng-if="flagcheck == 1">Location share</span>
					             <span ng-if="flagcheck == 2">แชร์ตำแหน่ง</span>
					             <span ng-if="flagcheck == 3">位置共享</span>
							</div> 
							<div ng-if="item.state == 10 || item.state == 11">
	                           	<span ng-if="flagcheck == 1" >Call</span>
								<span ng-if="flagcheck == 2">โทร </span>
								<span ng-if="flagcheck == 3">通话</span>
							</div> 
							<div ng-if="item.state == 17 || item.state == 24">
	                           	<span ng-if="flagcheck == 1" >Change flight</span>
								<span ng-if="flagcheck == 2">เปลี่ยนเที่ยวบิน </span>
								<span ng-if="flagcheck == 3">换航班</span>
							</div>
							<div ng-if="item.state == 18 || item.state == 25">
	                           	<span ng-if="flagcheck == 1" >Landing</span>
								<span ng-if="flagcheck == 2">เครื่องบินลงจอด </span>
								<span ng-if="flagcheck == 3">飞机降落</span>
							</div> 
							<div ng-if="item.state == 19 || item.state == 26">
	                           	<span ng-if="flagcheck == 1" >On the car</span>
								<span ng-if="flagcheck == 2">อยู่บนรถ </span>
								<span ng-if="flagcheck == 3">在车上</span>
							</div>
							<div ng-if="item.state == 20 || item.state == 27">
	                           	<span ng-if="flagcheck == 1" >Lost</span>
								<span ng-if="flagcheck == 2">ลืมของ </span>
								<span ng-if="flagcheck == 3">丢失</span>
							</div>
							<div ng-if="item.state == 21 || item.state == 28">
	                           	<span ng-if="flagcheck == 1" >Restaurant</span>
								<span ng-if="flagcheck == 2">ร้านอาหาร </span>
								<span ng-if="flagcheck == 3">餐厅</span>
							</div>
							<div ng-if="item.state == 22 || item.state == 29">
	                           	<span ng-if="flagcheck == 1" >Attractions</span>
								<span ng-if="flagcheck == 2">แหล่งท่องเที่ยว </span>
								<span ng-if="flagcheck == 3">景点</span>
							</div>   

                        </td>
                        <td  width="40"  align="center">
						
                         <div ng-if="item.comment_from == 'customer'">
                           <img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="background:none !important;display: inline-block;" >
				          </div>
									  
						                         <div ng-if="item.comment_from != 'customer'">
                           <img src="images/arrow-l.png?v=<?=$cache;?>" width="20" style="background:none !important;display: inline-block;" >
							          </div>
                
    
                          
                      </td>
                        <td  width="40" style="border-radius: 0 8px 0 0;" align="center"> 
 
                         <div ng-if="item.comment_from == 'customer'">
      <img src="images/icon/user/{{item.comment_to}}.png?v=<?=$cache;?>" width="30" style="display: inline-block; " >
				          </div>
									  
 
                         <div ng-if="item.comment_from != 'customer'">
      <img src="images/icon/user/{{item.comment_from}}.png?v=<?=$cache;?>" width="30" style="display: inline-block; " >
				          </div>
                






                          </td>
                        
                    </tr>
                    <!-- ========= STATE !======== -->

                    <tr ng-if="item.state == 1" style="    background: #f0f0f0;">
                         
                        <td  width="40" align="center" style="padding: 8px 0;">
                            <img src="images/usercar_after.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0">
                            
                            <span ng-if="flagcheck == 1" >Delay </span>
                            <span ng-if="flagcheck == 2">เลื่อนการใช้ </span>
                            <span ng-if="flagcheck == 3">推迟使用</span>
                            <span ng-bind="'('+item.flight_delay+')'"></span>
                            <div style="display: inline-block;margin-left: 10px;color: #FF9800;" ng-if="item.status_confirm == 0">
                              <span ng-if="flagcheck == 1">Wait CFM</span>
                              <span ng-if="flagcheck == 2">รอยืนยัน</span>
                              <span ng-if="flagcheck == 3">等确认</span>
                            </div>
                            <div style="display: inline-block;margin-left: 10px;color: #1db423;" ng-if="item.status_confirm == 1">
                              <span ng-if="flagcheck == 1">Confirmed</span>
                              <span ng-if="flagcheck == 2">ยืนยันแล้ว</span>
                              <span ng-if="flagcheck == 3">已确认</span>
                            </div>
                            <span ng-bind="item.finaltime"></span>
                        </td>
                    </tr>
                   
                    <tr ng-if="item.state == 1" style="    background: #f0f0f0;">
                       
                      <td   width="40" style="padding: 8px 0;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td align="center" ng-click="locationall(item)" width="50"  style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>"  width="30">
                      </td>
                    </tr>
                     <tr ng-if="item.state == 1" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>

						
					</div>
                    		
                    	</td>
                    </tr>


                    <!-- ================STATE 2 ============= -->
                    <tr ng-if="item.state == 2 || item.state == 31 " style="    background: #f0f0f0;">
                        <td  width="40" align="center" >
                          <img src="images/all_message.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <span ng-bind="item.comment"></span>
                        </td>
                    </tr>
                    <tr ng-if="item.state == 2 || item.state == 31 " style="    background: #f0f0f0;">
                      <td  width="40" style="padding: 8px 0;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" style="">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50" style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationall(item)" width="30" >
                      </td> 
                    </tr>
                     <tr ng-if="item.state == 2 || item.state == 31 " >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>
						
					</div>
                    		
                    	</td>
                    </tr>
					
					
					
					
					
                     <!-- ================STATE 3 ============= -->
                    
                    <tr ng-if="item.state == 3" style="    background: #f0f0f0;">
                        <td   width="40" align="center" style="padding: 8px 0">
                            <img src="images/clock_wait.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="5" style="padding: 8px 0;">
                            <span ng-if="flagcheck == 1" >Waiting </span>
                            <span ng-if="flagcheck == 2">ฉันรออยู่แล้ว </span>
                            <span ng-if="flagcheck == 3">我已在等</span>
                        </td>
                        <td align="center" width="50" ng-click="showimages1all(item)"><span ></span>
                        <img src="images/camera.png?v=<?=$cache;?>" width="25">
                      </td>
                    </tr>
                    <tr ng-if="item.state == 3" style="    background: #f0f0f0;">
                      <td  width="40" style="padding: 8px 0;" align="center"  >
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td  ></td>
                      <td colspan="5">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td align="center"  ng-click="locationall(item)" width="50" style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>"  width="30" >
                      </td>
                    </tr>
                    <tr ng-if="item.state == 3" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>
						
					</div>
                    		
                    	</td>
                    </tr>
                    <!-- ========= STATE 4======== -->
                    <tr ng-if="item.state == 4" style="background: #f0f0f0;">
                         
                        <td  width="40" align="center" style="padding: 8px 0;">
                            <img src="images/usercar_befor.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0">
                             <span ng-if="flagcheck == 1" >Before </span>
                             <span ng-if="flagcheck == 2">ใช้ล่วงหน้า </span>
                             <span ng-if="flagcheck == 3">提前使用</span>
                             <span ng-bind="'('+item.flight_delay+')'"></span>
                            <div style="display: inline-block;margin-left: 10px;color: #FF9800;">
                              <span ng-if="flagcheck == 1">Wait CFM</span>
                              <span ng-if="flagcheck == 2">รอยืนยัน</span>
                              <span ng-if="flagcheck == 3">等确认</span>
                            </div>
                            <div style="display: inline-block;margin-left: 10px;color: #1db423;" ng-if="item.status_confirm == 1">
                              <span ng-if="flagcheck == 1">Confirmed</span>
                              <span ng-if="flagcheck == 2">ยืนยันแล้ว</span>
                              <span ng-if="flagcheck == 3">已确认</span>
                            </div>
                            <span ng-bind="item.ncrefinaltime"></span>
                        </td>
                    </tr>
                    <tr ng-if="item.state == 4" style="    background: #f0f0f0;">
                      <td width="40" style="padding: 8px 0;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td align="center"   ng-click="locationall(item)" width="50" style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>"  width="30">
                      </td>
                    </tr>
                     <tr ng-if="item.state == 4" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>
						
					</div>
                    		
                    	</td>
                    </tr>
                    
                     <tr ng-if="item.state == 10" style="background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <img src="images/phone.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <span ng-if="flagcheck == 1" >Customer calls to the driver</span>
                            <span ng-if="flagcheck == 2" >ลูกค้าโทรหาคนขับรถ</span>
                            <span ng-if="flagcheck == 3" >客户打电话给司机</span>
                        </td>
                    </tr>
                    <tr ng-if="item.state == 10" style="background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" style="border-radius: 0 0 8px 0;">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50" ng-click="locationall(item)" style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>"  width="30">
                      </td>
                    </tr>
                     <tr ng-if="item.state == 10" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>
						
					</div>
                    		
                    	</td>
                    </tr>
                    <tr ng-if="item.state == 12" style="    background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <img src="images/all_message.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <div ng-repeat="m in messagedataStoreall" ng-if="m.id == item.id_comment">
                            	 <span ng-if="flagcheck == 1" ng-bind="m.topic_en" ></span>
                            	 <span ng-if="flagcheck == 2" ng-bind="m.topic_th" ></span>
                            	 <span ng-if="flagcheck == 3" ng-bind="m.topic_cn" ></span>
                            </div>
                        </td>
                    </tr>
                    <tr ng-if="item.state == 12" style="    background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" >
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50" style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationall(item)" width="30" >
                      </td>
                    </tr>
                     <tr ng-if="item.state == 12" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}" style="width: 100%;    height: 100%; border:none "></iframe>
						
					</div>
                    		
                    	</td>
                    </tr>

                    <tr ng-if="item.state == 18" style="    background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <img src="img/landing.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <div ng-repeat="m in messagedataStoreall" ng-if="m.id == item.id_comment">
                            	 <span ng-if="flagcheck == 1" ng-bind="m.topic_en" ></span>
                            	 <span ng-if="flagcheck == 2" ng-bind="m.topic_th" ></span>
                            	 <span ng-if="flagcheck == 3" ng-bind="m.topic_cn" ></span>
                            </div>
                        </td>
                    </tr>
                    <tr ng-if="item.state == 18" style="background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" >
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50" style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationall(item)" width="30" >
                      </td>
                    </tr>
                     <tr ng-if="item.state == 18" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>
						
					</div>
                    		
                    	</td>
                    </tr>
                    <tr ng-if="item.state == 19" style="background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <img src="img/onthecar.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <div ng-repeat="m in messagedataStoreall" ng-if="m.id == item.id_comment">
                            	 <span ng-if="flagcheck == 1" ng-bind="m.topic_en" ></span>
                            	 <span ng-if="flagcheck == 2" ng-bind="m.topic_th" ></span>
                            	 <span ng-if="flagcheck == 3" ng-bind="m.topic_cn" ></span>
                            </div>
                        </td>
                    </tr>
                    <tr ng-if="item.state == 19" style="background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50" style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationall(item)" width="30" >
                      </td>
                    </tr>
                     <tr ng-if="item.state == 19" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>
						
					</div>
                    		
                    	</td>
                    </tr>
                    <tr ng-if="item.state == 20" style="background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <img src="img/lost.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <div ng-repeat="m in messagedataStoreall" ng-if="m.id == item.id_comment">
                            	 <span ng-if="flagcheck == 1" ng-bind="m.topic_en" ></span>
                            	 <span ng-if="flagcheck == 2" ng-bind="m.topic_th" ></span>
                            	 <span ng-if="flagcheck == 3" ng-bind="m.topic_cn" ></span>
                            </div>
                        </td>
                    </tr>
                    <tr ng-if="item.state == 20" style="background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" >
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50" style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationall(item)" width="30" >
                      </td>
                    </tr>
                     <tr ng-if="item.state == 20" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>
						
					</div>
                    		
                    	</td>
                    </tr>
                    <tr ng-if="item.state == 21" style="background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <img src="img/restaurant.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <div ng-repeat="m in messagedataStoreall" ng-if="m.id == item.id_comment">
                            	 <span ng-if="flagcheck == 1" ng-bind="m.topic_en" ></span>
                            	 <span ng-if="flagcheck == 2" ng-bind="m.topic_th" ></span>
                            	 <span ng-if="flagcheck == 3" ng-bind="m.topic_cn" ></span>
                            </div>
                        </td>
                    </tr>
                    <tr ng-if="item.state == 21" style="background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50" style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationall(item)" width="30" >
                      </td>
                    </tr>
                     <tr ng-if="item.state == 21" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>
						
					</div>
                    		
                    	</td>
                    </tr>
                    <tr ng-if="item.state == 22" style="background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <img src="img/attraction.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <div ng-repeat="m in messagedataStoreall" ng-if="m.id == item.id_comment">
                            	 <span ng-if="flagcheck == 1" ng-bind="m.topic_en" ></span>
                            	 <span ng-if="flagcheck == 2" ng-bind="m.topic_th" ></span>
                            	 <span ng-if="flagcheck == 3" ng-bind="m.topic_cn" ></span>
                            </div>
                        </td>
                    </tr>
                    <tr ng-if="item.state == 22" style="background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" >
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50" style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationall(item)" width="30" >
                      </td>
                    </tr>
                     <tr ng-if="item.state == 22" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>
						
					</div>
                    		
                    	</td>
                    </tr>
                    <!-- *********************************************TO OP****************************** -->
                    <!-- ========= STATE 5======== -->
                    <tr ng-if="item.state == 5" style="background: #f0f0f0;">                        
                        <td  width="40" align="center" >
                          <img src="images/all_message.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <span ng-bind="item.comment"></span>
                        </td>
                    </tr>
                    <tr ng-if="item.state == 5" style="background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50" style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationall(item)" width="30" >
                      </td>
                    </tr>
                     <tr ng-if="item.state == 5" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>
						
					</div>
                    		
                    	</td>
                    </tr>
                    <tr ng-if="item.state == 8" style="background: #f0f0f0;">
                         
                        <td  width="40" align="center" style="padding: 8px 0;">
                            <img src="images/usercar_after.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0">
                            
                            <span ng-if="flagcheck == 1" >Delay </span>
                            <span ng-if="flagcheck == 2">เลื่อนการใช้ </span>
                            <span ng-if="flagcheck == 3">推迟使用</span>
                            <span ng-bind="'('+item.flight_delay+')'"></span>
                            <div style="display: inline-block;margin-left: 10px;color: #FF9800;" ng-if="item.status_confirm == 0">
                              <span ng-if="flagcheck == 1">Wait CFM</span>
                              <span ng-if="flagcheck == 2">รอยืนยัน</span>
                              <span ng-if="flagcheck == 3">等确认</span>
                            </div>
                            <div style="display: inline-block;margin-left: 10px;color: #1db423;" ng-if="item.status_confirm == 1">
                              <span ng-if="flagcheck == 1">Confirmed</span>
                              <span ng-if="flagcheck == 2">ยืนยันแล้ว</span>
                              <span ng-if="flagcheck == 3">已确认</span>
                            </div>
                            <span ng-bind="item.finaltime"></span>
                        </td>
                    </tr>
                    <tr ng-if="item.state == 8" style="background: #f0f0f0;">
                       
                      <td   width="40" style="padding: 8px 0;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td align="center" ng-click="locationall(item)" width="50" style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>"  width="30">
                      </td>
                    </tr>
                     <tr ng-if="item.state == 8" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>
						
					</div>
                    		
                    	</td>
                    </tr>

                    <tr ng-if="item.state == 9" style="background: #f0f0f0;">
                        
                         
                        <td   width="40" align="center" style="padding: 8px 0">
                            
                                <img src="images/clock_wait.png?v=<?=$cache;?>" width="25">
                           
                        </td>
                        <td  ></td>
                        <td colspan="5" style="padding: 8px 0;">
                            <span ng-if="flagcheck == 1" >Waiting </span>
                            <span ng-if="flagcheck == 2">ฉันรออยู่แล้ว </span>
                            <span ng-if="flagcheck == 3">我已在等</span>
                        </td>
                        
                        <td align="center" width="50"  ng-click="showimages1all(item)">
                        <img src="images/camera.png?v=<?=$cache;?>" width="25" >
                      </td>

                    </tr>
                    <tr ng-if="item.state == 9" style="    background: #f0f0f0;">
                      
                      
                      <td  width="40" style="padding: 8px 0;" align="center"  >
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td  ></td>
                      <td colspan="5">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td align="center" width="50" style="    border-radius: 0 0 8px 0;" >
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationall(item)" width="30" >
                      </td>
                    </tr>
                     <tr ng-if="item.state == 9" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>
					</div>
                    		
                    	</td>
                    </tr>
                    <!-- ================STATE 7 ============= -->
                    <tr ng-if="item.state == 7" style="background: #f0f0f0;">
                         
                        <td  width="40" align="center" style="padding: 8px 0;">
                            <img src="images/usercar_befor.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0">
                            
                             <span ng-if="flagcheck == 1" >Before </span>
                             <span ng-if="flagcheck == 2">ใช้ล่วงหน้า </span>
                             <span ng-if="flagcheck == 3">提前使用</span>
                             <span ng-bind="'('+item.flight_delay+')'"></span>
                            <div style="display: inline-block;margin-left: 10px;color: #FF9800;">
                              <span ng-if="flagcheck == 1">Wait CFM</span>
                              <span ng-if="flagcheck == 2">รอยืนยัน</span>
                              <span ng-if="flagcheck == 3">等确认</span>
                            </div>
                            <span ng-bind="item.ncrefinaltime"></span>
                        </td>
                    </tr>
                    <tr ng-if="item.state == 7" style="background: #f0f0f0;">
                       
                      <td width="40" style="padding: 8px 0;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td align="center" width="50" style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationall(item)" width="30" >
                      </td>
                    </tr>
                 	 <tr ng-if="item.state == 7" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>
					</div>
                    	</td>
                    </tr>
                    
                    
                     <tr ng-if="item.state == 11" style="background: #f0f0f0;">
                        <td  width="40" align="center" >
                          <img src="images/phone.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <span ng-if="flagcheck == 1" >Customer calls to the OP</span>
                            <span ng-if="flagcheck == 2" >ลูกค้าโทรหา OP</span>
                            <span ng-if="flagcheck == 3" >客户打电话给客服</span>
                        </td>
                    </tr>
                    <tr ng-if="item.state == 11" style="background: #f0f0f0;">
                      <td  width="40" style="padding: 8px 0;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50" style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationall(item)" width="30" >
                      </td>
                    </tr>
                     <tr ng-if="item.state == 11" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>
						
					</div>
                    		
                    	</td>
                    </tr>
                    <tr ng-if="item.state == 13" style="background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <img src="images/all_message.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <div ng-repeat="m in messagedataStoreall" ng-if="m.id == item.id_comment">
                            	 <span ng-if="flagcheck == 1" ng-bind="m.topic_en" ></span>
                            	 <span ng-if="flagcheck == 2" ng-bind="m.topic_th" ></span>
                            	 <span ng-if="flagcheck == 3" ng-bind="m.topic_cn" ></span>
                            </div>
                        </td>
                       
                        

                    </tr>
                    <tr ng-if="item.state == 13" style="background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50" style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationall(item)" width="30">
                      </td>
                    </tr>
                     <tr ng-if="item.state == 13" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>
						
					</div>
                    		
                    	</td>
                    </tr>
                    <tr ng-if="item.state == 14" style="background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 35px; color: #3b5998;"></i>
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
				           <a href="https://maps.google.com/maps?q={{item.latitude}},{{item.longitude}}&hl=th;z=14&output=embed" target="_blank">
				            <!-- <i class="fa  fa-map-marker bg-blue" style="z-index:1; color:#3b5998 "></i> -->
								<span ng-if="flagcheck == 1">Location share</span>
					             <span ng-if="flagcheck == 2">แชร์ตำแหน่ง</span>
					             <span ng-if="flagcheck == 3">位置共享</span>
					        </a>
									
							
                        </td>
                       
                        

                    </tr>
                    <tr ng-if="item.state == 14" style="background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" >
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50" style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationall(item)" width="30"  >
                      </td>
                    </tr>
                     <tr ng-if="item.state == 14" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>
						
					</div>
                    		
                    	</td>
                    </tr>
                    <tr ng-if="item.state == 15" style="background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 35px; color: #3b5998;"></i>
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
              <a href="https://maps.google.com/maps?q={{item.latitude}},{{item.longitude}}&hl=th;z=14&output=embed" target="_blank">
				            <!-- <i class="fa  fa-map-marker bg-blue" style="z-index:1; color:#3b5998 "></i> -->
								<span ng-if="flagcheck == 1">Location share</span>
					             <span ng-if="flagcheck == 2">แชร์ตำแหน่ง</span>
					             <span ng-if="flagcheck == 3">位置共享</span>
					        </a>
                        </td>
                       
                        

                    </tr>
                    <tr ng-if="item.state == 15" style="background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" >
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50" style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationall(item)" width="30" >
                      </td>
                    </tr>
                     <tr ng-if="item.state == 15" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>
						
					</div>
                    		
                    	</td>
                    </tr>
                    <tr ng-if="item.state == 16" style="background: #f0f0f0;">
                         
                        <td  width="40" align="center" style="padding: 8px 0;">
                            <img src="img/delayf.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0">
                            
                            <span ng-if="flagcheck == 1" >Delay </span>
                            <span ng-if="flagcheck == 2">เลื่อนการใช้ </span>
                            <span ng-if="flagcheck == 3">推迟使用</span>
                            <span ng-bind="'('+item.flight_delay+')'"></span>
                            <div style="display: inline-block;margin-left: 10px;color: #FF9800;" ng-if="item.status_confirm == 0">
                              <span ng-if="flagcheck == 1">Wait CFM</span>
                              <span ng-if="flagcheck == 2">รอยืนยัน</span>
                              <span ng-if="flagcheck == 3">等确认</span>
                            </div>
                            <div style="display: inline-block;margin-left: 10px;color: #1db423;" ng-if="item.status_confirm == 1">
                              <span ng-if="flagcheck == 1">Confirmed</span>
                              <span ng-if="flagcheck == 2">ยืนยันแล้ว</span>
                              <span ng-if="flagcheck == 3">已确认</span>
                            </div>
                            <span ng-bind="item.finaltime"></span>
                        </td>
                    </tr>
                    <tr ng-if="item.state == 16" style="background: #f0f0f0;">
                       
                      <td   width="40" style="padding: 8px 0;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td align="center" ng-click="locationall(item)" width="50" style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>"  width="30">
                      </td>
                    </tr>
                     <tr ng-if="item.state == 16" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>
						
					</div>
                    		
                    	</td>
                    </tr>
                    <tr ng-if="item.state == 17" style="background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <img src="img/change.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
			              <span ng-if="flagcheck == 1">Flight</span>
			              <span ng-if="flagcheck == 2">เที่ยวบิน</span>
			              <span ng-if="flagcheck == 3">航班</span>
			              <span>:</span>
			              <span ng-bind="item.new_flight"></span>
			               <span>/</span>
			              <span ng-bind="item.ondate_new_flight"></span>
			              <span>/</span>
			              <span ng-bind="item.flight_delay"></span>
			               <div style="display: inline-block;color: #FF9800;">
                              <span ng-if="flagcheck == 1">Wait CFM</span>
                              <span ng-if="flagcheck == 2">รอยืนยัน</span>
                              <span ng-if="flagcheck == 3">等确认</span>
                            </div>
                            <div style="display: inline-block;color: #1db423;" ng-if="item.status_confirm == 1">
                              <span ng-if="flagcheck == 1">Confirmed</span>
                              <span ng-if="flagcheck == 2">ยืนยันแล้ว</span>
                              <span ng-if="flagcheck == 3">已确认</span>
                            </div>
                        </td>
                       
                        

                    </tr>
                    <tr ng-if="item.state == 17" style="background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" >
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50" style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationall(item)" width="30" >
                      </td>
                    </tr>
                     <tr ng-if="item.state == 17" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>
						
					</div>
                    		
                    	</td>
                    </tr>
                    <tr ng-if="item.state == 23" style="background: #f0f0f0;">
                        <td  width="40" align="center" style="padding: 8px 0;">
                            <img src="img/delayf.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0">
                            <span ng-if="flagcheck == 1" >Delay </span>
                            <span ng-if="flagcheck == 2">เลื่อนการใช้ </span>
                            <span ng-if="flagcheck == 3">推迟使用</span>
                            <span ng-bind="'('+item.flight_delay+')'"></span>
                            <div style="display: inline-block;margin-left: 10px;color: #FF9800;" ng-if="item.status_confirm == 0">
                              <span ng-if="flagcheck == 1">Wait CFM</span>
                              <span ng-if="flagcheck == 2">รอยืนยัน</span>
                              <span ng-if="flagcheck == 3">等确认</span>
                            </div>
                            <div style="display: inline-block;margin-left: 10px;color: #1db423;" ng-if="item.status_confirm == 1">
                              <span ng-if="flagcheck == 1">Confirmed</span>
                              <span ng-if="flagcheck == 2">ยืนยันแล้ว</span>
                              <span ng-if="flagcheck == 3">已确认</span>
                            </div>
                            <span ng-bind="item.finaltime"></span>
                        </td>
                    </tr>
                    <tr ng-if="item.state == 23" style="background: #f0f0f0;">
                       
                      <td   width="40" style="padding: 8px 0;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td align="center" ng-click="locationall(item)" width="50" style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>"  width="30">
                      </td>
                    </tr>
                     <tr ng-if="item.state == 23" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>
						
					</div>
                    		
                    	</td>
                    </tr>
                    <tr ng-if="item.state == 24" style="background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <img src="img/change.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
			              <span ng-if="flagcheck == 1">Flight</span>
			              <span ng-if="flagcheck == 2">เที่ยวบิน</span>
			              <span ng-if="flagcheck == 3">航班</span>
			              <span>:</span>
			              <span ng-bind="item.new_flight"></span>
			               <span>/</span>
			              <span ng-bind="item.ondate_new_flight"></span>
			              <span>/</span>
			              <span ng-bind="item.flight_delay"></span>
			               <div style="display: inline-block;color: #FF9800;">
                              <span ng-if="flagcheck == 1">Wait CFM</span>
                              <span ng-if="flagcheck == 2">รอยืนยัน</span>
                              <span ng-if="flagcheck == 3">等确认</span>
                            </div>
                            <div style="display: inline-block;color: #1db423;" ng-if="item.status_confirm == 1">
                              <span ng-if="flagcheck == 1">Confirmed</span>
                              <span ng-if="flagcheck == 2">ยืนยันแล้ว</span>
                              <span ng-if="flagcheck == 3">已确认</span>
                            </div>
                        </td>
                    </tr>
                    <tr ng-if="item.state == 24" style="background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" >
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50" style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationall(item)" width="30" >
                      </td>
                    </tr>
                     <tr ng-if="item.state == 24" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>
					</div>
                    		
                    	</td>
                    </tr>
                    <tr ng-if="item.state == 25" style="background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <img src="img/landing.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <div ng-repeat="m in messagedataStoreall" ng-if="m.id == item.id_comment">
                            	 <span ng-if="flagcheck == 1" ng-bind="m.topic_en" ></span>
                            	 <span ng-if="flagcheck == 2" ng-bind="m.topic_th" ></span>
                            	 <span ng-if="flagcheck == 3" ng-bind="m.topic_cn" ></span>
                            </div>
                        </td>
                    </tr>
                    <tr ng-if="item.state == 25" style="background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" >
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50" style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationall(item)" width="30" >
                      </td>
                    </tr>
                     <tr ng-if="item.state == 25" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>
						
					</div>
                    		
                    	</td>
                    </tr>
                    <tr ng-if="item.state == 26" style="background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <img src="img/onthecar.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <div ng-repeat="m in messagedataStoreall" ng-if="m.id == item.id_comment">
                            	 <span ng-if="flagcheck == 1" ng-bind="m.topic_en" ></span>
                            	 <span ng-if="flagcheck == 2" ng-bind="m.topic_th" ></span>
                            	 <span ng-if="flagcheck == 3" ng-bind="m.topic_cn" ></span>
                            </div>
                        </td>
                    </tr>
                    <tr ng-if="item.state == 26" style="background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50" style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationall(item)" width="30" >
                      </td>
                    </tr>
                     <tr ng-if="item.state == 26" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>
						
					</div>
                    		
                    	</td>
                    </tr>
                    <tr ng-if="item.state == 27" style="background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <img src="img/lost.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <div ng-repeat="m in messagedataStoreall" ng-if="m.id == item.id_comment">
                            	 <span ng-if="flagcheck == 1" ng-bind="m.topic_en" ></span>
                            	 <span ng-if="flagcheck == 2" ng-bind="m.topic_th" ></span>
                            	 <span ng-if="flagcheck == 3" ng-bind="m.topic_cn" ></span>
                            </div>
                        </td>
                    </tr>
                    <tr ng-if="item.state == 27" style="background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" >
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50" style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationall(item)" width="30" >
                      </td>
                    </tr>
                     <tr ng-if="item.state == 27" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>
						
					</div>
                    		
                    	</td>
                    </tr>
                    <tr ng-if="item.state == 28" style="    background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <img src="img/restaurant.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                           <div ng-repeat="m in messagedataStoreall" ng-if="m.id == item.id_comment">
                            	 <span ng-if="flagcheck == 1" ng-bind="m.topic_en" ></span>
                            	 <span ng-if="flagcheck == 2" ng-bind="m.topic_th" ></span>
                            	 <span ng-if="flagcheck == 3" ng-bind="m.topic_cn" ></span>
                            </div>
                        </td>
                    </tr>
                    <tr ng-if="item.state == 28" style="    background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;" align="center">

                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" >
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50" style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationall(item)" width="30" >
                      </td>
                    </tr>
                     <tr ng-if="item.state == 28" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>
						
					</div>
                    		
                    	</td>
                    </tr>
                    <tr ng-if="item.state == 29" style=" background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <img src="img/attraction.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <div ng-repeat="m in messagedataStoreall" ng-if="m.id == item.id_comment">
                            	 <span ng-if="flagcheck == 1" ng-bind="m.topic_en" ></span>
                            	 <span ng-if="flagcheck == 2" ng-bind="m.topic_th" ></span>
                            	 <span ng-if="flagcheck == 3" ng-bind="m.topic_cn" ></span>
                            </div>
                        </td>
                    </tr>
                    <tr ng-if="item.state == 29" style="    background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" >
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50" style="    border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationall(item)" width="30" >
                      </td>
                    </tr>
                     <tr ng-if="item.state == 29" >
                    	<td colspan="8">
                    		<div class="locationmap" id="slocationdelaydriver{{item.id}}">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;    height: 100%; border:none "></iframe>
						
					</div>
                    		
                    	</td>
                    </tr>
                </table>
                <span id="hiddentory"></span>
                </div>
				
				         </div>

    </div>

  </div>