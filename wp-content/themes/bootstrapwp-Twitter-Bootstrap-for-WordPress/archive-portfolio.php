<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.6
 */

get_header();
if (have_posts() ) ;?>
<div id="hero-<?php echo the_ID(); ?>" class="services-hero"></div>
	
<section class="hero-bar bar-portfolio">
    <div class="container">
		<header class="post-title">
       		<h1>Our Work</h1>
      	</header>
      	<ul class="load-portfolio clearfix">
			<li class="active-filter"><a href="#" class="all">All</a></li>
			<?php
        $args = array( 'taxonomy' => 'portfolio-type' );
        $terms = get_terms('portfolio-type', $args);
        $count = count($terms); $i=0;
        if ($count > 0) {
            $cape_list = '';
            foreach ($terms as $term) {
                $i++;
                $term_list .= '<li><a href="#" class="'. $term->slug .'">' . $term->name . '</a></li>';
                if ($count != $i) $term_list .= ''; else $term_list .= '';
            }
            echo $term_list;
        }
         ?>
		</ul>
    </div>
</section>

<div class="container ">
<div class="content">
	
	<ul class="row portfolio-grid">
		<?php while ( have_posts() ) : the_post(); ?>
		<li data-id="portfolio-<?php echo get_the_ID(); ?>" data-type="<?php 
			$slugs = get_the_terms( $post->ID, 'portfolio-type' );
			foreach( $slugs as $slug ) echo '' . $slug->slug. ' ';
			 ?>" <?php post_class('span3'); ?>>
			<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h3 class="hidden"><?php the_title('');?></h3>
			        <div class="">
			        	<?php kd_mfi_the_featured_image( 'preview-image', 'portfolio', 'preview-image', $post->ID ); ?>
			        </div><!-- /.span2 -->
			</a>
		</li><!-- /.post_class -->
		<?php endwhile; ?>
			<?php bootstrapwp_content_nav('nav-below');?>

	</ul><!-- /.span12 -->
	</div><!-- /.content -->
</div><!-- /.container -->
		<?php get_footer(); ?>