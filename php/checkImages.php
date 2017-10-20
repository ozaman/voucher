<?php
$filename = '../images/logo/'.$_POST[imagename].".jpg";
//$imagename = $_POST[imagename].".jpg";
//echo $filename;
if (file_exists($filename)) {
    echo "1";
} else {
    echo "0";
}
?>