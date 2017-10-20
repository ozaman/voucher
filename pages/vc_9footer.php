     <!-- <i class="fa fa-angle-double-down" aria-hidden="true"></i> -->
     <div data-role="footer" id="footer" style="position: fixed;display: none; " ng-style="stylefooter">
        <div class="zoom-voucher">
            <i class="fa  fa-search fa-2x" ng-click="voucherdialog()" aria-hidden="true" style="" align="center" style="color: #fff"></i>
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
            <span  ng-if="flagcheck == 1" style="font-weight: 400">Real-time communication confirmation</span>
            <span ng-if="flagcheck == 2">(ใบยืนยัน)โต้ตอบแบบ<span style="font-weight: 400"> Real-time</span></span>
            <span  ng-if="flagcheck == 3">实时沟通确认单</span>
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
                <span ng-if="flagcheck == 2">ไทย</span>
                <span ng-if="flagcheck == 3">简体</span>
            </p> 
        </div>
    </div>

    

 