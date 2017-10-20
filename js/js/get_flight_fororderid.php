<?php header ('Content-type: text/html; charset=utf-8');
include("connect.php");
//$_POST[orderid]='184860';
// Create connection
if ($_POST[sv] == 'th') {
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
}
else{
    
}
// $conn = new mysqli($servername, $username, $password, $dbname);
// $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 $voucherDB = $_POST[vc];
 echo $voucherDB;

$sql = "SELECT *FROM '$voucherDB'  

WHERE voucher  ='".$_POST[vc]."' ORDER BY $voucherDB.id ASC "; //ASC or DESC
$rows = array();
$result = $conn2->query($sql);

if ($result->num_rows >= 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
		
		
    }
     print json_encode($rows);
 //json_encode($rows);
	 
	    //$total= json_encode($rows);
		
		 
	
 // $myvar = var_dump(json_decode($total, true));
	
	
	 // echo $email =$myvar->id[0];
	
	
} else {
    echo "0 results";
}
$conn->close();
?>