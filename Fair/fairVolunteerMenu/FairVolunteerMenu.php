<?php
include_once '../common/constants.php';

$title = 'Fair Volunteer Menu';
$CURRENT_PROCESS = "FairVolunteerMenu.php";
include_once "../common/FairHeader.php";

if (!isset($fairFactory)){
	$fairFactory = new FairFactory ();
}

$categories = $fairFactory->getLivestockCategories ();

?>
<h3>Fair Volunteer Page</h3>
<div id="FairVolunteerMenuDiv" class="menu-div">
	<ul id="FairVolunteerMenu" style>
		<li>Accounts
			<ul>
				<li><a href="../fairAccounts/FairAccountNew.php">Create New Account</a></li>
				<li><a href="../fairAccounts/FairAccountSearch.php">Search for Account</a></li>
			</ul>
		</li>
		<li><a href="../fairCategories/FairCategoriesAll.php">Categories</a>
			<ul>
<?php
foreach ( $categories as $category ) {
	$id = $category->getID ();
	$categoryName = $category->getCategoryName ();
	$displayPage = $category->getDisplayPage ();
	$href = "../fairCategories/FairCategory.php?categoryID=" . urlencode($id) . "&categoryName=" . urlencode($categoryName);
			echo "<li><a href=\"" . $href . "\">   " . $categoryName . " </a></li>";
}
?>
			</ul>
		</li>
	</ul>
	<!--  end of FairVolunteerMenu -->
</div>
<!--  end of FairVolunteerMenuDiv -->

<div id="FairDisplay" class="display-div">
<img src="<?php echo FAIR_IMAGE;?>" alt="Image of the Fair" /> 
</div>
<!--  end of FairVolunteerMenuDiv -->

<script type='text/javascript'
	src='../fairVolunteerMenu/js/FairVolunteerMenu.js'></script>
<script> initFairVolunteerMenu();</script>

<?php
// close out html if this is was the starting script
$CURRENT_PROCESS = "FairVolunteerMenu.php";
include "../common/FairFooter.php";
?>