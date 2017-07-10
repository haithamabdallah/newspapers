<?php
global $post_data;

?>

<!-- small -->
<div class="la-small">
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
        
        <div class="la-content">
            <!-- title -->
            <h2>
                <a href="single.php"><?php echo $post_data['title'] ?></a>
            </h2>
            <!-- ./title -->
            
            <!-- time -->
            <span class="la-time"><i class="fa fa-calendar"></i><?php echo $post_data['time'] ?></span>
            <!-- ./time -->
        </div>

    </article>
    <!-- ./article -->
</div>
<!-- ./small -->