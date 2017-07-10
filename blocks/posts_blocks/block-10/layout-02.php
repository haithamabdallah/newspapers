<?php
global $post_data;

?>


<div class="la-item-thumb">
    <!-- article -->
    <article class="la-img post-id-<?php echo $post_data['id'] ?> clearfix" id="<?php echo $post_data['id'] ?>">

        <style>
            .post-id-<?php echo $post_data['id'] ?> {
                background: url('<?php echo $post_data['image'] ?>') no-repeat center center / cover;
            }
        </style>

    </article>
    <!-- ./article -->
</div>