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
$CURRENT_PROCESS = "FairCategory.php";
// TOP_PROCESS is set to CURRENT_PROCESS
// in FairHeader.php.
// Since FairHeader is only included once
// TOP_PROCESS should not change.  
// FairHeader also opens the HTML and Body tags.
include_once "../common/FairHeader.php";
//Make sure we have a factory


if (!isset($fairFactory)){
	$fairFactory = new FairFactory ();
}
//Make sure id and name are set

if (!isset($id)){
	if (isset($_REQUEST ['categoryID'])){
		$id = $_REQUEST ['categoryID'];
	}
	else{
		$id="Unknown";
	}
}

if (!isset($categoryName)){
	if (isset($_REQUEST ['categoryName'])){
		$categoryName= $_REQUEST ['categoryName'];
	}
	else{
		$categoryName="Unknown";
	}
}

?>
<h3><?php echo "id: $id category: $categoryName";?></h3>

<!-- Change the following for your particular page -->
<script type='text/javascript' src='../FairCategories/js/FairCategory.js'></script>
<script> initFairCategory();</script>


<?php
//FairFooter will close out the body and html tags
//if CURRENT_PROCESS matches TOP_PROCESS that was set in FairHeader.
$CURRENT_PROCESS = "FairCategory.php";
include "../common/FairFooter.php";
?>