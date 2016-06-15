<nav class="navbar desktop navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
			<div class = " col-md-4 vertical-center">
				<div class = "container">



					<button class = "toggle-button navbar-toggle" type="button">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>


					<p class = "navbar-brand toggle-button" id = "menu-link">MENU</p>

				</div>
			</div>

			<div class = "col-md-4 vertical-center">
				<div class = "container">
					<a href="<?php echo home_url(); ?>">
					<img src = "<?php bloginfo('template_directory'); ?>/assets/images/logo-for-site-outlined-notag.svg" />
					</a>

				</div>
			</div>

			<div class = "col-md-4 vertical-center" id = "contact-nav">
				<div class = "container align-right">
					<a href = "tel:1111111111">
						<p id = "call-today">CALL TODAY</p>
					</a>

					<a href = "tel:1111111111">
						<i class="fa fa-phone"></i>
					</a>

					<a href = "mailto:hey@dentrepair.com">
						<i class="fa fa-envelope"></i>
					</a>
				</div>
			</div>
		</div>
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

			

 </div>