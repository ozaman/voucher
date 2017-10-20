<?php header ('Content-type: text/html; charset=utf-8');
  include("connect.php");
  if ($_POST[sv] == 'th') {
    $conn = new mysqli($servername, $username, $password, $dbname);
    //$conn = new mysqli($servername, $username, $password, $dbname_chat);
}
else{
    $conn = new mysqli($servernameCN, $usernameCN, $passwordCN, $dbnameCN);
    $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
}
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error);
}
else{
	if ($_POST[typepro] == 'diving') {
		$sql = "SELECT web_product_detail_diving.*,web_order_detail_diving.* FROM web_product_detail_diving 
		LEFT JOIN web_order_detail_diving ON web_order_detail_diving.product_id = web_product_detail_diving.product
		WHERE web_product_detail_diving.product = '".$_POST[program]."'";
		$rows = array();
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$rows[] = $row;
		//echo $row[product];

    	
	}
	if ($_POST[typepro] == 'golf') {
		$sql = "SELECT web_product_detail_diving.* FROM web_product_detail_diving 
		
		WHERE web_product_detail_diving.product = '".$_POST[program]."'";
		$rows = array();
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$rows[] = $row;
	}
	//echo $_POST[program];
	print json_encode($rows);
	$conn->close();
}
?>