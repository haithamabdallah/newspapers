<!-- slider -->
<div class="la-slider-common la-slider-layout-01 clearfix">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- col -->
			<div class="col-md-12 col-sm-12 col-sx-12">
				<!-- content-slider -->
				<div class="la-slider-content-01 clearfix">
					<?php
	        		    global $slider_01;
	        		    $counter = 0;
	        		    foreach($slider_01 as $single_post){
	        		        $counter++;
	        		        global $post_data;
	        		        $post_data = $single_post;
	        		        
	        		        include('blocks/posts_blocks/slider-01/layout-01.php');

	        		        if($counter == 6){
	        		            break;
	        		        }
	        		    }
	        		?>
                </div>
                <!-- ./content-slider -->
			</div>
			<!-- ./col -->
		</div>
		<!-- ./row -->
	</div>
	<!-- ./container -->
</div>
<!-- ./slider -->