<?php
 /* Template Name: Homepage */
 get_header();?>
 <!-- Banner Starts Here -->
 <div class="main-banner header-text">
 	<div class="container-fluid">
 		<div class="owl-banner owl-carousel">
 			<?php
 			$blog_posts = new WP_Query ( array( 'post_type' => 'post', 'post_status’' => 'publish', 'posts_per_page' => -1));
 			?>
 			<?php if ( $blog_posts->have_posts()): ?>
 				<?php while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
 					<div class="item">
 						<?php if(has_post_thumbnail()){ 
							the_post_thumbnail(get_the_ID(),'full'); } ?>
 						<!-- <img src="<//?php echo get_template_directory_uri(); ?>/images/banner-item-01.jpg" alt=""> -->
 						<div class="item-content">
 							<div class="main-content">
 								<div class="meta-category">
 									<span><?php the_category(', '); ?></span>
 									<!-- <span>Fashion</span> -->
 								</div>
 								<!-- <a href="post-details.html"><h4>Morbi dapibus condimentum</h4></a> -->
 								<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
 								<ul class="post-info">
 									<li><a href="#"><?php the_author();?></a></li>
 									<li><a href="#"><?php the_date();?></a></li>
 									<li><a href="#"><?php comments_number(); ?></a></li>
 								</ul>
 							</div>
 						</div>
 					</div>
 				<?php endwhile;?>
 				<?php else: ?>
 					<p class = "no-blog-posts">
 						<?php esc_html_e('Sorry, no posts matched your criteria.', 'theme-domain'); ?> 
 					</p>
				 <?php endif;
				 wp_reset_postdata(); ?>
 			</div>
 		</div>
 	</div>
 	<!-- Banner Ends Here -->

 	<section class="call-to-action">
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-12">
 					<div class="main-content">
 						<div class="row">
 							<div class="col-lg-8">
 								<span>Stand Blog HTML5 Template</span>
 								<h4>Creative HTML Template For Bloggers!</h4>
 							</div>
 							<div class="col-lg-4">
 								<div class="main-button">
 									<a rel="nofollow" href="#" target="_parent">Download Now!</a>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</section>


 	<section class="blog-posts">
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-8">
 					<div class="all-blog-posts">
 						<div class="row">
							<!-- <div class="col-lg-12">
							</div>
							<div class="col-lg-12">
							</div> -->
							<?php
							$args = array('post_type'=> 'post','orderby'  => 'ID','post_status' => 'publish','order'=> 'DESC','posts_per_page' => 3 );?>

		<?php $result = new WP_Query($args);

	if ( $result-> have_posts() ) : ?>
		<?php while($result->have_posts()):$result->the_post(); ?>
			<div class="col-lg-12">
				<div class="blog-post">
					<div class="blog-thumb">
						<img src="<?php echo get_template_directory_uri(); ?>/images/banner-item-01.jpg" alt="">
					</div>
					<div class="down-content">
						<span><?php the_title('<h3>','</h3>'); ?></span>
						<a href="<?php the_permalink(); ?>"><h4><?php the_content(); ?></h4></a>
						<ul class="post-info">
							<li><a href="#"><?php the_author(); ?></a></li>
							<li><a href="#"><?php the_date('Y-m-d'); ?></a></li>
							<li><a href="#"><?php echo get_comments_number(); ?> Comments</a></li>
						</ul>
						<p><?php echo the_content();?></p>
						<div class="post-options">
							<div class="row">
								<div class="col-6">
									<ul class="post-tags">
										<li><i class="fa fa-tags"></i></li>
										
										<!-- <li><a href="#"><//?php _e(the_category());?></a>,</li> -->
										<!-- <li><a href="#">Photoshop</a></li> -->
									</ul>
								</div>
								<div class="col-6">
									<ul class="post-share">
										<li><i class="fa fa-share-alt"></i></li>
										<li><a href="#">Facebook</a>,</li>
										<li><a href="#">Twitter</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; wp_reset_postdata(); ?>
	<div class="col-lg-12">
		<div class="main-button">
			<a href="http://localhost:10004/blog-entries/">View All Posts</a>
		</div>
	</div>
</div>
</div>
</div>
<div class="col-lg-4">
	<div class="sidebar">
		<div class="row">
			<div class="col-lg-12">
				<div class="sidebar-item search">
					<form id="search_form" name="gs" method="GET" action="#">
						<input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
					</form>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="sidebar-item recent-posts">
					<div class="sidebar-heading">
						<h2>Recent Posts</h2>
					</div>
					<div class="content">
						<ul>
							<?php
							$blog_posts = new WP_Query(array('post_type' => 'post', 'post_status’' => 'publish', 'posts_per_page' => -1 ));
							?>
							<?php if ($blog_posts->have_posts()) : ?>
								<?php while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
									<li><a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
										<span><?php the_date(); ?></span>
									</a></li>
					
					<?php endwhile; ?>
					<?php else: ?>
				  	<p class = "no-blog-posts">
				  		<?php esc_html_e('Sorry, no posts matched your criteria.', 'theme-domain'); ?> 
				  	</p>
				  <?php endif;
				  wp_reset_postdata(); ?>
			  </ul>
		  </div>
	  </div>
  </div>
  <div class="col-lg-12">
  	<div class="sidebar-item categories">
  		<div class="sidebar-heading">
  			<h2>Categories</h2>
  		</div>
  		<div class="content">
  			<ul>
  				<?php
  				$args = array('hide_empty' => false,);
  				$categories = get_categories($args); 
  				foreach ($categories as $category){
  					echo '<li><a href="' . get_category_link($category->term_id) . '">-' . $category->name . '</a></li> ';}       
  				?>
			</ul>
		</div>
	</div>
  </div>
	  <div class="col-lg-12">
		<div class="sidebar-item tags">
		  <div class="sidebar-heading">
			<h2>Tag Clouds</h2>
		  </div>
		  <div class="content">
			<ul>
				<?php $args = array('hide_empty'=> false,);
				$tags = get_tags($args); 
				foreach ($tags as $tag ){
					$tag_link = get_tag_link($tag->term_id);?>
					<li><a href='{$tag_link}'><?php echo $tag->name; ?></a></li>                        
					<?php } ?>
			</ul>
		  </div>
		  </div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</section>
<?php
get_sidebar();
get_footer();
