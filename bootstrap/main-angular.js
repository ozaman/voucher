var app = angular.module('myApp', ['ngCookies','ngRoute','angular.filter','ui.bootstrap']);
    app.controller('myCtrl', function($scope,$http,$window,$filter,$interval,$timeout,$cookies,$cookieStore){
         $scope.local_phone; 
         $scope.web_book_agent_phone;
         $scope.chmail = 0;
         $scope.chmail2 = 0;
         $scope.mail_or_phone; 
        $scope.lopen = { 'display':'none' };
        $scope.bobymain = { 'display':'none'};
        $scope.load = { 'display':'block'};
        $scope.timedelay = { 'display':'none'};
        var language = $cookieStore.get("language");

       // $scope.lang = JSON.parse(localStorage["language"]);
        console.log(language)
        if( language==undefined){
            
            $scope.stylelangq = { 'display':'block' };
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
        // $scope.editskype = false;
        // $scope.editqq = false;
        // $scope.editface= false;
        // $scope.editwhat = false;
        // $scope.editwechat = false;
        // $scope.editwang = false;
        // $scope.editline= false;
         $scope.editphone = false;
         $scope.editlocalphone = false;
         $scope.Ecomment = false;
         $scope.editmailshow = false;
         $scope.editmail2show = false;
        // $scope.LINEID = false;
        // $scope.SKYPEID = false;
        // $scope.WANGWANGID = false;
        // $scope.WECHATID = false;
        // $scope.WhatsAppID = false;
        // $scope.ZELLOID = false;
        // $scope.FACEBOOK = false;
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
        
        //$scope.idvoucher = $cookies.get('idvoucher');
        //console.log($scope.idvoucher)
        $scope.order = $cookies.get('order');
        console.log($scope.order)
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
        // $('.clickme').click(function() {
        //  $scope.poupradio = { 'display':'block' };
        // });
        $scope.order = $cookies.get('order');
        console.log($cookies.get('order'))
        $scope.datebooks2 = [];
        $http({
            method : 'POST',
            url : "PHP/getorderid.php",
            data: $.param({id: $cookies.get('order')}),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(res){
                $scope.load = { 'display':'none'};
                console.log(res)

                //$scope.VocherID = res;
                $scope.TB_admin_companyhome = res[0].TB_admin_company;
                $scope.agenthome = res[0].TB_order_agent;
                $scope.VocherID = [];
                for (var i = 0; i < res.length; i++) {

                    $scope.VocherID.push(res[i])

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
                    // $scope.datebooks = [];
                    // $scope.datebooks2 = [];
                    //$scope.timesss.push(res[i].TB_order_outdate +' '+ res[i].airout_h +':'+ res[i].airout_m);
                    $scope.datebooks.push(new Date(res[i].TB_order_outdate +' '+ res[i].airout_h +':'+ res[i].airout_m));
                    //$scope.VocherID.push($scope.datebooks[i]);

                    $scope.datebooks2.push(res[i].TB_order_outdate +' '+ res[i].airout_h +':'+ res[i].airout_m + ':00')


                }
                
                for (var i = 0; i < $scope.datebooks2.length; i++) {
                    var s = 0;
                        angular.forEach($scope.VocherID, function (y) {
                            
                            if (s==i) {
                                if ($scope.datebooks2[i] < $filter('date')(new Date(),'yyyy-MM-dd HH:mm:ss ')) {
                                     y.datessnew = 1;

                                     y.styleiconhome = "main-icon3";
                                     y.styletabelhead = "styletabelhead3";
                                     //y.date = $filter('date')(new Date(),'yyyy-MM-dd HH:mm:ss ');
                                     //y.datessss = $scope.datebooks2[i];
                                     //y.datessss2 = $filter('date')(new Date($scope.datebooks[i]),'yyyy-MM-dd HH:mm:ss Z');


                                }
                                else{
                                    //y.datessss = $scope.datebooks2[i];
                                    y.datessnew = 2;
                                    //y.date = $filter('date')(new Date(),'yyyy-MM-dd HH:mm:ss ');
                                    y.styleiconhome = "main-icon4";
                                    y.styletabelhead = "styletabelhead4"
                                }
                               // y.datessnew = $scope.datebooks2[i];
                                

                            }
                            s++;
                            //if (s > $scope.datebooks2.length) {}
                           
                         });
                    
                
                

                }
                $scope.voucherselect = $scope.VocherID;
                console.log($scope.voucherselect)
                
                // for (var i = 0; i < $scope.VocherID.length; i++) {
                //     if ($scope.VocherID[i].datessnew == 1) {
                //        $scope.styleiconhome = "main-icon3";
                //     }
                //     else{
                //         $scope.styleiconhome = "main-icon4";
                //     }
                //   }
                // for (var i = 0; i < $scope.datebooks.length; i++) {
                //    angular.forEach($scope.VocherID[i], function (y) {
                //             y.datessnew = $scope.datebooks[i];
                //          });
                // }

              //   for (var i = 0; i < $scope.VocherID.length; i++) {
              //       $scope.VocherID[i].push({
              // datessnew: $scope.comparedate[i]
             
              //   });
              //       console.log($scope.VocherID)
              //   }
               
                //$scope.datebooks = //$filter('date')(new Date($scope.timesss),'yyyy-MM-dd');
                //$scope.datebooks = new Date($scope.timesss).toISOString()s;
                // console.log($scope.timesss)
                // console.log($scope.VocherID)
                // $scope.chTime = [];
                // for (var i = 0; i < $scope.VocherID.length; i++) {
                //     $scope.chTime.push($scope.VocherID[i].datessnew.getDate());
                // }
                // console.log($scope.chTime)

                // var getAuctionItems = function () {
                //         //var c = new Date();
                //         processAuctionItems(res);
                //         $scope.auctions = res;
                //         console.log($scope.auctions)
                       
                //         //$timeout(getAuctionItems, 10000);
                    
                // };
                // var tick = function () {
                //     $scope.currentTime = moment();
                //     processAuctionItems($scope.auctions);
                //     $timeout(tick, 1000);
                // }
                // var processAuctionItems = function (data) {
                //     console.log(data)
                //     angular.forEach(data, function (item) {
                //         item.remainingTime = datetime.getRemainigTime(item.AuctionEndDateTime);
                //         console.log(item.remainingTime)
                //     });
                // }
                // $scope.currentTime = moment();
                // getAuctionItems();
                // $timeout(tick, 1000);
                // $timeout(getAuctionItems, 10000);
                                                        

                              
        });
        // $scope.currentTime = moment();
        // var tick = function() {
        //     $scope.currentTime = moment();
        //     $timeout(tick, 1000);
        // }
        // $timeout(tick, 1000);
        $scope.getvoucher = function(x){
            $scope.VOUCHER = x;
            localStorage.setItem('item',JSON.stringify(x));
            var intervalvocher =  $interval(function() {
                callvoucher(x);
                $interval.cancel(intervalvocher);
            },1000 );
            
        }
        // $scope.getvoucher = function(id){
        //     $scope.idorderS
        // }
        if (typeof localStorage["item"] != "undefined" && localStorage["item"] != "undefined") {
          $scope.item = JSON.parse(localStorage["item"]);
          console.log($scope.item);
              if ($scope.VOUCHER == undefined) {
                $scope.VOUCHER = $scope.item;
                
                callvoucher($scope.VOUCHER);
            }
        }

        
        function callvoucher(id){

            $scope.VOUCHER = id;
        $http({
                    method : 'POST',
                    url : "PHP/voucher.php",
                    data: $.param({id: $scope.VOUCHER}),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).success(function(res){
                        console.log(res)
                        $scope.country_id = res[0].country_id;
                        // if ($scope.country_id == 45 || $scope.country_id == 96 || $scope.country_id == 189 || $scope.country_id == 207) {

                        //     //$cookies.put("language", 3);
                        //     $scope.flag = 'china.ico';
                        //     $scope.flagcheck = 3;
                        //     $cookies.put("language", 3);
                        //     $scope.Countryfont = "請選擇國家";
                        //     $scope.Countryfont2 = "請選擇國家";
                        //     $scope.textminute = "分钟";
                        //     $scope.texthour = "小时";

                        // }
                        // else if($scope.country_id == 210){
                        //     $cookies.put("language", 2);
                        //     $scope.flag = 'thai.ico';
                        //     $scope.flagcheck = 2;
                        //     $scope.Countryfont = "โปรดเลือกประเทศ";
                        //     $scope.Countryfont2 = "โปรดเลือกประเทศ";
                        //     $scope.textminute = "นาที";
                        //     $scope.texthour = "ชั่วโมง";
                        // }
                        // else{
                        //     $cookies.put("language", 1);
                        //     $scope.flag = 'usa.ico';
                        //     $scope.flagcheck = 1;
                        //      $scope.textminute = "Minute";
                        //     $scope.texthour = "Hour";
                        //     $scope.Countryfont = "Please select country";
                        //     $scope.Countryfont2 = "Please select country";
                        // }
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
                         var ss = "http://t-booking.com/demo/print.php?name=admin/voucher&file=transfer&no="+$scope.id+"&order="+$scope.tb_web_book_agent_id+"&code="+$scope.code+"";
                         console.log(ss)
                        $scope.iframe = {src:ss};
                        console.log($scope.program)
                        $scope.load = { 'display':'none'};
                        $scope.bobymain = { 'display':'block'};
                         
                        $http({
                            method : 'POST',
                            url : "PHP/transferproduct.php",
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
                                        url : "PHP/getRental.php",
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
                                            url : "PHP/getRental_down.php",
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
                                        url : "PHP/capa.php",
                                        data: $.param({id: $scope.web_car_car_model}),
                                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                        }).success(function(res){
                                            console.log(res)
                                            $scope.detailitem = res;
                                            

                              
                                     });
                                    $http({
                                        method : 'POST',
                                        url : "PHP/gallery-car.php",
                                        data: $.param({id: $scope.web_car_car_model}),
                                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                        }).success(function(res){
                                            console.log(res)
                                            
                                                
                                                $scope.gallerycar = res;
                                            
                                            
                                            

                              
                                     });
                                    $http({
                                        method : 'POST',
                                        url : "PHP/getcomment.php",
                                        data: $.param({voucher: $scope.VOUCHER}),
                                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                        }).success(function(res){
                                            console.log(res)
                                           // var interval =  $interval(function() {
                                           
                                            
                                           //  $interval.cancel(interval);
                                           //  },2000 );
                                            $scope.getcommentview = res;
                                            
                                            if ($scope.getcommentview.length == 0) {
                                                $scope.btncomview= { 'display':'none'};
                                                $scope.senddata= { 'display':'block'};
                                            }
                                            else{
                                                $scope.btncomview= { 'display':'block'};
                                                $scope.senddata= { 'display':'none'};
                                            }
                                            
                                             
                                    });
                                        $http({
                                        method : 'POST',
                                        url : "PHP/country.php",
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
                                    $http({
                                        method : 'POST',
                                        url : "PHP/get_flight.php",
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

                                            $http({
                                        method : 'POST',
                                        url : "PHP/getsocial.php",
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
                                        // interval2 =  $interval(function() {
                                        //     $http({
                                        //             method : 'POST',
                                        //             url : "PHP/voucher.php",
                                        //             data: $.param({id: $scope.VOUCHER}),
                                        //             headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                        //             }).success(function(res){
                                                        
                                                        
                                        //                 $scope.driver_topoint = res[0].driver_topoint;
                                        //                 $scope.guest_topoint = res[0].guest_topoint;
                                        //                 $scope.driver_topoint_date = res[0].driver_topoint_date;
                                        //                 $scope.guest_topoint_driver_confirm = res[0].guest_topoint_driver_confirm;
                                        //                 $scope.guest_topoint_date = res[0].guest_topoint_date;
                                        //                 $scope.alert_get_call = res[0].alert_get_call;
                                        //                 if ($scope.guest_topoint == 0) {
                                        //                     console.log("asasas")
                                        //                     //$scope.stylecheckin = { 'display':'block'};
                                        //                 }
                                        //                 else{
                                        //                      //$scope.stylecheckin = { 'display':'none'};
                                        //                 }
                                        //                 if ($scope.driver_topoint == 1 && $scope.guest_topoint_driver_confirm == 0) {
                                        //                             $scope.boxbg = { 'display':'block'};
                                        //                             console.log("in case 1")
                                                                    
                                        //                 }
                                        //                 else if( $scope.guest_topoint_driver_confirm == 1) {
                                        //                     $scope.boxbg = { 'display':'none'};
                                        //                     console.log("in case 22")
                                        //                 }
                                                        
                                                        
                                                      
                                        // });
                                        // },60000 );
                                                
                                          
                                            
                                             
                                    });
            
                                

                              
                    });
                      
        });
$scope.containerHeight = $('.titledriver').height()*-1;
         $('.contenerdriver').css = { 'margin-top':'140px'};
        if ($scope.containerHeight>$scope.height) {
            alert("in")
        }
        //$scope.contenerdriver = $('.contenerdriver').css = { 'margin-top':'140px'};
        console.log($scope.containerHeight)
        console.log($scope.contenerdriver)
    }
    
    
    //}
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
     //$scope.Countryfont = ' ' + '(' + '+' + i.phonecode + ')' + i.name;
      //console.log($event)
      //var x = 'flagstrap-icon-'+i.iso;
      //$scope.class = x;
      //console.log($scope.class)
      //angular.element("#flagstrap-icon").addClass($scope.class);
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
     //$scope.Countryfont2 = ' ' + '(' + '+' + i.phonecode + ')' + i.name;
      //console.log($event)

      //var x = 'flagstrap-icon-'+i.iso;
      //$scope.class2 = x;
      //console.log($scope.class2)
      //angular.element("#flagstrap-icon2").addClass($scope.class2);
      $scope.phonesend2 = $scope.selectcountryValue2;
      var p2 = $scope.local_phone.split(" ");
      $scope.localphonenew = $scope.phonesend2 + ' ' + p2[1];
      console.log($scope.selectcountryValue2)
    }


    $scope.getclean = function(clean){
        $scope.clean = clean;

    }
    $scope.getdriving = function(driving){
        $scope.driving = driving;
        
    }
    $scope.punctuality = function(t){
        //alert(t)
        $scope.time = t;
        
    }
    $scope.updatecomment = function(){
        $scope.comment_date = $filter('date')(new Date(), 'yyyy-MM-dd HH:mm');
        console.log($scope.clean)
        console.log($scope.driving)
        console.log($scope.comment)
        console.log($scope.time)
        $http({
                        method : 'POST',
                        url : "PHP/comment.php",
                        data: $.param({voucher: $scope.VOUCHER,
                                       driving: $scope.driving, 
                                       clean: $scope.clean,
                                       comment:$scope.comment,
                                       times:  $scope.time,
                                       comment_date:$scope.comment_date
                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            //$window.reload();
                             location.reload();
                            

                          
                });

    }
    $scope.confirm = function(){
        /*$scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
        
        console.log( $scope.HHmmss)
        

           
            $http({
                method : 'POST',
                url : "http://t-booking.com/web/PHP/checkin.php",
                data: $.param({voucher: $cookies.get('idvoucher'),time:$scope.HHmmss}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                    console.log(res)
                    //$scope.stylecheckin = { 'display':'none'};
                    $scope.boxbg2 = { 'display':'none'};
                     location.reload();
                    

                          
        });*/

    }
    $scope.confirm_driverarrived = function(){
        $scope.showModal = false;
        $scope.guest_confirm = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
        console.log($scope.guest_confirm)
        $http({
            method : 'POST',
            url : "PHP/confirm-guest.php",
            data: $.param({voucher: $scope.VOUCHER,guest_confirm : $scope.guest_confirm}),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(res){
                $scope.boxbg = { 'display':'none'};
                 location.reload();
        });
    }
    $scope.cancel = function(){
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
        $scope.sPickupplace= { 'display':'none'};
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
/***************************************************  */  
/******************* New-angular-KM ***************  */  
/***************************************************  */           

        // $interval.cancel(interval);
    }
    // $scope.open_check = function(){
    //     $scope.boxbg2 = { 'display':'block'};
    // }
    $scope.agent_guest_name = function(x){
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
                  //var x = 'flagstrap-icon-'+$scope.country[i].iso;
                  //$scope.class = x;
                  //console.log($scope.class)
                  //angular.element("#flagstrap-icon").addClass($scope.class);
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
                //console.log($scope.country[i].phonecode)
                
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
                  //var x = 'flagstrap-icon-'+$scope.country[i].iso;
                  //$scope.class2 = x;
                  //console.log($scope.class2)
                  //angular.element("#flagstrap-icon2").addClass($scope.class2);
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
    $scope.capacity = function(){
        $scope.boxbg3 = { 'display':'block'};
    }
    $scope.showgallery = function(){
        $scope.galleryview= { 'display':'block'};
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
    $scope.pickupsign = function(){
        
        $scope.sign= { 'display':'block'};
        
    }
    $scope.meetingpoint = function(){
        $scope.meeting= { 'display':'block'};
        
    }
    $scope.snapphoto = function(){

        $scope.upphoto = { 'display':'block'};
        
    }
    $scope.Driverarrived = function(){
        $scope.Darrived= { 'display':'block'};
        
    }
    $scope.Guestacknowledged = function(){
        $scope.Gacknowledged = { 'display':'block'};
        
    }
    $scope.Checkinguest = function(){
        $scope.sCheckinguest = { 'display':'block'};
        
    }
    $scope.Driveracknowledged = function(){
        $scope.sDriveracknowledged = { 'display':'block'};
        
    }
    $scope.Driverpickup = function(){
            $scope.sDriverpickup = { 'display':'block'};
    }
    $scope.Complete = function(){
        $scope.sComplete = { 'display':'block'};
        
    }
    $scope.Pickupplace = function(x){
        $scope.itemmap = x;
        console.log($scope.itemmap)
        $scope.sPickupplace = { 'display':'block'};
        
    }
    $scope.Toplace = function(){
        $scope.sToplace = { 'display':'block'};
        
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
    $scope.showimages1 = function(i){
        $scope.imagesselet = i.img_post_date;
        $scope.imagesselet2 = i.yourself_post_date;
        

        $scope.styleshowimages1 = { 'display':'block'};
        
    }
    $scope.showimages2 = function(i){
        $scope.imagesselet2 = i;
        

        $scope.styleshowimages2 = { 'display':'block'};
        
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
    



    /*--------------EDIT GUEST null------------*/
    
    // $scope.editfunskype = function () {
    //     //alert("true")
    //     $scope.editskype = true;

    // }
    // $scope.editfunline = function(){
    //     $scope.editline = true; 
    // }
    // $scope.editfunface = function () {
    //     //if (type.social_type_id == 1) {
    //       $scope.editface = true;  
    //     // }
    //     // else if (type.social_type_id == 2) {
    //     //   $scope.editline = true;  
    //     // }
    //     // else if (type.social_type_id == 3) {
    //     //  // $scope.editline = true;  
    //     // }
    //     // else if (type.social_type_id == 4) {
    //     //   $scope.editqq = true;  
    //     // }
    //     // else if (type.social_type_id == 5) {
    //     //   $scope.editwang = true;  
    //     // }
    //     // else if (type.social_type_id == 6) {
    //     //   $scope.editskype = true;  
    //     // }
    //     // else if (type.social_type_id == 7) {
    //     //   $scope.editwhat = true;  
    //     // }
    //     // else if (type.social_type_id == 8) {
    //     //   $scope.editface = true;  
    //     // }
        

    // }
    $scope.datarooo;
    $scope.editfunsocial = function(x){
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
        
        //angular.element(document.querySelector('.show'+x.id)).css('display','none')
        
        // if (x.fun_name == "LINEID") {

        //     //$scope.LINEID = true;
            
        // }
        // if (x.fun_name == "WANGWANGID") {
        //     $scope.WANGWANGID = true;
            
        // }
        // if (x.fun_name == "WECHATID") {
        //     $scope.WECHATID = true;
            
        // }
        // if (x.fun_name == "WhatsAppID") {
        //     $scope.WhatsAppID = true;
            
        // }
        // if (x.fun_name == "ZELLOID") {
        //     $scope.ZELLOID = true;
            
        // }
        // if (x.fun_name == "FACEBOOK") {
        //     $scope.FACEBOOK = true;
            
        // }
        // if (x.fun_name == "SKYPEID") {
        //     $scope.SKYPEID = true;
            
        // }
       

    }
    // $scope.editfunqq = function(){
    //     $scope.editqq = true;
    // }
    // $scope.editfunwhat = function () {
    //     //alert("true")
    //     $scope.editwhat = true;

    // }
    // $scope.editfunwang = function(){
    //     $scope.editwang = true;
    // }
    // $scope.editfunwechat = function () {
    //     //alert("true")
    //     $scope.editwechat = true;
        

    // }
    // $scope.editfunphone = function () {
    //     //alert("true")
    //     $scope.aa = $scope.web_book_agent_phone.split(" ");
    //     $scope.web_book_agent_phone = $scope.aa[1];
    //     //$scope.editphone = true;
    //     $scope.phonesend = $scope.aa[0];

    // }
    // $scope.editfunlocalphone = function () {
    //     $scope.aaa = $scope.local_phone.split(" ");
    //     $scope.local_phone = $scope.aaa[1];
    //     console.log($scope.local_phone)
    //     //$scope.editlocalphone = true;
    //     $scope.phonesend = $scope.aaa[0];

    // }
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
    $scope.voucherdialog = function(){
         //$scope.selectedItem = { viewUrl: 'www.google.html' };
         $scope.voucherweb = { 'display':'block'};
     }
      $scope.selectnum = "";
      $scope.selectnum2 = "";
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
        //  var interval3 =  $interval(function() {
        //     $scope.checkimg =  angular.element(document.querySelector('#fileToUpload')).val();
        //     if ($scope.checkimg != null || $scope.checkimg != "") {
        //         angular.element(document.querySelector('.nophoto')).css("display","none");
        //         angular.element(document.querySelector('.nophoto2')).css("display","none");
        //     }
        // },1000 );
    $scope.takepicturesfun = function(){
        console.log($scope.files);
        $scope.load = { 'display':'block'};
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
            $scope.backinformdriverimage =  { 'display':'block'};
            $scope.backinformdriver =  { 'display':'none'};
            angular.element(document.querySelector('.nophoto')).css("display","none");
            angular.element(document.querySelector('.nophoto2')).css("display","none");
            var form_data = new FormData();
        console.log($scope.files);
        console.log(form_data)  
           angular.forEach($scope.files, function(file){  
                form_data.append('file', file);  
           });  
           $http.post('php/uploadimage.php', form_data,  
           {  
                transformRequest: angular.identity,  
                headers: {'Content-Type': undefined,'Process-Data': false}  
           }).success(function(response){
                console.log(response)
               //$scope.newtakephoto = { 'display':'block'};
                //$scope.pictureenvironment = { 'display':'block'};
                console.log(response)
                var nameim = response.split('.');
                $scope.nameim = nameim[0];
                console.log($scope.nameim);
                $scope.srtore = $scope.nameim;
                $scope.load = { 'display':'none'};
               $scope.takepictures = { 'display':'none'};
               $scope.pictureenvironment = { 'display':'none'}; // take your environment
                $scope.pictureyourself = { 'display':'block'};
                $scope.files = undefined;
                
                
                
                
                
            });
        }
         
         //$scope.newtakephoto = { 'visibility':'hidden'};
          //angular.element(document.querySelector('.fileUpload')).css('display','none')
         //$scope.pictureyourself = { 'display':'none'};
        //$scope.delayconfirm = { 'display':'block'};
        
        }
    $scope.sendmaildelay = function(){
        $scope.delayconfirm = { 'display':'block'};
       $scope.pictureyourself = { 'display':'none'};
       $scope.newtakephoto = { 'display':'block'};
       //$scope.savetakephoto = { 'display':'block'};
    }
    $scope.savetakein = function(){
        //$scope.pictureenvironment = { 'display':'none'};
        //$scope.newtakephoto = { 'display':'none'};
        //$scope.savetakephoto = { 'display':'none'};
        //$scope.pictureyourself = { 'display':'block'};  
      
    }
    $scope.takepicturepro = function(){
        $scope.newtakephoto = { 'display':'block'};
        $scope.pictureenvironment = { 'display':'block'}; 
        $scope.pictureyourself = { 'display':'none'}; 
        angular.element(document.querySelector('.fileUpload')).css('display','block')  
    }
    // $scope.onFileSelect = function($files) {
    //         //$files: an array of files selected, each file has name, size, and type.
    //         for (var i = 0; i < $files.length; i++) {
    //           var $file = $files[i];
    //           console.log($file)

    //           // console.log($file.lastModified)
    //           // console.log($file.name)
    //           // $scope.lastModified = $file.lastModified;
    //           // $scope.lastname = $file.name;
    //           Upload.upload({
    //             url: 'http://t-booking.com/web/demo/PHP/uploadimage.php',
    //             data: {file: $file}
    //           }).then(function(data, status, headers, config) {
    //             // file is uploaded successfully
    //             console.log(data);
    //           }); 
    //         }
            

    //       }

    $scope.openpopupcommentTodriver = function(){

        $http({
            method : 'POST',
            url : "PHP/getchat.php",
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
            url : "PHP/getchat.php",
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
            angular.element(document.querySelector('.box-mobal26')).css('margin-top','55%')
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
           
        }
    }
    $scope.popupselecttitleinform = function(){
        $scope.backinformdriver = { 'display':'none'};
        $scope.timedelay = { 'display':'none'};
        $scope.poupradio = { 'display':'block'};

        $scope.selectdelayradio = { 'display':'block'};
         $scope.pictureyourself = { 'display':'none'};
         $scope.takepictures= { 'display':'none'};
       
    }
/***************************************************  */  
/******************* New-angular-KM ***************  */  
/***************************************************  */ 
$scope.popup_goto_before = function(){
    $scope.id_popupbefore = { 'display':'block'};
    $scope.timedelay2 = { 'display':''};
}
$scope.popup_goto_delay = function(){
    $scope.id_popupdelay = { 'display':'block'};
	$scope.timedelay = { 'display':''};
}
$scope.popup_goto_wait = function(){
    $scope.id_popupwait = { 'display':'block'};
    $scope.takepictures = { 'display':''};
}
$scope.popup_goto_divermsg = function(){
    $scope.id_popupdivermsg = { 'display':'block'};
    //$scope.pictureyourself = { 'display':''};
}
$scope.popup_goto_diverchat = function(){
    $scope.id_popupdiverchat = { 'display':'block'};
    //$scope.pictureyourself = { 'display':''};
}

$scope.popup_goto_callcentermsg = function(){
    $scope.id_popupcallcentermsg = { 'display':'block'};
    //$scope.pictureyourself = { 'display':''};
}
$scope.popup_goto_callcenterchat = function(){
    $scope.id_popupcallcenterchat = { 'display':'block'};
    //$scope.pictureyourself = { 'display':''};
}
/***************************************************  */  
/******************* New-angular-KM ***************  */  
/***************************************************  */  
 
       
    $scope.confirm_sendmaildelay = function(x){
        console.log(x)
         $scope.load = { 'display':'block'};
        //console.log($scope.srtore)
        
               if (x == 1) { //delay

                
                     $scope.nameim = "";
                   
                    $scope.timerequest = $scope.selectnum + ':'+ $scope.selectnum2;
                    $scope.cdelay_or_not = x
                    console.log($scope.timerequest)
                    console.log($scope.orderid)
                     $scope.comfrom1 = "GUEST";
                    $scope.date_flight_delay = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    console.log($scope.date_flight_delay)
                    $http({
                        method : 'POST',
                        url : "PHP/add_data.php",
                        data: $.param({orderid: $scope.orderid,
                            fdelay: $scope.timerequest,
                            fdate: $scope.date_flight_delay,
                            g_topoint_date: $scope.HHmmss,
                            voucher: $scope.VOUCHER,
                            nameim: $scope.nameim,
                            state: $scope.cdelay_or_not,
                            from: $scope.comfrom1
                           
                             

                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            $scope.load = { 'display':'none'};
                             // location.reload();
                             $http({
                                        method : 'POST',
                                        url : "PHP/get_flight.php",
                                        data: $.param({voucher: $scope.VOUCHER}),
                                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                        }).success(function(res){
                                            console.log(res)
                                            $scope.setionflight = res;
                                           $scope.poupradio = { 'display':'none'};
                                           $scope.id_popupdelay = { 'display':'none'};

       
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
                    });
                }
                else if (x == 2){
                    $scope.styleload = { 'display':'block'};
                    $scope.nameim = "";
                    $scope.cdelay_or_not = x;
                    console.log("not delay")
                    $scope.timerequest = "";
                    $scope.comfrom2 = "GUEST";
                    console.log($scope.timerequest)
                    console.log($scope.orderid)
                    $scope.date_flight_delay = "";
                    $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    console.log($scope.date_flight_delay)
                    console.log($scope.comdriver)
                    $http({
                        method : 'POST',
                        url : "PHP/add_data.php",
                        data: $.param({orderid: $scope.orderid,
                            fdelay: $scope.timerequest,
                            fdate: $scope.date_flight_delay,
                            g_topoint_date: $scope.HHmmss,
                            voucher: $scope.VOUCHER,
                            nameim: $scope.nameim,
                            state: $scope.cdelay_or_not,
                             from:  $scope.comfrom2,
                             comment: $scope.comdriver
                            

                             

                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            $http({
                                        method : 'POST',
                                        url : "PHP/get_flight.php",
                                        data: $.param({voucher: $scope.VOUCHER}),
                                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                        }).success(function(res){
                                            console.log(res)
                                            $scope.comdriver = "";
                                            $scope.setionflight = res;
                                            $scope.scommentTodriver = { 'display':'none'};
                                            $scope.load = { 'display':'none'};
                                            $scope.id_popupdiverchat = { 'display':'none'};
                                           //$scope.poupradio = { 'display':'none'};

       
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
                            
                             //location.reload();
                    });
                }
                else if(x == 3){ ///takepictures
                   $scope.load = { 'display':'block'};



                    var form_data = new FormData();
                console.log($scope.files);
                //console.log(form_data)  
                   angular.forEach($scope.files2, function(file){  
                        form_data.append('file', file);  
                   });  
                   $http.post('php/uploadimage.php', form_data,  
                   {  
                        transformRequest: angular.identity,  
                        headers: {'Content-Type': undefined,'Process-Data': false}  
                   }).success(function(response){  
                        // alert(response);  
                        //$scope.select(); 
                        console.log(response)
                        var nameim = response.split('.');
                        $scope.nameim2 = nameim[0];
                        console.log($scope.nameim2);
                    });
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
                        console.log("!!in case null")
                        $scope.backinformdriverimage =  { 'display':'block'};
                        $scope.backinformdriver =  { 'display':'none'};
                        angular.element(document.querySelector('.nophoto')).css("display","none");
                        angular.element(document.querySelector('.nophoto2')).css("display","none");
                        $scope.timerequest = "";
                    console.log($scope.timerequest)
                    $scope.comfrom3 = "GUEST";
                    console.log($scope.orderid)
                    $scope.cdelay_or_not = x;
                    $scope.date_flight_delay = "";
                    $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    console.log($scope.date_flight_delay)
                    $http({
                        method : 'POST',
                        url : "PHP/add_data.php",
                        data: $.param({orderid: $scope.orderid,
                            fdelay: $scope.timerequest,
                            fdate: $scope.date_flight_delay,
                            g_topoint_date: $scope.HHmmss,
                            voucher: $scope.VOUCHER,
                            nameim: $scope.srtore,
                            state: $scope.cdelay_or_not,
                            nameim2: $scope.nameim2,
                            from: $scope.comfrom3
                            
                             

                    }),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).success(function(res){
                            console.log(res)
                            $scope.load = { 'display':'none'};
                             $http({
                                        method : 'POST',
                                        url : "PHP/get_flight.php",
                                        data: $.param({voucher: $scope.VOUCHER}),
                                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                        }).success(function(res){
                                            console.log(res)
                                            $scope.setionflight = res;
                                            $scope.poupradio = { 'display':'none'};
                                            $scope.takepictures = { 'display':'none'};
                                            $scope.id_popupwait = { 'display':'none'};
                                            angular.element(document.querySelector('#blah')).val('');
                                             angular.element(document.querySelector('#blah2')).val('');
                                           
       
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
                    });
                    }
                    
                }
                else if (x == 4) {
                     $scope.nameim = "";
                   
                    $scope.timerequest = $scope.selectnumNotify + ':'+ $scope.selectnumNotify2;
                    console.log($scope.timerequest)
                    console.log($scope.orderid)
                    $scope.cdelay_or_not = 4;
                     $scope.comfrom1 = "GUEST";
                    $scope.date_flight_delay = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    console.log($scope.date_flight_delay)
                    $http({
                        method : 'POST',
                        url : "PHP/add_data.php",
                        data: $.param({orderid: $scope.orderid,
                            fdelay: $scope.timerequest,
                            fdate: $scope.date_flight_delay,
                            g_topoint_date: $scope.HHmmss,
                            voucher: $scope.VOUCHER,
                            nameim: $scope.nameim,
                            state: $scope.cdelay_or_not,
                            from: $scope.comfrom1
                           
                             

                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            $scope.load = { 'display':'none'};
                             // location.reload();
                             $http({
                                        method : 'POST',
                                        url : "PHP/get_flight.php",
                                        data: $.param({voucher: $scope.VOUCHER}),
                                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                        }).success(function(res){
                                            console.log(res)
                                            $scope.setionflight = res;
                                           $scope.poupradio = { 'display':'none'};
                                           $scope.timedelay2 = { 'display':'none'};
                                            $scope.id_popupbefore = { 'display':'none'};
       
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
                    });
                }
                else if (x == 5){
                    $scope.styleload = { 'display':'block'};
                    $scope.nameim = "";
                    $scope.cdelay_or_not = x;
                    console.log("not delay")
                    $scope.timerequest = "";
                    $scope.comfrom2 = "GUEST";
                    console.log($scope.timerequest)
                    console.log($scope.orderid)
                    $scope.date_flight_delay = "";
                    $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
                    console.log($scope.date_flight_delay)
                    console.log($scope.comdriver)
                    $http({
                        method : 'POST',
                        url : "PHP/add_data.php",
                        data: $.param({orderid: $scope.orderid,
                            fdelay: $scope.timerequest,
                            fdate: $scope.date_flight_delay,
                            g_topoint_date: $scope.HHmmss,
                            voucher: $scope.VOUCHER,
                            nameim: $scope.nameim,
                            state: $scope.cdelay_or_not,
                             from:  $scope.comfrom2,
                             comment: $scope.comcallcenter
                            

                             

                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            $http({
                                        method : 'POST',
                                        url : "PHP/get_flight.php",
                                        data: $.param({voucher: $scope.VOUCHER}),
                                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                        }).success(function(res){
                                            console.log(res)
                                            $scope.comdriver = "";
                                            $scope.setionflight = res;
                                            $scope.scommentTocollcenter = { 'display':'none'};
                                            $scope.load = { 'display':'none'};
                                            $scope.id_popupcallcenterchat = { 'display':'none'};
                                           //$scope.poupradio = { 'display':'none'};

       
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
                            
                             //location.reload();
                    });
                }
           //});
        
           
            
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
            url : "PHP/update-social-book_agent.php",
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
  //   it('should check ng-class-odd and ng-class-even', function() {
  //   expect(element(by.repeater('i in country').row(0).column('i')).getAttribute('class')).
  //     toMatch(/odd/);
  //   expect(element(by.repeater('i in country').row(1).column('i')).getAttribute('class')).
  //     toMatch(/even/);
  // });
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
                        url : "PHP/update-social-quest-detail.php",
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
            url : "PHP/update-social-quest-detail.php",
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
                url : "PHP/updatecomment.php",
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
                localStorage.setItem('language',JSON.stringify(x));
                //$cookies.remove("language");
                $cookies.put("language", 1);
                $scope.flag = 'usa.ico';
                $scope.textminute = "Minute";
                $scope.texthour = "Hour";
                $scope.flagcheck = 1;
                $scope.Countryfont = "Please select country";
                $scope.Countryfont2 = "Please select country";
                $scope.nophoto = "No photo"; 
                
            }
            else if(x==2){
                localStorage.setItem('language',JSON.stringify(x));
                //$cookies.remove("language");
                $cookies.put("language", 2);
                $scope.flag = 'thai.ico';
                $scope.flagcheck = 2;
                $scope.textminute = "นาที";
                $scope.texthour = "ชั่วโมง";
                $scope.Countryfont = "โปรดเลือกประเทศ";
                $scope.Countryfont2 = "โปรดเลือกประเทศ";
                $scope.nophoto = "ยังไม่มีรูปภาพ"; 
                
                
                //event_change_month("th");
            }
            else if(x==3){
                localStorage.setItem('language',JSON.stringify(x));
                //$cookies.remove("language");
                $cookies.put("language", 3);
                $scope.flag = 'china.ico';
                $scope.textminute = "分钟";
                $scope.texthour = "小时";
                $scope.Countryfont = "請選擇國家";
                $scope.Countryfont2 = "請選擇國家";
                $scope.flagcheck = 3;
                 $scope.nophoto = "没有照片";  

            }
            
              
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
                    //  console.log(element.parent().width())
                    // console.log(element.parent().height())
                    //  //console.log(image.naturalHeight)
                    //  console.log(element.width());
                    //  console.log(element.height());
                element.on("change", function(event){  
                      var files = event.target.files;
                      var files2 = event.target.files2;
                     // console.log(files2)
                      console.log(files)  
                    //var x = event.target.Image();
                    console.log(angular.element(event.currentTarget))
                    // var image = new Image();
                    // image.src = angular.element(document.querySelector('#blah')).attr("src");
                    // if (files2 != undefined) {
                    //    angular.element(document.querySelector('.nophoto2')).css("display","none")  
                    //    $parse(attrs.fileInput).assign($scope, element[0].files2);  
                    //     $scope.$apply(); 
                    // }
                    if (files != undefined) {
                         angular.element(document.querySelector('.nophoto2')).css("display","none")  
                        angular.element(document.querySelector('.nophoto')).css("display","none");
                        $parse(attrs.fileInput).assign($scope, element[0].files);  
                        $scope.$apply(); 
                    }
                     //console.log(image.naturalWidth)
                     
                     
                     // console.log(files[0].name);
                     // console.log(event)  
                     // console.log(files)
                      
                });  
           }  
      }  
 });
//  app.filter('displaydate', function() {
//     return function (input, tz) {
//         return input.format('MMM Do, YYYY - hh:mm:ss A');
//     };
// }); 
// app.factory('datetime', ['$timeout', function ($timeout) {
//     var duration = function (timeSpan) {
//         var days = Math.floor(timeSpan / 86400000);
//         var diff = timeSpan - days * 86400000;
//         var hours = Math.floor(diff / 3600000);
//         diff = diff - hours * 3600000;
//         var minutes = Math.floor(diff / 60000);
//         diff = diff - minutes * 60000;
//         var secs = Math.floor(diff / 1000);
//         return { 'days': days, 'hours': hours, 'minutes': minutes, 'seconds': secs };
//     };
//     function getRemainigTime(referenceTime) {
//         var now = moment().utc();
//         return moment(referenceTime) - now;
//     }
//     return {
//         duration: duration,
//         getRemainigTime: getRemainigTime
//     };
// }]);
// app.filter('durationview', ['datetime', function (datetime) {
//     return function (input, css) {
//         var duration = datetime.duration(input);
//         return duration.days + "d:" + duration.hours + "h:" + duration.minutes + "m:" + duration.seconds + "s";
//     };
// }]);
// app.directive('countdown', ['Util','$interval', function (Util, $interval) {
//             return {
//                 restrict: 'A',
//                 scope: { date: '@' },
//                 link: function (scope, element) {
//                     var future;
//                     future = new Date(scope.date);
//                     $interval(function () {
//                         var diff;
//                         diff = Math.floor((future.getTime() - new Date().getTime()) / 1000);
//                         return element.text(Util.dhms(diff));
//                     }, 1000);
//                 }
//             };
//         }])
// app.factory('Util', [function () {
//             return {
//                 dhms: function (t) {
//                     var days, hours, minutes, seconds;
//                     days = Math.floor(t / 86400);
//                     t -= days * 86400;
//                     hours = Math.floor(t / 3600) % 24;
//                     t -= hours * 3600;
//                     minutes = Math.floor(t / 60) % 60;
//                     t -= minutes * 60;
//                     seconds = t % 60;
//                     return [
//                         days + 'd',
//                         hours + 'h',
//                         minutes + 'm',
//                         seconds + 's'
//                     ].join(' ');
//                 }
//             };
// }]);

