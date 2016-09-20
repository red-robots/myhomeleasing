<?php 

/**

* Template Name: Contact

*/

 get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="main-wrapper">
<div id="main2">
<div class="page-content">

  <div id="page-heading">
    <h1><?php the_title()?></h1>
  </div><!-- #page-heading -->

  <div id="page-text-left" class="contact">

  <div class="blue-button">
    <a href="<?php bloginfo('url'); ?>/application">Application</a>
  </div><!-- blue button --> 
   <div class="blue-button">
    <a href="<?php bloginfo('url'); ?>/property-management-services">Property Management</a>
  </div><!-- blue button --> 
   <div class="blue-button">
    <a href="<?php bloginfo('url'); ?>/pay-rent">Pay Rent</a>
  </div><!-- blue button -->  
  <div class="blue-button">
    <a href="<?php bloginfo('url'); ?>/maintenance">Maintenance</a>
  </div><!-- blue button -->  

    <?php the_content(); ?>
  </div><!-- #page-text-left -->

<div id="page-right-column">
  <?php get_template_part('inc/offices'); ?>
</div><!-- page-right-column -->


</div><!-- / page content -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>