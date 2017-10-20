<?php
		$remote_file_url = 'http://t-booking.com/data/qr/vc/7050498_7849160235.png';
         

        $local_file = '../data/qr/vc/7050498_7849160235.png';
         
        $copy = copy( $remote_file_url, $local_file );
        if( !$copy ) {
    		echo "Doh! failed to copy $file...\n";
		}
		else{
		    echo "WOOT! success to copy $file...\n";
		}
?>