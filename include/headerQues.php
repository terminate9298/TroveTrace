<?php
// start the session
session_start();
//getting name of current file
$currentPage = basename($_SERVER['SCRIPT_NAME']);
include("register_validation.inc.php");
include("login_validation.inc.php");
include("check.inc.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Puzzles | Trove Trace</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/easySlider1.5.js"></script>
<script type="text/javascript" charset="utf-8">
// <![CDATA[
$(document).ready(function(){
	$("#slider").easySlider({
		controlsBefore:	'<p id="controls">',
		controlsAfter:	'</p>',
		auto: true,
		continuous: true
	});
});
// ]]>
</script>
<?php include("include/cssScript.php"); ?>
 <?php if($currentPage == "contact_us.php") {
 include("include/contactScript.php");
 } ?>

</head>
<body>
<div class="main">
  <div class="header_block">
    <div class="resize">

	  <div class="title_page">
        <h1>You're just a <span class="blue">KEY AHEAD</span> to beat all</h1>
      </div>
	  </div>
  </div>
  <div class="menu">
    <div class="l_menu">
      <div class="r_menu">
        <ul>
          <li><a href="index.php" ><span>Trove Trace Home</span></a></li>
          <li><a href="http://aasf.iiitm.ac.in/?q=node/296" target="_blank"><span>Forum</span></a></li>
		   <li><a href="rank.php" ><span>Rank</span></a></li>
          <li><a href="logout.php"><span>Logout</span></a></li>

        </ul>
        <div class="clr"></div>
      </div>
    </div>
  </div>