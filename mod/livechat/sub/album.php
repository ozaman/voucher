   
 	<div id="area"  ><div>
		<img id="image_album" name="image_album"  style="width:300px " />
            <!-- development area -->

            <!-- SAMPLE -->
            <section>
 
                <!-- description -->
                <!-- /description -->
<style>
                    #area div p { display: block; width: 400px; }
                    #area div p span { display: block; padding: 2px 0; width: 0; background: #193; text-align: center;width: 400px;  }
                    #area b, #area img { display: block; width: 400px; }
                    #area img { margin: 10px 0; width: 400px; }
                    #area input {  }
                    #area u { display: block; padding: 15px; text-align: center; background: #ddd; border-radius: 6px;width: 400px;  }
                </style>
				 

   			<input type="file" class="form-control" value="ยังไม่มีภาพถ่าย" readonly  style="padding-left:5px; padding-right:5px; width:125px;display:none"  name="load_chat_album"   id="load_chat_album"   accept="image/*"  >
   
         
                    <script>

  

                            $('input[name=load_chat_album]').change(function(e) {
 
							 $( "#popup_chat_share_album" ).slideToggle();
                                var file = e.target.files[0];
								
								 

 

                                // CANVAS RESIZING
                                canvasResize(file, {
                                    width: 800,
                                    height: 1600,
                                    crop: false,
                                    quality: 100,
                                    rotate: 0,
                                    callback: function(data, width, height) {

                                        // SHOW AS AN IMAGE
                                        // =================================================
                                        var img = new Image();
 
									   
									 $("#image_album").attr('src', data);
 

									   
									    // /SHOW AS AN IMAGE
                                        // =================================================


                                        // IMAGE UPLOADING
                                        // =================================================

                                        // Create a new formdata
                                        var fd = new FormData();
                                        // Add file data
                                        var f = canvasResize('dataURLtoBlob', data);
                                        f.name = file.name;
                                        fd.append($('#area input').attr('name'), f);

                                        var xhr = new XMLHttpRequest();
                                        xhr.open('POST', '<?=$chat_part?>go.php?name=livechat&file=upload_pic&time=<?=time()?>', true);
                                        xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
                                        xhr.setRequestHeader("pragma", "no-cache");
                                        //Upload progress
                                        xhr.upload.addEventListener("progress", function(e) {
                                            if (e.lengthComputable) {
                                                var loaded = Math.ceil((e.loaded / e.total) * 100);
                                                $('#area p span').css({
                                                    'width': loaded + "%"
                                                }).html(loaded + "%");
                                            }
                                        }, false);
                                        // File uploaded
                                        xhr.addEventListener("load", function(e) {
                                            var response = JSON.parse(e.target.responseText);
                                            if (response.filename) {
                                                // Complete
												

												
                                                $('#area p span').html('done');
                                                $('#area b').html(response.filename);
                                                $('<img>').attr({
                                                    'src': response.filename
                                                }).appendTo($('#area div'));
                                            }
                                        }, false);
                                        // Send data
                                        xhr.send(fd);

                                        // /IMAGE UPLOADING
                                        // =================================================               
                                    }
                                });


var url_album = "<?=$chat_part?>go.php?name=livechat/load&file=pic_album&time=<?=time()?>";
   $('#load_chat_share_album').load(url_album); 
$("#image_album_before").attr('src',"../data/fileupload/store/chat/<?=$_GET['time']?>_big.jpg");
												

                            });
           
		   
		   
                    </script>

 
 
   
                    <script src="js/camera/canvasResize.js"></script>   
					