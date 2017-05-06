<?php



// WHERE IS THE LOGFILE - ENVIROMENT CHANGE
if (! defined ( 'WEB_ROOT' ))	define ( 'WEB_ROOT', "http://localhost:85");
	//
// WHERE TO FIND THE AJAX LIBRARY
// WHERE TO FIND THE AJAX LIBRARY
if (! defined ( '_AJAX_LIBRARY' ))	define ( '_AJAX_LIBRARY', "http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" );

if (! defined ( '_WIDGETS_LIBRARY' ))	define ( '_WIDGETS_LIBRARY', WEB_ROOT . "/resources/jquery-ui-1.11.4.custom/jquery-ui.js");
if (! defined ( '_THEME_CSS' ))	define ( '_THEME_CSS', WEB_ROOT . "/resources/jquery-ui-1.11.4.custom/jquery-ui.min.css" );

//plupload libraries
if (! defined ( '_MOXIE_LIBRARY' ))	define ( '_MOXIE_LIBRARY', "../resources/plupload-2.1.8/js/moxie.js" );

if (! defined ( '_PLUPLOAD_LIBRARY' ))	define ( '_PLUPLOAD_LIBRARY', "../resources/plupload-2.1.8/js/plupload.full.min.js" );

//fpdf library
if (! defined ( '_FPDF_LIBRARY' ))	define ( '_FPDF_LIBRARY', "../resources/fpdf.php" );

if (! defined ( 'LOGIN_PAGE' ))	define ( 'LOGIN_PAGE', "../login/FairLogin.php" );
if (! defined ( 'FAIR_IMAGE' ))	define ( 'FAIR_IMAGE', WEB_ROOT . "/fair/images/FairImage.JPG" );

//TEMPLATE CLASS TYPES
//KEEP IN SYNCH WITH ../js/common.js


//DIRECTORY FOR PLACING UPLOADED FILES	- ENVIROMENT CHANGE

//LETTER FORMAT CONSTANTS
if (! defined ( 'TOP_MARGIN' ))	         define ( 'TOP_MARGIN', 10);
if (! defined ( 'PAGE_WIDTH' ))	         define ( 'PAGE_WIDTH', 215);

if (! defined ( 'HEADER_FONT' ))	     define ( 'HEADER_FONT', 'Times');
if (! defined ( 'HEADER_FONT_SIZE' ))	 define ( 'HEADER_FONT_SIZE', 9);
if (! defined ( 'HEADER_FONT_HEIGHT' ))	 define ( 'HEADER_FONT_HEIGHT', 3);
if (! defined ( 'HEADER_FONT_WIDTH' ))   define ( 'HEADER_FONT_WIDTH', 2);
if (! defined ( 'HEADER_FONT_STYLE' ))	 define ( 'HEADER_FONT_STYLE', '');
if (! defined ( 'HEADER_LEFT_MARGIN' ))	 define ( 'HEADER_LEFT_MARGIN', 10);
if (! defined ( 'HEADER_RIGHT_MARGIN' )) define ( 'HEADER_RIGHT_MARGIN', 10);

if (! defined ( 'BODY_FONT' ))	       define ( 'BODY_FONT', 'Times');
if (! defined ( 'BODY_FONT_SIZE' ))    define ( 'BODY_FONT_SIZE', 11);
if (! defined ( 'BODY_FONT_HEIGHT' ))  define ( 'BODY_FONT_HEIGHT', 4);
if (! defined ( 'BODY_FONT_WIDTH' ))   define ( 'BODY_FONT_WIDTH', 3);
if (! defined ( 'BODY_FONT_STYLE' ))   define ( 'BODY_FONT_STYLE', 'B');
if (! defined ( 'BODY_LEFT_MARGIN' ))  define ( 'BODY_LEFT_MARGIN', 20);
if (! defined ( 'BODY_RIGHT_MARGIN' )) define ( 'BODY_RIGHT_MARGIN', 10);


if (! defined ( 'FOOTER_FONT' ))	     define ( 'FOOTER_FONT', 'Times');
if (! defined ( 'FOOTER_FONT_SIZE' ))	 define ( 'FOOTER_FONT_SIZE', 9);
if (! defined ( 'FOOTER_FONT_HEIGHT' ))	 define ( 'FOOTER_FONT_HEIGHT', 3);
if (! defined ( 'FOOTER_FONT_STYLE' ))	 define ( 'FOOTER_FONT_STYLE', '');
if (! defined ( 'FOOTER_LEFT_MARGIN' ))	 define ( 'FOOTER_LEFT_MARGIN', 10);
if (! defined ( 'FOOTER_RIGHT_MARGIN' )) define ( 'FOOTER_RIGHT_MARGIN', 10);

//LETTER LOGO CONSTANTS') - ENVIROMENT CHANGE
if (! defined ( 'LOGO_TOP' ))	define ( 'LOGO_TOP',0);
if (! defined ( 'LOGO_WIDTH' ))	define ( 'LOGO_WIDTH',60);

//LETTER TEXT CONSTANTS
?>