<?php


include_once '../common/constants.php';


$title='Fair Template';
$CURRENT_PROCESS = "FairTemplate.php";
include_once "../common/FairHeader.php";
	
?>
<h3>Fair Template Page</h3>
<script type='text/javascript' src='../common/js/FairTemplate.js'></script>
<script> initTemplate();</script>

<?php
//close out html if this is was the starting script
$CURRENT_PROCESS = "FairTemplate.php";
include "../common/FairFooter.php";
?>