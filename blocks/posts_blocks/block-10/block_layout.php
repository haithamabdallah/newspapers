

<!-- Block-1 -->
<section class="la-blocks la-block-layout-10 clearfix">
    <!-- Block-title -->
    <div class="la-blocks-title clearfix">
        <h1>مقالات مصوره</h1>
    </div>
    <!-- ./Block-title -->
    <div class="la-slider-img">
        <?php
            global $block_10;
            $counter = 0;
            foreach($block_10 as $single_post){
                $counter++;
                global $post_data;
                $post_data = $single_post;
                
                include('blocks/posts_blocks/block-10/layout-01.php');

                if($counter == 5){
                    break;
                }
            }
        ?>
    </div>

    <div class="la-image-thumb-nav">
        <?php
            global $block_10;
            $counter = 0;
            foreach($block_10 as $single_post){
                $counter++;
                global $post_data;
                $post_data = $single_post;
                
                include('blocks/posts_blocks/block-10/layout-02.php');

                if($counter == 5){
                    break;
                }
            }
        ?>
    </div>

</section>
<!-- ./Block-1 -->
                