<?php /*
* Template Name: Property Management
*/
get_header(); 

?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="main-wrapper">
	<div id="main">
		<div class="page-content">
			<div id="page-heading">
				<h1><?php the_title()?></h1>
				<a class="analytics cat:community action:call" href="tel:+17049275477">704-927-5477</a>
        		<div class="clear"></div>
			</div>
			<div id="page-text">
				<?php 

				if(is_page('maintenance')) { ?>
				<div class="blue-button">
					<a target="_blank" href="https://mytownhome.appfolio.com/connect/login">ONLINE MAINTENANCE REQUEST</a>
				</div>

				<?php }

				the_content(); 

				?>
			</div>

			<?php if( get_field('action_button_link')) : ?>
				<div class="blue-button">
					<a href="<?php the_field('action_button_link'); ?>">APPLY NOW</a>
				</div>
			<?php endif; ?>

		</div><!-- / page content -->
<?php endwhile; endif; ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>