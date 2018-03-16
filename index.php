

<?php get_header(); ?>


<div id="home-row1">
<div id="home-slider">
<?php 
remove_all_filters('posts_orderby');
// Query the Post type Slides
$querySlides = array(
'post_type' => 'community',
'posts_per_page' => '-1',
'orderby'        => 'rand',
'tax_query' => array(
    array(
      'taxonomy' => 'neighborhood', // your custom taxonomy
      'field' => 'slug',
      'terms' => array( 'featured' ) // the terms (categories) you created
    )
  ),
);
// The Query

$the_query = new WP_Query( $querySlides );

// The Loop
 if ( $the_query->have_posts()) : ?>

<div class="flexslider">

  <ul class="slides">
      <?php while ( $the_query->have_posts() ) : ?>
        <?php $the_query->the_post(); ?>

            <li> 

            <?php
       // check if the post has a Post Thumbnail assigned to it.
            if ( has_post_thumbnail() ) {
              the_post_thumbnail();
            } 
            ?>
             
              <div class="communities-photo">
                <?php
                $image = get_field('featured_photo');
                $size = 'hero';
                if( !empty($image) ):
                   echo wp_get_attachment_image( $image, $size ); 
                endif; ?>
              </div><!-- communities-photo -->
              
                  <div class="communities-short-description">
                    <h3><?php
                    $category = get_the_category(); 
                    echo $category[0]->cat_name;
                    ?></h3>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <a href="<?php the_permalink(); ?>"><?php the_field("short_description"); ?></a>
                  </div><!-- communities-short-description -->
                
            </li>
            <?php endwhile; ?>
         </ul><!-- slides -->
</div><!-- .flexslider -->
<?php endif; // end loop ?>




  </div><!-- find-box-wrapper -->

    <div id="find-box-wrapper">
   

    <section class="tab-buttons">
      <div class="col">
        <!-- <a href="https://myhomeleasing.localhomesearch.net/idx/?op=query&stype=area&_srf=1&subv2=&proptype=rnt&my=1&street=&city=&zip=&price_min=&price_max=&beds=&baths=&sqft=&acreage="> -->
        <a href="https://myhomeleasing.localhomesearch.net/mhlmap">
          
          <div class="icon"><i class="fa fa-key" aria-hidden="true"></i></div>
          <h3>Map Search</h3>
        </a>
      </div><!-- col -->
      <div class="col">
        <a href="<?php bloginfo('url'); ?>/for-renters/">
          
          <div class="icon"><i class="fa fa-users" aria-hidden="true"></i></div>
          <h3>Request Showing</h3>
        </a>
      </div><!-- col -->
       <div class="col">
        <a href="https://myhomeleasing.localhomesearch.net/idx/?op=query&stype=area&_srf=1&subv2=&proptype=rnt&street=&city=&zip=&price_min=&price_max=&beds=&baths=&sqft=&acreage=&furn=on">
          <div class="icon"><i class="fa fa-television" aria-hidden="true"></i></div>
          <h3>Furnished Rentals</h3>
        </a>
      </div><!-- col -->
      <div class="col">
        <a href="<?php bloginfo('url'); ?>/property-management-services/">
          <div class="icon"><i class="fa fa-check" aria-hidden="true"></i></div>
          <h3>Let Us Manage</h3>
        </a>
      </div><!-- col -->

     <!-- <div class="quick-search">
        <h3>Quick Search</h3>
         <?php //get_template_part('inc/manage-form'); ?>
      </div> quick search -->


    </section>


    


   
  </div><!-- find-box-wrapper -->
         
    <?php wp_reset_postdata(); ?>
</div>
</div>
<div id="home-row2">
<div id="home-row2-row1">
<div id="home-row2-row1-content">
<div id="home-row2-row1-content-heading"><a href="<?php bloginfo('url'); ?>/apartment-communities/">SHOP BY COMMUNITY</a></div>
<!-- -->
<div id="home-slider2">
<?php 
// Query the Post type Slides
$querySlides = array(
  'post_type' => 'community',
'posts_per_page' => '-1'
);
// The Query
$the_query = new WP_Query( $querySlides );
?>
<?php 
// The Loop
 if ( $the_query->have_posts()) : ?>
