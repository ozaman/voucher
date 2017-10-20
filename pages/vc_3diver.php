<div data-role="page" id="Driver"  class="bg-body" ng-dblclick="doubleClick()">
<?php $txt_name_en = "Driver"; 
$txt_name_th = "คนขับ";
$txt_name_cn = "司机"; ?> 
<?php include "pages/vc_0header.php"; ?> 

    <div class="ui-content" >
    
    
        
        <div class="col">    
            <div class="borderdetail2">
                <div style=" padding-bottom: 20px; padding: 0;background: #fff;    border-radius: 8px;"  align="center">
                    <table width="100%">
                        <tr>
                            <td style="width: 31%; padding-right: 6px;">
                                <div id="img-profile" align="center" style="display: inline-block;">
                                    <img ng-src="https://goldenbeachgroup.com/admin/file/driver/pic/{{post_date}}.jpg" err-src="images/man.png" width="100%" style="border-radius: 8px;display: inline-block;">
                                </div>
                            </td>
                            <td>
                                <div  style="display: inline-block; width: 100%; padding: 0;   border: dashed 1px #ddd; border-radius: 8px;    padding-bottom: 8px;">
                        
                                <div style="width: 100%" class="{{stylecarcolor}}">
                                    <div align="center" class="carnumber" style="padding: 0;font-size: 16px;margin: 0;width: 48%;    display: inline-block; float: left;">
                                        <span class="" ng-if="flagcheck == 1">Car number</span>
                                        <span class="" ng-if="flagcheck == 2">เลขรถ </span>
                                        <span class="" ng-if="flagcheck == 3">车编号 </span>
                                        <div class="" style="border-radius: 50%; width:60px; height: 60px;    /* line-height: 2.6; */ border: 3px solid #3b5998;   background: #fff; padding: 16px;" align="center">
                                        
                                       
                                        <p style="margin: 0;color: #000 !important">
                                            <span ng-bind="web_driver_car_num"></span>
                                        </p>
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
                                        <div ng-bind="web_carall_plate_num"></div>
                                        <div ng-bind="web_carall_province"></div>
                                    </div>
                                     
                                 </div>    

                                </div>
                            </td>
                        </tr>
                        
                    </table>
                    <table width="100%" style="    margin-top: 10px;">
                        <tr>
                            <td width="10"></td>
                            <td style="padding: 5px 0;">
                                <span class="" ng-if="flagcheck == 1">First name :</span>
                                <span class="" ng-if="flagcheck == 2">ชื่อ :</span>
                                <span class="" ng-if="flagcheck == 3">名字 :</span>
                            </td>
                            <td width="10" ></td>
                            <td colspan="2">
                                    <span class="" ng-if="flagcheck == 1" ng-bind="fname"></span>
                                    <span class="" ng-if="flagcheck == 2" ng-bind="fnamet"></span>
                                    <span class="" ng-if="flagcheck == 3" ng-bind="fname"></span>
                            </td>
                            <td width="10"></td>
                            
                        </tr>
                        <tr>
                            <td width="10"></td>
                            <td style="padding: 5px 0;">
                                <span class="" ng-if="flagcheck == 1">Last name :</span>
                                <span class="" ng-if="flagcheck == 2">นามสกุล :</span>
                                <span class="" ng-if="flagcheck == 3">姓 :</span>
                            </td>
                            <td width="10" ></td>
                            <td colspan="2">
                                    <span class="" ng-if="flagcheck == 1" ng-bind="lname"></span>
                                    <span class="" ng-if="flagcheck == 2" ng-bind="lnamet"></span>
                                    <span class="" ng-if="flagcheck == 3" ng-bind="lname"></span>
                            </td>
                            <td width="10"></td>
                            
                        </tr>
                        <tr>
                            <td width="10"></td>
                            <td style="padding: 5px 0;">
                                <img src="images/phone1.png" width="29">
                            </td>
                            <td width="10" ></td>
                            <td style="padding: 5px 0;">
                                    <span ng-bind="web_driver_phone"></span>
                            </td>
                            <td width="10"></td>
                            <td>
                                <span><img src="images/phone.png" width="25"></span>
                            </td>
                            <td width="10"></td>

                            
                        </tr>
                        <tr ng-if="web_driver_line_id.length != 0 && web_driver_line_id != null">
                            <td width="10"></td>
                            <td style="padding: 5px 0;" >
                                 <img src="images/line.png" class="icon-so">
                            </td>
                            <td width="10" ></td>
                            <td >
                                    <span ng-bind="web_driver_line_id"></span>
                            </td>
                            <td width="10"></td>
                            <td align="center">
                                <span>
                                    <a href="https://line.me/ti/p/~{{web_driver_line_id}}"><i class="fa fa-plus fa-lg " aria-hidden="true" style="color: #3b5998;"></i></a>
                                </span>
                            </td>
                            <td width="10"></td>

                            
                        </tr>
                        <tr ng-if="web_driver_wechat_id.length != 0 && web_driver_wechat_id != null">
                            <td width="10"></td>
                            <td style="padding: 5px 0;">
                                 <img src="images/w.jpeg" class="icon-so">
                            </td>
                            <td width="10" ></td>
                            <td >
                                    <span ng-bind="web_driver_wechat_id"></span>
                            </td>
                            <td width="10"></td>
                            <td align="center">
                                <span>
                                    <i class="fa fa-plus fa-lg " aria-hidden="true" style="color: #3b5998;"></i>
                                </span>
                            </td>
                            <td width="10"></td>

                            
                        </tr>
                        <tr ng-if="web_driver_whatsapp_id.length != 0 && web_driver_whatsapp_id != null">
                            <td width="10"></td>
                            <td style="padding: 5px 0;">
                                 <img src="images/wa.png" class="icon-so">
                            </td>
                            <td width="10" ></td>
                            <td >
                                    <span ng-bind="web_driver_whatsapp_id"></span>
                            </td>
                            <td width="10"></td>
                            <td align="center">
                                <span>
                                <a href="whatsapp://send?text=Hello%2C%20World!"><i class="fa fa-plus fa-lg " aria-hidden="true" style="color: #3b5998;"></i></a>
                                    
                                </span>
                            </td>
                            <td width="10"></td>

                            
                        </tr>
                        <tr ng-if="web_driver_skype_id.length != 0 && web_driver_skype_id != null">
                            <td width="10"></td>
                            <td style="padding: 5px 0;">
                                  <img src="images/s.jpeg" class="icon-so">
                            </td>
                            <td width="10" ></td>
                            <td >
                                    <span ng-bind="web_driver_skype_id"></span>
                            </td>
                            <td width="10"></td>
                            <td align="center">
                                <span>
                                <a href="whatsapp://send?text=Hello%2C%20World!"><i class="fa fa-plus fa-lg " aria-hidden="true" style="color: #3b5998;"></i></a>
                                    
                                </span>
                            </td>
                            <td width="10"></td>

                            
                        </tr>
                    </table>
               


                    
                    
                    
                </div>
                <Br/>
                <div align="left" style="color: #fff;padding: 2px 5px;font-size: 15px;text-shadow: none">
                        <span  ng-if="flagcheck == 1" >Car details  </span>
                        <span  ng-if="flagcheck == 2" >ข้อมูลคนรถ</span>
                        <span  ng-if="flagcheck == 3" >车细节 </span>
                </div>
                <div style="padding: 3px 3px;  border-radius: 8px; background: #fff;">
                
                    
                    <div class="box-in-car" ng-repeat="item in gallerycar">
                    <img  src="images/carmodelicon/{{item.post_date}}.jpg" id="img-fig">
                    </div>
                  
                    
                </div>
                <Br/>
                <div align="left" style="color: #fff;padding: 2px 5px;font-size: 15px;text-shadow: none">
                    <span ng-if="flagcheck == 1">Facilitiy </span>
                    <span ng-if="flagcheck == 2">ความสะดวก </span>
                    <span ng-if="flagcheck == 3">设施</span>
                </div>

                
                <div style="padding: 3px 3px;  border-radius: 8px; background: #fff;">
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
                </div>
                <Br/>
                <div align="left" style="color: #fff;padding: 2px 5px;font-size: 15px;text-shadow: none">
                    <span ng-if="flagcheck == 1">Seating</span>
                        <span ng-if="flagcheck == 2">ที่นั่ง</span>
                        <span ng-if="flagcheck == 3">座位数</span>
                </div>
                 <div style="padding: 3px 3px;  border-radius: 8px; background: #fff;">
                     <table class="table table-striped table-hover   " style="margin-bottom: 0" width="100%">
                  <tr class="head-table-dialog" align="center" style="background-color: #ddd;">
                      
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
                      
                      <td align="center"><span ng-bind="p.plan"></span></td>
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
                     
                                           
                      
                      
                     </tr> 
                      
                
              </table>
                 </div>
               

               

            </div>
            <Br/>
            
            </div>
        </div>
        <Br/>
    <Br/>
    <Br/>
    
    
    
     
<?php include "pages/vc_9footer.php"; ?>

    
</div>