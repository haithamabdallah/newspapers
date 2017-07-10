<!-- slider -->
<div class="la-slider-common la-slider-layout-02 clearfix">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- content-slider -->
			<div class="la-slider-content-02 clearfix">
				
				<!-- item -->
				<div class="la-slider-item clearfix">
				    <div class="col-md-6 col-sm-6 col-xs-12">
				    	<?php
	        			    global $block_1_post_2;
	        			    $counter = 0;
	        			    foreach($block_1_post_2 as $single_post){
	        			        $counter++;
	        			        global $post_data;
	        			        $post_data = $single_post;
	        			        
	        			        include('blocks/posts_blocks/slider-02/layout-01.php');

	        			        if($counter == 1){
	        			            break;
	        			        }
	        			    }
        				?>
				    </div>
				    <div class="col-md-3 col-sm-3 col-xs-12">
				    	<?php
	        			    global $block_2;
	        			    $counter = 0;
	        			    foreach($block_2 as $single_post){
	        			        $counter++;
	        			        global $post_data;
	        			        $post_data = $single_post;
	        			        
	        			        include('blocks/posts_blocks/slider-02/layout-01.php');

	        			        if($counter == 1){
	        			            break;
	        			        }
	        			    }
        				?>
				    </div>
				    <div class="col-md-3 col-sm-3 col-xs-12">
				    	<div class="la-rows">
				    	<?php
	        			    global $block_3_post_2;
	        			    $counter = 0;
	        			    foreach($block_3_post_2 as $single_post){
	        			        $counter++;
	        			        global $post_data;
	        			        $post_data = $single_post;
	        			        
	        			        include('blocks/posts_blocks/slider-02/layout-01.php');

	        			        if($counter == 2){
	        			            break;
	        			        }
	        			    }
        				?>
        				</div>
				    </div>
				</div>
				<!-- ./item -->
						
            </div>
            <!-- ./content-slider -->
		</div>
		<!-- ./row -->
	</div>
	<!-- ./container -->
</div>
<!-- ./slider -->