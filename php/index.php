<!DOCTYPE html>
<html>
<head>
    <title>T-booking.com</title > 

        <meta charset="utf-8" />
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
        <META HTTP-EQUIV="Expires" CONTENT="-1">
        <meta name="description" content="Simple Map">
        <meta name="keywords" content="ng-map,AngularJS,center"> -->
        
       
          <!-- Include jQuery Mobile stylesheets -->
        <link rel="stylesheet" href="css/main.css?v=<?=time()?>" >
        <link rel="stylesheet" href="js/google/jquery.mobile.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

       
        <script src="js/google/jquery-1.10.2.min.js"></script>
        <script src="js/google/jquery-ui.js"></script>
        <script src="js/google/jquery.mobile.js"></script>
        <script src="js/google/jquery.mobile.min.js"></script>
        <script src="js/hammer.js" type="text/javascript"></script>
        <script src="js/jquery.hammer.js" type="text/javascript"></script>
        <script src="js/jquery.ui.touch-punch.min.js"></script>
        <script src="js/google/bootstrap.min.js"></script>        
        <script src="js/jquery.cookie.js"></script>

        <!-- <script src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3Or1Mj7e2LZ60USScKPoayMsj_1TCt8k&callback=initialize">
    </script> -->


        <!-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/X.Y.Z/angular-cookies.js"></script> -->
        <script src="js/google/angular.min.js" type="text/javascript"></script>
        <script src="js/google/angular-route.js" type="text/javascript"></script>
        <!-- <script src="js/angular-ui-bootstrap-modal.js" type="text/javascript"></script> -->
        <!--  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.19/angular-cookies.js"></script> -->
        <script src="js/google/angular-cookies.min.js" type="text/javascript"></script>
        <script src="js/google/angular-filter.js" type="text/javascript"></script>
        <script src="js/google/ui-bootstrap-tpls.min.js" type="text/javascript"></script>
        <script src="js/main-angular.js?v=<?=time()?>" type="text/javascript"></script>
        <!-- <script src="https://maps.google.com.hk/maps/api/js?libraries=placeses,visualization,drawing,geometry,places"></script> -->

        
        <!-- <script src="js/google/ng-map.js"></script> -->
        <script src="js/google/ng-file-upload.js"></script>
        <script src="js/google/ng-file-upload.min.js"></script>
        <script src="js/moment.js"></script>
        
		
<!-- or you could just forget about it and use this (recommended for production) -->

        <!-- <script src="js/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.8/angular-animate.min.js"></script>
        
        <script type="text/javascript" src="js/google/bootstrap-filestyle.min.js"> </script> -->
        <!-- <script src="js/google/getusermedia.js"></script>
        <script src="js/google/mapcn.js"></script> -->
       <!-- <script async defer src="http://maps.google.cnapi/js?key=AIzaSyAcTSB6t3VJpbMLKjJGIT4M0aTer2VEHb8&sensor=true&callback=initMap"></script> -->
         <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCOm23zbDMN8XHgqSPW33K1gw4wXOvIGEY"></script> -->
         
      <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css?v=<?=time()?>"> -->
 
  <!-- Font Awesome -->
 <!--  <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css"> 
  Ionicons
  <link rel="stylesheet" href="bootstrap/css/ionicons.min.css"> -->
  <!-- <link rel="stylesheet" href="css/flags.css?v=<?=time()?>"> -->

           

</head>
<body  ng-app="myApp" ng-controller="myCtrl" >
<div class="loader" ng-style="load"></div>

<!-- HOME -->
<div class="bobymain" ng-style="bobymain" style="background: #fff">
<div data-role="page" id="home" class="bg-body">
    <div class="header" style="position: fixed;font-size: 16px;z-index: 1;">
    <table width="100%">

         <tr >
            <td width="3%"></td>
            <td width="10%" > 
                <a href="#home" class="home-icon home-no" data-transition="slide">
            <i class="fa fa-home fa-2x" aria-hidden="true" style="font-size: 40px;" style="font-size: 40px; "></i>
         </a>
            </td>
            <td align="center" >
                  <span  ng-bind="TB_admin_companyhome"></span>
            </td>
            <td width="10%" align="right">
                <div class="logoagent">
                    <img ng-src="http://www.t-booking.com/v1/admin/file/logo/crop/{{agent}}.jpg" err-src="images/ctr.jpg" width="45" height="40" ng-click="snapphoto()">
                </div>
            </td>
            <td width="3%"></td>
         </tr>
         
      </table>
      </div>
      <div style="border-radius: 8px;margin-top: 80px;color: #fff;
    text-shadow: none;">
      <table width="100%">
          <tr >
              <td width="3%" style="border-radius: 0 0 0 8px;"></td>
              <td align="left">
                    <div class="main-icon2"><i class="fa fa-cart-plus fa-lg" aria-hidden="true" style="font-size: 28px; color: #39c;line-height: 1;"></i> 
                    </div>
              </td>
              <td align="center" style="padding: 5px;">
                    <table width="100%">
                       <tr>
                            <td align="center" >
                                  <span  ng-if="flagcheck == 1" >My Bookings</span>
                                  <span  ng-if="flagcheck == 2">การจองของฉัน</span>
                                  <span  ng-if="flagcheck == 3">我的预订</span>
                            </td>
                       </tr>
                       <tr>
                            <td align="center">
                                   <span  ng-if="flagcheck == 1" align="center">Reservation No :</span>
                                    <span  ng-if="flagcheck == 2" align="center">หมายเลขการจอง :</span>
                                    <span  ng-if="flagcheck == 3" align="center">预订号 :</span>
                                    <span ng-bind="agent_ref"></span>
                            </td>
                       </tr>
                      
                    </table>
              </td>
              <td align="right">
                  <div class="main-icon2">
                    <i class="fa fa-share-square-o fa-2x" aria-hidden="true" ng-click="sharesocial()" style="color: #3C8DBC; font-size: 25px; z-index: 61;line-height: 1.4;"></i>
                  </div> 
              </td>
              <td width="3%" style="border-radius: 0 0 8px 0;"></td>
         </tr>
      </table>
      </div> 

    <div class="ui-content" style="">
    
            
           <!-- CHECK ID order  -->
             <input type="hidden" value="{{order}}" id="order_angu"/>
             <input type="hidden" value="" id="order_jque"/>
         
            
            
             <table width="100%" border="0" cellspacing="0" cellpadding="0" ng-repeat="x in voucherselect" ng-class="{evenhome: $even, oddhome: $odd}">
                <tr><td>
                
                <a href="#voucher" id="listitemhome" data-transition="slide" ng-click="getvoucher(x.TB_order_order)" style="text-decoration:none !important;background-color: #fff" >
               <table width="100%" border="0" cellspacing="0" cellpadding="0"><tr>
                 <!-- <td width="10">&nbsp;</td> -->
                 <td width="70" valign="top">
                    <table width="100%" border="0" cellspacing="5" cellpadding="0">
                        <tr>
                            <td align="center" style="padding:5px 0">                               
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
                   <!--  <p>{{x.datessnew}}</p> -->
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
                     <td align="center" style="padding: 5px 0;">
                        <div style="" ng-if="x.datessnew == 1">
                            <span ng-if="flagcheck == 1">Used</span>
                            <span ng-if="flagcheck == 2">ใช้แล้ว</span>
                            <span ng-if="flagcheck == 3">已使用</span>
                        </div>
                        <div ng-if="x.datessnew == 2" style="">
                            <span ng-if="flagcheck == 1">Wait use</span>
                            <span ng-if="flagcheck == 2">รอใช้</span>
                            <span ng-if="flagcheck == 3">等待使用</span>
                        </div>
                    </td>
                   </tr>
                 </table>
                 </td>
                 <td width="10">&nbsp;</td><!--tab-->

                 <td style="font-size: 20px !important; font-weight: normal !important " valign="top">
                    
                 <table width="100%" border="0" cellspacing="0" cellpadding="0">

                 
                  <tr >
                      <td colspan="5" height="100" valign="top">
                        <span ng-if="flagcheck == 1" ng-bind="x.topic_en"></span>
                        <span ng-if="flagcheck == 2" ng-bind="x.topic_th"></span>
                        <span ng-if="flagcheck == 3" ng-bind="x.topic_cn"></span>  
                      </td>
                  </tr>
                  <tr>
                  <td width="10" class="{{x.styletabelhead}}" style="border-radius: 8px 0 0 8px;">&nbsp;</td>
                    <td align="left" colspan="3" class="{{x.styletabelhead}}" >
                         <span style="font-size: 20px; font-weight: 400" ng-bind="x.TB_order_outdate"></span>
                    </td>
                    <td class="{{x.styletabelhead}}">&nbsp;</td>
                    <td class="{{x.styletabelhead}}" align="right">
                        <span style="font-size: 20px;font-weight: 400;">{{x.airout_h}}:{{x.airout_m}}</span>
                       <!--  <span>{{x.datessss}}</span>
                        <span>{{x.date}}</span> -->
                    </td>
                    <td width="10" class="{{x.styletabelhead}}" style="border-radius: 0 8px 8px 0;">&nbsp;</td>
                    </tr>
                </table>
                </td>
                 <td width="10"></td>
                 <td width="10"><i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true" style="color:#9e9e9e"></i></td>
               </tr>
               <tr ><td colspan="7" style=" height:8px "></td>
               </tr>
             </table>
             </a>
             
             </td></tr></table>
             
             
             
    
    </div>
    <Br/>
    <Br/>
    <Br/>
    <div data-role="footer" id="footer" style="position: fixed;">
        <div class="zoom-voucher">
            <i class="fa fa-video-camera fa-2x" aria-hidden="true" style="color: #fff" align="center"><span class="Explanation">i</span></i>
            <p style="font-size: 12px">
                <span ng-if="flagcheck == 1">Explain</span>
                <span ng-if="flagcheck == 2">การอธิบาย</span>
                <span ng-if="flagcheck == 3">解释</span>
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


<!-- END -->



<!-- voucher -->
<div data-role="page" id="voucher" class="bg-body">
 <div class="header" style="position: fixed;font-size: 16px;z-index: 1;">
      <table width="100%">
         <tr >
            <td width="3%"></td>
            <td width="10%" > 
                <a href="#home" class="home-icon" data-transition="slide" >
                     <i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
                </a>
            </td>
            <td align="center" >
                  <span  >{{tb_web_admin_company}}</span>
            </td>
            <td width="10%" align="right">
                <div class="logoagent">
                    <img ng-src="http://www.t-booking.com/v1/admin/file/logo/crop/{{agent}}.jpg" err-src="images/ctr.jpg" width="45" height="40" ng-click="snapphoto()">
                </div>
            </td>
            <td width="3%"></td>
         </tr>
         
      </table>
      </div>
    <div style="" class="roongheader">
      <table width="100%">
          <tr >
              <td width="3%" style="border-radius: 0 0 0 8px;"></td>
              <td align="left">
                    <div class="main-icon2"><i class="fa fa-cart-plus fa-lg" aria-hidden="true" style="font-size: 28px; color: #39c;line-height: 1;"></i> 
                    </div>
              </td>
              <td align="center" style="padding: 5px;">
                    <table width="100%">
                       <tr>
                            <td align="center" >
                                  <span class="" ng-if="flagcheck == 1">{{topic_en}}</span>
                                  <span class="" ng-if="flagcheck == 2">{{topic_th}}</span>
                                  <span class="" ng-if="flagcheck == 3">{{topic_cn}}</span>
                            </td>
                       </tr>
                       <tr>
                            <td align="center">
                                  <span  ng-if="flagcheck == 1">Voucher No :</span>
                                  <span  ng-if="flagcheck == 2">เลขที่วอเชอร์ :</span>
                                  <span  ng-if="flagcheck == 3">凭证编号 :</span>                   
                                  <span ng-bind="VOUCHER"></span>
                            </td>
                       </tr>
                      
                    </table>
              </td>
              <td align="right">
                  <div class="main-icon2">
                    <i class="fa fa-share-square-o fa-2x" aria-hidden="true" ng-click="sharesocial()" style="color: #3C8DBC; font-size: 25px; z-index: 61;line-height: 1.4;"></i> 
                    </div>
              </td>
              <td width="3%" style="border-radius: 0 0 8px 0;"></td>
         </tr>
      </table>
      </div>
    <!-- <div > 
        <div id="namedriver" style="padding-top: 25px; " align="center">
                
        </div>

        
        

        <div>
    <div   style="margin-top: 80px;"><center>
        </center>
    </div>
   
    <div class="titlehome" >
        <p  style="display: block; margin: 0; width: 78%; margin-left: 11%;" align="center">
            
        </p>
        <p style="display: block;margin: 0" align="center">
            
        </p>
                  
        
    </div>
    </div>
    </div> -->
    
     <div id="icon-pageslide" align="center" data-position="fixed" >
        <div id="pagese"></div>
        <div id="pagese2" style="margin-right: 8px;"></div>
        <div id="pagese1"></div>
    </div>
     
    <div class="ui-content" style="margin-top: 12px;">
    
            
         
   
    <!-- <div data-role="content"> -->
        
            <ul data-role="listview" style="    padding: 0 15px;">
                <li class="box-item"  >
                    <a href="#Guest-detail" id="listitem" data-transition="slide" ng-click="infomationguestdetail()">
                    <div  class="main-icon">
                          <i class="fa  fa fa-users " style="font-size:25px; margin-top:10px;"  ></i></div> 
                        <span class="topic-page" ng-if="flagcheck == 1" style="margin-left:80px; ">My information</span>
                        <span class="topic-page" ng-if="flagcheck == 2"  style="margin-left:80px; ">ข้อมูลของฉัน</span>
                        <span class="topic-page" ng-if="flagcheck == 3"  style="margin-left:80px; ">我的信息</span>
                    </a>
                </li>
                <li class="box-item">
                    <a href="#Booking-information" id="listitem" data-transition="slide">
                        <div  class="main-icon">
                          <img src="images/boolin.png" width="25" style="margin-top: 8px;"></div> 
                        <span class="topic-page" ng-if="flagcheck == 1"  style="margin-left:80px; ">Booking information</span>
                        <span class="topic-page" ng-if="flagcheck == 2"  style="margin-left:80px; ">ข้อมูลการจอง</span>
                        <span class="topic-page" ng-if="flagcheck == 3"  style="margin-left:80px; ">预订信息</span>
                    </a>
                </li>
                 <li class="box-item">
                    <a href="#Driver" id="listitem" data-transition="slide">
                        <div  class="main-icon">
                          <img src="images/car-detail.png" width="25" style="margin-top: 8px;"></div> 
                        <span class="topic-page" ng-if="flagcheck == 1" style="margin-left:80px; ">Driver / Car  </span>
                        <span class="topic-page" ng-if="flagcheck == 2" style="margin-left:80px; ">คนขับ / รถ</span>
                        <span class="topic-page" ng-if="flagcheck == 3" style="margin-left:80px; ">司机 / 汽车  </span>
                    </a>
                </li>
                <li class="box-item">
                    <a href="#Place" id="listitem" data-transition="slide">
                        <div  class="main-icon">
                        <img src="images/start.png" width="25" style="margin-top: 8px;"></div>
                        <span class="topic-page" ng-if="flagcheck == 1" style="margin-left:80px;">Start using</span>
                        <span class="topic-page" ng-if="flagcheck == 2" style="margin-left:80px;">เริ่มใช้งาน</span>
                        <span class="topic-page" ng-if="flagcheck == 3" style="margin-left:80px;">开始使用</span> 


                       
                        </a>
                </li>
                 <!-- <li class="box-item">
                    <a href="#increasetime" id="listitem" data-transition="slide">
                                <div  class="main-icon">

                          <i class="fa fa-plus " style="font-size:25px; margin-top:8px;"  ></i></div> 
                          
                        <span class="topic-page" ng-if="flagcheck == 1" style="margin-left:80px; ">Add time / service</span>
                        <span class="topic-page" ng-if="flagcheck == 2" style="margin-left:80px; ">เพิ่มเวลา / บริการ</span>
                        <span class="topic-page" ng-if="flagcheck == 3" style="margin-left:80px; ">添加时间／服务</span>

                        </a>
                </li> -->
                
                <li class="box-item">
                    <a href="#Comment" id="listitem" data-transition="slide">
                                <div  class="main-icon">
                          <img src="images/chats.png" width="25" style="    margin-top: 8px;"></div> 
                         <span class="topic-page" ng-if="flagcheck == 1" style="margin-left:80px; ">My comments</span>
                <span class="topic-page" ng-if="flagcheck == 2" style="margin-left:80px; ">ความคิดเห็นของฉัน</span>
                <span class="topic-page" ng-if="flagcheck == 3" style="margin-left:80px; ">我的点评</span>  
                       
                        </a>
                </li>
                <li class="box-item">
                    <a href="#Recomment" id="listitem" data-transition="slide">
                                <div  class="main-icon">
                          <i class="fa  fa-exclamation-circle" style="font-size:25px; margin-top:9px;"  ></i></div> 
                          
                        <span class="topic-page" ng-if="flagcheck == 1" style="margin-left:80px; ">Terms of Use</span>
                        <span class="topic-page" ng-if="flagcheck == 2" style="margin-left:80px; ">ข้อกำหนดการใช้งาน</span>
                        <span class="topic-page" ng-if="flagcheck == 3" style="margin-left:80px; ">服务条款</span>

                        </a>
                </li>
                
               
                
            </ul>
       
    <!-- </div> -->
    </div>
    <Br/>
    <Br/>
    <Br/>
    <Br/>
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
<!-- END HOME -->






<!-- SECTION GUEST-DETAIL -->

<div data-role="page" id="Guest-detail" style="background: #fff" class="bg-body">
 <div class="header" style="position: fixed;font-size: 16px;z-index: 1;">    
    <table width="100%">

         <tr >
            <td width="3%"></td>
            <td width="10%" > 
                <a href="#voucher" class="home-icon" data-transition="slide" >
                     <i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
                </a>
            </td>
            <td align="center" >
                  <span  >{{tb_web_admin_company}}</span>
            </td>
            <td width="10%" align="right">
                <div class="logoagent">
                    <img ng-src="http://www.t-booking.com/v1/admin/file/logo/crop/{{agent}}.jpg" err-src="images/ctr.jpg" width="45" height="40" ng-click="snapphoto()">
                </div>
            </td>
            <td width="3%"></td>
         </tr>         
      </table>
      </div>
    <div style="border-radius: 8px;background-color: #cae2ef;margin-top: 80px;">
      <table width="100%">
          <tr >
              <td width="3%" style="border-radius: 0 0 0 8px;"></td>
              <td align="left">
                    <div class="main-icon2"><i class="fa fa-cart-plus fa-lg" aria-hidden="true" style="font-size: 28px; color: #39c;line-height: 1;"></i> 
                    </div>
              </td>
              <td align="center" style="padding: 5px;">
                    <table width="100%">
                       <tr>
                            <td align="center" >
                                  <span class="" ng-if="flagcheck == 1">{{topic_en}}</span>
                                  <span class="" ng-if="flagcheck == 2">{{topic_th}}</span>
                                  <span class="" ng-if="flagcheck == 3">{{topic_cn}}</span>
                            </td>
                       </tr>
                       <tr>
                            <td align="center">
                                  <span  ng-if="flagcheck == 1">Voucher No :</span>
                                  <span  ng-if="flagcheck == 2">เลขที่วอเชอร์ :</span>
                                  <span  ng-if="flagcheck == 3">凭证编号 :</span>                   
                                  <span >{{VOUCHER}}</span>
                            </td>
                       </tr>
                      
                    </table>
              </td>
              <td align="right">
                  <div class="main-icon2">
                    <i class="fa fa-share-square-o fa-2x" aria-hidden="true" ng-click="sharesocial()" style="color: #3C8DBC; font-size: 25px; z-index: 61;line-height: 1.4"></i>
                  </div> 
              </td>
              <td width="3%" style="border-radius: 0 0 8px 0;"></td>
         </tr>
      </table>
      </div>
      <div id="icon-pageslide" align="center" data-position="fixed" >
          <div id="pagese"></div>
          <div id="pagese1"></div>
          <div id="pagese2"></div>
      </div>
<!-- 



    <div class="header" data-role="header" style="position: fixed;">
        <div>
            <p id="namedriver" style="padding-top: 25px; " align="center">
            <span class="" >{{tb_web_admin_company}}</span>
        
            </p>
        
        </div>
        
        <a href="#voucher"  class="home-icon" data-transition="slide"><i class="fa fa-chevron-left fa-2x" aria-hidden="true" ></i></a>
        <div class="logoagent">
            <img ng-src="http://www.t-booking.com/v1/admin/file/logo/crop/{{agent}}.jpg" err-src="images/ctr.jpg" width="45" height="40" ng-click="snapphoto()">
        </div>
    </div>
     
    <Br/>
    <div  class="main-icon2" style="margin-top: 67px"><center>
       <img src="images/pluss.png" style="font-size:25px; " width="30" / ></center>
    </div>
    <div style="border: 0px solid #999999; width: 40px; height: 40px; padding: 5px; position: fixed;
    text-align: center; border-radius: 60px; margin-left: 87%; z-index: 60;    color: #3399CC; font-size: 16px;margin-top: 67px; box-shadow: 1px 1px 5px #999999;    
    background: #fff;">
    <i class="fa fa-share-square-o fa-2x" aria-hidden="true" ng-click="sharesocial()" style="color: #3C8DBC; font-size: 25px; margin-top: 5px; z-index: 61;"></i>
    </div>
    <div id="sec-title2" >
    
        <p  style="display: block; margin: 0;    width: 76%;  margin-left: 12%;font-weight: normal !important;font-size:  16px !important" align="center">
            <span  ng-if="flagcheck == 1">{{topic_en}}</span>
            <span  ng-if="flagcheck == 2">{{topic_th}}</span>
            <span  ng-if="flagcheck == 3">{{topic_cn}}</span>
        </p>
        <p style="display: block; margin: 0; width: 78%; margin-left: 11%;font-size:  16px !important">
        
            <span  ng-if="flagcheck == 1" align="center">My information</span>
            <span  ng-if="flagcheck == 2" align="center">ข้อมูลของฉัน</span>
            <span  ng-if="flagcheck == 3" align="center">我的信息</span>
        </p>
    </div> 
    <Br/> -->
    <div class="ui-content" style="">
        

        <div class="col">    
            <div class="borderdetail2">
            <div style="padding: 5px 5px; border-radius: 8px; border: 1px solid #ddd; box-shadow: 1px 1px 10px #999999;">
            <table style="font-size: 16px;" cellspacing="0" cellpadding="0">
                <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;" ng-click="agent_guest_name(1)">
                    <td width="10"></td>
                    <td width="35" style="padding: 5px 0;" valign="top"> 
                       <img src="images/name.png" width="35">
                            <!-- <span  ng-if="flagcheck == 1">Name :</span>
                            <span  ng-if="flagcheck == 2">ชื่อ :</span>
                            <span  ng-if="flagcheck == 3">客人 :</span> -->
                        
                    </td>
                    <td width="20" ></td>
                    <td valign="middle" ><span>{{web_book_agent_guest}}</span></td>
                    <td width="10"></td>
                    
                </tr>
                <tr style="border-bottom: 1px solid #ddd;" ng-click="agent_guest_name(2)">
                    <td ></td>
                    <td style="padding: 5px 0;"> 
                    <img src="images/lang.png" width="35">
                        <!-- <p >
                            <span  ng-if="flagcheck == 1">Nationality :</span>
                            <span  ng-if="flagcheck == 2">สัญชาติ :</span>
                            <span  ng-if="flagcheck == 3">国籍 :</span>
                        </p> -->
                    </td>
                    <td ></td>
                    <td >
                        <span ng-if="web_country_name_en == 'China'" > <img src="images/china.ico" width="25" style="display: inline-block;" />  {{web_country_name_en}}</span>
                    </td>
                    <td ></td>
                    
                </tr>
                <tr style="background: #f0f0f0;border-bottom: 1px solid #ddd;" ng-click="agent_guest_name(7)">
                    <td ></td>
                    <td colspan="3">
                        <table cellspacing="0" cellpadding="0" style="margin-top: 8px;margin-bottom: 3px">
                            <tr>
                                <td width="90" align="center"  >
                                        <img src="images/adult.png" width="35" style="display: inline-block;">
                                        <!-- <span  ng-if="flagcheck == 1">Adults</span>
                                        <span  ng-if="flagcheck == 2">ผู้ใหญ่</span>
                                        <span  ng-if="flagcheck == 3">成人</span> -->
                                    
                                </td>
                                <td width="90" align="center" >
                                        <img src="images/child.png" width="35" ng-click="agent_guest_name()" style="display: inline-block;">
                                       <!--  <span ng-if="flagcheck == 1">Child</span>
                                        <span ng-if="flagcheck == 2">เด็ก</span>
                                        <span ng-if="flagcheck == 3">儿童</span> -->
                                    
                                </td>
                                <td width="90" align="center" >
                                        <img src="images/infant.png" width="35" ng-click="agent_guest_name()" style="display: inline-block;">
                                        <!-- <span ng-if="flagcheck == 1">Infant</span>
                                        <span ng-if="flagcheck == 2">ทารก</span>
                                        <span ng-if="flagcheck == 3">婴儿</span> -->
                                    
                                </td>
                                <td align="center" width="90" >
                                        <i class="fa  fa fa-users " style="font-size: 28px;color: #39c;"  ></i>
                                        <!-- <span  ng-if="flagcheck == 1">Total</span>
                                        <span  ng-if="flagcheck == 2">ทั้งหมด</span>
                                        <span  ng-if="flagcheck == 3">总人数</span> -->
                                    
                                </td>
                            </tr>
                            <tr>
                                <td align="center" >
                                    <span >{{adult}}</span>
                                    
                                    
                                </td>
                                <td align="center" >
                                    <span  >{{child}}</span>
                                </td>
                                <td align="center" >
                                    <span >{{baby}}</span>
                                </td>
                                <td align="center" >
                                    <span >{{total}}</span>
                                </td>
                            </tr>
                        </table> 
                    </td>
                    
                    <td ></td>
                    
                </tr>
                 <tr style="border-bottom: 1px solid #ddd;">
                    <td width="10"></td>
                    <td width="30" style="padding: 5px 0;" valign="top"> 
                       <img src="images/phone1.png" width="35" ng-click="agent_guest_name(3)">
                            <!-- <span  ng-if="flagcheck == 1">Name :</span>
                            <span  ng-if="flagcheck == 2">ชื่อ :</span>
                            <span  ng-if="flagcheck == 3">客人 :</span> -->
                        
                    </td>
                    <td width="10" ></td>
                    <td valign="middle">
                        <span><span><img src="http://www.t-booking.com/demo/iconstatus/flag/test_f/{{imgcoutry}}.png" width="22" style="margin-right: 5px"></span>{{web_book_agent_phone}}</span>
                        <i ng-click="agent_guest_name(4);" class="fa fa-pencil-square-o fa-lg pull-right" style="font-size: 30px;
    margin-right: 25px;
    color: #529bc5;
    margin-top: 2px;
    right: 0;
    display: inline-block;
    position: absolute;" aria-hidden="true"></i>
                    </td>
                    <td width="10" ></td>
                    
                </tr>
                <tr style="background: #f0f0f0;border-bottom: 1px solid #ddd;">
                    <td width="10" ></td>
                    <td width="35" style="padding: 5px 0;" valign="top"> 
                       <img src="images/phone2.png" width="35" ng-click="agent_guest_name(6)">
                            <!-- <span  ng-if="flagcheck == 1">Name :</span>
                            <span  ng-if="flagcheck == 2">ชื่อ :</span>
                            <span  ng-if="flagcheck == 3">客人 :</span> -->
                        
                    </td>
                    <td width="10" ></td>
                    <td valign="middle" >
                        <span><span><img src="http://www.t-booking.com/demo/iconstatus/flag/test_f/{{imgcoutry2}}.png" width="22" style="margin-right: 5px"></span>{{local_phone}}</span><i ng-click="agent_guest_name(8);" class="fa fa-pencil-square-o fa-lg pull-right" style="font-size: 30px;
    margin-right: 25px;
    color: #529bc5;
    margin-top: 2px;
    right: 0;
    display: inline-block;
    position: absolute;" aria-hidden="true"></i>
                    </td>
                    <td width="10"></td>
                    
                </tr>
                 <tr style="border-bottom: 1px solid #ddd;">
                    <td width="10"></td>
                    <td width="35" style="padding: 5px 0;" valign="top"> 
                       <img src="images/email1.png" width="35">
                            <!-- <span  ng-if="flagcheck == 1">Name :</span>
                            <span  ng-if="flagcheck == 2">ชื่อ :</span>
                            <span  ng-if="flagcheck == 3">客人 :</span> -->
                        
                    </td>
                    <td width="10" ></td>
                    <td valign="middle" >
                         <span>{{tb_web_book_agent_email}}</span>
                         <i ng-click="agent_guest_name(9)" class="fa fa-pencil-square-o fa-lg pull-right" style="font-size: 30px;
    margin-right: 25px;
    color: #529bc5;
    margin-top: 2px;
    right: 0;
    display: inline-block;
    position: absolute;" aria-hidden="true"></i>
                    </td>
                    <td width="10"></td>
                    
                </tr>
                <tr style="background: #f0f0f0;border-bottom: 1px solid #ddd;">
                    <td width="10"></td>
                    <td width="35" style="padding: 5px 0;" valign="top"> 
                       <img src="images/email2.png" width="35">
                            <!-- <span  ng-if="flagcheck == 1">Name :</span>
                            <span  ng-if="flagcheck == 2">ชื่อ :</span>
                            <span  ng-if="flagcheck == 3">客人 :</span> -->
                        
                    </td>
                    <td width="10" "></td>
                    <td valign="middle" ">
                       <span>{{tb_web_book_agent_email2}}</span>
                        <i ng-click="agent_guest_name(10)" class="fa fa-pencil-square-o fa-lg pull-right" style="font-size: 30px;
    margin-right: 25px;
    color: #529bc5;
    margin-top: 2px;
    right: 0;
    display: inline-block;
    position: absolute;" aria-hidden="true"></i>
                    </td>
                    <td width="10"></td>
                    
                </tr>
                
            </table>
            
            <table>
                <tr ng-repeat="item in socialall" style="border-bottom: 1px solid #ddd;" class="seecolor{{$index}}">
                    <td width="10"></td>
                    <td width="35"> 
                        <div class="show{{item.id}}" style="padding: 5px 0">
                            <img img src="http://www.t-booking.com/uploads_file/social_type/{{item.type_icon}}" width="35" height="35">
                        </div>
                    </td>
                    <td width="28"></td>
                    <td width="315">
                        <span>{{item.web_guest_social}}</span>
                        <i ng-click="editfunsocial(item)" class="fa fa-pencil-square-o fa-lg pull-right" style="font-size: 30px; margin-right: 25px; color: #529bc5; margin-top: 2px; right: 0; display: inline-block; position: absolute;" aria-hidden="true"></i>
                    </td>
                    <td width="10"></td>
                    
                </tr>
            </table>
                
                <!-- FACE -->
                   <!--  <div ng-repeat="item in socialall" style="padding: 0">
                        <div  class="show{{item.id}}">
                        <p class="bobytext-detail">
                            <img img src="http://www.t-booking.com/uploads_file/social_type/{{item.type_icon}}" width="30"" class="icon-so">
                        </p>
                        
                        <p class="textdetail" ><i ng-click="editfunsocial(item)" class="fa fa-pencil-square-o fa-lg" style="margin-right: 10px;color: #eea236;" aria-hidden="true"></i>{{item.web_guest_social}}</p>
                        
                    </div>
                    <div class="Edit{{item.id}}"  style="display: none">
                        <p class="bobytext-edit">
                            <img src="http://www.t-booking.com/uploads_file/social_type/{{item.type_icon}}" width="30" class="icon-so">
                        </p>
                        <p class="textdetail" >                        
                           <input type="text" class="form-control" value="{{item.web_guest_social}}" ng-model="item.web_guest_social" ng-change="{{item.fun_name}}(item.web_guest_social)">
                        </p>
                    </div>
                    
                </div> -->
                
                
                <!-- <div class="btn btn-primary" ng-click="savesocialquest_detail();update_social_bookAgent()" align="center" style="    margin-left: 38%;"> -->
               <!--  <div align="center" style="width: 100%">
                    <div style="border: 0px solid #999999; width: 90%; border-radius: 5px;
    color: #fff; font-size: 16px; box-shadow: 3px 4px 7px #999999; z-index: 60; background: #3C8DBC;"  ng-click="savesocialquest_detail();update_social_bookAgent()">
                <span class="glyphicon glyphicon-floppy-open "  aria-hidden="true" align="center" style="font-size: 20px"></span>
                <span ng-if="flagcheck == 1">SAVE</span>
                        <span ng-if="flagcheck == 2">บันทึก</span>
                        <span ng-if="flagcheck == 3">保存</span>
                </div>
                </div> -->
                        <!-- <span ng-if="flagcheck == 1">SAVE</span>
                        <span ng-if="flagcheck == 2">บันทึก</span>
                        <span ng-if="flagcheck == 3">保存</span> -->
                <!-- </div> -->
                
                
            </div><Br/>
            <!-- <div style="border:1px solid #ddd;box-shadow: 1px 1px 10px #999999;padding: 10px 0;border-radius: 8px">
                

                
            </div> -->
        <Br/>
        
    </div>
    </div>
    </div>
    <Br/> 
    <Br/> 
    <Br/> 

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

