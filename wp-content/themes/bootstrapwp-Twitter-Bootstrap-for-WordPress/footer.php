<?php
/**
 * Default Footer
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: July 16, 2012
 */
?>
    <!-- End Template Content -->
	<footer class="page-footer">
	<?php if(is_page('home')) { get_sidebar('recentclients'); } ?>
		<div class="container">
			<div class="row">
				<div class="footer-block foot-left span4" id="foot-remtech-about">
					<h3>About Remtech</h3>
					<p>Remtech LLC is an Atlanta based web design and development firm.  We offer Web-related and creative arts services to businesses and individuals across the world.  Our service portfolio includes website design, creative design, print media design, web development, ecommerce, search engine optimization, etc. </p>
		      		<p class="copyright">&copy; <?php bloginfo('name'); ?> <?php the_time('Y') ?></p>
	      		</div><!-- /foot-left -->
	      		
	      		<div class="footer-block foot-center span3" id="foot-services">
	      			<h3>Our Services</h3>
	      			<ul class="services-list">
	      				<li><i class="icon-ok"></i>Web/Mobile Design</li>
						<li><i class="icon-ok"></i>Web/Mobile Development</li>
						<li><i class="icon-ok"></i>CMS Integration</li>
						<li><i class="icon-ok"></i>Branding</li>
						<li><i class="icon-ok"></i>SEO</li>
						<li><i class="icon-ok"></i>Social Media Planning</li>
						<li><i class="icon-ok"></i>Creative Design</li>
						<li><i class="icon-ok"></i>Business Marketing</li>
	      			</ul>
	      		</div><!-- /foot-center -->
	      		
	      		<div class="footer-block foot-right span4" id="foot-contact">
	      			<h3>Featured Project</h3>
					<div class="featured-frame">
					<a href="<?php bloginfo('url');?>/portfolio"><?php kd_mfi_the_featured_image( 'preview-image', 'page', 'preview-image', 4 ); ?></a>	      			
					</div>

	      		</div>
      		
      		</div>
      		
    	</div> <!-- /container -->
	</footer>
<?php wp_footer(); ?>
<?php // Load page specific javascript 
	if (is_post_type_archive('portfolio'))	{ ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.quicksand.js" type="text/javascript"></script>
	<?php } ?>	

  </body>
</html>