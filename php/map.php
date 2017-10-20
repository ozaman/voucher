<?php
                   $src = 'https://maps.googleapis.com/maps/api/staticmap?center=40.714728,-73.998672&markers=color:red%7Clabel:C%7.8725267,98.3784039&zoom=12&size=200x200';
                    $time = time();
                    $desFolder = 'img/';
                    $imageName = 'google-map_'.$time.'.PNG';
                    $imagePath = $desFolder.$imageName;
                    file_put_contents($imagePath,file_get_contents($src));
                ?> 
                
