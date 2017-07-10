<?php
global $post_data;

?>

<!-- article -->
<article class="clearfix">
    <figure>
        <div class="la-img post-id-<?php echo $post_data['id'] ?>" id="<?php echo $post_data['id'] ?>">
            <a class="la-anchor" href="single.php"></a>
            <div class="la-img-mask">
                <!-- time -->
                <span class="la-type">
                    <i class="<?php echo $post_data['type'] ?>"></i>
                </span>
                <!-- ./time -->
            </div>
        </div>
    </figure>

    <style>
        .post-id-<?php echo $post_data['id'] ?> {
            background: url('<?php echo $post_data['image'] ?>') no-repeat center center / cover;
        }
    </style>

    <div class="la-content">
        <a class="la-category" href="category.php">
            <span><?php echo $post_data['category'] ?></span>
        </a>
        
        <!-- title -->
        <h2>
            <a href="single.php"><?php echo $post_data['title'] ?></a>
        </h2>
        <!-- ./title -->
    </div>

</article>
<!-- ./article -->
