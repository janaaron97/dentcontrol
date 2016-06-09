
<!-- The mobile navigation is set to display: none. When the breakpoint is hit, the desktop nav gets a display: none and the mobile nav becomes visible -->
<?php include 'desktop-nav.php' ?>
<?php include 'mobile-nav.php' ?>


<!-- these are some script files for the slide-over navigation. The first is the jquery file for the nav, the second puts a home icon before the wordrpress page link "home" -->
<script src = "<?php bloginfo('template_directory'); ?>/assets/javascript/jquery-slide-over-nav.js"></script>
<script src = "<?php bloginfo('template_directory'); ?>/assets/javascript/add-home-icon-in-nav.js"></script>