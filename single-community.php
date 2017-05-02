<?php

/**

 * Displays a Single Post

 */
get_header(); ?>
<div id="main-wrapper">
  <div id="main">
    <div class="page-content">

      <div id="news-events">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div id="communities-heading-photo">
        <?php
          $image = get_field('featured_photo');
          $size = 'large';
           // $size = 'full';

        if( !empty($image) ): 
          echo wp_get_attachment_image( $image, $size );
         endif; ?>
          <div id="communities-heading-link"><a href="#listings">View Listings</a></div>
          <div id="communities-title-box"><div id="page-heading"><h2><?php
        // $category = get_the_category(); 
        // echo $category[0]->cat_name;
        ?></h2>
          <h1><?php the_title()?></h1></div>
          <div style="font-size: 14px; color: #ffffff;"><?php the_field("short_description"); ?></div>
        </div><!-- communities-heading-photo -->
      </div><!-- news-events -->

      <div id="page-text">
      <?php 
      $pageContet = get_field('page_content');
      $video = get_field('video');
      echo $pageContent;
      echo $video;
      //the_content(); ?>
      </div>
      
      <div id="features-row">
        <div id="features"> 
      
          
          <div class="tab-content">
          <?php the_field("map_&_location"); ?>

            <?php 
            $location = get_field('google_map');
            if( !empty($location) ):
            ?>
              <div class="acf-map" style="margin-top: 20px; margin-bottom: 30px; float: left;">
                <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
                  <h4><?php the_title(); ?></h4>
                  <p class="address"><?php echo $location['address']; ?></p>
                </div><!-- marker -->
              </div><!-- acf map -->
            <?php endif; ?>
              
          </div><!-- tab content -->  

          <?php if (strlen(get_post_meta($post->ID, "overview_new", true)) > 0) : ?>
            <?php echo do_shortcode("[tabby title='Overview']"); ?>
            <div class="tab-content">
              <?php the_field("overview_new"); ?>
            </div><!--- / tab --> 
          <?php endif; ?>


          <?php if (strlen(get_post_meta($post->ID, "features_new", true)) > 0) : ?>
            <?php echo do_shortcode("[tabby title='Features']"); ?>
            <div class="tab-content">
              <?php the_field("features_new"); ?>
            </div><!--- / tab -->  
           <?php endif; ?>


          <?php if (strlen(get_post_meta($post->ID, "points_of_interest_new", true)) > 0) : ?>
            <?php echo do_shortcode("[tabby title='Points of Interest']"); ?>
            <div class="tab-content">
              <?php the_field("points_of_interest_new"); ?>
            </div><!--- / tab --> 
          <?php endif; ?>


          
          <?php if (strlen(get_post_meta($post->ID, "pricing_new", true)) > 0) : ?>
            <?php echo do_shortcode("[tabby title='Pricing']"); ?>
            <div class="tab-content">
              <?php the_field("pricing_new"); ?>
            </div><!--- / tab -->  
           <?php endif; ?>

           <?php if (strlen(get_post_meta($post->ID, "showing_request", true)) > 0) : ?>
            <?php echo do_shortcode("[tabby title='Request a Showing']"); ?>
            <div class="tab-content">
              <?php the_field("showing_request"); ?>
            </div><!--- / tab -->  
           <?php endif; ?>


        <?php echo do_shortcode("[tabbyending]"); ?> 
        </div><!-- features -->


        <?php 
        $rab = get_field('request_a_brochure');
        if( $rab != '' ) : ?>
          <div id="features-agents">
            <h2>Request a Brochure</h2>

            <?php echo $rab; ?>

          </div><!-- features-agents -->
        <?php endif; ?>
      </div><!--- / features row -->


           <div id="communities-gallery" class="no-mobile">
       <?php 
      $images = get_field('gallery');
      if( $images ): ?>
      <h2>Photo Gallery</h2>
              <?php 
              $i=0;
              foreach( $images as $image ): $i++; 

              if( $i == 3 ) {
                $photoClass = 'last';
                $i = 0;
              } else {
                $photoClass = 'first';
              }
              ?>
                  <div class="community-gallery-photo <?php echo $photoClass; ?>">
                      <a href="<?php echo $image['url']; ?>" class="group1">
                        <img src="<?php echo $image['sizes']['communities-gallery']; ?>" alt="<?php echo $image['alt']; ?>" />
                      </a>
                     <!--  <p><?php echo $image['caption']; ?></p> -->
                  </div><!-- community-gallery-photo -->
              <?php endforeach; ?>
      <?php endif; ?>
      </div><!-- communities-gallery -->


<!-- 

####################   Only show on mobile 


 -->
      <div class="slider-mobile">
       <?php 
      $images = get_field('gallery');
      if( $images ): ?>
      <h2>Photo Gallery</h2>

      <div class="flexslider4">
        <ul class="slides">
      
              <?php 
              $i=0;
              foreach( $images as $image ): $i++; 

              if( $i == 3 ) {
                $photoClass = 'last';
                $i = 0;
              } else {
                $photoClass = 'first';
              }
              ?>
                 <li class="img-slide">
                        <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                 </li>
              <?php endforeach; ?>
              </ul>
          </div>
      <?php endif; ?>
      </div><!-- communities-gallery -->


    </div><!-- page-content -->
  </div><!-- main -->
</div><!-- main-wrapper -->

<div id="main2">

<div id="communities-listings">

  <?php if (strlen(get_post_meta($post->ID, "current_listings", true)) > 0) : ?>     
    <div id="current-listings-header"><a name="listings"></a><h2>Current Listings</h2></div>
    <div id="current-listings-frame">
      <?php the_field("current_listings"); ?>
    </div><!-- current-listings-frame -->
  <?php endif; ?>

<div class="blue-button"><a href="<?php bloginfo('url'); ?>/apartment-communities/">view all communities</a></div><!-- -->
</div><!-- main2 -->
<?php endwhile; endif; ?>   

<?php get_footer(); ?>