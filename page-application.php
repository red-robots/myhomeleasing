<?php 
/*
* Template Name: Application
*
*
*/

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="main-wrapper">
	<div id="main">

		<div class="page-content">
		     <div id="page-heading">
		     	<h1><?php the_title()?></h1>
		     </div><!-- page heading -->
			<div id="page-text"><?php the_content(); ?></div>
			<script type='text/javascript' charset='utf-8'>
			  document.write(unescape("%3Cscript src='" + (('https:' == document.location.protocol) ? 'https:' : 'http:') + "//mytownhome.appfolio.com/javascripts/listing.js' type='text/javascript'%3E%3C/script%3E"));
			</script>

			<script type='text/javascript' charset='utf-8'>
			  Appfolio.Listing({
			    hostUrl: 'mytownhome.appfolio.com',
			    //propertyGroup: 'My Group Name',
			    height: '500px',
			    width: '100%'
			  });
			</script>
		</div><!-- / page content -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>