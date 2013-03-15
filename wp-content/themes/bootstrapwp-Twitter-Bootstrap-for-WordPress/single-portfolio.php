<?php
/**
 * Template Name: Portfolio
 *
 * 
 *
 * 
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php if ( has_post_thumbnail() ) { ?>	
<div id="hero-<?php echo the_ID(); ?>" class="portfolio-hero">
	<?php  the_post_thumbnail('hero-banner'); // Make sure there is a Featured image attached to post ?>
</div>
<?php } ?>

<section class="hero-bar bar-portfolio">
    <div class="container">
		<header class="post-title">
       		<h1><?php the_title();?></h1>
      	</header>
      	<?php bootstrapwp_content_nav('nav-below');?>
    </div>
</section>

   <div class="container">
        <div class="row content">
<div class="span8">
            <?php the_content();?>
<?php endwhile; // end of the loop. ?>

        </div><!-- /.span8 -->
          
          <?php get_sidebar('portfolio'); ?>
          
	</div><!-- /.row .content -->
</div>

<?php get_footer(); ?>