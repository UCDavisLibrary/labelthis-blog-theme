<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

<article class="blog-post page-not-found small-12 medium-8 medium-offset-2 large-6 large-offset-3 columns">
  <h2><?php _e('Error 404'); ?></h2>
  <img src="https://prototypes.lib.ucdavis.edu/images/404-image.svg" alt="404 Page Not Found"/></a>
  <p>We can't find the page you are looking for. This may be because of a mistyped URL, faulty referral or out-of-date search engine listing. You should try the <a href="https://labelthis.lib.ucdavis.edu">homepage</a> instead. </p>

</article>
<section class="article-footer blog-sidebar small-12 medium-8 medium-offset-2 large-6 large-offset-3 columns">
<?php get_sidebar(); ?>
</section>
</section> <!-- blog row -->

<?php get_footer(); ?>