<div class="flexslider2">
<ul class="slides">
        <?php while ( $the_query->have_posts() ) : ?>
      <?php $the_query->the_post(); ?>
            <li> 
            <?php
if ( has_post_thumbnail() ) {
  the_post_thumbnail();
} 
?>
<div class="communities-slide-box">
<div class="communities-photo2">
<?php 
$image = get_field('featured_photo');
    $size = 'communities-gallery';
    if( !empty($image) ): ?>
       <a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image( $image, $size ); ?></a>
    <?php endif; ?>
</div>
  <div class="communities-slide-title">
    <h2>
      <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?><span class="price-range"><?php the_field("price_range"); ?></span>
      </a>
    </h2>
  </div>
</div>
            </li>
<?php endwhile; ?>
         </ul><!-- slides -->
</div><!-- .flexslider -->
         <?php endif; // end loop ?>
    <?php wp_reset_postdata(); ?>
</div>
<!-- -->
</div>
</div>
<div id="home-row2-row2">
<div id="home-row2-row2-box1">
<?php $recent = new WP_Query("page_id=22"); while($recent->have_posts()) : $recent->the_post();?>
 <?php the_content(); ?>
<?php endwhile; wp_reset_postdata(); // end of the loop. ?>
</div>
<div id="home-row2-row2-box2">
<div id="home-row2-row2-box2-text1">
We’d like to be your realtor for this home and the next. 
</div>
<div id="home-row2-row2-box2-text2">(And the one after that.)</div>
<div id="home-row2-row2-box2-text3">Whether searching for a townhome, single family home or home to lease, our priority is earning your trust and delivering value.</div>

<div id="home-row2-row2-box2-logos">
  <div class="af-logo">
    <a href="http://www.maisonproperties.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/maison-properties-logo.png" alt="" border="0"></a>
  </div><!-- logo -->
  <div class="af-logo">
    <a href="http://mytownhome.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/mth-logo-2016.png" alt="" border="0"></a>
  </div><!-- logo -->

</div>
</div>
</div>
</div>
<div id="home-row3">

<div id="home-row3-content">

<div id="home-row3-content-heading">Do you have an investment property for rent?<br>Let the experts at My Home Leasing help.</div>
<?php $recent = new WP_Query("page_id=22"); while($recent->have_posts()) : $recent->the_post();?>

  <div id="home-row3-content-box1" class="home-row3-content-box">
    <a href="<?php the_field("link_one"); ?>">
      <div class="home-icon">
        <i class="fa fa-users"></i>
      </div><!-- home icon -->
      <div class="home-row3-content-link">
        <?php the_field("link_one_text"); ?>
      </div><!-- home-row3-content-link -->
    </a>
  </div><!-- home-row3-content-box1 -->

  <div id="home-row3-content-box2" class="home-row3-content-box">
    <a href="<?php the_field("link_two"); ?>">
      <div class="home-icon">
        <i class="fa fa-home"></i>
      </div><!-- home icon -->
      <div class="home-row3-content-link">
        <?php the_field("link_two_text"); ?>
      </div><!-- home-row3-content-link -->
    </a>
  </div><!-- home-row3-content-link -->

  <div id="home-row3-content-box3" class="home-row3-content-box">
    <a href="<?php the_field("link_three"); ?>">
      <div class="home-icon">
        <i class="fa fa-check-square-o"></i>
      </div><!-- home icon -->
      <div class="home-row3-content-link">
        <?php the_field("link_three_text"); ?>
      </div><!-- home-row3-content-link -->
    </a>
  </div><!-- home-row3-content-link -->
  <div id="home-row3-content-box4" class="home-row3-content-box">
    <a href="<?php the_field("link_four"); ?>">
      <div class="home-icon">
        <i class="fa fa-phone"></i>
      </div><!-- home icon -->
      <div class="home-row3-content-link">
        <?php the_field("link_four_text"); ?>
      </div><!-- home-row3-content-link -->
    </a>
  </div><!-- home-row3-content-link -->

