var app = angular.module('myApp', ['ngCookies','ngRoute','angular.filter','ui.bootstrap','FBAngular','geolocation','ui-notification','ngAnimate','ngMessages']);
    app.controller('myCtrl', function($scope,$document,$sce,$base64,$location,$http,$window,$filter,$templateCache,$interval,$timeout,$cookies,$cookieStore,Fullscreen,geolocation,$anchorScroll,Notification){
        $scope.local_phone;
       // Notification.warning({message: 'notification message from driver', delay: null});
        $scope.web_book_agent_phone;
        $scope.chmail = 0;
        $scope.chmail2 = 0;
        $scope.lenc;
        $scope.mail_or_phone;
        $scope.clean = 0;
        $scope.driving = 0;
        $scope.time = 0;
        $scope.state1 = []; 
        $scope.state2 = [];
        $scope.state3 = [];
        $scope.state4 = [];
        $scope.state5 = [];
        $scope.state6 = [];
        $scope.state7 = [];
        $scope.state8 = [];
        $scope.state9 = [];
        $scope.latituderel;
        $scope.longituderel;
        $scope.idTypemessage;
        var sv = $location.search().sv; 
        console.log(sv)
        //JSON.parse($location.search().sv);
        var absUrl = $location.absUrl().replace('#');
        console.log()
        console.log(absUrl)
         $scope.encoded = $base64.encode('a string');
            $scope.decoded = $base64.decode('YSBzdHJpbmc=');
        // $scope.statearrived = 0;
        // $scope.statevehicle = 0;
        // $scope.statecomplete = 0;
        //$scope.bobymain = { 'display':'none'}; 
        $scope.styleshowimages1all = { 'display':'none'};       

        $scope.chsmenudriver = false;         
        $scope.fsmenudriver = function(){
            if ($scope.chsmenudriver == false) {
                $scope.chsmenudriver = true;
                //$scope.smenudriver={"display":'block'}
            }
            else{
                 $scope.chsmenudriver = false;
                //$scope.smenudriver={"display":'none'}
            }            
        }
        angular.element('#history').bind("scroll", function(e) {
            var history = e.target.scrollTop;//
            console.log(history)
            if (history > 35) {
             //angular.element(document.querySelector('#hiddentory')).css('top','0');

            }

        });
        angular.element('.modal-body').bind("scroll", function(e) {
            var topscroll = e.target.scrollTop;//
            console.log(topscroll)
            console.log($scope.ccstate)
            if ($scope.ccstate == 1) {
                if (topscroll > 0) {
                    //$scope.sbody = {'overflow':'hidden'}
                    $scope.figbeforedriver = {'position':'fixed',
                                            "top" : "0",
                                            "right" : "0"
                                            
                                            }
                }
                else{
                   // $scope.figbeforedriver = {'position':'relative'}
                    //$scope.sbody = {'overflow':'hidden'}
                }
            }
            if ($scope.ccstate == 2) {
                if (topscroll > 0) {
                    //$scope.sbody = {'overflow':'hidden'}
                    $scope.figdelaydriver = {'position':'fixed',
                                            "top" : "0",
                                            "right" : "0"
                                            }
                }
                else{
                   // $scope.sbody = {'overflow':'hidden'}
                }
            }
            if ($scope.ccstate == 3) {
                if (topscroll > 0) {
                    //$scope.sbody = {'overflow':'hidden'}
                    $scope.figwaitdriver = {'position':'fixed',
                                            "top" : "0",
                                            "right" : "0"
                                            
                                            }
                }
                else{
                    //$scope.sbody = {'overflow':'hidden'}
                    //$scope.figwaitdriver = {'position':'relative'}
                }
            }
            if ($scope.ccstate == 4) {
                if (topscroll > 0) {
                    //$scope.sbody = {'overflow':'hidden'}
                    $scope.figchatdriver = {'position':'fixed',
                                            "top" : "0",
                                            "right" : "0"
                                            
                                            }
                    $scope.message = {'display':'none'}
                    $scope.frequentlyused = {'display':'none'}
                    $scope.confirmcommenttoderiver = {'display':'none'}
                }
                else{
                    //$scope.sbody = {'overflow':'hidden'}
                }
            }
            if ($scope.ccstate == 5) {
                if (topscroll > 0) {
                    //$scope.sbody = {'overflow':'hidden'}
                    $scope.figmenudriver = {'position':'fixed',
                                            "top" : "0",
                                            "right" : "0"
                                            
                                            }
                     $scope.boxsharelocationdriver = {'display':'none'}
                }
                else{
                    //$scope.sbody = {'overflow':'hidden'}
                }
            }
            /**********************TO OP***********************/

            if ($scope.ccstate == 6) {
                if (topscroll > 0) {
                    //$scope.sbody = {'overflow':'hidden'}
                    $scope.figbeforeop = {'position':'fixed',
                                            "top" : "0",
                                            "right" : "0"
                                            }
                    $scope.stylecheckin2 = {'display':'none'}
                }
                else{
                    //$scope.sbody = {'overflow':'hidden'}
                    //$scope.figbeforeop = {'position':'relative'}
                }
            }
           if ($scope.ccstate == 7) {
                if (topscroll > 0) {
                    $scope.figdelayop = {'overflow':'fixed',
                                            "top" : "0",
                                            "right" : "0"
                                            
                                            }
                    $scope.stylecheckin = {'display':'none'}
                    $scope.stylehour = {'display':'block'}
                    $scope.styleminutes = {'display':'block'}
                }
                else{
                    //$scope.sbody = {'position':'hidden'}
                    //$scope.figdelayop = {'position':'relative'}
                }
            }
           if ($scope.ccstate == 8) {
                if (topscroll > 0) {
                    //$scope.sbody = {'overflow':'hidden'}
                    $scope.figwaittoop = {'position':'fixed',
                                            "top" : "0",
                                            "right" : "0"
                                            
                                            }
                    angular.element(document.querySelector('#blah3')).css("display","none");
                    $scope.message = {'display':'none'}
                    $scope.newtakephoto_toop = {'display':'block'}
                    $scope.blockhavephoto_toop = {'display':'none'}
                }
                else{
                   // $scope.sbody = {'overflow':'hidden'}
                    //$scope.figwaitop = {'position':'relative'}
                }
            }
            if ($scope.ccstate == 9) {
                if (topscroll > 0) {
                    //$scope.sbody = {'overflow':'hidden'}
                    $scope.figchatop = {'position':'fixed',
                                            "top" : "0",
                                            "right" : "0"
                                            
                                            }
                    $scope.message_toop = {'display':'none'}
                    $scope.frequentlyused_toop = {'display':'none'}
                    $scope.confirmcommenttocallcenter = {'display':'none'}
                }
                else{
                    //$scope.sbody = {'overflow':'hidden'}
                    //$scope.figchatop = {'position':'relative'}
                }
            }
            if ($scope.ccstate == 10) {
                if (topscroll > 0) {
                    //$scope.sbody = {'overflow':'hidden'}
                    $scope.figmenuop = {'position':'fixed',
                                            "top" : "0",
                                            "right" : "0"
                                            
                                            }
                    $scope.boxsharelocation_toop = {'display':'none'}
                }
                else{
                   // $scope.sbody = {'overflow':'hidden'}
                    //$scope.figmenuop = {'position':'relative'}
                }
            }
           $scope.visible = false;
                
        });
        $scope.data = JSON.parse($location.search().order);
        console.log($scope.data)
        $scope.selecetdataorde = $scope.data;
        //console.log($scope.selecetdataorde)
        $http({
                  method : 'POST',
                  url : "php/getmessagedata.php",
                 data: $.param({type:28}),
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){                  
                  console.log(res)
                  $scope.messagedataStoreall = res;
                  //console.log($scope.VCIDALL)
                

                  
                   
                });
    

        geolocation.getLocation().then(function(data){
            // $scope.latituderel;
            // $scope.longituderel;
                  $scope.coords = {lat:data.coords.latitude, long:data.coords.longitude};
                  

                  $scope.latituderel = $scope.coords.lat;
                  $scope.longituderel = $scope.coords.long;
                  console.log($scope.latituderel)
                  console.log($scope.longituderel)
                  // alert(data.coords.latitude)
                  // alert(data.coords.longitude)
        });

        $scope.testbtn = function(){
            //alert("aaaaaaa")
        }
    
        //******************************************************//
        //*********************FULLSCREEN***********************//
        //******************************************************//
        
        function goFullscreen() {
             // // console.log("fullllllllllllllllllllllllllllll")
             //  Fullscreen
               if (Fullscreen.isEnabled())
                Fullscreen.cancel();
               else

                Fullscreen.all();


              // Set Fullscreen to a specific element (bad practice)
              // Fullscreen.enable( document.getElementById('img') )

        }

              $scope.isFullScreen = false;

        $scope.goFullScreenViaWatcher = function() {
                $scope.isFullScreen = !$scope.isFullScreen;
        }
        $scope.datetoday = new Date(); 
        var tick = function() {
          $scope.clock = Date.now();
        }
        tick();
        $interval(tick, 1000);
        //*****************************************************//
        $scope.datetoday = new Date(); 
        $scope.lopen = { 'display':'none' };
        //$scope.bobymain = { 'display':'none'};
        //$scope.load = { 'display':'block'};
        $scope.timedelay = { 'display':'none'};
        var language = $cookies.get("language");

       // $scope.lang = JSON.parse(localStorage["language"]);
        console.log(language)
        if( language==undefined){
            $('#Selectlanguage').modal('show');
            $scope.stylelangq = { 'display':'none' };
            $scope.flag = 'usa.ico';
            $scope.flagcheck = 1;
            $scope.textminute = "Minute";
            $scope.texthour = "Hour";
            $scope.Countryfont = "Please select country";
            $scope.Countryfont2 = "Please select country";
           

        }
        else if( language==1){
            $scope.flag = 'usa.ico';
            $scope.flagcheck = 1;
            $scope.textminute = "Minute";
            $scope.texthour = "Hour";
            $scope.Countryfont = "Please select country";
            $scope.Countryfont2 = "Please select country";
            $scope.stylelangq = { 'display':'none' };
            
        }
        else if( language==2){
            $scope.flag = 'thai.ico';
            $scope.flagcheck = 2;
            $scope.textminute = "นาที";
            $scope.texthour = "ชั่วโมง";
             $scope.Countryfont = "โปรดเลือกประเทศ";
             $scope.Countryfont2 = "โปรดเลือกประเทศ";
             $scope.stylelangq = { 'display':'none' };
           
        }
        else if( language==3){
            $scope.flag = 'china.ico';
            $scope.flagcheck = 3;
             $scope.textminute = "分钟";
             $scope.texthour = "小时";
             $scope.Countryfont = "请选择国家";
             $scope.Countryfont2 = "请选择国家";
             $scope.stylelangq = { 'display':'none' };
        }
       
        //$scope.stylelangq = { 'display':'block' };
        $scope.maptosss;
        $scope.checkpopupguest = 0;
        $scope.guest_topoint_date = null;
        $scope.gallerycar;
        $scope.baby;
        $scope.orderid;
        $scope.datecom = new Date();
         $scope.editphone = false;
         $scope.editlocalphone = false;
         $scope.Ecomment = false;
         $scope.editmailshow = false;
         $scope.editmail2show = false;
        $scope.tb_web_book_agent_id;
        $scope.id;
        $scope.code;
        $scope.lastModified;
        $scope.lastname;
        $scope.PLstate1 = [];
        $scope.PLstate0 = [];
        $scope.PLstate3 = [];
        $scope.statusText;
        $scope.VOUCHER;
        $scope.height = 30;
        $scope.imgcoutryfront;
        $scope.imgcoutryfront2;
        var mysrclat= 0; var mysrclong = 0;
    
          $scope.nearme = function($scope) {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                        mysrclat = position.coords.latitude; 
                        mysrclong = position.coords.longitude;
                        console.log(mysrclat);
                        console.log(mysrclong);
                });
                
            }
        }

        //******************************************//
      
          $http.get("https://ipinfo.io")
          .then(function(response) {
              $scope.myWelcome = response;
              //console.log(response.data)
              $scope.timecountry = response.data.country;
          });
      
        //
        // var tick = function() {
        //     $scope.clock = new Date();
        //       }
        //       tick();
        //       $interval(tick, 1000);
        // });

    //     var getAuctionItems = function () {
    //     // $http({ method: 'GET', url: $scope.apiController + '/GetAuctionItems', params: { maxItems: 5 } }).
    //     // success(function (data, status, headers, config) {
    //     //     processAuctionItems(data);
    //     //     $scope.auctions = data;
    //     //     $timeout(getAuctionItems, 10000);
    //     // }).
    //     // error(function (data, status, headers, config) {
    //     //     //TODO: log this error
    //     //     $timeout(getAuctionItems, 10000);
    //     // });
    // };
    // var tick = function () {
    //     $scope.currentTime = moment();
    //     processAuctionItems($scope.auctions);
    //     $timeout(tick, 1000);
    // }
    // var processAuctionItems = function (data) {
    //     angular.forEach(data, function (item) {
    //         item.remainingTime = datetime.getRemainigTime(item.AuctionEndDateTime);
    //         console.log(remainingTime);
    //     });
    // }
    // $scope.currentTime = moment();
    // getAuctionItems();
    // $timeout(tick, 1000);
    // $timeout(getAuctionItems, 10000);
    $scope.timesss = [];
    $scope.datebooks= [];
    $scope.VocherID = [];
        $scope.num = [ '00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','23'];
        $scope.num2 = [ '00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20',
                    '21','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40',
                    '41','42','43','44','45','46','47','48','49','50','51','52','53','54','55','56','57','58','59'];
        $scope.trustSrc = function(src) {
          return $sce.trustAsResourceUrl(src);
        }
        $scope.datebooks2 = [];
        $scope.VCIDALL = [];
        $scope.lengcomdri = [];
        $scope.lengcomcall = [];
        $scope.vcchecknum = [];
        $scope.chattodriver = [];
        $scope.countdriver = [];
        $scope.countservive = [];
        $scope.countop = [];
       //var checknonti =  $interval(function() {
        $http({
            method : 'POST',
                  url : "php/notifigcomment.php",
                  data: $.param({orderid: $scope.data}),
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){                  
                  //console.log(res)
                  $scope.nontifigcomment = res;
                  console.log("in")
                });
        //},1000 );
        $http({
            method : 'POST',
            url : "php/getorderid.php",
            data: $.param({id: $scope.data}),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(res){
                $scope.dataorderidall = res;
                //$scope.load = { 'display':'none'};
                console.log(res)
                $scope.TB_order_agent = res[0].TB_order_agent;
                console.log($scope.TB_order_agent)
                console.log(res[0].TB_carall_car_type)
                //$scope.VocherID = res;
                $scope.TB_admin_companyhome = res[0].TB_admin_company;
                $scope.agenthome = res[0].TB_order_agent;
                $scope.TB_driver_phone = res[0].TB_driver_phone;
                $scope.TB_book_agent_agent_ref = res[0].TB_book_agent_agent_ref;
                $scope.VocherID = [];
                
                var length = res.length;
                $scope.onholiday = res[0].TB_order_outdate +" "+ " / " +" " + res[length-1].TB_order_outdate ;
                for (var i = 0; i < res.length; i++) {
                    $scope.VCIDALL.push(res[i].TB_order_order);
                    $scope.VocherID.push(res[i])
                    //console.log(res[i])
                   if (res[i].TB_order_status == "CONFIRM") {
                            $scope.state = "statehome";
                    }
                    else if(res[i].TB_order_status == "NEW"){
                            $scope.state = "statehome2";
                    }
                    else{
                            $scope.state = "statehome3";
                    }
                }
                
                for (var i = 0; i < res.length; i++) {
                    $scope.datebooks.push(new Date(res[i].TB_order_outdate +' '+ res[i].airout_h +':'+ res[i].airout_m));                    
                    $scope.datebooks2.push(res[i].TB_order_outdate +' '+ res[i].airout_h +':'+ res[i].airout_m + ':00');

                }                
                for (var i = 0; i < $scope.datebooks2.length; i++) {
                    var s = 0;
                        angular.forEach($scope.VocherID, function (y) {                            
                            if (s==i) {
                                if ($scope.datebooks2[i] < $filter('date')(new Date(),'yyyy-MM-dd HH:mm:ss ')) {
                                     y.datessnew = 1;
                                     y.styleiconhome = "main-icon3";
                                     y.styletabelhead = "styletabelhead3";
                                    
                                }
                                else{
                                    y.datessnew = 2;
                                    y.styleiconhome = "main-icon4";
                                    y.styletabelhead = "styletabelhead4"
                                }
                            }
                            s++;
                         });
                }
                $http({
                        method : 'POST',
                        url : "php/getcomment.php",
                        data: $.param({order: $scope.data}),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            $scope.getcommentfirst = res;

                            for (var i = 0; i < $scope.getcommentfirst.length; i++) {
                                var a = 0;
                                angular.forEach($scope.VocherID, function (y) {
                                        if ($scope.getcommentfirst[i].voucher == y.TB_order_order ) {
                                             y.comment = 1;
                                             //console.log(y.TB_
                                        }
                                 });

                            }
                });
                
                $scope.voucherselect = $scope.VocherID;
                console.log($scope.voucherselect)
                goFullscreen();
                
                $scope.load = { 'display':'none'};
                $scope.bobymain = { 'display':'block'};
        });
        // $scope.checkuesd = function(x){

        // }
        $scope.getvoucher = function(x){
            $scope.VOUCHER = x;
        }

        $scope.getbookinfomation =function(x){
            console.log(x.TB_order_order)
            $scope.VOUCHER = x.TB_order_order;
            callvoucher($scope.VOUCHER);
            $scope.popupbookingdetail = {'display':'block'}
              if (x.datessnew == 1) {
                $('#voucherpass').modal('show');
              }
        }
        function callvoucher(id){
            $scope.VOUCHER = id;			
            $http({
                    method : 'POST',
                    url : "php/voucher.php",
                    data: $.param({id: $scope.VOUCHER}),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).success(function(res){
                        console.log(res)
                        console.log("************************************************")
                        $scope.country_id = res[0].country_id;
                        $scope.agent_ref = res[0].agent_ref;
                        $scope.id = res[0].id;
                        $scope.code = res[0].code;
                        $scope.agent = res[0].agent;
                        $scope.tb_web_book_agent_id = res[0].tb_web_book_agent_id;
                        $scope.tb_web_book_agent_email = res[0].tb_web_book_agent_email;
                        $scope.tb_web_book_agent_email2 = res[0].tb_web_book_agent_email2;
                         $scope.status = res[0].status;
                        $scope.sub_confirm = res[0].sub_confirm;
                        $scope.sub_reject = res[0].sub_reject;
                        $scope.pickup_place = res[0].pickup_place;
                        $scope.orderid = res[0].orderid;
                        console.log($scope.orderid)
                        $scope.program = res[0].program;
                        $scope.mapsss = res[0].map;
                        $scope.maptosss = res[0].map_to;
                        $scope.ondate = res[0].ondate;
                        $scope.outdate = res[0].outdate;
                        $scope.air = res[0].air;
                        $scope.airin = res[0].airin_h+':'+res[0].airin_m;
                        $scope.airout = res[0].airout_h+':'+res[0].airout_m;
                        $scope.posted = res[0].posted;
                        $scope.remark = res[0].remark;
                        $scope.web_driver_name = res[0].web_driver_name.split(" ");
                        console.log($scope.web_driver_name)
                        $scope.fnamet = $scope.web_driver_name[0];
                        $scope.lnamet = $scope.web_driver_name[1];
                        $scope.web_driver_name_en = res[0].web_driver_name_en.split(" ");
                        console.log($scope.web_driver_name_en)
                        $scope.fname = $scope.web_driver_name_en[0];
                        $scope.lname = $scope.web_driver_name_en[2];
                        $scope.transferplace_topic = res[0].transferplace_topic;
                        $scope.post_date = res[0].web_driver_post_date;
                        console.log($scope.post_date)
                        $scope.web_carall_plate_num = res[0].web_carall_plate_num;
                        $scope.web_country_name_en = res[0].web_country_name_en;
                        $scope.driver_topoint = res[0].driver_topoint;
                        $scope.guest_topoint = res[0].guest_topoint;
                        $scope.driver_topoint_date = res[0].driver_topoint_date;
                        $scope.guest_topoint_driver_confirm = res[0].guest_topoint_driver_confirm;
                        $scope.guest_topoint_date = res[0].guest_topoint_date;
                        $scope.alert_get_call = res[0].alert_get_call;
                        $scope.s_fb = res[0].s_fb;
                        $scope.s_line = res[0].s_line;
                        $scope.s_skype = res[0].s_skype;
                        $scope.s_qq = res[0].s_qq;
                        $scope.s_ww = res[0].s_ww;
                        $scope.s_wechat = res[0].s_wechat;
                        $scope.s_what = res[0].s_what;
                        $scope.baby = res[0].baby;
                        $scope.web_driver_line_id = res[0].web_driver_line_id;
                        $scope.web_driver_skype_id = res[0].web_driver_skype_id;
                        $scope.web_driver_wechat_id = res[0].web_driver_wechat_id;
                        $scope.web_driver_whatsapp_id = res[0].web_driver_whatsapp_id;
                        $scope.datebook = res[0].post_date * 1000;
                        $scope.user_confirm = res[0].user_confirm;
                        $scope.driver_topoint_lat = res[0].driver_topoint_lat;
                        $scope.driver_topoint_lng = res[0].driver_topoint_lng;
                        $scope.date_confirm = res[0].date_confirm *1000;
                        $scope.tb_web_admin_company = res[0].tb_web_admin_company;
                        $scope.web_book_agent_guest = res[0].web_book_agent_guest;
                        $scope.web_book_agent_phone = res[0].web_book_agent_phone;
                        $scope.local_phone = res[0].local_phone;
                        $scope.web_carall_province = res[0].web_carall_province;
                        $scope.web_carall_car_color = res[0].web_carall_car_color;
                        if ($scope.web_carall_car_color == 'Yellow') {
                            $scope.stylecarcolor = "carbacgroung";
                            $scope.stylecarcolorselect = "Yellow";
                            $scope.stylecaenumber = "carnumber";
                        }
                        else{
                            $scope.stylecarcolor = "caryellow2";
                            $scope.stylecarcolorselect = "White";
                        }
                        $scope.web_carall_plate_color = res[0].web_carall_plate_color;                       
                        $scope.tb_web_admin_email = res[0].tb_web_admin_email;
                        $scope.tb_web_admin_phone = res[0].tb_web_admin_phone;
                        $scope.transferplace_topic_to = res[0].transferplace_topic_to;
                        $scope.driver_pickup = res[0].driver_pickup;
                        $scope.driver_complete = res[0].driver_complete;
                        $scope.driver_pickup_date = res[0].driver_pickup_date;
                        $scope.driver_complete_date = res[0].driver_complete_date;
                        $scope.driver_confirm_guest_topoint_date = res[0].driver_confirm_guest_topoint_date;
                        $scope.guest_confirm_driver_topoint_date = res[0].guest_confirm_driver_topoint_date;
                        
                        $scope.tb_web_web_gallery_post_date = res[0].tb_web_web_gallery_post_date;

                        $scope.post_wecaht_id = res[0].tb_web_support_social_post_wecaht_id;
                        $scope.post_wechat_name = res[0].tb_web_support_social_post_wechat_name;
                        $scope.post_wechat_url = res[0].tb_web_support_social_post_wechat_url;
                        $scope.post_wechat_pic = res[0].tb_web_support_social_post_wechat_pic;
                        $scope.post_line_id = res[0].tb_web_support_social_post_line_id;
                        $scope.post_line_name = res[0].tb_web_support_social_post_line_name;
                        $scope.post_line_url = res[0].tb_web_support_social_post_line_url;
                        $scope.post_line_pic = res[0].tb_web_support_social_post_line_pic;
                        $scope.post_skype_id = res[0].tb_web_support_social_post_skype_id;
                        $scope.post_skype_name = res[0].tb_web_support_social_post_skype_name;
                        $scope.post_skype_url = res[0].tb_web_support_social_post_skype_url;
                        $scope.post_skype_pic = res[0].tb_web_support_social_post_skype_pic;
                        $scope.post_whatapp_id = res[0].tb_web_support_social_post_whatapp_id;
                        $scope.post_whatapp_name = res[0].tb_web_support_social_post_whatapp_name;
                        $scope.post_whatapp_url = res[0].tb_web_support_social_post_whatapp_url;
                        $scope.post_whatapp_pic = res[0].tb_web_support_social_post_whatapp_pic;
                        $scope.post_zello_id = res[0].tb_web_support_social_post_zello_id;
                        $scope.post_zello_name = res[0].tb_web_support_social_post_zello_name;
                        $scope.post_zello_url = res[0].tb_web_web_support_social_post_zello_url;
                        $scope.post_zello_pice = res[0].tb_web_web_support_social_post_zello_pice;
                        $scope.confirm_wecaht_id = res[0].tb_web_support_social_confirm_wecaht_id;
                        $scope.confirm_wechat_name = res[0].tb_web_support_social_confirm_wechat_name;
                        $scope.confirm_wechat_url = res[0].tb_web_support_social_confirm_wechat_url;
                        $scope.confirm_wechat_pic = res[0].tb_web_support_social_confirm_wechat_pic;
                        $scope.confirm_line_id = res[0].tb_web_support_social_confirm_line_id;
                        $scope.confirm_line_name = res[0].tb_web_support_social_confirm_line_name;
                        $scope.confirm_line_url = res[0].tb_web_support_social_confirm_line_url;
                        $scope.confirm_line_pic = res[0].tb_web_support_social_confirm_line_pic;
                        $scope.confirm_skype_id = res[0].tb_web_support_social_confirm_skype_id;
                        $scope.confirm_skype_name = res[0].tb_web_support_social_confirm_skype_name;
                        $scope.confirm_skype_url = res[0].tb_web_support_social_confirm_skype_url;
                        $scope.confirm_skype_pic = res[0].tb_web_support_social_confirm_skype_pic;
                        $scope.confirm_whatapp_id = res[0].tb_web_support_social_confirm_whatapp_id;
                        $scope.confirm_whatapp_name = res[0].tb_web_support_social_confirm_whatapp_name;
                        $scope.confirm_whatapp_url = res[0].tb_web_support_social_confirm_whatapp_url;
                        $scope.confirm_whatapp_pic = res[0].tb_web_support_social_confirm_whatapp_pic;
                        $scope.confirm_zello_id = res[0].tb_web_support_social_confirm_zello_id;
                        $scope.confirm_zello_name = res[0].tb_web_support_social_confirm_zello_name;
                        $scope.confirm_zello_url = res[0].tb_web_web_support_social_confirm_zello_url;
                        $scope.confirm_zello_pice = res[0].tb_web_web_support_social_confirm_zello_pice;
                        $scope.child = res[0].child;
                        $scope.total = res[0].total;
                        $scope.adult = res[0].adult;
                        $scope.web_driver_phone = res[0].web_driver_phone;
                        $scope.web_driver_car_num = res[0].web_driver_car_num;
                        $scope.numcar =res[0].numcar;
                        if ($scope.status == "CONFIRM") {
                            $scope.state = "state";
                        }
                        else if($scope.status == "NEW"){
                            $scope.state = "state2";
                        }
                        else{
                            $scope.state = "state3";
                        }
                        if ($scope.web_carall_plate_color == "Yellow") {
                            $scope.pai = "carnum";
                        }
                        else{
                            $scope.pai = "carnumgreen";
                        }
                        console.log($scope.datebook)
                        console.log($scope.user_confirm)
                        if ($scope.date_confirm == ""){
                            $scope.date_confirm = $scope.datebook;
                        }
                        if ($scope.user_confirm == "" || $scope.user_confirm == undefined || $scope.user_confirm == null  ) {
                            console.log("in case")
                            $scope.user_confirm = "Arm";
                        }

                        if ($scope.baby.length == 0) {
                           $scope.baby = 0; 
                        }
                        console.log($scope.s_what.length)
                        if ($scope.guest_topoint == 1) {
                            console.log("asasas")
                            $scope.boxbg2 = { 'display':'none'};
                            //$scope.stylecheckin = { 'display':'none'};
                        }
                        else{
                            //$scope.stylecheckin = { 'display':'block'};
                        }
                        if ($scope.guest_topoint_driver_confirm == 0 && $scope.driver_topoint == 1) {
                                    $scope.boxbg = { 'display':'block'};
                                    console.log("in case 1")
                                    
                        }
                        else if($scope.guest_topoint_driver_confirm == 1 && $scope.driver_topoint == 1){
                            $scope.boxbg = { 'display':'none'};
                            console.log("in case 22")
                        }
                        //  var ss = "http://t-booking.com/demo/print.php?name=admin/voucher&file=transfer&no="+$scope.id+"&order="+$scope.tb_web_book_agent_id+"&code="+$scope.code+"";
                        //  console.log(ss)
                        // $scope.iframe = {src:ss};
                        console.log($scope.program)
                        $scope.load = { 'display':'none'};
                        //$scope.bobymain = { 'display':'block'};
                         
                        $http({
                            method : 'POST',
                            url : "php/transferproduct.php",
                            data: $.param({id: $scope.program}),
                            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                            }).success(function(res){
                                console.log(res)
                                $scope.topic_en = res[0].topic_en;
                                $scope.topic_th = res[0].topic_th;
                                $scope.topic_cn = res[0].topic_cn;
                                $scope.web_extra_way_topic_en = res[0].web_extra_way_topic_en;
                                $scope.web_extra_way_topic_th = res[0].web_extra_way_topic_th;
                                $scope.web_extra_way_topic_cn = res[0].web_extra_way_topic_cn;
                                $scope.web_car_topic_en = res[0].web_car_topic_en;
                                $scope.web_car_topic_th = res[0].web_car_topic_th;
                                $scope.web_car_topic_cn = res[0].web_car_topic_cn;
                                $scope.web_car_pax = res[0].web_car_pax;
                                $scope.web_car_pax_th = res[0].web_car_pax_th;
                                $scope.web_car_pax_cn = res[0].web_car_pax_cn;
                                $scope.web_province_name = res[0].web_province_name;
                                $scope.web_province_name_th = res[0].web_province_name_th;
                                $scope.web_province_name_cn = res[0].web_province_name_cn;
                                $scope.web_province_to_name = res[0].web_province_to_name;
                                $scope.web_province_to_name_th = res[0].web_province_to_name_th;
                                $scope.web_province_to_name_cn = res[0].web_province_to_name_cn;
                                $scope.web_car_car_model = res[0].web_car_car_model;
                                $scope.area = res[0].area;
                                $scope.rental_down = [];
                                if ($scope.area == "Rental") {
                                    $scope.id = res[0].id;
                                    console.log("id"+$scope.id);
                                    $scope.rentalid = [];
                                    $http({
                                        method : 'POST',
                                        url : "php/getRental.php",
                                        data: $.param({id: $scope.id}),
                                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                        }).success(function(res){
                                            console.log(res)
                                            $scope.rental = res;
                                            angular.forEach(res, function(datas){  
                                                    $scope.rentalid.push(datas.id)    
                                                   });
                                            console.log($scope.rentalid)
                                           $http({
                                            method : 'POST',
                                            url : "php/getRental_down.php",
                                            //data: $.param({id: $scope.id}),
                                            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                            }).success(function(res){
                                                console.log(res)
                                                angular.forEach($scope.rentalid, function(datas1){  
                                                    angular.forEach(res, function(datas2){  
                                                        if (datas1 == datas2.timeline) {
                                                            $scope.rental_down.push(datas2)
                                                        }
                                                            
                                                    });  
                                                });                                                
                                                console.log($scope.rental_down)
                                         });
                                     });
                                }
                                console.log($scope.web_car_car_model)                                
                                 $http({
                                        method : 'POST',
                                        url : "php/capa.php",
                                        data: $.param({id: $scope.web_car_car_model}),
                                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                        }).success(function(res){
                                            console.log(res)
                                            $scope.detailitem = res;
                              
                                     });
                                    $http({
                                        method : 'POST',
                                        url : "php/gallery-car.php",
                                        data: $.param({id: $scope.web_car_car_model}),
                                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                        }).success(function(res){
                                            console.log(res)
                                                $scope.gallerycar = res;
                                     });
                                        $http({
                                        method : 'POST',
                                        url : "php/getcommentforvoucher.php",
                                        data: $.param({voucher: $scope.VOUCHER}),
                                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                        }).success(function(res){
                                            console.log(res)
                                            $scope.getcommentview = res;
                                            
                                            if ($scope.getcommentview.length == 0) {
                                                $scope.btncomview= { 'display':'none'};
                                                $scope.senddata= { 'display':'block'};
                                            }
                                            else{
                                                $scope.btncomview= { 'display':'block'};
                                            }
                                    });
                                   
                                    $http({
                                        method : 'POST',
                                        url : "php/country.php",
                                        //data: $.param({id: $scope.web_car_car_model}),
                                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                        }).success(function(res){
                                            $scope.country = res;
                                            console.log(res)
                                            $scope.split7 = $scope.local_phone.split("+");
                                             $scope.split8 = $scope.split7[1].split(" ");
                                              $scope.split5 = $scope.web_book_agent_phone.split("+");
                                                $scope.split6 = $scope.split5[1].split(" ");
                                        
                                            for (var i = 0; i < res.length; i++) {
                                                //console.log($scope.country[i].phonecode)
                                                
                                                if (res[i].phonecode == $scope.split8[0]) {
                                                    
                                                   $scope.imgcoutry2 = res[i].country_code;
                                                  
                                                }
                                                else if (res[i].phonecode == $scope.split6[0]) {
                                                    
                                                   $scope.imgcoutry = res[i].country_code;
                                                   console.log( $scope.imgcoutryfront)
                                                  
                                                }
                                            }

                              
                                     });
										
                                //     var url_chat = "go.php?name=chat&file=main&vc="+$scope.VOUCHER+"";
 
 
	                               // $('#load_chat').load(url_chat); 
                                    $http({
                                        method : 'POST',
                                        url : "php/get_flight.php",
                                        data: $.param({voucher: $scope.VOUCHER}),
                                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                        }).success(function(res){
                                            console.log(res)
                                            $scope.setionflight = res;
                                            angular.forEach(res, function(statas){  
                                                if (statas.state == 1) {
                                                    $scope.PLstate1.push(statas);
                                                }
                                                else if (statas.state == 0) {
                                                    $scope.PLstate0.push(statas)
                                                }
                                                else if (statas.state == 3) {
                                                    $scope.PLstate3.push(statas)
                                                }  
                                            });
                                         });
                                    $http({
                                        method : 'POST',
                                        url : "php/getsocial.php",
                                        data: $.param({id: $scope.tb_web_book_agent_id}),
                                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                        }).success(function(res){
                                            console.log(res)
                                            $scope.socialall = res;
                                            for (var i = 0; i < res.length; i++) {
                                                //$scope.nub = i%2;
                                                if ((i%2) == 0) {
                                                    $('.seecolor'+i).addClass('colorsocial');
                                                    angular.element(document.querySelector('#seecolor'+i)).css('background-color','#fff');
                                                   // $scope.seecolor = "colorsocial";
                                                }
                                                else{
                                                   
                                                    $('.seecolor'+i).addClass('colorsocial2');
                                                    angular.element(document.querySelector('.seecolor'+i)).css('background-color',' #f0f0f0')
                                                   // $scope.seecolor = "colorsocial2";
                                                }
                                               
                                               if (res[i].social_type_id == 1) {
                                              //$scope.editwechat = true;
                                               $scope.idwechat =  res[i].id;
                                              $scope.iconwechat =  res[i].type_icon;
                                              $scope.socialwechatid = res[i].web_guest_social; 
                                            }
                                            else if (res[i].social_type_id == 2) {
                                              //$scope.editline = true;
                                              $scope.idline =  res[i].id
                                              $scope.iconline =  res[i].type_icon;
                                              $scope.sociallineid = res[i].web_guest_social;
                                            }
                                            else if (res[i].social_type_id == 3) {
                                             // $scope.editline = true; 
                                             $scope.idzello =  res[i].id
                                                $scope.iconzello =  res[i].type_icon;
                                              $scope.socialzelloid = res[i].web_guest_social; 
                                            }
                                            else if (res[i].social_type_id == 4) {
                                              //$scope.editqq = true; 
                                              $scope.idqq =  res[i].id
                                              $scope.iconqq =  res[i].type_icon;
                                              $scope.socialqqid = res[i].web_guest_social; 
                                            }
                                            else if (res[i].social_type_id == 5) {
                                              //$scope.editwang = true;
                                              $scope.idwang =  res[i].id
                                              $scope.iconwang =  res[i].type_icon;
                                              $scope.socialwangid = res[i].web_guest_social;   
                                            }
                                            else if (res[i].social_type_id == 6) {
                                              //$scope.editskype = true;
                                              $scope.idskype =  res[i].id  
                                              $scope.iconskype =  res[i].type_icon;
                                              $scope.socialskypeid = res[i].web_guest_social; 
                                            }
                                            else if (res[i].social_type_id == 7) {
                                              //$scope.editwhat = true; 
                                              $scope.idwhat =  res[i].id
                                              $scope.iconwhat =  res[i].type_icon;
                                              $scope.socialwhatid = res[i].web_guest_social;  
                                            }
                                            else if (res[i].social_type_id == 8) {
                                              //$scope.editface = true; 
                                              $scope.idface =  res[i].id
                                               $scope.iconface =  res[i].type_icon;
                                                $scope.socialfaceid = res[i].web_guest_social;  
                                            }
                                            }
                                        });
                                        
                                    });
                    });
    }
    $scope.clean;
    $scope.driving;
    $scope.Plate_to_point; 
    
    /*=-----------Edit Your country mobile-------------=*/
    //$scope.Countrytatus = false;
    $scope.Country = function(){      
      $scope.countrybox = { 'display':'block'};
      
    }
    $scope.selectcountryValue;
    $scope.selectcountryValue2;
    $scope.numCountryselect = function(i ,$event){
      $scope.countrybox = { 'display':'none'};
      if ($scope.flagcheck ==1) {
         $scope.Countryfont = ' ' + '(' + '+' + i.phonecode + ')' + i.name_en;
      }
      if ($scope.flagcheck ==2) {
         $scope.Countryfont = ' ' + '(' + '+' + i.phonecode + ')' + i.name_th;
      }
      if ($scope.flagcheck ==3) {
         $scope.Countryfont = ' ' + '(' + '+' + i.phonecode + ')' + i.name_cn;
      }
      $scope.selectcountryValue = '+'+i.phonecode;
      $scope.tcountryValue = '+'+i.phonecode;
      $scope.imgcoutry = i.country_code;
     
      $scope.phonesend = $scope.selectcountryValue;
      var p1 = $scope.web_book_agent_phone.split(" ");
      $scope.phonenew = $scope.phonesend + ' ' + p1[1];
      console.log($scope.selectcountryValue)
    }

    /*=-----------Edit local phone-------------=*/
    //$scope.Countrytatus = false;
    $scope.Country2 = function(){      
      $scope.countrybox2 = { 'display':'block'};      
    }
    $scope.numCountryselect2 = function(i ,$event){
      $scope.imgcoutry2 = i.country_code;
      $scope.countrybox2 = { 'display':'none'};
      if ($scope.flagcheck ==1) {
         $scope.Countryfont2 = ' ' + '(' + '+' + i.phonecode + ')' + i.name_en;
      }
      if ($scope.flagcheck ==2) {
         $scope.Countryfont2 = ' ' + '(' + '+' + i.phonecode + ')' + i.name_th;
      }
      if ($scope.flagcheck ==3) {
         $scope.Countryfont2 = ' ' + '(' + '+' + i.phonecode + ')' + i.name_cn;
      }
      $scope.selectcountryValue2 = '+'+i.phonecode;
      $scope.tcountryValue2 = '+'+i.phonecode;
      $scope.phonesend2 = $scope.selectcountryValue2;
      var p2 = $scope.local_phone.split(" ");
      $scope.localphonenew = $scope.phonesend2 + ' ' + p2[1];
      console.log($scope.selectcountryValue2)
    }
    $scope.blockfooter = function(){
    
      $scope.footer = {'display':'block'};
        angular.element(document.querySelector('.footer')).css("display","#block");
    }


    //**********************************************************//
    //**************************Comment*************************//
    //**********************************************************//
    $scope.getclean = function(clean){
      console.log(clean)
      if (clean == 1) {
        angular.element(document.querySelector('#cle1')).css("color","#08930e");
        angular.element(document.querySelector('#cle2')).css("color","#ddd");
        angular.element(document.querySelector('#cle3')).css("color","#ddd");
        angular.element(document.querySelector('#cle4')).css("color","#ddd");
        angular.element(document.querySelector('#cle5')).css("color","#ddd");
      }
      else if (clean == 2) {
          angular.element(document.querySelector('#cle1')).css("color","#08930e");
          angular.element(document.querySelector('#cle2')).css("color","#08930e");
          angular.element(document.querySelector('#cle3')).css("color","#ddd");
          angular.element(document.querySelector('#cle4')).css("color","#ddd");
          angular.element(document.querySelector('#cle5')).css("color","#ddd");
      }
      else if (clean == 3) {
          angular.element(document.querySelector('#cle1')).css("color","#08930e");
          angular.element(document.querySelector('#cle2')).css("color","#08930e");
          angular.element(document.querySelector('#cle3')).css("color","#08930e");
          angular.element(document.querySelector('#cle4')).css("color","#ddd");
          angular.element(document.querySelector('#cle5')).css("color","#ddd");
      }
      else if (clean == 4) {
          angular.element(document.querySelector('#cle1')).css("color","#08930e");
          angular.element(document.querySelector('#cle2')).css("color","#08930e");
          angular.element(document.querySelector('#cle3')).css("color","#08930e");
          angular.element(document.querySelector('#cle4')).css("color","#08930e");
          angular.element(document.querySelector('#cle5')).css("color","#ddd");
      }
      else if (clean == 5) {
          angular.element(document.querySelector('#cle1')).css("color","#08930e");
          angular.element(document.querySelector('#cle2')).css("color","#08930e");
          angular.element(document.querySelector('#cle3')).css("color","#08930e");
          angular.element(document.querySelector('#cle4')).css("color","#08930e");
          angular.element(document.querySelector('#cle5')).css("color","#08930e");
      }
        $scope.clean = clean;
        

    }
    $scope.getdriving = function(driving){
      console.log(driving)
      if (driving == 1) {
        angular.element(document.querySelector('#dri1')).css("color","#08930e");
        angular.element(document.querySelector('#dri2')).css("color","#ddd");
        angular.element(document.querySelector('#dri3')).css("color","#ddd");
        angular.element(document.querySelector('#dri4')).css("color","#ddd");
        angular.element(document.querySelector('#dri5')).css("color","#ddd");
      }
      else if (driving == 2) {
          angular.element(document.querySelector('#dri1')).css("color","#08930e");
          angular.element(document.querySelector('#dri2')).css("color","#08930e");
          angular.element(document.querySelector('#dri3')).css("color","#ddd");
          angular.element(document.querySelector('#dri4')).css("color","#ddd");
          angular.element(document.querySelector('#dri5')).css("color","#ddd");
      }
      else if (driving == 3) {
          angular.element(document.querySelector('#dri1')).css("color","#08930e");
          angular.element(document.querySelector('#dri2')).css("color","#08930e");
          angular.element(document.querySelector('#dri3')).css("color","#08930e");
          angular.element(document.querySelector('#dri4')).css("color","#ddd");
          angular.element(document.querySelector('#dri5')).css("color","#ddd");
      }
      else if (driving == 4) {
          angular.element(document.querySelector('#dri1')).css("color","#08930e");
          angular.element(document.querySelector('#dri2')).css("color","#08930e");
          angular.element(document.querySelector('#dri3')).css("color","#08930e");
          angular.element(document.querySelector('#dri4')).css("color","#08930e");
          angular.element(document.querySelector('#dri5')).css("color","#ddd");
      }
      else if (driving == 5) {
          angular.element(document.querySelector('#dri1')).css("color","#08930e");
          angular.element(document.querySelector('#dri2')).css("color","#08930e");
          angular.element(document.querySelector('#dri3')).css("color","#08930e");
          angular.element(document.querySelector('#dri4')).css("color","#08930e");
          angular.element(document.querySelector('#dri5')).css("color","#08930e");
      }
        $scope.driving = driving;
        
        
    }
    $scope.punctuality = function(time){
        //alert(t)
        console.log(time)
        $scope.time = time;
        if (time == 1) {
        angular.element(document.querySelector('#pun1')).css("color","#08930e");
        angular.element(document.querySelector('#pun2')).css("color","#ddd");
        angular.element(document.querySelector('#pun3')).css("color","#ddd");
        angular.element(document.querySelector('#pun4')).css("color","#ddd");
        angular.element(document.querySelector('#pun5')).css("color","#ddd");
      }
      else if (time == 2) {
          angular.element(document.querySelector('#pun1')).css("color","#08930e");
          angular.element(document.querySelector('#pun2')).css("color","#08930e");
          angular.element(document.querySelector('#pun3')).css("color","#ddd");
          angular.element(document.querySelector('#pun4')).css("color","#ddd");
          angular.element(document.querySelector('#pun5')).css("color","#ddd");
      }
      else if (time == 3) {
          angular.element(document.querySelector('#pun1')).css("color","#08930e");
          angular.element(document.querySelector('#pun2')).css("color","#08930e");
          angular.element(document.querySelector('#pun3')).css("color","#08930e");
          angular.element(document.querySelector('#pun4')).css("color","#ddd");
          angular.element(document.querySelector('#pun5')).css("color","#ddd");
      }
      else if (time == 4) {
          angular.element(document.querySelector('#pun1')).css("color","#08930e");
          angular.element(document.querySelector('#pun2')).css("color","#08930e");
          angular.element(document.querySelector('#pun3')).css("color","#08930e");
          angular.element(document.querySelector('#pun4')).css("color","#08930e");
          angular.element(document.querySelector('#pun5')).css("color","#ddd");
      }
      else if (time == 5) {
          angular.element(document.querySelector('#pun1')).css("color","#08930e");
          angular.element(document.querySelector('#pun2')).css("color","#08930e");
          angular.element(document.querySelector('#pun3')).css("color","#08930e");
          angular.element(document.querySelector('#pun4')).css("color","#08930e");
          angular.element(document.querySelector('#pun5')).css("color","#08930e");
      }
        
    }

    //***************************in**************************/
    $scope.getcleanin = function(cleanin){
      console.log(cleanin)
      if (cleanin == 1) {
        angular.element(document.querySelector('#clein1')).css("color","#08930e");
        angular.element(document.querySelector('#clein2')).css("color","#ddd");
        angular.element(document.querySelector('#clein3')).css("color","#ddd");
        angular.element(document.querySelector('#clein4')).css("color","#ddd");
        angular.element(document.querySelector('#clein5')).css("color","#ddd");
      }
      else if (cleanin == 2) {
          angular.element(document.querySelector('#clein1')).css("color","#08930e");
          angular.element(document.querySelector('#clein2')).css("color","#08930e");
          angular.element(document.querySelector('#clein3')).css("color","#ddd");
          angular.element(document.querySelector('#clein4')).css("color","#ddd");
          angular.element(document.querySelector('#clein5')).css("color","#ddd");
      }
      else if (cleanin == 3) {
          angular.element(document.querySelector('#clein1')).css("color","#08930e");
          angular.element(document.querySelector('#clein2')).css("color","#08930e");
          angular.element(document.querySelector('#clein3')).css("color","#08930e");
          angular.element(document.querySelector('#clein4')).css("color","#ddd");
          angular.element(document.querySelector('#clein5')).css("color","#ddd");
      }
      else if (cleanin == 4) {
          angular.element(document.querySelector('#clein1')).css("color","#08930e");
          angular.element(document.querySelector('#clein2')).css("color","#08930e");
          angular.element(document.querySelector('#clein3')).css("color","#08930e");
          angular.element(document.querySelector('#clein4')).css("color","#08930e");
          angular.element(document.querySelector('#clein5')).css("color","#ddd");
      }
      else if (cleanin == 5) {
          angular.element(document.querySelector('#clein1')).css("color","#08930e");
          angular.element(document.querySelector('#clein2')).css("color","#08930e");
          angular.element(document.querySelector('#clein3')).css("color","#08930e");
          angular.element(document.querySelector('#clein4')).css("color","#08930e");
          angular.element(document.querySelector('#clein5')).css("color","#08930e");
      }
        $scope.cleanin = cleanin;
        

    }
    $scope.getdrivingin = function(drivingin){
      console.log(drivingin)
      if (drivingin == 1) {
        angular.element(document.querySelector('#driin1')).css("color","#08930e");
        angular.element(document.querySelector('#driin2')).css("color","#ddd");
        angular.element(document.querySelector('#driin3')).css("color","#ddd");
        angular.element(document.querySelector('#driin4')).css("color","#ddd");
        angular.element(document.querySelector('#driin5')).css("color","#ddd");
      }
      else if (drivingin == 2) {
          angular.element(document.querySelector('#driin1')).css("color","#08930e");
          angular.element(document.querySelector('#driin2')).css("color","#08930e");
          angular.element(document.querySelector('#driin3')).css("color","#ddd");
          angular.element(document.querySelector('#driin4')).css("color","#ddd");
          angular.element(document.querySelector('#driin5')).css("color","#ddd");
      }
      else if (drivingin == 3) {
          angular.element(document.querySelector('#driin1')).css("color","#08930e");
          angular.element(document.querySelector('#driin2')).css("color","#08930e");
          angular.element(document.querySelector('#driin3')).css("color","#08930e");
          angular.element(document.querySelector('#driin4')).css("color","#ddd");
          angular.element(document.querySelector('#driin5')).css("color","#ddd");
      }
      else if (drivingin == 4) {
          angular.element(document.querySelector('#driin1')).css("color","#08930e");
          angular.element(document.querySelector('#driin2')).css("color","#08930e");
          angular.element(document.querySelector('#driin3')).css("color","#08930e");
          angular.element(document.querySelector('#driin4')).css("color","#08930e");
          angular.element(document.querySelector('#driin5')).css("color","#ddd");
      }
      else if (drivingin == 5) {
          angular.element(document.querySelector('#dri1')).css("color","#08930e");
          angular.element(document.querySelector('#dri2')).css("color","#08930e");
          angular.element(document.querySelector('#dri3')).css("color","#08930e");
          angular.element(document.querySelector('#dri4')).css("color","#08930e");
          angular.element(document.querySelector('#dri5')).css("color","#08930e");
      }
        $scope.drivingin = drivingin;
        
    }
    $scope.punctualityin = function(timein){
        //alert(t)
        console.log(timein)
        $scope.timein = timein;
        if (timein == 1) {
        angular.element(document.querySelector('#punin1')).css("color","#08930e");
        angular.element(document.querySelector('#punin2')).css("color","#ddd");
        angular.element(document.querySelector('#punin3')).css("color","#ddd");
        angular.element(document.querySelector('#punin4')).css("color","#ddd");
        angular.element(document.querySelector('#punin5')).css("color","#ddd");
      }
      else if (timein == 2) {
          angular.element(document.querySelector('#punin1')).css("color","#08930e");
          angular.element(document.querySelector('#punin2')).css("color","#08930e");
          angular.element(document.querySelector('#punin3')).css("color","#ddd");
          angular.element(document.querySelector('#punin4')).css("color","#ddd");
          angular.element(document.querySelector('#punin5')).css("color","#ddd");
      }
      else if (timein == 3) {
          angular.element(document.querySelector('#punin1')).css("color","#08930e");
          angular.element(document.querySelector('#punin2')).css("color","#08930e");
          angular.element(document.querySelector('#punin3')).css("color","#08930e");
          angular.element(document.querySelector('#punin4')).css("color","#ddd");
          angular.element(document.querySelector('#punin5')).css("color","#ddd");
      }
      else if (timein == 4) {
          angular.element(document.querySelector('#punin1')).css("color","#08930e");
          angular.element(document.querySelector('#punin2')).css("color","#08930e");
          angular.element(document.querySelector('#punin3')).css("color","#08930e");
          angular.element(document.querySelector('#punin4')).css("color","#08930e");
          angular.element(document.querySelector('#punin5')).css("color","#ddd");
      }
      else if (timein == 5) {
          angular.element(document.querySelector('#punin1')).css("color","#08930e");
          angular.element(document.querySelector('#punin2')).css("color","#08930e");
          angular.element(document.querySelector('#punin3')).css("color","#08930e");
          angular.element(document.querySelector('#punin4')).css("color","#08930e");
          angular.element(document.querySelector('#punin5')).css("color","#08930e");
      }
        
        
    }
    $scope.compunctuality = null;
    $scope.YourOwnpunctuality = function(x){
      $scope.compunctuality = x;
      if (x == undefined || x == "" || x == null){
            $scope.stylecompunctuality =  { 'display':'none'};
        }
        else {
            $scope.stylecompunctuality =  { 'display':'block'};
        }
    }
     $scope.comclean = null;
    $scope.YourOwncomclean = function(x){
      $scope.comclean = x;
      if (x == undefined || x == "" || x == null){
            $scope.stylecomclean =  { 'display':'none'};
        }
        else {
            $scope.stylecomclean =  { 'display':'block'};
        }
    }
    $scope.comservice = null;
    $scope.YourOwnservice = function(x){
      $scope.comservice = x;
      if (x == undefined || x == "" || x == null){
            $scope.stylecomservice =  { 'display':'none'};
        }
        else {
            $scope.stylecomservice =  { 'display':'block'};
        }
    }
    $scope.commentorther = function(x){
        $scope.comment = x;
        console.log(x)
    }
    $scope.updatecommentin = function(){
        //$scope.vccommentsendin = x;
        $scope.comment_datein2 = $filter('date')(new Date(), 'yyyy-MM-dd HH:mm');
        

        if ($scope.cleanin == 0 || $scope.drivingin == 0 || $scope.timein == 0) {
            console.log("in case 0")
        }
        else{
            $scope.req_comservice= "";
                $scope.req_comclean ="";
                $scope.req_compunctuality = "";
                $scope.req_comment = "";
                console.log($scope.cleanin)
                console.log($scope.drivingin)
                console.log($scope.timein)
                console.log($scope.req_comment);
                console.log($scope.req_comservice)
                console.log($scope.req_comclean)
                console.log($scope.req_compunctuality)
                $http({
                    method : 'POST',
                    url : "php/comment.php",
                    data: $.param({voucher:  $scope.VOUCHER,
                                   driving: $scope.drivingin, 
                                   clean: $scope.cleanin,                                       
                                   times: $scope.timein,
                                   comment_date:$scope.comment_date2,
                                   orderid : $scope.order
                                      
                    }),
                     headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).success(function(res){
                        //$window.reload();
                         location.reload();
                });
            }
            
    }
    $scope.updatecomment = function(x){
        $scope.vccommentsend = x;
        $scope.comment_date = $filter('date')(new Date(), 'yyyy-MM-dd HH:mm'); 
        if ($scope.clean == 0 || $scope.driving == 0 || $scope.time == 0) {
            console.log("in case 0")
        }
        else{
              $scope.req_comservice= "";
              $scope.req_comclean ="";
              $scope.req_compunctuality = "";
              $scope.req_comment = "";
               console.log($scope.clean)
              console.log($scope.driving)
              console.log($scope.time)
              console.log($scope.vccommentsend)
               $http({
                        method : 'POST',
                        url : "php/comment.php",
                        data: $.param({voucher:  $scope.vccommentsend,
                                       driving: $scope.driving, 
                                       clean: $scope.clean,                                       
                                       times: $scope.time,
                                       comment_date:$scope.comment_date,
                                       orderid : $scope.order
                                       
                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            //$window.reload();
                             location.reload();
                          
                });
            }
    }
    $scope.cancelopenopupcomenthome = function(){
        $scope.openopupcomenthome = {'display':'none'};
    }

    //************************************************************//
    //****************************END*****************************//
    //************************************************************//
  //*********************DATA MESSAGE TO DRIVER*****************************//
  $scope.messagedataType = [];
  $scope.btnFrequentlyused = function(){
       
         

      $scope.btnfre = {'background':'#22407f'}
      $scope.btnchat = {'background':'#3b5998'}

      
      $scope.message = {'display':'none'};
      $scope.havedatamessage = {'display':'none'};

      $scope.sdatamessage = {'display':'block'}
      $scope.frequentlyused = { 'display':'block'};
      $scope.sdatamessage_store = {'display':'none'}




  }
  $scope.btnMessage = function(){
    $scope.btnfre = {'background':'#3b5998'}
    $scope.btnchat = {'background':'#22407f'}
    $scope.comdriver = "";
    $scope.message = {'display':'block'};
    $scope.frequentlyused = {'display':'none'};
    $scope.sdatamessage_store = {'display':'none'};


    }
    $scope.selectmessage = function(message){
      console.log(message)
      if ($scope.flagcheck == 1) {
          $scope.headersmessage = message.topic_en;
        }
        else if ($scope.flagcheck == 2) {
            $scope.headersmessage = message.topic_th;
        }
        else if ($scope.flagcheck == 3) {
            $scope.headersmessage = message.topic_cn;
        }
     
       $http({
                  method : 'POST',
                  url : "php/message_data_store.php",
                 data: $.param({type: message.id}),
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){                  
                  console.log(res)
                  $scope.messagedataStore = res;
                  //console.log($scope.VCIDALL)
                
                  
                   
                });
      $scope.sdatamessage_store = {'display':'block'}
      $scope.sdatamessage = {'display':'none'}
      $scope.havedatamessage = {'display':'none'}


        // if ($scope.flagcheck == 1) {
        //   $scope.SELmessage = message.topic_en;
        // }
        // else if ($scope.flagcheck == 2) {
        //     $scope.SELmessage = message.topic_th;
        // }
        // else if ($scope.flagcheck == 3) {
        //     $scope.SELmessage = message.topic_cn;
        // }
    }
    $scope.selectmessage_store = function(message){
        $scope.messagedriver = message.id;
        $scope.havedatamessage = {'display':'block'}
         $scope.SELmessage_store_id = message.id;
        if ($scope.flagcheck == 1) {
           $scope.SELmessage_store = message.topic_en;
        }
        else if ($scope.flagcheck == 2) {
            $scope.SELmessage_store = message.topic_th;
        }
        else if ($scope.flagcheck == 3) {
            $scope.SELmessage_store = message.topic_cn;
        }
    }
   //*********************DATA MESSAGE TO OP*****************************//
  $scope.messagedataType_toop = [];
  $scope.btnFrequentlyused_toop = function(){
       
         

      $scope.btnchat_toop = {"background":"#3b5998"};
        $scope.btnfre_toop = {"background":"#22407f"};
      
      $scope.message_toop = {'display':'none'};
      $scope.havedatamessage_toop = {'display':'none'};

      $scope.sdatamessage_toop = {'display':'block'}
      $scope.frequentlyused_toop = { 'display':'block'};
      $scope.sdatamessage_store_toop = { 'display':'none'};




  }
  $scope.btnMessage_toop = function(){
        $scope.btnfre_toop = {"background":"#3b5998"};
        $scope.btnchat_toop = {"background":"#22407f"};
        $scope.message_toop = {'display':'block'};

        $scope.frequentlyused_toop = {'display':'none'};
        $scope.sdatamessage_store_toop = {'display':'none'};


    }
    $scope.selectmessage_toop = function(message){
      console.log($scope.message_toop)
      if ($scope.flagcheck == 1) {
          $scope.headersmessage_toop = message.topic_en;
        }
        else if ($scope.flagcheck == 2) {
            $scope.headersmessage_toop = message.topic_th;
        }
        else if ($scope.flagcheck == 3) {
            $scope.headersmessage_toop = message.topic_cn;
        }
       $http({
                  method : 'POST',
                  url : "php/message_data_store.php",
                 data: $.param({type: message.id}),
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){                  
                  console.log(res)
                  $scope.messagedataStore_toop = res;
                  //angular.forEach($scope.messagedataStore_toop, function (y) { 
                      


                    // if ($scope.flagcheck == 1) {
                    //   $scope.SELmessage_toop = y.topic_en;
                    // }
                    // else if ($scope.flagcheck == 2) {
                    //     $scope.SELmessage_toop = y.topic_th;
                    // }
                    // else if ($scope.flagcheck == 3) {
                    //     $scope.SELmessage_toop = y.topic_cn;
                    // }
                    $scope.sdatamessage_store_toop = {'display':'block'}
                    $scope.sdatamessage_toop = {'display':'none'}
                    $scope.havedatamessage_toop = {'display':'none'}
                  //});
                
                  
                   
                });
      
    }
    $scope.selectmessage_store_toop = function(message){
        $scope.messagedriver_toop = message.id;
        $scope.havedatamessage_toop = {'display':'block'}
        $scope.SELmessage_store_id = message.id;

        //$scope.SELmessage_store_toop_id = message.id;
        //$scope.SELmessage_store_toop_id = message.id;

        if ($scope.flagcheck == 1) {
           $scope.SELmessage_store_toop = message.topic_en;
        }
        else if ($scope.flagcheck == 2) {
            $scope.SELmessage_store_toop = message.topic_th;
        }
        else if ($scope.flagcheck == 3) {
            $scope.SELmessage_store_toop = message.topic_cn;
        }
    }

  
    $scope.confirm_driverarrived = function(){
        $scope.showModal = false;
        $scope.guest_confirm = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
        console.log($scope.guest_confirm)
        $http({
            method : 'POST',
            url : "php/confirm-guest.php",
            data: $.param({voucher: $scope.VOUCHER,guest_confirm : $scope.guest_confirm}),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(res){
                $scope.boxbg = { 'display':'none'};
                 location.reload();
        });
    }
    $scope.cancel = function(){
        $scope.sbody = { 'overflow-y':'scroll'};
        $scope.boxbg = { 'display':'none'};
        $scope.boxbg2 = { 'display':'none'};
        $scope.boxbg3 = { 'display':'none'};
        $scope.galleryview = { 'display':'none'};
        $scope.comview= { 'display':'none'};
        $scope.boby = { 'display':'none'};
        $scope.conby= { 'display':'none'};
        $scope.sign = { 'display':'none'};
        $scope.meeting= { 'display':'none'};
        $scope.upphoto= { 'display':'none'};
        $scope.Darrived= { 'display':'none'};
        $scope.Gacknowledged= { 'display':'none'};
        $scope.sCheckinguest= { 'display':'none'};
        $scope.sDriveracknowledged= { 'display':'none'};
        $scope.sDriverpickup = { 'display':'none'};
        $scope.sComplete= { 'display':'none'};
        //$scope.sPickupplace= { 'display':'none'};
        $scope.sToplace= { 'display':'none'};
        $scope.infomationguest= { 'display':'none'};
        $scope.voucherweb = { 'display':'none'};
        $scope.delayconfirm = { 'display':'none'};
        $scope.styleshowimages1 = { 'display':'none'};
        $scope.styleshowimages2 = { 'display':'none'};
        $scope.stylefacilities = { 'display':'none'};
        $scope.styleincreasetime = { 'display':'none'};
        $scope.poupradio = { 'display':'none' };
        $scope.stylelangq = { 'display':'none' };
        $scope.guest_name = { 'display':'none' };
        $scope.guest_country= { 'display':'none' };
        $scope.phone1= { 'display':'none' };
        $scope.Ephone1= { 'display':'none' };
        $scope.phone2= { 'display':'none' };
        $scope.adultchild= { 'display':'none' };
        $scope.Ephone2= { 'display':'none' };
        $scope.editEmail1= { 'display':'none' };
        $scope.editEmail2= { 'display':'none' };
        $scope.editsocialall= { 'display':'none' };
        $scope.scommentTodriver= { 'display':'none' };
        $scope.scommentTocollcenter= { 'display':'none' };
        $scope.popupbookingdetail= { 'display':'none' };
          
/***************************************************  */  
/******************* New-angular-KM ***************  */  
/***************************************************  */ 
          $scope.id_popupbefore= { 'display':'none' };
          $scope.id_popupdelay= { 'display':'none' };
          $scope.id_popupwait= { 'display':'none' };
          $scope.id_popupdivermsg= { 'display':'none' };
          $scope.id_popupdiverchat= { 'display':'none' };
          $scope.id_popupcallcentermsg= { 'display':'none' };
          $scope.id_popupcallcenterchat= { 'display':'none' };
          $scope.popupdriverinfo = { 'display':'none'};
          $scope.popupdriverOP = { 'display':'none'};
          $scope.popupdriverservice = { 'display':'none'};
           $scope.openopupcomenthome = { 'display':'none'};
           // $scope.popupcommentpunctuality = { 'display':'none'};
           // $scope.popupcommentclean = { 'display':'none'};
           // $scope.popupcommentservice = { 'display':'none'};
           
/***************************************************  */  
/******************* New-angular-KM ***************  */  
/***************************************************  */           

        // $interval.cancel(interval);
    }
    $scope.cancelpopupcommentservice = function(){
         $scope.popupcommentservice = { 'display':'none'};
         $scope.openopupcomenthome = { 'display':'block'};
    }
    $scope.cancelpopupcommentclean = function(){
         $scope.popupcommentclean = { 'display':'none'};
         $scope.openopupcomenthome = { 'display':'block'};
    }
    $scope.cancelpopupcommentpunctuality = function(){
         $scope.popupcommentpunctuality = { 'display':'none'};
         $scope.openopupcomenthome = { 'display':'block'};
    }
    // $scope.open_check = function(){
    //     $scope.boxbg2 = { 'display':'block'};
    // }
    /************************my info edit**************************/
    $scope.cancelEphone1 = function(){
        $scope.Ephone1 = {'display':'none'};
        $scope.stylepoupmyinfo = {'display':'block'}
    }
    $scope.cancelEphone2 = function(){
        $scope.Ephone2 = {'display':'none'};
        $scope.stylepoupmyinfo = {'display':'block'}
    }
    $scope.canceleditEmail1 = function(){
        $scope.editEmail1 = {'display':'none'};
        $scope.stylepoupmyinfo = {'display':'block'}
    }
    $scope.canceleditEmail2 = function(){
        $scope.editEmail2 = {'display':'none'};
        $scope.stylepoupmyinfo = {'display':'block'}
    }
    $scope.canceleditsocialall = function(){
        $scope.editsocialall = {'display':'none'};
        $scope.stylepoupmyinfo = {'display':'block'}
    }
    $scope.agent_guest_name = function(x){
       $scope.stylepoupmyinfo = {'display':'none'}
        if (x==1) {
            $scope.guest_name = { 'display':'block' };
        }
        else if (x==2) {
            $scope.guest_country= { 'display':'block' };
        }
        else if (x==3) {
             $scope.phone1= { 'display':'block' };
        }
        else if (x==4) {
            $scope.mail_or_phone = 2;
             $scope.split = $scope.web_book_agent_phone.split("+");
             $scope.split2 = $scope.split[1].split(" ");
        console.log($scope.split2)
        console.log($scope.split2[0])
            for (var i = 0; i < $scope.country.length; i++) {
                //console.log($scope.country[i].phonecode)
                
                if ($scope.country[i].phonecode == $scope.split2[0]) {
                    if ($scope.flagcheck ==1) {
                        $scope.Countryfont = ' ' + '(' + '+' + $scope.country[i].phonecode + ')' +  $scope.country[i].name_en;
                    }
                    if ($scope.flagcheck ==2) {
                        $scope.Countryfont = ' ' + '(' + '+' +  $scope.country[i].phonecode + ')' +  $scope.country[i].name_th;
                    }
                    if ($scope.flagcheck ==3) {
                         $scope.Countryfont = ' ' + '(' + '+' +  $scope.country[i].phonecode + ')' +  $scope.country[i].name_cn;
                    }
                   $scope.imgcoutry = $scope.country[i].country_code;
                 
                }
            }
        
            $scope.Ephone1= { 'display':'block' };
            $scope.aa = $scope.web_book_agent_phone.split(" ");
            $scope.ephonenew = $scope.aa[1];
            // $scope.editphone = true;
            
            $scope.tcountryValue = $scope.aa[0];
            console.log($scope.ephonenew +"$scope.aa[1];")
            console.log($scope.selectcountryValue+"$scope.aa[0];")
        }
        else if (x==6) {
             $scope.phone2= { 'display':'block' };

        }
        else if (x==7) {
             $scope.adultchild= { 'display':'block' };
        }
        else if (x==8) {
            $scope.mail_or_phone = 2;
            $scope.split3 = $scope.local_phone.split("+");
             $scope.split4 = $scope.split3[1].split(" ");
        
            for (var i = 0; i < $scope.country.length; i++) {
                if ($scope.country[i].phonecode == $scope.split4[0]) {
                    if ($scope.flagcheck ==1) {
                        $scope.Countryfont2 = ' ' + '(' + '+' + $scope.country[i].phonecode + ')' +  $scope.country[i].name_en;
                    }
                    if ($scope.flagcheck ==2) {
                        $scope.Countryfont2 = ' ' + '(' + '+' +  $scope.country[i].phonecode + ')' +  $scope.country[i].name_th;
                    }
                    if ($scope.flagcheck ==3) {
                         $scope.Countryfont2 = ' ' + '(' + '+' +  $scope.country[i].phonecode + ')' +  $scope.country[i].name_cn;
                    }
                   $scope.imgcoutry2 = $scope.country[i].country_code;
                   console.log( $scope.imgcoutry2)
                   console.log($scope.Countryfont2)
                }
            }
             $scope.Ephone2= { 'display':'block' };
             $scope.aaa = $scope.local_phone.split(" ");
            $scope.elocalphonenew = $scope.aaa[1];
            $scope.tcountryValue2 = $scope.aaa[0];
           console.log($scope.elocalphonenew +"$scope.aaa[1];")
            console.log($scope.selectcountryValue2+"$scope.aaa[0];")
        }
        else if (x==9) {
             $scope.editEmail1= { 'display':'block' };
             $scope.agent_email = $scope.tb_web_book_agent_email;
             $scope.mail_or_phone = 1;
        }
        else if (x==10) {
             $scope.editEmail2= { 'display':'block' };
             $scope.agent_email2 = $scope.tb_web_book_agent_email2;
             $scope.mail_or_phone = 1;
        }
        else if (x==11) {
             $scope.editsocialall= { 'display':'block' };
        }


    }
    
    $scope.viewcomment = function(){
        $scope.comview= { 'display':'block'};
        
    }
     $scope.acceptguest = function(){
        $scope.boxbg= { 'display':'block'};
        
    }
    $scope.bookby = function(){
        $scope.boby= { 'display':'block'};
        
    }
    $scope.confirmby = function(){
        $scope.conby= { 'display':'block'};
        
    }
    /**************pickup sign********************/
    $scope.cancelpickupsign = function(){
        $scope.popupbookingdetail = { 'display':'block'};
        $scope.sign= { 'display':'none'};
        
    }
    $scope.pickupsign = function(){
        $scope.popupbookingdetail = { 'display':'none'};
        $scope.sign= { 'display':'block'};
        
    }
    $scope.cancelmeetingpoint = function(){
        $scope.popupbookingdetail = { 'display':'block'};
        $scope.meeting= { 'display':'none'};
        
    }
    $scope.meetingpoint = function(){
        $scope.popupbookingdetail = { 'display':'none'};
        $scope.meeting= { 'display':'block'};
        
    }
    
    
    /*****************pickup place to place ******************/
    $scope.checkmap;
$scope.locationall = function(x){
         var hightmap =  $scope.lenc+350;
        var target = angular.element('#slocationdelaydriver'+x.id);
        if (target[0].style.display == '') {
            angular.element(document.querySelector("#slocationdelaydriver"+x.id)).fadeIn(300);
        }
        else if (target[0].style.display == 'block') {
            angular.element(document.querySelector("#slocationdelaydriver"+x.id)).fadeOut(300);
        }
        else if (target[0].style.display == 'none') {
            angular.element(document.querySelector("#slocationdelaydriver"+x.id)).fadeIn(300);
        }
        if (x.id == $scope.scrollID) {
            $('#history').animate({scrollTop: hightmap}, 10);
        }
        console.log(target)
        console.log(target[0].style)
        console.log(target[0].style.display)
        $scope.itemmap = x;
        console.log(x)
         //$scope.sComplete = { 'display':'block'};
        
        //angular.element(document.querySelector('.modal-backdrop')).hide();

        $scope.getlatitude = x.latitude;
        $scope.getlongitude = x.longitude;
       
        $scope.iframe = {src2:"https://maps.google.com/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed"};
}

    $scope.Pickupplace = function(x){
        $scope.popupdriverinfo = { 'display':'none'};
        $scope.popupdriverOP = { 'display':'none'};

       $scope.id_popupdiverchat = { 'display':'none'};

        $scope.id_popupbefore_toop = { 'display':'none'};
        $scope.id_popupdelay_toop = { 'display':'none'};
        $scope.id_popupwait_toop = { 'display':'none'};
        $scope.id_popupcallcenterchat = { 'display':'none'};
        $scope.itemmap = x;
        console.log(x)
        $scope.getlatitude = x.latitude;
        $scope.getlongitude = x.longitude;
        $scope.setmap = "https://maps.google.cn/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed";
        $scope.iframe = {src2:"https://maps.google.com/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed"};
        console.log($scope.itemmap)
         $scope.stylepopupallchat = { 'display':'none'};
        $scope.sPickupplace = { 'display':'block'};
        $scope.popupbefore = { 'display':'none'};
    }
    $scope.cancelsPickupplace = function(){
        $scope.sPickupplace = { 'display':'none'};
    }
    /***********************LOCATION WAIT TO DRIVER*********************/

    
    

    $scope.locationwaitTodriverall = function(x){
        $scope.itemmap = x;
        console.log(x)
        $scope.getlatitude = x.latitude;
        $scope.getlongitude = x.longitude;
        $scope.setmap = "https://maps.google.cn/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed";
        $scope.iframe = {src2:"https://maps.google.com/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed"};
        console.log($scope.itemmap)
         $scope.stylepopupallchat = { 'display':'none'};
        $scope.slocationwaitTodriverall = { 'display':'block'};
        $scope.popupbefore = { 'display':'none'};
        $scope.popupdriverinfo = { 'display':'none'};
        $scope.popupdriverOP = { 'display':'none'};


       


        
    }
    $scope.cancelslocationwaitTodriverall = function(){
        //$scope.stylepopupallchat = { 'display':'block'};
        $scope.slocationchatusd = { 'display':'none'};
        if ($scope.ccstate == 1) {
            $scope.id_popupbefore = { 'display':'block'};
        }
        else if ($scope.ccstate == 2) {
            $scope.id_popupdelay = { 'display':'block'};
        }
        else if ($scope.ccstate == 3) {
            $scope.id_popupwait = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 4) {
            $scope.id_popupdiverchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 5) {
            $scope.popupdriverinfo = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 6) {
            $scope.id_popupbefore_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 7) {
            $scope.id_popupdelay_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 8) {
            $scope.id_popupwait_toop = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 9) {
            $scope.id_popupcallcenterchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 10) {
            $scope.popupdriverOP = { 'display':'block'};
            
        }

        $scope.slocationwaitTodriverall = { 'display':'none'};
    }
    /*****************LOCATION WAIT TO OP**********************/
    $scope.locationwaitToop = function(x){
        $scope.popupdriverinfo = { 'display':'none'};
        $scope.id_popupbefore_toop = { 'display':'none'};        
        $scope.id_popupdelay_toop = { 'display':'none'};
        $scope.id_popupwait_toop  = { 'display':'none'};
        $scope.id_popupcallcenterchat = { 'display':'none'};

        $scope.id_popupdiverchat = { 'display':'none'};
        $scope.itemmap_toop = x;
        console.log(x)
        
        $scope.setmap = "https://maps.google.cn/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed";
        $scope.iframe = {src22:"https://maps.google.com/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed"};
        console.log($scope.itemmap)
         $scope.popupbefore_toop = { 'display':'none'};
         $scope.slocationwaitToop = { 'display':'block'};
    }

    $scope.cancelslocationwaitToop = function(){
        if ($scope.ccstate == 1) {
            $scope.id_popupbefore = { 'display':'block'};
        }
        else if ($scope.ccstate == 2) {
            $scope.id_popupdelay = { 'display':'block'};
        }
        else if ($scope.ccstate == 3) {
            $scope.id_popupwait = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 4) {
            $scope.id_popupdiverchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 5) {
            $scope.popupdriverinfo = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 6) {
            $scope.id_popupbefore_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 7) {
            $scope.id_popupdelay_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 8) {
            $scope.id_popupwait_toop = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 9) {
            $scope.id_popupcallcenterchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 10) {
            $scope.popupdriverOP = { 'display':'block'};
            
        }
        //$scope.popupbefore_toop = { 'display':'block'};
        $scope.slocationwaitToop = { 'display':'none'};
        

    }
    $scope.locationwaitToopall = function(x){
        $scope.itemmap_toop = x;
        console.log(x)
        
        $scope.setmap = "https://maps.google.cn/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed";
        $scope.iframe = {src22:"https://maps.google.com/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed"};
        console.log($scope.itemmap)
        $scope.popupdriverinfo = { 'display':'none'};
         $scope.popupdriverOP = { 'display':'block'};

         $scope.popupbefore_toop = { 'display':'none'};
         $scope.slocationwaitToopall = { 'display':'block'};
    }

    $scope.cancelslocationwaitToopall = function(){
        if ($scope.ccstate == 1) {
            $scope.id_popupbefore = { 'display':'block'};
        }
        else if ($scope.ccstate == 2) {
            $scope.id_popupdelay = { 'display':'block'};
        }
        else if ($scope.ccstate == 3) {
            $scope.id_popupwait = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 4) {
            $scope.id_popupdiverchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 5) {
            $scope.popupdriverinfo = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 6) {
            $scope.id_popupbefore_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 7) {
            $scope.id_popupdelay_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 8) {
            $scope.id_popupwait_toop = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 9) {
            $scope.id_popupcallcenterchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 10) {
            $scope.popupdriverOP = { 'display':'block'};
            
        }
        //$scope.popupbefore_toop = { 'display':'block'};
        $scope.slocationwaitToopall = { 'display':'none'};

        

    }
    /*****************pickup to op****************************/
    $scope.Pickupplace_toop = function(x){

        $scope.popupdriverinfo = { 'display':'none'};
        $scope.popupdriverOP = { 'display':'none'};
        $scope.id_popupdiverchat = { 'display':'none'};
        $scope.id_popupbefore_toop = { 'display':'none'};
        $scope.id_popupdelay_toop = { 'display':'none'};
        $scope.id_popupwait_toop = { 'display':'none'};
        $scope.id_popupcallcenterchat = { 'display':'none'};
        $scope.itemmap_toop = x;
        console.log(x)
        $scope.popupdriverinfo = { 'display':'none'};
        $scope.setmap = "https://maps.google.cn/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed";
        $scope.iframe = {src22:"https://maps.google.com/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed"};
        console.log($scope.itemmap)
        $scope.stylepopupallchat = { 'display':'none'};
        $scope.stylepopupallchatservice = { 'display':'none'};

        $scope.sPickupplace_toop = { 'display':'block'};
        $scope.popupbefore_toop = { 'display':'none'};
        $scope.popupdriverOP = { 'display':'none'};

       
        

        
    }

    $scope.cancelsPickupplace_toop = function(){
        if ($scope.ccstate == 1) {
            $scope.id_popupbefore = { 'display':'block'};
        }
        else if ($scope.ccstate == 2) {
            $scope.id_popupdelay = { 'display':'block'};
        }
        else if ($scope.ccstate == 3) {
            $scope.id_popupwait = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 4) {
            $scope.id_popupdiverchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 5) {
            $scope.popupdriverinfo = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 6) {
            $scope.id_popupbefore_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 7) {
            $scope.id_popupdelay_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 8) {
            $scope.id_popupwait_toop = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 9) {
            $scope.id_popupcallcenterchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 10) {
            $scope.popupdriverOP = { 'display':'block'};
            
        }
        //$scope.popupbefore_toop = { 'display':'block'};
        $scope.sPickupplace_toop = { 'display':'none'};
        //$scope.popupbefore_toop = {'display':'none'}
        //$scope.popupdriverOP = { 'display':'block'};

    }
    /********************LOCATION CHAT USED TO DRIVER*********************/
    $scope.locationchatusd_toop = function(x){
       $scope.popupdriverinfo = { 'display':'none'};
       $scope.popupdriverOP = { 'display':'none'};
       $scope.id_popupbefore = { 'display':'none'};
       $scope.id_popupdelay = { 'display':'none'};
       $scope.id_popupwait = { 'display':'none'};
       $scope.id_popupdiverchat = { 'display':'none'};



       $scope.id_popupdiverchat = { 'display':'none'};

        $scope.id_popupbefore_toop = { 'display':'none'};
        $scope.id_popupdelay_toop = { 'display':'none'};
        $scope.id_popupwait_toop = { 'display':'none'};
        $scope.id_popupcallcenterchat = { 'display':'none'};
        $scope.itemmap = x;
        console.log(x)
        $scope.getlatitude = x.latitude;
        $scope.getlongitude = x.longitude;
        $scope.setmap = "https://maps.google.cn/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed";
        $scope.iframe = {src2:"https://maps.google.com/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed"};
        console.log($scope.itemmap)
         $scope.stylepopupallchat = { 'display':'none'};
        $scope.slocationchatusd_toop = { 'display':'block'};
        $scope.popupbefore = { 'display':'none'};
    }
    $scope.cancelslocationchatusd_toop = function(){
        $scope.slocationchatusd_toop = { 'display':'none'};
        if ($scope.ccstate == 1) {
            $scope.id_popupbefore = { 'display':'block'};
        }
        else if ($scope.ccstate == 2) {
            $scope.id_popupdelay = { 'display':'block'};
        }
        else if ($scope.ccstate == 3) {
            $scope.id_popupwait = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 4) {
            $scope.id_popupdiverchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 5) {
            $scope.popupdriverinfo = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 6) {
            $scope.id_popupbefore_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 7) {
            $scope.id_popupdelay_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 8) {
            $scope.id_popupwait_toop = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 9) {
            $scope.id_popupcallcenterchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 10) {
            $scope.popupdriverOP = { 'display':'block'};
            
        }
        //$scope.slocationchatusd_toop = { 'display':'block'};

    }
    $scope.Pickupplace_toopall = function(x){
        $scope.itemmap_toop = x;
        console.log(x)
        
        $scope.setmap = "https://maps.google.cn/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed";
        $scope.iframe = {src22:"https://maps.google.com/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed"};
        console.log($scope.itemmap)
        $scope.stylepopupallchat = { 'display':'none'};
        $scope.stylepopupallchatservice = { 'display':'none'};
        $scope.popupdriverinfo = { 'display':'none'};
        $scope.sPickupplace_toopall = { 'display':'block'};
        $scope.popupbefore_toop = { 'display':'none'};
        $scope.popupdriverOP = { 'display':'none'};

       
      

        
    }

    $scope.cancelsPickupplace_toopall = function(){
        if ($scope.ccstate == 1) {
            $scope.id_popupbefore = { 'display':'block'};
        }
        else if ($scope.ccstate == 2) {
            $scope.id_popupdelay = { 'display':'block'};
        }
        else if ($scope.ccstate == 3) {
            $scope.id_popupwait = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 4) {
            $scope.id_popupdiverchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 5) {
            $scope.popupdriverinfo = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 6) {
            $scope.id_popupbefore_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 7) {
            $scope.id_popupdelay_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 8) {
            $scope.id_popupwait_toop = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 9) {
            $scope.id_popupcallcenterchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 10) {
            $scope.popupdriverOP = { 'display':'block'};
            
        }
        //$scope.stylepopupallchatservice = { 'display':'block'};
        $scope.sPickupplace_toopall = { 'display':'none'};
        //$scope.popupbefore_toop = {'display':'none'}
        //$scope.popupdriverOP = { 'display':'block'};


    }
    /***************************************************************************/    
    /************************LOCATION CHAT TO DRIVER***************************/
    /***************************************************************************/

    $scope.locationchat = function(x){
        $scope.popupdriverOP = { 'display':'none'};
        $scope.id_popupbefore = { 'display':'none'};
        $scope.id_popupbefore_toop = { 'display':'none'};
        $scope.id_popupdelay = { 'display':'none'};
        $scope.id_popupwait = { 'display':'none'};
        $scope.id_popupdiverchat = { 'display':'none'};
       
        

        $scope.itemmapchatdriver = x;
        console.log(x)
        $scope.setmap = "https://maps.google.cn/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed";
        $scope.iframe = {srcchat:"https://maps.google.com/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed"};
        console.log($scope.itemmap)
        $scope.stylepopupallchat = { 'display':'none'};
        $scope.slocationchat = { 'display':'block'};
        $scope.popupbefore = { 'display':'none'};
        $scope.popupdriverinfo = { 'display':'none'};
    }
     $scope.cancelslocationchat = function(){
       if ($scope.ccstate == 1) {
            $scope.id_popupbefore = { 'display':'block'};
        }
        else if ($scope.ccstate == 2) {
            $scope.id_popupdelay = { 'display':'block'};
        }
        else if ($scope.ccstate == 3) {
            $scope.id_popupwait = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 4) {
            $scope.id_popupdiverchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 5) {
            $scope.popupdriverinfo = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 6) {
            $scope.id_popupbefore_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 7) {
            $scope.id_popupdelay_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 8) {
            $scope.id_popupwait_toop = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 9) {
            $scope.id_popupcallcenterchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 10) {
            $scope.popupdriverOP = { 'display':'block'};
            
        }
        
        //$scope.popupbefore = { 'display':'block'};
        $scope.slocationchat = { 'display':'none'};
    }
     $scope.locationchatall = function(x){
        $scope.itemmapchatdriver = x;
        console.log(x)
        
        $scope.setmap = "https://maps.google.cn/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed";
        $scope.iframe = {srcchat:"https://maps.google.com/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed"};
        console.log($scope.itemmap)
         $scope.stylepopupallchat = { 'display':'none'};
        $scope.slocationchatall = { 'display':'block'};
        $scope.popupbefore = { 'display':'none'};
        $scope.popupdriverinfo = { 'display':'none'};
        $scope.popupdriverOP = { 'display':'none'};

    }
     $scope.cancelslocationchatall = function(){
        if ($scope.ccstate == 1) {
            $scope.id_popupbefore = { 'display':'block'};
        }
        else if ($scope.ccstate == 2) {
            $scope.id_popupdelay = { 'display':'block'};
        }
        else if ($scope.ccstate == 3) {
            $scope.id_popupwait = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 4) {
            $scope.id_popupdiverchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 5) {
            $scope.popupdriverinfo = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 6) {
            $scope.id_popupbefore_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 7) {
            $scope.id_popupdelay_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 8) {
            $scope.id_popupwait_toop = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 9) {
            $scope.id_popupcallcenterchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 10) {
            $scope.popupdriverOP = { 'display':'block'};
            
        }
        //$scope.stylepopupallchat = { 'display':'block'};
        $scope.slocationchatall = { 'display':'none'};
    }


    /***************************************************************************/
    //************************LOCATION CHAT TO OP***************************/
    /***************************************************************************/

    $scope.locationchatOP = function(x){
        $scope.popupdriverinfo = { 'display':'none'};
       $scope.popupdriverOP = { 'display':'none'};
       $scope.id_popupbefore = { 'display':'none'};
       $scope.id_popupdelay = { 'display':'none'};
       $scope.id_popupwait = { 'display':'none'};
       $scope.id_popupdiverchat = { 'display':'none'};
        $scope.id_popupbefore_toop = { 'display':'none'};
        $scope.id_popupdelay_toop = { 'display':'none'};
        $scope.id_popupwait_toop = { 'display':'none'};
        $scope.id_popupcallcenterchat = { 'display':'none'};
        $scope.itemmapchatOP= x;
        console.log(x)
        
        $scope.setmap = "https://maps.google.cn/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed";
        $scope.iframe = {srcchatOP:"https://maps.google.com/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed"};
        console.log($scope.itemmap)
         $scope.stylepopupallchat = { 'display':'none'};
         $scope.popupbefore_toop = { 'display':'none'};

         $scope.id_popupcallcenterchat = { 'display':'none'};
        $scope.stylepopupallchatservice = { 'display':'none'};

        $scope.slocationchatOP = { 'display':'block'};
        $scope.popupbefore = { 'display':'none'};
        $scope.popupdriverinfo = { 'display':'none'};
        $scope.popupdriverOP = { 'display':'none'};

       


        
    }
     $scope.cancelslocationchatOP = function(){
        if ($scope.ccstate == 1) {
            $scope.id_popupbefore = { 'display':'block'};
        }
        else if ($scope.ccstate == 2) {
            $scope.id_popupdelay = { 'display':'block'};
        }
        else if ($scope.ccstate == 3) {
            $scope.id_popupwait = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 4) {
            $scope.id_popupdiverchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 5) {
            $scope.popupdriverinfo = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 6) {
            $scope.id_popupbefore_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 7) {
            $scope.id_popupdelay_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 8) {
            $scope.id_popupwait_toop = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 9) {
            $scope.id_popupcallcenterchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 10) {
            $scope.popupdriverOP = { 'display':'block'};
            
        }
        //$scope.popupbefore_toop = { 'display':'block'};
        

        $scope.slocationchatOP = { 'display':'none'};
    }
    $scope.locationchatOPall = function(x){
        $scope.itemmapchatOP= x;
        console.log(x)
        
        $scope.setmap = "https://maps.google.cn/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed";
        $scope.iframe = {srcchatOP:"https://maps.google.com/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed"};
        console.log($scope.itemmap)
        $scope.popupdriverinfo = { 'display':'none'};
         //$scope.stylepopupallchat = { 'display':'none'};
         $scope.id_popupcallcenterchat = { 'display':'none'};
        $scope.stylepopupallchatservice = { 'display':'none'};
        $scope.popupdriverinfo = { 'display':'none'};
        $scope.slocationchatOPall = { 'display':'block'};
        $scope.popupbefore = { 'display':'none'};
        
        $scope.popupdriverOP = { 'display':'none'};

       


        
    }
     $scope.cancelslocationchatOPall = function(){
        if ($scope.ccstate == 1) {
            $scope.id_popupbefore = { 'display':'block'};
        }
        else if ($scope.ccstate == 2) {
            $scope.id_popupdelay = { 'display':'block'};
        }
        else if ($scope.ccstate == 3) {
            $scope.id_popupwait = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 4) {
            $scope.id_popupdiverchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 5) {
            $scope.popupdriverinfo = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 6) {
            $scope.id_popupbefore_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 7) {
            $scope.id_popupdelay_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 8) {
            $scope.id_popupwait_toop = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 9) {
            $scope.id_popupcallcenterchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 10) {
            $scope.popupdriverOP = { 'display':'block'};
            
        }
         $scope.slocationchatOPall = { 'display':'none'};
        // $scope.popupbefore = { 'display':'none'};
        // $scope.stylepopupallchatservice = { 'display':'block'};

         $scope.slocationchatOPall = { 'display':'none'};
    }
    /***************************************************************************/
    //************************LOCATION DELAY TO DRIVER***************************/
    /***************************************************************************/
    $scope.sharelocationtodriver = function(x){
        var checksharelocation =  $interval(function() {
            $scope.btnsharelocation = { 'display':'block'};
            $interval.cancel(checksharelocation);
        },3000 );

        $scope.boxsharelocationdriver = { 'display':'block'};

        $scope.ssharelocationdriver = { 'display':'block'};
        //$scope.btnsharelocation = { 'display':'block'};

        geolocation.getLocation().then(function(data){
            
                  $scope.coords = {lat:data.coords.latitude, long:data.coords.longitude};
                  

                  $scope.latituderel = $scope.coords.lat;
                  $scope.longituderel = $scope.coords.long;
                  //console.log($scope.latituderel)
                  //console.log($scope.longituderel)
                  $scope.iframe = {srcsharelo:"https://maps.google.com/maps?q="+$scope.coords.lat+","+$scope.coords.long+"&hl=th;z=14&output=embed"};
                  // alert(data.coords.latitude)
                  // alert(data.coords.longitude)
        });
         //$scope.iframe = {srcbefore:"https://maps.google.com/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed"};
    }
    $scope.sharelocationtoop = function(x){
        $scope.boxsharelocation_toop = { 'display':'block'};

        $scope.ssharelocation_toop = { 'display':'block'};
        $scope.btnsharelocation_toop = { 'display':'block'};

        geolocation.getLocation().then(function(data){
            
                  $scope.coords = {lat:data.coords.latitude, long:data.coords.longitude};
                  

                  $scope.latituderel = $scope.coords.lat;
                  $scope.longituderel = $scope.coords.long;
                  //console.log($scope.latituderel)
                  //console.log($scope.longituderel)
                  $scope.iframe = {srcsharelo:"https://maps.google.com/maps?q="+$scope.coords.lat+","+$scope.coords.long+"&hl=th;z=14&output=embed"};
                  // alert(data.coords.latitude)
                  // alert(data.coords.longitude)
        });
         //$scope.iframe = {srcbefore:"https://maps.google.com/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed"};
    }
    $scope.sharelocation_toop = function(x){
        $scope.boxsharelocation_toop = { 'display':'block'};
        $scope.styleloadlocation_toop = { 'display':'none'};


        $scope.ssharelocation_toop = { 'display':'block'};
        $scope.btnsharelocation_toop = { 'display':'block'};

        geolocation.getLocation().then(function(data){
            
                  $scope.coords = {lat:data.coords.latitude, long:data.coords.longitude};
                  

                  $scope.latituderel = $scope.coords.lat;
                  $scope.longituderel = $scope.coords.long;
                  //console.log($scope.latituderel)
                  //console.log($scope.longituderel)
                  $scope.iframe = {srcsharelocation_toop:"https://maps.google.com/maps?q="+$scope.coords.lat+","+$scope.coords.long+"&hl=th;z=14&output=embed"};
                  // alert(data.coords.latitude)
                  // alert(data.coords.longitude)
        });
         //$scope.iframe = {srcbefore:"https://maps.google.com/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed"};
    }
    $scope.ccstate;
     $scope.locationdelayTodriver = function(x){
       $scope.id_popupbefore = { 'display':'none'};
        $scope.id_popupdelay = { 'display':'none'};
        $scope.id_popupwait = { 'display':'none'};
        $scope.id_popupdiverchat = { 'display':'none'};
        $scope.popupdriverinfo = { 'display':'none'};
        $scope.id_popupbefore_toop = { 'display':'none'};        
        $scope.id_popupdelay_toop = { 'display':'none'};
        $scope.id_popupwait_toop  = { 'display':'none'};
        $scope.id_popupcallcenterchat = { 'display':'none'};



        $scope.itemmapdelay = x;
        console.log(x)
        
        $scope.setmap = "https://maps.google.cn/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed";
        $scope.iframe = {srcdelaydriver:"https://maps.google.com/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed"};
        console.log($scope.itemmap)
         //$scope.stylepopupallchat = { 'display':'none'};
        $scope.slocationdelaydriver = { 'display':'block'};
        $scope.popupbefore = { 'display':'none'};
        $scope.popupdriverinfo = { 'display':'none'};
    }
     $scope.cancelsslocationdelaydriver = function(){
        if ($scope.ccstate == 1) {
            $scope.id_popupbefore = { 'display':'block'};
        }
        else if ($scope.ccstate == 2) {
            $scope.id_popupdelay = { 'display':'block'};
        }
        else if ($scope.ccstate == 3) {
            $scope.id_popupwait = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 4) {
            $scope.id_popupdiverchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 5) {
            $scope.popupdriverinfo = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 6) {
            $scope.id_popupbefore_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 7) {
            $scope.id_popupdelay_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 8) {
            $scope.id_popupwait_toop = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 9) {
            $scope.id_popupcallcenterchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 10) {
            $scope.popupdriverOP = { 'display':'block'};
            
        }
       

        //$scope.popupbefore = { 'display':'block'};
        $scope.slocationdelaydriver = { 'display':'none'};
    }
     $scope.cancelsslocationdelaydriverall = function(){
        if ($scope.ccstate == 1) {
            $scope.id_popupbefore = { 'display':'block'};
        }
        else if ($scope.ccstate == 2) {
            $scope.id_popupdelay = { 'display':'block'};
        }
        else if ($scope.ccstate == 3) {
            $scope.id_popupwait = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 4) {
            $scope.id_popupdiverchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 5) {
            $scope.popupdriverinfo = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 6) {
            $scope.id_popupbefore_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 7) {
            $scope.id_popupdelay_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 8) {
            $scope.id_popupwait_toop = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 9) {
            $scope.id_popupcallcenterchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 10) {
            $scope.popupdriverOP = { 'display':'block'};
            
        }
         //$scope.popupdriverinfo = { 'display':'block'};
        //$scope.stylepopupallchat = { 'display':'block'};
        $scope.slocationdelaydriverall = { 'display':'none'};
    }
    $scope.locationdelayTodriverall = function(x){
        $scope.itemmapdelay = x;
        console.log(x)
        
        $scope.setmap = "https://maps.google.cn/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed";
        $scope.iframe = {srcdelaydriver:"https://maps.google.com/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed"};
        console.log($scope.itemmap)
         $scope.stylepopupallchat = { 'display':'none'};
        $scope.slocationdelaydriverall = { 'display':'block'};
        $scope.popupbefore = { 'display':'none'};
        $scope.popupdriverinfo = { 'display':'none'};
        $scope.popupdriverOP = { 'display':'none'};

       


        
    }
    
    

    /***************************************************************************/
    //************************LOCATION BEFORE TO DRIVER***************************/
    /***************************************************************************/
     $scope.locationbeforeTodriver = function(x){
        $scope.popupdriverinfo = { 'display':'none'};
        $scope.id_popupbefore_toop = { 'display':'none'};        
        $scope.id_popupdelay_toop = { 'display':'none'};
        $scope.id_popupwait_toop  = { 'display':'none'};
        $scope.id_popupcallcenterchat = { 'display':'none'};
        $scope.id_popupbefore = { 'display':'none'};
        $scope.id_popupbefore_toop = { 'display':'none'};
        $scope.id_popupdelay = { 'display':'none'};
        $scope.id_popupwait = { 'display':'none'};
        $scope.id_popupdiverchat = { 'display':'none'};
        $scope.itemmapbefore = x;
        console.log(x)
        
        $scope.setmap = "https://maps.google.cn/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed";
        $scope.iframe = {srcbefore:"https://maps.google.com/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed"};
        console.log($scope.itemmap)
        $scope.stylepopupallchat = { 'display':'none'};
        $scope.slocationbeforeTodriver = { 'display':'block'};
        $scope.popupbefore = { 'display':'none'};
        $scope.popupdriverinfo = { 'display':'none'};
        $scope.popupdriverOP = { 'display':'none'};

       


        
    }
     $scope.cancelslocationbeforeTodriver = function(){
        if ($scope.ccstate == 1) {
            $scope.id_popupbefore = { 'display':'block'};
        }
        else if ($scope.ccstate == 2) {
            $scope.id_popupdelay = { 'display':'block'};
        }
        else if ($scope.ccstate == 3) {
            $scope.id_popupwait = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 4) {
            $scope.id_popupdiverchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 5) {
            $scope.popupdriverinfo = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 6) {
            $scope.id_popupbefore_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 7) {
            $scope.id_popupdelay_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 8) {
            $scope.id_popupwait_toop = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 9) {
            $scope.id_popupcallcenterchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 10) {
            $scope.popupdriverOP = { 'display':'block'};
            
        }
        //$scope.popupbefore = { 'display':'block'};
        $scope.slocationbeforeTodriver = { 'display':'none'};
    }
    $scope.locationbeforeTodriverall = function(x){
        $scope.itemmapbefore = x;
        console.log(x)
        
        $scope.setmap = "https://maps.google.cn/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed";
        $scope.iframe = {srcbefore:"https://maps.google.com/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed"};
        console.log($scope.itemmap)
         $scope.stylepopupallchat = { 'display':'none'};
        $scope.slocationbeforeTodriverall = { 'display':'block'};
        $scope.popupbefore = { 'display':'none'};
        $scope.id_popupbefore_toop = { 'display':'none'};

        $scope.popupdriverinfo = { 'display':'none'};
        $scope.popupdriverOP = { 'display':'none'};

       


        
    }
     $scope.cancelslocationbeforeTodriverall = function(){
        if ($scope.ccstate == 1) {
            $scope.id_popupbefore = { 'display':'block'};
        }
        else if ($scope.ccstate == 2) {
            $scope.id_popupdelay = { 'display':'block'};
        }
        else if ($scope.ccstate == 3) {
            $scope.id_popupwait = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 4) {
            $scope.id_popupdiverchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 5) {
            $scope.popupdriverinfo = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 6) {
            $scope.id_popupbefore_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 7) {
            $scope.id_popupdelay_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 8) {
            $scope.id_popupwait_toop = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 9) {
            $scope.id_popupcallcenterchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 10) {
            $scope.popupdriverOP = { 'display':'block'};
            
        }
        //$scope.stylepopupallchat = { 'display':'block'};
        //$scope.popupdriverinfo = { 'display':'block'};
        $scope.slocationbeforeTodriverall = { 'display':'none'};
    }
    
    $scope.Toplace = function(data){
      console.log(data)
      if (data == 'TO') {
        $scope.popupbookingdetail = { 'display':'none'};
        $scope.sToplace = { 'display':'block'};
         $scope.srcplace = $scope.maptosss;
         $scope.iframe = {src3:"https://maps.google.co.th/maps?q=Katina+Hotel&hl=zh-TW&sll=7.956557,98.322144&sspn=0.490304,0.837021"};
          $scope.url = $sce.trustAsResourceUrl($scope.srcplace);
          console.log($scope.srcplace)

      }
      else{
        $scope.popupbookingdetail = { 'display':'none'};
        $scope.sToplace = { 'display':'block'};
        $scope.srcplace =  $scope.mapsss;
        $scope.iframe = {src3:$scope.srcplace.replace()};
        $scope.currentProjectUrl =$scope.srcplace;
        console.log($scope.currentProjectUrl)
        $scope.url = $sce.trustAsResourceUrl($scope.srcplace);
        console.log($scope.srcplace)
                        

      }
      
        
    }
    $scope.Toplacecancel = function(){
       
        $scope.popupbookingdetail = { 'display':'block'};
        $scope.sToplace = { 'display':'none'};
     
      
        
    }
    
    $scope.infomationguestdetail = function(){
        
        if ($scope.checkpopupguest == 0) {
           var intervalpop =  $interval(function() {
                $scope.checkpopupguest = 1;
                $scope.infomationguest = { 'display':'block'};
                $interval.cancel(intervalpop);
            },1000 );
        }
        
    }
    /*******************************************************************************/    
    /******************************* IMAGES WAIT TO DRIVER *************************/
    /*******************************************************************************/

    $scope.showimages1 = function(i){
        $scope.popupdriverinfo = { 'display':'none'};
        $scope.id_popupbefore_toop = { 'display':'none'};        
        $scope.id_popupdelay_toop = { 'display':'none'};
        $scope.id_popupwait_toop  = { 'display':'none'};
        $scope.id_popupcallcenterchat = { 'display':'none'};
        $scope.id_popupbefore = { 'display':'none'};
        $scope.id_popupdelay = { 'display':'none'};
        $scope.id_popupwait = { 'display':'none'};
        $scope.id_popupdiverchat = { 'display':'none'};

      console.log(i)
      
        $scope.imagesselet = "https://goldenbeachgroup.com/app/data/fileupload/vc/"+i.img_post_date+".jpg";//i.img_post_date;
        console.log($scope.imagesselet)
        $scope.imagesselet2 = "https://goldenbeachgroup.com/app/data/fileupload/vc/"+i.yourself_post_date+".jpg";//i.yourself_post_date;
        
        $scope.popupbefore = { 'display':'none'};
        $scope.popupdriverinfo = { 'display':'none'};

        $scope.styleshowimages1 = { 'display':'block'};
        
    }
    $scope.cancelstyleshowimages1 = function(){
        if ($scope.ccstate == 1) {
            $scope.id_popupbefore = { 'display':'block'};
        }
        else if ($scope.ccstate == 2) {
            $scope.id_popupdelay = { 'display':'block'};
        }
        else if ($scope.ccstate == 3) {
            $scope.id_popupwait = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 4) {
            $scope.id_popupdiverchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 5) {
            $scope.popupdriverinfo = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 6) {
            $scope.id_popupbefore_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 7) {
            $scope.id_popupdelay_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 8) {
            $scope.id_popupwait_toop = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 9) {
            $scope.id_popupcallcenterchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 10) {
            $scope.popupdriverOP = { 'display':'block'};
            
        }

        //$scope.popupbefore = { 'display':'block'};
        $scope.styleshowimages1 = { 'display':'none'};
    }
    $scope.showimages1all = function(i){
      console.log(i)
     // alert("asasas")
        $scope.imagesselet = "https://goldenbeachgroup.com/app/data/fileupload/vc/"+i.img_post_date+".jpg";//i.img_post_date;
        console.log($scope.imagesselet)
        $scope.imagesselet2 = "https://goldenbeachgroup.com/app/data/fileupload/vc/"+i.yourself_post_date+".jpg";//i.yourself_post_date;
        // $scope.popupdriverinfo = { 'display':'none'};
        // $scope.popupdriverOP = { 'display':'none'};

        
        // $scope.popupbefore = { 'display':'none'};
        // $scope.stylepopupallchat = { 'display':'none'};

        $scope.styleshowimages1all = {'display':'block'};
        $scope.styleshowimages1all = {'z-index':'2000'};

        
    }
    $scope.cancelstyleshowimages1all = function(){
        //  if ($scope.ccstate == 1) {
        //     $scope.id_popupbefore = { 'display':'block'};
        // }
        // else if ($scope.ccstate == 2) {
        //     $scope.id_popupdelay = { 'display':'block'};
        // }
        // else if ($scope.ccstate == 3) {
        //     $scope.id_popupwait = { 'display':'block'};
            
        // }
        // else if ($scope.ccstate == 4) {
        //     $scope.id_popupdiverchat = { 'display':'block'};
            
        // }
        // else if ($scope.ccstate == 5) {
        //     $scope.popupdriverinfo = { 'display':'block'};
            
        // }
        // else if ($scope.ccstate == 6) {
        //     $scope.id_popupbefore_toop = { 'display':'block'};
        // }
        // else if ($scope.ccstate == 7) {
        //     $scope.id_popupdelay_toop = { 'display':'block'};
        // }
        // else if ($scope.ccstate == 8) {
        //     $scope.id_popupwait_toop = { 'display':'block'};
            
        // }
        // else if ($scope.ccstate == 9) {
        //     $scope.id_popupcallcenterchat = { 'display':'block'};
            
        // }
        // else if ($scope.ccstate == 10) {
        //     $scope.popupdriverOP = { 'display':'block'};
            
        // }

        //$scope.popupdriverinfo = { 'display':'block'};
        $scope.styleshowimages1all = { 'display':'none'};
    }
    
    
    /*******************************************************************************/
    /******************************* IMAGES WAIT TO OP *****************************/
    /*******************************************************************************/    
    $scope.showimages1_toop = function(i){
        $scope.popupdriverinfo = { 'display':'none'};
       $scope.popupdriverOP = { 'display':'none'};
       $scope.id_popupbefore = { 'display':'none'};
       $scope.id_popupdelay = { 'display':'none'};
       $scope.id_popupwait = { 'display':'none'};
       $scope.id_popupdiverchat = { 'display':'none'};
        $scope.id_popupbefore_toop = { 'display':'none'};
        $scope.id_popupdelay_toop = { 'display':'none'};
        $scope.id_popupwait_toop = { 'display':'none'};
        $scope.id_popupcallcenterchat = { 'display':'none'};
        $scope.popupdriverinfo = { 'display':'none'};

      console.log(i)
      
        $scope.imagesselet_toop = "https://goldenbeachgroup.com/app/data/fileupload/vc/"+i.img_post_date+".jpg";//i.img_post_date;
        
        $scope.imagesselet2_toop = "https://goldenbeachgroup.com/app/data/fileupload/vc/"+i.yourself_post_date+".jpg";//i.yourself_post_date;
        
        $scope.stylepopupallchat = { 'display':'none'};
        $scope.popupdriverOP = { 'display':'none'};

        $scope.popupbefore_toop = { 'display':'none'};

        $scope.styleshowimages1_toop = { 'display':'block'};
        $scope.stylepopupallchatservice = { 'display':'none'};

        
    }
    $scope.cancelstyleshowimages1_toop = function(){
        if ($scope.ccstate == 1) {
            $scope.id_popupbefore = { 'display':'block'};
        }
        else if ($scope.ccstate == 2) {
            $scope.id_popupdelay = { 'display':'block'};
        }
        else if ($scope.ccstate == 3) {
            $scope.id_popupwait = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 4) {
            $scope.id_popupdiverchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 5) {
            $scope.popupdriverinfo = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 6) {
            $scope.id_popupbefore_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 7) {
            $scope.id_popupdelay_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 8) {
            $scope.id_popupwait_toop = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 9) {
            $scope.id_popupcallcenterchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 10) {
            $scope.popupdriverOP = { 'display':'block'};
            
        }
        //$scope.popupbefore_toop = { 'display':'block'};
        $scope.styleshowimages1_toop = { 'display':'none'};
    }
    $scope.showimages1_toopall = function(i){
      console.log(i)
      
        $scope.imagesselet_toop = "https://goldenbeachgroup.com/app/data/fileupload/vc/"+i.img_post_date+".jpg";//i.img_post_date;
        
        $scope.imagesselet2_toop = "https://goldenbeachgroup.com/app/data/fileupload/vc/"+i.yourself_post_date+".jpg";//i.yourself_post_date;
        
        $scope.stylepopupallchat = { 'display':'none'};
        $scope.popupdriverOP = { 'display':'none'};

        $scope.popupbefore_toop = { 'display':'none'};

        $scope.styleshowimages1_toop = { 'display':'block'};
        $scope.stylepopupallchatservice = { 'display':'none'};
        $scope.popupdriverinfo = { 'display':'none'};

        
    }
    $scope.cancelstyleshowimages1_toopall = function(){
        if ($scope.ccstate == 1) {
            $scope.id_popupbefore = { 'display':'block'};
        }
        else if ($scope.ccstate == 2) {
            $scope.id_popupdelay = { 'display':'block'};
        }
        else if ($scope.ccstate == 3) {
            $scope.id_popupwait = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 4) {
            $scope.id_popupdiverchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 5) {
            $scope.popupdriverinfo = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 6) {
            $scope.id_popupbefore_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 7) {
            $scope.id_popupdelay_toop = { 'display':'block'};
        }
        else if ($scope.ccstate == 8) {
            $scope.id_popupwait_toop = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 9) {
            $scope.id_popupcallcenterchat = { 'display':'block'};
            
        }
        else if ($scope.ccstate == 10) {
            $scope.popupdriverOP = { 'display':'block'};
            
        }
        //$scope.popupdriverOP = { 'display':'block'};
        $scope.styleshowimages1_toop = { 'display':'none'};
    }


    $scope.sharesocial =function(){
        $scope.stylefacilities = { 'display':'block'};
    }
    $scope.increasetimedialog =function(){
        $scope.styleincreasetime = { 'display':'block'};
    }
    $scope.stylelanguage =function(){
        $scope.stylelangq = { 'display':'block'};
    }
    $scope.editmail = function(){
        $scope.editmailshow = true;
    }
    $scope.editmail2 = function(){
        $scope.editmail2show = true;
    }
    $scope.getchatForvcher =function(x){
      $scope.vccomment = x.TB_order_order;
      if (x.datessnew == 1) {
            if (x.datessnew == 1) {
        $('#voucherpass').modal('show');
      }
        $http({
          method : 'POST',
          url : "php/getcommentforvoucher.php",
          data: $.param({voucher: $scope.vccomment}),
          headers: {'Content-Type': 'application/x-www-form-urlencoded'}
          }).success(function(res){
              console.log(res)
               $scope.getcommentviewhome = res;
                                            
               if ($scope.getcommentviewhome.length == 0) {
                   $scope.btncomview= { 'display':'none'};
                   $scope.senddata= { 'display':'block'};
                   angular.element(document.querySelector('#box-bg45')).css("top","26%");
               }
               else{
                   $scope.btncomview= { 'display':'block'};
                   angular.element(document.querySelector('#box-bg45')).css("top","38%");
               }
               
                                             
      });
      // $scope.openopupcomenthome = {'display':'block'};
      }
      else{
       // $scope.openopupcomenthome = {'display':'none'};
      }
      
    }
  
    $scope.datarooo;
    $scope.editfunsocial = function(x){
       $scope.stylepoupmyinfo= { 'display':'none' };

        console.log($scope.datarooo)
       //$scope.datarooo = x.id;
       if ($scope.datarooo != x.id && $scope.datarooo != undefined) {
        console.log("if")
        angular.element(document.querySelector('.Edit'+$scope.datarooo)).css('display','none')
        angular.element(document.querySelector('.Edit'+x.id)).css('display','block')
        $scope.datarooo= x.id;
       }
       else{
        console.log("else")
        angular.element(document.querySelector('.Edit'+x.id)).css('display','block')
        $scope.datarooo= x.id;
       }
       $scope.editsocialall= { 'display':'block' };
       $scope.itemicon = x.type_icon;
       
       

    }
    
    $scope.Editcomment = function () {
        //alert("true")
        $scope.comview= { 'display':'none'};
        $scope.Ecomment = true;

    }

    /*--------------EDIT QUEST EDIT--------------*/
    $scope.FACEBOOK = function(x){
        $scope.socialfaceid = x;
        // console.log($scope.s_fb)
        
    }
    $scope.LINEID = function(x){
        $scope.sociallineid = x;
        // console.log($scope.s_line)
        
    }
    $scope.SKYPEID = function(x){
        $scope.socialskypeid = x;
        // console.log($scope.s_skype)
        
    }
    $scope.WECHATID = function(x){
        $scope.socialwechatid = x;
        // console.log($scope.s_wechat)
        
    }
    $scope.WhatsAppID = function(x){
        $scope.socialwhatid = x;
        // console.log($scope.s_what)
        
    }
    $scope.WANGWANGID = function(x){
        $scope.socialwangid = x;
        // console.log($scope.s_ww)
        
    }
    $scope.QQID = function(x){
        $scope.socialqqid = x;
        // console.log($scope.s_qq)
        
    }
    $scope.ZELLOID = function(x){
        $scope.socialzelloid = x;
        // console.log($scope.s_fb)
        
    }
    
    $scope.Ephone = function(x){
        console.log(x)
        $scope.ephone1 = x;
       // if (x == undefined) {
       //  console.log("in case")

       
       // }
       if ($scope.phonesend == undefined) {
        $scope.phonesend = $scope.tcountryValue;
       }

       $scope.phonenew = $scope.phonesend + ' ' + $scope.ephone1;
       console.log($scope.phonenew)
        
        
        
    }
    //$scope.ephone2;
    $scope.Elocalphone = function(x){
        $scope.ephone2 = x;
        if ($scope.phonesend2 == undefined) {
        $scope.phonesend2 = $scope.tcountryValue2;
       }

       //$scope.phonenew = $scope.phonesend + ' ' + $scope.ephone1;
       //console.log($scope.phonenew)
        $scope.localphonenew=  $scope.phonesend2 + ' ' + $scope.ephone2;
        
        console.log($scope.localphonenew)
    }
    /*==========geatnull============*/

    $scope.skypenull = function(x){
        $scope.s_skypenew = x;
        
    }
    $scope.linenull = function(x){
        $scope.s_linenew = x;
        // console.log($scope.s_linenew)
       
    }
    $scope.wechatnull = function(x){
        $scope.s_wechatnew = x;
        
    }
    $scope.qqnull = function(x){
        $scope.s_qqnew = x;
        
    }
    $scope.facenull = function(x){
        $scope.s_facenew = x;
        
    }
    $scope.whatnull = function(x){
        $scope.s_whatnew = x;
        
    }
    $scope.wangnull = function(x){
        $scope.s_wangnew = x;
        
    }
    $scope.Ephonenull = function(x){
        $scope.phonenew = x;
        
    }
    $scope.Elocalphonenull = function(x){
        $scope.localphonenew = x;
        
    }
    $scope.em2;
    $scope.em1;
    $scope.functionemailnull = function(x){
        //alert(x)
        $scope.chmail = 1;
        $scope.emailnew = x;
        console.log($scope.emailnew)
        $scope.em1 = x;
        if ($scope.em1 != undefined) {
            $scope.reqmail = { 'display':'none'};
        }
        
    }
    $scope.functionemail2null = function(x){
        //alert(x)
        $scope.chmail2 = 1;
        console.log(x)
        $scope.email2new = x;
        console.log($scope.email2new)
        $scope.em2 = x;
        if ($scope.em2 != undefined) {
            $scope.reqmail2 = { 'display':'none'};
        }
        
    }
    //$scope.asas = load('www.google.htm');
   //$scope.detailFrame= $sce.trustAsResourceUrl("http://www.google.com");
   $scope.voucherdialogv2 = function(x){
        //$scope.voucherweb = { 'display':'block'};
        $scope.popupbookingdetail = { 'display':'none'}; 
      }
    $scope.voucherdialog = function(x){
        //$scope.voucherweb = { 'display':'block'};
        //$scope.popupbookingdetail = { 'display':'none'}; 
        $scope.getdate_web = x.post_date;
        $scope.getvc_web = x.TB_order_order;
        var ss = "http://t-booking.com/demo/print.php?name=admin/voucher&file=transfer&no="+x.TB_order_id+"&order="+x.TB_order_order+"&code="+x.TB_order_code+"";
                         console.log(ss)
                        $scope.iframe = {src:ss};
         //$scope.selectedItem = { viewUrl: 'www.google.html' };
         
     }
     $scope.cancelvoucherweb = function(){
        $('#voucherweb').modal('hide');
        //$scope.voucherweb = { 'display':'none'};
        //$scope.popupbookingdetail = { 'display':'block'}; 
     }
      $scope.selectnum = "";
      $scope.selectnum2 = "";
      $scope.servicehoure;
      $scope.changenumincrement = function(list){
       $scope.servicehoure = list;
      console.log($scope.datachekcost)
      var carsmall = 0;
      var carbig = 0;
            $scope.styleaddtime = { 'display':'block'}; 
            $scope.sumAddhour = parseInt(list);
            var raka = 0 ;
            console.log($scope.datachekcost[0].TB_order_agent)
            console.log($scope.datachekcost[0].TB_carall_car_type)
            if ($scope.datachekcost[0].TB_order_agent == 13) {
              
                  raka = 200;
                  
              

            }
            else{
                if ($scope.datachekcost[0].TB_carall_car_type == 1) {
                     raka = 250;
                }
                else{
                      raka = 300;
                }
            }
            $scope.costsum = list*raka;
            $scope.stylecheckinccrement = { 'display':'none'}; 
            $scope.stylehourincre = list;
            if ($scope.stylehourincre != undefined && $scope.stylehourincre != "" ) {
                
                $scope.stylecheckinccrement = { 'display':'block'};
                $scope.stylecheckintextincre = { 'display':'none'};
            }
                
            
    }
     $scope.changenum = function(list){
            $scope.stylehour = { 'display':'none'}; 
            $scope.selectnum = list;
            if ($scope.selectnum != undefined && $scope.selectnum2 != undefined && $scope.selectnum != "" && $scope.selectnum2 != "") {
                
                $scope.stylecheckin = { 'display':'block'};
                $scope.stylecheckintext = { 'display':'block'};
            }
                
            
    }
    $scope.changenum2 = function(list2){
            if ($scope.selectnum != undefined && $scope.selectnum2 != undefined && $scope.selectnum != undefined && $scope.selectnum2 != undefined) {
                
                $scope.stylecheckin = { 'display':'block'};
                $scope.stylecheckintext = { 'display':'block'};

            }
            $scope.styleminutes = { 'display':'none'};
            $scope.selectnum2 = list2;
    }
    $scope.changenumNotify  = function(list){
            $scope.stylehour2 = { 'display':'none'}; 

            $scope.selectnumNotify  = list;
            if ($scope.selectnumNotify  != undefined && $scope.selectnumNotify2 != undefined && $scope.selectnumNotify  != "" && $scope.selectnumNotify2 != "") {
                
                $scope.stylecheckin2 = { 'display':'block'};
                $scope.stylecheckintext2 = { 'display':'block'};

            }
                
            
    }
    $scope.changenumNotify2 = function(list2){
            if ($scope.selectnumNotify  != undefined && $scope.selectnumNotify2 != undefined && $scope.selectnumNotify  != undefined && $scope.selectnumNotify2 != undefined) {
                
                $scope.stylecheckin2 = { 'display':'block'};
                $scope.stylecheckintext2 = { 'display':'block'};

            }
            $scope.styleminutes2 = { 'display':'none'};
            $scope.selectnumNotify2 = list2;
    }
    $scope.Delay = function(x){
            //alert("asas")
            console.log(x)
         $scope.backinformdriver =  { 'display':'block'};  
        console.log($scope.selectnum)
        console.log($scope.selectnum2)
            if ($scope.selectnum != undefined && $scope.selectnum2 != undefined && x == 1 && x==3) {
                //$scope.stylecheckin = { 'display':'block'};
            }
            else{
                //$scope.stylecheckin = { 'display':'none'};
            }
            if (x == 1) {
                $scope.stylecheckinnotdelay = { 'display':'none'};
                $scope.stylecheckin = { 'display':'none'};
                $scope.stylecheckintext = { 'display':'none'};

                $scope.timedelay = { 'display':'block'}; //
                $scope.selectdelayradio = { 'display':'none'};
                $scope.cdelay_or_not = 1;
                $scope.takepictures = { 'display':'none'};//none take picture
                $scope.takepictures2 = { 'display':'none'};//none take picture
                 $scope.pictureyourself = { 'display':'none'};
                
            }
            else if (x==0){
                $scope.stylecheckinnotdelay = { 'display':'block'};
                $scope.stylecheckin = { 'display':'none'};
                $scope.stylecheckintext = { 'display':'none'};

                $scope.timedelay = { 'display':'none'};
                $scope.cdelay_or_not = 0;
            }
            else if (x==3){
          angular.element(document.querySelector('.box-mobal26')).css('margin-top','10%')

                $scope.takepictures = { 'display':'block'}; //block take picture
                $scope.takepictures2 = { 'display':'block'}; //block take picture
                 $scope.pictureyourself = { 'display':'none'};
                $scope.selectdelayradio = { 'display':'none'}; // Select radio none delay or not
                $scope.stylecheckinnotdelay = { 'display':'none'};
                $scope.timedelay = { 'display':'none'};
                $scope.stylecheckin = { 'display':'block'};
                $scope.stylecheckintext = { 'display':'block'};

                $scope.stylecheckintext = { 'display':'block'};
                $scope.cdelay_or_not = 3;
            }
            else if (x==4) {
                $scope.timedelay2 = { 'display':'block'};
                $scope.timedelay = { 'display':'none'};
                $scope.selectdelayradio = { 'display':'none'};
                $scope.cdelay_or_not = 4;
            }

        }
        $scope.srtore;
        
    
    $scope.sendmaildelay = function(){
        $scope.delayconfirm = { 'display':'block'};
       $scope.pictureyourself = { 'display':'none'};
       $scope.newtakephoto = { 'display':'block'};
       $scope.delayconfirm_toop = { 'display':'block'};
       $scope.pictureyourself_toop = { 'display':'none'};
       $scope.newtakephoto_toop = { 'display':'block'};
       //$scope.savetakephoto = { 'display':'block'};
    }
    
    $scope.takepicturepro = function(){
        $scope.newtakephoto = { 'display':'block'};
        $scope.pictureenvironment = { 'display':'block'}; 
        $scope.pictureyourself = { 'display':'none'}; 
        $scope.newtakephoto_toop = { 'display':'block'};
        $scope.pictureenvironment_toop = { 'display':'block'}; 
        $scope.pictureyourself_toop = { 'display':'none'};
        angular.element(document.querySelector('.fileUpload')).css('display','block')  
    }
    $scope.detailfirsthome =function(x){
            $scope.VOUCHER = x;
            // localStorage.setItem('item',JSON.stringify(x));
            
                callvoucher(x);
      $scope.popupdriverinfo = {'display':'none'};
       $scope.popupdriverdetail = {'display':'block'};

    }
    $scope.cancelpopupdriverdetail = function(){
      $scope.popupdriverdetail = {'display':'none'};
       $scope.popupdriverinfo = {'display':'block'};
    }
    $scope.cancelpopupdriver = function(){

      //$scope.popupdriverdetail = {'display':'none'};
       //$scope.popupdriverinfo = {'display':'block'};
    }
    $scope.openpopupcommentTodriver = function(){
		
 
		

        $http({
            method : 'POST',
            url : "php/getchat.php",
            data: $.param({voucher: $scope.VOUCHER}),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(res){
                console.log(res)
                $scope.setionChat = res;
                $scope.owncomments =  { 'display':'none'};
                $scope.scommentTodriver = { 'display':'block'};
                $scope.selectcommentradio =  { 'display':'block'};
                
        });
       
        
    }
    $scope.openpopupcommentTocallcenter = function(){

        $http({
            method : 'POST',
            url : "php/getchat.php",
            data: $.param({voucher: $scope.VOUCHER}),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(res){
                console.log(res)
                $scope.setionChat2 = res;
                $scope.owncomments2 =  { 'display':'none'};
                $scope.scommentTocollcenter = { 'display':'block'};
                $scope.selectcommentradio2 =  { 'display':'block'};
                
        });
       
        
    }
    $scope.Chatdriver = function(x){
        console.log(x)
        if (x == 1) {

        }
        else if(x==2){
            $scope.selectcommentradio = { 'display':'none'};
            console.log("in case 2")
            $scope.owncomments =  { 'display':'block'};
        }

    }
    $scope.Chatcallcenter = function(x){
        console.log(x)
        if (x == 1) {

        }
        else if(x==2){
            $scope.selectcommentradio2 = { 'display':'none'};
            console.log("in case 2")
            $scope.owncomments2 =  { 'display':'block'};
        }

    }
    $scope.comdriver;
    $scope.YourOwnComments = function(x){
        $scope.comdriver = x;
        console.log(x)

        
        if (x == undefined || x == "" || x == null){
            $scope.confirmcommenttoderiver =  { 'display':'none'};
        }
        else {
            $scope.confirmcommenttoderiver =  { 'display':'block'};
        }
    }
    $scope.YourOwnCommentscall = function(x){
        $scope.comcallcenter = x;
        console.log(x)

        
        if (x == undefined || x == "" || x == null){
            $scope.confirmcommenttocallcenter =  { 'display':'none'};
        }
        else {
            $scope.confirmcommenttocallcenter =  { 'display':'block'};
        }
    }
    
    $scope.backinformfundriver =function(x){
        console.log(x)
        if (x==1) {
            //angular.element(document.querySelector('.box-mobal26')).css('margin-top','55%')
            $scope.selectdelayradio =  { 'display':'block'};
            $scope.takepictures = { 'display':'none'};
            $scope.timedelay = { 'display':'none'};
            $scope.timedelay2 =  { 'display':'none'};
            $scope.backinformdriver = { 'display':'none'};

        }
        else if (x==2) {
            //angular.element(document.querySelector('.box-mobal26')).css('margin-top','55%')
            $scope.selectdelayradio =  { 'display':'none'};
             $scope.pictureyourself = { 'display':'none'};
             $scope.backinformdriverimage = { 'display':'none'};
             $scope.backinformdriver = { 'display':'block'};
            $scope.takepictures = { 'display':'block'};
            $scope.takepictures_toop = { 'display':'block'};
           
        }
    }
    $scope.popupselecttitleinform = function(){
        $scope.backinformdriver = { 'display':'none'};
        $scope.timedelay = { 'display':'none'};
        $scope.poupradio = { 'display':'block'};

        $scope.selectdelayradio = { 'display':'block'};
         $scope.pictureyourself = { 'display':'none'};
         $scope.takepictures= { 'display':'none'};
         $scope.takepictures_toop= { 'display':'none'};
       
    }
    $scope.cancelid_popupdelay = function(){
        $scope.id_popupdelay = { 'display':'none'};
        $scope.popupdriverinfo = { 'display':'block'};
    }
    $scope.cancelid_popupbefore = function(){
        $scope.id_popupbefore = { 'display':'none'};
        $scope.popupdriverinfo = { 'display':'block'};
    }
    $scope.cancelid_popupwait = function(){
   angular.element(document.querySelector('.box-mobal2')).css('top','5%')

        //$scope.id_popupwait = { 'display':'none'};
        $scope.popupdriverinfo = { 'display':'block'};
    }
    $scope.cancelid_popupdivermsg = function(){
        $scope.id_popupdivermsg = { 'display':'none'};
        $scope.popupdriverinfo = { 'display':'block'};
    }
    $scope.cancelid_popupdiverchat = function(){
        $scope.id_popupdiverchat = { 'display':'none'};
        $scope.popupdriverinfo = { 'display':'block'};
    }
    $scope.cancelid_popupcallcenterchat = function(){
        $scope.id_popupcallcenterchat = { 'display':'none'};
        $scope.popupdriverOP = { 'display':'block'};
    }
     $scope.cancelid_popupcallcentermsg = function(){
        $scope.id_popupcallcentermsg = { 'display':'none'};
        $scope.popupdriverOP = { 'display':'block'};
    }
/***************************************************  */  
/******************* New-angular-KM ***************  */  
/***************************************************  */ 
$scope.popup_goto_before = function(x){
     $scope.VCID = x;
    //$scope.popupdriverinfo = {'display':'none'};
    $scope.id_popupbefore = { 'display':'block'};
    $scope.timedelay2 = { 'display':''};
}
$scope.popup_goto_delay = function(x){
     $scope.VCID = x;
    //$scope.popupdriverinfo = {'display':'none'};
    $scope.id_popupdelay = { 'display':'block'};
  $scope.timedelay = { 'display':''};
}
$scope.popup_goto_wait = function(x){
     $scope.VCID = x;
    //alert("as")
    //$scope.popupdriverinfo = {'display':'none'};
    angular.element(document.querySelector('#blah')).css('display','none');
    angular.element(document.querySelector('#blah2')).css('display','none');
    $scope.id_popupwait = { 'display':'block'};
    $scope.takepictures = { 'display':''};
}
// ***************wait to op ******************/

$scope.popup_goto_wait = function(x){
     $scope.VCID = x;
    //alert("as")
    //$scope.popupdriverinfo = {'display':'none'};
    angular.element(document.querySelector('#blah3')).css('display','none');
    angular.element(document.querySelector('#blah4')).css('display','none');
    $scope.id_popupwait_toop = { 'display':'block'};
    $scope.takepictures = { 'display':''};
}
$scope.cancelid_popupwait_toop = function(){
   angular.element(document.querySelector('.box-mobal2')).css('top','36%')

        $scope.id_popupwait_toop = { 'display':'none'};
        $scope.popupdriverOP = { 'display':'block'};
    }
$scope.popup_goto_divermsg = function(x){
     $scope.VCID = x;
   // $scope.popupdriverinfo = {'display':'none'};
    $scope.id_popupdivermsg = { 'display':'block'};
    //$scope.pictureyourself = { 'display':''};
}
$scope.popup_goto_diverchat = function(x){
     $scope.VCID = x;
    //$scope.popupdriverinfo = {'display':'none'};
    $scope.id_popupdiverchat = { 'display':'block'};
    $scope.confirmcommenttoderiver = { 'display':'none'};
}
/*********************page First to op******************/


    
/*********************page First******************/
$scope.popup_goto_beforefirst = function(x){
   
    $scope.VCID = x;
    
}
$scope.popup_goto_delayfirst = function(x){
   
    $scope.VCID = x;
    
}
$scope.popup_goto_waitfirst = function(x){
   
    $scope.VCID = x;
    angular.element(document.querySelector('#blah')).css('display','none');
    angular.element(document.querySelector('#blah2')).css('display','none');
    //$scope.popupdriverinfo = {'display':'none'};
    //$scope.id_popupwait = { 'display':'block'};
    $scope.takepictures = { 'display':'block'};
    $scope.newtakephoto = { 'display':'block'};
    $scope.newtakephoto2 = { 'display':'block'};
    $scope.pictureyourself = {'display':'none'};
    $scope.historywaittodriver = {'display':'block'};
    //popupallchat($scope.VCID);


}
$scope.popup_goto_divermsgfirst = function(x){

    $scope.VCID = x;
    $scope.popupdriverinfo = {'display':'none'};
    $scope.id_popupdivermsg = { 'display':'block'};
    //$scope.pictureyourself = { 'display':''};
}
$scope.popup_goto_diverchatfirst = function(x){
    //$scope.ccstate = 4;
    $scope.VCID = x;
    $scope.sdatamessage = {'display':'block'}
      $scope.frequentlyused = { 'display':'block'};
      $scope.havedatamessage = { 'display':'none'};
      $scope.message = { 'display':'none'};



    //$scope.popupdriverinfo = {'display':'none'};
    //$scope.message = {'display':'none'};
    //$scope.id_popupdiverchat = { 'display':'block'};
    //$scope.confirmcommenttoderiver = { 'display':'none'};
    popupallchat($scope.VCID);
}
$scope.popuppopupallhitory = function(x){
    //$scope.ccstate = 6;
    $scope.VCID = null;
    //$templateCache.removeAll();

    $scope.VCID = x;
    $http({
                  method : 'POST',
                  url : "php/message_data.php",
                 data: $.param({type: 2}),
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){                  
                  console.log(res)
                  $scope.messagedata_toop = res;
                  //console.log($scope.VCIDALL)
                
                  
                   
                });
    //$scope.frequentlyused_toop = {'display':'none'};
    //$scope.message_toop = {'display':'none'};
    //$scope.frequentlyused_toop = { 'display':'block'};
    //$scope.confirmcommenttoderiver = { 'display':'none'};
    popupallchat($scope.VCID);

}
$scope.popuppopupallhitory_toop = function(x){
    $scope.ccstate = 6;
    $scope.VCID = x;
    //$scope.popupdriverinfo = {'display':'none'};
    //$scope.message = {'display':'none'};
    //$scope.id_popupdiverchat = { 'display':'block'};
    //$scope.confirmcommenttoderiver = { 'display':'none'};
    popupallchat($scope.VCID);

}
/**************************************************/

$scope.popup_goto_callcentermsg = function(x){
     $scope.VCID = x;
    $scope.popupdriverOP = {'display':'none'};
    $scope.id_popupcallcentermsg = { 'display':'block'};
    //$scope.pictureyourself = { 'display':''};
}



$scope.cancelpopupbefore = function(){
   $scope.popupdriverinfo = {'display':'block'}

   $scope.popupbefore = {'display':'none'}
   $scope.stylepopupallchat = {'display':'none'}
}
$scope.blockBeforepopup = function(state){
  $scope.datastate = state;
  if (state.length != 0) {
      console.log(state)
      $scope.popupbefore = {'display':'block'}
      $scope.popupdriverinfo = {'display':'none'}

  }
  
}

/*****************to op***********************/

$scope.blockBeforepopup_toop = function(state){
  $scope.datastate_toop = state;
  if (state.length != 0) {
      console.log(state)
      $scope.popupbefore_toop = {'display':'block'}
      $scope.popupdriverOP = {'display':'none'}

  }
}
$scope.cancelpopupbefore_toop = function(){
   $scope.popupbefore_toop = {'display':'block'}
   $scope.popupdriverOP = {'display':'block'}


   $scope.id_popupcallcenterchat = {'display':'none'}

   $scope.popupbefore_toop = {'display':'none'}
   $scope.stylepopupallchat_toop = {'display':'none'}
}
$scope.cancelopenpopupdriverinfo = function(x){
        
        $scope.popupdriverinfo = { 'display':'none'};
    
    
    
   $scope.sbody = { 'overflow-y':'scroll'};
   }
$scope.openpopupdriverinfo = function(x){
            $scope.statearrived = null;
            $scope.statevehicle = null;
            $scope.statecomplete = null;
            $scope.statearrived_date = null;
            $scope.statevehicle_date = null;
            $scope.statecomplete_date = null;
    
        $scope.popupdriverinfo = { 'display':'block'};
    
    
    
   $scope.sbody = { 'overflow-y':'hidden'};
  
  $scope.idTypemessage = 1; //customer To driver
  console.log(x)
  $scope.timeEnd = x.airout_h +':'+ x.airout_m;//new Date(x.TB_order_outdate +' '+ x.airout_h +':'+ x.airout_m)
  $scope.dateparture = x.TB_order_outdate;
  console.log($scope.timeEnd)

    $scope.vdIDclickinfo = x.TB_order_order;
    $scope.VOUCHER = x.TB_order_order;
    $scope.TB_order_ondate = x.TB_order_ondate;
    $scope.TB_order_air = x.TB_order_air;
    $scope.TB_order_air_time = x.TB_order_air_time;
    $scope.checkarea = x.area;
    console.log($scope.vdIDclickinfo)
    console.log($scope.checkarea)
    console.log($scope.TB_order_ondate)
    console.log($scope.TB_order_air)
    console.log($scope.TB_order_air_time)
    angular.forEach($scope.dataorderidall, function (i) {
        if (x.TB_order_order == i.TB_order_order) {
            $scope.statearrived = i.TB_order_driver_topoint;
            $scope.statevehicle = i.TB_order_driver_pickup;
            $scope.statecomplete = i.TB_order_driver_complete;
            $scope.statearrived_date = i.TB_order_driver_topoint_date;
            $scope.statevehicle_date = i.TB_order_driver_pickup_date;
            $scope.statecomplete_date = i.TB_order_driver_complete_date;
            console.log($scope.statearrived)
            console.log($scope.statevehicle)
            console.log($scope.statecomplete)
            console.log($scope.statearrived_date)
            console.log($scope.statevehicle_date)
            console.log($scope.statecomplete_date)
        }
    });
    
    if (x.datessnew == 1) {
    $('#voucherpass').modal('show');
  }
    

}
$scope.myDate = new Date();

  $scope.minDate = new Date(
      $scope.myDate.getFullYear(),
      $scope.myDate.getMonth() - 2,
      $scope.myDate.getDate());

  $scope.maxDate = new Date(
      $scope.myDate.getFullYear(),
      $scope.myDate.getMonth() + 2,
      $scope.myDate.getDate());


//*************all chat driver************************//
$scope.getallchat = [];
$scope.openpopuptodriver =function(x){
    $scope.ccstate = 6;
    $scope.VCID = x;

  //$scope.sbody = {'overflow':'hidden'}
  $http({
                  method : 'POST',
                  url : "php/message_data.php",
                 data: $.param({type: 1}),
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){                  
                  console.log(res)
                  $scope.headermessagedata = res;
                   $scope.messagedata = res;
                  //console.log($scope.VCIDALL)
                
                  
                   
    });
          //$scope.stylepopupallchat = {'display':'block'}
          //popupallchat(x)
}
$scope.landingdrivermodal = function(){
    $scope.btnchatlanding = {'background':'#3b5998'}

    $scope.btnfrelanding = {'background':'#22407f'}
    $scope.message = {'display':'none'};
      $scope.havedatamessage = {'display':'none'};
      $scope.havedatamessagelanding = { 'display':'none'};

      //$scope.sdatamessage = {'display':'block'}
      $scope.frequentlyusedlanding = { 'display':'block'};
      $scope.sdatamessage_store = {'display':'none'}
      $http({
                  method : 'POST',
                  url : "php/message_data_store.php",
                 data: $.param({type:28}),
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){                  
                  console.log(res)
                  $scope.messagedataStore = res;
                  //console.log($scope.VCIDALL)
                

                  
                   
                });
    
}
/****************************************************/
/*****************LANDINNG****************************/
/****************************************************/

$scope.btnlandingdrivermodal = function(){
    $scope.sdatamessagelanding_store = {'display':'block'}
     $scope.frequentlyusedlanding = {'display':'block'}
     $scope.havedatamessagelanding = {'display':'none'}
     $scope.sdatamessagelanding = {'display':'none'}

     $scope.messagelanding = {'display':'none'}
     $scope.btnchatlanding = {'background':'#3b5998'}

    $scope.btnfrelanding = {'background':'#22407f'}

    angular.forEach($scope.headermessagedata, function (i) {
        //console.log(i)
            if (i.id == 28 ) {
                if ($scope.flagcheck == 1) {
              $scope.headersmessage = i.topic_en;
            }
            else if ($scope.flagcheck == 2) {
                $scope.headersmessage = i.topic_th;
            }
            else if ($scope.flagcheck == 3) {
                $scope.headersmessage = i.topic_cn;
            }
        }  
        
    });
    
}
$scope.btnMessagelandingdrivermodal = function(){
    $scope.btnchatlanding = {'background':'#22407f'}

    $scope.btnfrelanding = {'background':'#3b5998'}
    $scope.sdatamessagelanding_store = {'display':'none'}
     $scope.frequentlyusedlanding = {'display':'none'}
     $scope.havedatamessagelanding = {'display':'none'}


     //$scope.sdatamessagelanding = {'display':'block'}
     $scope.messagelanding = {'display':'block'}

}
$scope.selectmessagelanding_store = function(message){
        $scope.messagedriver = message.id;
        $scope.havedatamessagelanding = {'display':'block'}
         $scope.SELmessage_store_id = message.id;

        if ($scope.flagcheck == 1) {
           $scope.SELmessage_store = message.topic_en;
        }
        else if ($scope.flagcheck == 2) {
            $scope.SELmessage_store = message.topic_th;
        }
        else if ($scope.flagcheck == 3) {
            $scope.SELmessage_store = message.topic_cn;
        }
    }
/****************************************************/
/*****************LANDINNG TO OP*********************/
/****************************************************/
$scope.landingopmodal = function(){
    $scope.btnchatlanding_toop = {'background':'#3b5998'}

    $scope.btnfrelanding_toop = {'background':'#22407f'}
    $scope.messagelanding_toop = {'display':'none'};
      $scope.havedatamessagelannding_toop = {'display':'none'};
      $scope.havedatamessagelanding_toop = { 'display':'none'};

      $scope.sdatamessagelanding_toop = {'display':'none'}
      $scope.frequentlyusedlanding_toop = { 'display':'block'};
      $scope.sdatamessagelanding_store_toop = {'display':'block'}
      $http({
                  method : 'POST',
                  url : "php/message_data_store.php",
                 data: $.param({type:28}),
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){                  
                  console.log(res)
                  $scope.messagedataStore = res;
                  //console.log($scope.VCIDALL)
                

                  
                   
                });
    
}
$scope.btnlandingopmodal = function(){
    $scope.sdatamessagelanding_store_toop = {'display':'block'}
     $scope.frequentlyusedlanding_toop = {'display':'block'}
     $scope.havedatamessagelanding_toop = {'display':'none'}
     $scope.sdatamessagelanding_toop = {'display':'none'}

     $scope.messagelanding_toop = {'display':'none'}
     $scope.btnchatlanding_toop = {'background':'#3b5998'}

    $scope.btnfrelanding_toop = {'background':'#22407f'}

    angular.forEach($scope.headermessagedata, function (i) {
        //console.log(i)
            if (i.id == 28 ) {
                if ($scope.flagcheck == 1) {
              $scope.headersmessage = i.topic_en;
            }
            else if ($scope.flagcheck == 2) {
                $scope.headersmessage = i.topic_th;
            }
            else if ($scope.flagcheck == 3) {
                $scope.headersmessage = i.topic_cn;
            }
        }  
        
    });
    
}
$scope.btnMessagelandingopmodal = function(){
    $scope.btnchatlanding_toop = {'background':'#22407f'}

    $scope.btnfrelanding_toop = {'background':'#3b5998'}
    $scope.sdatamessagelanding_store_toop = {'display':'none'}
     $scope.frequentlyusedlanding_toop = {'display':'none'}
     $scope.havedatamessagelanding_toop = {'display':'none'}


     //$scope.sdatamessagelanding = {'display':'block'}
     $scope.messagelanding_toop = {'display':'block'}

}
$scope.selectmessagelanding_store_toop = function(message){
        $scope.messageop = message.id;
        $scope.havedatamessagelanding_toop = {'display':'block'}
        $scope.SELmessage_store_id = message.id;

        if ($scope.flagcheck == 1) {
           $scope.SELmessage_store = message.topic_en;
        }
        else if ($scope.flagcheck == 2) {
            $scope.SELmessage_store = message.topic_th;
        }
        else if ($scope.flagcheck == 3) {
            $scope.SELmessage_store = message.topic_cn;
        }
    }
/****************************************************/
/**************** ON THE CAR*************************/
/****************************************************/

$scope.onthecardrivermodal = function(){
     $http({
                  method : 'POST',
                  url : "php/message_data_store.php",
                 data: $.param({type:60}),
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){                  
                  console.log(res)
                  $scope.messagedataStore = res;
                  //console.log($scope.VCIDALL)
                

                  
                   
                });
    //$scope.message = {'display':'none'};
    $scope.btnfreonthecar = {'background':'#22407f'}

    $scope.btnchatonthecar = {'background':'#3b5998'}
      $scope.havedatamessageonthecar = {'display':'none'};
      $scope.sdatamessageonthecar = { 'display':'none'};

      //$scope.sdatamessage = {'display':'block'}
      $scope.frequentlyusedonthecar = { 'display':'block'};
      $scope.sdatamessage_store = {'display':'none'}
    
}
$scope.btnonthecardrivermodal = function(){
    $scope.btnchatonthecar = {'background':'#3b5998'}

    $scope.btnfreonthecar = {'background':'#22407f'}
    $scope.sdatamessageonthecar_store = {'display':'block'}
     $scope.frequentlyusedonthecar = {'display':'block'}
     $scope.havedatamessageonthecar = {'display':'none'}
     $scope.sdatamessageonthecar = {'display':'none'}

     $scope.messageonthecar = {'display':'none'}

    angular.forEach($scope.headermessagedata, function (i) {
        //console.log(i)
            if (i.id == 60 ) {
                if ($scope.flagcheck == 1) {
              $scope.headersmessage = i.topic_en;
            }
            else if ($scope.flagcheck == 2) {
                $scope.headersmessage = i.topic_th;
            }
            else if ($scope.flagcheck == 3) {
                $scope.headersmessage = i.topic_cn;
            }
        }  
        
    });
    
}
$scope.btnMessageonthecardrivermodal = function(){
    $scope.btnfreonthecar = {'background':'#3b5998'}

    $scope.btnchatonthecar = {'background':'#22407f'}
    $scope.sdatamessageonthecar_store = {'display':'none'}
     $scope.frequentlyusedonthecar = {'display':'none'}
     $scope.havedatamessageonthecar = {'display':'none'}


     $scope.sdatamessageonthecar = {'display':'block'}
     $scope.messageonthecar = {'display':'block'}

}
$scope.selectmessageonthecar_store = function(message){
        $scope.messagedriver = message.id;
        $scope.havedatamessageonthecar = {'display':'block'}
         $scope.SELmessage_store_id = message.id;

        if ($scope.flagcheck == 1) {
           $scope.SELmessage_store = message.topic_en;
        }
        else if ($scope.flagcheck == 2) {
            $scope.SELmessage_store = message.topic_th;
        }
        else if ($scope.flagcheck == 3) {
            $scope.SELmessage_store = message.topic_cn;
        }
    }


/****************************************************/
/**************** ON THE CAR TOOP********************/
/****************************************************/

$scope.onthecaropmodal = function(){
     $http({
                  method : 'POST',
                  url : "php/message_data_store.php",
                 data: $.param({type:60}),
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){                  
                  console.log(res)
                  $scope.messagedataStore = res;
                  //console.log($scope.VCIDALL)
                

                  
                   
                });
    $scope.messageonthecar_toop = {'display':'none'};
    $scope.btnfreonthecar_toop = {'background':'#22407f'}

    $scope.btnchatonthecar_toop = {'background':'#3b5998'}
      $scope.havedatamessageonthecar_toop = {'display':'none'};
      $scope.sdatamessageonthecar_toop = { 'display':'none'};

      //$scope.sdatamessage = {'display':'block'}
      $scope.frequentlyusedonthecar_toop = { 'display':'block'};
      $scope.sdatamessageonthecar_store_toop = {'display':'block'}
    
}
$scope.btnonthecaropmodal = function(){
    $scope.btnchatonthecar_toop = {'background':'#3b5998'}

    $scope.btnfreonthecar_toop = {'background':'#22407f'}
    $scope.sdatamessageonthecar_store_toop = {'display':'block'}
     $scope.frequentlyusedonthecar_toop = {'display':'block'}
     $scope.havedatamessageonthecar_toop = {'display':'none'}
     $scope.sdatamessageonthecar_toop = {'display':'none'}

     $scope.messageonthecar_toop = {'display':'none'}

    angular.forEach($scope.headermessagedata, function (i) {
        //console.log(i)
            if (i.id == 60 ) {
                if ($scope.flagcheck == 1) {
              $scope.headersmessage = i.topic_en;
            }
            else if ($scope.flagcheck == 2) {
                $scope.headersmessage = i.topic_th;
            }
            else if ($scope.flagcheck == 3) {
                $scope.headersmessage = i.topic_cn;
            }
        }  
        
    });
    
}
$scope.btnMessageonthecaropmodal = function(){
    $scope.btnfreonthecar_toop = {'background':'#3b5998'}

    $scope.btnchatonthecar_toop = {'background':'#22407f'}
    $scope.sdatamessageonthecar_store_toop = {'display':'none'}
     $scope.frequentlyusedonthecar_toop = {'display':'none'}
     $scope.havedatamessageonthecar_toop = {'display':'none'}


     $scope.sdatamessageonthecar_toop = {'display':'block'}
     $scope.messageonthecar_toop = {'display':'block'}

}
$scope.selectmessageonthecar_store_toop = function(message){
        $scope.messageop = message.id;
        $scope.havedatamessageonthecar_toop = {'display':'block'}
         $scope.SELmessage_store_id = message.id;

        if ($scope.flagcheck == 1) {
           $scope.SELmessage_store = message.topic_en;
        }
        else if ($scope.flagcheck == 2) {
            $scope.SELmessage_store = message.topic_th;
        }
        else if ($scope.flagcheck == 3) {
            $scope.SELmessage_store = message.topic_cn;
        }
    }
/****************************************************/
/***********************LOST*************************/
/****************************************************/

$scope.lostdrivermodal = function(){
    $scope.btnchatlost = {'background':'#3b5998'}

    $scope.btnfrelost = {'background':'#22407f'}
    $scope.messagelost = {'display':'none'};
      $scope.havedatamessagelost = {'display':'none'};
      //$scope.sdatamessagelost = { 'display':'block'};

      $scope.sdatamessagelost_store = {'display':'block'}
      $scope.frequentlyusedlost = { 'display':'block'};
      //$scope.sdatamessage_store = {'display':'block'}
      $http({
                  method : 'POST',
                  url : "php/message_data_store.php",
                 data: $.param({type:69}),
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){                  
                  console.log(res)
                  $scope.messagedataStore = res;
                  //console.log($scope.VCIDALL)
                

                  
                   
                });
    
}
$scope.btnlostdrivermodal = function(){
    $scope.btnchatlost = {'background':'#3b5998'}

    $scope.btnfrelost = {'background':'#22407f'}
    $scope.sdatamessagelost_store = {'display':'block'}
     $scope.frequentlyusedlost = {'display':'block'}
     $scope.havedatamessagelost = {'display':'none'}
     $scope.sdatamessagelost = {'display':'none'}

     $scope.messagelost = {'display':'none'}

    angular.forEach($scope.headermessagedata, function (i) {
        //console.log(i)
            if (i.id == 69 ) {
                if ($scope.flagcheck == 1) {
              $scope.headersmessage = i.topic_en;
            }
            else if ($scope.flagcheck == 2) {
                $scope.headersmessage = i.topic_th;
            }
            else if ($scope.flagcheck == 3) {
                $scope.headersmessage = i.topic_cn;
            }
        }  
        
    });
    
}
$scope.btnMessagelostdrivermodal = function(){
    $scope.btnchatlost = {'background':'#22407f'}

    $scope.btnfrelost = {'background':'#3b5998'}
    $scope.sdatamessagelost_store = {'display':'none'}
     $scope.frequentlyusedlost = {'display':'none'}
     $scope.havedatamessagelost = {'display':'none'}


     $scope.sdatamessagelost = {'display':'block'}
     $scope.messagelost = {'display':'block'}

}
$scope.selectmessagelost_store = function(message){
        $scope.messagedriver = message.id;
        $scope.havedatamessagelost = {'display':'block'}
         $scope.SELmessage_store_id = message.id;

        if ($scope.flagcheck == 1) {
           $scope.SELmessage_store = message.topic_en;
        }
        else if ($scope.flagcheck == 2) {
            $scope.SELmessage_store = message.topic_th;
        }
        else if ($scope.flagcheck == 3) {
            $scope.SELmessage_store = message.topic_cn;
        }
    }
/****************************************************/
/***********************LOST TO OP*******************/
/****************************************************/

$scope.lostopmodal = function(){
    $scope.btnchatlost_toop = {'background':'#3b5998'}
    $scope.btnfrelost_toop = {'background':'#22407f'}
    $scope.messagelost_toop = {'display':'none'};
      $scope.havedatamessagelost_toop = {'display':'none'};
      $scope.sdatamessagelost_toop = { 'display':'none'};

      $scope.sdatamessagelost_store_toop = {'display':'block'}
      $scope.frequentlyusedlost_toop = { 'display':'block'};
      //$scope.sdatamessage_store = {'display':'block'}
      $http({
                  method : 'POST',
                  url : "php/message_data_store.php",
                 data: $.param({type:69}),
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){                  
                  console.log(res)
                  $scope.messagedataStore = res;
                  //console.log($scope.VCIDALL)
                

                  
                   
                });
    
}
$scope.btnlostopmodal = function(){
    $scope.btnchatlost_toop = {'background':'#3b5998'}

    $scope.btnfrelost_toop = {'background':'#22407f'}
    $scope.sdatamessagelost_store_toop = {'display':'block'}
     $scope.frequentlyusedlost_toop = {'display':'block'}
     $scope.havedatamessagelost_toop = {'display':'none'}
     $scope.sdatamessagelost_toop = {'display':'none'}

     $scope.messagelost_toop = {'display':'none'}

    angular.forEach($scope.headermessagedata, function (i) {
        //console.log(i)
            if (i.id == 69 ) {
                if ($scope.flagcheck == 1) {
              $scope.headersmessage = i.topic_en;
            }
            else if ($scope.flagcheck == 2) {
                $scope.headersmessage = i.topic_th;
            }
            else if ($scope.flagcheck == 3) {
                $scope.headersmessage = i.topic_cn;
            }
        }  
        
    });
    
}
$scope.btnMessagelostopmodal = function(){
    $scope.btnchatlost_toop = {'background':'#22407f'}

    $scope.btnfrelost_toop = {'background':'#3b5998'}
    $scope.sdatamessagelost_store_toop = {'display':'none'}
     $scope.frequentlyusedlost_toop = {'display':'none'}
     $scope.havedatamessagelost_toop = {'display':'none'}


     $scope.sdatamessagelost_toop = {'display':'block'}
     $scope.messagelost_toop = {'display':'block'}

}
$scope.selectmessagelost_store_toop = function(message){
        $scope.messageop = message.id;
        $scope.havedatamessagelost_toop = {'display':'block'}
         $scope.SELmessage_store_id = message.id;

        if ($scope.flagcheck == 1) {
           $scope.SELmessage_store = message.topic_en;
        }
        else if ($scope.flagcheck == 2) {
            $scope.SELmessage_store = message.topic_th;
        }
        else if ($scope.flagcheck == 3) {
            $scope.SELmessage_store = message.topic_cn;
        }
    }

/****************************************************/
/**************** ON THE RESTAURANT******************/
/****************************************************/

$scope.restaurantdrivermodal = function(){
    $http({
                  method : 'POST',
                  url : "php/message_data_store.php",
                 data: $.param({type:70}),
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){                  
                  console.log(res)
                  $scope.messagedataStore = res;
                  //console.log($scope.VCIDALL)
                

                  
                   
                });
    $scope.btnfrerestaurant = {'background':'#22407f'}

    $scope.btnchatrestaurant = {'background':'#3b5998'}
    $scope.messagerestaurant = {'display':'none'};
      $scope.havedatamessagerestaurant = {'display':'none'};
      $scope.sdatamessagerestaurant = { 'display':'none'};

      //$scope.sdatamessage = {'display':'block'}
      $scope.frequentlyusedrestaurant = { 'display':'block'};
      $scope.sdatamessagerestaurant_store = {'display':'block'}
    
}
$scope.btnrestaurantdrivermodal = function(){
    $scope.btnfrerestaurant = {'background':'#22407f'}

    $scope.btnchatrestaurant = {'background':'#3b5998'}
    $scope.sdatamessagerestaurant_store = {'display':'block'}
     $scope.frequentlyusedrestaurant = {'display':'block'}
     $scope.havedatamessagerestaurant = {'display':'none'}
     $scope.sdatamessagerestaurant = {'display':'none'}

     $scope.messagerestaurant = {'display':'none'}

    angular.forEach($scope.headermessagedata, function (i) {
        //console.log(i)
            if (i.id == 70 ) {
                if ($scope.flagcheck == 1) {
              $scope.headersmessage = i.topic_en;
            }
            else if ($scope.flagcheck == 2) {
                $scope.headersmessage = i.topic_th;
            }
            else if ($scope.flagcheck == 3) {
                $scope.headersmessage = i.topic_cn;
            }
        }  
        
    });
    
}
$scope.btnMessagerestaurantdrivermodal = function(){
    $scope.btnfrerestaurant = {'background':'#3b5998'}

    $scope.btnchatrestaurant = {'background':'#22407f'}
    $scope.sdatamessagerestaurant_store = {'display':'none'}
     $scope.frequentlyusedrestaurant = {'display':'none'}
     $scope.havedatamessagerestaurant = {'display':'none'}


     $scope.sdatamessagerestaurant = {'display':'block'}
     $scope.messagerestaurant = {'display':'block'}

}
$scope.selectmessagerestaurant_store = function(message){
        $scope.messagedriver = message.id;
        $scope.havedatamessagerestaurant = {'display':'block'}
         $scope.SELmessage_store_id = message.id;

        if ($scope.flagcheck == 1) {
           $scope.SELmessage_store = message.topic_en;
        }
        else if ($scope.flagcheck == 2) {
            $scope.SELmessage_store = message.topic_th;
        }
        else if ($scope.flagcheck == 3) {
            $scope.SELmessage_store = message.topic_cn;
        }
}


/****************************************************/
/************** ON THE RESTAURANT TO OP *************/
/****************************************************/

$scope.restaurantopmodal = function(){
    $http({
                  method : 'POST',
                  url : "php/message_data_store.php",
                 data: $.param({type:70}),
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){                  
                  console.log(res)
                  $scope.messagedataStore = res;
                  //console.log($scope.VCIDALL)
                

                  
                   
                });
    $scope.btnfrerestaurant_toop = {'background':'#22407f'}

    $scope.btnchatrestaurant_toop = {'background':'#3b5998'}
    $scope.messagerestaurant_toop = {'display':'none'};
      $scope.havedatamessagerestaurant_toop = {'display':'none'};
      $scope.sdatamessagerestaurant_toop = { 'display':'none'};

      //$scope.sdatamessage = {'display':'block'}
      $scope.frequentlyusedrestaurant_toop = { 'display':'block'};
      $scope.sdatamessagerestaurant_store_toop = {'display':'block'}
    
}
$scope.btnrestaurantopmodal = function(){
    $scope.btnfrerestaurant_toop = {'background':'#22407f'}

    $scope.btnchatrestaurant_toop = {'background':'#3b5998'}
    $scope.sdatamessagerestaurant_store_toop = {'display':'block'}
     $scope.frequentlyusedrestaurant_toop = {'display':'block'}
     $scope.havedatamessagerestaurant_toop = {'display':'none'}
     $scope.sdatamessagerestaurant_toop = {'display':'none'}

     $scope.messagerestaurant_toop = {'display':'none'}

    angular.forEach($scope.headermessagedata, function (i) {
        //console.log(i)
            if (i.id == 70 ) {
                if ($scope.flagcheck == 1) {
              $scope.headersmessage = i.topic_en;
            }
            else if ($scope.flagcheck == 2) {
                $scope.headersmessage = i.topic_th;
            }
            else if ($scope.flagcheck == 3) {
                $scope.headersmessage = i.topic_cn;
            }
        }  
        
    });
    
}
$scope.btnMessagerestauranopmodal = function(){
    $scope.btnfrerestaurant_toop = {'background':'#3b5998'}

    $scope.btnchatrestaurant_toop = {'background':'#22407f'}
    $scope.sdatamessagerestaurant_store_toop = {'display':'none'}
     $scope.frequentlyusedrestaurant_toop = {'display':'none'}
     $scope.havedatamessagerestaurant_toop = {'display':'none'}


     $scope.sdatamessagerestaurant_toop = {'display':'block'}
     $scope.messagerestaurant_toop = {'display':'block'}

}
$scope.selectmessagerestaurant_store_toop = function(message){
        $scope.messageop = message.id;
        $scope.havedatamessagerestaurant_toop = {'display':'block'}
         $scope.SELmessage_store_id = message.id;

        if ($scope.flagcheck == 1) {
           $scope.SELmessage_store = message.topic_en;
        }
        else if ($scope.flagcheck == 2) {
            $scope.SELmessage_store = message.topic_th;
        }
        else if ($scope.flagcheck == 3) {
            $scope.SELmessage_store = message.topic_cn;
        }
}
/****************************************************/
/**************** ON THE ATTRACTION******************/
/****************************************************/

$scope.attractiondrivermodal = function(){
     $http({
                  method : 'POST',
                  url : "php/message_data_store.php",
                 data: $.param({type:71}),
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){                  
                  console.log(res)
                  $scope.messagedataStore = res;
                  //console.log($scope.VCIDALL)
                

                  
                   
                });
     $scope.btnchatattraction = {'background':'#3b5998'}

    $scope.btnfreattraction = {'background':'#22407f'}
    $scope.messageattraction = {'display':'none'};
      $scope.havedatamessageattraction = {'display':'none'};
      $scope.sdatamessageattraction = { 'display':'none'};

      $scope.sdatamessageattraction_store = {'display':'block'}
      $scope.frequentlyusedattraction = { 'display':'block'};
      $scope.sdatamessage_store = {'display':'none'}
    
}
$scope.btnattractiondrivermodal = function(){
    $scope.btnchatattraction = {'background':'#3b5998'}

    $scope.btnfreattraction = {'background':'#22407f'}
    $scope.sdatamessageattraction_store = {'display':'block'}
     $scope.frequentlyusedattraction = {'display':'block'}
     $scope.havedatamessageattraction = {'display':'none'}
     $scope.sdatamessageattraction = {'display':'none'}

     $scope.messageattraction = {'display':'none'}

    angular.forEach($scope.headermessagedata, function (i) {
        //console.log(i)
            if (i.id == 71 ) {
                if ($scope.flagcheck == 1) {
              $scope.headersmessage = i.topic_en;
            }
            else if ($scope.flagcheck == 2) {
                $scope.headersmessage = i.topic_th;
            }
            else if ($scope.flagcheck == 3) {
                $scope.headersmessage = i.topic_cn;
            }
        }  
        
    });
   
}
$scope.btnMessageattractiondrivermodal = function(){
    $scope.btnchatattraction = {'background':'#22407f'}

    $scope.btnfreattraction = {'background':'#3b5998'}
    $scope.sdatamessageattraction_store = {'display':'none'}
     $scope.frequentlyusedattraction = {'display':'none'}
     $scope.havedatamessageattraction = {'display':'none'}


     $scope.sdatamessageattraction = {'display':'block'}
     $scope.messageattraction = {'display':'block'}

}
$scope.selectmessageattraction_store = function(message){
        $scope.messagedriver = message.id;
        $scope.havedatamessageattraction = {'display':'block'}
        $scope.SELmessage_store_id = message.id;

        if ($scope.flagcheck == 1) {
           $scope.SELmessage_store = message.topic_en;
        }
        else if ($scope.flagcheck == 2) {
            $scope.SELmessage_store = message.topic_th;
        }
        else if ($scope.flagcheck == 3) {
            $scope.SELmessage_store = message.topic_cn;
        }
}
/****************************************************/
/*************** ON THE ATTRACTION TO OP ************/
/****************************************************/

$scope.attractionopmodal = function(){
     $http({
                  method : 'POST',
                  url : "php/message_data_store.php",
                 data: $.param({type:71}),
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){                  
                  console.log(res)
                  $scope.messagedataStore = res;
                });
    $scope.btnchatattraction_toop = {'background':'#3b5998'}
    $scope.btnfreattraction_toop = {'background':'#22407f'}
    $scope.messageattraction_toop = {'display':'none'};
    $scope.havedatamessageattraction_toop = {'display':'none'};
    $scope.sdatamessageattraction_toop = { 'display':'none'};
    $scope.sdatamessageattraction_store_toop = {'display':'block'}
    $scope.frequentlyusedattraction_toop = { 'display':'block'};
    $scope.sdatamessage_store_toop = {'display':'none'}
    
}
$scope.btnattractionopmodal = function(){
    $scope.btnchatattraction_toop = {'background':'#3b5998'}

    $scope.btnfreattraction_toop = {'background':'#22407f'}
    $scope.sdatamessageattraction_store_toop = {'display':'block'}
     $scope.frequentlyusedattraction_toop = {'display':'block'}
     $scope.havedatamessageattraction_toop = {'display':'none'}
     $scope.sdatamessageattraction_toop = {'display':'none'}

     $scope.messageattraction_toop = {'display':'none'}

    angular.forEach($scope.headermessagedata, function (i) {
        //console.log(i)
            if (i.id == 71 ) {
                if ($scope.flagcheck == 1) {
              $scope.headersmessage = i.topic_en;
            }
            else if ($scope.flagcheck == 2) {
                $scope.headersmessage = i.topic_th;
            }
            else if ($scope.flagcheck == 3) {
                $scope.headersmessage = i.topic_cn;
            }
        }  
        
    });
   
}
$scope.btnMessageattractionopmodal = function(){
    $scope.btnchatattraction_toop = {'background':'#22407f'}

    $scope.btnfreattraction_toop = {'background':'#3b5998'}
    $scope.sdatamessageattraction_store_toop = {'display':'none'}
     $scope.frequentlyusedattraction_toop = {'display':'none'}
     $scope.havedatamessageattraction_toop = {'display':'none'}


     $scope.sdatamessageattraction_toop = {'display':'block'}
     $scope.messageattraction_toop = {'display':'block'}

}
$scope.selectmessageattraction_store_toop = function(message){
        $scope.messageop = message.id;
        $scope.havedatamessageattraction_toop = {'display':'block'}
        $scope.SELmessage_store_id = message.id;

        if ($scope.flagcheck == 1) {
           $scope.SELmessage_store = message.topic_en;
        }
        else if ($scope.flagcheck == 2) {
            $scope.SELmessage_store = message.topic_th;
        }
        else if ($scope.flagcheck == 3) {
            $scope.SELmessage_store = message.topic_cn;
        }
}
function popupallchat(x){
    console.log(x)
    $scope.lenc = null;
    console.log($scope.ccstate)
    $scope.getallchat = [];
   $http({
                  method : 'POST',
                  url : "php/get_flight_fororderid.php",
                  data: $.param({vc: x}),
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){                  
                  console.log(res)
                  
                  $scope.blockhavephoto = {'display':'none'}
  
  //console.log(x)
  //console.log($scope.get_flight_all)
  //$scope.$scope.timeEnd.getH
  //getHours()
  var timeEnd = $scope.timeEnd.split(":");
  //console.log($scope.dateparture)
  angular.forEach(res, function (i) {
    if (x == i.voucher && i.state != 6) {
        if (i.state== '1' || i.state== '8' || i.state== '16' || i.state== '23') {
            // var setTimehoures = 24;
            // var setTimeminutes = 60;
            $scope.sumtime = i.flight_delay;
            var sumtime = $scope.sumtime.split(":");
            var hours = parseInt(sumtime[0]);
            var minutes = parseInt(sumtime[1]);

            var hours2 = parseInt(timeEnd[0]);
            var minutes2 = parseInt(timeEnd[1]);
            //console.log(minutes2)
            var finalhours = hours2 + hours;

            var finalminutes = minutes2 + minutes;
            //console.log(finalminutes)
             if (finalhours < 10) {

              $scope.finalhours  = '0'+finalhours; 
            }
            else{
             $scope.finalhours =  finalhours;
            }
            if (finalminutes < 10) {
                $scope.finalminutes = '0'+finalminutes;
            }
            else{
              $scope.finalminutes = finalminutes;
            }
           
            $scope.sumfinaltime = $scope.finalhours+':'+$scope.finalminutes;
            //console.log($scope.finalhours)
            //console.log($scope.finalminutes)
            //console.log($scope.sumfinaltime)
            i.finaltime = $scope.sumfinaltime;
        }
        else if (i.state== '4' || i.state== '7') {
            $scope.Incresumtime = i.flight_delay;
            var ncresumtime = $scope.Incresumtime.split(":");
            var ncrehours = parseInt(ncresumtime[0]);
            var ncreminutes = parseInt(ncresumtime[1]);

            var hours22 = parseInt(timeEnd[0]);
            var minutes22 = parseInt(timeEnd[1]);
            //console.log(minutes22)
             var ncrefinalhours = hours22 - ncrehours;

             var ncrefinalminutes = minutes22 - ncreminutes;
             //console.log(hours22)
             //console.log(minutes22)
             //console.log(ncrehours)
             //console.log(ncreminutes)
             //console.log("*******************")

             //console.log(ncrefinalhours)
             //console.log(ncrefinalminutes)
             if (ncrefinalminutes < 0 ) {
                
                //ncrefinalminutes = 60 +(ncrefinalminutes)
                hours22 -= 1;
                $scope.ncrefinalhours = hours22;
                ncrefinalminutes = 60 +(ncrefinalminutes);
                $scope.ncrefinalminutes =  ncrefinalminutes
             }
             else if(ncrefinalminutes > 0 ){
                $scope.ncrefinalhours = ncrefinalhours;
                $scope.ncrefinalminutes = ncrefinalminutes;

             }
             if (ncrefinalhours < 0) {
                hours22 = 24+(hours22);
                $scope.ncrefinalhours = hours22;
                $scope.ncrefinalminutes = ncrefinalminutes;
             }
             else if(ncrefinalhours > 0){
                $scope.ncrefinalhours = ncrefinalhours;
                if (ncrefinalminutes < 10) {
                  $scope.ncrefinalminutes = '0'+ncrefinalminutes;
                }
                else{
                    $scope.ncrefinalminutes = ncrefinalminutes;
                }
                
             }
             //console.log($scope.ncrefinalminutes = hours22 +':' +ncrefinalminutes)
            // console.log(finalminutes)
            //  if (finalhours < 10) {

            //   $scope.finalhours  = '0'+finalhours; 
            // }
            // else{
            //  $scope.finalhours =  finalhours;
            // }
            // if (finalminutes < 10) {
            //     $scope.finalminutes = '0'+finalminutes;
            // }
            // else{
            //   $scope.finalminutes = finalminutes;
            // }
           
            $scope.sumncrefinaltime = $scope.ncrefinalhours+':'+$scope.ncrefinalminutes;
            //console.log($scope.ncrefinalhours)
            //console.log($scope.ncrefinalminutes)
            //console.log($scope.sumncrefinaltime)
            i.ncrefinaltime = $scope.sumncrefinaltime;
          
        }
        
            
              $scope.getallchat.push(i);
              
           
            
      }
  });
    var lenc = 0;
    lenc = $scope.getallchat.length * 135;
    $scope.lenc = lenc;
    console.log(lenc)
    
   // if ($scope.ccstate == 6) {
        //console.log($scope.getallchat[lenc-1].id)
      //$location.hash('menudriver'+$scope.getallchat[lenc-1].id);
      //$location.hash('hiddentory');
      $scope.scrollID = $scope.getallchat[$scope.getallchat.length-1].id
      console.log($scope.scrollID)
      //var cc = location.hash;
      $('#history').animate({scrollTop: $scope.lenc}, 3000);
    //angular.element(document.querySelector('#history')).css('top','1px');
    //$('#history').css('bottom','0');
    //$('#history').scrollTop($(document).height());
    //$('#history').animate({scrollTop:$('#history').height()}, 'slow');
    //$('#history').scrollTop($scope.lenc);
      //console.log(cc)
       //$("#history").animate({scrollTop: $(location).offset().top}, "slow");
      //$location.hash('historylast');






    //}
    
           //).offset().top        
                  
                   
});
  
  
   
}
$scope.cancelpopupallchat = function(){
    $scope.stylepopupallchat = {'display':'none'}
     $scope.popupdriverinfo = {'display':'block'}
}
//***********************all chat service*************************/
$scope.openpopupdriverOP = function(x){
    $scope.ccstate = 6;
    $scope.timeEnd = x.airout_h +':'+ x.airout_m;//new Date(x.TB_order_outdate +' '+ x.airout_h +':'+ x.airout_m)
  $scope.dateparture = x.TB_order_outdate;
  //console.log($scope.timeEnd)
    $scope.VCID = x.TB_order_order;
    $scope.vdIDclickinfo = x.TB_order_order;
    //console.log($scope.vdIDclickinfo)
    $scope.VOUCHER = x.TB_order_order;
   $scope.idTypemessage = 4; //  customer To callcenter
    //$scope.sbody = {'overflow':'hidden'};
    $scope.sbody = { 'overflow-y':'hidden'};
    //$scope.id_popupdelay = {'display':'none'};
    $scope.popupdriverOP = { 'display':'block'};
    $scope.vdIDclickinfo = x.TB_order_order;
    $scope.VOUCHER = x.TB_order_order;
    $scope.TB_order_ondate = x.TB_order_ondate;
    $scope.TB_order_air = x.TB_order_air;
    $scope.TB_order_air_time = x.TB_order_air_time;
    $scope.checkarea = x.area;
    console.log($scope.vdIDclickinfo)
    console.log($scope.checkarea)
    console.log($scope.TB_order_ondate)
    console.log($scope.TB_order_air)
    console.log($scope.TB_order_air_time)
    $http({
                  method : 'POST',
                  url : "php/message_data.php",
                 data: $.param({type: 2}),
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){                  
                  console.log(res)
                  $scope.headermessagedata_toop = res;
                   $scope.messagedata_toop = res;
                  //console.log($scope.VCIDALL)
                
                  
                   
    });
    if (x.datessnew == 1) {
        $('#voucherpass').modal('show');
    }
    //popupallchatservice($scope.vdIDclickinfo)
}
$scope.cancelpopupallchatservice = function(){
    $scope.stylepopupallchatservice = {'display':'none'}
     $scope.popupdriverOP = {'display':'block'}
}
$scope.openpopuptoservive =function(){
  $scope.popupdriverinfo = {'display':'none'}
          $scope.stylepopupallchatservice = {'display':'block'}
}
$scope.popup_goto_beforefirst_toop = function(x){
    //$scope.ccstate = 6;
    $scope.VCID = x;
    //$scope.popupdriverOP = {'display':'none'};
    //$scope.id_popupbefore_toop = { 'display':'block'};
    $scope.timedelay2 = { 'display':''};
    //popupallchatservice($scope.VCID)
}
$scope.popup_goto_delayfirst_toop = function(x){
    //$scope.ccstate = 7;
    $scope.VCID = x;
    //$scope.popupdriverOP = {'display':'none'};
    //$scope.id_popupdelay_toop = { 'display':'block'};
    $scope.timedelay = { 'display':''};
    //popupallchatservice($scope.VCID)

}
$scope.popup_goto_waitfirst_toop = function(x){
    $scope.blockhavephoto_toop = {'display':'none'};

    //$scope.ccstate = 8;
    $scope.VCID = x;
    angular.element(document.querySelector('#blah3')).css('display','none');
    angular.element(document.querySelector('#blah4')).css('display','none');
    //$scope.popupdriverinfo = {'display':'none'};
    //$scope.id_popupwait_toop = { 'display':'block'};
    //$scope.popupdriverOP = { 'display':'none'};
   // $scope.blockhavephoto_toop = { 'display':'none'};

    $scope.takepictures_toop = { 'display':'block'};
    //popupallchatservice($scope.VCID)


}
$scope.popup_goto_callcenterchat = function(x){
    //$scope.ccstate = 9;
    $scope.VCID = x;
    //$scope.confirmcommenttocallcenter = {'display':'none'};
    //$scope.popupdriverOP = {'display':'none'};
    $scope.havedatamessage_toop = {'display':'none'};

    //$scope.id_popupcallcenterchat = { 'display':'block'};
    //popupallchatservice($scope.VCID)
    $scope.message_toop = {'display':'none'};
    $scope.frequentlyused_toop = { 'display':'block'};
    //$scope.pictureyourself = { 'display':''};
}
 $scope.cancelid_popupdelay_toop = function(){
        $scope.id_popupdelay_toop = { 'display':'none'};
        $scope.popupdriverOP = { 'display':'block'};
    }
    $scope.cancelid_popupbefore_toop = function(){
        $scope.id_popupbefore_toop = { 'display':'none'};
        $scope.popupdriverOP = { 'display':'block'};
    }
$scope.getallchatservice = [];
 function popupallchatservice(x){
     $http({
                  method : 'POST',
                  url : "php/get_flight_fororderid.php",
                  data: $.param({vc: x}),
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){                  
                  console.log(res)
                  //$scope.get_flight_all = res;
                  console.log(x)
  $scope.historywaittoop = {'display':'block'}
  //$scope.blockhavephoto_toop = {'display':'block'}

  $scope.getallchatservice = [];


  //$scope.getallchat = [];

  
  console.log(x)
  console.log($scope.get_flight_all)
  //$scope.$scope.timeEnd.getH
  //getHours()
  var timeEnd = $scope.timeEnd.split(":");
  console.log($scope.dateparture)
  angular.forEach(res, function (i) {
    if (x == i.voucher && i.state != 6 ) {
    if (i.state== '1' || i.state== '8' || i.state== '16' || i.state== '23') {
        // var setTimehoures = 24;
        // var setTimeminutes = 60;
        $scope.sumtime = i.flight_delay;
        var sumtime = $scope.sumtime.split(":");
        var hours = parseInt(sumtime[0]);
        var minutes = parseInt(sumtime[1]);

        var hours2 = parseInt(timeEnd[0]);
        var minutes2 = parseInt(timeEnd[1]);
        console.log(minutes2)
        var finalhours = hours2 + hours;

        var finalminutes = minutes2 + minutes;
        console.log(finalminutes)
         if (finalhours < 10) {

          $scope.finalhours  = '0'+finalhours; 
        }
        else{
         $scope.finalhours =  finalhours;
        }
        if (finalminutes < 10) {
            $scope.finalminutes = '0'+finalminutes;
        }
        else{
          $scope.finalminutes = finalminutes;
        }
       
        $scope.sumfinaltime = $scope.finalhours+':'+$scope.finalminutes;
        console.log($scope.finalhours)
        console.log($scope.finalminutes)
        console.log($scope.sumfinaltime)
        i.finaltime = $scope.sumfinaltime;
    }
    else if (i.state== '4' || i.state== '7') {
        $scope.Incresumtime = i.flight_delay;
        var ncresumtime = $scope.Incresumtime.split(":");
        var ncrehours = parseInt(ncresumtime[0]);
        var ncreminutes = parseInt(ncresumtime[1]);

        var hours22 = parseInt(timeEnd[0]);
        var minutes22 = parseInt(timeEnd[1]);
        //console.log(minutes22)
         var ncrefinalhours = hours22 - ncrehours;

         var ncrefinalminutes = minutes22 - ncreminutes;
         // console.log(hours22)
         // console.log(minutes22)
         // console.log(ncrehours)
         // console.log(ncreminutes)
         // console.log("*******************")

         // console.log(ncrefinalhours)
         // console.log(ncrefinalminutes)
         if (ncrefinalminutes < 0 ) {
            
            //ncrefinalminutes = 60 +(ncrefinalminutes)
            hours22 -= 1;
            $scope.ncrefinalhours = hours22;
            ncrefinalminutes = 60 +(ncrefinalminutes);
            $scope.ncrefinalminutes =  ncrefinalminutes
         }
         else if(ncrefinalminutes > 0 ){
            $scope.ncrefinalhours = ncrefinalhours;
            $scope.ncrefinalminutes = ncrefinalminutes;

         }
         if (ncrefinalhours < 0) {
            hours22 = 24+(hours22);
            $scope.ncrefinalhours = hours22;
            $scope.ncrefinalminutes = ncrefinalminutes;
         }
         else if(ncrefinalhours > 0){
            $scope.ncrefinalhours = ncrefinalhours;
            if (ncrefinalminutes < 10) {
              $scope.ncrefinalminutes = '0'+ncrefinalminutes;
            }
            else{
                $scope.ncrefinalminutes = ncrefinalminutes;
            }
            
         }
         //console.log($scope.ncrefinalminutes = hours22 +':' +ncrefinalminutes)
        // console.log(finalminutes)
        //  if (finalhours < 10) {

        //   $scope.finalhours  = '0'+finalhours; 
        // }
        // else{
        //  $scope.finalhours =  finalhours;
        // }
        // if (finalminutes < 10) {
        //     $scope.finalminutes = '0'+finalminutes;
        // }
        // else{
        //   $scope.finalminutes = finalminutes;
        // }
       
        $scope.sumncrefinaltime = $scope.ncrefinalhours+':'+$scope.ncrefinalminutes;
        // console.log($scope.ncrefinalhours)
        // console.log($scope.ncrefinalminutes)
        // console.log($scope.sumncrefinaltime)
        i.ncrefinaltime = $scope.sumncrefinaltime;
      
    }
    
       
          $scope.getallchatservice.push(i);
          
        
        
      }
  });
    //console.log($scope.get_flight_all)
    angular.forEach($scope.get_flight_all, function (i) {
     

  });
    // var lenc = $scope.getallchatservice.length;
    // if ($scope.ccstate == 6) {
    //   $location.hash('anchorbeforetoop' + $scope.getallchatservice[lenc-1].id);
    // }
    // if ($scope.ccstate == 7) {
    //   $location.hash('anchordelaytoop' + $scope.getallchatservice[lenc-1].id);
    // }
    // if ($scope.ccstate == 8) {
    //   $location.hash('anchorwaittoop' + $scope.getallchatservice[lenc-1].id);
    // }
    // if ($scope.ccstate == 9) {
    //   $location.hash('anchorchattoop' + $scope.getallchatservice[lenc-1].id);
    // }
    // if ($scope.ccstate == 10) {
    //   $location.hash('anchormenuop' + $scope.getallchatservice[lenc-1].id);

    //   //$location.hash('anchoralldriver' + $scope.getallchatservice[lenc-1].id);
    // }
  
              });
  
   
}
/****************************popup my info*************************/
$scope.cancelstylepoupmyinfo = function(){
   $scope.stylepoupmyinfo = {'display':'none'};
}
$scope.myinfo = function(x){
  //console.log(x.TB_order_order)
          $scope.VOUCHER = x.TB_order_order;
          //localStorage.setItem('item',JSON.stringify(x.TB_order_order));
           
               
          callvoucher($scope.VOUCHER);
  $scope.stylepoupmyinfo = {'display':'block'};
  if (x.datessnew == 1) {
    $('#voucherpass').modal('show');
  }
}
$scope.cancelpopupallchatservice = function(){
    $scope.stylepopupallchatservice = {'display':'none'}
     $scope.popupdriverinfo = {'display':'block'}
}
$scope.datachekcost = [];
$scope.openpopupdriverservice = function(x){
   $scope.vdIDclickinfo = x.TB_order_order;
   console.log(x)

    $scope.state1 = []; 
  $scope.state2 = [];
  $scope.state3 = [];
  $scope.state4 = [];
  $scope.state5 = [];
  $scope.state6 = [];
   $scope.checkstate6 = null;
   if (x.datessnew == 1) {
    $('#voucherpass').modal('show');
  }
   
    //console.log($scope.get_flight_all)
    angular.forEach($scope.get_flight_all, function(vcget){ 
      
      if ($scope.vdIDclickinfo == vcget.voucher) {
        console.log(vcget.voucher)
        if (vcget.state == 1) {
            $scope.state1.push(vcget)
        }
        else if (vcget.state == 2) {
            $scope.state2.push(vcget)            
        }
        else if (vcget.state == 3) {
            $scope.state3.push(vcget)
        }
        else if (vcget.state == 4) {
            $scope.state4.push(vcget)
        }
        else if (vcget.state == 5) {
            $scope.state5.push(vcget)
        }
        else if (vcget.state == 6) {
            $scope.state6.push(vcget)
            console.log(vcget) 
        }


      }
                  
    });
    //console.log($scope.state6)
if($scope.state6 == undefined || $scope.state6 == null || $scope.state6.length == 0){
  //console.log($scope.state6[0].status_confirm)
  $scope.popupdriverservice = { 'display':'block'};
}
else if($scope.state6 != undefined || $scope.state6 != null || $scope.state6.length != 0){


  if ($scope.state6[0].status_confirm == 0 || $scope.state6[0].status_confirm == undefined) {
    $scope.popupdriverservice = { 'display':'block'};
  }
  else{
    $scope.popupdriverservice = { 'display':'block'};
  }
}

  $scope.datachekcost = [];
  
    $scope.vdIDclickinfo = x.TB_order_order;    
    

    $scope.datachekcost.push(x);
}
$scope.getaddservice = function(){
    $scope.popupdriverservice = { 'display':'none'};
}
/***************************************************  */  
/******************* New-angular-KM ***************  */  
/***************************************************  */  
$scope.doubleClick = function(){
    //alert("doubleClick")
    //goFullscreen();
    if (Fullscreen.isEnabled()){
                 Fullscreen.cancel();
    }
    else{
                 Fullscreen.all();
        }
         $scope.isFullScreen = false;
}
$scope.deleteimage = function(){

    $scope.historywaittoop = {'display':'block'};
    $scope.newtakephoto_toop = {'display':'block'};    
    $scope.historywaittodriver = {'display':'block'};
    $scope.newtakephoto = {'display':'block'};
    $scope.blockhavephoto_toop = {'display':'none'};
    $scope.blockhavephoto = {'display':'none'};
    $scope.newtakephoto2 = {'display':'block'};
    $scope.newtakephoto2_toop = {'display':'block'};
    angular.element(document.querySelector('.box-mobal2')).css('top','5%')
    angular.element(document.querySelector('#blah')).css('display','none');
    angular.element(document.querySelector('#blah2')).css('display','none');
    angular.element(document.querySelector('#blah3')).css('display','none');
    angular.element(document.querySelector('#blah4')).css('display','none');
    //document.getElementById('blah2').src = "";
          //document.getElementById('blah').src = "";
}
$scope.takepicturesfun = function(){
        console.log($scope.files);
        
        //$scope.load = { 'display':'block'};
        $scope.blockhavephoto = {'display':'none'};
        $scope.blockhavephoto_toop = {'display':'none'};
        $scope.newtakephoto = {'display':'block'};
        $scope.newtakephoto_toop = {'display':'block'};
        $scope.newtakephoto2 = {'display':'block'};
        $scope.newtakephoto2_toop = {'display':'block'};
        //angular.element(document.querySelector('.box-mobal26')).css('margin-top','50%')

        //angular.element(document.querySelector('#blah')).css("display","none");
        angular.element(document.querySelector('#blah2')).css("display","none");
        //angular.element(document.querySelector('#blah3')).css("display","none");
        angular.element(document.querySelector('#blah4')).css("display","none");
        var imgg =  angular.element(document.querySelector('#fileToUpload')).val();
        console.log(imgg)
       // var interval3 =  $interval(function() {
                                           
         

        if ($scope.files == undefined) {
            console.log("in case null")
            //$interval.cancel(interval3)
            $scope.load = { 'display':'none'};
            angular.element(document.querySelector('.nophoto')).css("display","block");
            angular.element(document.querySelector('.nophoto')).css("display","block");
            if ($scope.flagcheck == 1) {
              $scope.nophoto = "No photo";  
            }
            else if ($scope.flagcheck == 2) {
              $scope.nophoto = "ยังไม่มีรูปภาพ";  
            }
            else if ($scope.flagcheck == 3) {
              $scope.nophoto = "没有照片";  
            }
            
        }

        else if ($scope.files != undefined){
            console.log("!!in case null")
            $scope.spintake11 = { 'display':'block'};
            $scope.spintake22 = { 'display':'block'};

            // $scope.blockhavephoto = { 'display':'none'};
            // $scope.blockhavephoto2 = { 'display':'none'};
            $scope.backinformdriverimage =  { 'display':'block'};
            $scope.backinformdriver =  { 'display':'none'};
            angular.element(document.querySelector('.nophoto')).css("display","none");
            angular.element(document.querySelector('.nophoto2')).css("display","none");
            var form_data = new FormData();
        console.log($scope.files);
        console.log(form_data)  
           angular.forEach($scope.files, function(file){  
                form_data.append('file', file);
                //form_data.append('fonder', $scope.VOUCHER);   
           }); 
           console.log(form_data) 
           $http.post('php/uploadimage.php', form_data,  
           {  
                transformRequest: angular.identity,  
                headers: {'Content-Type': undefined,'Process-Data': false}  
           }).success(function(response){
                //console.log(response)
               //$scope.newtakephoto = { 'display':'block'};
                //$scope.pictureenvironment = { 'display':'block'};
                //console.log(response)
                //var nameim = response.split('.');
                $scope.nameim = response.new_name;
                console.log($scope.nameim);
                $scope.srtore = $scope.nameim;
                $scope.load = { 'display':'none'};
        $scope.blockhavephoto_toop = {'display':'none'};

                $scope.blockhavephoto = { 'display':'none'};
                $scope.takepictures = { 'display':'none'};
                $scope.pictureenvironment = { 'display':'none'}; // take your environment
                $scope.pictureyourself = { 'display':'block'};
                $scope.takepictures_toop = { 'display':'none'};
                $scope.pictureenvironment_toop = { 'display':'none'}; // take your environment
                $scope.pictureyourself_toop = { 'display':'block'};
                $scope.files = undefined;
                 $scope.spintake11 = { 'display':'none'};
            $scope.spintake22 = { 'display':'none'};

                
                
                
                
                
            });
        }
 
         //$scope.newtakephoto = { 'visibility':'hidden'};
          //angular.element(document.querySelector('.fileUpload')).css('display','none')
         //$scope.pictureyourself = { 'display':'none'};
        //$scope.delayconfirm = { 'display':'block'};

        }
       
    $scope.confirm_sendmaildelay = function(x,VC){
        //console.log($scope.latituderel)
                                    //console.log($scope.longituderel)
          
       // console.log(x)
        //console.log(VC)
        $scope.sendVCID = VC;
        
        //console.log($scope.srtore)
        
               if (x == 1) { //delay
                    //$scope.voucherselect = null;
                    $scope.stylecheckinclickdelay = { 'display':'block'};
                    $scope.stylecheckin = { 'display':'none'};


                    //$scope.load = { 'display':'block'};
                    $scope.nameim = "";
                   
                    $scope.timerequest = $scope.selectnum + ':'+ $scope.selectnum2;
                    $scope.cdelay_or_not = x;
                    
                    console.log($scope.timerequest)
                    console.log($scope.orderid)
                     $scope.comfrom1 = "customer";
                    $scope.date_flight_delay = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    console.log($scope.date_flight_delay)
                    $http({
                        method : 'POST',
                        url : "php/add_data.php",
                        data: $.param({orderid: $scope.data,
                            fdelay: $scope.timerequest,
                            fdate: $scope.date_flight_delay,
                            g_topoint_date: $scope.HHmmss,
                            voucher: $scope.sendVCID,
                            nameim: $scope.nameim,
                            state: $scope.cdelay_or_not,
                            from: $scope.comfrom1,
                             lag: $scope.latituderel,
                            long: $scope.longituderel
                           
                             

                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            
                             $http({
                                  method : 'POST',
                                  url : "php/get_flight_fororderid.php",
                                  data: $.param({vc: VC}),
                                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                }).success(function(res){                  
                                    console.log(res)
                                    $scope.poupradio = { 'display':'none'};
                                    $scope.stylecheckinclickdelay = { 'display':'none'};
                                      $scope.id_popupdelay = { 'display':'block'};
                                      $scope.figdelaydriver = { 'display':'block'};
                                      $scope.stylehour = { 'display':'block'};
                                      $scope.styleminutes = { 'display':'block'};


                                    $scope.get_flight_all = res;
                                    angular.forEach($scope.get_flight_all, function (i) {
                                     if (i.voucher == $scope.sendVCID) {
                                        if (i.state == 1 || i.state == 2 || i.state == 3 || i.state == 4 || i.state == 5 || i.state == 7 || i.state == 8 || i.state == 9 || i.state == 10 || i.state == 11 || i.state == 12 || i.state == 13 || i.state == 14 || i.state == 15) {
                                          $scope.getallchat.push(i);
                                        }
                                      }
                                    });
                                    var lenc = $scope.getallchat.length;
                                    //console.log($scope.getallchat.length-1)
                                    $location.hash('anchordelay' + $scope.getallchat[lenc-1].id);
                                });
                            
                    });
              

                
                }
                else if (x == 2){
                    $scope.spintakechattodriver = { 'display':'block'};
                    $scope.nameim = "";
                    $scope.cdelay_or_not = x;
                    console.log("not delay")
                    $scope.timerequest = "";
                    $scope.comfrom2 = "customer";
                    console.log($scope.timerequest)
                    console.log($scope.orderid)
                    $scope.date_flight_delay = "";
                    $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    console.log($scope.date_flight_delay)
                    console.log($scope.comdriver)
                    $http({
                        method : 'POST',
                        url : "php/add_data.php",
                        data: $.param({orderid: $scope.data,
                            fdelay: $scope.timerequest,
                            fdate: $scope.date_flight_delay,
                            g_topoint_date: $scope.HHmmss,
                            voucher: VC,
                            nameim: $scope.nameim,
                            state: $scope.cdelay_or_not,
                            from:  $scope.comfrom2,
                            comment: $scope.comdriver,
                            lag: $scope.latituderel,
                            long: $scope.longituderel

                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            $http({
                                  method : 'POST',
                                  url : "php/get_flight_fororderid.php",
                                  data: $.param({vc: VC}),
                                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                }).success(function(res){                  
                                    console.log(res)
                                    $scope.getallchat = [];
                                    $scope.get_flight_all = res;
                                    $scope.comdriver = "";
                                    $scope.scommentTodriver = { 'display':'none'};
                                    $scope.message = { 'display':'none'};
                                    $scope.id_popupdiverchat = { 'display':'block'};
                                    $scope.confirmcommenttoderiver = { 'display':'none'};
                                    $scope.spintakechattodriver = { 'display':'none'};

                                    angular.forEach($scope.get_flight_all, function (i) {
                                     if (i.voucher == $scope.sendVCID) {
                                        if (i.state == 1 || i.state == 2 || i.state == 3 || i.state == 4 || i.state == 5 || i.state == 7 || i.state == 8 || i.state == 9 || i.state == 10 || i.state == 11 || i.state == 12 || i.state == 13 || i.state == 14 || i.state == 15) {
                                          $scope.getallchat.push(i);
                                          
                                        }
                                        
                                      }
                                    });
                                    var lenc = $scope.getallchat.length;
                                            //console.log($scope.getallchat.length-1)
                                            $location.hash('anchorchat' + $scope.getallchat[lenc-1].id);
                                });
                           
                    });
                  
                    
                }
                else if(x == 3 ){ ///takepictures
                    $scope.spintake = {'display':'block'};
                    //$scope.spinsendphoto = {'display':'none'};
                    $scope.blockhavephoto = {'display':'none'};
                  //$scope.load = { 'display':'block'};
                          var form_data = new FormData();
                        console.log($scope.files);
                        //console.log(form_data)  
                       angular.forEach($scope.files, function(file){  
                            form_data.append('file', file);  
                       });  
                       $http.post('php/uploadimage.php', form_data,  
                       {  
                            transformRequest: angular.identity,  
                            headers: {'Content-Type': undefined,'Process-Data': false}  
                       }).success(function(response){  
                            // alert(response);  
                            //$scope.select(); 
                            // console.log(response)
                            // var nameim = response.split('.');
                            $scope.nameim2 = response.new_name;
                            console.log($scope.nameim2);
                            if ($scope.files == undefined) {
                            console.log("in case null")
                            console.log($scope.files)
                            //$interval.cancel(interval3)
                            $scope.load = { 'display':'none'};
                            angular.element(document.querySelector('.nophoto')).css("display","block");
                            angular.element(document.querySelector('.nophoto2')).css("display","block");
                            if ($scope.flagcheck == 1) {
                              $scope.nophoto = "No photo";  
                            }
                            else if ($scope.flagcheck == 2) {
                              $scope.nophoto = "ยังไม่มีรูปภาพ";  
                            }
                            else if ($scope.flagcheck == 3) {
                              $scope.nophoto = "没有照片";  
                            }
                            
                        }

                        else if ($scope.files != undefined){
                          //$scope.voucherselect = null;
                            console.log("!!in case null")
                            $scope.backinformdriverimage =  { 'display':'block'};
                            $scope.backinformdriver =  { 'display':'none'};
                            angular.element(document.querySelector('.nophoto')).css("display","none");
                            angular.element(document.querySelector('.nophoto2')).css("display","none");
                            $scope.timerequest = "";
                            console.log($scope.timerequest)
                            $scope.comfrom3 = "customer";
                            console.log($scope.orderid)
                            $scope.cdelay_or_not = x;
                            $scope.date_flight_delay = "";
                            $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                            console.log($scope.date_flight_delay)
                            $http({
                                method : 'POST',
                                url : "php/add_data.php",
                                data: $.param({orderid: $scope.data,
                                    fdelay: $scope.timerequest,
                                    fdate: $scope.date_flight_delay,
                                    g_topoint_date: $scope.HHmmss,
                                    voucher: $scope.sendVCID,
                                    nameim: $scope.srtore,
                                    state: $scope.cdelay_or_not,
                                    nameim2: $scope.nameim2,
                                    from: $scope.comfrom3,
                                    lag: $scope.latituderel,
                                    long: $scope.longituderel
                                    
                                     

                            }),
                            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                            }).success(function(res){
                                    console.log(res)
                                   
                                    $http({
                                        method : 'POST',
                                        url : "php/get_flight_fororderid.php",
                                        data: $.param({vc: VC}),
                                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                      }).success(function(res){                  
                                          console.log(res)
                                          $scope.get_flight_all = res;
                                          $scope.load = { 'display':'none'};
                                                $scope.spinsendphoto = {'display':'none'};
                                              $scope.poupradio = { 'display':'none'};
                                              $scope.takepictures = { 'display':'block'};
                                              $scope.pictureyourself = { 'display':'none'};
                                              $scope.spintake = { 'display':'none'};
                                               angular.element(document.querySelector('#blah')).css("display","none");
                                              $scope.id_popupwait = { 'display':'block'};
                                              $scope.id_popupwait_toop = { 'display':'none'};
                                              $scope.newtakephoto = { 'display':'block'};
                                          angular.forEach($scope.get_flight_all, function (i) {
                                             if (i.voucher == $scope.sendVCID) {
                                                if (i.state == 1 || i.state == 2 || i.state == 3 || i.state == 4 || i.state == 5 || i.state == 7 || i.state == 8 || i.state == 9 || i.state == 10 || i.state == 11 || i.state == 12 || i.state == 13 || i.state == 14 || i.state == 15) {
                                                  $scope.getallchat.push(i);
                                                }
                                              }
                                            });
                                            var lenc = $scope.getallchat.length;
                                            //console.log($scope.getallchat.length-1)
                                            $location.hash('anchorwait' + $scope.getallchat[lenc-1].id);
                                          });
                                   
                            });
                        }
                    });
                    
                }
                else if (x == 4) {
                  //$scope.voucherselect = null;
                    //$scope.load = { 'display':'block'};
                    $scope.stylecheckin2 = { 'display':'none'};
                    $scope.stylecheckinclick = { 'display':'block'};




                      $scope.nameim = "";
                   
                      $scope.timerequest = $scope.selectnumNotify + ':'+ $scope.selectnumNotify2;
                      console.log($scope.timerequest)
                      console.log($scope.orderid)
                      $scope.cdelay_or_not = 4;
                       $scope.comfrom1 = "customer";
                      $scope.date_flight_delay = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                      $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                      console.log($scope.date_flight_delay)
                      $http({
                          method : 'POST',
                          url : "php/add_data.php",
                          data: $.param({orderid: $scope.data,
                              fdelay: $scope.timerequest,
                              fdate: $scope.date_flight_delay,
                              g_topoint_date: $scope.HHmmss,
                              voucher: $scope.sendVCID,
                              nameim: $scope.nameim,
                              state: $scope.cdelay_or_not,
                              from: $scope.comfrom1,
                               lag: $scope.latituderel,
                              long: $scope.longituderel
                             
                               

                          }),
                          headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                          }).success(function(res){
                              console.log(res)
                              $scope.load = { 'display':'none'};
                               // location.reload();
                               $http({
                                  method : 'POST',
                                  url : "php/get_flight_fororderid.php",
                                  data: $.param({vc: VC}),
                                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                }).success(function(res){                  
                                    console.log(res)
                                    $scope.get_flight_all = res;
                                    $scope.poupradio = { 'display':'none'};
                                    //$scope.timedelay2 = { 'display':'none'};
                                    $scope.stylecheckinclick = { 'display':'none'};

                                    $scope.figbeforedriver = { 'position':'fixed'};

                                    $scope.id_popupbefore = { 'display':'block'};
                                    $scope.stylehour2 = { 'display':'block'};
                                    $scope.styleminutes2 = { 'display':'block'};
                                    

                             



                                   
                                    angular.forEach($scope.get_flight_all, function (i) {
                                     if (i.voucher == $scope.sendVCID) {
                                        if (i.state == 1 || i.state == 2 || i.state == 3 || i.state == 4 || i.state == 5 || i.state == 7 || i.state == 8 || i.state == 9 || i.state == 10 || i.state == 11 || i.state == 12 || i.state == 13 || i.state == 14 || i.state == 15) {
                                          $scope.getallchat.push(i);
                                        }
                                      }
                                    });
                                    var lenc = $scope.getallchat.length;
                                    //console.log($scope.getallchat.length-1)
                                    $location.hash('anchor' + $scope.getallchat[lenc-1].id);
                                });
                               
                      });
                   
                     
                }
                else if (x == 5){
                  //$scope.voucherselect = null;
                  
                      $scope.spintakechattoop = { 'display':'block'};
                      $scope.nameim = "";
                      $scope.cdelay_or_not = x;
                      console.log("not delay")
                      $scope.timerequest = "";
                      $scope.comfrom2 = "customer";
                      console.log($scope.timerequest)
                      console.log($scope.orderid)
                      $scope.date_flight_delay = "";
                      $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                      console.log($scope.date_flight_delay)
                      console.log($scope.comdriver)
                      $http({
                          method : 'POST',
                          url : "php/add_data.php",
                          data: $.param({orderid: $scope.data,
                              fdelay: $scope.timerequest,
                              fdate: $scope.date_flight_delay,
                              g_topoint_date: $scope.HHmmss,
                              voucher: $scope.sendVCID,
                              nameim: $scope.nameim,
                              state: $scope.cdelay_or_not,
                               from:  $scope.comfrom2,
                               comment: $scope.comcallcenter,
                                lag: $scope.latituderel,
                              long: $scope.longituderel
                              

                               

                          }),
                          headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                          }).success(function(res){
                              console.log(res)
                              $http({
                                  method : 'POST',
                                  url : "php/get_flight_fororderid.php",
                                  data: $.param({vc: VC}),
                                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                }).success(function(res){                  
                                    console.log(res)
                                    $scope.getallchatservice = [];
                                    $scope.get_flight_all = res;
                                    $scope.spintakechattoop = { 'display':'none'};
                                    $scope.id_popupcallcenterchat = { 'display':'block'};
                                    $scope.scommentTocollcenter = { 'display':'none'};
                                    $scope.confirmcommenttocallcenter = { 'display':'none'};
                                    $scope.comcallcenter = "";
                                    $scope.message_toop = { 'display':'none'};
                                    //$scope.id_popupcallcenterchat = { 'display':'none'};
                                    angular.forEach($scope.get_flight_all, function (i) {
                                       if (i.voucher ==$scope.sendVCID) {
                                          if (i.state == 1 || i.state == 2 || i.state == 3 || i.state == 4 || i.state == 5 || i.state == 7 || i.state == 8 || i.state == 9 || i.state == 10 || i.state == 11 || i.state == 12 || i.state == 13 || i.state == 14 || i.state == 15) {
                                            $scope.getallchatservice.push(i);
                                            
                                          }
                                          
                                        }

                                    });
                                    var lenc = $scope.getallchatservice.length;
                                            //console.log($scope.getallchat.length-1)
                                    $location.hash('anchorchatoop' + $scope.getallchatservice[lenc-1].id);
                                });
                      });
                }
                else if (x == 6) {
                  $scope.voucherselect = null;
                  

                      $scope.nameim = "";
                   $scope.load = { 'display':'block'};
                      
                      console.log($scope.timerequest)
                      console.log($scope.orderid)
                      $scope.cdelay_or_not = 6;
                       $scope.comfrom1 = "customer";
                      $scope.date_flight_delay = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                      $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                      console.log($scope.date_flight_delay)
                      $http({
                          method : 'POST',
                          url : "php/add_data.php",
                          data: $.param({orderid: $scope.data,
                              fdelay: $scope.servicehoure,
                              fdate: $scope.date_flight_delay,
                              g_topoint_date: $scope.HHmmss,
                              voucher: $scope.sendVCID,
                              nameim: $scope.nameim,
                              state: $scope.cdelay_or_not,
                              from: $scope.comfrom1,
                               lag: $scope.latituderel,
                              long: $scope.longituderel,
                              cost: $scope.costsum
                             
                               

                          }),
                          headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                          }).success(function(res){
                              console.log(res)
                              $http({
                                  method : 'POST',
                                  url : "php/get_flight_fororderid.php",
                                  data: $.param({vc: VC}),
                                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                }).success(function(res){                  
                                    console.log(res)
                                    $scope.popupdriverservice = { 'display':'none'};
                                    $scope.get_flight_all = res;
                                });
                              $scope.load = { 'display':'none'};
                               // location.reload();
                               $http({
                                          method : 'POST',
                                          url : "php/get_flight.php",
                                          data: $.param({voucher: $scope.VOUCHER}),
                                          headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                          }).success(function(res){
                                              console.log(res)
                                              $scope.setionflight = res;
                                              $scope.poupradio = { 'display':'none'};
                                              $scope.timedelay2 = { 'display':'none'};
                                              $scope.id_popupbefore = { 'display':'none'};
         
                                              // angular.forEach(res, function(statas){  
                                              //     if (statas.state == 1) {
                                              //         $scope.PLstate1.push(statas);
                                              //     }
                                              //     else if (statas.state == 0) {
                                              //         $scope.PLstate0.push(statas)
                                              //     }
                                              //     else if (statas.state == 3) {
                                              //         $scope.PLstate3.push(statas)
                                              //     }  
                                              // });
                                              $http({
                                                  method : 'POST',
                                                  url : "php/getcomment.php",
                                                  data: $.param({order: $scope.data}),
                                                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                                  }).success(function(res){
                                                      console.log(res)
                                                      $scope.getcommentfirst = res;

                                                      for (var i = 0; i < $scope.getcommentfirst.length; i++) {
                                                          var a = 0;
                                                          angular.forEach($scope.VocherID, function (y) {
                                                                  if ($scope.getcommentfirst[i].voucher == y.TB_order_order ) {
                                                                       y.comment = 1;
                                                                       console.log(y.TB_order_order)

                                                                  }
                                                           });

                                                      }
                                                      
                                                     $scope.voucherselect = $scope.VocherID;
                                                      console.log($scope.voucherselect)
                                                     
                                              });
                                                  
                                      });
                      });
                   
                     
                }
                else if (x == 7) {
                  //$scope.voucherselect = null;
                    $scope.stylebeforeclick_toop = { 'display':'block'};
                    $scope.stylecheckin2 = { 'display':'none'};

                      $scope.nameim = "";
                   
                      $scope.timerequest = $scope.selectnumNotify + ':'+ $scope.selectnumNotify2;
                      console.log($scope.timerequest)
                      
                      $scope.cdelay_or_not = x;
                       $scope.comfrom1 = "customer";
                      $scope.date_flight_delay = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                      $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                      console.log($scope.date_flight_delay)
                      $http({
                          method : 'POST',
                          url : "php/add_data.php",
                          data: $.param({orderid: $scope.data,
                              fdelay: $scope.timerequest,
                              fdate: $scope.date_flight_delay,
                              g_topoint_date: $scope.HHmmss,
                              voucher: $scope.sendVCID,
                              nameim: $scope.nameim,
                              state: $scope.cdelay_or_not,
                              from: $scope.comfrom1,
                               lag: $scope.latituderel,
                              long: $scope.longituderel
                             
                               

                          }),
                          headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                          }).success(function(res){
                              console.log(res)
                              $scope.load = { 'display':'none'};
                               // location.reload();
                               $http({
                                  method : 'POST',
                                  url : "php/get_flight_fororderid.php",
                                  data: $.param({vc: VC}),
                                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                }).success(function(res){                  
                                    console.log(res)
                                    $scope.getallchatservice = [];
                                    $scope.get_flight_all = res;
                                    $scope.poupradio = { 'display':'none'};
                                    $scope.timedelay2 = { 'display':'block'};
                                    $scope.stylebeforeclick_toop = { 'display':'none'};

                                    $scope.id_popupbefore_toop = { 'display':'block'};
                                    $scope.stylehour2 = { 'display':'block'};
                                    $scope.styleminutes2 = { 'display':'block'};
                                    $scope.figbeforeop = { 'position':'fixed'};


                                    angular.forEach($scope.get_flight_all, function (i) {
                                       if (i.voucher == $scope.sendVCID) {
                                          if (i.state == 1 || i.state == 2 || i.state == 3 || i.state == 4 || i.state == 5 || i.state == 7 || i.state == 8 || i.state == 9 || i.state == 10 || i.state == 11 || i.state == 12 || i.state == 13 || i.state == 14 || i.state == 15) {
                                            $scope.getallchatservice.push(i);
                                            
                                          }
                                        }
                                    });
                                    var lenc = $scope.getallchatservice.length;
                                            //console.log($scope.getallchat.length-1)
                                    $location.hash('anchorbeforetoop' + $scope.getallchatservice[lenc-1].id);
                                });
                              
                      });
                    
                     
                }
                else if (x == 8) { //delay
                   //$scope.voucherselect = null;
                  $scope.styledelayclick_toop = { 'display':'block'};

                    $scope.nameim = "";
                   
                    $scope.timerequest = $scope.selectnum + ':'+ $scope.selectnum2;
                    $scope.cdelay_or_not = x;
                    
                    console.log($scope.timerequest)
                    console.log($scope.orderid)
                     $scope.comfrom1 = "customer";
                    $scope.date_flight_delay = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    console.log($scope.date_flight_delay)
                    $http({
                        method : 'POST',
                        url : "php/add_data.php",
                        data: $.param({orderid: $scope.data,
                            fdelay: $scope.timerequest,
                            fdate: $scope.date_flight_delay,
                            g_topoint_date: $scope.HHmmss,
                            voucher: $scope.sendVCID,
                            nameim: $scope.nameim,
                            state: $scope.cdelay_or_not,
                            from: $scope.comfrom1,
                             lag: $scope.latituderel,
                            long: $scope.longituderel
                           
                             

                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            //$scope.load = { 'display':'none'};
                             // location.reload();
                             $http({
                                  method : 'POST',
                                  url : "php/get_flight_fororderid.php",
                                  data: $.param({vc: VC}),
                                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                }).success(function(res){                  
                                    console.log(res)
                                    $scope.getallchatservice = [];
                                    $scope.get_flight_all = res;
                                    $scope.poupradio = { 'display':'none'};
                                      $scope.stylehour = { 'display':'block'};

                                      $scope.styleminutes = { 'display':'block'};

                                      $scope.id_popupdelay_toop = { 'display':'block'};
                                    $scope.styledelayclick_toop = { 'display':'none'};
                                    $scope.stylecheckin = { 'display':'none'};


                                    angular.forEach($scope.get_flight_all, function (i) {
                                       if (i.voucher == $scope.sendVCID) {
                                          if (i.state == 1 || i.state == 2 || i.state == 3 || i.state == 4 || i.state == 5 || i.state == 7 || i.state == 8 || i.state == 9 || i.state == 10 || i.state == 11 || i.state == 12 || i.state == 13 || i.state == 14 || i.state == 15) {
                                            $scope.getallchatservice.push(i);
                                            
                                          }
                                        }
                                    });
                                    var lenc = $scope.getallchatservice.length;
                                            //console.log($scope.getallchat.length-1)
                                    $location.hash('anchordelaytoop' + $scope.getallchatservice[lenc-1].id);
                                });
                    });
                

                
                }
                else if(x == 9){ ///takepictures
                  $scope.spintake2 = {'display':'block'};
                    $scope.spinsendphoto2 = {'display':'none'};
                     $scope.blockhavephoto_toop = {'display':'none'};
                          var form_data = new FormData();
                        console.log($scope.files);
                        //console.log(form_data)  
                       angular.forEach($scope.files, function(file){  
                            form_data.append('file', file);  
                       });  
                       $http.post('php/uploadimage.php', form_data,  
                       {  
                            transformRequest: angular.identity,  
                            headers: {'Content-Type': undefined,'Process-Data': false}  
                       }).success(function(response){  
                            // alert(response);  
                            //$scope.select(); 
                            // console.log(response)
                            // var nameim = response.split('.');
                            $scope.nameim2 = response.new_name;
                            console.log($scope.nameim2);
                            if ($scope.files == undefined) {
                            console.log("in case null")
                            console.log($scope.files)
                            //$interval.cancel(interval3)
                            $scope.load = { 'display':'none'};
                            angular.element(document.querySelector('.nophoto')).css("display","block");
                            angular.element(document.querySelector('.nophoto2')).css("display","block");
                            if ($scope.flagcheck == 1) {
                              $scope.nophoto = "No photo";  
                            }
                            else if ($scope.flagcheck == 2) {
                              $scope.nophoto = "ยังไม่มีรูปภาพ";  
                            }
                            else if ($scope.flagcheck == 3) {
                              $scope.nophoto = "没有照片";  
                            }
                            
                        }

                        else if ($scope.files != undefined){
                          //$scope.voucherselect = null;
                            console.log("!!in case null")
                            $scope.backinformdriverimage =  { 'display':'block'};
                            $scope.backinformdriver =  { 'display':'none'};
                            angular.element(document.querySelector('.nophoto')).css("display","none");
                            angular.element(document.querySelector('.nophoto2')).css("display","none");
                            $scope.timerequest = "";
                            console.log($scope.timerequest)
                            $scope.comfrom3 = "customer";
                            console.log($scope.orderid)
                            $scope.cdelay_or_not = x;
                            $scope.date_flight_delay = "";
                            $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                            console.log($scope.date_flight_delay)
                            $http({
                                method : 'POST',
                                url : "php/add_data.php",
                                data: $.param({orderid: $scope.data,
                                    fdelay: $scope.timerequest,
                                    fdate: $scope.date_flight_delay,
                                    g_topoint_date: $scope.HHmmss,
                                    voucher: $scope.sendVCID,
                                    nameim: $scope.srtore,
                                    state: $scope.cdelay_or_not,
                                    nameim2: $scope.nameim2,
                                    from: $scope.comfrom3,
                                    lag: $scope.coords.lat,
                                    long: $scope.coords.long
                                    
                                     

                            }),
                            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                            }).success(function(res){
                                    console.log(res)
                                    $('#waitdrivermodal_toop').modal('hide');
                                     $scope.spintake2 = {'display':'none'};
                                    // $http({
                                    //     method : 'POST',
                                    //     url : "php/get_flight_fororderid.php",
                                    //     data: $.param({vc: VC}),
                                    //     headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                    //   }).success(function(res){                  
                                    //         console.log(res)
                                    //         $scope.get_flight_all = res;
                                    //         $scope.getallchatservice = [];
                                    //         $scope.spintake2 = {'display':'none'};
                                    //           $scope.load = { 'display':'none'};
                                    //           $scope.poupradio = { 'display':'none'};
                                    //           $scope.pictureyourself_toop = { 'display':'none'};

                                    //           //$scope.takepictures_toop = { 'display':'block'};
                                    //           //$scope.id_popupwait_toop  = { 'display':'block'};
                                    //           angular.element(document.querySelector('#blah')).val('');
                                    //            angular.element(document.querySelector('#blah2')).val('');
                                    //         //     angular.forEach($scope.get_flight_all, function (i) {
                                    //         //    if (i.voucher == $scope.sendVCID) {
                                    //         //       if (i.state == 1 || i.state == 2 || i.state == 3 || i.state == 4 || i.state == 5 || i.state == 7 || i.state == 8 || i.state == 9 || i.state == 10 || i.state == 11 || i.state == 12 ) {
                                    //         //         $scope.getallchatservice.push(i);
                                                    
                                    //         //       }
                                    //         //     }
                                    //         // });
                                           
                                    //   });
                            });
                        }
                    });
                   
                }
                else if (x == 10) { //delay
                  //alert(x)
                  console.log(x)
                    //$scope.voucherselect = null;
                   // $scope.load = { 'display':'block'};
                    $scope.nameim = "";
                   
                    $scope.timerequest = "";
                    $scope.cdelay_or_not = x;
                    console.log($scope.nameim)
                    console.log($scope.timerequest)
                    console.log($scope.orderid)
                    console.log($scope.latituderel)
                    console.log($scope.cdelay_or_not)
                    console.log($scope.sendVCID)
                     $scope.comfrom1 = "customer";
                    $scope.date_flight_delay = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    console.log($scope.date_flight_delay)
                    $http({
                        method : 'POST',
                        url : "php/add_data.php",
                        data: $.param({orderid: $scope.data,
                            fdelay: $scope.timerequest,
                            fdate: $scope.date_flight_delay,
                            g_topoint_date: $scope.HHmmss,
                            voucher: $scope.sendVCID,
                            nameim: $scope.nameim,
                            state: $scope.cdelay_or_not,
                            from: $scope.comfrom1,
                            comment: $scope.TB_driver_phone,
                             lag: $scope.latituderel,
                            long: $scope.longituderel
                           
                             

                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            $scope.load = { 'display':'none'};
                             // location.reload();
                             $http({
                                  method : 'POST',
                                  url : "php/get_flight_fororderid.php",
                                  data: $.param({vc: VC}),
                                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                }).success(function(res){                  
                                    console.log(res)
                                    $scope.poupradio = { 'display':'none'};
                            //           $scope.id_popupdelay = { 'display':'none'};
                                    $scope.getallchatservice = [];
                                    $scope.get_flight_all = res;
                                    angular.forEach($scope.get_flight_all, function (i) {
                                     if (i.voucher == $scope.sendVCID) {
                                        if (i.state == 1 || i.state == 2 || i.state == 3 || i.state == 4 || i.state == 5 || i.state == 7 || i.state == 8 || i.state == 9 || i.state == 10 || i.state == 11 || i.state == 12 || i.state == 13 || i.state == 14 || i.state == 15) {
                                          $scope.getallchat.push(i);
                                        }
                                      }
                                    });
                                    var lenc = $scope.getallchat.length;
                                            //console.log($scope.getallchat.length-1)
                                    //$location.hash('anchormenudriver' + $scope.getallchat[lenc-1].id);
                                });
                            
                    });
              

                
                }
                else if (x == 11) { //delay
                  //alert(x)
                    //$scope.voucherselect = null;
                    $scope.load = { 'display':'block'};
                    $scope.nameim = "";
                   
                    $scope.timerequest = "";
                    $scope.cdelay_or_not = x;
                    
                    console.log($scope.timerequest)
                    console.log($scope.orderid)
                     $scope.comfrom1 = "customer";
                    $scope.date_flight_delay = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    console.log($scope.date_flight_delay)
                    $http({
                        method : 'POST',
                        url : "php/add_data.php",
                        data: $.param({orderid: $scope.data,
                            fdelay: $scope.timerequest,
                            fdate: $scope.date_flight_delay,
                            g_topoint_date: $scope.HHmmss,
                            voucher: $scope.sendVCID,
                            nameim: $scope.nameim,
                            state: $scope.cdelay_or_not,
                            from: $scope.comfrom1,
                            comment: "0630781168",                            
                             lag: $scope.latituderel,
                            long: $scope.longituderel
                           
                             

                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            $scope.load = { 'display':'none'};
                             // location.reload();
                             $http({
                                  method : 'POST',
                                  url : "php/get_flight_fororderid.php",
                                  data: $.param({vc: VC}),
                                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                }).success(function(res){                  
                                    console.log(res)
                                     $scope.getallchatservice = [];
                                    $scope.popupdriverOP = { 'display':'block'};

                                    $scope.poupradio = { 'display':'none'};
                                      $scope.id_popupdelay = { 'display':'none'};
                                    $scope.get_flight_all = res;

                                     angular.forEach($scope.get_flight_all, function (i) {
                                     if (i.voucher == $scope.sendVCID) {
                                        if (i.state == 1 || i.state == 2 || i.state == 3 || i.state == 4 || i.state == 5 || i.state == 7 || i.state == 8 || i.state == 9 || i.state == 10 || i.state == 11 || i.state == 12 || i.state == 13 || i.state == 14 || i.state == 15) {
                                          $scope.getallchatservice.push(i);
                                          
                                        }
                                        
                                      }
                                    });

                                    var lenc = $scope.getallchatservice.length;
                                            //console.log($scope.getallchat.length-1)
                                    $location.hash('anchormenuop' + $scope.getallchatservice[lenc-1].id);

                            
                                });
                       
                    });
              

                
                }
                else if (x == 12){
                  console.log("in case")
                  $scope.spintakechattodriverselect = { 'display':'block'};

                  //$scope.voucherselect = null;
                    //$scope.load = { 'display':'block'};
                    //$scope.styleload = { 'display':'block'};
                    $scope.nameim = "";
                    $scope.cdelay_or_not = x;
                    console.log("not delay")
                    $scope.timerequest = "";
                    $scope.comfrom2 = "customer";
                    console.log($scope.timerequest)
                    console.log($scope.orderid)
                    $scope.date_flight_delay = "";
                    $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    console.log($scope.date_flight_delay)
                    console.log($scope.comdriver)
                    $http({
                        method : 'POST',
                        url : "php/add_data.php",
                        data: $.param({orderid: $scope.data,
                            fdelay: $scope.timerequest,
                            fdate: $scope.date_flight_delay,
                            g_topoint_date: $scope.HHmmss,
                            voucher: $scope.sendVCID,
                            nameim: $scope.nameim,
                            state: $scope.cdelay_or_not,
                            from:  $scope.comfrom2,
                            comment: $scope.SELmessage_store_id,  //$scope.messagedriver,
                            lag: $scope.latituderel,
                            long: $scope.longituderel
                            

                             

                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            $http({
                                  method : 'POST',
                                  url : "php/get_flight_fororderid.php",
                                  data: $.param({vc: VC}),
                                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                }).success(function(res){                  
                                    console.log(res)
                                    $scope.getallchat = [];
                                            $scope.id_popupdiverchat = { 'display':'block'};
                                            $scope.message = { 'display':'none'};

                                    $scope.scommentTodriver = { 'display':'none'};
                                            $scope.frequentlyused = { 'display':'none'};

                                            $scope.spintakechattodriverselect = { 'display':'none'};
                                            //$scope.id_popupdiverchat = { 'display':'none'};
                                    $scope.get_flight_all = res;
                                    angular.forEach($scope.get_flight_all, function (i) {
                                     if (i.voucher == $scope.sendVCID) {
                                        if (i.state == 1 || i.state == 2 || i.state == 3 || i.state == 4 || i.state == 5 || i.state == 7 || i.state == 8 || i.state == 9 || i.state == 10 || i.state == 11 || i.state == 12 || i.state == 13 || i.state == 14 || i.state == 15) {
                                          $scope.getallchat.push(i);
                                          
                                        }
                                        
                                      }
                                    });
                                    var lenc = $scope.getallchat.length;
                                            //console.log($scope.getallchat.length-1)
                                            $location.hash('anchorchat' + $scope.getallchat[lenc-1].id);
                                });
                           
                    });
                  
                    
                }
                else if (x == 13){
                    $scope.spintakechattoopselect = { 'display':'block'};
                    $scope.nameim = "";
                    $scope.cdelay_or_not = x;
                    console.log("not delay")
                    $scope.timerequest = "";
                    $scope.comfrom2 = "customer";
                    console.log($scope.timerequest)
                    console.log($scope.orderid)
                    $scope.date_flight_delay = "";
                    $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    console.log($scope.date_flight_delay)
                    console.log($scope.comdriver)
                    $http({
                        method : 'POST',
                        url : "php/add_data.php",
                        data: $.param({orderid: $scope.data,
                            fdelay: $scope.timerequest,
                            fdate: $scope.date_flight_delay,
                            g_topoint_date: $scope.HHmmss,
                            voucher: $scope.sendVCID,
                            nameim: $scope.nameim,
                            state: $scope.cdelay_or_not,
                            from:  $scope.comfrom2,
                            comment: $scope.SELmessage_store_id,//$scope.messageop,
                            lag: $scope.latituderel,
                            long: $scope.longituderel

                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                                $('#chatdrivermodal_toop').modal('hide');
                                 $scope.spintakechattoopselect = { 'display':'none'};

                            // $http({
                            //       method : 'POST',
                            //       url : "php/get_flight_fororderid.php",
                            //       data: $.param({vc: VC}),
                            //       headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                            //     }).success(function(res){                  
                            //         console.log(res)

                            //         $scope.getallchatservice = [];
                            //         $scope.get_flight_all = res;
                            //         $scope.message_toop = {'display':'block'}
                            //         $scope.frequentlyused_toop = {'display':'none'}
                            //         $scope.spintakechattoopselect = { 'display':'none'};
                            //         //$scope.load = { 'display':'none'};
                            //         $scope.styleload = { 'display':'none'};
                            //         angular.forEach($scope.get_flight_all, function (i) {
                            //            if (i.voucher ==$scope.sendVCID) {
                            //               if (i.state == 1 || i.state == 2 || i.state == 3 || i.state == 4 || i.state == 5 || i.state == 7 || i.state == 8 || i.state == 9 || i.state == 10 || i.state == 11 || i.state == 12 || i.state == 13 || i.state == 14 || i.state == 15) {
                            //                 $scope.getallchatservice.push(i);
                                            
                            //               }
                            //             }
                            //         });

                            //         var lenc = $scope.getallchatservice.length;
                            //                 //console.log($scope.getallchat.length-1)
                            //         $location.hash('anchorchatoop' + $scope.getallchatservice[lenc-1].id);

                            //     });
                    });
                    
                }
                else if (x == 14){
                    console.log(x)
                    $scope.btnsharelocation = { 'display':'none'};

                    //$scope.spintakechattoopselect = { 'display':'block'};
                    $scope.styleloadlocation = { 'display':'block'};
                    console.log($scope.sendVCID)
                    $scope.nameim = "";

                    $scope.cdelay_or_not = x;
                    console.log("not delay")
                    $scope.timerequest = "";
                    $scope.messageop = "";
                    $scope.comfrom2 = "customer";
                    console.log($scope.timerequest)
                    console.log($scope.orderid)
                    $scope.date_flight_delay = "";
                    $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    console.log($scope.date_flight_delay)
                    console.log($scope.comdriver)
                    $http({
                        method : 'POST',
                        url : "php/add_data.php",
                        data: $.param({orderid: $scope.data,
                            fdelay: $scope.timerequest,
                            fdate: $scope.date_flight_delay,
                            g_topoint_date: $scope.HHmmss,
                            voucher: $scope.sendVCID,
                            nameim: $scope.nameim,
                            state: $scope.cdelay_or_not,
                            from:  $scope.comfrom2,
                            comment: $scope.messageop,
                            lag: $scope.latituderel,
                            long: $scope.longituderel

                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            $http({
                                  method : 'POST',
                                  url : "php/get_flight_fororderid.php",
                                  data: $.param({vc: VC}),
                                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                }).success(function(res){                  
                                    console.log(res)
                                    $scope.getallchat = [];
                                    $scope.get_flight_all = res;
                                   $('#sharelocationtodriver').modal('hide');
                                    $scope.popupdriverinfo = {'display':'block'}
                                    $scope.btnsharelocation = {'display':'none'}
                                    $scope.boxsharelocationdriver = {'display':'none'}                                    
                                    $scope.spintakechattoopselect = { 'display':'none'};
                                    $scope.styleloadlocation = { 'display':'none'};
                                    //$scope.load = { 'display':'none'};
                                    $scope.styleload = { 'display':'none'};
                                    $scope.ssharelocationdriver = { 'display':'none'};
                                    angular.forEach($scope.get_flight_all, function (i) {
                                     if (i.voucher == $scope.sendVCID) {
                                        if (i.state == 1 || i.state == 2 || i.state == 3 || i.state == 4 || i.state == 5 || i.state == 7 || i.state == 8 || i.state == 9 || i.state == 10 || i.state == 11 || i.state == 12 || i.state == 13 || i.state == 14 || i.state == 15) {
                                          $scope.getallchat.push(i);
                                          
                                        }
                                        
                                      }
                                    });

                                    var lenc = $scope.getallchat.length;
                                            //console.log($scope.getallchat.length-1)
                                    //$location.hash('anchormenudriver' + $scope.getallchat[lenc-1].id);

                                });
                    });
                    
                }
                else if (x == 15){
                    console.log(x)
                    $scope.btnsharelocation_toop = { 'display':'none'};

                    //$scope.spintakechattoopselect = { 'display':'block'};
                    $scope.styleloadlocation_toop = { 'display':'block'};
                    console.log($scope.sendVCID)
                    $scope.nameim = "";

                    $scope.cdelay_or_not = x;
                    console.log("not delay")
                    $scope.timerequest = "";
                    $scope.messageop = "";
                    $scope.comfrom2 = "customer";
                    console.log($scope.timerequest)
                    console.log($scope.orderid)
                    $scope.date_flight_delay = "";
                    $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    console.log($scope.date_flight_delay)
                    console.log($scope.comdriver)
                    $http({
                        method : 'POST',
                        url : "php/add_data.php",
                        data: $.param({orderid: $scope.data,
                            fdelay: $scope.timerequest,
                            fdate: $scope.date_flight_delay,
                            g_topoint_date: $scope.HHmmss,
                            voucher: $scope.sendVCID,
                            nameim: $scope.nameim,
                            state: $scope.cdelay_or_not,
                            from:  $scope.comfrom2,
                            comment: $scope.messageop,
                            lag: $scope.latituderel,
                            long: $scope.longituderel

                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            $http({
                                  method : 'POST',
                                  url : "php/get_flight_fororderid.php",
                                  data: $.param({vc: VC}),
                                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                }).success(function(res){                  
                                    console.log(res)
                                    $scope.getallchatservice = [];
                                    $scope.get_flight_all = res;
                                    $scope.popupdriverOP = {'display':'block'}
                                    $scope.btnsharelocation_toop = {'display':'none'}
                                    $scope.boxsharelocation_toop = {'display':'none'}                                    
                                    $scope.spintakechattoopselect = { 'display':'none'};
                                    $scope.styleloadlocation = { 'display':'none'};
                                    $scope.styleloadlocation_toop = { 'display':'none'};
                                    
                                    //$scope.load = { 'display':'none'};
                                    $scope.styleload = { 'display':'none'};
                                    $scope.ssharelocationdriver = { 'display':'none'};
                                    angular.forEach($scope.get_flight_all, function (i) {
                                     if (i.voucher == $scope.sendVCID) {
                                        if (i.state == 1 || i.state == 2 || i.state == 3 || i.state == 4 || i.state == 5 || i.state == 7 || i.state == 8 || i.state == 9 || i.state == 10 || i.state == 11 || i.state == 12 || i.state == 13 || i.state == 14 || i.state == 15) {
                                          $scope.getallchatservice.push(i);
                                          
                                        }
                                        
                                      }
                                    });

                                    var lenc = $scope.getallchatservice.length;
                                            //console.log($scope.getallchat.length-1)
                                    $location.hash('anchormenuop' + $scope.getallchatservice[lenc-1].id);

                                });
                    });
                    
                }
                else if (x == 16) {
                  //$scope.voucherselect = null;
                    //$scope.load = { 'display':'block'};
                    $scope.stylecheckin2 = { 'display':'none'};
                    $scope.stylecheckinclick = { 'display':'block'};




                      $scope.nameim = "";
                   
                      $scope.timerequest = $scope.selectnumNotify + ':'+ $scope.selectnumNotify2;
                      console.log($scope.timerequest)
                      console.log($scope.orderid)
                      $scope.cdelay_or_not = x;
                       $scope.comfrom1 = "customer";
                      $scope.date_flight_delay = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                      $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                      console.log($scope.date_flight_delay)
                      $http({
                          method : 'POST',
                          url : "php/add_data.php",
                          data: $.param({orderid: $scope.data,
                              fdelay: $scope.timerequest,
                              fdate: $scope.date_flight_delay,
                              g_topoint_date: $scope.HHmmss,
                              voucher: $scope.sendVCID,
                              nameim: $scope.nameim,
                              state: $scope.cdelay_or_not,
                              from: $scope.comfrom1,
                               lag: $scope.latituderel,
                              long: $scope.longituderel
                             
                               

                          }),
                          headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                          }).success(function(res){
                              console.log(res)
                              $scope.load = { 'display':'none'};
                              $('#flightdelaydrivermodal').modal('hide');
                               // location.reload();
                               $http({
                                  method : 'POST',
                                  url : "php/get_flight_fororderid.php",
                                  data: $.param({vc: VC}),
                                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                }).success(function(res){                  
                                    console.log(res)
                                    $scope.get_flight_all = res;
                                    //$scope.poupradio = { 'display':'none'};
                                    //$scope.timedelay2 = { 'display':'none'};
                                    $scope.stylecheckinclick = { 'display':'none'};

                                    //$scope.figbeforedriver = { 'position':'fixed'};

                                    $scope.id_popupbefore = { 'display':'block'};
                                    $scope.stylehour2 = { 'display':'block'};
                                    $scope.styleminutes2 = { 'display':'block'};
                                    

                             



                                   
                                    // angular.forEach($scope.get_flight_all, function (i) {
                                    //  if (i.voucher == $scope.sendVCID) {
                                    //     if (i.state == 1 || i.state == 2 || i.state == 3 || i.state == 4 || i.state == 5 || i.state == 7 || i.state == 8 || i.state == 9 || i.state == 10 || i.state == 11 || i.state == 12 || i.state == 13 || i.state == 14 || i.state == 15) {
                                    //       $scope.getallchat.push(i);
                                    //     }
                                    //   }
                                    // });
                                    // var lenc = $scope.getallchat.length;
                                    // //console.log($scope.getallchat.length-1)
                                    // $location.hash('anchor' + $scope.getallchat[lenc-1].id);
                                });
                               
                      });
                   
                     
                }
                else if (x == 17) {
                  console.log($filter('date')($scope.datenewflight.toISOString(), 'yyyy-MM-dd'))
                  console.log($scope.changeflight)
                  console.log($scope.timerequest)
                  console.log(x)
                  $scope.datenewflightpas = $filter('date')($scope.datenewflight.toISOString(), 'yyyy-MM-dd');
                  console.log($scope.datenewflightpas)
                    //$scope.stylebeforeclick_toop = { 'display':'block'};
                    //$scope.stylecheckin2 = { 'display':'none'};

                    $scope.nameim = "";                   
                    $scope.timerequest = $scope.selectnumNotify + ':'+ $scope.selectnumNotify2;
                    console.log($scope.timerequest)                      
                    $scope.cdelay_or_not = x;
                    $scope.comfrom1 = "customer";
                    $scope.date_flight_delay = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    console.log($scope.date_flight_delay)
                      $http({
                          method : 'POST',
                          url : "php/add_data.php",
                          data: $.param({orderid: $scope.data,
                              fdelay: $scope.timerequest,
                              fdate: $scope.date_flight_delay,
                              g_topoint_date: $scope.HHmmss,
                              voucher: $scope.sendVCID,
                              nameim: $scope.nameim,
                              state: $scope.cdelay_or_not,
                              from: $scope.comfrom1,
                              lag: $scope.latituderel,
                              long: $scope.longituderel,
                              newdate: $scope.datenewflightpas,
                              flight: $scope.changeflight
                             
                               

                          }),
                          headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                          }).success(function(res){
                              console.log(res)
                               $('#changedrivermodal').modal('hide');
                              $scope.load = { 'display':'none'};
                               // location.reload();
                               $http({
                                  method : 'POST',
                                  url : "php/get_flight_fororderid.php",
                                  data: $.param({vc: VC}),
                                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                }).success(function(res){                  
                                    console.log(res)

                                    // $scope.getallchatservice = [];
                                    // $scope.get_flight_all = res;
                                    // $scope.poupradio = { 'display':'none'};
                                    // $scope.timedelay2 = { 'display':'block'};
                                    // $scope.stylebeforeclick_toop = { 'display':'none'};

                                    // $scope.id_popupbefore_toop = { 'display':'block'};
                                    // $scope.stylehour2 = { 'display':'block'};
                                    // $scope.styleminutes2 = { 'display':'block'};
                                    // $scope.figbeforeop = { 'position':'fixed'};


                                    // angular.forEach($scope.get_flight_all, function (i) {
                                    //    if (i.voucher == $scope.sendVCID) {
                                    //       if (i.state == 1 || i.state == 2 || i.state == 3 || i.state == 4 || i.state == 5 || i.state == 7 || i.state == 8 || i.state == 9 || i.state == 10 || i.state == 11 || i.state == 12 || i.state == 13 || i.state == 14 || i.state == 15) {
                                    //         $scope.getallchatservice.push(i);
                                            
                                    //       }
                                    //     }
                                    // });
                                    // var lenc = $scope.getallchatservice.length;
                                    //         //console.log($scope.getallchat.length-1)
                                    // $location.hash('anchorbeforetoop' + $scope.getallchatservice[lenc-1].id);
                                });
                              
                      });
                    
                     
                }
                else if (x == 18){
                  console.log("in case")
                  $scope.spintakechattodriverselect = { 'display':'block'};

                  //$scope.voucherselect = null;
                    //$scope.load = { 'display':'block'};
                    //$scope.styleload = { 'display':'block'};
                    $scope.nameim = "";
                    $scope.cdelay_or_not = x;
                    console.log("not delay")
                    $scope.timerequest = "";
                    $scope.comfrom2 = "customer";
                    console.log($scope.timerequest)
                    console.log($scope.orderid)
                    $scope.date_flight_delay = "";
                    $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    console.log($scope.date_flight_delay)
                    console.log($scope.comdriver)
                    $http({
                        method : 'POST',
                        url : "php/add_data.php",
                        data: $.param({orderid: $scope.data,
                            fdelay: $scope.timerequest,
                            fdate: $scope.date_flight_delay,
                            g_topoint_date: $scope.HHmmss,
                            voucher: $scope.sendVCID,
                            nameim: $scope.nameim,
                            state: $scope.cdelay_or_not,
                            from:  $scope.comfrom2,
                            comment: $scope.SELmessage_store_id,  //$scope.messagedriver,
                            lag: $scope.latituderel,
                            long: $scope.longituderel
                            

                             

                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            $('#landingdrivermodal').modal('hide');
                            $scope.spintakechattodriverselect = { 'display':'none'};
                            // $http({
                            //       method : 'POST',
                            //       url : "php/get_flight_fororderid.php",
                            //       data: $.param({vc: VC}),
                            //       headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                            //     }).success(function(res){                  
                            //         console.log(res)
                            //         // $scope.getallchat = [];
                            //         //         $scope.id_popupdiverchat = { 'display':'block'};
                            //         //         $scope.message = { 'display':'none'};

                            //         // $scope.scommentTodriver = { 'display':'none'};
                            //         //         $scope.frequentlyused = { 'display':'none'};

                            //         //         $scope.spintakechattodriverselect = { 'display':'none'};
                            //         //         //$scope.id_popupdiverchat = { 'display':'none'};
                            //         // $scope.get_flight_all = res;
                            //         angular.forEach($scope.get_flight_all, function (i) {
                            //          if (i.voucher == $scope.sendVCID) {
                            //             if (i.state == 1 || i.state == 2 || i.state == 3 || i.state == 4 || i.state == 5 || i.state == 7 || i.state == 8 || i.state == 9 || i.state == 10 || i.state == 11 || i.state == 12 || i.state == 13 || i.state == 14 || i.state == 15) {
                            //               $scope.getallchat.push(i);
                                          
                            //             }
                                        
                            //           }
                            //         });
                            //         var lenc = $scope.getallchat.length;
                            //                 //console.log($scope.getallchat.length-1)
                            //                 $location.hash('anchorchat' + $scope.getallchat[lenc-1].id);
                            //     });
                           
                    });
                  
                    
                }
                else if (x == 19){
                  console.log("in case")
                  $scope.spintakechattodriverselect = { 'display':'block'};
                    $scope.nameim = "";
                    $scope.cdelay_or_not = x;
                    console.log("not delay")
                    $scope.timerequest = "";
                    $scope.comfrom2 = "customer";
                    console.log($scope.timerequest)
                    console.log($scope.orderid)
                    $scope.date_flight_delay = "";
                    $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    console.log($scope.date_flight_delay)
                    console.log($scope.comdriver)
                    $http({
                        method : 'POST',
                        url : "php/add_data.php",
                        data: $.param({orderid: $scope.data,
                            fdelay: $scope.timerequest,
                            fdate: $scope.date_flight_delay,
                            g_topoint_date: $scope.HHmmss,
                            voucher: $scope.sendVCID,
                            nameim: $scope.nameim,
                            state: $scope.cdelay_or_not,
                            from:  $scope.comfrom2,
                            comment: $scope.SELmessage_store_id,  //$scope.messagedriver,
                            lag: $scope.latituderel,
                            long: $scope.longituderel
                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            $('#onthecardrivermodal').modal('hide');
                            $scope.spintakechattodriverselect = { 'display':'none'};
                    });
                  
                    
                }
                else if (x == 20){
                  console.log("in case")
                  $scope.spintakechattodriverselect = { 'display':'block'};
                    $scope.nameim = "";
                    $scope.cdelay_or_not = x;
                    console.log("not delay")
                    $scope.timerequest = "";
                    $scope.comfrom2 = "customer";
                    console.log($scope.timerequest)
                    console.log($scope.orderid)
                    $scope.date_flight_delay = "";
                    $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    console.log($scope.date_flight_delay)
                    console.log($scope.comdriver)
                    $http({
                        method : 'POST',
                        url : "php/add_data.php",
                        data: $.param({orderid: $scope.data,
                            fdelay: $scope.timerequest,
                            fdate: $scope.date_flight_delay,
                            g_topoint_date: $scope.HHmmss,
                            voucher: $scope.sendVCID,
                            nameim: $scope.nameim,
                            state: $scope.cdelay_or_not,
                            from:  $scope.comfrom2,
                            comment: $scope.SELmessage_store_id,  //$scope.messagedriver,
                            lag: $scope.latituderel,
                            long: $scope.longituderel
                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            $('#lostdrivermodal').modal('hide');
                            $scope.spintakechattodriverselect = { 'display':'none'};
                    });
                  
                    
                }
                else if (x == 21){
                  console.log("in case")
                  $scope.spintakechattodriverselect = { 'display':'block'};
                    $scope.nameim = "";
                    $scope.cdelay_or_not = x;
                    console.log("not delay")
                    $scope.timerequest = "";
                    $scope.comfrom2 = "customer";
                    console.log($scope.timerequest)
                    console.log($scope.orderid)
                    $scope.date_flight_delay = "";
                    $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    console.log($scope.date_flight_delay)
                    console.log($scope.comdriver)
                    $http({
                        method : 'POST',
                        url : "php/add_data.php",
                        data: $.param({orderid: $scope.data,
                            fdelay: $scope.timerequest,
                            fdate: $scope.date_flight_delay,
                            g_topoint_date: $scope.HHmmss,
                            voucher: $scope.sendVCID,
                            nameim: $scope.nameim,
                            state: $scope.cdelay_or_not,
                            from:  $scope.comfrom2,
                            comment: $scope.SELmessage_store_id,  //$scope.messagedriver,
                            lag: $scope.latituderel,
                            long: $scope.longituderel
                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            $('#restaurantdrivermodal').modal('hide');
                            $scope.spintakechattodriverselect = { 'display':'none'};
                    });
                  
                    
                }
                else if (x == 22){
                  console.log("in case")
                  $scope.spintakechattodriverselect = { 'display':'block'};
                    $scope.nameim = "";
                    $scope.cdelay_or_not = x;
                    console.log("not delay")
                    $scope.timerequest = "";
                    $scope.comfrom2 = "customer";
                    console.log($scope.timerequest)
                    console.log($scope.orderid)
                    $scope.date_flight_delay = "";
                    $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    console.log($scope.date_flight_delay)
                    console.log($scope.comdriver)
                    $http({
                        method : 'POST',
                        url : "php/add_data.php",
                        data: $.param({orderid: $scope.data,
                            fdelay: $scope.timerequest,
                            fdate: $scope.date_flight_delay,
                            g_topoint_date: $scope.HHmmss,
                            voucher: VC,
                            nameim: $scope.nameim,
                            state: $scope.cdelay_or_not,
                            from:  $scope.comfrom2,
                            comment: $scope.SELmessage_store_id,  //$scope.messagedriver,
                            lag: $scope.latituderel,
                            long: $scope.longituderel
                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            $('#attractiondrivermodal').modal('hide');
                            $scope.spintakechattodriverselect = { 'display':'none'};
                    });
                  
                    
                }
                else if (x == 23) {
                  //$scope.voucherselect = null;
                    //$scope.load = { 'display':'block'};
                    $scope.stylecheckin2 = { 'display':'none'};
                    $scope.stylecheckinclick = { 'display':'block'};




                      $scope.nameim = "";
                   
                      $scope.timerequest = $scope.selectnumNotify + ':'+ $scope.selectnumNotify2;
                      console.log($scope.timerequest)
                      console.log($scope.orderid)
                      $scope.cdelay_or_not = x;
                       $scope.comfrom1 = "customer";
                      $scope.date_flight_delay = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                      $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                      console.log($scope.date_flight_delay)
                      $http({
                          method : 'POST',
                          url : "php/add_data.php",
                          data: $.param({orderid: $scope.data,
                              fdelay: $scope.timerequest,
                              fdate: $scope.date_flight_delay,
                              g_topoint_date: $scope.HHmmss,
                              voucher: VC,
                              nameim: $scope.nameim,
                              state: $scope.cdelay_or_not,
                              from: $scope.comfrom1,
                               lag: $scope.latituderel,
                              long: $scope.longituderel
                             
                               

                          }),
                          headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                          }).success(function(res){
                              console.log(res)
                              $scope.load = { 'display':'none'};
                              $('#changedrivermodal_toop').modal('hide');
                               // location.reload();
                               $http({
                                  method : 'POST',
                                  url : "php/get_flight_fororderid.php",
                                  data: $.param({vc: VC}),
                                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                }).success(function(res){                  
                                    console.log(res)
                                    $scope.get_flight_all = res;
                                    //$scope.poupradio = { 'display':'none'};
                                    //$scope.timedelay2 = { 'display':'none'};
                                    $scope.stylecheckinclick = { 'display':'none'};

                                    //$scope.figbeforedriver = { 'position':'fixed'};

                                    $scope.id_popupbefore = { 'display':'block'};
                                    $scope.stylehour2 = { 'display':'block'};
                                    $scope.styleminutes2 = { 'display':'block'};
                                    

                             



                                   
                                    // angular.forEach($scope.get_flight_all, function (i) {
                                    //  if (i.voucher == $scope.sendVCID) {
                                    //     if (i.state == 1 || i.state == 2 || i.state == 3 || i.state == 4 || i.state == 5 || i.state == 7 || i.state == 8 || i.state == 9 || i.state == 10 || i.state == 11 || i.state == 12 || i.state == 13 || i.state == 14 || i.state == 15) {
                                    //       $scope.getallchat.push(i);
                                    //     }
                                    //   }
                                    // });
                                    // var lenc = $scope.getallchat.length;
                                    // //console.log($scope.getallchat.length-1)
                                    // $location.hash('anchor' + $scope.getallchat[lenc-1].id);
                                });
                               
                      });
                   
                     
                }
                //**********************TO OP****************************//
                else if (x == 24) {
                    $scope.spintakechattodriverselect = { 'display':'block'};

                  console.log($filter('date')($scope.datenewflight_toop.toISOString(), 'yyyy-MM-dd'))
                  console.log($scope.changeflight_toop)
                  console.log($scope.timerequest)
                  console.log(x)
                  $scope.datenewflightpas_toop = $filter('date')($scope.datenewflight_toop.toISOString(), 'yyyy-MM-dd');
                  console.log($scope.datenewflightpas_toop)
                    //$scope.stylebeforeclick_toop = { 'display':'block'};
                    //$scope.stylecheckin2 = { 'display':'none'};

                    $scope.nameim = "";                   
                    $scope.timerequest = $scope.selectnumNotify + ':'+ $scope.selectnumNotify2;
                    console.log($scope.timerequest)                      
                    $scope.cdelay_or_not = x;
                    $scope.comfrom1 = "customer";
                    $scope.date_flight_delay = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    console.log($scope.date_flight_delay)
                      $http({
                          method : 'POST',
                          url : "php/add_data.php",
                          data: $.param({orderid: $scope.data,
                              fdelay: $scope.timerequest,
                              fdate: $scope.date_flight_delay,
                              g_topoint_date: $scope.HHmmss,
                              voucher: $scope.sendVCID,
                              nameim: $scope.nameim,
                              state: $scope.cdelay_or_not,
                              from: $scope.comfrom1,
                              lag: $scope.latituderel,
                              long: $scope.longituderel,
                              newdate: $scope.datenewflightpas_toop,
                              flight: $scope.changeflight_toop
                             
                               

                          }),
                          headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                          }).success(function(res){
                              console.log(res)
                               $('#changedrivermodal').modal('hide');
                              $scope.load = { 'display':'none'};
                               // location.reload();
                               $http({
                                  method : 'POST',
                                  url : "php/get_flight_fororderid.php",
                                  data: $.param({vc: VC}),
                                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                }).success(function(res){                  
                                    console.log(res)
                                    $('#flightdelaydrivermodal_toop').modal('hide');
                                    $scope.spintakechattodriverselect = { 'display':'none'};
                                });
                              
                      });
                    
                     
                }
                else if (x == 25){
                  console.log("in case")
                  $scope.spintakechattodriverselect = { 'display':'block'};

                  //$scope.voucherselect = null;
                    //$scope.load = { 'display':'block'};
                    //$scope.styleload = { 'display':'block'};
                    $scope.nameim = "";
                    $scope.cdelay_or_not = x;
                    console.log("not delay")
                    $scope.timerequest = "";
                    $scope.comfrom2 = "customer";
                    console.log($scope.timerequest)
                    console.log($scope.orderid)
                    $scope.date_flight_delay = "";
                    $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    console.log($scope.date_flight_delay)
                    console.log($scope.comdriver)
                    $http({
                        method : 'POST',
                        url : "php/add_data.php",
                        data: $.param({orderid: $scope.data,
                            fdelay: $scope.timerequest,
                            fdate: $scope.date_flight_delay,
                            g_topoint_date: $scope.HHmmss,
                            voucher: $scope.sendVCID,
                            nameim: $scope.nameim,
                            state: $scope.cdelay_or_not,
                            from:  $scope.comfrom2,
                            comment: $scope.SELmessage_store_id,  //$scope.messagedriver,
                            lag: $scope.latituderel,
                            long: $scope.longituderel
                            

                             

                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            $('#landingdrivermodal_toop').modal('hide');
                            $scope.spintakechattodriverselect = { 'display':'none'};
                            $http({
                                  method : 'POST',
                                  url : "php/get_flight_fororderid.php",
                                  data: $.param({vc: VC}),
                                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                }).success(function(res){                  
                                    console.log(res)
                                    angular.forEach($scope.get_flight_all, function (i) {
                                     if (i.voucher == $scope.sendVCID) {
                                        if (i.state != 6 ) {
                                          $scope.getallchat.push(i);
                                          
                                        }
                                        
                                      }
                                    });
                                   
                                });
                           
                    });
                  
                    
                }
                else if (x == 26){
                  console.log("in case")
                  $scope.spintakechattodriverselect = { 'display':'block'};

                  //$scope.voucherselect = null;
                    //$scope.load = { 'display':'block'};
                    //$scope.styleload = { 'display':'block'};
                    $scope.nameim = "";
                    $scope.cdelay_or_not = x;
                    console.log("not delay")
                    $scope.timerequest = "";
                    $scope.comfrom2 = "customer";
                    console.log($scope.timerequest)
                    console.log($scope.orderid)
                    $scope.date_flight_delay = "";
                    $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    console.log($scope.date_flight_delay)
                    console.log($scope.comdriver)
                    $http({
                        method : 'POST',
                        url : "php/add_data.php",
                        data: $.param({orderid: $scope.data,
                            fdelay: $scope.timerequest,
                            fdate: $scope.date_flight_delay,
                            g_topoint_date: $scope.HHmmss,
                            voucher: $scope.sendVCID,
                            nameim: $scope.nameim,
                            state: $scope.cdelay_or_not,
                            from:  $scope.comfrom2,
                            comment: $scope.SELmessage_store_id,  //$scope.messagedriver,
                            lag: $scope.latituderel,
                            long: $scope.longituderel
                            

                             

                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            $('#onthecardrivermodal_toop').modal('hide');
                            $scope.spintakechattodriverselect = { 'display':'none'};
                            $http({
                                  method : 'POST',
                                  url : "php/get_flight_fororderid.php",
                                  data: $.param({vc: VC}),
                                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                }).success(function(res){                  
                                    console.log(res)
                                    
                                    angular.forEach(res, function (i) {
                                     if (i.voucher == $scope.sendVCID) {
                                        if (i.state != 6) {
                                          $scope.getallchat.push(i);
                                          
                                        }
                                        
                                      }
                                    });
                                });
                           
                    });
                  
                    
                }
                else if (x == 27){
                  console.log("in case")
                  console.log($scope.sendVCID)

                  $scope.spintakechattodriverselect = { 'display':'block'};

                  //$scope.voucherselect = null;
                    //$scope.load = { 'display':'block'};
                    //$scope.styleload = { 'display':'block'};
                    $scope.nameim = "";
                    $scope.cdelay_or_not = x;
                    console.log("not delay")
                    $scope.timerequest = "";
                    $scope.comfrom2 = "customer";
                    console.log($scope.timerequest)
                    console.log($scope.orderid)
                    $scope.date_flight_delay = "";
                    $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    console.log($scope.date_flight_delay)
                    console.log($scope.comdriver)
                    $http({
                        method : 'POST',
                        url : "php/add_data.php",
                        data: $.param({orderid: $scope.data,
                            fdelay: $scope.timerequest,
                            fdate: $scope.date_flight_delay,
                            g_topoint_date: $scope.HHmmss,
                            voucher: $scope.sendVCID,
                            nameim: $scope.nameim,
                            state: $scope.cdelay_or_not,
                            from:  $scope.comfrom2,
                            comment: $scope.SELmessage_store_id,  //$scope.messagedriver,
                            lag: $scope.latituderel,
                            long: $scope.longituderel
                            

                             

                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            $('#lostdrivermodal_toop').modal('hide');
                            $scope.spintakechattodriverselect = { 'display':'none'};
                            $http({
                                  method : 'POST',
                                  url : "php/get_flight_fororderid.php",
                                  data: $.param({vc: VC}),
                                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                }).success(function(res){                  
                                    console.log(res)
                                    angular.forEach(res, function (i) {
                                     if (i.voucher == $scope.sendVCID) {
                                        if (i.state != 6 ) {
                                          $scope.getallchat.push(i);
                                          
                                        }
                                      }
                                    });
                                });
                           
                    });
                  
                    
                }
                else if (x == 28){
                  console.log("in case")
                  $scope.spintakechattodriverselect = { 'display':'block'};

                  //$scope.voucherselect = null;
                    //$scope.load = { 'display':'block'};
                    //$scope.styleload = { 'display':'block'};
                    $scope.nameim = "";
                    $scope.cdelay_or_not = x;
                    console.log("not delay")
                    $scope.timerequest = "";
                    $scope.comfrom2 = "customer";
                    console.log($scope.timerequest)
                    console.log($scope.orderid)
                    $scope.date_flight_delay = "";
                    $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    console.log($scope.date_flight_delay)
                    console.log($scope.comdriver)
                    $http({
                        method : 'POST',
                        url : "php/add_data.php",
                        data: $.param({orderid: $scope.data,
                            fdelay: $scope.timerequest,
                            fdate: $scope.date_flight_delay,
                            g_topoint_date: $scope.HHmmss,
                            voucher: $scope.sendVCID,
                            nameim: $scope.nameim,
                            state: $scope.cdelay_or_not,
                            from:  $scope.comfrom2,
                            comment: $scope.SELmessage_store_id,  //$scope.messagedriver,
                            lag: $scope.latituderel,
                            long: $scope.longituderel
                            

                             

                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            $('#restaurantdrivermodal_toop').modal('hide');
                            $scope.spintakechattodriverselect = { 'display':'none'};
                            $http({
                                  method : 'POST',
                                  url : "php/get_flight_fororderid.php",
                                  data: $.param({vc: VC}),
                                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                }).success(function(res){                  
                                    console.log(res)
                                    
                                    angular.forEach(res, function (i) {
                                     if (i.voucher == $scope.sendVCID) {
                                        if (i.state != 6) {
                                          $scope.getallchat.push(i);
                                          
                                        }
                                        
                                      }
                                    });
                                });
                           
                    });
                  
                    
                }
                 else if (x == 29){
                  console.log("in case")
                  $scope.spintakechattodriverselect = { 'display':'block'};

                  //$scope.voucherselect = null;
                    //$scope.load = { 'display':'block'};
                    //$scope.styleload = { 'display':'block'};
                    $scope.nameim = "";
                    $scope.cdelay_or_not = x;
                    console.log("not delay")
                    $scope.timerequest = "";
                    $scope.comfrom2 = "customer";
                    console.log($scope.timerequest)
                    console.log($scope.orderid)
                    $scope.date_flight_delay = "";
                    $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    console.log($scope.date_flight_delay)
                    console.log($scope.comdriver)
                    $http({
                        method : 'POST',
                        url : "php/add_data.php",
                        data: $.param({orderid: $scope.data,
                            fdelay: $scope.timerequest,
                            fdate: $scope.date_flight_delay,
                            g_topoint_date: $scope.HHmmss,
                            voucher: $scope.sendVCID,
                            nameim: $scope.nameim,
                            state: $scope.cdelay_or_not,
                            from:  $scope.comfrom2,
                            comment: $scope.SELmessage_store_id,  //$scope.messagedriver,
                            lag: $scope.latituderel,
                            long: $scope.longituderel
                            

                             

                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            $('#attractiondrivermodal_toop').modal('hide');
                            $scope.spintakechattodriverselect = { 'display':'none'};
                            $http({
                                  method : 'POST',
                                  url : "php/get_flight_fororderid.php",
                                  data: $.param({vc: VC}),
                                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                }).success(function(res){                  
                                    console.log(res)
                                    angular.forEach(res, function (i) {
                                     if (i.voucher == $scope.sendVCID) {
                                        if (i.state != 6) {
                                          $scope.getallchat.push(i);
                                          
                                        }
                                        
                                      }
                                    });
                                    
                                });
                           
                    });
                  
                    
                }
            
    }
    $scope.success1;
    $scope.success2;
             
    $scope.update_social_bookAgent = function(){
        
            
        if ($scope.s_facenew == undefined) {
            $scope.s_facenew = $scope.socialfaceid;
        }
       
        if ($scope.s_linenew == undefined) {
            
            $scope.s_linenew = $scope.sociallineid;
        }
        
        if ($scope.s_wechatnew == undefined) {
            $scope.s_wechatnew = $scope.socialwechatid;
        }
        
        if ($scope.s_whatnew == undefined) {
            $scope.s_whatnew = $scope.socialwhatid;
        }
        
        if ($scope.s_skypenew == undefined) {
            $scope.s_skypenew = $scope.socialskypeid;
        }
        
        if ($scope.s_wangnew == undefined) {
            $scope.s_wangnew = $scope.socialwangid;
        }
        
        if ($scope.s_qqnew == undefined) {
            $scope.s_qqnew = $scope.socialqqid;
        }
        if ($scope.s_zellonew == undefined) {
            $scope.s_zellonew = $scope.socialzelloid;
        }
         var data =  [{id: $scope.idwechat,name: $scope.s_wechatnew},
                    {id: $scope.idline, name: $scope.s_linenew},                
                    {id: $scope.idqq, name: $scope.s_qqnew},
                    {id: $scope.idwang, name: $scope.s_wangnew},
                    {id: $scope.idskype, name: $scope.s_skypenew},
                    {id: $scope.idwhat, name: $scope.s_whatnew},
                    {id: $scope.idface, name: $scope.s_facenew},
                    {id: $scope.idzello, name: $scope.s_zellonew}




        ];
         console.log(data)  
        
        
        
        
        
        $http({
            method : 'POST',
            url : "php/update-social-book_agent.php",
            data: data,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(res){
                console.log(res)
                //$scope.success1 = 1;
                //if ($scope.success2 == 1) {
                    $scope.editsocialall = { 'display':'none'};

                    //location.reload();
                //}
                 //
        });

       
    }
  
    $scope.savesocialquest_detail = function(){
        console.log($scope.mail_or_phone)
       
        if ($scope.phonenew == undefined) {
            $scope.phonenew = $scope.web_book_agent_phone;
        }
         
        if ($scope.localphonenew == undefined) {
            $scope.localphonenew = $scope.local_phone;
        }
         
        if ($scope.emailnew == undefined) {
            $scope.emailnew = $scope.tb_web_book_agent_email;
        }
        if ($scope.email2new == undefined) {
            $scope.email2new = $scope.tb_web_book_agent_email2;
        }
        if ($scope.mail_or_phone == 1) {
            if ($scope.chmail == 1 || $scope.chmail2 == 1) {
                if ($scope.em1 == undefined) {
                    $scope.reqmail = { 'display':'block'};
                       
                }
                else if ($scope.em2 == undefined) {
                    $scope.reqmail2 = { 'display':'block'};
                }
                else if (($scope.chmail == 1 && $scope.em1 != undefined) || $scope.chmail2 == 1 && $scope.em2 != undefined ) {
                    // $scope.Ephone1 = { 'display':'none'};
                    // $scope.Ephone2 = { 'display':'none'};
                    $http({
                        method : 'POST',
                        url : "php/update-social-quest-detail.php",
                        data: $.param({orderid: $scope.orderid,
                            email: $scope.emailnew,
                            email2: $scope.email2new,
                            phone: $scope.phonenew,
                            localphone:$scope.localphonenew

                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                                $scope.editEmail2 = { 'display':'none'};
                                $scope.editEmail1 = { 'display':'none'};
                               
                                $scope.tb_web_book_agent_email = $scope.emailnew;
                                $scope.tb_web_book_agent_email2 = $scope.email2new;
                               
                    });    
                }
            }
            if ($scope.chmail == 0 || $scope.chmail2 == 0) {
                $scope.editEmail2 = { 'display':'none'};
                $scope.editEmail1 = { 'display':'none'};
            }

        }
        else if ($scope.mail_or_phone == 2) {

           $http({
            method : 'POST',
            url : "php/update-social-quest-detail.php",
            data: $.param({orderid: $scope.orderid,
                email: $scope.emailnew,
                email2: $scope.email2new,
                phone: $scope.phonenew,
                localphone:$scope.localphonenew

            }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(res){
                $scope.Ephone1 = { 'display':'none'};
                $scope.Ephone2 = { 'display':'none'};
                   
                $scope.web_book_agent_phone = $scope.phonenew;
                $scope.local_phone = $scope.localphonenew;
                    
        });     
        }
        
        
    }
    $scope.Eupdatecomment = function(){
        $scope.timedudatecomment = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
            $http({
                method : 'POST',
                url : "php/updatecomment.php",
                data: $.param({voucher: $scope.VOUCHER,
                                driving: $scope.driving, 
                                clean: $scope.clean,
                                comment:$scope.comment,
                                times:  $scope.time,
                                comment_date:$scope.timedudatecomment
                }),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                            
                location.reload();
            });
    }


     
    
        $scope.language = function(x){
            $scope.lopen = { 'display':'none' };
            if(x==1){
                //localStorage.setItem('language',JSON.stringify(x));
                //$cookies.remove("language");
                $cookies.put("language", 1);
                $scope.flag = 'usa.ico';
                $scope.textminute = "Minute";
                $scope.texthour = "Hour";
                $scope.flagcheck = 1;
                $scope.Countryfont = "Please select country";
                $scope.Countryfont2 = "Please select country";
                $scope.nophoto = "No photo"; 
                $scope.SELmessage = ""; 
                
            }
            else if(x==2){
                //localStorage.setItem('language',JSON.stringify(x));
                //$cookies.remove("language");
                $cookies.put("language", 2);
                $scope.flag = 'thai.ico';
                $scope.flagcheck = 2;
                $scope.textminute = "นาที";
                $scope.texthour = "ชั่วโมง";
                $scope.Countryfont = "โปรดเลือกประเทศ";
                $scope.Countryfont2 = "โปรดเลือกประเทศ";
                $scope.nophoto = "ยังไม่มีรูปภาพ"; 
                $scope.SELmessage = ""; 
                
                
                //event_change_month("th");
            }
            else if(x==3){
                //localStorage.setItem('language',JSON.stringify(x));
                //$cookies.remove("language");
                $cookies.put("language", 3);
                $scope.flag = 'china.ico';
                $scope.textminute = "分钟";
                $scope.texthour = "小时";
                $scope.Countryfont = "請選擇國家";
                $scope.Countryfont2 = "請選擇國家";
                $scope.flagcheck = 3;
                $scope.nophoto = "没有照片"; 
                $scope.SELmessage = ""; 

            }
            
            goFullscreen(); 
            console.log($scope.textminute)
            $scope.styleminutes = { 'display':'block'};
            $scope.stylehour = { 'display':'block'};
             $scope.styleminutes2 = { 'display':'block'};
            $scope.stylehour2 = { 'display':'block'};
            $scope.lstart = { 'display':'block' };
            $scope.lopen = { 'display':'none' };
            $scope.stylelangq = { 'display':'none' };
        }
        $scope.change_language = function(){
            $scope.lstart = { 'display':'block' };
             $scope.stylelangq = { 'display':'block' };
            //$scope.lopen = { 'display':'block' };
        }
        $scope.mapaaaa = function(){
                    //alert("aaa")
            $window.open($scope.mapsss, '_blank');
        }
        $scope.maptoaaa = function(){
            console.log($scope.maptosss)
            $window.open('www.google.com', '_blank');
        }
        $scope.trustSrc = function(src) {
          return $sce.trustAsResourceUrl(src);
        }
        
        /*$scope.useLang = function (lang) {
            alert(lang)
            $translate.use(lang);
          }*/
          
        
       

  
});
app.directive('errSrc', function() {
      return {
          link: function(scope, element, attrs) {
              element.bind('error', function() {
                  if (attrs.src != attrs.errSrc) {
                    attrs.$set('src', attrs.errSrc);
                  }
              });
          }
      }
  });
app.filter('trusted', function($sce){
return function(url) {
    return $sce.trustAsResourceUrl(url);
};
});
app.directive("fileInput", function($parse){  
      return{  
           link: function($scope, element, attrs){ 
                element.on("change", function(event){  
                    var files = event.target.files;
                    console.log(files) 
                    console.log(angular.element(event.currentTarget))
                    if (files != undefined) {
                        console.log("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                        $scope.newtakephoto = {'display':'none'};
                        $scope.blockhavephoto = {'display':'block'};
                        $scope.newtakephoto_toop = {'display':'none'};
                        $scope.blockhavephoto_toop = {'display':'block'};
                        $scope.newtakephoto2 = {'display':'none'};
                        $scope.newtakephoto2_toop = {'display':'none'};
                        angular.element(document.querySelector('.id_popupwait_toop')).css('top','7%');

                        angular.element(document.querySelector('#blah')).css("display","block");
                        angular.element(document.querySelector('#blah2')).css("display","block");
                        angular.element(document.querySelector('#blah3')).css("display","block");
                        angular.element(document.querySelector('#blah4')).css("display","block");
                        angular.element(document.querySelector('.box-mobal2')).css('top','7%');
                         angular.element(document.querySelector('.nophoto2')).css("display","none")  
                        angular.element(document.querySelector('.nophoto')).css("display","none");
                        $parse(attrs.fileInput).assign($scope, element[0].files);  
                        $scope.$apply(); 
                    }
                });  
           }  
      } 
      
 });

app.directive('setFocus', function(){
  return{
      scope: {setFocus: '='},
      link: function(scope, element){
         if(scope.setFocus) element[0].focus();             
      }
  };
});
app.config(function(NotificationProvider) {
                // Setup Custom template by default
                NotificationProvider.setOptions({
                    templateUrl: 'home.php'
                });
            });

app.directive('multiselect',['$document', function($document){

return {
  restrict: 'E',
  require: '?ngModel',
  scope: {
    choices: '=',
    selected: '='
  },
  templateUrl: 'select.html',
  replace: true,
  link: function(scope, element, attr){
    
      scope.isPopupVisible = false;

      scope.toggleSelect = function(){
        scope.isPopupVisible = !scope.isPopupVisible;
      }

      $document.bind('click', function(event){
        var isClickedElementChildOfPopup = element
          .find(event.target)
          .length > 0;
          
        if (isClickedElementChildOfPopup)
          return;
          
        scope.isPopupVisible = false;
        scope.$apply();
      });
  }
};
}]);


