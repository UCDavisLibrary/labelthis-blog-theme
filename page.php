<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

	<article class="blog-post small-12 medium-8 medium-offset-2 large-6 large-offset-3 columns">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="post" id="post-<?php the_ID(); ?>">

			<h2><?php the_title(); ?></h2>

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>

			</div>

			<?php edit_post_link(__('Edit this entry','html5reset'), '<p>', '</p>'); ?>

		</article>


		<?php endwhile; endif; ?>
  </article>
  <div class="row">
  
</div>
</section> <!-- blog row -->

<?php get_footer(); ?>
