<?php


include_once '../common/constants.php';
include_once "../login/FairLoginFunctions.php";
include_once "../fairClasses/FairFactory.php";

// If php session not started, start one
if (session_status () == PHP_SESSION_NONE) {
	session_start ();
}
$nextRequest = "";
if (isset($_SESSION ['REQUEST_PAGE'])){
	$requestingPage = $_SESSION ['REQUEST_PAGE'];
}

if (checkLogin()) {
	$location = "Location: " . $requestingPage;
	header($location);
} 

// IF PERSISTANT CONNECTION EXISTS, GO TO THE FORWARD PAGE
// if (isset($_SESSION['CONNECTION'])){
// $msg = "Connect is set. Need to forward";
// }
// IF USERID,PASSWORD NOT NULL
$fairUser = "";
$fairPass = "";
$msg = "";
if (empty ( $_REQUEST ['FAIR_USER'] )) {
	$msg = $msg . " User is empty.";
} else {
	$fairUser = trim ( $_REQUEST ['FAIR_USER'] );
}


if (empty ( $_REQUEST ['FAIR_PASS'] )) {
	$msg = $msg . " Password is empty.";
} else {
	$fairPass = trim ( $_REQUEST ['FAIR_PASS'] );
}


$validated = false;
if (strlen ( $fairUser ) > 0 and strlen ( $fairPass) > 0) {
	if (attemptLogin ( $fairUser, $fairPass)) {
		echo "Attempt Successful";
		$msg = "Login was successful.";
		$validated = true;
		//create the fairFactory
		if (strlen ( $requestingPage) > 0) {
			echo "Going to $requestingPage";
			$location = "Location: " . $requestingPage;
			header ( $location );
		}
	} else {
		$msg = $msg . " Attempt to login failed.";
		$fairPass= "";
	}
} else {
	$msg = "Please enter your user id, password and press the Login Button.";
}
// NULL OUT PASSWORD FIELD

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<!-- AJAX LIBRARY DEFINED IN ENVIRONMENT FILE -->
<script type='text/javascript' src="<?php echo _AJAX_LIBRARY;?>"></script>
<link href="<?php echo _THEME_CSS; ?>" rel="stylesheet" type="text/css" />
 <link href="<?php echo WEB_ROOT; ?>/fair/css/Fair.css"" rel="stylesheet" type="text/css" /> 
   
<!-- DEFINED IN COMMON_PHP -->

<!-- COMMON JAVASCRIPT FUNCTIONS, MENU, TAB HANDLING STUFF -->
<title>FAIR Login</title>

</head>
<body>
	<form action="../login/FairLogin.php" method="post">
		<h3>FAIR LOG IN</h3>
		
<?php
//echo "<br><br> Next Request: $requestingPage<br><br>"; 
if ($validated) {
	echo "<h3>$msg</h3>";
} else {
	echo "<h3>$msg</h3>";
	//echo "<input type=\"hidden\" name=\"FAIR_NEXT_PAGE\" value=\"$pipelineNextPage\" >";
	echo "<table>";
	echo "	<tr><td colspan=\"2\"><input type=\"text\" name=\"FAIR_USER\" value=\"$fairUser\"></td></tr>";
	echo "	<tr><td colspan=\"2\"><input type=\"password\" name=\"FAIR_PASS\"></td></tr>";
	echo "	<tr><td><input type=\"submit\" value=\"Login\"> </td>";
	echo "		<td><input type=\"button\" value=\"Cancel\" onclick=\"cancel();\"></td>";
	echo "	</tr>";
	echo "</table>";
}
?>

	</form>

</body>