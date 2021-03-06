<?php

/***********************************************************/
/* FairTemplate.php                                        */
/*                                                         */
/*                                                         */
/* This is a good place to start. Copy the template folder */
/* to a new directory with the appropriate name and get to */
/* work.                                                   */
/*                                                         */
/***********************************************************/

include_once '../common/constants.php';

//Change title and CURRENT_PROCESS for 
//the new page
$title='Fair Template';
$CURRENT_PROCESS = "FairTemplate.php";
// TOP_PROCESS is set to CURRENT_PROCESS
// in FairHeader.php.
// Since FairHeader is only included once
// TOP_PROCESS should not change.  
// FairHeader also opens the HTML and Body tags.
include_once "../common/FairHeader.php";
	
?>
<h3>Fair Template Page</h3>

<!-- Change the following for your particular page -->
<script type='text/javascript' src='../template/js/FairTemplate.js'></script>
<script> initTemplate();</script>

<?php
//FairFooter will close out the body and html tags
//if CURRENT_PROCESS matches TOP_PROCESS that was set in FairHeader.
$CURRENT_PROCESS = "FairTemplate.php";
include "../common/FairFooter.php";
?>