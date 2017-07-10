
<!-- Block-1 -->
<section class="la-blocks la-block-layout-07 clearfix">
    <!-- Block-title -->
    <div class="la-blocks-title clearfix">
        <h1>اخر الاخبار</h1>
    </div>
    <!-- ./Block-title -->
    
    <div class="la-big-article clearfix">
        <?php
            global $block_7ـpost_1;
            $counter = 0;
            foreach($block_7ـpost_1 as $single_post){
                $counter++;
                global $post_data;
                $post_data = $single_post;
                
                include('blocks/posts_blocks/block-07/layout-01.php');

                if($counter == 1){
                    break;
                }
            }
        ?>
    </div>

    <div class="la-small-article clearfix">
        <?php
            global $block_7ـpost_2;
            $counter = 0;
            foreach($block_7ـpost_2 as $single_post){
                $counter++;
                global $post_data;
                $post_data = $single_post;
                
                include('blocks/posts_blocks/block-07/layout-02.php');

                if($counter == 3){
                    break;
                }
            }
        ?>
    </div>
</section>
<!-- ./Block-1 -->
                