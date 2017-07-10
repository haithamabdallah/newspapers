
<!-- Search -->
<section class="la-block la-varity-articles clearfix">
    <!-- Block-title -->
    <div class="la-blocks-title clearfix">
        <h1>اخبار متنوعه</h1>
    </div>
    <!-- ./Block-title -->

    <?php
        global $block_varity;
        $counter = 0;
        foreach($block_varity as $single_post){
            $counter++;
            global $post_data;
            $post_data = $single_post;
            
            include('blocks/posts_blocks/varity_articles/layout-01.php');

            if($counter == 4){
                break;
            }
        }
    ?>

</section>
<!-- ./Search -->
                