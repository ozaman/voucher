<?php
include("connect.php");
if ($_POST[sv] == 'th') {
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
}
else{
    $conn = new mysqli($servernameCN, $usernameCN, $passwordCN, $dbnameCN);
    $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
}
// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$idagent = $_POST[id];
 

$sql = "SELECT country.* ,tb_web_web_country.name_en,tb_web_web_country.name_th,tb_web_web_country.name_cn,tb_web_web_country.country_code  FROM web_country as tb_web_web_country 

LEFT JOIN country  ON tb_web_web_country.country_code = country.iso
WHERE country.iso <> ''
ORDER BY country.name ASC";
$rows = array();
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    print json_encode($rows);
} else {
    echo "0 results";
}
$conn->close();
?>