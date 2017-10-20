


<div class="modal fade" id="boby" role="dialog">
    <div class="modal-dialog">
	     <div class="modal-content">
	        <div class="modal-body" style="padding: 0">
	        	<i class="back_close " data-dismiss="modal">&#10006</i>
	        	<div color="#0099CC" style="font-size:18px;padding: 8px" align="center">
	        		<span>Contact Booking By</span>
	        	</div>
	        		<div class="topic_find">
						
						<div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;border-radius: 0 0 10px 10px ">       
							<div  class="topic_sup">
								<p ><!-- <img src="images/social/emails.png" width="30" /> --> &nbsp;
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
                                
								<p ><img src="images/social/1.jpg" width="30"  /> &nbsp;
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
								<p ><img src="images/social/2.jpg" width="30" /> &nbsp;
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
								<p ><img src="images/social/7.png" width="30" /> &nbsp;
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
								<p ><img src="images/social/3.jpg" width="30" /> &nbsp;
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
								<p ><img src="images/social/6.jpg" width="30"  />&nbsp;
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



<div id="conby" class="modal fade" role="dialog">
  	<div class="modal-dialog">
	    <div class="modal-content">
		    <div class="modal-body" style="padding: 0">
		        <i class="back_close " data-dismiss="modal">&#10006</i>
		        <div color="#0099CC" style="font-size:18px;padding: 10px" align="center">
		        	<span>Contact Confirm By</span>
		        </div>
		        <div class="topic_find">
						<div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;border-radius: 0 0 10px 10px;">       
							<div  class="topic_sup">
                             
								<p ><!-- <img src="images/social/emails.png" width="30" /> --> &nbsp;
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
                                
								<p ><img src="images/social/1.jpg" width="30"  /> &nbsp;
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
                                
								<p ><img src="images/social/2.jpg" width="30" /> &nbsp;
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
                                
								<p ><img src="images/social/7.png" width="30" /> &nbsp;
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
                                
								<p ><img src="images/social/3.jpg" width="30" /> &nbsp;
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
                                
								<p ><img src="images/social/6.jpg" width="30"  />&nbsp;
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

<div modal="showModal" class="box-bg7"  ng-click="cancel()" ng-style="conby" id="bg-modal">
	<div class="box-modal-top-50-lg box-modal-top-50-md box-modal-top-50-sm">  
    
		<div class="modal-body" id="body-Darrived" style="position: relative; padding: 0; ">
        
		<i class="back_close fa fa-angle-left " ng-click="cancel()" class=""></i>
			<div class="box-img-photo">
				<div class="box-in-photo" >
					<div class="topic_find">
						<p color="#0099CC" style="font-size:18px" align="center">Contact Confirm By</p>
						<div style="border: 1px solid #ddd;padding: 5px;margin-bottom: 10px;border-radius: 0 0 10px 10px;">       
							<div  class="topic_sup">
                             
								<p ><img src="images/social/emails.png" width="30" /> &nbsp;
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
                                
								<p ><img src="images/social/1.jpg" width="30"  /> &nbsp;
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
                                
								<p ><img src="images/social/2.jpg" width="30" /> &nbsp;
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
                                
								<p ><img src="images/social/7.png" width="30" /> &nbsp;
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
                                
								<p ><img src="images/social/3.jpg" width="30" /> &nbsp;
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
                                
								<p ><img src="images/social/6.jpg" width="30"  />&nbsp;
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
</div>
<!-- ************************************************************************** -->
<!-- ************************* MEETING POINT ********************************** -->
<!-- ************************************************************************** -->

<div class="modal fade" id="meeting" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body" style="padding: 0;">
         <i class="back_close " data-dismiss="modal" ng-click="cancelmeetingpoint()">&#10006</i>
         <div style="font-size: 16px;padding-top: 10px;" align="center">
                
					<span ng-if="flagcheck == 1" style="font-size: 18px;">Meeting point</span>
					<span ng-if="flagcheck == 2" style="font-size: 18px;">จุดนัดพบ</span>
					<span ng-if="flagcheck == 3" style="font-size: 18px;">迎接地点</span>
				</div>
				<img  src="images/1438171309.jpg" id="img-fig" style="padding: 5px; background: #f0f0f0; border-radius: 0 0 10px 10px;margin-bottom: 0">
        </div>
      </div>
    </div>
  </div>




<!-- ************************************************************************** -->
<!-- **************************** SIGN POINT ********************************** -->
<!-- ************************************************************************** -->

<div class="modal fade" id="sign" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body" style="padding: 0;">
         <i class="back_close " data-dismiss="modal" ng-click="cancelpickupsign()">&#10006</i>
         <div style="font-size: 16px;padding-top: 10px;" align="center">
                
					<span ng-if="flagcheck == 1" style="font-size: 18px;">Pick up sign </span>
					<span ng-if="flagcheck == 2" style="font-size: 18px;">ป้ายรับแขก </span>
					<span ng-if="flagcheck == 3" style="font-size: 18px;">接客牌 </span>
				</div>
				<img  src="images/1439701417.jpg" width="100%" style="padding: 5px;
					background: #f0f0f0;
					border-radius: 0 0 10px 10px;">
        </div>
      </div>
    </div>
  </div>



<!-- MESSAGE TO DRIVER LOCATION  -->

<div modal="showModal" class="box-bg17" ng-style="sToplace" id="bg-modal">
	<div class="box-modal-top-50-lg box-modal-top-50-md box-modal-top-50-sm">
		
		<div class="modal-body" id="body-Darrived" style="padding: 0">
		<i class="back_close fa fa-angle-left" ng-click="Toplacecancel()" class=""></i>
                <div class="box-img-photo">
				<div class="box-in-photo" >
				<div style="width: 100%;  border: 2px solid #9E9E9E; height: 300px; margin-bottom: 8px;    border-radius: 8px;">
						<iframe id="iframes" style="width: 100%;height: 100%; border:none " ng-src="{{iframe.src3 | trusted}}"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div modal="showModal" class="box-bg18" ng-click="cancel()" ng-style="infomationguest" id="bg-modal">
	<div class="box-modal-top-50-lg box-modal-top-50-md box-modal-top-50-sm">
		<div class="modal-body" id="body-Darrived" style="position: relative; padding: 0; ">
           <i class="back_close fa fa-angle-left" ng-click="cancel()" class=""></i>
			<div class="box-img-photo">
				<p align="center" style="font-size:  18px !important">
					<i class="fa  fa fa-users " style="font-size:25px; margin-top:10px;"  ></i>
					<span  ng-if="flagcheck == 1" >My information</span>
					<span  ng-if="flagcheck == 2" >ข้อมูลของฉัน</span>
					<span  ng-if="flagcheck == 3" >我的联络资料</span>
				</p>
				<div class="box-in-photo" >
					<p class="" style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;">
						<span ng-if="flagcheck == 1" >Please enter your contact information, to contact you, thank you for your cooperation.</span>
						<span ng-if="flagcheck == 2">กรุณากรอกข้อมูลการติดต่อของคุณ เพื่อง่ายต่อการติดต่อคุณ ขอขอบคุณที่ให้ความร่วมมือ</span>
						<span ng-if="flagcheck == 3">请输入您的联络资料,以方便联络你,谢谢您的合作.</span>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="voucherweb" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body" style="padding: 0;">
      		<i class="back_close " ng-click="cancelvoucherweb()" data-dismiss="modal">&#10006</i>
      		<div class="" style="font-size: 18px;padding: 10px;" align="center">
				<span ng-if="flagcheck == 1" style="font-size: 18px;">Voucher</span>
				<span ng-if="flagcheck == 2" style="font-size: 18px;">วอเชอร์</span>
				<span ng-if="flagcheck == 3" style="font-size: 18px;">凭证</span>
			</div>
			<div align="center" class="box-in-photo" style="height: 450px; overflow: hidden; overflow-y: scroll;    overflow-x: scroll;width: 100%;padding: 5px">
				<div style="position: absolute; border: 1px solid #3b5998;border-radius: 8px; padding: 5px; text-decoration: none; right: 11px; margin-top: 5px;">
					<a href="{{linkvoucher}}" " target="_blank">
						<span ng-if="flagcheck == 1" >Voucher</span>
				<span ng-if="flagcheck == 2" >วอเชอร์</span>
				<span ng-if="flagcheck == 3" >凭证</span>
					</a>
				</div>
                	<!-- <img src="http://t-booking.com/data/img/vc/1000249_8032497561.jpg"> -->
                <img src="{{getvc_web}}_{{getdate_web}}.jpg" width="100%" height="100%">

					<!-- <iframe id="iframes" ng-src="{{iframe.src | trusted}}" width="100%"></iframe> -->
					<Br/>
			</div>
      </div>
    </div>
  </div>
</div>

<div id="upphotobycompany" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body" style="padding: 0;">
      		<i class="back_close " ng-click="cancel()" data-dismiss="modal">&#10006</i>
			<div align="center" class="box-in-photo" style=" width: 100%;padding: 5px">  		
                <img align="center" ng-src="{{TB_order_agent}}.jpg" err-src="images/ctr.jpg" width="100%" height="100%" >
			</div>
      </div>
    </div>
  </div>
</div>




<!-- ************************************************************************** -->
<!-- ************************* IMAGE TO POINT  ******************************** -->
<!-- ************************************************************************** -->
	<!-- <div class="" style="background: #f0f0f0;position: fixed; top: 0; right: 0; bottom: 0; left: 0;
    padding: 0; z-index: 1800; display:block; width: 100%; height: 100%;" ng-style="styleshowimages1all">     
		<div  id="body-photo" style="padding: 0">
           <i class="back_close " ng-click="cancelstyleshowimages1all()" data-dismiss="modal">&#10006</i>
			<div style="font-size: 18px;padding: 10px" align="center">
			<img src="images/camera.png?v=" width="25" ng-click="">
					<span ng-if="flagcheck == 1" >Waiting </span>
                    <span ng-if="flagcheck == 2">ฉันรออยู่แล้ว </span>
                    <span ng-if="flagcheck == 3">我已在等</span>
            </div>
			<div class="box-img-photo" style="height: 625px; padding: 0; overflow: hidden;  overflow-y: scroll; margin-bottom: 8px">
				<div style="background: #fff;">
                
				</div>
				<p style="font-size: 18px;padding-top: 10px; padding-left: 10px;" align="left">
					<B ng-if="flagcheck == 1 || flagcheck == 2">1. </B>
					<B ng-if="flagcheck == 3">一. </B> 
					<span ng-if="flagcheck == 1">pictures of your environment</span>
					<span ng-if="flagcheck == 2">ภาพของสภาพแวดล้อมของคุณ</span>
					<span ng-if="flagcheck == 3">你的环境的图片</span>
				</p>
				<div class="box-in-photo" align="center" >
					<img align="center" ng-src="{{imagesselet}}"   style="padding: 5px; background: #f0f0f0;border-radius: 0 0 10px 10px;">
					<Br/>
				</div>
				<p style="font-size: 18px;padding-top: 10px; padding-left: 10px;" align="left">
					<B ng-if="flagcheck == 1 || flagcheck == 2">2. </B>
					<B ng-if="flagcheck == 3">二. </B>
					<span ng-if="flagcheck == 1">picture of yourself</span>
					<span ng-if="flagcheck == 2">ภาพของตัวเอง</span>
					<span ng-if="flagcheck == 3">自己的照片</span>
				</p>
				<div class="box-in-photopor" align="center">
               
					<img align="center" ng-src="{{imagesselet2}}"  style="padding: 5px; background: #f0f0f0;border-radius: 0 0 10px 10px;">
             
				</div>
			</div>
		</div> 
    
	</div>
 -->


<!-- ************************************************************************** -->
<!-- ****************************** language ********************************** -->
<!-- ************************************************************************** -->
<div id="Selectlanguage" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body" style="padding: 0;">
      		 <i class="back_close " ng-click="cancel()" data-dismiss="modal">&#10006</i>
      		 <div align="center" style="font-size: 18px; padding:10px;">
					<span ng-if="flagcheck == 1">Select language</span>
					<span ng-if="flagcheck == 2">เลือกภาษา</span>
					<span ng-if="flagcheck == 3">选择语言</span>
			</div>
			<div ng-click="language(3)" data-dismiss="modal" style="background: #f0f0f0;   padding: 5px;margin: 0;font-size: 18px;padding-left: 9px;">
						<img src="images/china.ico" width="35" style="margin-right: 5px">
						<span>简体中文</span>
					</div>
					<div ng-click="language(1)" data-dismiss="modal" style=" padding: 5px;margin: 0;font-size: 18px;padding-left: 9px;">
						<img src="images/usa.ico" width="35" style="margin-right: 5px">
						<span>English</span>
					</div>
					<p ng-click="language(2)" data-dismiss="modal"  style="background: #f0f0f0;padding: 5px;margin: 0;font-size: 18px;border-radius: 0 0 11px 11px;padding-left: 9px;">
						<img src="images/thai.ico" width="35" style="margin-right: 5px">
						<span>ภาษาไทย</span>
					</p>
      </div>
    </div>
  </div>
</div>
<div id="Explain" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body" style="padding: 0;">
      		 <i class="back_close " ng-click="cancel()" data-dismiss="modal">&#10006</i>
      		 <div align="center" style="font-size: 18px; padding:10px;">
					<span ng-if="flagcheck == 1">Explain</span>
						<span ng-if="flagcheck == 2">อธิบาย</span>
						<span ng-if="flagcheck == 3">解释</span>	
			</div>
			
      </div>
    </div>
  </div>
</div>

<!-- Change flight -->
<div class="modal fade" id="changedrivermodal" role="dialog" style="background-color: #ddd">
    <div class="modal-dialog">
      <div class="modal-content">
      		<i class="back_close " data-dismiss="modal">&#10006</i>
      		<div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;">
      		<input type="hidden" name="" value="{{VCID}}" ng-model="VCID">
				<!-- <img src="images/usercar_befor.png?v=<?=$cache;?>" width="20" align="absmiddle">  -->
				<img src="img/change.png?v=<?=$cache;?>" width="20" align="absmiddle"> 
					<span ng-if="flagcheck == 1" style="font-size: 18px;">Change flight </span>
					<span ng-if="flagcheck == 2" style="font-size: 18px;">เปลี่ยนเที่ยวบิน </span>
					<span ng-if="flagcheck == 3" style="font-size: 18px;">换航班</span>
						<img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
					<img src="images/driver.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
					</div>
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px; border-radius:  0 0 8px 8px">
							<table width="100%" style="margin-bottom: 5px">
								<tr>
									
									<td width="2%"></td>
									<td colspan="2">
										<span ng-if="flagcheck == 1" >The original flight </span>
										<span ng-if="flagcheck == 2" >เที่ยวบินเดิม </span>
										<span ng-if="flagcheck == 3" >原来的航班</span>
									</td>
									<td style="padding: 5px 0;">
													<span ng-bind="TB_order_air"></span>
									</td>
									<td width="2%"></td>
											
										
								</tr>
								<tr>
									<td width="2%"></td>
									<td colspan="2">
										<span ng-if="flagcheck == 1">Date</span>
										<span ng-if="flagcheck == 2">วันที่</span>
										<span ng-if="flagcheck == 3">日期</span>
									</td>
									<td colspan="" style="padding: 5px 0;">
										 <span ng-bind="TB_order_ondate"></span>
										 <span ng-if="TB_order_ondate == '' || TB_order_ondate == null || TB_order_ondate == undefined">-</span>
									</td>
									<td width="2%"></td>
								</tr>
								<tr>
									 <td width="2%"></td>
									 <td colspan="2">
												<span ng-if="flagcheck == 1">Time</span>
												<span ng-if="flagcheck == 2">เวลา</span>
												<span ng-if="flagcheck == 3">时间</span>
									</td>
									<td style="padding: 5px 0;">
										<span ng-bind="TB_order_air_time"></span>
										<span ng-if="TB_order_air_time == '' || TB_order_air_time == null || TB_order_air_time == undefined">-</span>
									</td>
									 <td width="2%"></td>
								</tr>
							</table>
							<table width="100%" ng-style="timedelay2" style=" border-color: #f0f0f0;border-style: none !important  " border="1">								
								<tr>
									<td width="2%"></td>
									<td colspan="2">
										<span ng-if="flagcheck == 1" >New flight </span>
										<span ng-if="flagcheck == 2" >เที่ยวบินใหม่ </span>
										<span ng-if="flagcheck == 3" >新的航班</span>
									</td>
									<td style="padding: 5px 0;">
									<input type="" class="form-control" name="" ng-model="changeflight" id="changeflight"></td>
									<td width="2%"></td>
									
								</tr>
								<tr>
									<td width="2%"></td>
									<td colspan="2">
										<span ng-if="flagcheck == 1">Date</span>
										<span ng-if="flagcheck == 2">วันที่</span>
										<span ng-if="flagcheck == 3">日期</span>
									</td>
									<td colspan="" style="padding: 5px 0;">
										<input type="date" class="form-control" id="datenewflight" ng-model="datenewflight">
										<script>
										    if (!Modernizr.touch || !Modernizr.inputtypes.date) {
										        $('input[type=date]')
										            .attr('type', 'text')
										            .datepicker({
										                // Consistent format with the HTML5 picker
										                dateFormat: 'yy-mm-dd'
										            });
										    }
										</script>
									</td>
									<td width="2%"></td>
								</tr>
								<tr>
									<td width="2%"></td>
									<td colspan="2">
										<span ng-if="flagcheck == 1">Time</span>
										<span ng-if="flagcheck == 2">เวลา</span>
										<span ng-if="flagcheck == 3">时间</span>
								</td>
								<td style="padding: 5px 0;">
									<table width="100%">
										<tr>
											<td>
											<div style="width: 20%; position: absolute; z-index: 1;    color: rgb(117, 117, 117); margin-left: 3%;   text-align: center; margin-top: 5px; pointer-events: none;   display: block; background: #fff;" ng-style="stylehour2">
													<span ng-if="flagcheck == 1">Hour</span>
													<span ng-if="flagcheck == 2">ชั่วโมง</span>
													<span ng-if="flagcheck == 3">小时</span>
											</div>
											<select class="form-control" ng-change="changenumNotify(selectnumNotify)" id="num" ng-model="selectnumNotify" data-ng-options="i  for i in num" style="display: inline-block;">
													<option value=""></option>
											</select>
										</td>
										<td><span style="padding: 3px;"> : </span></td>
										<td>
											<div style="position: absolute;  z-index: 1;    color: rgb(117, 117, 117); margin-left: 5%;  text-align: center; margin-top: 5px;    pointer-events: none; display: block;    background: #fff;" ng-style="styleminutes2" align="right">
													<span ng-if="flagcheck == 1">Minute</span>
													<span ng-if="flagcheck == 2">นาที</span>
													<span ng-if="flagcheck == 3">分钟</span>
											</div>
											<select class="form-control" ng-change="changenumNotify2(selectnumNotify2)" id="num" ng-model ="selectnumNotify2" data-ng-options="i  for i in num2" style="display: inline-block;" > 
											<option value=""  ></option> 
										</select>
									</td>
								</tr>
							</table>
						</td>
						<td width="2%"></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="3" align="center">
							<div align="center" style="margin-top: 11px;color: red">
								<span ng-if="flagcheck == 1">Your request must wait for a response from us.</span>
								<span ng-if="flagcheck == 2">คำขอของท่านต้องรอการตอบรับจากเรา</span>
								<span ng-if="flagcheck == 3">您的请求必须等待我们的答复。</span>
							</div>
    						<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="font-size: 36px;padding: 0 10px;color:#3b5998;display: none; " ng-style="stylecheckinclick"></i>
							<div class="btm-checkin" ng-style="stylecheckin2" ng-click="confirm_sendmaildelay(17,VCID)" style="    display: none;margin-top: 15px;">
								<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;" ></i>
							</div>
						</td>
						<td></td>
					</tr>
				</table>
			</div>
      	</div>
    </div>
</div>
<!-- flight delay-->
<div class="modal fade" id="flightdelaydrivermodal" role="dialog" style="background-color: #ddd">
    <div class="modal-dialog">
      <div class="modal-content">
      		<i class="back_close " data-dismiss="modal">&#10006</i>
      		<div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;">
      		<input type="hidden" name="" value="{{VCID}}" ng-model="VCID">
				
				 <img src="img/delayf.png?v=<?=$cache;?>" width="20" align="absmiddle"> 
					<span ng-if="flagcheck == 1" style="font-size: 18px;">Flight delay</span>
					<span ng-if="flagcheck == 2" style="font-size: 18px;">เที่ยวบินล่าช้า </span>
					<span ng-if="flagcheck == 3" style="font-size: 18px;">航班延误</span>
						<img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
					<img src="images/driver.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
					</div>
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px; border-radius:  0 0 8px 8px">
					<table ng-style="timedelay2" style=" border-color: #f0f0f0;border-style: none !important  " border="1">
								<tr>
									<td width="2%"></td>
									<td width="47%" align="center" style="padding-top: 15px; ">
										<div style="width: 20%; position: absolute; z-index: 1; color: rgb(117, 117, 117); margin-left: 12%; text-align: center; margin-top: 5px;pointer-events: none; display: block;background: #fff;" ng-style="stylehour2">
											<span ng-if="flagcheck == 1">Hour</span>
											<span ng-if="flagcheck == 2">ชั่วโมง</span>
											<span ng-if="flagcheck == 3">小时</span>
										</div>
										<select class="form-control" ng-change="changenumNotify(selectnumNotify)" id="num" ng-model="selectnumNotify" data-ng-options="i  for i in num" style="padding: 0 55px">
											<option value=""></option>
										</select>
									</td>
									<td width="2%" align="center" style="padding-top: 15px;" >
										<span>:</span>
									</td>
									<td width="" align="center" style="padding-top: 15px; ">
										<div style="width: 20%; position: absolute; z-index: 1;
	                                    color: rgb(117, 117, 117); margin-left: 12%; text-align: center;         margin-top: 5px;  pointer-events: none;
	                                    display: block;background: #fff;" ng-style="styleminutes2" align="right">
											<span ng-if="flagcheck == 1">Minute</span>
											<span ng-if="flagcheck == 2">นาที</span>
											<span ng-if="flagcheck == 3">分钟</span>
										</div>                     
	                                     
										<select class="form-control" ng-change="changenumNotify2(selectnumNotify2)" id="num" ng-model ="selectnumNotify2" data-ng-options="i  for i in num2" style="padding: 0 55px;" > 
											<option value=""  ></option> 
										</select>
									</td>
									<td width="2%"></td>
								</tr>
								<tr>
									<td></td>
									<td colspan="3" align="center">
										<div align="center" style="margin-top: 11px;color: red">
											<span ng-if="flagcheck == 1">Your request must wait for a response from us.</span>
											<span ng-if="flagcheck == 2">คำขอของท่านต้องรอการตอบรับจากเรา</span>
											<span ng-if="flagcheck == 3">您的请求必须等待我们的答复。</span>
										</div>
										
										
    								<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="font-size: 36px;padding: 0 10px;color:#3b5998;display: none; " ng-style="stylecheckinclick"></i>
    						
									
										<div class="btm-checkin" ng-style="stylecheckin2" ng-click="confirm_sendmaildelay(16,VCID)" style="    display: none;margin-top: 15px;">
											<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;" ></i>
										</div>
									</td>
									<td></td>
								</tr>
							</table>
						</div>
      </div>
    </div>
</div>
<!--  ******************Popup GoTo Before******************  -->
	<div class="modal fade" id="beforedrivermodal" role="dialog" style="background-color: #ddd">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <div class="modal-body" style="padding: 0;">
        <i class="back_close " ng-click="cancelid_popupbefore()" data-dismiss="modal">&#10006</i>
      		<input type="hidden" name="" value="{{VCID}}" ng-model="VCID">
         
					<div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;">
							<img src="images/usercar_befor.png?v=<?=$cache;?>" width="20" align="absmiddle"> 
							<span ng-if="flagcheck == 1" style="font-size: 18px;">Before </span>
							<span ng-if="flagcheck == 2" style="font-size: 18px;">ใช้ล่วงหน้า </span>
							<span ng-if="flagcheck == 3" style="font-size: 18px;">提前使用</span>
							<img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
							<img src="images/driver.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
					</div>
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px; border-radius:  0 0 8px 8px">
					<table ng-style="timedelay2" style=" border-color: #f0f0f0;border-style: none !important  " border="1">
								<tr>
									<td width="2%"></td>
									<td width="47%" align="center" style="padding-top: 15px; ">
										<div style="width: 20%; position: absolute; z-index: 1; color: rgb(117, 117, 117); margin-left: 12%; text-align: center; margin-top: 5px;pointer-events: none; display: block;background: #fff;" ng-style="stylehour2">
											<span ng-if="flagcheck == 1">Hour</span>
											<span ng-if="flagcheck == 2">ชั่วโมง</span>
											<span ng-if="flagcheck == 3">小时</span>
										</div>
										<select class="form-control" ng-change="changenumNotify(selectnumNotify)" id="num" ng-model="selectnumNotify" data-ng-options="i  for i in num" style="padding: 0 55px">
											<option value=""></option>
										</select>
									</td>
									<td width="2%" align="center" style="padding-top: 15px;" >
										<span>:</span>
									</td>
									<td width="" align="center" style="padding-top: 15px; ">
										<div style="width: 20%; position: absolute; z-index: 1;
	                                    color: rgb(117, 117, 117); margin-left: 12%; text-align: center;         margin-top: 5px;  pointer-events: none;
	                                    display: block;background: #fff;" ng-style="styleminutes2" align="right">
											<span ng-if="flagcheck == 1">Minute</span>
											<span ng-if="flagcheck == 2">นาที</span>
											<span ng-if="flagcheck == 3">分钟</span>
										</div>                     
	                                     
										<select class="form-control" ng-change="changenumNotify2(selectnumNotify2)" id="num" ng-model ="selectnumNotify2" data-ng-options="i  for i in num2" style="padding: 0 55px;" > 
											<option value=""  ></option> 
										</select>
									</td>
									<td width="2%"></td>
								</tr>
								<tr>
									<td></td>
									<td colspan="3" align="center">
										<div align="center" style="margin-top: 11px;color: red">
											<span ng-if="flagcheck == 1">Your request must wait for a response from us.</span>
											<span ng-if="flagcheck == 2">คำขอของท่านต้องรอการตอบรับจากเรา</span>
											<span ng-if="flagcheck == 3">您的请求必须等待我们的答复。</span>
										</div>
										
										
    								<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="font-size: 36px;padding: 0 10px;color:#3b5998;display: none; " ng-style="stylecheckinclick"></i>
    						
									
										<div class="btm-checkin" ng-style="stylecheckin2" ng-click="confirm_sendmaildelay(4,VCID)" style="    display: none;margin-top: 15px;">
											<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;" ></i>
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


<!-- <div modal="showModal" class="box-bg26" > -->
	<div class="modal-body" ng-style="id_popupbefore_toop" id="bg-modal" style="position: fixed;    top: 0; right: 0; bottom: 0; left: 0; padding: 0; z-index: 1050; display: none; width: 100%;
    height: 100%; overflow-y: scroll;  overflow-x: hidden; -webkit-overflow-scrolling: touch;">
		<div class="" id="body-photo" style="padding: 0;">
			<div class="box-img-photo">
				<div ng-style="figbeforeop" style="background-color: #fff">
					
				</div>
				<input type="hidden" name="VCID" value="{{VCID}}">
				<div class="box-in-photo" >
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;">
					<div style="">
			  			<div class="record" ng-repeat="item in getallchatservice" id="anchorbeforetoop{{item.id}}" style="border: 1px solid #ddd;  border-radius: 8px;margin-bottom: 10px;">
							                <table id="record" width="100%" style="font-size: 16px;border-color: none !important" >
				                    <tr style="background-color: #ddd;">
				                        <td width="40" style="padding: 8px 0;border-radius: 8px 0 0 0;" align="center">
				                          <div ng-if="item.comment_from == 'customer'">
				                              <img src="images/me.png?v=<?=$cache;?>" width="30"> 
				                          </div>

				                          <div ng-if="item.comment_from == 'driver'">
				                              <img src="images/driver.png?v=<?=$cache;?>" width="30"> 
				                          </div>
				                          <div ng-if="item.comment_from == 'callcenter'">
				                              <img src="images/call.png?v=<?=$cache;?>" width="30">
				                          </div>
				                          <div ng-if="item.comment_from == 'agent'">
				                              <img src="images/ser.png?v=<?=$cache;?>" width="30">
				                          </div>
				                          <div ng-if="item.comment_from == 'operator'">
				                              <img src="images/dervice P.png?v=<?=$cache;?>" width="30">
				                          </div>
				                          
				                        </td>
				                        <td width="20"></td>
				                        <td   colspan="4" style="padding: 8px 0" >
				                           <span ng-bind="item.guest"></span> 
				                        </td>
				                        <td  width="40"  align="center">
				                          <div >
				                          <img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="background:none !important;display: inline-block;" >
				                          </div>
				                          
				                          </td>
				                        <td  width="40" style="border-radius: 0 8px 0 0;" align="center">
				                               <img src="images/callchat.png?v=<?=$cache;?>" width="25" style="display: inline-block; " ng-if="item.state == 5 || item.state == 7 || item.state == 8 || item.state == 9 || item.state == 11 || item.state == 13 || item.state == 15" >
				                              <img src="images/driverchat.png?v=<?=$cache;?>" width="25" style="display: inline-block; " ng-if="item.state == 2 || item.state == 1 || item.state == 3 || item.state == 4 || item.state == 10 || item.state == 12 || item.state == 14 || item.state == 14">

				                          </td>
				                        
				                    </tr>
				                    <!-- ========= STATE !======== -->

				                    <tr ng-if="item.state == 1" style="    background: #f0f0f0;">
				                         
				                        <td  width="40" align="center" style="padding: 8px 0;">
				                            <img src="images/usercar_after.png?v=<?=$cache;?>" width="25">
				                        </td>
				                        <td  ></td>
				                        <td colspan="6" style="padding: 8px 0">
				                            
				                            <span ng-if="flagcheck == 1" >Delay </span>
				                            <span ng-if="flagcheck == 2">เลื่อนการใช้ </span>
				                            <span ng-if="flagcheck == 3">推迟使用</span>
				                            <span ng-bind="'('+item.flight_delay+')'"></span>
				                            <div style="display: inline-block;margin-left: 10px;color: #FF9800;" ng-if="item.status_confirm == 0">
				                              <span ng-if="flagcheck == 1">Wait CFM</span>
				                              <span ng-if="flagcheck == 2">รอยืนยัน</span>
				                              <span ng-if="flagcheck == 3">等确认</span>
				                            </div>
				                            <div style="display: inline-block;margin-left: 10px;color: #1db423;" ng-if="item.status_confirm == 1">
				                              <span ng-if="flagcheck == 1">Confirmed</span>
				                              <span ng-if="flagcheck == 2">ยืนยันแล้ว</span>
				                              <span ng-if="flagcheck == 3">已确认</span>
				                            </div>
				                            <span ng-bind="item.finaltime"></span>
				                        </td>
				                    </tr>
				                    <tr ng-if="item.state == 1" style="    background: #f0f0f0;">
				                       
				                      <td   width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
				                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
				                      </td>
				                      <td></td>
				                      <td colspan="5">
				                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
				                      </td>
				                      <td align="center" ng-click="locationdelayTodriver(item)" width="50">
				                          <img src="images/icon/view/map.png?v=<?=$cache;?>"  width="30">
				                      </td>
				                    </tr>


				                    <!-- ================STATE 2 ============= -->
				                    <tr ng-if="item.state == 2" style="    background: #f0f0f0;">
				                        <td  width="40" align="center" >
				                          <img src="images/all_message.png?v=<?=$cache;?>" width="25">
				                        </td>
				                        <td  ></td>
				                        <td colspan="6" style="padding: 8px 0" valign="top">
				                            <span ng-bind="item.comment"></span>
				                        </td>
				                    </tr>
				                    <tr ng-if="item.state == 2" style="    background: #f0f0f0;">
				                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
				                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
				                      </td>
				                      <td></td>
				                      <td colspan="5" style="border-radius: 0 0 8px 0;">
				                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
				                      </td>
				                      <td colspan="" align="center" width="50">
				                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationchat(item)" width="30">
				                      </td> 
				                    </tr>
				                     <!-- ================STATE 3 ============= -->
				                    
				                    <tr ng-if="item.state == 3" style="    background: #f0f0f0;">
				                        <td   width="40" align="center" style="padding: 8px 0">
				                            <img src="images/clock_wait.png?v=<?=$cache;?>" width="25">
				                        </td>
				                        <td  ></td>
				                        <td colspan="5" style="padding: 8px 0;">
				                            <span ng-if="flagcheck == 1" >Waiting </span>
				                            <span ng-if="flagcheck == 2">ฉันรออยู่แล้ว </span>
				                            <span ng-if="flagcheck == 3">我已在等</span>
				                        </td>
				                        <td align="center" width="50" ng-click="showimages1(item)"><span ></span>
				                        <img src="images/camera.png?v=<?=$cache;?>" width="25">
				                      </td>
				                    </tr>
				                    <tr ng-if="item.state == 3" style="    background: #f0f0f0;">
				                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center"  >
				                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
				                      </td>
				                      <td  ></td>
				                      <td colspan="5">
				                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
				                      </td>
				                      <td align="center"  ng-click="locationwaitTodriver(item)" width="50">
				                          <img src="images/icon/view/map.png?v=<?=$cache;?>"  width="30" >
				                      </td>
				                    </tr>
				                   
				                    <!-- ========= STATE 4======== -->
				                    <tr ng-if="item.state == 4" style="    background: #f0f0f0;">
				                         
				                        <td  width="40" align="center" style="padding: 8px 0;">
				                            <img src="images/usercar_befor.png?v=<?=$cache;?>" width="30">
				                        </td>
				                        <td  ></td>
				                        <td colspan="6" style="padding: 8px 0">
				                             <span ng-if="flagcheck == 1" >Before </span>
				                             <span ng-if="flagcheck == 2">ใช้ล่วงหน้า </span>
				                             <span ng-if="flagcheck == 3">提前使用</span>
				                             <span ng-bind="'('+item.flight_delay+')'"></span>
				                            <div style="display: inline-block;margin-left: 10px;color: #FF9800;">
				                              <span ng-if="flagcheck == 1">Wait CFM</span>
				                              <span ng-if="flagcheck == 2">รอยืนยัน</span>
				                              <span ng-if="flagcheck == 3">等确认</span>
				                            </div>
				                            <div style="display: inline-block;margin-left: 10px;color: #1db423;" ng-if="item.status_confirm == 1">
				                              <span ng-if="flagcheck == 1">Confirmed</span>
				                              <span ng-if="flagcheck == 2">ยืนยันแล้ว</span>
				                              <span ng-if="flagcheck == 3">已确认</span>
				                            </div>
				                            <span ng-bind="item.ncrefinaltime"></span>
				                        </td>
				                    </tr>
				                    <tr ng-if="item.state == 4" style="    background: #f0f0f0;">
				                      <td   width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
				                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
				                      </td>
				                      <td></td>
				                      <td colspan="5">
				                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
				                      </td>
				                      <td align="center"   ng-click="locationbeforeTodriver(item)" width="50">
				                          <img src="images/icon/view/map.png?v=<?=$cache;?>"  width="30">
				                      </td>
				                    </tr>
				                    <!-- ========= STATE 5======== -->
				                    <tr ng-if="item.state == 5" style="    background: #f0f0f0;">
				                         
				                        <td  width="40" align="center" >
				                          <img src="images/all_message.png?v=<?=$cache;?>" width="25">
				                        </td>
				                        <td  ></td>
				                        <td colspan="6" style="padding: 8px 0" valign="top">
				                            <span ng-bind="item.comment"></span>
				                        </td>
				                    </tr>
				                    <tr ng-if="item.state == 5" style="    background: #f0f0f0;">
				                      
				                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
				                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
				                      </td>
				                      <td></td>
				                      <td colspan="5" style="border-radius: 0 0 8px 0;">
				                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
				                      </td>
				                      <td colspan="" align="center" width="50">
				                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="Pickupplace(item)" width="30">
				                      </td>
				                    </tr>
				                     <tr ng-if="item.state == 10" style="    background: #f0f0f0;">
				                         
				                        <td  width="40" align="center" >
				                          <img src="images/phone.png?v=<?=$cache;?>" width="25">
				                        </td>
				                        <td  ></td>
				                        <td colspan="6" style="padding: 8px 0" valign="top">
				                            <span ng-bind="item.comment"></span>
				                        </td>
				                    </tr>
				                    <tr ng-if="item.state == 10" style="    background: #f0f0f0;">
				                      
				                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
				                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
				                      </td>
				                      <td></td>
				                      <td colspan="5" style="border-radius: 0 0 8px 0;">
				                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
				                      </td>
				                      <td colspan="" align="center" width="50">
				                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationchatusd(item)" width="30">
				                      </td>
				                    </tr>
				                    <tr ng-if="item.state == 12" style="    background: #f0f0f0;">
				                         
				                        <td  width="40" align="center" >
				                          <img src="images/all_message.png?v=<?=$cache;?>" width="25">
				                        </td>
				                        <td  ></td>
				                        <td colspan="6" style="padding: 8px 0" valign="top">
				                            <span ng-bind="item.comment"></span>
				                        </td>
				                    </tr>
				                    <tr ng-if="item.state == 12" style="    background: #f0f0f0;">
				                      
				                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
				                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
				                      </td>
				                      <td></td>
				                      <td colspan="5" style="border-radius: 0 0 8px 0;">
				                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
				                      </td>
				                      <td colspan="" align="center" width="50">
				                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationchatusd(item)" width="30">
				                      </td>
				                    </tr>
				                    <!-- *********************************************TO OP****************************** -->
				                    <tr ng-if="item.state == 8" style="    background: #f0f0f0;">
				                         
				                        <td  width="40" align="center" style="padding: 8px 0;">
				                            <img src="images/usercar_after.png?v=<?=$cache;?>" width="25">
				                        </td>
				                        <td  ></td>
				                        <td colspan="6" style="padding: 8px 0">
				                            
				                            <span ng-if="flagcheck == 1" >Delay </span>
				                            <span ng-if="flagcheck == 2">เลื่อนการใช้ </span>
				                            <span ng-if="flagcheck == 3">推迟使用</span>
				                            <span ng-bind="'('+item.flight_delay+')'"></span>
				                            <div style="display: inline-block;margin-left: 10px;color: #FF9800;" ng-if="item.status_confirm == 0">
				                              <span ng-if="flagcheck == 1">Wait CFM</span>
				                              <span ng-if="flagcheck == 2">รอยืนยัน</span>
				                              <span ng-if="flagcheck == 3">等确认</span>
				                            </div>
				                            <div style="display: inline-block;margin-left: 10px;color: #1db423;" ng-if="item.status_confirm == 1">
				                              <span ng-if="flagcheck == 1">Confirmed</span>
				                              <span ng-if="flagcheck == 2">ยืนยันแล้ว</span>
				                              <span ng-if="flagcheck == 3">已确认</span>
				                            </div>
				                            <span ng-bind="item.finaltime"></span>
				                        </td>
				                    </tr>
				                    <tr ng-if="item.state == 8" style="    background: #f0f0f0;">
				                       
				                      <td   width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
				                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
				                      </td>
				                      <td></td>
				                      <td colspan="5">
				                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
				                      </td>
				                      <td align="center" ng-click="locationdelayTodriver(item)" width="50">
				                          <img src="images/icon/view/map.png?v=<?=$cache;?>"  width="30">
				                      </td>
				                    </tr>

				                    <tr ng-if="item.state == 9" style="    background: #f0f0f0;">
				                        
				                         
				                        <td   width="40" align="center" style="padding: 8px 0">
				                            
				                                <img src="images/clock_wait.png?v=<?=$cache;?>" width="25">
				                           
				                        </td>
				                        <td  ></td>
				                        <td colspan="5" style="padding: 8px 0;">
				                            <span ng-if="flagcheck == 1" >Waiting </span>
				                            <span ng-if="flagcheck == 2">ฉันรออยู่แล้ว </span>
				                            <span ng-if="flagcheck == 3">我已在等</span>
				                        </td>
				                        
				                        <td align="center" width="50"  ng-click="showimages1_toop(item)">
				                        <img src="images/camera.png?v=<?=$cache;?>" width="25" >
				                      </td>

				                    </tr>
				                    <tr ng-if="item.state == 9" style="    background: #f0f0f0;">
				                      
				                      
				                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center"  >
				                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
				                      </td>
				                      <td  ></td>
				                      <td colspan="5">
				                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
				                      </td>
				                      <td align="center" width="50"  >
				                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationwaitToop(item)" width="30" >
				                      </td>
				                    </tr>
				                    <!-- ================STATE 7 ============= -->
				                   
				                    
				                    <tr ng-if="item.state == 7" style="    background: #f0f0f0;">
				                         
				                        <td  width="40" align="center" style="padding: 8px 0;">
				                            <img src="images/usercar_befor.png?v=<?=$cache;?>" width="25">
				                        </td>
				                        <td  ></td>
				                        <td colspan="6" style="padding: 8px 0">
				                            
				                             <span ng-if="flagcheck == 1" >Before </span>
				                             <span ng-if="flagcheck == 2">ใช้ล่วงหน้า </span>
				                             <span ng-if="flagcheck == 3">提前使用</span>
				                             <span ng-bind="'('+item.flight_delay+')'"></span>
				                            <div style="display: inline-block;margin-left: 10px;color: #FF9800;">
				                              <span ng-if="flagcheck == 1">Wait CFM</span>
				                              <span ng-if="flagcheck == 2">รอยืนยัน</span>
				                              <span ng-if="flagcheck == 3">等确认</span>
				                            </div>
				                            <span ng-bind="item.ncrefinaltime"></span>
				                        </td>
				                    </tr>
				                    <tr ng-if="item.state == 7" style="    background: #f0f0f0;">
				                       
				                      <td   width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
				                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
				                      </td>
				                      <td></td>
				                      <td colspan="5">
				                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
				                      </td>
				                      <td align="center" width="50">
				                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="Pickupplace_toop(item)" width="30">
				                      </td>
				                    </tr>
				                 
				                    
				                    
				                     <tr ng-if="item.state == 11" style="    background: #f0f0f0;">
				                         
				                        <td  width="40" align="center" >
				                          <img src="images/phone.png?v=<?=$cache;?>" width="25">
				                        </td>
				                        <td  ></td>
				                        <td colspan="6" style="padding: 8px 0" valign="top">
				                            <span ng-bind="item.comment"></span>
				                        </td>
				                       
				                        

				                    </tr>
				                    <tr ng-if="item.state == 11" style="    background: #f0f0f0;">
				                      
				                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
				                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
				                      </td>
				                      <td></td>
				                      <td colspan="5" style="border-radius: 0 0 8px 0;">
				                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
				                      </td>
				                      <td colspan="" align="center" width="50">
				                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="Pickupplace(item)" width="30">
				                      </td>
				                    </tr>
				                    <tr ng-if="item.state == 13" style="    background: #f0f0f0;">
				                         
				                        <td  width="40" align="center" >
				                          <img src="images/all_message.png?v=<?=$cache;?>" width="25">
				                        </td>
				                        <td  ></td>
				                        <td colspan="6" style="padding: 8px 0" valign="top">
				                            <span ng-bind="item.comment"></span>
				                        </td>
				                       
				                        

				                    </tr>
				                    <tr ng-if="item.state == 13" style="    background: #f0f0f0;">
				                      
				                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
				                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
				                      </td>
				                      <td></td>
				                      <td colspan="5" style="border-radius: 0 0 8px 0;">
				                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
				                      </td>
				                      <td colspan="" align="center" width="50">
				                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="Pickupplace(item)" width="30">
				                      </td>
				                    </tr>
				                    <tr ng-if="item.state == 14" style="    background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 35px; color: #3b5998;"></i>
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
							<span ng-if="flagcheck == 1">Location share</span>
							<span ng-if="flagcheck == 2">แชร์ตำแหน่ง</span>
							<span ng-if="flagcheck == 3">位置共享</span>
                        </td>
                       
                        

                    </tr>
                    <tr ng-if="item.state == 14" style="    background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" style="border-radius: 0 0 8px 0;">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="Pickupplace(item)" width="30">
                      </td>
                    </tr>
                    <tr ng-if="item.state == 15" style="    background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 35px; color: #3b5998;"></i>
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
							<span ng-if="flagcheck == 1">Location share</span>
							<span ng-if="flagcheck == 2">แชร์ตำแหน่ง</span>
							<span ng-if="flagcheck == 3">位置共享</span>
                        </td>
                       
                        

                    </tr>
                    <tr ng-if="item.state == 15" style="    background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" style="border-radius: 0 0 8px 0;">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="Pickupplace(item)" width="30">
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
	<!-- popplacelocation  -->
	<div id="locationdrivermodal" class="modal fade" role="dialog">
  	<div class="modal-dialog">
	    <div class="modal-content">
	    	
	    	<div class="modal-body" style="padding: 0">
	    	<i class="back_close " data-dismiss="modal" ng-click="cancellocation()">&#10006</i>
      		<input type="hidden" name="" value="{{VCID}}" ng-model="VCID">

        		<div align="center" style="font-size: 18px;padding: 8px;">
					<span ng-if="flagcheck == 1">Location</span>
					<span ng-if="flagcheck == 2">ตำแหน่งที่ตั้ง</span>
					<span ng-if="flagcheck == 3">地点</span>
				</div>
				<div class="box-in-Darrived" style="    padding: 0 8px;    padding-bottom: 1px;">

					<!-- <div class="record" ng-repeat="item in itemmap"> -->
                	 
                <table id="record" width="100%" style="margin-bottom: 10px;font-size: 16px;border-color: none !important" ><!-- <span ng-class="{evendelay: $even, odddelay: $odd}"></span> -->
                    
                    <tr style="background-color: #fff;">
                        <!-- <td width="10%"  align="center">
                           <div class="box-index-rec">{{$index+1}}</div>
                           
                        </td> -->
                        <td width="40" style="padding: 8px 0;border-radius: 8px 0 0 0;" align="center">
                          <div ng-if="itemmap.comment_from == 'customer'">
                              <img src="images/me.png?v=<?=$cache;?>" width="30"> 
                          </div>

                          <div ng-if="itemmap.comment_from == 'driver'">
                              <img src="images/driver.png?v=<?=$cache;?>" width="30"> 
                          </div>
                          <div ng-if="itemmap.comment_from == 'callcenter'">
                              <img src="images/call.png?v=<?=$cache;?>" width="30">
                          </div>
                          <div ng-if="itemmap.comment_from == 'agent'">
                              <img src="images/ser.png?v=<?=$cache;?>" width="30">
                              <!-- <span ng-if="flagcheck == 1">Agent</span> 
                              <span ng-if="flagcheck == 2">代理</span> 
                              <span ng-if="flagcheck == 3">服务提供者</span>  -->
                          </div>
                          <div ng-if="itemmap.comment_from == 'operator'">
                              <img src="images/dervice P.png?v=<?=$cache;?>" width="30">
                          </div>
                          
                        </td>
                        <td width="20"></td>
                        <td   colspan="4" style="padding: 8px 0" >
                           <span ng-bind="itemmap.guest"></span> 
                        </td>
                        <td  width="40"  align="center">
                          <div >
                          <img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="background:none !important;display: inline-block;" >
                          </div>
                          
                          </td>
                        <td  width="40" style="border-radius: 0 8px 0 0;" align="center">
                              <img src="images/callchat.png?v=<?=$cache;?>" width="25" style="display: inline-block; " ng-if="itemmap.state == 5 || itemmap.state == 11 || itemmap.state == 15" >
                              <img src="images/driverchat.png?v=<?=$cache;?>" width="25" style="display: inline-block;" ng-if="itemmap.state == 2 || itemmap.state == 1 || itemmap.state == 3 || itemmap.state == 4 || itemmap.state == 5 || itemmap.state == 10 || itemmap.state == 14" >

                          </td>
                        <!-- <td align="center"><span ng-if="item.state==3"><img ng-src="http://t-booking.com/web/v1/PHP/fileUpload/{{item.yourself_post_date}}.jpg" width="28" height="28" ng-click="showimages2(item.yourself_post_date)" ng-show="item.yourself_post_date != '' && item.yourself_post_date != undefined" style="border-radius: 8px;"></span></td> -->
                        
                    </tr>
                    <!-- ========= STATE !======== -->

                    <tr ng-if="itemmap.state == 1" style="    background: #f0f0f0;">
                         
                        <td  width="40" align="center" style="padding: 8px 0;">
                            <img src="images/usercar_after.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0">
                            <span ng-if="flagcheck == 1" >Delay </span>
                            <span ng-if="flagcheck == 2">เลื่อนการใช้ </span>
                            <span ng-if="flagcheck == 3">推迟使用</span>
                            <span ng-bind="'('+itemmap.flight_delay+')'"></span>
                            <div style="display: inline-block;margin-left: 10px;color: #FF9800;">
                            	<span ng-if="flagcheck == 1">Wait CFM</span>
                            	<span ng-if="flagcheck == 2">รอยืนยัน</span>
                            	<span ng-if="flagcheck == 3">等确认</span>
                            </div>
                            <span ng-bind="itemmap.finaltime"></span>
                        </td>
                        

                    </tr>
                    <tr ng-if="itemmap.state == 1" style="    background: #f0f0f0;">
                       
                      <td   width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5">
                          <span ng-bind="itemmap.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td align="center" width="50" >
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="Pickupplace(itemmap)" width="30">
                      </td>
                    </tr>
                    <tr ng-if="itemmap.state == 8" style="    background: #f0f0f0;">
                         
                        <td  width="40" align="center" style="padding: 8px 0;">
                            <img src="images/usercar_after.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0">
                            
                             
                            <span ng-if="flagcheck == 1" >Delay </span>
                            <span ng-if="flagcheck == 2">เลื่อนการใช้ </span>
                            <span ng-if="flagcheck == 3">推迟使用</span>
                            <span ng-bind="'('+itemmap.flight_delay+')'"></span>
                            <div style="display: inline-block;margin-left: 10px;color: #FF9800;">
                            	<span ng-if="flagcheck == 1">Wait CFM</span>
                            	<span ng-if="flagcheck == 2">รอยืนยัน</span>
                            	<span ng-if="flagcheck == 3">等确认</span>
                            </div>
                            <span ng-bind="itemmap.finaltime"></span>
                        </td>
                        

                    </tr>
                    <tr ng-if="itemmap.state == 8" style="    background: #f0f0f0;">
                       
                      <td   width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5">
                          <span ng-bind="itemmap.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td align="center" width="50">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="Pickupplace(itemmap)" width="30">
                      </td>
                    </tr>


                    <!-- <tr ng-if="item.state == 1" style="    background: #f0f0f0;">
                        
 
                        <td  width="40" align="center" style="padding: 8px 0;">
                           <img src="images/usercar_after.png?v=<?=$cache;?>" width="30">
                        </td>
                        <td></td>
                        <td colspan="4" style="padding: 8px 0">
                            
                            <span  ng-if="flagcheck == 1">Notification Delay car use</span>
                            <span  ng-if="flagcheck == 2">ใช้รถล่าช้า</span>
                            <span  ng-if="flagcheck == 3">延迟使用车</span>
                        </td>
                        <td align="center">
                            <img src="images/timedelay.png?v=<?=$cache;?>" width="30" style="display: inline-block;">
                        </td>
                        <td align="center" width="20">{{item.flight_delay }}</td>

                    </tr>
                    <tr ng-if="item.state == 1" style="    background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px; " align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="30">
                      </td>
                      <td></td>
                      <td colspan="5">
                          <span>{{item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm' }}</span>
                      </td>
                      <td align="center" width="20%" style="border-radius: 0 0 8px 0;">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="Pickupplace(item)" width="30">
                      </td>
                    </tr> -->
                    <!-- ================STATE 2 ============= -->
                    <tr ng-if="itemmap.state == 3" style="    background: #f0f0f0;">
                        
                         
                        <td   width="40" align="center" style="padding: 8px 0">
                            
                                <img src="images/clock_wait.png?v=<?=$cache;?>" width="25">
                           
                        </td>
                        <td  ></td>
                        <td colspan="5" style="padding: 8px 0;">
                            <!-- <span ng-if="flagcheck == 1" >Inform the driver </span>
                            <span ng-if="flagcheck == 2">แจ้งคนขับ </span>
                            <span ng-if="flagcheck == 3">通知司机</span> /  -->
                            <span ng-if="flagcheck == 1" >Waiting </span>
                                                    <span ng-if="flagcheck == 2">ฉันรออยู่แล้ว </span>
                                                    <span ng-if="flagcheck == 3">我已在等</span>
                        </td>
                        
                        <td align="center" width="50" ng-click="showimages1(item)">
                        <img src="images/camera.png?v=<?=$cache;?>" width="25" ng-click="showimages1(itemmap)">
                      </td>

                    </tr>
                    <tr ng-if="itemmap.state == 3" style="    background: #f0f0f0;">
                      
                      
                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center"  >
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td  ></td>
                      <td colspan="5">
                          <span ng-bind="itemmap.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td align="center" width="50">
                          <!-- <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="Pickupplace(itemmap)" width="30" style="margin-right: 5px"> -->
                      </td>
                    </tr>
                    <!-- ================STATE 3 ============= -->
                    <tr ng-if="item.state == 2" style="    background: #f0f0f0;">
                        
                         
                        <td  width="40" align="center" >
                          <img src="images/all_message.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <span ng-bind="itemmap.comment"></span>
                        </td>
                       
                        

                    </tr>
                    <tr ng-if="item.state == 2" style="    background: #f0f0f0;">
                       
                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" style="border-radius: 0 0 8px 0;">
                          <span ng-bind="itemmap.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationchat(item)" width="30">
                      </td>
                    </tr>
                    <!-- ========= STATE 4======== -->
                    <tr ng-if="itemmap.state == 4" style="    background: #f0f0f0;">
                         
                        <td  width="40" align="center" style="padding: 8px 0;">
                            <img src="images/usercar_befor.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0">
                            <!-- <span ng-if="flagcheck == 1" >Inform the driver </span>
                            <span ng-if="flagcheck == 2">แจ้งคนขับ </span>
                            <span ng-if="flagcheck == 3">通知司机</span> /  -->
                             <span ng-if="flagcheck == 1" >Before </span>
                             <span ng-if="flagcheck == 2">ใช้ล่วงหน้า </span>
                             <span ng-if="flagcheck == 3">提前使用</span>
                             <span ng-bind="'('+itemmap.flight_delay+')'"></span>
                            <div style="display: inline-block;margin-left: 10px;color: #FF9800;">
                            	<span ng-if="flagcheck == 1">Wait CFM</span>
                            	<span ng-if="flagcheck == 2">รอยืนยัน</span>
                            	<span ng-if="flagcheck == 3">等确认</span>
                            </div>
                            <span ng-bind="itemmap.ncrefinaltime"></span>
                        </td>
                        

                    </tr>
                    <tr ng-if="itemmap.state == 4" style="    background: #f0f0f0;">
                       
                      <td   width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5">
                          <span ng-bind="itemmap.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td align="center" width="50">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="Pickupplace(itemmap)" width="30">
                      </td>
                    </tr>
                    <!-- ========= STATE 5======== -->
                    <tr ng-if="itemmap.state == 5" style="    background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <img src="images/all_message.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <span ng-bind="itemmap.comment"></span>
                        </td>
                       
                        

                    </tr>
                    <tr ng-if="itemmap.state == 5" style="    background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="6" style="border-radius: 0 0 8px 0;">
                          <span ng-bind="itemmap.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <!-- <td colspan="2" align="right">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="Pickupplace(item)" width="30">
                      </td> -->
                    </tr>
                    <!-- ================STATE 10 ============= -->
                    <tr ng-if="itemmap.state == 10" style="    background: #f0f0f0;">
                        
                         
                        <td  width="40" align="center" >
                          <img src="images/phone.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <span ng-bind="itemmap.comment"></span>
                        </td>
                       
                        

                    </tr>
                    <tr ng-if="itemmap.state == 10" style="    background: #f0f0f0;">
                       
                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" style="border-radius: 0 0 8px 0;">
                          <span ng-bind="itemmap.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationchat(item)" width="30">
                      </td>
                    </tr>
                    <tr ng-if="itemmap.state == 11" style="    background: #f0f0f0;">
                        
                         
                        <td  width="40" align="center" >
                          <img src="images/phone.png?v=<?=$cache;?>" width="25">
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
                            <span ng-bind="itemmap.comment"></span>
                        </td>
                       
                        

                    </tr>
                    <tr ng-if="itemmap.state == 11" style="    background: #f0f0f0;">
                       
                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" style="border-radius: 0 0 8px 0;">
                          <span ng-bind="itemmap.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationchat(item)" width="30">
                      </td>
                    </tr>
                    <tr ng-if="itemmap.state == 13" style="    background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 35px; color: #3b5998;"></i>
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
							<span ng-if="flagcheck == 1">Location share</span>
							<span ng-if="flagcheck == 2">แชร์ตำแหน่ง</span>
							<span ng-if="flagcheck == 3">位置共享</span>
                        </td>
                       
                        

                    </tr>
                    <tr ng-if="itemmap.state == 13" style="    background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" style="border-radius: 0 0 8px 0;">
                          <span ng-bind="itemmap.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50">
                          <!-- <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="Pickupplace(item)" width="30"> -->
                      </td>
                    </tr>
                    <tr ng-if="itemmap.state == 14" style="    background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 35px; color: #3b5998;"></i>
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
							<span ng-if="flagcheck == 1">Location share</span>
							<span ng-if="flagcheck == 2">แชร์ตำแหน่ง</span>
							<span ng-if="flagcheck == 3">位置共享</span>
                        </td>
                       
                        

                    </tr>
                    <tr ng-if="itemmap.state == 14" style="    background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" style="border-radius: 0 0 8px 0;">
                          <span ng-bind="itemmap.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50">
                          <!-- <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="Pickupplace(item)" width="30"> -->
                      </td>
                    </tr>
                    <tr ng-if="itemmap.state == 15" style="    background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 35px; color: #3b5998;"></i>
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
							<span ng-if="flagcheck == 1">Location share</span>
							<span ng-if="flagcheck == 2">แชร์ตำแหน่ง</span>
							<span ng-if="flagcheck == 3">位置共享</span>
                        </td>
                       
                        

                    </tr>
                    <tr ng-if="itemmap.itemmap == 15" style="    background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" style="border-radius: 0 0 8px 0;">
                          <span ng-bind="itemmap.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="Pickupplace(item)" width="30">
                      </td>
                    </tr>
                
                </table>
                
					<div style="width: 100%;  border: 2px solid #9E9E9E; height: 472px; margin-bottom: 8px;    border-radius: 8px;">
						<iframe id="iframes" ng-src="{{iframe.src2 | trusted}}"  style="width: 100%;
    height: 100%; border:none "></iframe>
						
					</div>
               
                 
                  
				</div>
      		</div>
	    </div>
   	</div>
</div>
<!-- </div> -->
<div id="landingdrivermodal" class="modal fade" role="dialog">
  	<div class="modal-dialog">
	    <div class="modal-content">
	    	
	    	<div class="modal-body" style="padding: 0">	    	
        		<i class="back_close " data-dismiss="modal">&#10006</i>
      		<input type="hidden" name="" value="{{VCID}}" ng-model="VCID">

      		<div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;background-color: #fff;border-radius: 8px 8px 0 0;">
						<!-- <img src="img/landing.png?v=<?=$cache;?>" width="20" align="absmiddle"> -->
						<span ng-if="flagcheck == 1" style="font-size: 18px;">Landing</span>
						<span ng-if="flagcheck == 2" style="font-size: 18px;">เครื่องบินลงจอด </span>
						<span ng-if="flagcheck == 3" style="font-size: 18px;">飞机降落</span>
						<!-- <img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
						<img src="images/driver.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >  -->
					</div>
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;border-radius: 0 0 8px 8px">
						<!-- <table width="100%" style="margin-top: 10px;margin-bottom: 10px;">
					   		<tr>
					   			<td width="10"></td>
					   			<td align="left" >
					   				<div style="float: left; padding: 9px 12px; background: #22407f;    text-shadow: none; border-radius: 8px; color: #fff;outline: none" ng-click="btnlandingdrivermodal()" ng-style="btnfrelanding">
					   					<span ng-if="flagcheck == 1">Frequently used</span>
					   					<span ng-if="flagcheck == 2">ข้อความที่ใช้บ่อย</span>
					   					<span ng-if="flagcheck == 3">常用信息</span>
					   				</div>
					   			</td>
					   			<td width="10"></td>
					   			<td align="center">
					   				<div style="padding: 9px 12px; background: #3b5998; text-shadow: none;    border-radius: 8px; color: #fff;outline: none;" ng-click="btnMessagelandingdrivermodal()" ng-style="btnchatlanding">
					   					<span ng-if="flagcheck == 1">Chat</span>
					   					<span ng-if="flagcheck == 2">แชท</span>
					   					<span ng-if="flagcheck == 3">聊</span>
					   				</div>
					   			</td>
					   			
					   			<td width="10"></td>
					   		</tr>
					   </table> -->
					   <div style="padding: 5px 9px;display: none;" ng-style="frequentlyusedlanding" >
						   <div style="border: solid 2px #3b5998;height: 285px;border-radius: 8px;overflow: auto; display: none;margin-bottom: 11px;margin-top: 7px;" ng-style="sdatamessagelanding" >
						   		<ul ng-repeat="item in messagedata" ng-class="{evenmesage: $even, oddmesage: $odd}" >
						   			<li ng-if="flagcheck == 1" ng-bind="$index+1+'.'+item.topic_en" ng-click="selectmessage(item)"></li>
						   			<li ng-if="flagcheck == 2" ng-bind="$index+1+'.'+item.topic_th" ng-click="selectmessage(item)"></li>
						   			<li ng-if="flagcheck == 3" ng-bind="$index+1+'.'+item.topic_cn" ng-click="selectmessage(item)"></li>
						   		</ul>
						   	</div>
						   	<div style="border: solid 2px #3b5998;height: 285px;border-radius: 8px;overflow: auto; display: block;margin-bottom: 11px;margin-top: 7px;" ng-style="sdatamessagelanding_store" >
						   	<!-- <div style="font-size: 17px;"><i class="fa fa-angle-left" ng-click="btnFrequentlyused()" style="padding: 10px 10px;"></i><span ng-bind="headersmessage"></span></div> -->
						   		<ul ng-repeat="item in messagedataStore" ng-class="{evenmesage: $even, oddmesage: $odd}" >
						   			<li ng-if="flagcheck == 1" ng-bind="$index+1+'.'+item.topic_en" ng-click="selectmessagelanding_store(item)"></li>
						   			<li ng-if="flagcheck == 2" ng-bind="$index+1+'.'+item.topic_th" ng-click="selectmessagelanding_store(item)"></li>
						   			<li ng-if="flagcheck == 3" ng-bind="$index+1+'.'+item.topic_cn" ng-click="selectmessagelanding_store(item)"></li>
						   		</ul>
						   	</div>
						   	<div style="width: 100%;top: 420px;position: absolute;display: none;" align="center" ng-style="spintakechattodriverselect">
    						<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"></i>
    						</div>
						   	<div ng-style="havedatamessagelanding" align="center" style="margin-top: 15px;">
						   		<textarea class="form-control" rows="2" id="comment"  ng-style="" style="margin-bottom: 10px;border-radius: 8px; pointer-events: none;" value="{{SELmessage_store}}" ng-model="SELmessage_store"></textarea>
						   		<div class="btm-checkin" ng-click="confirm_sendmaildelay(18,VCID)" style="margin-top: 15px;" >
									<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;"></i>
								</div>
							</div>
					   </div>
					    <div style="width: 100%;top: 154px;position: absolute;display: none;" align="center" ng-style="spintakechattodriver">
    						<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"  ></i>
    					</div>
						<div style="padding: 5px 9px;margin-top: 9px;display: none" ng-style="messagelanding">
							<textarea class="form-control" rows="5" id="comment" ng-model="comdriver" ng-change="YourOwnComments(comdriver)" ng-style="owncomments" style="margin-bottom: 10px;border-radius: 8px;"></textarea>
							<div class="btm-checkin" ng-click="confirm_sendmaildelay(2,VCID)" style="display: none;margin-top: 15px;" ng-style="confirmcommenttoderiver">
								<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;"></i>
							</div>
						</div>
					</div>
      		</div>
	    </div>
   	</div>
</div>
<div id="lostdrivermodal" class="modal fade" role="dialog">
  	<div class="modal-dialog">
	    <div class="modal-content">
	    	<div class="modal-body" style="padding: 0">
	    	<i class="back_close " data-dismiss="modal">&#10006</i>
      		<input type="hidden" name="" value="{{VCID}}" ng-model="VCID">

        		<div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;background-color: #fff;border-radius: 8px 8px 0 0;">
						<img src="img/lost.png?v=<?=$cache;?>" width="20" align="absmiddle">
						<span ng-if="flagcheck == 1" style="font-size: 18px;">Lost</span>
						<span ng-if="flagcheck == 2" style="font-size: 18px;">ลืมของ </span>
						<span ng-if="flagcheck == 3" style="font-size: 18px;">丢失</span>
						<img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
						<img src="images/driver.png?v=<?=$cache;?>" width="20" style="display: inline-block;" > 
					</div>
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;border-radius: 0 0 8px 8px">
						<table width="100%" style="margin-top: 10px;margin-bottom: 10px;">
					   		<tr>
					   			<td width="10"></td>
					   			<td align="left" >
					   				<div style="float: left; padding: 9px 12px; background: #22407f;    text-shadow: none; border-radius: 8px; color: #fff;outline: none;" ng-click="btnlostdrivermodal()" ng-style="btnfrelost">
					   					<span ng-if="flagcheck == 1">Frequently used</span>
					   					<span ng-if="flagcheck == 2">ข้อความที่ใช้บ่อย</span>
					   					<span ng-if="flagcheck == 3">常用信息</span>
					   				</div>
					   			</td>
					   			<td width="10"></td>
					   			<td align="center">
					   				<div style="padding: 9px 12px; background: #3b5998; text-shadow: none;    border-radius: 8px; color: #fff;outline: none;" ng-click="btnMessagelostdrivermodal()" ng-style="btnchatlost">
					   					<span ng-if="flagcheck == 1">Chat</span>
					   					<span ng-if="flagcheck == 2">แชท</span>
					   					<span ng-if="flagcheck == 3">聊</span>
					   				</div>
					   			</td>
					   			
					   			<td width="10"></td>
					   		</tr>
					   </table>
					   <div style="padding: 5px 9px;display: none;" ng-style="frequentlyusedlost" >
						   <div style="border: solid 2px #3b5998;height: 285px;border-radius: 8px;overflow: auto; display: none;margin-bottom: 11px;margin-top: 7px;" ng-style="sdatamessagelost" >
						   		<ul ng-repeat="item in messagedata" ng-class="{evenmesage: $even, oddmesage: $odd}" >
						   			<li ng-if="flagcheck == 1" ng-bind="$index+1+'.'+item.topic_en" ng-click="selectmessage(item)"></li>
						   			<li ng-if="flagcheck == 2" ng-bind="$index+1+'.'+item.topic_th" ng-click="selectmessage(item)"></li>
						   			<li ng-if="flagcheck == 3" ng-bind="$index+1+'.'+item.topic_cn" ng-click="selectmessage(item)"></li>
						   		</ul>
						   	</div>
						   	<div style="border: solid 2px #3b5998;height: 285px;border-radius: 8px;overflow: auto; display: none;margin-bottom: 11px;margin-top: 7px;" ng-style="sdatamessagelost_store" >
						   	<!-- <div style="font-size: 17px;"><i class="fa fa-angle-left" ng-click="btnFrequentlyused()" style="padding: 10px 10px;"></i><span ng-bind="headersmessage"></span></div> -->
						   		<ul ng-repeat="item in messagedataStore" ng-class="{evenmesage: $even, oddmesage: $odd}" >
						   			<li ng-if="flagcheck == 1" ng-bind="$index+1+'.'+item.topic_en" ng-click="selectmessagelost_store(item)"></li>
						   			<li ng-if="flagcheck == 2" ng-bind="$index+1+'.'+item.topic_th" ng-click="selectmessagelost_store(item)"></li>
						   			<li ng-if="flagcheck == 3" ng-bind="$index+1+'.'+item.topic_cn" ng-click="selectmessagelost_store(item)"></li>
						   		</ul>
						   	</div>
						   	<div style="width: 100%;top: 420px;position: absolute;display: none;" align="center" ng-style="spintakechattodriverselect">
    						<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"></i>
    						</div>
						   	<div ng-style="havedatamessagelost" align="center" style="margin-top: 15px;">
						   		<textarea class="form-control" rows="2" id="comment"  ng-style="" style="margin-bottom: 10px;border-radius: 8px; pointer-events: none;" value="{{SELmessage_store}}" ng-model="SELmessage_store"></textarea>
						   		<div class="btm-checkin" ng-click="confirm_sendmaildelay(20,VCID)" style="margin-top: 15px;" >
									<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;"></i>
								</div>
							</div>
					   </div>
					    <div style="width: 100%;top: 154px;position: absolute;display: none;" align="center" ng-style="spintakechattodriver">
    						<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"  ></i>
    					</div>
						<div style="padding: 5px 9px;margin-top: 9px;" ng-style="messagelost">
							<textarea class="form-control" rows="5" id="comment" ng-model="comdriver" ng-change="YourOwnComments(comdriver)" ng-style="owncomments" style="margin-bottom: 10px;border-radius: 8px;"></textarea>
							<div class="btm-checkin" ng-click="confirm_sendmaildelay(2,VCID)" style="display: none;margin-top: 15px;" ng-style="confirmcommenttoderiver">
								<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;"></i>
							</div>
						</div>
					</div>
	      
      		</div>
	    </div>
   	</div>
</div>
<div id="attractiondrivermodal" class="modal fade" role="dialog">
  	<div class="modal-dialog">
	    <div class="modal-content">
	    	
		   	<div class="modal-body" style="padding: 0">
		   	<i class="back_close " data-dismiss="modal">&#10006</i>
      		<input type="hidden" name="" value="{{VCID}}" ng-model="VCID">
        		
      		<div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;background-color: #fff;border-radius: 8px 8px 0 0;">
					<!-- 	<img src="images/all_message.png?v=<?=$cache;?>" width="20" align="absmiddle"> -->
					<!-- <span ng-if="flagcheck == 1" style="font-size: 18px;">Product recommend</span>
						<span ng-if="flagcheck == 2" style="font-size: 18px;">โปรดักแนะนำ </span>
						<span ng-if="flagcheck == 3" style="font-size: 18px;">推荐商品</span> -->
						<span ng-if="flagcheck == 1" style="font-size: 18px;">Attractions</span>
						<span ng-if="flagcheck == 2" style="font-size: 18px;">แหล่งท่องเที่ยว </span>
						<span ng-if="flagcheck == 3" style="font-size: 18px;">景点</span>
						<!-- <img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
						<img src="images/driver.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >  -->
					</div>
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;border-radius: 0 0 8px 8px">
						<!-- <table width="100%" style="margin-top: 10px;margin-bottom: 10px;">
					   		<tr>
					   			<td width="10"></td>
					   			<td align="left" >
					   				<div style="float: left; padding: 9px 12px; background: #22407f;    text-shadow: none; border-radius: 8px; color: #fff;outline: none" ng-click="btnattractiondrivermodal()" ng-style="btnfreattraction">
					   					<span ng-if="flagcheck == 1">Frequently used</span>
					   					<span ng-if="flagcheck == 2">ข้อความที่ใช้บ่อย</span>
					   					<span ng-if="flagcheck == 3">常用信息</span>
					   				</div>
					   			</td>
					   			<td width="10"></td>
					   			<td align="center">
					   				<div style="padding: 9px 12px; background: #3b5998; text-shadow: none;    border-radius: 8px; color: #fff;outline: none" ng-click="btnMessageattractiondrivermodal()" ng-style="btnchatattraction">
					   					<span ng-if="flagcheck == 1">Chat</span>
					   					<span ng-if="flagcheck == 2">แชท</span>
					   					<span ng-if="flagcheck == 3">聊</span>
					   				</div>
					   			</td>					   			
					   			<td width="10"></td>
					   		</tr>
					   </table> -->
					   <div style="padding: 5px 9px;display: none;" ng-style="frequentlyusedattraction" >
						   <div style="border: solid 2px #3b5998;height: 285px;border-radius: 8px;overflow: auto; display: block;margin-bottom: 11px;margin-top: 7px;" ng-style="sdatamessageattraction" >
						   		<ul ng-repeat="item in messagedata" ng-class="{evenmesage: $even, oddmesage: $odd}" >
						   			<li ng-if="flagcheck == 1" ng-bind="$index+1+'.'+item.topic_en" ng-click="selectmessage(item)"></li>
						   			<li ng-if="flagcheck == 2" ng-bind="$index+1+'.'+item.topic_th" ng-click="selectmessage(item)"></li>
						   			<li ng-if="flagcheck == 3" ng-bind="$index+1+'.'+item.topic_cn" ng-click="selectmessage(item)"></li>
						   		</ul>
						   	</div>
						   	<div style="border: solid 2px #3b5998;height: 285px;border-radius: 8px;overflow: auto; display: none;margin-bottom: 11px;margin-top: 7px;" ng-style="sdatamessageattraction_store" >
						   	<!-- <div style="font-size: 17px;"><i class="fa fa-angle-left" ng-click="btnFrequentlyused()" style="padding: 10px 10px;"></i><span ng-bind="headersmessage"></span></div> -->
						   		<ul ng-repeat="item in messagedataStore" ng-class="{evenmesage: $even, oddmesage: $odd}" >
						   			<li ng-if="flagcheck == 1" ng-bind="$index+1+'.'+item.topic_en" ng-click="selectmessageattraction_store(item)"></li>
						   			<li ng-if="flagcheck == 2" ng-bind="$index+1+'.'+item.topic_th" ng-click="selectmessageattraction_store(item)"></li>
						   			<li ng-if="flagcheck == 3" ng-bind="$index+1+'.'+item.topic_cn" ng-click="selectmessageattraction_store(item)"></li>
						   		</ul>
						   	</div>
						   	<div style="width: 100%;top: 420px;position: absolute;display: none;" align="center" ng-style="spintakechattodriverselect">
    						<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"></i>
    						</div>
						   	<div ng-style="havedatamessageattraction" align="center" style="margin-top: 15px;">
						   		<textarea class="form-control" rows="2" id="comment"  ng-style="" style="margin-bottom: 10px;border-radius: 8px; pointer-events: none;" value="{{SELmessage_store}}" ng-model="SELmessage_store"></textarea>
						   		<div class="btm-checkin" ng-click="confirm_sendmaildelay(22,VCID)" style="margin-top: 15px;" >
									<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;"></i>
								</div> 
							</div>
					   </div>
					    <!-- <div style="width: 100%;top: 154px;position: absolute;display: none;" align="center" ng-style="spintakechattodriver">
    						<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"  ></i>
    					</div> -->
						<!-- <div style="padding: 5px 9px;margin-top: 9px;" ng-style="messageattraction">
							<textarea class="form-control" rows="5" id="comment" ng-model="comdriver" ng-change="YourOwnComments(comdriver)" ng-style="owncomments" style="margin-bottom: 10px;border-radius: 8px;"></textarea>
							<div class="btm-checkin" ng-click="confirm_sendmaildelay(2,VCID)" style="display: none;margin-top: 15px;" ng-style="confirmcommenttoderiver">
								<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;"></i>
							</div>
						</div> -->
					</div>
      		</div>
	    </div>
   	</div>
</div>
<div id="onthecardrivermodal" class="modal fade" role="dialog">
  	<div class="modal-dialog">
	    <div class="modal-content">
	    	
	    	<div class="modal-body" style="padding: 0">
	    	<i class="back_close " data-dismiss="modal">&#10006</i>
      		<input type="hidden" name="" value="{{VCID}}" ng-model="VCID">

	    	<div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;background-color: #fff;border-radius: 8px 8px 0 0;">
						<!-- <img src="img/onthecar.png?v=<?=$cache;?>" width="20" align="absmiddle"> -->
						<span ng-if="flagcheck == 1" style="font-size: 18px;">On the car</span>
						<span ng-if="flagcheck == 2" style="font-size: 18px;">อยู่บนรถ </span>
						<span ng-if="flagcheck == 3" style="font-size: 18px;">在车上</span>
						<!-- <img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
						<img src="images/driver.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >  -->
					</div>
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;border-radius: 0 0 8px 8px">
						<!-- <table width="100%" style="margin-top: 10px;margin-bottom: 10px;">
					   		<tr>
					   			<td width="10"></td>
					   			<td align="left" >
					   				<div style="float: left; padding: 9px 12px; background: #22407f;    text-shadow: none; border-radius: 8px; color: #fff;outline: none;" ng-click="btnonthecardrivermodal()" ng-style="btnfreonthecar">
					   					<span ng-if="flagcheck == 1">Frequently used</span>
					   					<span ng-if="flagcheck == 2">ข้อความที่ใช้บ่อย</span>
					   					<span ng-if="flagcheck == 3">常用信息</span>
					   				</div>
					   			</td>
					   			<td width="10"></td>
					   			<td align="center">
					   				<div style="padding: 9px 12px; background: #3b5998; text-shadow: none;    border-radius: 8px; color: #fff;outline: none;" ng-click="btnMessageonthecardrivermodal()" ng-style="btnchatonthecar">
					   					<span ng-if="flagcheck == 1">Chat</span>
					   					<span ng-if="flagcheck == 2">แชท</span>
					   					<span ng-if="flagcheck == 3">聊</span>
					   				</div>
					   			</td>
					   			
					   			<td width="10"></td>
					   		</tr>
					   </table> -->
					   <div style="padding: 5px 9px;"  >
						   <div style="border: solid 2px #3b5998;height: 285px;border-radius: 8px;overflow: auto; display: none;margin-bottom: 11px;margin-top: 7px;" ng-style="sdatamessageonthecar" >
						   		<ul ng-repeat="item in messagedata" ng-class="{evenmesage: $even, oddmesage: $odd}" >
						   			<li ng-if="flagcheck == 1" ng-bind="$index+1+'.'+item.topic_en" ng-click="selectmessage(item)"></li>
						   			<li ng-if="flagcheck == 2" ng-bind="$index+1+'.'+item.topic_th" ng-click="selectmessage(item)"></li>
						   			<li ng-if="flagcheck == 3" ng-bind="$index+1+'.'+item.topic_cn" ng-click="selectmessage(item)"></li>
						   		</ul>
						   	</div>
						   	<div style="border: solid 2px #3b5998;height: 285px;border-radius: 8px;overflow: auto; display: block;margin-bottom: 11px;margin-top: 7px;" ng-style="sdatamessageonthecar_store" >
						   	<!-- <div style="font-size: 17px;"><i class="fa fa-angle-left" ng-click="btnFrequentlyused()" style="padding: 10px 10px;"></i><span ng-bind="headersmessage"></span></div> -->
						   		<ul ng-repeat="item in messagedataStore" ng-class="{evenmesage: $even, oddmesage: $odd}" >
						   			<li ng-if="flagcheck == 1" ng-bind="$index+1+'.'+item.topic_en" ng-click="selectmessageonthecar_store(item)"></li>
						   			<li ng-if="flagcheck == 2" ng-bind="$index+1+'.'+item.topic_th" ng-click="selectmessageonthecar_store(item)"></li>
						   			<li ng-if="flagcheck == 3" ng-bind="$index+1+'.'+item.topic_cn" ng-click="selectmessageonthecar_store(item)"></li>
						   		</ul>
						   	</div>
						   	<div style="width: 100%;top: 420px;position: absolute;display: none;" align="center" ng-style="spintakechattodriverselect">
    						<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"></i>
    						</div>
						   	<div ng-style="havedatamessageonthecar" align="center" style="margin-top: 15px;display: none">
						   		<textarea class="form-control" rows="2" id="comment"  ng-style="" style="margin-bottom: 10px;border-radius: 8px; pointer-events: none;" value="{{SELmessage_store}}" ng-model="SELmessage_store"></textarea>
						   		<div class="btm-checkin" ng-click="confirm_sendmaildelay(19,VCID)" style="margin-top: 15px;" >
									<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;"></i>
								</div>
							</div>
					   </div>
					    <div style="width: 100%;top: 154px;position: absolute;display: none;" align="center" ng-style="spintakechattodriver">
    						<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"  ></i>
    					</div>
						<div style="padding: 5px 9px;margin-top: 9px;display: none;" ng-style="messageonthecar">
							<textarea class="form-control" rows="5" id="comment" ng-model="comdriver" ng-change="YourOwnComments(comdriver)" ng-style="owncomments" style="margin-bottom: 10px;border-radius: 8px;"></textarea>
							<div class="btm-checkin" ng-click="confirm_sendmaildelay(2,VCID)" style="display: none;margin-top: 15px;" ng-style="confirmcommenttoderiver">
								<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;"></i>
							</div>
						</div>
					</div>
	      
        		
      		</div>
	    </div>
   	</div>
</div>
<div id="restaurantdrivermodal" class="modal fade" role="dialog">
  	<div class="modal-dialog">
	    <div class="modal-content">
	    	
	    	<div class="modal-body" style="padding: 0">
	    	<i class="back_close " data-dismiss="modal">&#10006</i>
      		<input type="hidden" name="" value="{{VCID}}" ng-model="VCID">

        		<div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;background-color: #fff;border-radius: 8px 8px 0 0;">
						<!-- <img src="img/restaurant.png?v=<?=$cache;?>" width="20" align="absmiddle"> -->
						<span ng-if="flagcheck == 1" style="font-size: 18px;">Restaurant</span>
						<span ng-if="flagcheck == 2" style="font-size: 18px;">ร้านอาหาร </span>
						<span ng-if="flagcheck == 3" style="font-size: 18px;">餐厅</span>
						<!-- <img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
						<img src="images/driver.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >  -->
					</div>
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;border-radius: 0 0 8px 8px">
						<!-- <table width="100%" style="margin-top: 10px;margin-bottom: 10px;">
					   		<tr>
					   			<td width="10"></td>
					   			<td align="left" >
					   				<div style="float: left; padding: 9px 12px; background: #22407f;    text-shadow: none; border-radius: 8px; color: #fff;outline: none;" ng-click="btnrestaurantdrivermodal()" ng-style="btnfrerestaurant">
					   					<span ng-if="flagcheck == 1">Frequently used</span>
					   					<span ng-if="flagcheck == 2">ข้อความที่ใช้บ่อย</span>
					   					<span ng-if="flagcheck == 3">常用信息</span>
					   				</div>
					   			</td>					   			
					   			<td width="10"></td>
					   			<td align="center">
					   				<div style="padding: 9px 12px; background: #3b5998; text-shadow: none;    border-radius: 8px; color: #fff;outline: none;" ng-click="btnMessagerestaurantdrivermodal()" ng-style="btnchatrestaurant">
					   					<span ng-if="flagcheck == 1">Chat</span>
					   					<span ng-if="flagcheck == 2">แชท</span>
					   					<span ng-if="flagcheck == 3">聊</span>
					   				</div>
					   			</td>
					   			<td width="10"></td>
					   		</tr>
					   </table> -->
					   <div style="padding: 5px 9px;display: none;" ng-style="frequentlyusedrestaurant" >
						   <div style="border: solid 2px #3b5998;height: 285px;border-radius: 8px;overflow: auto; display: block;margin-bottom: 11px;margin-top: 7px;" ng-style="sdatamessagerestaurant" >
						   		<ul ng-repeat="item in messagedata" ng-class="{evenmesage: $even, oddmesage: $odd}" >
						   			<li ng-if="flagcheck == 1" ng-bind="$index+1+'.'+item.topic_en" ng-click="selectmessage(item)"></li>
						   			<li ng-if="flagcheck == 2" ng-bind="$index+1+'.'+item.topic_th" ng-click="selectmessage(item)"></li>
						   			<li ng-if="flagcheck == 3" ng-bind="$index+1+'.'+item.topic_cn" ng-click="selectmessage(item)"></li>
						   		</ul>
						   	</div>
						   	<div style="border: solid 2px #3b5998;height: 285px;border-radius: 8px;overflow: auto; display: none;margin-bottom: 11px;margin-top: 7px;" ng-style="sdatamessagerestaurant_store" >
						   	<!-- <div style="font-size: 17px;"><i class="fa fa-angle-left" ng-click="btnFrequentlyused()" style="padding: 10px 10px;"></i><span ng-bind="headersmessage"></span></div> -->
						   		<ul ng-repeat="item in messagedataStore" ng-class="{evenmesage: $even, oddmesage: $odd}" >
						   			<li ng-if="flagcheck == 1" ng-bind="$index+1+'.'+item.topic_en" ng-click="selectmessagerestaurant_store(item)"></li>
						   			<li ng-if="flagcheck == 2" ng-bind="$index+1+'.'+item.topic_th" ng-click="selectmessagerestaurant_store(item)"></li>
						   			<li ng-if="flagcheck == 3" ng-bind="$index+1+'.'+item.topic_cn" ng-click="selectmessagerestaurant_store(item)"></li>
						   		</ul>
						   	</div>
						   	<div style="width: 100%;top: 420px;position: absolute;display: none;" align="center" ng-style="spintakechattodriverselect">
    						<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"></i>
    						</div>
						   	<div ng-style="havedatamessagerestaurant" align="center" style="margin-top: 15px;">
						   		<textarea class="form-control" rows="2" id="comment"  ng-style="" style="margin-bottom: 10px;border-radius: 8px; pointer-events: none;" value="{{SELmessage_store}}" ng-model="SELmessage_store"></textarea>
						   		<div class="btm-checkin" ng-click="confirm_sendmaildelay(21,VCID)" style="margin-top: 15px;" >
									<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;"></i>
								</div>
							</div>
					   </div>
					    <div style="width: 100%;top: 154px;position: absolute;display: none;" align="center" ng-style="spintakechattodriver">
    						<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"  ></i>
    					</div>
						<div style="padding: 5px 9px;margin-top: 9px;" ng-style="messagerestaurant">
							<textarea class="form-control" rows="5" id="comment" ng-model="comdriver" ng-change="YourOwnComments(comdriver)" ng-style="owncomments" style="margin-bottom: 10px;border-radius: 8px;"></textarea>
							<div class="btm-checkin" ng-click="confirm_sendmaildelay(2,VCID)" style="display: none;margin-top: 15px;" ng-style="confirmcommenttoderiver">
								<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;"></i>
							</div>
						</div>
					</div>
	      
      		</div>
	    </div>
   	</div>
</div>
<div id="sharelocationtodriver" class="modal fade" role="dialog">
  	<div class="modal-dialog">
	    <div class="modal-content">
	    	<div class="modal-body" style="padding: 0">
	    	<i class="back_close " data-dismiss="modal">&#10006</i>
      		<input type="hidden" name="" value="{{VCID}}" ng-model="VCID">

	    	<div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;">
	    	<i class="fa fa-map-marker" aria-hidden="true" style="font-size: 20px; color: #3b5998;"></i>
				<span ng-if="flagcheck == 1">Location share</span>
				<span ng-if="flagcheck == 2">แชร์ตำแหน่ง</span>
				<span ng-if="flagcheck == 3">位置共享</span>
				</div>
        		<div style="padding: 0 10px;padding-bottom: 10px" ng-style="boxsharelocationdriver">
				
				<div style="width: 100%;height: 400px;  border: 2px solid #9E9E9E; margin-bottom: 8px;border-radius: 8px;display: none" ng-style="ssharelocationdriver">


						<iframe id="iframes" ng-src="{{iframe.srcsharelo | trusted}}"  style="width: 100%;border:none;height: 100%;pointer-events: none; "></iframe>
						
				</div>
				<div align="center" style="color: rgb(255, 255, 255); border-radius: 50%;width: 100%; height: 40px; z-index: 5;margin-top: 8px; text-align: center; display: none;text-align: center;" ng-style="styleloadlocation">
				<i class="fa fa-spinner faa-spin animated " align="center" aria-hidden="true" style="font-size: 36px;padding: 0 10px;color:#3b5998; " ></i>
				</div>
					<div class="btm-checkin" ng-style="btnsharelocation" ng-click="confirm_sendmaildelay(14,VCID)" style="margin-top: 15px;display: none">
					<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;"></i>
					</div>
				</div>
      		</div>
	    </div>
   	</div>
</div>
<!--      ******************Popup GoTo Before******************          -->

<!--      ******************Popup GoTo Delay******************          -->
<div id="delaydrivermodal" class="modal fade" role="dialog" style="background-color: #ddd">
  <div class="modal-dialog">
    <div class="modal-content">
    <i class="back_close " ng-click="cancelid_popupdelay()" data-dismiss="modal">&#10006</i>
      		<input type="hidden" name="" value="{{VCID}}" ng-model="VCID">

      	<div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;">
							<img src="images/usercar_after.png?v=<?=$cache;?>" width="20" align="absmiddle">
							<span ng-if="flagcheck == 1" style="font-size: 18px;">Delay</span>
							<span ng-if="flagcheck == 2" style="font-size: 18px;">เลื่อนการใช้ </span>
							<span ng-if="flagcheck == 3" style="font-size: 18px;">推迟使用</span>
							<img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
							<img src="images/driver.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
							
					</div>
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;">
						<table ng-style="timedelay2" style=" border-color: #f0f0f0;border-style: none !important  " border="1">
							<tr>
								<td width="2%"></td>
								<td width="47%" align="center" style="padding-top: 15px; ">
									<div style="width: 20%; position: absolute; z-index: 1;color: rgb(117, 117, 117); margin-left: 12%; text-align: center; margin-top: 5px;
                                pointer-events: none; display: block;" ng-style="stylehour">
										<span ng-if="flagcheck == 1">Hour</span>
										<span ng-if="flagcheck == 2">ชั่วโมง</span>
										<span ng-if="flagcheck == 3">小时</span>
									</div>
									<select class="form-control" ng-change="changenum(selectnum)" id="num" ng-model="selectnum" data-ng-options="i  for i in num" style="padding: 0 55px">
										<option value=""></option>
									</select>
								</td>
								<td width="2%" align="center" style="padding-top: 15px;" >
									<span>:</span>
								</td>
								<td align="center" style="padding-top: 15px; ">
									<div style="width: 20%; position: absolute; z-index: 1;color: rgb(117, 117, 117); margin-left: 12%; text-align: center; margin-top: 5px;pointer-events: none; display: block;" ng-style="styleminutes" align="right">
										<span ng-if="flagcheck == 1">Minute</span>
										<span ng-if="flagcheck == 2">นาที</span>
										<span ng-if="flagcheck == 3">分钟</span>
									</div> 
									<select class="form-control" ng-change="changenum2(selectnum2)" id="num" ng-model ="selectnum2" data-ng-options="i  for i in num2" style="padding: 0 55px" > 
										<option value=""  ></option> 
									</select>
								</td>
								<td width="2%"></td>
							</tr>
							<tr>
								<td></td>
								<td colspan="3" align="center">
									<div align="center" style="margin-top: 11px;color: red">
										<span ng-if="flagcheck == 1">Your request must wait for a response from us.</span>
										<span ng-if="flagcheck == 2">คำขอของท่านต้องรอการตอบรับจากเรา</span>
										<span ng-if="flagcheck == 3">您的请求必须等待我们的答复。</span>
									</div>
									<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="font-size: 36px;padding: 0 10px;color:#3b5998;display: none; " ng-style="stylecheckinclickdelay"></i>
									<div class="btm-checkin" ng-style="stylecheckin" ng-click="confirm_sendmaildelay(1,VCID)" style="    display: none;margin-top: 15px">
										<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;" ></i>
									</div>
								</td>
								<td></td>
							</tr>
						</table>
					</div>
    </div>

  </div>
</div>
<!-- <div modal="showModal" class="box-bg26" > -->
	<div class="modal-body" ng-style="id_popupdelay111" id="bg-modal" style="background-color: #fff;position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 0;
    z-index: 1050;
    display: none;
    width: 100%;
    height: 100%;
    overflow-y: scroll;
    overflow-x: hidden;
    -webkit-overflow-scrolling: touch;">
		<div class="" id="body-photo" style="padding: 0;">
           

			<!-- <img src="images/cancel.png"  ng-click="cancelid_popupdelay()" align="center" class="modal_close" /> -->
			<div class="box-img-photo">
				<input type="hidden" name="VCID" value="{{VCID}}">
				<div ng-style="figdelaydriver" style="background-color: #fff;width: 100%">
				<i class="back_close fa fa-angle-left" ng-click="cancelid_popupdelay()" class=""></i>
					<div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;">
							<img src="images/usercar_after.png?v=<?=$cache;?>" width="20" align="absmiddle">
							<span ng-if="flagcheck == 1" style="font-size: 18px;">Delay</span>
							<span ng-if="flagcheck == 2" style="font-size: 18px;">เลื่อนการใช้ </span>
							<span ng-if="flagcheck == 3" style="font-size: 18px;">推迟使用</span>
							<img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
							<img src="images/driver.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
							
					</div>
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;">
						<table ng-style="timedelay" style=" border-color: #f0f0f0;border-style: none !important  " border="1">
							<tr>
								<td width="2%"></td>
								<td width="47%" align="center" style="padding-top: 15px; ">
									<div style="width: 20%; position: absolute; z-index: 1;color: rgb(117, 117, 117); margin-left: 12%; text-align: center; margin-top: 5px;
                                pointer-events: none; display: block;" ng-style="stylehour">
										<span ng-if="flagcheck == 1">Hour</span>
										<span ng-if="flagcheck == 2">ชั่วโมง</span>
										<span ng-if="flagcheck == 3">小时</span>
									</div>
									<select class="form-control" ng-change="changenum(selectnum)" id="num" ng-model="selectnum" data-ng-options="i  for i in num" style="padding: 0 55px">
										<option value=""></option>
									</select>
								</td>
								<td width="2%" align="center" style="padding-top: 15px;" >
									<span>:</span>
								</td>
								<td align="center" style="padding-top: 15px; ">
									<div style="width: 20%; position: absolute; z-index: 1;color: rgb(117, 117, 117); margin-left: 12%; text-align: center; margin-top: 5px;pointer-events: none; display: block;" ng-style="styleminutes" align="right">
										<span ng-if="flagcheck == 1">Minute</span>
										<span ng-if="flagcheck == 2">นาที</span>
										<span ng-if="flagcheck == 3">分钟</span>
									</div> 
									<select class="form-control" ng-change="changenum2(selectnum2)" id="num" ng-model ="selectnum2" data-ng-options="i  for i in num2" style="padding: 0 55px" > 
										<option value=""  ></option> 
									</select>
								</td>
								<td width="2%"></td>
							</tr>
							<tr>
								<td></td>
								<td colspan="3" align="center">
									<div align="center" style="margin-top: 11px;color: red">
										<span ng-if="flagcheck == 1">Your request must wait for a response from us.</span>
										<span ng-if="flagcheck == 2">คำขอของท่านต้องรอการตอบรับจากเรา</span>
										<span ng-if="flagcheck == 3">您的请求必须等待我们的答复。</span>
									</div>
									<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="font-size: 36px;padding: 0 10px;color:#3b5998;display: none; " ng-style="stylecheckinclickdelay"></i>
									<div class="btm-checkin" ng-style="stylecheckin" ng-click="confirm_sendmaildelay(1,VCID)" style="    display: none;margin-top: 15px">
										<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;" ></i>
									</div>
								</td>
								<td></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="box-in-photo" >
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;">
						



						<div style="">
                        <div class="record" ng-repeat="item in getallchat" id="anchordelay{{item.id}}" style="border: 1px solid #ddd;    border-radius: 8px;margin-bottom: 10px;margin-top: 10px;">
                            <table id="record" width="100%" style="font-size: 16px;border-color: none !important" >
			                    <tr style="background-color: #ddd;">
			                        <td width="40" style="padding: 8px 0;border-radius: 8px 0 0 0;" align="center">
			                          <div ng-if="item.comment_from == 'customer'">
			                              <img src="images/me.png?v=<?=$cache;?>" width="30"> 
			                          </div>

			                          <div ng-if="item.comment_from == 'driver'">
			                              <img src="images/driver.png?v=<?=$cache;?>" width="30"> 
			                          </div>
			                          <div ng-if="item.comment_from == 'callcenter'">
			                              <img src="images/call.png?v=<?=$cache;?>" width="30">
			                          </div>
			                          <div ng-if="item.comment_from == 'agent'">
			                              <img src="images/ser.png?v=<?=$cache;?>" width="30">
			                          </div>
			                          <div ng-if="item.comment_from == 'operator'">
			                              <img src="images/dervice P.png?v=<?=$cache;?>" width="30">
			                          </div>
			                          
			                        </td>
			                        <td width="20"></td>
			                        <td   colspan="4" style="padding: 8px 0" >
			                           <span ng-bind="item.guest"></span> 
			                        </td>
			                        <td  width="40"  align="center">
			                          <div >
			                          <img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="background:none !important;display: inline-block;" >
			                          </div>
			                          
			                          </td>
			                        <td  width="40" style="border-radius: 0 8px 0 0;" align="center">
			                               <img src="images/callchat.png?v=<?=$cache;?>" width="25" style="display: inline-block; " ng-if="item.state == 5 || item.state == 7 || item.state == 8 || item.state == 9 || item.state == 11 || item.state == 13 || item.state == 15" >
			                              <img src="images/driverchat.png?v=<?=$cache;?>" width="25" style="display: inline-block; " ng-if="item.state == 2 || item.state == 1 || item.state == 3 || item.state == 4 || item.state == 10 || item.state == 12 || item.state == 14">

			                          </td>
			                        
			                    </tr>
			                    <!-- ========= STATE !======== -->

			                    <tr ng-if="item.state == 1" style="    background: #f0f0f0;">
			                         
			                        <td  width="40" align="center" style="padding: 8px 0;">
			                            <img src="images/usercar_after.png?v=<?=$cache;?>" width="25">
			                        </td>
			                        <td  ></td>
			                        <td colspan="6" style="padding: 8px 0">
			                            
			                            <span ng-if="flagcheck == 1" >Delay </span>
			                            <span ng-if="flagcheck == 2">เลื่อนการใช้ </span>
			                            <span ng-if="flagcheck == 3">推迟使用</span>
			                            <span ng-bind="'('+item.flight_delay+')'"></span>
			                            <div style="display: inline-block;margin-left: 10px;color: #FF9800;" ng-if="item.status_confirm == 0">
			                              <span ng-if="flagcheck == 1">Wait CFM</span>
			                              <span ng-if="flagcheck == 2">รอยืนยัน</span>
			                              <span ng-if="flagcheck == 3">等确认</span>
			                            </div>
			                            <div style="display: inline-block;margin-left: 10px;color: #1db423;" ng-if="item.status_confirm == 1">
			                              <span ng-if="flagcheck == 1">Confirmed</span>
			                              <span ng-if="flagcheck == 2">ยืนยันแล้ว</span>
			                              <span ng-if="flagcheck == 3">已确认</span>
			                            </div>
			                            <span ng-bind="item.finaltime"></span>
			                        </td>
			                    </tr>
			                    <tr ng-if="item.state == 1" style="    background: #f0f0f0;">
			                       
			                      <td   width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
			                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
			                      </td>
			                      <td></td>
			                      <td colspan="5">
			                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
			                      </td>
			                      <td align="center" ng-click="locationdelayTodriver(item)" width="50">
			                          <img src="images/icon/view/map.png?v=<?=$cache;?>"  width="30">
			                      </td>
			                    </tr>


			                    <!-- ================STATE 2 ============= -->
			                    <tr ng-if="item.state == 2" style="    background: #f0f0f0;">
			                        <td  width="40" align="center" >
			                          <img src="images/all_message.png?v=<?=$cache;?>" width="25">
			                        </td>
			                        <td  ></td>
			                        <td colspan="6" style="padding: 8px 0" valign="top">
			                            <span ng-bind="item.comment"></span>
			                        </td>
			                    </tr>
			                    <tr ng-if="item.state == 2" style="    background: #f0f0f0;">
			                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
			                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
			                      </td>
			                      <td></td>
			                      <td colspan="5" style="border-radius: 0 0 8px 0;">
			                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
			                      </td>
			                      <td colspan="" align="center" width="50">
			                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationchatall(item)" width="30">
			                      </td> 
			                    </tr>
			                     <!-- ================STATE 3 ============= -->
			                    
			                    <tr ng-if="item.state == 3" style="    background: #f0f0f0;">
			                        <td   width="40" align="center" style="padding: 8px 0">
			                            <img src="images/clock_wait.png?v=<?=$cache;?>" width="25">
			                        </td>
			                        <td  ></td>
			                        <td colspan="5" style="padding: 8px 0;">
			                            <span ng-if="flagcheck == 1" >Waiting </span>
			                            <span ng-if="flagcheck == 2">ฉันรออยู่แล้ว </span>
			                            <span ng-if="flagcheck == 3">我已在等</span>
			                        </td>
			                        <td align="center" width="50" ng-click="showimages1(item)"><span ></span>
			                        <img src="images/camera.png?v=<?=$cache;?>" width="25">
			                      </td>
			                    </tr>
			                    <tr ng-if="item.state == 3" style="    background: #f0f0f0;">
			                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center"  >
			                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
			                      </td>
			                      <td  ></td>
			                      <td colspan="5">
			                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
			                      </td>
			                      <td align="center"  ng-click="locationwaitTodriver(item)" width="50">
			                          <img src="images/icon/view/map.png?v=<?=$cache;?>"  width="30" >
			                      </td>
			                    </tr>
			                   
			                    <!-- ========= STATE 4======== -->
			                    <tr ng-if="item.state == 4" style="    background: #f0f0f0;">
			                         
			                        <td  width="40" align="center" style="padding: 8px 0;">
			                            <img src="images/usercar_befor.png?v=<?=$cache;?>" width="25">
			                        </td>
			                        <td  ></td>
			                        <td colspan="6" style="padding: 8px 0">
			                             <span ng-if="flagcheck == 1" >Before </span>
			                             <span ng-if="flagcheck == 2">ใช้ล่วงหน้า </span>
			                             <span ng-if="flagcheck == 3">提前使用</span>
			                             <span ng-bind="'('+item.flight_delay+')'"></span>
			                            <div style="display: inline-block;margin-left: 10px;color: #FF9800;">
			                              <span ng-if="flagcheck == 1">Wait CFM</span>
			                              <span ng-if="flagcheck == 2">รอยืนยัน</span>
			                              <span ng-if="flagcheck == 3">等确认</span>
			                            </div>
			                            <div style="display: inline-block;margin-left: 10px;color: #1db423;" ng-if="item.status_confirm == 1">
			                              <span ng-if="flagcheck == 1">Confirmed</span>
			                              <span ng-if="flagcheck == 2">ยืนยันแล้ว</span>
			                              <span ng-if="flagcheck == 3">已确认</span>
			                            </div>
			                            <span ng-bind="item.ncrefinaltime"></span>
			                        </td>
			                    </tr>
			                    <tr ng-if="item.state == 4" style="    background: #f0f0f0;">
			                      <td   width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
			                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
			                      </td>
			                      <td></td>
			                      <td colspan="5">
			                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
			                      </td>
			                      <td align="center"   ng-click="locationbeforeTodriver(item)" width="50">
			                          <img src="images/icon/view/map.png?v=<?=$cache;?>"  width="30">
			                      </td>
			                    </tr>
			                    <!-- ========= STATE 5======== -->
			                    
			                     <tr ng-if="item.state == 10" style="    background: #f0f0f0;">
			                         
			                        <td  width="40" align="center" >
			                          <img src="images/phone.png?v=<?=$cache;?>" width="25">
			                        </td>
			                        <td  ></td>
			                        <td colspan="6" style="padding: 8px 0" valign="top">
			                            <span ng-bind="item.comment"></span>
			                        </td>
			                    </tr>
			                    <tr ng-if="item.state == 10" style="    background: #f0f0f0;">
			                      
			                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
			                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
			                      </td>
			                      <td></td>
			                      <td colspan="5" style="border-radius: 0 0 8px 0;">
			                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
			                      </td>
			                      <td colspan="" align="center" width="50">
			                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationchatusd(item)" width="30">
			                      </td>
			                    </tr>
			                    <tr ng-if="item.state == 12" style="    background: #f0f0f0;">
			                         
			                        <td  width="40" align="center" >
			                          <img src="images/all_message.png?v=<?=$cache;?>" width="25">
			                        </td>
			                        <td  ></td>
			                        <td colspan="6" style="padding: 8px 0" valign="top">
			                            <span ng-bind="item.comment"></span>
			                        </td>
			                    </tr>
			                    <tr ng-if="item.state == 12" style="    background: #f0f0f0;">
			                      
			                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
			                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
			                      </td>
			                      <td></td>
			                      <td colspan="5" style="border-radius: 0 0 8px 0;">
			                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
			                      </td>
			                      <td colspan="" align="center" width="50">
			                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationchatusd(item)" width="30">
			                      </td>
			                    </tr>
			                    <!-- *********************************************TO OP****************************** -->
			                    <tr ng-if="item.state == 5" style="    background: #f0f0f0;">
			                         
			                        <td  width="40" align="center" >
			                          <img src="images/all_message.png?v=<?=$cache;?>" width="25">
			                        </td>
			                        <td  ></td>
			                        <td colspan="6" style="padding: 8px 0" valign="top">
			                            <span ng-bind="item.comment"></span>
			                        </td>
			                    </tr>
			                    <tr ng-if="item.state == 5" style="    background: #f0f0f0;">
			                      
			                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
			                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
			                      </td>
			                      <td></td>
			                      <td colspan="5" style="border-radius: 0 0 8px 0;">
			                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
			                      </td>
			                      <td colspan="" align="center" width="50">
			                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationchatOP(item)" width="30">
			                      </td>
			                    </tr>
			                    <tr ng-if="item.state == 8" style="    background: #f0f0f0;">
			                         
			                        <td  width="40" align="center" style="padding: 8px 0;">
			                            <img src="images/usercar_after.png?v=<?=$cache;?>" width="25">
			                        </td>
			                        <td  ></td>
			                        <td colspan="6" style="padding: 8px 0">
			                            
			                            <span ng-if="flagcheck == 1" >Delay </span>
			                            <span ng-if="flagcheck == 2">เลื่อนการใช้ </span>
			                            <span ng-if="flagcheck == 3">推迟使用</span>
			                            <span ng-bind="'('+item.flight_delay+')'"></span>
			                            <div style="display: inline-block;margin-left: 10px;color: #FF9800;" ng-if="item.status_confirm == 0">
			                              <span ng-if="flagcheck == 1">Wait CFM</span>
			                              <span ng-if="flagcheck == 2">รอยืนยัน</span>
			                              <span ng-if="flagcheck == 3">等确认</span>
			                            </div>
			                            <div style="display: inline-block;margin-left: 10px;color: #1db423;" ng-if="item.status_confirm == 1">
			                              <span ng-if="flagcheck == 1">Confirmed</span>
			                              <span ng-if="flagcheck == 2">ยืนยันแล้ว</span>
			                              <span ng-if="flagcheck == 3">已确认</span>
			                            </div>
			                            <span ng-bind="item.finaltime"></span>
			                        </td>
			                    </tr>
			                    <tr ng-if="item.state == 8" style="    background: #f0f0f0;">
			                       
			                      <td   width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
			                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
			                      </td>
			                      <td></td>
			                      <td colspan="5">
			                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
			                      </td>
			                      <td align="center" ng-click="Pickupplace(item)" width="50">
			                          <img src="images/icon/view/map.png?v=<?=$cache;?>"  width="30">
			                      </td>
			                    </tr>

			                    <tr ng-if="item.state == 9" style="    background: #f0f0f0;">
			                        
			                         
			                        <td   width="40" align="center" style="padding: 8px 0">
			                            
			                                <img src="images/clock_wait.png?v=<?=$cache;?>" width="25">
			                           
			                        </td>
			                        <td  ></td>
			                        <td colspan="5" style="padding: 8px 0;">
			                            <span ng-if="flagcheck == 1" >Waiting </span>
			                            <span ng-if="flagcheck == 2">ฉันรออยู่แล้ว </span>
			                            <span ng-if="flagcheck == 3">我已在等</span>
			                        </td>
			                        
			                        <td align="center" width="50"  ng-click="showimages1_toop(item)">
			                        <img src="images/camera.png?v=<?=$cache;?>" width="25" >
			                      </td>

			                    </tr>
			                    <tr ng-if="item.state == 9" style="    background: #f0f0f0;">
			                      
			                      
			                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center"  >
			                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
			                      </td>
			                      <td  ></td>
			                      <td colspan="5">
			                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
			                      </td>
			                      <td align="center" width="50"  >
			                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationwaitToop(item)" width="30" >
			                      </td>
			                    </tr>
			                    <!-- ================STATE 7 ============= -->
			                   
			                    
			                    <tr ng-if="item.state == 7" style="    background: #f0f0f0;">
			                         
			                        <td  width="40" align="center" style="padding: 8px 0;">
			                            <img src="images/usercar_befor.png?v=<?=$cache;?>" width="25">
			                        </td>
			                        <td  ></td>
			                        <td colspan="6" style="padding: 8px 0">
			                            
			                             <span ng-if="flagcheck == 1" >Before </span>
			                             <span ng-if="flagcheck == 2">ใช้ล่วงหน้า </span>
			                             <span ng-if="flagcheck == 3">提前使用</span>
			                             <span ng-bind="'('+item.flight_delay+')'"></span>
			                            <div style="display: inline-block;margin-left: 10px;color: #FF9800;">
			                              <span ng-if="flagcheck == 1">Wait CFM</span>
			                              <span ng-if="flagcheck == 2">รอยืนยัน</span>
			                              <span ng-if="flagcheck == 3">等确认</span>
			                            </div>
			                            <span ng-bind="item.ncrefinaltime"></span>
			                        </td>
			                    </tr>
			                    <tr ng-if="item.state == 7" style="    background: #f0f0f0;">
			                       
			                      <td   width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
			                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
			                      </td>
			                      <td></td>
			                      <td colspan="5">
			                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
			                      </td>
			                      <td align="center" width="50">
			                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="Pickupplace_toop(item)" width="30">
			                      </td>
			                    </tr>
			                 
			                    
			                    
			                     <tr ng-if="item.state == 11" style="    background: #f0f0f0;">
			                         
			                        <td  width="40" align="center" >
			                          <img src="images/phone.png?v=<?=$cache;?>" width="25">
			                        </td>
			                        <td  ></td>
			                        <td colspan="6" style="padding: 8px 0" valign="top">
			                            <span ng-bind="item.comment"></span>
			                        </td>
			                       
			                        

			                    </tr>
			                    <tr ng-if="item.state == 11" style="    background: #f0f0f0;">
			                      
			                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
			                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
			                      </td>
			                      <td></td>
			                      <td colspan="5" style="border-radius: 0 0 8px 0;">
			                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
			                      </td>
			                      <td colspan="" align="center" width="50">
			                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationchatusd_toop(item)" width="30">
			                      </td>
			                    </tr>
			                    <tr ng-if="item.state == 13" style="    background: #f0f0f0;">
			                         
			                        <td  width="40" align="center" >
			                          <img src="images/all_message.png?v=<?=$cache;?>" width="25">
			                        </td>
			                        <td  ></td>
			                        <td colspan="6" style="padding: 8px 0" valign="top">
			                            <span ng-bind="item.comment"></span>
			                        </td>
			                       
			                        

			                    </tr>
			                    <tr ng-if="item.state == 13" style="    background: #f0f0f0;">
			                      
			                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
			                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
			                      </td>
			                      <td></td>
			                      <td colspan="5" style="border-radius: 0 0 8px 0;">
			                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
			                      </td>
			                      <td colspan="" align="center" width="50">
			                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="locationchatusd_toop(item)" width="30">
			                      </td>
			                    </tr>
			                    <tr ng-if="item.state == 14" style="    background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 35px; color: #3b5998;"></i>
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
							<span ng-if="flagcheck == 1">Location share</span>
							<span ng-if="flagcheck == 2">แชร์ตำแหน่ง</span>
							<span ng-if="flagcheck == 3">位置共享</span>
                        </td>
                       
                        

                    </tr>
                    <tr ng-if="item.state == 14" style="    background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" style="border-radius: 0 0 8px 0;">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="Pickupplace(item)" width="30">
                      </td>
                    </tr>
                    <tr ng-if="item.state == 15" style="    background: #f0f0f0;">
                         
                        <td  width="40" align="center" >
                          <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 35px; color: #3b5998;"></i>
                        </td>
                        <td  ></td>
                        <td colspan="6" style="padding: 8px 0" valign="top">
							<span ng-if="flagcheck == 1">Location share</span>
							<span ng-if="flagcheck == 2">แชร์ตำแหน่ง</span>
							<span ng-if="flagcheck == 3">位置共享</span>
                        </td>
                       
                        

                    </tr>
                    <tr ng-if="item.state == 15" style="    background: #f0f0f0;">
                      
                      <td  width="40" style="padding: 8px 0;border-radius: 0 0 0 8px;" align="center">
                           <img src="images/timerec.png?v=<?=$cache;?>" width="25">
                      </td>
                      <td></td>
                      <td colspan="5" style="border-radius: 0 0 8px 0;">
                          <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                      </td>
                      <td colspan="" align="center" width="50">
                          <img src="images/icon/view/map.png?v=<?=$cache;?>" ng-click="Pickupplace(item)" width="30">
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


<!--      ******************Popup GoTo Wait******************          -->
<div id="waitdrivermodal" class="modal fade" role="dialog" style="background-color: #ddd" class="waitdrivermodal">
  <div class="modal-dialog">
    <div class="modal-content">
    <i class="back_close " ng-click="cancelid_popupwait()" data-dismiss="modal">&#10006</i>
      		<input type="hidden" name="" value="{{VCID}}" ng-model="VCID">

      	<div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;">
							<!-- <img src="images/clock_wait.png?v=<?=$cache;?>" width="20" align="absmiddle"> -->
							<span ng-if="flagcheck == 1" style="font-size: 18px;">I've been waiting</span>
							<span ng-if="flagcheck == 2" style="font-size: 18px;">ฉันรออยู่แล้ว </span>
							<span ng-if="flagcheck == 3" style="font-size: 18px;">我已在等</span>
							<!-- <img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
							<img src="images/driver.png?v=<?=$cache;?>" width="20" style="display: inline-block;" > -->
					</div>
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;">
						<div ng-style="takepictures" style="display: none; ">
							<table width="100%">
								<tr>
									<td align="center" colspan="3" style="padding-top: 5px;">
										<span ng-if="flagcheck == 1" >Please take pictures of your environment</span>
										<span ng-if="flagcheck == 2">ถ่ายภาพภาพแวดล้อมของคุณ</span>
										<span ng-if="flagcheck == 3">请拍照您的环境</span>
									</td>
								</tr>
								<tr>
									<td align="center" colspan="3">
										<div class="nophoto" style="color: red; display: none; width: 100%;    position: absolute;">{{nophoto}}</div>
    									<div style="width: 98%" align="center">
    													<img id="blah" />
    													<!-- <img-crop image="myImage" area-type="rectangle" result-image="myCroppedImage" result-image-size="400" id="blah"></img-crop> -->
    									</div>
									</td>
								</tr>
								<tr>
									<td  align="center" width="48%">
										<div class="fileUpload btn-new" ng-style="newtakephoto" style="margin-bottom: 10px;margin-top: 10px;">
											<i class="fa fa-camera fa-lg" aria-hidden="true"></i> 
											<input type="file" class="upload" name="fileToUpload" id="fileToUpload-1" accept="image/*"  capture="camera" style="padding: 5px border:none;"
											file-input="files"/>
										</div>
										<div style="width: 100%;margin-top: 14px; margin-bottom: 5px;display: none;" align="center" ng-style="spintake11">
    											<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"  ></i>
    										</div>
										<div style="display: none" ng-style="blockhavephoto">
											<table width="100%">
												<tr>
													<td  align="center" width="48%">
														<div class="btn-delete" ng-style="">
															<i class="fa fa-trash-o fa-lg" aria-hidden="true" ng-click="deleteimage()"></i>        
                                                
														</div>
													</td>
													<td width="4%"></td>
													<td align="center"  width="48%">
													
														<div ng-click="takepicturesfun(data1);savetakein();" class="btn-save"  ng-style="btnclicktake">
															<i class="fa fa-paper-plane fa-lg " aria-hidden="true"></i>
															<!-- <span  ng-if="flagcheck == 1">Save image</span>
															<span  ng-if="flagcheck == 2">ส่งข้อมูล</span>
															<span  ng-if="flagcheck == 3">發送</span> -->
														</div> 
													</td>
												</tr>
											</table>
										</div>
									</td>
								</tr>
                      
							</table>
						</div>

						<div ng-style="pictureyourself" style="display: none; ">
							<table width="100%">
								<tr>
									<td align="center" colspan="3" style="padding-top: 5px;">
										<span ng-if="flagcheck == 1" >Please take a picture of yourself</span>
										<span ng-if="flagcheck == 2">กรุณาถ่ายภาพตัวคุณเอง</span>
										<span ng-if="flagcheck == 3">请拍照您自己</span>
										<!-- <span style="color: #000">({{setionflight.length}})</span> -->
									</td>
                       
								</tr>
								<tr>
									<td align="center" colspan="3">
                          
										<div class="nophoto2" style="color: red; display: none; width: 100%;    position: absolute;">{{nophoto}}</div>
										<div style="width: 98%">
    										<img id="blah2" name="image_album"/>
    										<input type="hidden" ng-model="data1" id="one" />
    									</div>
                             
									</td>
								</tr>
                      
								<tr>
									<td  align="center" width="48%">
										<div class="fileUpload btn-new2" ng-style="newtakephoto2" style="margin-bottom: 10px;">
											<i class="fa fa-camera fa-lg" aria-hidden="true"></i>  
											<input type="file" class="upload" id="fileToUpload" accept="image/*"  capture="camera" 
											file-input="files" name="photo-you" style="padding: 5px border:none; border:none;"/>
											<!-- onchange="document.getElementById('blah2').src = window.URL.createObjectURL(this.files[0])" style="padding: 5px border:none;" -->
										</div>
										<script>
										
											$('input[name=photo-you]').change(function(e) {
												
											    var file = e.target.files[0];
											    console.log(file)
											    //alert(file);
											   canvasResize(file, {
											        width: 800,
                                    height: 1600,
                                    crop: false,
                                    quality: 100,
                                    rotate: 0,
											        callback: function(data, width, height) {
											        	//console.log(data)
											           $('#blah2').attr('src', data);
											            var fd = new FormData();
                                        // Add file data
                                        var f = canvasResize('dataURLtoBlob', data);
                                        f.name = file.name;
                                         $("#one").val(file);
                                        fd.append($('#fileToUpload').attr('name'), f);

                                        var http = new XMLHttpRequest();
										var url = "js/uploadimage.php";
										var params = "lorem=ipsum&name=binny";
										http.open("POST", url, true);
                                         //http.open('POST', '<?=$chat_part?>go.php?name=livechat&file=upload_pic&time=<?=time()?>', true);
                                         http.setRequestHeader("X-Requested-With", "XMLHttpRequest");
                                        http.setRequestHeader("pragma", "no-cache");
                                        //Upload progress
                                        http.upload.addEventListener("progress", function(e) {
                                            if (e.lengthComputable) {
                                                var loaded = Math.ceil((e.loaded / e.total) * 100);
                                                //
                                            }
                                        }, false);
											        }
											    });
											});


											
											$('input[name=fileToUpload]').change(function(e) {
												
											    var file = e.target.files[0];
											    //console.log(file)
											    //alert(file);
											   canvasResize(file, {
											        width: 800,
			                                    height: 1600,
			                                    crop: false,
			                                    quality: 100,
			                                    rotate: 0,
											        callback: function(data, width, height) {
											        	//console.log(data)
											            $('#blah').attr('src', data);
											            var fd = new FormData();
                                        // Add file data
                                        var f = canvasResize('dataURLtoBlob', data);
                                        f.name = file.name;
                                        fd.append($('#fileToUpload-1').attr('name'), f);
                                        console.log(file.name)
                                        var http = new XMLHttpRequest();
										var url = "../js/uploadimage.php";
										//var params = "lorem=ipsum&name=binny";
										http.open("POST", url, true);
                                         http.setRequestHeader("X-Requested-With", "XMLHttpRequest");
                                        http.setRequestHeader("pragma", "no-cache");
                                        //Upload progress
                                        http.upload.addEventListener("progress", function(e) {
                                        	alert("aaaa")
                                        	console.log(e)
                                            if (e.lengthComputable) {
                                                var loaded = Math.ceil((e.loaded / e.total) * 100);
                                                // $('#area p span').css({
                                                //     'width': loaded + "%"
                                                // }).html(loaded + "%");
                                            }
                                        }, false);
											        }
											    });
											});
											$(function() {
											  $("img.img-chat-pic-right").imageScale();
											});
											
										</script>
										<div style="width: 100%;margin-top: 14px; margin-bottom: 5px;display: none;" align="center" ng-style="spintake">
    											<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"  ></i>
    										</div>
										<div style="display: none" ng-style="blockhavephoto">
											<table width="100%">
												<tr>
													<td  align="center" width="48%">
														<div class="btn-delete" ng-style="">
															<i class="fa fa-trash-o fa-lg" aria-hidden="true" ng-click="deleteimage()"></i>        
                                                
														</div>
													</td>
													<td width="4%"></td>
													<td align="center"  width="48%">
													
														<div ng-click="confirm_sendmaildelay(3,VCID)" class="btn-save" id="checkimg" ng-style="spinsendphoto">
															<i class="fa fa-paper-plane fa-lg " aria-hidden="true"></i>
                                                  
														</div>
													</td>
												</tr>
											</table>
										</div>
									</td>
								</tr>
								
							</table>
						</div>
					</div>
    </div>

  </div>
</div>

<!--      ******************Popup GoTo Diver MSG******************          -->
<div modal="showModal" class="box-bg26" ng-style="id_popupdivermsg" id="bg-modal">
	<div class="box-modal-top-30">
		<div class="modal-body" id="body-photo" style="padding: 0">
           <i class="back_close fa fa-angle-left" ng-click="cancelid_popupdivermsg()" class=""></i>

			<!-- <img src="images/cancel.png"  ng-click="cancelid_popupdivermsg()" align="center" class="modal_close" /> -->
			<div class="box-img-photo">
				<div class="box-in-photo" >
					<p align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;">
						<img src="images/find_message.png?v=<?=$cache;?>" width="25" align="absmiddle">
						<span ng-if="flagcheck == 1" style="font-size: 18px;" > Common statement</span>
						<span ng-if="flagcheck == 2" style="font-size: 18px;">ข้อความใช้ประจำ </span>
						<span ng-if="flagcheck == 3" style="font-size: 18px;">常用语句</span>
					</p>
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;">
 
						<span ng-if="flagcheck == 1" style="font-size: 18px;" > Common statement</span>
						<span ng-if="flagcheck == 2" style="font-size: 18px;">
						<script>
						///alert("ข้อความใช้ประจำ");
						</script>
						
						
						
						</span>
						<span ng-if="flagcheck == 3" style="font-size: 18px;">常用语句</span>
						
						
						
 									<select   class="form-control"  id="list_message_store"  id="list_message_store" >
  
  
<?
 
$db->connectdb(DB_NAME_CHAT,DB_USERNAME,DB_PASSWORD); 
$res[message_data_store] = $db->select_query("SELECT * FROM  message_data_store where type='1'  "); 
 while ($arr[message_data_store] = $db->fetch($res[message_data_store])) {
?>
<option value="<?=$arr[message_data_store][id]?>"><?=$arr[message_data_store][topic_en]?></option>

<?

 }
 

?>

</select>

<script>

 
// $(document).ready(function(){
//  $("#list_message_store").on('change',function(){ 
 
// document.getElementById('send_message_store').style.display = "";
   
// 	});	 
 
// });
</script>

<div class="btm-checkin" ng-click="confirm_sendmaildelay(5,VCID)" style="display: nones; margin-top: 15px;" ng-style="confirmcommenttocallcenter" id="send_message_store">
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
<!--      ******************Popup GoTo Diver MSG******************          -->

<!--      ******************Popup GoTo Diver Chat******************          -->
<div id="chatdrivermodal" class="modal fade" role="dialog">
  	<div class="modal-dialog" >
	    <div class="modal-content">
	    <div class="modal-body" style="padding: 0;">	
					<div id="chat_load"></div>
					<style type="text/css">
						.direct-chat-messages{
							padding: 0 !important;
						}
						.direct-chat-messages{

						}
						.bottom_popup_chat{
							padding: 0;
							background-color: none;

						}
					</style>
			</div>
	    </div>
  </div>
</div>

<!--      ******************Popup GoTo Diver Callcenter******************      -->


<div class="modal fade" id="guest_name">
    <div class="modal-dialog">
	     <div class="modal-content">
	        <div class="modal-body" style="padding: 0;">
	        	<i class="back_close " data-dismiss="modal">&#10006</i>
	        	<div align="center" style="font-size: 18px;    padding: 5px;">
						<span> <img src="images/name.png" width="35"> = ? </span>
				</div>
				<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 15px;    border-radius: 0 0 10px 10px;" align="center">
						<span> <img src="images/name.png" width="35"> = <span  ng-if="flagcheck == 1">Name </span>
							<span  ng-if="flagcheck == 2">ชื่อ </span>
							<span  ng-if="flagcheck == 3">姓名 </span> </span>
				</div>
	        </div>
	     </div>
    </div>
 </div>
 <div class="modal fade" id="guest_country" role="dialog">
    <div class="modal-dialog">
	     <div class="modal-content">
	        <div class="modal-body" style="padding: 0;">
	        	<i class="back_close " data-dismiss="modal">&#10006</i>
	        	<div align="center" style="font-size: 18px;    padding: 5px;">
						<span> <img src="images/lang.png" width="35"> = ? </span>
				</div>
				<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 15px;    border-radius: 0 0 10px 10px;" align="center">
					<span><img src="images/lang.png" width="35"> = <span ng-if="flagcheck == 1">Nationality </span>
					<span  ng-if="flagcheck == 2">สัญชาติ </span>
					<span  ng-if="flagcheck == 3">国籍 </span> </span>
				</div>
	        </div>
	     </div>
    </div>
 </div>

 <div class="modal fade" id="phone1" role="dialog">
    <div class="modal-dialog">
	     <div class="modal-content">
	        <div class="modal-body" style="padding: 0;">
	        	<i class="back_close " data-dismiss="modal">&#10006</i>
	        	<div align="center" style="font-size: 18px;    padding: 5px;">
						<span> <img src="images/phone1.png" width="35"> = ? </span>
						
				</div>
				<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 15px;    border-radius: 0 0 10px 10px;" align="center">
					<span><img src="images/phone1.png" width="35"> = 
					<span  ng-if="flagcheck == 1">Your country mobile</span>
					<span  ng-if="flagcheck == 2">มือถือประเทศของคุณ</span>
					<span  ng-if="flagcheck == 3">贵国手机</span> </span>
				</div>
	        </div>
	     </div>
    </div>
 </div>


<div class="modal fade" id="phone2" role="dialog">
    <div class="modal-dialog">
	     <div class="modal-content">
	        <div class="modal-body" style="padding: 0;">
	        	<i class="back_close " data-dismiss="modal">&#10006</i>
	        	<div align="center" style="font-size: 18px;    padding: 5px;">
					<span> <img src="images/phone2.png" width="35"> = ? </span>
				</div>
				<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 15px;    border-radius: 0 0 10px 10px;" align="center">
					<span> <img src="images/phone2.png" width="35"> = 
					<span  ng-if="flagcheck == 1">Local mobile</span>
					<span  ng-if="flagcheck == 2">มือถือท้องถิ่น</span>
					<span  ng-if="flagcheck == 3">本地手机</span>                            
				</div>
	        </div>
	     </div>
    </div>
 </div>


<div id="Ephone1" class="modal fade" role="dialog">
  	<div class="modal-dialog">
	    <div class="modal-content">
		    <div class="modal-body" style="padding: 0">
		    <i class="back_close " ng-click="cancelEphone1()" data-dismiss="modal">&#10006</i> 
		    	<div align="center" style="font-size: 18px;padding: 10px">
		    			<span  ng-if="flagcheck == 1">Your country mobile</span>
						<span  ng-if="flagcheck == 2">มือถือประเทศของคุณ</span>
						<span  ng-if="flagcheck == 3">贵国手机</span>
		    	</div>
		    	<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 15px;    border-radius: 0 0 10px 10px;" align="center">

						<div class="" id="group" >                                        
                       
							<div id="select-country" class="form-control"  ng-click="Country()" style="margin-bottom: 25px !important;">
								<span ><img src="iconstatus/flag/test_f/{{imgcoutry}}.png" width="22"></span>{{Countryfont}}
							</div>
							<div class="countrybox" ng-style="countrybox">
								<ul class="cu-name" >
									<li ng-repeat="i in country" ng-click="numCountryselect(i,$event)" ng-class="{even: $even, odd: $odd}">
										<span><img src="iconstatus/flag/test_f/{{i.country_code}}.png" width="25"></span>
										<div ng-if="flagcheck == 1" style="display: inline-block;"><p style="margin:0;display: inline-block;width: 80px;">(+{{i.phonecode}})</p><span id="name-cu">{{i.name_en}}</span></div>
										<div ng-if="flagcheck == 2" style="display: inline-block;"><p style="margin:0;display: inline-block;width: 80px;">(+{{i.phonecode}})</p><span id="name-cu">{{i.name_th}}</span></div>
										<div ng-if="flagcheck == 3" style="display: inline-block;"><p style="margin:0;display: inline-block;width: 80px;">(+{{i.phonecode}})</p><span id="name-cu">{{i.name_cn}}</span></div>
									</li>
								</ul>
							</div>
						</div>
						<div style="padding: 0">
							<div ng-click="Country()" class="form-control" ng-model="selectcountryValue" id="labelcun" style="width: 30%; display: inline-block;float: left; " ><span><img src="iconstatus/flag/test_f/{{imgcoutry}}.png" width="22" style="margin-right: 5px"></span>{{tcountryValue}}
							</div>

							<div style="width: 67%; float: right; margin-bottom: 20px; display: inline-block;">
								<input type="tel" class="form-control" id="phonere" ng-model="ephonenew" value="{{ephonenew}}" ng-change="Ephone(ephonenew)" />

							</div> 
						</div>
						<Br/>
						<div class="btn-saveso"  ng-click="savesocialquest_detail()" data-dismiss="modal">
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


<div class="modal fade" id="adultchild" role="dialog">
    <div class="modal-dialog">
      	<div class="modal-content">
	        <div class="modal-body" style="padding: 0">
	        	<i class="back_close" data-dismiss="modal">&#10006</i>
	        	<div align="center" style="font-size: 18px;    padding: 5px;" ng-if="typeTour != 'golf'">
						<span> <img src="images/adult.png" width="35"> = ? </span>
						<span> <img src="images/child.png" width="35"> = ? </span>
						<span> <img src="images/infant.png" width="35"> = ? </span>
						<span> <img src="images/tatol.png" width="35"> = ? </span>
				</div>
				<div style="font-size: 18px;margin-bottom: 0;border-radius: 0 0 8px 8px" align="left" ng-if="typeTour != 'golf'">
						<div style="background: #f0f0f0; padding: 5px 6px;"> <img src="images/adult.png" width="35"> = 
							<span  ng-if="flagcheck == 1">Adults</span>
							<span  ng-if="flagcheck == 2">ผู้ใหญ่</span>
							<span  ng-if="flagcheck == 3">成人</span><!-- <span>(18+)</span> -->
						</div>
                           
						<div style="background: #ddd; padding: 5px 6px;"> <img src="images/child.png" width="35"> = 
							<span ng-if="flagcheck == 1">Child </span>
							<span ng-if="flagcheck == 2">เด็ก </span>
							<span ng-if="flagcheck == 3">儿童 </span><!-- <span>(4-12)</span> -->
						</div>
                            
						<div style="background: #f0f0f0; padding: 5px 6px;"> <img src="images/infant.png" width="35"> = 
							<span ng-if="flagcheck == 1">Infant </span>
							<span ng-if="flagcheck == 2">ทารก </span>
							<span ng-if="flagcheck == 3">婴儿 </span><!-- <span>(1-4)</span> -->
						</div>
                            
						<div style="background: #ddd; padding: 5px 6px;border-radius: 0 0 8px 8px"> <img src="images/tatol.png" width="35"> = 
							<span  ng-if="flagcheck == 1">Total </span>
							<span  ng-if="flagcheck == 2">ทั้งหมด </span>
							<span  ng-if="flagcheck == 3">总人数 </span>
						</div>
                            
						<!-- <span>{{web_country_name_en}}</span>   --> 
					</div>
	        </div>
	        <div align="center" style="font-size: 18px;    padding: 5px;" ng-if="typeTour == 'golf'">
						<span> <img src="images/golfs.png" width="35"> = ? </span>
						<span> <img src="images/followers.png" width="35"> = ? </span>
						<span> <img src="images/caddy.png" width="35"> = ? </span>
						<span> <img src="images/golf-cart.png" width="35"> = ? </span>
				</div>
				<div style="font-size: 18px;margin-bottom: 0;border-radius: 0 0 8px 8px" align="left" ng-if="typeTour == 'golf'">
						<div style="background: #f0f0f0; padding: 5px 6px;"> <img src="images/golfs.png" width="35"> = 
							
	                      
	                      <span class="" ng-if="flagcheck == 1">Golfer </span>
	                          	<span class="" ng-if="flagcheck == 2">นักกอล์ฟ </span>
	                          	<span class="" ng-if="flagcheck == 3">高尔夫球手 </span>
	                			
							
						</div>
                           
						<div style="background: #ddd; padding: 5px 6px;"> <img src="images/followers.png" width="35"> = 
							 <span class="" ng-if="flagcheck == 1">Follower </span>
	                          	<span class="" ng-if="flagcheck == 2">ผู้ติดตาม </span>
	                          	<span class="" ng-if="flagcheck == 3">跟随者 </span>
						</div>
                            
						<div style="background: #f0f0f0; padding: 5px 6px;"> <img src="images/caddy.png" width="35"> = 
							<span class="" ng-if="flagcheck == 1">Caddy </span>
	                          	<span class="" ng-if="flagcheck == 2">แคดดี </span>
	                          	<span class="" ng-if="flagcheck == 3">球童 </span>
						</div>
                            
						<div style="background: #ddd; padding: 5px 6px;"> <img src="images/golf-cart.png" width="35"> = 
							<span class="" ng-if="flagcheck == 1">Golf Car </span>
	                          	<span class="" ng-if="flagcheck == 2">รถกอล์ฟ </span>
	                          	<span class="" ng-if="flagcheck == 3">高尔夫球车 </span>
						</div>
                            
						<!-- <span>{{web_country_name_en}}</span>   --> 
					</div>
	        </div>
      	</div>
    </div>
  </div>


<div id="Ephone2" class="modal fade" role="dialog">
  	<div class="modal-dialog">
	    <div class="modal-content">
		    <div class="modal-body" style="padding: 0">
		    <i class="back_close " ng-click="cancelEphone2()" data-dismiss="modal">&#10006</i> 
		    	<div align="center" style="font-size: 18px;padding: 10px">
		    	
		    			<span  ng-if="flagcheck == 1">Local mobile</span>
						<span  ng-if="flagcheck == 2">มือถือท้องถิ่น</span>
						<span  ng-if="flagcheck == 3">本地手机</span>
		    	</div>
		    	<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 15px;    border-radius: 0 0 10px 10px;" align="center">

						<div class="" id="group" >                                        
                       
							<div id="select-country" class="form-control"  ng-click="Country2()" style="margin-bottom: 25px !important;">
								<span><img src="iconstatus/flag/test_f/{{imgcoutry2}}.png" width="25"></span>{{Countryfont2}}</div>
							<div class="countrybox2" ng-style="countrybox2">
								<ul class="cu-name2" >
									<li ng-repeat="i in country" ng-click="numCountryselect2(i,$event)" ng-class="{even: $even, odd: $odd}">
										<span><img src="iconstatus/flag/test_f/{{i.country_code}}.png" width="22"></span>
										<div ng-if="flagcheck == 1" style="display: inline-block;"><p style="display: inline-block;margin: 0;width: 80px">(+{{i.phonecode}})</p>
											<span id="name-cu">{{i.name_en}}</span></div>
										<div ng-if="flagcheck == 2" style="display: inline-block;"><p style="display: inline-block;margin: 0;width: 80px">(+{{i.phonecode}})</p><span id="name-cu">{{i.name_th}}</span></div>
										<div ng-if="flagcheck == 3" style="display: inline-block;"><p style="display: inline-block;margin: 0;width: 80px">(+{{i.phonecode}})</p><span id="name-cu">{{i.name_cn}}</span></div>
									</li>
								</ul>
							</div>
						</div>

						<div style="padding: 0">
							<div ng-click="Country2()" class="form-control" ng-model="selectcountryValue2" id="labelcun" style="width: 30%; display: inline-block;float: left;"><span><img src="iconstatus/flag/test_f/{{imgcoutry2}}.png" width="22" style="margin-right: 5px"></span>{{tcountryValue2}}</div>

							<div style="width: 67%; float: right; margin-bottom: 20px; display: inline-block;">
								<input type="tel" class="form-control" ng-model="elocalphonenew" value="{{elocalphonenew}}" ng-change="Elocalphone(elocalphonenew)"  />

							</div> 
						</div>
						<Br/>
						<div class="btn-saveso"  ng-click="savesocialquest_detail()" data-dismiss="modal">
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

<!-- EDIT EMAIL1 -->

<div class="modal fade" id="editEmail1" role="dialog">
    <div class="modal-dialog">
      	<div class="modal-content">
	        <div class="modal-body" style="padding: 0">
	        	<i class="back_close " ng-click="canceleditEmail1()" data-dismiss="modal">&#10006</i>
	        	<div align="center" style="font-size: 18px;padding: 10px;">
					<span> <img src="images/email1.png" width="35"></span>
					<span  ng-if="flagcheck == 1">E-mail 1 </span>
					<span  ng-if="flagcheck == 2">อีเมล 1 </span>
					<span  ng-if="flagcheck == 3">電郵 1 </span>
				</div>
				<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 15px;    border-radius: 0 0 8px 8px;" align="center">
					<p style="margin: 0;color: red;display: none" align="center" ng-style="reqmail">
						<span ng-if="flagcheck == 1">Please enter your e-mail</span>
						<span ng-if="flagcheck == 2">กรุณาใส่อีเมลของคุณ</span>
						<span ng-if="flagcheck == 3">请输入您的电子邮件</span>
					</p>
					<p class="textdetail" style="width: 100%;">
						<input type="text" class="form-control" value="{{agent_email}}" ng-model="agent_email" ng-change="functionemailnull(agent_email)" style="height: 50px" placeholder="example@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" / required>
					</p>
					<div class="btn-saveso"  ng-click="savesocialquest_detail()" style="margin-top: 15px; padding: 11px;text-align: center;" data-dismiss="modal">
						<span class="fa fa-save "  aria-hidden="true" align="center" style="font-size: 20px" ></span>
						<span ng-if="flagcheck == 1">Save</span>
						<span ng-if="flagcheck == 2">บันทึก</span>
						<span ng-if="flagcheck == 3">保存</span>
					</div>
				</div>
	        </div>
      	</div>
    </div>
  </div>

  <div class="modal fade" id="editEmail2" role="dialog">
    <div class="modal-dialog">
      	<div class="modal-content">
	        <div class="modal-body" style="padding: 0">
	        	<i class="back_close " ng-click="canceleditEmail2()" data-dismiss="modal">&#10006</i>
	        	<div align="center" style="font-size: 18px;padding: 10px;">
					<span> <img src="images/email2.png" width="35"></span>
						<span  ng-if="flagcheck == 1">E-mail 2 </span>
						<span  ng-if="flagcheck == 2">อีเมล 2 </span>
						<span  ng-if="flagcheck == 3">電郵 2 </span>
				</div>
				<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 15px;    border-radius: 0 0 8px 8px;" align="center">
						<!--  <div > -->
						<p style="margin: 0;color: red;display: none" align="center" ng-style="reqmail2">
							<span ng-if="flagcheck == 1">Please enter your e-mail</span>
							<span ng-if="flagcheck == 2">กรุณาใส่อีเมลของคุณ</span>
							<span ng-if="flagcheck == 3">请输入您的电子邮件</span>
						</p>
						<p class="textdetail" style="width: 100%;">
							<input type="email" class="form-control" size="77" maxlength="100" name="email" value="{{agent_email2}}" ng-model="agent_email2" ng-change="functionemail2null(agent_email2)" style="    height: 50px;" placeholder="example@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" / required>
						</p>
						<div class="btn-saveso"  ng-click="savesocialquest_detail()" style="    margin-top: 15px;padding: 11px;text-align: center;"  ng-style="reqsave" data-dismiss="modal">
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



<div class="modal fade" id="editsocialall" role="dialog">
    <div class="modal-dialog">
      	<div class="modal-content">
	        <div class="modal-body" style="padding: 0;">
           		<i class="back_close " ng-click="canceleditsocialall()" data-dismiss="modal">&#10006</i>
	          	<div align="center" style="font-size: 18px; padding: 10px;">
					<span  ng-if="flagcheck == 1">Edit social</span>
					<span  ng-if="flagcheck == 2">แก้ไขโซเชียล</span>
					<span  ng-if="flagcheck == 3">编辑社会</span>
				</div>
				<div ng-repeat="item in socialall" class="Edit{{item.id}}"  style="background: #f0f0f0;font-size: 18px; margin-bottom: 0; padding-bottom: 16px; border-radius: 0 0 8px 8px;padding-top: 20px;display: none">
                        
						<table  width="100%">
							<tr >
								<td width="4%"></td>
								<td>
									<img src="images/social/{{item.type_icon}}" style="width: 50px; border-radius: 10px; height: 50px;">
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
									<div class="btn-saveso"  ng-click="update_social_bookAgent()" style=" margin-top: 15px; padding: 11px;text-align: center;" data-dismiss="modal">
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
	        </div>        
      	</div>
    </div>
 </div>


<div modal="showModal" class="box-bg37" ng-style="popupdelay" id="bg-modal">
	<div class="box-modal-top-50-lg box-modal-top-50-md box-modal-top-50-sm">
		<div class="modal-body" id="body-photo" style="padding: 0">
           <!-- <i class="back_close fa fa-angle-left" ng-click="cancel()" class=""></i> -->
           <i class="back_close " ng-click="cancel()" data-dismiss="modal">&#10006</i>

			<!-- <img src="images/cancel.png"  align="center" class="modal_close"/> -->
			<div class="box-img-photo">
				<div class="box-in-photo" >

                 
					<p align="center" style="font-size: 18px;">
						<span ng-if="flagcheck == 1" style="font-size: 18px;">Inform the driver </span>
						<span ng-if="flagcheck == 2" style="font-size: 18px;">แจ้งคนขับ </span>
						<span ng-if="flagcheck == 3" style="font-size: 18px;">通知司机</span>
					</p>
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;">
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

<!-- history -->
<div id="history" class="modal modal-fullscreen fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    	<div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;background-color: #fff;position: fixed;top: 0;width: 100%;z-index: 2000">
    	<i ng-click="cancelpopupdriver()"  data-dismiss="modal" style="position: absolute; right: 0;
    font-style: normal; margin-right: 10px; z-index: 1060; color: #9E9E9E; font-size: 21px !important;">&#10006</i>
						<img src="images/all_message.png?v=<?=$cache;?>" align="left" width="20" align="absmiddle">
						<span ng-if="flagcheck == 1">All history</span>
						<span ng-if="flagcheck == 2">ประวัติแชท</span>
						<span ng-if="flagcheck == 3">所有历史</span>
						<!-- <img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="display: inline-block;" > -->
						<!-- <img src="images/driver.png?v=<?=$cache;?>" width="20" style="display: inline-block;" ng-if="idTypemessage == 1">
						<img src="images/callchat.png?v=<?=$cache;?>" width="20" style="display: inline-block;" ng-if="idTypemessage == 4">   -->
					</div>
					
					
  
			 <!-- chat   -->
<?php include "sub/chat.php"; ?>
 <!-- chat   -->
					                <!-- <i class="back_close" ng-click="cancelpopupdriver()"  data-dismiss="modal">&#10006</i> -->

 
</div>
 
<div modal="showModal" class="box-bg40" ng-style="" id="bg-modal">
	<div class="box-modal-top-50-lg box-modal-top-50-md box-modal-top-50-sm">
      
		<div class="modal-body" id="body-photo" style="padding: 0">
           <i class="back_close fa fa-angle-left" ng-click="cancel()" class=""></i>

			<!-- <img src="images/cancel.png" ng-click="cancel()" align="center" class="modal_close" /> -->
			<div class="box-img-photo">
				<div class="box-in-photo" >

                 
					<p align="center" style="font-size: 18px;">
						<span ng-if="flagcheck == 1" style="font-size: 18px;">Inform the driver </span>
						<span ng-if="flagcheck == 2" style="font-size: 18px;">แจ้งคนขับ </span>
						<span ng-if="flagcheck == 3" style="font-size: 18px;">通知司机</span>
					</p>
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;">
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


<div modal="showModal" class="box-bg41" ng-style="scommentTocollcenter" id="bg-modal">
	<div class="box-modal-top-50-lg box-modal-top-50-md box-modal-top-50-sm">
      
		<div class="modal-body" id="body-photo" style="padding: 0">
           <i class="back_close fa fa-angle-left" ng-click="cancel()"  ></i>

			<!-- <img src="images/cancel.png" ng-click="cancel()" align="center" class="modal_close" /> -->
			<div class="box-img-photo">
				<div class="box-in-photo" >

                 
					<div align="center" style="font-size: 18px; padding: 8px;">
						<span ng-if="flagcheck == 1" style="font-size: 18px;">Chat with the call center </span>
						<span ng-if="flagcheck == 2" style="font-size: 18px;">การแชทกับศูณบริการลูกค้า </span>
						<span ng-if="flagcheck == 3" style="font-size: 18px;">与司机聊天客服</span>
					</div>
                        
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;" >

						<div ng-style="selectcommentradio2" style="display: none;">
							<div class="bradio" style="padding-left: 0;font-size: 18px">
								<label ng-click="Chatcallcenter(1)" style="margin: 0"><input type="radio" name="chickchat"  id="checkedchat"  style="margin-top: 0;">
									<p  ng-if="flagcheck == 1">Select the existing words</p>
									<p  ng-if="flagcheck == 2">เลือกคำที่มีอยู่แล้ว</p>
									<p  ng-if="flagcheck == 3">选择已经有的词句</p>
								</label>
							</div>
							<div class="bradio" style="padding-left: 0;font-size: 18px">
								<label ng-click="Chatcallcenter(2)" style="margin: 0"><input type="radio" name="chickchat"  id="checkedchat"  style="margin-top: 0;">
									<p  ng-if="flagcheck == 1">Chat</p>
									<p  ng-if="flagcheck == 2">แชท</p>
									<p  ng-if="flagcheck == 3">聊天</p>
								</label>
							</div>
						</div>
                              
                              
					</div>
				</div>
			</div>
		</div>
      
    
	</div>

</div>

<!-- <div modal="showModal" class="box-bg42" > -->
	<div class="modal-body" style="background: #f0f0f0;position: fixed; top: 0; right: 0; bottom: 0;  left: 0; padding: 0; z-index: 101; display: none; width: 100%; height: auto;overflow-y: scroll;overflow-x: hidden; " ng-style="popupdriverinfo" id="bg-modal">
		<div id="body-photo" style="padding: 0;">
			<div class="box-img-photo">
			
				<div ng-style="figmenudriver" style="background-color: #fff;">
				<i class="back_close " ng-click="cancelopenpopupdriverinfo()">&#10006</i>
					<div align="center" style="font-size: 18px;padding: 10px;background:#fff">
						<img src="images/driver.png?v=<?=$cache;?>" width="25" align="left" style="margin-left:  10px;" ng-click="fsmenudriver()">
						<span ng-if="flagcheck == 1">Contact driver</span>
						<span ng-if="flagcheck == 2">ติดต่อคนขับ</span>
						<span ng-if="flagcheck == 3">联系司机</span>
					</div>
					<ul class="Inform-driver-ul-main" style="margin-bottom: 0;font-size: 16px;" ng-style="">
						<li  style=" margin-bottom: 0; background: #f0f0f0; border-radius: 0 0 8px 8px;">
							<input type="hidden" name="vcidinfo" value="{{vdIDclickinfo}}" id="vcclickinfo"/>
							<!-- <input type="hidden" name="data" value="{{data}}" id="dataorderID"/>
							<input type="hidden" name="data" value="{{flagcheck}}" id="flagcheck"/> -->
							<table width="100%" cellpadding="8" cellspacing="8">
											<tr>  
												<td colspan="5">
													<div style="padding: 0 5px">
														<div ng-click="detailfirsthome(vdIDclickinfo)" data-toggle="modal" data-target="#popupdriverdetail">
															<table width="100%" style="margin-bottom: 5px; color: #fff; border-radius: 8px;    background: #3b5998;">
																<tr>
                                 
																	<td align="center" style=" padding: 5px 0; " width="60">
																		<div  style="position: relative;border: 0px solid #999999; width: 30px; height: 30px; text-align: center;    border-radius: 60px; margin-left: 2%;    color: #3b5998; background: #fff;    box-shadow: 1px 1px 5px #999999;">
																			<img src="images/car-detail.png" width="25" >
																		</div>
																	</td>
																	<td colspan="3" style="font-size: 16px" valign="button">
																		<span class="" ng-if="flagcheck == 1" >Driver / Car  / Facilitiy / Seating</span>
																		<span class="" ng-if="flagcheck == 2" >คนขับ / รถ / ความสะดวก / ที่นั่ง</span>
																		<span class="topic-page" ng-if="flagcheck == 3" >车 / 司机 / 设施 / 座位数  </span>
																	</td>

																	<td align="center">
                                      
																		<i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true" style="color: #FFF; margin-right: 5px;"></i>
																	</td>
                                  
																</tr>
															</table>
														</div>
													</div>
												</td>
											</tr>
											<tr ng-if="checkarea == 'In'">
												<td align="center" data-toggle="modal" data-target="#flightdelaydrivermodal" ng-click="testbtn()">
													<img src="img/delayf.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />		
													<span ng-if="flagcheck == 1" >flight delay</span>
													<span ng-if="flagcheck == 2">เที่ยวบินล่าช้า </span>
													<span ng-if="flagcheck == 3">航班延误</span>
												</td>
												<td width="10"></td>
												<td align="center" data-toggle="modal" data-target="#changedrivermodal" ng-click="testbtn()">
													<img src="img/change.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													<span ng-if="flagcheck == 1" >Change flight</span>
													<span ng-if="flagcheck == 2">เปลี่ยนเที่ยวบิน </span>
													<span ng-if="flagcheck == 3">换航班</span>
													
												</td>
												
												<td width="10"></td>
												<td width="30%" align="center" ng-click="landingdrivermodal()" data-toggle="modal" data-target="#landingdrivermodal">
                                  
													<img src="img/landing.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->



													<span ng-if="flagcheck == 1" >Landing </span>
													<span ng-if="flagcheck == 2">เครื่องลงจอด </span>
													<span ng-if="flagcheck == 3">飞机降落</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
                                  
												</td>
												
												
												
												
											</tr>
											<tr>
												<td height="5" colspan="5" style="border-top: 1px solid #f0f0f0; "></td>
											</tr>
                               
											<tr>
												<!-- <td align="center" >
													<img src="images/find_message.png?v=<?=$cache;?>" width="30"  align="absmiddle" style="padding: 5px 0;" ng-click="popup_goto_divermsgfirst(vdIDclickinfo)">
													<br />
													<span ng-if="flagcheck == 1" >Frequent</span>
													<span ng-if="flagcheck == 2">คำใช้บ่อย </span>
													<span ng-if="flagcheck == 3">常用词句</span>
													<div class="length-state" >0</div>
 
 
												</td> -->
												<td width="30%"  height="61" align="center" ng-click="popup_goto_beforefirst(vdIDclickinfo)" data-toggle="modal" data-target="#beforedrivermodal">
													<img src="images/usercar_befor.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;"
													>
													<br/>
													<!-- <div ng-click="blockBeforepopup(state4);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Before </span>
													<span ng-if="flagcheck == 2">ใช้ล่วงหน้า </span>
													<span ng-if="flagcheck == 3">提前使用</span>
													<!-- <div ng-bind="state4.length" class="length-state"></div> -->
													<!-- </div> -->
                                     
												</td>
												
												
												<td width="10"></td>
												<td width="30%" align="center" ng-click="popup_goto_delayfirst(vdIDclickinfo)" data-toggle="modal" data-target="#delaydrivermodal">
                                  
													<img src="images/usercar_after.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Delay </span>
													<span ng-if="flagcheck == 2">เลื่อนการใช้ </span>
													<span ng-if="flagcheck == 3">推迟使用</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
                                  
												</td>
												
												
												<td width="10" ></td>
												<td width="30%" align="center" ng-click="popupallchat(vdIDclickinfo);popup_goto_waitfirst(vdIDclickinfo)" data-toggle="modal" data-target="#waitdrivermodal">
													<img src="images/clock_wait.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													<!-- <div ng-click="blockBeforepopup(state3);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Waiting </span>
													<span ng-if="flagcheck == 2">ฉันรออยู่แล้ว </span>
													<span ng-if="flagcheck == 3">我已在等</span>
													<!-- <span ng-bind="state3.length" class="length-state"></span> -->
													<!-- </div> -->
                                 
												</td>
											</tr>
											<tr>
												<td height="5" colspan="5" style="border-top: 1px solid #f0f0f0; "></td>
											</tr>
											<tr>
												<td align="center"  ng-click="sharelocationtodriver(vdIDclickinfo)" data-toggle="modal" data-target="#sharelocationtodriver">
													<i class="fa fa-map-marker" aria-hidden="true" style="font-size: 45px; color: #3b5998;"></i>
													<!-- <img src="images/allhis.png?v=<?=$cache;?>" width="30"  align="absmiddle" style="padding: 5px 0;"> --><br>

													<span ng-if="flagcheck == 1">Location</span>
													<span ng-if="flagcheck == 2">แชร์ตำแหน่ง</span>
													<span ng-if="flagcheck == 3">位置共享</span>
													<!-- <div class="length-state" ng-bind="state1.length+state2.length+state3.length+state4.length"></div> -->
													<!-- <div class="length-state">0</div> -->
                                
												</td>
												<td width="10" ></td>
												<!-- <td align="center"  ng-click="popup_goto_diverchatfirst(vdIDclickinfo);popuppopupallhitory(vdIDclickinfo)" data-toggle="modal" data-target="#chatdrivermodal" id="chatvoucher">
													<img src="images/all_message.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													
													<span ng-if="flagcheck == 1" >Chat</span>
													<span ng-if="flagcheck == 2">การแชท </span>
													<span ng-if="flagcheck == 3">交谈</span> 
													<span style="display: inline-block; width: 25px;  height: 20px; position: absolute; background: red; color: #fff; margin-top: -49px; border-radius: 35%; text-shadow: none; font-size: 13px; text-align: center; line-height: 1.5; margin-left: -20px;" ng-if="i.count_driver != '0' " ng-repeat="i in nontifigcomment">
														<span ng-bind=" i.count_driver" ></span>
													</span>
													
												</td> -->
												
												<!-- <td width="30%" align="center" data-toggle="modal" data-target="#onthecardrivermodal" ng-click="onthecardrivermodal()">
                                  
													<img src="img/onthecar.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />



													
													<span ng-if="flagcheck == 1" >On the car </span>
													<span ng-if="flagcheck == 2">อยู่บนรถ </span>
													<span ng-if="flagcheck == 3">在车上</span>
													
                                  
												</td> -->
												
												<td width="10" ></td>
												<td align="center" >
													<a href="tel:{{TB_driver_phone}}" ng-click="confirm_sendmaildelay(10,vdIDclickinfo)" style="text-decoration: none;color: #555;"><img src="images/phone.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;">
													<br />
													<span ng-if="flagcheck == 1" >Call</span>
													<span ng-if="flagcheck == 2">โทร </span>
													<span ng-if="flagcheck == 3">通话</span>
													</a>
												
												</td>
												<!-- <td width="30%" align="center" data-toggle="modal" data-target="#lostdrivermodal" ng-click="lostdrivermodal()">
													<img src="img/lost.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													<span ng-if="flagcheck == 1" >Lost </span>
													<span ng-if="flagcheck == 2">ลืมของ </span>
													<span ng-if="flagcheck == 3">丢失</span>
												</td> -->
												
											</tr>
											<tr>
												<td height="5" colspan="5" style="border-top: 1px solid #f0f0f0; "></td>
											</tr>
											<!-- <tr>												
												<td width="30%" align="center" data-toggle="modal" data-target="#restaurantdrivermodal" ng-click="restaurantdrivermodal()">
                                  
													<img src="img/restaurant.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													<span ng-if="flagcheck == 1" >Restaurant </span>
													<span ng-if="flagcheck == 2">ร้านอาหาร </span>
													<span ng-if="flagcheck == 3">餐厅</span>
												</td>
												<td width="10"></td>
												<td width="30%" align="center" data-toggle="modal" data-target="#attractiondrivermodal" ng-click="attractiondrivermodal()">
                                  
													<img src="img/attraction.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													<span ng-if="flagcheck == 1" >Attractions</span>
													<span ng-if="flagcheck == 2">แหล่งท่องเที่ยว </span>
													<span ng-if="flagcheck == 3">景点</span>
												</td>
												
												<td width="10"></td>
												<td align="center" >
													<a href="tel:{{TB_driver_phone}}" ng-click="confirm_sendmaildelay(10,vdIDclickinfo)" style="text-decoration: none;color: #555;"><img src="images/phone.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;">
													<br />
													<span ng-if="flagcheck == 1" >Call</span>
													<span ng-if="flagcheck == 2">โทร </span>
													<span ng-if="flagcheck == 3">通话</span>
													</a>
												
												</td>
												<td align="center"  ng-click="popup_goto_diverchatfirst(vdIDclickinfo)" data-toggle="modal" data-target="#chatdrivermodal">
													<img src="images/all_message.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													
													<span ng-if="flagcheck == 1" >Chat</span>
													<span ng-if="flagcheck == 2">การแชท </span>
													<span ng-if="flagcheck == 3">交谈</span> 
													
												</td>
												
											</tr> -->
											<tr>
												<td height="5" colspan="5" style="border-top: 1px solid #f0f0f0; "></td>
											</tr>
											<tr >
												<td></td>
 
												<td width="10"></td>
												<td align="center"  ng-click="popuppopupallhitory(vdIDclickinfo)" data-toggle="modal" data-target="#history">
												
												
												<img src="images/allhis.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;"   ><br>

													<span ng-if="flagcheck == 1">All history</span>
													<span ng-if="flagcheck == 2">ประวัติแชท</span>
													<span ng-if="flagcheck == 3">所有历史</span>
													<span class="" ng-if="i.count_driver != '0' " ng-repeat="i in nontifigcomment" style="display: inline-block; width: 25px;  height: 20px; position: absolute; background: red; color: #fff; margin-top: -49px; border-radius: 35%; text-shadow: none; font-size: 13px; text-align: center; line-height: 1.5; margin-left: -30px;">
														<span ng-bind=" i.count_driver" ></span>
													</span>
												
												</td>
												<td width="10"></td>
												<td >
												</td>
											</tr>
											
											
											
										</table>
										<table width="100%" style="margin-top: 15px;">
											<tr>
												<td colspan="5" align="center" style="background: #fff; padding: 5px 22px; color: #000; font-size: 18px;">
													<span ng-if="flagcheck == 1">Transfer status</span>
													<span ng-if="flagcheck == 2">สถานะรับส่ง</span>
													<span ng-if="flagcheck == 3">接送状态</span>
												</td>
											</tr>
											<tr>
												
												<td align="center" width="30%" valign="top" style="padding-top: 5px">



													<span ng-if="flagcheck == 1">Driver arrived </span>
													<span ng-if="flagcheck == 2">คนขับมาถึง </span>
													<span ng-if="flagcheck == 3">司机到达</span><Br/>
													
													
													<div ng-bind="statearrived_date*1000 | date:' yyyy-MM-dd '" ng-if="statearrived != 0"></div>
													<div ng-if="statearrived == 0">
													<span> - </span><!-- 
														<span ng-if="flagcheck == 1" >Waiting </span>
														<span ng-if="flagcheck == 2">รอ </span>
														<span ng-if="flagcheck == 3">在等</span> -->
													</div>
													<img src="images/yes.png?v=<?=$cache;?>1"  align="" style="width: 15px;position: absolute;" ng-if="statearrived != 0">
													<img src="images/no.png?v=<?=$cache;?>1"  align="" style="width: 15px;" ng-if="statearrived == 0">
													 <a ng-if="statearrived != 0" href="https://maps.google.com/maps?q={{item.latitude}},{{item.longitude}}&hl=th;z=14&output=embed" target="_blank"><img src="images/icon/view/map.png?v=<?=$cache;?>"  width="30" >
													 </a>
												</td>
												<td width="10"></td>
												<td align="center" width="30%" valign="top" style="padding-top: 5px">
													<span ng-if="flagcheck == 1" >On the car </span>
													<span ng-if="flagcheck == 2">อยู่บนรถแล้ว </span>
													<span ng-if="flagcheck == 3">已在车上</span>
													<Br/>
													
													<div ng-if="statevehicle == 0">
													<span> - </span>
														<!-- <span ng-if="flagcheck == 1" >Waiting </span>
														<span ng-if="flagcheck == 2">รอ </span>
														<span ng-if="flagcheck == 3">在等</span> -->
													</div>
													<div ng-bind="statevehicle_date*1000 | date:' yyyy-MM-dd'" ng-if="statevehicle != 0"></div>
													
													<img src="images/yes.png?v=<?=$cache;?>1"  align="" style="width: 15px;position: absolute;" ng-if="statevehicle != 0">
													<img src="images/no.png?v=<?=$cache;?>1"  align="" style="width: 15px;" ng-if="statevehicle == 0">
													 <a ng-if="statevehicle != 0" href="https://maps.google.com/maps?q={{item.latitude}},{{item.longitude}}&hl=th;z=14&output=embed" target="_blank"><img src="images/icon/view/map.png?v=<?=$cache;?>"  width="30" >
													 </a>

												</td>
												<td width="10"></td>
												<td align="center" width="32%" valign="top" style="padding-top: 5px">



													<span ng-if="flagcheck == 1" >T/F Completed </span>
													<span ng-if="flagcheck == 2">รับส่งเสร็จสิ้น </span>
													<span ng-if="flagcheck == 3">接送完成</span>
													<Br/>
													
													
													<div ng-bind="statecomplete_date*1000 | date:' yyyy-MM-dd '" ng-if="statecomplete != 0"></div>
													<div ng-if="statecomplete == 0">
													<span> - </span>
														<!-- <span ng-if="flagcheck == 1" >Waiting </span>
														<span ng-if="flagcheck == 2">รอ </span>
														<span ng-if="flagcheck == 3">在等</span> -->
													</div>
													<img src="images/yes.png?v=<?=$cache;?>1"  align="" style="width: 15px;position: absolute;" ng-if="statevehicle != 0">
													<img src="images/no.png?v=<?=$cache;?>1"  align="" style="width: 15px;" ng-if="statecomplete == 0">
													<a ng-if="statecomplete != 0" href="https://maps.google.com/maps?q={{item.latitude}},{{item.longitude}}&hl=th;z=14&output=embed" target="_blank"><img src="images/icon/view/map.png?v=<?=$cache;?>"  width="30" ng-if="statecomplete != 0">
													</a>

												</td>
											</tr>
										</table>
									<!-- </td>
								</tr>
							</table> -->
							<span style="display: none;">          
								<div class="btn-inform" style="background: #37c837">
									<i class="fa fa-paper-plane fa-lg " aria-hidden="true"></i>
								</div>
								<span ng-if="flagcheck == 1" >Inform the driver </span>
								<span ng-if="flagcheck == 2">แจ้งคนขับ </span>
								<span ng-if="flagcheck == 3">通知司机</span>
								<span style="color: #000">({{setionflight.length}})</span>
								<i class="fa fa-commenting-o fa-lg" aria-hidden="true" style="float: right;  color: #37c837; padding: 5px 0; /* line-height: 0.8; */ font-size: 30px;" ng-click="openpopupcommentTodriver(vdIDclickinfo)"></i>
							</span> 
						</li>
					</ul>
					
				</div>
				
			</div>
		</div>
	</div>
<!-- </div> -->



	<div class="modal-body" style="background: #f0f0f0;position: fixed;
    top: 0; right: 0; bottom: 0; left: 0; padding: 0; z-index: 101; display: none; width: 100%;    height: 100%;
   " ng-style="popupdriverOP" id="bg-modal">
      
		<div class="" id="body-photo" style="padding: 0;">
			<!-- <img src="images/cancel.png" ng-click="cancel()" align="center" class="modal_close" /> -->
			<div class="box-img-photo">
				<div ng-style="figmenuop" style="background-color: #fff;width: 100%">
					<i class="back_close " ng-click="cancel()">&#10006</i>

					<div style="font-size: 16px; padding: 5px;background-color: #fff" align="center">                    
						<img src="images/callchat.png?v=<?=$cache;?>" width="30" style="margin-right: 5px">
						<span ng-if="flagcheck == 1">Contact OP</span>
						<span ng-if="flagcheck == 2">ติดต่อโอพี</span>
						<span ng-if="flagcheck == 3">联系客服</span>
						
					</div>
					<ul class="Inform-driver-ul-main" style="margin-bottom: 0;">
						<li style="background-color: #f0f0f0;border-radius:8px;margin-bottom: 0    ">
							<input type="hidden" name="vcidinfo" value="{{vdIDclickinfo}}">
							<table width="100%" cellpadding="8" cellspacing="8">
								<tr ng-if="checkarea == 'In'">
												<td align="center" data-toggle="modal" data-target="#changedrivermodal_toop" ng-click="changelandingopmodal()">
													<img src="img/delayf.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />		
													<span ng-if="flagcheck == 1" >flight delay</span>
													<span ng-if="flagcheck == 2">เที่ยวบินล่าช้า </span>
													<span ng-if="flagcheck == 3">航班延误</span>
												</td>
												<td width="10"></td>
												<td align="center" data-toggle="modal" data-target="#flightdelaydrivermodal_toop" ng-click="testbtn()">
													<img src="img/change.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													<span ng-if="flagcheck == 1" >Change flight</span>
													<span ng-if="flagcheck == 2">เปลี่ยนเที่ยวบิน </span>
													<span ng-if="flagcheck == 3">换航班</span>													
												</td>
												
												<td width="10"></td>
												<td width="30%" align="center" data-toggle="modal" data-target="#landingdrivermodal_toop" ng-click="landingopmodal()">
                                  
													<img src="img/landing.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->



													<span ng-if="flagcheck == 1" >Landing </span>
													<span ng-if="flagcheck == 2">เครื่องลงจอด </span>
													<span ng-if="flagcheck == 3">飞机降落</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
                                  
												</td>
											</tr>
											<tr>
												<td height="5" colspan="5" style="border-top: 1px solid #f0f0f0; "></td>
											</tr>
											<tr ng-if="typeTour == 'transfer'"
											>
												<td width="30%"  height="61" align="center" ng-click="popup_goto_beforefirst_toop(vdIDclickinfo)" data-toggle="modal" data-target="#beforedrivermodal_toop">
													<img src="images/usercar_befor.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;"
													>
													<br/>
													<!-- <div ng-click="blockBeforepopup(state4);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Before </span>
													<span ng-if="flagcheck == 2">ใช้ล่วงหน้า </span>
													<span ng-if="flagcheck == 3">提前使用</span>
													<!-- <div ng-bind="state4.length" class="length-state"></div> -->
													<!-- </div> -->
                                     
												</td>
												
												
												<td width="10"></td>
												<td width="30%" align="center" ng-click="popup_goto_delayfirst_toop(vdIDclickinfo)" data-toggle="modal" data-target="#delaydrivermodal_toop">
                                  
													<img src="images/usercar_after.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													<!-- <div ng-click="blockBeforepopup(state1);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Delay </span>
													<span ng-if="flagcheck == 2">เลื่อนการใช้ </span>
													<span ng-if="flagcheck == 3">推迟使用</span>
													<!-- <div ng-bind="state1.length" class="length-state"></div> -->
													<!-- </div> -->
                                  
												</td>
												
												
												<td width="10" ></td>
												<td width="30%" align="center" ng-click="popup_goto_waitfirst_toop(vdIDclickinfo)" data-toggle="modal" data-target="#waitdrivermodal_toop">
													<img src="images/clock_wait.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													<!-- <div ng-click="blockBeforepopup(state3);popupallchat(vdIDclickinfo)"> -->
													<span ng-if="flagcheck == 1" >Waiting </span>
													<span ng-if="flagcheck == 2">ฉันรออยู่แล้ว </span>
													<span ng-if="flagcheck == 3">我已在等</span>
													<!-- <span ng-bind="state3.length" class="length-state"></span> -->
													<!-- </div> -->
                                 
												</td>
											</tr>
											<tr>
												<td height="5" colspan="5" style="border-top: 1px solid #f0f0f0; "></td>
											</tr>
											<tr>
												<td  width="30%" align="center" ng-click="sharelocationtoop(vdIDclickinfo)" data-toggle="modal" data-target="#sharelocationtodriver_toop">
													<i class="fa fa-map-marker" aria-hidden="true" style="font-size: 45px; color: #3b5998;"></i>
													<!-- <img src="images/allhis.png?v=<?=$cache;?>" width="30"  align="absmiddle" style="padding: 5px 0;"> --><br>

													<span ng-if="flagcheck == 1">Location</span>
													<span ng-if="flagcheck == 2">แชร์ตำแหน่ง</span>
													<span ng-if="flagcheck == 3">位置共享</span>
													<!-- <div class="length-state" ng-bind="state1.length+state2.length+state3.length+state4.length"></div> -->
													<!-- <div class="length-state">0</div> -->
                                
												</td>
												<td width="10" ></td>
												<td align="center"  ng-click="popup_goto_diverchatfirst(vdIDclickinfo);popuppopupallhitory(vdIDclickinfo)" data-toggle="modal" data-target="#chatdrivermodal" id="chatvoucherop">
													<img src="images/all_message.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													
													<span ng-if="flagcheck == 1" >Chat</span>
													<span ng-if="flagcheck == 2">การแชท </span>
													<span ng-if="flagcheck == 3">交谈</span> 
													<span class="length-statehomereddriver" ng-if="i.count_driver != '0' " ng-repeat="i in nontifigcomment">
														<span ng-bind=" i.count_op" ></span>
													</span>
													
												</td>
												<!-- <td width="30%" align="center" data-toggle="modal" data-target="#onthecardrivermodal_toop" ng-click="onthecaropmodal()">
                                  
													<img src="img/onthecar.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													<span ng-if="flagcheck == 1" >On the car </span>
													<span ng-if="flagcheck == 2">อยู่บนรถ </span>
													<span ng-if="flagcheck == 3">在车上</span>
												</td> -->
												
												<td width="10" ></td>
												<td align="center" >
													<a href="tel:0630781168" ng-click="confirm_sendmaildelay(11,vdIDclickinfo)" style="text-decoration: none;color: #555;"><img src="images/phone.png?v=<?=$cache;?>" width="35" align="center" align="absmiddle" style="padding: 5px 0;">
													<br />
													<span ng-if="flagcheck == 1" >Call</span>
													<span ng-if="flagcheck == 2">โทร </span>
													<span ng-if="flagcheck == 3">通话</span>
													</a>
												
												</td>
												<!-- <td width="30%" align="center" data-toggle="modal" data-target="#lostdrivermodal_toop" ng-click="lostopmodal()">
                                  
													<img src="img/lost.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													<span ng-if="flagcheck == 1" >Lost </span>
													<span ng-if="flagcheck == 2">ลืมของ </span>
													<span ng-if="flagcheck == 3">丢失</span>
												</td> -->
												
											</tr>
											<tr>
												<td height="5" colspan="5" style="border-top: 1px solid #f0f0f0; "></td>
											</tr>
											<!-- <tr>
												
												<td width="30%" align="center" data-toggle="modal" data-target="#restaurantdrivermodal_toop" ng-click="restaurantopmodal()">
                                  
													<img src="img/restaurant.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													<span ng-if="flagcheck == 1" >Restaurant </span>
													<span ng-if="flagcheck == 2">ร้านอาหาร </span>
													<span ng-if="flagcheck == 3">餐厅</span>
												</td> 
												<td width="10"></td>
												<td width="30%" align="center" data-toggle="modal" data-target="#attractiondrivermodal_toop" ng-click="attractionopmodal()">
                                  
													<img src="img/attraction.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													<span ng-if="flagcheck == 1" >Attractions</span>
													<span ng-if="flagcheck == 2">แหล่งท่องเที่ยว </span>
													<span ng-if="flagcheck == 3">景点</span>
												</td> 
												
												
												<td width="10"></td>
												<td align="center" >
													<a href="tel:0630781168" ng-click="confirm_sendmaildelay(11,vdIDclickinfo)" style="text-decoration: none;color: #555;"><img src="images/phone.png?v=<?=$cache;?>" width="35" align="center" align="absmiddle" style="padding: 5px 0;">
													<br />
													<span ng-if="flagcheck == 1" >Call</span>
													<span ng-if="flagcheck == 2">โทร </span>
													<span ng-if="flagcheck == 3">通话</span>
													</a>
												
												</td> 
												<td align="center"  ng-click="popup_goto_callcenterchat(vdIDclickinfo)" data-toggle="modal" data-target="#chatdrivermodal_toop">
													<img src="images/all_message.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;" >
													<br />
													
													<span ng-if="flagcheck == 1" >Chat</span>
													<span ng-if="flagcheck == 2">การแชท </span>
													<span ng-if="flagcheck == 3">交谈</span> 
													
												</td> 
												
											</tr> -->
											<tr>
												<td height="5" colspan="5" style="border-top: 1px solid #f0f0f0; "></td>
											</tr>
											<!-- <tr>
												<td></td>
												
												
												<td width="10"></td>
												<td align="center"  ng-click="popuppopupallhitory(vdIDclickinfo)";  data-toggle="modal" data-target="#history">
												
												<img src="images/allhis.png?v=<?=$cache;?>" width="35"  align="absmiddle" style="padding: 5px 0;"   ><br>

													<span ng-if="flagcheck == 1">All history</span>
													<span ng-if="flagcheck == 2">ประวัติแชท</span>
													<span ng-if="flagcheck == 3">所有历史</span>
													<span class="length-statehomeredop" ng-if="i.count_op != '0'" ng-repeat="i in nontifigcomment">
													<span ng-bind="i.count_op" ></span>
												</span>
													
												
												</td>
												<td width="10"></td>
												<td >
												
												
												</td>
											</tr> -->
							</table>
							<span style="display: none;">
								<span ng-if="flagcheck == 1">Call center</span>
								<span ng-if="flagcheck == 2">ศูนย์รับแจ้ง</span>
								<span ng-if="flagcheck == 3">客服</span>
							</span>
						</li>
					</ul>
				</div>				
			</div>
		</div>
	</div>


	<div class="modal fade" id="popupdriverservice" role="dialog">
    	<div class="modal-dialog">
      		<div class="modal-content">
      		<input type="hidden" name="vcidinfo" value="{{vdIDclickinfo}}">
        		<div class="modal-body" style="padding: 0">
        			<i class="back_close " ng-click="cancel()" data-dismiss="modal" style="z-index: 1201;margin-top: 5px">&#10006</i>
        			<!-- <div style="font-size: 16px;padding: 10px;background-color: #fff;    border-radius: 8px 8px 0 0;" align="center" ng-if="state6[0].status_confirm !=0">
        			
						<img src="images/pluss.png?v=<?=$cache;?>" align="center" aria-hidden="true"  width="30" style="display: inline-block;"/>
						<span ng-if="flagcheck == 1">Add Service to this Order</span>
						<span ng-if="flagcheck == 2">เพิ่มบริการในคำสั่งซื้อนี้</span>
						<span ng-if="flagcheck == 3">添加服务到此订单</span>
					</div> -->
					<div style="font-size: 16px; padding: 10px; background: #fff;  width: 100%;z-index: 
	1200;border-radius: 8px 8px 0 0;" align="center" align="center">

		<div style="position: absolute; width:35px; text-align: center; height: 35px; background: #3b5998; border-radius: 8px 0px 45px 0px; line-height: 2; color: #fff;"><span ng-bind="index"></span>
		</div>
    	<div style="margin: 3px; " align="center">
    			<div ng-if="flagcheck == 1" style="margin-left: 30px;">Add Service to this Order</div>
		        <div ng-if="flagcheck == 2" style="margin-left: 30px;">เพิ่มบริการในคำสั่งซื้อนี้</div>
		        <div ng-if="flagcheck == 3" style="margin-left: 30px;">添加服务到此订单</div>	
								
		</div>
		<div style="margin: 3px; padding-bottom: 10px; border-bottom: 1px solid #3b5998;">
			<span ng-if="flagcheck == 1" ng-bind="topic_en"></span>
								<span ng-if="flagcheck == 2" ng-bind="topic_th"></span>
								<span ng-if="flagcheck == 3" ng-bind="topic_cn"></span>
		</div>
		</div>

					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;" ng-if="state6[0].status_confirm !=0">
                        <table style=" border-color: #f0f0f0;border-style: none !important;" width="100%">
                            <tr>
                                <td width="2%"></td>
                                <td align="center" style="padding-top: 15px; ">
                                    <div style="width: 94%; margin-top: 6px; position: absolute; z-index: 1; color: rgb(117, 117, 117); text-align: center;  pointer-events: none;display: block;" ng-style="stylecheckintextincre">
                                        <span ng-if="flagcheck == 1">Hour</span>
                                        <span ng-if="flagcheck == 2">ชั่วโมง</span>
                                        <span ng-if="flagcheck == 3">小时</span>
                                    </div>
                                    <select class="form-control" ng-change="changenumincrement(stylehourincre)" id="num" ng-model="stylehourincre" data-ng-options="i  for i in num" width="100%" style="text-align: center;   padding: 5px 135px;font-size: 15px;    width: 100% !important;">
                                        <option value=""></option>
                                    </select>
                                <style>
                                    .ui-select {
                                                width: 100% !important;
                                            }
                                </style>
                                    <span> </span> 
                                </td>
                                <td width="2%"></td>
                            </tr>
                            <tr>
                            	<td colspan="3"> 
                            	<div style="display: none;padding: 8px;" ng-style="styleaddtime">
                            	<table width="100%">
                            		<tr>
                            			<td width="2%"></td>
                            	<td >
                            		<span ng-if="flagcheck == 1">Added Services</span>
		                            <span ng-if="flagcheck == 2">เพิ่มบริการ</span>
		                            <span ng-if="flagcheck == 3">额外服务</span>
                            	</td>
                            	<td width="2%"></td>
                            	<td width="">
                            		<span ng-bind='sumAddhour | currency:"":0' style="margin-right: 5px"></span>
                            			<span ng-if="flagcheck == 1">Hour</span>
	                                    <span ng-if="flagcheck == 2">ชั่วโมง</span>
	                                    <span ng-if="flagcheck == 3">小时</span>

                            	</td>
                            	<td>
                            		
                            		<span ng-bind="costsum" style="margin-right: 5px;"></span>
                            		<span >฿</span>
                            	</td>
                            		</tr>
                            	</table>
                            	</div>
                            	</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="center">
                                    <div align="center" style="margin-top: 11px;color: red">
                                        <span ng-if="flagcheck == 1">Your request must wait for a response from us.</span>
                                        <span ng-if="flagcheck == 2">คำขอของท่านต้องรอการตอบรับจากเรา</span>
                                        <span ng-if="flagcheck == 3">您的请求必须等待我们的答复。</span>
                                    </div>
                                    <div class="btm-checkin" ng-style="stylecheckinccrement" ng-click="confirm_sendmaildelay(6,vdIDclickinfo)" style="    display: none;margin-top: 15px">
                                        <i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;" ></i>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                    <div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;" ng-if="dataservice[0].status_confirm == 0" ng-repeat="item in dataservice">
                        <table style=" border-color: #f0f0f0;border-style: none !important;" width="100%">
                        	<tr>
                            	<td colspan="6"> 
                            	<table width="100%">
                            		<tr>
                            			<td width="2%"></td>
                            	<td style="padding: 10px 0px;">
                            		<span ng-if="flagcheck == 1">Added Services</span>
		                            <span ng-if="flagcheck == 2">เพิ่มบริการ</span>
		                            <span ng-if="flagcheck == 3">额外服务</span>
                            	</td>
                            	<td width="2%"></td>
                            	<td width="">
                            		<span ng-bind="item.flight_delay" style="margin-right: 5px"></span>
                            		<span ng-if="flagcheck == 1">Hour</span>
	                                <span ng-if="flagcheck == 2">ชั่วโมง</span>
	                                <span ng-if="flagcheck == 3">小时</span>

                            	</td>
                            	<td>
                            		<span ng-bind='item.cost_service | currency:"":0' style="margin-right: 5px;"></span>
                            		<span >฿</span>
                            	</td>
                            		</tr>
                            	</table>
                            	</td>
                            </tr>
                            <tr>
                                <td width="2%"></td>
                                <td width="35">
                                	<img src="images/timerec.png?v=<?=$cache;?>" width="25">
                                </td>
                                <td width="2%"></td>
                                <td align="center" style="">
                                    <div >
                                        <span ng-bind="item.flight_delay_date*1000 | date:' yyyy-MM-dd / HH:mm'"></span>
                                    </div>
                                </td>
                                <td width="2%"></td>
                                <td>
                                	<div style="display: inline-block;margin-left: 10px;color: #FF9800;" ng-if="item.status_confirm == 0">
		                            	<span ng-if="flagcheck == 1">Wait CFM</span>
		                            	<span ng-if="flagcheck == 2">รอยืนยัน</span>
		                            	<span ng-if="flagcheck == 3">等确认</span>
		                            </div>
		                            <div style="display: inline-block;margin-left: 10px;color: #1db423;" ng-if="item.status_confirm == 1">
		                            	<span ng-if="flagcheck == 1">Confirmed</span>
		                            	<span ng-if="flagcheck == 2">ยืนยันแล้ว</span>
		                            	<span ng-if="flagcheck == 3">已确认</span>
		                            </div>
		                        </td>
                            </tr>
                            
                        </table>
                    </div>
        		</div>
      		</div>
    	</div>
  </div>
	<!-- <div class="modal-body box-modal-top-50-lg box-modal-top-50-md box-modal-top-50-sm" style="background-color: #f0f0f0;position: fixed;top: 0;right: 0;bottom: 0;left: 0; padding: 0;
    z-index: 1050;display: none;width: 100%; height: 100%; overflow-y: scroll; overflow-x: hidden;
    -webkit-overflow-scrolling: touch;" ng-style="popupdriverservice" id="bg-modal">
      
		<div class="" id="body-photo" style="padding: 0">
		
		<i class="back_close " ng-click="cancel()" >&#10006</i>
			<div class="box-img-photo">
				<div style="font-size: 18px;padding: 5px;background-color: #fff" align="center" ng-if="state6[0].status_confirm !=0">
					<img src="images/pluss.png?v=<?=$cache;?>" align="center" aria-hidden="true"  width="30" style="display: inline-block;"/>
					<span ng-if="flagcheck == 1">Add Service to this Order</span>
					<span ng-if="flagcheck == 2">เพิ่มบริการในคำสั่งซื้อนี้</span>
					<span ng-if="flagcheck == 3">添加服务到此订单</span>
				</div>
				<div style="font-size: 18px;padding: 5px;" align="center" ng-if="state6[0].status_confirm == 0">
					<img src="images/pluss.png?v=<?=$cache;?>" align="center" aria-hidden="true"  width="30" style="display: inline-block;"/>
                                        <span ng-if="flagcheck == 1">History add service</span>
                                        <span ng-if="flagcheck == 2">ประวัติบริการเพิ่ม</span>
                                        <span ng-if="flagcheck == 3">历史附加服务</span>
                                    </div>
				<div class="box-in-photo"  style="font-size: 15px;">
					<input type="hidden" name="vcidinfo" value="{{vdIDclickinfo}}">
					
                    
				</div>
			</div>
		</div>
      
    
	</div> -->

<!-- </div> -->
<!-- <div class="modal fade" id="myModalconfirm" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <input type="hidden" name="vccomment" value="{{vccomment}}">
        <div class="modal-body" style="padding: 0">
        	<i class="back_close " data-dismiss="modal">&#10006</i>
        	

					<div style="font-size: 16px;text-align: center;padding-top: 50px; ">
						<span ng-if="flagcheck == 1">Please check comment</span>
		                            	<span ng-if="flagcheck == 2">กรุณาตรวจสอบความคิดเห็น</span>
		                            	<span ng-if="flagcheck == 3">请查看评论</span>
						<span></span>
					</div>
					<div style="font-size: 16px;width: 100%" align="center" > 
                        <div class="btn btn-block btn-default" ng-click="updatecomment(vccomment)" ng-style="senddata" style="margin-top: 19px; padding: 12px !important; display: block;background: #3b5998; color: #fff; width: 95%; padding: 20px;margin-bottom: 15px;" align="center" ng-if="getcommentviewhome.length == 0" data-toggle="modal" data-target="#myModalconfirm">
                            <i class="fa fa-paper-plane fa-lg " aria-hidden="true"></i>
                        </div>
                        </div>
        </div>
       
      </div>
      
    </div>
  </div> -->


<div id="commentmodal" class="modal fade" role="dialog">
  	<div class="modal-dialog">
    	<div class="modal-content">      
      		<div class="modal-body" style="padding: 0">
      			<i class="back_close " ng-click="cancelopenopupcomenthome()" data-dismiss="modal" style="z-index: 1201;margin-top: 5px;">&#10006</i>
        		<input type="hidden" name="vccomment" value="{{vccomment}}">
				<div style="font-size: 16px; padding: 10px; background: #fff;  width: 100%;z-index: 1200;" align="center" align="center">
					<div style="position: absolute; width: 35px; text-align: center; height: 35px; background: #3b5998; border-radius: 8px 0px 45px 0px; line-height: 2; color: #fff;"><span ng-bind="index"></span>
					</div>
			    	<div style="margin: 3px; " align="center">
			    							<div ng-if="flagcheck == 1" >Comment</div>
					        <div ng-if="flagcheck == 2"  >ความคิดเห็น</div>
					        <div ng-if="flagcheck == 3"  >评论</div>	
											
					</div>
					<div style="margin: 3px; padding-bottom: 10px; border-bottom: 1px solid #3b5998;">
						<span ng-if="flagcheck == 1" ng-bind="topic_en"></span>
											<span ng-if="flagcheck == 2" ng-bind="topic_th"></span>
											<span ng-if="flagcheck == 3" ng-bind="topic_cn"></span>
					</div>
				</div>

		<div class="notuse"  style="font-size: 16px;padding: 5px;text-align: center;color: red" ng-if="getcommentviewhome.length == 0 && checkcomment == 2">
						<span ng-if="flagcheck == 1">Comments can not be used.</span>
						<span ng-if="flagcheck == 2">ความคิดเห็นยังใช้ไม่ได้</span>
						<span ng-if="flagcheck == 3">还不能使用评论</span>
						
		</div> 
		<div class="box-comment-popup">
            <div class="" ng-if="getcommentviewhome.length == 0 && checkcomment == 1" style="padding: 3px 6px; border-radius: 8px; background: #fff;">    
            <div class="borderdetail-check">
                    <div style="background: #eee; padding: 5px 2px; font-size: 16px;border-radius: 8px 8px 0 0;"> 
                      <img src="images/service.png" width="30" style="margin-right: 15px;">
                        <span  ng-if="flagcheck == 1">Service</span>
                        <span  ng-if="flagcheck == 2">ให้บริการ</span>
                        <span  ng-if="flagcheck == 3">添加服务</span>
                    </div>
                    
                    <table width="100%">
                      	<tr>
                      		<td align="center" style="padding: 10px;">
                            	<i class="fa fa-star fa-lg dri" aria-hidden="true" ng-click="getdriving(1)" id="dri1"></i>
                            	<i class="fa fa-star fa-lg dri" aria-hidden="true" ng-click="getdriving(2)" id="dri2"></i>
                            	<i class="fa fa-star fa-lg dri" aria-hidden="true" ng-click="getdriving(3)" id="dri3"></i>
                            	<i class="fa fa-star fa-lg dri" aria-hidden="true" ng-click="getdriving(4)" id="dri4"></i>
                            	<i class="fa fa-star fa-lg dri" aria-hidden="true" ng-click="getdriving(5)" id="dri5"></i>
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
                      			<i class="fa fa-star fa-lg cle" aria-hidden="true" ng-click="getclean(1)" id="cle1"></i>
                          		<i class="fa fa-star fa-lg cle" aria-hidden="true" ng-click="getclean(2)" id="cle2"></i>
                          		<i class="fa fa-star fa-lg cle" aria-hidden="true" ng-click="getclean(3)" id="cle3"></i>
                          		<i class="fa fa-star fa-lg cle" aria-hidden="true" ng-click="getclean(4)" id="cle4"></i>
                          		<i class="fa fa-star fa-lg cle" aria-hidden="true" ng-click="getclean(5)" id="cle5"></i>
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
	                      		<i class="fa fa-star fa-lg pun" aria-hidden="true" ng-click="punctuality(1)" id="pun1"></i>
	                          	<i class="fa fa-star fa-lg pun" aria-hidden="true" ng-click="punctuality(2)" id="pun2"></i>
	                          	<i class="fa fa-star fa-lg pun" aria-hidden="true" ng-click="punctuality(3)" id="pun3"></i>
	                          	<i class="fa fa-star fa-lg pun" aria-hidden="true" ng-click="punctuality(4)" id="pun4"></i> 
	                          	<i class="fa fa-star fa-lg pun" aria-hidden="true" ng-click="punctuality(5)" id="pun5"></i>
                          	</td>                          
                      	</tr>                      
                    </table>
             <div class="box-com-se">                    
                        
                        <div class="btn btn-block btn-default" ng-style="senddata" style="margin-top: 19px; padding: 12px !important;    display: block; background: #3b5998; color: #fff;" ng-if="getcommentviewhome.length == 0" ng-click="checkconfirm()">
                            <i class="fa fa-paper-plane fa-lg " aria-hidden="true"></i>
                        </div>
                        <!-- data-toggle="modal" data-target="#myModalconfirm" -->
                       <!--  <div class="btn btn-block btn-default" ng-click="Eupdatecomment()" ng-if="Ecomment"  style="margin-top: 19px; padding: 12px !important; display: block; background: #3b5998; color: #fff;">
                            <i class="fa fa-paper-plane fa-lg " aria-hidden="true"></i>
                        </div> -->
                        <div ng-style="stylecheckconfirm" style="display: none;">
	                        <div style="font-size: 16px;text-align: center;padding: 10px 0; ">
								<span ng-if="flagcheck == 1">Please check comment</span>
			                    <span ng-if="flagcheck == 2">กรุณาตรวจสอบความคิดเห็น</span>
			                    <span ng-if="flagcheck == 3">请查看评论</span>
							</div>
						<div style="font-size: 16px;width: 100%" align="center" > 
	                        <div class="btn btn-block btn-default" ng-click="updatecomment(vccomment)"  style="padding: 12px !important; display: block;background: #3b5998; color: #fff; width: 95%; padding: 20px;" align="center" >
	                            <i class="fa fa-paper-plane fa-lg " aria-hidden="true"></i>
	                        </div>
	                    </div>
                    </div>
                   
                </div>
                
        </div>
    </div>
						<div class="box-in-comment" ng-repeat="item in getcommentviewhome" style="font-size: 16px;    padding-top: 7px;" ng-if="getcommentviewhome.length != 0 && checkcomment == 1">
							<div class="bodycomment-scroll" style="background: #f0f0f0;padding: 0 6px;border-radius: 8px 8px 0 0 ">
								<div style="display: inline-block;padding: 2px 0 "> 
									<img src="images/service.png" width="30" style="margin-right: 15px;">
									<span  ng-if="flagcheck == 1" style="color:#777 ">Service</span>
									<span  ng-if="flagcheck == 2" style="color: #777">ให้บริการ</span>
									<span  ng-if="flagcheck == 3" style="color:#777">添加服务</span>
								</div>
								<div class="com-text" style="display: inline-block;float: right;">
									<div class="" ng-if="item.driver == 1" style="color: #08930e">
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
									</div>
									<div class="" ng-if="item.driver == 2" style="color: #08930e">
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
									</div>
									<div class="" ng-if="item.driver == 3" style="color: #08930e">
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
									</div>
									<div class="" ng-if="item.driver == 4" style="color: #08930e">
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
										
									</div>
									<div class="" ng-if="item.driver == 5" style="color: #08930e">
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
                   
								<div class="com-text" style="display: inline-block;float: right;">
									<div class="" ng-if="item.clean == 1" style="color: #08930e">
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
									</div>
									<div class="" ng-if="item.clean == 2" style="color: #08930e">
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
									</div>
									<div class="" ng-if="item.clean == 3" style="color: #08930e">
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
									</div>
									<div class="" ng-if="item.clean == 4" style="color: #08930e">
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
									</div>
									<div class="" ng-if="item.clean == 5" style="color: #08930e">
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
                    
								<div class="com-text" style="display: inline-block;float: right;">
									<div class="" ng-if="item.ctime == 1" style="color: #08930e">
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
									</div>
									<div class="" ng-if="item.ctime == 2" style="color: #08930e">
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
									</div>
									<div class="" ng-if="item.ctime == 3" style="color: #08930e">
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
									</div>
									<div class="" ng-if="item.ctime == 4" style="color: #08930e">
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
									</div>
									<div class="" ng-if="item.ctime == 5" style="color: #08930e">
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
										<i class="fa fa-star fa-lg final" aria-hidden="true" ></i>
									</div>
									
								</div>
							</div>
               
							<div class="box-com-se "   style="background: #f0f0f0;padding: 0 6px;padding: 0">                    
								<div style="padding: 0 6px;;font-size: 16px;"> 
								</div>
							</div>
							<p style="border-bottom: dashed 1px;"></p>
							<div align="center" style="font-size: 18px;font-weight: 600;color: #FF6600;">
								<span ng-if="flagcheck == 1">Thank you for your comments</span>
								<span ng-if="flagcheck == 2">ขอบคุณสำหรับความคิดเห็นของคุณ</span>
								<span ng-if="flagcheck == 3">谢谢您的意见！</span>
							</div>
							<div align="center">{{item.comment_date}}</div>
                
							<div align="center" style="padding: 5PX;"><img src="images/smail.jpg" width="45" ></div>
                
						</div>
					</div>
      </div>
      
    </div>

  </div>
</div>



<!-- POPUP ROOMNUMBER -->
 <div class="modal fade" id="IDroomnum" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
       
        <div class="modal-body" style="padding: 0">
        	<i class="back_close " data-dismiss="modal" style="position: fixed; right: 0;top: 6px;z-index: 1201">&#10006</i>
        	<div style="margin: 3px;padding: 10px " align="center">
        		<span ng-if="flagcheck == 1">Your room number ?</span>
                <span ng-if="flagcheck == 2">เบอร์ห้องพักของคุณ ?</span>
                <span ng-if="flagcheck == 3">您的房间号码 ?</span>
			</div>
			<div style="padding: 15px;">
				<input type="tel" class="form-control" ng-change="inputroomnumberedit(editroom)" value="{{editroom}}" ng-model="editroom">
				<div class="btn btn-block btn-default " style="margin-top: 19px; padding: 12px !important;    display: block; background: #3b5998; color: #fff;" ng-click="editconfirmroom()">
                            <i class="fa fa-paper-plane fa-lg " aria-hidden="true"></i>
                        </div>
			</div>
        </div>
      </div>
    </div>
</div>



<div class="modal fade" id="popupbookingdetail" role="dialog" >
<i class="back_close " ng-click="cancel()" data-dismiss="modal" style="position: fixed; right: 0;top: 6px;z-index: 1201;">&#10006</i>	
<div style="font-size: 16px; padding: 10px; background: #fff;   width: 100%;z-index: 
	1200;" align="center" align="center" id="headerdetail">
		
		<div style="position: absolute; width: 35px; text-align: center; height: 35px; background: #3b5998; border-radius: 8px 0px 45px 0px; line-height: 2; color: #fff;"><span ng-bind="index"></span>
		</div>
    	<div style="margin: 3px; ">
    			<div ng-if="flagcheck == 1" >This order details</div>
		        <div ng-if="flagcheck == 2"  >ข้อมูลการจองนี้</div>
		        <div ng-if="flagcheck == 3"  >这订单详情</div>	
								
		</div>
		<div style="margin: 3px; padding-bottom: 10px; border-bottom: 1px solid #3b5998;">
			<span ng-if="flagcheck == 1" ng-bind="topic_en"></span>
								<span ng-if="flagcheck == 2" ng-bind="topic_th"></span>
								<span ng-if="flagcheck == 3" ng-bind="topic_cn"></span>
		</div>
	</div>

<!-- 
<div style="font-size: 16px; padding: 10px; background: #fff;  position: fixed; width: 100%; z-index: 1200;" align="center">

	
	            </div> -->
    <div class="modal-dialog" style="margin: 0;margin-top: -3px;" id="popupbookingdetailm">
    	

	      <div class="modal-content">
	        <div class="modal-body" style="padding-top: 0" >
	        	
	        	<input type="hidden" name="" value="{{VOUCHER}}">
	          	
	            <div ng-click="detailfirsthome(VOUCHER)" data-toggle="modal" data-target="#popupdriverdetail" style="padding: 2px 10px;" ng-if="typeTour == 'transfer'">
	                <table width="100%" style="margin-bottom: 5px; color: #fff; border-radius: 8px;    background: #3b5998;">
						<tr>                                 
							<td align="center" style=" padding: 5px 0; " width="60">
								<div  style="position: relative;border: 0px solid #999999; width: 30px; height: 30px; text-align: center;    border-radius: 60px; margin-left: 2%;    color: #3b5998; background: #fff;    box-shadow: 1px 1px 5px #999999;">
									<img src="images/car-detail.png" width="25" >
								</div>
							</td>
							<td colspan="3" style="font-size: 16px" valign="button">
								<span class="" ng-if="flagcheck == 1" >Driver / Car  / Facilitiy / Seating</span>
								<span class="" ng-if="flagcheck == 2" >คนขับ / รถ / ความสะดวก / ที่นั่ง</span>
								<span class="topic-page" ng-if="flagcheck == 3" >车 / 司机 / 设施 / 座位数  </span>
							</td>
							<td align="center">                                      
								<i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true" style="color: #FFF; margin-right: 5px;"></i>
							</td>                                  
						</tr>
					</table>
				</div>

					<div style="padding: 3px 3px;  border-radius: 8px; background: #fff;">
                <div style="font-size: 16px;background:#f0f0f0;border-bottom: 1px solid #ddd;" ng-if="typeTour == 'transfer'">
                    <div class="textdetail" style="display: block;font-size: 16px">
                        <span class="" ng-if="flagcheck == 1">{{topic_en}}</span>
                        <span class="" ng-if="flagcheck == 2">{{topic_th}}</span>
                        <span class="" ng-if="flagcheck == 3">{{topic_cn}}</span>
                    </div>
                    <div class="textdetail" ><span class="" ng-if="flagcheck == 1">{{web_extra_way_topic_en}}</span>
                        <span class="" ng-if="flagcheck == 2">{{web_extra_way_topic_th}}</span>
                        <span class="" ng-if="flagcheck == 3">{{web_extra_way_topic_cn}}</span>
                    </div>
                </div>
                <table style="font-size: 16px" width="100%" ng-if="typeTour == 'transfer'">
                    <tr >
                        <td width="10"></td>
                        <td width="150" style="padding: 10px 0">
                            <span  ng-if="flagcheck == 1">Voucher No :</span>
                            <span  ng-if="flagcheck == 2">เลขที่วอเชอร์ :</span>
                            <span  ng-if="flagcheck == 3">凭证编号 :</span>      
                        </td>
                        <td width="10"></td>
                        <td>
                             <span >{{VOUCHER}}    </span>
                        </td>
                        <td width="10"></td>
                        <td align="center" style="text-align: center;" width="4%">
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
                            <i class="fa  fa-search pull-right" ng-click="meetingpoint()" style="font-size:20px;color: #3b5998;" data-toggle="modal" data-target="#meeting"></i>
                        </td>
                        <td></td>
                    </tr>
                    <tr style="background:#fff;border-bottom: 1px solid #ddd;">
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
                            <i class="fa  fa-search pull-right" ng-click="pickupsign()"  style="font-size:20px;  color: #3b5998; " data-toggle="modal" data-target="#sign"></i>
                        </td>
                        <td></td>
                    </tr>
                    <tr style="background-color: #f0f0f0">
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
                    <tr ng-if="area != 'Point' && area != 'Rental'" style="background:#fff;border-bottom: 1px solid #ddd;">
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
                   
                    <tr ng-if="area != 'Point' && area != 'Rental'" style="background-color: #f0f0f0">
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
                  
                    <tr style="background:#fff;border-bottom: 1px solid #ddd;">
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
                    <tr style="background-color: #f0f0f0">
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
                    <tr style="background:#fff;border-bottom: 1px solid #ddd;">
                        <td></td>
                        <td style="padding: 10px 0">
                            <span class="" ng-if="flagcheck == 1">Type Tour :</span>
                            <span class="" ng-if="flagcheck == 2">ประเภททัวร์ :</span>
                            <span class="" ng-if="flagcheck == 3">旅行种类 :</span>
                        </td>
                        <td></td>
                        <td >
                            <span ng-if="flagcheck == 1">Transfer</span>
							<span ng-if="flagcheck == 2">รถรับส่ง</span>
							<span ng-if="flagcheck == 3">车接送</span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr style="background-color: #f0f0f0">
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
                    <tr style="background:#fff;border-bottom: 1px solid #ddd;">
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
                    <tr style="background-color: #f0f0f0">
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
                      <td ng-click="" align="center">
                      		<a href="{{mapsss}}" target="_blank">
                          <img src="images/icon/view/map.png"  width="30">
                          </a>
                      </td>
                      <td></td>
                    </tr>
                    <tr style="background:#fff;border-bottom: 1px solid #ddd;">
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
                      <td align="center">
                      		<a href="{{maptosss}}" target="_blank">
                          <img src="images/icon/view/map.png" ng-click="" width="30">
                          </a>
                      </td>
                      <td></td>
                    </tr>
                    <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;" ng-if="area != 'In'">
                      <td></td>
                      <td style="padding: 10px 0">
                          <span ng-if="flagcheck == 1">Your room number :</span>
                          <span ng-if="flagcheck == 2">เบอร์ห้องพักของคุณ :</span>
                          <span ng-if="flagcheck == 3">您的房间号码 :</span>
                      </td>
                      <td></td>
                      <td>
                          <span ng-if="room_number.length == 0"><input type="tel" class="form-control" name="roomnum" ng-model="roomnum" ng-change="inputroomnumber(roomnum)"></span>
                          <span ng-if="room_number.length != 0" ng-bind="room_number"></span>
                      </td>
                      <td></td>
                      <td align="center">
                      		<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;color: #3b5998" ng-click="putRoomnumber()" ng-if="room_number.length == 0 "></i >
                      		<i class="fa fa-pencil-square-o fa-lg" aria-hidden="true" style="font-size: 25px;padding: 0 10px;color: #3b5998" ng-click="editRoomnumber(room_number)" ng-if="room_number.length != 0"></i>
                      </td>
                      <td></td>
                    </tr>
                    <!-- <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;" >
                      <td></td>
                      <td style="padding: 10px 0">
                          <span ng-if="flagcheck == 1">Your room number :</span>
                          <span ng-if="flagcheck == 2">เบอร์ห้องพักของคุณ :</span>
                          <span ng-if="flagcheck == 3">您的房间号码 :</span>
                      </td>
                      <td></td>
                      <td>
                          <span ng-bind="room_number"></span>
                      </td>
                      <td></td>
                      <td align="right">
                      		<i class="fa fa-pencil-square-o fa-lg" aria-hidden="true" style="font-size: 25px;padding: 0 10px;color: #3b5998" ng-click="putRoomnumber()"></i>
                      </td>
                      <td></td>
                    </tr> -->
                    <tr style="background-color: #fff" ng-style="set_color(area)">
                      <td></td>
                      <td style="padding: 10px 0">
                          <span class="" ng-if="flagcheck == 1">Book by :</span>
                          <span class="" ng-if="flagcheck == 2">คนจอง :</span>
                          <span class="" ng-if="flagcheck == 3">预订人 :</span>
                      </td>
                      <td></td>
                      <td >
                          <span >
                            <i  class="fa fa-user " aria-hidden="true" style="margin-right: 10px;color: #3b5998;font-size: 20px;display: inherit;"></i>{{posted}} 
                        </span>
                        
                        
                      </td>
                      <td></td>
                      <td align="center" style="text-align: center;">
                        <i class="fa  fa-search" ng-click="bookby()"  style="font-size:20px;  color: #3b5998; ;padding: 5px;" data-toggle="modal" data-target="#boby"></i>
                      </td>
                      <td></td>
                    </tr>
                    <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;">
                      <td></td>
                      <td style="padding: 10px 0">
                          <span class="" ng-if="flagcheck == 1">Date :</span>
                          <span class="" ng-if="flagcheck == 2">วันที่ :</span>
                          <span class="" ng-if="flagcheck == 3">日期 :</span>
                      </td>
                      <td></td>
                      <td colspan="3">
                          <span >{{datebook | date:' yyyy-MM-dd / HH:mm'}}</span>
                      </td>
                      
                      <td></td>
                    </tr>
                    <tr style="background-color: #fff">
                      <td></td>
                      <td style="padding: 10px 0">
                          <span class="" ng-if="flagcheck == 1">Confirm by :</span>
                          <span class="" ng-if="flagcheck == 2">ยืนยันโดย :</span>
                          <span class="" ng-if="flagcheck == 3">确认人 :</span>
                      </td>
                      <td></td>
                      <td>
                          <span ><i  class="fa fa-user" aria-hidden="true" style="margin-right: 10px;color: #3b5998;font-size: 20px;display: inherit;"></i>{{user_confirm}}
                          </span>
                      </td>
                      <td></td>
                      <td align="center" style="text-align: center;">
                          <i class="fa  fa-search" ng-click="confirmby()"  style="font-size:20px;  color: #3b5998; padding: 5px;" data-toggle="modal" data-target="#conby"></i>
                      </td>
                      <td></td>
                    </tr>
                    <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;">
                      <td></td>
                      <td style="padding: 10px 0">
                          <span class="" ng-if="flagcheck == 1">Date :</span>
                          <span class="" ng-if="flagcheck == 2">วันที่ :</span>
                          <span class="" ng-if="flagcheck == 3">日期:</span>
                      </td>
                      <td></td>
                      <td colspan="3">
                          <span >{{date_confirm | date:' yyyy-MM-dd / HH:mm'}}</span>
                      </td>
                      <td></td>
                    </tr>
                     <tr style="border-bottom: 1px solid #ddd;background:#fff;" ng-if="remark.length > 0">
	                      <td></td>
	                      <td style="padding: 10px 0">
	                			<span class="" ng-if="flagcheck == 1">Remark :</span>
	                          	<span class="" ng-if="flagcheck == 2">Remark :</span>
	                          	<span class="" ng-if="flagcheck == 3">备注:</span>
	                		</td>
	                      <td></td>
	                      <td colspan="3">
	                          <span >{{remark}}</span>
	                      </td>
	                      <td></td>
	                   </tr>

                </table>
                <div ng-if="area == 'Rental'" style="margin-top: 10px; border: 1px solid #3b5998; border-radius: 8px; padding: 2px 10px; margin-bottom: 20px;font-size: 16px;">
                	<table width="100%" ng-repeat="item in rental">
                		<tr style="">
	                      <td></td>
	                      <td style="padding: 10px 0" width="100">
	                			<span class="" ng-if="flagcheck == 1">Time:</span>
                        		<span class="" ng-if="flagcheck == 2">เวลา:</span>
                        		<span class="" ng-if="flagcheck == 3">時間:</span>
	                		</td>
	                      <td></td>
	                      <td colspan="3">
	                          {{item.time_hh }} : {{item.time_mm}}
	                      </td>
	                      <td></td>
	                   </tr>
	                   <tr  ng-if="item.place == '' || item.place == null || item.place == undefined" style="border-bottom: 1px solid #ddd;">
	                      <td></td>
	                      <td style="padding: 10px 0" valign="top">
	                			<span class="" ng-if="flagcheck == 1">Place Plan:</span>
                            <span class="" ng-if="flagcheck == 2">แผนเพลส:</span>
                            <span class="" ng-if="flagcheck == 3">放置計劃:</span>
	                		</td>
	                      <td></td>
	                      <td colspan="3">
	                          <span >{{item.remark}}</span>
	                          <span>(<span>
		                          <span ng-if="flagcheck == 1">{{item.type_topic_en}}</span>
		                         <span ng-if="flagcheck == 2">{{item.type_topic_th}}</span>
		                         <span ng-if="flagcheck == 3">{{item.type_topic_cn}}</span>
	                         </span>)</span>
                            <div ng-repeat="downs in rental_down" >
                                <span ng-if="downs.timeline == item.id">{{downs.remark}}</span>
                            </div>
	                      </td>
	                      <td></td>
	                   </tr>
	                   <!-- <tr  ng-if="item.place == '' || item.place == null || item.place == undefined" style="border-bottom: 1px solid #ddd;">
	                      <td></td>
	                      <td style="padding: 10px 0" valign="top">
	                			<span class="" ng-if="flagcheck == 1">Type:</span>
                            <span class="" ng-if="flagcheck == 2">Type:</span>
                            <span class="" ng-if="flagcheck == 3">Type:</span>
	                		</td>
	                      <td></td>
	                      <td colspan="3">
	                         <span ng-if="flagcheck == 1">{{item.type_topic_en}}</span>
	                         <span ng-if="flagcheck == 2">{{item.type_topic_th}}</span>
	                         <span ng-if="flagcheck == 3">{{item.type_topic_cn}}</span>
                            <div ng-repeat="downs in rental_down" >
                                <span ng-if="downs.timeline == item.id">{{downs.type}}</span>
                            </div>
	                      </td>
	                      <td></td>
	                   </tr> -->
	                   <tr ng-if="item.place != ''">
	                      <td></td>
	                      <td style="padding: 10px 0" valign="top">
	                			<span class="" ng-if="flagcheck == 1">Place Plan:</span>
                            <span class="" ng-if="flagcheck == 2">แผนเพลส:</span>
                            <span class="" ng-if="flagcheck == 3">放置計劃:</span>
	                		</td>
	                      <td></td>
	                      <td colspan="3">
	                          <span >{{item.tb_transferplace_topic}}</span>
	                          
	                          
	                      </td>
	                      <td></td>
	                   </tr>
	                   <tr style="border-bottom: 1px solid #ddd;background:#fff;" ng-if="item.place != ''">
	                      <td></td>
	                      <td style="padding: 10px 0">
	                			<span class="" ng-if="flagcheck == 1">Remark:</span>
                            <span class="" ng-if="flagcheck == 2">ข้อสังเกต:</span>
                            <span class="" ng-if="flagcheck == 3">備註:</span>
	                		</td>
	                      <td></td>
	                      <td colspan="3">
	                          <span >{{item.remark}}</span>
	                          
	                      </td>
	                      <td></td>
	                   </tr>
                	</table>
                </div>
                  
            <!--  <div style="border:1px solid #ddd ;padding: 10px 0;border-radius: 8px " ng-if="area == 'Rental'">
            <div>
                <div ng-repeat="item in rental">
                    <p class="infoma" style="padding: 0">
                        <span class="" ng-if="flagcheck == 1">Time:</span>
                        <span class="" ng-if="flagcheck == 2">เวลา:</span>
                        <span class="" ng-if="flagcheck == 3">時間:</span>
                    </p>
                    <div class="textdetail">
                        {{item.time_hh }} : {{item.time_mm}}
                    </div>
                    <div class="" ng-if="item.place == ''">
                        <p class="infoma">
                            <span class="" ng-if="flagcheck == 1">Place Plan:</span>
                            <span class="" ng-if="flagcheck == 2">แผนเพลส:</span>
                            <span class="" ng-if="flagcheck == 3">放置計劃:</span>
                        </p>
                        <p class="textdetail" >
                            
                            <span >{{item.remark}}</span>
                            <div ng-repeat="down in rental_down" ng-if="down.timeline == item.id ">
                                <p  >{{bown.remark}}</p>
                            </div>
                        </p>
                    </div>
                    <div ng-if="item.place != ''">
                        <p class="infoma">
                            <span class="" ng-if="flagcheck == 1">Place Plan:</span>
                            <span class="" ng-if="flagcheck == 2">แผนเพลส:</span>
                            <span class="" ng-if="flagcheck == 3">放置計劃:</span>
                        </p>
                        <p class="textdetail" >
                            
                            <span >{{item.tb_transferplace_topic}}</span>
                        </p>
                        <p class="infoma">
                            <span class="" ng-if="flagcheck == 1">Remark:</span>
                            <span class="" ng-if="flagcheck == 2">ข้อสังเกต:</span>
                            <span class="" ng-if="flagcheck == 3">備註:</span>
                        </p>
                        <p class="textdetail" >
                            
                            <span >{{item.remark}}</span>
                        </p>
                    </div>
                    
                </div>
                
                
            </div>
            </div> -->
            


                <!-- TYPE TOUR -->
                
	                <div style="font-size: 16px;background:#f0f0f0;border-bottom: 1px solid #ddd;" ng-if="typeTour != 'transfer'" ng-repeat="item in dataTour">
	                    <div class="textdetail" style="display: block;font-size: 16px">
	                        <span class="" ng-if="flagcheck == 1">{{item.topic_en}}</span>
	                        <span class="" ng-if="flagcheck == 2">{{item.topic_th}}</span>
	                        <span class="" ng-if="flagcheck == 3">{{item.topic_cn}}</span>
	                    </div>
	                    
	                    <div class="textdetail" >
	                    	<!-- <span class="" ng-if="flagcheck == 1">{{item.extra_way_topic_en}}</span>
	                        <span class="" ng-if="flagcheck == 2">{{item.extra_way_topic_th}}</span>
	                        <span class="" ng-if="flagcheck == 3">{{item.extra_way_topic_cn}}</span> -->
	                    </div>
	                </div>
	                <table style="font-size: 16px" width="100%" ng-if="typeTour != 'transfer'" ng-repeat="item in dataVoucher">
	                    <tr >
	                        <td width="10"></td>
	                        <td width="150" style="padding: 10px 0">
	                            <span  ng-if="flagcheck == 1">Voucher No :</span>
	                            <span  ng-if="flagcheck == 2">เลขที่วอเชอร์ :</span>
	                            <span  ng-if="flagcheck == 3">凭证编号 :</span>      
	                        </td>
	                        <td width="10"></td>
	                        <td>
	                             <span >{{item.invoice}}</span>
	                        </td>
	                        <td width="10"></td>
	                        <td align="center" style="text-align: center;" width="4%">
	                      </td>
	                        <td width="2%"></td>
	                    </tr>
	                   
	                    
	                    
	                   
	                    <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;">
	                        <td></td>
	                        <td style="padding: 10px 0">
	                            <span class="" ng-if="flagcheck == 1">On Date :</span>
	                            <span class="" ng-if="flagcheck == 2">วันที่ใช่บริการ :</span>
	                            <span class="" ng-if="flagcheck == 3">使用日期 :</span>
	                        </td>
	                        <td></td>
	                        <td>
	                            <span>{{item.outdate}}</span>
	                        </td>
	                        <td></td>
	                        <td></td>
	                        <td></td>
	                    </tr>
	                    <tr >
	                        <td></td>
	                        <td style="padding: 10px 0" >
	                            <span class="" ng-if="flagcheck == 1">Pick up Time :</span>
	                            <span class="" ng-if="flagcheck == 2">เวลารับ :</span>
	                            <span class="" ng-if="flagcheck == 3">接人时间 :</span>
	                        </td>
	                        <td></td>
	                        <td>
	                            <span>{{airout}}</span>
	                            <span ng-if="flagcheck == 1">﻿Wait suppiler confirm </span>
	                            <span ng-if="flagcheck == 2">รอการยืนยัน </span>
	                            <span ng-if="flagcheck == 3">等待供应商确认 </span>

	                        </td>
	                        <td></td>
	                        <td></td>
	                        <td></td>
	                    </tr>
	                   
	                    <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;">
	                        <td></td>
	                        <td style="padding: 10px 0">
	                            <span class="" ng-if="flagcheck == 1">Type Tour :</span>
	                            <span class="" ng-if="flagcheck == 2">ประเภททัวร์ :</span>
	                            <span class="" ng-if="flagcheck == 3">旅行种类 :</span>
	                        </td>
	                        <td></td>
	                        <td >
	                            <span ng-if="typeTour == 'tour' && flagcheck == 1">Day Tour</span>
								<span ng-if="typeTour == 'tour' && flagcheck == 2">ทัวร์วันเดียว</span>
								<span ng-if="typeTour == 'tour' && flagcheck == 3">一日游</span>

								<span ng-if="typeTour == 'show' && flagcheck == 1">Ticket/Show</span>
								<span ng-if="typeTour == 'show' && flagcheck == 2">ตั๋ว/โชว์</span>
								<span ng-if="typeTour == 'show' && flagcheck == 3">表演/门票</span>

								<span ng-if="typeTour == 'transfer' && flagcheck == 1">Transfer</span>
								<span ng-if="typeTour == 'transfer' && flagcheck == 2">รถรับส่ง</span>
								<span ng-if="typeTour == 'transfer' && flagcheck == 3">车接送</span>

								<span ng-if="typeTour == 'golf' && flagcheck == 1">Golf</span>
								<span ng-if="typeTour == 'golf' && flagcheck == 2">กอล์ฟ</span>
								<span ng-if="typeTour == 'golf' && flagcheck == 3">高尔夫球</span>

								<span ng-if="typeTour == 'wedding' && flagcheck == 1">Wedding/Photo</span>
								<span ng-if="typeTour == 'wedding' && flagcheck == 2">เวดดิ้ง/ถ่ายภาพ</span>
								<span ng-if="typeTour == 'wedding' && flagcheck == 3">婚纱/拍照</span>

								<span ng-if="typeTour == 'boat' && flagcheck == 1">Charter Boat</span>
								<span ng-if="typeTour == 'boat' && flagcheck == 2">เรือเช่าเหมาลำ</span>
								<span ng-if="typeTour == 'boat' && flagcheck == 3">包船</span>

								<span ng-if="typeTour == 'package' && flagcheck == 1">Tour Package</span>
								<span ng-if="typeTour == 'package' && flagcheck == 2">แพ็คเกจทัวร์</span>
								<span ng-if="typeTour == 'package' && flagcheck == 3">旅游套餐</span>

								<span ng-if="typeTour == 'hotel' && flagcheck == 1">Hotel</span>
								<span ng-if="typeTour == 'hotel' && flagcheck == 2">โรงแรม</span>
								<span ng-if="typeTour == 'hotel' && flagcheck == 3">酒店</span>

								<span ng-if="typeTour == 'diving' && flagcheck == 1">Diving</span>
								<span ng-if="typeTour == 'diving' && flagcheck == 2">ดำน้ำ</span>
								<span ng-if="typeTour == 'diving' && flagcheck == 3">潜水</span>

								<span ng-if="typeTour == 'spa' && flagcheck == 1">Spa/Massage</span>
								<span ng-if="typeTour == 'spa' && flagcheck == 2">สปา/นวด</span>
								<span ng-if="typeTour == 'spa' && flagcheck == 3">Spa/按摩</span>

								<span ng-if="typeTour == 'plane' && flagcheck == 1">Plane</span>
								<span ng-if="typeTour == 'plane' && flagcheck == 2">เครื่องบิน</span>
								<span ng-if="typeTour == 'plane' && flagcheck == 3">飞机</span>
	                        </td>
	                        <td></td>
	                        <td></td>
	                        <td></td>
	                    </tr>
	                    <tr style="background:#fff;border-bottom: 1px solid #ddd;">
	                        <td></td>
	                        <td style="padding: 10px 0">
	                            <span class="" ng-if="flagcheck == 1">Province  :</span>
	                            <span class="" ng-if="flagcheck == 2">จังหวัด :</span>
	                            <span class="" ng-if="flagcheck == 3">省份 :</span>
	                        </td>
	                        <td></td>
	                        <td >
	                            <span ng-if="flagcheck == 1" ng-bind="item.web_province_name_en"></span>
	                            <span ng-if="flagcheck == 2" ng-bind="item.web_province_name_th"></span>
	                            <span ng-if="flagcheck == 3" ng-bind="item.web_province_name_cn"></span>
	                            
	                        <td></td>
	                        <td></td>
	                        <td></td>
	                    </tr>
	                    <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;">
	                        <td></td>
	                        <td style="padding: 10px 0">
	                            <span class="" ng-if="flagcheck == 1">Activity Time  :</span>
	                            <span class="" ng-if="flagcheck == 2">เวลากิจกรรม :</span>
	                            <span class="" ng-if="flagcheck == 3">活动时间 :</span>
	                        </td>
	                        <td></td>
	                        <td >
	                            <span ng-bind="item.airin_time"></span>
	                           
	                        </td>
	                        <td></td>
	                        <td></td>
	                        <td></td>
	                    </tr>
	                    <!-- <tr >
	                      <td></td>
	                      <td style="padding: 10px 0">
	                          <span class="" ng-if="flagcheck == 1">Pick up Time :</span>
	                          <span class="" ng-if="flagcheck == 2">เวลาขึ้นรถ :</span>
	                          <span class="" ng-if="flagcheck == 3">接人时间 :</span>
	                      </td>
	                      <td></td>
	                      <td>
	                          <span ng-bind="item.pickup_time"></span>
	                          
	                      </td>
	                      <td></td>
	                      <td></td>
	                      <td></td>
	                    </tr> -->
	                    <tr style="background:#fff;border-bottom: 1px solid #ddd;" ng-if="item.map != null">
	                      <td></td>
	                      <td style="padding: 10px 0">
	                          <span class="" ng-if="flagcheck == 1">Pick up place :</span>
	                          <span class="" ng-if="flagcheck == 2">สถานที่ขึ้นรถ :</span>
	                          <span class="" ng-if="flagcheck == 3">车接地点 :</span>
	                      </td>
	                      <td></td>
	                      <td>
	                          <span>{{item.transferplace_topic}}</span>
	                      </td>
	                      <td></td>
	                      <td align="center">
	                      		<a href="{{item.map}}" target="_blank">
	                          <img src="images/icon/view/map.png"  width="30">
	                          </a>
	                      </td>
	                      <td></td>
	                    </tr>
	                    <tr style="background-color:  #f0f0f0">
	                      <td></td>
	                      <td style="padding: 10px 0">
	                          <span ng-if="flagcheck == 1">Back to place : </span>
	                          <span ng-if="flagcheck == 2">กลับไปยังสถานที่ :</span>
	                          <span ng-if="flagcheck == 3">回程地点 :</span>
	                      </td>
	                      <td></td>
	                      <td>
	                          <span>{{item.transferplace_topic_to}}</span>
	                      </td>
	                      <td></td>
	                      <td align="center" >
	                      		<a href="{{item.map_to}}" target="_blank">
	                          <img src="images/icon/view/map.png"  width="30">
	                          </a>
	                      </td>
	                      <td></td>
	                    </tr>
	                    <tr style="background:#fff;border-bottom: 1px solid #ddd;">
	                      <td></td>
	                      <td style="padding: 10px 0">
	                          <span ng-if="flagcheck == 1">Your room number :</span>
	                          <span ng-if="flagcheck == 2">เบอร์ห้องพักของคุณ :</span>
	                          <span ng-if="flagcheck == 3">您的房间号码 :</span>
	                      </td>
	                      <td></td>
	                      <td>
                          <span ng-if="item.room_number.length == 0"><input type="tel" class="form-control" name="roomnum" ng-model="roomnum" ng-change="inputroomnumber(roomnum)"></span>
                          <span ng-if="item.room_number.length != 0" ng-bind="item.room_number"></span>
                      </td>
                      <td></td>
                      <td align="center">
                      		<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;color: #3b5998" ng-click="putRoomnumber()" ng-if="item.room_number.length == 0 "></i >
                      		<i class="fa fa-pencil-square-o fa-lg" aria-hidden="true" style="font-size: 25px;padding: 0 10px;color: #3b5998" ng-click="editRoomnumber()" ng-if="item.room_number.length != 0"></i>
                      </td>
	                      <td></td>
	                    </tr>
	                    <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;">
	                        <td></td>
	                        <td style="padding: 10px 0">
	                            <span class="" ng-if="flagcheck == 1">Issue to  :</span>
	                            <span class="" ng-if="flagcheck == 2">Issue to :</span>
	                            <span class="" ng-if="flagcheck == 3">供应商 :</span>
	                        </td>
	                        <td></td>
	                        <td >
	                            <span ng-if="flagcheck == 1" ng-bind="item.tb_web_admin_company"></span>
	                            <span ng-if="flagcheck == 2" ng-bind="item.tb_web_admin_company_th"></span>
	                            <span ng-if="flagcheck == 3" ng-bind="item.tb_web_admin_company_cn"></span>
	                           
	                        </td>
	                        <td></td>
	                        <td></td>
	                        <td></td>
	                    </tr>
	                    <!-- <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;">
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
	                      		<a href="{{maptosss}}" target="_blank">
	                          <img src="images/icon/view/map.png" ng-click="" width="30">
	                          </a>
	                      </td>
	                      <td></td>
	                    </tr> -->
	                    <tr style="background:#fff;">
	                      <td></td>
	                      <td style="padding: 10px 0">
	                          <span class="" ng-if="flagcheck == 1">Book by :</span>
	                          <span class="" ng-if="flagcheck == 2">คนจอง :</span>
	                          <span class="" ng-if="flagcheck == 3">预订人 :</span>
	                      </td>
	                      <td></td>
	                      <td >
	                          <span >
	                            <i  class="fa fa-user " aria-hidden="true" style="margin-right: 10px;color: #3b5998;font-size: 20px;display: inherit;"></i>{{item.posted}} 
	                        </span>
	                        
	                        
	                      </td>
	                      <td></td>
	                      <td align="center" style="text-align: center;">
	                        <i class="fa  fa-search" ng-click="bookby()"  style="font-size:20px;  color: #3b5998; float: right;padding: 5px;" data-toggle="modal" data-target="#boby"></i>
	                      </td>
	                      <td></td>
	                    </tr>
	                    <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;">
	                      <td></td>
	                      <td style="padding: 10px 0">
	                          <span class="" ng-if="flagcheck == 1">Date :</span>
	                          <span class="" ng-if="flagcheck == 2">วันที่ :</span>
	                          <span class="" ng-if="flagcheck == 3">日期 :</span>
	                      </td>
	                      <td></td>
	                      <td colspan="3">
	                          <span >{{item.post_date*1000 | date:' yyyy-MM-dd / HH:mm'}}</span>
	                      </td>
	                      
	                      <td></td>
	                    </tr>
	                    <tr style="background:#fff;">
	                      <td></td>
	                      <td style="padding: 10px 0">
	                          <span class="" ng-if="flagcheck == 1">Confirm by :</span>
	                          <span class="" ng-if="flagcheck == 2">ยืนยันโดย :</span>
	                          <span class="" ng-if="flagcheck == 3">确认人 :</span>
	                      </td>
	                      <td></td>
	                      <td>
	                          <span ><i  class="fa fa-user" aria-hidden="true" style="margin-right: 10px;color: #3b5998;font-size: 20px;display: inherit;"></i>{{user_confirm}}
	                          </span>
	                      </td>
	                      <td></td>
	                      <td align="center" style="text-align: center;">
	                          <i class="fa  fa-search" ng-click="confirmby()"  style="font-size:20px;  color: #3b5998; float: right;padding: 5px;" data-toggle="modal" data-target="#conby"></i>
	                      </td>
	                      <td></td>
	                    </tr>
	                    <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;">
	                      <td></td>
	                      <td style="padding: 10px 0">
	                          <span class="" ng-if="flagcheck == 1">Date :</span>
	                          <span class="" ng-if="flagcheck == 2">วันที่ :</span>
	                          <span class="" ng-if="flagcheck == 3">日期:</span>
	                      </td>
	                      <td></td>
	                      <td colspan="3">
	                          <span >{{date_confirm | date:' yyyy-MM-dd / HH:mm'}}</span>
	                      </td>
	                      <td></td>
	                    </tr>
	                    <tr style="border-bottom: 1px solid #ddd;background:#fff;" >
	                      <td></td>
	                      <td style="padding: 10px 0">
	                			<span class="" ng-if="flagcheck == 1">Remark :</span>
	                          	<span class="" ng-if="flagcheck == 2">Remark :</span>
	                          	<span class="" ng-if="flagcheck == 3">备注:</span>
	                		</td>
	                      <td></td>
	                      <td colspan="3">
	                          <span >{{item.remark}}</span>
	                      </td>
	                      <td></td>
	                    </tr>
	                    
	                </table>
	                <div ng-if="typeTour == 'golf'" ng-repeat="item in dataVoucher">
	               

	                <table width="100%" style="font-size: 16px">
	                    <tr>
	                    	<td width="10"></td>
	                      <td style="padding: 10px 0">
	                			<span class="" ng-if="flagcheck == 1">Golfer :</span>
	                          	<span class="" ng-if="flagcheck == 2">Golfer :</span>
	                          	<span class="" ng-if="flagcheck == 3">打球人数 :</span>
	                		</td>
	                      <td></td>
	                      <td >
	                          <span >{{item.adult}}</span>
	                      </td>
	                      <td></td>
	                    </tr>
	                    <tr>
	                    	<td></td>
	                      <td style="padding: 10px 0">
	                			<span class="" ng-if="flagcheck == 1">Follower :</span>
	                          	<span class="" ng-if="flagcheck == 2">ลูกศิษย์ :</span>
	                          	<span class="" ng-if="flagcheck == 3">陪走人数 :</span>
	                		</td>
	                      <td></td>
	                      <td>
	                          <span >{{item.child}}</span>
	                      </td>
	                      <td></td>
	                    </tr>
	                    <tr>
	                    	<td></td>
	                      <td style="padding: 10px 0">
	                			<span class="" ng-if="flagcheck == 1">Caddy :</span>
	                          	<span class="" ng-if="flagcheck == 2">Caddy :</span>
	                          	<span class="" ng-if="flagcheck == 3">球童 :</span>
	                		</td>
	                      <td></td>
	                      <td style="padding: 10px 0">
	                          <span>{{item.caddy}}</span>
	                          <span ng-if="item.caddy == '' || item.caddy == null || item.caddy == undefined">0</span>
	                      </td>
	                      <td></td>
	                    </tr>
	                    <tr>
	                    	<td></td>
	                      <td style="padding: 10px 0">
	                			<span class="" ng-if="flagcheck == 1">Golf Car :</span>
	                          	<span class="" ng-if="flagcheck == 2">รถกอล์ฟ :</span>
	                          	<span class="" ng-if="flagcheck == 3">高尔夫球车 :</span>
	                		</td>
	                      <td></td>
	                      <td >
	                          <span>{{item.golfcar}}</span>
	                          <span ng-if="item.golfcar == '' || item.golfcar == null || item.golfcar == undefined">0</span>
	                      </td>
	                      <td></td>
	                    </tr>
	                </table>
	                </div>
	                <div ng-if="typeTour == 'diving'" ng-repeat="item in productdata">
	                <div style="padding: 10px 10px;">
	                	<span class="" ng-if="flagcheck == 1">Diving equipment Rental fee collect from guest : </span>
	                          	<span class="" ng-if="flagcheck == 2">Diving equipment Rental fee collect from guest :</span>
	                          	<span class="" ng-if="flagcheck == 3">潜水装备出租费，请客户直接當地付給船公司:</span>
	                </div>

	                <table width="100%" >
	                    <tr>
	                    	<td colspan="6">
	                    	<div style="padding: 2px 5px; border: 1px solid #3b5998; border-radius: 8px;">
	                    		<table width="100%">
	                    			<tr>
	                    				
	                    				<td align="center" style="background:#f0f0f0;padding: 10px 0">
	                    					<span ng-if="flagcheck == 1">Equipment </span>
					                        <span ng-if="flagcheck == 2">Equipment </span>
					                        <span ng-if="flagcheck == 3">潜水装备</span>
	                    				</td>
	                    				<td align="center" style="background:#f0f0f0;">
	                    					<span ng-if="flagcheck == 1">Total </span>
					                        <span ng-if="flagcheck == 2">รวม </span>
					                        <span ng-if="flagcheck == 3">总</span>
	                    				</td>
	                    				<td align="center" style="background:#f0f0f0;">
	                    					<span ng-if="flagcheck == 1">Unit Price </span>
					                        <span ng-if="flagcheck == 2">Unit Price </span>
					                        <span ng-if="flagcheck == 3">单价</span>
	                    				</td>
	                    				<td align="center" style="background:#f0f0f0;">
	                    					<span ng-if="flagcheck == 1">Total Price </span>
					                        <span ng-if="flagcheck == 2">Total Price </span>
					                        <span ng-if="flagcheck == 3">总价</span>
	                    				</td>
	                    					
	                    				
	                    			</tr>
	                    			<tr>
	                    				
	                    					<td align="center" style="padding: 10px 0">
	                    					<img src="images/mask.png" ng-click="" width="25" align="left">
	                    						<span ng-if="flagcheck == 1">Mask </span>
					                          	<span ng-if="flagcheck == 2">Mask </span>
					                          	<span ng-if="flagcheck == 3">面镜</span>
	                    					</td>
	                    					<td align="center">
	                    						<span ng-bind="item.mask"></span>
	                    					</td>
	                    					<td align="right">
	                    						<span ng-bind="item.mask_s"></span>
	                    					</td>
	                    					<td align="right">
	                    						<span ng-bind="item.totalprice_m"></span>
	                    					</td>
	                    					
	                    				
	                    			</tr>
	                    			<tr>
	                    				
	                    					<td align="center" style="padding: 10px 0">
	                    					<img src="images/fins.png" ng-click="" width="25" align="left">
	                    						<span ng-if="flagcheck == 1">Fins  </span>
					                          	<span ng-if="flagcheck == 2">Fins  </span>
					                          	<span ng-if="flagcheck == 3">潛水蛙鞋</span>
	                    					</td>
	                    					<td align="center">
	                    						<span ng-bind="item.fins"></span>
	                    						
	                    					</td>
	                    					<td align="right">
	                    						<span ng-bind="item.fins_s"></span>
	                    					</td>
	                    					<td align="right">
	                    						<span ng-bind="item.totalprice_f"></span>
	                    					</td>
	                    					
	                    				
	                    			</tr>
	                    			<tr>
	                    				
	                    					<td align="center" style="padding: 10px 0">
	                    					<img src="images/wetsuit.png" ng-click="" width="25" align="left">
	                    						<span ng-if="flagcheck == 1">Wetsuit </span>
					                          	<span ng-if="flagcheck == 2">Wetsuit </span>
					                          	<span ng-if="flagcheck == 3">防寒衣</span>
	                    					</td>
	                    					<td align="center">
	                    						<span ng-bind="item.wetsuit"></span>
	                    					</td>
	                    					<td align="right">
	                    						<span ng-bind="item.wetsuit_s"></span>
	                    					</td>
	                    					<td align="right">
	                    						<span ng-bind="item.totalprice_w"></span>
	                    					</td>
	                    					
	                    				
	                    			</tr>
	                    			<tr>
	                    				
	                    					<td align="center" style="padding: 10px 0">
	                    					<img src="images/bcd.png" ng-click="" width="25" align="left">
	                    						<span ng-if="flagcheck == 1">BCD </span>
					                          	<span ng-if="flagcheck == 2">BCD </span>
					                          	<span ng-if="flagcheck == 3">BCD</span>
	                    					</td>
	                    					<td align="center">
	                    						<span ng-bind="item.bcd"></span>
	                    					</td>
	                    					<td align="right">
	                    						<span ng-bind="item.bcd_s"></span>
	                    					</td>
	                    					<td align="right">
	                    						<span ng-bind="item.totalprice_b"></span>
	                    					</td>
	                    					
	                    				
	                    			</tr>
	                    			<tr>
	                    				
	                    					<td align="center" style="padding: 10px 0">
	                    					<img src="images/oxygen.png" ng-click="" width="25" align="left">
	                    						<span ng-if="flagcheck == 1">Regulator </span>
					                          	<span ng-if="flagcheck == 2">Regulator </span>
					                          	<span ng-if="flagcheck == 3">调节器+表组</span>
	                    					</td>
	                    					<td align="center">
	                    						<span ng-bind="item.regulator"></span>
	                    					</td>
	                    					<td align="right" >
	                    						<span ng-bind="item.regulator_s"></span>
	                    					</td>
	                    					<td align="right">
	                    						<span ng-bind="item.totalprice_r"></span>
	                    					</td>
	                    					
	                    				
	                    			</tr>
	                    			<tr>
	                    				<td></td>
	                    				<td></td>
	                    				<td></td>
	                    				<td colspan="" align="right">
	                    				<span>THB.</span>
	                    					<span ng-bind="item.totalprice_r+item.totalprice_m+item.totalprice_b+item.totalprice_w+item.totalprice_f"></span>
	                    				</td>
	                    			</tr>
	                    		</table>
	                    		</div>
	                    	</td>
	                    </tr>
	                </table>
	                </div>
	                
	            
        </div>
        <div style="border: 1px solid #3b5998; border-radius: 8px;padding: 3px 12px;" ng-if="typeTour == 'transfer'">
        		<div style="padding: 0 12px;font-size: 16px;">
                        <span  ng-if="flagcheck == 1" >Terms of Use</span>
                        <span  ng-if="flagcheck == 2" >ข้อกำหนดการใช้งาน</span>
                        <span  ng-if="flagcheck == 3" >服务条款</span>
				</div>
                <div style="padding: 3px 0px;font-size: 16px">
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
                </div>
                </div>
				
	        </div>
	      </div>
    </div>
 </div>
<!-- <div modal="showModal" class="box-bg44" ng-style="" id="bg-modal">
	<div class="box-modal-top-50-lg box-modal-top-50-md box-modal-top-50-sm" style="top: 18%;">
      
		<div class="modal-body" id="body-photo" style="padding: 0">
		
		
			<div class="box-img-photo">
				
	                
    			
		  </div>
		</div>
	</div>
</div> -->









<!-- ************************** -->
<!-- CHAT SERVICE -->
<!-- ************************** -->
<div class="modal fade" id="stylepoupmyinfo">
	<i class="back_close " ng-click="cancelstylepoupmyinfo()" data-dismiss="modal" style="position: fixed; right: 0;top: 6px;z-index: 1201">&#10006</i>
	<div style="font-size: 16px;
    padding: 10px;
    background: #fff;
    width: 100%;
    z-index: 1200;" align="center" align="center" id="headinfo">
		
		<div style="position: absolute; width: 35px; text-align: center; height: 35px; background: #3b5998; border-radius: 8px 0px 45px 0px; line-height: 2; color: #fff;"><span ng-bind="index"></span>
		</div>
    	<div style="margin: 3px; ">
    							<span ng-if="flagcheck == 1">My information</span>
					<span ng-if="flagcheck == 2">ข้อมูลของฉัน</span>
					<span ng-if="flagcheck == 3">我的资料</span>		
								<!-- <span ng-if="flagcheck == 1" ng-bind="topic_en"></span>
								<span ng-if="flagcheck == 2" ng-bind="topic_th"></span>
								<span ng-if="flagcheck == 3" ng-bind="topic_cn"></span> -->
		</div>
		<div style="margin: 3px; padding-bottom: 10px; border-bottom: 1px solid #3b5998;">
								<span ng-if="flagcheck == 1" ng-bind="topic_en"></span>
								<span ng-if="flagcheck == 2" ng-bind="topic_th"></span>
								<span ng-if="flagcheck == 3" ng-bind="topic_cn"></span>
		</div>
		<!-- <i class="fa  fa fa-users " style="font-size:25px;color: #3b5998; "  ></i> -->
					<!-- <span ng-if="flagcheck == 1">My information</span>
					<span ng-if="flagcheck == 2">ข้อมูลของฉัน</span>
					<span ng-if="flagcheck == 3">我的资料</span>	 -->	
	</div>
	
		
    <div class="modal-dialog" style="margin: 0;margin-top: -3px">
      	<div class="modal-content">
	        <div class="modal-body" style="padding-top: 0;">
	        	<div style="padding:3px 2px; background: #fff; border-radius: 8px;">
			            <table style="font-size: 16px;" cellspacing="0" cellpadding="0" width="100%">
			                
			                <tr style="background:#f0f0f0;border-bottom: 1px solid #ddd;" ng-click="agent_guest_name(1)" data-toggle="modal" href="#guest_name">
			                    
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
			                
			                <tr style="border-bottom: 1px solid #ddd;" ng-click="agent_guest_name(2)" data-toggle="modal" data-target="#guest_country">
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
			                    	<div ng-if="web_country_name_en == 'United States'" >
			                            <img src="images/usa.ico" width="25" style="display: inline-block;" />
			                            <span ng-bind="web_country_name_en"></span>
			                        </div>
			                        <div ng-if="web_country_name_en == 'China'" >
			                            <img src="images/china.ico" width="25" style="display: inline-block;" />
			                            <span ng-bind="web_country_name_en"></span>
			                        </div>
			                        
			                            
			                        <div ng-if="web_country_name_en == 'Thailand'" style="padding: 0;padding-left: 0">
			                            <img src="images/thai.ico" width="25" style="display: inline-block;" />
			                            <span ng-bind="web_country_name_en"></span>
			                        </div>
			                        <div ng-if="web_country_name_en == 'Korea'" style="padding: 0;padding-left: 0">
			                            <img src="images/Korea.png" width="30" style="display: inline-block;" />
			                            <span ng-bind="web_country_name_en"></span>
			                        </div>
			                    </td>
			                    <td ></td>
			                    
			                </tr>
			                <tr style="background: #f0f0f0;border-bottom: 1px solid #ddd;" ng-click="agent_guest_name(7)" data-toggle="modal" data-target="#adultchild">
			                    <td ></td>
			                    <td colspan="3">
			                        <table cellspacing="0" cellpadding="0" style="margin-top: 8px;margin-bottom: 3px" width="">
			                            <tr ng-if="typeTour != 'golf'">
			                                <td width="60" align="left"  >
			                                        <img src="images/adult.png" width="35" style="display: inline-block;">
			                                </td>
			                                <!-- <td>=</td> -->
			                                <td align="center" >
			                                    <span ng-bind="adult"></span>
			                                    
			                                    
			                                </td>

			                                <td width="90" align="center" >
			                                        <img src="images/child.png" width="35" ng-click="agent_guest_name()" style="display: inline-block;">
			                                </td>
			                                <!-- <td>=</td> -->
			                                <td align="center" >
			                                    <span ng-bind="child" ></span>
			                                </td>
			                                <td width="90" align="center" >
			                                        <img src="images/infant.png" width="35" ng-click="agent_guest_name()" style="display: inline-block;">
			                                </td>
			                               <!--  <td>=</td> -->
			                                <td align="center" >
			                                    <span ng-bind="baby"></span>
			                                    <!--  <span ng-if="item.baby == '' || item.baby == null || item.baby == undefined">0</span> -->
			                                </td>
			                                <td align="center" width="90" >
			                                        <img src="images/tatol.png" width="35">
			                                </td>
			                               <!--  <td>=</td> -->
			                                <td align="center" width="50">
			                                    <span ng-bind="total"></span>
			                                </td>
			                            </tr>
			                            <tr ng-if="typeTour == 'golf'" >
			                                <td width="60" align="left"  >
			                                    <img src="images/golfs.png" width="35" style="display: inline-block;">
			                                </td>
			                                <!-- <td>=</td> -->
			                                <td align="center" >
			                                    <span ng-bind="adult"></span>
			                                    
			                                    
			                                </td>

			                                <td width="90" align="center" >
			                                        <img src="images/followers.png" width="35" ng-click="agent_guest_name()" style="display: inline-block;">
			                                </td>
			                                <!-- <td>=</td> -->
			                                <td align="center" >
			                                    <span ng-bind="child" ></span>
			                                </td>
			                                <td width="90" align="center" >
			                                        <img src="images/caddy.png" width="35" ng-click="agent_guest_name()" style="display: inline-block;">
			                                </td>
			                               <!--  <td>=</td> -->
			                                <td align="center" >
			                                    <span ng-bind="caddy"></span>
			                                    <span ng-if="item.caddy == '' || item.caddy == null || item.caddy == undefined">0</span>
			                                </td>
			                                <td align="center" width="90" >
			                                        <img src="images/golf-cart.png" width="35">
			                                </td>
			                               <!--  <td>=</td> -->
			                                <td align="center" width="50">
			                                    <span ng-bind="golfcar"></span>
			                                    <span ng-if="item.golfcar == '' || item.golfcar == null || item.golfcar == undefined">0</span>
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
			                       <img src="images/phone1.png" width="35" ng-click="agent_guest_name(3)" data-toggle="modal" data-target="#phone1">
			                    </td>
			                    <td width="10" ></td>
			                    <td valign="middle">
			                        <img src="iconstatus/flag/test_f/{{imgcoutry}}.png" width="22" style="margin-right: 5px">
			                        <span ng-bind="web_book_agent_phone"></span>
			                        <i ng-click="agent_guest_name(4);" class="fa fa-pencil-square-o fa-lg pull-right" style="font-size: 30px; color: #3b5998; margin-top: 2px;  right: 0; display: inline-block;" aria-hidden="true" data-toggle="modal" data-target="#Ephone1"></i>
			                    </td>
			                    <td width="10" ></td>
			                    
			                </tr>
			                <tr style="background: #f0f0f0;border-bottom: 1px solid #ddd;">
			                    <td width="10" ></td>
			                    <td width="35" style="padding: 5px 0;" valign="top"> 
			                       <img src="images/phone2.png" width="35" ng-click="agent_guest_name(6)" data-toggle="modal" data-target="#phone2">
			                    </td>
			                    <td width="10" ></td>
			                    <td valign="middle" >
			                        
			                        <img src="iconstatus/flag/test_f/{{imgcoutry2}}.png" width="22" style="margin-right: 5px">
			                        <span ng-bind="local_phone"></span><i ng-click="agent_guest_name(8);" class="fa fa-pencil-square-o fa-lg pull-right" style="font-size: 30px; color: #3b5998;  margin-top: 2px; right: 0; display: inline-block;   " aria-hidden="true"  data-toggle="modal" data-target="#Ephone2"></i>
			                    </td>
			                    <td width="10"></td>
			                    
			                </tr>
			                 <tr style="border-bottom: 1px solid #ddd;">
			                    <td width="10"></td>
			                    <td width="35" style="padding: 5px 0;" valign="top"> 
			                       <img src="images/email1.png" width="35">
			                    </td>
			                    <td width="10" ></td>
			                    <td valign="middle" >
			                         <span ng-bind="tb_web_book_agent_email"></span>
			                         <i ng-click="agent_guest_name(9)" class="fa fa-pencil-square-o fa-lg pull-right" style="font-size: 30px; color: #3b5998; margin-top: 2px;right: 0; display: inline-block;" aria-hidden="true" data-toggle="modal" data-target="#editEmail1"></i>
			                    </td>
			                    <td width="10"></td>
			                    
			                </tr>
			                <tr style="background: #f0f0f0;border-bottom: 1px solid #ddd;">
			                    <td width="10"></td>
			                    <td width="35" style="padding: 5px 0;" valign="top"> 
			                       <img src="images/email2.png" width="35">
			                    </td>
			                    <td width="10" "></td>
			                    <td valign="middle" ">
			                       <span ng-bind="tb_web_book_agent_email2"></span>
			                        <i ng-click="agent_guest_name(10)" class="fa fa-pencil-square-o fa-lg pull-right" style="font-size: 30px; color: #3b5998; margin-top: 2px; right: 0; display: inline-block;" aria-hidden="true" data-toggle="modal" data-target="#editEmail2"></i>
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
			                        <i ng-click="editfunsocial(item)" class="fa fa-pencil-square-o fa-lg pull-right" style="font-size: 30px; color: #3b5998; margin-top: 2px; right: 0; display: inline-block; " aria-hidden="true" data-toggle="modal" data-target="#editsocialall"></i>
			                    </td>
			                    <td width="10"></td>
			                    
			                </tr>
			            </table>
			            </div>
	        </div>
      	</div>
    </div>
</div>
<!-- <div modal="showModal" class="box-bg26" ng-style="" id="bg-modal">
	<div class="box-modal-top-50-lg box-modal-top-50-md box-modal-top-50-sm" style="top: 18%">
		<div class="modal-body" id="body-photo" style="padding: 0">
			
			<div class="box-img-photo">
				
				<div class="box-in-photo" style="height: 620px; overflow: auto; margin-bottom: 10px;">
					
				</div>
			</div>
		</div>
	</div>
</div> -->

<!-- END -->
        

<!-- to oppppppppppppppppppppppppppppppppp -->
<!-- Change flight -->
<div class="modal fade" id="changedrivermodal_toop" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
      		<i class="back_close " data-dismiss="modal">&#10006</i>
      		<input type="hidden" name="" value="{{VCID}}" ng-model="VCID">

      		<div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;">
				<!-- <img src="images/usercar_befor.png?v=<?=$cache;?>" width="20" align="absmiddle">  -->
				<img src="img/change.png?v=<?=$cache;?>" width="20" align="absmiddle"> 
					<span ng-if="flagcheck == 1" style="font-size: 18px;">Change flight </span>
					<span ng-if="flagcheck == 2" style="font-size: 18px;">เปลี่ยนเที่ยวบิน </span>
					<span ng-if="flagcheck == 3" style="font-size: 18px;">换航班</span>
						<img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
					<img src="images/callchat.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
					</div>
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px; border-radius:  0 0 8px 8px">
					<div>
						<span ng-if="flagcheck == 1" >The original flight </span>
						<span ng-if="flagcheck == 2" >เที่ยวบินเดิม </span>
						<span ng-if="flagcheck == 3" >原来的航班</span>
					</div>
					<table ng-style="timedelay2" style=" border-color: #f0f0f0;border-style: none !important  " border="1">
								<tr>
									<td width="2%"></td>
									<td width="47%" align="center" style="padding-top: 15px; ">
										<div style="width: 20%; position: absolute; z-index: 1; color: rgb(117, 117, 117); margin-left: 12%; text-align: center; margin-top: 5px;pointer-events: none; display: block;background: #fff;" ng-style="stylehour2">
											<span ng-if="flagcheck == 1">Hour</span>
											<span ng-if="flagcheck == 2">ชั่วโมง</span>
											<span ng-if="flagcheck == 3">小时</span>
										</div>
										<select class="form-control" ng-change="changenumNotify(selectnumNotify)" id="num" ng-model="selectnumNotify" data-ng-options="i  for i in num" style="padding: 0 55px">
											<option value=""></option>
										</select>
									</td>
									<td width="2%" align="center" style="padding-top: 15px;" >
										<span>:</span>
									</td>
									<td width="" align="center" style="padding-top: 15px; ">
										<div style="width: 20%; position: absolute; z-index: 1;
	                                    color: rgb(117, 117, 117); margin-left: 12%; text-align: center;         margin-top: 5px;  pointer-events: none;
	                                    display: block;background: #fff;" ng-style="styleminutes2" align="right">
											<span ng-if="flagcheck == 1">Minute</span>
											<span ng-if="flagcheck == 2">นาที</span>
											<span ng-if="flagcheck == 3">分钟</span>
										</div>                     
	                                     
										<select class="form-control" ng-change="changenumNotify2(selectnumNotify2)" id="num" ng-model ="selectnumNotify2" data-ng-options="i  for i in num2" style="padding: 0 55px;" > 
											<option value=""  ></option> 
										</select>
									</td>
									<td width="2%"></td>
								</tr>
								<tr>
									<td></td>
									<td colspan="3" align="center">
										<div align="center" style="margin-top: 11px;color: red">
											<span ng-if="flagcheck == 1">Your request must wait for a response from us.</span>
											<span ng-if="flagcheck == 2">คำขอของท่านต้องรอการตอบรับจากเรา</span>
											<span ng-if="flagcheck == 3">您的请求必须等待我们的答复。</span>
										</div>
										
										
    								<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="font-size: 36px;padding: 0 10px;color:#3b5998;display: none; " ng-style="stylecheckinclick"></i>
    						
									
										<div class="btm-checkin" ng-style="stylecheckin2" ng-click="confirm_sendmaildelay(23,VCID)" style="    display: none;margin-top: 15px;">
											<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;" ></i>
										</div>
									</td>
									<td></td>
								</tr>
							</table>
						</div>
      </div>
    </div>
</div>
<!-- flight delay to op-->

<div class="modal fade" id="flightdelaydrivermodal_toop" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
      		<i class="back_close " data-dismiss="modal">&#10006</i>
      		<input type="hidden" name="" value="{{VCID}}" ng-model="VCID">

      		<div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;">
				 <img src="img/delayf.png?v=<?=$cache;?>" width="20" align="absmiddle"> 
					<span ng-if="flagcheck == 1" style="font-size: 18px;">flight delay</span>
					<span ng-if="flagcheck == 2" style="font-size: 18px;">เที่ยวบินล่าช้า </span>
					<span ng-if="flagcheck == 3" style="font-size: 18px;">航班延误</span>
						<img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
					<img src="images/callchat.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
					</div>
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px; border-radius:  0 0 8px 8px">
					<table width="100%" style="margin-bottom: 5px">
						<tr>
									
									<td width="2%"></td>
									<td colspan="2">
										<span ng-if="flagcheck == 1" >The original flight </span>
										<span ng-if="flagcheck == 2" >เที่ยวบินเดิม </span>
										<span ng-if="flagcheck == 3" >原来的航班</span>
									</td>
									<td style="padding: 5px 0;">
													<span ng-bind="TB_order_air"></span>
									</td>
									<td width="2%"></td>
											
										
								</tr>
								<tr>
									<td width="2%"></td>
									<td colspan="2">
										<span ng-if="flagcheck == 1">Date</span>
										<span ng-if="flagcheck == 2">วันที่</span>
										<span ng-if="flagcheck == 3">日期</span>
									</td>
									<td colspan="" style="padding: 5px 0;">
										 <span ng-bind="TB_order_ondate"></span>
										 <span ng-if="TB_order_ondate == '' || TB_order_ondate == null || TB_order_ondate == undefined">-</span>
									</td>
									<td width="2%"></td>
								</tr>
								<tr>
									 <td width="2%"></td>
									 <td colspan="2">
												<span ng-if="flagcheck == 1">Time</span>
												<span ng-if="flagcheck == 2">เวลา</span>
												<span ng-if="flagcheck == 3">时间</span>
									</td>
									<td style="padding: 5px 0;">
										<span ng-bind="TB_order_air_time"></span>
										<span ng-if="TB_order_air_time == '' || TB_order_air_time == null || TB_order_air_time == undefined">-</span>
									</td>
									 <td width="2%"></td>
								</tr>
					</table>
					<table ng-style="timedelay2" style=" border-color: #f0f0f0;border-style: none !important;width: 100%  " border="1">
								<tr>
									<td width="2%"></td>
									<td colspan="2">
										<span ng-if="flagcheck == 1" >New flight </span>
										<span ng-if="flagcheck == 2" >เที่ยวบินใหม่ </span>
										<span ng-if="flagcheck == 3" >新的航班</span>
									</td>
									<td style="padding: 5px 0;">
									<input type="" class="form-control" name="" ng-model="changeflight_toop" id="changeflight_toop"></td>
									<td width="2%"></td>
									
								</tr>
								<tr>
									<td width="2%"></td>
									<td colspan="2">
										<span ng-if="flagcheck == 1">Date</span>
										<span ng-if="flagcheck == 2">วันที่</span>
										<span ng-if="flagcheck == 3">日期</span>
									</td>
									<td colspan="" style="padding: 5px 0;">
										<input type="date" class="form-control" id="datenewflight_toop" ng-model="datenewflight_toop">
										<script>
										    if (!Modernizr.touch || !Modernizr.inputtypes.date) {
										        $('input[type=date]')
										            .attr('type', 'text')
										            .datepicker({
										                // Consistent format with the HTML5 picker
										                dateFormat: 'yy-mm-dd'
										            });
										    }
										</script>
									</td>
									<td width="2%"></td>
								</tr>
								<tr>
									 <td width="2%"></td>
									 <td colspan="2">
												<span ng-if="flagcheck == 1">Time</span>
												<span ng-if="flagcheck == 2">เวลา</span>
												<span ng-if="flagcheck == 3">时间</span>

									</td>
									<td style="padding: 5px 0;">
									<table width="100%">
											<tr>
												<td>
													<div style="width: 20%; position: absolute; z-index: 1;    color: rgb(117, 117, 117); margin-left: 3%;   text-align: center; margin-top: 5px; pointer-events: none;   display: block; background: #fff;" ng-style="stylehour2">
													<span ng-if="flagcheck == 1">Hour</span>
													<span ng-if="flagcheck == 2">ชั่วโมง</span>
													<span ng-if="flagcheck == 3">小时</span>
												</div>
												<select class="form-control" ng-change="changenumNotify(selectnumNotify)" id="num" ng-model="selectnumNotify" data-ng-options="i  for i in num" style="display: inline-block;">
													<option value=""></option>
											</select>
												</td>
												<td><span style="padding: 3px;"> : </span></td>
												<td>
													<div style="position: absolute;
    z-index: 1;
    color: rgb(117, 117, 117);
    margin-left: 5%;
    text-align: center;
    margin-top: 5px;
    pointer-events: none;
    display: block;
    background: #fff;" ng-style="styleminutes2" align="right">
													<span ng-if="flagcheck == 1">Minute</span>
													<span ng-if="flagcheck == 2">นาที</span>
													<span ng-if="flagcheck == 3">分钟</span>
												</div>                     
			                                     
												<select class="form-control" ng-change="changenumNotify2(selectnumNotify2)" id="num" ng-model ="selectnumNotify2" data-ng-options="i  for i in num2" style="display: inline-block;" > 
													<option value=""  ></option> 
												</select>
												</td>
											</tr>
										</table>
									</td>
									 <td width="2%"></td>
								</tr>
								<tr>
									<td></td>
									<td colspan="3" align="center">
										<div align="center" style="margin-top: 11px;color: red">
											<span ng-if="flagcheck == 1">Your request must wait for a response from us.</span>
											<span ng-if="flagcheck == 2">คำขอของท่านต้องรอการตอบรับจากเรา</span>
											<span ng-if="flagcheck == 3">您的请求必须等待我们的答复。</span>
										</div>
										
										
    								<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="font-size: 36px;padding: 0 10px;color:#3b5998;display: none; " ng-style="stylecheckinclick"></i>
    						
									
										<div class="btm-checkin" ng-style="stylecheckin2" ng-click="confirm_sendmaildelay(24,VCID)" style="    display: none;margin-top: 15px;">
											<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;" ></i>
										</div>
									</td>
									<td></td>
								</tr>
							</table>
						</div>
      </div>
    </div>
</div>
<!--  ******************Popup GoTo Before TO OP******************  -->
	<div class="modal fade" id="beforedrivermodal_toop" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body" style="padding: 0;">
        <i class="back_close " ng-click="cancelid_popupbefore_toop()" data-dismiss="modal">&#10006</i>
       <!--  <i class="back_close fa fa-angle-left"  class=""></i> -->
					<div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;">
							<img src="images/usercar_befor.png?v=<?=$cache;?>" width="20" align="absmiddle"> 
							<span ng-if="flagcheck == 1" style="font-size: 18px;">Before</span>
							<span ng-if="flagcheck == 2" style="font-size: 18px;">ใช้ล่วงหน้า </span>
							<span ng-if="flagcheck == 3" style="font-size: 18px;">提前使用</span>
							<img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
							<img src="images/callchat.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
					</div>
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;">
						<table ng-style="timedelay2" style=" border-color: #f0f0f0;border-style: none !important  " border="1">
							<tr>
								<td width="2%"></td>
								<td width="47%" align="center" style="padding-top: 15px; ">
									<div style="width: 20%; position: absolute; z-index: 1; color: rgb(117, 117, 117); margin-left: 12%; text-align: center; margin-top: 5px;
                                pointer-events: none; display: block;background-color: #fff" ng-style="stylehour2">
										<span ng-if="flagcheck == 1">Hour</span>
										<span ng-if="flagcheck == 2">ชั่วโมง</span>
										<span ng-if="flagcheck == 3">小时</span>
									</div>
									<select class="form-control" ng-change="changenumNotify(selectnumNotify)" id="num" ng-model="selectnumNotify" data-ng-options="i  for i in num" style="padding: 0 55px">
										<option value=""></option>
									</select>
								</td>
								<td width="2%" align="center" style="padding-top: 15px;" >
									<span>:</span>
								</td>
								<td width="" align="center" style="padding-top: 15px; ">
									<div style="width: 20%; position: absolute; z-index: 1;
                                    color: rgb(117, 117, 117); margin-left: 12%;
                                    text-align: center; margin-top: 5px;
                                    pointer-events: none; display: block;background-color: #fff" ng-style="styleminutes2" align="right">
										<span ng-if="flagcheck == 1">Minute</span>
										<span ng-if="flagcheck == 2">นาที</span>
										<span ng-if="flagcheck == 3">分钟</span>
									</div> 
									<select class="form-control" ng-change="changenumNotify2(selectnumNotify2)" id="num" ng-model ="selectnumNotify2" data-ng-options="i  for i in num2" style="padding: 0 55px" > 
										<option value=""  ></option> 
									</select>
								</td>
								<td width="2%"></td>
							</tr>
							<tr>
								<td></td>
								<td colspan="3" align="center">
									<div align="center" style="margin-top: 11px;color: red">
										<span ng-if="flagcheck == 1">Your request must wait for a response from us.</span>
										<span ng-if="flagcheck == 2">คำขอของท่านต้องรอการตอบรับจากเรา</span>
										<span ng-if="flagcheck == 3">您的请求必须等待我们的答复。</span>
									</div>
									<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="font-size: 36px;padding: 0 10px;color:#3b5998;display: none; " ng-style="stylebeforeclick_toop"></i>
									<div class="btm-checkin" ng-style="stylecheckin2" ng-click="confirm_sendmaildelay(7,VCID)" style="    display: none;margin-top: 15px;">
										<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;" ></i>
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
  <!--      ******************Popup GoTo Delay******************          -->
<div id="delaydrivermodal_toop" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    <i class="back_close " ng-click="cancelid_popupdelay_toop()" data-dismiss="modal">&#10006</i>
      	
					<div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;">
						<img src="images/usercar_after.png?v=<?=$cache;?>" width="20" align="absmiddle">
						<span ng-if="flagcheck == 1" style="font-size: 18px;">Delay</span>
						<span ng-if="flagcheck == 2" style="font-size: 18px;">เลื่อนการใช้ </span>
						<span ng-if="flagcheck == 3" style="font-size: 18px;">推迟使用</span>
						<img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
						<img src="images/callchat.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
							
					</div>
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;    border-radius: 0 0 10px 10px;">
						<table ng-style="timedelay" style=" border-color: #f0f0f0;border-style: none !important  " border="1">
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
                               /* background: rgb(255, 255, 255);*/
                                display: block;background-color: #fff" ng-style="stylehour">
										<span ng-if="flagcheck == 1">Hour</span>
										<span ng-if="flagcheck == 2">ชั่วโมง</span>
										<span ng-if="flagcheck == 3">小时</span>
									</div>
									<select class="form-control" ng-change="changenum(selectnum)" id="num" ng-model="selectnum" data-ng-options="i  for i in num" style="padding: 0 55px;">
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
                                    /*background: rgb(255, 255, 255);*/
                                    display: block;background-color: #fff" ng-style="styleminutes" align="right">
										<span ng-if="flagcheck == 1">Minute</span>
										<span ng-if="flagcheck == 2">นาที</span>
										<span ng-if="flagcheck == 3">分钟</span>
									</div>                     
                                     
									<select class="form-control" ng-change="changenum2(selectnum2)" id="num" ng-model ="selectnum2" data-ng-options="i  for i in num2"  style="padding: 0 55px"> 
										<option value=""  ></option> 
									</select>
                                
                                    
								</td>
								<td width="2%"></td>
							</tr>

							<tr>
								<td></td>
								<td colspan="3" align="center">
									<div align="center" style="margin-top: 11px;color: red">
										<span ng-if="flagcheck == 1">Your request must wait for a response from us.</span>
										<span ng-if="flagcheck == 2">คำขอของท่านต้องรอการตอบรับจากเรา</span>
										<span ng-if="flagcheck == 3">您的请求必须等待我们的答复。</span>
									</div>
									<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="font-size: 36px;padding: 0 10px;color:#3b5998;display: none; " ng-style="styledelayclick_toop"></i>

									<div class="btm-checkin" ng-style="stylecheckin" ng-click="confirm_sendmaildelay(8,VCID)" style="    display: none;margin-top: 15px">
										<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;" ></i>
									</div>
								</td>
								<td></td>
							</tr>
						</table>
					</div>
    </div>

  </div>
</div>
<div id="landingdrivermodal_toop" class="modal fade" role="dialog">
  	<div class="modal-dialog">
	    <div class="modal-content">
	    	
	    	<div class="modal-body" style="padding: 0">
	    	<i class="back_close " data-dismiss="modal">&#10006</i>
      		<input type="hidden" name="" value="{{VCID}}" ng-model="VCID">

        		<div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;background-color: #fff;border-radius: 8px 8px 0 0;">
						<img src="img/landing.png?v=<?=$cache;?>" width="20" align="absmiddle">
						<span ng-if="flagcheck == 1" >Landing </span>
						<span ng-if="flagcheck == 2">เครื่องลงจอด </span>
						<span ng-if="flagcheck == 3">飞机降落</span>
						<img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
						<img src="images/callchat.png?v=<?=$cache;?>" width="20" style="display: inline-block;" > 
					</div>
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;border-radius: 0 0 8px 8px">
						<table width="100%" style="margin-top: 10px;margin-bottom: 10px;">
					   		<tr>
					   			<td width="10"></td>
					   			<td align="left" >
					   				<div style="float: left; padding: 9px 12px; background: #22407f;    text-shadow: none; border-radius: 8px; color: #fff;outline: none;" ng-click="btnlandingopmodal()" ng-style="btnfrelanding_toop">
					   					<span ng-if="flagcheck == 1">Frequently used</span>
					   					<span ng-if="flagcheck == 2">ข้อความที่ใช้บ่อย</span>
					   					<span ng-if="flagcheck == 3">常用信息</span>
					   				</div>
					   			</td>
					   			<td width="10"></td>
					   			<td align="center">
					   				<div style="padding: 9px 12px; background: #3b5998; text-shadow: none;    border-radius: 8px; color: #fff;outline: none;" ng-click="btnMessagelandingopmodal()" ng-style="btnchatlanding_toop">
					   					<span ng-if="flagcheck == 1">Chat</span>
					   					<span ng-if="flagcheck == 2">แชท</span>
					   					<span ng-if="flagcheck == 3">聊</span>
					   				</div>
					   			</td>
					   			
					   			<td width="10"></td>
					   		</tr>
					   </table>
					   <div style="padding: 5px 9px;display: none;" ng-style="frequentlyusedlanding_toop" >
						   <div style="border: solid 2px #3b5998;height: 285px;border-radius: 8px;overflow: auto; display: block;margin-bottom: 11px;margin-top: 7px;" ng-style="sdatamessagelanding_toop">
						   		<ul ng-repeat="item in messagedata" ng-class="{evenmesage: $even, oddmesage: $odd}" >
						   			<li ng-if="flagcheck == 1" ng-bind="$index+1+'.'+item.topic_en" ng-click="selectmessage(item)"></li>
						   			<li ng-if="flagcheck == 2" ng-bind="$index+1+'.'+item.topic_th" ng-click="selectmessage(item)"></li>
						   			<li ng-if="flagcheck == 3" ng-bind="$index+1+'.'+item.topic_cn" ng-click="selectmessage(item)"></li>
						   		</ul>
						   	</div>
						   	<div style="border: solid 2px #3b5998;height: 285px;border-radius: 8px;overflow: auto; display: none;margin-bottom: 11px;margin-top: 7px;" ng-style="sdatamessagelanding_store_toop" >
						   	<!-- <div style="font-size: 17px;"><i class="fa fa-angle-left" ng-click="btnFrequentlyused()" style="padding: 10px 10px;"></i><span ng-bind="headersmessagelanding_toop"></span></div> -->
						   		<ul ng-repeat="item in messagedataStore" ng-class="{evenmesage: $even, oddmesage: $odd}" >
						   			<li ng-if="flagcheck == 1" ng-bind="$index+1+'.'+item.topic_en" ng-click="selectmessagelanding_store_toop(item)"></li>
						   			<li ng-if="flagcheck == 2" ng-bind="$index+1+'.'+item.topic_th" ng-click="selectmessagelanding_store_toop(item)"></li>
						   			<li ng-if="flagcheck == 3" ng-bind="$index+1+'.'+item.topic_cn" ng-click="selectmessagelanding_store_toop(item)"></li>
						   		</ul>
						   	</div>
						   	<div style="width: 100%;top: 420px;position: absolute;display: none;" align="center" ng-style="spintakechattodriverselect">
    						<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"></i>
    						</div>
						   	<div ng-style="havedatamessagelanding_toop" align="center" style="margin-top: 15px;">
						   		<textarea class="form-control" rows="2" id="comment"  ng-style="" style="margin-bottom: 10px;border-radius: 8px; pointer-events: none;" value="{{SELmessage_store}}" ng-model="SELmessage_store"></textarea>
						   		<div class="btm-checkin" ng-click="confirm_sendmaildelay(25,VCID)" style="margin-top: 15px;" >
									<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;"></i>
								</div>
							</div>
					   </div>
					    <div style="width: 100%;top: 154px;position: absolute;display: none;" align="center" ng-style="spintakechattodriver">
    						<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"  ></i>
    					</div>
						<div style="padding: 5px 9px;margin-top: 9px;" ng-style="messagelanding_toop">
							<textarea class="form-control" rows="5" id="comment" ng-model="comdriver" ng-change="YourOwnComments(comdriver)" ng-style="owncomments" style="margin-bottom: 10px;border-radius: 8px;"></textarea>
							<div class="btm-checkin" ng-click="confirm_sendmaildelay(5,VCID)" style="display: none;margin-top: 15px;" ng-style="confirmcommenttoderiver">
								<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;"></i>
							</div>
						</div>
					</div>
      		</div>
	    </div>
   	</div>
</div>
<div id="lostdrivermodal_toop" class="modal fade" role="dialog">
  	<div class="modal-dialog">
	    <div class="modal-content">
	    	<div class="modal-body" style="padding: 0">
	    	<i class="back_close " data-dismiss="modal">&#10006</i>
      		<input type="hidden" name="" value="{{VCID}}" ng-model="VCID">

        		<div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;background-color: #fff;border-radius: 8px 8px 0 0;">
						<img src="img/lost.png?v=<?=$cache;?>" width="20" align="absmiddle">
						<span ng-if="flagcheck == 1" style="font-size: 18px;">Lost</span>
						<span ng-if="flagcheck == 2" style="font-size: 18px;">ลืมของ </span>
						<span ng-if="flagcheck == 3" style="font-size: 18px;">丢失</span>
						<img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
						<img src="images/callchat.png?v=<?=$cache;?>" width="20" style="display: inline-block;" > 
					</div>
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;border-radius: 0 0 8px 8px">
						<table width="100%" style="margin-top: 10px;margin-bottom: 10px;">
					   		<tr>
					   			<td width="10"></td>
					   			<td align="left" >
					   				<div style="float: left; padding: 9px 12px; background: #22407f;text-shadow: none; border-radius: 8px; color: #fff;outline: none;" ng-click="btnlostopmodal()" ng-style="btnfrelost_toop">
					   					<span ng-if="flagcheck == 1">Frequently used</span>
					   					<span ng-if="flagcheck == 2">ข้อความที่ใช้บ่อย</span>
					   					<span ng-if="flagcheck == 3">常用信息</span>
					   				</div>
					   			</td>
					   			<td width="10"></td>
					   			<td align="center">
					   				<div style="padding: 9px 12px; background: #3b5998; text-shadow: none;border-radius: 8px; color: #fff;outline: none;" ng-click="btnMessagelostopmodal()" ng-style="btnchatlost_toop">
					   					<span ng-if="flagcheck == 1">Chat</span>
					   					<span ng-if="flagcheck == 2">แชท</span>
					   					<span ng-if="flagcheck == 3">聊</span>
					   				</div>
					   			</td>
					   			
					   			<td width="10"></td>
					   		</tr>
					   </table>
					   <div style="padding: 5px 9px;display: none;" ng-style="frequentlyusedlost_toop" >
						   <div style="border: solid 2px #3b5998;height: 285px;border-radius: 8px;overflow: auto; display: block;margin-bottom: 11px;margin-top: 7px;" ng-style="sdatamessagelost_toop" >
						   		<ul ng-repeat="item in messagedata" ng-class="{evenmesage: $even, oddmesage: $odd}" >
						   			<li ng-if="flagcheck == 1" ng-bind="$index+1+'.'+item.topic_en" ng-click="selectmessage(item)"></li>
						   			<li ng-if="flagcheck == 2" ng-bind="$index+1+'.'+item.topic_th" ng-click="selectmessage(item)"></li>
						   			<li ng-if="flagcheck == 3" ng-bind="$index+1+'.'+item.topic_cn" ng-click="selectmessage(item)"></li>
						   		</ul>
						   	</div>
						   	<div style="border: solid 2px #3b5998;height: 285px;border-radius: 8px;overflow: auto; display: none;margin-bottom: 11px;margin-top: 7px;" ng-style="sdatamessagelost_store_toop" >
						   	<!-- <div style="font-size: 17px;"><i class="fa fa-angle-left" ng-click="btnFrequentlyused()" style="padding: 10px 10px;"></i><span ng-bind="headersmessage"></span></div> -->
						   		<ul ng-repeat="item in messagedataStore" ng-class="{evenmesage: $even, oddmesage: $odd}" >
						   			<li ng-if="flagcheck == 1" ng-bind="$index+1+'.'+item.topic_en" ng-click="selectmessagelost_store_toop(item)"></li>
						   			<li ng-if="flagcheck == 2" ng-bind="$index+1+'.'+item.topic_th" ng-click="selectmessagelost_store_toop(item)"></li>
						   			<li ng-if="flagcheck == 3" ng-bind="$index+1+'.'+item.topic_cn" ng-click="selectmessagelost_store_toop(item)"></li>
						   		</ul>
						   	</div>
						   	<div style="width: 100%;top: 420px;position: absolute;display: none;" align="center" ng-style="spintakechattodriverselect">
    						<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"></i>
    						</div>
						   	<div ng-style="havedatamessagelost_toop" align="center" style="margin-top: 15px;">
						   		<textarea class="form-control" rows="2" id="comment"  ng-style="" style="margin-bottom: 10px;border-radius: 8px; pointer-events: none;" value="{{SELmessage_store}}" ng-model="SELmessage_store"></textarea>
						   		<div class="btm-checkin" ng-click="confirm_sendmaildelay(27,VCID)" style="margin-top: 15px;" >
									<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;"></i>
								</div>
							</div>
					   </div>
					    <div style="width: 100%;top: 154px;position: absolute;display: none;" align="center" ng-style="spintakechattodriver">
    						<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"  ></i>
    					</div>
						<div style="padding: 5px 9px;margin-top: 9px;" ng-style="messagelost_toop">
							<textarea class="form-control" rows="5" id="comment" ng-model="comdriver" ng-change="YourOwnComments(comdriver)" ng-style="owncomments" style="margin-bottom: 10px;border-radius: 8px;"></textarea>
							<div class="btm-checkin" ng-click="confirm_sendmaildelay(5,VCID)" style="display: none;margin-top: 15px;" ng-style="confirmcommenttoderiver">
								<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;"></i>
							</div>
						</div>
					</div>
	      
      		</div>
	    </div>
   	</div>
</div>
<div id="attractiondrivermodal" class="modal fade" role="dialog">
  	<div class="modal-dialog">
	    <div class="modal-content">
	    	
		   	<div class="modal-body" style="padding: 0">
		   	<i class="back_close " data-dismiss="modal">&#10006</i>
        		
      		<div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;background-color: #fff;border-radius: 8px 8px 0 0;">
						<img src="images/all_message.png?v=<?=$cache;?>" width="20" align="absmiddle">
						<span ng-if="flagcheck == 1" style="font-size: 18px;">Attractions</span>
						<span ng-if="flagcheck == 2" style="font-size: 18px;">แหล่งท่องเที่ยว </span>
						<span ng-if="flagcheck == 3" style="font-size: 18px;">景点</span>
						<img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
						<img src="images/driver.png?v=<?=$cache;?>" width="20" style="display: inline-block;" > 
					</div>
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;border-radius: 0 0 8px 8px">
						<table width="100%" style="margin-top: 10px;margin-bottom: 10px;">
					   		<tr>
					   			<td width="10"></td>
					   			<td align="center">
					   				<div style="padding: 9px 12px; background: #3b5998; text-shadow: none;    border-radius: 8px; color: #fff;" ng-click="btnMessageattractiondrivermodal()">
					   					<span ng-if="flagcheck == 1">Chat</span>
					   					<span ng-if="flagcheck == 2">แชท</span>
					   					<span ng-if="flagcheck == 3">聊</span>
					   				</div>
					   			</td>
					   			<td width="10"></td>
					   			<td align="center" >
					   				<div style="float: right; padding: 9px 12px; background: #3b5998;    text-shadow: none; border-radius: 8px; color: #fff;" ng-click="btnattractiondrivermodal()">
					   					<span ng-if="flagcheck == 1">Frequently used</span>
					   					<span ng-if="flagcheck == 2">ข้อความที่ใช้บ่อย</span>
					   					<span ng-if="flagcheck == 3">经常使用的文本</span>
					   				</div>
					   			</td>
					   			<td width="10"></td>
					   		</tr>
					   </table>
					   <div style="padding: 5px 9px;display: none;" ng-style="frequentlyusedattraction" >
						   <div style="border: solid 2px #3b5998;height: 285px;border-radius: 8px;overflow: auto; display: block;margin-bottom: 11px;margin-top: 7px;" ng-style="sdatamessageattraction" >
						   		<ul ng-repeat="item in messagedata" ng-class="{evenmesage: $even, oddmesage: $odd}" >
						   			<li ng-if="flagcheck == 1" ng-bind="$index+1+'.'+item.topic_en" ng-click="selectmessage(item)"></li>
						   			<li ng-if="flagcheck == 2" ng-bind="$index+1+'.'+item.topic_th" ng-click="selectmessage(item)"></li>
						   			<li ng-if="flagcheck == 3" ng-bind="$index+1+'.'+item.topic_cn" ng-click="selectmessage(item)"></li>
						   		</ul>
						   	</div>
						   	<div style="border: solid 2px #3b5998;height: 285px;border-radius: 8px;overflow: auto; display: none;margin-bottom: 11px;margin-top: 7px;" ng-style="sdatamessageattraction_store" >
						   	<!-- <div style="font-size: 17px;"><i class="fa fa-angle-left" ng-click="btnFrequentlyused()" style="padding: 10px 10px;"></i><span ng-bind="headersmessage"></span></div> -->
						   		<ul ng-repeat="item in messagedataStore" ng-class="{evenmesage: $even, oddmesage: $odd}" >
						   			<li ng-if="flagcheck == 1" ng-bind="$index+1+'.'+item.topic_en" ng-click="selectmessageattraction_store(item)"></li>
						   			<li ng-if="flagcheck == 2" ng-bind="$index+1+'.'+item.topic_th" ng-click="selectmessageattraction_store(item)"></li>
						   			<li ng-if="flagcheck == 3" ng-bind="$index+1+'.'+item.topic_cn" ng-click="selectmessageattraction_store(item)"></li>
						   		</ul>
						   	</div>
						   	<div style="width: 100%;top: 420px;position: absolute;display: none;" align="center" ng-style="spintakechattodriverselect">
    						<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"></i>
    						</div>
						   	<div ng-style="havedatamessageattraction" align="center" style="margin-top: 15px;">
						   		<textarea class="form-control" rows="2" id="comment"  ng-style="" style="margin-bottom: 10px;border-radius: 8px; pointer-events: none;" value="{{SELmessage_store}}" ng-model="SELmessage_store"></textarea>
						   		<div class="btm-checkin" ng-click="confirm_sendmaildelay(21,VCID)" style="margin-top: 15px;" >
									<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;"></i>
								</div>
							</div>
					   </div>
					    <div style="width: 100%;top: 154px;position: absolute;display: none;" align="center" ng-style="spintakechattodriver">
    						<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"  ></i>
    					</div>
						<div style="padding: 5px 9px;margin-top: 9px;" ng-style="messageattraction">
							<textarea class="form-control" rows="5" id="comment" ng-model="comdriver" ng-change="YourOwnComments(comdriver)" ng-style="owncomments" style="margin-bottom: 10px;border-radius: 8px;"></textarea>
							<div class="btm-checkin" ng-click="confirm_sendmaildelay(2,VCID)" style="display: none;margin-top: 15px;" ng-style="confirmcommenttoderiver">
								<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;"></i>
							</div>
						</div>
					</div>
      		</div>
	    </div>
   	</div>
</div>
<div id="onthecardrivermodal_toop" class="modal fade" role="dialog">
  	<div class="modal-dialog">
	    <div class="modal-content">
	    	
	    	<div class="modal-body" style="padding: 0">
      		<input type="hidden" name="" value="{{VCID}}" ng-model="VCID">

	    	<i class="back_close " data-dismiss="modal">&#10006</i>
	    	<div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;background-color: #fff;border-radius: 8px 8px 0 0;">
						<img src="img/onthecar.png?v=<?=$cache;?>" width="20" align="absmiddle">
						<span ng-if="flagcheck == 1" style="font-size: 18px;">On the car</span>
						<span ng-if="flagcheck == 2" style="font-size: 18px;">อยู่บนรถ </span>
						<span ng-if="flagcheck == 3" style="font-size: 18px;">在车上</span>
						<img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
						<img src="images/callchat.png?v=<?=$cache;?>" width="20" style="display: inline-block;" > 
					</div>
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;border-radius: 0 0 8px 8px">
						<!-- <table width="100%" style="margin-top: 10px;margin-bottom: 10px;">
					   		<tr>
					   			<td width="10"></td>
					   			<td align="left" >
					   				<div style="float: left; padding: 9px 12px; background: #22407f;    text-shadow: none; border-radius: 8px; color: #fff; outline: none;" ng-click="btnonthecaropmodal()" ng-style="btnfreonthecar_toop">
					   					<span ng-if="flagcheck == 1">Frequently used</span>
					   					<span ng-if="flagcheck == 2">ข้อความที่ใช้บ่อย</span>
					   					<span ng-if="flagcheck == 3">常用信息</span>
					   				</div>
					   			</td>
					   			<td width="10"></td>
					   			<td align="center">
					   				<div style="padding: 9px 12px; background: #3b5998; text-shadow: none;    border-radius: 8px; color: #fff;outline: none;" ng-click="btnMessageonthecaropmodal()" ng-style="btnchatonthecar_toop">
					   					<span ng-if="flagcheck == 1">Chat</span>
					   					<span ng-if="flagcheck == 2">แชท</span>
					   					<span ng-if="flagcheck == 3">聊</span>
					   				</div>
					   			</td>
					   			
					   			<td width="10"></td>
					   		</tr>
					   </table> -->
					   <div style="padding: 5px 9px;display: none;" ng-style="frequentlyusedonthecar_toop" >
						   <div style="border: solid 2px #3b5998;height: 285px;border-radius: 8px;overflow: auto; display: block;margin-bottom: 11px;margin-top: 7px;" ng-style="sdatamessageonthecar_toop" >
						   		<ul ng-repeat="item in messagedata" ng-class="{evenmesage: $even, oddmesage: $odd}" >
						   			<li ng-if="flagcheck == 1" ng-bind="$index+1+'.'+item.topic_en" ng-click="selectmessage(item)"></li>
						   			<li ng-if="flagcheck == 2" ng-bind="$index+1+'.'+item.topic_th" ng-click="selectmessage(item)"></li>
						   			<li ng-if="flagcheck == 3" ng-bind="$index+1+'.'+item.topic_cn" ng-click="selectmessage(item)"></li>
						   		</ul>
						   	</div>
						   	<div style="border: solid 2px #3b5998;height: 285px;border-radius: 8px;overflow: auto; display: none;margin-bottom: 11px;margin-top: 7px;" ng-style="sdatamessageonthecar_store_toop" >
						   	<!-- <div style="font-size: 17px;"><i class="fa fa-angle-left" ng-click="btnFrequentlyused()" style="padding: 10px 10px;"></i><span ng-bind="headersmessage"></span></div> -->
						   		<ul ng-repeat="item in messagedataStore" ng-class="{evenmesage: $even, oddmesage: $odd}" >
						   			<li ng-if="flagcheck == 1" ng-bind="$index+1+'.'+item.topic_en" ng-click="selectmessageonthecar_store_toop(item)"></li>
						   			<li ng-if="flagcheck == 2" ng-bind="$index+1+'.'+item.topic_th" ng-click="selectmessageonthecar_store_toop(item)"></li>
						   			<li ng-if="flagcheck == 3" ng-bind="$index+1+'.'+item.topic_cn" ng-click="selectmessageonthecar_store_toop(item)"></li>
						   		</ul>
						   	</div>
						   	<div style="width: 100%;top: 420px;position: absolute;display: none;" align="center" ng-style="spintakechattodriverselect">
    						<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"></i>
    						</div>
						   	<div ng-style="havedatamessageonthecar_toop" align="center" style="margin-top: 15px;">
						   		<textarea class="form-control" rows="2" id="comment"  ng-style="" style="margin-bottom: 10px;border-radius: 8px; pointer-events: none;" value="{{SELmessage_store}}" ng-model="SELmessage_store"></textarea>
						   		<div class="btm-checkin" ng-click="confirm_sendmaildelay(26,VCID)" style="margin-top: 15px;" >
									<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;"></i>
								</div>
							</div>
					   </div>
					    <div style="width: 100%;top: 154px;position: absolute;display: none;" align="center" ng-style="spintakechattodriver">
    						<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"  ></i>
    					</div>
						<div style="padding: 5px 9px;margin-top: 9px;" ng-style="messageonthecar_toop">
							<textarea class="form-control" rows="5" id="comment" ng-model="comdriver" ng-change="YourOwnComments(comdriver)" ng-style="owncomments" style="margin-bottom: 10px;border-radius: 8px;"></textarea>
							<div class="btm-checkin" ng-click="confirm_sendmaildelay(5,VCID)" style="display: none;margin-top: 15px;" ng-style="confirmcommenttoderiver">
								<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;"></i>
							</div>
						</div>
					</div>
	      
        		
      		</div>
	    </div>
   	</div>
</div>
<div id="restaurantdrivermodal_toop" class="modal fade" role="dialog">
  	<div class="modal-dialog">
	    <div class="modal-content">
	    	
	    	<div class="modal-body" style="padding: 0">
	    	<i class="back_close " data-dismiss="modal">&#10006</i>
      		<input type="hidden" name="" value="{{VCID}}" ng-model="VCID">

        		<div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;background-color: #fff;border-radius: 8px 8px 0 0;">
						<img src="img/restaurant.png?v=<?=$cache;?>" width="20" align="absmiddle">
						<span ng-if="flagcheck == 1" style="font-size: 18px;">Restaurant</span>
						<span ng-if="flagcheck == 2" style="font-size: 18px;">ร้านอาหาร </span>
						<span ng-if="flagcheck == 3" style="font-size: 18px;">餐厅</span>
						<img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
						<img src="images/callchat.png?v=<?=$cache;?>" width="20" style="display: inline-block;" > 
					</div>
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;border-radius: 0 0 8px 8px">
						<table width="100%" style="margin-top: 10px;margin-bottom: 10px;">
					   		<tr>
					   			<td width="10"></td>
					   			<td align="left" >
					   				<div style="float: left; padding: 9px 12px; background: #3b5998;    text-shadow: none; border-radius: 8px; color: #fff;outline: none;" ng-click="btnrestaurantopmodal()" ng-style="btnfrerestaurant_toop">
					   					<span ng-if="flagcheck == 1">Frequently used</span>
					   					<span ng-if="flagcheck == 2">ข้อความที่ใช้บ่อย</span>
					   					<span ng-if="flagcheck == 3">常用信息</span>
					   				</div>
					   			</td>
					   			<td width="10"></td>
					   			<td align="center">
					   				<div style="padding: 9px 12px; background: #3b5998; text-shadow: none;    border-radius: 8px; color: #fff;outline: none;" ng-click="btnMessagerestauranopmodal()" ng-style="btnchatrestaurant_toop">
					   					<span ng-if="flagcheck == 1">Chat</span>
					   					<span ng-if="flagcheck == 2">แชท</span>
					   					<span ng-if="flagcheck == 3">聊</span>
					   				</div>
					   			</td>
					   			
					   			<td width="10"></td>
					   		</tr>
					   </table>
					   <div style="padding: 5px 9px;display: none;" ng-style="frequentlyusedrestaurant_toop" >
						   <div style="border: solid 2px #3b5998;height: 285px;border-radius: 8px;overflow: auto; display: block;margin-bottom: 11px;margin-top: 7px;" ng-style="sdatamessagerestaurant_toop" >
						   		<ul ng-repeat="item in messagedata" ng-class="{evenmesage: $even, oddmesage: $odd}" >
						   			<li ng-if="flagcheck == 1" ng-bind="$index+1+'.'+item.topic_en" ng-click="selectmessage(item)"></li>
						   			<li ng-if="flagcheck == 2" ng-bind="$index+1+'.'+item.topic_th" ng-click="selectmessage(item)"></li>
						   			<li ng-if="flagcheck == 3" ng-bind="$index+1+'.'+item.topic_cn" ng-click="selectmessage(item)"></li>
						   		</ul>
						   	</div>
						   	<div style="border: solid 2px #3b5998;height: 285px;border-radius: 8px;overflow: auto; display: none;margin-bottom: 11px;margin-top: 7px;" ng-style="sdatamessagerestaurant_store_toop" >
						   <!-- 	<div style="font-size: 17px;"><i class="fa fa-angle-left" ng-click="btnFrequentlyused()" style="padding: 10px 10px;"></i><span ng-bind="headersmessage"></span></div> -->
						   		<ul ng-repeat="item in messagedataStore" ng-class="{evenmesage: $even, oddmesage: $odd}" >
						   			<li ng-if="flagcheck == 1" ng-bind="$index+1+'.'+item.topic_en" ng-click="selectmessagerestaurant_store_toop(item)"></li>
						   			<li ng-if="flagcheck == 2" ng-bind="$index+1+'.'+item.topic_th" ng-click="selectmessagerestaurant_store_toop(item)"></li>
						   			<li ng-if="flagcheck == 3" ng-bind="$index+1+'.'+item.topic_cn" ng-click="selectmessagerestaurant_store_toop(item)"></li>
						   		</ul>
						   	</div>
						   	<div style="width: 100%;top: 420px;position: absolute;display: none;" align="center" ng-style="spintakechattodriverselect">
    						<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"></i>
    						</div>
						   	<div ng-style="havedatamessagerestaurant_toop" align="center" style="margin-top: 15px;">
						   		<textarea class="form-control" rows="2" id="comment"  ng-style="" style="margin-bottom: 10px;border-radius: 8px; pointer-events: none;" value="{{SELmessage_store}}" ng-model="SELmessage_store"></textarea>
						   		<div class="btm-checkin" ng-click="confirm_sendmaildelay(28,VCID)" style="margin-top: 15px;" >
									<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;"></i>
								</div>
							</div>
					   </div>
					    <div style="width: 100%;top: 154px;position: absolute;display: none;" align="center" ng-style="spintakechattodriver">
    						<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"  ></i>
    					</div>
						<div style="padding: 5px 9px;margin-top: 9px;" ng-style="messagerestaurant_toop">
							<textarea class="form-control" rows="5" id="comment" ng-model="comdriver" ng-change="YourOwnComments(comdriver)" ng-style="owncomments" style="margin-bottom: 10px;border-radius: 8px;"></textarea>
							<div class="btm-checkin" ng-click="confirm_sendmaildelay(5,VCID)" style="display: none;margin-top: 15px;" ng-style="confirmcommenttoderiver">
								<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;"></i>
							</div>
						</div>
					</div>
	      
      		</div>
	    </div>
   	</div>
</div>
<div id="sharelocationtodriver_toop" class="modal fade" role="dialog">
  	<div class="modal-dialog">
	    <div class="modal-content">
	    	<div class="modal-body" style="padding: 0">
	    		<i class="back_close " data-dismiss="modal">&#10006</i>
      		<input type="hidden" name="" value="{{VCID}}" ng-model="VCID">

	    	<div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;">
	    	<i class="fa fa-map-marker" aria-hidden="true" style="font-size: 20px; color: #3b5998;"></i>
				<span ng-if="flagcheck == 1">Location share</span>
				<span ng-if="flagcheck == 2">แชร์ตำแหน่ง</span>
				<span ng-if="flagcheck == 3">位置共享</span>
				</div>
        		<div style="padding: 0 10px;padding-bottom: 10px" ng-style="boxsharelocation_toop">
				
				<div style="width: 100%;height: 400px;  border: 2px solid #9E9E9E; margin-bottom: 8px;border-radius: 8px;display: none" ng-style="ssharelocation_toop">


						<iframe id="iframes" ng-src="{{iframe.srcsharelo | trusted}}"  style="width: 100%;border:none;height: 100%;pointer-events: none; "></iframe>
						
				</div>
				<div align="center" style="color: rgb(255, 255, 255); border-radius: 50%;width: 100%; height: 40px; z-index: 5;margin-top: 8px; text-align: center; display: none;text-align: center;" ng-style="styleloadlocation_toop">
				<i class="fa fa-spinner faa-spin animated " align="center" aria-hidden="true" style="font-size: 36px;padding: 0 10px;color:#3b5998; " ></i>
				</div>
					<div class="btm-checkin" ng-style="boxsharelocation_toop" ng-click="confirm_sendmaildelay(15,VCID)" style="margin-top: 15px;display: none">
					<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;"></i>
					</div>
				</div>






	    	<!-- i class="back_close " data-dismiss="modal">&#10006</i>
      		<input type="hidden" name="" value="{{VCID}}" ng-model="VCID">

	    	<div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;">
	    	<i class="fa fa-map-marker" aria-hidden="true" style="font-size: 20px; color: #3b5998;"></i>
												

				<span ng-if="flagcheck == 1">Location share</span>
				<span ng-if="flagcheck == 2">แชร์ตำแหน่ง</span>
				<span ng-if="flagcheck == 3">位置共享</span>
				</div>
        		<div style="padding: 0 10px;padding-bottom: 10px" ng-style="boxsharelocation_toop">
					<div style="position: absolute;
    color: rgb(255, 255, 255);
    border-radius: 50%;
    background: rgb(59, 89, 152);
    width: 40px;
    height: 40px;
    right: 18px;
    margin-top: 8px;
    text-align: center;
    display: none;
    " ng-style="btnsharelocation_toop" ng-click="confirm_sendmaildelay(15,vdIDclickinfo)">
					<i class="fa fa-map-marker" aria-hidden="true" style="padding: 5px;
    font-size: 30px;"></i>
				</div>
				<div style="/*background: rgb(59, 89, 152); */
    position: absolute;
    color: rgb(255, 255, 255);
    border-radius: 50%;
    /* background: rgb(59, 89, 152); */
    width: 40px;
    height: 40px;
    right: 26px;
    z-index: 5;
    margin-top: 8px;
    text-align: center;
    display: none;" ng-style="styleloadlocation_toop">
				<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="font-size: 36px;padding: 0 10px;color:#3b5998; " ></i>
				</div>
				<div style="width: 100%;height: 520px;  border: 2px solid #9E9E9E; margin-bottom: 8px;border-radius: 8px;display: none" ng-style="ssharelocation_toop">


						<iframe id="iframes" ng-src="{{iframe.srcsharelo | trusted}}"  style="width: 100%;border:none;height: 510px;pointer-events: none; "></iframe>
						
				</div>
				</div> -->
      		</div>
	    </div>
   	</div>
</div>

<!-- wait ot op -->
<div id="waitdrivermodal_toop" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    <i class="back_close " ng-click="cancelid_popupwait_toop()" data-dismiss="modal">&#10006</i>
      	
      		<input type="hidden" name="" value="{{VCID}}" ng-model="VCID">

					<div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;">
							<img src="images/clock_wait.png?v=<?=$cache;?>" width="20" align="absmiddle">
							<span ng-if="flagcheck == 1" style="font-size: 18px;">I've been waiting</span>
							<span ng-if="flagcheck == 2" style="font-size: 18px;">ฉันรออยู่แล้ว </span>
							<span ng-if="flagcheck == 3" style="font-size: 18px;">我已在等</span>
							<img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
							<img src="images/callchat.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
					</div>
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;">
						<div ng-style="takepictures_toop" style="display: none; ">
							<table width="100%">
								<tr>
									<td align="center" colspan="3" style="padding-top: 5px;">
										<span ng-if="flagcheck == 1" >Please take pictures of your environment</span>
										<span ng-if="flagcheck == 2">ถ่ายภาพภาพแวดล้อมของคุณ</span>
										<span ng-if="flagcheck == 3">请拍照您的环境</span>
										<!-- <span style="color: #000">({{setionflight.length}})</span> -->
									</td>
                       
								</tr>
								<tr>
									<td align="center" colspan="3">
										<div class="nophoto" style="color: red; display: none; width: 100%;   position: absolute;">{{nophoto}}</div>
										<div style="width: 98%">
    										<img id="blah3"  width="" />
    									</div>
                              
									</td>
								</tr>
								<tr>
									<td  align="center" width="48%">
										<div class="fileUpload btn-new" ng-style="newtakephoto_toop" style="margin-bottom: 10px;">
											<i class="fa fa-camera fa-lg" aria-hidden="true"></i>  
											<input type="file" class="upload" name="fileToUpload" id="fileToUpload" accept="image/*"  capture="camera" onchange="document.getElementById('blah3').src = window.URL.createObjectURL(this.files[0])" style="padding: 5px border:none;"
											file-input="files"/>
										</div>
										<div style="width: 100%;margin-top: 14px; margin-bottom: 5px;display: none" align="center" ng-style="spintake22">
    											<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"  ></i>
    										</div>
										
										<div style="display: none" ng-style="blockhavephoto_toop">
											<table width="100%">
												<tr>
													<td  align="center" width="48%">
														<div class="btn-delete" ng-style="">
															<i class="fa fa-trash-o fa-lg" aria-hidden="true" ng-click="deleteimage()"></i>        
                                                
														</div>
													</td>
													<td width="4%"></td>
													<td align="center"  width="48%">
													
														<div ng-click="takepicturesfun();savetakein()" class="btn-save" ng-style="spinsendphoto2" >
															<i class="fa fa-paper-plane fa-lg " aria-hidden="true"></i>
															<!-- <span  ng-if="flagcheck == 1">Save image</span>
															<span  ng-if="flagcheck == 2">ส่งข้อมูล</span>
															<span  ng-if="flagcheck == 3">發送</span> -->
														</div> 
													</td>
												</tr>
											</table>
										</div>
									</td>
								</tr>
                      
							</table>
						</div>

						<div ng-style="pictureyourself_toop" style="display: none; ">
							<table width="100%">
								<tr>
									<td align="center" colspan="3" style="padding-top: 5px;">
										<span ng-if="flagcheck == 1" >Please take a picture of yourself</span>
										<span ng-if="flagcheck == 2">กรุณาถ่ายภาพตัวคุณเอง</span>
										<span ng-if="flagcheck == 3">请拍照您自己</span>
										<!-- <span style="color: #000">({{setionflight.length}})</span> -->
									</td>
                       
								</tr>
								<tr>
									<td align="center" colspan="3">                          
										<div class="nophoto2" style="color: red; display: none; width: 100%;   position: absolute;">{{nophoto}}</div>
										<div style="width: 98%">
    										<img id="blah4"    />
    									</div>
                             
									</td>
								</tr>
                      
								<tr>
									<td  align="center" width="48%">
										<div class="fileUpload btn-new2" ng-style="newtakephoto2_toop" style="margin-bottom: 10px;">
											<i class="fa fa-camera fa-lg" aria-hidden="true"></i>  
											<input type="file" class="upload" name="fileToUpload" id="fileToUpload" accept="image/*"  capture="camera" onchange="document.getElementById('blah4').src = window.URL.createObjectURL(this.files[0])" style="padding: 5px border:none;"
											file-input="files"/>
										</div>
										<div style="width: 100%;margin-top: 14px; margin-bottom: 5px;display: none;" align="center" ng-style="spintake2">
    											<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"  ></i>
    										</div>
										<div style="display: none" ng-style="blockhavephoto_toop">
											<table width="100%">
												<tr>
													<td  align="center" width="48%">
														<div class="btn-delete" ng-style="">
															<i class="fa fa-trash-o fa-lg" aria-hidden="true" ng-click="deleteimage()"></i>        
                                                
														</div>
													</td>
													<td width="4%"></td>
													<td align="center"  width="48%">
														<div ng-click="confirm_sendmaildelay(9,VCID)" class="btn-save" id="checkimg" >
															<i class="fa fa-paper-plane fa-lg " aria-hidden="true"></i>
                                                  
														</div>
													</td>
												</tr>
											</table>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</div>
    </div>

  </div>
</div>
<!-- chat to op -->
<div id="chatdrivermodal_toop" class="modal fade" role="dialog">
  	<div class="modal-dialog">
	    <div class="modal-content">
	    	<i class="back_close " ng-click="cancelid_popupcallcenterchat()" data-dismiss="modal">&#10006</i>
	    	
      		<input type="hidden" name="" value="{{VCID}}" ng-model="VCID">

					<div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;">
							<img src="images/all_message.png?v=<?=$cache;?>" width="20" align="absmiddle">
							<span ng-if="flagcheck == 1" style="font-size: 18px;">Chat</span>
							<span ng-if="flagcheck == 2" style="font-size: 18px;">การแชท </span>
							<span ng-if="flagcheck == 3" style="font-size: 18px;">交谈</span> 
							<img src="images/arrow-r.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
							<img src="images/callchat.png?v=<?=$cache;?>" width="20" style="display: inline-block;" >
					</div>
					<div style="background: #f0f0f0;font-size: 18px;margin-bottom: 0;padding: 5px;width: 100%;border-radius: 0 0 8px 8px">
						<table width="100%" style="margin-top: 10px;margin-bottom: 10px;">
					   		<tr>
					   			<td width="10"></td>
					   			<td align="left" >
					   				<div style="float: left; padding: 9px 12px; background: #22407f;    text-shadow: none; border-radius: 8px; color: #fff;outline: none;" ng-click="btnFrequentlyused_toop()" ng-style="btnfre_toop">
					   					<span ng-if="flagcheck == 1">Frequently used</span>
					   					<span ng-if="flagcheck == 2">ข้อความที่ใช้บ่อย</span>
					   					<span ng-if="flagcheck == 3">常用信息</span>
					   				</div>
					   			</td>
					   			<td width="10"></td>
					   			<td align="center">
					   				<div style="padding: 9px 12px; background: #3b5998; text-shadow: none;    border-radius: 8px; color: #fff;outline: none;" ng-click="btnMessage_toop()" ng-style="btnchat_toop">
					   					<span ng-if="flagcheck == 1">Chat</span>
					   					<span ng-if="flagcheck == 2">แชท</span>
					   					<span ng-if="flagcheck == 3">聊</span>
					   				</div>
					   			</td>
					   			
					   			<td width="10"></td>
					   		</tr>
					   </table>
					   <div style="padding: 5px 9px;display: none;" ng-style="frequentlyused_toop" >
						   <div style="border: solid 2px #3b5998;height: 285px;border-radius: 8px;overflow: auto; display: block;margin-bottom: 11px;margin-top: 7px;" ng-style="sdatamessage_toop" >

						   		<ul ng-repeat="item in messagedata_toop" ng-class="{evenmesage: $even, oddmesage: $odd}" >
						   			<li ng-if="flagcheck == 1" ng-bind="$index+1+'.'+item.topic_en" ng-click="selectmessage_toop(item)"></li>
						   			<li ng-if="flagcheck == 2" ng-bind="$index+1+'.'+item.topic_th" ng-click="selectmessage_toop(item)"></li>
						   			<li ng-if="flagcheck == 3" ng-bind="$index+1+'.'+item.topic_cn" ng-click="selectmessage_toop(item)"></li>
						   		</ul>
						   	</div>
						   	<div style="border: solid 2px #3b5998;height: 285px;border-radius: 8px;overflow: auto; display: none;margin-bottom: 11px;margin-top: 7px;" ng-style="sdatamessage_store_toop" >
						   		<div style="font-size: 17px;"><i class="fa fa-angle-left" ng-click="btnFrequentlyused_toop()" style="padding: 10px 10px;"></i><span ng-bind="headersmessage_toop"></span></div>
						   		<ul ng-repeat="item in messagedataStore_toop" ng-class="{evenmesage: $even, oddmesage: $odd}" >
						   			<li ng-if="flagcheck == 1" ng-bind="$index+1+'.'+item.topic_en" ng-click="selectmessage_store_toop(item)"></li>
						   			<li ng-if="flagcheck == 2" ng-bind="$index+1+'.'+item.topic_th" ng-click="selectmessage_store_toop(item)"></li>
						   			<li ng-if="flagcheck == 3" ng-bind="$index+1+'.'+item.topic_cn" ng-click="selectmessage_store_toop(item)"></li>
						   		</ul>
						   	</div>
						   	<div style="width: 100%; top: 420px;left: 0%; position: absolute;display: none;" align="center" ng-style="spintakechattoopselect">
    						<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"  ></i>
    						</div>
						   	<div ng-style="havedatamessage_toop" align="center" style="margin-top: 10px;">
						   		<textarea class="form-control" rows="2" id="comment"  ng-style="" style="margin-bottom: 10px;border-radius: 8px; pointer-events: none;" value="{{SELmessage_store_toop}}" ng-model="SELmessage_store_toop"></textarea>
						   		<div class="btm-checkin" ng-click="confirm_sendmaildelay(13,VCID)" style="margin-top: 15px;" >
									<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;"></i>
								</div>
							</div>
					   </div>
					   <div style="width: 100%;top: 155px; position: absolute;display: none" align="center" ng-style="spintakechattoop">
    						<i class="fa fa-spinner faa-spin animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"  ></i>
    					</div>
						<div style="padding: 5px 9px;margin-top: 9px;" ng-style="message_toop">
						
							<textarea class="form-control" rows="5" id="comment" ng-model="comcallcenter" ng-change="YourOwnCommentscall(comcallcenter)" ng-style="owncomments2" style="margin-bottom: 10px;border-radius: 8px;"></textarea>
							<div class="btm-checkin" ng-click="confirm_sendmaildelay(5,VCID)" style="display: none;margin-top: 15px;" ng-style="confirmcommenttocallcenter">
								<i class="fa fa-paper-plane fa-2x " aria-hidden="true" style="font-size: 18px;padding: 0 10px;"></i>
							</div>
						</div>
					</div>
	    </div>
  </div>
</div>
<div id="voucherpass" class="modal fade" role="dialog">
  	<div class="modal-dialog">
	    <div class="modal-content">
		    <div class="modal-body">
		    <i class="back_close" ng-click="" data-dismiss="modal">&#10006</i> 
		    <!-- <div style="width: 100%;padding: 10px"  ng-style="spintakechattoop">
    			<i class="fa fa-warning faa-flash animated " aria-hidden="true" style="color: #3b5998; font-size: 36px;"  ></i>
    		</div>  -->  
		    	<div align="center" style="font-size: 20px;">
		    	<i class="fa fa-warning faa-flash animated " align="left" aria-hidden="true" style="color: #3b5998; font-size: 30px;text-align: left;"  ></i>
		    		<span ng-if="flagcheck == 1">Services have been used</span>
			    	<span ng-if="flagcheck == 2">วอเชอร์นี้ใช้แล้ว</span>
			    	<span ng-if="flagcheck == 3">服务已经使用</span>
		    	</div>
		    	
		    </div>      
	    </div>

  	</div>
</div>


<div id="popupdriverdetail" class="modal fade" role="dialog">
<div style="font-size: 16px; padding: 10px; background: #fff;  width: 100%;z-index: 
	1200;" align="center" align="center" id="headerdriverdetail">
		<i class="back_close " ng-click="cancelpopupdriverdetail()" data-dismiss="modal" style="z-index: 1201;">&#10006</i> 
		<div style="position: absolute; width: 35px; text-align: center; height: 35px; background: #3b5998; border-radius: 8px 0px 45px 0px; line-height: 2; color: #fff;"><span ng-bind="index"></span>
		</div>

    	<div style="margin: 3px; ">
    			<div ng-if="flagcheck == 1" style="margin-left: 50px;">Driver/Car/Facilitiy/Seating </div>
		        <div ng-if="flagcheck == 2" style="margin-left: 50px;" >คนขับ/รถ/ความสะดวก/ที่นั่ง</div>
		        <div ng-if="flagcheck == 3" style="margin-left: 50px;" >车/司机/设施/座位数</div>	
								
		</div>
		<div style="margin: 3px; padding-bottom: 10px; border-bottom: 1px solid #3b5998;">
			<span ng-if="flagcheck == 1" ng-bind="topic_en"></span>
								<span ng-if="flagcheck == 2" ng-bind="topic_th"></span>
								<span ng-if="flagcheck == 3" ng-bind="topic_cn"></span>
		</div>
	</div>
	<div class="modal-dialog" style="margin-left: 0;margin-right: 0;margin-bottom: 0;margin-top: -3px;" >  
	    <div class="modal-content" style="border-top-right-radius: 0;   border-top-left-radius: 0;">	
	    	<div class="modal-body" style="padding: 10px;padding-bottom: 0">
	      		<input type="hidden" id="VCID" value="{{latituderel}}">
		    	
		    	
		    	<!-- <div align="center" style="font-size: 18px; padding: 10px">
					<img src="images/car-detail.png" width="25" >
					<span ng-if="flagcheck == 1" >Driver / Car  / Facilitiy / Seating </span>
	                <span ng-if="flagcheck == 2" >คนขับ / รถ / ความสะดวก / ที่นั่ง</span>
	                <span ng-if="flagcheck == 3">车 / 司机 / 设施 / 座位数</span>
                </div> -->
                <div style="padding: 2px 5px;font-size: 15px;text-shadow: none">
                 	<span ng-if="flagcheck == 1"> Drive</span> 
                 	<span ng-if="flagcheck == 2"> คนขับ</span> 
                 	<span ng-if="flagcheck == 3"> 司机</span> 

                </div>
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
			                                <span><a href="tel:{{web_driver_phone}}"><img src="images/phone.png" width="25"></a></span>
			                            </td>
			                            <td width="10"></td>

			                            
			                        </tr>
			                        <tr ng-if="web_driver_line_id.length != 0 && web_driver_line_id != null">
			                            <td width="10"></td>
			                            <td style="padding: 5px 0;"  >
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
			                 <div align="left" style="padding: 2px 5px;font-size: 15px;text-shadow: none">
			                        <span  ng-if="flagcheck == 1" >Car details  </span>
			                        <span  ng-if="flagcheck == 2" >ข้อมูลรถ</span>
			                        <span  ng-if="flagcheck == 3" >车细节 </span>
			                </div>
			                <div style="padding: 3px 3px;  border-radius: 8px; background: #fff;">
			                
			                    
			                    <div class="box-in-car" ng-repeat="item in gallerycar">
			                    <img  src="images/carmodelicon/{{item.post_date}}.jpg" id="img-fig">
			                    </div>
			                  
			                    
			                </div>
			                <Br/>
			                <div align="left" style="padding: 2px 5px;font-size: 15px;text-shadow: none">
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
			                <div align="left" style="padding: 2px 5px;font-size: 15px;text-shadow: none">
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
	    </div>
	  </div>
  </div>
  <!-- <div modal="showModal" class="box-bg44" ng-style="popupdriverdetail" id="bg-modal">
	<div class="box-modal-top-50-lg box-modal-top-50-md box-modal-top-50-sm" style="top:18%">
      
		<div class="modal-body" id="body-photo" style="padding: 0;margin-bottom: 10px;">
		<i class="back_close " ng-click="cancelpopupdriverdetail()" data-dismiss="modal">&#10006</i>
			<div class="box-img-photo" >
			
				<div class="box-in-photo" style="padding: 0 5px; ">

                 			
					
			                
			               
				</div>
			</div>
		</div>
	</div>
</div> -->
<div id="popup_chatView" class="modal fade" role="dialog" >
	<div class="back-full-popup" style="background-color: #3b5998">
    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
 			<tr>
    			<td width="40">
    				<div id="btn_close_gps_popup_back" data-dismiss="modal">
    					<i class="fa fa-arrow-circle-left" style="font-size:22px; color:#FFFFFF "> </i>
    				</div>
    			</td>
  				<td>
  					<div style="font-size:18px; color:#FFFFFF " id="head_full_popup">
  						<span ng-if="flagcheck == 1">Loacation</span>
	        			<span ng-if="flagcheck == 2">ตำแหน่ง</span>
	        			<span ng-if="flagcheck == 3">位置</span>
	        		</div>
	        	</td>
    			<td width="50" align="right">
    				<div style="font-size:18px; color:#FFFFFF " id="head_full_popup_icon" ng-click="shareLocation()">
    					<button type="button" class="btn" data-backdrop="static" id="btn_send_gps_point" style="padding:3px; width:60px; background-color: #FFCC00;font-size:15px; ">
    					  <i class="fa  fa-send"></i> Send</button>
 					</div>
 				</td>
  			</tr>
		</table>
	</div>
  	<div class="modal-dialog" style="margin: 0;width: 100%;height: 100%">
    	<div class="modal-content" style="height: 89%">
      		<div class="modal-body" style="height: 100%;padding: 0">
      			  <div   style=" background-color:#F6F6F6 ; height:80px;width:100%; bottom:0; position:fixed; padding:10px;   " >
 
					<table width="100%"  border="0" cellspacing="2" cellpadding="0" >
  						<tr> 
    						<td   style=" color:#000000; padding-top:0px; font-size:18px ">
	    						<b><span ng-if="flagcheck == 1">Loacation</span>
			        			<span ng-if="flagcheck == 2">ตำแหน่ง</span>
			        			<span ng-if="flagcheck == 3">位置</span></b>
		        			</td> 
  							<td rowspan="2" valign="top"   style=" color:#333333; padding-top:5px; width:50px "  id="button_navigater"  >
  							
  							</td>
  						</tr>
						 <tr>
						    <td id="load_chat_preview_map_address"  style=" color:#333333; padding-bottom:5px; " ng-bind="mapAddress" >&nbsp;</td>
						 </tr>
					</table>

				</div>
 
				<div   id="load_chat"   style="margin-top: 40px; height:94%"  >  
						 

				</div> 
			</div>
		</div>
	</div>	
</div>


<div id="location" class="modal fade" role="dialog">
  	<div class="modal-dialog" style="margin: 220px 3%">
	    <div class="modal-content">
	    	<div class="modal-body" style="padding: 0">
	    	<!-- <i class="back_close " data-dismiss="modal">&#10006</i> -->
      		<input type="hidden" name="" value="{{VCID}}" ng-model="VCID">

	    	<!-- <div align="center" style="font-size: 18px;margin-bottom: 0; padding: 10px;">
	    	<i class="fa fa-map-marker" aria-hidden="true" style="font-size: 20px; color: #3b5998;"></i>
				<span ng-if="flagcheck == 1">Location share</span>
				<span ng-if="flagcheck == 2">แชร์ตำแหน่ง</span>
				<span ng-if="flagcheck == 3">位置共享</span>
				</div> -->
        	<div class="centered-content-map">
 
				<div id="button_alert_show_map_now" ng-click="too_map()">
					<div class="drop-sub-menu-link" style="color:#000000; font-size:18px; padding: 10px;" >&nbsp; แชร์ตำแหน่ง</div>
				</div>
				<div id="button_alert_show_map_realtime" ng-click="maprealTime()">
					<div class="drop-sub-menu-link" style="border:none; color:#000000; font-size:18px;padding: 10px; " >&nbsp;  แชร์ตำแหน่งเรียลไทม์  </div>
				</div>

				</div>
      		</div>
	    </div>
   	</div>
</div>
	
<div id="realtime" class="modal fade" role="dialog" >
	<div class="back-full-popup" style="background: url('images/bg-popup-50.png'); height:80px;width:100%   ">
	    <table width="100%" border="0" cellspacing="0" cellpadding="0">
	  		<tr>
	    		<td width="50">
	    			<div id="btn_close_gps_realtime_popup_back" data-dismiss="modal">
	    				<i class="fa fa-arrow-circle-left" style="font-size:22px; color:#FFFFFF "> </i>
	    			</div>
	    		</td>
	  			<td>
	  				<div style="font-size:18px; color:#FFFFFF " id="head_full_popup">
	  					<center>
	  						<span ng-if="flagcheck == 1">Share Location Realtime</span>
		        			<span ng-if="flagcheck == 2">แชร์ตำแหน่งเรียลไทม์</span>
		        			<span ng-if="flagcheck == 3">时位置分享</span>
		        		</center>
		        	</div>
		        </td>
	    		<td width="50" align="right">
	    			<div style="font-size:22px; color:#FFFFFF " id="head_full_popup_icon" class="user-status-online"><i class="fa  fa-power-off"></i>
	    			</div>
	    		</td>
	  		</tr>
		</table>
		<!-- <table width="100%" border="0" cellspacing="2" cellpadding="0">
		 <tr>
		    <td>&nbsp;</td>
		    <td>&nbsp;</td>
		    <td>&nbsp;</td>
		  </tr>
		</table> -->

	</div>
	<!-- <div class="back-full-popup" style="background-color: #3b5998">
    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
 			<tr>
    			<td width="40">
    				<div id="btn_close_gps_popup_back" data-dismiss="modal">
    					<i class="fa fa-arrow-circle-left" style="font-size:22px; color:#FFFFFF "> </i>
    				</div>
    			</td>
  				<td>
  					<div style="font-size:18px; color:#FFFFFF " id="head_full_popup">
  						<span ng-if="flagcheck == 1">Share Location Realtime</span>
	        			<span ng-if="flagcheck == 2">แชร์ตำแหน่งเรียลไทม์</span>
	        			<span ng-if="flagcheck == 3">时位置分享</span>
	        		</div>
	        	</td>
    			<td width="50" align="right">
    				<div style="font-size:18px; color:#FFFFFF " id="head_full_popup_icon" ng-click="shareLocation()">
    					<button type="button" class="btn" data-backdrop="static" id="btn_send_gps_point" style="padding:3px; width:60px; background-color: #FFCC00;font-size:15px; ">
    					  <i class="fa  fa-send"></i> Send</button>
 					</div>
 				</td>
  			</tr>
		</table>
	</div> -->
  	<div class="modal-dialog" style="margin: 0;width: 100%;height: 100%">
    	<div class="modal-content" style="height: 100%">
      		<div class="modal-body" style="height: 100%;padding: 0;width: 100%">
      			  <div   style=" background-color:#F6F6F6 ; height:100%;width:100%; bottom:0; position:fixed; padding:10px;   " >
 							<!-- <div   id="load_chat_preview_map_realtime"   style="margin-top: 40px; height:100%"  >  
		 
 								<? /// include('google/check_system_realtime.php')?>
							</div> -->
      			  			<iframe width="100%"  height="92%"  frameborder="0"  ng-src="{{iframe.maprealtime | trusted}}"  style="        margin: 63px 0px;"></iframe> 

					</div>
					<!-- <div   id="load_chat_realtime"   style="margin-top: 40px; height:100%"  >  
		 

</div>  -->
 
  
			</div>
		</div>
	</div>	
</div>	
<!-- <script>
	$("#button_alert_show_map_realtime").click(function(){     
    $( "#popup_chat_share_map_realtime" ).slideToggle("slow");  
  $( "#alert_show_map" ).slideToggle("slow"); 
</script>