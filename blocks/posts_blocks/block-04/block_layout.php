
<!-- Block-1 -->
<section class="la-blocks la-block-layout-04 clearfix">
    <!-- Block-title -->
    <div class="la-blocks-title clearfix">
        <h1>محافظات</h1>
    </div>
    <!-- ./Block-title -->
        
    <!-- row -->
    <div class="row">      
        <?php
            global $block_4;
            $counter = 0;
            foreach($block_4 as $single_post){
                $counter++;
                global $post_data;
                $post_data = $single_post;
                
                include('blocks/posts_blocks/block-04/layout-01.php');

                if($counter == 6){
                    break;
                }
            }
        ?>
    </div>
    <!-- ./row -->

</section>
<!-- ./Block-1 -->
                