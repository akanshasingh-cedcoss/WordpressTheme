<?php get_header(); ?>
		<!-- Page Content -->
		<!-- Banner Starts Here -->
		<div class="heading-page header-text">
			<section class="page-heading">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="text-content">
								<h4>Recent Posts</h4>
								<h2>Our Recent Blog Entries</h2>
							</div>
						</div>
					</div>
				</div>
			</section>
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
										<a href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="blog-posts grid-system">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="all-blog-posts">
							<div class="row">

							<?php
								$args = array(
									'post_type'=> 'post',
									'orderby'    => 'ID',
									'post_status' => 'publish',
									'order'    => 'DESC',
									'posts_per_page' => -1 // this will retrive all the post that is published 
								);
							?>

							<?php $result = new WP_Query($args); 

							if($result-> have_posts()) :?>
								<?php while ( $result->have_posts()) : $result->the_post(); ?>
								<div class="col-lg-6">
									<div class="blog-post">
										<div class="blog-thumb">
											<!-- <img src="assets/images/blog-thumb-01.jpg" alt=""> -->
											<?php if (has_post_thumbnail()) { 
												the_post_thumbnail(get_the_ID(), 'full');
											} ?>
										</div>
										<div class="down-content">
											<span>Lifestyle</span>
											<a href="post-details.html"><h4><?php the_title( '<h3>', '</h3>' );?></h4></a>
											<ul class="post-info">
												<li><a href="#"><?php the_author(); ?></a></li>
												<li><a href="#"><?php the_date('Y-m-d'); ?></a></li>
												<li><a href="#"><?php echo get_comments_number(); ?></a></li>
											</ul>
											<p><?php echo the_content();?></p>
											<div class="post-options">
												<div class="row">
													<div class="col-lg-12">
														<ul class="post-tags">
															<li><i class="fa fa-tags"></i></li>
															<?php
															$post_tags = get_the_tags();
																if ($post_tags) {
																		foreach($post_tags as $tag) {
																			echo '<li><a href="#">'. $tag->name.'</a>,</li>';                                  
																		}
																}
															?>
															<!-- <li><a href="#">Best Templates</a>,</li>
															<li><a href="#">TemplateMo</a></li> -->
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							 
								<?php endwhile; ?>
								<?php endif; wp_reset_postdata(); ?>

								<!-- <div class="col-lg-6">
									<div class="blog-post">
										<div class="blog-thumb">
											<img src="assets/images/blog-thumb-02.jpg" alt="">
										</div>
										<div class="down-content">
											<span>Lifestyle</span>
											<a href="post-details.html"><h4>Suspendisse et metus</h4></a>
											<ul class="post-info">
												<li><a href="#">Admin</a></li>
												<li><a href="#">May 22, 2020</a></li>
												<li><a href="#">26 Comments</a></li>
											</ul>
											<p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>
											<div class="post-options">
												<div class="row">
													<div class="col-lg-12">
														<ul class="post-tags">
															<li><i class="fa fa-tags"></i></li>
															<li><a href="#">Best Templates</a>,</li>
															<li><a href="#">TemplateMo</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6"> -->
									<!-- <div class="blog-post">
										<div class="blog-thumb">
											<img src="assets/images/blog-thumb-03.jpg" alt="">
										</div>
										<div class="down-content">
											<span>Lifestyle</span>
											<a href="post-details.html"><h4>Donec tincidunt leo</h4></a>
											<ul class="post-info">
												<li><a href="#">Admin</a></li>
												<li><a href="#">May 18, 2020</a></li>
												<li><a href="#">42 Comments</a></li>
											</ul>
											<p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>
											<div class="post-options">
												<div class="row">
													<div class="col-lg-12">
														<ul class="post-tags">
															<li><i class="fa fa-tags"></i></li>
															<li><a href="#">Best Templates</a>,</li>
															<li><a href="#">TemplateMo</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div> -->
								<!-- </div> -->
								<!-- <div class="col-lg-6">
									<div class="blog-post">
										<div class="blog-thumb">
											<img src="assets/images/blog-thumb-04.jpg" alt="">
										</div>
										<div class="down-content">
											<span>Lifestyle</span>
											<a href="post-details.html"><h4>Mauris ac dolor ornare</h4></a>
											<ul class="post-info">
												<li><a href="#">Admin</a></li>
												<li><a href="#">May 16, 2020</a></li>
												<li><a href="#">28 Comments</a></li>
											</ul>
											<p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>
											<div class="post-options">
												<div class="row">
													<div class="col-lg-12">
														<ul class="post-tags">
															<li><i class="fa fa-tags"></i></li>
															<li><a href="#">Best Templates</a>,</li>
															<li><a href="#">TemplateMo</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="blog-post">
										<div class="blog-thumb">
											<img src="assets/images/blog-thumb-05.jpg" alt="">
										</div>
										<div class="down-content">
											<span>Lifestyle</span>
											<a href="post-details.html"><h4>Donec tincidunt leo</h4></a>
											<ul class="post-info">
												<li><a href="#">Admin</a></li>
												<li><a href="#">May 12, 2020</a></li>
												<li><a href="#">16 Comments</a></li>
											</ul>
											<p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>
											<div class="post-options">
												<div class="row">
													<div class="col-lg-12">
														<ul class="post-tags">
															<li><i class="fa fa-tags"></i></li>
															<li><a href="#">Best Templates</a>,</li>
															<li><a href="#">TemplateMo</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="blog-post">
										<div class="blog-thumb">
											<img src="assets/images/blog-thumb-06.jpg" alt="">
										</div>
										<div class="down-content">
											<span>Lifestyle</span>
											<a href="post-details.html"><h4>Mauris ac dolor ornare</h4></a>
											<ul class="post-info">
												<li><a href="#">Admin</a></li>
												<li><a href="#">May 10, 2020</a></li>
												<li><a href="#">3 Comments</a></li>
											</ul>
											<p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>
											<div class="post-options">
												<div class="row">
													<div class="col-lg-12">
														<ul class="post-tags">
															<li><i class="fa fa-tags"></i></li>
															<li><a href="#">Best Templates</a>,</li>
															<li><a href="#">TemplateMo</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div> -->
								<!-- <div class="col-lg-12">
									<ul class="page-numbers">
										<li><a href="#">1</a></li>
										<li class="active"><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
									</ul>
								</div> -->
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
												$blog_posts = new WP_Query( array( 'post_type' => 'post', 'post_status’' => 'publish', 'posts_per_page' => -1 ) );
												?>
												<?php if ( $blog_posts->have_posts() ) : ?>
													<?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
														<li><a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
															<span><?php the_date(); ?></span>
														</a></li>
																	
													<?php endwhile; ?>
													<?php else: ?>
														<p class = "no-blog-posts">
															<?php esc_html_e('Sorry, no posts matched your criteria.', 'theme-domain'); ?> 
														</p>
													<?php endif; 
													wp_reset_postdata(); 
											?>
												<!-- <li><a href="post-details.html">
													<h5>Vestibulum id turpis porttitor sapien facilisis scelerisque</h5>
													<span>May 31, 2020</span>
												</a></li> -->
												<!-- <li><a href="post-details.html">
													<h5>Suspendisse et metus nec libero ultrices varius eget in risus</h5>
													<span>May 28, 2020</span>
												</a></li>
												<li><a href="post-details.html">
													<h5>Swag hella echo park leggings, shaman cornhole ethical coloring</h5>
													<span>May 14, 2020</span>
												</a></li> -->
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
											$args = array(
												'hide_empty'      => false,
											);
											$categories = get_categories($args); 
											foreach($categories as $category) { 
												echo '<li><a href="' . get_category_link($category->term_id) . '">-' . $category->name . '</a></li> ';
											}        
											?>
												<!-- <li><a href="#">- Nature Lifestyle</a></li>
												<li><a href="#">- Awesome Layouts</a></li>
												<li><a href="#">- Creative Ideas</a></li>
												<li><a href="#">- Responsive Templates</a></li>
												<li><a href="#">- HTML5 / CSS3 Templates</a></li>
												<li><a href="#">- Creative &amp; Unique</a></li> -->
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
											<?php 
												$args = array(
													'hide_empty'=> false,
												);
												$tags = get_tags($args); 
												foreach ( $tags as $tag ) {
													$tag_link = get_tag_link( $tag->term_id );               
													?>
													<li><a href='{$tag_link}'><?php echo $tag->name; ?></a></li>                        
													<?php
												}
												?>
												<!-- <li><a href="#">Lifestyle</a></li>
												<li><a href="#">Creative</a></li>
												<li><a href="#">HTML5</a></li>
												<li><a href="#">Inspiration</a></li>
												<li><a href="#">Motivation</a></li>
												<li><a href="#">PSD</a></li>
												<li><a href="#">Responsive</a></li> -->
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
		

	 
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="social-icons">
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Twitter</a></li>
							<li><a href="#">Behance</a></li>
							<li><a href="#">Linkedin</a></li>
							<li><a href="#">Dribbble</a></li>
						</ul>
					</div>
					<div class="col-lg-12">
						<div class="copyright-text">
							<p>Copyright 2020 Stand Blog Co.
										
								 | Design: <a rel="nofollow" href="https://templatemo.com" target="_parent">TemplateMo</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>


		<!-- Bootstrap core JavaScript -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Additional Scripts -->
		<script src="assets/js/custom.js"></script>
		<script src="assets/js/owl.js"></script>
		<script src="assets/js/slick.js"></script>
		<script src="assets/js/isotope.js"></script>
		<script src="assets/js/accordions.js"></script>

		<script language = "text/Javascript"> 
			cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
			function clearField(t){                   //declaring the array outside of the
			if(! cleared[t.id]){                      // function makes it static and global
					cleared[t.id] = 1;  // you could use true and false, but that's more typing
					t.value='';         // with more chance of typos
					t.style.color='#fff';
					}
			}
		</script>

	</body>
</html>