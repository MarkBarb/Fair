<?php

/***********************************************************/
/* FairCategoriesAll.php */
/* */
/* */
/* This is a good place to start. Copy the template folder */
/* to a new directory with the appropriate name and get to */
/* work. */
/* */
/**
 * ********************************************************
 */
include_once '../common/constants.php';

// Change title and CURRENT_PROCESS for
// the new page
$title = 'Fair Categories';
$CURRENT_PROCESS = "FairCategoriesAll.php";
// TOP_PROCESS is set to CURRENT_PROCESS
// in FairHeader.php.
// Since FairHeader is only included once
// TOP_PROCESS should not change.
// FairHeader also opens the HTML and Body tags.
include_once "../common/FairHeader.php";

$fairFactory = new FairFactory ();
$categories = $fairFactory->getLivestockCategories ();
?>
<h3>Fair All Categories Page</h3>
<div id="FairCategoriesAllControlDiv">
<h3> FairCategoriesAllControlDiv </h3>
<br>
</div> <!--  end of FairCategoriesAllControlDiv -->

<div id="FairCategoriesAllDisplay">
	<div id="FairCategoriesTab">
		<ul>
<?php
foreach ( $categories as $category ) {
	$categoryName = $category->getCategoryName ();
	$displayPage = $category->getDisplayPage ();
	echo "<li><a href=\"#" . $categoryName . "\">  " . $categoryName . " </a></li>";
}
?>
		</ul>
		<ul>
<?php
foreach ( $categories as $category ) {
	$categoryName = $category->getCategoryName ();
	$id = $category->getID ();
	$displayPage = $category->getDisplayPage () ;
	echo "<div id=\"" . $categoryName . "\"> <p>";
	include $displayPage;
	echo "</p></div>";
	
}
?>
	
	</ul>
	</div>
</div>

<!-- Change the following for your particular page -->
<script type='text/javascript' src='../fairCategories/js/FairCategoriesAll.js'></script>
<script> initFairCategoriesAll();</script>

<?php
// FairFooter will close out the body and html tags
// if CURRENT_PROCESS matches TOP_PROCESS that was set in FairHeader.
$CURRENT_PROCESS = "FairCategoriesAll.php";
include "../common/FairFooter.php";
?>