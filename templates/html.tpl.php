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
	<link rel="stylesheet" href="http://brand.unimelb.edu.au/web-templates/EDGE/css/complete.css">  
	<script src="http://brand.unimelb.edu.au/web-templates/EDGE/js/complete.js"></script>
	<script src="http://brand.unimelb.edu.au/global-header/js/injection.js"></script>
	<!-- /GLOBAL RESOURCES -->
	
	<?php 
		global $base_url;
	?>
	<link rel="stylesheet" href="<?php echo $base_url ?>/sites/all/themes/unitheme/css/custom.css" media="screen">
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
