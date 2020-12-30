<?php
/**
* Template Name: home Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
get_header();
?>
 <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
            <?php $blog_posts = new WP_Query(array('post_type' => 'post', 'post_status’' => 'publish', 'posts_per_page' => 4 ));?>
            <?php if ($blog_posts->have_posts()) : ?>
                <?php while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
            <div class="item">
            <?php if (has_post_thumbnail()) {
              the_post_thumbnail(get_the_ID(), 'full'); }?>
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span><?php the_category(', '); ?></span>
                </div>
                <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                <ul class="post-info">
                  <li><a href="#"><?php the_author();?></a></li>
                  <li><a href="#"><?php the_date();?></a></li>
                  <li><a href="#"><?php comments_number(); ?></a></li>
                </ul>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
          <?php else: ?>
            <p class = "no-blog-posts">
            <?php esc_html_e('Sorry, no posts matched your criteria.', 'theme-domain'); ?> 
            </p>
            <?php endif; wp_reset_postdata(); ?>
         
          
         
        </div>
      </div>
    </div>
    <?php
    get_footer();

















<div class="main-banner header-text">
<div class="container-fluid">
  <div class="owl-banner owl-carousel">
<?php
$blog_posts = new WP_Query( array( 'post_type' => 'post', 'post_status’' => 'publish', 'posts_per_page' => -1 ) );
?>
<?php if ( $blog_posts->have_posts() ) : ?>
        <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>

          <div class="item">
          <?php if ( has_post_thumbnail() ) { 
            the_post_thumbnail( get_the_ID(), 'full' );
            } ?>
              <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                <span><?php the_category(', '); ?></span>
                </div>
                <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                <ul class="post-info">
                <li><a href="#"><?php the_author();?></a></li>
                  <li><a href="#"><?php the_date();?></a></li>
                  <li><a href="#"><?php comments_number(); ?></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
        <?php else: ?>
          <p class = "no-blog-posts">
          <?php esc_html_e('Sorry, no posts matched your criteria.', 'theme-domain'); ?> 
          </p>
          <?php endif; 
          wp_reset_postdata(); ?>
    </div>
    <!-- Banner Ends Here -->