



<?php 

    $discounted_amount = get_field('discounted_amount');
    $what_is_the_discount_for = get_field('what_is_the_discount_for');
    $caption = get_field('caption');
    $logo = get_field('logo');

    $args = array( 'post_type' => 'coupon_product', 'posts_per_page' => 10 );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
        include 'code.php';
    endwhile; 
?>
