<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package abc-blog.php
 */

get_header();
?>

	<main id="primary" class="site-main">

	<div class="col-lg-12">
		<div class="blog-post">
			<div class="blog-thumb">
			<img src="assets/images/blog-post-01.jpg" alt="">
			</div>
			<div class="down-content">
			<span>Lifestyle</span>
			<a href="post-details.html">
				<h4>Best Template Website for HTML CSS</h4>
			</a>
			<ul class="post-info">
				<li><a href="#">Admin</a></li>
				<li><a href="#">May 31, 2020</a></li>
				<li><a href="#">12 Comments</a></li>
			</ul>
			<p>Stand Blog is a free HTML CSS template for your CMS theme. You can easily adapt or customize it
				for any kind of CMS or website builder. You are allowed to use it for your business. You are NOT
				allowed to re-distribute the template ZIP file on any template collection site for the download
				purpose. <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">Contact
				TemplateMo</a> for more info. Thank you.</p>
			<div class="post-options">
				<div class="row">
				<div class="col-6">
					<ul class="post-tags">
					<li><i class="fa fa-tags"></i></li>
					<li><a href="#">Beauty</a>,</li>
					<li><a href="#">Nature</a></li>
					</ul>
				</div>
				<div class="col-6">
					<ul class="post-share">
					<li><i class="fa fa-share-alt"></i></li>
					<li><a href="#">Facebook</a>,</li>
					<li><a href="#"> Twitter</a></li>
					</ul>
				</div>
				</div>
			</div>
			</div>
		</div>
	</div>
		<?php
		while ( have_posts() ) :
			
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'abc-blog-php' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'abc-blog-php' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
