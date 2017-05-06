<?php
include_once "../fairClasses/FairFactory.php";

// *****************************************************
// * checks to see if user can log in to the database
// * with supplied with supplied credentials.
// *****************************************************
function attemptLogin($username, $password) {
	
	// If php session not started, start one
	if (session_status () == PHP_SESSION_NONE) {
		session_start ();
	}
	
	$_SESSION ['VERIFIED'] = "true";
	$_SESSION ['USER'] = $username;
	
	//build the factory and write it to the session
	//$fairFactory = new FairFactory ();
	//$_SESSION ['FAIR_FACTORY'] = $fairFactory;
	return true;
}

// *******************************************
// * checks to see if user has already logged in
// *******************************************
function checkLogin() {
	
	if (isset ( $_SESSION ['VERIFIED'] )) {
		return true;
	} else {;
		return false;
	}
	return false;
}

?>