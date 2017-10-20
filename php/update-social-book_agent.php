<?php header ('Content-type: text/html; charset=utf-8');
include("connect.php");

$data = json_decode(file_get_contents('php://input'), true);
print_r($data);
// for ($a=0; $a < count($data)  ; $a++) {
//     //$sqlcol = "UPDATE web_book_agent_social SET web_guest_social = '".$data[$i][name]."' WHERE id = '".$data[$i][id]."'";
// echo $data[0][sv];
     

// }
// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($data[8][sv] == 'th') {
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
}
else{
    $conn = new mysqli($servernameCN, $usernameCN, $passwordCN, $dbnameCN);
    $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
}
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//print_r($data[0][id]);

$sql = "UPDATE web_book_agent_social SET web_guest_social = '".$data[0][name]."' WHERE id = '".$data[0][id]."'";
$sql = "UPDATE web_book_agent_social SET web_guest_social = '".$data[1][name]."' WHERE id = '".$data[1][id]."'" ;
$sql = "UPDATE web_book_agent_social SET web_guest_social = '".$data[2][name]."' WHERE id = '".$data[2][id]."'";
$sql = "UPDATE web_book_agent_social SET web_guest_social = '".$data[3][name]."' WHERE id = '".$data[3][id]."'";
$sql = "UPDATE web_book_agent_social SET web_guest_social = '".$data[4][name]."' WHERE id = '".$data[4][id]."'";
$sql = "UPDATE web_book_agent_social SET web_guest_social = '".$data[5][name]."' WHERE id = '".$data[5][id]."'";
$sql = "UPDATE web_book_agent_social SET web_guest_social = '".$data[6][name]."' WHERE id = '".$data[6][id]."'";

for ($i=0; $i < count($data)-1  ; $i++) {
	$sqlcol = "UPDATE web_book_agent_social SET web_guest_social = '".$data[$i][name]."' WHERE id = '".$data[$i][id]."'";

	 $result = $conn->query($sqlcol);

}
 //$rows = array();

if ($result) {
    echo "1 results";

    
} else {
    //echo $timestamp;
    echo "0 results";
}
$conn->close();
?>
?>