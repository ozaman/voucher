<?php header ('Content-type: text/html; charset=utf-8');

  //include("php/connect.php");
  
//   //echo $_POST[voucher]. $_POST[sv];

// if ($_POST[sv] == 'th') {
//     $conn = new mysqli($servername, $username, $password, $dbname);
//     $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
//     //echo $_POST[sv].$_POST[voucher];
// }
// else{
//     $conn = new mysqli($servernameCN, $usernameCN, $passwordCN, $dbnameCN);
//     $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
// }  



// if ($conn->connect_error) { 
//     die("Connection failed: " . $conn->connect_error);

// }
// else{

   
   
    file_put_contents("../data/fileupload/map/".$_POST[voucher]."_".$_POST[timess].".png",file_get_contents('https://maps.googleapis.com/maps/api/staticmap?zoom=14&size=250x100&maptype=roadmap&markers=icon:https://goldenbeachgroup.com/app/demo/google/realtime/images/2.png|'.$_POST[lag].','.$_POST[long].''));
	
        


		
		


// } 

?>