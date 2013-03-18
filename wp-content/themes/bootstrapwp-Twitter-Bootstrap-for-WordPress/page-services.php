<?php
/**
 * The template for displaying services pages.
 *
 * Template Name: Services
 * Description: Page template with a content container and right sidebar
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: July 16, 2012
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div id="hero-<?php echo the_ID(); ?>" class="services-hero"></div>

<section class="hero-bar bar-portfolio">
    <div class="container">
		<header class="post-title">
       		<h1><?php the_title();?></h1>
      	</header>
      	<?php bootstrapwp_content_nav('nav-below');?>
    </div>
</section>

<div class="row">
	<div class="container">
   		<?php the_content();?>
  	</div><!--/.container -->
</div><!--/.row -->

<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
