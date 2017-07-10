<?php
global $post_data;

?>

<!-- item -->
<div class="la-slider-item clearfix">
    <!-- article -->
    <article class="la-img post-id-<?php echo $post_data['id'] ?>" id="<?php echo $post_data['id'] ?>">
        <a class="la-anchor" href="single.php"></a>
        <div class="la-slide-hover"></div>

        <style>
            .post-id-<?php echo $post_data['id'] ?> {
                background: url('<?php echo $post_data['image'] ?>') no-repeat center center / cover;
            }
        </style>
        
        <!-- entry-header -->
        <header class="entry-header">
            <a href="category.php" class="la-category">
                <span><?php echo $post_data['category'] ?></span>
            </a>
            <h2>
                <a href="single.php"><?php echo $post_data['title'] ?></a>
            </h2>
        </header>
        <!-- ./entry-header -->

    </article>
    <!-- ./article -->
</div>
<!-- ./item -->