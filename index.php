<!DOCTYPE HTML>
<?php
$cookiename = "test_cookie";
setcookie($cookiename, "test", time() + 3600, '/');
?>
<html>
<head>
	<title>this is not a cookie free page</title>
	<link href="styles.css" rel="stylesheet" type="text/css" />
	<script src = "scripts.js"></script>
</head>
<body>

<!-- Create landing page -->
<div class = "header"">
	<h1 class = "heading-text hidden">Fake news? <br />Biased news? <br /> <strong>No.</strong></h1>
</div>

<?php 
	//set and print date
	date_default_timezone_set('America/New_York');
	$date = date('l \t\h\e jS \of F Y h:i:s A');
	echo "Login: $date <br />";

	//print $test_cookie details
	$cookie_name = "test_cookie";
	if(!isset($_COOKIE[$cookie_name])) {
		echo "Cookie named '" . $cookie_name . "' is not set!";
	} else {
		echo "Cookie '" . $cookie_name . "' is set!<br>";
		echo "Value is: " . $_COOKIE[$cookie_name] . "<br />";
	}	
	
	//check if cookies are active
	if(count($_COOKIE) > 0) {
		echo "Thank for having cookies on :)";
	} else {
		echo "Cookies are disabled. You will see this header every time you come to this page";
	}
	echo "<br />";

?>

</body>
</html>
