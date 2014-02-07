<div class="single-sidebar">
	 <a href="http://annenberg.usc.edu/AboutUs/Awards/SeldenRing.aspx" target="_blank"><img class="single-sidebar-ad" src="<?php echo home_url(); ?>/wp-content/themes/AJR-theme/images/SeldenRing2014.png" alt="baseball ad"></a>
	 <hr class="sidebar-divider">
	 <?php editors_picks(); ?>	
	 <hr class="sidebar-divider">
	 <?php more_in_category(); ?>
	 <hr class="sidebar-divider">
	 <?php if (in_category('32')) { ?>
	 	<div class="single-sidebar-meet-our-bloggers"><?php meet_our_bloggers(); ?></div>
	<?php } else { /**/ } ?>
</div> 