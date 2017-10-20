<?php header ('Content-type: text/html; charset=utf-8');

  include("connect.php");
  
  
if ($_POST[sv] == 'th') {
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
    //echo $_POST[sv].$_POST[voucher];
}
else{
    //$conn = new mysqli($servername, $username, $password, $dbname);
    
    $conn = new mysqli($servernameCN, $usernameCN, $passwordCN, $dbnameCN);
    //$conn2 = new mysqli($servername, $username, $password, $dbname_chat);
}  
//header('Access-Control-Allow-Origin: *');

 

if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error);
}
else{

	
	$timesss = time(); 
	
	    echo $timesss;

	    
	

} 

?>