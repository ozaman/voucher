<div data-role="page" id="Recomment"  class="bg-body" ng-dblclick="doubleClick()">
<?php
$txt_name_en = "Terms of Use"; 
$txt_name_th = "ข้อกำหนดการใช้งาน";
$txt_name_cn = "服务条款"; 
?>
<?php include "pages/vc_0header.php"; ?>     
    
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

    
     
<?php include "pages/vc_9footer.php"; ?>
</div>