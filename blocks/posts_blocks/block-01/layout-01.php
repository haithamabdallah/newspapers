<?php
global $post_data;

?>

<!-- article -->
<article class="clearfix">


    <figure>
        <div class="la-img post-id-<?php echo $post_data['id'] ?>" id="<?php echo $post_data['id'] ?>">
            <a class="la-anchor" href="single.php"></a>
        </div>
        <figcaption class="la-date">
            <span><?php echo $post_data['day'] ?></span>
            <span><?php echo $post_data['month'] ?></span>
        </figcaption>
    </figure>

    <style>
        .post-id-<?php echo $post_data['id'] ?> {
            background: url('<?php echo $post_data['image'] ?>') no-repeat center center / cover;
        }
    </style>
    
        <!-- entry-header -->
        <header class="entry-header">
            <a href="category.php">
                <span class="la-category"><?php echo $post_data['category'] ?></span>
            </a>
            <h2>
                <a href="single.php"><?php echo $post_data['title'] ?></a>
            </h2>
        </header>
        <!-- ./entry-header -->

        <div class="entry-content">
            <p><?php echo $post_data[content] ?></p>
        </div>

</article>
<!-- ./article -->
