
<!-- Block-1 -->
<section class="la-blocks la-block-layout-08 clearfix">
    <!-- Block-title -->
    <div class="la-blocks-title clearfix">
        <h1>تكنولوجيا</h1>
    </div>
    <!-- ./Block-title -->
    
        <?php
            global $block_8;
            $counter = 0;
            foreach($block_8 as $single_post){
                $counter++;
                global $post_data;
                $post_data = $single_post;
                
                include('blocks/posts_blocks/block-08/layout-01.php');

                if($counter == 2){
                    break;
                }
            }
        ?>

</section>
<!-- ./Block-1 -->
                