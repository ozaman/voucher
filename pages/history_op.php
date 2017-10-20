<div data-role="page" id="Guest-detail"  class="bg-body" ng-dblclick="doubleClick()">

<div style="padding: 0 10px;">
                
                
                    <div class="record" ng-repeat="item in getallchatservice" id="anchormenuop{{item.id}}" style="border: 1px solid #ddd; border-radius: 8px;margin-bottom: 10px;">
                <table id="record" width="100%" style="font-size: 16px;border-color: none !important" >
                    <tr style="background-color: #ddd;">
                        <td width="40" style="padding: 8px 0;border-radius: 8px 0 0 0;" align="center">
                          <div ng-if="item.comment_from == 'customer'">
                              <img src="images/me.png?v=<?=$cache;?>" width="30"> 
                          </div>

                          <div ng-if="item.comment_from == 'driver'">
                              <img src="images/driver.png?v=<?=$cache;?>" width="30"> 
                          </div>
                          <div ng-if="item.comment_from == 'callcenter'">
                              <img src="images/call.png?v=<?=$cache;?>" width="30">
                          </div>
                          <div ng-if="item.comment_from == 'agent'">
                              <img src="images/ser.png?v=<?=$cache;?>" width="30">
                          </div>
                          <div ng-if="item.comment_from == 'operator'">
                              <img src="images/dervice P.png?v=<?=$cache;?>" width="30">
                          </div>
                          
                        </td>
                        <td width="20"></td>
                        <td   colspan="4" style="padding: 8px 0" >
                           <span ng-bind="item.guest"></span> 
                        </td>
                        <td  width="40"  align="center">
                          <div >
                          <img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="background:none !important;display: inline-block;" >
                          </div>
                          
                          </td>
                        <td  width="40" style="border-radius: 0 8px 0 0;" align="center">
                               <img src="images/callchat.png?v=<?=$cache;?>" width="25" style="display: inline-block; " ng-if="item.state == 5 || item.state == 7 || item.state == 8 || item.state == 9 || item.state == 11 || item.state == 13 || item.state == 15" >
                              <img src="images/driverchat.png?v=<?=$cache;?>" width="25" style="display: inline-block; " ng-if="item.state == 2 || item.state == 1 || item.state == 3 || item.state == 4 || item.state == 10 || item.state == 12 || item.state == 14">

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
                       
                      <td   width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td align="center" ng-click="locationdelayTodriverall(item)" width="50">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>"  width="30">
                      </td>
                    </tr>


                    <!-- ================STATE 2 ============= -->
                    <tr ng-if="item.state == 2" style="    background: #f0f0f0;">
                        <td  width="40" align="center" >
                          <img src="images/all_message.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <span ng-bind="item.comment"></span>
                        </td>
                    </tr>
                    <tr ng-if="item.state == 2" style="    background: #f0f0f0;">
                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" style="border-radius: 0 0 8px 0;">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationchatall(item)" width="30">
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
                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center"  >
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td  ></td>
                      <td colspan="5">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td align="center"  ng-click="locationwaitTodriverall(item)" width="50">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>"  width="30" >
                      </td>
                    </tr>
                   
                    <!-- ========= STATE 4======== -->
                    <tr ng-if="item.state == 4" style="    background: #f0f0f0;">
                         
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
                      <td   width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td align="center"   ng-click="locationbeforeTodriverall(item)" width="50">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>"  width="30">
                      </td>
                    </tr>
                    <!-- ========= STATE 5======== -->
                    <tr ng-if="item.state == 5" style="    background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <img src="images/all_message.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <span ng-bind="item.comment"></span>
                        </td>
                    </tr>
                    <tr ng-if="item.state == 5" style="    background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" style="border-radius: 0 0 8px 0;">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="Pickupplace(item)" width="30">
                      </td>
                    </tr>
                     <tr ng-if="item.state == 10" style="    background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <img src="images/phone.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <span ng-bind="item.comment"></span>
                        </td>
                    </tr>
                    <tr ng-if="item.state == 10" style="    background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" style="border-radius: 0 0 8px 0;">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationchatusd(item)" width="30">
                      </td>
                    </tr>
                    <tr ng-if="item.state == 12" style="    background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <img src="images/all_message.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <span ng-bind="item.comment"></span>
                        </td>
                    </tr>
                    <tr ng-if="item.state == 12" style="    background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" style="border-radius: 0 0 8px 0;">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationchatusd(item)" width="30">
                      </td>
                    </tr>
                    <!-- *********************************************TO OP****************************** -->
                    <tr ng-if="item.state == 8" style="    background: #f0f0f0;">
                         
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
                    <tr ng-if="item.state == 8" style="    background: #f0f0f0;">
                       
                      <td   width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td align="center" ng-click="locationdelayTodriverall(item)" width="50">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>"  width="30">
                      </td>
                    </tr>

                    <tr ng-if="item.state == 9" style="    background: #f0f0f0;">
                        
                         
                        <td   width="40" align="center" style="padding: 8px 0">
                            
                                <img src="images/clock_wait.png?v=<?=$cache;?>" width="25">
                           
                        </td>
                        <td  ></td>
                        <td colspan="5" style="padding: 8px 0;">
                            <span ng-if="flagcheck == 1" >Waiting </span>
                            <span ng-if="flagcheck == 2">ฉันรออยู่แล้ว </span>
                            <span ng-if="flagcheck == 3">我已在等</span>
                        </td>
                        
                        <td align="center" width="50"  ng-click="showimages1_toopall(item)">
                        <img src="images/camera.png?v=<?=$cache;?>" width="25" >
                      </td>

                    </tr>
                    <tr ng-if="item.state == 9" style="    background: #f0f0f0;">
                      
                      
                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center"  >
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td  ></td>
                      <td colspan="5">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td align="center" width="50"  >
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationwaitToopall(item)" width="30" >
                      </td>
                    </tr>
                    <!-- ================STATE 7 ============= -->
                   
                    
                    <tr ng-if="item.state == 7" style="    background: #f0f0f0;">
                         
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
                    <tr ng-if="item.state == 7" style="    background: #f0f0f0;">
                       
                      <td   width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td align="center" width="50">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="Pickupplace_toopall(item)" width="30">
                      </td>
                    </tr>
                 
                    
                    
                     <tr ng-if="item.state == 11" style="    background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <img src="images/phone.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <span ng-bind="item.comment"></span>
                        </td>
                       
                        

                    </tr>
                    <tr ng-if="item.state == 11" style="    background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" style="border-radius: 0 0 8px 0;">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="Pickupplace(item)" width="30">
                      </td>
                    </tr>
                    <tr ng-if="item.state == 13" style="    background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <img src="images/all_message.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <span ng-bind="item.comment"></span>
                        </td>
                       
                        

                    </tr>
                    <tr ng-if="item.state == 13" style="    background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" style="border-radius: 0 0 8px 0;">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="Pickupplace(item)" width="30">
                      </td>
                    </tr>
                    <tr ng-if="item.state == 14" style="    background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 35px; color: #3b5998;"></i>
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <span ng-if="flagcheck == 1">Location share</span>
                            <span ng-if="flagcheck == 2">แชร์ตำแหน่ง</span>
                            <span ng-if="flagcheck == 3">位置共享</span>
                        </td>
                       
                        

                    </tr>
                    <tr ng-if="item.state == 14" style="    background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" style="border-radius: 0 0 8px 0;">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="Pickupplace(item)" width="30">
                      </td>
                    </tr>
                    <tr ng-if="item.state == 15" style="    background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 35px; color: #3b5998;"></i>
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <span ng-if="flagcheck == 1">Location share</span>
                            <span ng-if="flagcheck == 2">แชร์ตำแหน่ง</span>
                            <span ng-if="flagcheck == 3">位置共享</span>
                        </td>
                       
                        

                    </tr>
                    <tr ng-if="item.state == 15" style="    background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" style="border-radius: 0 0 8px 0;">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="Pickupplace(item)" width="30">
                      </td>
                    </tr>
                </table>
                </div>
                </div>
   

</div>