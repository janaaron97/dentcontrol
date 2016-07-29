<?php 
    $before = get_field('before');
    $after = get_field('after'); 
    $description = get_field('description'); 
?>




<div class="jumbotron before-after">
    <div class="container">

        <div class="col-md-12">
           
            <div class="col-md-6 ">
                <div class = "jumbotron ow-car-photo" style = "background: url('<?php echo $before['url']; ?>'); "></div>
            </div>
            
            <div class="col-md-6">
                <div class = "jumbotron ow-car-photo" style = "background: url('<?php echo $after['url']; ?>'); "></div>
            </div>
            
        </div>
    </div>
</div>
    
    
    <br>    