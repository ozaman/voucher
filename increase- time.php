<!DOCTYPE html>
<html>
<head>
<body>
<div data-role="page" id="increasetime"> 
    <div class="header"  data-role="header" style="position: fixed;"> 
        <div>
            <p id="namedriver" style="font-size:14px;padding-top: 14px; " align="center">
            <span  >{{tb_web_admin_company}}</span>
        
            </p>
        <p id="voucherid" style="font-size:24px;"  >
            <span id="{{state}}">{{statusText}}</span>
            <span id="{{state}}" ng-if="status == 'CONFIRM' && flagcheck == 1">Comfirm</span>
            <span id="{{state}}" ng-if="status == 'CONFIRM' && flagcheck == 2">ยืนยัน</span>
            <span id="{{state}}" ng-if="status == 'CONFIRM' && flagcheck == 3">已確認訂單</span>

            <span id="{{state}}" ng-if="status == 'NEW' && flagcheck == 1">New</span>
            <span id="{{state}}" ng-if="status == 'NEW' && flagcheck == 2">ใหม่</span>
            <span id="{{state}}" ng-if="status == 'NEW' && flagcheck == 3">新訂單</span>
            
            <span id="{{state}}" ng-if="status == 'CANCEL' && flagcheck == 1 && sub_confirm == 1">CANCELED</span>
            <span id="{{state}}" ng-if="status == 'CANCEL' && flagcheck == 2 && sub_confirm == 1"">ยืนยันยกเลิก</span>
            <span id="{{state}}" ng-if="status == 'CANCEL' && flagcheck == 3 && sub_confirm == 1"">已接受取消訂單</span>

            <span id="{{state}}" ng-if="status == 'CANCEL' && flagcheck == 1 && sub_reject == 1">REJECT</span>
            <span id="{{state}}" ng-if="status == 'CANCEL' && flagcheck == 2 && sub_reject == 1"">ปฏิเสธ</span>
            <span id="{{state}}" ng-if="status == 'CANCEL' && flagcheck == 3 && sub_reject == 1"">拒绝訂單</span>

            <span id="{{state}}" ng-if="status == 'CANCEL' && flagcheck == 1 && sub_reject == 2">REJECTED</span>
            <span id="{{state}}" ng-if="status == 'CANCEL' && flagcheck == 2 && sub_reject == 2"">ยืนยันปฏิเสธ</span>
            <span id="{{state}}" ng-if="status == 'CANCEL' && flagcheck == 3 && sub_reject == 2"">已接受拒绝訂單</span>

            <span id="{{state}}" ng-if="status == 'CANCEL' && flagcheck == 1 && sub_reject != 2 && sub_confirm != 1" >CANCEL</span>
            <span id="{{state}}" ng-if="status == 'CANCEL' && flagcheck == 2 && sub_reject != 2 && sub_confirm != 1">ยกเลิก</span>
            <span id="{{state}}" ng-if="status == 'CANCEL' && flagcheck == 3 && sub_reject != 2 && sub_confirm != 1">取消訂單</span>
            <span ng-if="driver_complete == 1"><span style="font-size: 14px  !important">/</span>
                <span ng-if="flagcheck == 1" style="font-size: 14px;">Complete</span>
                <span ng-if="flagcheck == 2" style="font-size: 14px;">สมบูรณ์</span>
                <span ng-if="flagcheck == 3" style="font-size: 14px;">完成 </span>


            </span>
            <span ng-if="driver_complete == 0" ><span style="font-size: 14px !important">/</span>
                <span ng-if="flagcheck == 1" style="font-size: 14px;">Unsuccessful</span>
                <span ng-if="flagcheck == 2" style="font-size: 14px;">ไม่สำเร็จ</span>
                <span ng-if="flagcheck == 3" style="font-size: 14px;">不成功 </span>


            </span>
            </p>
        </div>

        <a href="#home" class="home-icon" data-transition="slide" >
            <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
        </a>
        <div class="logoagent">
            <img ng-src="http://www.t-booking.com/demo/admin/file/logo/crop/{{agent}}.jpg" err-src="images/ctr.jpg" width="45" height="40" ng-click="snapphoto()">
        </div>
    </div><Br/>
    <Br/>
    <Br/>
    <Br/>
    <div >

        <i class="fa fa-share-square-o fa-2x" aria-hidden="true" ng-click="sharesocial()" style="margin-top: 7px;
    color: #3C8DBC;margin-left: 15px;"></i>
    
    <!-- <i class="fa fa-share-square-o fa-2x" aria-hidden="true" style="margin-top: 5px;  margin-left: 90%; color: #3C8DBC;"></i> -->
    </div>
    <div class="ui-content" style="margin-top: -25px">
    
            
            <!-- CHECK ID VOUCHER -->
             <input type="hidden" value="{{idvoucher}}" id="vc_angu">
             <input type="hidden" value="" id="vc_jque">
         
   
    <div data-role="content">
        
            <ul data-role="listview">
                <li class="box-item"  >
                    <a href="#Guest-detail" id="listitem" data-transition="slide" ng-click="infomationguestdetail()">
					<div  class="main-icon"><center>
                          <i class="fa  fa fa-users " style="font-size:35px; margin-top:10px;"  ></i></center></div> 
                        <span class="topic-page" ng-if="flagcheck == 1" style="margin-left:80px; ">Guest detail</span>
                        <span class="topic-page" ng-if="flagcheck == 2"  style="margin-left:80px; ">ข้อมูลลูกค้า</span>
                        <span class="topic-page" ng-if="flagcheck == 3"  style="margin-left:80px; ">客户信息</span>
                        </a>
                </li>
                <li class="box-item">
                    <a href="#Booking-information" id="listitem2" data-transition="slide">
                       	<div  class="main-icon"><center>
                          <img src="images/boolin.png" width="35" style="margin-top: -8px;"></center></div> 
                        <span class="topic-page" ng-if="flagcheck == 1"  style="margin-left:80px; ">Booking information</span>
                        <span class="topic-page" ng-if="flagcheck == 2"  style="margin-left:80px; ">ข้อมูลการจอง</span>
                        <span class="topic-page" ng-if="flagcheck == 3"  style="margin-left:80px; ">预订信息</span>
                    </a>
                </li>
                 <li class="box-item">
                    <a href="#Driver" id="listitem3" data-transition="slide">
                       	<div  class="main-icon"><center>
                          <img src="images/car-detail.png" width="35" style="margin-top: -8px;"></center></div> 
                        <span class="topic-page" ng-if="flagcheck == 1" style="margin-left:80px; ">Car / Driver </span>
                        <span class="topic-page" ng-if="flagcheck == 2" style="margin-left:80px; ">รถ / คนขับ</span>
                        <span class="topic-page" ng-if="flagcheck == 3" style="margin-left:80px; ">汽车 / 司机 </span>
                    </a>
                </li>
                <li class="box-item">
                    <a href="#Place" id="listitem4" data-transition="slide">
                              <div  class="main-icon"><center>
                        <img src="images/start.png" width="35" style="margin-top: -8px;"></center></div>
                        <span class="topic-page" ng-if="flagcheck == 1" style="margin-left:80px;">Start using</span>
                        <span class="topic-page" ng-if="flagcheck == 2" style="margin-left:80px;">เริ่มใช้งาน</span>
                        <span class="topic-page" ng-if="flagcheck == 3" style="margin-left:80px;">开始使用</span> 


                       
                        </a>
                </li>
                
                <li class="box-item">
                    <a href="#Comment" id="listitem6" data-transition="slide">
                              	<div  class="main-icon"><center>
                          <img src="images/chats.png" width="35" style="    margin-top: -8px;"></center></div> 
						 <span class="topic-page" ng-if="flagcheck == 1" style="margin-left:80px; ">My comments</span>
                <span class="topic-page" ng-if="flagcheck == 2" style="margin-left:80px; ">ความคิดเห็นของฉัน</span>
                <span class="topic-page" ng-if="flagcheck == 3" style="margin-left:80px; ">我的点评</span>  
                       
                        </a>
                </li>
                <li class="box-item">
                    <a href="#Recomment" id="listitem5" data-transition="slide">
                                <div  class="main-icon"><center>
                          <i class="fa  fa-exclamation-circle" style="font-size:35px; margin-top:7px;"  ></i></center></div> 
                          
                        <span class="topic-page" ng-if="flagcheck == 1" style="margin-left:80px; ">Terms of Use</span>
                        <span class="topic-page" ng-if="flagcheck == 2" style="margin-left:80px; ">ข้อกำหนดการใช้งาน</span>
                        <span class="topic-page" ng-if="flagcheck == 3" style="margin-left:80px; ">服务条款</span>

                        </a>
                </li>
                
            </ul>
       
    </div>
    </div>
    <div data-role="footer" id="footer" style="position: fixed;">
        <div style="display: inline-block;float: left;margin-left: 3.5%; width: 70px;position: absolute;">
            <i class="fa fa-video-camera fa-2x" aria-hidden="true" style="color: #fff" align="center"><span class="Explanation">i</span></i>
            <p style="font-size: 12px">
                <span ng-if="flagcheck == 1">Explain</span>
                <span ng-if="flagcheck == 2">การอธิบาย</span>
                <span ng-if="flagcheck == 3">解释</span>
            </p>
        </div>
        <div align="center" style=";font-size: 14px;padding-top: 4px;" >
            <span  ng-if="flagcheck == 1">t-booking.com Travel Booking System</span>
            <span ng-if="flagcheck == 2">t-booking.com ระบบจองการท่องเที่ยว</span>
            <span  ng-if="flagcheck == 3">t-booking.com 旅游预订系统</span>

            
           
            
        </div>
        <div align="center" style="font-size: 14px;">
            <span  ng-if="flagcheck == 1">Real-time interactive confirmation</span>
            <span ng-if="flagcheck == 2">การยืนยันโต้ตอบแบบReal-time </span>
            <span  ng-if="flagcheck == 3">实时互动确认单</span>
        </div>
        <div >
            <img class="icon-language" ng-click="change_language()" ng-src="images/{{''+flag}}"  ng-style="lstart"/>
            <div class="dropdown-content" ng-style="lopen">
                <img ng-click="language(1);useLang('en')" class="icon-language-link" ng-src="images/{{'usa.ico'}}" /><br>
                <img ng-click="language(2);useLang('th')" class="icon-language-link" ng-src="images/{{'thai.ico'}}" /><br>
                <img ng-click="language(3);useLang('cn')" class="icon-language-link" ng-src="images/{{'china.ico'}}" /><br>
            </div>
            <p class="lang-i">
                <span ng-if="flagcheck == 1">EN</span>
                <span ng-if="flagcheck == 2">TH</span>
                <span ng-if="flagcheck == 3">CN</span>
            </p> 
        </div>
    </div>
</div>
</body>
</html>