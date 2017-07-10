
<!-- Block-1 -->
<section class="la-blocks la-block-layout-04 la-block-layout-tabs clearfix">
    <!-- Block-title -->
    <div class="la-blocks-title clearfix">
        <h1>محافظات</h1>
    </div>
    <!-- ./Block-title -->
    
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#category_6" aria-controls="category_6" role="tab" data-toggle="tab">تكنولوجيا</a></li>
        <li role="presentation"><a href="#category_7" aria-controls="category_7" role="tab" data-toggle="tab">طب وعلوم</a></li>
        <li role="presentation"><a href="#category_8" aria-controls="category_8" role="tab" data-toggle="tab">اقتصاد</a></li>
    </ul>
    <!-- Nav tabs -->

    <!-- row -->
    <div class="row">   


    <!-- Tab panes -->
    <div class="tab-content">
        
        <div role="tabpanel" class="tab-pane animated fadeIn active" id="category_6">
            <?php
                global $block_tab_1;
                $counter = 0;
                foreach($block_tab_1 as $single_post){
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

        <div role="tabpanel" class="tab-pane animated fadeIn" id="category_7">
            <?php
                global $block_tab_2;
                $counter = 0;
                foreach($block_tab_2 as $single_post){
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
        <div role="tabpanel" class="tab-pane animated fadeIn" id="category_8">
            <?php
                global $block_tab_3;
                $counter = 0;
                foreach($block_tab_3 as $single_post){
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
    </div>
        
       
        
    </div>
    <!-- ./row -->

</section>
<!-- ./Block-1 -->
                