<!DOCTYPE html>
<html>
<head>
    <title>Reservation No. <?=$_GET[order]?> T-booking.com</title > 
	

        <meta charset="utf-8" />
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="*" />
        <meta name="apple-mobile-web-app-capable" content="yes" />

        <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"/> -->
        <!-- <meta http-equiv="Content-Security-Policy" content="block-all-mixed-content"/> -->
<!-- 
		<?
require_once("includes/config.in.php");
require_once("includes/class.mysql.php");
$db = New DB();
		
		?> -->

		
        <!-- <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
        <META HTTP-EQUIV="Expires" CONTENT="-1">
        <meta name="description" content="Simple Map">
        <meta name="keywords" content="ng-map,AngularJS,center"> -->
        
       
          <!-- Include jQuery Mobile stylesheets -->
        <link rel="stylesheet" href="css/main.css?v=<?=time()?>" >
        <link rel="icon" href="images/culum.png" type="image/x-icon">
         <link rel="stylesheet" href="css/angular-ui-notification.min.css?v=<?=time()?>" >
       <!--  <link rel="stylesheet" href="js/google/jquery.mobile.min.css"> -->
        <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/font-awesome-animation.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
        <link rel="stylesheet" href="../driver/bootstrap/font_all/airport/flaticon.css">
        <link rel="stylesheet" href="bootstrap/fontello/css/fontello.css">
        
        <link rel="stylesheet" href="../driver/bootstrap/font_all/icomoon/demo-files/demo.css?v=<?=time()?>">
     <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
       <!--  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

       
        <script src="js/google/jquery-1.10.2.min.js"></script>
        <script src="js/google/jquery-ui.js"></script>
       <!--  <script src="js/google/jquery.mobile.js"></script>
        <script src="js/google/jquery.mobile.min.js"></script> -->
        <script src="js/hammer.js" type="text/javascript"></script>
        <script src="js/jquery.hammer.js" type="text/javascript"></script>
        <script src="js/jquery.ui.touch-punch.min.js"></script>
        <script src="js/google/bootstrap.min.js"></script>        
        <script src="js/jquery.cookie.js"></script>
        <script src="js/main-jquery.js?v=<?=time()?>" type="text/javascript"></script>
        <script src="js/google/canvasResize.js"></script> 
        <script src="js/google/jquery.canvasResize.js"></script> 
        <script src="js/google/image-scale.js" type="text/javascript"></script>
        <script src="js/camera/exif.js"></script> 

        <!-- <script src="js/google/canvasResize.jquery.json"></script>      -->

         <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.0/angular.min.js"></script> -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular-cookies.min.js"></script> -->

        <script src="js/angular.min.js" type="text/javascript"></script>
        <script src="js/google/angular-route.js" type="text/javascript"></script>
        <script src="js/google/angular-cookies.min.js" type="text/javascript"></script>
        <script src="js/google/anchorScroll.js" type="text/javascript"></script>
        <script src="js/google/fullscreen.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/angular.youtube-embed/1.7.10/ng-youtube-embed.min.js" type="text/javascript"></script>
       

        <!-- <script src="js/google/cookieStore.js" type="text/javascript"></script> -->
       
        <script src="js/google/angular-base64.js" type="text/javascript"></script>
        <script src="js/google/ng-file-upload.js"></script>
        <script src="js/google/ng-file-upload.min.js"></script>
        <script src="js/google/angular-fullscreen.js" type="text/javascript"></script>
        <script src="js/google/angular-filter.js" type="text/javascript"></script>
        <script src="js/google/ui-bootstrap-tpls.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.14.3/ui-bootstrap-tpls.min.js"></script>
        <script src="js/google/angular-ui-notification.js" type="text/javascript"></script>
        <script src="js/angular-animate.min.js"></script>
        <script src="js/angular-aria.min.js"></script>
        <script src="js/angular-messages.min.js"></script>
        <script src="js/google/xml2json.js" type="text/javascript"></script>
        <script src="js/google/vjs-video.min.js"></script>
        <script src="js/google/vjs-video.js"></script>
        <script src="js/imageupload.js"></script>
        <!-- <script src="node_modules/simplewebrtc/latest.js"></script> -->
        <!-- <script src="node_modules/ng-simple-webrtc/ng-simple-webrtc.js"></script> -->
        <script src="js/RTCMultiConnection.min.js"></script>
        <script src="js/socket.io.js"></script>
        <script src="js/FileBufferReader.js"></script>
        <script src="js/websocket.js"></script>
        <!-- <script type="text/javascript" src="https://cdn.pubnub.com/sdk/pubnub-angular/pubnub-angular-4.0.2.js"></script> -->
        <script src="js/twilio-video.min.js"></script>
         <script src="js/ng-crop.js"></script>
            <script src="js/loader-image.min.js"></script>
  
        <!-- Angular Material Library -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js"></script> -->
        <script src="js/main-angular.js?v=<?=time()?>" type="text/javascript"></script>
        <script type="text/javascript" src="js/pubnub-angular-4.0.2.min.js"></script>
        <script src="js/google/dropzone.js" type="text/javascript"></script>


        <script src="js/angularjs-geolocation.min.js"></script>
        

        <!-- <script src="js/imageupload.js.js"></script> -->
        <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script> -->
 
    <!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->


    <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script> -->



 
           

