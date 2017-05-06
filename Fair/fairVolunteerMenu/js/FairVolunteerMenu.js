/************************************************************************/
/*                                                                      */
/*  FairVolunteerMenu.js                                                     */
/*                                                                      */
/************************************************************************/

function initFairVolunteerMenu(){
	//alert("initFairVolunteerMenu");
	//initials the 
	$("#FairVolunteerMenu").menu();
	
	//Since we are in the menu, FairDisplay div should
	//exist. Reload any hrefs from the menu to FairDisplay
	$("#FairVolunteerMenuDiv").on("click", "a", function (e) {
        e.preventDefault();
        $('#FairDisplay').empty();
        $("#FairDisplay").load($(this).attr("href"));
	});
 
	
	
}


//
// Helper Functions
//