<!-- END -->







<!-- SECTION BOOKING INFOMATION -->

<div data-role="page" id="Booking-information" style="background: #fff" class="bg-body">
    <div class="header" style="position: fixed;font-size: 16px;z-index: 1;">
     
    <table width="100%">

         <tr >
            <td width="3%"></td>
            <td width="10%" > 
                <a href="#voucher" class="home-icon" data-transition="slide" >
                     <i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
                </a>
            </td>
            <td align="center" >
                  <span ng-bind="tb_web_admin_company"></span>
            </td>
            <td width="10%" align="right">
                <div class="logoagent">
                    <img ng-src="http://www.t-booking.com/v1/admin/file/logo/crop/{{agent}}.jpg" err-src="images/ctr.jpg" width="45" height="40" ng-click="snapphoto()">
                </div>
            </td>
            <td width="3%"></td>
         </tr>
         
      </table>
      </div>
    <div style="" class="roongheader">      
      <table width="100%">
          <tr style="background-color: #cae2ef ">
              <td width="3%" style="border-radius: 0 0 0 8px;"></td>
              <td align="left">
                    <div class="main-icon2"><i class="fa fa-cart-plus fa-lg" aria-hidden="true" style="font-size: 28px; color: #39c;line-height: 1;"></i> 
                    </div>
              </td>
              <td align="center" style="padding: 5px;">
                    <table width="100%">
                       <tr>
                            <td align="center" >
                                  <span class="" ng-if="flagcheck == 1" ng-bind="topic_en"></span>
                                  <span class="" ng-if="flagcheck == 2" ng-bind="topic_th"></span>
                                  <span class="" ng-if="flagcheck == 3" ng-bind="topic_cn"></span>
                            </td>
                       </tr>
                       <tr>
                            <td align="center">
                                <span ng-if="flagcheck == 1" >Booking information</span>
                                <span ng-if="flagcheck == 2" >ข้อมูลการจอง</span>
                                <span ng-if="flagcheck == 3" >预订信息</span>
                            </td>
                       </tr>
                      
                    </table>
              </td>
              <td align="right">
                  <div class="main-icon2" >
                    <i class="fa fa-share-square-o fa-2x" aria-hidden="true" ng-click="sharesocial()" style="color: #3C8DBC; font-size: 25px; z-index: 61;line-height: 1.4;"></i>
                  </div> 
              </td>
              <td width="3%" style="border-radius: 0 0 8px 0;"></td>
         </tr>
      </table>
      </div>
      <div id="icon-pageslide" align="center" data-position="fixed" >
          <div id="pagese"></div>
          <div id="pagese1"></div>
          <div id="pagese2"></div>
      </div>


    <!-- <div class="header" data-role="header" style="position: fixed;">
        <div>
            <p id="namedriver" style="padding-top: 25px; " align="center">
            <span  >{{tb_web_admin_company}}</span>
        
            </p>
        
        </div>
        
        <a href="#voucher" class="home-icon home-no" data-transition="slide"><i class="fa fa-chevron-left fa-2x" aria-hidden="true" style=""></i></a>
        <div class="logoagent">
            <img ng-src="http://www.t-booking.com/v1/admin/file/logo/crop/{{agent}}.jpg" err-src="images/ctr.jpg" width="45" height="40" ng-click="snapphoto()">
        </div>
    </div>
    <Br/>
    <div align="center" data-position="fixed" id="icon-pageslide">
        <div id="pagese"></div>
        <div id="pagese1"></div>
        <div id="pagese2"></div>
    </div>
    <div  class="main-icon2" style="margin-top: 67px"><center>
        <img src="images/pluss.png" style="font-size:25px;" width="30" /></center>
    </div>


     <div style="border: 0px solid #999999;
    width: 40px;
    height: 40px;
    padding: 5px;
    position: fixed;
    text-align: center;
    border-radius: 60px;
    margin-left: 87%;
    z-index: 60;
    color: #3399CC;
    font-size: 16px;
    margin-top: 67px;
    box-shadow: 1px 1px 5px #999999;
    background: #fff;">
    <i class="fa fa-share-square-o fa-2x" aria-hidden="true" ng-click="sharesocial()" style="color: #3C8DBC; font-size: 25px; margin-top: 5px; z-index: 61;"></i>
    </div>
    <div id="sec-title2" >
    
            
        <p  style="display: block; margin: 0;    width: 76%;  margin-left: 12%;font-weight: normal !important;font-size:  16px !important" align="center">
            <span  ng-if="flagcheck == 1">{{topic_en}}</span>
            <span  ng-if="flagcheck == 2">{{topic_th}}</span>
            <span  ng-if="flagcheck == 3">{{topic_cn}}</span>
        </p>
        <p style="display: block; margin: 0; width: 78%; margin-left: 11%;font-size:  16px !important">
            <span class="" ng-if="flagcheck == 1" >Booking information</span>
            <span class="" ng-if="flagcheck == 2" >ข้อมูลการจอง</span>
            <span class="" ng-if="flagcheck == 3" >预订信息</span>
        </p>
    </div> --> 




   
    <div class="ui-content" style="">
        
        <div class="col">    
            <div class="borderdetail2">
            
            <div style="border:1px solid #ddd;box-shadow: 1px 1px 10px #999999;padding: 5px 5px;;border-radius: 8px">
                <div style="font-size: 16px;background:#f0f0f0;border-bottom: 1px solid #ddd;">
                   <!--  <p class="infoma">
                        <span class="" ng-if="flagcheck == 1">Service:</span>
                        <span class="" ng-if="flagcheck == 2">บริการ :</span>
                        <span class="" ng-if="flagcheck == 3">旅游项目 :</span>
                    </p> -->
                    <p class="textdetail" style="display: block;font-size: 16px">
                        <span class="" ng-if="flagcheck == 1">{{topic_en}}</span>
                        <span class="" ng-if="flagcheck == 2">{{topic_th}}</span>
                        <span class="" ng-if="flagcheck == 3">{{topic_cn}}</span>
                    </p>
                    <p class="textdetail" ><span class="" ng-if="flagcheck == 1">{{web_extra_way_topic_en}}</span>
                        <span class="" ng-if="flagcheck == 2">{{web_extra_way_topic_th}}</span>
                        <span class="" ng-if="flagcheck == 3">{{web_extra_way_topic_cn}}</span>
                    </p>
                </div>
                <table style="font-size: 16px">
                    <tr >
                        <td width="2%"></td>
                        <td width="33%" style="padding: 10px 0">
                            <span  ng-if="flagcheck == 1">Voucher No :</span>
                            <span  ng-if="flagcheck == 2">เลขที่วอเชอร์ :</span>
                            <span  ng-if="flagcheck == 3">凭证编号 :</span>      
                        </td>
                        <td width="2%"></td>
                        <td width="45%">
                             <span >{{VOUCHER}}</span>
                        </td>
                        <td width="2%"></td>
                        <td align="center" style="text-align: center;" width="4%">
                            <i class="fa  fa-search pull-right" ng-click="voucherdialog()" style="font-size:20px;color: #4f99c4;"></i>
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
                           <span ng-if="flagcheck == 1">{{web_car_topic_en}}{{web_car_pax}}</span>
                            <span ng-if="flagcheck == 2">{{web_car_topic_th}}{{web_car_pax_th}}</span>
                            <span ng-if="flagcheck == 3">{{web_car_topic_cn}}{{web_car_pax_cn}}</span> 
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
                            <i class="fa  fa-search pull-right" ng-click="meetingpoint()" style="font-size:20px;color: #4f99c4;"></i>
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
                            <i class="fa  fa-search pull-right" ng-click="pickupsign()"  style="font-size:20px;  color: #4f99c4; "></i>
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
                        <td><span>{{numcar}}</span></td>
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
                            <span >{{ondate}}</span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <!-- <tr ng-if="area == 'Rental'" >
                        <td></td>
                        <td  ng-if="area == 'Out'" style="padding: 10px 0">
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
                            <span >{{ondate}}</span>
                        </td>

                        <td></td>
                        <td></td>
                    </tr> -->
                    <tr ng-if="area != 'Point' && area != 'Rental'">
                        <td></td>
                        <td style="padding: 10px 0">
                            <span class="" ng-if="flagcheck == 1">Flight :</span>
                            <span class="" ng-if="flagcheck == 2">เที่ยวบิน :</span>
                            <span class="" ng-if="flagcheck == 3">航班号 :</span>
                        </td>
                        <td></td>
                        <td>
                            <span >{{air}}</span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <!-- <tr ng-if="area != 'Point'" style="background:#f0f0f0;border-bottom: 1px solid #ddd;">
                        <td></td>
                        <td style="padding: 10px 0">
                            <span class="" ng-if="flagcheck == 1">Time :</span>
                            <span class="" ng-if="flagcheck == 2">เวลา :</span>
                            <span class="" ng-if="flagcheck == 3">时间 :</span>
                        </td>
                        <td></td>
                        <td>
                            <span>{{airin}}</span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr> -->
                    <tr >
                        <td></td>
                        <td style="padding: 10px 0">
                            <span class="" ng-if="flagcheck == 1">On Date :</span>
                            <span class="" ng-if="flagcheck == 2">วันที่ใช่บริการ :</span>
                            <span class="" ng-if="flagcheck == 3">使用日期 :</span>
                        </td>
                        <td></td>
                        <td>
                            <span>{{outdate}}</span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;">
                        <td></td>
                        <td style="padding: 10px 0">
                            <span class="" ng-if="flagcheck == 1">Pick up Time :</span>
                            <span class="" ng-if="flagcheck == 2">เวลารับ :</span>
                            <span class="" ng-if="flagcheck == 3">接人时间 :</span>
                        </td>
                        <td></td>
                        <td>
                            <span>{{airout}}</span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr >
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
                    <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;">
                      <td></td>
                      <td style="padding: 10px 0">
                          <span class="" ng-if="flagcheck == 1">Departure Area :</span>
                          <span class="" ng-if="flagcheck == 2">พื้นที่ออกเดินทาง :</span>
                          <span class="" ng-if="flagcheck == 3">出发区域 :</span>
                      </td>
                      <td></td>
                      <td>
                          <span class="" ng-if="flagcheck == 1">{{web_province_to_name}}</span>
                          <span class="" ng-if="flagcheck == 2">{{web_province_name_th}}</span>
                          <span class="" ng-if="flagcheck == 3">{{web_province_name_cn}}</span>
                      </td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr >
                      <td></td>
                      <td style="padding: 10px 0">
                          <span class="" ng-if="flagcheck == 1">Arrival Area :</span>
                          <span class="" ng-if="flagcheck == 2">พื้นที่ปลายทาง :</span>
                          <span class="" ng-if="flagcheck == 3">抵达区域 :</span>
                      </td>
                      <td></td>
                      <td>
                          <span class="" ng-if="flagcheck == 1">{{web_province_to_name}}</span>
                        <span class="" ng-if="flagcheck == 2">{{web_province_to_name_th}}</span>
                        <span class="" ng-if="flagcheck == 3">{{web_province_to_name_cn}}</span>
                      </td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;">
                      <td></td>
                      <td style="padding: 10px 0">
                          <span ng-if="flagcheck == 1">Departure Location : </span>
                          <span ng-if="flagcheck == 2">ออกจากสถานที่ :</span>
                          <span ng-if="flagcheck == 3">出发地点 :</span>
                      </td>
                      <td></td>
                      <td>
                          <span>{{transferplace_topic}}</span>
                      </td>
                      <td></td>
                      <td>
                          <img src="https://goldenbeachgroup.com/car/images/icon/view/map.png" ng-click="Pickupplace()" width="30">
                      </td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td style="padding: 10px 0">
                          <span ng-if="flagcheck == 1">Arrival Location :</span>
                          <span ng-if="flagcheck == 2">สถานที่ปลายทาง :</span>
                          <span ng-if="flagcheck == 3">抵达地点 :</span>
                      </td>
                      <td></td>
                      <td>
                          <span>{{transferplace_topic_to}}</span>
                      </td>
                      <td></td>
                      <td>
                          <img src="https://goldenbeachgroup.com/car/images/icon/view/map.png" ng-click="Toplace()" width="30">
                      </td>
                      <td></td>
                    </tr>
                    <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;">
                      <td></td>
                      <td style="padding: 10px 0">
                          <span class="" ng-if="flagcheck == 1">Book by :</span>
                          <span class="" ng-if="flagcheck == 2">คนจอง :</span>
                          <span class="" ng-if="flagcheck == 3">预订人 :</span>
                      </td>
                      <td></td>
                      <td >
                          <span >
                            <i  class="fa fa-user " aria-hidden="true" style="margin-right: 10px;color: #227aa6;font-size: 20px;"></i>{{posted}} 
                        </span>
                        
                        
                      </td>
                      <td></td>
                      <td align="center" style="text-align: center;">
                        <i class="fa  fa-search" ng-click="bookby()"  style="font-size:20px;  color: #4f99c4; float: right;padding: 5px;"></i>
                      </td>
                      <td></td>
                    </tr>
                    <tr >
                      <td></td>
                      <td style="padding: 10px 0">
                          <span class="" ng-if="flagcheck == 1">Date :</span>
                          <span class="" ng-if="flagcheck == 2">วันที่ :</span>
                          <span class="" ng-if="flagcheck == 3">日期 :</span>
                      </td>
                      <td></td>
                      <td>
                          <span >{{datebook | date:' yyyy-MM-dd / HH:mm'}}</span>
                      </td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;">
                      <td></td>
                      <td style="padding: 10px 0">
                          <span class="" ng-if="flagcheck == 1">Confirm by :</span>
                          <span class="" ng-if="flagcheck == 2">ยืนยันโดย :</span>
                          <span class="" ng-if="flagcheck == 3">确认人 :</span>
                      </td>
                      <td></td>
                      <td>
                          <span ><i  class="fa fa-user" aria-hidden="true" style="margin-right: 10px;color: #227aa6;font-size: 20px;"></i>{{user_confirm}}
                          </span>
                      </td>
                      <td></td>
                      <td align="center" style="text-align: center;">
                          <i class="fa  fa-search" ng-click="confirmby()"  style="font-size:20px;  color: #4f99c4; float: right;padding: 5px;"></i>
                      </td>
                      <td></td>
                    </tr>
                    <tr >
                      <td></td>
                      <td style="padding: 10px 0">
                          <span class="" ng-if="flagcheck == 1">Date :</span>
                          <span class="" ng-if="flagcheck == 2">วันที่ :</span>
                          <span class="" ng-if="flagcheck == 3">日期:</span>
                      </td>
                      <td></td>
                      <td>
                          <span >{{date_confirm | date:' yyyy-MM-dd / HH:mm'}}</span>
                      </td>
                      <td></td>
                      <td></td>
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

<!-- END -->





<!-- SECTION DRIVER -->

<div data-role="page" id="Driver" style="background: #fff" class="bg-body">
    <div class="header" style="position: fixed;font-size: 16px;z-index: 1;">

     <table width="100%">

         <tr >
            <td width="3%"></td>
            <td width="10%" > 
                <a href="#voucher" class="home-icon" data-transition="slide" >
                     <i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
                </a>
            </td>
            <td align="center" >
                  <span  >{{tb_web_admin_company}}</span>
            </td>
            <td width="10%" align="right">
                <div class="logoagent">
                    <img ng-src="http://www.t-booking.com/v1/admin/file/logo/crop/{{agent}}.jpg" err-src="images/ctr.jpg" width="45" height="40" ng-click="snapphoto()">
                </div>
            </td>
            <td width="3%"></td>
         </tr>
         
      </table>
      </div>
      <div style="" class="roongheader">

      <table width="100%">
          <tr >
              <td width="3%" style="border-radius: 0 0 0 8px;"></td>
              <td align="left">
                    <div class="main-icon2"><i class="fa fa-cart-plus fa-lg" aria-hidden="true" style="font-size: 28px; color: #39c;line-height: 1;"></i> 
                    </div>
              </td>
              <td align="center" style="padding: 5px;">
                    <table width="100%">
                       <tr>
                            <td align="center" >
                                  <span class="" ng-if="flagcheck == 1">{{topic_en}}</span>
                                  <span class="" ng-if="flagcheck == 2">{{topic_th}}</span>
                                  <span class="" ng-if="flagcheck == 3">{{topic_cn}}</span>
                            </td>
                       </tr>
                       <tr>
                            <td align="center">
                                <span ng-if="flagcheck == 1" >Driver / Car</span>
                                <span ng-if="flagcheck == 2" >คนขับ / รถ</span>
                                <span ng-if="flagcheck == 3" >司机 / 汽车</span>
                            </td>
                       </tr>
                      
                    </table>
              </td>
              <td align="right">
                  <div class="main-icon2">
                    <i class="fa fa-share-square-o fa-2x" aria-hidden="true" ng-click="sharesocial()" style="color: #3C8DBC; font-size: 25px; z-index: 61;line-height: 1.4;"></i>
                    </div> 
              </td>
              <td width="3%" style="border-radius: 0 0 8px 0;"></td>
         </tr>
      </table>
      </div>
      <div id="icon-pageslide" align="center" data-position="fixed" >
          <div id="pagese"></div>
          <div id="pagese1"></div>
          <div id="pagese2"></div>
      </div>  

    <div class="ui-content" >
    
    
        
        <div class="col">    
            <div class="borderdetail2">
                <div style="padding-bottom: 20px;padding: 0;height: 189px;"  align="center">
                    <table width="100%">
                        <tr>
                            <td style="width: 31%; padding-right: 6px;">
                                <div id="img-profile" align="center" style="display: inline-block;">
                                    <img ng-src="http://t-booking.com/admin/file/driver/pic/{{post_date}}.jpg" err-src="images/man.png" width="100%" style="border-radius: 8px;display: inline-block;">
                                </div>
                            </td>
                            <td>
                                <div  style="display: inline-block; width: 100%; padding: 0;   border: dashed 1px #ddd; border-radius: 8px;    padding-bottom: 8px;">
                        
                                <div style="width: 100%" class="{{stylecarcolor}}">
                                    <div align="center" class="carnumber" style="padding: 0;font-size: 16px;margin: 0;width: 48%;    display: inline-block; float: left;">
                                        <span class="" ng-if="flagcheck == 1">Car number</span>
                                        <span class="" ng-if="flagcheck == 2">เลขรถ </span>
                                        <span class="" ng-if="flagcheck == 3">车编号 </span>
                                        <div class="" style="border-radius: 50%; width:60px; height: 60px;    /* line-height: 2.6; */ border: 3px solid #4f98c3;   background: #fff; padding: 16px;" align="center">
                                        
                                       
                                        <p tyle="margin: 0;color: #000 !important">{{web_driver_car_num}}</p>
                                    </div>
                                    </div>
                                    <div align="center" style="padding: 0; font-size :16px;width:48%;float: right;">
                                        <span class="" ng-if="flagcheck == 1">Car color</span>
                                        <span class="" ng-if="flagcheck == 2">สีรถยนต์</span>
                                        <span class="" ng-if="flagcheck == 3">汽车颜色</span>
                                        <div class="{{stylecarcolorselect}}" align="center" ng-if="web_carall_car_color == 'Yellow'">
                                    </div>
                                    </div>
                                </div>
                                <div align="center" style="padding: 0">     
                                    <div style="font-size: 16px;padding: 0" align="center">
                                        <span ng-if="flagcheck == 1">License Plate</span>
                                        <span ng-if="flagcheck == 2">ป้ายทะเบียน</span>
                                        <span ng-if="flagcheck == 3">车牌</span>
                                    </div>
                                    <div class="{{pai}}" style="margin: 0 " align="center">
                                    {{web_carall_plate_num}}<Br/>{{web_carall_province}}</div>
                                     
                                 </div>    

                                </div>
                            </td>
                        </tr>
                        
                    </table>
                    <!-- <div id="img-profile" align="center" style="display: inline-block;">
                        <img ng-src="http://t-booking.com/admin/file/driver/pic/{{post_date}}.jpg" err-src="images/man.png" width="100%" style="border-radius: 8px;display: inline-block;">
                    </div> -->
                  
                    
                    
                    
                </div>
                <Br/>
                <div style="border:1px solid #ddd;box-shadow: 1px 1px 10px #999999;padding: 10px 0;border-radius: 8px ">
                <!-- <div style="padding: 15px 10px">
                    <p class="infoma3">
                        <span class="" ng-if="flagcheck == 1">Car color: :</span>
                        <span class="" ng-if="flagcheck == 2">สีรถยนต์ :</span>
                        <span class="" ng-if="flagcheck == 3">汽车颜色 :</span>
                    </p>
                    <p class="textdetail">
                        <span class="" ">{{web_carall_car_color}}</span>
                        
                    </p>
                </div> -->
                <div style="padding: 6px 12px;">
                
                    <p class="infoma3" style="width: 90px">
                        <span class="" ng-if="flagcheck == 1">First name :</span>
                        <span class="" ng-if="flagcheck == 2">ชื่อ :</span>
                        <span class="" ng-if="flagcheck == 3">名字 :</span>
                    </p>
                    <p class="textdetail">
                        <span class="" ng-if="flagcheck == 1">{{fname}}</span>
                        <span class="" ng-if="flagcheck == 2">{{fnamet}}</span>
                        <span class="" ng-if="flagcheck == 3">{{fname}}</span>
                    </p>
                </div>
                <div style="padding: 6px 12px;">
                    <p class="infoma3" style="width: 90px">
                        <span class="" ng-if="flagcheck == 1">Last name :</span>
                        <span class="" ng-if="flagcheck == 2">นามสกุล :</span>
                        <span class="" ng-if="flagcheck == 3">姓 :</span>
                    </p>
                    <p class="textdetail">
                        <span class="" ng-if="flagcheck == 1">{{lname}}</span>
                        <span class="" ng-if="flagcheck == 2">{{lnamet}}</span>
                        <span class="" ng-if="flagcheck == 3">{{lname}}</span>
                    </p>
                </div>
                <div style="padding: 6px 12px;">
                    <p class="infoma3" style="width: 90px">
                        <img src="images/phone1.png" width="35">
                        <!-- <span class="" ng-if="flagcheck == 1">Tel :</span>
                        <span class="" ng-if="flagcheck == 2">โทรศัพท์ :</span>
                        <span class="" ng-if="flagcheck == 3">电话 :</span> -->
                    </p>
                    <p class="textdetail" style="display: inline-block;">{{web_driver_phone}}</p>
                    <p style="float: right;display: inline-block;">
                        <img src="images/phone.png" width="25">
                    </p>
                </div>
                <div ng-if="web_driver_line_id.length != 0 && web_driver_line_id != null">
                    <p class="infoma3" style="width: 90px">
                        <img src="images/line.png" class="icon-so">
                    </p>
                    <p class="textdetail" >{{web_driver_line_id}} </p>
                    <a href="http://line.me/ti/p/~{{web_driver_line_id}}"><i class="fa fa-plus fa-lg pull-right" aria-hidden="true" style="color: #38c;padding: 5px;"></i></a>
                </div>
                <div ng-if="web_driver_wechat_id.length != 0 && web_driver_wechat_id != null">
                    <p class="infoma3" style="width: 90px">
                        <img src="images/w.jpeg" class="icon-so">
                    </p>
                    <p class="textdetail" >{{web_driver_wechat_id}}</p>
                    <i class="fa fa-plus fa-lg pull-right" aria-hidden="true" style="color: #38c;padding: 5px;"></i>
                </div>
                <div ng-if="web_driver_whatsapp_id.length != 0 && web_driver_whatsapp_id != null">
                    <p class="infoma3" style="width: 90px">
                        <img src="images/wa.png" class="icon-so">
                    </p>
                    <p class="textdetail" ><a href="whatsapp://send?text=Hello%2C%20World!">{{web_driver_whatsapp_id}}</a></p>
                </div>
                <div ng-if="web_driver_skype_id.length != 0 && web_driver_skype_id != null">
                    <p class="infoma3" style="width: 90px">
                        <img src="images/s.jpeg" class="icon-so">
                    </p>
                    <p class="textdetail" >{{web_driver_skype_id}}</p>
                </div>
                <div>
                    
                    <Br/>
                    <p>
                      
                        <B><span ng-if="flagcheck == 1">Details</span>
                        <span ng-if="flagcheck == 2">รายละเอียด</span>
                        <span ng-if="flagcheck == 3">细节</span></B>
                    </p>
                    
                    <div class="box-in-car" ng-repeat="item in gallerycar">
                    <img  src="http://t-booking.com/pic/carmodelicon/{{item.post_date}}.jpg" id="img-fig">
                    </div>
                    <p>
                        <B><span ng-if="flagcheck == 1">Facilitiy </span>
                        <span ng-if="flagcheck == 2">ความสะดวก </span>
                        <span ng-if="flagcheck == 3">设施</span></B>
                    </p>
                    <p style="margin-left: 3%; padding-top: 9px;">
                <B ng-if="flagcheck == 1 || flagcheck == 2">1.</B>
                <B ng-if="flagcheck == 3">一. </B>     <img src="images/air.png"  style="margin: 8px;">
                <span ng-if="flagcheck == 1">Air Conditioner</span>
                <span ng-if="flagcheck == 2">เครื่องปรับอากาศ</span>
                <span ng-if="flagcheck == 3">空調</span>
            </p>
            <p style="margin-left: 3%;padding-bottom: 9px;">
                <B ng-if="flagcheck == 1 || flagcheck == 2">2.</B>
                <B ng-if="flagcheck == 3">二. </B><i class="fa fa-music" aria-hidden="true"  style="margin: 8px;"></i>
                <span ng-if="flagcheck == 1">Audio Player</span>
                <span ng-if="flagcheck == 2">เครื่องเสียง</span>
                <span ng-if="flagcheck == 3">音頻播放器</span>&nbsp;&nbsp;
            </p>
                    <!-- <i class="fa  fa-search pull-right" ng-click="showgallery()" style="font-size:20px;color: #4f99c4;float: right;padding: 5px;"></i> -->
                    <!-- <p class="infoma3">
                    
                    <span ng-if="flagcheck == 1">Capacity</span>
                    <span ng-if="flagcheck == 2">ความจุ</span>
                    <span ng-if="flagcheck == 3">容量</span>
                    <table class="table table-striped table-hover   " >
                </p> -->  
                <p>
                    <B><span ng-if="flagcheck == 1">Capacity</span>
                        <span ng-if="flagcheck == 2">ความจุ</span>
                        <span ng-if="flagcheck == 3">容量</span></B>
                </p>             
                 <table class="table table-striped table-hover   " style="margin-bottom: 0" width="100%">
                  <tr class="head-table-dialog" align="center" style="background-color: #cae2ef;">
                      
                       <td style="border-radius: 8px 0 0 0;">
                        <span ng-if="flagcheck == 1">Plan</span>
                        <span ng-if="flagcheck == 2">แผน</span>
                        <span ng-if="flagcheck == 3">计划</span>
                    </td>
                    <td>
                      <span ng-if="flagcheck == 1">Adult</span>
                        <span ng-if="flagcheck == 2">ผู้ใหญ่</span>
                        <span ng-if="flagcheck == 3">成人</span>
                    </td>
                    <td >
                        <span ng-if="flagcheck == 1">Child</span>
                        <span ng-if="flagcheck == 2">เด็ก</span>
                        <span ng-if="flagcheck == 3">儿童</span>
                    </td> 
                      <td align="center">
                        <span ng-if="flagcheck == 1">Bag big</span>
                        <span ng-if="flagcheck == 2">กระเป๋า<Br/>
                        ใหญ่</span>
                        <span ng-if="flagcheck == 3">袋大</span>
                    </td>
                    <td align="center" style="border-radius: 0 8px 0 0;">
                      <span ng-if="flagcheck == 1">Bag small</span>
                        <span ng-if="flagcheck == 2">กระเป๋า<Br/>เล็ก</span>
                        <span ng-if="flagcheck == 3">袋小</span>
                    </td>
                    
                    
                   
                  </tr>
               
               
                  <tr ng-repeat="p in detailitem"  ng-class="{evencapa: $even, oddcapa: $odd}">
                      
                      <td align="center">{{p.plan}}</td>
                       <td >
                          <span align="center" ng-if="p.adult == 0">-</span>
                          <span style="display:inline-block" ng-show="p.adult != 0">
                          <i class="fa fa-male fa-lg" aria-hidden="true"></i>
                          </span>
                          <span ng-if="p.adult == 2 && p.adult != 0">
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>

                          </span>
                          <span ng-if="p.adult == 3 && p.adult != 0">
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                          </span>
                          <span ng-if="p.adult == 4 && p.adult != 0">
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                          </span>
                          <span ng-if="p.adult == 5 && p.adult != 0">
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                          </span>                          
                      </td>
                       <td >
                          <span align="center" ng-if="p.child == 0">-</span>
                          <span style="display:inline-block" ng-show="p.child != 0">
                              <i class="fa fa-child" aria-hidden="true"></i>
                              </span>
                              <span ng-if="p.child == 2 && p.child != 0">
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>

                              </span>
                              <span ng-if="p.child == 3 && p.child != 0">
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                              </span>
                              <span ng-if="p.child == 4 && p.child != 0">
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                              </span>
                              <span ng-if="p.child == 5 && p.child != 0">
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                              </span>
                      </td>
                      <td >
                        <span align="center" ng-if="p.bag_big == 0">-</span>

                        <span style="display:inline-block" ng-show="p.bag_big != 0">
                        <i class="fa fa-suitcase fa-2x" aria-hidden="true" ng-if="p.bag_big == 1"></i>
                        </span>
                        <span ng-if="p.bag_big == 2 && p.bag_big != 0">
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>

                        </span>
                        <span ng-if="p.bag_big == 3 && p.bag_big != 0">
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                        </span>
                        <span ng-if="p.bag_big == 4 && p.bag_big != 0">
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                        </span>
                        <span ng-if="p.bag_big == 5 && p.bag_big != 0">
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                        </span>
                      </td>

                      <td >
                          <span align="center" ng-if="p.bag_small == 0">-</span>

                          <span style="display:inline-block" ng-show="p.bag_small != 0">
                          <i class="fa fa-suitcase " aria-hidden="true" ng-if="p.bag_small == 1"></i>
                          </span>
                          <span ng-if="p.bag_small == 2 && p.bag_small != 0">
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>

                          </span>
                          <span ng-if="p.bag_small == 3 && p.bag_small != 0">
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                          </span>
                          <span ng-if="p.bag_small == 4 && p.bag_small != 0">
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                          </span>
                          <span ng-if="p.bag_small == 5 && p.bag_small != 0">
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                          </span>
                      </td>
                     
                                           
                      
                      
                      
                      
                
              </table>
                    
                </div>
                <div >
                <!--     <p style="color: #006699; font-size: 16px;">
                 <B ng-if="flagcheck == 1 || flagcheck == 2">3.</B>
                <B ng-if="flagcheck == 3">三. </B>
                    <span ng-if="flagcheck == 1">Facilitiy </span>
                    <span ng-if="flagcheck == 2">อำนวยความสะดวก </span>
                    <span ng-if="flagcheck == 3">设施</span>
                     
                </p> -->
                
            <p style="color: #006699; font-size: 16px;">
                
          
                
                </div>

               <!--     
                <div style="padding: 15px 10px">    
                    <p class="infoma3" >
                        <span ng-if="flagcheck == 1">Arrived :</span>
                        <span ng-if="flagcheck == 2">คนขับรถมาถึง :</span>
                        <span ng-if="flagcheck == 3">到达 :</span>
                    </p>
                    <p class="textdetail" style="display: inline-block;">{{driver_topoint_date }}</p>
                        <span id="ico-ri" ng-if="driver_topoint == 0">
                            <i class="fa fa-times fa-lg" style="color: #a8211a" aria-hidden="true"></i>
                        </span>
                        <span style="margin-left: 11%;  padding: 10px 0;" ng-if="driver_topoint == 1">
                            <span></span>
                        </span>
                        <div style="float: right;display: inline-block;padding: 0" ng-if="driver_topoint == 1">
                         <img src="https://goldenbeachgroup.com/car/images/icon/view/map.png" ng-click="Driverarrived()" width="25">
                         </div>
                   
                    
                </div>
                
                <div style="padding:15px 10px">
                    <p class="infoma3">
                        <span ng-if="flagcheck == 1">On the vehicle : </span>
                        <span ng-if="flagcheck == 2">ขึ้นมาแล้ว :</span>
                        <span ng-if="flagcheck == 3">客人已经上车 :</span>
                        
                    </p>
                    <p class="textdetail" style="display: inline-block;">{{driver_pickup_date }}</p>
                        <div id="ico-ri" ng-if="driver_pickup == 0" style="color: #a8211a;float: right;padding: 0" >
                            <i class="fa fa-times fa-lg" style="padding: 5px;" aria-hidden="true" ></i>
                        </div>
                        
                        <div style="float: right;display: inline-block;padding: 0" ng-if="driver_pickup == 1">
                         <img src="https://goldenbeachgroup.com/car/images/icon/view/map.png" ng-click="Driverpickup()" width="25">
                         </div>
                    
                    
                </div>
              
                 <div style="padding: 15px 10px">
                    <p class="infoma3">
                        <span ng-if="flagcheck == 1">Has sent guests :</span>
                        <span ng-if="flagcheck == 2">ส่งลูกค้าเสร็จแล้ว :</span>
                        <span ng-if="flagcheck == 3">已经送客人 :</span>
                        
                    </p>
                    <p class="textdetail" style="display: inline-block;">{{driver_complete_date }}</p>
                        <div id="ico-ri" ng-if="driver_complete == 0" style="color: #a8211a;float: right;padding: 0">
                            <i class="fa fa-times fa-lg" style="padding: 5px;"   aria-hidden="true"></i>
                        </div>
                        
                        <div style="float: right;display: inline-block;padding: 0" ng-if="driver_complete == 1">
                         <img src="https://goldenbeachgroup.com/car/images/icon/view/map.png" ng-click="Complete()" width="25">
                         </div>
                    

                </div> -->
               
                
            

            </div>
            <Br/>
            
            </div>
        </div>
    </div>
    <Br/>
    <Br/>
    <Br/>
    <Br/>
     
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

