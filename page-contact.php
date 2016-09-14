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
    <?php the_content(); ?>
  </div><!-- #page-text-left -->

<div id="page-right-column">

  <div class="about-office">
    <div class="about-office-image js-blocks">
    <?php

      $image = get_field('office_photo', 'option');
      $url = $image['url'];
      $title = $image['title'];
      $alt = $image['alt'];
      $caption = $image['caption']; 
      // thumbnail or custom size that will go
      // into the "thumb" variable.
      $size = 'office_photo';
      $thumb = $image['sizes'][ $size ];
      $width = $image['sizes'][ $size . '-width' ];
      $height = $image['sizes'][ $size . '-height' ];
    if( !empty($image) ): ?>
    	<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
    <?php endif; ?>
    </div><!-- about-office-image -->

    <div class="about-office-content js-blocks">
      <div class="about-office-text">
        <h2><?php the_field('office_name', 'option'); ?></h2>
        <?php the_field('office_address', 'option'); ?>
        <br><?php the_field('office_address_line2', 'option'); ?>
        <br><?php the_field('office_address_line3', 'option'); ?>
        <div class="sidebar-directions">
          <a href="<?php the_field('google_map', 'option'); ?>" target="_blank">Get Directions</a>
        </div><!-- sidebar-directions -->
      </div><!-- about-office-text -->
    </div><!-- about-office-content -->
  </div><!--about-office -->

  <div class="about-office">
    <div class="about-office-image js-blocks">
    <?php

      $image = get_field('office_photo2', 'option');
      $url = $image['url'];
      $title = $image['title'];
      $alt = $image['alt'];
      $caption = $image['caption']; 
      // thumbnail or custom size that will go
      // into the "thumb" variable.
      $size = 'office_photo';
      $thumb = $image['sizes'][ $size ];
      $width = $image['sizes'][ $size . '-width' ];
      $height = $image['sizes'][ $size . '-height' ];
    if( !empty($image) ): ?>
    	<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
    <?php endif; ?>
    </div><!--  about-office-image -->

    <div class="about-office-content js-blocks">
      <div class="about-office-text">
        <h2><?php the_field('office_name2', 'option'); ?></h2>
        <?php the_field('office_address2', 'option'); ?>
        <br><?php the_field('office_address2_line2', 'option'); ?>
        <br><?php the_field('office_address2_line3', 'option'); ?>
        <div class="sidebar-directions">
          <a href="<?php the_field('google_map2', 'option'); ?>" target="_blank">Get Directions</a>
        </div><!-- about-office-image -->
      </div><!-- about-office-text -->
    </div><!-- about-office-content -->
  </div><!--  about-office -->


  <div class="about-office">
    <div class="about-office-image js-blocks">
      <?php

        $image = get_field('office_photo3', 'option');
        $url = $image['url'];
        $title = $image['title'];
        $alt = $image['alt'];
        $caption = $image['caption'];
        // thumbnail or custom size that will go
        // into the "thumb" variable.
        $size = 'office_photo';
        $thumb = $image['sizes'][ $size ];
        $width = $image['sizes'][ $size . '-width' ];
        $height = $image['sizes'][ $size . '-height' ];
      if( !empty($image) ): ?>
      	<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
      <?php endif; ?>
    </div><!-- about-office-image -->

    <div class="about-office-content js-blocks">
      <div class="about-office-text">
        <h2><?php the_field('office_name3', 'option'); ?></h2>
        <?php the_field('office_address3', 'option'); ?>
        <br><?php the_field('office_address3_line2', 'option'); ?>
        <br><?php the_field('office_address3_line3', 'option'); ?>
        <div class="sidebar-directions">
          <a href="<?php the_field('google_map3', 'option'); ?>" target="_blank">Get Directions</a>
        </div><!-- sidebar-directions" -->

        
      <div class="offices-phone">
        phone: <a href="tel:704-749-3561">704-749-3561</a>
      </div><!-- offices-phone -->
      </div><!-- about-office-text -->
      
    </div><!-- about-office-content -->

  </div><!-- about-office -->

</div><!-- page-right-column -->


</div><!-- / page content -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>