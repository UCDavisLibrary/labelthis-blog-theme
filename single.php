<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
 <section class="blog-post-header small-12 columns">
   <a target="_self" href="https://labelthisblog.library.ucdavis.edu/"><img src="https://prototypes.lib.ucdavis.edu/images/label-this-blog-title-image.svg" alt="Label This Project title image"/></a>
   <!-- img class="small-title" src="../../images/label-this-title-image-sm.svg" alt=""-->
 </section>
 <article class="blog-post small-12 medium-8 medium-offset-2 large-6 large-offset-3 columns">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  		<section <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <header class="article-header">
  				<h4><?php posted_on(); ?></h4>
  		    <h1 class="entry-title"><?php the_title(); ?></h1>
  				<h3 class="byline">by <?php the_author(); ?></h3>
  			</header>
  			<div class="entry-content">

  				<?php the_content(); ?>

  				<?php wp_link_pages(array('before' => __('Pages: '), 'next_or_number' => 'number')); ?>

  				<?php the_tags( __('Tags: '), ', ', ''); ?>



  			</div>

  			<?php edit_post_link(__('Admins: Edit this entry'),'','.'); ?>
        <?php post_navigation(); ?>

  		</section>

  	<?php endwhile; endif; ?>

</article>
<section class="blog-sidebar small-12 medium-8 medium-offset-2 large-6 large-offset-3 columns">
<?php get_sidebar(); ?>
</section>
</section> <!-- blog row -->


<?php get_footer(); ?>
