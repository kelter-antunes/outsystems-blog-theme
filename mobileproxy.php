<?php
header( "Access-Control-Allow-Origin: *" );
session_start();

if ( $_GET['btnMobileProxy'] ) {setSessions();}

function setSessions() {

	$deviceWidth = $_GET['btnMobileProxy'];
	if ( $deviceWidth>767 ) {
		$_SESSION['IgnoreMobileDevice'] = true;
	}
	else {
		$_SESSION['IgnoreMobileDevice'] = false;
	}

	$_SESSION['IgnoreMobileDeviceCheck'] = true;

	header( "Location: ".$_SESSION['currentPageURL'] ); /* Redirect browser */

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" >
	<title>OutSystems mobileproxy</title>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
</head>
<body>

	<script>
	function sendWidthToServer() {
		var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;

		$('#btnMobileProxy').attr('onclick', 'location.href="?btnMobileProxy=' + width + '"');
		$('#btnMobileProxy').click();
	}

	$(document).ready(function() {
		sendWidthToServer()
	});
	</script>

	<div style="display:none;">
		<button id="btnMobileProxy" name="btnMobileProxy" onClick="location.href='#'">.</button>
	</div>

</body>
</html>
