<?php
/**
 * @package     Joomla.OLS-templates
 * @subpackage  Templates.olslive
 *
 * @copyright   Copyright (C) 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$sitename = $app->get('sitename');
$params = $app->getTemplate(true)->params;

//Colors
$tmplMainColor = $this->params->get('tmplMainColor');
$bodyColor = $this->params->get('bodyColor'); 
$dominantTextcolor = $this->params->get('dominantTextcolor'); 

// top-nav colors
$caretColor = $this->params->get('caretColor');
$topNavScreenWideBgColor = $this->params->get('topNavScreenWideBgColor');//NOT USED
$topNavStaticColor = $this->params->get('topNavStaticColor'); 
$topNavStaticBgColor = $this->params->get('topNavStaticBgColor'); 
$topNavHoverAndFocusColor = $this->params->get('topNavHoverAndFocusColor'); 
$topNavHoverAndFocusBgColor = $this->params->get('topNavHoverAndFocusBgColor'); 
$topNavActiveColor = $this->params->get('topNavActiveColor'); 
$topNavActiveBgColor = $this->params->get('topNavActiveBgColor'); 
// top-nav, drop-down
$topNavDropDownStaticColor = $this->params->get('topNavDropDownStaticColor'); 
$topNavDropDownStaticBgColor = $this->params->get('topNavDropDownStaticBgColor'); 
$topNavDropDownStaticTriangleLeftBgColor = $this->params->get('topNavDropDownStaticTriangleLeftBgColor'); 
$topNavDropDownStaticTriangleRightBgColor = $this->params->get('topNavDropDownStaticTriangleRightBgColor'); 
$topNavDropDownHoverAndFocusColor = $this->params->get('topNavDropDownHoverAndFocusColor'); 
$topNavDropDownHoverAndFocusBgColor = $this->params->get('topNavDropDownHoverAndFocusBgColor'); 
$topNavDropDownActiveColor = $this->params->get('topNavDropDownActiveColor'); 
$topNavDropDownActiveBgColor = $this->params->get('topNavDropDownActiveBgColor'); 
$topNavDropDownOpenMenuStateColor = $this->params->get('topNavDropDownOpenMenuStateColor'); 
$topNavDropDownOpenMenuStateBgColor = $this->params->get('topNavDropDownOpenMenuStateBgColor'); 

// mob-nav colors
$mobNavStaticColor = $this->params->get('mobNavStaticColor'); 
$mobNavStaticBgColor = $this->params->get('mobNavStaticBgColor'); 
$mobNavHoverAndFocusColor = $this->params->get('mobNavHoverAndFocusColor'); 
$mobNavHoverAndFocusBgColor = $this->params->get('mobNavHoverAndFocusBgColor'); 
$mobNavActiveColor = $this->params->get('mobNavActiveColor'); 
$mobNavActiveBgColor = $this->params->get('mobNavActiveBgColor'); 
//mob-nav, sub-menu, colors 
$mobNavColor = $this->params->get('mobNavColor');//EXISTS!!!!!!!!!!!!!!Menu Button Title, not about internal ul of the menu when it opens/drops!
$mobNavSubMenuStaticColor = $this->params->get('mobNavSubMenuStaticColor'); 
$mobNavSubMenuStaticBgColor = $this->params->get('mobNavSubMenuStaticBgColor');
$mobNavSubMenuHoverColor = $this->params->get('mobNavSubMenuHoverColor'); //no need for focus, mostly in menu used!
$mobNavSubMenuHoverBgColor = $this->params->get('mobNavSubMenuHoverBgColor'); 
$mobNavSubMenuActiveColor = $this->params->get('mobNavSubMenuActiveColor'); 
$mobNavSubMenuActiveBgColor = $this->params->get('mobNavSubMenuActiveBgColor'); 
//mob-nav, sub-menu, root-button, colors 
$mobNavRootButtonColor = $this->params->get('mobNavRootButtonColor'); 
$mobNavRootButtonBgColor = $this->params->get('mobNavRootButtonBgColor'); 
$mobNavRootButtonBorderColor = $this->params->get('mobNavRootButtonBorderColor'); 
$mobNavRootButtonHoverFocusActiveColor = $this->params->get('mobNavRootButtonHoverFocusActiveColor'); 
$mobNavRootButtonHoverFocusActiveBgColor = $this->params->get('mobNavRootButtonHoverFocusActiveBgColor'); 
$mobNavRootButtonHoverFocusActiveBorderColor = $this->params->get('mobNavRootButtonHoverFocusActiveBorderColor'); 




  





$socialIconHoverColor = $this->params->get('socialIconHoverColor');//ok

$welcomeSectionColor = $this->params->get('welcomeSectionColor');

$srvLinkBtnColor = $this->params->get('srvLinkBtnColor');
$srvLinkBtnHoverColor = $this->params->get('srvLinkBtnHoverColor');
$srvLinkBtnHoverBgColor = $this->params->get('srvLinkBtnHoverBgColor');

$breadcrumbsActiveLinkColor = $this->params->get('breadcrumbsActiveLinkColor');
$breadcrumbsNonActiveLinkColor = $this->params->get('breadcrumbsNonActiveLinkColor');

$rColorIntegerA = $this->params->get('rColorIntegerA');
$gColorIntegerA = $this->params->get('gColorIntegerA');
$bColorIntegerA = $this->params->get('bColorIntegerA');

$rColorIntegerB = $this->params->get('rColorIntegerB');
$gColorIntegerB = $this->params->get('gColorIntegerB');
$bColorIntegerB = $this->params->get('bColorIntegerB');

$rColorIntegerC = $this->params->get('rColorIntegerC');
$gColorIntegerC = $this->params->get('gColorIntegerC');
$bColorIntegerC = $this->params->get('bColorIntegerC');

$srvLinkColor = $this->params->get('srvLinkColor'); 
$srvLinkHoverColor = $this->params->get('srvLinkHoverColor'); 

$carouselReadMoreBgColor = $this->params->get('carouselReadMoreBgColor');
$carouselReadMoreColor = $this->params->get('carouselReadMoreColor');
$carouselReadMoreHoverColor = $this->params->get('carouselReadMoreHoverColor');
$carouselReadMoreHoverBgColor = $this->params->get('carouselReadMoreHoverBgColor');

$opacity1 = $this->params->get('opacity1');
$opacity2 = $this->params->get('opacity2');
$opacity3 = $this->params->get('opacity3');
$opacity4 = $this->params->get('opacity4');
$opacity5 = $this->params->get('opacity5');
$opacity6 = $this->params->get('opacity6');
$opacity7 = $this->params->get('opacity7');//top_nav bg

//footer area
$footerLinkTextcolor = $this->params->get('footerLinkTextcolor');
$footerLinkIndicatorcolor = $this->params->get('footerLinkIndicatorcolor');
$footerLinkTextHovercolor = $this->params->get('footerLinkTextHovercolor');
$footerH3Color = $this->params->get('footerH3Color');
$footerCopyrightTextColor = $this->params->get('footerCopyrightTextColor');
$footerCopyrightBgColor = $this->params->get('footerCopyrightBgColor');
$footerCopyrightText = htmlspecialchars($this->params->get('footerCopyrightText', ''));

//anim codes
$logoWowAnim = htmlspecialchars($this->params->get('logoWowAnim', ''));
$searchAndSocialWowAnim = htmlspecialchars($this->params->get('searchAndSocialWowAnim', ''));
$footerWowAnim = htmlspecialchars($this->params->get('footerWowAnim', '')); 
$homepgIntroWelcomeWowAnim = htmlspecialchars($this->params->get('homepgIntroWelcomeWowAnim', ''));
$srvSectionWowAnim = htmlspecialchars($this->params->get('srvSectionWowAnim', ''));
$testimonialsSectionWowAnim = htmlspecialchars($this->params->get('testimonialsSectionWowAnim', ''));

//notes
$advMsgPA = htmlspecialchars($this->params->get('advMsgPA', ''));//Free Consultation
$advMsgPB = htmlspecialchars($this->params->get('advMsgPB', ''));//Tel. number.

//if publish
$ifCarouselPublish = htmlspecialchars($this->params->get('ifCarouselPublish', ''));
$ifWelcomeIntroPublish = htmlspecialchars($this->params->get('ifWelcomeIntroPublish', '')); 
$ifTestimonialsPublish = htmlspecialchars($this->params->get('ifTestimonialsPublish', ''));
$ifFooterPublish = htmlspecialchars($this->params->get('ifFooterPublish', ''));

//cycle slider
$cycleSliderTimeout = htmlspecialchars($this->params->get('cycleSliderTimeout', '0'));
$testimonialsCycleSliderTimeout = htmlspecialchars($this->params->get('testimonialsCycleSliderTimeout', '0'));

//cycle slider slides
$slide1h1 = htmlspecialchars($this->params->get('slide1h1', ''));
$slide1p = htmlspecialchars($this->params->get('slide1p', ''));
$slide1a = htmlspecialchars($this->params->get('slide1a', '#'));
$slide2h1 = htmlspecialchars($this->params->get('slide2h1', ''));
$slide2p = htmlspecialchars($this->params->get('slide2p', ''));
$slide2a = htmlspecialchars($this->params->get('slide2a', '#'));
$slide3h1 = htmlspecialchars($this->params->get('slide3h1', ''));
$slide3p = htmlspecialchars($this->params->get('slide3p', ''));
$slide3a = htmlspecialchars($this->params->get('slide3a', '#'));
$slide4h1 = htmlspecialchars($this->params->get('slide4h1', ''));
$slide4p = htmlspecialchars($this->params->get('slide4p', ''));
$slide4a = htmlspecialchars($this->params->get('slide4a', '#'));
$slide5h1 = htmlspecialchars($this->params->get('slide5h1', ''));
$slide5p = htmlspecialchars($this->params->get('slide5p', ''));
$slide5a = htmlspecialchars($this->params->get('slide5a', '#'));
$slide6h1 = htmlspecialchars($this->params->get('slide6h1', ''));
$slide6p = htmlspecialchars($this->params->get('slide6p', ''));
$slide6a = htmlspecialchars($this->params->get('slide6a', '#'));

//Cycle slider slide background images
$slide1bgimg = $this->params->get('slide1bgimg', '');
$slide2bgimg = $this->params->get('slide2bgimg', '');
$slide3bgimg = $this->params->get('slide3bgimg', '');
$slide4bgimg = $this->params->get('slide4bgimg', '');
$slide5bgimg = $this->params->get('slide5bgimg', '');
$slide6bgimg = $this->params->get('slide6bgimg', '');
$testimonialBgImg = $this->params->get('testimonialBgImg', '');

//logo img
$canadaLeafImage = $this->params->get('canadaLeafImage', '');

//testimonial cycle slider
$story1 = htmlspecialchars($this->params->get('story1', ''));
$writer1 = htmlspecialchars($this->params->get('writer1', ''));
$story2 = htmlspecialchars($this->params->get('story2', ''));
$writer2 = htmlspecialchars($this->params->get('writer2', ''));
$story3 = htmlspecialchars($this->params->get('story3', ''));
$writer3 = htmlspecialchars($this->params->get('writer3', ''));
$story4 = htmlspecialchars($this->params->get('story4', ''));
$writer4 = htmlspecialchars($this->params->get('writer4', ''));
$story5 = htmlspecialchars($this->params->get('story5', ''));
$writer5 = htmlspecialchars($this->params->get('writer5', ''));
$story6 = htmlspecialchars($this->params->get('story6', ''));
$writer6 = htmlspecialchars($this->params->get('writer6', ''));

//social icons:
$facebookSocial = htmlspecialchars($this->params->get('facebookSocial', ''));
$twitterSocial = htmlspecialchars($this->params->get('twitterSocial', ''));
$gplusSocial = htmlspecialchars($this->params->get('gplusSocial', ''));

//welcome - intro:
$introTitle = htmlspecialchars($this->params->get('introTitle', ''));
$introContent = htmlspecialchars($this->params->get('introContent', ''));

//img files
$logosmall='templates/'.$this->template.'/images/logo-small.png';//TODO: get from admin panel
$srvlogo='templates/'.$this->template.'/images/law-society-upper-canada.png';	//TODO: get from admin panel

//css
$localtplcss = 'templates/'.$this->template.'/css/template.css';
$animate = 'templates/'.$this->template.'/css/animate.min.css';
$bootstrapmin = 'templates/'.$this->template.'/css/bootstrap.min.css';
$fontawesomemin = 'templates/'.$this->template.'/css/font-awesome.min.css';

//js
$jsanim = 'templates/'.$this->template.'/js/wow.min.js';
$jscycleslider = 'templates/'.$this->template.'/js/jquery.cycle2.min.js';
$jsbootstrapmin = 'templates/'.$this->template.'/js/bootstrap.min.js';
$jsjqmin = 'templates/'.$this->template.'/js/jquery.min.js';
$jseasing = 'templates/'.$this->template.'/js/jquery.easing.min.js';	

if(strlen($canadaLeafImage)>0)
	$leafImg = $canadaLeafImage;
else
	$leafImg = "templates/" . $this->template . "/images/canada-flag-oraclelegalservices.ca.png";

// Logo file or site title param
if ($this->params->get('logoFile'))
{
	$logo = '<img src="' . JUri::root() . $this->params->get('logoFile') . '" alt="' . $sitename . '" />';
}
elseif ($this->params->get('sitetitle'))
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . htmlspecialchars($this->params->get('sitetitle')) . '</span>';
}
else
{

	$logo = '<a href="' . JURI::base() . '">';
	$logo .= '<div class="awesomelogo">';
	$logo .= '<img class="leaflogo" alt="'.$sitename.' Logo" src="'.$leafImg.'"/>';
	$logo .= '<span class="nameoflogo">' . $sitename . '</span>';
	$logo .= '<span class="tikoflogo"><i class="fa fa-check"></i></span>';
	$logo .= '<span class="olsoflogo">OLS</span>';
	$logo .= '<span class="fagavel"><i class="fa fa-gavel"></i></span>';
	$logo .= '<span class="fanavicon"><i class="fa fa-navicon"></i></span>';
	$logo .= '</div></a>';
}

$logoAndSearchMarginBottom = '';
if (!(strlen($gplusSocial)>0 || strlen($twitterSocial)>0 || strlen($facebookSocial)>0)){
	$logoAndSearchMarginBottom = "main-header";
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<jdoc:include type="head" />	

	<link href='http://fonts.googleapis.com/css?family=Lato|Merriweather+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo $fontawesomemin;?>">
	<link rel="stylesheet" href="<?php echo $bootstrapmin;?>">
	<link rel="stylesheet" href="<?php echo $animate;?>">
	<link rel="stylesheet" href="<?php echo $localtplcss;?>">

	<!-- color styles -->
	<style type="text/css">
		.awesomelogo{
			color:<?php echo $tmplMainColor; ?>;
		}
		<!-- typography -->
		body, a, p, h1, h2, h3, h4, h5, h6{
			color:<?php echo $bodyColor; ?>;
		}
		<!-- top-nav -->
		#mod-search-searchword{
			border: 1px solid rgba(<?php echo $rColorIntegerA; ?>,<?php echo $gColorIntegerA; ?>,<?php echo $bColorIntegerA; ?>,<?php echo '0.'.$opacity2; ?>);
			
		}	

		nav div.container-fluid{
			background-color: <?php echo $topNavScreenWideBgColor;?>;
		}	

		.nav > li > a, .nav > li > a {
			color: <?php echo $topNavStaticColor;?>;
			background-color: <?php echo $topNavStaticBgColor;?>;
		}
		
		.nav > li > a:focus, .nav > li > a:hover {
			color: <?php echo $topNavHoverAndFocusColor;?>;
			background-color: <?php echo $topNavHoverAndFocusBgColor;?>;
		}	

		nav  li.active  a{
			color: <?php echo $topNavActiveColor;?>;
			background-color: <?php echo $topNavActiveBgColor;?>;	
		}
		
		<!-- top-nav, drop-down -->
		nav .nav-child li > a, nav.nav-child:hover > a {
			color: <?php echo $topNavDropDownStaticColor;?>;
		}
		
		nav ul.nav-child{
			background-color: <?php echo $topNavDropDownStaticBgColor;?>;
		}
		nav .nav-child:before {
			border-bottom: 6px solid <?php echo $topNavDropDownStaticTriangleLeftBgColor;?>;
		}
		nav .nav-child:after {
			border-bottom: 6px solid <?php echo $topNavDropDownStaticTriangleRightBgColor;?>;
		}

		nav .nav-child li > a:hover, nav .nav-child li > a:focus, nav .nav-child:hover > a {
			color: <?php echo $topNavDropDownHoverAndFocusColor;?>;
			background-color: <?php echo $topNavDropDownHoverAndFocusBgColor;?>;
			
			text-decoration: none;	
			background-image: none;
			background-repeat: none;
		}

		.hidenav .dropdown-menu > .active > a, .hidenav .dropdown-menu > .active > a:focus, .hidenav .dropdown-menu > .active > a:hover {
			color: <?php echo $topNavDropDownActiveColor;?>;
			background-color: <?php echo $topNavDropDownActiveBgColor;?>;

			text-decoration: none;
			outline: 0px none;
		}

		.nav .open > a, .nav .open > a:focus, .nav .open > a:hover {
			color: <?php echo $topNavDropDownOpenMenuStateColor;?>;	
			background-color: <?php echo $topNavDropDownOpenMenuStateBgColor;?>;
			<!-- border-color: #337AB7; /* in this prj, hidden width, color: no effect! */ -->
		}		
