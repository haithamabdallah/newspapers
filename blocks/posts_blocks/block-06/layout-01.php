<?php
global $post_data;

?>

<!-- col -->
<div class="col-md-4 col-sm-4 col-xs-12">
    <!-- article -->
    <article class="clearfix">
        <figure>
            <div class="la-img post-id-<?php echo $post_data['id'] ?>" id="<?php echo $post_data['id'] ?>">
                <a class="la-anchor" href="single.php"></a>
            </div>
            <a class="la-category" href="category.php">
                <span><?php echo $post_data['category'] ?></span>
            </a>
        </figure>

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
        <span class="la-time"><?php echo $post_data['time'] ?></span>
        <!-- ./time -->

    </article>
    <!-- ./article -->
</div>
<!-- ./col -->