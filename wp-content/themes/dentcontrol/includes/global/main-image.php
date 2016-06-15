<?php $splash_image = get_field('splash_image')!='' ?  get_field('splash_image') :  get_bloginfo('template_directory').'/assets/images/blue-car.png'; ?>
<div class = "jumbotron main-image interior-page-vertical-center" style="background: url('<?php echo $splash_image;?>');">
	<div class = 'container interior-page-black-box'>
		<h1 class = "photo-h1"><?php the_title(); ?></h1>
		<?php if(get_field('sub_title')!=undefined): ?>
		<center>
			<p class = "photo-p"><?php the_field('sub_title')?></p>
		</center>
		<?php endif; ?>
	</div>
</div>