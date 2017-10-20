 
<?php
/*
$servername = "localhost";
$username = "testsystem_web";
$password = "testsystembooking!@#$";
$dbname = "admin_web";

*/

 


 
 
/*******************************/
/********** DB TEST ************/
/*******************************/
// $servername = "localhost";
// //$servername = "103.13.30.137";
// $username = "testsystem_web";
// $password = "testsystembooking!@#$";
// $dbname = "testsystem_web";

// $dbname_chat = "testsystem_chat";


/***********************************/
$servername = "localhost";
$username = "admin_MANbooking";
$password = "252631MANbooking";
$dbname = "admin_web";

$dbname_chat = "admin_chat";


/*******************************/
/**********SERVER CH************/
/*******************************/

/*******************************/
/********** DB TEST ************/
/*******************************/
//$servernameCN = "localhost";
// $servernameCN = "223.223.218.85";
// $usernameCN = "testsystem_web";
// $passwordCN = "testsystembooking!@#$";
// $dbnameCN = "testsystem_web";

/********************************/
$servernameCN = "223.223.218.85";
$usernameCN = "admin_MANbooking";
$passwordCN = "252631MANbooking";
$dbnameCN = "admin_web";




require_once("../includes/config.in.php");
require_once("../includes/class.mysql.php");
require_once("../includes/function.in.php");
$db = New DB();

?>