<!-- mob-nav go on -->		
		<!-- strange mob-nav setup -->
			.shownav ul.nav > li > a{
			color: <?php echo $mobNavStaticColor;?>;
			background-color: <?php echo $mobNavStaticBgColor;?>;
		}	
		.shownav .nav > li > a:hover, .shownav .nav > li > a:focus{
			color: <?php echo $mobNavHoverAndFocusColor;?>;
			background-color: <?php echo $mobNavHoverAndFocusBgColor;?>;
		}

		.shownav .dropdown-menu > .active > a, .shownav .dropdown-menu > .active > a:focus, .shownav .dropdown-menu > .active > a:hover {
			color: <?php echo $mobNavActiveColor;?>;
			background-color: <?php echo $mobNavActiveBgColor;?>;
			
			text-decoration: none;
			outline: 0px none;
		}

<!-- mob-nav go on -->		
		.caret{
			color: <?php echo $caretColor; ?>;
		}
		
		.hidenav nav{
			opacity: <?php echo '0.'.$opacity7; ?>;
		}	
		
		.hidenav .collapse ul.nav li a{
			border-left: 1px solid rgba(<?php echo $rColorIntegerA; ?>,<?php echo $gColorIntegerA; ?>,<?php echo $bColorIntegerA; ?>,<?php echo '0.'.$opacity1; ?>);
		}
