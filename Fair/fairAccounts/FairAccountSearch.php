<?php


include_once '../common/constants.php';


$title='Search For Account';
$CURRENT_PROCESS = "FairAccountSearch.php";
include_once "../common/FairHeader.php";
	
?>
<h3>Search For Account</h3>

<script type='text/javascript' src='../fairAccounts/js/FairAccountSearch.js'></script>
<script> initFairAccountSearch();</script>

<?php
//close out html if this is was the starting script
$CURRENT_PROCESS = "FairAccountSearch.php";
include "../common/FairFooter.php";
?>