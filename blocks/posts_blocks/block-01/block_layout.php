
<!-- Block-1 -->
<section class="la-blocks la-block-layout-01 clearfix">
    <!-- Block-title -->
    <div class="la-blocks-title clearfix">
        <h1>آخر الاخبار</h1>
    </div>
    <!-- ./Block-title -->
        
    <!-- row -->
    <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
            <!-- article-1 -->
            <div class="la-big-article">
                <?php
                global $all_posts;
                $counter = 0;
                foreach($all_posts as $single_post){
                    $counter++;
                    global $post_data;
                    $post_data = $single_post;
                    
                    include('blocks/posts_blocks/block-01/layout-01.php');

                    if($counter == 1){
                        break;
                    }
                }
                ?>
            </div>
            <!-- ./article-1 -->

            <div class="la-ajax-loading clearfix">
                <ul>
                    <li>
                        <a href="javascript:;">
                            <span class="fa fa-angle-right"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="fa fa-angle-left"></span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
        <!-- ./col -->

        <!-- col -->
        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
            <!-- article-1 -->
            <div class="la-small-article">
                <?php
                global $block_1_post_2;
                $counter = 0;
                foreach($block_1_post_2 as $single_post){
                    $counter++;
                    global $post_data;
                    $post_data = $single_post;
                    
                    include('blocks/posts_blocks/block-01/layout-02.php');

                    if($counter == 6){
                        break;
                    }
                }
                ?>
            </div>
            <!-- ./article-1 -->
        </div>
        <!-- ./col -->

    </div>
    <!-- ./row -->

</section>
<!-- ./Block-1 -->
                