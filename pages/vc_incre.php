<div data-role="page" id="increasetime"  class="bg-body" ng-dblclick="doubleClick()">
    <?php $txt_name_en = "Increase time"; 
$txt_name_th = "เพิ่มเวลา";
$txt_name_cn = "增加时间"; ?> 
<?php include "pages/vc_0header.php"; ?>
    
     
      <div id="icon-pageslide" align="center" data-position="fixed" >
          <div id="pagese"></div>
          <div id="pagese1"></div>
          <div id="pagese2"></div>
      </div>
    
    <div class="ui-content" >    
    
        <div class="col">    
            <div class="borderdetail2">
            <div style="padding: 3px 2px; background: #fff; border-radius: 8px;">
                    
                    <div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;">
					
					
					
					
                       
                        <table style=" border-color: #f0f0f0;border-style: none !important;" width="100%">
                            <tr>
                                <td width="2%"></td>
                                <td align="center" style="padding-top: 15px; ">
                                    <div style="width: 84%;
    position: absolute;
    z-index: 1;
    color: rgb(117, 117, 117);
    /* margin-left: 12%; */
    text-align: center;
    /* margin-top: 5px; */
    pointer-events: none;
    /* background: rgb(255, 255, 255); */
    display: block;" ng-style="stylecheckintextincre">
                                        <span ng-if="flagcheck == 1">Hour</span>
                                        <span ng-if="flagcheck == 2">ชั่วโมง</span>
                                        <span ng-if="flagcheck == 3">小时</span>
                                    </div>
                                    <select class="form-control" ng-change="changenumincrement(stylehourincre)" id="num" ng-model="stylehourincre" data-ng-options="i  for i in num" width="100%" style="width: 100% !important">
                                        <option value=""></option>
                                    </select>
                                <style>
                                    .ui-select {
                                                width: 100% !important;
                                            }
                                </style>
                                    <span> </span>                              </td>
                                <td width="2%"></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td align="center">
                                    <div align="center" style="margin-top: 11px;color: red">
                                        <span ng-if="flagcheck == 1">Your request must wait for a response from us.</span>
                                        <span ng-if="flagcheck == 2">คำขอของท่านต้องรอการตอบรับจากเรา</span>
                                        <span ng-if="flagcheck == 3">您的请求必须等待我们的答复。</span>
                                    </div>
                                    <div class="btm-checkin" ng-style="stylecheckinccrement" ng-click="confirm_sendmaildelay()" style="    display: none;margin-top: 15px">
                                        <i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;" ></i>

                                        <!-- <span ng-if="flagcheck == 1" >To inform the driver</span>
                                        <span ng-if="flagcheck == 2">คลิกที่นี่เพื่อแจ้งคนขับรถ </span>
                                        <span ng-if="flagcheck == 3">通知司机请按这里 </span> -->
                                        <!-- <span style="color: #000">({{setionflight.length}})</span> -->
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                        </table>
 

                    </div>
                    </div>
                    </div>
                    </div>
    </div>
    <div data-role="footer" id="footer" style="position: fixed;">
        <div class="zoom-voucher">
            <i class="fa  fa-search fa-2x" ng-click="voucherdialog()" aria-hidden="true" style="color: #fff" align="center"></i>
            <!-- <i class="fa fa-video-camera fa-2x" aria-hidden="true" style="color: #fff" align="center"> --><!-- <span class="Explanation">i</span></i> -->
            <p style="font-size: 12px">
                <span ng-if="flagcheck == 1">Voucher</span>
                <span ng-if="flagcheck == 2">วอเชอร์</span>
                <span ng-if="flagcheck == 3">憑證</span>
            </p>
        </div>

        <div align="center" style=";font-size: 14px;padding-top: 4px;font-weight: 200" >
            <span  ng-if="flagcheck == 1" style="font-weight: 400">t-booking.com Travel Booking System</span>
            <span ng-if="flagcheck == 2"><span style="font-weight: 400">t-booking.com</span> ระบบจองการท่องเที่ยว</span>
            <span  ng-if="flagcheck == 3"><span style="font-weight: 400">t-booking.com</span> 旅游预订系统</span>

            
           
            
        </div>
        <div align="center" style="font-size: 14px;font-weight: 200">
            <span  ng-if="flagcheck == 1" style="font-weight: 400">Real-time interactive confirmation</span>
            <span ng-if="flagcheck == 2">การยืนยันโต้ตอบแบบ<span style="font-weight: 400"> Real-time</span></span>
            <span  ng-if="flagcheck == 3">实时互动确认单</span>
        </div>
        <div >
            <img class="icon-language" ng-click="change_language()" ng-src="images/{{''+flag}}"  ng-style="lstart"/>
            <div class="dropdown-content" ng-style="lopen">
                <img ng-click="language(1)" class="icon-language-link" ng-src="images/{{'usa.ico'}}" /><br>
                <img ng-click="language(2)" class="icon-language-link" ng-src="images/{{'thai.ico'}}" /><br>
                <img ng-click="language(3)" class="icon-language-link" ng-src="images/{{'china.ico'}}" /><br>
            </div>
            <p class="lang-i">
                <span ng-if="flagcheck == 1">EN</span>
                <span ng-if="flagcheck == 2">TH</span>
                <span ng-if="flagcheck == 3">CN</span>
            </p> 
        </div>
    </div>
</div>