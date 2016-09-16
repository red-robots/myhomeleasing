<?php 

get_header(); 

?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="main-wrapper">
	<div id="main">
		<div class="page-content">
			<div id="page-heading"><h1><?php the_title()?></h1></div>
			<div id="page-text"><?php the_content(); ?></div>

			<?php if( get_field('action_button_link')) : ?>
				<div class="blue-button">
					<a href="<?php the_field('action_button_link'); ?>">APPLY NOW</a>
				</div>
			<?php endif; ?>

		</div><!-- / page content -->
<?php endwhile; endif; ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>