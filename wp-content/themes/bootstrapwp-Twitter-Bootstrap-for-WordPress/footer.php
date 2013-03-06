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
	<footer>
		<div class="container">
			<div class="row">
				<div class="footer-block foot-left span4" id="foot-remtech-about">
					<h3>About Remtech</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at tortor metus, et rhoncus est. Ut fermentum pulvinar fermentum. Vestibulum vulputate est nulla. Etiam cursus faucibus augue. Suspendisse bibendum tempus neque at viverra. Fusce pulvinar, diam ut venenatis egestas, nisi lectus interdum ipsum, et scelerisque mi erat non enim. Quisque feugiat urna quis neque dapibus imperdiet. Phasellus varius ante aliquet diam vestibulum fermentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris commodo volutpat posuere. Mauris congue sodales nunc.</p>
		      		<p class="copyright">&copy; <?php bloginfo('name'); ?> <?php the_time('Y') ?></p>
	      		</div><!-- /foot-left -->
	      		
	      		<div class="footer-block foot-center span3" id="foot-services">
	      			<h3>Our Services</h3>
	      			<ul class="services-list">
	      				<li>Web/Mobile Design</li>
						<li>Web/Mobile Development</li>
						<li>CMS Integration</li>
						<li>Branding</li>
						<li>SEO</li>
						<li>Social Media Planning</li>
						<li>Creative Design</li>
						<li>Business Marketing</li>
	      			</ul>
	      		</div><!-- /foot-center -->
	      		
	      		<div class="footer-block foot-right span4" id="foot-contact">
	      			<h3>Get in Touch</h3>
	      			<p><strong>Call:</strong> 555-555-5555</p>
	      			<form method="post" class="foot-form" id="quick-contact" action="">
	      				<label class="form-label label" for="name">Name<span class="required">*</span></label>
	      				<input name="name" id="name" class="form-input" required="required" placeholder="John Smith"/>
	      				<label class="form-label label" for="email">Email<span class="required">*</span></label>
	      				<input name="email" id="email" class="form-input" required="required" placeholder="john@domain.com"/>
	      				<label class="form-label label" for="name">Name<span class="required">*</span></label>
	      				<textarea class="form-input" rows="5" name="message" id="message"></textarea>
	      				<input type="submit" value="Send Message" class="btn btn-green" />
	      				
	      			
	      			</form>
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