<!-- Main file for 'Home Page' -->

<?php get_header(); ?>




<!--This is the carousel on the home page -->
<div class = "home">
	<?php 
	    echo do_shortcode("[metaslider id=5]"); 
	?>
</div>

<!-- These are the brand icons on the home page dent control carries -->
<div class = "container">
	<?php include 'includes/home/desktop-brand-icons.php' ?>
	<?php include 'includes/home/mobile-brand-icons.php' ?>
</div>

<!-- This is the light gray jumbotron on the home page, telling the reader "who we are" -->
	<?php include 'includes/home/light-gray-read-more.php' ?>
<div class = "container">

<!-- These are the links to all the other pages, displayed on a car background -->
	<?php include 'includes/home/links-section-desktop.php' ?>
	<?php include 'includes/home/links-section-mobile.php' ?>


<!-- This is the white jumbotron, directly after the car-background links section -->
	<?php include 'includes/home/second-light-gray-read-more.php' ?>
</div>

<!-- This is the jumbotron that takes you to the testimonials page -->
	<?php include 'includes/home/dark-gray-testimonials.php' ?>

<!--This is the form for requesting a quote -->
<div class = "container">
	<?php include 'includes/home/form.php' ?>
</div>





<?php get_footer(); ?>

