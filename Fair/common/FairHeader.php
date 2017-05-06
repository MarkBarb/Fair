<?php 
/***********************************************************/
/* FairHeader.php                                          */
/*                                                         */
/* FairHeader should be included once.                     */
/* See template/FairTemplate for usage.                    */
/* This php file forces a one time include of the common   */
/* files.  It also opens the html tag, opens and closes    */
/* the head tag. This assists in serving well formed       */
/* documents.                                              */
/*                                                         */
/***********************************************************/
?>
<!DOCTYPE html>
<html>
<head>
<?php
include_once '../common/constants.php';
include_once '../login/FairLoginFunctions.php';
include_once "../fairClasses/FairFactory.php";
include_once "../fairClasses/FairClasses.php";

// If php session not started, start one
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

//If we haven't logged in, write return information to session and go to login page
$requestingPage="";
if (!checkLogin()) {
	$location = "Location: " . LOGIN_PAGE;
	
	$requestingPage = $_SERVER[REQUEST_URI];
	$requestingPage ='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	$_SESSION ['REQUEST_PAGE'] = $requestingPage;
	
	$location = "Location: " . LOGIN_PAGE;
	header ( $location );
}

//Since PHP header is only included once,
//TOP_PROCESS should not be overwritten.
//CURRENT_PROCESS needs to be set before including header 
$TOP_PROCESS=$CURRENT_PROCESS;
if(!isset($title)){
    $title = "Polk County Fair";
}
?>
    <meta charset="ISO-8859-1">
    <title><?php echo $title; ?></title>
    <script type='text/javascript' src="<?php echo _AJAX_LIBRARY; ?>"></script>
    <script type='text/javascript' src="<?php echo _WIDGETS_LIBRARY; ?>"></script>
    <link href="<?php echo _THEME_CSS; ?>" rel="stylesheet" type="text/css" /> 
    <link href="<?php echo WEB_ROOT; ?>/fair/css/Fair.css"" rel="stylesheet" type="text/css" /> 
    
    <?php include_once "../common/FairJavascriptConstants.php";  ?>
    
</head>
<body>
