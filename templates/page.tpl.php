<div class="wrapper">
	<div class="header">
		<div class="hgroup">
			<h1><a href="<?php print $front_page; ?>"  title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></h1>
		</div>

		<?php if($is_front && $site_slogan): ?>
			<div id="headingtext">
				<p class="title col-1">Who we are</p>
				<p class="col-5"><?php print $site_slogan; ?></p>
				<hr/>
			</div>
		<?php endif; ?>

        <?php if(!$is_front && $page['content']): ?>
        	<hr/>
        <?php endif; ?>
	</div>
	<!-- end header -->

	<?php if($page['dropdown']): ?>
		<div class="col-8 dropdown">
			<?php print render($page['dropdown']); ?>
		</div>
		<!-- end dropdown -->
	<?php endif; ?>


	<!--------------------------------- Start different layouts ------------------------------->
	<?php $part_url = drupal_get_path_alias($_GET['q']); ?>
	
	<?php if($part_url == "admin"): ?>
		
		<!-- start admin or user login page -->
		<?php if($page['login']): ?>
			<?php print render($page['login']); ?>
		<?php endif; ?>
		<!-- End admin or user login page -->
		
	<?php elseif($part_url == "user"): ?>
		<?php print render($page['content']); ?>
	<?php elseif($is_front): ?>	
		
		<!-- Start home page -->
		<?php if($page['homepage1']): ?>
			<div id="newsbanner">
				<?php print render($page['homepage1']); ?>
			</div>
		<?php endif; ?>
	
		<?php if($page['homepage2']): ?>
			<div id="main-content" class="main col-6" role="main">
				<?php print render($page['homepage2']); ?>
			</div>
		<?php endif; ?>
		
		<div class="aside col-2">
			<?php print render($page['aside']); ?>
		</div>
		<!-- End home page -->
		
	<?php else: ?>
		
		<!-- Start normal page -->
		<?php if($page['content']): ?>	
			<div class="main col-6" id="main-content" role="main">
				<?php if($title): ?>
					<h1><?php print $title; ?></h1>
				<?php endif; ?>

				<?php print render($page['content']); ?>
			</div>
			
			<div class="aside col-2">
				<?php if($page['main_menu']): ?>
		  			<div class="nav first" role="navigation">
						<?php print render($main_menu_expanded); ?>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<!-- End normal page -->
		
	<?php endif; ?>	
	<!--------------------------------- End different layouts ------------------------------->		
	
	<hr/>
	
</div>
<!-- end wrapper -->

<hr>

<div class="footer">
	<div id="local" class="wrapper">
		<p class="footertitle"><?php echo $site_name ?></p>
		<div id="org-details" class="col-2">
			<p><strong>The Faculty of Bar</strong></p>
			<p class="location">Level 4, 198 Berkely Street <br> The University of Melbourne <br>Parkville 3010 VIC Australia</p>
		</div>

		<ul class="col-2">
			<li><strong>Phone:</strong> +61 3 8344 1670</li>
			<li><strong>Fax:</strong> +61 3 8344 1670</li>
			<li><strong>Email:</strong> <a href="#">Make an enquiry</a></li>
			<li class="social">
				<a href="#" class="icon facebook">Facebook</a>
				<a href="#" class="icon twitter">Twitter</a>
			</li>
		</ul>

		<ul class="col-2">
			<li><strong>Authoriser:</strong>
			<br>Communications Manager</li>
			<li><strong>Maintainer:</strong><br>
			Pat Doe, Faculty of Bar</li>
		</ul>

		<hr>
	</div>
	<!-- end wrapper -->
</div>
<!-- end footer -->
