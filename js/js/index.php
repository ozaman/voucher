<!DOCTYPE html>
<html>
<head>
    <title>T-booking.com</title > 

        <meta charset="utf-8" />
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
        <META HTTP-EQUIV="Expires" CONTENT="-1">
        <meta name="description" content="Simple Map">
        <meta name="keywords" content="ng-map,AngularJS,center"> -->
        
       
          <!-- Include jQuery Mobile stylesheets -->
        <link rel="stylesheet" href="css/main.css?v=<?=time()?>" >
        <link rel="stylesheet" href="js/google/jquery.mobile.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

       
        <script src="js/google/jquery-1.10.2.min.js"></script>
        <script src="js/google/jquery-ui.js"></script>
        <script src="js/google/jquery.mobile.js"></script>
        <script src="js/google/jquery.mobile.min.js"></script>
        <script src="js/hammer.js" type="text/javascript"></script>
        <script src="js/jquery.hammer.js" type="text/javascript"></script>
        <script src="js/jquery.ui.touch-punch.min.js"></script>
        <script src="js/google/bootstrap.min.js"></script>        
        <script src="js/jquery.cookie.js"></script>
        <script src="js/google/angular.min.js" type="text/javascript"></script>
        <script src="js/google/angular-route.js" type="text/javascript"></script>
        <script src="js/google/angular-cookies.min.js" type="text/javascript"></script>
        <script src="js/google/angular-filter.js" type="text/javascript"></script>
        <script src="js/google/ui-bootstrap-tpls.min.js" type="text/javascript"></script>
        <script src="js/main-angular.js?v=<?=time()?>" type="text/javascript"></script>
        <script src="js/google/ng-file-upload.js"></script>
        <script src="js/google/ng-file-upload.min.js"></script>
        <script src="js/moment.js"></script>
        <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script> -->
      <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3Or1Mj7e2LZ60USScKPoayMsj_1TCt8k&callback=initialize">
    </script>


           

</head>
<body  ng-app="myApp" ng-controller="myCtrl" >
<div class="loader" ng-style="load"></div>
<!-- Body Main -->
<!-- CHECK ID order  -->
             <input type="hidden" value="{{order}}" id="order_angu"/>
             <input type="hidden" value="" id="order_jque"/>
<div class="bobymain" ng-style="bobymain" style="background: #fff">


<!-- HOME -->

<?php include "pages/home.php"; ?>


<!-- END -->



<!-- voucher -->
<?php include "pages/vc.php"; ?>
<!-- END HOME -->






<!-- SECTION GUEST-DETAIL -->

<?php include "pages/vc_1my.php"; ?>

<!-- END -->







<!-- SECTION BOOKING INFOMATION -->

<?php include "pages/vc_2book.php"; ?>

<!-- END -->





<!-- SECTION DRIVER -->
<?php include "pages/vc_3diver.php"; ?>

<!-- END -->




<!-- SECTION PLACE -->
<?php include "pages/vc_4start.php"; ?>


<!-- END -->


<!-- SECTION COMMENT -->

<?php include "pages/vc_5comment.php"; ?>

<!-- END -->

<!-- SECTION TERMS -->
<?php include "pages/vc_6terms.php"; ?>


<!-- END -->







<!-- incre -->

<?php include "pages/vc_incre.php"; ?>





<!-- SECTION MODAL DIALOG -->

<?php include "pages/popup.php"; ?>


<!-- END -->
        

</div>


