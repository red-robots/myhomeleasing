<?php 
/*
*	Template Name: For Renters
*
*
*
*/
get_header(); 

?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="main-wrapper">
	<div id="main">

		<div class="page-content">
			<div id="page-heading">
				<h1><?php the_title()?></h1>
			</div><!-- page text -->
			<div id="page-text">
				<?php 

				$intro = get_field('intro');
				$hot_properties = get_field('hot_properties');
				$hot_properties_link = get_field('hot_properties_link');
				$full_service = get_field('full_service');
				$full_service_link = get_field('full_service_link');
				$self_service = get_field('self_service');
				$self_service_link = get_field('self_service_link');


				?>

				<?php if( $intro != '' ) { ?>
					<section>
						<?php echo $intro; ?>
					</section>
				<?php } ?>

				<?php if( $hot_properties != '' ) { ?>
					<section>
						<?php echo $hot_properties; ?>
					</section>
				<?php } ?>

				<?php if( $hot_properties_link != '' ) { ?>
					<div class="newsletter-signup">
						<a href="<?php echo $hot_properties_link; ?>">Hot Properties</a>
					</div>
				<?php } ?>

				<?php if( $full_service != '' ) { ?>
					<section>
						<?php echo $full_service; ?>
					</section>
				<?php } ?>

				<?php if( $full_service_link != '' ) { ?>
					<div class="newsletter-signup">
						<a href="<?php echo $full_service_link; ?>">Full Service</a>
					</div>
				<?php } ?>

				<?php if( $self_service != '' ) { ?>
					<section>
						<?php echo $self_service; ?>
					</section>
				<?php } ?>

				<?php if( $self_service_link != '' ) { ?>
					<div class="newsletter-signup">
						<a href="<?php echo $self_service_link; ?>">Self Service</a>
					</div>
				<?php } ?>


			</div><!-- page text -->
		</div><!-- / page content -->

<?php endwhile; endif; ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>