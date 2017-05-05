<?php
//starts the session for the page
session_start();

//get the default language
if(!isset($_GET["lang"])){
$_GET["lang"]="fi";
}

//start the session for the navigation page the user is currently in.
if(isset($_GET["page"])){
	$_SESSION["page"]=$_GET["page"];
}else{
	$_SESSION["page"]="home";
}

?>