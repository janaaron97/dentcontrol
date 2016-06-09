<!-- Main file for 'Home Page' -->

<?php get_header(); ?>




<!--This is the carousel on the home page -->
<?php 
    echo do_shortcode("[metaslider id=4]"); 
?>

<!-- These are the brand icons on the home page dent control carries -->
<div class = "container">
	<?php include 'includes/home/desktop-brand-icons.html' ?>
	<?php include 'includes/home/mobile-brand-icons.html' ?>
</div>

<!-- This is the light gray jumbotron on the home page, telling the reader "who we are" -->
	<?php include 'includes/home/light-gray-read-more.html' ?>
<div class = "container">

<!-- These are the links to all the other pages, displayed on a car background -->
	<?php include 'includes/home/links-section-desktop.html' ?>
	<?php include 'includes/home/links-section-mobile.html' ?>


<!-- This is the white jumbotron, directly after the car-background links section -->
	<?php include 'includes/home/second-light-gray-read-more.html' ?>
</div>

<!-- This is the jumbotron that takes you to the testimonials page -->
	<?php include 'includes/home/dark-gray-testimonials.html' ?>

<!--This is the form for requesting a quote -->
<div class = "container">
	<?php include 'includes/home/form.php' ?>
</div>





<?php get_footer(); ?>

