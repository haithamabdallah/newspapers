
<!-- Block-1 -->
<section class="la-blocks la-block-layout-02 clearfix">
    <!-- Block-title -->
    <div class="la-blocks-title clearfix">
        <h1>محليات</h1>
    </div>
    <!-- ./Block-title -->
        
    <!-- row -->
    <div class="row">      
        <?php
            global $block_2;
            $counter = 0;
            foreach($block_2 as $single_post){
                $counter++;
                global $post_data;
                $post_data = $single_post;
                
                include('blocks/posts_blocks/block-02/layout-01.php');

                if($counter == 4){
                    break;
                }
            }
        ?>
    </div>
    <!-- ./row -->

</section>
<!-- ./Block-1 -->
                