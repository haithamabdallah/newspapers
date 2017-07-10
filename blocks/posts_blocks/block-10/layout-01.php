<?php
global $post_data;

?>

<div class="la-item">
    <!-- article -->
    <article class="la-img post-id-<?php echo $post_data['id'] ?> clearfix" id="<?php echo $post_data['id'] ?>">

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

    </article>
    <!-- ./article -->
</div>