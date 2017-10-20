 <div style="display:none "><br>
 
<br>
<br>
<br>
<br>
<br>

 
  <?  include ("popup.php");?>
   <input type="hiddend" name="chat_to_lat" id="chat_to_lat" value="<?=$_GET[lat]?>"  style="width:100px " />
	<input type="hiddend" name="chat_to_lng" id="chat_to_lng" value="<?=$_GET[lng]?>"  style="width:100px " /> </div>
 
 <? $google_api="AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90";?> 
 
 
        </script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=<?=$google_api?>&sensor=true&callback=initialize">
</script>
<script type="text/javascript">
//alert(document.getElementById('check_data_status_gps_lat_old').value);
   
    var map = undefined;
    var marker = undefined;
  var position = [<?=$_GET[lat]?>,<?=$_GET[lng]?>];
  var position_free = [<?=$_GET[lat]?>,<?=$_GET[lng]?>];

    function initialize() {
            
        var latlng = new google.maps.LatLng(position[0], position[1]);
		 var latlng_free = new google.maps.LatLng(position_free[0], position_free[1]);
        var myOptions = {
            zoom: 16,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
 
	///
 
      marker_busy = new google.maps.Marker({
       //     position: latlng,
       map: map,
			      icon: 'images/<?=$_GET[chat_from]?>.png?v=<?=time();?>',
            title: "Your current location!"
        }); 
		
		     marker_free = new google.maps.Marker({
      position: latlng_free,
     		  map: map,
			      icon: 'images/<?=$_GET[chat_to]?>.png?v=<?=time();?>',
         	   title: "Your current location!"
     	   });
    
        google.maps.event.addListener(map, 'click', function(me) {
            var result = [me.latLng.lat(), me.latLng.lng()];
			
 //alert(result);
 /////alert(me.latLng.lat());
  // transition_free(result_free);
transition(result);
  
        });
    }
    
    var numDeltas = 100;
    var delay = 1; //milliseconds
    var i = 0;
    var deltaLat;
    var deltaLng;
	//////
    function transition(result){
        i = 0;
        deltaLat = (result[0] - position[0])/numDeltas;
        deltaLng = (result[1] - position[1])/numDeltas;
        moveMarker();
		/// initialize();
    }
	///// _free
	    function transition_free(result_free){
        i = 0;
        deltaLat_free = (result_free[0] - position_free[0])/numDeltas;
        deltaLng_free = (result_free[1] - position_free[1])/numDeltas;
        moveMarker_free();
		/// initialize();
    }
    ///////
	///
    function moveMarker(){
        position[0] += deltaLat;
        position[1] += deltaLng;
        var latlng_busy = new google.maps.LatLng(position[0], position[1]);
 		 marker_busy.setPosition(latlng_busy);
		 
        if(i!=numDeltas){
            i++;
            setTimeout(moveMarker, delay);
        }
    }
	
	///
	
	 function moveMarker_free(){
 
        position_free[0] += deltaLat_free;
        position_free[1] += deltaLng_free;
 var latlng_free = new google.maps.LatLng(position_free[0], position_free[1]);
		
		 marker_free.setPosition(latlng_free);
		/*
		   marker_free = new google.maps.Marker({
		   map: map,
      position: latlng_free,
	   title:"Hello World!"

     	   });
		   
		   */
 
 		 
		 
		 
 
        if(i!=numDeltas){
            i++;
            setTimeout(moveMarker_free, delay);
        }
    }
	
	
	
	
    
        $(document).ready(function() {

    initialize();
 
});


 setInterval(function() {
 ////// อัพเดทตำแหน่งตัวเอง 
 /*
 var me.latLng.lat()=document.getElementById('chat_lat').value;
 var me.latLng.lng()=document.getElementById('chat_lng').value;
     */
 
         var result = [document.getElementById('check_data_status_gps_lat_old').value, document.getElementById('check_data_status_gps_lng_old').value];
			 transition(result);
			  
			 var result_free = [document.getElementById('chat_to_lat').value, document.getElementById('chat_to_lng').value];
			transition_free(result_free);
 /////alert(me.latLng.lat());
          
 //alert(result);
}, 3000); // 60000 milliseconds = one minute
</script>

<div id="map_canvas" style="width:100%; height:100%;"></div>

 