<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
      <section class="blog-header small-12 columns">
    		<img src="https://prototypes.lib.ucdavis.edu/images/label-this-blog-title-image.svg" alt="Label This Project title image"/>
    		<!-- img class="small-title" src="../../images/label-this-title-image-sm.svg" alt=""-->
    	</section>
      <section class="blog-river small-12 medium-7 medium-offset-1 columns">
      	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      		  <div class="blog-post-item blog-post-item-featured">
      		    <h4><?php posted_on(); ?></h4>
      		    <h1><a href="<?php the_permalink() ?>" <?php post_class() ?> id="post-<?php the_ID(); ?>"><?php the_title(); ?></a></h1>
      		    <div class="row">
      		      <!--div class="small-4">
                  <img src="../../images/fpo_square.png" alt="Square Thumbnail">
                </div -->
      		      <div>
      		        <?php the_excerpt(); ?>
      		      </div>
      		    </div>
      		  </div>

      	<?php endwhile; ?>
        <?php else : ?>

          <h2><?php _e('Nothing Found','html5reset'); ?></h2>

        <?php endif; ?>
        <?php post_navigation(); ?>

      </section>
      <section class="blog-sidebar small-12 medium-3 columns">
        <?php get_sidebar(); ?>
      </section>

    </section> <!-- blog row -->
<?php get_footer(); ?>