<!-- mob-nav -->

		
		

<!-- mob-nav sub-menu -->
.shownav li.parent ul{
	background-color: <?php echo $mobNavSubMenuStaticBgColor; ?>;
}

.shownav li.parent ul li a{
	color: <?php echo $mobNavSubMenuStaticColor; ?>;
	
	text-decoration: none;
	display: block;
}

.shownav li.parent ul li:hover{
	background-color: <?php echo $mobNavSubMenuHoverBgColor; ?>;
}

.shownav li.parent ul li a:hover{
	color: <?php echo $mobNavSubMenuHoverColor; ?>;
}

.shownav li.parent li.active{
	background: <?php echo $mobNavSubMenuActiveBgColor; ?>;
}

.shownav li.parent li.active a{
	color: <?php echo $mobNavSubMenuActiveColor; ?>;
}
<!-- End - mob-nav sub-menu -->


		
	
		
		
	

	
<!-- mob-nav-root-button -->
		.shownav .btn-default {
			color: <?php echo $mobNavRootButtonColor; ?>;
			background-color: <?php echo $mobNavRootButtonBgColor; ?>;
			border-color: <?php echo $mobNavRootButtonBorderColor; ?>;
		}
		.shownav .btn-default:hover, .shownav .btn-default:focus, .shownav .btn-default:active {
			color: <?php echo $mobNavRootButtonHoverFocusActiveColor; ?>;
			background-color: <?php echo $mobNavRootButtonHoverFocusActiveBgColor; ?>;
			border-color: <?php echo $mobNavRootButtonHoverFocusActiveBorderColor; ?>;
		}		
