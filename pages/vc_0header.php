 
 <div class="header" style="position: fixed;font-size: 16px;z-index: 1;">    
    <table width="100%">

         <tr >
            <td width="3%"></td>
            <td width="10%" > 
                <a href="#voucher" class="home-icon" data-transition="slide" >
                     <i class="fa fa-chevron-left fa-2x" aria-hidden="true" style="color: #fff"></i>
                </a>
            </td>
            <td align="center" >
                  <span  ng-click="goFullscreen()" ng-bind="tb_web_admin_company"></span>
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
    <div class="roongheader">
      <table width="100%">
          <tr >
              <td width="3%" style="border-radius: 0 0 0 8px;"></td>
              <td align="left">
                    <div class="main-icon2"><i class="fa fa-cart-plus fa-lg" aria-hidden="true" style="font-size: 28px; color: #3b5998;line-height: 1;"></i> 
                    </div>
              </td>
              <td align="center" style="padding: 5px;">
                    <table width="100%">
                       <tr>
                            <!-- <td align="center" >
                                  <span class="" ng-if="flagcheck == 1">{{topic_en}}</span>
                                  <span class="" ng-if="flagcheck == 2">{{topic_th}}</span>
                                  <span class="" ng-if="flagcheck == 3">{{topic_cn}}</span>
                            </td> -->
                            <td width="50%" align="center">
                                  <span  ng-if="flagcheck == 1" class="font_size_15px" >On Date / Time</span>
                                  <span  ng-if="flagcheck == 2" class="font_size_15px">วันที่ / เวลาใช้</span>
                                  <span  ng-if="flagcheck == 3" class="font_size_15px">使用日期 / 时间</span>

                                  <span  ng-bind="outdate" class="font_size_15px" style="margin-left: 10px"></span> / <span ng-bind="airout" class="font_size_15px"></span>
                          </td>
                          <!-- <td align="right">
                            <span  ng-bind="outdate" class="font_size_15px"></span> / <span ng-bind="airout" class="font_size_15px"></span>
                          </td> -->
                       </tr>
                       <!-- <tr>
                            <td align="center">
                                  <span  ng-if="flagcheck == 1"><?=$txt_name_en;?></span>
                                  <span  ng-if="flagcheck == 2"><?=$txt_name_th;?></span>
                                  <span  ng-if="flagcheck == 3"><?=$txt_name_cn;?></span>                   
                                  <span >{{VOUCHER}}</span>
                            </td>
                       </tr> -->
                      
                    </table>
              </td>
              <td align="right">
                  <div class="main-icon2">
                    <i class="fa fa-share-square-o fa-2x" aria-hidden="true" ng-click="sharesocial()" style="color: #3b5998; font-size: 25px; z-index: 61;line-height: 1.4"></i>
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
      <div style="font-size: 16px; color: rgba(255, 255, 255, 1.0); text-shadow: none;  padding: 3px 15px;    padding-bottom: 0;">
      	<table width="100%">
      		<tr>
            <td align="center" style="font-size: 15px;padding-bottom: 2px; color: rgba(255, 255, 255, 1.0)" colspan="2">
                                  <span class="" ng-if="flagcheck == 1" ng-bind="topic_en"></span>
                                  <span class="" ng-if="flagcheck == 2" ng-bind="topic_th"></span>
                                  <span class="" ng-if="flagcheck == 3" ng-bind="topic_cn"></span>
                            </td>
      			
      		</tr>
          <tr>
              <td align="left" style="font-size: 15px;    color: #fff;">
                  <span  ng-if="flagcheck == 1"><?=$txt_name_en;?></span>
                  <span  ng-if="flagcheck == 2"><?=$txt_name_th;?></span>
                  <span  ng-if="flagcheck == 3"><?=$txt_name_cn;?></span>                   
                                 
              </td>
              <td align="right" style="color: #fff;font-size: 15px;">
                                  <span  ng-if="flagcheck == 1">Voucher :</span>
                                  <span  ng-if="flagcheck == 2">เลขวอเชอร์ :</span>
                                  <span  ng-if="flagcheck == 3">凭证编号 :</span>                   
                                  <span ng-bind="VOUCHER" style="font-size: 13px"></span>
                            </td>
          </tr>
      	</table>
      
                        
                        
                       
                        <!-- <span  ng-if="flagcheck == 1" style="color: #539bc5;">Pick up time:</span>
                        <span  ng-if="flagcheck == 2" style="color: #539bc5;">เวลารับใช้บริการ:</span>
                        <span  ng-if="flagcheck == 3" style="color: #539bc5;">接客人时间:</span> -->
                       <!--  <span>{{airout}}</span> -->
                        
                    </div> 
 