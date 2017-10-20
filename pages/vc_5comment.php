<div data-role="page" id="Comment"  class="bg-body">
<?php $txt_name_en = "My comments"; 
$txt_name_th = "ความคิดเห็นของฉัน";
$txt_name_cn = "我的点评"; ?> 
<?php include "pages/vc_0header.php"; ?>
 
    <div class="ui-content" style="">    
    
         
        <div class="" ng-if="getcommentview.length == 0" style="padding: 3px 6px;
    border-radius: 8px;
    background: #fff;">    
            <div class="borderdetail-check">
                <!-- <div class="btn-view" ng-click="viewcomment()" ng-style="btncomview">
                    <span ng-if="flagcheck == 1"> View comment</span>
                    <span ng-if="flagcheck == 2"> ดูความคิดเห็น</span>
                    <span ng-if="flagcheck == 3"> 查看评论</span>
                    <span>({{getcommentview.length}})</span>
                </div> -->
              
                    
                    <div style="background: #eee; padding: 5px 2px; font-size: 16px;border-radius: 8px 8px 0 0;"> 
                      <img src="images/service.png" width="30" style="margin-right: 15px;">
                        <span  ng-if="flagcheck == 1">Service</span>
                        <span  ng-if="flagcheck == 2">ให้บริการ</span>
                        <span  ng-if="flagcheck == 3">服务</span>
                    </div>
                    
                    <table width="100%">
                        <tr>
                          <td align="center" style="padding: 10px;">
                              <i class="fa fa-star fa-lg dri" aria-hidden="true" ng-click="getdrivingin(1)" id="driin1"></i>
                              <i class="fa fa-star fa-lg dri" aria-hidden="true" ng-click="getdrivingin(2)" id="driin2"></i>
                              <i class="fa fa-star fa-lg dri" aria-hidden="true" ng-click="getdrivingin(3)" id="driin3"></i>
                              <i class="fa fa-star fa-lg dri" aria-hidden="true" ng-click="getdrivingin(4)" id="driin4"></i>
                              <i class="fa fa-star fa-lg dri" aria-hidden="true" ng-click="getdrivingin(5)" id="driin5"></i>
                            </td>
                        </tr>
                      
                    </table>
                   
                
                
                
                
                    <div style="background: #eee; padding: 5px 2px; font-size: 16px;border-radius: 8px 8px 0 0;">
                     <img src="images/clean.png" width="30" style="margin-right: 15px;">
                        <span  ng-if="flagcheck == 1">Cleanness</span>
                        <span  ng-if="flagcheck == 2">ความสะอาด</span>
                        <span  ng-if="flagcheck == 3">清洁</span>
                    </div>
                    

                    <table width="100%">
                        <tr>
                          <td align="center" style="padding: 10px;">
                            <i class="fa fa-star fa-lg cle" aria-hidden="true" ng-click="getcleanin(1)" id="clein1"></i>
                              <i class="fa fa-star fa-lg cle" aria-hidden="true" ng-click="getcleanin(2)" id="clein2"></i>
                              <i class="fa fa-star fa-lg cle" aria-hidden="true" ng-click="getcleanin(3)" id="clein3"></i>
                              <i class="fa fa-star fa-lg cle" aria-hidden="true" ng-click="getcleanin(4)" id="clein4"></i>
                              <i class="fa fa-star fa-lg cle" aria-hidden="true" ng-click="getcleanin(5)" id="clein5"></i>
                            </td>
                        </tr>                     
                    </table>

                    
                    <div style="background: #eee; padding: 5px 2px; font-size: 16px;border-radius: 8px 8px 0 0;">
                     <img src="images/timess.png" width="30" style="margin-right: 15px;">
                        <span  ng-if="flagcheck == 1">Punctuality</span>
                        <span  ng-if="flagcheck == 2">ตรงต่อเวลา</span>
                        <span  ng-if="flagcheck == 3">严守时间</span>
                    </div>
                    
                    <table width="100%">
                        <tr>
                          <td align="center" style="padding: 10px;">
                            <i class="fa fa-star fa-lg pun" aria-hidden="true" ng-click="punctualityin(1)" id="punin1"></i>
                              <i class="fa fa-star fa-lg pun" aria-hidden="true" ng-click="punctualityin(2)" id="punin2"></i>
                              <i class="fa fa-star fa-lg pun" aria-hidden="true" ng-click="punctualityin(3)" id="punin3"></i>
                              <i class="fa fa-star fa-lg pun" aria-hidden="true" ng-click="punctualityin(4)" id="punin4"></i> 
                              <i class="fa fa-star fa-lg pun" aria-hidden="true" ng-click="punctualityin(5)" id="punin5"></i>
                            </td>                          
                        </tr>                      
                    </table>
                  
             <div class="box-com-se">                    
                       <div style="font-size: 16px;"> 
                       <!-- <div style="margin-bottom: 10px"> <img src="images/order.png" width="30" style="margin-right: 15px;">
                        <span  ng-if="flagcheck == 1" style="color: #777">Recommendations</span>
                    <span  ng-if="flagcheck == 2" style="color:#777">ข้อเสนอแนะ</span>
                    <span  ng-if="flagcheck == 3" style="color: #777">提出建议</span>
                    </div> -->
                        <!-- <textarea   class="form-control" ng-model="comment"></textarea> -->
                        <div class="btn btn-block btn-default" ng-click="updatecommentin()" ng-style="senddata" style="margin-top: 19px;
    padding: 12px !important;
    display: block;
    background: #3b5998;
    color: #fff;" ng-if="getcommentview.length == 0">
                            <!-- <span  ng-if="flagcheck == 1">Send Data</span>
                            <span  ng-if="flagcheck == 2">ส่งข้อมูล</span>
                            <span  ng-if="flagcheck == 3">發送</span> -->
                            <i class="fa fa-paper-plane fa-lg " aria-hidden="true"></i>
                        </div>
                        <div class="btn btn-block btn-default" ng-click="Eupdatecomment()" ng-if="Ecomment" ng-dblclick="doubleClick()" style="margin-top: 19px;
    padding: 12px !important;
    display: block;
    background: #3b5998;
    color: #fff;">
                         <!--    <span  ng-if="flagcheck == 1">Send Data</span>
                            <span  ng-if="flagcheck == 2">ส่งข้อมูล</span>
                            <span  ng-if="flagcheck == 3">發送</span> -->
                            <i class="fa fa-paper-plane fa-lg " aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
        </div>
        
    </div>
    <div class="" ng-if="getcommentview.length != 0" style="
    border-radius: 8px;
    background: #fff;">
         <div class="box-in-comment" ng-repeat="item in getcommentview" style="font-size: 16px;    padding-top: 7px;">

                    <div class="bodycomment-scroll" style="background: #f0f0f0;padding: 0 6px;border-radius: 8px 8px 0 0 ">
                    <!-- <p style="font-size: 18px;color: #539bc5;"><B>Comment {{$index+1}}</p> -->
                    <div style="display: inline-block;padding: 2px 0 "> <img src="images/service.png" width="30" style="margin-right: 15px;">
                        <span  ng-if="flagcheck == 1" style="color:#777 ">Service</span>
                        <span  ng-if="flagcheck == 2" style="color: #777">ให้บริการ</span>
                        <span  ng-if="flagcheck == 3" style="color:#777">服务</span>
                    </div>
                    
                    
                    <div class="com-text" style="display: inline-block;float: right;">
                        <div class="box" ng-if="item.driver == 1" style="color: #08930e">
                           
                            
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          
                                 
                        </div>
                        <div class="box" ng-if="item.driver == 2" style="color: #08930e">
                                 
                                  
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          
                                  
                        </div>
                        <div class="box" ng-if="item.driver == 3" style="color: #08930e">
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          
                        </div>
                        <div class="box" ng-if="item.driver == 4" style="color: #08930e">
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          
                        </div>
                        <div class="box" ng-if="item.driver == 5" style="color: #08930e">
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          
                        </div>
                    </div>
                </div>
                
                
                <div style="padding: 0 6px;">
                    <div style="display: inline-block;padding: 2px 0;"> <img src="images/clean.png" width="30" style="margin-right: 15px;">
                        <span  ng-if="flagcheck == 1" style="color: #777">Cleanness</span>
                        <span  ng-if="flagcheck == 2" style="color: #777">ความสะอาด</span>
                        <span  ng-if="flagcheck == 3" style="color:#777">清洁</span>
                    </div>
                   
                    <div class="com-text" style="float: right;">
                        <div class="box" ng-if="item.clean == 1" style="color: #08930e">
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                        </div>
                        <div class="box" ng-if="item.clean == 2" style="color: #08930e">
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                        </div>
                        <div class="box" ng-if="item.clean == 3" style="color: #08930e">
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                        </div>
                        <div class="box" ng-if="item.clean == 4" style="color: #08930e">
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                        </div>
                        <div class="box" ng-if="item.clean == 5" style="color: #08930e">
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                        </div>
                        
                        
                    </div>
                    </div> 
                    <div style="display: block;background: #f0f0f0;padding: 0 6px;">
                    <div style="display: inline-block;padding: 2px 0; font-size: 16px;"> 
                        <img src="images/timess.png" width="30" style="margin-right: 15px;">
                        <span  ng-if="flagcheck == 1" style="color: #777">Punctuality</span>
                        <span  ng-if="flagcheck == 2" style="color: #777">ตรงต่อเวลา</span>
                        <span  ng-if="flagcheck == 3" style="color: #777">严守时间</span>
                   </div>
                    
                    <div class="com-text" style="float: right;">
                        <div class="box" ng-if="item.ctime == 1" style="color: #08930e">
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                        </div>
                        <div class="box" ng-if="item.ctime == 2" style="color: #08930e">
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                        </div>
                        <div class="box" ng-if="item.ctime == 3" style="color: #08930e">
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                        </div>
                        <div class="box" ng-if="item.ctime == 4" style="color: #08930e">
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                        </div>
                        <div class="box" ng-if="item.ctime == 5" style="color: #08930e">
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                          <i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
                        </div>
                   </div>
                </div>
               
             <!-- <div class="box-com-se " style="padding: 0" style="background: #f0f0f0;padding: 0 6px;">                    
                       <div style="padding: 0 6px;;font-size: 16px;"> 
                       <!-- <div> <img src="images/order.png" width="30" style="margin-right: 15px;">
                        <span  ng-if="flagcheck == 1" style="color: #777">Recommendations</span>
                    <span  ng-if="flagcheck == 2" style="color:#777">ข้อเสนอแนะ</span>
                    <span  ng-if="flagcheck == 3" style="color: #777">提出建议</span>
                        </div> 
                    
                        <p class="" col="30" row="4" ng-model="item.comment" id="" style="margin-left: 18%;font-size: 16px" ng-if="item.comment != ''">{{item.comment}}</p>
                        
                        <!-- <p class="" col="30" row="4" ng-model="item.comment" id="" style="margin-left: 18%;font-size: 16px" ng-if="item.comment == ''">
                            <span ng-if="flagcheck == 1">none</span>
                            <span ng-if="flagcheck == 2">ไม่มี</span>
                            <span ng-if="flagcheck == 3">無</span>
                        </p>  
                        
                    </div>
                </div> -->
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
     <Br/>
     <Br/>
     <Br/>
<?php include "pages/vc_9footer.php"; ?>

 </div> 