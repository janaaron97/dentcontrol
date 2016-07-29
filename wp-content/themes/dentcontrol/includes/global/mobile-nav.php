
<nav class="navbar mobile navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">

				
				<button class = "toggle-button navbar-toggle" type="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>


					<a href="<?php echo home_url(); ?>">
					<img src = "<?php bloginfo('template_directory'); ?>/assets/images/logo.png" />
					</a>


		</div><!--end of navbar-header -->
	</div>
</nav>


<!-- Nav Menues in Slide-Over -->
<div class = "navigation">
	<?php
	            wp_nav_menu( array(
	                'menu'              => 'primary',
	                'theme_location'    => 'primary',
	                'depth'             => 2,
	                'container'         => 'div',
	                'container_class'   => 'collapse navbar-collapse',
	        'container_id'      => 'bs-example-navbar-collapse-1',
	                'menu_class'        => 'nav navbar-nav',
	                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	                'walker'            => new wp_bootstrap_navwalker())
	            );

	?>

	<button class = "toggle-button hide-toggle"><img class = "x" src = "<?php bloginfo('template_directory'); ?>/assets/images/x.png" /></button>

</div><!--end of .navigation -->


