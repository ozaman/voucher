<?php header ('Content-type: text/html; charset=utf-8');

  include("connect.php");


//header('Access-Control-Allow-Origin: *');
// Create connection

//$conn = new mysqli($servername, $username, $password, $dbname_chat);
// Check connection
  if ($_POST[sv] == 'th') {
    //$conn = new mysqli($servername, $username, $password, $dbname);
    $conn = new mysqli($servername, $username, $password, $dbname_chat);
}
else{
    $conn = new mysqli($servernameCN, $usernameCN, $passwordCN, $dbnameCN);
    $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
}


if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error);
}
else{
	$sql = ("SELECT * FROM message_data_store");
	$rows = array();
	$result = $conn->query($sql);

	if ($result->num_rows >= 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        $rows[] = $row;
	    }
	    print json_encode($rows);
	} else {
	    echo "0 results";
	}
	$conn->close();
}
?>