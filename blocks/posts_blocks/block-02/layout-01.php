<?php
global $post_data;

?>

<!-- col -->
<div class="col-md-6 col-sm-12 col-xs-12">
    <!-- article -->
    <article class="post-id-<?php echo $post_data['id'] ?> clearfix" id="<?php echo $post_data['id'] ?>">
        <a class="la-anchor" href="single.php"></a>
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
        
        <!-- category -->
        <a href="category.php">
            <span class="la-category"><?php echo $post_data['category'] ?></span>
        </a>
        <!-- ./category -->

    </article>
    <!-- ./article -->
</div>
<!-- ./col -->