</head>
<body  ng-app="myApp" ng-controller="myCtrl"  style="height:100%" >


<!-- <span class="btn btn-default btn-sm"></span><i class="glyphicon glyphicon-fullscreen"></i></span> -->
<div style="position: fixed;right: 0;bottom: 0;top: 0;
left: 0;background-color: #fff;width: 100%;height: 100%;display: none;z-index: 1065; " ng-style="load" id="load">
  <div class="loader" ></div>
  <!-- <div class="not-data" style="display: none;">
    <span ng-if="flagcheck == 1">No data in syttem</span>
    <span ng-if="flagcheck == 2">No data in syttem</span>
    <span ng-if="flagcheck == 3">No data in syttem</span>
    </div> -->
</div>

<!-- Body Main -->
<!-- CHECK ID order  -->
            <!--  <input type="hidden" value="{{order}}" id="order_angu"/>
             <input type="hidden" value="" id="order_jque"/> -->
<?
$chat_part='../demo/';

?>
<div class="pagenotfound" style="display: none;text-align: center;
    font-size: 20px;
    margin-top: 260px;
    font-weight: 400;">
    <span ng-if="flagcheck == 1">No data in system</span>
    <span ng-if="flagcheck == 2">No data in system</span>
    <span ng-if="flagcheck == 3">No data in system</span>

</div>
<div class="bobymain" style="display: none;">
<?php  include "load/popup.php" ;?>
<!-- HOME -->
<?php  $imcase = 12; ?>
<?php include "pages/home.php"; ?>




<?php include "pages/popup.php"; ?>


<!-- END -->
        

</div>

<!-- <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90&callback=initMap">
    </script> -->
    <script async defer src="https://maps.googleapis.cn/maps/api/js?key=AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90">
</script>
<script>

</script>

<script>
    $(document).ready(function(){

      
  });

</script>



<style>
body { text-transform:capitalize;}
span { text-transform:capitalize;}
div { text-transform:capitalize;}
</style>
</body>
</html>


    <script src="js/camera/binaryajax.js"></script> 
                 <script src="js/camera/exif.js"></script>
				 

				  <script>
var elem = document.getElementById("load_data_chat");
if (elem.requestFullscreen) {
 // elem.requestFullscreen();
}
 
				  addEventListener("clicks", function() {
    var el = document.documentElement,
      rfs = el.requestFullscreen
        || el.webkitRequestFullScreen
        || el.mozRequestFullScreen
        || el.msRequestFullscreen 
    ;

    rfs.call(el);
});
 
				  </script>


