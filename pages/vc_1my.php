<div data-role="page" id="Guest-detail"  class="bg-body" ng-dblclick="doubleClick()">
<?php $txt_name_en = "My information"; 
$txt_name_th = "ข้อมูลของฉัน";
$txt_name_cn = "我的联络资料"; ?> 

<?php include "pages/vc_0header.php"; ?>
    <div class="ui-content" style="">
        

        <div class="col">    
            <div class="borderdetail2">
            <div style="padding: 3px 2px; background: #fff; border-radius: 8px;">
            <table style="font-size: 16px;" cellspacing="0" cellpadding="0" width="100%">
                
                <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;" ng-click="agent_guest_name(1)">
                    
                    <td width="10"></td>
                    <td width="40" style="padding: 5px 0;" valign="top"> 
                       <img src="images/name.png" width="35">
                            <!-- <span  ng-if="flagcheck == 1">Name :</span>
                            <span  ng-if="flagcheck == 2">ชื่อ :</span>
                            <span  ng-if="flagcheck == 3">客人 :</span> -->
                        
                    </td>
                    <td width="20" ></td>
                    <td valign="middle" ><span ng-bind="web_book_agent_guest"></span></td>
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
                        <div ng-if="web_country_name_en == 'China'" >
                            <img src="images/china.ico" width="25" style="display: inline-block;" />
                            <span ng-bind="web_country_name_en"></span>
                        </div>
                        
                            
                        <div ng-if="web_country_name_en == 'Thailand'" style="padding: 0;padding-left: 0">
                            <img src="images/thai.ico" width="25" style="display: inline-block;" />
                            <span ng-bind="web_country_name_en"></span>
                        </div>
                    </td>
                    <td ></td>
                    
                </tr>
                <tr style="background: #f0f0f0;border-bottom: 1px solid #ddd;" ng-click="agent_guest_name(7)">
                    <td ></td>
                    <td colspan="3">
                        <table cellspacing="0" cellpadding="0" style="margin-top: 8px;margin-bottom: 3px" width="">
                            <tr>
                                <td width="60" align="left"  >
                                        <img src="images/adult.png" width="35" style="display: inline-block;">
                                        <!-- <span  ng-if="flagcheck == 1">Adults</span>
                                        <span  ng-if="flagcheck == 2">ผู้ใหญ่</span>
                                        <span  ng-if="flagcheck == 3">成人</span> -->
                                    
                                </td>
                                <!-- <td>=</td> -->
                                <td align="center" >
                                    <span ng-bind="adult"></span>
                                    
                                    
                                </td>

                                <td width="90" align="center" >
                                        <img src="images/child.png" width="35" ng-click="agent_guest_name()" style="display: inline-block;">
                                       <!--  <span ng-if="flagcheck == 1">Child</span>
                                        <span ng-if="flagcheck == 2">เด็ก</span>
                                        <span ng-if="flagcheck == 3">儿童</span> -->
                                    
                                </td>
                                <!-- <td>=</td> -->
                                <td align="center" >
                                    <span ng-bind="child" ></span>
                                </td>
                                <td width="90" align="center" >
                                        <img src="images/infant.png" width="35" ng-click="agent_guest_name()" style="display: inline-block;">
                                        <!-- <span ng-if="flagcheck == 1">Infant</span>
                                        <span ng-if="flagcheck == 2">ทารก</span>
                                        <span ng-if="flagcheck == 3">婴儿</span> -->
                                    
                                </td>
                               <!--  <td>=</td> -->
                                <td align="center" >
                                    <span ng-bind="baby"></span>
                                </td>
                                <td align="center" width="90" >
                                        <img src="images/tatol.png" width="35">
                                        <!-- <span  ng-if="flagcheck == 1">Total</span>
                                        <span  ng-if="flagcheck == 2">ทั้งหมด</span>
                                        <span  ng-if="flagcheck == 3">总人数</span> -->
                                    
                                </td>
                               <!--  <td>=</td> -->
                                <td align="center" width="50">
                                    <span ng-bind="total"></span>
                                </td>
                            </tr>
                            <!-- <tr>
                            </tr> -->
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
                        <img src="iconstatus/flag/test_f/{{imgcoutry}}.png" width="22" style="margin-right: 5px">
                        <span ng-bind="web_book_agent_phone"></span>
                        <i ng-click="agent_guest_name(4);" class="fa fa-pencil-square-o fa-lg pull-right" style="font-size: 30px;
    margin-right: 25px;
    color: #3b5998;
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
                        
                        <img src="iconstatus/flag/test_f/{{imgcoutry2}}.png" width="22" style="margin-right: 5px">
                        <span ng-bind="local_phone"></span><i ng-click="agent_guest_name(8);" class="fa fa-pencil-square-o fa-lg pull-right" style="font-size: 30px;
    margin-right: 25px;
    color: #3b5998;
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
                         <span ng-bind="tb_web_book_agent_email"></span>
                         <i ng-click="agent_guest_name(9)" class="fa fa-pencil-square-o fa-lg pull-right" style="font-size: 30px;
    margin-right: 25px;
    color: #3b5998;
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
                       <span ng-bind="tb_web_book_agent_email2"></span>
                        <i ng-click="agent_guest_name(10)" class="fa fa-pencil-square-o fa-lg pull-right" style="font-size: 30px;
    margin-right: 25px;
    color: #3b5998;
    margin-top: 2px;
    right: 0;
    display: inline-block;
    position: absolute;" aria-hidden="true"></i>
                    </td>
                    <td width="10"></td>
                    
                </tr>
                
            </table>
            
            <table width="100%">
                <tr ng-repeat="item in socialall" style="border-bottom: 1px solid #ddd;" class="seecolor{{$index}}">
                    <td width="10"></td>
                    <td width="40"> 
                        <div class="show{{item.id}}" style="padding: 5px 0">
                            <img img src="images/social/{{item.type_icon}}" width="35" height="35">
                        </div>
                    </td>
                    <td width="20"></td>
                    <td >
                        <span ng-bind="item.web_guest_social"></span>
                        <i ng-click="editfunsocial(item)" class="fa fa-pencil-square-o fa-lg pull-right" style="font-size: 30px; margin-right: 25px; color: #3b5998; margin-top: 2px; right: 0; display: inline-block; position: absolute;" aria-hidden="true"></i>
                    </td>
                    <td width="10"></td>
                    
                </tr>
            </table>
                
               
                
            </div><Br/>
           
        <Br/>
        
    </div>
    </div>
    </div>
    <Br/> 
    <Br/> 
    <Br/> 
<?php include "pages/vc_9footer.php"; ?>
</div>