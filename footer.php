<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>

	</div>

	<!-- Begin Footer -->
<footer id="footer" class="source-org vcard copyright" role="contentinfo">
	<nav>
		<div class="secondary-menu">
			<ul class="menu">
				<li class="menu-item">
					<a target="_blank" href="https://labelthisblog.library.ucdavis.edu/wp-admin">Blog Admin</a>
				</li>
				<li class="menu-item">
					<a href="mailto:lib-labelthis@ou.ad3.ucdavis.edu">Questions or Comments?</a>
				</li>
			</ul>
		</div>
	</nav>
	<section class="row align-center donor-links">
		<div><img src="https://labelthis.lib.ucdavis.edu/images/uc-lib-logo-label-this.svg"></div>
		<small>This site was built for the <a href="https://www.lib.ucdavis.edu/dept/specol/">Special Collections Department</a> at the <a href="https://www.lib.ucdavis.edu">UC Davis Library</a>.<br/>
 					Help us make this and other projects possible—<a href="https://give.ucdavis.edu/ulib/">support the Library.</a></small>
	</section>
	<section class="row align-center ucd-links">
		<small class="legal"><a href="https://www.ucdavis.edu">University of California, Davis</a>, One Shields Avenue, Davis, CA 95616 | 530-752-1011<br/>
			&copy;<?php echo date("Y"); ?> The Regents of the <a href="https://www.universityofcalifornia.edu/">University of California</a>, Davis campus. All rights reserved.</small>
	</section>
	<section class="row align-spaced legal-links">
		<div><small class="legal"><a href="https://www.ucdavis.edu/privacy-and-accessibility">Privacy & Accessibility</a></small></div>
		<div><small class="legal"><a href="https://occr.ucdavis.edu/poc/">Principles of Community</a></small></div>
	</section>
</footer>
<nav id="small-menu">
	<ul class="sm-menu">
		<li class="sm-menu-item close-button">
			<a href="#large-menu">&times;</a>
		</li>
		<li class="sm-menu-item">
			<a href="https://labelthis.lib.ucdavis.edu">Home</a>
		</li>
		<li class="sm-menu-item">
			<a href="https://labelthis.lib.ucdavis.edu/mark">Mark</a>
		</li>
		<li class="sm-menu-item">
			<a href="https://labelthis.lib.ucdavis.edu/transcribe">Transcribe</a>
		</li>
		<!--li class="sm-menu-item">
			<a href="#FIXME">Search</a>
		</li-->
		<li class="sm-menu-item">
			<a href="https://labelthis.lib.ucdavis.edu/about-the-project/">About the Project</a>
		</li>
		<li class="sm-menu-item">
			<a target="_blank" href="https://labelthisblog.library.ucdavis.edu/">Blog</a>
		</li>
		<li class="sm-menu-item">
			<a target="_blank" href="mailto:lib-labelthis@ou.ad3.ucdavis.edu">Questions or Comments?</a>
		</li>
		<li class="sm-menu-item">
			<a target="_blank" href="https://labelthis.lib.ucdavis.edu/users/sign_in">Admin login</a>
		</li>
	</ul>
</nav>
<!-- End Footer -->

	<?php wp_footer(); ?>

<!-- jQuery is called via the WordPress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

<!-- Asynchronous google analytics; this is the official snippet.
         Replace UA-XXXXXX-XX with your site's ID and domainname.com with your domain, then uncomment to enable.

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-XXXXXX-XX', 'domainname.com');
  ga('send', 'pageview');

</script>
-->

</body>

</html>
