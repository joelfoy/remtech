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
<div class="container head-space">
	<header class="subhead portfolio-header" id="overview">
		<h1>Our Work</h1>
	</header>	

<div class="content">
	<header class="portfolio-filters">
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
	</header>

	<ul class="row portfolio-grid">
		<?php while ( have_posts() ) : the_post(); ?>
		<li data-id="portfolio-<?php echo get_the_ID(); ?>" data-type="<?php 
			$slugs = get_the_terms( $post->ID, 'portfolio-type' );
			foreach( $slugs as $slug ) echo '' . $slug->slug. ' ';
			 ?>" <?php post_class('span3'); ?>>
			<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h3><?php the_title();?></h3>
			        <div class="">
			        	<?php kd_mfi_the_featured_image( 'branding', 'portfolio', 'branding-image', $post->ID ); ?>
			        </div><!-- /.span2 -->
			</a>
		</li><!-- /.post_class -->
		<?php endwhile; ?>
			<?php bootstrapwp_content_nav('nav-below');?>

	</ul><!-- /.span12 -->
	</div><!-- /.content -->
</div><!-- /.container -->
		<?php get_footer(); ?>