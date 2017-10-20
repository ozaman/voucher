<?php header ('Content-type: text/html; charset=utf-8');

  include("connect.php");
  
  
if ($_POST[sv] == 'th') {
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
    //echo $_POST[sv].$_POST[voucher];
}
else{
    $conn = new mysqli($servernameCN, $usernameCN, $passwordCN, $dbnameCN);
    $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
}  
//header('Access-Control-Allow-Origin: *');

 $voucherDB = "vc_".$_POST[voucher];


if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error);
}
else{

	
	$timesss = time(); 
	$sql = "INSERT INTO ".$voucherDB." (voucher,orderid,comment_from,comment_to,drivername,latitude,longitude,admin_company,type_state,day_comment,flight_delay_date) VALUES ('".$_POST[voucher]."','".$_POST[orderid]."','".$_POST[comfrom]."','".$_POST[comto]."','".$_POST[drivername]."','".$_POST[lag]."','".$_POST[long]."','".$_POST[adminCompany]."','".$_POST[typestate]."','".$_POST[timess]."','".$timesss."')";
		
		$rows = array();
		$result = $conn2->query($sql);

		
		

	if ($result) {
	    echo $timesss;

	    
	} else {
	    //echo $timestamp;
	    echo "0 results";
 	}
	    

$conn->close();

} 

?>