var app = angular.module('myApp', ['ngCookies','ngRoute','angular.filter','base64','ui.bootstrap','FBAngular','geolocation','ui-notification','ngAnimate','ngMessages','ngImgCrop','ngYoutubeEmbed']);
    app.controller('myCtrl', function($scope,$document,$sce,$base64,$location,$http,$window,$filter,$templateCache,$interval,$timeout,$cookies,$cookieStore,Fullscreen,geolocation,$anchorScroll,Notification,ngYoutubeEmbedService){
        $scope.local_phone;
         angular.element(document.querySelector('.bobymain')).css("display","none");
        angular.element(document.querySelector('#load')).css("display","block");
        //$scope.load = { 'display':''};
        $scope.voucherselect = [];
        $scope.decoded = '';
        $scope.data = '';//JSON.parse($location.search().order);
        $scope.dataSV = '';
       // Notification.warning({message: 'notification message from driver', delay: null});
        $scope.web_book_agent_phone;
        $scope.chmail = 0;
        $scope.chmail2 = 0;
        $scope.lenc;
        $scope.mail_or_phone;
        $scope.clean = 0;
        $scope.driving = 0;
        $scope.time = 0;
        $scope.complac = 0;
        $scope.impress = 0;

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
        $scope.msgType;
        $scope.costsum;
        $scope.latituderel = '';
        $scope.longituderel = '';

        /* code 64 */
        // var sv = $location.search().sv; 
        // console.log(sv)
        
        // var absUrl = $location.absUrl().split("?");
       
        // console.log(absUrl[1])
        
        //     $scope.decoded = $base64.decode(absUrl[1]);
        //     $scope.decoded.split("=");




            //console.log($scope.decoded)
            //console.log($scope.decoded.split('&'))
            //console.log($scope.decoded.split('&')[0].split('=')[1])
             

        $http({
                    method : 'POST',
                    url : "php/getTimesever-home.php",
                    data: $.param({sv: $scope.dataSV}),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).success(function(res){
                        //console.log(res.split(/\n/g))
                       var timeSVH =  res.split(/\n/g);//
                       $scope.timeSVH = timeSVH[3];
                       console.log(timeSVH)
                        console.log($scope.timeSVH)
                       
                      });
        $scope.styleshowimages1all = { 'display':'none'}; 
        function geoloc(success, fail){
        var is_echo = false;
        if(navigator && navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(
            function(pos) {
              if (is_echo){ return; }
              is_echo = true;
              success(pos.coords.latitude,pos.coords.longitude);
            }, 
            function() {
              if (is_echo){ return; }
              is_echo = true;
              fail();
            }
          );
        } else {
          fail();
        }
      }

      function success(lat, lng){
        $scope.latituderel = lat;
            $scope.longituderel = lng;
        //alert(lat + " , " + lng);
        
      }
      function fail(){
        $('#locationSetting').modal('show');
       
      }

  geoloc(success, fail);
        
        
        $scope.TurnOnlocation = function(){
            //alert('in')
        //     geolocation.getLocation().then(function(data){
        //     if (data.coords.latitude == undefined) {
        //        alert("undefined")
        //     }
        //     else{
        //         alert("not undefined")
        //     }
        //     $scope.coords = {lat:data.coords.latitude, long:data.coords.longitude};
        //     $scope.latituderel = $scope.coords.lat;
        //     $scope.longituderel = $scope.coords.long;
        //     if (!navigator.permissions) {
        //         alert("aaaa");
        //     }
        //     else{
        //         alert("ssssss")
        //     }
                                    
        // });
        }
        // navigator.permissions && navigator.permissions.query({name: 'geolocation'}).then(function(PermissionStatus) {
        //     if(PermissionStatus.state === 'granted'){
        //         console.log(PermissionStatus)
        //           //allowed
        //           alert("undefined")
        //     }else{
        //         alert("not undefined")
        //         //getLocationCheck()
        //          //denied
        //     }
        // })  
        // navigator.geolocation.getCurrentPosition(function(location) {
        //   console.log(location.coords.latitude);
        //   console.log(location.coords.longitude);
        //   console.log(location.coords.accuracy);
        // });



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
        /**********************************************************/
        $scope.set_color = function (payment) {
            if (payment == 'In') {
                return {
                    color: "red"
                }
            }
        }
        angular.element('#popupbookingdetail').bind("scroll", function(e) {
            var popupbookingdetail = e.target.scrollTop;//
            //console.log(history)
            //alert("asss")
            if (popupbookingdetail > 5) {
              console.log("popupbookingdetail")
             angular.element(document.querySelector('#headerdetail')).css('position','fixed');
               angular.element(document.querySelector('#headerdetail-body')).css('margin-top','160px');


            }
            else if(popupbookingdetail < 5){
               angular.element(document.querySelector('#headerdetail')).css('position','relative'); 
               angular.element(document.querySelector('#headerdetail-body')).css('margin-top','0px');

            }

        });
        angular.element('#stylepoupmyinfo').bind("scroll", function(e) {
            var stylepoupmyinfo = e.target.scrollTop;//
            //console.log(history)
            //alert("asss")
            if (stylepoupmyinfo > 5) {
             angular.element(document.querySelector('#headinfo')).css('position','fixed');
             angular.element(document.querySelector('#headinfo-body')).css('margin-top','160px');

            }
            else if(stylepoupmyinfo < 5){
               angular.element(document.querySelector('#headinfo')).css('position','relative'); 
               angular.element(document.querySelector('#headinfo-body')).css('margin-top','0px');
            }

        });
        angular.element('#popupdriverdetail').bind("scroll", function(e) {
            var popupdriverdetail = e.target.scrollTop;//
            //console.log(popupbookingdetail)
            //alert("asss")
            if (popupdriverdetail > 5) {
             angular.element(document.querySelector('#headerdriverdetail')).css('position','fixed');
             angular.element(document.querySelector('#headerdriverdetail-body')).css('margin-top','160px');


            }
            else if(popupdriverdetail < 5){
               angular.element(document.querySelector('#headerdriverdetail')).css('position','relative'); 
             angular.element(document.querySelector('#headerdriverdetail-body')).css('margin-top','0px');

            }

        });
        // angular.element('.modal-body').bind("scroll", function(e) {
        //     var topscroll = e.target.scrollTop;//
                
        // });
        // order=372346&sv=th
        // $location.search().order
        //$scope.data = $scope.decoded.split('&')[0].split('=')[1];//JSON.parse($location.search().order);
       // $scope.dataSV = $scope.decoded.split('&')[1].split('=')[1];
        $scope.data = $location.search().order;//JSON.parse($location.search().order);
       $scope.dataSV = $location.search().sv;
        if ($scope.dataSV != 'th' && $scope.dataSV != 'cn') {
            angular.element(document.querySelector('.not-data')).css('display','block');
            angular.element(document.querySelector('.loader')).css('display','none');
        }
        else{
            angular.element(document.querySelector('.not-data')).css('display','none');
            angular.element(document.querySelector('.loader')).css('display','block');
        }
        console.log($scope.dataSV)
        console.log($scope.data)
        console.log($scope.decoded)
        $scope.selecetdataorde = $scope.data;
        




        /********************************/
          /* get book agent for regis */
        /********************************/

        $http({
            method : 'POST',
            url : "php/voucher.php",
            data: $.param({id: $scope.VOUCHER,sv: $scope.dataSV}),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(res){
               console.log(res)
               
                console.log(res[0].invoice)
                // $scope.country_id = res[0].country_id;
                // $scope.agent_ref = res[0].agent_ref;
                // $scope.id = res[0].id;
                // $scope.code = res[0].code;
                // $scope.agent = res[0].agent;
                // $scope.tb_web_book_agent_id = res[0].tb_web_book_agent_id;
                // $scope.tb_web_book_agent_email = res[0].tb_web_book_agent_email;
                // $scope.tb_web_book_agent_email2 = res[0].tb_web_book_agent_email2;
                console.log($scope.country_id)
                console.log($scope.agent_ref)
                console.log($scope.id)
                console.log($scope.code)
                console.log($scope.agent)
                console.log($scope.tb_web_book_agent_id)
                console.log($scope.tb_web_book_agent_email)
                console.log($scope.tb_web_book_agent_email2)
                

                /* get book agent */

                $http({
                    method : 'POST',
                    url : "php/getbookagent.php",
                    data: $.param({id: $scope.tb_web_book_agent_id,sv: $scope.dataSV}),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).success(function(res){
                        console.log(res)

                        // $scope.countryCode = res[0].country_code;
                        // $scope.guestEmail = res[0].guestemail;
                        // $scope.guestEmail2 = res[0].guestemail2; 
                        // $scope.web_country_name_en = res[0].name_en;
                        console.log($scope.countryCode)
                        console.log($scope.guestEmail)
                        console.log($scope.guestEmail2)
                        console.log($scope.web_country_name_en)
                        
                });


                                                
              });



$scope.booknew = function() {
   $window.location.href = "https://www.welovetaxi.com/app/booking/register";
}


        geolocation.getLocation().then(function(data){
            $scope.coords = {lat:data.coords.latitude, long:data.coords.longitude};
            $scope.latituderel = $scope.coords.lat;
            $scope.longituderel = $scope.coords.long;
        });

        $scope.testbtn = function(){
        }
        $scope.maskMap = function(){
            console.log($scope.updatmapNoti)
             $http({
                  method : 'POST',
                  url : "php/updatemap.php",
                 data: $.param({placeID:$scope.updatmapNoti,sv: $scope.dataSV}),
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){                  
                  //console.log(res)
                  $scope.messagedataStoreall = res;
                });
        }
        $scope.hasStream = false;
        $scope.roomName = '';
        $scope.isBroadcasting = '';
        $scope.QRcode = function(x){
          console.log(x);
          if (x.TB_order_type == 'transfer') {
               $scope.topic_en = x.topic_en;
                $scope.topic_th = x.topic_th;
                $scope.topic_cn = x.topic_cn; 
            }
            if (x.TB_order_type != 'transfer') {
                $scope.topic_en = x.T_topic_en;
                $scope.topic_th = x.T_topic_th;
                $scope.topic_cn = x.T_topic_cn; 
            }
          $scope.code = x.TB_order_code;
          $scope.idvcQRcode = x.TB_order_order;
          $('#qrcode').modal('show');

        }
        $scope.prepare = function prepare() {
            $scope.$broadcast('prepare');
        };
        $scope.start = function start() {
            $scope.$broadcast('start');
        };
        $scope.$on('channelMessage', function (event, peer, message) {
            console.log('message', message);
        });
        $scope.sendMessage = function sendMessage() {
            $scope.$broadcast('messageAll', {
              from: 'username',
              text: 'hi there'
            });
        };   
        $scope.tourPlace = function(item){
            angular.element(document.querySelector('#load')).css("display","block");
            function geoloc(success, fail){
                var is_echo = false;
                if(navigator && navigator.geolocation) {
                  navigator.geolocation.getCurrentPosition(
                    function(pos) {
                      if (is_echo){ return; }
                      is_echo = true;
                      success(pos.coords.latitude,pos.coords.longitude);
                    }, 
                    function() {
                      if (is_echo){ return; }
                      is_echo = true;
                      fail();
                    }
                  );
                } else {
                  fail();
                }
              }

            function success(lat, lng){
                angular.element(document.querySelector('#load')).css("display","none");
                $scope.iframe = {navilink:"https://www.google.com/maps/embed/v1/directions?key=AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90&destination="+item.tour_place+"&origin="+lat+","+lng+"&avoid=tolls|highways&zoom=12?hl="+$scope.checklang};
                      console.log($scope.iframe.navilink)
                      $('#sopennavi').modal('show');              
            }
            function fail(){
              angular.element(document.querySelector('#load')).css("display","none");              
              $('#locationSetting').modal('show');
                  $window.location.reload();
            }

        geoloc(success, fail);
   
             
        }
      $scope.navi = function(i){
        console.log(i)
          console.log($scope.longituderel)
          geolocation.getLocation().then(function(data){
              if ($scope.longituderel == undefined || $scope.longituderel =='') {
                  $('#locationSetting').modal('show');
                  requestNotificationPermission();
              }
              else{
                  $scope.iframe = '';
                  $scope.areatype = i.area;
                  console.log(i)
                  $scope.updatmapNoti = i.to_place;
                  $scope.updateMap = i.update_map;
                  if($scope.flagcheck == 1){
                      $scope.checklang = "cn";
                  }
                  if($scope.flagcheck == 2){
                      $scope.checklang = "th";
                  }
                  if($scope.flagcheck == 3){
                      $scope.checklang = "cn";
                  }
                  if (i.TB_order_type == 'transfer') {
                      if (i.area == 'Rental') {
                          $scope.stype = i.TB_order_type;
                          console.log(i.TB_order_order)
                          console.log($scope.dataSV)
                          $scope.topicTo = i.TB_transferplace_topic;
                          $http({
                          method : 'POST',
                                url : "php/naviRental.php",
                                data: $.param({id: i.TB_order_program ,sv: $scope.dataSV,type:i.TB_order_type}),
                                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                              }).success(function(res){                  
                                console.log(res)
                                console.log()
                                $scope.proDatapronavi = res;
                                //$scope.nontifigcomment = res;
                                  $scope.iframe = '';
                                  $('#angularload').modal('show');
                                  $scope.goPlate = res;
                                  $scope.backPlate = '';
                                angular.element(document.querySelector('#popnavi')).css("margin","20px 3%");

                                      
                          }); 
                      }
                      else{
                          $scope.proDatapronavi = '';
                              $scope.iframe = {navilink:"https://www.google.com/maps/embed/v1/directions?key=AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90&destination="+i.TB_transferplace_topic+"&origin="+$scope.latituderel+","+$scope.longituderel+"&center="+$scope.latituderel+","+$scope.longituderel+"&avoid=tolls|highways&zoom=12?hl="+$scope.checklang};
                              console.log($scope.iframe.navilink)
                              $('#sopennavi').modal('show');                                
                          }
             
                  }
                  if (i.TB_order_type != 'transfer') {
                      $scope.proDatapronavi = '';
                      $http({
                                method : 'POST',
                                url : "php/navigate.php",
                                data: $.param({id: i.TB_order_order ,sv: $scope.dataSV,type:i.TB_order_type}),
                                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                            }).success(function(res){                  
                                console.log(res)
                                console.log(res[0].TB_transferplace_topic)
                                $scope.iframe = '';
                                $scope.goPlate = res;//res[0].TB_transferplace_topic;
                                $scope.backPlate = res;
                                if ((res[0].TB_transferplace_topic == '' || res[0].TB_transferplace_topic == null) || (res[0].TB_transferplace_to_topic == '' || res[0].TB_transferplace_to_topic == null))  {
                                    if (res[0].TB_transferplace_to_topic == '' || res[0].TB_transferplace_to_topic == null) {
                                    $scope.iframe = {navilink:"https://www.google.com/maps/embed/v1/directions?key=AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90&destination="+res[0].TB_transferplace_topic+"&origin="+$scope.latituderel+","+$scope.longituderel+"&center="+$scope.latituderel+","+$scope.longituderel+"&avoid=tolls|highways&zoom=12?hl="+$scope.checklang};

                                    }
                                    else{
                                    $scope.iframe = {navilink:"https://www.google.com/maps/embed/v1/directions?key=AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90&destination="+res[0].TB_transferplace_to_topic+"&origin="+$scope.latituderel+","+$scope.longituderel+"&center="+$scope.latituderel+","+$scope.longituderel+"&avoid=tolls|highways&zoom=12?hl="+$scope.checklang};

                                    }
                                    console.log("in case length = 1")
                                    $scope.proDatapronavi = '';
                                    console.log($scope.iframe.navilink)
                                    $('#sopennavi').modal('show');
                                      
                                }
                                else{
                                    $('#angularload').modal('show');
                                    angular.element(document.querySelector('#popnavi')).css("margin","220px 3%");
                                }    
                      });
                  }
              }
            $scope.coords = {lat:data.coords.latitude, long:data.coords.longitude};
            $scope.latituderel = $scope.coords.lat;
            $scope.longituderel = $scope.coords.long;
                                    
          });

            // if ($scope.longituderel == undefined || $scope.longituderel =='') {
            //     $('#locationSetting').modal('show');
            //     $window.location.reload();
            // }
            // else{
            //     $scope.iframe = '';
            //      $scope.areatype = i.area;
            //     console.log(i)
            //     $scope.updatmapNoti = i.to_place;
            //     $scope.updateMap = i.update_map;
            //     if($scope.flagcheck == 1){
            //         $scope.checklang = "cn";
            //     }
            //     if($scope.flagcheck == 2){
            //         $scope.checklang = "th";
            //     }
            //     if($scope.flagcheck == 3){
            //         $scope.checklang = "cn";
            //     }
            // if (i.TB_order_type == 'transfer') {
            //     if (i.area == 'Rental') {

            //         $scope.stype = i.TB_order_type;
            //         console.log(i.TB_order_order)
            //         console.log($scope.dataSV)
            //         $scope.topicTo = i.TB_transferplace_topic;
            //         $http({
            //         method : 'POST',
            //               url : "php/naviRental.php",
            //               data: $.param({id: i.TB_order_program ,sv: $scope.dataSV,type:i.TB_order_type}),
            //               headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            //             }).success(function(res){                  
            //               console.log(res)
            //               console.log()
            //               $scope.proDatapronavi = res;
            //               //$scope.nontifigcomment = res;
            //                 $scope.iframe = '';
            //                 $('#angularload').modal('show');
            //                 $scope.goPlate = res;
            //                 $scope.backPlate = '';
            //               angular.element(document.querySelector('#popnavi')).css("margin","20px 3%");

                                
            //         }); 
            //     }
            //     else{
            //         $scope.proDatapronavi = '';
            //             $scope.iframe = {navilink:"https://www.google.com/maps/embed/v1/directions?key=AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90&destination="+i.TB_transferplace_topic+"&origin="+$scope.latituderel+","+$scope.longituderel+"&center="+$scope.latituderel+","+$scope.longituderel+"&avoid=tolls|highways&zoom=12?hl="+$scope.checklang};
            //             console.log($scope.iframe.navilink)
            //             $('#sopennavi').modal('show');                               
            //     }
            // }
            //if (i.TB_order_type != 'transfer') {
             //   $scope.proDatapronavi = '';
                // $http({
                //     method : 'POST',
                //           url : "php/navigate.php",
                //           data: $.param({id: i.TB_order_order ,sv: $scope.dataSV,type:i.TB_order_type}),
                //           headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                //       }).success(function(res){                  
                //           console.log(res)
                //           console.log(res[0].TB_transferplace_topic)                         
                //             $scope.iframe = '';
                //             $scope.goPlate = res;//res[0].TB_transferplace_topic;
                //             $scope.backPlate = res;
                //             if (res[0].TB_transferplace_to_topic == '' || res[0].TB_transferplace_to_topic == '') {
                //                 console.log("in case length = 1")
                //                 $scope.proDatapronavi = '';
                //                 $scope.iframe = {navilink:"https://www.google.com/maps/embed/v1/directions?key=AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90&destination="+res[0].TB_transferplace__to_topic+"&origin="+$scope.latituderel+","+$scope.longituderel+"&center="+$scope.latituderel+","+$scope.longituderel+"&avoid=tolls|highways&zoom=12?hl="+$scope.checklang};
                //                 console.log($scope.iframe.navilink)
                //                 $('#sopennavi').modal('show');
                                
                //             }
                           
                //             else{
                //                 $('#angularload').modal('show');
                //                 angular.element(document.querySelector('#popnavi')).css("margin","220px 3%");
                //             }
                // });
            //}
        //}
      }
      $scope.seleceplaceNavi =function(x){
          if (x.update == 0) {
              alert("head_full_popup_icon");
          }
              if($scope.flagcheck == 1){
              $scope.checklang = "cn";
          }
          if($scope.flagcheck == 2){
              $scope.checklang = "th";
          }
          if($scope.flagcheck == 3){
              $scope.checklang = "cn";
          }
          geolocation.getLocation().then(function(data){
              $scope.latituderel = '';
              $scope.longituderel = '';
              $scope.coords = {lat:data.coords.latitude, long:data.coords.longitude};
                  $scope.latituderel = $scope.coords.lat;
                  $scope.longituderel = $scope.coords.long;
                  $scope.iframe = {navilink:"https://www.google.com/maps/embed/v1/directions?key=AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90&destination="+x.TB_transferplace_topic+"&origin="+$scope.latituderel+","+$scope.longituderel+"&avoid=tolls|highways&zoom=12?hl="+$scope.checklang};
                        //$scope.navilink = 'https://www.google.com/maps/embed/v1/directions?key=AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90&destination=ชื่อสถานท"ี่ส่ง&origin='+$scope.latituderel+','+$scope.longituderel+'&avoid=tolls|highways&zoom=12';
                        console.log($scope.iframe.navilink)
                        $('#sopennavi').modal('show');
              });
      }
      $scope.seleceplaceNaviRental =function(x){
            console.log(x)
            if (x.update == 0) {
                alert("head_full_popup_icon");
            }
                if($scope.flagcheck == 1){
                $scope.checklang = "cn";
            }
            if($scope.flagcheck == 2){
                $scope.checklang = "th";
            }
            if($scope.flagcheck == 3){
                $scope.checklang = "cn";
            }
            geolocation.getLocation().then(function(data){
                $scope.latituderel = '';
                $scope.longituderel = '';
            $scope.coords = {lat:data.coords.latitude, long:data.coords.longitude};
            $scope.latituderel = $scope.coords.lat;
            $scope.longituderel = $scope.coords.long;
            $scope.iframe = {navilink:"https://www.google.com/maps/embed/v1/directions?key=AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90&destination="+x+"&origin="+$scope.latituderel+","+$scope.longituderel+"&avoid=tolls|highways&zoom=12?hl="+$scope.checklang};
                        //$scope.navilink = 'https://www.google.com/maps/embed/v1/directions?key=AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90&destination=ชื่อสถานท"ี่ส่ง&origin='+$scope.latituderel+','+$scope.longituderel+'&avoid=tolls|highways&zoom=12';
                        console.log($scope.iframe.navilink)
                        $('#sopennavi').modal('show');
        });
        }
    
        //******************************************************//
        //*********************FULLSCREEN***********************//
        //******************************************************//
        
        // function goFullscreen() {
        //     if (Fullscreen.isEnabled())
        //         Fullscreen.cancel();
        //     else
        //         Fullscreen.all();
        // }

        // $scope.isFullScreen = false;

        // $scope.goFullScreenViaWatcher = function() {
        //           $scope.isFullScreen = !$scope.isFullScreen;
        // }
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
            $scope.Countryfont3 = "Please select country";
           

        }
        else if( language==1){
            $scope.flag = 'usa.ico';
            $scope.flagcheck = 1;
            $scope.textminute = "Minute";
            $scope.texthour = "Hour";
            $scope.Countryfont = "Please select country";
            $scope.Countryfont2 = "Please select country";
            $scope.Countryfont3 = "Please select country";
            $scope.stylelangq = { 'display':'none' };
            
        }
        else if( language==2){
            $scope.flag = 'thai.ico';
            $scope.flagcheck = 2;
            $scope.textminute = "นาที";
            $scope.texthour = "ชั่วโมง";
             $scope.Countryfont = "โปรดเลือกประเทศ";
             $scope.Countryfont2 = "โปรดเลือกประเทศ";
             $scope.Countryfont3 = "โปรดเลือกประเทศ";
             $scope.stylelangq = { 'display':'none' };
           
        }
        else if( language==3){
            $scope.flag = 'china.ico';
            $scope.flagcheck = 3;
             $scope.textminute = "分钟";
             $scope.texthour = "小时";
             $scope.Countryfont = "请选择国家";
             $scope.Countryfont2 = "请选择国家";
             $scope.Countryfont3 = "请选择国家";
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




        /**************************************************************************/
        /****************************CHECK NOTIFICATION****************************/
        /**************************************************************************/

        // var checknonti =  $interval(function() {
        // $http({
        //     method : 'POST',
        //           url : "php/notifigcomment.php",
        //           data: $.param({orderid: $scope.data ,sv: $scope.dataSV}),
        //           headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        //         }).success(function(res){                  
        //           //console.log(res)
        //           $scope.nontifigcomment = res;
        //           //console.log("checknoti")
        //           if ($scope.nontifigcomment.length != 0 ) {

        //           }
        //          //flashInterval()
        //         });
        // },1000);
        
        function flashInterval(){
            if ($scope.nontifigcomment.length != 0) {
                $http({
                        method : 'POST',
                        url : "php/get_flight_fororderid.php",
                        data: $.param({vc: $scope.vdIDclickinfo,sv: $scope.dataSV}),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).success(function(res){                  
                        console.log(res)
                        $scope.checknotidata = res;
                        angular.forEach(res, function (y) {
                            if (y.read_msg == 0 && y.comment_from == 'driver') {                                       
                                angular.element(document.querySelector('#menudriver'+y.id)).addClass('menudriver')
                                updatenoti();
                                            
                            }
                            if (y.read_msg == 0 && y.comment_from == 'callcenter') {
                                console.log(y.id)
                                angular.element(document.querySelector('#menudriver'+y.id)).addClass('menudriver')
                                updatenoti();
                            }
                                
                        });
                    });  
            }      
        }
        function updatenoti(){
            var flashInterval = setInterval(function(){
                console.log($scope.idTypemessage)
                console.log($scope.vdIDclickinfo)
                if ($scope.idTypemessage == 1) {

                    $http({
                        method : 'POST',
                        url : "php/updatenoti.php",
                        data: $.param({voucher: $scope.vdIDclickinfo,state: 'driver',sv: $scope.dataSV}),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).success(function(res){ 
                        console.log(res)
                        angular.forEach($scope.checknotidata, function (y) {
                            angular.element(document.querySelector('#menudriver'+y.id)).removeClass('menudriver')
                        });
                        clearInterval(flashInterval);
                    });
                }
                if ($scope.idTypemessage == 4) {

                    $http({
                        method : 'POST',
                        url : "php/updatenoti.php",
                        data: $.param({voucher: $scope.vdIDclickinfo,state: 'op',sv: $scope.dataSV}),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).success(function(res){ 
                        console.log(res)
                        clearInterval(flashInterval);
                    });
                }
            }, 5000);
        }



        $scope.too_map =function(){
            //alert("aaaaa")
            geolocation.getLocation().then(function(data){
            
                  $scope.coords = {lat:data.coords.latitude, long:data.coords.longitude};
                  

                  $scope.latituderel = $scope.coords.lat;
                  $scope.longituderel = $scope.coords.long;
                  angular.element(document.querySelector('#popup_chatView')).css("position","fixed");
                  var x = "https://maps.googleapis.com/maps/api/geocode/json?latlng="+$scope.latituderel+","+$scope.longituderel +"&sensor=false";
                  console.log(x)
              $http.get(x)
                  .then(function(response) {
                        console.log(response)
                        
                            $scope.mapAddress = response.data.results[0].formatted_address;
                        console.log($scope.mapAddress)
                        
                        
                      //$scope.myWelcome = response;
                      //console.log(response.data)
                      //$scope.timecountry = response.data.country;
                  });
                

             //$( "#sopencontact" ).hide("slow");
              $('#popup_chatView').modal('show');
                //$( "#popup_chatView" ).slideToggle("slow");
              //$( "#alert_show_map" ).slideToggle("slow"); 

             $('#load_chat').load('google/check_system.php');
        });
            
             
        }
        $scope.iconDown = function(){
            $scope.icondown ={ 'display':'none' };
            $scope.iconup ={ 'display':'block' };
            //$scope.nonePass ={ 'display':'block' };


        }
        $scope.iconUp = function(){
            $scope.icondown ={ 'display':'block' };
            $scope.iconup ={ 'display':'none' };
            //$scope.nonePass ={ 'display':'none' };

        }
        $scope.cshow = false;
        $scope.clickslectVoucher = function(){
            //$scope.cshow = 0;
            if ($scope.cshow == false) {
                //alert("aaaaa")
                $scope.slectVoucher ={ 'display':'block' };
                $scope.icondown ={ 'display':'none' };
            $scope.iconup ={ 'display':'block' };
                $scope.cshow = true;
            }
            else  {
                //alert("bbbb")
                $scope.slectVoucher ={ 'display':'none' };
                $scope.cshow = false;
                $scope.icondown ={ 'display':'block' };
            $scope.iconup ={ 'display':'none' };
            }
            
        }

                
  $scope.shareLocation = function(){
    //alert("aaaa")
            $scope.drfrom = 'customer';
            $scope.drto = 'driver';
            if ($scope.flagcheck == 1) {
                                $scope.pasa = "en";
                              }
                              if ($scope.flagcheck == 2) {
                                $scope.pasa = "th";
                              }
                              if ($scope.flagcheck == 3) {
                                $scope.pasa = "cn";
                              }
            $scope.drivername = $scope.dataContact.drivername;
            $scope.adminCompany = 1;
            //๓หแ
            $scope.dataContact.TB_order_order
            console.log($scope.drivername)
            console.log($scope.data)
            console.log($scope.dataContact.TB_order_order)
            console.log($scope.drfrom)
            console.log($scope.drto)
            console.log($scope.latituderel)
            console.log($scope.longituderel)
            console.log($scope.TB_admin_companyhome)
            $scope.HHmmss = $filter('date')(new Date(), 'yyyy-MM-dd / HH:mm');
            console.log($scope.dataContact)
            $http({
                        method : 'POST',
                        url : "php/shareLocation.php",
                        data: $.param({orderid: $scope.data,                            
                            voucher: $scope.dataContact.TB_order_order,
                            sv: $scope.dataSV,
                            nameim: $scope.nameim,
                            drivername:$scope.driverid,
                            comfrom:  $scope.drfrom,
                            comto: $scope.drto,
                            lag: $scope.latituderel,
                            long: $scope.longituderel,
                            adminCompany: $scope.adminCompany,
                            typestate: "share_location",                                     
                            timess: $scope.HHmmss  
                            


                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).success(function(res){ 
                        console.log(res)
                        var t = res.split(/\n/g);
                        $scope.maptime = t[3];
                        console.log($scope.maptime)
                        $http({
                        method : 'POST',
                        url : "../vc_cn/saveImagemap.php",
                        data: $.param({                            
                            voucher: $scope.dataContact.TB_order_order,
                            sv: $scope.dataSV,                           
                            lag: $scope.latituderel,
                            long: $scope.longituderel,
                            timess: $scope.maptime  
                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).success(function(res){ 
                        console.log(res)
                         $scope.anlink = "../driver/load_page.php?name=livechat&file=index&vc="+$scope.vdIDclickinfo+"&lang="+$scope.pasa+"&order="+$scope.data+"&chat_from=customer&chat_to=driver";
                              $('#load_data_manage_work').load($scope.anlink);
                              console.log($scope.anlink)

                           $('#popup_chatView').modal('hide');
                            
                             $('#load_data_manage_work').slideToggle();
                    });
                         
                });
        }

        
       
        $scope.maprealTime = function(){
            geolocation.getLocation().then(function(data){
                       $scope.coords = {lat:data.coords.latitude, long:data.coords.longitude};
                        $scope.latitude = $scope.coords.lat;
                        $scope.longitude =  $scope.coords.long;
                        $scope.vcrealtime = $scope.dataContact.TB_order_order;
                         $scope.iframe = {maprealtime:"../demo/mod/livechat/realtime/index.php?vc="+$scope.dataContact.TB_order_order+'&chat_from=customer&chat_to=driver&lat='+$scope.latitude+'&lng='+$scope.longitude};  //"https://www.google.com/maps/embed/v1/directions?key=AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90&destination="+i.TB_transferplace_topic+"&origin="+$scope.latituderel+","+$scope.longituderel+"&avoid=tolls|highways&zoom=12?hl="+$scope.checklang};
                                                //$scope.navilink = 'https://www.google.com/maps/embed/v1/directions?key=AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90&destination=ชื่อสถานท"ี่ส่ง&origin='+$scope.latituderel+','+$scope.longituderel+'&avoid=tolls|highways&zoom=12';
                                                console.log($scope.iframe.maprealtime)
                $('#realtime').modal('show');
            });                          
        }


    
        /************************************************************************************/
        /*******************************GET ORDERID FOR PRODUCT******************************/
        /************************************************************************************/
        console.log($scope.dataSV)
        $http({
            method : 'POST',
            url : "php/getorderid.php",
            data: $.param({id: $scope.data,sv: $scope.dataSV}),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(res){
                $scope.dataorderidall = res;
                //$scope.load = { 'display':'none'};
                console.log(res)
                //var page = res.split(/\n/g);
                //alert(page[3])
                if (res == ''){
                    angular.element(document.querySelector('#load')).css("display","none");
                    angular.element(document.querySelector('.pagenotfound')).css("display","block");
                }
                else{
                    $scope.TB_order_agent = res[0].TB_order_agent;

                     $http({
                        method : 'POST',
                        url : "php/checkImages.php",
                        data: $.param({imagename: $scope.TB_order_agent}),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            if (res == 0) {
                               $scope.TB_order_agent = '';
                            }

                            
                });
                console.log($scope.TB_order_agent)
                console.log(res[0].TB_carall_car_type)
                //$scope.VocherID = res;
                $scope.TB_admin_companyhome = res[0].TB_admin_company;
                $scope.agenthome = res[0].TB_order_agent;
                $scope.TB_driver_phone = res[0].TB_driver_phone;
                $scope.TB_book_agent_agent_ref = res[0].TB_book_agent_agent_ref;
                $scope.VocherID = [];
                
                var length = res.length;
                $scope.onholiday = res[0].TB_order_ondate +" "+ " / " +" " + res[length-1].TB_order_ondate ;
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
                    $scope.datebooks.push(new Date(res[i].TB_order_ondate +' '+ res[i].airout_h +':'+ res[i].airout_m));                    
                    $scope.datebooks2.push(res[i].TB_order_ondate +' '+ res[i].airout_h +':'+ res[i].airout_m + ':00');

                }                
                for (var i = 0; i < $scope.datebooks2.length; i++) {
                    var s = 0;
                        angular.forEach($scope.VocherID, function (y) {
                            var ondate = y.TB_order_ondate.split("-"); 
                           // console.log(ondate)
                            var datecre = y.TB_order_outdate;
                           // console.log(datecre)
                            var d = $filter('date')(y.TB_order_ondate,'yyyy-MM-dd 18:00:00 ');
                            //console.log(d)
                            var comparedate = new Date(d);
                            
                            var minutes = y.airout_h +':'+ y.airout_m + ':00';
                            var datecheck = new Date();
                            var datecom1 = comparedate.getFullYear()+'-'+[parseInt(comparedate.getMonth())+1]+'-'+[parseInt(comparedate.getDate())-1]+' '+ minutes; // ourdate Before 24 houre
                            var datecom2 = datecheck.getFullYear()+'-'+[parseInt(datecheck.getMonth())+1]+'-'+datecheck.getDate()+' '+ minutes; // newdate compare Before 24 houre
                            
                            
                            //console.log(datecom1)
                            //console.log(datecom2)
                            
                            var temp1 = $filter('date')(new Date(),'yyyy-MM-dd HH:mm:ss '); // newdate new
                            var temp2 = $filter('date')(comparedate,'yyyy-MM-dd 18:00:00 '); // outdate to 18:00:00
                            var temp3; 

                            //console.log(temp1)
                            //console.log(temp2)
                            //console.log($filter('date')(temp2,'yyyy-MM-dd HH:mm:ss '))
                           
                            
                            if (y.area != 'In' || y.transfer_in == '1' ) {
                              if (datecom1 == datecom2) {
                                    temp3 = temp1;
                                    if (temp3 == temp2) {
                                        y.dateCompare = 'wait';
                                    }
                                    else{
                                       y.dateCompare = 'use'; 
                                    }
                                    
                            }
                            else{
                                y.dateCompare = 'wait';
                            }  
                            }
                            
                            $scope.ondatesplit = ondate[0][2]+ondate[0][3]+"-"+ondate[1]+"-"+ondate[2];                            
                            y.ondatesplit = $scope.ondatesplit;                           
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
                        data: $.param({order: $scope.data,sv: $scope.dataSV}),
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
                
                
                angular.forEach($scope.VocherID, function (y) {
                    if (y.dateCompare == 'use' ) {
                            if (y.room_number.length == 0) {
                                $('#IDroomnum').modal('show');
                                 console.log(y.TB_order_order)
                                 $scope.VOUCHER = y.TB_order_order;
                            }
                         
                    }

                });
                $scope.Voucherpass = [];
                $scope.Voucherwait = [];
                $scope.Vouchercancel = [];
                $scope.Voucherrej = [];
                angular.forEach($scope.VocherID, function (data) {
                    if (data.datessnew == 1 && data.TB_order_status != 'CANCEL'  ) {
                            $scope.Voucherpass.push(data);
                            console.log($scope.Voucherpass)
                         
                    }
                    if (data.datessnew != 1 && data.TB_order_status != 'CANCEL'  ) {
                       //  $scope.Voucherwait = data;
                         $scope.Voucherwait.push(data);
                    }
                    if (data.sub_confirm == 0 && data.TB_order_status == 'CANCEL' ) {
                        $scope.Vouchercancel.push(data);
                    }
                    if ((data.sub_reject == 1 || data.sub_reject == 2 ) && data.TB_order_status == 'CANCEL') {
                        $scope.Voucherrej.push(data);
                    }

                });
               
                $scope.voucherselect = $scope.VocherID;
                console.log($scope.voucherselect)
               // $scope.load = { 'display':'none'};
               angular.element(document.querySelector('#load')).css("display","none");
                //$scope.bobymain = { 'display':'block'};
                angular.element(document.querySelector('.bobymain')).css("display","block");

                 //goFullscreen();
                $scope.VoucherSelect = $scope.Voucherwait;
                $scope.numVocherpass1 = $scope.voucherselect.length;
                $scope.numVocherpass2 = $scope.Voucherpass.length;
                $scope.numVocherpass3 = $scope.Voucherwait.length;
                if ($scope.numVocherpass3 == 0) {
                  $scope.slectVoucher = { 'display':'block' };
                }
                $scope.numVocherpass4 = $scope.Vouchercancel.length;
                $scope.numVocherpass5 = $scope.Voucherrej.length;
                console.log($scope.numVocherpass4)
                console.log($scope.numVocherpass5)
                 if($scope.flagcheck == 1){
                    $scope.Typetext = "All"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"Unused"+' '+'('+$scope.Voucherwait.length+')';
                }
                if($scope.flagcheck == 2){
                    $scope.Typetext = "ทั้งหมด"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"รอใช้"+' '+'('+$scope.Voucherwait.length+')';
                }
                if($scope.flagcheck == 3){
                    $scope.Typetext = "所有"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"等待使用"+' '+'('+$scope.Voucherwait.length+')';
                }
                if ($scope.flagcheck == undefined) {
                    $scope.Typetext = "All"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"Unused"+' '+'('+$scope.Voucherwait.length+')';

                }
                }
                
                

        });
         
              
        $scope.numflag = 3;
                
        $scope.cs = false;
        $scope.snapphoto = function(x){
          $scope.logoAgent = x;
          $('#upphotobycompany').modal('show');
        } 
        $scope.selectType = function(x){
            $scope.numflag = x;
            $scope.VoucherSelect = "";
            if (x==1) {
                if($scope.flagcheck == 1){
                    $scope.Typetext = "All"+' '+'('+$scope.voucherselect.length+')';
                }
                if($scope.flagcheck == 2){
                    $scope.Typetext = "ทั้งหมด"+' '+'('+$scope.voucherselect.length+')';
                }
                if($scope.flagcheck == 3){
                    $scope.Typetext = "所有"+' '+'('+$scope.voucherselect.length+')';
                }
                //$scope.numVocherpass = $scope.VocherID.length;
                 $scope.VoucherSelect = $scope.VocherID;
                 if ($scope.VoucherSelect.length == 0) {
                    $scope.noData ={ 'display':'block' };
                }
                else{
                    $scope.noData ={ 'display':'none' };
                }

            }
            if (x==2) {
                if($scope.flagcheck == 1){
                    $scope.Typetext = "All"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"Used" +' '+'('+$scope.Voucherpass.length+')';
                }
                if($scope.flagcheck == 2){
                    $scope.Typetext = "ทั้งหมด"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"ใช้แล้ว" +' '+'('+$scope.Voucherpass.length+')';
                }
                if($scope.flagcheck == 3){
                    $scope.Typetext = "所有"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"已经使用" +' '+'('+$scope.Voucherpass.length+')';
                }

                $scope.VoucherSelect = $scope.Voucherpass;
                if ($scope.Voucherpass.length == 0) {
                    $scope.noData ={ 'display':'block' };
                }
                else{
                    $scope.noData ={ 'display':'none' };
                }
                //$scope.numVocherpass = $scope.Voucherpass.length;
            }
            if (x==3) {
                 if($scope.flagcheck == 1){
                    $scope.Typetext = "All"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"Unused"+' '+'('+$scope.Voucherwait.length+')';
                }
                if($scope.flagcheck == 2){
                    $scope.Typetext = "ทั้งหมด"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"รอใช้"+' '+'('+$scope.Voucherwait.length+')';
                }
                if($scope.flagcheck == 3){
                    $scope.Typetext = "所有"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"等待使用"+' '+'('+$scope.Voucherwait.length+')';
                }
                $scope.VoucherSelect = $scope.Voucherwait;
                if ($scope.Voucherwait.length == 0) {
                    $scope.noData ={ 'display':'block' };
                }
                else{
                    $scope.noData ={ 'display':'none' };
                }
                //$scope.numVocherpass = $scope.Voucherwait.length;

            }
            if (x==4) {
                if($scope.flagcheck == 1){
                    $scope.Typetext = "All"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"Canceled"+' '+'('+$scope.Vouchercancel.length+')';
                }
                if($scope.flagcheck == 2){
                    $scope.Typetext = "ทั้งหมด"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"ที่ถูกยกเลิก"+' '+'('+$scope.Vouchercancel.length+')';
                }
                if($scope.flagcheck == 3){
                    $scope.Typetext = "所有"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"已取消"+' '+'('+$scope.Vouchercancel.length+')';
                }
                $scope.VoucherSelect = $scope.Vouchercancel;
                //$scope.numVocherpass4 = 0;
                if ($scope.numVocherpass4 == 0) {
                    $scope.noData ={ 'display':'block' };
                }
                else{
                    $scope.noData ={ 'display':'none' };
                } 

            }
            if (x==5) {
                if($scope.flagcheck == 1){
                    $scope.Typetext = "All"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"Rejected"+' '+'('+$scope.Voucherrej.length+')';
                }
                if($scope.flagcheck == 2){
                    $scope.Typetext = "ทั้งหมด"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"ถูกปฏิเสธ"+' '+'('+$scope.Voucherrej.length+')';
                }
                if($scope.flagcheck == 3){
                    $scope.Typetext = "所有"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"已拒绝"+' '+'('+$scope.Voucherrej.length+')';
                }
                $scope.VoucherSelect = '';
                //$scope.numVocherpass5 = 0;
                if ($scope.numVocherpass5 == 0) {
                    $scope.noData ={ 'display':'block' };
                }
                else{
                    $scope.noData ={ 'display':'none' };
                }

            }
            $scope.icondown ={ 'display':'block' };
            $scope.iconup ={ 'display':'none' };
            $scope.cshow = false;
            $scope.slectVoucher ={ 'display':'none' };
        }
        
        $scope.getvoucher = function(x){
            $scope.VOUCHER = x;
        }
        $scope.inputroomnumber = function(i){
            console.log(i)
            $scope.selectroom = i;
            $http({
                        method : 'POST',
                        url : "php/insertroomnumber.php",
                        data: $.param({room: $scope.selectroom, voucher: $scope.VOUCHER, sv: $scope.dataSV}),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            //$scope.room_number = $scope.selectroom;
                            if ($scope.typeTourcheckroom == 'transfer') {
                              $scope.room = "haveinputroom";
                            }
                            else{
                                $scope.room2 = "haveinputroom2";
                            }
                            
                            //$window.location.reload();
                    });
            
        }
        $scope.putRoomnumber = function(){
            console.log($scope.selectroom)
            console.log($scope.VOUCHER)
            console.log($scope.dataSV)

            $http({
                        method : 'POST',
                        url : "php/insertroomnumber.php",
                        data: $.param({room: $scope.selectroom, voucher: $scope.VOUCHER, sv: $scope.dataSV}),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            if ($scope.typeTourcheckroom == 'transfer') {
                              $scope.room = "haveinputroom";
                            }
                            else{
                                $scope.room2 = "haveinputroom2";
                            }
                            //$window.location.reload();
                    });
            //$('#IDroomnum').modal('show');
        }
        $scope.editRoomnumber =function(i){
            console.log(i)
            $scope.editroom = i;
            $scope.room_number = $scope.editroom;
            $('#IDroomnum').modal('show');

        }
        $scope.inputroomnumberedit = function(i){
            console.log(i)
            $scope.selectinputroom = i;
        }
        $scope.editconfirmroom = function(){
            $http({
                        method : 'POST',
                        url : "php/insertroomnumber.php",
                        data: $.param({room: $scope.selectinputroom, voucher: $scope.VOUCHER, sv: $scope.dataSV}),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                            $scope.room_number = $scope.selectinputroom;
                            $('#IDroomnum').modal('hide');
                            //$window.location.reload();
                    });
        }
        
        $scope.getVideo = function(x){
            console.log(x)
            $http({
                        method : 'POST',
                        url : "php/getVideo.php",
                        data: $.param({program: x.TB_order_program, sv: $scope.dataSV}),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                           $scope.video = '';
                           $scope.video2 = '';
                           $scope.video3 = '';
                              if (res[0].video != '') {
                                
                                 //$scope.exercise_video_url = data.video;
                                  var exercise_video_url = res[0].video;
                                  $scope.video1 = res[0].video;
                                //$scope.iframe = {srcvideo:exercise_video_url};
                                 //$scope.exercise_video_url = $sce.trustAsResourceUrl(data.video);
                              }
                              if (res[1].video != '') {
                                
                                 //$scope.exercise_video_url = data.video;
                                  var exercise_video_url2 = res[1].video;
                                  $scope.video2 = res[1].video;
                                //$scope.iframe = {srcvideo:exercise_video_url};
                                 //$scope.exercise_video_url = $sce.trustAsResourceUrl(data.video);
                              }
                              if (res[2].video != '') {
                                 
                                 //$scope.exercise_video_url = data.video;
                                  var exercise_video_url3 = res[2].video;
                                  $scope.video3 = res[2].video;
                                //$scope.iframe = {srcvideo:exercise_video_url};
                                 //$scope.exercise_video_url = $sce.trustAsResourceUrl(data.video);
                              }
                              $('#videoTour').modal('show');
                            
                            angular.forEach(res, function (data) {
                              
                            

                        });
                            
                    });
        }
        $scope.playerStateChanged = function(event) {
       alert(event); // Event data logged
    };

        /**********************************************************************************************/
        /*************************** GET VOUCHER INFOMATION OR BOOKING DETAIL *************************/
        /**********************************************************************************************/
        $scope.getbookinfomation =function(x,i){
            $('#popupbookingdetail').modal('show');
            console.log(i)
            $scope.typeTourcheckroom = x.TB_order_type;
            $scope.area = x.area;
            $scope.clickType = 1;
            //alert('asasasasa');
            $scope.dataDri = x;
            $scope.index = i+1;
            if (x.TB_order_type == 'transfer') {
               $scope.topic_en = x.topic_en;
                $scope.topic_th = x.topic_th;
                $scope.topic_cn = x.topic_cn; 
            }
            if (x.TB_order_type != 'transfer') {
                $scope.topic_en = x.T_topic_en;
                $scope.topic_th = x.T_topic_th;
                $scope.topic_cn = x.T_topic_cn; 
            }
            
            $scope.dataVCtoderiver;
   $scope.dataVCtoderiver = x;
            console.log(x.TB_order_order)
            $scope.VOUCHER = x.TB_order_order;
            callvoucher(x);
            $scope.typeTour = x.TB_order_type;
            $scope.product = parseInt(x.TB_order_program);
            console.log($scope.typeTour)
            console.log($scope.product)
             $http({
                    method : 'POST',
                    url : "php/getDeposit.php",
                    data: $.param({'order': x.TB_order_order,sv: $scope.dataSV}),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).success(function(res){
                        console.log(res)
                        if (res == 'nodata') {
                          alert(res)
                          $scope.depo = false;
                        }
                        else{
                          if (res == 0) {
                              $scope.depo = false;
                          }
                          else{
                            $scope.depo = true;
                            $scope.datadepo = res[0].total;
                             //alert('$scope.datadepo' + $scope.datadepo)
                            console.log($scope.datadepo+'=========================================')
                          }
                        }
                        
                       

                    });
            if (x.TB_order_type == 'diving') {
                console.log("in case diving")
                console.log(typeof parseInt(x.TB_order_program))
                $http({
                    method : 'POST',
                    url : "php/getprogramdiving.php",
                    data: $.param({program: $scope.product,sv: $scope.dataSV,typepro: $scope.typeTour}),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).success(function(res){
                        console.log(res)
                        
                        $scope.productdata = res;
                        angular.forEach($scope.productdata, function (y) {
                            y.totalprice_m = parseInt(y.mask)*parseInt(y.mask_s) 
                            y.totalprice_f = parseInt(y.fins)*parseInt(y.fins_s) 
                            y.totalprice_w = parseInt(y.wetsuit)*parseInt(y.wetsuit_s)
                            y.totalprice_b = parseInt(y.bcd_s)*parseInt(y.bcd) 
                            y.totalprice_r = parseInt(y.regulator)*parseInt(y.regulator_s)

                        });

                    });
            }
            if (x.TB_order_type == 'golf') {

            }
            //$scope.popupbookingdetail = {'display':'block'}
              if (x.datessnew == 1) {
                //$('#voucherpass').modal('show');
              }
        }
        $scope.CPVC = '';
    function callvoucher(x){
        // if (x.TB_order_order == $scope.CPVC) {
        //     //alert("same")
        //     $scope.CPVC = x.TB_order_order;
        //     angular.element(document.querySelector('#load')).css("display","none");

        // }
        //else{
            //alert("not same")
            angular.element(document.querySelector('#load')).css("display","block");
            $scope.VOUCHER = x.TB_order_order;
            console.log(x)
            $scope.CPVC = x.TB_order_order;

            if (x.TB_order_type == "transfer") {
                console.log("in case transfer")
                $http({
                    method : 'POST',
                    url : "php/voucher.php",
                    data: $.param({id: $scope.VOUCHER,sv: $scope.dataSV}),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).success(function(res){
                        console.log(res)
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
                        $scope.airout_time = res[0].airout_time;
                        var posted = res[0].posted.split("_");
                        console.log(posted);
                        $scope.posted = posted[1];
                        $scope.remark = res[0].remark;
                        $scope.checkDriver=res[0].web_driver_name;

                        if (res[0].web_driver_name != '' && res[0].web_driver_name != null) {
                            console.log(res[0].web_driver_name)
                        $scope.web_driver_name = res[0].web_driver_name.split(" ");
                        console.log($scope.web_driver_name)
                        
                        
                        $scope.fnamet = $scope.web_driver_name[0];
                        $scope.lnamet = $scope.web_driver_name[1];
                        $scope.web_driver_name_en = res[0].web_driver_name_en.split(" ");
                        console.log($scope.web_driver_name_en)
                        $scope.fname = $scope.web_driver_name_en[0];
                        $scope.lname = $scope.web_driver_name_en[1];
                        }
                        
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

                        $scope.user_confirm = res[0].TB_admin_nameissue;
                        $scope.driver_topoint_lat = res[0].driver_topoint_lat;
                        $scope.driver_topoint_lng = res[0].driver_topoint_lng;
                        $scope.date_confirm = res[0].date_confirm *1000;
                        console.log($scope.date_confirm)
                        $scope.tb_web_admin_company = res[0].tb_web_admin_company;
                        $scope.web_book_agent_guest = res[0].web_book_agent_guest;
                        $scope.web_book_agent_phone = res[0].web_book_agent_phone;
                        $scope.web_book_agent_phone2 = res[0].web_book_agent_phone2;
                        $scope.local_phone = res[0].local_phone;
                        $scope.web_carall_province = res[0].web_carall_province;
                        $scope.web_carall_car_color = res[0].web_carall_car_color;
                        console.log( $scope.web_carall_car_color+"------------------------------------")
                        if ($scope.web_carall_car_color == 'Yellow') {
                            $scope.stylecarcolor = "carbacgroung";
                            $scope.stylecarcolorselect = "Yellow";
                            $scope.stylecaenumber = "carnumber";
                        }
                        else if($scope.web_carall_car_color == 'White'){
                           $scope.stylecarcolor = "carbacgroung";
                            $scope.stylecarcolorselect = "White";
                            $scope.stylecaenumber = "carnumber";
                        }
                        else if($scope.web_carall_car_color == 'Green'){
                           $scope.stylecarcolor = "carbacgroung";
                            $scope.stylecarcolorselect = "Green";
                            $scope.stylecaenumber = "carnumber";
                        }
                        else if($scope.web_carall_car_color == 'Black'){
                           $scope.stylecarcolor = "carbacgroung";
                            $scope.stylecarcolorselect = "Black";
                            $scope.stylecaenumber = "carnumber";
                        }
                        $scope.web_carall_plate_color = res[0].web_carall_plate_color;                       
                        $scope.tb_web_admin_email = res[0].tb_web_admin_email;
                        $scope.tb_web_admin_phone = res[0].tb_web_admin_phone;
                        $scope.transferplace_topic_to = res[0].transferplace_topic_to;
                        $scope.driver_pickup = res[0].driver_pickup;
                        $scope.driver_complete = res[0].driver_complete;
                        $scope.driver_pickup_date = res[0].driver_pickup_date;
                        $scope.driver_topoint_lat = res[0].driver_topoint_lat;
                        $scope.driver_topoint_lng = res[0].driver_topoint_lng;
                        $scope.driver_pickup_lat = res[0].driver_pickup_lat;
                        $scope.driver_pickup_lng= res[0].driver_pickup_lng;
                        $scope.driver_complete_lat= res[0].driver_complete_lat;
                        $scope.driver_complete_lng= res[0].driver_complete_lng;
                         $scope.driver_checkcar_lat= res[0].driver_checkcar_lat;
                        $scope.driver_checkcar_lng= res[0].driver_checkcar_lng;
                        $scope.statearrived = res[0].driver_topoint;
                        $scope.statevehicle = res[0].driver_pickup;
                        //alert($scope.statevehicle)
                        $scope.statecomplete = res[0].driver_complete;
                        $scope.statecheckcar = res[0].driver_checkcar;
                        $scope.statearrived_date = res[0].driver_topoint_date;
                        $scope.statevehicle_date = res[0].driver_pickup_date;
                        $scope.statecomplete_date = res[0].driver_complete_date;
                        $scope.driver_checkcar_date = res[0].driver_checkcar_date;
            console.log($scope.statearrived)
            console.log($scope.statevehicle)
            console.log($scope.statecomplete)
            console.log($scope.statearrived_date)
            console.log($scope.statevehicle_date)
            console.log($scope.statecomplete_date)
            $scope.airin_time = res[0].airin_time;



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
                        $scope.caddy = res[0].caddy;
                          $scope.golfcar = res[0].golfcar;
                        $scope.web_driver_phone = res[0].web_driver_phone;
                        $scope.web_driver_car_num = res[0].web_driver_car_num;
                        $scope.numcar =res[0].numcar;
                        $scope.room_number = res[0].room_number;
                        $scope.terminal_in = res[0].terminal_in;
                        $scope.visa_in = res[0].visa_in;
                        if ($scope.room_number != '' || $scope.room_number != undefined) {
                            $scope.room = "notinputroom";
                        }
                        console.log("++++++++++++++++++++++++++++++++++++++++"+$scope.room_number.length)
                        if ($scope.status == "CONFIRM") {
                            $scope.state = "state";
                        }
                        else if($scope.status == "NEW"){
                            $scope.state = "state2";
                        }
                        else{
                            $scope.state = "state3";
                        }
                        $scope.plate_color = res[0].web_carall_plate_color;
                        console.log($scope.plate_color)
                        if ($scope.plate_color == "Yellow") {
                            $scope.pai = "plateyellow";
                        }
                        else if($scope.plate_color == "Green"){
                            $scope.pai = "plategreen";
                        }
                        else if($scope.plate_color == "Black"){
                            $scope.pai = "plateblack";
                        }
                        else if($scope.plate_color == "Red"){
                            $scope.pai = "platered";
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
                          
                        }
                        else{
                            
                        }
                        if ($scope.guest_topoint_driver_confirm == 0 && $scope.driver_topoint == 1) {
                                    $scope.boxbg = { 'display':'block'};
                                    console.log("in case 1")
                                    
                        }
                        else if($scope.guest_topoint_driver_confirm == 1 && $scope.driver_topoint == 1){
                            $scope.boxbg = { 'display':'none'};
                            console.log("in case 22")
                        }
                        
                        console.log($scope.program)
                        $scope.socialwechatid = '';                                            
                        $scope.sociallineid = '';                                           
                        $scope.socialzelloid = '';                                            
                        $scope.socialqqid = '';                                            
                        $scope.socialwangid = '';                                            
                        $scope.socialskypeid = '';                                           
                        $scope.socialwhatid = '';                                            
                        $scope.socialfaceid = '';  
                       
                         $http({
                                method : 'POST',
                                url : "php/getsocial.php",
                                data: $.param({id: $scope.tb_web_book_agent_id,sv: $scope.dataSV}),
                                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                }).success(function(res){
                                    console.log(res)
                                    if (res.length < 8) {
                                                //$scope.checkSocial = '';
                                    }
                                    if (res != '' && res != null) {
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
                                            $http({
                                            method : 'POST',
                                            url : "php/getbookagent.php",
                                            data: $.param({id: $scope.tb_web_book_agent_id,sv: $scope.dataSV}),
                                            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                            }).success(function(res){
                                                console.log(res)
                                                $scope.dataBookagent = res;
                                                $scope.countryCode = res[0].country_code;
                                                $scope.guestEmail = res[0].guestemail;
                                                $scope.guestEmail2 = res[0].guestemail2;                                               
                                                   
                                                $scope.web_country_name_en = res[0].name_en;


                                                $scope.s_wechat = res[0].s_wechat;
                                                $scope.s_line = res[0].s_line;
                                                $scope.s_zello = res[0].s_zello;
                                                $scope.s_qq = res[0].s_qq;
                                                $scope.s_ww = res[0].s_ww;
                                                $scope.s_skype = res[0].s_skype;
                                                $scope.s_what = res[0].s_what;
                                                $scope.s_fb = res[0].s_fb;
                                                
                                                 $http({
                                                    method : 'POST',
                                                    url : "php/getsocialType.php",
                                                    data: $.param({sv: $scope.dataSV}),
                                                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                                    }).success(function(res){
                                                        console.log(res)
                                                    angular.element(document.querySelector('#load')).css("display","none");                          

                                                        for (var i = 0; i < res.length; i++) {
                                                            if (res[i].id == 1) {
                                                            //$scope.editwechat = true;
                                                            $scope.idwechatnull =  res[i].id;
                                                            $scope.iconwechatnull =  res[i].type_icon;
                                                            $scope.socialwechatidnull = res[i].topic_en; 
                                                            }
                                                            else if (res[i].id == 2) {
                                                              //$scope.editline = true;
                                                              $scope.idlinenull =  res[i].id
                                                              $scope.iconlinenull =  res[i].type_icon;
                                                              $scope.sociallineidnull = res[i].topic_en;
                                                            }
                                                            else if (res[i].id == 3) {
                                                             // $scope.editline = true; 
                                                             $scope.idzellonull =  res[i].id
                                                                $scope.iconzellonull =  res[i].type_icon;
                                                              $scope.socialzelloidnull = res[i].topic_en; 
                                                            }
                                                            else if (res[i].id == 4) {
                                                              //$scope.editqq = true; 
                                                              $scope.idqqnull =  res[i].id
                                                              $scope.iconqqnull =  res[i].type_icon;
                                                              $scope.socialqqidnull = res[i].topic_en; 
                                                            }
                                                            else if (res[i].id == 5) {
                                                              //$scope.editwang = true;
                                                              $scope.idwangnull =  res[i].id
                                                              $scope.iconwangnull =  res[i].type_icon;
                                                              $scope.socialwangidnull = res[i].topic_en;   
                                                            }
                                                            else if (res[i].id == 6) {
                                                              //$scope.editskype = true;
                                                              $scope.idskypenull =  res[i].id  
                                                              $scope.iconskypenull =  res[i].type_icon;
                                                              $scope.socialskypeidnull = res[i].topic_en; 
                                                            }
                                                            else if (res[i].id == 7) {
                                                              //$scope.editwhat = true; 
                                                              $scope.idwhatnull =  res[i].id
                                                              $scope.iconwhatnull =  res[i].type_icon;
                                                              $scope.socialwhatidnull = res[i].topic_en;  
                                                            }
                                                            else if (res[i].id == 8) {
                                                              //$scope.editface = true; 
                                                              $scope.idfacenull =  res[i].id
                                                               $scope.iconfacenull =  res[i].type_icon;
                                                                $scope.socialfaceidnull = res[i].topic_en;  
                                                            }
                                                    }
                                            //angular.element(document.querySelector('#load')).css("display","none");
                                                        

                                                });

                                        });

                                    }
                                    else{
                                        //alert($scope.tb_web_book_agent_id);
                                        $http({
                                            method : 'POST',
                                            url : "php/getbookagent.php",
                                            data: $.param({id: $scope.tb_web_book_agent_id,sv: $scope.dataSV}),
                                            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                            }).success(function(res){
                                                console.log(res)
                                                $scope.dataBookagent = res;

                                                $scope.countryCode = res[0].country_code;
                                                $scope.guestEmail = res[0].guestemail;
                                                $scope.guestEmail2 = res[0].guestemail2;
                                                   
                                                $scope.web_country_name_en = res[0].name_en;
                                                $scope.s_wechat = res[0].s_wechat;
                                                $scope.s_line = res[0].s_line;
                                                $scope.s_zello = res[0].s_zello;
                                                $scope.s_qq = res[0].s_qq;
                                                $scope.s_ww = res[0].s_ww;
                                                $scope.s_skype = res[0].s_skype;
                                                $scope.s_what = res[0].s_what;
                                                $scope.s_fb = res[0].s_fb;
                                                 $http({
                                                    method : 'POST',
                                                    url : "php/getsocialType.php",
                                                    data: $.param({sv: $scope.dataSV}),
                                                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                                    }).success(function(res){
                                                        console.log(res)
                                                        for (var i = 0; i < res.length; i++) {
                                                            if (res[i].id == 1) {
                                                            //$scope.editwechat = true;
                                                            $scope.idwechatnull =  res[i].id;
                                                            $scope.iconwechatnull =  res[i].type_icon;
                                                            $scope.socialwechatidnull = res[i].topic_en; 
                                                            }
                                                            else if (res[i].id == 2) {
                                                              //$scope.editline = true;
                                                              $scope.idlinenull =  res[i].id
                                                              $scope.iconlinenull =  res[i].type_icon;
                                                              $scope.sociallineidnull = res[i].topic_en;
                                                            }
                                                            else if (res[i].id == 3) {
                                                             // $scope.editline = true; 
                                                             $scope.idzellonull =  res[i].id
                                                                $scope.iconzellonull =  res[i].type_icon;
                                                              $scope.socialzelloidnull = res[i].topic_en; 
                                                            }
                                                            else if (res[i].id == 4) {
                                                              //$scope.editqq = true; 
                                                              $scope.idqqnull =  res[i].id
                                                              $scope.iconqqnull =  res[i].type_icon;
                                                              $scope.socialqqidnull = res[i].topic_en; 
                                                            }
                                                            else if (res[i].id == 5) {
                                                              //$scope.editwang = true;
                                                              $scope.idwangnull =  res[i].id
                                                              $scope.iconwangnull =  res[i].type_icon;
                                                              $scope.socialwangidnull = res[i].topic_en;   
                                                            }
                                                            else if (res[i].id == 6) {
                                                              //$scope.editskype = true;
                                                              $scope.idskypenull =  res[i].id  
                                                              $scope.iconskypenull =  res[i].type_icon;
                                                              $scope.socialskypeidnull = res[i].topic_en; 
                                                            }
                                                            else if (res[i].id == 7) {
                                                              //$scope.editwhat = true; 
                                                              $scope.idwhatnull =  res[i].id
                                                              $scope.iconwhatnull =  res[i].type_icon;
                                                              $scope.socialwhatidnull = res[i].topic_en;  
                                                            }
                                                            else if (res[i].id == 8) {
                                                              //$scope.editface = true; 
                                                              $scope.idfacenull =  res[i].id
                                                               $scope.iconfacenull =  res[i].type_icon;
                                                                $scope.socialfaceidnull = res[i].topic_en;  
                                                            }
                                            angular.element(document.querySelector('#load')).css("display","none");

                                                    }
                                                        

                                                });

                                        });
                                    }
                                            
                            });
                        $http({
                            method : 'POST',
                            url : "php/transferproduct.php",
                            data: $.param({id: $scope.program,sv: $scope.dataSV}),
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
                                
                                //angular.element(document.querySelector('#load')).css("display","none");

                                if ($scope.area == "Rental") {
                                    $scope.id = res[0].id;
                                    console.log("id"+$scope.id);
                                    $scope.rentalid = [];
                                    $http({
                                        method : 'POST',
                                        url : "php/getRental.php",
                                        data: $.param({id: $scope.id,sv: $scope.dataSV}),
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
                                            data: $.param({sv: $scope.dataSV}),
                                            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                            }).success(function(res){
                                                console.log(res)
                                                if (x.dateCompare == 'use' && $scope.clickType == 1 && x.room_number.length <= 0) {
                                                    //alert("aaaaa");
                                                     var audio = new Audio("audio/alert_msg_new.mp3");
                                                         console.log(audio)
                                                         //alert(audio);
                                                            audio.play();
                                                    $('#IDroomnum').modal('show');

                                                }
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
                                        data: $.param({id: $scope.web_car_car_model,sv: $scope.dataSV}),
                                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                        }).success(function(res){
                                            console.log(res)
                                            $scope.detailitem = res;
                              
                                     });
                                    $http({
                                        method : 'POST',
                                        url : "php/gallery-car.php",
                                        data: $.param({id: $scope.web_car_car_model,sv: $scope.dataSV}),
                                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                        }).success(function(res){
                                            console.log(res)
                                                $scope.gallerycar = res;
                                     });
                                        $http({
                                        method : 'POST',
                                        url : "php/getcommentforvoucher.php",
                                        data: $.param({voucher: $scope.VOUCHER,sv: $scope.dataSV}),
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
                                        data: $.param({sv: $scope.dataSV}),
                                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                        }).success(function(res){
                                            $scope.country = res;
                                            console.log(res)
                                            //console.log($scope.web_book_agent_phone)
                                           //console.log($scope.web_book_agent_phone2)
                                             
                                             
                                        
                                            for (var i = 0; i < res.length; i++) {
                                                //console.log($scope.country[i].phonecode)
                                                if ($scope.local_phone != null &&  $scope.local_phone != '') {
                                                    $scope.split7 = $scope.local_phone.split("+");
                                                    $scope.split8 = $scope.split7[1].split(" ");
                                                    if (res[i].phonecode == $scope.split8[0]) {
                                                    
                                                        $scope.imgcoutry2 = res[i].country_code;
                                                  
                                                    }
                                                }
                                                if ($scope.web_book_agent_phone != null && $scope.web_book_agent_phone != '') {
                                                    $scope.split5 = $scope.web_book_agent_phone.split("+");
                                                    //console.log($scope.split5)
                                                    $scope.split6 = $scope.split5[1].split(" ");
                                                    if (res[i].phonecode == $scope.split6[0]) {
                                                    
                                                        $scope.imgcoutry = res[i].country_code;
                                                        //console.log( $scope.imgcoutryfront)
                                                  
                                                    }
                                                }
                                                if ($scope.web_book_agent_phone2 != null && $scope.web_book_agent_phone2 != '') {
                                                    var phone2 = $scope.web_book_agent_phone2.split("+");
                                                    //console.log($scope.split5)
                                                    var phone2Splitplus = phone2[1].split(" ");
                                                    if (res[i].phonecode == phone2Splitplus[0]) {
                                                    
                                                        $scope.imgcoutry3 = res[i].country_code;
                                                        //console.log( $scope.imgcoutryfront)
                                                  
                                                    }
                                                }
                                                
                                                
                                            }
                                            

                              
                                     });
                                        
                                    //var url_chat = "go.php?name=chat&file=main&vc="+$scope.VOUCHER+"";
 
 
                                   // $('#load_chat').load(url_chat); 
                                    $http({
                                        method : 'POST',
                                        url : "php/get_flight.php",
                                        data: $.param({voucher: $scope.VOUCHER,sv: $scope.dataSV}),
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
                                    
                                        
                                    });
                    });
            }
            else{
                console.log("in case tour")
                $http({
                    method : 'POST',
                    url : "php/voucher.php",
                    data: $.param({id: $scope.VOUCHER,sv: $scope.dataSV}),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).success(function(res){
                        console.log(res)
                        $scope.dataVoucher = res;
                        angular.forEach($scope.dataVoucher, function (data) {
                          console.log(data.TB_admin_nameissue)
                                   var posted = data.posted.split("_");      
                                             data.posted = posted[1];
                                             //console.log(y.TB_
                                       
                                 });
                        console.log(res[0].invoice)
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
                        
                        $scope.ondate = res[0].ondate;
                        $scope.outdate = res[0].outdate;
                        var posted = res[0].posted.split("_");
                        $scope.posted = posted[1];
                        $scope.remark = res[0].remark;
                        
                        
                        $scope.transferplace_topic = res[0].transferplace_topic;
                        $scope.post_date = res[0].web_driver_post_date;
                        console.log($scope.post_date)
                        $scope.web_carall_plate_num = res[0].web_carall_plate_num;
                        $scope.web_country_name_en = res[0].web_country_name_en;
                       
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
                        
                        $scope.datebook = res[0].post_date * 1000;
                        //$scope.user_confirm = res[0].user_confirm;
                             $scope.user_confirm = res[0].TB_admin_nameissue;
                        
                        $scope.date_confirm = res[0].date_confirm *1000;
                        $scope.tb_web_admin_company = res[0].tb_web_admin_company;
                        $scope.web_book_agent_guest = res[0].web_book_agent_guest;
                        $scope.web_book_agent_phone = res[0].web_book_agent_phone;
                        $scope.web_book_agent_phone2 = res[0].web_book_agent_phone2;
                        $scope.local_phone = res[0].local_phone;
                        console.log($scope.local_phone)

                        $scope.web_carall_province = res[0].web_carall_province;
                        
                                            
                        $scope.tb_web_admin_email = res[0].tb_web_admin_email;
                        $scope.tb_web_admin_phone = res[0].tb_web_admin_phone;
                        $scope.transferplace_topic_to = res[0].transferplace_topic_to;
                        
                        
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
                        $scope.room_number = res[0].room_number;
                        if ($scope.room_number != '' || $scope.room_number != undefined) {
                            $scope.room2 = "notinputroom2";
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

                       
                        console.log($scope.s_what.length)
                        if ($scope.guest_topoint == 1) {
                            console.log("asasas")
                            $scope.boxbg2 = { 'display':'none'};
                            //$scope.stylecheckin = { 'display':'none'};
                        }
                        else{
                            //$scope.stylecheckin = { 'display':'block'};
                        }
                        
                        //  var ss = "http://t-booking.com/demo/print.php?name=admin/voucher&file=transfer&no="+$scope.id+"&order="+$scope.tb_web_book_agent_id+"&code="+$scope.code+"";
                        //  console.log(ss)
                        // $scope.iframe = {src:ss};
                        console.log($scope.program)
                        //$scope.load = { 'display':'none'};
                        //$scope.bobymain = { 'display':'block'};
                         $http({
                                method : 'POST',
                                url : "php/getsocial.php",
                                data: $.param({id: $scope.tb_web_book_agent_id,sv: $scope.dataSV}),
                                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                }).success(function(res){
                                    console.log(res)
                                    if (res.length < 8) {
                                                $scope.checkSocial = '';
                                    }
                                    if (res != '' && res != null) {
                                        $scope.socialall = res;
                                            //angular.element(document.querySelector('#load')).css("display","none");
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


                                    }
                                    else{
                                        //alert($scope.tb_web_book_agent_id);
                                        $http({
                                            method : 'POST',
                                            url : "php/getbookagent.php",
                                            data: $.param({id: $scope.tb_web_book_agent_id,sv: $scope.dataSV}),
                                            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                            }).success(function(res){
                                                console.log(res)
                                                $scope.dataBookagent = res;

                                                $scope.countryCode = res[0].country_code;
                                                $scope.guestEmail = res[0].guestemail;
                                                $scope.guestEmail2 = res[0].guestemail2;
                                                   
                                                $scope.web_country_name_en = res[0].name_en;
                                                 $http({
                                                    method : 'POST',
                                                    url : "php/getsocialType.php",
                                                    data: $.param({sv: $scope.dataSV}),
                                                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                                    }).success(function(res){
                                                        console.log(res)
                                                        for (var i = 0; i < res.length; i++) {
                                                            if (res[i].id == 1) {
                                                            //$scope.editwechat = true;
                                                            $scope.idwechatnull =  res[i].id;
                                                            $scope.iconwechatnull =  res[i].type_icon;
                                                            $scope.socialwechatidnull = res[i].topic_en; 
                                                            }
                                                            else if (res[i].id == 2) {
                                                              //$scope.editline = true;
                                                              $scope.idlinenull =  res[i].id
                                                              $scope.iconlinenull =  res[i].type_icon;
                                                              $scope.sociallineidnull = res[i].topic_en;
                                                            }
                                                            else if (res[i].id == 3) {
                                                             // $scope.editline = true; 
                                                             $scope.idzellonull =  res[i].id
                                                                $scope.iconzellonull =  res[i].type_icon;
                                                              $scope.socialzelloidnull = res[i].topic_en; 
                                                            }
                                                            else if (res[i].id == 4) {
                                                              //$scope.editqq = true; 
                                                              $scope.idqqnull =  res[i].id
                                                              $scope.iconqqnull =  res[i].type_icon;
                                                              $scope.socialqqidnull = res[i].topic_en; 
                                                            }
                                                            else if (res[i].id == 5) {
                                                              //$scope.editwang = true;
                                                              $scope.idwangnull =  res[i].id
                                                              $scope.iconwangnull =  res[i].type_icon;
                                                              $scope.socialwangidnull = res[i].topic_en;   
                                                            }
                                                            else if (res[i].id == 6) {
                                                              //$scope.editskype = true;
                                                              $scope.idskypenull =  res[i].id  
                                                              $scope.iconskypenull =  res[i].type_icon;
                                                              $scope.socialskypeid = res[i].topic_en; 
                                                            }
                                                            else if (res[i].id == 7) {
                                                              //$scope.editwhat = true; 
                                                              $scope.idwhatnull =  res[i].id
                                                              $scope.iconwhatnull =  res[i].type_icon;
                                                              $scope.socialwhatidnull = res[i].topic_en;  
                                                            }
                                                            else if (res[i].id == 8) {
                                                              //$scope.editface = true; 
                                                              $scope.idfacenull =  res[i].id
                                                               $scope.iconfacenull =  res[i].type_icon;
                                                                $scope.socialfaceidnull = res[i].topic_en;  
                                                            }
                                                    }
                                                        

                                                });

                                        });
                                    }
                                            
                            });
                        $http({
                            method : 'POST',
                            url : "php/tourproduct.php",
                            data: $.param({id: $scope.program,sv: $scope.dataSV}),
                            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                            }).success(function(res){
                                console.log(res+"=======================================")
                                    $scope.dataTour = res;
                                    //angular.element(document.querySelector('#load')).css("display","none");                          
                                 
                                   
                                    $http({
                                        method : 'POST',
                                        url : "php/country.php",
                                        data: $.param({sv: $scope.dataSV}),
                                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                        }).success(function(res){
                                            $scope.country = res;
                                            console.log(res)
                                            for (var i = 0; i < res.length; i++) {
                                                //console.log($scope.country[i].phonecode)
                                                if ($scope.local_phone != null &&  $scope.local_phone != '') {
                                                    $scope.split7 = $scope.local_phone.split("+");
                                                    $scope.split8 = $scope.split7[1].split(" ");
                                                    if (res[i].phonecode == $scope.split8[0]) {
                                                    
                                                        $scope.imgcoutry2 = res[i].country_code;
                                                  
                                                    }
                                                }
                                                if ($scope.web_book_agent_phone != null && $scope.web_book_agent_phone != '') {
                                                    $scope.split5 = $scope.web_book_agent_phone.split("+");
                                                    //console.log($scope.split5)
                                                    $scope.split6 = $scope.split5[1].split(" ");
                                                    if (res[i].phonecode == $scope.split6[0]) {
                                                    
                                                        $scope.imgcoutry = res[i].country_code;
                                                        //console.log( $scope.imgcoutryfront)
                                                  
                                                    }
                                                }
                                                if ($scope.web_book_agent_phone2 != null && $scope.web_book_agent_phone2 != '') {
                                                    var phone2 = $scope.web_book_agent_phone2.split("+");
                                                    //console.log($scope.split5)
                                                    var phone2Splitplus = phone2[1].split(" ");
                                                    if (res[i].phonecode == phone2Splitplus[0]) {
                                                    
                                                        $scope.imgcoutry3 = res[i].country_code;
                                                        //console.log( $scope.imgcoutryfront)
                                                  
                                                    }
                                                }
                                                
                                                
                                            }
                                           

                              
                                     });
                                        
                                //     var url_chat = "go.php?name=chat&file=main&vc="+$scope.VOUCHER+"";
 
 
                                   // $('#load_chat').load(url_chat); 
                                    $http({
                                        method : 'POST',
                                        url : "php/get_flight.php",
                                        data: $.param({voucher: $scope.VOUCHER,sv: $scope.dataSV}),
                                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                        }).success(function(res){
                                            console.log(res)
                                    angular.element(document.querySelector('#load')).css("display","none");                          

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
                                    
                                        
                                    });
                    });
            }           

        //}
            
            
    }
    $scope.clean;
    $scope.driving;
    $scope.Plate_to_point; 

    $scope.checkconfirm = function(){
      $scope.senddata = { 'display':'none'};

      $scope.stylecheckconfirm = { 'display':'block'};

    }

    /************************************************************************/
    /********************* Edit Your country mobile *************************/
    /************************************************************************/

    //$scope.Countrytatus = false;
    $scope.Country = function(){      
      $scope.countrybox = { 'display':'block'};
      
    }
    $scope.selectcountryValue;
    $scope.selectcountryValue2;
    $scope.selectcountryValue3;
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


    /************************************************************************/
    /**************************** Edit local phone **************************/
    /************************************************************************/
    
    $scope.Country2 = function(){      
      $scope.countrybox2 = { 'display':'block'};      
    }
    $scope.numCountryselect2 = function(i ,$event){
      $scope.imgcoutry2= i.country_code;
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
    $scope.Country3 = function(){      
      $scope.countrybox3 = { 'display':'block'};      
    }
    $scope.numCountryselect3 = function(i ,$event){
      $scope.imgcoutry3= i.country_code;
      $scope.countrybox3 = { 'display':'none'};
      if ($scope.flagcheck ==1) {
         $scope.Countryfont3 = ' ' + '(' + '+' + i.phonecode + ')' + i.name_en;
      }
      if ($scope.flagcheck ==2) {
         $scope.Countryfont3 = ' ' + '(' + '+' + i.phonecode + ')' + i.name_th;
      }
      if ($scope.flagcheck ==3) {
         $scope.Countryfont3 = ' ' + '(' + '+' + i.phonecode + ')' + i.name_cn;
      }
      $scope.selectcountryValue3 = '+'+i.phonecode;
      $scope.tcountryValue3 = '+'+i.phonecode;
      $scope.phonesend3 = $scope.selectcountryValue3;
      var p3 = $scope.web_book_agent_phone2.split(" ");
      $scope.phonenew2 = $scope.phonesend2 + ' ' + p3[1];
      console.log($scope.selectcountryValue3)
    }
    $scope.blockfooter = function(){
    
      $scope.footer = {'display':'block'};
        angular.element(document.querySelector('.footer')).css("display","block");
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
    $scope.punctuality2 = function(time2){
        //alert(t)
        //console.log(time)
        $scope.time2 = time2;
        if (time2 == 1) {
        angular.element(document.querySelector('#pun21')).css("color","#08930e");
        angular.element(document.querySelector('#pun22')).css("color","#ddd");
        angular.element(document.querySelector('#pun23')).css("color","#ddd");
        angular.element(document.querySelector('#pun24')).css("color","#ddd");
        angular.element(document.querySelector('#pun25')).css("color","#ddd");
      }
      else if (time2 == 2) {
          angular.element(document.querySelector('#pun21')).css("color","#08930e");
          angular.element(document.querySelector('#pun22')).css("color","#08930e");
          angular.element(document.querySelector('#pun23')).css("color","#ddd");
          angular.element(document.querySelector('#pun24')).css("color","#ddd");
          angular.element(document.querySelector('#pun25')).css("color","#ddd");
      }
      else if (time2 == 3) {
          angular.element(document.querySelector('#pun21')).css("color","#08930e");
          angular.element(document.querySelector('#pun22')).css("color","#08930e");
          angular.element(document.querySelector('#pun23')).css("color","#08930e");
          angular.element(document.querySelector('#pun24')).css("color","#ddd");
          angular.element(document.querySelector('#pun25')).css("color","#ddd");
      }
      else if (time2 == 4) {
          angular.element(document.querySelector('#pun21')).css("color","#08930e");
          angular.element(document.querySelector('#pun22')).css("color","#08930e");
          angular.element(document.querySelector('#pun23')).css("color","#08930e");
          angular.element(document.querySelector('#pun24')).css("color","#08930e");
          angular.element(document.querySelector('#pun25')).css("color","#ddd");
      }
      else if (time2 == 5) {
          angular.element(document.querySelector('#pun21')).css("color","#08930e");
          angular.element(document.querySelector('#pun22')).css("color","#08930e");
          angular.element(document.querySelector('#pun23')).css("color","#08930e");
          angular.element(document.querySelector('#pun24')).css("color","#08930e");
          angular.element(document.querySelector('#pun25')).css("color","#08930e");
      }
        
    }
    $scope.complacency = function(x){
        //alert(t)
        console.log(x)
        $scope.complac = x;

        if (x == 1) {
        angular.element(document.querySelector('#complac1')).css("color","#08930e");
        angular.element(document.querySelector('#complac2')).css("color","#ddd");
        angular.element(document.querySelector('#complac3')).css("color","#ddd");
        angular.element(document.querySelector('#complac4')).css("color","#ddd");
        angular.element(document.querySelector('#complac5')).css("color","#ddd");
      }
      else if (x == 2) {
          angular.element(document.querySelector('#complac1')).css("color","#08930e");
          angular.element(document.querySelector('#complac2')).css("color","#08930e");
          angular.element(document.querySelector('#complac3')).css("color","#ddd");
          angular.element(document.querySelector('#complac4')).css("color","#ddd");
          angular.element(document.querySelector('#complac5')).css("color","#ddd");
      }
      else if (x == 3) {
          angular.element(document.querySelector('#complac1')).css("color","#08930e");
          angular.element(document.querySelector('#complac2')).css("color","#08930e");
          angular.element(document.querySelector('#complac3')).css("color","#08930e");
          angular.element(document.querySelector('#complac4')).css("color","#ddd");
          angular.element(document.querySelector('#complac5')).css("color","#ddd");
      }
      else if (x == 4) {
          angular.element(document.querySelector('#complac1')).css("color","#08930e");
          angular.element(document.querySelector('#complac2')).css("color","#08930e");
          angular.element(document.querySelector('#complac3')).css("color","#08930e");
          angular.element(document.querySelector('#complac4')).css("color","#08930e");
          angular.element(document.querySelector('#complac5')).css("color","#ddd");
      }
      else if (x == 5) {
          angular.element(document.querySelector('#complac1')).css("color","#08930e");
          angular.element(document.querySelector('#complac2')).css("color","#08930e");
          angular.element(document.querySelector('#complac3')).css("color","#08930e");
          angular.element(document.querySelector('#complac4')).css("color","#08930e");
          angular.element(document.querySelector('#complac5')).css("color","#08930e");
      }
        
    }
    $scope.impressive = function(x){
        //alert(t)
        console.log(x)
        $scope.impress = x;
        if (x == 1) {
        angular.element(document.querySelector('#impressive1')).css("color","#08930e");
        angular.element(document.querySelector('#impressive2')).css("color","#ddd");
        angular.element(document.querySelector('#impressive3')).css("color","#ddd");
        angular.element(document.querySelector('#impressive4')).css("color","#ddd");
        angular.element(document.querySelector('#impressive5')).css("color","#ddd");
      }
      else if (x == 2) {
          angular.element(document.querySelector('#impressive1')).css("color","#08930e");
          angular.element(document.querySelector('#impressive2')).css("color","#08930e");
          angular.element(document.querySelector('#impressive3')).css("color","#ddd");
          angular.element(document.querySelector('#impressive4')).css("color","#ddd");
          angular.element(document.querySelector('#impressive5')).css("color","#ddd");
      }
      else if (x == 3) {
          angular.element(document.querySelector('#impressive1')).css("color","#08930e");
          angular.element(document.querySelector('#impressive2')).css("color","#08930e");
          angular.element(document.querySelector('#impressive3')).css("color","#08930e");
          angular.element(document.querySelector('#impressive4')).css("color","#ddd");
          angular.element(document.querySelector('#impressive5')).css("color","#ddd");
      }
      else if (x == 4) {
          angular.element(document.querySelector('#impressive1')).css("color","#08930e");
          angular.element(document.querySelector('#impressive2')).css("color","#08930e");
          angular.element(document.querySelector('#impressive3')).css("color","#08930e");
          angular.element(document.querySelector('#impressive4')).css("color","#08930e");
          angular.element(document.querySelector('#impressive5')).css("color","#ddd");
      }
      else if (x == 5) {
          angular.element(document.querySelector('#impressive1')).css("color","#08930e");
          angular.element(document.querySelector('#impressive2')).css("color","#08930e");
          angular.element(document.querySelector('#impressive3')).css("color","#08930e");
          angular.element(document.querySelector('#impressive4')).css("color","#08930e");
          angular.element(document.querySelector('#impressive5')).css("color","#08930e");
      }
        
    }


    /*****************************************************************/
    /************************ OPEN CONTACT ***************************/
    /*****************************************************************/
    $scope.chatTOdriverangular = function(x){
        //alert(x)
        $scope.orderChat = '';
        console.log(x)
        $http({
                        method : 'POST',
                        url : "php/updatenoti.php",
                        data: $.param({voucher: x,state: 'driver',sv: $scope.dataSV}),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).success(function(res){ 
                        console.log(res)
                        // angular.forEach($scope.checknotidata, function (y) {
                        //     angular.element(document.querySelector('#menudriver'+y.id)).removeClass('menudriver')
                        // });
                        //clearInterval(flashInterval);
                    });

    }
    $scope.location = function(data){
        if ($scope.flagcheck == 1) {
            $scope.pasa = "en";
        }
        if ($scope.flagcheck == 2) {
            $scope.pasa = "th";
        }
        if ($scope.flagcheck == 3) {
            $scope.pasa = "cn";
        }
        console.log(data)
        $( "#load_data_manage_work" ).toggle();
            var url_chat = "../../app/driver/load_page.php?name=livechat&file=index&vc="+data.TB_order_order+"&lang="+$scope.pasa+"&order="+data.orderid+"&chat_from=customer&chat_to=driver&action=location"+"&sv="+$scope.dataSV;
            console.log(url_chat)
             $('#load_data_manage_work').load(url_chat);
    }
    $scope.allChat = function(){
        if ($scope.flagcheck == 1) {
            $scope.pasa = "en";
        }
        if ($scope.flagcheck == 2) {
            $scope.pasa = "th";
        }
        if ($scope.flagcheck == 3) {
            $scope.pasa = "cn";
        }
        
        $( "#load_data_manage_work" ).toggle();
             var url_chat = "../../app/driver/load_page.php?name=livechat&file=all&vc="+voucher+"&lang="+$scope.pasa+"&order="+$scope.data+"&chat_from=customer&chat_to=driver"+"&sv="+$scope.dataSV;
            console.log(url_chat)
             $('#load_data_manage_work').load(url_chat);
       
    }
    $scope.attractiondrivermodal = function(data){
        console.log(data)
        if (data.area == 'In' && data.TB_order_type == 'transfer') {
            $scope.postText = '&type=transfer&subtype=in';

        }
        if (data.area == 'Out' && data.TB_order_type == 'transfer') {
            //alert("bbbb")
            $scope.postText = '&type=transfer&subtype=out';


        }
        if (data.area == 'Point' && data.TB_order_type == 'transfer') {
           //alert("ccc")
            $scope.postText = '&type=transfer&subtype=point';


        }
        if (data.area == 'Service' && data.TB_order_type == 'transfer') {
            //alert("ccc")
            $scope.postText = '&type=transfer&subtype=service';


        }
        if (data.area == 'Rental' && data.TB_order_type == 'transfer') {
            //alert("ccc")
            $scope.postText = '&type=transfer&subtype=rental';


        }
        if (data.TB_order_type != 'transfer') {
            //alert(data.TB_order_type)
            $scope.postText = '&type='+ data.TB_order_type+'&subtype=all';


        }
        if ($scope.flagcheck == 1) {
            $scope.pasa = "en";
        }
        if ($scope.flagcheck == 2) {
            $scope.pasa = "th";
        }
        if ($scope.flagcheck == 3) {
            $scope.pasa = "cn";
        }
        console.log(data)
        $( "#load_data_manage_work" ).toggle();
            var url_chat = "../../app/driver/load_page.php?name=livechat&file=index&vc="+data.TB_order_order+"&lang="+$scope.pasa+"&order="+data.orderid+"&chat_from=customer&chat_to=driver&action=text_travel"+"&sv="+$scope.dataSV+$scope.postText;
            console.log(url_chat)
            $('#load_data_manage_work').load(url_chat);
    }
     $scope.restaurantdrivermodal = function(data){
        if (data.area == 'In' && data.TB_order_type == 'transfer') {
            $scope.postText = '&type=transfer&subtype=in';

        }
        if (data.area == 'Out' && data.TB_order_type == 'transfer') {
            //alert("bbbb")
            $scope.postText = '&type=transfer&subtype=out';


        }
        if (data.area == 'Point' && data.TB_order_type == 'transfer') {
            //alert("ccc")
            $scope.postText = '&type=transfer&subtype=point';


        }
        if (data.area == 'Service' && data.TB_order_type == 'transfer') {
            //alert("ccc")
            $scope.postText = '&type=transfer&subtype=service';


        }
        if (data.area == 'Rental' && data.TB_order_type == 'transfer') {
            //alert("ccc")
            $scope.postText = '&type=transfer&subtype=rental';


        }
        if (data.TB_order_type != 'transfer') {
            //alert(data.TB_order_type)
            $scope.postText = '&type='+ data.TB_order_type+'&subtype=all';


        }
        //alert("aaa")
        if ($scope.flagcheck == 1) {
            $scope.pasa = "en";
        }
        if ($scope.flagcheck == 2) {
            $scope.pasa = "th";
        }
        if ($scope.flagcheck == 3) {
            $scope.pasa = "cn";
        }
        console.log(data)
        $( "#load_data_manage_work" ).toggle();
            var url_chat = "../../app/driver/load_page.php?name=livechat&file=index&vc="+data.TB_order_order+"&lang="+$scope.pasa+"&order="+data.orderid+"&chat_from=customer&chat_to=driver&action=text_food"+"&sv="+$scope.dataSV+$scope.postText;
            console.log(url_chat)
             $('#load_data_manage_work').load(url_chat);
    }
     $scope.onthecardrivermodal = function(data){
        if (data.area == 'In' && data.TB_order_type == 'transfer') {
            $scope.postText = '&type=transfer&subtype=in';

        }
        if (data.area == 'Out' && data.TB_order_type == 'transfer') {
            //alert("bbbb")
            $scope.postText = '&type=transfer&subtype=out';


        }
        if (data.area == 'Point' && data.TB_order_type == 'transfer') {
           //alert("ccc")
            $scope.postText = '&type=transfer&subtype=point';


        }
        if (data.area == 'Service' && data.TB_order_type == 'transfer') {
            //alert("ccc")
            $scope.postText = '&type=transfer&subtype=service';


        }
        if (data.area == 'Rental' && data.TB_order_type == 'transfer') {
            //alert("ccc")
            $scope.postText = '&type=transfer&subtype=rental';


        }
        if (data.TB_order_type != 'transfer') {
            //alert(data.TB_order_type)
            $scope.postText = '&type='+ data.TB_order_type+'&subtype=all';


        }
        if ($scope.flagcheck == 1) {
            $scope.pasa = "en";
        }
        if ($scope.flagcheck == 2) {
            $scope.pasa = "th";
        }
        if ($scope.flagcheck == 3) {
            $scope.pasa = "cn";
        }
        console.log(data)
        $( "#load_data_manage_work" ).toggle();
            var url_chat = "../../app/driver/load_page.php?name=livechat&file=index&vc="+data.TB_order_order+"&lang="+$scope.pasa+"&order="+data.orderid+"&chat_from=customer&chat_to=driver&action=text_car"+"&sv="+$scope.dataSV+$scope.postText;
            console.log(url_chat)
             $('#load_data_manage_work').load(url_chat);
    }
    $scope.flightdelaydrivermodal = function(data){
         if (data.area == 'In' && data.TB_order_type == 'transfer') {
            $scope.postText = '&type=transfer&subtype=in';

        }
        if (data.area == 'Out' && data.TB_order_type == 'transfer') {
            //alert("bbbb")
            $scope.postText = '&type=transfer&subtype=out';


        }
        if (data.area == 'Point' && data.TB_order_type == 'transfer') {
           //alert("ccc")
            $scope.postText = '&type=transfer&subtype=point';


        }
        if (data.area == 'Service' && data.TB_order_type == 'transfer') {
            //alert("ccc")
            $scope.postText = '&type=transfer&subtype=service';


        }
        if (data.area == 'Rental' && data.TB_order_type == 'transfer') {
            //alert("ccc")
            $scope.postText = '&type=transfer&subtype=rental';


        }
        if (data.TB_order_type != 'transfer') {
            //alert(data.TB_order_type)
            $scope.postText = '&type='+ data.TB_order_type+'&subtype=all';


        }
        if ($scope.flagcheck == 1) {
            $scope.pasa = "en";
        }
        if ($scope.flagcheck == 2) {
            $scope.pasa = "th";
        }
        if ($scope.flagcheck == 3) {
            $scope.pasa = "cn";
        }
        console.log(data)
        $( "#load_data_manage_work" ).toggle();
            var url_chat = "../../app/driver/load_page.php?name=livechat&file=index&vc="+data.TB_order_order+"&lang="+$scope.pasa+"&order="+data.orderid+"&chat_from=customer&chat_to=driver&action=flight_delay"+"&sv="+$scope.dataSV+$scope.postText;
            console.log(url_chat)
             $('#load_data_manage_work').load(url_chat);
    }
    $scope.changedrivermodal = function(data){
        if (data.area == 'In' && data.TB_order_type == 'transfer') {
            $scope.postText = '&type=transfer&subtype=in';

        }
        if (data.area == 'Out' && data.TB_order_type == 'transfer') {
            //alert("bbbb")
            $scope.postText = '&type=transfer&subtype=out';


        }
        if (data.area == 'Point' && data.TB_order_type == 'transfer') {
           //alert("ccc")
            $scope.postText = '&type=transfer&subtype=point';


        }
        if (data.area == 'Service' && data.TB_order_type == 'transfer') {
            //alert("ccc")
            $scope.postText = '&type=transfer&subtype=service';


        }
        if (data.area == 'Rental' && data.TB_order_type == 'transfer') {
            //alert("ccc")
            $scope.postText = '&type=transfer&subtype=rental';


        }
        if (data.TB_order_type != 'transfer') {
            //alert(data.TB_order_type)
            $scope.postText = '&type='+ data.TB_order_type+'&subtype=all';


        }
        if ($scope.flagcheck == 1) {
            $scope.pasa = "en";
        }
        if ($scope.flagcheck == 2) {
            $scope.pasa = "th";
        }
        if ($scope.flagcheck == 3) {
            $scope.pasa = "cn";
        }
        console.log(data)
        $( "#load_data_manage_work" ).toggle();
            var url_chat = "../../app/driver/load_page.php?name=livechat&file=index&vc="+data.TB_order_order+"&lang="+$scope.pasa+"&order="+data.orderid+"&chat_from=customer&chat_to=driver&action=change_flight"+"&sv="+$scope.dataSV+$scope.postText;
            console.log(url_chat)
             $('#load_data_manage_work').load(url_chat);
    }
    $scope.delaydrivermodal = function(data){ 
         if (data.area == 'In' && data.TB_order_type == 'transfer') {
            $scope.postText = '&type=transfer&subtype=in';

        }
        if (data.area == 'Out' && data.TB_order_type == 'transfer') {
            //alert("bbbb")
            $scope.postText = '&type=transfer&subtype=out';


        }
        if (data.area == 'Point' && data.TB_order_type == 'transfer') {
           //alert("ccc")
            $scope.postText = '&type=transfer&subtype=point';


        }
        if (data.area == 'Service' && data.TB_order_type == 'transfer') {
            //alert("ccc")
            $scope.postText = '&type=transfer&subtype=service';


        }
        if (data.area == 'Rental' && data.TB_order_type == 'transfer') {
            //alert("ccc")
            $scope.postText = '&type=transfer&subtype=rental';


        }
        if (data.TB_order_type != 'transfer') {
            //alert(data.TB_order_type)
            $scope.postText = '&type='+ data.TB_order_type+'&subtype=all';


        }
        if ($scope.flagcheck == 1) {
            $scope.pasa = "en";
        }
        if ($scope.flagcheck == 2) {
            $scope.pasa = "th";
        }
        if ($scope.flagcheck == 3) {
            $scope.pasa = "cn";
        }
        console.log(data)
        $( "#load_data_manage_work" ).toggle();
            var url_chat = "../../app/driver/load_page.php?name=livechat&file=index&vc="+data.TB_order_order+"&lang="+$scope.pasa+"&order="+data.orderid+"&chat_from=customer&chat_to=driver&action=chat_delay"+"&sv="+$scope.dataSV+$scope.postText;
            console.log(url_chat)
             $('#load_data_manage_work').load(url_chat);
    }
    $scope.beforedrivermodal = function(data){
         if (data.area == 'In' && data.TB_order_type == 'transfer') {
            $scope.postText = '&type=transfer&subtype=in';

        }
        if (data.area == 'Out' && data.TB_order_type == 'transfer') {
            //alert("bbbb")
            $scope.postText = '&type=transfer&subtype=out';


        }
        if (data.area == 'Point' && data.TB_order_type == 'transfer') {
           //alert("ccc")
            $scope.postText = '&type=transfer&subtype=point';


        }
        if (data.area == 'Service' && data.TB_order_type == 'transfer') {
            //alert("ccc")
            $scope.postText = '&type=transfer&subtype=service';


        }
        if (data.area == 'Rental' && data.TB_order_type == 'transfer') {
            //alert("ccc")
            $scope.postText = '&type=transfer&subtype=rental';


        }
        if (data.TB_order_type != 'transfer') {
            //alert(data.TB_order_type)
            $scope.postText = '&type='+ data.TB_order_type+'&subtype=all';


        }
        if ($scope.flagcheck == 1) {
            $scope.pasa = "en";
        }
        if ($scope.flagcheck == 2) {
            $scope.pasa = "th";
        }
        if ($scope.flagcheck == 3) {
            $scope.pasa = "cn";
        }
        console.log(data)
        $( "#load_data_manage_work" ).toggle();
            var url_chat = "../../app/driver/load_page.php?name=livechat&file=index&vc="+data.TB_order_order+"&lang="+$scope.pasa+"&order="+data.orderid+"&chat_from=customer&chat_to=before&action=before"+"&sv="+$scope.dataSV+$scope.postText;
            console.log(url_chat)
             $('#load_data_manage_work').load(url_chat);
    }
    $scope.chatTOagent = function(){
      console.log($scope.dataVC)
      //alert("aaaa")
      if ($scope.dataVC.area == 'In' && $scope.dataVC.TB_order_type == 'transfer') {
            $scope.postText = '&type=transfer&subtype=in';

        }
        if ($scope.dataVC.area == 'Out' && $scope.dataVC.TB_order_type == 'transfer') {
            //alert("bbbb")
            $scope.postText = '&type=transfer&subtype=out';


        }
        if ($scope.dataVC.area == 'Point' && $scope.dataVC.TB_order_type == 'transfer') {
           //alert("ccc")
            $scope.postText = '&type=transfer&subtype=point';


        }
        if ($scope.dataVC.area == 'Service' && $scope.dataVC.TB_order_type == 'transfer') {
            //alert("ccc")
            $scope.postText = '&type=transfer&subtype=service';


        }
        if ($scope.dataVC.area == 'Rental' && $scope.dataVC.TB_order_type == 'transfer') {
            //alert("ccc")
            $scope.postText = '&type=transfer&subtype=rental';


        }
        if ($scope.dataVC.TB_order_type != 'transfer') {
            //alert(data.TB_order_type)
            $scope.postText = '&type='+ $scope.dataVC.TB_order_type+'&subtype=all';


        }
        if ($scope.flagcheck == 1) {
            $scope.pasa = "en";
        }
        if ($scope.flagcheck == 2) {
            $scope.pasa = "th";
        }
        if ($scope.flagcheck == 3) {
            $scope.pasa = "cn";
        }
       
        $( "#load_data_manage_work" ).toggle();
         var url_chat = "../driver/load_page.php?name=livechat&file=index&vc="+$scope.dataVC.TB_order_order+"&lang="+$scope.pasa+"&order="+$scope.data+"&chat_from=customer&chat_to=agent"+$scope.postText+"&agentid="+$scope.idagent;
            //var url_chat = "../../app/driver/load_page.php?name=livechat&file=index&vc="+$scope.dataVC.TB_order_order+"&lang="+$scope.pasa+"&order="+$scope.dataVC.orderid+"&chat_from=customer&chat_to=before&action=before"+"&sv="+$scope.dataSV+$scope.postText;
            console.log(url_chat)
             $('#load_data_manage_work').load(url_chat);

    }
    $scope.waitImage = function(data){
         if (data.area == 'In' && data.TB_order_type == 'transfer') {
            $scope.postText = '&type=transfer&subtype=in';

        }
        if (data.area == 'Out' && data.TB_order_type == 'transfer') {
            //alert("bbbb")
            $scope.postText = '&type=transfer&subtype=out';


        }
        if (data.area == 'Point' && data.TB_order_type == 'transfer') {
           //alert("ccc")
            $scope.postText = '&type=transfer&subtype=point';


        }
        if (data.area == 'Service' && data.TB_order_type == 'transfer') {
            //alert("ccc")
            $scope.postText = '&type=transfer&subtype=service';


        }
        if (data.area == 'Rental' && data.TB_order_type == 'transfer') {
            //alert("ccc")
            $scope.postText = '&type=transfer&subtype=rental';


        }
        if (data.TB_order_type != 'transfer') {
            //alert(data.TB_order_type)
            $scope.postText = '&type='+ data.TB_order_type+'&subtype=all';


        }
        if ($scope.flagcheck == 1) {
            $scope.pasa = "en";
        }
        if ($scope.flagcheck == 2) {
            $scope.pasa = "th";
        }
        if ($scope.flagcheck == 3) {
            $scope.pasa = "cn";
        }
        console.log(data)
        $( "#load_data_manage_work" ).toggle();
            var url_chat = "../../app/driver/load_page.php?name=livechat&file=index&vc="+data.TB_order_order+"&lang="+$scope.pasa+"&order="+data.orderid+"&chat_from=customer&chat_to=driver&action=wait"+"&sv="+$scope.dataSV+$scope.postText;
            console.log(url_chat)
             $('#load_data_manage_work').load(url_chat);
    }
    $scope.waitImage = function(data){
         if (data.area == 'In' && data.TB_order_type == 'transfer') {
            $scope.postText = '&type=transfer&subtype=in';

        }
        if (data.area == 'Out' && data.TB_order_type == 'transfer') {
            //alert("bbbb")
            $scope.postText = '&type=transfer&subtype=out';


        }
        if (data.area == 'Point' && data.TB_order_type == 'transfer') {
           //alert("ccc")
            $scope.postText = '&type=transfer&subtype=point';


        }
        if (data.area == 'Service' && data.TB_order_type == 'transfer') {
            //alert("ccc")
            $scope.postText = '&type=transfer&subtype=service';


        }
        if (data.area == 'Rental' && data.TB_order_type == 'transfer') {
            //alert("ccc")
            $scope.postText = '&type=transfer&subtype=rental';


        }
        if (data.TB_order_type != 'transfer') {
            //alert(data.TB_order_type)
            $scope.postText = '&type='+ data.TB_order_type+'&subtype=all';


        }
        if ($scope.flagcheck == 1) {
            $scope.pasa = "en";
        }
        if ($scope.flagcheck == 2) {
            $scope.pasa = "th";
        }
        if ($scope.flagcheck == 3) {
            $scope.pasa = "cn";
        }
        console.log(data)
        $( "#load_data_manage_work" ).toggle();
            var url_chat = "../../app/driver/load_page.php?name=livechat&file=index&vc="+data.TB_order_order+"&lang="+$scope.pasa+"&order="+data.orderid+"&chat_from=customer&chat_to=driver&action=wait"+"&sv="+$scope.dataSV+$scope.postText;
            console.log(url_chat)
             $('#load_data_manage_work').load(url_chat);
    }
    //  $scope.landingdrivermodal = function(data){
    //     console.log(data)
       
    // }
    $scope.openContact = function(i){
      $scope.dataVC = i;
      //alert(i.TB_order_agent)
        $scope.idagent = i.TB_order_agent;
        console.log($scope.idagent)
        console.log($scope.longituderel)
        
        $scope.conDricer = i.drivername;
        if ($scope.longituderel == undefined || $scope.longituderel =='') {
            if($scope.flagcheck == 1){
                alert("Unable to determine your location. Please turn on location services in your device's settings")
            }
            if($scope.flagcheck == 2){
                alert("ไม่สามารถโหลดข้อมูลตำแหน่งที่ตั้งการได้โปรดเปิดใช้งานข้อมูลตำแหน่งที่ตั้งของคุณ")
            }
            if($scope.flagcheck == 3){
                alert("定位功能处于关闭状态。请开启定位功能。")
            }
            $window.location.reload();
                
            }
        else{
            $('#sopencontact').modal('show');
            $scope.Dataarea = i.area;
        $scope.Datatype = i.TB_order_type;
        
        $scope.dataSend = i;
        $scope.old_flight = i.TB_order_air;
        $scope.ondate_old_flight = i.TB_order_ondate;
        $scope.time_old_flight = i.TB_order_air_time;


        console.log(i)
        $http({
            method : 'POST',
                  url : "php/notifigcomment.php",
                  data: $.param({orderid: i.TB_order_order ,sv: $scope.dataSV}),
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){                  
                  console.log(res)
                  $scope.nontifigcomment = res;
                  //console.log("checknoti")
                  if ($scope.nontifigcomment.length != 0 ) {

                  }
                 //flashInterval()
                });
        $scope.dataNoti = $scope.nontifigcomment;
        console.log($scope.nontifigcomment)
        $scope.product_id = i.id;
        $scope.driverName = i.drivername;
        $scope.adminCompany = parseInt(i.admin_company);
        console.log($scope.adminCompany)
        $scope.driverPhone =i.TB_driver_phone;
        console.log($scope.driverPhone)
        $scope.type_other = i.TB_order_type;
        if (i.area == 'In') {
             angular.element(document.querySelector('#sopencontactposition')).css("margin","50px 3%");
        }
        else{
             angular.element(document.querySelector('#sopencontactposition')).css("margin","100px 3%");

        }
        

        var online =  setInterval(function() {
            $http.get('../../app/data/xml/driver/online/'+$scope.driverName+'.xml',
                    {
                        transformResponse: function (cnv) {
                            var x2js = new X2JS();
                            var aftCnv = x2js.xml_str2json(cnv);
                            return aftCnv;
                        }
                    })
            .success(function (response) {
                //console.log(response);
                $scope.onlineDri = '';
                $scope.onlineDri = response;
                $http.get('../../app/data/xml/callcenter/online/company/'+$scope.adminCompany+'.xml',
                    {
                        transformResponse: function (cnv) {
                            var x2js = new X2JS();
                            var aftCnv = x2js.xml_str2json(cnv);
                            return aftCnv;
                        }
                    })
            .success(function (responseop) {
                //console.log(response);
                 $scope.timeOp =  parseInt(responseop.online.time);
                 $http.get('../../app/data/xml/callcenter/online/company/'+i.TB_order_agent+'.xml',
                    {
                        transformResponse: function (cnv) {
                            var x2js = new X2JS();
                            var aftCnv = x2js.xml_str2json(cnv);
                            return aftCnv;
                        }
                    })
                  .success(function (responseAgent) {
                      //console.log(response);
                       $scope.timeAgent =  parseInt(responseAgent.online.time);
                  });
                
            });
                $http({
                    method : 'POST',
                    url : "php/getTimesever.php",
                    data: $.param({sv: $scope.dataSV}),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).success(function(res){
                        //console.log(res.split(/\n/g))
                        var timeSV =  res.split(/\n/g);//
                        $scope.online = parseInt($scope.onlineDri.online.time);

                        //console.log(parseInt(timeSV[3]))
                        $scope.vconline = parseInt(timeSV[3]) - 20;
                        // console.log($scope.vconline);
                        // console.log("Driveronline"+$scope.online)
                        // console.log("OPonline"+ $scope.timeOp);
                       // console.log(parseInt(timeSV[3])-$scope.online)
                        if ($scope.online < $scope.vconline) {
                            //console.log("in case of driver ")
                            $scope.checkonline = 'ofline';
                            angular.element(document.querySelector('.main_dri')).css("box-shadow","2px 1px 5px red");

                        }
                        else
                        {   
                            //console.log("in case on driver")
                            $scope.checkonline = 'online';
                            angular.element(document.querySelector('.main_dri')).css("box-shadow","2px 1px 5px #217f24");
                        }
                        //console.log($scope.timeOp+"aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                        if ($scope.timeOp < $scope.vconline) {
                            //console.log("in case of op ")
                            $scope.checkonlineOp = 'ofline';
                            angular.element(document.querySelector('.main_op')).css("box-shadow","2px 1px 5px red ");


                        }
                        else
                        {   
                            //console.log("in case on op ")

                            $scope.checkonlineOp = 'online';
                            angular.element(document.querySelector('.main_op')).css("box-shadow","2px 1px 5px #217f24");
                            //angular.element(document.querySelector('.'+i.TB_order_order)).css("border","2px solid rgb(24, 122, 28)");
                        } 
                        if ($scope.timeAgent < $scope.vconline) {
                            //console.log("in case of agent ")
                            $scope.checkonlineAgent = 'ofline';
                            angular.element(document.querySelector('.main_agent')).css("box-shadow","2px 1px 5px red ");


                        }
                        else
                        {   
                            //console.log("in case on agent ")

                            $scope.checkonlineAgent = 'online';
                            angular.element(document.querySelector('.main_agent')).css("box-shadow","2px 1px 5px #217f24");
                            //angular.element(document.querySelector('.'+i.TB_order_order)).css("border","2px solid rgb(24, 122, 28)");
                        }                   
                });
            });

      }, 1000);
        $scope.dataContact = i;
        $scope.orderChat = i.TB_order_order;
        $scope.VCID = i.TB_order_order;
        $scope.orderType = i.TB_order_type;
        $scope.orderiHavetransfer = i.transfer_in;
        console.log($scope.orderChat)
        console.log($scope.orderType)
        console.log($scope.orderiHavetransfer)
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
    $scope.updatecommentin = function(data){
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
                                sv: $scope.dataSV,
                                   driving: $scope.drivingin, 
                                   clean: $scope.cleanin,                                       
                                   times: $scope.timein,
                                   comment_date:$scope.comment_date2,
                                   orderid : $scope.order
                                      
                    }),
                     headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).success(function(res){
                        //$window.reload();
                         //location.reload();
                });
            }
            
    }
    $scope.updatecomment = function(x){
        
        $scope.vccommentsend = x;
        $scope.comment_date = $filter('date')(new Date(), 'yyyy-MM-dd HH:mm'); 
        if ($scope.flagcheck == 1) {
            $scope.pasa = "en";
        }
        if ($scope.flagcheck == 2) {
            $scope.pasa = "th";
        }
        if ($scope.flagcheck == 3) {
            $scope.pasa = "cn";
        }
        if ($scope.clean != 0 && $scope.driving != 0 && $scope.time != 0 ) {
            $scope.req_comservice= "";
              $scope.req_comclean ="";
              $scope.req_compunctuality = "";
              $scope.req_comment = "";
              console.log($scope.clean)
              console.log($scope.driving)
              console.log($scope.time)
              console.log($scope.vccommentsend)
              console.log($scope.comment)
              //$chat_part/load_blank=index.php?name=livechat&state_type=comment&vc=".$_POST[orderid]."&lang=".$_POST[lag]."&order=".$_POST[orderid]."&chat_from=customer&chat_to=driver&sv=".$_POST[sv].";
               $http({
                        method : 'POST',
                        url : "php/comment.php",
                        data: $.param({voucher:  $scope.vccommentsend,
                            driving: $scope.driving,
                            sv: $scope.dataSV, 
                            clean: $scope.clean,                                       
                            times: $scope.time,
                            comment_date:$scope.comment_date,
                            orderid : $scope.data,
                            lang : $scope.pasa,
                            comment: $scope.comment,
                             
                            impress: $scope.impress                                      
                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            $('#commentmodal').modal('hide');                            
                             $http({
                                  method : 'POST',
                                  url : "php/getcommentforvoucher.php",
                                  data: $.param({voucher: $scope.vccommentsend,sv: $scope.dataSV}),
                                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                  }).success(function(res){
                                      console.log(res)
                                      angular.forEach(res, function(data){
                                          $scope.getcommentviewhome.push(data)
                                      });                        
                                       if ($scope.getcommentviewhome.length == 0) {
                                            $scope.btncomview= { 'display':'none'};
                                            $scope.senddata= { 'display':'block'};
                                           
                                       }
                                       else{
                                           $scope.btncomview= { 'display':'block'};
                                           
                                       }
                                      //$window.location.reload()                                                                      
                              });
                            //$window.reload();
                             //location.reload();                          
                });
        }
        else if ($scope.impress  != 0 && $scope.time2 != 0 ) {
            $scope.req_comservice= "";
              $scope.req_comclean ="";
              $scope.req_compunctuality = "";
              $scope.req_comment = "";
              console.log($scope.clean)
              console.log($scope.driving)
              console.log($scope.time)
              console.log($scope.vccommentsend)
              console.log($scope.comment)
              //$chat_part/load_blank=index.php?name=livechat&state_type=comment&vc=".$_POST[orderid]."&lang=".$_POST[lag]."&order=".$_POST[orderid]."&chat_from=customer&chat_to=driver&sv=".$_POST[sv].";
               $http({
                        method : 'POST',
                        url : "php/comment.php",
                        data: $.param({voucher:  $scope.vccommentsend,
                            driving: $scope.driving,
                            sv: $scope.dataSV, 
                            clean: $scope.clean,                                       
                            times: $scope.time2,
                            comment_date:$scope.comment_date,
                            orderid : $scope.data,
                            lang : $scope.pasa,
                            comment: $scope.comment,
                            
                            impress: $scope.impress

                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            $('#commentmodal').modal('hide');                            
                             $http({
                                  method : 'POST',
                                  url : "php/getcommentforvoucher.php",
                                  data: $.param({voucher: $scope.vccommentsend,sv: $scope.dataSV}),
                                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                  }).success(function(res){
                                      console.log(res)
                                      angular.forEach(res, function(data){
                                          $scope.getcommentviewhome.push(data)
                                      });                        
                                       if ($scope.getcommentviewhome.length == 0) {
                                            $scope.btncomview= { 'display':'none'};
                                            $scope.senddata= { 'display':'block'};
                                           
                                       }
                                       else{
                                           $scope.btncomview= { 'display':'block'};
                                           
                                       }
                                      //$window.location.reload()                                                                      
                              });
                            //$window.reload();
                             //location.reload();                          
                });
        }
        else{
              
            }
    }
    $scope.cancelopenopupcomenthome = function(){
        $scope.openopupcomenthome = {'display':'none'};
    }

    
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
        });
        $scope.sdatamessage_store = {'display':'block'}
        $scope.sdatamessage = {'display':'none'}
        $scope.havedatamessage = {'display':'none'}
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
   /*********************DATA MESSAGE TO OP*****************************/
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
            $scope.sdatamessage_store_toop = {'display':'block'}
            $scope.sdatamessage_toop = {'display':'none'}
            $scope.havedatamessage_toop = {'display':'none'}
                  
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
            data: $.param({voucher: $scope.VOUCHER,guest_confirm : $scope.guest_confirm,sv: $scope.dataSV}),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(res){
                $scope.boxbg = { 'display':'none'};
                 location.reload();
        });
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



    /**************************************************************/
    /************************my info edit**************************/
    /**************************************************************/

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
        console.log(x)       
        if (x==1) {
        }
        else if (x==2) {
        }
        else if (x==3) {
        }
        else if (x==4) {           
            $scope.mail_or_phone = 2;
            $scope.split = $scope.web_book_agent_phone.split("+");
            $scope.split2 = $scope.split[1].split(" ");
            console.log($scope.split2)
            console.log($scope.split2[0])
            for (var i = 0; i < $scope.country.length; i++) {
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
            $scope.aa = $scope.web_book_agent_phone.split(" ");
            $scope.ephonenew = $scope.aa[1];
            // $scope.editphone = true;
            
            $scope.tcountryValue = $scope.aa[0];
            console.log($scope.ephonenew +"$scope.aa[1];")
            console.log($scope.selectcountryValue+"$scope.aa[0];")
        }
        else if (x==6) {
             //$scope.phone2= { 'display':'block' };

        }
        else if (x==7) {
             //$scope.adultchild= { 'display':'block' };
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
             //$scope.Ephone2= { 'display':'block' };
             $scope.aaa = $scope.local_phone.split(" ");
            $scope.elocalphonenew = $scope.aaa[1];
            $scope.tcountryValue2 = $scope.aaa[0];
           console.log($scope.elocalphonenew +"$scope.aaa[1];")
            console.log($scope.selectcountryValue2+"$scope.aaa[0];")
        }
        else if (x==9) {
            console.log($scope.guestEmail)

             //$scope.editEmail1= { 'display':'block' };
             $scope.agent_email = $scope.guestEmail;
             $scope.mail_or_phone = 1;
        }
        else if (x==10) {
            console.log($scope.guestEmail2)
             //$scope.editEmail2= { 'display':'block' };
             $scope.agent_email2 = $scope.guestEmail2;
             $scope.mail_or_phone = 1;
        }
        else if (x==11) {
             //$scope.editsocialall= { 'display':'block' };
        }
        else if (x==12) {
               $scope.mail_or_phone = 2;
             var phone2 = $scope.web_book_agent_phone2.split("+");
             var phone2Splitplus = phone2[1].split(" ");
            for (var i = 0; i < $scope.country.length; i++) {
                //console.log($scope.country[i].phonecode)
                
                if ($scope.country[i].phonecode == phone2Splitplus[0]) {
                    if ($scope.flagcheck ==1) {
                        $scope.Countryfont3 = ' ' + '(' + '+' + $scope.country[i].phonecode + ')' +  $scope.country[i].name_en;
                    }
                    if ($scope.flagcheck ==2) {
                        $scope.Countryfont3 = ' ' + '(' + '+' +  $scope.country[i].phonecode + ')' +  $scope.country[i].name_th;
                    }
                    if ($scope.flagcheck ==3) {
                         $scope.Countryfont3 = ' ' + '(' + '+' +  $scope.country[i].phonecode + ')' +  $scope.country[i].name_cn;
                    }
                   $scope.imgcoutry3 = $scope.country[i].country_code;
                }
        }
            $scope.aaaa = $scope.web_book_agent_phone2.split(" ");
            $scope.ephonenew2 = $scope.aaaa[1];
            // $scope.editphone = true;
            
            $scope.tcountryValue3 = $scope.aaaa[0];
            console.log($scope.ephonenew2 +"$scope.aaaa[1];")
            console.log($scope.selectcountryValue3+"$scope.aaaaa[0];")
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

        $scope.getlatitude = x.latitude;
        $scope.getlongitude = x.longitude;
       
        $scope.iframe = {src2:"https://maps.google.com/maps?q="+x.latitude+","+x.longitude+"&hl=th;z=14&output=embed"};
    }
    
    $scope.getmapdrivercheck = function(tx){
      console.log(tx)
      console.log($scope.dataMapcheckDV)
      if (tx == 'statearrived') {

        $scope.iframe = {srcmapderivercheck:"https://maps.google.com/maps?q="+$scope.dataMapcheckDV.driver_topoint_lat+","+$scope.dataMapcheckDV.driver_topoint_lng+"&hl=th;z=14&output=embed"};

      }
      else if (tx == 'statevehicle') {
        $scope.iframe = {srcmapderivercheck:"https://maps.google.com/maps?q="+$scope.dataMapcheckDV.driver_topoint_lat+","+$scope.dataMapcheckDV.driver_pickup_lng+"&hl=th;z=14&output=embed"};
        
      }
      else if (tx == 'complete') {
        $scope.iframe = {srcmapderivercheck:"https://maps.google.com/maps?q="+$scope.dataMapcheckDV.driver_complete_lat+","+$scope.dataMapcheckDV.driver_complete_lng+"&hl=th;z=14&output=embed"};
        
      }
      $('#mapdrivercheckin').modal('show');

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
     
     
    
    

    /***************************************************************************/
    //************************LOCATION BEFORE TO DRIVER***************************/
    /***************************************************************************/
     
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
    $scope.getcommentviewhome = [];
    $scope.getchatForvcher =function(x,i){
        $scope.index = i+1;
    
    //$('#guest_name').modal('show');
    if (x.TB_order_type == 'transfer') {
               $scope.topic_en = x.topic_en;
                $scope.topic_th = x.topic_th;
                $scope.topic_cn = x.topic_cn; 
            }
            if (x.TB_order_type != 'transfer') {
                $scope.topic_en = x.T_topic_en;
                $scope.topic_th = x.T_topic_th;
                $scope.topic_cn = x.T_topic_cn; 
            }
        //alert("aaaaaaa")
        $scope.VOUCHER =  x.TB_order_order;
        $scope.getcommentviewhome = [];
        console.log(x)
        console.log(x.datessnew)
        $scope.checkcomment= x.datessnew;
      $scope.vccomment = x.TB_order_order;
      if (x.datessnew == 1) {
            if (x.datessnew == 1) {
            //$('#voucherpass').modal('show');
            }
            console.log("date = 1")
        $http({
          method : 'POST',
          url : "php/getcommentforvoucher.php",
          data: $.param({voucher: $scope.vccomment,sv: $scope.dataSV}),
          headers: {'Content-Type': 'application/x-www-form-urlencoded'}
          }).success(function(res){
              console.log(res)
              angular.forEach(res, function(data){
                $scope.getcommentviewhome.push(data)
              });
               
                                            
               if ($scope.getcommentviewhome.length == 0) {
                   $scope.btncomview= { 'display':'none'};
                   $scope.senddata= { 'display':'block'};
                   angular.element(document.querySelector('#box-bg45')).css("top","26%");
               }
               else{
                   $scope.btncomview= { 'display':'block'};
                   //angular.element(document.querySelector('.box-comment-popup')).css("display","block");
               }
               
                                             
      });
      // $scope.openopupcomenthome = {'display':'block'};
      }
      else{
            console.log("date = 2")
                   //angular.element(document.querySelector('.box-comment-popup')).css("display","none");

            $scope.senddata= { 'display':'block'};
            $http({
          method : 'POST',
          url : "php/getcommentforvoucher.php",
          data: $.param({voucher: $scope.vccomment,sv: $scope.dataSV}),
          headers: {'Content-Type': 'application/x-www-form-urlencoded'}
          }).success(function(res){
              console.log(res)
              angular.forEach(res, function(data){
                $scope.getcommentviewhome.push(data)
              });
               
                                            
               if ($scope.getcommentviewhome.length == 0) {
                   $scope.btncomview= { 'display':'none'};
                   //$scope.senddata= { 'display':'block'};
                   
               }
               else{
                   $scope.btncomview= { 'display':'block'};
                  
               }
               
                                             
      });
       // $scope.openopupcomenthome = {'display':'none'};
      }
      
    }
  
    $scope.datarooo;
    $scope.editfunsocial = function(x){
        console.log(x)
       //$scope.stylepoupmyinfo= { 'display':'none' };

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
    $scope.datarooo ='';
    $scope.editfunsocialnull = function(id,icon){
        console.log(id)
        console.log(icon)
        $http({
          method : 'POST',
          url : "php/getsocialcheck.php",
          data: $.param({orderid: $scope.data,sv: $scope.dataSV,typeid: id}),
          headers: {'Content-Type': 'application/x-www-form-urlencoded'}
          }).success(function(res){
              console.log(res)
              if (res == '') {
                $scope.textHave = 0;
              }else{
                $scope.textHave = 1;
              }                             
        });
        $scope.idsocialNULL = id;        
        if (id == 1) {
           $scope.textSocial = $scope.socialwechatidnull; 
        }
        else if(id == 2){
            $scope.textSocial =  $scope.sociallineidnull;
        }
        else if(id == 3){
            $scope.textSocial =  $scope.socialzelloidnull;
        }
        else if(id == 4){
            $scope.textSocial =  $scope.socialqqidnull;
        }
        else if(id == 5){
            $scope.textSocial =  $scope.socialwangidnull;
        }
        else if(id == 6){
            $scope.textSocial =  $scope.socialskypeidnull;
        }
        else if(id == 7){
            $scope.textSocial =  $scope.socialwhatidnull;
        }
        else if(id == 8){
          //console.log("id= "+id)
            $scope.textSocial =  $scope.socialfaceidnull;
        }
        //console.log($scope.datarooo)
       
       if ($scope.datarooo != id || $scope.datarooo == ''){
        console.log("if")
        angular.element(document.querySelector('.Edit'+$scope.datarooo)).css('display','none')
        angular.element(document.querySelector('.Edit4'+$scope.datarooo)).css('display','none')
        angular.element(document.querySelector('.Edit'+id)).css('display','block')
        angular.element(document.querySelector('.Edit4'+id)).css('display','block')
        $scope.datarooo= id;
       }
       else{
        console.log("else")
        angular.element(document.querySelector('.Edit'+id)).css('display','block')
        angular.element(document.querySelector('.Edit4'+id)).css('display','block')

        $scope.datarooo= id;
       }
       $scope.editsocialallnull= { 'display':'block' };
       $scope.itemicon = icon;

       
       

    }
    /*==========geatnull============*/

                   
    $scope.skypenull = function(x){
      
      

        $scope.socialNULL = x;
        
    }
    $scope.linenull = function(x){
     

        $scope.socialNULL = x;
        // console.log($scope.s_linenew)
       
    }
    $scope.wechatnull = function(x){
      

        $scope.socialNULL = x;
        
    }
    $scope.qqnull = function(x){
     

        $scope.socialNULL = x;
        
    }
    $scope.facenull = function(x){
      

        $scope.socialNULL = x;
        
    }
    $scope.whatnull = function(x){
      

        $scope.socialNULL = x;
        
    }
    $scope.wangnull = function(x){
      

        $scope.socialNULL = x;
        
    }
    $scope.zellonull = function(x){
      
        $scope.socialNULL = x;
        
    }
    $scope.update_social_bookAgentNULL = function(){
      console.log("textHave"+$scope.textHave)
        if ($scope.textHave == 0 ) {
            $http({
            method : 'POST',
            url : "php/insertSocialNULL.php",
            data: $.param({agentid: $scope.data,                            
                            sv: $scope.dataSV,
                            typeid: $scope.idsocialNULL,
                            namesocial: $scope.textSocial,
                            social: $scope.socialNULL
                            

                             

                        }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(res){
                console.log(res)
                if ($scope.idsocialNULL == 1) {
                    $scope.s_wechat = $scope.socialNULL; 

                }
                if ($scope.idsocialNULL == 2) {
                    $scope.s_line = $scope.socialNULL; 
                    
                }
                if ($scope.idsocialNULL == 3) {
                    $scope.s_zello = $scope.socialNULL; 
                  
                }
                if ($scope.idsocialNULL == 4) {
                    $scope.s_qq = $scope.socialNULL; 
                  
                }
                if ($scope.idsocialNULL == 5) {
                    $scope.s_ww = $scope.socialNULL; 
                  
                }
                if ($scope.idsocialNULL == 6) {
                    $scope.s_skype = $scope.socialNULL; 
                  
                }
                if ($scope.idsocialNULL == 7) {
                    $scope.s_what = $scope.socialNULL; 
                    
                }
                if ($scope.idsocialNULL == 8) {
                    $scope.s_fb = $scope.socialNULL; 
                }
            });
        }
        else{
            $http({
            method : 'POST',
            url : "php/updateSocialNULL.php",
            data: $.param({agentid: $scope.data,                            
                            sv: $scope.dataSV,
                            typeid: $scope.idsocialNULL,
                            namesocial: $scope.textSocial,
                            social: $scope.socialNULL
                            

                             

                        }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(res){
                console.log(res)
                if ($scope.idsocialNULL == 1) {
                    $scope.s_wechat = $scope.socialNULL; 

                }
                if ($scope.idsocialNULL == 2) {
                    $scope.s_line = $scope.socialNULL; 
                    
                }
                if ($scope.idsocialNULL == 3) {
                    $scope.s_zello = $scope.socialNULL; 
                  
                }
                if ($scope.idsocialNULL == 4) {
                    $scope.s_qq = $scope.socialNULL; 
                  
                }
                if ($scope.idsocialNULL == 5) {
                    $scope.s_ww = $scope.socialNULL; 
                  
                }
                if ($scope.idsocialNULL == 6) {
                    $scope.s_skype = $scope.socialNULL; 
                  
                }
                if ($scope.idsocialNULL == 7) {
                    $scope.s_what = $scope.socialNULL; 
                    
                }
                if ($scope.idsocialNULL == 8) {
                    $scope.s_fb = $scope.socialNULL; 
                }
            });
        }
        
            $scope.editsocialall = { 'display':'none'};

       
    }
    
    $scope.Editcomment = function () {
        //alert("true")
        $scope.comview= { 'display':'none'};
        $scope.Ecomment = true;

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
    $scope.Ephone3 = function(x){
        console.log(x)
        $scope.ephone3 = x;
       if ($scope.phonesend3 == undefined) {
        $scope.phonesend3 = $scope.tcountryValue3;
       }

       $scope.phonenew2 = $scope.phonesend3 + ' ' + $scope.ephone3;
       console.log($scope.phonenew2)
    }
    //$scope.ephone2;
    $scope.Elocalphone = function(x){
        $scope.ephone2 = x;
        if ($scope.phonesend2 == undefined) {
        $scope.phonesend2 = $scope.tcountryValue2;
       }
        $scope.localphonenew=  $scope.phonesend2 + ' ' + $scope.ephone2;
        
        console.log($scope.localphonenew)
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
       // alert(x)
        $scope.chmail2 = 1;
        
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
        console.log(x)
        console.log(x.TB_order_order)
        console.log($scope.data)
        console.log(x.TB_order_type)
        //$scope.voucherweb = { 'display':'block'};
        //$scope.popupbookingdetail = { 'display':'none'}; 
        $scope.getdate_web = x.post_date;
        $scope.getvc_web = x.TB_order_order;
        //if (x.) {}

        console.log($scope.dataSV)
        if ($scope.dataSV == 'th') {
            $scope.linkvoucher =  "http://t-booking.com/print.php?name=admin/voucher&file=transfer&no="+x.TB_order_id+"&order="+x.TB_order_order+"&code="+x.TB_order_code+"";

        }
        else{
            $scope.linkvoucher =  "http://t-bookingcn.com/print.php?name=admin/voucher&file=transfer&no="+x.TB_order_id+"&order="+x.TB_order_order+"&code="+x.TB_order_code+"";

        }
        console.log($scope.linkvoucher )
        //http://t-booking.com/data/img/vc/(order.invoice)_(order.code).jpg
        if (x.TB_order_type != 'transfer') {
            $scope.dataimg ='http://t-booking.com/data/img/vc/'+x.TB_order_order+'_'+x.TB_order_code;
            console.log($scope.dataimg)
            //$scope.linkvoucher = "http://t-booking.com/data/img/vc/"+x.TB_order_order+'_'+TB_order_code+'.jpg';
            //"http://t-booking.com/demo/print.php?name=admin/voucher&file=transfer&no="+x.TB_order_id+"&order="+x.TB_order_order+"&code="+x.TB_order_code+"";

        }
        else{
            $scope.dataimg ='http://t-booking.com/data/img/vc/'+x.TB_order_order+'_'+x.TB_order_code;
             console.log($scope.dataimg)
            //$scope.linkvoucher = "http://t-booking.com/data/img/vc/"+x.TB_order_order+'_'+TB_order_code+'.jpg';

        }
         //$('#voucherweb').modal('show');               
                       // $scope.iframe = {src:ss};
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
            console.log(raka)
            console.log(list)
            $scope.costsum = $scope.sumAddhour*raka;
            console.log($scope.costsum)
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
    
    $scope.detailfirsthomein =function(x){
        //alert(x)
            $scope.VOUCHER = x.TB_order_order;
            console.log(x)
            console.log($scope.dataVoucherhome)
            // localStorage.setItem('item',JSON.stringify(x));
            console.log($scope.dataVCtoderiver)
            $('#popupdriverdetail').modal('show');
            callvoucher($scope.dataDri);

    
      $scope.popupdriverinfo = {'display':'none'};
       $scope.popupdriverdetail = {'display':'block'};

    }
    $scope.detailfirsthome =function(x){
        //alert(x)
        $scope.dataMapcheckDV = x;
        console.log(x)
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
            $scope.VOUCHER = x.TB_order_order;
            console.log(x)
            console.log($scope.dataVoucherhome)
            // localStorage.setItem('item',JSON.stringify(x));
            console.log($scope.dataVCtoderiver)
            $('#popupdriverdetail').modal('show');
            callvoucher(x);

      $scope.popupdriverinfo = {'display':'none'};
       $scope.popupdriverdetail = {'display':'block'};

    }
    $scope.cancelpopupdriverdetail = function(){
      $scope.popupdriverdetail = {'display':'block'};
       //$scope.popupdriverinfo = {'display':'block'};
    }
    $scope.cancelpopupdriver = function(){

      //$scope.popupdriverdetail = {'display':'none'};
       //$scope.popupdriverinfo = {'display':'block'};
    }
    $scope.openpopupcommentTodriver = function(){
        
 
        

        $http({
            method : 'POST',
            url : "php/getchat.php",
            data: $.param({voucher: $scope.VOUCHER,sv: $scope.dataSV}),
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
            data: $.param({voucher: $scope.VOUCHER,sv: $scope.dataSV}),
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
        //$scope.popupdriverinfo = { 'display':'block'};
    }
    $scope.cancelid_popupbefore = function(){
        $scope.id_popupbefore = { 'display':'none'};
        //$scope.popupdriverinfo = { 'display':'block'};
    }
    $scope.cancelid_popupwait = function(){
   angular.element(document.querySelector('.box-mobal2')).css('top','5%')

        //$scope.id_popupwait = { 'display':'none'};
        //$scope.popupdriverinfo = { 'display':'block'};
    }
    $scope.cancelid_popupdivermsg = function(){
        $scope.id_popupdivermsg = { 'display':'none'};
        //$scope.popupdriverinfo = { 'display':'block'};
    }
    $scope.cancelid_popupdiverchat = function(){
        $scope.id_popupdiverchat = { 'display':'none'};
        //$scope.popupdriverinfo = { 'display':'block'};
    }
    
     $scope.cancelid_popupcallcentermsg = function(){
        $scope.id_popupcallcentermsg = { 'display':'none'};
        //$scope.popupdriverOP = { 'display':'block'};
    }
/***************************************************  */  
/******************* New-angular-KM ***************  */  
/***************************************************  */ 

$scope.openpopupdriverinfo = function(x){
    
    console.log($scope.dataVCtoderiver)
            $scope.dataVoucherhome = x;
            $scope.statearrived = null;
            $scope.statevehicle = null;
            $scope.statecomplete = null;
            $scope.statearrived_date = null;
            $scope.statevehicle_date = null;
            $scope.statecomplete_date = null;
            
   angular.element(document.querySelector('#VCID')).triggerHandler('custom',x.TB_order_order);
   //angular.element(document.querySelector('#VCID')).triggerHandler('click',x.TB_order_order);
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
    $scope.checktour = x.TB_order_type;
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
    //$('#voucherpass').modal('show');
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
  $http({
                  method : 'POST',
                  url : "php/message_data.php",
                 data: $.param({type: 1,sv: $scope.dataSV}),
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){                  
                  console.log(res)
                  $scope.headermessagedata = res;
                   $scope.messagedata = res;
    });
}
$scope.landingdrivermodal = function(data){
    if (data.area == 'In' && data.TB_order_type == 'transfer') {
            $scope.postText = '&type=transfer&subtype=in';

        }
        if (data.area == 'Out' && data.TB_order_type == 'transfer') {
            //alert("bbbb")
            $scope.postText = '&type=transfer&subtype=out';


        }
        if (data.area == 'Point' && data.TB_order_type == 'transfer') {
           //alert("ccc")
            $scope.postText = '&type=transfer&subtype=point';


        }
        if (data.area == 'Service' && data.TB_order_type == 'transfer') {
            //alert("ccc")
            $scope.postText = '&type=transfer&subtype=service';


        }
        if (data.area == 'Rental' && data.TB_order_type == 'transfer') {
            //alert("ccc")
            $scope.postText = '&type=transfer&subtype=rental';


        }
        if (data.TB_order_type != 'transfer') {
            //alert(data.TB_order_type)
            $scope.postText = '&type='+ data.TB_order_type+'&subtype=all';


        }
    if ($scope.flagcheck == 1) {
        $scope.pasa = "en";
    }
    if ($scope.flagcheck == 2) {
        $scope.pasa = "th";
    }
    if ($scope.flagcheck == 3) {
        $scope.pasa = "cn";
    }
     $( "#load_data_manage_work" ).toggle();
            var url_chat = "../../app/driver/load_page.php?name=livechat&file=index&vc="+data.TB_order_order+"&lang="+$scope.pasa+"&order="+data.orderid+"&chat_from=customer&chat_to=driver&action=landing"+"&sv="+$scope.dataSV+$scope.postText;
            console.log(url_chat)
             $('#load_data_manage_work').load(url_chat);
    $scope.btnchatlanding = {'background':'#3b5998'}
    $scope.btnfrelanding = {'background':'#22407f'}
    $scope.message = {'display':'none'};
    $scope.havedatamessage = {'display':'none'};
    $scope.havedatamessagelanding = { 'display':'none'};

    //$scope.sdatamessage = {'display':'block'}
    $scope.frequentlyusedlanding = { 'display':'block'};
    $scope.sdatamessage_store = {'display':'none'}
    $scope.msgType = 28;
    $http({
                  method : 'POST',
                  url : "php/message_data_store.php",
                 data: $.param({type:28,sv: $scope.dataSV}),
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){                  
                  console.log(res)
                  $scope.messagedataStore = res;
                  //console.log($scope.VCIDALL)
                

                  
                   
                });
    
}



/****************************popup my info*************************/
$scope.cancelstylepoupmyinfo = function(){
   $scope.stylepoupmyinfo = {'display':'none'};
}
$scope.myinfo = function(x,i){
    $scope.clickType = 2;
    angular.element(document.querySelector('#load')).css("display","block");
    $scope.index = i+1;

    $('#stylepoupmyinfo').modal('show');
    //$('#guest_name').modal('show');
    if (x.TB_order_type == 'transfer') {
               $scope.topic_en = x.topic_en;
                $scope.topic_th = x.topic_th;
                $scope.topic_cn = x.topic_cn; 
            }
            if (x.TB_order_type != 'transfer') {
                $scope.topic_en = x.T_topic_en;
                $scope.topic_th = x.T_topic_th;
                $scope.topic_cn = x.T_topic_cn; 
            }
    $scope.VOUCHER = x.TB_order_order;
    callvoucher(x);
    $scope.typeTour = x.TB_order_type;
    console.log($scope.typeTour)
    // $scope.stylepoupmyinfo = {'display':'block'};
      if (x.datessnew == 1) {
        //$('#stylepoupmyinfo').modal('show');
      }
      
}
$scope.cancelpopupallchatservice = function(){
    $scope.stylepopupallchatservice = {'display':'none'}
    $scope.popupdriverinfo = {'display':'block'}
}
$scope.datachekcost = [];
$scope.openpopupdriverservice = function(x,i){
    $scope.VOUCHER = x.TB_order_order;
    $scope.product_id = x.id;
    $scope.index = i+1;
    $scope.Ocompany = x.company;
    $scope.Admincompany = x.admin_company;
    
    //$('#guest_name').modal('show');
    if (x.TB_order_type == 'transfer') {
               $scope.topic_en = x.topic_en;
                $scope.topic_th = x.topic_th;
                $scope.topic_cn = x.topic_cn; 
            }
            if (x.TB_order_type != 'transfer') {
                $scope.topic_en = x.T_topic_en;
                $scope.topic_th = x.T_topic_th;
                $scope.topic_cn = x.T_topic_cn; 
            }
    $scope.vdIDclickinfo = x.TB_order_order;
    $http({
        method : 'POST',
        url : "php/getaddService.php",
        data: $.param({vc: x.TB_order_order, sv: $scope.dataSV }),
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function(res){
                $scope.dataservice = res;
                console.log($scope.dataservice)
                if(res == undefined || res == null || res.length == 0){
                        $scope.popupdriverservice = { 'display':'block'};
                }
                else if(res != undefined || res != null || res.length != 0){
                    if (res[0].status_confirm == 0 || res[0].status_confirm == undefined) {
                        $scope.popupdriverservice = { 'display':'block'};
                    }
                    else{
                        $scope.popupdriverservice = { 'display':'block'};
                    }
            }
        });
    
    
    if (x.datessnew == 1) {
        //$('#voucherpass').modal('show');
    }
   
    
    $scope.datachekcost = [];
    $scope.vdIDclickinfo = x.TB_order_order;  
    $scope.datachekcost.push(x);
}
$scope.getaddservice = function(){
    $scope.popupdriverservice = { 'display':'none'};
}


/****************************************************/  
/******************* New-angular-KM *****************/  
/****************************************************/  
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

    $scope.success1;
    $scope.success2;
    /*--------------EDIT QUEST EDIT--------------*/

            
      
    $scope.FACEBOOK = function(x){
        $scope.s_facenew = x;
        console.log($scope.s_facenew)
        
    }
    $scope.LINEID = function(x){
        $scope.s_linenew = x;
        // console.log($scope.s_line)
        
    }
    $scope.SKYPEID = function(x){
        $scope.s_skypenew = x;
        // console.log($scope.s_skype)
        
    }
    $scope.WECHATID = function(x){
        $scope.s_wechatnew = x;
        // console.log($scope.s_wechat)
        
    }
    $scope.WhatsAppID = function(x){
        $scope.s_whatnew = x;
        // console.log($scope.s_what)
        
    }
    $scope.WANGWANGID = function(x){
        $scope.s_wangnew = x;
        // console.log($scope.s_ww)
        
    }
    $scope.QQID = function(x){
        $scope.s_qqnew = x;
        // console.log($scope.s_qq)
        
    }
    $scope.ZELLOID = function(x){
        $scope.s_zellonew = x;
        // console.log($scope.s_fb)
        
    }
             
    $scope.update_social_bookAgent = function(){
        console.log($scope.s_facenew)
            
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
                    {id: $scope.idzello, name: $scope.s_zellonew},
                    {sv: $scope.dataSV}




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
        console.log($scope.emailnew)
                    console.log($scope.emailnew)

                    console.log($scope.email2new)
                    console.log($scope.phonenew)
                    console.log($scope.phonenew2)
                    console.log($scope.localphonenew)
                    console.log($scope.dataSV)
                    console.log($scope.data)
                    console.log($scope.chmail2)
                    console.log($scope.chmail)
                    console.log($scope.em1)
                    console.log($scope.em2)

       
        if ($scope.phonenew == undefined) {
            $scope.phonenew = $scope.web_book_agent_phone;
        }
        if ($scope.phonenew2 == undefined) {
            $scope.phonenew2 = $scope.web_book_agent_phone2;
        }
         
        if ($scope.localphonenew == undefined) {
            $scope.localphonenew = $scope.local_phone;
        }
         
        if ($scope.emailnew == undefined) {
            $scope.emailnew = $scope.guestEmail;
        }
        if ($scope.email2new == undefined) {
            $scope.email2new = $scope.guestEmail2;
        }
        if ($scope.mail_or_phone == 1 ) {
           
                // if ($scope.em1 == undefined) {
                //     $scope.reqmail = { 'display':'block'};
                       
                // }
                
                //else if (($scope.em2 != undefined || $scope.em1 != undefined)) {
                    // $scope.Ephone1 = { 'display':'none'};
                    // $scope.Ephone2 = { 'display':'none'};
                    console.log($scope.emailnew)
                    console.log($scope.email2new)
                    console.log($scope.phonenew)
                    console.log($scope.phonenew2)
                    console.log($scope.localphonenew)
                    console.log($scope.dataSV)
                    console.log($scope.data)
                    $http({
                        method : 'POST',
                        url : "php/update-social-quest-detail.php",
                        data: $.param({orderid: $scope.data,
                            email: $scope.emailnew,
                            email2: $scope.email2new,
                            phone: $scope.phonenew,
                             phone2: $scope.phonenew2,
                            localphone:$scope.localphonenew,
                            sv: $scope.dataSV

                        }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                            console.log(res)
                                $scope.editEmail2 = { 'display':'none'};
                                $scope.editEmail1 = { 'display':'none'};
                               
                                $scope.guestEmail = $scope.emailnew;
                                $scope.guestEmail2 = $scope.email2new;
                               
                               
                    });    
                //}
            
            if ($scope.chmail == 0 || $scope.chmail2 == 0) {
                $scope.editEmail2 = { 'display':'none'};
                $scope.editEmail1 = { 'display':'none'};
            }

        }
        else if ($scope.mail_or_phone == 2) {
            //$scope.phonenew2 = '';
           $http({
            method : 'POST',
            url : "php/update-social-quest-detail.php",
            data: $.param({orderid: $scope.data,
                email: $scope.emailnew,
                email2: $scope.email2new,
                phone: $scope.phonenew,
                phone2: $scope.phonenew2,
                localphone:$scope.localphonenew,
                sv: $scope.dataSV

            }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(res){
                console.log(res)
                $scope.Ephone1 = { 'display':'none'};
                $scope.Ephone2 = { 'display':'none'};
                   
                $scope.web_book_agent_phone = $scope.phonenew;
                $scope.web_book_agent_phone2 = $scope.phonenew2;
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
            geolocation.getLocation().then(function(data){
            if (data.coords.latitude == undefined) {
              // alert("undefined")
            }
            else{
                //alert("not undefined")
            }
            $scope.coords = {lat:data.coords.latitude, long:data.coords.longitude};
            $scope.latituderel = $scope.coords.lat;
            $scope.longituderel = $scope.coords.long;
                                    
        });
            //alert($scope.numflag);
            //$scope.lopen = { 'display':'none' };
            $('#Selectlanguage').modal('hide');

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
                $scope.Countryfont3 = "Please select country";
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
                $scope.Countryfont3 = "โปรดเลือกประเทศ";
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
                $scope.Countryfont3 = "請選擇國家";
                $scope.flagcheck = 3;
                $scope.nophoto = "没有照片"; 
                $scope.SELmessage = ""; 

            }
            if ($scope.numflag==1) {
                if($scope.flagcheck == 1){
                    $scope.Typetext = "All"+' '+'('+$scope.voucherselect.length+')';
                }
                if($scope.flagcheck == 2){
                    $scope.Typetext = "ทั้งหมด"+' '+'('+$scope.voucherselect.length+')';
                }
                if($scope.flagcheck == 3){
                    $scope.Typetext = "所有"+' '+'('+$scope.voucherselect.length+')';
                }
                 if ($scope.flagcheck == undefined) {
                    $scope.Typetext = "All"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"Unused"+' '+'('+$scope.Voucherwait.length+')';
                  
                }
        

            }
            if ($scope.numflag==2) {
                if($scope.flagcheck == 1){
                    $scope.Typetext = "All"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"Used" +' '+'('+$scope.Voucherpass.length+')';
                }
                if($scope.flagcheck == 2){
                    $scope.Typetext = "ทั้งหมด"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"ใช้แล้ว" +' '+'('+$scope.Voucherpass.length+')';
                }
                if($scope.flagcheck == 3){
                    $scope.Typetext = "所有"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"已经使用" +' '+'('+$scope.Voucherpass.length+')';
                }
                 if ($scope.flagcheck == undefined) {
                    $scope.Typetext = "All"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"Unused"+' '+'('+$scope.Voucherwait.length+')';
                  
                }

            }
            if ($scope.numflag==3) {
                 if($scope.flagcheck == 1){
                    $scope.Typetext = "All"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"Unused"+' '+'('+$scope.Voucherwait.length+')';
                }
                if($scope.flagcheck == 2){
                    $scope.Typetext = "ทั้งหมด"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"รอใช้"+' '+'('+$scope.Voucherwait.length+')';
                }
                if($scope.flagcheck == 3){
                    $scope.Typetext = "所有"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"等待使用"+' '+'('+$scope.Voucherwait.length+')';
                }
                 if ($scope.flagcheck == undefined) {
                    $scope.Typetext = "All"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"Unused"+' '+'('+$scope.Voucherwait.length+')';
                  
                }
          

            }
            if ($scope.numflag==4) {
                if($scope.flagcheck == 1){
                    $scope.Typetext = "All"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"Canceled"+' '+'('+$scope.Vouchercancel.length+')';
                }
                if($scope.flagcheck == 2){
                    $scope.Typetext = "ทั้งหมด"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"ที่ถูกยกเลิก"+' '+'('+$scope.Vouchercancel.length+')';
                }
                if($scope.flagcheck == 3){
                    $scope.Typetext = "所有"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"已取消"+' '+'('+$scope.Vouchercancel.length+')';
                }
                 if ($scope.flagcheck == undefined) {
                    $scope.Typetext = "All"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"Unused"+' '+'('+$scope.Voucherwait.length+')';
                  
                }
                
               

            }
            if ($scope.numflag==5) {
                if($scope.flagcheck == 1){
                    $scope.Typetext = "All"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"Rejected"+' '+'('+$scope.Voucherrej.length+')';
                }
                if($scope.flagcheck == 2){
                    $scope.Typetext = "ทั้งหมด"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"ถูกปฏิเสธ"+' '+'('+$scope.Voucherrej.length+')';
                }
                if($scope.flagcheck == 3){
                    $scope.Typetext = "所有"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"已拒绝"+' '+'('+$scope.Voucherrej.length+')';
                }
                 if ($scope.flagcheck == undefined) {
                    $scope.Typetext = "All"+' '+'('+$scope.voucherselect.length+')'+' '+'/'+' '+"Unused"+' '+'('+$scope.Voucherwait.length+')';
                  
                }
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
                element.on("change", function(event){  
                    var files = event.target.files;
                    console.log(files) 
                    console.log(angular.element(event.currentTarget))
                   
                    if (element.width() > element.height())
                            console.log("sssssssssssssssss")
                            console.log(element.style)
                            console.log(this.naturalHeight)
                            console.log(attrs.fileInput)
                            console.log($scope)
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
app.directive("modalToggle",function(){
  return function(scope, element, attrs){
    scope.$watch(scope.loaded.showModal, function(value) {
                if (value) element.modal('show');
                else element.modal('hide');
    });
  }
})