<!-- End - nav -->












		.slide-content > p{
			color: <?php echo $dominantTextcolor; ?>;
			background-color: rgba(<?php echo $rColorIntegerA; ?>,<?php echo $gColorIntegerA; ?>,<?php echo $bColorIntegerA; ?>,<?php echo '0.'.$opacity4; ?>);
		}
		
		button span.ols-mob, .mob-btn-topmenu{
			color: <?php echo $mobNavColor; ?>;
		}		

		.slide-content a.areadmore{ 
			color: <?php echo $carouselReadMoreColor; ?>;
			background-color: <?php echo $carouselReadMoreBgColor; ?>;
		}

		.slide-content a.areadmore:hover{
			color: <?php echo $carouselReadMoreHoverColor; ?>;
			background-color: <?php echo $carouselReadMoreHoverBgColor; ?>;
		}		
		

		.awesomelogo{
			color: <?php echo $tmplMainColor; ?>;
		}
.





		.sicon{
			color: rgba(<?php echo $rColorIntegerA; ?>,<?php echo $gColorIntegerA; ?>,<?php echo $bColorIntegerA; ?>,<?php echo '0.'.$opacity1; ?>);
		}
	

		ul.isocials li a{
			color: <?php echo $tmplMainColor; ?>;
		}

		ul.isocials li a:hover{
			color: <?php echo $socialIconHoverColor; ?>;
		}

		.cycle-slideshow div.slide h1{
			color: <?php echo $dominantTextcolor; ?>;
			background-color: rgba(<?php echo $rColorIntegerA; ?>,<?php echo $gColorIntegerA; ?>,<?php echo $bColorIntegerA; ?>,<?php echo '0.'.$opacity4; ?>);  
		}

		.slide-header{
			background-color: rgba(<?php echo $rColorIntegerA; ?>,<?php echo $gColorIntegerA; ?>,<?php echo $bColorIntegerA; ?>,<?php echo '0.'.$opacity6; ?>);
		}

		.slider-star{
			color: <?php echo $tmplMainColor; ?>;
		}

	

		



		
		
		
		.slider-phone{
			color:<?php echo $dominantTextcolor; ?>;
		}

		.slider-phonenum{
			color: <?php echo $dominantTextcolor; ?>;
		}

		.slider-admsg{
			color: <?php echo $dominantTextcolor; ?>;
		}

		.slider-arrow{
			color: <?php echo $tmplMainColor; ?>;
		}
		
			

		.cycle-next a,
		.cycle-prev a{
			color: rgba(<?php echo $rColorIntegerC; ?>,<?php echo $gColorIntegerC; ?>,<?php echo $bColorIntegerC; ?>,<?php echo '0.'.$opacity5; ?>);
		}

		.cycle-next a:hover,
		.cycle-prev a:hover{
			color:<?php echo $dominantTextcolor; ?>;
		}

		.welcome a{
			color: <?php echo $tmplMainColor; ?>;
		}
	
		.welcome h2, p{
			color: <?php echo $welcomeSectionColor; ?>;
		}

		.srv-links{
			color: <?php echo $welcomeSectionColor; ?>;
			border-color:rgba(<?php echo $rColorIntegerB; ?>,<?php echo $gColorIntegerB; ?>,<?php echo $bColorIntegerB; ?>,<?php echo '0.'.$opacity2; ?>);
		}

		.srv-links .btn-default{
			color: <?php echo $srvLinkBtnColor; ?>;
		}
		
		.srv-links .btn-default:hover{
			color: <?php echo $srvLinkBtnHoverColor; ?>;
			background-color: <?php echo $srvLinkBtnHoverBgColor; ?>;
		}		
	
		.srv-name a{
			color: <?php echo $srvLinkColor; ?>;
		}		

		.srv-name a:hover{
			color: <?php echo $srvLinkHoverColor; ?>;
		}

		.srv-links > h3 > span{
			border-bottom:1px solid rgba(<?php echo $rColorIntegerA; ?>,<?php echo $gColorIntegerA; ?>,<?php echo $bColorIntegerA; ?>,<?php echo '0.'.$opacity3; ?>);
		}

		.tmonial h3{
			color: <?php echo $dominantTextcolor; ?>;
			background-color: rgba(<?php echo $rColorIntegerA; ?>,<?php echo $gColorIntegerA; ?>,<?php echo $bColorIntegerA; ?>,<?php echo '0.'.$opacity4; ?>);
		}

		.tmonial p, .tmonial footer{
		color:<?php echo $dominantTextcolor; ?>;
		}

		.main-footer{
		background-color: <?php echo $footerBgColor; ?>;
		}

		.main-footer a{
			color: <?php echo $footerLinkTextcolor; ?>;
		}

		.main-footer a:hover{
		color: <?php echo $footerLinkTextHovercolor; ?>;
		}

		.footer-link-indicator-sign{
			color: <?php echo $footerLinkIndicatorcolor; ?>;
		}

		.footer-link-indicator-sign:hover{
			color: <?php echo $footerLinkTextHovercolor; ?>;
		}
		
		.main-footer h1, .main-footer h2, .main-footer h3, .main-footer h4, .main-footer h5, .main-footer h6{
			color: <?php echo $footerH3Color; ?>;
		}

		.main-footer p{
			color: <?php echo $footerLinkTextcolor; ?>;
		}

		.copyright, .copyright p{
			color: <?php echo $footerCopyrightTextColor; ?>;
			background-color: <?php echo $footerCopyrightBgColor; ?>;
		}

		@media (max-width: 710px) {
			.mediasm{
				color:<?php echo $dominantTextcolor; ?>;
			}
			.welcome h2{color: <?php echo $welcomeSectionColor; ?>;}

			ul.isocials li a{
				color: <?php echo $tmplMainColor; ?>;}
			}

			.rsearch{
				 
				border: 2px solid border-left: 1px solid rgba(<?php echo $rColorIntegerA; ?>,<?php echo $gColorIntegerA; ?>,<?php echo $bColorIntegerA; ?>,<?php echo '0.'.$opacity1; ?>);
				background: <?php echo $dominantTextcolor; ?>;
			}
		}



		@media (max-width: 767px) {
			.small-site-name{
			color: <?php echo $tmplMainColor; ?>;
			}
		}

		@media (max-width: 479px) {
			.smtop-ad-msg{
			color: <?php echo $tmplMainColor; ?>;
			border-color: rgba(<?php echo $rColorIntegerA; ?>,<?php echo $gColorIntegerA; ?>,<?php echo $bColorIntegerA; ?>,<?php echo '0.'.$opacity1; ?>);
			}
		}

		cite{
			color: <?php echo $dominantTextcolor; ?>;
		}
		
		<?php if(strlen($slide1bgimg)>0) : ?>
		#slide-1{
			background-image:  url(<?php echo JURI::base().$slide1bgimg;?>);
		}
		<?php endif;?>
		
		<?php if(strlen($slide2bgimg)>0) : ?>
		#slide-2{
			background:  url(<?php echo JURI::base().$slide2bgimg;?>) 0 0 no-repeat;
		}
		<?php endif;?>
		
		<?php if(strlen($slide3bgimg)>0) : ?>
		#slide-3{
			background:  url(<?php echo JURI::base().$slide3bgimg;?>) 0 0 no-repeat;
		}
		<?php endif;?>
		
		<?php if(strlen($slide4bgimg)>0) : ?>		
		#slide-4{
			background:  url(<?php echo JURI::base().$slide4bgimg;?>) 0 0 no-repeat;
		}
		<?php endif;?>
		
		<?php if(strlen($slide5bgimg)>0) : ?>
		#slide-5{
			background:  url(<?php echo JURI::base().$slide5bgimg;?>) 0 0 no-repeat;
		}
		<?php endif;?>
		
		<?php if(strlen($slide6bgimg)>0) : ?>		
		#slide-6{
			background:  url(<?php echo JURI::base().$slide6bgimg;?>) 0 0 no-repeat;
		}
		<?php endif;?>
		
		<?php if(strlen($testimonialBgImg)>0) : ?>		
		#tmonial-slider{
			background: url(<?php echo JURI::base().$testimonialBgImg;?>) 0 0 no-repeat;
		}
		<?php endif;?>
	.shownav li.parent > ul{
		background-color: <?php echo $mobNavSubMenuStaticBgColor;?>;
	
}		
		
		
	</style>
	
	<!-- End - color styles -->
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
	<?php if ($this->countModules('extra-navigation')) : ?> 
	<section class="container">
		<div class="row">
			<div class="col-lg-12">
				<jdoc:include type="modules" name="extra-navigation" style="html5" />
			</div>
		</div>	
	</section>
	<?php endif; ?>	
	
	<!-- nav section -->
	<?php if ($this->countModules('nav')) : ?> 
	<div class="hidenav"><!-- start desktop nav -->
			<nav class="navbar">
			  <div class="container-fluid evildiv">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsible-navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="collapsible-navbar">
					<jdoc:include type="modules" name="nav" style="none" />
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
	</div><!-- end desktop nav -->
	<?php endif; ?>	
	
	<?php if ($this->countModules('mob-nav')) : ?> 
	<div class="shownav"><!-- start mob-nav-->
		<div class="btn-group">
			<button type="button" class="btn btn-default dropdown-toggle btnme" data-toggle="dropdown" aria-expanded="false">
				<img src="<?php echo $logosmall; ?>" alt="Oracle Legal Services Logo"><span class="mob-btn-topmenu"><span class="ols-mob">Oracle Legal Services</span>Menu&nbsp;<span class="caret"></span></span>
			</button>			
			<jdoc:include type="modules" name="mob-nav" style="none" />
		</div>
	</div><!-- start mob-nav-->
	<!-- End - nav section -->
	<?php endif; ?>	
	
	
	<header class="<?php echo $logoAndSearchMarginBottom;?>">
		<div class="container">
			<div></div>
			<div class="smtop-ad-msg wow rotateInUpLeft"><p class="ols-topmost hide-temporary">Oracle Legal Services</p>Free consultation: <p>416-990-9299</p></div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs text-left <?php echo 'wow '.$logoWowAnim;?>"><?php echo $logo;?></div>
				<?php if ($this->countModules('search') || strlen($gplusSocial)>0 || strlen($twitterSocial)>0 || strlen($facebookSocial)>0) : ?>
				<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 <?php echo 'wow '.$searchAndSocialWowAnim;?>">
					<jdoc:include type="modules" name="search" style="html5" />
						<div>
							<ul class="isocials">
								<?php if (strlen($gplusSocial)>0) : ?>
								<li><a href="<?php echo $gplusSocial;?>" target="_blank"><i class="fa fa-google-plus-square"></i></a></li>
								<?php endif; ?>
								<?php if (strlen($twitterSocial)>0) : ?>
								<li><a href="<?php echo $twitterSocial;?>" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
								<?php endif; ?>
								<?php if (strlen($facebookSocial)>0) : ?>
								<li><a href="<?php echo $facebookSocial;?>" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
								<?php endif; ?>
							</ul>
						</div><!-- isocial div -->
				</div><!-- search & social -->
				<?php endif; ?> 
			</div>
		</div>	
	</header>
	
	<?php if ($this->countModules('extra-logo')) : ?>
	<section class="logo-module">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<jdoc:include type="modules" name="extra-logo" style="html5" />
				</div>
			</div>	
		</div>
	</section>	
	<?php endif; ?> 

	<!-- carousel / slider-->
	<?php if ($ifCarouselPublish) : ?>
	<section class="container">
		<div class="cycle-slideshow" data-cycle-timeout="<?php echo $cycleSliderTimeout;?>" data-cycle-slides="div.slide" id="home-slider">
			<div class="slide-header">
				<div class="mediabig">
					<i class="fa fa-certificate slider-star"></i><i class="fa fa-phone slider-phone"></i><span class="slider-phonenum"><?php echo $advMsgPB;?></span>
					<i class="fa fa-reply slider-arrow"></i><span class="slider-admsg"><?php echo $advMsgPA;?></span>
				</div>
				<div class="mediasm">
					<div class="onlyxs"><span class="xsadmsg"><?php echo $advMsgPA;?></span><span class="xsphone"><?php echo $advMsgPB;?></span></div>
				</div>
			</div>			
			<div class="cycle-prev">
				<a href="#"><i class="fa fa-chevron-circle-left"></i></a>
			</div>
			<div class="cycle-next">
				<a href="#"><i class="fa fa-chevron-circle-right"></i></a>
			</div>
			<?php if (strlen($slide1h1)>0 && strlen($slide1p)>0 && strlen($slide1a)>0) : ?>
			<div class="slide" id="slide-1">
				<header class="fancy-box fancy-half-transparent">
					<h1><?php echo $slide1h1;?></h1>
				</header>
				<div class="slide-content">
					<p><?php echo $slide1p;?></p>
					<p><a href="<?php echo JUri::root().$slide1a;?>" class="btn btn-primary areadmore">Read more</a></p>
				</div>
			</div><!-- slide -->
			<?php endif; ?>
			<?php if (strlen($slide2h1)>0 && strlen($slide2p)>0 && strlen($slide2a)>0) : ?>
			<div class="slide" id="slide-2">
				<header class="fancy-box fancy-half-transparent">
					<h1><?php echo $slide2h1;?></h1>
				</header>
				<div class="slide-content">
					<p><?php echo $slide2p;?></p>
					<p><a href="<?php echo JUri::root().$slide2a;?>" class="btn btn-primary areadmore">Read more</a></p>
				</div>
			</div><!-- slide -->
			<?php endif; ?>
			<?php if (strlen($slide3h1)>0 && strlen($slide3p)>0 && strlen($slide3a)>0) : ?>
			<div class="slide" id="slide-3">
				<header class="fancy-box fancy-half-transparent">
					<h1><?php echo $slide3h1;?></h1>
				</header>
				<div class="slide-content">
					<p><?php echo $slide3p;?></p>
					<p><a href="<?php echo JUri::root().$slide3a;?>" class="btn btn-primary areadmore">Read more</a></p>
				</div>
			</div><!-- slide -->
			<?php endif; ?>
			<?php if (strlen($slide4h1)>0 && strlen($slide4p)>0 && strlen($slide4a)>0) : ?>
			<div class="slide" id="slide-4">
				<header class="fancy-box fancy-half-transparent">
					<h1><?php echo $slide4h1;?></h1>
				</header>
				<div class="slide-content">
					<p><?php echo $slide4p;?></p>
					<p><a href="<?php echo JUri::root().$slide4a;?>" class="btn btn-primary areadmore">Read more</a></p>
				</div>
			</div><!-- slide -->
			<?php endif; ?>
			<?php if (strlen($slide5h1)>0 && strlen($slide5p)>0 && strlen($slide5a)>0) : ?>
			<div class="slide" id="slide-5">
				<header class="fancy-box fancy-half-transparent">
					<h1><?php echo $slide5h1;?></h1>
				</header>
				<div class="slide-content">
					<p><?php echo $slide5p;?></p>
					<p><a href="<?php echo JUri::root().$slide5a;?>" class="btn btn-primary areadmore">Read more</a></p>
				</div>
			</div><!-- slide -->
			<?php endif; ?>
			<?php if (strlen($slide6h1)>0 && strlen($slide6p)>0 && strlen($slide6a)>0) : ?>
			<div class="slide" id="slide-6">
				<header class="fancy-box fancy-half-transparent">
					<h1><?php echo $slide6h1;?></h1>
				</header>
				<div class="slide-content">
					<p><?php echo $slide6p;?></p>
					<p><a href="<?php echo JUri::root().$slide6a;?>" class="btn btn-primary areadmore">Read more</a></p>
				</div>
			</div><!-- slide -->
			<?php endif; ?>
		</div>
	</section><!-- End - carousel / slider-->
	<?php endif; ?>
	
	<?php if ($this->countModules('extra-header')) : ?>
	<section class="header-photos-module">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<jdoc:include type="modules" name="extra-header" style="html5" />
				</div>
			</div>	
		</div>
	</section>
	<?php endif; ?>	
	
	<?php if ($this->countModules('breadcrumbs')) : ?>
	<section class="main-breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-lg-12"><jdoc:include type="modules" name="breadcrumbs" style="html5" /></div>
			</div>
		</div>
	</section>
	<?php endif; ?> 
	
	<!-- Welcome section -->
	<?php if ($ifWelcomeIntroPublish) : ?>
	<section class="container srv-section">
		<div class="welcome <?php echo 'wow '.$homepgIntroWelcomeWowAnim;?>">
			<h2><?php echo $introTitle;?></h2>
			<p><?php echo $introContent;?></p>
		</div>
		<div class="srv-links <?php echo 'wow '.$srvSectionWowAnim;?>">
			<h3><span>Our Services</span></h3>
			<div class="row top-srv">
				<?php if (strlen($slide1a)>0 && strlen($slide1h1)>0) : ?>
				<div class="col-lg-4 col-md-4 text-center"><p class="srv-name"><a href="<?php echo JUri::root().$slide1a;?>"><?php echo $slide1h1;?></a></p><p><a href="<?php echo JUri::root().$slide1a;?>" class="btn btn-default">Read More</a></p></div>
				<?php endif; ?>
				<?php if (strlen($slide2a)>0 && strlen($slide2h1)>0) : ?>
				<div class="col-lg-4 col-md-4 text-center"><p class="srv-name"><a href="<?php echo JUri::root().$slide2a;?>"><?php echo $slide2h1;?></a></p><p><a href="<?php echo JUri::root().$slide2a;?>" class="btn btn-default">Read More</a></p></div>
				<?php endif; ?>
				<?php if (strlen($slide3a)>0 && strlen($slide3h1)>0) : ?>
				<div class="col-lg-4 col-md-4 text-center"><p class="srv-name"><a href="<?php echo JUri::root().$slide3a;?>"><?php echo $slide3h1;?></a></p><p><a href="<?php echo JUri::root().$slide3a;?>" class="btn btn-default">Read More</a></p></div>
				<?php endif; ?>
			</div>
			<div class="row btm-srv">
				<?php if (strlen($slide4a)>0 && strlen($slide4h1)>0) : ?>
				<div class="col-lg-4 col-md-4 text-center"><p class="srv-name"><a href="<?php echo JUri::root().$slide4a;?>"><?php echo $slide4h1;?></a></p><p><a href="<?php echo JUri::root().$slide4a;?>" class="btn btn-default">Read More</a></p></div>
				<?php endif; ?>
				<?php if (strlen($slide5a)>0 && strlen($slide5h1)>0) : ?>
				<div class="col-lg-4 col-md-4 text-center"><p class="srv-name"><a href="<?php echo JUri::root().$slide5a;?>"><?php echo $slide5h1;?></a></p><p><a href="<?php echo JUri::root().$slide5a;?>" class="btn btn-default">Read More</a></p></div>
				<?php endif; ?>
				<?php if (strlen($slide6a)>0 && strlen($slide6h1)>0) : ?>
				<div class="col-lg-4 col-md-4 text-center"><p class="srv-name"><a href="<?php echo JUri::root().$slide6a;?>"><?php echo $slide6h1;?></a></p><p><a href="<?php echo JUri::root().$slide6a;?>" class="btn btn-default">Read More</a></p></div>
				<?php endif; ?>
			</div>
			<div class="text-center"><img src="<?php echo $srvlogo; ?>" class="img-responsive img-thumbnail" alt="Law society of upper Canada"></div>
		</div>
	</section><!-- End - Welcome section -->
	<?php endif; ?>
	
	<?php if ($this->countModules('extra-intro')) : ?>
	<section class="entry-module">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<jdoc:include type="modules" name="extra-intro" style="html5" />
				</div>
			</div>	
		</div>
	</section>
	<?php endif; ?>

	<!-- Testimonial -->
	<?php if ($ifTestimonialsPublish) : ?>
	<section class="<?php echo 'wow '.$testimonialsSectionWowAnim;?>">
		<div class="container" id="tmonialdiv">
			<div class="cycle-slideshow" data-cycle-timeout="<?php echo $testimonialsCycleSliderTimeout;?>" data-cycle-slides="div.tmonial" id="tmonial-slider">
				<div class="cycle-prev">
					<a href="#"><i class="fa fa-chevron-circle-left"></i></a>
				</div>
				<div class="cycle-next">
					<a href="#"><i class="fa fa-chevron-circle-right"></i></a>
				</div>
				<div class="tmonial">
					<h3>Testimonial</h3>
					<p><?php echo $story1;?></p>
					<footer style="color:#fff;">-  <cite title="Source Title"><?php echo $writer1;?></cite></footer>
				</div><!-- testimonial -->
				<div class="tmonial"><?php echo $story;?><?php echo $writer;?>
					<h3>Testimonial</h3>
					<p><?php echo $story2;?></p>
					<footer style="color:#fff;">-  <cite title="Source Title"><?php echo $writer2;?></cite></footer>
				</div><!-- testimonial -->				
				<div class="tmonial">
					<h3>Testimonial</h3>
					<p><?php echo $story3;?></p>
					<footer style="color:#fff;">-  <cite title="Source Title"><?php echo $writer3;?></cite></footer>
				</div><!-- testimonial -->					
				<div class="tmonial">
					<h3>Testimonial</h3>
					<p><?php echo $story4;?></p>
					<footer style="color:#fff;">-  <cite title="Source Title"><?php echo $writer4;?></cite></footer>
				</div><!-- testimonial -->				
			</div>
		</div>
	</section><!-- End - Testimonial -->
	<?php endif; ?>
	
	<section class="main-content">
		<div class="container"> 
			<div class="row">
				<div class="col-lg-12">
					<jdoc:include type="message" />
					<jdoc:include type="component" />
				</div>
			</div>	
		</div>
	</section>

	<?php if ($this->countModules('after-content')) : ?>
	<section class="pre-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<jdoc:include type="modules" name="pre-content" style="html5" />
				</div>
			</div>	
		</div>
	</section>
	<?php endif; ?>
	
	<?php if ($ifFooterPublish) : ?>
	<footer class="<?php echo 'wow '.$footerWowAnim;?>">
		<div class="main-footer">
			<div class="container">
				<div class="row mf-top">
					<?php if ($this->countModules('footer-left-col')) : ?>
					<div class="col-lg-4 col-md-4 col-sm-4">
						<jdoc:include type="modules" name="footer-left-col" style="html5" />
					</div>
					<?php endif; ?>
					<?php if ($this->countModules('footer-middle-col')) : ?>
					<div class="col-lg-4 col-md-4 col-sm-4">
						<jdoc:include type="modules" name="footer-middle-col" style="html5" />
					</div>
					<?php endif; ?>
					<?php if ($this->countModules('footer-right-col')) : ?>
					<div class="col-lg-4 col-md-4 col-sm-4">
						<jdoc:include type="modules" name="footer-right-col" style="html5" />
					</div>
					<?php endif; ?>
				</div>			
			</div>
			<?php if ($this->countModules('copyright') || strlen($footerCopyrightText)>0) : ?>
			<div class="copyright">
					<jdoc:include type="modules" name="copyright" style="html5" />
					<?php echo '<p>'.$footerCopyrightText.'</p>';?>
			</div>
			<?php endif; ?>
		</div>
	</footer>
	<?php endif; ?>	
	
	<?php if ($this->countModules('after-footer')) : ?>
	<section class="after-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<jdoc:include type="modules" name="after-footer" style="html5" />
				</div>
			</div>	
		</div>
	</section>
	<?php endif; ?>	
	
	<script src="<?php echo $jsjqmin;?>"></script>	
	<script src="<?php echo $jsbootstrapmin;?>"></script>
	<script src="<?php echo $jseasing;?>"></script>
	<script src="<?php echo $jsanim;?>"></script>    
	<script src="<?php echo $jscycleslider;?>"></script>
	
	
	
	<script type="text/javascript">
	new WOW().init();
	jQuery(document).ready(function(){
			// dropdown
			jQuery('.hidenav .parent').addClass('dropdown');
			jQuery('.hidenav .parent > a').addClass('dropdown-toggle');
			jQuery('.hidenav .parent > a').attr('data-toggle', 'dropdown');
			jQuery('.hidenav .parent > a').attr('href','#');
			jQuery('.hidenav .parent > a').append('<span class="caret"></span>');
			jQuery('.hidenav .parent > ul').addClass('dropdown-menu');
			jQuery('.shownav .parent > a').attr('href','#');
		});
	</script>	
	<jdoc:include type="modules" name="debug" style="none" />
  </body>
</html>

