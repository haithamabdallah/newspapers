
<!-- Main Layout -->
<section class="la-main-layout">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			
			<!-- main -->
			<main class="la-single-layout la-main-content">
				<?php 
					include('blocks/posts_blocks/block-01/block_layout.php');
				 	include('blocks/posts_blocks/block-02/block_layout.php');
				 	include('blocks/posts_blocks/block-03/block_layout.php');
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