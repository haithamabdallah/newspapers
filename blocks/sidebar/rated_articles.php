
<!-- Search -->
<section class="la-block la-rated-articles clearfix">
    <!-- Block-title -->
    <div class="la-blocks-title clearfix">
        <h1>الاعلي تقييما</h1>
    </div>
    <!-- ./Block-title -->

    <div class="la-big-article">
        <?php
            global $block_rated_1;
            $counter = 0;
            foreach($block_rated_1 as $single_post){
                $counter++;
                global $post_data;
                $post_data = $single_post;
                
                include('blocks/posts_blocks/rated_articles/layout-01.php');

                if($counter == 1){
                    break;
                }
            }
        ?>
    </div>

    <div class="la-small-article">
        <?php
            global $block_rated_2;
            $counter = 0;
            foreach($block_rated_2 as $single_post){
                $counter++;
                global $post_data;
                $post_data = $single_post;
                
                include('blocks/posts_blocks/rated_articles/layout-02.php');

                if($counter == 3){
                    break;
                }
            }
        ?>
    </div>

</section>
<!-- ./Search -->
                