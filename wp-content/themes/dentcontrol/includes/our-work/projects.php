



<?php 
    $before = get_field('before');
    $after = get_field('after');

    $args = array( 'post_type' => 'acme_product', 'posts_per_page' => 10 );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
        include 'code.php';
    endwhile; 
?>
