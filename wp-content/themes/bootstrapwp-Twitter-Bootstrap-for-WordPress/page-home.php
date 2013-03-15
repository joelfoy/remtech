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

<?php if (is_page('home')) { ?>
  <!-- Hero Carousel -->
  <div id="hero" class="carousel slide">
  <ol class="carousel-indicators">
    <li data-target="#hero" data-slide-to="0" class="active"></li>
    <li data-target="#hero" data-slide-to="1"></li>
    <li data-target="#hero" data-slide-to="2"></li>
  </ol>
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div id="football" class="active item"></div>
    <div id="broadcast" class="item"></div>
    <div id="first-class" class="item"></div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#hero" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#hero" data-slide="next">&rsaquo;</a>
</div>
  <!-- end Hero Carousel -->
  <?php } ?>


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
			<?php if(!is_page('home')) { ?><h1><?php the_title();?></h1> <?php } ?>
			<?php the_content();?>
		<?php endwhile; endif; ?>
	</div>
</article>


<div class="container">

 	
</div>
<?php get_footer();?>
