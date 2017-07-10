
<!-- Search -->
<section class="la-block la-most-read-articles clearfix">
    <!-- Block-title -->
    <div class="la-blocks-title clearfix">
        <h1>الاكثر قراءه</h1>
    </div>
    <!-- ./Block-title -->
    <div class="la_image_news_articles">
        <?php
            global $block_image_news;
            $counter = 0;
            foreach($block_image_news as $single_post){
                $counter++;
                global $post_data;
                $post_data = $single_post;
                
                include('blocks/posts_blocks/image_news/layout-01.php');

                if($counter == 3){
                    break;
                }
            }
        ?>
    </div>

</section>
<!-- ./Search -->
                