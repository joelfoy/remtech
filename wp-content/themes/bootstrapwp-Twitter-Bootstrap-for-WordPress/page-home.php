<?php
/**
 * Template Name: Home Hero Template 
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: July 16, 2012
 */
get_header(); ?>
<section class="hero-bar home">
    <div class="container">
		<ul class="hero-actions">
			<li><a class="hero-action" id="hero-contact">Contact Remtech</a></li>
			<li><a class="hero-action" id="hero-work">See Our Work</a></li>
		</ul> 
    </div>
</section>

<section id="services-preview" class="services square-dark">
	<div class="container">
		<ul class="services-group">
			<li id="design-preview" class="preview-item">
				<h2><i class="glyph-lightbulb"></i>Design</h2>
			</li>
			<li id="create-preview" class="preview-item">
				<h2><i class="glyph-pencil"></i>Create</h2>
			</li>
			<li id="engage-preview" class="preview-item">
				<h2><i class="glyph-chart"></i>Engage</h2>
			</li>
		</ul>
	</div>
</section> 

<article class="" id="">
	<div class="container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title();?></h1>
			<?php the_content();?>
		<?php endwhile; endif; ?>
	</div>
</article>


<div class="container">
<?php get_sidebar('recentclients'); ?>
 	
</div>
<?php get_footer();?>
