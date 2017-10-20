<?php header ('Content-type: text/html; charset=utf-8');
$servername = "localhost";
$username = "testsystem_web";
$password = "testsystembooking!@#$";
$dbname = "testsystem_web";
header('Access-Control-Allow-Origin: *');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$target_dir = "/fileUpload/";
$name = $_POST['lastname'];
     
     
     $target_file = $target_dir . basename($_POST["lastModified"]);

    move_uploaded_file($_POST['lastname']["tmp_name"], $target_file);

 echo $target_file;

$sql = "INSERT INTO web_flight_delay(voucher, flight_delay, flight_delay_date,guest_topoint_date) VALUES ('".$_POST[voucher]."','".$_POST[fdelay]."','".$_POST[fdate]."','".$_POST[g_topoint_date]."')";
$sql2 = "UPDATE web_order SET guest_topoint = 1 WHERE invoice = '".$_POST[voucher]."'";
$rows = array();
$result = $conn->query($sql);
$result2 = $conn->query($sql2);

if ($result) {
    echo "1 results";

    
} else {
    //echo $timestamp;
    echo "0 results";
}
$conn->close();
?>