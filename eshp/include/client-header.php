<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pa">
<head>
<!-- link to the SqPaymentForm library 
<script type="text/javascript" src="https://js.squareupsandbox.com/v2/paymentform">
</script>-->
<style>
.btn{
background: #ff464a !important;
border-color:#ff464a !important;
}
#loginbox{
color:#fff;
z-index:999;}

</style>
<!-- link to the local custom styles for SqPaymentForm -->
<link rel="stylesheet" type="text/css" href="mysqpaymentform.css">

    <title>Home | DJ JagStar | Punjabi & Bollywood DJ</title>
	<meta name="keywords" content="DJ hire,DJ hire Ballarat,DJ hire Geelong,DJ hire Melbourne,Punjabi,Bhangra,Ballarat,Party,Bollywood,Dance,teeyan,mela,dj">
	<meta name="description" content="Looking to Party? Look no further !! Dj Jagstar is providing high quality service and equipment in Ballarat, Geelong and melbourne to rock your event.">
	<link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href='images/icon.png' rel='shortcut icon' sizes="32 x 32" />    
    <link rel='stylesheet' href='css/style.css'>
	<link rel='stylesheet' href='css/stylefonts.css'>
	<link rel='stylesheet' media="screen and (max-width: 375px)" href='css/iphoneWidth375.css'>
	<link rel='stylesheet' href='css/responsive.css'>
	  <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<style>
</style>
</head>
<body > 
    <header><a id="logo_link" href="client-panel.php" onmouseover="playAudio();" onmouseout="pauseAudio()"><figure class="swap-on-hover">
					<img  class="swap-on-hover__front-image" src="images/logo/logo.png" />
					<img  class="swap-on-hover__back-image" src="images/logo/logohover.png"/></figure></a></header>
        <nav class="topnav" id="myTopnav">
		<div>
				<a href="client-panel.php" class="active"><i class="fa fa-home">&nbsp;&nbsp;</i>Home</a>
				<a href="clientpackage.php"><i class="fas fa-briefcase">&nbsp;&nbsp;</i>Your Packages</a>
				<a href="cfaq.php" ><i class="fas fa-question">&nbsp;&nbsp;</i>FAQ</a>
				<a id="" href="paymenthistory.php"><i class="fas fa-book">&nbsp;&nbsp;</i>Payment History</a>
				<a id="" href="cpassword.php"><i class="fas fa-key">&nbsp;&nbsp;</i>Password Settings</a>
				<a id="" href="cdetail.php"><i class="fas fa fa-unlock-alt">&nbsp;&nbsp;</i>Account Settings</a>
					<a href="logout.php" ><i class="fas fa-user">&nbsp;&nbsp;</i>Logout</a>
	
  
	</div>
		<script>
function myFunction() { var x = document.getElementById("myTopnav");
  if (x.className === "topnav") { x.className += " responsive";  } else { x.className = "topnav";  }}</script>
	</nav>	