<?php header ('Content-type: text/html; charset=utf-8');
include("connect.php");
header('Access-Control-Allow-Origin: *');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


    // $uploaddir = 'fileUpload/';
    // $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
    // move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

 
   if(!empty($_FILES))  
 {  
      $Str_file = explode(".",$_FILES['file']['name']);
      $new_name= time().'.'.'jpg';
      $path = 'fileUpload/' . $new_name;  
      if(move_uploaded_file($_FILES['file']['tmp_name'], $path))  
      {  
            
           print $new_name;
           $images = $path;
           $width=400; //*** Fix Width & Heigh (Autu caculate) *** //
           $size=GetimageSize($images);
           //$height=420;
           $height=round($width*$size[1]/$size[0]);
           $images_orig = ImageCreateFromJPEG($images);
           $photoX = ImagesX($images_orig);
           $photoY = ImagesY($images_orig);
           $images_fin = ImageCreateTrueColor($width, $height);
           ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
           ImageJPEG($images_fin,$images);
           ImageDestroy($images_orig);
           ImageDestroy($images_fin);
      }  
 }  
 else  
 {  
      echo 'Some Error';  
 }
 
 //   if(!empty($_FILES))  
 // {    $imageupload = $_FILES['file']['tmp_name'];
 //      $Str_file = explode(".",$_FILES['file']['name']);
 //      $new_name= time().'.'.'jpg';
 //      $path = 'fileUpload/' . $new_name;
 //      $newwidth = 500;
 //      list($width,$height)=getimagesize($imageupload); 
 //      $newheight=($height/$width)*$newwidth;
 //      $tmp=imagecreatetruecolor($newwidth,$newheight);
 //      //imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height); 
 //      if(move_uploaded_file($tmp, $path))  
 //      {  
 //            print $new_name;
 //            //print $imageupload;
 //      }  
 // }  
 // else  
 // {  
 //      echo 'Some Error';  
 // }  
 

/*$sql = "INSERT INTO web_comment(img_post_date) VALUES ('".$_POST[name]."') WHERE voucher = '".$_POST[voucher]."'";
$rows = array();
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    print ($rows);
} else {
    //echo $timestamp;
    echo "0 results";
}
$conn->close();*/
?>