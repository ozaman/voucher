<div data-role="page" id="Booking-information"  class="bg-body" ng-dblclick="doubleClick()">
<?php $txt_name_en = "This order details"; 
$txt_name_th = "ข้อมูลการจองนี้";
$txt_name_cn = "这订单详情"; ?> 
<?php include "pages/vc_0header.php"; ?>

    <div class="ui-content" style="">
        
        <div class="col">    
            <div class="borderdetail2">
            
            <div style="padding: 3px 3px;  border-radius: 8px; background: #fff;">
                <div style="font-size: 16px;background:#f0f0f0;border-bottom: 1px solid #ddd;">
                   <!--  <p class="infoma">
                        <span class="" ng-if="flagcheck == 1">Service:</span>
                        <span class="" ng-if="flagcheck == 2">บริการ :</span>
                        <span class="" ng-if="flagcheck == 3">旅游项目 :</span>
                    </p> -->
                    <p class="textdetail" style="display: block;font-size: 15px; color: rgba(255, 255, 255, 1.0)">
                        <span class="" ng-if="flagcheck == 1" ng-bind="topic_en"></span>
                        <span class="" ng-if="flagcheck == 2" ng-bind="topic_th"></span>
                        <span class="" ng-if="flagcheck == 3" ng-bind="topic_cn"></span>
                    </p>
                    <p class="textdetail" >
                        <span class="" ng-if="flagcheck == 1" ng-bind="web_extra_way_topic_en"></span>
                        <span class="" ng-if="flagcheck == 2" ng-bind="web_extra_way_topic_th"></span>
                        <span class="" ng-if="flagcheck == 3" ng-bind="web_extra_way_topic_cn"></span>
                    </p>
                </div>
                <table style="font-size: 16px" width="100%">
                    <tr >
                        <td width="10"></td>
                        <td width="150" style="padding: 10px 0">
                            <span  ng-if="flagcheck == 1">Voucher No :</span>
                            <span  ng-if="flagcheck == 2">เลขที่วอเชอร์ :</span>
                            <span  ng-if="flagcheck == 3">凭证编号 :</span>      
                        </td>
                        <td width="10"></td>
                        <td>
                             <span ng-bind="VOUCHER"></span>
                        </td>
                        <td width="10"></td>
                        <td align="center" style="text-align: center;" width="4%">
                            <i class="fa  fa-search pull-right" ng-click="voucherdialog()" style="font-size:20px;color: #3b5998;"></i>
                            </td>
                        <td width="2%"></td>
                    </tr>
                    <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;">
                        <td></td>
                        <td style="padding: 10px 0">
                            <span class="" ng-if="flagcheck == 1">Car type :</span>
                            <span class="" ng-if="flagcheck == 2">ประเภทรถ :</span>
                            <span class="" ng-if="flagcheck == 3">车辆类型 :</span>
                        </td>
                        <td></td>
                        <td>
                           <span ng-if="flagcheck == 1" ng-bind="web_car_topic_en+web_car_pax"></span>
                            <span ng-if="flagcheck == 2" ng-bind="web_car_topic_th+web_car_pax_th"></span>
                            <span ng-if="flagcheck == 3" ng-bind="web_car_topic_cn+web_car_pax_cn"></span> 
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr ng-if="area == 'In'">
                        <td></td>
                        <td style="padding: 10px 0">
                            <span ng-if="flagcheck == 1">Meeting point :</span>
                            <span ng-if="flagcheck == 2">จุดนัดพบ :</span>
                            <span ng-if="flagcheck == 3">迎接地点 :</span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td align="center" style="text-align: center;">
                            <i class="fa  fa-search pull-right" ng-click="meetingpoint()" style="font-size:20px;color: #3b5998;"></i>
                        </td>
                        <td></td>
                    </tr>
                    <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;">
                        <td></td>
                        <td style="padding: 10px 0">
                            <span ng-if="flagcheck == 1">Pick up sign :</span>
                            <span ng-if="flagcheck == 2">ป้ายรับแขก :</span>
                            <span ng-if="flagcheck == 3">接客牌 :</span>
                        </td>
                        <td></td>
                        <td>
                            <span>T-booking</span>
                        </td>
                        <td></td>
                        <td align="center" style="text-align: center;">
                            <i class="fa  fa-search pull-right" ng-click="pickupsign()"  style="font-size:20px;  color: #3b5998; "></i>
                        </td>
                        <td></td>
                    </tr>
                    <tr >
                        <td></td>
                        <td style="padding: 10px 0">
                            <span class="" ng-if="flagcheck == 1">Number of car :</span>
                            <span class="" ng-if="flagcheck == 2">จำนวนรถ :</span>
                            <span class="" ng-if="flagcheck == 3">车数 :</span>
                        </td>
                        <td></td>
                        <td>
                            <span ng-bind="numcar"></span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr ng-if="area != 'Point' && area != 'Rental'" style="background:#f0f0f0;border-bottom: 1px solid #ddd;">
                        <td></td>
                        <td ng-if="area == 'Out'" style="padding: 10px 0">
                            <span class="" ng-if="flagcheck == 1">Departure Date :</span>
                            <span class="" ng-if="flagcheck == 2">วันเดินทาง :</span>
                            <span class="" ng-if="flagcheck == 3">回程日期 :</span>
                        </td>
                        <td ng-if="area == 'In'" style="padding: 10px 0">
                            <span ng-if="flagcheck == 1">Arrived date : </span>
                            <span ng-if="flagcheck == 2">มาถึง :</span>
                            <span ng-if="flagcheck == 3">到达 :</span>
                        </td>
                        <td></td>
                        <td>
                            <span ng-bind="ondate"></span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                   
                    <tr ng-if="area != 'Point' && area != 'Rental'">
                        <td></td>
                        <td style="padding: 10px 0">
                            <span class="" ng-if="flagcheck == 1">Flight :</span>
                            <span class="" ng-if="flagcheck == 2">เที่ยวบิน :</span>
                            <span class="" ng-if="flagcheck == 3">航班号 :</span>
                        </td>
                        <td></td>
                        <td>
                            <span ng-bind="air"></span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                  
                    <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;">
                        <td></td>
                        <td style="padding: 10px 0">
                            <span class="" ng-if="flagcheck == 1">On Date :</span>
                            <span class="" ng-if="flagcheck == 2">วันที่ใช่บริการ :</span>
                            <span class="" ng-if="flagcheck == 3">使用日期 :</span>
                        </td>
                        <td></td>
                        <td>
                            <span ng-bind="outdate"></span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr >
                        <td></td>
                        <td style="padding: 10px 0">
                            <span class="" ng-if="flagcheck == 1">Pick up Time :</span>
                            <span class="" ng-if="flagcheck == 2">เวลารับ :</span>
                            <span class="" ng-if="flagcheck == 3">接人时间 :</span>
                        </td>
                        <td></td>
                        <td>
                            <span ng-bind="airout"></span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;">
                        <td></td>
                        <td style="padding: 10px 0">
                            <span class="" ng-if="flagcheck == 1">Type Tour :</span>
                            <span class="" ng-if="flagcheck == 2">ประเภททัวร์ :</span>
                            <span class="" ng-if="flagcheck == 3">旅行种类 :</span>
                        </td>
                        <td></td>
                        <td>
                            <span class="" ng-if="flagcheck == 1">Transfer</span>
                            <span class="" ng-if="flagcheck == 2">รถรับ-ส่ง</span>
                            <span class="" ng-if="flagcheck == 3">车接送</span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr >
                      <td></td>
                      <td style="padding: 10px 0">
                          <span class="" ng-if="flagcheck == 1">Departure Area :</span>
                          <span class="" ng-if="flagcheck == 2">พื้นที่ออกเดินทาง :</span>
                          <span class="" ng-if="flagcheck == 3">出发区域 :</span>
                      </td>
                      <td></td>
                      <td>
                          <span class="" ng-if="flagcheck == 1" ng-bind="web_province_to_name"></span>
                          <span class="" ng-if="flagcheck == 2" ng-bind="web_province_name_th"></span>
                          <span class="" ng-if="flagcheck == 3" ng-bind="web_province_name_cn"></span>
                      </td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;">
                      <td></td>
                      <td style="padding: 10px 0">
                          <span class="" ng-if="flagcheck == 1">Arrival Area :</span>
                          <span class="" ng-if="flagcheck == 2">พื้นที่ปลายทาง :</span>
                          <span class="" ng-if="flagcheck == 3">抵达区域 :</span>
                      </td>
                      <td></td>
                      <td>
                          <span class="" ng-if="flagcheck == 1" ng-bind="web_province_to_name"></span>
                          <span class="" ng-if="flagcheck == 2" ng-bind="web_province_to_name_th"></span>
                          <span class="" ng-if="flagcheck == 3" ng-bind="web_province_to_name_cn"></span>
                      </td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr >
                      <td></td>
                      <td style="padding: 10px 0">
                          <span ng-if="flagcheck == 1">Departure Location : </span>
                          <span ng-if="flagcheck == 2">ออกจากสถานที่ :</span>
                          <span ng-if="flagcheck == 3">出发地点 :</span>
                      </td>
                      <td></td>
                      <td>
                          <span ng-bind="transferplace_topic"></span>
                      </td>
                      <td></td>
                      <td>
                          <img src="images/icon/view/map.png" ng-click="Pickupplace()" width="30">
                      </td>
                      <td></td>
                    </tr>
                    <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;">
                      <td></td>
                      <td style="padding: 10px 0">
                          <span ng-if="flagcheck == 1">Arrival Location :</span>
                          <span ng-if="flagcheck == 2">สถานที่ปลายทาง :</span>
                          <span ng-if="flagcheck == 3">抵达地点 :</span>
                      </td>
                      <td></td>
                      <td>
                          <span ng-bind="transferplace_topic_to"></span>
                      </td>
                      <td></td>
                      <td>
                          <img src="images/icon/view/map.png" ng-click="Toplace()" width="30">
                      </td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td style="padding: 10px 0">
                          <span class="" ng-if="flagcheck == 1">Book by :</span>
                          <span class="" ng-if="flagcheck == 2">คนจอง :</span>
                          <span class="" ng-if="flagcheck == 3">预订人 :</span>
                      </td>
                      <td></td>
                      <td >
                          <span >
                            <i  class="fa fa-user " aria-hidden="true" style="margin-right: 10px;color: #3b5998;font-size: 20px;"></i>
                            <span ng-bind="posted"></span>
                        </span>
                        
                        
                      </td>
                      <td></td>
                      <td align="center" style="text-align: center;">
                        <i class="fa  fa-search" ng-click="bookby()"  style="font-size:20px;  color: #3b5998; float: right;padding: 5px;"></i>
                      </td>
                      <td></td>
                    </tr>
                    <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;">
                      <td></td>
                      <td style="padding: 10px 0">
                          <span class="" ng-if="flagcheck == 1">Date :</span>
                          <span class="" ng-if="flagcheck == 2">วันที่ :</span>
                          <span class="" ng-if="flagcheck == 3">日期 :</span>
                      </td>
                      <td></td>
                      <td colspan="3">
                          <span ng-bind="datebook | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      
                      <td></td>
                    </tr>
                    <tr >
                      <td></td>
                      <td style="padding: 10px 0">
                          <span class="" ng-if="flagcheck == 1">Confirm by :</span>
                          <span class="" ng-if="flagcheck == 2">ยืนยันโดย :</span>
                          <span class="" ng-if="flagcheck == 3">确认人 :</span>
                      </td>
                      <td></td>
                      <td>
                          <span ><i  class="fa fa-user" aria-hidden="true" style="margin-right: 10px;color: #3b5998;font-size: 20px;"></i>
                          <span ng-bind="user_confirm"></span>
                          </span>
                      </td>
                      <td></td>
                      <td align="center" style="text-align: center;">
                          <i class="fa  fa-search" ng-click="confirmby()"  style="font-size:20px;  color: #3b5998; float: right;padding: 5px;"></i>
                      </td>
                      <td></td>
                    </tr>
                    <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;">
                      <td></td>
                      <td style="padding: 10px 0">
                          <span class="" ng-if="flagcheck == 1">Date :</span>
                          <span class="" ng-if="flagcheck == 2">วันที่ :</span>
                          <span class="" ng-if="flagcheck == 3">日期:</span>
                      </td>
                      <td></td>
                      <td colspan="3">
                          <span ng-bind="date_confirm | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      
                      <td></td>
                    </tr>
                   
                    
                </table>
                
        </div>
        <Br/>
        <Br/>
        <Br/>
               
          </div>
          </div> 
          </div>    
     <Br/>
     <Br/>
<?php include "pages/vc_9footer.php"; ?>

    
</div>