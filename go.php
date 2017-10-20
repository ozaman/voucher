<?php @header ('Content-type: text/html; charset=utf-8'); 
@session_start();
require_once("mainfile.php");
$PHP_SELF = "go.php";
GETMODULE($_GET[name],$_GET[file]);
 
?>   
 <!-- Bootstrap 3.3.6 -->

 
 <?  include ("".$MODPATHFILE."");?>  
  