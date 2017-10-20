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
                  <span  ng-bind="tb_web_admin_company"></span>
            </td>
            <td width="10%" align="right">
                <div class="logoagent">
                    <img ng-src="admin/file/logo/crop/{{agent}}.jpg" err-src="images/ctr.jpg" width="45" height="40" ng-click="snapphoto()">
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
                    <div class="main-icon2"><i class="fa fa-cart-plus fa-lg" aria-hidden="true" style="font-size: 28px; color: #3b5998;line-height: 1;"></i> 
                    </div>
              </td>
              <td align="center" style="padding: 5px;">
                    <table width="100%">
                       <td width="50%" align="center">
                                  <span  ng-if="flagcheck == 1" class="font_size_15px" >On Date / Time</span>
                                  <span  ng-if="flagcheck == 2" class="font_size_15px">วันที่ / เวลาใช้</span>
                                  <span  ng-if="flagcheck == 3" class="font_size_15px">使用日期 / 时间</span>

                                  <span  ng-bind="outdate" class="font_size_15px" style="margin-left: 10px"></span> / <span ng-bind="airout" class="font_size_15px"></span>
                          </td>
                      
                    </table>
              </td>
              <td align="right">
                  <div class="main-icon2">
                    <i class="fa fa-share-square-o fa-2x" aria-hidden="true" ng-click="sharesocial()" style="color: #3b5998; font-size: 25px; z-index: 61;line-height: 1.4;"></i> 
                    </div>
              </td>
              <td width="3%" style="border-radius: 0 0 8px 0;"></td>
         </tr>
      </table>
      </div>
      <div style="font-size: 16px; color: rgba(255, 255, 255, 1.0); text-shadow: none;  padding: 3px 15px;    padding-bottom: 0;">
          <table width="100%" style="font-size: 15px;text-shadow: none;font-weight: 100">
      		
      			<tr>
                            <td align="center" colspan="2" style="padding-bottom: 2px;font-size: 15px; color: rgba(255, 255, 255, 1.0)">
                                  <span class="" ng-if="flagcheck == 1" ng-bind="topic_en"></span>
                                  <span class="" ng-if="flagcheck == 2" ng-bind="topic_th"></span>
                                  <span class="" ng-if="flagcheck == 3" ng-bind="topic_cn"></span>
                            </td>
                       </tr>
                       <tr>
                            <td align="left" style="color: #fff">
              
                                   <span  ng-if="flagcheck == 1" align="center">Reservation</span>
                                    <span  ng-if="flagcheck == 2" align="center">เลขการจอง</span>
                                    <span  ng-if="flagcheck == 3" align="center">预订号</span>
                                    <span ng-bind="agent_ref"></span>
                            
                           </td>
                            <td align="right" style="color: #fff">
                                  <span  ng-if="flagcheck == 1">Voucher :</span>
                                  <span  ng-if="flagcheck == 2">เลขวอเชอร์ :</span>
                                  <span  ng-if="flagcheck == 3">凭证编号 :</span>                   
                                  <span ng-bind="VOUCHER"></span>
                            </td>
                       </tr>
      		
      	</table>
                        <!-- <span  ng-if="flagcheck == 1" style="color: #539bc5;">Pick up time:</span>
                        <span  ng-if="flagcheck == 2" style="color: #539bc5;">เวลารับใช้บริการ:</span>
                        <span  ng-if="flagcheck == 3" style="color: #539bc5;">接客人时间:</span> -->
                       <!--  <span>{{airout}}</span> -->
                        
                    </div>
   
    
     <div id="icon-pageslide" align="center" data-position="fixed" >
        <div id="pagese"></div>
        <div id="pagese2" style="margin-right: 8px;"></div>
        <div id="pagese1"></div>
    </div>
     
    <div class="ui-content" style="">
    <Br/>
    
            
         
   
    <!-- <div data-role="content"> -->
        
            <ul data-role="listview" style="    padding: 0 15px;">
                <li class="box-item"  style="">
                    <a href="#Guest-detail" id="listitem" data-transition="slide" ng-click="infomationguestdetail()">
                    <div  class="main-icon">
                          <i class="fa  fa fa-users " style="font-size:25px; margin-top:10px;"  ></i></div> 
                        <span class="topic-page" ng-if="flagcheck == 1" style="margin-left:60px; ">My information</span>
                        <span class="topic-page" ng-if="flagcheck == 2"  style="margin-left:60px; ">ข้อมูลของฉัน</span>
                        <span class="topic-page" ng-if="flagcheck == 3"  style="margin-left:60px; ">我的联络资料</span>
                    </a>
                </li>
                <li class="box-item" style="">
                    <a href="#Booking-information" id="listitem" data-transition="slide">
                        <div  class="main-icon">
                          <img src="images/boolin.png" width="25" style="margin-top: 8px;"></div> 
                        <span class="topic-page" ng-if="flagcheck == 1"  style="margin-left:60px; ">This order details</span>
                        <span class="topic-page" ng-if="flagcheck == 2"  style="margin-left:60px; ">ข้อมูลการจองนี้</span>
                        <span class="topic-page" ng-if="flagcheck == 3"  style="margin-left:60px; ">这订单详情</span>
                    </a>
                </li>
                 <li class="box-item" style="">
                    <a href="#Driver" id="listitem" data-transition="slide">
                        <div  class="main-icon">
                          <img src="images/car-detail.png" width="25" style="margin-top: 8px;">
                          </div> 
                          <div class="topic-page" ng-if="flagcheck == 1" style="margin-left:60px;">Driver / Car  / Facilitiy / Seating </div>
                                      <div class="topic-page" ng-if="flagcheck == 2" style="margin-left:60px;">คนขับ / รถ / ความสะดวก / ที่นั่ง</div>
                                      <div class="topic-page" ng-if="flagcheck == 3" style="margin-left:60px;">车 / 司机 / 设施 / 座位数</div>
                        
                    </a>
                    
                </li>
                <li class="box-item" style="">
                	
                    <a href="#Place" id="listitem" data-transition="slide">
                        <div  class="main-icon">
                        <img src="images/start.png" width="25" style="margin-top: 8px;"></div>
                        <span class="topic-page" ng-if="flagcheck == 1" style="margin-left:60px;">Contact / Add Service / History</span>
                        <span class="topic-page" ng-if="flagcheck == 2" style="margin-left:60px;">ติดต่อ / เพิ่มบริการ / ประวัติ</span>
                        <span class="topic-page" ng-if="flagcheck == 3" style="margin-left:60px;">联系 / 添加服务 / 记录</span> 


                       
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
                         <span class="topic-page" ng-if="flagcheck == 1" style="margin-left:60px; ">My comments</span>
                <span class="topic-page" ng-if="flagcheck == 2" style="margin-left:60px; ">ความคิดเห็นของฉัน</span>
                <span class="topic-page" ng-if="flagcheck == 3" style="margin-left:60px; ">我的点评</span>  
                       
                        </a>
                </li>
                <li class="box-item">
                    <a href="#Recomment" id="listitem" data-transition="slide">
                                <div  class="main-icon"><div>
                               <img src="images/term.png" width="25" style="margin-top: 8px;"></div></div> 
                          
                        <span class="topic-page" ng-if="flagcheck == 1" style="margin-left:60px; ">Terms of Use</span>
                        <span class="topic-page" ng-if="flagcheck == 2" style="margin-left:60px; ">ข้อกำหนดการใช้งาน</span>
                        <span class="topic-page" ng-if="flagcheck == 3" style="margin-left:60px; ">服务条款</span>

                        </a>
                </li>
                
               
                
            </ul>
       <Br/>
    <Br/>
    <Br/>
    <Br/>
    <!-- </div> -->
    </div>
    <Br/>
    
    <?php include "pages/vc_9footer.php"; ?>
</div>