<script>
    $(document).ready(function(){
      //alert("dsdsds")
     function reorient(e) {
    var portrait = (window.orientation % 180 == 0);
    $("body > div").css("-webkit-transform", !portrait ? "rotate(-90deg)" : "");
  }
   $('.titledriver').each(function() {
                 var x = $(this).height();
                 console.log(x)


    });
    $('.titlehome').each(function() {
                 var x = $(this).height();
                 console.log(x)


    });
  //   window.onscroll = function() {
  //       var ani = window.pageYOffset;
  //       console.log(ani)
  //       if (window.pageYOffset >5){

  //           $('.titlehome').css({position: 'fixed', top: '0px'});
  //       }
  //   }
  //   $("#voucher").scroll(function(){
  //   var x = $(window).scrollTop();
  //   alert(x)
  //   if(x > 280){
  //     $('.box-btn-select').css('position','fixed')
  //     $('.box-btn-select').css('margin-top','100px')
      
  //     //$('.box-btn-select-submenu-tour').scrollToFixed({
  //     //marginTop:-155,
  //     //preFixed: function() { $(this).find('#tours').removeClass('.bar-1');
  //                              //$(this).find('.box-btn-select').css();
  //      // },
  //      // postFixed: function() { //$(this).find('.order_btn').css('display', 'none');
  //   }
  //   else{
  //     $('.box-btn-select').css('position','absolute')
  //     $('.box-btn-select').css('margin-top','300px')
      
              
  //   }


  // });
   var sssss = $(this).find('.titledriver').height();
   console.log(sssss)
  // window.onorientationchange = reorient;
  // window.setTimeout(reorient, 0);
     //dragscrollinclude();
        //dragscrollincomment();
        //bookby();
        $(".btn-save").click(function(){
            $(".btn-new").css('display','none');
        });
        $("#checkimg").click(function(){
          //alert("work")
          document.getElementById('blah2').src = "";
          document.getElementById('blah').src = "";
        });
        
        
        
        function dragscrollinclude() {
            $(".box-img-car").css('top','0');
            $( ".box-img-car" ).draggable({
                axis: "y",
                connectToSortable: ".box-img-car",
                drag: function(event, ui) {

                },
                stop: function( event, ui ) {
                  var sum = 0;
                $('.box-img-car').each(function() {
                    sum += $(this).height();


                });
                var lop = 0;
                if(sum>=400){
                  lop = sum ;
                  lop = sum *-1;
                  lop += 400;
                }
                else{

                 lop = 0;

                }
                console.log("lop = "+lop);

                var x = $('.box-img-car').css('top');
                x = parseInt(x);
                console.log('x is = '+x);

                if(x>0){
                  $( ".box-img-car" ).animate({
                      top:0
                      }, 300, function() {

                    });
                }

                else if(x<lop)
                {

                    $( ".box-img-car" ).animate({
                      top: lop
                      }, 300, function() {

                    });
                }
                else
                {
                    $( ".box-img-car" ).animate({
                        top: x
                        }, 200, function() {

                    });
                }

              }
            });
        }
        function dragscrollincomment() {
            $(".box-coment").css('top','0');
            $( ".box-coment" ).draggable({
                axis: "y",
                connectToSortable: ".box-coment",
                drag: function(event, ui) {

                },
                stop: function( event, ui ) {
                  var sum = 0;
                $('.box-coment').each(function() {
                    sum += $(this).height();


                });
                var lop = 0;
                if(sum>=348){
                  lop = sum ;
                  lop = sum *-1;
                  lop += 348;
                }
                else{

                 lop = 0;

                }
                console.log("lop = "+lop);

                var x = $('.box-coment').css('top');
                x = parseInt(x);
                console.log('x is = '+x);

                if(x>0){
                  $( ".box-coment" ).animate({
                      top:0
                      }, 300, function() {

                    });
                }

                else if(x<lop)
                {

                    $( ".box-coment" ).animate({
                      top: lop
                      }, 300, function() {

                    });
                }
                else
                {
                    $( ".box-coment" ).animate({
                        top: x
                        }, 200, function() {

                    });
                }

              }
            });
        };
        function bookby() {
            $(".box-img-cars").css('top','0');
            $( ".box-img-cars" ).draggable({
                axis: "y",
                connectToSortable: ".box-img-car",
                drag: function(event, ui) {

                },
                stop: function( event, ui ) {
                  var sum = 0;
                $('.box-img-cars').each(function() {
                    sum += $(this).height();


                });
                var lop = 0;
                if(sum>=2000){
                  lop = sum ;
                  lop = sum *-1;
                  lop += 200;
                }
                else{

                 lop = 0;

                }
                console.log("lop = "+lop);

                var x = $('.box-img-cars').css('top');
                x = parseInt(x);
                console.log('x is = '+x);

                if(x>0){
                  $( ".box-img-cars" ).animate({
                      top:0
                      }, 300, function() {

                    });
                }

                else if(x<lop)
                {

                    $( ".box-img-cars" ).animate({
                      top: lop
                      }, 300, function() {

                    });
                }
                else
                {
                    $( ".box-img-cars" ).animate({
                        top: x
                        }, 200, function() {

                    });
                }

              }
            });
        };
       
        var dataitem,name,nationality,tel,adults,child,infant,Total,
        service, se_include,car_type,detail,facilities,numberofcar,type_tour,from,to,
        departure_date,on_date,flight,pickup_time,time,pic_place,picto_place,bookby,confirmby;

        
        
         $("#order_jque").val("<?=$_GET[order];?>");
        var fooorder = "<?=$_GET[order];?>";
        
        console.log(fooorder)
        if(fooorder == undefined || fooorder == ''){
            $(".bobymain").hode();
        }
        else{
            $(".bobymain").show();
        }
        if (fooorder != "") {
           //alert(fooorder)
            $.cookie('order', fooorder);
            idorder = fooorder;
            var order_angu = $('#order_angu').val();
            var order_jque = $('#order_jque').val();
                // alert(order_angu)
                // alert(order_jque)
            if (order_jque != order_angu) {
                 
                window.location.reload();
            }
        }
        else{
            idorder = $.cookie('order');
        }
        console.log(idorder)
   
    $("#Guest-detail").swipeleft(function() {
        $.mobile.changePage("#voucher");
    });
    $("#Comment").swipeleft(function() {
        $.mobile.changePage("#voucher");
    });
    $("#Booking-information").swipeleft(function() {
        $.mobile.changePage("#voucher");
    });
    $("#Driver").swipeleft(function() {
        $.mobile.changePage("#voucher");
    });
    $("#Place").swipeleft(function() {
        $.mobile.changePage("#voucher");
    });
    $("#increasetime").swipeleft(function() {
        $.mobile.changePage("#voucher");
    });
    $("#Recomment").swipeleft(function() {
        $.mobile.changePage("#voucher");
    });
    $("#voucher").swipeleft(function() {
        $.mobile.changePage("#home");
    });
     var currgeocoder;

         //Set geo location lat and long

         navigator.geolocation.getCurrentPosition(function(position, html5Error) {

             geo_loc = processGeolocationResult(position);
             currLatLong = geo_loc.split(",");
             initializeCurrent(currLatLong[0], currLatLong[1]);

        });

        //Get geo location result

       function processGeolocationResult(position) {
             html5Lat = position.coords.latitude; //Get latitude
             html5Lon = position.coords.longitude; //Get longitude
             html5TimeStamp = position.timestamp; //Get timestamp
             html5Accuracy = position.coords.accuracy; //Get accuracy in meters
             return (html5Lat).toFixed(8) + ", " + (html5Lon).toFixed(8);
       }

        //Check value is present or not & call google api function

        function initializeCurrent(latcurr, longcurr) {
             currgeocoder = new google.maps.Geocoder();
             console.log(latcurr + "-- ######## --" + longcurr);

             if (latcurr != '' && longcurr != '') {
                 var myLatlng = new google.maps.LatLng(latcurr, longcurr);
                 return getCurrentAddress(myLatlng);
             }
       }

        //Get current address

         function getCurrentAddress(location) {
              currgeocoder.geocode({
                  'location': location

            }, function(results, status) {
           
                if (status == google.maps.GeocoderStatus.OK) {
                    console.log(results[0]);
                    $("#address").html(results[0].formatted_address);
                } else {
                    alert('Geocode was not successful for the following reason: ' + status);
                }
            });
         }
   
    
    
});

</script>

</body>
</html>

