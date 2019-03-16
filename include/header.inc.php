<?php 
// start the session
session_start();
//getting name of current file
$currentPage = basename($_SERVER['SCRIPT_NAME']);  

include("include/login_validation.php");
include("include/check.php");
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!--<SCRIPT language=JavaScript>
	var message = "function disabled"; 
	function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){ 	alert(message); return false; } 
	if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) { 	alert(message); 	return false; } } 
	document.onmousedown = rtclickcheck;
</SCRIPT>-->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Trove Trace</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="index.php">Home</a></li>
			<li><a href="#">Details</a></li>
			<li><a href="#">Help</a></li>
			<li><a href="#">Forum</a></li>
			<li><a href="#">Ranks</a></li>
			<li class="last"><a href="#">Contact</a></li>
		</ul>
	</div>
</div>
<div id="logo">
	<h1><a href="#">Trove Trace</a></h1>
	<h2>Find the hidden key...</h2>
</div>
<!-- end header -->
<hr />