<?php endwhile; wp_reset_postdata(); // end of the loop. ?>
</div>
</div>
<div id="home-row4">
<div id="home-row4-content">
<h2 class="section-title">OUR AGENTS</h2>
<!-- -->
<div id="home-agents">

<?php
        $response = wp_remote_get( 'https://myhomenorthcarolina.com/wp-json/wp/v2/users?per_page=100' );
        if( is_array($response) ) :
            $code = wp_remote_retrieve_response_code( $response );
            if(!empty($code) && intval(substr($code,0,1))===2): 
                $body = json_decode(wp_remote_retrieve_body( $response),true);
                $max = count($body);
                $rand_array = array();
                if($max>3):
                    while(count($rand_array)<4):
                        $int = rand(0,$max);
                        if(!in_array($int,$rand_array)):
                          if($body[$int]['acf']&&$body[$int]['acf']['photo']):
                            $rand_array[]=$int;
                          endif;
                        endif;
                    endwhile;
                else: 
                    $rand_array = $body;
                endif;
                foreach ($rand_array as $i):
                    $author = $body[$i];
                    // get all the user's data
                    $link = $author['link'];
                    $agentName = $author['name'];
                    $antispam = null;
                    $thumb = null;
                    if(isset($author['acf'])):
                        if(isset($author['acf']['photo'])):
                            $thumb = $author['acf']['photo']['sizes'][ 'agent_feed' ];
                        endif;
                    endif;
                    if($thumb): ?>

                        <div class="agent-profile-box  js-blocks">
                          <div class="agent-photo">
                            <a href="<?php echo add_query_arg( 'from', 'myhomeleasing', $link); ?>" target="_blank"><img src="<?php echo $thumb; ?>" /></a>
                          </div><!-- agent-photo -->
                          <div class="agent-profile-box-content">
                            <h2>
                              <a href="<?php echo add_query_arg( 'from', 'myhomeleasing', $link); ?>" target="_blank">
                                <?php echo $agentName; ?>
                              </a>
                            </h2>
                          </div><!-- agent-profile-box-content -->
                        </div><!-- agent-profile-box -->
      
                    <?php endif; 
                endforeach;?>
            <?php endif;
        endif;
        /*
$args = array (
'role' => 'Agent',
'number' => 4,
'orderby' => 'rand',
);
$wp_user_query = new WP_User_Query($args);
$authors = $wp_user_query->get_results();
if (!empty($authors)) :
foreach ($authors as $author) {
$author_info = get_userdata($author->ID);
$author_id = $author_info->ID;
$link = get_author_posts_url($author_id);
$agentName = get_field( 'first_name', 'user_'.$author_id );
$agentName2 = get_field( 'last_name', 'user_'.$author_id );
$image = get_field( 'photo', 'user_'.$author_id );
$size = 'portsmall';
$thumb = $image['sizes'][ $size ];
?>
  <div class="agent-profile-box js-blocks">
    <div class="agent-photo">
      <a href="<?php echo $link; ?>">
        <img src="<?php echo $thumb; ?>" />
      </a>
    </div><!-- agent-photo -->
    <div class="agent-profile-box-content">
      <h2><a href="<?php echo $link; ?>"><?php echo $agentName; ?> <?php echo $agentName2; ?></a></h2>
    </div><!-- agent-profile-box-content -->
  </div><!-- agent-profile-box -->

<?php }
endif;

*/?></div><!-- -->

  <div id="agents-page-box">
      <a href="<?php bloginfo('url'); ?>/need-help-selecting-an-agent/">
          <h3>Need help selecting<br> an agent?</h3>
          <img src="<?php bloginfo('template_url'); ?>/images/arrow-white.png" alt="" border="0">Answer a few quick questions to get matched with an agent that best meets your needs.
      </a>
  </div><!-- agents-page-box -->
  
</div>
</div>

<?php get_footer(); ?>

