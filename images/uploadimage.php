<?php header ('Content-type: text/html; charset=utf-8');
include("connect.php");

include("../includes/class.resizepic.php");
$FILE = $_FILES['file'];

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
 
 /*
      $Str_file = explode(".",$_FILES['file']['name']);
      $new_name= time().'.'.'jpg';
      $path = '../../data/fileupload/vc/' . $new_name;  
	  */

	
      //echo "asasa";
	   $new_name = time();
			 @copy ($FILE['tmp_name'] , "../../data/fileupload/vc/".$new_name.".jpg" );
			$original_image = "../../data/fileupload/vc/".$new_name.".jpg" ;
			$desired_width = 300;
			$desired_height = _INEWS_H ;
			$image = new hft_image($original_image);
			$image->resize($desired_width, $desired_height, '700');
			$image->output_resized("../../data/fileupload/vc/".$new_name.".jpg","JPG");
			//echo $original_image;
      $data[new_name] = $new_name;
	     echo json_encode($data);
	  
      // if(move_uploaded_file($_FILES['file']['tmp_name'], $path))  
      // {  
            
      //      print $new_name;
      //      $images = $path;
      //      $width=400; //*** Fix Width & Heigh (Autu caculate) *** //
      //      $size=GetimageSize($images);
      //      //$height=420;
      //      $height=round($width*$size[1]/$size[0]);
      //      $images_orig = ImageCreateFromJPEG($images);
      //      $photoX = ImagesX($images_orig);
      //      $photoY = ImagesY($images_orig);
      //      $images_fin = ImageCreateTrueColor($width, $height);
      //      ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
      //      switch ($file['type']) {
      //          case 'image/jpeg':
      //             imagejpeg($images_fin,$images, 100);
      //             break;
      //          case 'image/png':
      //             imagepng($images_fin,$images, 0);
      //             break;
      //          case 'image/gif':
      //             imagegif($images_fin,$images);
      //             break;
      //             default:
      //             //exit;
      //             break;
      //           }
      //           echo $width . $height .$file['type'] ;
      //        //return $path;
      //      //ImageJPEG($images_fin,$images);
      //      ImageDestroy($images_orig);
      //      ImageDestroy($images_fin);
      // }  

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