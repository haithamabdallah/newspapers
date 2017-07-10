
<!-- Block-1 -->
<section class="la-blocks la-block-layout-05 clearfix">

    <!-- row -->
    <div class="row">
        <!-- col -->
        <div class="col-md-6 col-sm-12 colxs-12">
            
            <!-- Block-title -->
            <div class="la-blocks-title clearfix">
                <h1>قضايا</h1>
            </div>
            <!-- ./Block-title -->

            <?php
                global $block_5_post_1;
                $counter = 0;
                foreach($block_5_post_1 as $single_post){
                    $counter++;
                    global $post_data;
                    $post_data = $single_post;
                    
                    include('blocks/posts_blocks/block-05/layout-01.php');

                    if($counter == 1){
                        break;
                    }
                }
            ?>

            <?php
                global $block_5_post_1_1;
                $counter = 0;
                foreach($block_5_post_1_1 as $single_post){
                    $counter++;
                    global $post_data;
                    $post_data = $single_post;
                    
                    include('blocks/posts_blocks/block-05/layout-02.php');

                    if($counter == 3){
                        break;
                    }
                }
            ?>

        </div>      
        <!-- ./col -->

        <!-- col -->
        <div class="col-md-6 col-sm-12 colxs-12">
            <!-- Block-title -->
            <div class="la-blocks-title clearfix">
                <h1>بالعربيه</h1>
            </div>
            <!-- ./Block-title -->

            <?php
                global $block_5_post_2;
                $counter = 0;
                foreach($block_5_post_2 as $single_post){
                    $counter++;
                    global $post_data;
                    $post_data = $single_post;
                    
                    include('blocks/posts_blocks/block-05/layout-01.php');

                    if($counter == 1){
                        break;
                    }
                }
            ?>

            <?php
                global $block_5_post_2_2;
                $counter = 0;
                foreach($block_5_post_2_2 as $single_post){
                    $counter++;
                    global $post_data;
                    $post_data = $single_post;
                    
                    include('blocks/posts_blocks/block-05/layout-02.php');

                    if($counter == 3){
                        break;
                    }
                }
            ?>

        </div>      
        <!-- ./col -->

    </div>
    <!-- ./row -->

</section>
<!-- ./Block-1 -->
                