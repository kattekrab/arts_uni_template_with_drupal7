<?php
// $Id: d7unimelb2011.info,v 1.0 2011/06/22 00:00:00 media insights Exp $

/*

generic variables:

$attributes_array
$title_attributes_array
$content_attributes_array
$classes_array
 Array of html class attribute values. It is flattened into a string within the variable $classes. 
$title_prefix
 An array containing additional output populated by modules, intended to be displayed in front of the main title tag that appears in the template.
$title_suffix
 An array containing additional output populated by modules, intended to be displayed after the main title tag that appears in the template.
$id
 The placement of the template. Each time the template is used, it is incremented by one.
$zebra
 Either "odd" or "even". Alternate each time the template is used.
$directory
 The theme path relative to the base install. example: "sites/all/themes/myTheme"
$is_admin
 Boolean returns TRUE when the visitor is a site administrator.
$is_front
 Boolean returns TRUE when viewing the front page of the site.
$logged_in
 Boolean returns TRUE when the visitor is a member of the site, logged in and authenticated.
$db_is_active
 Boolean returns TRUE when the database is active and running. This is only useful for theming in maintenance mode where the site may run into database problems.
$user
 The user object containing data for the current visitor. Some of the data contained here may not be safe. Be sure to pass potentially dangerous strings through check_plain. 

regions:

// regions[homepage1]    = Homepage1
// regions[homepage2]    = Homepage2
// regions[dropdown]    = Dropdown
// regions[help]        = Help
// regions[content]     = Content
// regions[navigation]  = Navigation
// regions[aside]  		= Aside

*/

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<!-- start Drupal head -->
	<?php print $head; ?>
	<title><?php print $head_title; ?></title>
	<?php print $styles; ?>
	<?php print $scripts; ?>

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- end Drupal head -->

	<!-- start Unimelb head -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	  
	<!-- SEO relevant meta data to describe content of page -->
	<meta name="DC.Title" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="DC.Description" content="">
	<!-- End SEO relevant meta data -->

	<!-- Authoriser and maintainer related meta data - developers, don't forget humans.txt   -->
	<meta name="DC.Creator" content="The University of Melbourne">
	<meta name="DC.Contributor" content="">
	<meta name="author" content="">
	<meta name="UM.Authoriser.Name" content="">
	<meta name="UM.Authoriser.Title" content="">
	<meta name="UM.Maintainer.Name" content="">
	<meta name="UM.Maintainer.Department" content="">
	<meta name="UM.Maintainer.Email" content="">
	<!-- End authoriser and maintainer meta data -->

	<!-- Static meta data   -->
	<meta name="DC.Rights" content="http://www.unimelb.edu.au/disclaimer">
	<meta name="DC.Publisher" content="The University of Melbourne">
	<meta name="DC.Format" content="text/html">
	<meta name="DC.Language" content="en">
	<meta name="DC.Identifier" content="http://www.unimelb.edu.au/">
	<!-- End static meta data -->
	
	<!-- Meta data to be autofilled -->
	<meta name="DC.Date" content="">
	<!--#config timefmt="%Y-%m-%d" --><meta name="DC.Date.Modified" content="<!--#echo var='LAST_MODIFIED' -->">
	<!-- End meta data to be autofilled -->

	<meta content="width=device-width; initial-scale=0.67;" name="viewport">
	
	<!-- GLOBAL RESOURCES -->
	<!-- DO NOT CHANGE -->  
	<link rel="stylesheet" href="http://brand.unimelb.edu.au/web-templates/1-0/css/complete.css">  
	<script src="http://brand.unimelb.edu.au/web-templates/1-0/js/complete.js"></script>
	<script src="http://brand.unimelb.edu.au/global-header/js/injection.js"></script>
	<!-- /GLOBAL RESOURCES -->
	
	<?php 
		global $base_url;
	?>
	<link rel="stylesheet" href="<?php echo $base_url ?>/sites/all/css/themes/uni-theme/custom.css" media="screen">
	<!-- end Unimelb head -->

</head>

<?php
	$body_class = "";
	if($is_front)
	{
		$body_class .= "headingblock no-logo home";
	}
	else
	{
		$body_class .= "no-logo blue";
	}
	
	$body_class .= $classes;
	
	if($attributes)
	{
		$body_attr = " ". $attributes;
	}
	else
	{
		$body_attr = "";
	}
?>

<body class="<?php echo $body_class ?>" <?php echo $body_attr ?> >
	<?php print $page_top; ?>
	<?php print $page; ?>
	<?php print $page_bottom; ?>
</body>
</html>
