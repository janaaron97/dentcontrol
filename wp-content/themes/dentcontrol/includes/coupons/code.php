<?php 
    $discounted_amount = get_field('discounted_amount');
    $what_is_the_discount_for = get_field('what_is_the_discount_for');
    $caption = get_field('caption');
    $logo = get_field('logo');
    $bgcolor = get_field('bgcolor');
    $text_color = get_field('text_color');
    $border_color = get_field('border_color');
?>




<div class="coupon" style = "background-color: <?php echo $bgcolor; ?>; border: 8px dashed <?php echo $border_color; ?>;">
    <div class="container">
        <h1 class = "amount-off" style = "color: <?php echo $text_color; ?>;"><?php echo $discounted_amount; ?></h1>
        <h4 class = "what-for" style = "color: <?php echo $text_color; ?>;"><?php echo $what_is_the_discount_for; ?></h4>
        <p class = "coupon-caption" style = "color: <?php echo $text_color; ?>;"><?php echo $caption; ?></p>
        <img class = "coupon-image" src = "<?php echo $logo['url']; ?>" />
       

    </div>
</div>
    
    
<br>    