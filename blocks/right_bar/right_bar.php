
<!-- Search -->
<section class="la-block la-rated-articles la-right-side clearfix">
    <!-- Block-title -->
    <div class="la-blocks-title clearfix">
        <h1>الاكثر قراءه</h1>
    </div>
    <!-- ./Block-title -->
    <div class="la-small-article">
        <?php
            global $block_right_bar;
            $counter = 0;
            foreach($block_right_bar as $single_post){
                $counter++;
                global $post_data;
                $post_data = $single_post;
                
                include('blocks/posts_blocks/right_bar/layout-01.php');

                if($counter == 6){
                    break;
                }
            }
        ?>
    </div>
</section>
<!-- ./Search -->
                