
<!-- Block-1 -->
<section class="la-blocks la-block-layout-09 clearfix">
    <!-- Block-title -->
    <div class="la-blocks-title clearfix">
        <h1>سينما</h1>
    </div>
    <!-- ./Block-title -->
    
        <?php
            global $block_9;
            $counter = 0;
            foreach($block_9 as $single_post){
                $counter++;
                global $post_data;
                $post_data = $single_post;
                
                include('blocks/posts_blocks/block-09/layout-01.php');

                if($counter == 4){
                    break;
                }
            }
        ?>

</section>
<!-- ./Block-1 -->
                