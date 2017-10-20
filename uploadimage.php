<?php header ('Content-type: text/html; charset=utf-8');
include("connect.php");
header('Access-Control-Allow-Origin: *');
header('Content-Type: image/jpeg');
// Create connection
require_once('ImageManipulator.php');
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



 
   if(!empty($_FILES))  
 {  
     
  // $fn = $_FILES['image']['tmp_name'];
  //     $size = getimagesize($fn); 
  //     //echo $size[0] ."sssssssssssssssssssssssssssssssssssssss";
  //     $ratio = $size[0]/$size[1];
  //     if( $ratio > 1) {
  //         $width = 500;
  //         $height = 500/$ratio;
  //     }
  //     else {
  //         $width = 500*$ratio;
  //         $height = 500;
  //     }


              $newNamePrefix = time();
              $data[new_name] = $newNamePrefix;
             //echo json_encode($data);
              //echo $exif['Orientation'];
              $imagename = $_FILES['file']['name'];
              $source = $_FILES['file']['tmp_name'];
              $target = '../../data/fileupload/vc/' . $newNamePrefix .'.jpg';
              //$exif = exif_read_data($_FILES['file']['tmp_name']);
              move_uploaded_file($source, $target);

              $imagepath = $imagename;
              $save = "../../data/fileupload/vc/" . $imagepath; //This is the new file you saving
              $file = "../../data/fileupload/vc/" . $imagepath; //This is the original file

              //list($width, $height) = getimagesize($file);
              $data = getimagesize($target);
              $width = $data[0];
              $height = $data[1];
              echo $width.$height;
              if ($width<$height) {
                $degrees = 0;
              }
              
              else{
                $degrees = -90;
              }
              $modwidth = 500;
              
              $diff = $width / $modwidth;

              $modheight = $height / $diff;
              $tn = imagecreatetruecolor($modwidth, $modheight) ;
              $image = imagecreatefromjpeg($file) ;
              imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ;
              //$degrees = -90;  //change this to be whatever degree of rotation you want
 
              header('Content-type: image/jpeg');
               
              //$filename = 'uploads/101822973264163759893-1428320267361.jpeg';  //this is the original file
               
              $source = imagecreatefromjpeg($target) or notfound();
              $rotate = imagerotate($source,$degrees,0);
               
              imagejpeg($rotate,$target); //save the new image
               
              //imagedestroy($source); //free up the memory
              //imagedestroy($rotate);  //free up the memory
              imagejpeg($tn, $save, 100) ;
              //unlink($target);





    //   $validExtensions = array('.jpg', '.jpeg', '.gif', '.png');
    // // get extension of the uploaded file
    // $fileExtension = strrchr($_FILES['file']['name'], ".");
    // // check if file Extension is on the list of allowed ones
    // if (in_array($fileExtension, $validExtensions)) {
    //     $newNamePrefix = time();
    //     $data[new_name] = $newNamePrefix;
    //    echo json_encode($data);
    //     $manipulator = new ImageManipulator($_FILES['file']['tmp_name']);

    // //     $filename = $_FILES['file']['tmp_name'];
    // // $rotang = 20; // Rotation angle
    // // $source = imagecreatefrompng($filename) or die('Error opening file '.$filename);
    // // imagealphablending($source, false);
    // // imagesavealpha($source, true);

    // // $rotation = imagerotate($source, $rotang, imageColorAllocateAlpha($source, 0, 0, 0, 127));
    // // imagealphablending($rotation, false);
    // // imagesavealpha($rotation, true);

    // // header('Content-type: image/png');
    // // imagepng($rotation);
    // // imagedestroy($source);
    // // imagedestroy($rotation);
    //     $newImage = $manipulator->resample(600, 400);
 
    //     // center cropping to 200x130
    //     //$newImage = $manipulator->crop($x1, $y1, $x2, $y2);
    //     // saving file to uploads folder
    //     $manipulator->save('../../data/fileupload/vc/' . $newNamePrefix .'.'.'jpg');
       
    // } else {
    //     echo 'You must upload an image...';
    // }
 }  
 else  
 {  
      echo 'Some Error';  
 }
 
?>