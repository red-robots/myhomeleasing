<?php 
/**
* Template Name: About
*/
 get_header(); ?>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div id="main-wrapper">
<div id="main2">



<div class="page-content">

     <div id="page-heading"><h1><?php the_title()?></h1></div>
 <div id="page-text-left"><?php the_content(); ?>
 
 
 <div id="about-links">
 
<div class="about-link1">
<h2><a href="<?php bloginfo('url'); ?>/leadership">Leadership</a></h2>

<a href="<?php bloginfo('url'); ?>/leadership"><img src="<?php bloginfo('template_url'); ?>/images/leadership-photo.png" alt="" border="0"></a>

<p><a href="<?php bloginfo('url'); ?>/leadership">Learn more about MyTownhome’s leaders and staff</a>
</div>

<div class="about-link1">
<h2><a href="<?php bloginfo('url'); ?>/my-home-leasing-agents">Our Agents</a></h2>
<a href="<?php bloginfo('url'); ?>/my-home-leasing-agents"><img src="<?php bloginfo('template_url'); ?>/images/our-agents.jpg" alt="" border="0"></a>

<p><a href="<?php bloginfo('url'); ?>/my-home-leasing-agents">Find an expert to help you navigate the process of buying or selling a home.</a>
</div>
  
<div class="about-link2">
<h2><a href="<?php bloginfo('url'); ?>/careers">Careers</a></h2>

<a href="<?php bloginfo('url'); ?>/careers"><img src="<?php bloginfo('template_url'); ?>/images/my-townhome-careers-realtor.jpg" alt="" border="0"></a>

<p><a href="<?php bloginfo('url'); ?>/careers">Interested in a career with MyTownhome? See what we have to offer.</a>
</div>
 
 
 </div>
 
 
 </div>
     

<div id="page-right-column">
  <?php get_template_part('inc/offices'); ?>
</div><!-- page-right-column -->



 </div><!-- / page content -->





<?php endwhile; endif; ?>



<?php //get_sidebar(); ?>

<?php get_footer(); ?>