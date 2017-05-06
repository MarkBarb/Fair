<?php


include_once '../common/constants.php';


$title='Create New Account';
$CURRENT_PROCESS = "FairAccountNew.php";
include_once "../common/FairHeader.php";
	
?>
<h3>Create New Account</h3>

<script type='text/javascript' src='../fairAccounts/js/FairAccountNew.js'></script>
<script> initFairAccountNew();</script>

<?php
//close out html if this is was the starting script
$CURRENT_PROCESS = "FairAccountNew.php";
include "../common/FairFooter.php";
?>