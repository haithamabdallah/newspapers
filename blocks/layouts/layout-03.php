
<!-- Main Layout -->
<section class="la-main-layout">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<aside class="la-single-layout la-right-bar">
				<?php  
					include('blocks/right_bar/right_bar.php');
				?>
			</aside>
			
			<!-- main -->
			<main class="la-single-layout la-main-content-02">
				<?php 
					include('blocks/posts_blocks/block-07/block_layout.php');
					include('blocks/posts_blocks/block-08/block_layout.php');
					include('blocks/posts_blocks/block-09/block_layout.php');
					include('blocks/sidebar/ads_468.php');
					include('blocks/posts_blocks/block-10/block_layout.php');
				?>
			</main>
			<!-- ./main -->

			<!-- sidebar -->
			<aside class="la-single-layout la-sidebar">
				<?php 
					include('blocks/sidebar/search.php');
					include('blocks/sidebar/login.php');
					include('blocks/sidebar/rated_articles.php');
					include('blocks/sidebar/ads.php');
					include('blocks/sidebar/varity_articles.php');
					include('blocks/sidebar/most_read_articles.php');
					include('blocks/sidebar/image_news_articles.php');
				?>
			</aside>
			<!-- ./sidebar -->

		</div>
		<!-- ./row -->
	</div>
	<!-- ./container -->
</section>
<!-- ./Main Layout -->