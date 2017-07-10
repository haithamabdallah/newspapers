<?php
global $post_data;

?>

<!-- big -->
<div class="la-big">
    <!-- article -->
    <article class="clearfix post-id-<?php echo $post_data['id'] ?>" id="<?php echo $post_data['id'] ?>">
            <a class="la-anchor" href="single.php"></a>
            
            <a class="la-category" href="category.php">
                <span><?php echo $post_data['category'] ?></span>
            </a>
            <div class="la-date">
                <span><?php echo $post_data['day'] ?></span>
                <span><?php echo $post_data['month'] ?></span>
            </div>

        <style>
            .post-id-<?php echo $post_data['id'] ?> {
                background: url('<?php echo $post_data['image'] ?>') no-repeat center center / cover;
            }
        </style>
        
        <!-- title -->
        <h2>
            <a href="single.php"><?php echo $post_data['title'] ?></a>
        </h2>
        <!-- ./title -->
        
        <!-- time -->
        <span class="la-time"><i class="fa fa-calendar"></i><?php echo $post_data['time'] ?></span>
        <!-- ./time -->

    </article>
    <!-- ./article -->
</div>
<!-- ./big -->