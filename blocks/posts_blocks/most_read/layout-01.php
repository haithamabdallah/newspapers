<?php
global $post_data;

?>

<div class="la-item">
    <!-- article -->
    <article class="clearfix">
        <!-- title -->
        <h2>
            <a href="single.php"><?php echo $post_data['title'] ?></a>
        </h2>
        <!-- ./title -->

        <!-- time -->
        <span class="la-time"><?php echo $post_data['time'] ?></span>
        <!-- ./time -->

        <figure>
            <div class="la-img post-id-<?php echo $post_data['id'] ?>" id="<?php echo $post_data['id'] ?>">
                <a class="la-anchor" href="single.php"></a>
            </div>
        </figure>

        <style>
            .post-id-<?php echo $post_data['id'] ?> {
                background: url('<?php echo $post_data['image'] ?>') no-repeat center center / cover;
            }
        </style>

        <p><?php echo $post_data['content'] ?></p>
        


    </article>
    <!-- ./article -->
</div>