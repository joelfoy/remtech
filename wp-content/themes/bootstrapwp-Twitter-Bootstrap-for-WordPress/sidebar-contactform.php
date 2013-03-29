
<?php
/**
 * The Sidebar containing the contact form drawer.
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */
?>


<section class="contact-drawer">
	<div class="container">
		<div class="row">
			<div class="contact-left span3">
			<h3>Contact Remtect</h3>
			<p>Here are places you can reach us.</p>
			<ul class="contact-items">
				<li class="phone">555-555-5555</li>
				<li class="email"><a href="mailto:info@remtech.us">info@remtech.us</a></li>
				<li class="addy">55 Design Street, Atlanta, GA 30303</li>
			</ul>
			<ul class="social">
				<li class="twitter"><i class="icon-twitter"></i><a href="http://www.twitter.com/jfoy" target="_blank">@jfoy</a></li>
				<li class="linkedin"><i class="icon-linkedin-sign"></i><a href="http://www.linkedin.com/#" target="_blank">Remtech on LinkedIn</a></li>
				
			</ul>
			</div>
			
			<div class="contact-right span9">
				<form class="contact-form" id="primary-contact" method="post" action="">
					<input type="hidden" name="refer" id="refer" value="<?php print $_SERVER['HTTP_REFERER']; ?>" />
					<input type="hidden" name="timestamp" value="<?php print $SERVER['REQUEST_TIME']; ?>" />
					<div class="row">
						<div id="contact-why" class="span3 field-container">
							<select id="why" name="why">
								<option value="none">State your purpose:</option>
								<option value="message">Send a message to the Remtech crew</option>
								<option value="site-redesign">Looking for a website redesign</option>
								<option value="site-new">Looking for a NEW website</option>
							</select>
						</div>
						<div id="contact-name" class="span3 field-container">
							<input type="text" name="name" id="name" placeholder="Full Name" />
						</div>
						<div id="contact-email" class="span3 field-container">
							<input type="email" name="email" id="email" placeholder="email@website.com" />
						</div>
					</div>
					<div class="row">
						<div id="contact-message" class="span9 field-container">
							<textarea name="message" id="message" rows="8" placeholder="Enter your message here..."></textarea>
						</div>
					</div>
					<input type="submit" id="contact-submit" class="btn btn-green" value="Contact Remtech" />
				</form>
			</div>

		</div>
	</div>
	<div id="close-contact"><i class="icon-chevron-up icon-white"></i>Close</div>
</section><!-- /.contact-drawer -->