<!-- END -->




<!-- SECTION PLACE -->

<div data-role="page" id="Place" style="" class="bg-body">
      <div class="header" style="position: fixed;font-size: 16px;z-index: 1;">
      <table width="100%">

         <tr >
            <td width="3%"></td>
            <td width="10%" > 
                <a href="#voucher" class="home-icon" data-transition="slide" >
                     <i class="fa fa-chevron-left fa-2x" aria-hidden="true" style="color: #000" ></i>
                </a>
            </td>
            <td align="center" >
                  <span  >{{tb_web_admin_company}}</span>
            </td>
            <td width="10%" align="right">
                <div class="logoagent">
                    <img ng-src="http://www.t-booking.com/v1/admin/file/logo/crop/{{agent}}.jpg" err-src="images/ctr.jpg" width="45" height="40" ng-click="snapphoto()">
                </div>
            </td>
            <td width="3%"></td>
         </tr>
      </table>
      </div>
      <div  class="roongheader">
      <table width="100%">
          <tr style="">
              <td width="3%" style="border-radius: 0 0 0 8px;"></td>
              <td align="left" width="10%">
                    <div class="main-icon2"><i class="fa fa-cart-plus fa-lg" aria-hidden="true" style="font-size: 28px; color: #39c;line-height: 1;"></i>
                    </div>
              </td>
              <td align="center" style="padding: 5px;">
                  <div style="padding: 0 10px">
                    <table width="100%">
                       <tr>
                            <td align="center" style="color: #fff;text-shadow: none !important">
                                  <span class="" ng-if="flagcheck == 1" ng-bind="topic_en"></span>
                                  <span class="" ng-if="flagcheck == 2" ng-bind="topic_th"></span>
                                  <span class="" ng-if="flagcheck == 3" ng-bind="topic_cn"></span>
                            </td>
                       </tr>
                       <tr>
                            <td align="center" style="color: #fff;text-shadow: none !important">
                                  <span  ng-if="flagcheck == 1">Start using</span>
                                  <span  ng-if="flagcheck == 2" >เริ่มใช้งาน</span>
                                  <span  ng-if="flagcheck == 3" >开始使用</span> 
                            </td>
                       </tr>
                      
                    </table>
                    </div>
              </td>
              <td align="right" width="10%">
                  <div class="main-icon2">
                    <i class="fa fa-share-square-o fa-2x" aria-hidden="true" ng-click="sharesocial()" style="color: #3C8DBC; font-size: 25px; z-index: 61;line-height: 1.4;"></i>
                    </div> 
              </td>
              <td width="3%" style="border-radius: 0 0 8px 0;"></td>
         </tr>
      </table>
      </div>
      <div id="icon-pageslide" align="center" data-position="fixed" >
          <div id="pagese"></div>
          <div id="pagese1"></div>
          <div id="pagese2"></div>
      </div>  
   
    <div class="ui-content" style="background: none !important">
        <Br/>
    
        <div class="col" style="">    
            <div class="borderdetail" style="padding: 0;" >
                  
                <div class="textdetail3">
                    <ul class="Inform-driver-ul-main" style="margin-bottom: 0;">
                    
                    <li >
                        <span  ng-if="flagcheck == 1" >On Date / Time</span>
                        <span  ng-if="flagcheck == 2" >วันที่ใช้บริการ / เวลา</span>
                        <span  ng-if="flagcheck == 3" >使用日期 / 时间</span>
                        
                        <span style="font-weight: normal !important;float: right;" ng-bind="airout"></span>
                        <span style="float: right;padding: 0 8px"> / </span>  
                        <span style="float: right;font-weight: normal !important;" ng-bind="outdate"></span>
                        <!-- <span  ng-if="flagcheck == 1" style="color: #539bc5;">Pick up time:</span>
                        <span  ng-if="flagcheck == 2" style="color: #539bc5;">เวลารับใช้บริการ:</span>
                        <span  ng-if="flagcheck == 3" style="color: #539bc5;">接客人时间:</span> -->
                       <!--  <span>{{airout}}</span> -->
                        
                    </li>
                    <li  ng-click="popupselecttitleinform()" style="background-color: #f0f0f0;    ">
                                <div class="btn-inform" style="background: #37c837">
                                <i class="fa fa-paper-plane fa-lg " aria-hidden="true"></i>
                                </div>
                                <span ng-if="flagcheck == 1" >Inform the driver </span>
                                <span ng-if="flagcheck == 2">แจ้งคนขับ </span>
                                <span ng-if="flagcheck == 3">通知司机</span>
                                <span style="color: #000">({{setionflight.length}})</span>
                                <i class="fa fa-chevron-circle-right fa-lg" aria-hidden="true" style="float: right;color: #b3b3b3;padding: 9px 0;line-height: 0.8;"></i>
                                
                            
                    </li>
                    <li >
                            <div class="tol-driver" align="right">
                                    <img src="images/phone.png" width="100%" align="center">
                                </div>
                                <span ng-if="flagcheck == 1" >Driver</span>
                                <span ng-if="flagcheck == 2" >คนขับ</span>
                                <span ng-if="flagcheck == 3" >司机</span>
                                <i class="fa fa-commenting-o fa-lg" aria-hidden="true" style="float: right;  color: #37c837; padding: 5px 0; /* line-height: 0.8; */ font-size: 30px;" ng-click="openpopupcommentTodriver()"></i>
                           
                                
                          
                    </li>
                    <li style="background-color: #f0f0f0;    ">
                        <div class="tol-callcenter" align="right"><img src="images/phone.png"  width="100%" align="center" ></div>
                                <span ng-if="flagcheck == 1">Call center</span>
                                <span ng-if="flagcheck == 2">ศูนย์รับแจ้ง</span>
                                <span ng-if="flagcheck == 3">客服</span>
                                <i class="fa fa-commenting-o fa-lg" aria-hidden="true" style="    float: right;  color: #37c837; padding: 5px 0; /* line-height: 0.8; */ font-size: 30px;"></i>
                           
                                
                          
                    </li>
                    <li style="border-radius: 8px;">
                                <a href="#increasetime" id="" data-transition="slide" class="add-service" >
                                    <div style="width: 35px;  height: 35px; color: #fff; line-height: 2.2; border-radius: 50%; box-shadow: 1px 1px 5px #999999;text-align: center;"><img src="images/pluss.png" align="center" aria-hidden="true" ng-click="increasetimedialog" width="30" / >
                                    </div>
                                </a>
                                <span ng-if="flagcheck == 1">Add service</span>
                                <span ng-if="flagcheck == 2">เพิ่มบริการ</span>
                                <span ng-if="flagcheck == 3">添加服务</span>
                                <i class="fa fa-chevron-circle-right fa-lg" aria-hidden="true" style="float: right;color: #b3b3b3;padding: 9px 0;line-height: 0.8;"></i> 
                            
                                
                         
                    </li>
                    
                </ul>
                
                
            </div>
        </div>
    </div>
    
   
    </div>
    <div style="padding: 0 10px;    border-radius: 10px;margin-top: 5px;padding-bottom: 1px;" class="groob">
                <div align="center" style="font-size: 16px;
    padding: 12px 0;
    color: #fff;
    text-shadow: none !important;
    font-weight: 100 !important;">
                    <span ng-if="flagcheck == 1" style="font-weight: 200">Contact record</span>
                    <span ng-if="flagcheck == 2">บันทึกการติดต่อ</span>
                    <span ng-if="flagcheck == 3">联系记录</span>
                </div>
                <div class="record" ng-repeat="item in setionflight">
                <table id="record" width="100%" style="margin-bottom: 10px;font-size: 16px;border-color: none !important" ><!-- <span ng-class="{evendelay: $even, odddelay: $odd}"></span> -->
                    
                    <tr style="background-color: #fff;">
                        <!-- <td width="10%"  align="center">
                           <div class="box-index-rec">{{$index+1}}</div>
                           
                        </td> -->
                        <td width="15%" style="padding: 8px 0;border-radius: 8px 0 0 0;" align="center">
                          <div ng-if="item.comment_from == 'GUEST'">
                              <img src="images/me.png" width="30"> 
                          </div>

                          <div ng-if="item.comment_from == 'DRIVER'">
                              <img src="images/driver.png" width="30"> 
                          </div>
                          <div ng-if="item.comment_from == 'CALL CENTER'">
                              <img src="images/call.png" width="30">
                          </div>
                          <div ng-if="item.comment_from == 'AGENT'">
                              <img src="images/ser.png" width="30">
                              <!-- <span ng-if="flagcheck == 1">Agent</span> 
                              <span ng-if="flagcheck == 2">代理</span> 
                              <span ng-if="flagcheck == 3">服务提供者</span>  -->
                          </div>
                          <div ng-if="item.comment_from == 'SERVICE PROVIDER'">
                              <img src="images/dervice P.png" width="30">
                          </div>
                          
                        </td>
                        
                        
                        <td width="2%"></td>
                        <td width="88%" colspan="6" style="border-radius: 0 8px 0 0;padding: 8px 0" >
                           <span>{{item.guest}}</span> 
                        </td>
                        <!-- <td align="center"><span ng-if="item.state==3"><img ng-src="http://t-booking.com/web/v1/PHP/fileUpload/{{item.yourself_post_date}}.jpg" width="28" height="28" ng-click="showimages2(item.yourself_post_date)" ng-show="item.yourself_post_date != '' && item.yourself_post_date != undefined" style="border-radius: 8px;"></span></td> -->
                        
                    </tr>
                    <!-- ========= STATE !======== -->
                    <tr ng-if="item.state == 1" style="    background: #f0f0f0;">
                        
                        <td align="center" style="padding: 8px 0;">
                            <div class="icon-plane">
                                <i class="fa fa-paper-plane fa-lg " aria-hidden="true" style="color: #fff"></i>
                          </div>
                        </td>
                        <td width="2%"></td>
                        <td colspan="4" style="padding: 8px 0">
                            <!-- <span ng-if="flagcheck == 1" >Inform the driver </span>
                            <span ng-if="flagcheck == 2">แจ้งคนขับ </span>
                            <span ng-if="flagcheck == 3">通知司机</span> /  -->
                            <span  ng-if="flagcheck == 1">Notification Delay car use</span>
                            <span  ng-if="flagcheck == 2">ใช้รถล่าช้า</span>
                            <span  ng-if="flagcheck == 3">延迟使用车</span>
                        </td>
                        <td width="10%" align="center"><img src="images/timedelay.png" width="25" style="display: inline-block;"></td>
                        <td width="20%" align="center">{{item.flight_delay }}</td>

                    </tr>
                    <tr ng-if="item.state == 1" style="    background: #f0f0f0;">
                      <td style="padding: 8px 0;border-radius: 0 0 0 8px; " align="center">
                           <img src="images/timerec.png" width="30">
                      </td>
                      <td></td>
                      <td colspan="5">
                          <span>{{item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm' }}</span>
                      </td>
                      <td align="center" width="20%" style="border-radius: 0 0 8px 0;">
                          <img src="https://goldenbeachgroup.com/car/images/icon/view/map.png" ng-click="Pickupplace(item)" width="30">
                      </td>
                    </tr>
                    <!-- ================STATE 3 ============= -->
                    <tr ng-if="item.state == 3" style="    background: #f0f0f0;">
                        
                        <td width="" align="center" style="padding: 8px 0">
                            <div class="icon-plane">
                                <i class="fa fa-paper-plane fa-lg " aria-hidden="true" style="color: #FFF"></i>
                            </div>
                        </td>
                        <td width="2%"></td>
                        <td colspan="4" style="padding: 8px 0;">
                            <!-- <span ng-if="flagcheck == 1" >Inform the driver </span>
                            <span ng-if="flagcheck == 2">แจ้งคนขับ </span>
                            <span ng-if="flagcheck == 3">通知司机</span> /  -->
                            <span ng-if="flagcheck == 1">I've been waiting</span>
                            <span ng-if="flagcheck == 2">ฉันรออยู่แล้ว</span>
                            <span ng-if="flagcheck == 3">我已经在等</span>
                        </td>
                        <td width="10%" align="center"><img src="images/camera.png" width="25" ng-click="showimages1(item)"></td>
                        <td align="center" width="20%"><span><img ng-src="http://t-booking.com/web/v1/PHP/fileUpload/{{item.img_post_date}}.jpg" width="28" height="28" ng-click="showimages1(item)" ng-show="item.img_post_date != '' && item.img_post_date != undefined" style="border-radius: 8px;"></span>
                      </td>

                    </tr>
                    <tr ng-if="item.state == 3" style="    background: #f0f0f0;">
                      
                      <td style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center" width="10%">
                           <img src="images/timerec.png" width="30">
                      </td>
                      <td width="2%"></td>
                      <td colspan="5">
                          <span>{{item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm' }}</span>
                      </td>
                      <td align="center" width="20%" style="border-radius: 0 0 8px 0;">
                          <img src="https://goldenbeachgroup.com/car/images/icon/view/map.png" ng-click="Pickupplace(item)" width="30">
                      </td>
                    </tr>
                    <!-- ================STATE 2 ============= -->
                    <tr ng-if="item.state == 2" style="    background: #f0f0f0;">
                        
                        <td align="center" >
                          <i class="fa fa-commenting-o fa-lg" aria-hidden="true" style="color: #37c837;font-size: 30px;"></i>
                        </td>
                        <td width="3%"></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <span>{{item.comment}}</span>
                        </td>
                       
                        

                    </tr>
                    <tr ng-if="item.state == 2" style="    background: #f0f0f0;">
                      <td style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png" width="30">
                      </td>
                      <td></td>
                      <td colspan="6" style="border-radius: 0 0 8px 0;">
                          <span>{{item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm' }}</span>
                      </td>
                      <!-- <td colspan="2" align="right">
                          <img src="https://goldenbeachgroup.com/car/images/icon/view/map.png" ng-click="Pickupplace(item)" width="30">
                      </td> -->
                    </tr>
                    


                    
                    <!-- ========= STATE 4======== -->
                    <tr ng-if="item.state == 4" style="    background: #f0f0f0;">
                        
                        <td align="center" style="padding: 8px 0;">
                            <div class="icon-plane">
                                <i class="fa fa-paper-plane fa-lg " aria-hidden="true" style="color: #fff"></i>
                          </div>
                        </td>
                        <td width="2%"></td>
                        <td colspan="4" style="padding: 8px 0">
                            <!-- <span ng-if="flagcheck == 1" >Inform the driver </span>
                            <span ng-if="flagcheck == 2">แจ้งคนขับ </span>
                            <span ng-if="flagcheck == 3">通知司机</span> /  -->
                             <span  ng-if="flagcheck == 1">Notify the car ahead of time</span>
                                    <span  ng-if="flagcheck == 2">ใช้รถล่วงหน้า</span>
                                    <span  ng-if="flagcheck == 3">提前使用车</span>
                        </td>
                        <td width="10%" align="center"><img src="images/timedelay.png" width="25" style="display: inline-block;"></td>
                        <td width="20%" align="center">{{item.flight_delay }}</td>

                    </tr>
                    <tr ng-if="item.state == 4" style="    background: #f0f0f0;">
                      <td style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png" width="30">
                      </td>
                      <td></td>
                      <td colspan="5">
                          <span>{{item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm' }}</span>
                      </td>
                      <td align="center" width="20%" style="border-radius: 0 0 8px 0;">
                          <img src="https://goldenbeachgroup.com/car/images/icon/view/map.png" ng-click="Pickupplace(item)" width="30">
                      </td>
                    </tr>
                </table>
                </div>
                </div>
    <Br/>
    <Br/>
    <Br/>
    <Br/>
    <Br/>
    
    

    

    

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

<!-- END -->




<!-- SECTION RECOMMENT -->

<div data-role="page" id="Recomment" style="background: #fff" class="bg-body">
    <div class="header" style="position: fixed;font-size: 16px;z-index: 1;">

    <table width="100%">

         <tr >
            <td width="3%"></td>
            <td width="10%" > 
                <a href="#voucher" class="home-icon" data-transition="slide" >
                     <i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
                </a>
            </td>
            <td align="center" >
                  <span  >{{tb_web_admin_company}}</span>
            </td>
            <td width="10%" align="right">
                <div class="logoagent">
                    <img ng-src="http://www.t-booking.com/v1/admin/file/logo/crop/{{agent}}.jpg" err-src="images/ctr.jpg" width="45" height="40" ng-click="snapphoto()">
                </div>
            </td>
            <td width="3%"></td>
         </tr>         
      </table>
      </div>
    <div  class="roongheader">

      <table width="100%">
          <tr >
              <td width="3%" style="border-radius: 0 0 0 8px;"></td>
              <td align="left">
                    <div class="main-icon2"><i class="fa fa-cart-plus fa-lg" aria-hidden="true" style="font-size: 28px; color: #39c;line-height: 1;"></i> 
                    </div>
              </td>
              <td align="center" style="padding: 5px;">
                    <table width="100%">
                       <tr>
                            <td align="center" >
                                  <span class="" ng-if="flagcheck == 1">{{topic_en}}</span>
                                  <span class="" ng-if="flagcheck == 2">{{topic_th}}</span>
                                  <span class="" ng-if="flagcheck == 3">{{topic_cn}}</span>
                            </td>
                       </tr>
                       <tr>
                            <td align="center">
                                  <span  ng-if="flagcheck == 1">Terms of Use</span>
                                  <span  ng-if="flagcheck == 2">ข้อกำหนดการใช้งาน</span>
                                  <span  ng-if="flagcheck == 3">服务条款</span>
                            </td>
                       </tr>
                      
                    </table>
              </td>
              <td align="right">
                  <div class="main-icon2">
                    <i class="fa fa-share-square-o fa-2x" aria-hidden="true" ng-click="sharesocial()" style="color: #3C8DBC; font-size: 25px; z-index: 61;line-height: 1.4;"></i>
                  </div> 
              </td>
              <td width="3%" style="border-radius: 0 0 8px 0;"></td>
         </tr>
      </table>
      </div>
      <div id="icon-pageslide" align="center" data-position="fixed" >
          <div id="pagese"></div>
          <div id="pagese1"></div>
          <div id="pagese2"></div>
      </div>     
    <!-- <div class="header" data-role="header" style="position: fixed;">
        <div>
            <p id="namedriver" style="padding-top: 25px; " align="center">
            <span class="" >{{tb_web_admin_company}}</span>
        
            </p>
        
        </div>
        
        <a href="#voucher" class="home-icon home-no" data-transition="slide"><i class="fa fa-chevron-left fa-2x" aria-hidden="true" style="    "></i></a>
        <div class="logoagent">
            <img ng-src="http://www.t-booking.com/v1/admin/file/logo/crop/{{agent}}.jpg" err-src="images/ctr.jpg" width="45" height="40" ng-click="snapphoto()">
        </div>
    </div>
    <Br/>
    <div align="center" data-position="fixed" id="icon-pageslide">
        <div id="pagese"></div>
        <div id="pagese1"></div>
        <div id="pagese2"></div>
    </div>
    <a href="#increasetime">
    <div  class="main-icon2" style="margin-top: 67px;"><center>
            <img src="images/pluss.png" style="font-size:25px;" width="30"></center>
    </div>
    </a>
    <div style="border: 0px solid #999999;
    width: 40px;
    height: 40px;
    padding: 5px;
    position: fixed;
    text-align: center;
    border-radius: 60px;
    margin-left: 87%;
    z-index: 60;
    color: #3399CC;
    font-size: 16px;
    margin-top: 67px;
    box-shadow: 1px 1px 5px #999999;
    background: #fff;">
    <i class="fa fa-share-square-o fa-2x" aria-hidden="true" ng-click="sharesocial()" style="color: #3C8DBC; font-size: 25px; margin-top: 5px; z-index: 61;"></i>
    </div>
    <div id="sec-title2" >
    
            
        <p  style="display: block; margin: 0;    width: 76%;  margin-left: 12%;font-weight: normal !important;font-size:  16px !important" align="center">
            <span  ng-if="flagcheck == 1">{{topic_en}}</span>
            <span  ng-if="flagcheck == 2">{{topic_th}}</span>
            <span  ng-if="flagcheck == 3">{{topic_cn}}</span>
        </p>
        <p style="display: block; margin: 0; width: 78%; margin-left: 11%;font-size:  16px !important">
            <span  ng-if="flagcheck == 1">Terms of Use</span>
            <span  ng-if="flagcheck == 2">ข้อกำหนดการใช้งาน</span>
            <span  ng-if="flagcheck == 3">服务条款</span>
        </p>
    </div> -->


    <!-- <i class="fa fa-share-square-o fa-2x" aria-hidden="true" ng-click="sharesocial()" style="color: #3C8DBC;    margin-left: 90%; margin-top: 68px; position: fixed;   z-index: 60;"></i>
    <p id="sec-title2">
            <a class="back" data-role="button555" href="#home" data-transition="slide">
                    <i class="fa fa-arrow-circle-left fa-3x" aria-hidden="true"></i>
            </a>
            <span class="topic-page" ng-if="flagcheck == 1">Terms of Use</span>
            <span class="topic-page" ng-if="flagcheck == 2">ข้อกำหนดการใช้งาน</span>
            <span class="topic-page" ng-if="flagcheck == 3">服务条款</span>
        </p>  -->
    <div class="ui-content" style="">
        <Br/> 
        <div class="col" >    
            <div class="borderdetail" style="padding:10px; line-height:26px; ">
                <p>
                    <span ng-if="flagcheck == 1"  ><B >1.</B>  Please note that only green or yellow license plates vehicle legally are used as public vehicles. If you see other colors license plates vehicle, could refuse to get on and please contact our hotline.<br /><br>

                      <B>2.</B> Please remember to fasten your seat belt in the vehicle. Otherwise, in case of police check required to pay fines by you own and in case of any traffic accident, you would be unable to get any insurance compensation.<br /><br>

 <B>3.</B> Please check your belongings before leaving. We are not responsible for any loss.<br /><br>

                      <B>4.</B> If the driver did not arrive on time in 5-15 minutes, please contact our 24-hour hotline, 
Such as waiting for more than 30 minutes, please kindly get another taxi.
We will refund the cost of the order, if the guest able to provide the taxi' voucher that they took, we will refund the taxi costs.
Please be noticed the other fees are not responsible for refund..</span>
                      <span ng-if="flagcheck == 2">
                        <B>1.</B> โปรดทราบว่ามีเพียงแผ่นป้ายทะเบียนรถสีเขียวหรือสีเหลืองเท่านั้นที่ใช้เป็นยานพาหนะขนส่งสาธารณะที่ถูกต้องตามกฎหมาย หากคุณเห็นป้ายทะเบียนรถเป็นสีอื่น คุณสามารถปฏิเสธการโดยสารได้ และโปรดติดต่อสายด่วนของเรา<br /><br />
                        <B >2.</B> กรุณาคาดเข็มขัดนิรภัย มิฉะนั้นในกรณีที่มีการเรียกตรวจสอบจากตำรวจ คุณต้องต้องจ่ายค่าปรับเอง และในกรณีที่เกิดอุบัติเหตุ คุณจะไม่สามารถได้รับค่าชดเชยจากบริษัทประกันภัย<br /><br />
                        <B>3.</B> โปรดตรวจสอบทรัพย์สินของคุณก่อนที่รถจะออกเดินทางหรือรถถึงที่หมาย เราจะไม่รับผิดชอบต่อความสูญเสียในกรณีใดๆ ทั้งสิ้น<br /><br />
                        <B>4.</B> ในกรณีที่มีเหตุสุดวิสัยคนขับไม่ได้รับรอเกิน 5-15 นาทีจากเวลาที่ตกลงกัน โปรดติดต่อศูนย์บริการตลอด 24 ชั่วโมงสายด่วนทันที ถ้ารอคอยมากกว่า 30 นาที กรุณาเรียกรถเอง! เราจะคืนเงินให้ท่าน100%ในการจอง และจะคืนเงินที่ท่านเรียกรถ (แต่ต้องมีหลักฐานใบเสร็จหรือรูปยืนยัน) แต่จะไม่รับผิดชอบค่าเสียหายอื่น  โปรดทราบ!</span> 
                        <span  ng-if="flagcheck == 3">
                        <B>一. </B> 请注意，黄色或者绿色车牌为合法运营车辆。如看到其他颜色牌照可拒绝上车，并请联系我们热线。<br /><br />
                      <B>二. </B> 上⻋车请系好安全带，不然如遇警察检查需自己付罚款，如有意外保险⽆无法赔偿。<br /><br />
                      <B>三. </B> 上下车请保管好自己的物品。如有遗失，概不负责。<br /><br />
                      <B>四. </B> 如发生司机由于不可抗力因素未接到，在约定时间后5-15分钟内，请客人及时联系我们的24小时中文热线，如等待超过30分钟，请客人需及时自行打车离开！<br /><br />
                      我们会退还订单费用，如客人有打车凭证提供，我们将补偿打车费用，但是其他费用一律不负责赔偿，请知晓！</span>
                </p>
                
            </div>
        </div>
        
    </div>
    <Br/>
    <Br/>
    <Br/>
    <Br/>
    <Br/>

    
     
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

<!-- END -->





<!-- SECTION COMMENT -->

<div data-role="page" id="Comment" style="background: #fff" class="bg-body">
    <div class="header" style="position: fixed;font-size: 16px;z-index: 1;">

     <table width="100%">

         <tr >
            <td width="3%"></td>
            <td width="10%" > 
                <a href="#voucher" class="home-icon" data-transition="slide" >
                     <i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
                </a>
            </td>
            <td align="center" >
                  <span  >{{tb_web_admin_company}}</span>
            </td>
            <td width="10%" align="right">
                <div class="logoagent">
                    <img ng-src="http://www.t-booking.com/v1/admin/file/logo/crop/{{agent}}.jpg" err-src="images/ctr.jpg" width="45" height="40" ng-click="snapphoto()">
                </div>
            </td>
            <td width="3%"></td>
         </tr>         
      </table>
      </div>
      <div  class="roongheader">

      <table width="100%">
          <tr >
              <td width="3%" style="border-radius: 0 0 0 8px;"></td>
              <td align="left">
                    <div class="main-icon2"><i class="fa fa-cart-plus fa-lg" aria-hidden="true" style="font-size: 28px; color: #39c;line-height: 1;"></i> 
                    </div>
              </td>
              <td align="center" style="padding: 5px;">
                    <table width="100%">
                       <tr>
                            <td align="center" >
                                  <span class="" ng-if="flagcheck == 1">{{topic_en}}</span>
                                  <span class="" ng-if="flagcheck == 2">{{topic_th}}</span>
                                  <span class="" ng-if="flagcheck == 3">{{topic_cn}}</span>
                            </td>
                       </tr>
                       <tr>
                            <td align="center">
                                <span  ng-if="flagcheck == 1">My comments</span>
                                <span  ng-if="flagcheck == 2">ความคิดเห็นของฉัน</span>
                                <span  ng-if="flagcheck == 3">我的点评</span> 
                            </td>
                       </tr>
                      
                    </table>
              </td>
              <td align="right">
                  <div class="main-icon2">
                    <i class="fa fa-share-square-o fa-2x" aria-hidden="true" ng-click="sharesocial()" style="color: #3C8DBC; font-size: 25px; z-index: 61;line-height: 1.4;"></i> 
                  </div>
              </td>
              <td width="3%" style="border-radius: 0 0 8px 0;"></td>
         </tr>
      </table>
      </div>
      <div id="icon-pageslide" align="center" data-position="fixed" >
          <div id="pagese"></div>
          <div id="pagese1"></div>
          <div id="pagese2"></div>
      </div>     
    <!-- <div class="header" data-role="header" style="position: fixed;">
        <div>
            <p id="namedriver" style="padding-top: 25px; " align="center">
            <span class="" >{{tb_web_admin_company}}</span>
        
            </p>
        
        </div>
        
        <a href="#voucher" class="home-icon home-no" data-transition="slide"><i class="fa fa-chevron-left fa-2x" aria-hidden="true" style="   "></i></a>
        <div class="logoagent">
            <img ng-src="http://www.t-booking.com/v1/admin/file/logo/crop/{{agent}}.jpg" err-src="images/ctr.jpg" width="45" height="40" ng-click="snapphoto()">
        </div>
    </div><Br/>
    <div align="center" data-position="fixed" id="icon-pageslide">
        <div id="pagese"></div>
        <div id="pagese1"></div>
        <div id="pagese2"></div>
    </div>
    <div  class="main-icon2" style="margin-top: 67px;"><center>
           <img src="images/pluss.png" style="font-size:25px;" width="30" /></center>
    </div>
    

    <div style="border: 0px solid #999999;
    width: 40px;
    height: 40px;
    padding: 5px;
    position: fixed;
    text-align: center;
    border-radius: 60px;
    margin-left: 87%;
    z-index: 60;
    color: #3399CC;
    font-size: 16px;
    margin-top: 67px;
    box-shadow: 1px 1px 5px #999999;
    background: #fff;">
    <i class="fa fa-share-square-o fa-2x" aria-hidden="true" ng-click="sharesocial()" style="color: #3C8DBC; font-size: 25px; margin-top: 5px; z-index: 61;"></i>
    </div>
    <div id="sec-title2" >
    
            
        <p  style="display: block; margin: 0;    width: 76%;  margin-left: 12%;font-weight: normal !important;font-size:  16px !important" align="center">
            <span  ng-if="flagcheck == 1">{{topic_en}}</span>
            <span  ng-if="flagcheck == 2">{{topic_th}}</span>
            <span  ng-if="flagcheck == 3">{{topic_cn}}</span>
        </p>
        <p style="display: block; margin: 0; width: 78%; margin-left: 11%;font-size:  16px !important">
            <span  ng-if="flagcheck == 1">My comments</span>
                <span  ng-if="flagcheck == 2">ความคิดเห็นของฉัน</span>
                <span  ng-if="flagcheck == 3">我的点评</span> 
        </p>
    </div>

 -->

    <!-- <i class="fa fa-share-square-o fa-2x" aria-hidden="true" ng-click="sharesocial()" style="color: #3C8DBC;    margin-left: 90%; margin-top: 68px; position: fixed;   z-index: 60;"></i>
    <p id="sec-title2">
                <a class="back" data-role="button555" href="#home" data-transition="slide">
                        <i class="fa fa-arrow-circle-left fa-3x" aria-hidden="true"></i>
                </a>
                <span class="topic-page" ng-if="flagcheck == 1">My comments</span>
                <span class="topic-page" ng-if="flagcheck == 2">ความคิดเห็นของฉัน</span>
                <span class="topic-page" ng-if="flagcheck == 3">我的点评</span> 
            </p> -->
    <div class="ui-content" style="">    
    
         
        <div class="" ng-if="getcommentview.length == 0" style="box-shadow: 1px 1px 10px #999999;padding: 25px;border-radius: 8px ">    
            <div class="borderdetail-check">
                <!-- <div class="btn-view" ng-click="viewcomment()" ng-style="btncomview">
                    <span ng-if="flagcheck == 1"> View comment</span>
                    <span ng-if="flagcheck == 2"> ดูความคิดเห็น</span>
                    <span ng-if="flagcheck == 3"> 查看评论</span>
                    <span>({{getcommentview.length}})</span>
                </div> -->
                <div>
                    
                    <div style="font-size: 20px;"> <img src="images/service.png" width="35">
                        <span  ng-if="flagcheck == 1">Service</span>
                        <span  ng-if="flagcheck == 2">ให้บริการ</span>
                        <span  ng-if="flagcheck == 3">服务</span>
                    </div>
                    
                    
                    <div class="com-text" style="font-size: 20px;">
                        <div class="box">
                            <input type="radio" name="chickenEgg" id="checked" ng-click="getdriving(1)"/>
                            <p ng-style="fair" style="color: #000">
                                <span  ng-if="flagcheck == 1">Good</span>
                                <span  ng-if="flagcheck == 2">ดี</span>
                                <span  ng-if="flagcheck == 3">好</span>
                            </p>
                            <!-- <div type="checkbox" class="check3"  name="check">
                                <img ng-style="check3" id="check3" src="images/ik.png" style="width: 20px;    margin-top: 5px;
">
                            </div> -->
                        </div>
                        <div class="box">
                            <div style="display: inline-block;">
                            <input type="radio" name="chickenEgg"  id="checked" ng-click="getdriving(2)"/></div>
                            <p style="color: #000"><span  ng-if="flagcheck == 1">Moderate</span>
                                <span  ng-if="flagcheck == 2">ปานกลาง</span>
                                <span  ng-if="flagcheck == 3">中等</span></p>
                            <!-- <div type="checkbox" class="check4"  name="check">
                                <img ng-style="check4" id="check4" src="images/ik.png" style="width: 20px;    margin-top: 5px;
">
                            </div> -->
                        </div>
                        <div class="box" >
                            <input type="radio" name="chickenEgg"  id="checked" ng-click="getdriving(3)"/>
                            <p ng-style="excellent" style="color: #000">
                                <span  ng-if="flagcheck == 1">Poor</span>
                                <span  ng-if="flagcheck == 2">ต่ำ</span>
                                <span  ng-if="flagcheck == 3">較差的</span></p>
                            <!-- <div type="checkbox" class="check5"  name="check" ng-model="check5">
                                <img ng-style="check5" id="check5" src="images/ik.png" style="width: 20px;    margin-top: 5px;
">
                            </div> -->
                        </div>
                    </div>
                </div>
                
                
                
                    <div style="font-size: 20px;"> <img src="images/clean.png" width="35">
                        <span  ng-if="flagcheck == 1">Cleanness</span>
                        <span  ng-if="flagcheck == 2">ความสะอาด</span>
                        <span  ng-if="flagcheck == 3">清洁</span>
                    </div>
                    
                    <div class="com-text" style="font-size: 20px;">
                        <div class="box">
                            <input type="radio" name="chickenEgg2"  id="checked" ng-click="getclean(1)"/>
                            <p ng-style="fair" style="color: #000">
                                <span  ng-if="flagcheck == 1">Good</span>
                                <span  ng-if="flagcheck == 2">ดี</span>
                                <span  ng-if="flagcheck == 3">好</span></p>
                            <!-- <div type="checkbox" class="check3"  name="check">
                                <img ng-style="check3" id="check3" src="images/ik.png" style="width: 20px;    margin-top: 5px;  
">
                            </div> -->
                        </div>
                        
                        
                        <div class="box">
                            <div style="display: inline-block;">
                            <input type="radio" name="chickenEgg2"   id="checked" ng-click="getclean(2)"/></div>
                            <p style="color: #000"><span  ng-if="flagcheck == 1">Moderate</span>
                                <span  ng-if="flagcheck == 2">ปานกลาง</span>
                                <span  ng-if="flagcheck == 3">中等</span></p>
                            <!-- <div type="checkbox" class="check4"  name="check">
                                <img ng-style="check4" id="check4" src="images/ik.png" style="width: 20px;    margin-top: 5px;
">
                            </div> -->
                        </div>
                        <div class="box" >
                            <input type="radio" name="chickenEgg2"  id="checked" ng-click="getclean(3)"/>
                            <p ng-style="excellent">
                                <span  ng-if="flagcheck == 1">Poor</span>
                                <span  ng-if="flagcheck == 2">ต่ำ</span>
                                <span  ng-if="flagcheck == 3">較差的</span>
                            </p>
                            <!-- <div type="checkbox" class="check5"  name="check" ng-model="check5">
                                <img ng-style="check5" id="check5" src="images/ik.png" style="width: 20px;    margin-top: 5px;
">
                            </div> -->
                            
                            
                
                            
                        </div>
                        
                        
                    </div>
                    <div style="font-size: 20px;"> <img src="images/timess.png" width="35">
                        <span  ng-if="flagcheck == 1">Punctuality</span>
                        <span  ng-if="flagcheck == 2">ตรงต่อเวลา</span>
                        <span  ng-if="flagcheck == 3">严守时间</span>
                    </div>
                    
                    <div class="com-text" style="font-size: 20px;">
                        <div class="box">
                            <input type="radio" name="chickenEgg3"  id="checked" ng-click="punctuality(1)"/>
                            <p ng-style="fair" style="color: #000">
                                <span  ng-if="flagcheck == 1">Good</span>
                                <span  ng-if="flagcheck == 2">ดี</span>
                                <span  ng-if="flagcheck == 3">好</span></p>
                            <!-- <div type="checkbox" class="check3"  name="check">
                                <img ng-style="check3" id="check3" src="images/ik.png" style="width: 20px;    margin-top: 5px;  
">
                            </div> -->
                        </div>
                        
                        
                        <div class="box">
                            <div style="display: inline-block;">
                            <input type="radio" name="chickenEgg3"   id="checked" ng-click="punctuality(2)"/></div>
                            <p style="color: #000"><span  ng-if="flagcheck == 1">Moderate</span>
                                <span  ng-if="flagcheck == 2">ปานกลาง</span>
                                <span  ng-if="flagcheck == 3">中等</span></p>
                            <!-- <div type="checkbox" class="check4"  name="check">
                                <img ng-style="check4" id="check4" src="images/ik.png" style="width: 20px;    margin-top: 5px;
">
                            </div> -->
                        </div>
                        <div class="box" >
                            <input type="radio" name="chickenEgg3"  id="checked" ng-click="punctuality(3)"/>
                            <p ng-style="excellent" style="color: #000">
                                <span  ng-if="flagcheck == 1">Poor</span>
                                <span  ng-if="flagcheck == 2">ต่ำ</span>
                                <span  ng-if="flagcheck == 3">較差的</span>
                            </p> 
                        </div>
                </div>
             <div class="box-com-se">                    
                       <div style="font-size: 20px;"> <div> <img src="images/order.png" width="35">
                        <span  ng-if="flagcheck == 1">Other Comment</span>
                        <span  ng-if="flagcheck == 2">ความคิดเห็นเพิ่มเติม</span>
                        <span  ng-if="flagcheck == 3">评论</span>
                    </div>
                        <textarea   class="form-control" ng-model="comment"></textarea>
                        <div class="btn btn-block btn-default" ng-click="updatecomment()" ng-style="senddata">
                            <span  ng-if="flagcheck == 1">Send Data</span>
                            <span  ng-if="flagcheck == 2">ส่งข้อมูล</span>
                            <span  ng-if="flagcheck == 3">發送</span>
                        </div>
                        <div class="btn btn-block btn-default" ng-click="Eupdatecomment()" ng-if="Ecomment">
                            <span  ng-if="flagcheck == 1">Send Data</span>
                            <span  ng-if="flagcheck == 2">ส่งข้อมูล</span>
                            <span  ng-if="flagcheck == 3">發送</span>
                        </div>
                    </div>
                </div>
        </div>
        
    </div>
    <div class="" ng-if="getcommentview.length != 0" style="box-shadow: 1px 1px 10px #999999;padding: 12px;border-radius: 8px; ">
         <div class="box-in-comment" ng-repeat="item in getcommentview" style="font-size: 21px;">

                    <div class="bodycomment-scroll">
                    <!-- <p style="font-size: 18px;color: #539bc5;"><B>Comment {{$index+1}}</p> -->
                    <div style="display: inline-block;padding: 2px 0 "> <img src="images/service.png" width="35">
                        <span  ng-if="flagcheck == 1" style="color:#777 ">Service</span>
                        <span  ng-if="flagcheck == 2" style="color: #777">ให้บริการ</span>
                        <span  ng-if="flagcheck == 3" style="color:#777">服务</span>
                    </div>
                    
                    
                    <div class="com-text" style="display: inline-block;float: right;">
                        <div class="box" ng-if="item.driver == 1" style="display: inline-block;color: #000">
                           
                            
                                <span  ng-if="flagcheck == 1">Good</span>
                                <span  ng-if="flagcheck == 2">ดี</span>
                                <span  ng-if="flagcheck == 3">好</span>
                           
                        </div>
                        <div class="box" ng-if="item.driver == 2" style="display: inline-block;font-size: 21px;">
                           
                            
                                <span  ng-if="flagcheck == 1">Moderate</span>
                                <span  ng-if="flagcheck == 2">ปานกลาง</span>
                                <span  ng-if="flagcheck == 3">中等</span>
                            
                        </div>
                        <div class="box" ng-if="item.driver == 3" style="font-size: 21px;">
                            <span  ng-if="flagcheck == 1">Poor</span>
                            <span  ng-if="flagcheck == 2">ต่ำ</span>
                            <span  ng-if="flagcheck == 3">較差的</span>
                        </div>
                    </div>
                </div>
                
                
                
                    <div style="display: inline-block;padding: 2px 0;"> <img src="images/clean.png" width="35">
                        <span  ng-if="flagcheck == 1" style="color: #777">Cleanness</span>
                        <span  ng-if="flagcheck == 2" style="color: #777">ความสะอาด</span>
                        <span  ng-if="flagcheck == 3" style="color:#777">清洁</span>
                    </div>
                   
                    <div class="com-text" style="float: right;">
                        <div class="box" ng-if="item.clean == 1" style="color: #000">
                            
                            
                                <span  ng-if="flagcheck == 1">Good</span>
                                <span  ng-if="flagcheck == 2">ดี</span>
                                <span  ng-if="flagcheck == 3">好</span>
                           
                           
                        </div>
                        
                        
                        <div class="box" ng-if="item.clean == 2" style="font-size: 21px;">
                           
                           
                               <span  ng-if="flagcheck == 1">Moderate</span>
                                <span  ng-if="flagcheck == 2">ปานกลาง</span>
                                 <span  ng-if="flagcheck == 3">中等</span>
                            
                        </div>
                        <div class="box" ng-if="item.clean == 3" style="font-size: 21px;">
                            
                            
                                <span  ng-if="flagcheck == 1">Poor</span>
                                <span  ng-if="flagcheck == 2">ต่ำ</span>
                                <span  ng-if="flagcheck == 3">較差的</span>
                            
                        </div>
                        
                        
                    </div>
                     
                    <div style="display: block;">
                    <div style="display: inline-block;padding: 2px 0; font-size: 21px;"> 
                        <img src="images/timess.png" width="35">
                        <span  ng-if="flagcheck == 1" style="color: #777">Punctuality</span>
                        <span  ng-if="flagcheck == 2" style="color: #777">ตรงต่อเวลา</span>
                        <span  ng-if="flagcheck == 3" style="color: #777">严守时间</span>
                   </div>
                    
                    <div class="com-text" style="float: right;">
                        <div class="box" ng-if="item.ctime == 1" style="color: #000;font-size: 21px;">
                            
                            
                                <span  ng-if="flagcheck == 1">Good</span>
                                <span  ng-if="flagcheck == 2">ดี</span>
                                <span class="" ng-if="flagcheck == 3">好</span>
                            
                        </div>
                        
                        
                        <div class="box" ng-if="item.ctime == 2" style="font-size: 21px;">
                            
                            
                            <span  ng-if="flagcheck == 1">Moderate</span>
                                <span  ng-if="flagcheck == 2">ปานกลาง</span>
                                <span  ng-if="flagcheck == 3">中等</span>
                            
                            
                        </div>
                        <div class="box" ng-if="item.ctime == 3" style="font-size: 21px;">
                            
                           
                                <span  ng-if="flagcheck == 1">Poor</span>
                                <span  ng-if="flagcheck == 2">ต่ำ</span>
                                <span  ng-if="flagcheck == 3">較差的</span>
                            
                        </div>
                </div>
                </div>
               
             <div class="box-com-se " style="padding: 0">                    
                       <div style="padding: 2px 0;font-size: 21px;"> 
                       <div> <img src="images/order.png" width="35">
                        <span  ng-if="flagcheck == 1" style="color: #777">Other Comment</span>
                        <span  ng-if="flagcheck == 2" style="color:#777">ความคิดเห็น</span>
                        <span  ng-if="flagcheck == 3" style="color: #777">评论</span>
                        </div>
                    
                        <p class="" col="30" row="4" ng-model="item.comment" id="" style="margin-left: 18%;font-size: 21px" ng-if="item.comment != ''">{{item.comment}}</p>
                        
                        <p class="" col="30" row="4" ng-model="item.comment" id="" style="margin-left: 18%;font-size: 21px" ng-if="item.comment == ''">
                            <span ng-if="flagcheck == 1">none</span>
                            <span ng-if="flagcheck == 2">ไม่มี</span>
                            <span ng-if="flagcheck == 3">無</span>
                        </p>  
                        
                    </div>
                </div>
                <p style="border-bottom: dashed 1px;"></p>
                <div align="center" style="font-size: 18px;font-weight: 600;color: #698d18;">
                    <span ng-if="flagcheck == 1">Thank you for your comments</span>
                    <span ng-if="flagcheck == 2">ขอบคุณสำหรับความคิดเห็นของคุณ</span>
                    <span ng-if="flagcheck == 3">谢谢您的意见！</span>
                </div>
                <div align="center">{{item.comment_date}}</div>
                
                <div align="center" style="padding: 5PX;"><img src="images/smail.jpg" width="45" ></div>
                
                </div>
                <div align="center" style="font-size: 16px;font-weight: 600;">
                    <span>{{item.guest}}</span>
                    <!-- <span ng-if="flagcheck == 1">Tourist</span>
                    <span ng-if="flagcheck == 2">นักท่องเที่ยว</span>
                    <span ng-if="flagcheck == 3">游客</span> -->
                </div>
                <Br/>
                <div class="btn btn-primary pull-right" ng-click="Editcomment()" style="display: none;">
                <span ng-if="flagcheck == 1">EDIT</span>
                <span ng-if="flagcheck == 2">แก้ไข</span>
                <span ng-if="flagcheck == 3">編輯</span>
            </div>
                
            </div>
    </div>
     
     <Br/>
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

<!-- END -->

<!-- incre -->

<div data-role="page" id="increasetime" style="background: #fff" class="bg-body">
    <div class="header" style="position: fixed;font-size: 16px;z-index: 1;">
    <table width="100%">

         <tr >
            <td width="3%"></td>
            <td width="10%" > 
                <a href="#voucher" class="home-icon" data-transition="slide" >
                     <i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
                </a>
            </td>
            <td align="center" >
                  <span>{{tb_web_admin_company}}</span>
            </td>
            <td width="10%" align="right">
                <div class="logoagent">
                    <img ng-src="http://www.t-booking.com/v1/admin/file/logo/crop/{{agent}}.jpg" err-src="images/ctr.jpg" width="45" height="40" ng-click="snapphoto()">
                </div>
            </td>
            <td width="3%"></td>
         </tr>
         
      </table>
      </div>
      <div style="border-radius: 8px;background-color: #cae2ef;margin-top: 80px;">

      <table width="100%">
          <tr >
              <td width="3%" style="border-radius: 0 0 0 8px;"></td>
              <td align="left">
                    <div class="main-icon2"><img src="images/pluss.png" style="font-size:25px;" width="30" /> 
                    </div>
              </td>
              <td align="center" style="padding: 5px;">
                    <table width="100%">
                       <tr>
                            <td align="center" >
                                  <span class="" ng-if="flagcheck == 1">{{topic_en}}</span>
                                  <span class="" ng-if="flagcheck == 2">{{topic_th}}</span>
                                  <span class="" ng-if="flagcheck == 3">{{topic_cn}}</span>
                            </td>
                       </tr>
                       <tr>
                            <td align="center">
                                <span ng-if="flagcheck == 1">Increase time</span>
                                <span  ng-if="flagcheck == 2">เพิ่มเวลา</span>
                                <span  ng-if="flagcheck == 3">增加时间</span> 
                            </td>
                       </tr>
                      
                    </table>
              </td>
              <td align="right">
                 <div class="main-icon2">
                    <i class="fa fa-share-square-o fa-2x" aria-hidden="true" ng-click="sharesocial()" style="color: #3C8DBC; font-size: 25px; z-index: 61;line-height: 1.4;"></i> 
                  </div>
              </td>
              <td width="3%" style="border-radius: 0 0 8px 0;"></td>
         </tr>
      </table>
      </div>
      <div id="icon-pageslide" align="center" data-position="fixed" >
          <div id="pagese"></div>
          <div id="pagese1"></div>
          <div id="pagese2"></div>
      </div>
    <!-- <div class="header" data-role="header" style="position: fixed;">
        <div>
            <p id="namedriver" style="padding-top: 25px; " align="center">
            <span class="" >{{tb_web_admin_company}}</span>
        
            </p>
       
        </div>
        
        <a href="#voucher" class="home-icon home-no" data-transition="slide"><i class="fa fa-chevron-left fa-2x" aria-hidden="true" style="   "></i></a>
        <div class="logoagent">
            <img ng-src="http://www.t-booking.com/v1/admin/file/logo/crop/{{agent}}.jpg" err-src="images/ctr.jpg" width="45" height="40" ng-click="snapphoto()">
        </div>
    </div><Br/>
    <div align="center" data-position="fixed" id="icon-pageslide">
        <div id="pagese"></div>
        <div id="pagese1"></div>
        <div id="pagese2"></div>
    </div>
    <div  class="main-icon2"><center>
        <img src="images/pluss.png" style="font-size:25px;" width="30"  ></i></center>
    </div>


    <div style="border: 0px solid #999999; width: 40px; height: 40px; padding: 5px; position: fixed;
    text-align: center; border-radius: 60px; margin-left: 87%; z-index: 60;    color: #3399CC; font-size: 16px;margin-top: 60px; box-shadow: 1px 1px 5px #999999;    
    background: #fff;">
    <i class="fa fa-share-square-o fa-2x" aria-hidden="true" ng-click="sharesocial()" style="color: #3C8DBC; font-size: 25px; margin-top: 5px; z-index: 61;"></i>
    </div>
    <div id="sec-title2" >
    
            
        <p  style="display: block; margin: 0;    width: 76%;  margin-left: 12%;font-weight: normal !important;font-size:  16px !important" align="center">
            <span  ng-if="flagcheck == 1">{{topic_en}}</span>
            <span  ng-if="flagcheck == 2">{{topic_th}}</span>
            <span  ng-if="flagcheck == 3">{{topic_cn}}</span>
        </p>
        <p style="display: block; margin: 0; width: 78%; margin-left: 11%;font-size:  16px !important">
            <span ng-if="flagcheck == 1">Increase time</span>
            <span  ng-if="flagcheck == 2">เพิ่มเวลา</span>
            <span  ng-if="flagcheck == 3">增加时间</span>
    </div>
 -->

    <!-- <i class="fa fa-share-square-o fa-2x" aria-hidden="true"  ng-click="sharesocial()" style="color: #3C8DBC;    margin-left: 90%; margin-top: 68px; position: fixed;   z-index: 60;"></i>
    <p id="sec-title2">
                <a class="back" data-role="button555" href="#home" data-transition="slide">
                        <i class="fa fa-arrow-circle-left fa-3x" aria-hidden="true"></i>
                </a>
                <span class="topic-page" ng-if="flagcheck == 1">Increase time</span>
            <span class="topic-page" ng-if="flagcheck == 2">เพิ่มเวลา</span>
            <span class="topic-page" ng-if="flagcheck == 3">增加时间</span>
            </p> -->
    <div class="ui-content" style="margin-top: 95px">    
    
         
        <div class="" ng-if="getcommentview.length == 0" style="box-shadow: 1px 1px 10px #999999;padding: 25px;border-radius: 8px ">  
            
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





<!-- SECTION MODAL DIALOG -->
<div modal="showModal" class="box-bg" close="cancel()" ng-style="boxbg">
    <div class="box-mobal">
      <div class="modal-header">
           <h4 style="height: 23px;">
                <!-- <span ng-if="flagcheck == 1">Your Confirm</span>
                <span ng-if="flagcheck == 2">กรณายืนยัน</span>
                <span ng-if="flagcheck == 3">您的確認</span> -->
          </h4>
      </div>
      <div class="modal-body" align="center">
            <p>
                <span ng-if="flagcheck == 1">Acknowledges that the driver arrived.</span>
                <span ng-if="flagcheck == 2">Acknowledges that the driver arrived.</span>
                <span ng-if="flagcheck == 3">Acknowledges that the driver arrived.</span>
            </p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success" ng-click="confirm_driverarrived()" style="background: #0099CC !important;color: #FFF !important">
            <span ng-if="flagcheck == 1">Confirm</span>
            <span ng-if="flagcheck == 2">ยืนยัน</span>
            <span ng-if="flagcheck == 3">确认</span>
        </button>
        <button class="btn" ng-click="cancel()">
            <span ng-if="flagcheck == 1">Cancel</span>
            <span ng-if="flagcheck == 2">ยกเลิก</span>
            <span ng-if="flagcheck == 3">取消</span>
        </button>
      </div>
      </div>

    </div>

<div modal="showModal" class="box-bg2" close="cancel()" ng-style="delayconfirm">
    <div class="box-mobal2">      
      <div class="modal-body">
      <img src="images/cancel.png"  align="center" ng-click="cancel()" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            
        <!-- <img id="blah"/> -->
        <div class="fileUpload btn-new" ng-style="newtakephoto" style="display: none;">
            <i class="fa fa-camera fa-lg" aria-hidden="true"></i>        
            <!-- <span ng-if="flagcheck == 1" >New </span>
            <span ng-if="flagcheck == 2">ใหม่</span>
            <span ng-if="flagcheck == 3">新</span> -->
                        <!-- <span style="color: #000">({{setionflight.length}})</span> -->

                        
                        <input type="file" class="upload" name="fileToUpload" id="fileToUpload" accept="image/*"  capture="camera" onChange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" style="padding: 5px border:none;"
         file-input="files"/>
        </div>
         <div ng-click="takepictures();savetakein()" class="btn-save"  align="center"  ng-style="savetakephoto">
         <i class="fa fa-floppy-o fa-lg" aria-hidden="true"></i>
            <!-- <span  ng-if="flagcheck == 1">Save image</span>
            <span  ng-if="flagcheck == 2">ส่งข้อมูล</span>
            <span  ng-if="flagcheck == 3">發送</span> -->
        </div>
        <div class="btn-save2"  align="center" ng-style="pictureenvironment" ng-click="confirm_sendmaildelay()">
            <i class="fa  fa-floppy-o fa-lg" aria-hidden="true"></i>
            <!-- <span  ng-if="flagcheck == 2">ส่งข้อมูล</span>
            <span  ng-if="flagcheck == 3">發送</span> -->
        </div>
        <div class="fileUpload btm-checkin2" ng-style="pictureyourself " ng-click="takepicturepro()" style="display: none">
                        <span><i class="fa fa-camera fa-lg " aria-hidden="true" style="font-size: 19px; margin-right: 10px;">
                        
                    </i>
                        <span ng-if="flagcheck == 1" >Please take a picture of yourself</span>
                        <span ng-if="flagcheck == 2">กรุณาถ่ายภาพตัวคุณเอง</span>
                        <span ng-if="flagcheck == 3">请拍照您自己</span>
                        <!-- <span style="color: #000">({{setionflight.length}})</span> -->

                        </span>
                        <input type="file" class="upload" name="fileToUpload" id="fileToUpload" accept="image/*"  capture="camera" onChange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" style="padding: 5px border:none;"
         file-input="files"/>
                    </div>
                      
          
      </div>
     
    </div>
    <!-- <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
</div>

<div modal="showModal" class="box-bg3" close="cancel()" ng-style="boxbg3">
    <div class="box-mobal3">
     
      <div class="modal-body">
           <!-- <button class="btn" ng-click="cancel()" style="background: #0099CC !important;color: #FFF !important;float: right;margin-bottom: 20px;">
            <span ng-if="flagcheck == 1">Close</span>
            <span ng-if="flagcheck == 2">ปิด</span>
            <span ng-if="flagcheck == 3">取消</span>
        </button> -->
      <table class="table table-striped table-hover   " >
              
                  <tr class="head-table-dialog" align="center">
                      <td></td>
                      <td >
                        <span ng-if="flagcheck == 1">Bag big</span>
                        <span ng-if="flagcheck == 2">กระเป๋าใบใหญ่</span>
                        <span ng-if="flagcheck == 3">袋大</span>
                    </td>
                      <td ><span ng-if="flagcheck == 1">Bag small</span>
                        <span ng-if="flagcheck == 2">กระเป๋าใบเล็ก</span>
                        <span ng-if="flagcheck == 3">袋小</span> </td>
                      <td><span ng-if="flagcheck == 1">Adult</span>
                        <span ng-if="flagcheck == 2">ผู้ใหญ่</span>
                        <span ng-if="flagcheck == 3">成人</span></td>
                      <td><span ng-if="flagcheck == 1">Child</span>
                        <span ng-if="flagcheck == 2">เด็ก</span>
                        <span ng-if="flagcheck == 3">儿童</span></td> 
                      <td><span ng-if="flagcheck == 1">Plan</span>
                        <span ng-if="flagcheck == 2">แผน</span>
                        <span ng-if="flagcheck == 3">计划</span></td>
                  </tr>
               
               
                  <tr ng-repeat="p in detailitem" >
                      <td ></td>
                      <td >
                        <span align="center" ng-if="p.bag_big == 0">-</span>

                        <span style="display:inline-block" ng-show="p.bag_big != 0">
                        <i class="fa fa-suitcase fa-2x" aria-hidden="true" ng-if="p.bag_big == 1"></i>
                        </span>
                        <span ng-if="p.bag_big == 2 && p.bag_big != 0">
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>

                        </span>
                        <span ng-if="p.bag_big == 3 && p.bag_big != 0">
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                        </span>
                        <span ng-if="p.bag_big == 4 && p.bag_big != 0">
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                        </span>
                        <span ng-if="p.bag_big == 5 && p.bag_big != 0">
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                        </span>
                      </td>

                      <td >
                          <span align="center" ng-if="p.bag_small == 0">-</span>

                          <span style="display:inline-block" ng-show="p.bag_small != 0">
                          <i class="fa fa-suitcase " aria-hidden="true" ng-if="p.bag_small == 1"></i>
                          </span>
                          <span ng-if="p.bag_small == 2 && p.bag_small != 0">
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>

                          </span>
                          <span ng-if="p.bag_small == 3 && p.bag_small != 0">
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                          </span>
                          <span ng-if="p.bag_small == 4 && p.bag_small != 0">
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                          </span>
                          <span ng-if="p.bag_small == 5 && p.bag_small != 0">
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                          </span>
                      </td>
                      <td >
                          <span align="center" ng-if="p.adult == 0">-</span>
                          <span style="display:inline-block" ng-show="p.adult != 0">
                          <i class="fa fa-male fa-lg" aria-hidden="true"></i>
                          </span>
                          <span ng-if="p.adult == 2 && p.adult != 0">
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>

                          </span>
                          <span ng-if="p.adult == 3 && p.adult != 0">
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                          </span>
                          <span ng-if="p.adult == 4 && p.adult != 0">
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                          </span>
                          <span ng-if="p.adult == 5 && p.adult != 0">
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                          </span>                          
                      </td>
                      <td >
                          <span align="center" ng-if="p.child == 0">-</span>
                          <span style="display:inline-block" ng-show="p.child != 0">
                              <i class="fa fa-child" aria-hidden="true"></i>
                              </span>
                              <span ng-if="p.child == 2 && p.child != 0">
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>

                              </span>
                              <span ng-if="p.child == 3 && p.child != 0">
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                              </span>
                              <span ng-if="p.child == 4 && p.child != 0">
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                              </span>
                              <span ng-if="p.child == 5 && p.child != 0">
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                              </span>
                      </td>                      
                      
                      <td align="center">{{p.plan}}</td>
                      
                      
                
              </table>
      </div>
      
    </div>
    <!-- <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
</div>
<div modal="showModal" class="box-bg4" close="cancel()" ng-style="galleryview">
    <div class="box-mobal4">
      <!-- <div class="modal-header">
        <button class="btn" ng-click="cancel()" id="can">
            <span ng-if="flagcheck == 1">Close</span>
            <span ng-if="flagcheck == 2">ปิด</span>
            <span ng-if="flagcheck == 3">关闭</span>
        </button>
      </div> -->
      <div class="modal-body" >
      <img src="images/cancel.png"  align="center" ng-click="cancel()" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            <div class="box-img-carss">
            <Br/>
                <!-- <p style="color: #006699; font-size: 16px;">
                <B ng-if="flagcheck == 1 || flagcheck == 2">1. </B>
                <B ng-if="flagcheck == 3">一. </B> 
                    <span ng-if="flagcheck == 1">Details</span>
                    <span ng-if="flagcheck == 2">รายละเอียด</span>
                    <span ng-if="flagcheck == 3">细节</span>
                </p>
                <Br/>
                <div class="box-in-car" ng-repeat="item in gallerycar">
                    <img  src="http://t-booking.com/pic/carmodelicon/{{item.post_date}}.jpg" id="img-fig">
                </div> -->
                <Br/>
                <!-- <p style="color: #006699;font-size: 16px;">
                    <B ng-if="flagcheck == 1 || flagcheck == 2">2. </B>
                    <B ng-if="flagcheck == 3">二. </B>
                    <span ng-if="flagcheck == 1">Capacity</span>
                    <span ng-if="flagcheck == 2">ความจุ</span>
                    <span ng-if="flagcheck == 3">容量</span>
                    <table class="table table-striped table-hover   " >
                </p>
                <Br/>
                 <table class="table table-striped table-hover   " >
                  <tr class="head-table-dialog" align="center">
                      <td></td>
                      <td >
                        <span ng-if="flagcheck == 1">Bag big</span>
                        <span ng-if="flagcheck == 2">กระเป๋าใบใหญ่</span>
                        <span ng-if="flagcheck == 3">袋大</span>
                    </td>
                      <td ><span ng-if="flagcheck == 1">Bag small</span>
                        <span ng-if="flagcheck == 2">กระเป๋าใบเล็ก</span>
                        <span ng-if="flagcheck == 3">袋小</span> </td>
                      <td><span ng-if="flagcheck == 1">Adult</span>
                        <span ng-if="flagcheck == 2">ผู้ใหญ่</span>
                        <span ng-if="flagcheck == 3">成人</span></td>
                      <td><span ng-if="flagcheck == 1">Child</span>
                        <span ng-if="flagcheck == 2">เด็ก</span>
                        <span ng-if="flagcheck == 3">儿童</span></td> 
                      <td><span ng-if="flagcheck == 1">Plan</span>
                        <span ng-if="flagcheck == 2">แผน</span>
                        <span ng-if="flagcheck == 3">计划</span></td>
                  </tr>
               
               
                  <tr ng-repeat="p in detailitem" >
                      <td ></td>
                      <td >
                        <span align="center" ng-if="p.bag_big == 0">-</span>

                        <span style="display:inline-block" ng-show="p.bag_big != 0">
                        <i class="fa fa-suitcase fa-2x" aria-hidden="true" ng-if="p.bag_big == 1"></i>
                        </span>
                        <span ng-if="p.bag_big == 2 && p.bag_big != 0">
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>

                        </span>
                        <span ng-if="p.bag_big == 3 && p.bag_big != 0">
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                        </span>
                        <span ng-if="p.bag_big == 4 && p.bag_big != 0">
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                        </span>
                        <span ng-if="p.bag_big == 5 && p.bag_big != 0">
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                          <i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>
                        </span>
                      </td>

                      <td >
                          <span align="center" ng-if="p.bag_small == 0">-</span>

                          <span style="display:inline-block" ng-show="p.bag_small != 0">
                          <i class="fa fa-suitcase " aria-hidden="true" ng-if="p.bag_small == 1"></i>
                          </span>
                          <span ng-if="p.bag_small == 2 && p.bag_small != 0">
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>

                          </span>
                          <span ng-if="p.bag_small == 3 && p.bag_small != 0">
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                          </span>
                          <span ng-if="p.bag_small == 4 && p.bag_small != 0">
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                          </span>
                          <span ng-if="p.bag_small == 5 && p.bag_small != 0">
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                            <i class="fa fa-suitcase " aria-hidden="true" ></i>
                          </span>
                      </td>
                      <td >
                          <span align="center" ng-if="p.adult == 0">-</span>
                          <span style="display:inline-block" ng-show="p.adult != 0">
                          <i class="fa fa-male fa-lg" aria-hidden="true"></i>
                          </span>
                          <span ng-if="p.adult == 2 && p.adult != 0">
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>

                          </span>
                          <span ng-if="p.adult == 3 && p.adult != 0">
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                          </span>
                          <span ng-if="p.adult == 4 && p.adult != 0">
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                          </span>
                          <span ng-if="p.adult == 5 && p.adult != 0">
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                            <i class="fa fa-male fa-lg" aria-hidden="true" ></i>
                          </span>                          
                      </td>
                      <td >
                          <span align="center" ng-if="p.child == 0">-</span>
                          <span style="display:inline-block" ng-show="p.child != 0">
                              <i class="fa fa-child" aria-hidden="true"></i>
                              </span>
                              <span ng-if="p.child == 2 && p.child != 0">
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>

                              </span>
                              <span ng-if="p.child == 3 && p.child != 0">
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                              </span>
                              <span ng-if="p.child == 4 && p.child != 0">
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                              </span>
                              <span ng-if="p.child == 5 && p.child != 0">
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                                <i class="fa fa-child " aria-hidden="true" ></i>
                              </span>
                      </td>                      
                      
                      <td align="center">{{p.plan}}</td>
                      
                      
                
              </table> -->
                   <Br/> 
                
                <p style="color: #006699; font-size: 16px;">
                 <B ng-if="flagcheck == 1 || flagcheck == 2">3.</B>
                <B ng-if="flagcheck == 3">三. </B>
                    <span ng-if="flagcheck == 1">Facilitiy </span>
                    <span ng-if="flagcheck == 2">อำนวยความสะดวก </span>
                    <span ng-if="flagcheck == 3">设施</span>
                     
                </p>
                <Br/>
                <p style="margin-left: 3%">
                <B ng-if="flagcheck == 1 || flagcheck == 2">1.</B>
                <B ng-if="flagcheck == 3">一. </B>     <img src="images/air.png"  style="margin: 8px;">
                <span ng-if="flagcheck == 1">Air Conditioner</span>
                <span ng-if="flagcheck == 2">เครื่องปรับอากาศ</span>
                <span ng-if="flagcheck == 3">空調</span>
            </p>
            <p style="margin-left: 3%">
                <B ng-if="flagcheck == 1 || flagcheck == 2">2.</B>
                <B ng-if="flagcheck == 3">二. </B><i class="fa fa-music" aria-hidden="true"  style="margin: 8px;"></i>
                <span ng-if="flagcheck == 1">Audio Player</span>
                <span ng-if="flagcheck == 2">เครื่องเสียง</span>
                <span ng-if="flagcheck == 3">音頻播放器</span>&nbsp;&nbsp;
            </p>
                
            </div>
      </div>
     
    </div>
    <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" /> 
</div>
<div modal="showModal" class="box-bg5" close="cancel()" ng-style="comview">
    <div class="box-mobal5">
      <!-- <div class="modal-header">
          
          <button class="btn" ng-click="cancel()" id="can">
            <span ng-if="flagcheck == 1">Close</span>
            <span ng-if="flagcheck == 2">ปิด</span>
            <span ng-if="flagcheck == 3">关闭</span>
        </button>
      </div> -->
      <div class="modal-body" id="bodycomment-scroll" >
      <img src="images/cancel.png"  align="center" ng-click="cancel()" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            <div class="box-coment">
                
               
            
      </div>
      
    </div>
</div>
<!-- <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
</div>


<div modal="showModal" class="box-bg6"  ng-click="cancel()" ng-style="boby">
    <div class="box-mobal6">   
    
      <div class="modal-body" id="body-Darrived" style="position: relative; padding: 0; ">
        
           
            <img src="images/cancel.png"  align="center" ng-click="cancel()" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            <div class="box-img-photo">
                <!-- <p align="center" style="font-size:  18px !important">
                <i class="fa  fa fa-user  " style="font-size:25px; margin-top:10px;"  ></i>

                    <span class="" ng-if="flagcheck == 1">Book by:</span>
                    <span class="" ng-if="flagcheck == 2">คนจอง:</span>
                    <span class="" ng-if="flagcheck == 3">预订人:</span>
                </p> -->
                <div class="box-in-photo" >
                <div class="topic_find">
                <p color="#0099CC" style="font-size:18px" align="center">Contact Booking By</p> 
                    <div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;border-radius: 0 0 10px 10px ">       
                        <div  class="topic_sup">
                            <p ><img src="http://t-booking.com/iconstatus/all/email.png" width="30" /> &nbsp;
                            <strong style="font-size:16px;"><span style="padding-top:20px;">Agent Email.</span></strong>
                            </p>
                                       
                            <p style="border-bottom: dotted  1px #999999; " ></p>
                                                
                            <p >Email : {{tb_web_admin_email}}</p>
                                        
                            <p style="display: inline-block;">Phone : {{tb_web_admin_phone}} <p style="float: right;display: inline-block;">
                        <img src="images/phone.png" width="25">
                    </p></p>
                                    
                                
                            </div>
                        </div>

                        <div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;" ng-if="post_whatapp_id != '' && post_whatapp_name != '' && post_wechat_url != ''" > 
                                         
                            <div  class="topic_sup">
                                
                            <p ><img src="http://www.t-booking.com/uploads_file/social_type/1.jpg" width="30"  /> &nbsp;
                            <strong style="font-size:16px;"><span style="padding-top:20px;">Wechat</span></strong>
                            </p>
                                       
                            <p style="border-bottom: dotted  1px #999999; " ></p>
                                                
                            <p ng-if="post_whatapp_id != ''">Account id : {{post_whatapp_id}}</p>
                                        
                            <p ng-if="post_whatapp_name != ''">Account name :{{post_whatapp_name}}</p>
                            <p ng-if="post_wechat_url != ''">Account url : {{post_wechat_url}}</p>
                                                                    
                            
                                    
                                
                            </div>
                        </div>

                        <div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;" ng-if="post_line_id != '' && post_line_name != '' && post_line_url != ''" > 
                                           
                            <div  class="topic_sup">
                                
                            <p ><img src="http://www.t-booking.com/uploads_file/social_type/2.jpg" width="30" /> &nbsp;
                            <strong style="font-size:16px;"><span style="padding-top:20px;"> Line</span></strong>
                            </p>
                                       
                            <p style="border-bottom: dotted  1px #999999; " ></p>
                                                
                            <p ng-if="post_line_id != ''">Account id : {{post_line_id}}</p>
                             <p ng-if="post_line_name != ''">Account name : {{post_line_name}}</p> 
                             <p ng-if="post_line_url != ''">Account url : {{post_line_url}}</p>          
                            
                                
                            </div>
                        </div>
                        <div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;" ng-if="post_whatapp_id != '' && post_whatapp_name != '' && post_whatapp_url != ''"> 
                                           
                            <div  class="topic_sup">
                                
                            <p ><img src="http://www.t-booking.com/uploads_file/social_type/7.png" width="30" /> &nbsp;
                            <strong style="font-size:16px;"><span style="padding-top:20px;">  Whatapp</span></strong>
                            </p>
                                       
                            <p style="border-bottom: dotted  1px #999999; " ></p>
                                                
                            <p ng-if="post_whatapp_id != ''">Account id : {{post_whatapp_id}}</p>
                            <p ng-if="post_whatapp_name != ''">Account name : {{post_whatapp_name}}</p> 
                            <p ng-if="post_whatapp_url != ''">Account url : {{post_whatapp_url}}</p>             
                            
                                
                            </div>
                        </div>

                        <div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;" ng-if="post_zello_id != '' && post_zello_name != '' && post_zello_url != ''"> 
                                           
                            <div  class="topic_sup">
                                
                            <p ><img src="http://www.t-booking.com/uploads_file/social_type/3.jpg" width="30" /> &nbsp;
                            <strong style="font-size:16px;"><span style="padding-top:20px;">  Zello</span></strong>
                            </p>
                                       
                            <p style="border-bottom: dotted  1px #999999; " ></p>
                                                
                            <p ng-if="post_zello_id != ''">Account id : {{post_zello_id}}</p>
                             <p ng-if="post_zello_name != ''">Account name : {{post_zello_name}}</p> 
                             <p ng-if="post_zello_url != ''">Account url : {{post_zello_url}}</p>   
                                   
                            
                                
                            </div>
                        </div>

                        <div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;" ng-if="post_skype_id != '' && post_skype_name != '' && post_skype_name != ''"> 
                                           
                            <div  class="topic_sup">
                                
                            <p ><img src="http://www.t-booking.com/uploads_file/social_type/6.jpg" width="30"  />&nbsp;
                            <strong style="font-size:16px;"><span style="padding-top:20px;">  Skype</span></strong>
                            </p>
                                       
                            <p style="border-bottom: dotted  1px #999999; " ></p>
                                                
                            <p ng-if="post_skype_id != ''">Account id : {{post_skype_id}}</p>
                            <p ng-if="post_skype_name != ''">Account name : {{post_skype_name}}</p> 
                            <p ng-if="post_skype_name != ''">Account url : {{post_skype_name}}</p>  
                                   
                            
                                
                            </div>
                        </div>
                    </div>

                
                
                 
               
                
              </div>
              
            </div>
      
            
                
      </div>
      
    </div>
   <!--  <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
</div>



<!-- <div modal="showModal" class="box-bg6" close="cancel()" ng-style="boby">
    <div class="box-mobal6">      
        <div class="modal-body" id="body-scrolls">
        <img src="images/cancel.png"  align="center" ng-click="cancel()" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />            
            <div class="topic_find">
                <p color="#0099CC" style="font-size:18px" align="center">Contact Booking By</p> 
                    <div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;">       
                        <div  class="topic_sup">
                            <p ><img src="http://t-booking.com/iconstatus/all/email.png" width="30" /> &nbsp;
                            <strong style="font-size:16px;"><span style="padding-top:20px;">Agent Email.</span></strong>
                            </p>
                                       
                            <p style="border-bottom: dotted  1px #999999; " ></p>
                                                
                            <p >Email : {{tb_web_admin_email}}</p>
                                        
                            <p style="display: inline-block;">Phone : {{tb_web_admin_phone}} <p style="float: right;display: inline-block;">
                        <img src="images/phone.png" width="25">
                    </p></p>
                                    
                                
                            </div>
                        </div>

                        <div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;" ng-if="post_whatapp_id != '' && post_whatapp_name != '' && post_wechat_url != ''" > 
                                         
                            <div  class="topic_sup">
                                
                            <p ><img src="http://www.t-booking.com/uploads_file/social_type/1.jpg" width="30"  /> &nbsp;
                            <strong style="font-size:16px;"><span style="padding-top:20px;">Wechat</span></strong>
                            </p>
                                       
                            <p style="border-bottom: dotted  1px #999999; " ></p>
                                                
                            <p ng-if="post_whatapp_id != ''">Account id : {{post_whatapp_id}}</p>
                                        
                            <p ng-if="post_whatapp_name != ''">Account name :{{post_whatapp_name}}</p>
                            <p ng-if="post_wechat_url != ''">Account url : {{post_wechat_url}}</p>
                                                                    
                            
                                    
                                
                            </div>
                        </div>

                        <div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;" ng-if="post_line_id != '' && post_line_name != '' && post_line_url != ''" > 
                                           
                            <div  class="topic_sup">
                                
                            <p ><img src="http://www.t-booking.com/uploads_file/social_type/2.jpg" width="30" /> &nbsp;
                            <strong style="font-size:16px;"><span style="padding-top:20px;"> Line</span></strong>
                            </p>
                                       
                            <p style="border-bottom: dotted  1px #999999; " ></p>
                                                
                            <p ng-if="post_line_id != ''">Account id : {{post_line_id}}</p>
                             <p ng-if="post_line_name != ''">Account name : {{post_line_name}}</p> 
                             <p ng-if="post_line_url != ''">Account url : {{post_line_url}}</p>          
                            
                                
                            </div>
                        </div>
                        <div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;" ng-if="post_whatapp_id != '' && post_whatapp_name != '' && post_whatapp_url != ''"> 
                                           
                            <div  class="topic_sup">
                                
                            <p ><img src="http://www.t-booking.com/uploads_file/social_type/7.png" width="30" /> &nbsp;
                            <strong style="font-size:16px;"><span style="padding-top:20px;">  Whatapp</span></strong>
                            </p>
                                       
                            <p style="border-bottom: dotted  1px #999999; " ></p>
                                                
                            <p ng-if="post_whatapp_id != ''">Account id : {{post_whatapp_id}}</p>
                            <p ng-if="post_whatapp_name != ''">Account name : {{post_whatapp_name}}</p> 
                            <p ng-if="post_whatapp_url != ''">Account url : {{post_whatapp_url}}</p>             
                            
                                
                            </div>
                        </div>

                        <div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;" ng-if="post_zello_id != '' && post_zello_name != '' && post_zello_url != ''"> 
                                           
                            <div  class="topic_sup">
                                
                            <p ><img src="http://www.t-booking.com/uploads_file/social_type/3.jpg" width="30" /> &nbsp;
                            <strong style="font-size:16px;"><span style="padding-top:20px;">  Zello</span></strong>
                            </p>
                                       
                            <p style="border-bottom: dotted  1px #999999; " ></p>
                                                
                            <p ng-if="post_zello_id != ''">Account id : {{post_zello_id}}</p>
                             <p ng-if="post_zello_name != ''">Account name : {{post_zello_name}}</p> 
                             <p ng-if="post_zello_url != ''">Account url : {{post_zello_url}}</p>   
                                   
                            
                                
                            </div>
                        </div>

                        <div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;" ng-if="post_skype_id != '' && post_skype_name != '' && post_skype_name != ''"> 
                                           
                            <div  class="topic_sup">
                                
                            <p ><img src="http://www.t-booking.com/uploads_file/social_type/6.jpg" width="30"  />&nbsp;
                            <strong style="font-size:16px;"><span style="padding-top:20px;">  Skype</span></strong>
                            </p>
                                       
                            <p style="border-bottom: dotted  1px #999999; " ></p>
                                                
                            <p ng-if="post_skype_id != ''">Account id : {{post_skype_id}}</p>
                            <p ng-if="post_skype_name != ''">Account name : {{post_skype_name}}</p> 
                            <p ng-if="post_skype_name != ''">Account url : {{post_skype_name}}</p>  
                                   
                            
                                
                            </div>
                        </div>
                    </div>
               
                
                           
        
      </div>
      
    </div> -->
          
<!-- </div> -->



<div modal="showModal" class="box-bg7"  ng-click="cancel()" ng-style="conby">
    <div class="box-mobal7">  
    
      <div class="modal-body" id="body-Darrived" style="position: relative; padding: 0; ">
        
           
            <img src="images/cancel.png"  align="center" ng-click="cancel()" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            <div class="box-img-photo">
                <!-- <p align="center" style="font-size:  18px !important">
                <i class="fa  fa fa-user  " style="font-size:25px; margin-top:10px;"  ></i>

                    <span class="" ng-if="flagcheck == 1">Book by:</span>
                    <span class="" ng-if="flagcheck == 2">คนจอง:</span>
                    <span class="" ng-if="flagcheck == 3">预订人:</span>
                </p> -->
                <div class="box-in-photo" >
                <div class="topic_find">
                <p color="#0099CC" style="font-size:18px" align="center">Contact Confirm By</p>
                    <div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;border-radius: 0 0 10px 10px;">       
                        <div  class="topic_sup">
                             
                            <p ><img src="http://t-booking.com/iconstatus/all/email.png" width="30" /> &nbsp;
                            <strong style="font-size:16px;"><span style="padding-top:20px;">Agent Email.</span></strong>
                            </p>
                                       
                            <p style="border-bottom: dotted  1px #999999; " ></p>
                                                
                            <p >Email : {{tb_web_admin_email}}</p>
                                        
                            <p style="display: inline-block;">Phone : {{tb_web_admin_phone}} <p style="float: right;display: inline-block;">
                        <img src="images/phone.png" width="25">
                    </p></p>
                                    
                                
                            </div>
                        </div>

                        <div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;" ng-if="confirm_whatapp_id != '' && confirm_whatapp_name != '' && confirm_wechat_url != ''"> 
                                         
                            <div  class="topic_sup">
                                
                            <p ><img src="http://www.t-booking.com/uploads_file/social_type/1.jpg" width="30"  /> &nbsp;
                            <strong style="font-size:16px;"><span style="padding-top:20px;">Wechat</span></strong>
                            </p>
                                       
                            <p style="border-bottom: dotted  1px #999999; " ></p>
                                                
                            <p ng-if="confirm_whatapp_id != ''">Account id : {{confirm_whatapp_id}}</p>
                                        
                            <p ng-if="confirm_whatapp_name != ''">Account name :{{confirm_whatapp_name}}</p>
                            <p ng-if="confirm_wechat_url != ''">Account url : {{confirm_wechat_url}}</p>
                                                                    
                            
                                    
                                
                            </div>
                        </div>

                        <div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;" ng-if="confirm_line_id != '' && confirm_line_name != '' && confirm_line_url != ''"> 
                                           
                            <div  class="topic_sup">
                                
                            <p ><img src="http://www.t-booking.com/uploads_file/social_type/2.jpg" width="30" /> &nbsp;
                            <strong style="font-size:16px;"><span style="padding-top:20px;"> Line</span></strong>
                            </p>
                                       
                            <p style="border-bottom: dotted  1px #999999; " ></p>
                                                
                            <p ng-if="confirm_line_id != ''">Account id : {{confirm_line_id}}</p>
                             <p ng-if="confirm_line_name != ''">Account name : {{confirm_line_name}}</p> 
                             <p ng-if="confirm_line_url != ''">Account url : {{confirm_line_url}}</p>          
                            
                                
                            </div>
                        </div>
                        <div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;" ng-if="confirm_whatapp_id != '' && confirm_whatapp_name != '' && confirm_whatapp_url != ''"> 
                                           
                            <div  class="topic_sup">
                                
                            <p ><img src="http://www.t-booking.com/uploads_file/social_type/7.png" width="30" /> &nbsp;
                            <strong style="font-size:16px;"><span style="padding-top:20px;">  Whatapp</span></strong>
                            </p>
                                       
                            <p style="border-bottom: dotted  1px #999999; " ></p>
                                                
                            <p ng-if="confirm_whatapp_id != ''">Account id : {{confirm_whatapp_id}}</p>
                             <p ng-if="confirm_whatapp_name != ''">Account name : {{confirm_whatapp_name}}</p> 
                             <p ng-if="confirm_whatapp_url != ''">Account url : {{confirm_whatapp_url}}</p>             
                            
                                
                            </div>
                        </div>

                        <div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;" ng-if="confirm_zello_id != '' && confirm_zello_name != '' && confirm_zello_url != ''"> 
                                           
                            <div  class="topic_sup">
                                
                            <p ><img src="http://www.t-booking.com/uploads_file/social_type/3.jpg" width="30" /> &nbsp;
                            <strong style="font-size:16px;"><span style="padding-top:20px;">  Zello</span></strong>
                            </p>
                                       
                            <p style="border-bottom: dotted  1px #999999; " ></p>
                                                
                            <p ng-if="confirm_zello_id != ''">Account id : {{confirm_zello_id}}</p>
                             <p ng-if="confirm_zello_name != ''">Account name : {{confirm_zello_name}}</p> 
                             <p ng-if="confirm_zello_url != ''">Account url : {{confirm_zello_url}}</p>   
                                   
                            
                                
                            </div>
                        </div>

                        <div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;" ng-if="confirm_skype_id != '' && confirm_skype_name != '' && confirm_skype_name != ''"> 
                                           
                            <div  class="topic_sup">
                                
                            <p ><img src="http://www.t-booking.com/uploads_file/social_type/6.jpg" width="30"  />&nbsp;
                            <strong style="font-size:16px;"><span style="padding-top:20px;">  Skype</span></strong>
                            </p>
                                       
                            <p style="border-bottom: dotted  1px #999999; " ></p>
                                                
                            <p ng-if="confirm_skype_id != ''">Account id : {{confirm_skype_id}}</p>
                             <p ng-if="confirm_skype_name != ''">Account name : {{confirm_skype_name}}</p> 
                             <p ng-if="confirm_skype_name != ''">Account url : {{confirm_skype_name}}</p>  
                                   
                            
                                
                            </div>
                        </div>
                    </div>

                
                
                 
               
                
              </div>
              
            </div>
      
            
                
      </div>
      
    </div>
   <!--  <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
</div>




<!-- <div modal="showModal" class="box-bg7"  ng-click="cancel()" ng-style="conby">
    <div class="box-mobal7">      
        <div class="modal-body" id="body-scrolls">
        <img src="images/cancel.png"  align="center" ng-click="cancel()" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" /> 
            
                <div class="topic_find">
                <p color="#0099CC" style="font-size:18px" align="center">Contact Confirm By</p>
                    <div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;">       
                        <div  class="topic_sup">
                             
                            <p ><img src="http://t-booking.com/iconstatus/all/email.png" width="30" /> &nbsp;
                            <strong style="font-size:16px;"><span style="padding-top:20px;">Agent Email.</span></strong>
                            </p>
                                       
                            <p style="border-bottom: dotted  1px #999999; " ></p>
                                                
                            <p >Email : {{tb_web_admin_email}}</p>
                                        
                            <p style="display: inline-block;">Phone : {{tb_web_admin_phone}} <p style="float: right;display: inline-block;">
                        <img src="images/phone.png" width="25">
                    </p></p>
                                    
                                
                            </div>
                        </div>

                        <div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;" ng-if="confirm_whatapp_id != '' && confirm_whatapp_name != '' && confirm_wechat_url != ''"> 
                                         
                            <div  class="topic_sup">
                                
                            <p ><img src="http://www.t-booking.com/uploads_file/social_type/1.jpg" width="30"  /> &nbsp;
                            <strong style="font-size:16px;"><span style="padding-top:20px;">Wechat</span></strong>
                            </p>
                                       
                            <p style="border-bottom: dotted  1px #999999; " ></p>
                                                
                            <p ng-if="confirm_whatapp_id != ''">Account id : {{confirm_whatapp_id}}</p>
                                        
                            <p ng-if="confirm_whatapp_name != ''">Account name :{{confirm_whatapp_name}}</p>
                            <p ng-if="confirm_wechat_url != ''">Account url : {{confirm_wechat_url}}</p>
                                                                    
                            
                                    
                                
                            </div>
                        </div>

                        <div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;" ng-if="confirm_line_id != '' && confirm_line_name != '' && confirm_line_url != ''"> 
                                           
                            <div  class="topic_sup">
                                
                            <p ><img src="http://www.t-booking.com/uploads_file/social_type/2.jpg" width="30" /> &nbsp;
                            <strong style="font-size:16px;"><span style="padding-top:20px;"> Line</span></strong>
                            </p>
                                       
                            <p style="border-bottom: dotted  1px #999999; " ></p>
                                                
                            <p ng-if="confirm_line_id != ''">Account id : {{confirm_line_id}}</p>
                             <p ng-if="confirm_line_name != ''">Account name : {{confirm_line_name}}</p> 
                             <p ng-if="confirm_line_url != ''">Account url : {{confirm_line_url}}</p>          
                            
                                
                            </div>
                        </div>
                        <div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;" ng-if="confirm_whatapp_id != '' && confirm_whatapp_name != '' && confirm_whatapp_url != ''"> 
                                           
                            <div  class="topic_sup">
                                
                            <p ><img src="http://www.t-booking.com/uploads_file/social_type/7.png" width="30" /> &nbsp;
                            <strong style="font-size:16px;"><span style="padding-top:20px;">  Whatapp</span></strong>
                            </p>
                                       
                            <p style="border-bottom: dotted  1px #999999; " ></p>
                                                
                            <p ng-if="confirm_whatapp_id != ''">Account id : {{confirm_whatapp_id}}</p>
                             <p ng-if="confirm_whatapp_name != ''">Account name : {{confirm_whatapp_name}}</p> 
                             <p ng-if="confirm_whatapp_url != ''">Account url : {{confirm_whatapp_url}}</p>             
                            
                                
                            </div>
                        </div>

                        <div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;" ng-if="confirm_zello_id != '' && confirm_zello_name != '' && confirm_zello_url != ''"> 
                                           
                            <div  class="topic_sup">
                                
                            <p ><img src="http://www.t-booking.com/uploads_file/social_type/3.jpg" width="30" /> &nbsp;
                            <strong style="font-size:16px;"><span style="padding-top:20px;">  Zello</span></strong>
                            </p>
                                       
                            <p style="border-bottom: dotted  1px #999999; " ></p>
                                                
                            <p ng-if="confirm_zello_id != ''">Account id : {{confirm_zello_id}}</p>
                             <p ng-if="confirm_zello_name != ''">Account name : {{confirm_zello_name}}</p> 
                             <p ng-if="confirm_zello_url != ''">Account url : {{confirm_zello_url}}</p>   
                                   
                            
                                
                            </div>
                        </div>

                        <div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;" ng-if="confirm_skype_id != '' && confirm_skype_name != '' && confirm_skype_name != ''"> 
                                           
                            <div  class="topic_sup">
                                
                            <p ><img src="http://www.t-booking.com/uploads_file/social_type/6.jpg" width="30"  />&nbsp;
                            <strong style="font-size:16px;"><span style="padding-top:20px;">  Skype</span></strong>
                            </p>
                                       
                            <p style="border-bottom: dotted  1px #999999; " ></p>
                                                
                            <p ng-if="confirm_skype_id != ''">Account id : {{confirm_skype_id}}</p>
                             <p ng-if="confirm_skype_name != ''">Account name : {{confirm_skype_name}}</p> 
                             <p ng-if="confirm_skype_name != ''">Account url : {{confirm_skype_name}}</p>  
                                   
                            
                                
                            </div>
                        </div>
                    </div>
               
            
      </div>
      
    </div> -->
   <!--  <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
<!-- </div> -->



<div modal="showModal" class="box-bg8"  ng-click="cancel()" ng-style="meeting">
    <div class="box-mobal8">
      <!-- <div class="modal-header">
         
          <button class="btn" ng-click="cancel()" id="can">
            <span ng-if="flagcheck == 1">Close</span>
            <span ng-if="flagcheck == 2">ปิด</span>
            <span ng-if="flagcheck == 3">关闭</span>
        </button>
      </div> -->
      <div class="modal-body" id="body-photo" style="padding: 0">
      <img src="images/cancel.png"  align="center" ng-click="cancel()" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            <div class="box-img-photo">
                <p style="font-size: 18px;padding-top: 10px;" align="center">
                
                    <span ng-if="flagcheck == 1" style="font-size: 18px;">Meeting point</span>
                        <span ng-if="flagcheck == 2" style="font-size: 18px;">จุดนัดพบ</span>
                        <span ng-if="flagcheck == 3" style="font-size: 18px;">迎接地点</span>
                </p>
                <div class="box-in-photo" >
               
                <img  src="http://t-booking.com/pic/placeicon/{{tb_web_web_gallery_post_date}}.jpg" id="img-fig" style="padding: 5px; background: #cae2ef; border-radius: 0 0 10px 10px;margin-bottom: 0">
              <!--   <div type="submit" value="Send File" class="btn-saveimageup" ng-click="sendimageupload()" align="center"></div> -->
                <!-- <input  value="nameimagetake" ng-model="nameimagetake" ngf-select="onFileSelect($files)"> -->
               
              </div>
              
            </div>
      </div>
      
    
</div>
<!-- <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" /> 
 --></div>




<!-- <div modal="showModal" class="box-bg8" close="cancel()" ng-style="meeting">
    <div class="box-mobal8">
     
      <div class="modal-body" style="padding: 0" >
      <img src="images/cancel.png"  align="center" ng-click="cancel()" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            <div class="box-img-meeting">
                <div class="box-in-meeting" >
                    <img  src="http://t-booking.com/pic/placeicon/{{tb_web_web_gallery_post_date}}.jpg" id="img-fig">
                </div>
                
            </div>
      </div>
      
    </div>
    
</div> -->

<div modal="showModal" class="box-bg9"  ng-click="cancel()" ng-style="sign">
    <div class="box-mobal9">
      <!-- <div class="modal-header">
         
          <button class="btn" ng-click="cancel()" id="can">
            <span ng-if="flagcheck == 1">Close</span>
            <span ng-if="flagcheck == 2">ปิด</span>
            <span ng-if="flagcheck == 3">关闭</span>
        </button>
      </div> -->
      <div class="modal-body" id="body-photo" style="padding: 0">
      <img src="images/cancel.png"  align="center" ng-click="cancel()" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            <div class="box-img-photo">
                <p style="font-size: 18px;padding-top: 10px;" align="center">
                     <span ng-if="flagcheck == 1" style="font-size: 18px;">Pick up sign :</span>
                        <span ng-if="flagcheck == 2" style="font-size: 18px;">ป้ายรับแขก :</span>
                        <span ng-if="flagcheck == 3" style="font-size: 18px;">接客牌 :</span>
                   
                </p>
                <div class="box-in-photo" >
               
               <img  src="http://t-booking.com/pic/placeicon/1439701417.jpg" width="100%" style="padding: 5px;
    background: #cae2ef;
    border-radius: 0 0 10px 10px;">
              <!--   <div type="submit" value="Send File" class="btn-saveimageup" ng-click="sendimageupload()" align="center"></div> -->
                <!-- <input  value="nameimagetake" ng-model="nameimagetake" ngf-select="onFileSelect($files)"> -->
               
              </div>
              
            </div>
      </div>
      
    
</div>
<!-- <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" /> 
 --></div>
<!-- <div modal="showModal" class="box-bg9" close="cancel()" ng-style="sign">
    <div class="box-mobal9">
      
      <div class="modal-body">
      <img src="images/cancel.png"  align="center" ng-click="cancel()" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            <div class="box-img-sign">
                <div class="box-in-sing" >
                    <img  src="http://t-booking.com/pic/placeicon/1439701417.jpg" width="100%">
                </div>
                
            </div>
      </div>
      
    </div>
    
</div> -->
<div modal="showModal" class="box-bg10"  ng-click="cancel()" ng-style="upphoto">
    <div class="box-mobal10">
      <!-- <div class="modal-header">
         
          <button class="btn" ng-click="cancel()" id="can">
            <span ng-if="flagcheck == 1">Close</span>
            <span ng-if="flagcheck == 2">ปิด</span>
            <span ng-if="flagcheck == 3">关闭</span>
        </button>
      </div> -->
      <div class="modal-body" id="body-photo">
      <img src="images/cancel.png"  align="center" ng-click="cancel()" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            <div class="box-img-photo">
                <div class="box-in-photo" align="center">                   
                <img align="center" ng-src="http://www.t-booking.com/v1/admin/file/logo/crop/{{agent}}.jpg" err-src="images/ctr.jpg" width="100%" height="100%" >
              <!--   <div type="submit" value="Send File" class="btn-saveimageup" ng-click="sendimageupload()" align="center"></div> -->
                <!-- <input  value="nameimagetake" ng-model="nameimagetake" ngf-select="onFileSelect($files)"> -->
               
              </div>
              
            </div>
      </div>
      
    
</div>
<!-- <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
</div>
<div modal="showModal" class="box-bg11"  ng-click="cancel()" ng-style="Darrived">
    <div class="box-mobal11">
      <!-- <div class="modal-header">
          
          <button class="btn" ng-click="cancel()" id="can">
            <span ng-if="flagcheck == 1">Close</span>
            <span ng-if="flagcheck == 2">ปิด</span>
            <span ng-if="flagcheck == 3">关闭</span>
        </button>
      </div> -->
      <div class="modal-body" id="body-Darrived">
      <img src="images/cancel.png"  align="center" ng-click="cancel()" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            <div class="box-img-Darrived">
                <div class="box-in-Darrived" >
                

                </div>
                
            </div>
      </div>
      
    </div>
    <!-- <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
</div>
<div modal="showModal" class="box-bg12"  ng-click="cancel()" ng-style="Gacknowledged">
    <div class="box-mobal12">
      
      <div class="modal-body" id="body-Darrived">
      <img src="images/cancel.png"  align="center" ng-click="cancel()" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            <div class="box-img-Darrived">
                <div class="box-in-Darrived" >
                

                </div>
                
            </div>
      </div>
      
    </div>
    <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" /> 
</div>
<div modal="showModal" class="box-bg13" c ng-click="cancel()" ng-style="sCheckinguest">
    <div class="box-mobal13">
      <!-- <div class="modal-header">
         
          <button class="btn" ng-click="cancel()" id="can">
            <span ng-if="flagcheck == 1">Close</span>
            <span ng-if="flagcheck == 2">ปิด</span>
            <span ng-if="flagcheck == 3">关闭</span>
        </button>
      </div> -->
      <div class="modal-body" id="body-Darrived" style="padding: 0">
      <img src="images/cancel.png"  align="center" ng-click="cancel()" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            <div class="box-img-Darrived">
                <div class="box-in-Darrived" >
                 
                 
                  
                </div>
                
            </div>
      </div>
      
    </div>
    <!-- <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
</div>
<div modal="showModal" class="box-bg14"  ng-click="cancel()" ng-style="sDriveracknowledged">
    <div class="box-mobal14">
      <!-- <div class="modal-header">
         
          <button class="btn" ng-click="cancel()" id="can">
            <span ng-if="flagcheck == 1">Close</span>
            <span ng-if="flagcheck == 2">ปิด</span>
            <span ng-if="flagcheck == 3">关闭</span>
        </button>
      </div> -->
      <div class="modal-body" id="body-Darrived">
      <img src="images/cancel.png"  align="center" ng-click="cancel()" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            <div class="box-img-Darrived">
                <div class="box-in-Darrived" >
                

                </div>
                
            </div>
      </div>
      
    </div>
    <!-- <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
</div>
<div modal="showModal" class="box-bg21"  ng-click="cancel()" ng-style="sDriverpickup">
    <div class="box-mobal21">
      <!-- <div class="modal-header">
          
          <button class="btn" ng-click="cancel()" id="can">
            <span ng-if="flagcheck == 1">Close</span>
            <span ng-if="flagcheck == 2">ปิด</span>
            <span ng-if="flagcheck == 3">关闭</span>
        </button>
      </div> -->
      <div class="modal-body" id="body-Darrived">
            <div class="box-img-Darrived">
                <div class="box-in-Darrived" >
                

                </div>
                
            </div>
      </div>
      
    </div>
    <!-- <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
</div>
<div modal="showModal" class="box-bg15"  ng-click="cancel()" ng-style="sComplete">
    <div class="box-mobal15">
      <!-- <div class="modal-header">
          
          <button class="btn" ng-click="cancel()" id="can">
            <span ng-if="flagcheck == 1">Close</span>
            <span ng-if="flagcheck == 2">ปิด</span>
            <span ng-if="flagcheck == 3">关闭</span>
        </button>
      </div> -->
      <div class="modal-body" id="body-Darrived">
            <div class="box-img-Darrived">
                <div class="box-in-Darrived" >
                

                </div>
                
            </div>
      </div>
      
    </div>
    <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" /> 
</div>


<div modal="showModal" class="box-bg16"  ng-click="cancel()" ng-style="sPickupplace">
    <div class="box-mobal16">      
      <div class="modal-body" id="body-Darrived" style="padding: 0">
      <img src="images/cancel.png"  align="center" ng-click="cancel()" style="margin-left: 89%;
    margin-top: -10px;  background: #fff; border: 2px; width: 40px; border: 2px solid #ddd;    border-radius: 50%; position: absolute;" />
            <div class="box-img-Darrived">
              <div align="center" style="font-size: 18px;padding: 8px;">
                <span ng-if="flagcheck == 1">Location</span>
                <span ng-if="flagcheck == 2">ตำแหน่งที่ตั้ง</span>
                <span ng-if="flagcheck == 3">地点</span>
              </div>
                <div class="box-in-Darrived" style="    padding: 0 8px;    padding-bottom: 1px;">

                  <!-- <div class="record" ng-repeat="item in itemmap"> -->
                
                <table id="record" width="100%" style="margin-bottom: 10px;font-size: 16px" ><!-- <span ng-class="{evendelay: $even, odddelay: $odd}"></span> -->
                    
                    <tr style="background-color: #DDD;">
                        <!-- <td width="10%"  align="center">
                           <div class="box-index-rec">{{$index+1}}</div>
                           
                        </td> -->
                        <td width="15%" style="padding: 8px 0;border-radius: 8px 0 0 0;" align="center">
                          <div ng-if="itemmap.comment_from == 'GUEST'">
                              <img src="images/me.png" width="30"> 
                          </div>

                          <div ng-if="itemmap.comment_from == 'DRIVER'">
                              <img src="images/driver.png" width="30"> 
                          </div>
                          <div ng-if="itemmap.comment_from == 'CALL CENTER'">
                              <img src="images/call.png" width="30">
                          </div>
                          <div ng-if="itemmap.comment_from == 'AGENT'">
                              <img src="images/ser.png" width="30">
                              <!-- <span ng-if="flagcheck == 1">Agent</span> 
                              <span ng-if="flagcheck == 2">代理</span> 
                              <span ng-if="flagcheck == 3">服务提供者</span>  -->
                          </div>
                          <div ng-if="itemmap.comment_from == 'SERVICE PROVIDER'">
                              <img src="images/dervice P.png" width="30">
                          </div>
                          
                        </td>
                        
                        
                        <td width="2%"></td>
                        <td width="88%" colspan="6" style="border-radius: 0 8px 0 0;padding: 8px 0" >
                           <span>{{itemmap.guest}}</span> 
                        </td>
                        <!-- <td align="center"><span ng-if="item.state==3"><img ng-src="http://t-booking.com/web/v1/PHP/fileUpload/{{item.yourself_post_date}}.jpg" width="28" height="28" ng-click="showimages2(item.yourself_post_date)" ng-show="item.yourself_post_date != '' && item.yourself_post_date != undefined" style="border-radius: 8px;"></span></td> -->
                        
                    </tr>
                    <!-- ========= STATE !======== -->
                    <tr ng-if="itemmap.state == 1" style="    background: #f0f0f0;">
                        
                        <td align="center" style="padding: 8px 0;">
                            <div class="icon-plane">
                                <i class="fa fa-paper-plane fa-lg " aria-hidden="true" style="color: #fff"></i>
                          </div>
                        </td>
                        <td width="2%"></td>
                        <td colspan="4" style="padding: 8px 0">
                            <span ng-if="flagcheck == 1" >Inform the driver </span>
                            <span ng-if="flagcheck == 2">แจ้งคนขับ </span>
                            <span ng-if="flagcheck == 3">通知司机</span> / 
                            <span  ng-if="flagcheck == 1">Request to delay time</span>
                            <span  ng-if="flagcheck == 2">ขอเลื่อนเวลา</span>
                            <span  ng-if="flagcheck == 3">要求延期使用时间</span>
                        </td>
                        <td></td>
                        <td width="20%" align="center">{{itemmap.flight_delay }}</td>

                    </tr>
                    <tr ng-if="itemmap.state == 1" style="    background: #f0f0f0;">
                      <td style="padding: 8px 0; border-radius: 8px 0 0 0;" align="center">
                           <img src="images/timerec.png" width="30">
                      </td>
                      <td></td>
                      <td colspan="5">
                          <span>{{itemmap.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm' }}</span>
                      </td>
                      <td align="center" width="20%">
                          <!-- <img src="https://goldenbeachgroup.com/car/images/icon/view/map.png" ng-click="Pickupplace(item)" width="30"> -->
                      </td>
                    </tr>
                    <!-- ================STATE 3 ============= -->
                    <tr ng-if="itemmap.state == 3" style="    background: #f0f0f0;">
                        
                        <td width="" align="center" style="padding: 8px 0">
                            <div class="icon-plane">
                                <i class="fa fa-paper-plane fa-lg " aria-hidden="true" style="color: #FFF"></i>
                            </div>
                        </td>
                        <td width="2%"></td>
                        <td colspan="5" style="padding: 8px 0;">
                            <span ng-if="flagcheck == 1" >Inform the driver </span>
                            <span ng-if="flagcheck == 2">แจ้งคนขับ </span>
                            <span ng-if="flagcheck == 3">通知司机</span> / 
                            <span ng-if="flagcheck == 1">Waiting</span>
                            <span ng-if="flagcheck == 2">รออยู่แล้ว</span>
                            <span ng-if="flagcheck == 3">已经在等</span>
                        </td>
                        
                        <td align="center" width="20%"><!-- <span><img ng-src="http://t-booking.com/web/v1/PHP/fileUpload/{{item.img_post_date}}.jpg" width="28" height="28" ng-click="showimages1(item)" ng-show="item.img_post_date != '' && item.img_post_date != undefined" style="border-radius: 8px;"> --></span>
                      </td>

                    </tr>
                    <tr ng-if="itemmap.state == 3" style="    background: #f0f0f0;">
                      
                      <td style="padding: 8px 0;border-radius: 8px 0 0 0;" align="center" width="10%">
                           <img src="images/timerec.png" width="30">
                      </td>
                      <td width="2%"></td>
                      <td colspan="5">
                          <span>{{itemmap.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm' }}</span>
                      </td>
                      <td align="center" width="20%">
                          <!-- <img src="https://goldenbeachgroup.com/car/images/icon/view/map.png" ng-click="Pickupplace(item)" width="30"> -->
                      </td>
                    </tr>
                    <!-- ================STATE 2 ============= -->
                    <tr ng-if="itemmap.state == 2" style="    background: #f0f0f0;">
                        
                        <td align="center" >
                          <i class="fa fa-commenting-o fa-lg" aria-hidden="true" style="color: #37c837"></i>
                        </td>
                        <td width="3%"></td>
                        <td colspan="6" style="padding: 8px 0">
                            <span>{{itemmap.comment}}</span>
                        </td>
                       
                        

                    </tr>
                    <tr ng-if="itemmap.state == 2" style="    background: #f0f0f0;">
                      <td style="padding: 8px 0;border-radius: 8px 0 0 0;" align="center">
                           <img src="images/timerec.png" width="30">
                      </td>
                      <td></td>
                      <td colspan="6">
                          <span>{{itemmap.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm' }}</span>
                      </td>
                      <!-- <td colspan="2" align="right">
                          <img src="https://goldenbeachgroup.com/car/images/icon/view/map.png" ng-click="Pickupplace(item)" width="30">
                      </td> -->
                    </tr>
                    
                </table>
                
                
                <div style="width: 100%;  border: 2px solid #9E9E9E; height: 300px; margin-bottom: 8px;    border-radius: 8px;"></div>
               
                 
                  
                </div>
                
            </div>
      </div>
      
    </div>
    <!-- <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
</div>


<div modal="showModal" class="box-bg17"  ng-click="cancel()" ng-style="sToplace">
    <div class="box-mobal17">
      <!-- <div class="modal-header">
         
          <button class="btn" ng-click="cancel()" id="can">
            <span ng-if="flagcheck == 1">Close</span>
            <span ng-if="flagcheck == 2">ปิด</span>
            <span ng-if="flagcheck == 3">关闭</span>
        </button>
      </div> -->
      <div class="modal-body" id="body-Darrived" style="padding: 0">
      <img src="images/cancel.png"  align="center" ng-click="cancel()" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            <div class="box-img-Darrived">
                <div class="box-in-Darrived" >
                 
                 
                  
                </div>
                
            </div>
      </div>
      
    </div>
    <!-- <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
</div>


<div modal="showModal" class="box-bg18" ng-click="cancel()" ng-style="infomationguest">
    <div class="box-mobal18">
    
      <div class="modal-body" id="body-Darrived" style="position: relative; padding: 0; ">
        
           
            <img src="images/cancel.png"  align="center" ng-click="cancel()" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            <div class="box-img-photo">
                <p align="center" style="font-size:  18px !important">
                <i class="fa  fa fa-users " style="font-size:25px; margin-top:10px;"  ></i>
                <span  ng-if="flagcheck == 1" >My information</span>
                <span  ng-if="flagcheck == 2" >ข้อมูลของฉัน</span>
                <span  ng-if="flagcheck == 3" >我的信息</span>
                </p>
                <div class="box-in-photo" >
                <p class="" style="background: #cae2ef;font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;">
                    <span ng-if="flagcheck == 1" >Please enter your contact information, to contact you, thank you for your cooperation.</span>
                    <span ng-if="flagcheck == 2">กรุณากรอกข้อมูลในการติดต่อของคุณ ง่ายต่อการติดต่อคุณ ขอขอบคุณที่ให้ความร่วมมือ</span>
                    <span ng-if="flagcheck == 3">请输入您的联络资料,以方便联络你,谢谢您的合作.</span>
                </p>

                
                
                 
               
                
              </div>
              
            </div>
      
            
                
      </div>
      
    </div>
   <!--  <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
</div>


<div modal="showModal" class="box-bg19" ng-click="cancel()" ng-style="voucherweb">
    <div class="box-mobal19">
    
     
      <div class="modal-body" id="body-photo" style="padding: 0">
      <img src="images/cancel.png"  align="center" ng-click="cancel()" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            <div class="box-img-photo">
            <p class="" style="font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;" align="center">
                    <span ng-if="flagcheck == 1" style="font-size: 18px;">Voucher</span>
                    <span ng-if="flagcheck == 2" style="font-size: 18px;">วอเชอร์</span>
                    <span ng-if="flagcheck == 3" style="font-size: 18px;">凭证</span>
                </p>
                <div class="box-in-photo" >
                
                <iframe id="iframes" ng-src="{{iframe.src | trusted}}" width="100%"></iframe>
                <Br/>
              </div>
              
            </div>
      </div>
      
    
</div>
<!-- <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
</div>


<!-- <div modal="showModal" class="box-bg19" close="cancel()" ng-style="voucherweb">
    <div class="box-mobal19">
    
      <div class="modal-body" id="body-voucher" style="padding:0">
      <img src="images/cancel.png"  align="center" ng-click="cancel()" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
             <div class="box-img-photo">
                
                <div class="box-in-voucher" style="text-align: center;border-radius: 10px; ">
                
                
                

                </div>
                
            </div>
      </div>
      
    </div>
    
</div> -->
<div modal="showModal" class="box-bg20" close="cancel()" ng-style="stylefacilities">
<img src="images/cancel.png" id="Cancemodal2" align="center" ng-click="cancel()" />
    <div class="box-mobal20" align="center">
        
      <div class="modal-body" >
        <a href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com" target="_blank" style="margin:  10px">
            <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" width="45" />
        </a>
        <a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
            <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" width="45" style="margin: 10px" />
        </a>
        <a href="https://plus.google.com/share?url=https://simplesharebuttons.com" target="_blank">
            <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google"  width="45" style="margin: 10px"/>
        </a>
         <a href="mailto:?Subject=Simple Share Buttons&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://simplesharebuttons.com">
            <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" width="45" style="margin:  10px"/>
        </a>
            
      </div>
      
      </div>
       
    </div>
    <div modal="showModal" class="box-bg22" ng-click="cancel()" ng-style="styleshowimages1">
    <div class="box-mobal22">
     
      <div class="modal-body" id="body-photo" style="padding: 0">
      <img src="images/cancel.png"  align="center" ng-click="cancel()" style="margin-left: 85.6%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: fixed;" />
            <div class="box-img-photo">
            <div style="background: #fff;">
                
            </div>
              <p style="font-size: 18px;padding-top: 10px; padding-left: 10px;" align="left">
                 <B ng-if="flagcheck == 1 || flagcheck == 2">1. </B>
                <B ng-if="flagcheck == 3">一. </B> 
                <span ng-if="flagcheck == 1">pictures of your environment</span>
                <span ng-if="flagcheck == 2">ภาพของสภาพแวดล้อมของคุณ</span>
                <span ng-if="flagcheck == 3">你的环境的图片</span>
                </p>
                <div class="box-in-photo" >
                
                
               
                <img align="center" ng-src="http://t-booking.com/web/v1/PHP/fileUpload/{{imagesselet}}.jpg" err-src="images/im.png"  style="padding: 5px; background: #cae2ef;border-radius: 0 0 10px 10px;width: 100%;">
                <Br/>
              </div>
              <p style="font-size: 18px;padding-top: 10px; padding-left: 10px;" align="left">
                    <B ng-if="flagcheck == 1 || flagcheck == 2">2. </B>
                    <B ng-if="flagcheck == 3">二. </B>
                    <span ng-if="flagcheck == 1">picture of yourself</span>
                    <span ng-if="flagcheck == 2">ภาพของตัวเอง</span>
                    <span ng-if="flagcheck == 3">自己的照片</span>
                </p>
                <div class="box-in-photopor" >
               
                <img align="center" ng-src="http://t-booking.com/web/v1/PHP/fileUpload/{{imagesselet2}}.jpg" err-src="images/im.png" style="padding: 5px; background: #cae2ef;border-radius: 0 0 10px 10px;width:  100%;">
              
            </div>
      </div>
</div> 
    
</div>
<!-- <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
</div>

<div modal="showModal" class="box-bg23" ng-click="cancel()" ng-style="styleshowimages2">
    <div class="box-mobal23">
      <!-- <div class="modal-header">
         
          <button class="btn" ng-click="cancel()" id="can">
            <span ng-if="flagcheck == 1">Close</span>
            <span ng-if="flagcheck == 2">ปิด</span>
            <span ng-if="flagcheck == 3">关闭</span>
        </button>
      </div> -->
      <div class="modal-body" id="body-photo" style="padding: 0">
      <img src="images/cancel.png"  align="center" ng-click="cancel()" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            <div class="box-img-photo">
                <p style="font-size: 18px;padding-top: 10px;" align="center">
                    <B ng-if="flagcheck == 1 || flagcheck == 2">2. </B>
                    <B ng-if="flagcheck == 3">二. </B>
                    <span ng-if="flagcheck == 1">picture of yourself</span>
                    <span ng-if="flagcheck == 2">ภาพของตัวเอง</span>
                    <span ng-if="flagcheck == 3">自己的照片</span>
                </p>
                <div class="box-in-photo" >
               
                <img align="center" ng-src="http://t-booking.com/web/v1/PHP/fileUpload/{{imagesselet2}}.jpg" err-src="images/im.png" width="100%" height="100%" style="padding: 5px; background: #cae2ef;border-radius: 0 0 10px 10px;">
              <!--   <div type="submit" value="Send File" class="btn-saveimageup" ng-click="sendimageupload()" align="center"></div> -->
                <!-- <input  value="nameimagetake" ng-model="nameimagetake" ngf-select="onFileSelect($files)"> -->
               
              </div>
              
            </div>
      </div>
      
    
</div>
<!-- <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" /> 
 --></div>

<div modal="showModal" class="box-bg24" close="cancel()" ng-style="styleincreasetime">
    <div class="box-mobal24">
      <!-- <div class="modal-header">
         
          <button class="btn" ng-click="cancel()" id="can">
            <span ng-if="flagcheck == 1">Close</span>
            <span ng-if="flagcheck == 2">ปิด</span>
            <span ng-if="flagcheck == 3">关闭</span>
        </button>
      </div> -->
      <div class="modal-body" id="body-photo">
            <div class="box-img-photo">
                <div class="box-in-photo" >
                
                
                
                 
               
                
              </div>
              
            </div>
      </div>
      
    
</div>
<!-- <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
</div>

<div modal="showModal" class="box-bg25"  ng-click="cancel()" ng-style="stylelangq">

    <div class="box-mobal25">
      <!-- <div class="modal-header">
         
          <button class="btn" ng-click="cancel()" id="can">
            <span ng-if="flagcheck == 1">Close</span>
            <span ng-if="flagcheck == 2">ปิด</span>
            <span ng-if="flagcheck == 3">关闭</span>
        </button>
      </div> -->
      <div class="modal-body" id="body-photo" style="position: relative; padding: 0; padding-top: 9px;">
      <img src="images/cancel.png"  align="center" ng-click="cancel()" style="margin-left: 89%;
    margin-top: -20px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            <div class="box-img-photo">
                <p align="center" style="font-size: 18px;margin-bottom: 9px">
                    <span ng-if="flagcheck == 1">Select language</span>
                    <span ng-if="flagcheck == 2">เลือกภาษา</span>
                    <span ng-if="flagcheck == 3">选择语言</span>
                </p>
                <div class="box-in-photo" style="">
                <p ng-click="language(3)" style="background: #cae2ef;   padding: 5px;margin: 0;font-size: 18px;padding-left: 9px;">
                <img src="images/china.ico" width="35" style="margin-right: 5px">
                <span>简体中文</span>
                </p>
                <p ng-click="language(1)"  style="background: #ddd;padding: 5px;margin: 0;font-size: 18px;padding-left: 9px;">
                <img src="images/usa.ico" width="35" style="margin-right: 5px">
                <span>English</span>
                </p>
               
                
                 <p ng-click="language(2)"  style="background: #cae2ef;padding: 5px;margin: 0;font-size: 18px;border-radius: 0 0 11px 11px;padding-left: 9px;">
                <img src="images/thai.ico" width="35" style="margin-right: 5px">
                <span>ภาษาไทย</span>
                </p>
                
                
                
                 
               
                
              </div>
              
            </div>
      </div>
      
    
</div>
</div>

<div modal="showModal" class="box-bg26" ng-style="poupradio">
    <div class="box-mobal26">
      <div class="modal-body" id="body-photo" style="padding: 0">
      <img src="images/cancel.png"  ng-click="cancel()" align="center" style="margin-left: 89%; margin-top: -10px; background: #fff; border: 2px; width: 40px; border: 2px solid #ddd; border-radius: 50%;    position: absolute;" />
            <div class="box-img-photo">
                <div class="box-in-photo" >
                      <i class="fa fa-chevron-left" aria-hidden="true" style="float: left;    font-size: 25px; margin-top: 10px;margin-left: 10px; position: absolute;    color: #4291be;  display: none;" ng-style="backinformdriver" ng-click="backinformfundriver(1)"></i>
                      <i class="fa fa-chevron-left" aria-hidden="true" style="float: left;    font-size: 25px; margin-top: 10px;margin-left: 10px; position: absolute;    color: #4291be;  display: none;" ng-style="backinformdriverimage" ng-click="backinformfundriver(2)"></i>
                 
                        <p align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;">
                                <span ng-if="flagcheck == 1" style="font-size: 18px;">Inform the driver </span>
                                <span ng-if="flagcheck == 2" style="font-size: 18px;">แจ้งคนขับ </span>
                                <span ng-if="flagcheck == 3" style="font-size: 18px;">通知司机</span>
                        </p>
                        <div style="background: #cae2ef;font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;">
                        <div ng-style="selectdelayradio" style="display: none;">
                            <div class="bradio" style="padding-left: 0;font-size: 18px">
                                <label ng-click="Delay(4)" style="margin: 0"><input type="radio" name="chickenEgg3"  id="checked2"  style="margin-top: 0;">
                                    <p  ng-if="flagcheck == 1">Notify the car ahead of time</p>
                                    <p  ng-if="flagcheck == 2">ใช้รถล่วงหน้า</p>
                                    <p  ng-if="flagcheck == 3">提前使用车</p>
                                </label>
                            </div>
                            <div class="bradio" style="padding-left: 0;font-size: 18px">
                                <label ng-click="Delay(1)" style="margin: 0"><input type="radio" name="chickenEgg3"  id="checked2"  style="margin-top: 0;">
                                    <p  ng-if="flagcheck == 1">Notification Delay car use</p>
                                    <p  ng-if="flagcheck == 2">ใช้รถล่าช้า</p>
                                    <p  ng-if="flagcheck == 3">延迟使用车</p>
                                </label>
                            </div>
                            <div class="bradio" style="padding-left: 0;font-size: 18px">
                                <label ng-click="Delay(3)" style="margin: 0"><input type="radio" name="chickenEgg3"  id="checked2"  style="margin-top: 0;">
                                    <p  ng-if="flagcheck == 1">I've been waiting</p>
                                    <p  ng-if="flagcheck == 2">ฉันรออยู่แล้ว</p>
                                    <p  ng-if="flagcheck == 3">我已经在等</p>
                                </label>
                            </div>
                        </div>
                       
                        <table ng-style="timedelay" style="display: none;border-color: #cae2ef;border-style: none !important  " border="1">
                            <tr>
                                <td colspan="5" align="center">
                                    <span  ng-if="flagcheck == 1">Notification Delay car use</span>
                                    <span  ng-if="flagcheck == 2">ใช้รถล่าช้า</span>
                                    <span  ng-if="flagcheck == 3">延迟使用车</span>
                                </td>
                            </tr>
                            <tr>
                                <td width="2%"></td>
                                <td width="47%" align="center" style="padding-top: 15px; ">
                                <div style="width: 20%;
                                position: absolute;
                                z-index: 1;
                                color: rgb(117, 117, 117);
                                margin-left: 12%;
                                text-align: center;
                                margin-top: 5px;
                                pointer-events: none;
                                background: rgb(255, 255, 255);
                                display: block;" ng-style="stylehour">
                                    <span ng-if="flagcheck == 1">Hour</span>
                                    <span ng-if="flagcheck == 2">ชั่วโมง</span>
                                    <span ng-if="flagcheck == 3">小时</span>
                                </div>
                                    <select class="form-control" ng-change="changenum(selectnum)" id="num" ng-model="selectnum" data-ng-options="i  for i in num">
                                        <option value=""></option>
                                    </select>
                                
                                    
                                </td>
                                <td width="2%" align="center" style="padding-top: 15px;" >
                                    <span>:</span>
                                </td>
                                <td width="" align="center" style="padding-top: 15px; ">
                                    <div style="width: 20%;
                                    position: absolute;
                                    z-index: 1;
                                    color: rgb(117, 117, 117);
                                    margin-left: 12%;
                                    text-align: center;
                                    margin-top: 5px;
                                    pointer-events: none;
                                    background: rgb(255, 255, 255);
                                    display: block;" ng-style="styleminutes" align="right">
                                    <span ng-if="flagcheck == 1">Minute</span>
                                    <span ng-if="flagcheck == 2">นาที</span>
                                    <span ng-if="flagcheck == 3">分钟</span>
                                    </div>                     
                                     
                                    <select class="form-control" ng-change="changenum2(selectnum2)" id="num" ng-model ="selectnum2" data-ng-options="i  for i in num2"  > 
                                    <option value=""  ></option> 
                                    </select>
                                
                                    
                                </td>
                                <td width="2%"></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td colspan="3" style="padding-top: 20px;">
                                    <div style="margin-top: 15px">
                                        <span ng-if="flagcheck == 1">Your request must wait for a response from us.</span>
                                        <span ng-if="flagcheck == 1">คำขอของท่านต้องรอการตอบรับจากเรา</span>
                                        <span ng-if="flagcheck == 1">您的请求必须等待我们的答复。</span>
                                    </div>
                                    <div class="btm-checkin" ng-style="stylecheckin" ng-click="confirm_sendmaildelay(1)" style="    display: none;">
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
                  <table ng-style="timedelay2" style="display: none;border-color: #cae2ef;border-style: none !important  " border="1">
                            <tr>
                                <td colspan="5" align="center">
                                    <span  ng-if="flagcheck == 1">Notify the car ahead of time</span>
                                    <span  ng-if="flagcheck == 2">ใช้รถล่วงหน้า</span>
                                    <span  ng-if="flagcheck == 3">提前使用车</span>
                                </td>
                            </tr>
                            <tr>
                                <td width="2%"></td>
                                <td width="47%" align="center" style="padding-top: 15px; ">
                                <div style="width: 20%;
                                position: absolute;
                                z-index: 1;
                                color: rgb(117, 117, 117);
                                margin-left: 12%;
                                text-align: center;
                                margin-top: 5px;
                                pointer-events: none;
                                background: rgb(255, 255, 255);
                                display: block;" ng-style="stylehour">
                                    <span ng-if="flagcheck == 1">Hour</span>
                                    <span ng-if="flagcheck == 2">ชั่วโมง</span>
                                    <span ng-if="flagcheck == 3">小时</span>
                                </div>
                                    <select class="form-control" ng-change="changenumNotify(selectnumNotify)" id="num" ng-model="selectnumNotify" data-ng-options="i  for i in num">
                                        <option value=""></option>
                                    </select>
                                
                                    
                                </td>
                                <td width="2%" align="center" style="padding-top: 15px;" >
                                    <span>:</span>
                                </td>
                                <td width="" align="center" style="padding-top: 15px; ">
                                    <div style="width: 20%;
                                    position: absolute;
                                    z-index: 1;
                                    color: rgb(117, 117, 117);
                                    margin-left: 12%;
                                    text-align: center;
                                    margin-top: 5px;
                                    pointer-events: none;
                                    background: rgb(255, 255, 255);
                                    display: block;" ng-style="styleminutes" align="right">
                                    <span ng-if="flagcheck == 1">Minute</span>
                                    <span ng-if="flagcheck == 2">นาที</span>
                                    <span ng-if="flagcheck == 3">分钟</span>
                                    </div>                     
                                     
                                    <select class="form-control" ng-change="changenumNotify2(selectnumNotify2)" id="num" ng-model ="selectnumNotify2" data-ng-options="i  for i in num2"  > 
                                    <option value=""  ></option> 
                                    </select>
                                
                                    
                                </td>
                                <td width="2%"></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td colspan="3" style="padding-top: 20px;">
                                    <div style="margin-top: 15px">
                                        <span ng-if="flagcheck == 1">Your request must wait for a response from us.</span>
                                        <span ng-if="flagcheck == 1">คำขอของท่านต้องรอการตอบรับจากเรา</span>
                                        <span ng-if="flagcheck == 1">您的请求必须等待我们的答复。</span>
                                    </div>
                                    <div class="btm-checkin" ng-style="stylecheckin2" ng-click="confirm_sendmaildelay(4)" style="    display: none;">
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
                  <div ng-style="takepictures" style="display: none; ">
                  <table width="100%">
                      <tr>
                          <td align="center" colspan="3" style="padding-top: 20px;">
                              <span ng-if="flagcheck == 1" >Please take pictures of your environment</span>
                              <span ng-if="flagcheck == 2">ถ่ายภาพภาพแวดล้อมของคุณ</span>
                              <span ng-if="flagcheck == 3">请拍照您的环境</span>
                              <!-- <span style="color: #000">({{setionflight.length}})</span> -->
                          </td>
                       
                      </tr>
                      <tr>
                          <td align="center" colspan="3">
                              <div class="nophoto" style="color: red;
    display: none;
    /* position: absolute; */
    margin-top: 100px;
    /* margin-left: 35%; */
    width: 100%;
    position: absolute;">{{nophoto}}</div>
                              <img id="blah" width="100%" />
                              
                          </td>
                      </tr>
                      <tr>
                         <td  align="center" width="48%">
                            <div class="fileUpload btn-new" ng-style="newtakephoto" style="display: none;">
                                <i class="fa fa-camera fa-lg" aria-hidden="true"></i>        
                                <!-- <span ng-if="flagcheck == 1" >New </span>
                                <span ng-if="flagcheck == 2">ใหม่</span>
                                <span ng-if="flagcheck == 3">新</span> -->
                                            <!-- <span style="color: #000">({{setionflight.length}})</span> -->

                                            
                              <input type="file" class="upload" name="fileToUpload" id="fileToUpload" accept="image/*"  capture="camera" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" style="padding: 5px border:none;"
                             file-input="files"/>
                            </div>
                         </td>
                         <td width="4%"></td>
                         <td align="center"  >
                             <div ng-click="takepicturesfun();savetakein()" class="btn-save"  >
                             <i class="fa fa-paper-plane fa-lg " aria-hidden="true"></i>
                                <!-- <span  ng-if="flagcheck == 1">Save image</span>
                                <span  ng-if="flagcheck == 2">ส่งข้อมูล</span>
                                <span  ng-if="flagcheck == 3">發送</span> -->
                            </div> 
                         </td>
                      </tr>
                  </table>
                  </div>

                  <div ng-style="pictureyourself" style="display: none; ">
                  <table width="100%">
                      <tr>
                          <td align="center" colspan="3" style="padding-top: 20px;">
                              <span ng-if="flagcheck == 1" >Please take a picture of yourself</span>
                              <span ng-if="flagcheck == 2">กรุณาถ่ายภาพตัวคุณเอง</span>
                              <span ng-if="flagcheck == 3">请拍照您自己</span>
                              <!-- <span style="color: #000">({{setionflight.length}})</span> -->
                          </td>
                       
                      </tr>
                      <tr>
                          <td align="center" colspan="3">
                          
                             <div class="nophoto2" style="color: red;
    display: none;
    /* position: absolute; */
    margin-top: 100px;
    /* margin-left: 35%; */
    width: 100%;
    position: absolute;">{{nophoto}}</div>
                              <img id="blah2"/>
                             
                          </td>
                      </tr>
                      <tr>
                         <td  align="center" width="48%">
                            <div class="fileUpload btn-new" ng-style="newtakephoto" style="display: none;">
                                <i class="fa fa-camera fa-lg" aria-hidden="true"></i>        
                                <!-- <span ng-if="flagcheck == 1" >New </span>
                                <span ng-if="flagcheck == 2">ใหม่</span>
                                <span ng-if="flagcheck == 3">新</span> -->
                                            <!-- <span style="color: #000">({{setionflight.length}})</span> -->

                                            
                              <input type="file" class="upload" name="fileToUpload" id="fileToUpload" accept="image/*"  capture="camera" onchange="document.getElementById('blah2').src = window.URL.createObjectURL(this.files[0])" style="padding: 5px border:none;"
                             file-input="files"/>
                            </div>
                         </td>
                         <td width="4%"></td>
                         <td align="center"  >
                             <div ng-click="confirm_sendmaildelay()" class="btn-save" id="checkimg" >
                             <i class="fa fa-paper-plane fa-lg " aria-hidden="true"></i>
                                <!-- <span  ng-if="flagcheck == 1">Save image</span>
                                <span  ng-if="flagcheck == 2">ส่งข้อมูล</span>
                                <span  ng-if="flagcheck == 3">發送</span> -->
                            </div> 
                         </td>
                      </tr>
                  </table>
                  </div>

            </div>
      </div>
      
    
</div>

</div>
</div>
</div>
<div modal="showModal" class="box-bg27" ng-click="cancel()" ng-style="guest_name">
    <div class="box-mobal27">
      <!-- <div class="modal-header">
         
          <button class="btn" ng-click="cancel()" id="can">
            <span ng-if="flagcheck == 1">Close</span>
            <span ng-if="flagcheck == 2">ปิด</span>
            <span ng-if="flagcheck == 3">关闭</span>
        </button>
      </div> -->
      <div class="modal-body" id="body-photo" style="padding: 0">
      <img src="images/cancel.png"  align="center" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            <div class="box-img-photo">
                <div class="box-in-photo" >

                 
                        <div align="center" style="font-size: 18px;    padding: 5px;">
                               <!--  <span ng-if="flagcheck == 1" style="font-size: 18px;">Inform the driver </span>
                                <span ng-if="flagcheck == 2" style="font-size: 18px;">แจ้งคนขับ </span>
                                <span ng-if="flagcheck == 3" style="font-size: 18px;">通知驾驶员</span> -->
                               <span> <img src="images/name.png" width="35"> = ? </span>
                        </div>
                        <div style="background: #cae2ef;font-size: 18px;margin-bottom: 0;padding: 15px;    border-radius: 0 0 10px 10px;" align="center">
                            <span> <img src="images/name.png" width="35"> = <span  ng-if="flagcheck == 1">Name </span>
                            <span  ng-if="flagcheck == 2">ชื่อ </span>
                            <span  ng-if="flagcheck == 3">姓名 </span> </span>
                            
                            <!-- <span>{{web_book_agent_guest}}</span>  -->  
                        </div>
                
              </div>
              
            </div>
      </div>
      
    
</div>
<!-- <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
</div>
<div modal="showModal" class="box-bg28" ng-click="cancel()" ng-style="guest_country">
    <div class="box-mobal28">
      <!-- <div class="modal-header">
         
          <button class="btn" ng-click="cancel()" id="can">
            <span ng-if="flagcheck == 1">Close</span>
            <span ng-if="flagcheck == 2">ปิด</span>
            <span ng-if="flagcheck == 3">关闭</span>
        </button>
      </div> -->
      <div class="modal-body" id="body-photo" style="padding: 0">
      <img src="images/cancel.png"  align="center" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            <div class="box-img-photo">
                <div class="box-in-photo" >

                 
                        <div align="center" style="font-size: 18px;    padding: 5px;">
                               <!--  <span ng-if="flagcheck == 1" style="font-size: 18px;">Inform the driver </span>
                                <span ng-if="flagcheck == 2" style="font-size: 18px;">แจ้งคนขับ </span>
                                <span ng-if="flagcheck == 3" style="font-size: 18px;">通知驾驶员</span> -->
                                 <span> <img src="images/lang.png" width="35"> = ? </span>
                                <!-- <img src="images/lang.png.png" width="35"> -->
                        </div>
                        <div style="background: #cae2ef;font-size: 18px;margin-bottom: 0;padding: 15px;    border-radius: 0 0 10px 10px;" align="center">
                            <span> <img src="images/lang.png" width="35"> = <span  ng-if="flagcheck == 1">Nationality </span>
                            <span  ng-if="flagcheck == 2">สัญชาติ </span>
                            <span  ng-if="flagcheck == 3">国籍 </span> </span>
                            
                            <!-- <span>{{web_country_name_en}}</span>   --> 
                        </div>
                
              </div>
              
            </div>
      </div>
      
    
</div>
<!-- <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
</div>
<div modal="showModal" class="box-bg29" ng-click="cancel()" ng-style="phone1">
    <div class="box-mobal29">
      <!-- <div class="modal-header">
         
          <button class="btn" ng-click="cancel()" id="can">
            <span ng-if="flagcheck == 1">Close</span>
            <span ng-if="flagcheck == 2">ปิด</span>
            <span ng-if="flagcheck == 3">关闭</span>
        </button>
      </div> -->
      <div class="modal-body" id="body-photo" style="padding: 0">
      <img src="images/cancel.png"  align="center" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            <div class="box-img-photo">
                <div class="box-in-photo" >

                 
                        <div align="center" style="font-size: 18px;    padding: 5px;">
                               <!--  <span ng-if="flagcheck == 1" style="font-size: 18px;">Inform the driver </span>
                                <span ng-if="flagcheck == 2" style="font-size: 18px;">แจ้งคนขับ </span>
                                <span ng-if="flagcheck == 3" style="font-size: 18px;">通知驾驶员</span> -->
                                 <span> <img src="images/phone1.png" width="35"> = ? </span>
                                <!-- <img src="images/lang.png.png" width="35"> -->
                        </div>
                        <div style="background: #cae2ef;font-size: 18px;margin-bottom: 0;padding: 15px;    border-radius: 0 0 10px 10px;" align="center">
                            <span> <img src="images/phone1.png" width="35"> = 
                            <span  ng-if="flagcheck == 1">Your country mobile</span>
                        <span  ng-if="flagcheck == 2">มือถือประเทศของคุณ</span>
                        <span  ng-if="flagcheck == 3">贵国手机</span> </span>
                            
                            <!-- <span>{{web_country_name_en}}</span>   --> 
                        </div>
                
              </div>
              
            </div>
      </div>
      
    
</div>
<!-- <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
</div>

<div modal="showModal" class="box-bg30"  ng-style="Ephone1">
    <div class="box-mobal30">
      
      <div class="modal-body" id="body-photo" style="padding: 0">
      <img src="images/cancel.png" ng-click="cancel()" align="center" style="margin-left: 89%; margin-top: -10px; background: #fff; border: 2px; width: 40px;border: 2px solid #ddd; border-radius: 50%; position: absolute;" />
            <div class="box-img-photo">
                <div class="box-in-photo" >
                    <div align="center" style="font-size: 18px;    padding: 5px;">
                               
                        <span  ng-if="flagcheck == 1">Your country mobile</span>
                        <span  ng-if="flagcheck == 2">มือถือประเทศของคุณ</span>
                        <span  ng-if="flagcheck == 3">贵国手机</span>
                                
                    </div>
            <div style="background: #cae2ef;font-size: 18px;margin-bottom: 0;padding: 15px;    border-radius: 0 0 10px 10px;" align="center">
               
                    <!-- <p class="textdetail" ng-if="">
                        <i ng-click="editfunphone()" class="fa fa-pencil-square-o fa-lg" style="margin-right: 10px;color: #eea236;" aria-hidden="true"></i>{{web_book_agent_phone}}
                    </p> -->
                   <!--  </p ng-if="web_book_agent_phone == ''">
                    
                        <input type="tel" class="form-control" ng-model="phonenull" ng-change="Ephonenull(phonenull)" style="margin: 0">
                    </p> -->
                    


                    <div class="" id="group" >                                        
                       
                        <div id="select-country" class="form-control"  ng-click="Country()" style="margin-bottom: 25px !important;">
                            <span ><img src="http://www.t-booking.com/demo/iconstatus/flag/test_f/{{imgcoutry}}.png" width="22"></span>{{Countryfont}}
                        </div>
                                <div class="countrybox" ng-style="countrybox">
                                    <ul class="cu-name" >
                                        <li ng-repeat="i in country" ng-click="numCountryselect(i,$event)" ng-class="{even: $even, odd: $odd}">
                                            <span><img src="http://www.t-booking.com/demo/iconstatus/flag/test_f/{{i.country_code}}.png" width="25"></span>
                                            <div ng-if="flagcheck == 1" style="display: inline-block;"><p style="margin:0;display: inline-block;width: 80px;">(+{{i.phonecode}})</p><span id="name-cu">{{i.name_en}}</span></div>
                                            <div ng-if="flagcheck == 2" style="display: inline-block;"><p style="margin:0;display: inline-block;width: 80px;">(+{{i.phonecode}})</p><span id="name-cu">{{i.name_th}}</span></div>
                                            <div ng-if="flagcheck == 3" style="display: inline-block;"><p style="margin:0;display: inline-block;width: 80px;">(+{{i.phonecode}})</p><span id="name-cu">{{i.name_cn}}</span></div>
                                        </li>
                                    </ul>
                                </div>
                </div>
                <div style="padding: 0">
                    <div ng-click="Country()" class="form-control" ng-model="selectcountryValue" id="labelcun" style="width: 30%; display: inline-block;float: left; " ><span><img src="http://www.t-booking.com/demo/iconstatus/flag/test_f/{{imgcoutry}}.png" width="22" style="margin-right: 5px"></span>{{tcountryValue}}
                    </div>

                    <div style="width: 67%; float: right; margin-bottom: 20px; display: inline-block;">
                    <input type="tel" class="form-control" id="phonere" ng-model="ephonenew" value="{{ephonenew}}" ng-change="Ephone(ephonenew)" />

                </div> 
                </div>
                <Br/>
                <div class="btn-saveso"  ng-click="savesocialquest_detail()">
                <span class="fa fa-save "  aria-hidden="true" align="center" style="font-size: 20px"></span>
                <span ng-if="flagcheck == 1">Save</span>
                        <span ng-if="flagcheck == 2">บันทึก</span>
                        <span ng-if="flagcheck == 3">保存</span>
                </div>

                    
               
                        </div>
                
              </div>
              
            </div>
      </div>
      
    
</div>
<!-- <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
</div>
<div modal="showModal" class="box-bg31"  ng-style="phone2">
    <div class="box-mobal31">
      <!-- <div class="modal-header">
         
          <button class="btn" ng-click="cancel()" id="can">
            <span ng-if="flagcheck == 1">Close</span>
            <span ng-if="flagcheck == 2">ปิด</span>
            <span ng-if="flagcheck == 3">关闭</span>
        </button>
      </div> -->
      <div class="modal-body" id="body-photo" style="padding: 0">
      <img src="images/cancel.png" ng-click="cancel()" align="center" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            <div class="box-img-photo">
                <div class="box-in-photo" >

                 
                        <div align="center" style="font-size: 18px;    padding: 5px;">
                               <!--  <span ng-if="flagcheck == 1" style="font-size: 18px;">Inform the driver </span>
                                <span ng-if="flagcheck == 2" style="font-size: 18px;">แจ้งคนขับ </span>
                                <span ng-if="flagcheck == 3" style="font-size: 18px;">通知驾驶员</span> -->
                                 <span> <img src="images/phone2.png" width="35"> = ? </span>
                                <!-- <img src="images/lang.png.png" width="35"> -->
                        </div>
                        <div style="background: #cae2ef;font-size: 18px;margin-bottom: 0;padding: 15px;    border-radius: 0 0 10px 10px;" align="center">
                            <span> <img src="images/phone2.png" width="35"> = 
                            <span  ng-if="flagcheck == 1">Local mobile</span>
                        <span  ng-if="flagcheck == 2">มือถือท้องถิ่น</span>
                        <span  ng-if="flagcheck == 3">本地手机</span>
                            
                            <!-- <span>{{web_country_name_en}}</span>   --> 
                        </div>
                
              </div>
              
            </div>
      </div>
      
    
</div>
<!-- <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
</div>
<div modal="showModal" class="box-bg32" ng-click="cancel()" ng-style="adultchild">
    <div class="box-mobal32">
      <!-- <div class="modal-header">
         
          <button class="btn" ng-click="cancel()" id="can">
            <span ng-if="flagcheck == 1">Close</span>
            <span ng-if="flagcheck == 2">ปิด</span>
            <span ng-if="flagcheck == 3">关闭</span>
        </button>
      </div> -->
      <div class="modal-body" id="body-photo" style="padding: 0">
      <img src="images/cancel.png"  align="center" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            <div class="box-img-photo">
                <div class="box-in-photo" >

                 
                        <div align="center" style="font-size: 18px;    padding: 5px;">
                               
                                 <span> <img src="images/adult.png" width="35"> = ? </span>
                                 <span> <img src="images/child.png" width="35"> = ? </span>
                                 <span> <img src="images/infant.png" width="35"> = ? </span>
                                 <span> <img src="images/tatol.png" width="35"> = ? </span>
                                <!-- <img src="images/lang.png.png" width="35"> -->
                        </div>
                        <div style="font-size: 18px;margin-bottom: 0; " align="left">
                            <div style="background: #cae2ef; padding: 5px 6px;"> <img src="images/adult.png" width="35"> = 
                            <span  ng-if="flagcheck == 1">Adults</span>
                        <span  ng-if="flagcheck == 2">ผู้ใหญ่</span>
                        <span  ng-if="flagcheck == 3">成人</span><!-- <span>(18+)</span> -->
                            </div>
                           
                            <div style="background: #ddd; padding: 5px 6px;"> <img src="images/child.png" width="35"> = 
                            <span ng-if="flagcheck == 1">Child </span>
                        <span ng-if="flagcheck == 2">เด็ก </span>
                        <span ng-if="flagcheck == 3">儿童 </span><!-- <span>(4-12)</span> -->
                            </div>
                            
                            <div style="background: #cae2ef; padding: 5px 6px;"> <img src="images/infant.png" width="35"> = 
                             <span ng-if="flagcheck == 1">Infant </span>
                        <span ng-if="flagcheck == 2">ทารก </span>
                        <span ng-if="flagcheck == 3">婴儿 </span><!-- <span>(1-4)</span> -->
                            </div>
                            
                            <div style="background: #ddd; padding: 5px 6px;"> <img src="images/tatol.png" width="35"> = 
                            <span  ng-if="flagcheck == 1">Total </span>
                        <span  ng-if="flagcheck == 2">ทั้งหมด </span>
                        <span  ng-if="flagcheck == 3">总人数 </span>
                            </div>
                            
                            <!-- <span>{{web_country_name_en}}</span>   --> 
                        </div>
                
              </div>
              
            </div>
      </div>
      
    
</div>
<!-- <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
</div>

<div modal="showModal" class="box-bg33"  ng-style="Ephone2">
    <div class="box-mobal33">
      
      <div class="modal-body" id="body-photo" style="padding: 0">
      <img src="images/cancel.png" ng-click="cancel()" align="center" style="margin-left: 89%; margin-top: -10px; background: #fff; border: 2px; width: 40px;border: 2px solid #ddd; border-radius: 50%; position: absolute;" />
            <div class="box-img-photo">
                <div class="box-in-photo" >
                    <div align="center" style="font-size: 18px;    padding: 5px;">
                               
                        <span  ng-if="flagcheck == 1">Local mobile</span>
                        <span  ng-if="flagcheck == 2">มือถือท้องถิ่น</span>
                        <span  ng-if="flagcheck == 3">本地手机</span>
                                
                    </div>
            <div style="background: #cae2ef;font-size: 18px;margin-bottom: 0;padding: 15px;    border-radius: 0 0 10px 10px;" align="center">
               
                    <!-- <p class="textdetail" ng-if="!editphone && web_book_agent_phone != ''">
                        <i ng-click="editfunphone()" class="fa fa-pencil-square-o fa-lg" style="margin-right: 10px;color: #eea236;" aria-hidden="true"></i>{{web_book_agent_phone}}
                    </p> -->
                   <!--  </p ng-if="web_book_agent_phone == ''">
                    
                        <input type="tel" class="form-control" ng-model="phonenull" ng-change="Ephonenull(phonenull)" style="margin: 0">
                    </p> -->
                    


                    <div class="" id="group" >                                        
                       
                        <div id="select-country" class="form-control"  ng-click="Country2()" style="margin-bottom: 25px !important;">
                            <span><img src="http://www.t-booking.com/demo/iconstatus/flag/test_f/{{imgcoutry2}}.png" width="25"></span>{{Countryfont2}}</div>
                            <div class="countrybox2" ng-style="countrybox2">
                                <ul class="cu-name2" >
                                    <li ng-repeat="i in country" ng-click="numCountryselect2(i,$event)" ng-class="{even: $even, odd: $odd}">
                                        <span><img src="http://www.t-booking.com/demo/iconstatus/flag/test_f/{{i.country_code}}.png" width="22"></span>
                                        <div ng-if="flagcheck == 1" style="display: inline-block;"><p style="display: inline-block;margin: 0;width: 80px">(+{{i.phonecode}})</p>
                                        <span id="name-cu">{{i.name_en}}</span></div>
                                            <div ng-if="flagcheck == 2" style="display: inline-block;"><p style="display: inline-block;margin: 0;width: 80px">(+{{i.phonecode}})</p><span id="name-cu">{{i.name_th}}</span></div>
                                            <div ng-if="flagcheck == 3" style="display: inline-block;"><p style="display: inline-block;margin: 0;width: 80px">(+{{i.phonecode}})</p><span id="name-cu">{{i.name_cn}}</span></div>
                                    </li>
                                </ul>
                            </div>
                </div>

                <div style="padding: 0">
                     <div ng-click="Country2()" class="form-control" ng-model="selectcountryValue2" id="labelcun" style="width: 30%; display: inline-block;float: left;"><span><img src="http://www.t-booking.com/demo/iconstatus/flag/test_f/{{imgcoutry2}}.png" width="22" style="margin-right: 5px"></span>{{tcountryValue2}}</div>

                               <div style="width: 67%; float: right; margin-bottom: 20px; display: inline-block;">
                                <input type="tel" class="form-control" ng-model="elocalphonenew" value="{{elocalphonenew}}" ng-change="Elocalphone(elocalphonenew)"  />

                                </div> 
                    </div>


                <!-- <div style="padding: 0">
                    <div ng-click="Country()" class="form-control" ng-model="selectcountryValue" id="labelcun" style="width: 25%; display: inline-block;float: left; " >{{selectcountryValue}}
                    </div>

                    <div style="width: 72%; float: right; margin-bottom: 20px; display: inline-block;">
                    <input type="tel" class="form-control" id="phonere" ng-model="web_book_agent_phone" value="{{web_book_agent_phone}}" ng-change="Ephone(web_book_agent_phone)" require ng-pattern="/^\d{0,9}(\.\d{1,9})?$/"/>

                </div> 
                </div> -->
                <Br/>
                <div class="btn-saveso"  ng-click="savesocialquest_detail()">
                <span class="fa fa-save "  aria-hidden="true" align="center" style="font-size: 20px"></span>
                <span ng-if="flagcheck == 1">Save</span>
                        <span ng-if="flagcheck == 2">บันทึก</span>
                        <span ng-if="flagcheck == 3">保存</span>
                </div>

                    
               
                        </div>
                
              </div>
              
            </div>
      </div>
      
    
</div>
<!-- <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
</div>

<div modal="showModal" class="box-bg34"  ng-style="editEmail1">
    <div class="box-mobal34">
      <!-- <div class="modal-header">
         
          <button class="btn" ng-click="cancel()" id="can">
            <span ng-if="flagcheck == 1">Close</span>
            <span ng-if="flagcheck == 2">ปิด</span>
            <span ng-if="flagcheck == 3">关闭</span>
        </button>
      </div> -->
      <div class="modal-body" id="body-photo" style="padding: 0">
      <img src="images/cancel.png" ng-click="cancel()" align="center" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            <div class="box-img-photo">
                <div class="box-in-photo" >

                 
                        <div align="center" style="font-size: 18px;    padding: 5px;">
                               <!--  <span ng-if="flagcheck == 1" style="font-size: 18px;">Inform the driver </span>
                                <span ng-if="flagcheck == 2" style="font-size: 18px;">แจ้งคนขับ </span>
                                <span ng-if="flagcheck == 3" style="font-size: 18px;">通知驾驶员</span> -->
                                 <span> <img src="images/email1.png" width="35"></span>
                                 <span  ng-if="flagcheck == 1">E-mail 1 </span>
                                <span  ng-if="flagcheck == 2">อีเมล 1 </span>
                                <span  ng-if="flagcheck == 3">電郵 1 </span>
                                <!-- <img src="images/lang.png.png" width="35"> -->
                        </div>
                        <div style="background: #cae2ef;font-size: 18px;margin-bottom: 0;padding: 15px;    border-radius: 0 0 10px 10px;" align="center">
                           <!--  <div > -->
                        <p style="margin: 0;color: red;display: none" align="center" ng-style="reqmail">
                            <span ng-if="flagcheck == 1">Please enter your e-mail</span>
                            <span ng-if="flagcheck == 2">กรุณาใส่อีเมลของคุณ</span>
                            <span ng-if="flagcheck == 3">请输入您的电子邮件</span>
                        </p>
                        <p class="textdetail" style="width: 100%;">
                           <input type="text" class="form-control" value="{{agent_email}}" ng-model="agent_email" ng-change="functionemailnull(agent_email)" style="height: 50px" placeholder="example@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" / required>
                        </p>
                   <!--  </div> -->
                           <div class="btn-saveso"  ng-click="savesocialquest_detail()" style="    margin-top: 15px;
    padding: 11px;text-align: center;">
                <span class="fa fa-save "  aria-hidden="true" align="center" style="font-size: 20px" ></span>
                <span ng-if="flagcheck == 1">Save</span>
                        <span ng-if="flagcheck == 2">บันทึก</span>
                        <span ng-if="flagcheck == 3">保存</span>
                </div> 
                            <!-- <span>{{web_country_name_en}}</span>   --> 
                        </div>
                        
                
              </div>
              
            </div>
      </div>
      
    
</div>
<!-- <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
</div>
<div modal="showModal" class="box-bg35"  ng-style="editEmail2">
    <div class="box-mobal35">
      <!-- <div class="modal-header">
         
          <button class="btn" ng-click="cancel()" id="can">
            <span ng-if="flagcheck == 1">Close</span>
            <span ng-if="flagcheck == 2">ปิด</span>
            <span ng-if="flagcheck == 3">关闭</span>
        </button>
      </div> -->
      <div class="modal-body" id="body-photo" style="padding: 0">
      <img src="images/cancel.png" ng-click="cancel()"  align="center" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            <div class="box-img-photo">
                <div class="box-in-photo" >

                 
                        <div align="center" style="font-size: 18px;    padding: 5px;">
                               <!--  <span ng-if="flagcheck == 1" style="font-size: 18px;">Inform the driver </span>
                                <span ng-if="flagcheck == 2" style="font-size: 18px;">แจ้งคนขับ </span>
                                <span ng-if="flagcheck == 3" style="font-size: 18px;">通知驾驶员</span> -->
                                 <span> <img src="images/email2.png" width="35"></span>
                                 <span  ng-if="flagcheck == 1">E-mail 2 </span>
                                <span  ng-if="flagcheck == 2">อีเมล 2 </span>
                                <span  ng-if="flagcheck == 3">電郵 2 </span>
                                <!-- <img src="images/lang.png.png" width="35"> -->
                        </div>
                        <div style="background: #cae2ef;font-size: 18px;margin-bottom: 0;padding: 15px;    border-radius: 0 0 10px 10px;" align="center">
                           <!--  <div > -->
                         <p style="margin: 0;color: red;display: none" align="center" ng-style="reqmail2">
                             <span ng-if="flagcheck == 1">Please enter your e-mail</span>
                            <span ng-if="flagcheck == 2">กรุณาใส่อีเมลของคุณ</span>
                            <span ng-if="flagcheck == 3">请输入您的电子邮件</span>
                         </p>
                        <p class="textdetail" style="width: 100%;">
                            <input type="email" class="form-control" size="77" maxlength="100" name="email" value="{{agent_email2}}" ng-model="agent_email2" ng-change="functionemail2null(agent_email2)" style="    height: 50px;" placeholder="example@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" / required>
                            <!--  <input type="text" class="form-control" value="{{tb_web_book_agent_email2}}" ng-model="tb_web_book_agent_email2" ng-change="functionemail2null(tb_web_book_agent_email2)" style="    height: 50px;"> -->
                        </p>
                   <!--  </div> -->

                           
                            <div class="btn-saveso"  ng-click="savesocialquest_detail()" style="    margin-top: 15px;
    padding: 11px;text-align: center;"  ng-style="reqsave" >
                <span class="fa fa-save "  aria-hidden="true" align="center" style="font-size: 20px"></span>
                <span ng-if="flagcheck == 1">Save</span>
                        <span ng-if="flagcheck == 2">บันทึก</span>
                        <span ng-if="flagcheck == 3">保存</span>
                </div>
                            <!-- <span>{{web_country_name_en}}</span>   --> 
                        </div>

                
              </div>
              
            </div>
      </div>
      
    
</div>
<!-- <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
</div>

<div modal="showModal" class="box-bg36"  ng-style="editsocialall">
    <div class="box-mobal36">
      <div class="modal-body" id="body-photo" style="padding: 0">
      <img src="images/cancel.png" ng-click="cancel()"  align="center" style="margin-left: 89%;
    margin-top: -10px;
    background: #fff;
    border: 2px;
    width: 40px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: absolute;" />
            <div class="box-img-photo">
                <div class="box-in-photo" >

                 
                        <div align="center" style="font-size: 18px;    padding: 5px;">
                              
                                 <!-- <img src="http://www.t-booking.com/uploads_file/social_type/{{itemicon}}" width="30" class="icon-so"> -->
                                 <span  ng-if="flagcheck == 1">Edit social</span>
                                <span  ng-if="flagcheck == 2">แก้ไขโซเชียล</span>
                                <span  ng-if="flagcheck == 3">编辑社会</span>
                                <!-- <img src="images/lang.png.png" width="35"> -->
                        </div>
                        <div ng-repeat="item in socialall" class="Edit{{item.id}}"  style="background: #cae2ef;font-size: 18px; margin-bottom: 0; padding-bottom: 16px; border-radius: 8px;padding-top: 20px;display: none">
                        
                        <table  width="100%">
                           <tr >
                              <td width="4%"></td>
                             <td>
                                <img src="http://www.t-booking.com/uploads_file/social_type/{{item.type_icon}}" style="width: 50px; border-radius: 10px; height: 50px;">
                             </td>
                             <td width="5%"></td>
                             <td>
                               <input type="text" class="form-control" value="{{item.web_guest_social}}" ng-model="item.web_guest_social" ng-change="{{item.fun_name}}(item.web_guest_social)" style="height: 50px">
                             </td>
                             <td width="4%"></td>
                           </tr>
                           <tr>
                              <td width="4%"></td>
                               <td colspan="3" width="92%" align="center" >
                                   <div class="btn-saveso"  ng-click="update_social_bookAgent()" style=" margin-top: 15px; padding: 11px;text-align: center;">
                                  <span class="fa fa-save "  aria-hidden="true" align="center" style="font-size: 20px;    text-align: center;" ></span>
                                  <span ng-if="flagcheck == 1">Save</span>
                                          <span ng-if="flagcheck == 2">บันทึก</span>
                                          <span ng-if="flagcheck == 3">保存</span>
                                  </div>
                               </td>
                               <td width="4%"></td>
                           </tr>
                        </table>
                        
                        </div>
                       <!--  <div style="background: #cae2ef;font-size: 18px;margin-bottom: 0;padding: 15px;    border-radius: 0 0 10px 10px;" >
                           
                        <div  style="padding: 0">
                        <div >
                        <div class="" style="margin-right: 10px;display: inline-block;">
                            
                        </div>
                        <div class="" style="width: 80%;display: inline-block;">                        
                           
                        </div>
                    </div>
                    </div>
                  
                            <div class="btn-saveso"  ng-click="update_social_bookAgent()" style="    margin-top: 15px;
    padding: 11px;text-align: center;">
                <span class="fa fa-save "  aria-hidden="true" align="center" style="font-size: 20px;    text-align: center;" ></span>
                <span ng-if="flagcheck == 1">Save</span>
                        <span ng-if="flagcheck == 2">บันทึก</span>
                        <span ng-if="flagcheck == 3">保存</span>
                </div>
                           
                        </div> -->

                
              </div>
              
            </div>
      </div>
      
    
</div>
<!-- <img src="images/cancel.png" id="Cancemodal" align="center" ng-click="cancel()" />  -->
</div>

<div modal="showModal" class="box-bg37" ng-style="popupdelay">
    <div class="box-mobal37">
      <!-- <div class="modal-header">
         
          <button class="btn" ng-click="cancel()" id="can">
            <span ng-if="flagcheck == 1">Close</span>
            <span ng-if="flagcheck == 2">ปิด</span>
            <span ng-if="flagcheck == 3">关闭</span>
        </button>
      </div> -->
      <div class="modal-body" id="body-photo" style="padding: 0">
      <img src="images/cancel.png"  align="center" style="margin-left: 89%; margin-top: -10px;   background: #fff; border: 2px; width: 40px; border: 2px solid #ddd; border-radius: 50%;    position: absolute;" />
            <div class="box-img-photo">
                <div class="box-in-photo" >

                 
                        <p align="center" style="font-size: 18px;">
                                <span ng-if="flagcheck == 1" style="font-size: 18px;">Inform the driver </span>
                                <span ng-if="flagcheck == 2" style="font-size: 18px;">แจ้งคนขับ </span>
                                <span ng-if="flagcheck == 3" style="font-size: 18px;">通知司机</span>
                        </p>
                        <div style="background: #cae2ef;font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;">
                            <div class="bradio" style="padding-left: 0;font-size: 18px">
                                <label style="margin: 0"><input type="radio" name="chickenEgg3"  id="checked2" ng-click="Delay(1)" style="margin-top: 0;">
                                    <p  ng-if="flagcheck == 1">Delay</p>
                                    <p  ng-if="flagcheck == 2">ล่าช้า</p>
                                    <p  ng-if="flagcheck == 3">延迟</p>
                                </label>
                            </div>
                            <div class="bradio" style="padding-left: 0;font-size: 18px">
                                <label style="margin: 0"><input type="radio" name="chickenEgg3"  id="checked2" ng-click="Delay(3)" style="margin-top: 0;">
                                    <p  ng-if="flagcheck == 1">Waiting</p>
                                    <p  ng-if="flagcheck == 2">รออยู่แล้ว</p>
                                    <p  ng-if="flagcheck == 3">已经在等</p>
                                </label>
                            </div>
                        </div>
                </div>
            </div>
      </div>
      
    
</div>

</div>

<div modal="showModal" class="box-bg38" ng-style="takepicture">
    <div class="box-mobal38">
      
      <div class="modal-body" id="body-photo" style="padding: 0">
      <img src="images/cancel.png" ng-click="cancel()" align="center" style="margin-left: 89%; margin-top: -10px;   background: #fff; border: 2px; width: 40px; border: 2px solid #ddd; border-radius: 50%;    position: absolute;" />
            <div class="box-img-photo">
                <div class="box-in-photo" >

                 
                        <p align="center" style="font-size: 18px;">
                                <span ng-if="flagcheck == 1" style="font-size: 18px;">Inform the driver </span>
                                <span ng-if="flagcheck == 2" style="font-size: 18px;">แจ้งคนขับ </span>
                                <span ng-if="flagcheck == 3" style="font-size: 18px;">通知司机</span>
                        </p>
                        <div style="background: #cae2ef;font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;">
                            <div class="bradio" style="padding-left: 0;font-size: 18px">
                                <label style="margin: 0"><input type="radio" name="chickenEgg3"  id="checked2" ng-click="Delay(1)" style="margin-top: 0;">
                                    <p  ng-if="flagcheck == 1">Delay</p>
                                    <p  ng-if="flagcheck == 2">ล่าช้า</p>
                                    <p  ng-if="flagcheck == 3">延迟</p>
                                </label>
                            </div>
                            <div class="bradio" style="padding-left: 0;font-size: 18px">
                                <label style="margin: 0"><input type="radio" name="chickenEgg3"  id="checked2" ng-click="Delay(3)" style="margin-top: 0;">
                                    <p  ng-if="flagcheck == 1">Waiting</p>
                                    <p  ng-if="flagcheck == 2">รออยู่แล้ว</p>
                                    <p  ng-if="flagcheck == 3">已经在等</p>
                                </label>
                            </div>
                        </div>
                </div>
            </div>
      </div>
      
    
</div>

</div>
<div modal="showModal" class="box-bg39" ng-style="scommentTodriver">
    <div class="box-mobal39">
      
      <div class="modal-body" id="body-photo" style="padding: 0">
      <img src="images/cancel.png" ng-click="cancel()" align="center" style="margin-left: 89%; margin-top: -10px;   background: #fff; border: 2px; width: 40px; border: 2px solid #ddd; border-radius: 50%;    position: absolute;" />
            <div class="box-img-photo">
                <div class="box-in-photo" >

                 
                        <div align="center" style="font-size: 18px; padding: 8px;">
                                <span ng-if="flagcheck == 1" style="font-size: 18px;">Chat with the driver </span>
                                <span ng-if="flagcheck == 2" style="font-size: 18px;">การแชทกับคนขับ </span>
                                <span ng-if="flagcheck == 3" style="font-size: 18px;">与司机聊天</span>
                        </div>
                        
                        <div style="background: #cae2ef;font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;" >

                        <div ng-style="selectcommentradio" style="display: none;">
                            <div class="bradio" style="padding-left: 0;font-size: 18px">
                                <label ng-click="Chatdriver(1)" style="margin: 0"><input type="radio" name="chickchat"  id="checkedchat"  style="margin-top: 0;">
                                    <p  ng-if="flagcheck == 1">Select the existing words</p>
                                    <p  ng-if="flagcheck == 2">เลือกคำที่มีอยู่แล้ว</p>
                                    <p  ng-if="flagcheck == 3">选择已经有的词句</p>
                                </label>
                            </div>
                            <div class="bradio" style="padding-left: 0;font-size: 18px">
                                <label ng-click="Chatdriver(2)" style="margin: 0"><input type="radio" name="chickchat"  id="checkedchat"  style="margin-top: 0;">
                                    <p  ng-if="flagcheck == 1">Chat</p>
                                    <p  ng-if="flagcheck == 2">แชท</p>
                                    <p  ng-if="flagcheck == 3">聊天</p>
                                </label>
                            </div>
                        </div>
                              
                              <div style="padding: 5px 9px;" >
                             <textarea class="form-control" rows="5" id="comment" ng-model="comdriver" ng-change="YourOwnComments(comdriver)" ng-style="owncomments" style="margin-bottom: 10px"></textarea>
                             
                            <div class="btm-checkin" ng-click="confirm_sendmaildelay(2)" style="display: none;margin-top: 15px;" ng-style="confirmcommenttoderiver">
                                    <i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;"></i>

                                        <!-- <span ng-if="flagcheck == 1" >To inform the driver</span>
                                        <span ng-if="flagcheck == 2">คลิกที่นี่เพื่อแจ้งคนขับรถ </span>
                                        <span ng-if="flagcheck == 3">通知司机请按这里 </span> -->
                                        <!-- <span style="color: #000">({{setionflight.length}})</span> -->
                                    </div>
                            </div>
                        </div>
                </div>
            </div>
      </div>
      
    
</div>

</div>

<div modal="showModal" class="box-bg40" ng-style="">
    <div class="box-mobal40">
      
      <div class="modal-body" id="body-photo" style="padding: 0">
      <img src="images/cancel.png"  align="center" style="margin-left: 89%; margin-top: -10px;   background: #fff; border: 2px; width: 40px; border: 2px solid #ddd; border-radius: 50%;    position: absolute;" />
            <div class="box-img-photo">
                <div class="box-in-photo" >

                 
                        <p align="center" style="font-size: 18px;">
                                <span ng-if="flagcheck == 1" style="font-size: 18px;">Inform the driver </span>
                                <span ng-if="flagcheck == 2" style="font-size: 18px;">แจ้งคนขับ </span>
                                <span ng-if="flagcheck == 3" style="font-size: 18px;">通知司机</span>
                        </p>
                        <div style="background: #cae2ef;font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;">
                            <div class="bradio" style="padding-left: 0;font-size: 18px">
                                <label style="margin: 0"><input type="radio" name="chickenEgg3"  id="checked2" ng-click="Delay(1)" style="margin-top: 0;">
                                    <p  ng-if="flagcheck == 1">Delay</p>
                                    <p  ng-if="flagcheck == 2">ล่าช้า</p>
                                    <p  ng-if="flagcheck == 3">延迟</p>
                                </label>
                            </div>
                            <div class="bradio" style="padding-left: 0;font-size: 18px">
                                <label style="margin: 0"><input type="radio" name="chickenEgg3"  id="checked2" ng-click="Delay(3)" style="margin-top: 0;">
                                    <p  ng-if="flagcheck == 1">Waiting</p>
                                    <p  ng-if="flagcheck == 2">รออยู่แล้ว</p>
                                    <p  ng-if="flagcheck == 3">已经在等</p>
                                </label>
                            </div>
                        </div>
                </div>
            </div>
      </div>
      
    
</div>

</div>
<div modal="showModal" class="box-bg41" ng-style="">
    <div class="box-mobal41">
      
      <div class="modal-body" id="body-photo" style="padding: 0">
      <img src="images/cancel.png"  align="center" style="margin-left: 89%; margin-top: -10px;   background: #fff; border: 2px; width: 40px; border: 2px solid #ddd; border-radius: 50%;    position: absolute;" />
            <div class="box-img-photo">
                <div class="box-in-photo" >

                 
                        <p align="center" style="font-size: 18px;">
                                <span ng-if="flagcheck == 1" style="font-size: 18px;">Inform the driver </span>
                                <span ng-if="flagcheck == 2" style="font-size: 18px;">แจ้งคนขับ </span>
                                <span ng-if="flagcheck == 3" style="font-size: 18px;">通知司机</span>
                        </p>
                        <div style="background: #cae2ef;font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;">
                            <div class="bradio" style="padding-left: 0;font-size: 18px">
                                <label style="margin: 0"><input type="radio" name="chickenEgg3"  id="checked2" ng-click="Delay(1)" style="margin-top: 0;">
                                    <p  ng-if="flagcheck == 1">Delay</p>
                                    <p  ng-if="flagcheck == 2">ล่าช้า</p>
                                    <p  ng-if="flagcheck == 3">延迟</p>
                                </label>
                            </div>
                            <div class="bradio" style="padding-left: 0;font-size: 18px">
                                <label style="margin: 0"><input type="radio" name="chickenEgg3"  id="checked2" ng-click="Delay(3)" style="margin-top: 0;">
                                    <p  ng-if="flagcheck == 1">Waiting</p>
                                    <p  ng-if="flagcheck == 2">รออยู่แล้ว</p>
                                    <p  ng-if="flagcheck == 3">已经在等</p>
                                </label>
                            </div>
                        </div>
                </div>
            </div>
      </div>
      
    
</div>

</div>

<div modal="showModal" class="box-bg42" ng-style="">
    <div class="box-mobal42">
      
      <div class="modal-body" id="body-photo" style="padding: 0">
      <img src="images/cancel.png"  align="center" style="margin-left: 89%; margin-top: -10px;   background: #fff; border: 2px; width: 40px; border: 2px solid #ddd; border-radius: 50%;    position: absolute;" />
            <div class="box-img-photo">
                <div class="box-in-photo" >

                 
                        <p align="center" style="font-size: 18px;">
                                <span ng-if="flagcheck == 1" style="font-size: 18px;">Inform the driver </span>
                                <span ng-if="flagcheck == 2" style="font-size: 18px;">แจ้งคนขับ </span>
                                <span ng-if="flagcheck == 3" style="font-size: 18px;">通知司机</span>
                        </p>
                        <div style="background: #cae2ef;font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;">
                            <div class="bradio" style="padding-left: 0;font-size: 18px">
                                <label style="margin: 0"><input type="radio" name="chickenEgg3"  id="checked2" ng-click="Delay(1)" style="margin-top: 0;">
                                    <p  ng-if="flagcheck == 1">Delay</p>
                                    <p  ng-if="flagcheck == 2">ล่าช้า</p>
                                    <p  ng-if="flagcheck == 3">延迟</p>
                                </label>
                            </div>
                            <div class="bradio" style="padding-left: 0;font-size: 18px">
                                <label style="margin: 0"><input type="radio" name="chickenEgg3"  id="checked2" ng-click="Delay(3)" style="margin-top: 0;">
                                    <p  ng-if="flagcheck == 1">Waiting</p>
                                    <p  ng-if="flagcheck == 2">รออยู่แล้ว</p>
                                    <p  ng-if="flagcheck == 3">已经在等</p>
                                </label>
                            </div>
                        </div>
                </div>
            </div>
      </div>
      
    
</div>

</div>
<div modal="showModal" class="box-bg43" ng-style="">
    <div class="box-mobal43">
      
      <div class="modal-body" id="body-photo" style="padding: 0">
      <img src="images/cancel.png"  align="center" style="margin-left: 89%; margin-top: -10px;   background: #fff; border: 2px; width: 40px; border: 2px solid #ddd; border-radius: 50%;    position: absolute;" />
            <div class="box-img-photo">
                <div class="box-in-photo" >

                 
                        <p align="center" style="font-size: 18px;">
                                <span ng-if="flagcheck == 1" style="font-size: 18px;">Inform the driver </span>
                                <span ng-if="flagcheck == 2" style="font-size: 18px;">แจ้งคนขับ </span>
                                <span ng-if="flagcheck == 3" style="font-size: 18px;">通知司机</span>
                        </p>
                        <div style="background: #cae2ef;font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;">
                            <div class="bradio" style="padding-left: 0;font-size: 18px">
                                <label style="margin: 0"><input type="radio" name="chickenEgg3"  id="checked2" ng-click="Delay(1)" style="margin-top: 0;">
                                    <p  ng-if="flagcheck == 1">Delay</p>
                                    <p  ng-if="flagcheck == 2">ล่าช้า</p>
                                    <p  ng-if="flagcheck == 3">延迟</p>
                                </label>
                            </div>
                            <div class="bradio" style="padding-left: 0;font-size: 18px">
                                <label style="margin: 0"><input type="radio" name="chickenEgg3"  id="checked2" ng-click="Delay(3)" style="margin-top: 0;">
                                    <p  ng-if="flagcheck == 1">Waiting</p>
                                    <p  ng-if="flagcheck == 2">รออยู่แล้ว</p>
                                    <p  ng-if="flagcheck == 3">已经在等</p>
                                </label>
                            </div>
                        </div>
                </div>
            </div>
      </div>
      
    
</div>

</div>
<div modal="showModal" class="box-bg44" ng-style="">
    <div class="box-mobal44">
      
      <div class="modal-body" id="body-photo" style="padding: 0">
      <img src="images/cancel.png"  align="center" style="margin-left: 89%; margin-top: -10px;   background: #fff; border: 2px; width: 40px; border: 2px solid #ddd; border-radius: 50%;    position: absolute;" />
            <div class="box-img-photo">
                <div class="box-in-photo" >

                 
                        <p align="center" style="font-size: 18px;">
                                <span ng-if="flagcheck == 1" style="font-size: 18px;">Inform the driver </span>
                                <span ng-if="flagcheck == 2" style="font-size: 18px;">แจ้งคนขับ </span>
                                <span ng-if="flagcheck == 3" style="font-size: 18px;">通知司机</span>
                        </p>
                        <div style="background: #cae2ef;font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;">
                            <div class="bradio" style="padding-left: 0;font-size: 18px">
                                <label style="margin: 0"><input type="radio" name="chickenEgg3"  id="checked2" ng-click="Delay(1)" style="margin-top: 0;">
                                    <p  ng-if="flagcheck == 1">Delay</p>
                                    <p  ng-if="flagcheck == 2">ล่าช้า</p>
                                    <p  ng-if="flagcheck == 3">延迟</p>
                                </label>
                            </div>
                            <div class="bradio" style="padding-left: 0;font-size: 18px">
                                <label style="margin: 0"><input type="radio" name="chickenEgg3"  id="checked2" ng-click="Delay(3)" style="margin-top: 0;">
                                    <p  ng-if="flagcheck == 1">Waiting</p>
                                    <p  ng-if="flagcheck == 2">รออยู่แล้ว</p>
                                    <p  ng-if="flagcheck == 3">已经在等</p>
                                </label>
                            </div>
                        </div>
                </div>
            </div>
      </div>
      
    
</div>

</div>
<div modal="showModal" class="box-bg45" ng-style="">
    <div class="box-mobal45">
      
      <div class="modal-body" id="body-photo" style="padding: 0">
      <img src="images/cancel.png"  align="center" style="margin-left: 89%; margin-top: -10px;   background: #fff; border: 2px; width: 40px; border: 2px solid #ddd; border-radius: 50%;    position: absolute;" />
            <div class="box-img-photo">
                <div class="box-in-photo" >

                 
                        <p align="center" style="font-size: 18px;">
                                <span ng-if="flagcheck == 1" style="font-size: 18px;">Inform the driver </span>
                                <span ng-if="flagcheck == 2" style="font-size: 18px;">แจ้งคนขับ </span>
                                <span ng-if="flagcheck == 3" style="font-size: 18px;">通知司机</span>
                        </p>
                        <div style="background: #cae2ef;font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;">
                            <div class="bradio" style="padding-left: 0;font-size: 18px">
                                <label style="margin: 0"><input type="radio" name="chickenEgg3"  id="checked2" ng-click="Delay(1)" style="margin-top: 0;">
                                    <p  ng-if="flagcheck == 1">Delay</p>
                                    <p  ng-if="flagcheck == 2">ล่าช้า</p>
                                    <p  ng-if="flagcheck == 3">延迟</p>
                                </label>
                            </div>
                            <div class="bradio" style="padding-left: 0;font-size: 18px">
                                <label style="margin: 0"><input type="radio" name="chickenEgg3"  id="checked2" ng-click="Delay(3)" style="margin-top: 0;">
                                    <p  ng-if="flagcheck == 1">Waiting</p>
                                    <p  ng-if="flagcheck == 2">รออยู่แล้ว</p>
                                    <p  ng-if="flagcheck == 3">已经在等</p>
                                </label>
                            </div>
                        </div>
                </div>
            </div>
      </div>
      
    
</div>

</div>
<!-- END -->
        


</boby>

<script>
    $(document).ready(function(){
     function reorient(e) {
    var portrait = (window.orientation % 180 == 0);
    $("body > div").css("-webkit-transform", !portrait ? "rotate(-90deg)" : "");
  }
   $('.titledriver').each(function() {
                 var x = $(this).height();
                 console.log(x)


    });
    $('.titlehome').each(function() {
                 var x = $(this).height();
                 console.log(x)


    });
  //   window.onscroll = function() {
  //       var ani = window.pageYOffset;
  //       console.log(ani)
  //       if (window.pageYOffset >5){

  //           $('.titlehome').css({position: 'fixed', top: '0px'});
  //       }
  //   }
  //   $("#voucher").scroll(function(){
  //   var x = $(window).scrollTop();
  //   alert(x)
  //   if(x > 280){
  //     $('.box-btn-select').css('position','fixed')
  //     $('.box-btn-select').css('margin-top','100px')
      
  //     //$('.box-btn-select-submenu-tour').scrollToFixed({
  //     //marginTop:-155,
  //     //preFixed: function() { $(this).find('#tours').removeClass('.bar-1');
  //                              //$(this).find('.box-btn-select').css();
  //      // },
  //      // postFixed: function() { //$(this).find('.order_btn').css('display', 'none');
  //   }
  //   else{
  //     $('.box-btn-select').css('position','absolute')
  //     $('.box-btn-select').css('margin-top','300px')
      
              
  //   }


  // });
   var sssss = $(this).find('.titledriver').height();
   console.log(sssss)
  // window.onorientationchange = reorient;
  // window.setTimeout(reorient, 0);
     dragscrollinclude();
        //dragscrollincomment();
        bookby();
        $(".btn-save").click(function(){
            $(".btn-new").css('display','none');
        });
        $("#checkimg").click(function(){
          //alert("work")
          document.getElementById('blah2').src = "";
          document.getElementById('blah').src = "";
        });
        
         document.addEventListener("DOMContentLoaded", function(event) {
            // Grab elements, create settings, etc.
            var canvas = document.getElementById('canvas');
            var context = canvas.getContext('2d');
            var video = document.getElementById('video');
            var mediaConfig =  { video: true };
            var errBack = function(e) {
                console.log('An error has occurred!', e)
            };

            // Put video listeners into place
            if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
                navigator.mediaDevices.getUserMedia(mediaConfig).then(function(stream) {
                    video.src = window.URL.createObjectURL(stream);
                    video.play();
                });
            }

            /* Legacy code below! */
            else if(navigator.getUserMedia) { // Standard
                navigator.getUserMedia(mediaConfig, function(stream) {
                    video.src = stream;
                    video.play();
                }, errBack);
            } else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
                navigator.webkitGetUserMedia(mediaConfig, function(stream){
                    video.src = window.webkitURL.createObjectURL(stream);
                    video.play();
                }, errBack);
            } else if(navigator.mozGetUserMedia) { // Mozilla-prefixed
                navigator.mozGetUserMedia(mediaConfig, function(stream){
                    video.src = window.URL.createObjectURL(stream);
                    video.play();
                }, errBack);
            }

            // Trigger photo take
            document.getElementById('snap').addEventListener('click', function() {
                context.drawImage(video, 0, 0, 640, 480);
            });
        }, false);
        // window.frames['.vcidlode'].location.replace("http://www.google.com/");
        // //$(".vcidlode").load("http://www.google.com/");  
        // function load() {
        //     var url =  document.getElementById("iframeid").src; // <== .src

        //     //get the ifram onload url of href 
        //     //(i.e)   http://www.image.com/home.html     

        // }
        
        function dragscrollinclude() {
            $(".box-img-car").css('top','0');
            $( ".box-img-car" ).draggable({
                axis: "y",
                connectToSortable: ".box-img-car",
                drag: function(event, ui) {

                },
                stop: function( event, ui ) {
                  var sum = 0;
                $('.box-img-car').each(function() {
                    sum += $(this).height();


                });
                var lop = 0;
                if(sum>=400){
                  lop = sum ;
                  lop = sum *-1;
                  lop += 400;
                }
                else{

                 lop = 0;

                }
                console.log("lop = "+lop);

                var x = $('.box-img-car').css('top');
                x = parseInt(x);
                console.log('x is = '+x);

                if(x>0){
                  $( ".box-img-car" ).animate({
                      top:0
                      }, 300, function() {

                    });
                }

                else if(x<lop)
                {

                    $( ".box-img-car" ).animate({
                      top: lop
                      }, 300, function() {

                    });
                }
                else
                {
                    $( ".box-img-car" ).animate({
                        top: x
                        }, 200, function() {

                    });
                }

              }
            });
        }
        function dragscrollincomment() {
            $(".box-coment").css('top','0');
            $( ".box-coment" ).draggable({
                axis: "y",
                connectToSortable: ".box-coment",
                drag: function(event, ui) {

                },
                stop: function( event, ui ) {
                  var sum = 0;
                $('.box-coment').each(function() {
                    sum += $(this).height();


                });
                var lop = 0;
                if(sum>=348){
                  lop = sum ;
                  lop = sum *-1;
                  lop += 348;
                }
                else{

                 lop = 0;

                }
                console.log("lop = "+lop);

                var x = $('.box-coment').css('top');
                x = parseInt(x);
                console.log('x is = '+x);

                if(x>0){
                  $( ".box-coment" ).animate({
                      top:0
                      }, 300, function() {

                    });
                }

                else if(x<lop)
                {

                    $( ".box-coment" ).animate({
                      top: lop
                      }, 300, function() {

                    });
                }
                else
                {
                    $( ".box-coment" ).animate({
                        top: x
                        }, 200, function() {

                    });
                }

              }
            });
        };
        function bookby() {
            $(".box-img-cars").css('top','0');
            $( ".box-img-cars" ).draggable({
                axis: "y",
                connectToSortable: ".box-img-car",
                drag: function(event, ui) {

                },
                stop: function( event, ui ) {
                  var sum = 0;
                $('.box-img-cars').each(function() {
                    sum += $(this).height();


                });
                var lop = 0;
                if(sum>=2000){
                  lop = sum ;
                  lop = sum *-1;
                  lop += 200;
                }
                else{

                 lop = 0;

                }
                console.log("lop = "+lop);

                var x = $('.box-img-cars').css('top');
                x = parseInt(x);
                console.log('x is = '+x);

                if(x>0){
                  $( ".box-img-cars" ).animate({
                      top:0
                      }, 300, function() {

                    });
                }

                else if(x<lop)
                {

                    $( ".box-img-cars" ).animate({
                      top: lop
                      }, 300, function() {

                    });
                }
                else
                {
                    $( ".box-img-cars" ).animate({
                        top: x
                        }, 200, function() {

                    });
                }

              }
            });
        };
       
        var dataitem,name,nationality,tel,adults,child,infant,Total,
        service, se_include,car_type,detail,facilities,numberofcar,type_tour,from,to,
        departure_date,on_date,flight,pickup_time,time,pic_place,picto_place,bookby,confirmby;

        
        // var idvc;
        //  $("#vc_jque").val("<?=$_GET[vc];?>");
        // var foo = "<?=$_GET[vc];?>";
        // // alert(foo)
        // if(foo == undefined || foo == ''){
        //     $(".bobymain").hode();
        // }
        // else{
        //     $(".bobymain").show();
        // }
        // if (foo != "") {
        //     $.cookie('idvoucher', foo);
        //     idvc = foo;
        //     var vc_angu = $('#vc_angu').val();
        //     var vc_jque = $('#vc_jque').val();
        //     if (vc_jque != vc_angu) {
        //         // alert(vc_angu)
        //         // alert(vc_jque)
        //         window.location.reload();
        //     }
        // }
        // else{
        //     idvc = $.cookie('idvoucher');
        // }
        // console.log(idvc)
        // =================o order======================
        //var idorder;
         $("#order_jque").val("<?=$_GET[order];?>");
        var fooorder = "<?=$_GET[order];?>";
        // alert(foo)
        if(fooorder == undefined || fooorder == ''){
            $(".bobymain").hode();
        }
        else{
            $(".bobymain").show();
        }
        if (fooorder != "") {
            $.cookie('order', fooorder);
            idorder = fooorder;
            var order_angu = $('#order_angu').val();
            var order_jque = $('#order_jque').val();
            if (order_jque != order_angu) {
                // alert(vc_angu)
                // alert(vc_jque)
                window.location.reload();
            }
        }
        else{
            idorder = $.cookie('order');
        }
        console.log(idorder)
    // $.ajax({
    //     type: "POST",
    //     url: "http://t-booking.com/web/PHP/voucher.php",
    //     data: { id: idvc},
    //     headers: {
    //   "Access-Control-Allow-Origin: ": "*",
    //   "Access-Control-Allow-Methods: ": "POST",
    //   "Access-Control-Allow-Headers: ": "Authorization",
    // },
    //     dataType: "json",
    //     success: function(res){
    //         dataitem = res;
    //         console.log(res)
    //         var idvoucher = res[0].agent;
    //         var orderid = res[0].orderid;
    //         var type = res[0].type;
    //         var pickup_place = res[0].pickup_place;
    //         var program = res[0].program;
    //         var to_place = res[0].to_place;
    //         adults = res[0].adult;
    //         child = res[0].child;
    //         infant= res[0].baby;
    //         Total = res[0].total;
    //         phone = res[0].phone;
    //         nationality = res[0].web_country_name_en;
    //         name = res[0].web_book_agent_name;
    //         numberofcar = res[0].numcar;
    //         to_place = res[0].transferplace_topic_to;
    //         pickup_place = res[0].transferplace_topic;
    //         var namedriner = res[0].web_driver_name_en;

    //         var teldriver = res[0].web_driver_phone;
    //         var numcardriver = res[0].web_driver_car_num;
    //         var map_to =res[0].map_to;
    //         var map = res[0].map;
    //         if (namedriner == null || teldriver == null || numcardriver == null) {
    //             namedriner = '-';
    //             teldriver = '-';
    //             numcardriver = '-';
    //         }
    //         $("#adult").html(adults);
    //         $("#child").html(child);
    //         $("#baby").html(infant);
    //         $("#total").html(Total);
    //         $("#phone").html(phone);
    //         $("#nationality").html(nationality);
    //         $("#name").html(name);
    //         $("#numberofcar").html(numberofcar);
    //         $("#namedriner").html(namedriner);
    //         $("#teldriver").html(teldriver);
    //         $("#numcardriver").html(numcardriver);
    //         $("#to_place").html(to_place);
    //         $("#pickup_place").html(pickup_place);
            
    //         if (type == "transfer") {
    //             console.log("in case transfer")
    //             $.ajax({
    //                 type: "POST",
    //                 url: "http://t-booking.com/web/PHP/transferproduct.php",
    //                 data: { id: program},
    //                 headers: {
    //                   "Access-Control-Allow-Origin: ": "*",
    //                   "Access-Control-Allow-Methods: ": "POST",
    //                   "Access-Control-Allow-Headers: ": "Authorization",
    //                 },
    //                 dataType: "json",
    //                 success: function(res){                            
    //                     console.log(res)
    //                     service =res[0].topic_en;
    //                     se_include = res[0].web_extra_way_topic_en;
    //                     car_type =res[0].web_car_topic_en + res[0].web_car_pax;
    //                     from = res[0].web_province_name;
    //                     to = res[0].web_province_to_name;
                        
    //                     //se_include = res[0]. 
    //                     //car_type = 
    //                     $("#service").html(service);
    //                     $("#se_include").html(se_include);
    //                      $("#car_type").html(car_type);
    //                      $("#from").html(from);
    //                      $("#to").html(to);
    //                      $("#type_tour").html("Transfer");

                                       
    //                 },
    //                 failure: function(errMsg) {
    //                     console.log("err")
    //                 }
    //             });
    //         }
    //         else{
    //             console.log("in case product")
    //             $.ajax({
    //                 type: "POST",
    //                 url: "http://t-booking.com/web/PHP/webproduct.php",
    //                 data: { id: program},
    //                 headers: {
    //                   "Access-Control-Allow-Origin: ": "*",
    //                   "Access-Control-Allow-Methods: ": "POST",
    //                   "Access-Control-Allow-Headers: ": "Authorization",
    //                 },
    //                 dataType: "json",
    //                 success: function(res){                            
    //                     console.log(res)                                       
    //                 },
    //                 failure: function(errMsg) {
    //                     console.log("err")
    //                 }
    //             });

    //         }     
            
    //     },
    //     failure: function(errMsg) {
    //         console.log("err")
    //     }
    // });
     
    // $("#loadpage").bind("tap", function () {
    //         $.mobile.changePage("index.php", { transition:"slidedown"});
    // });
    $("#Guest-detail").swipeleft(function() {
        $.mobile.changePage("#voucher");
    });
    $("#Comment").swipeleft(function() {
        $.mobile.changePage("#voucher");
    });
    $("#Booking-information").swipeleft(function() {
        $.mobile.changePage("#voucher");
    });
    $("#Driver").swipeleft(function() {
        $.mobile.changePage("#voucher");
    });
    $("#Place").swipeleft(function() {
        $.mobile.changePage("#voucher");
    });
    $("#increasetime").swipeleft(function() {
        $.mobile.changePage("#voucher");
    });
    $("#Recomment").swipeleft(function() {
        $.mobile.changePage("#voucher");
    });
    $("#voucher").swipeleft(function() {
        $.mobile.changePage("#home");
    });

    
    // $('.fa-share-square-o').click(function() {
    // $('.box-bg20').show().focus();
    // });
    // $('.box-bg20').blur(function() {
    //     $(this).hide();
    // });
    
    
});

</script>
</html>

