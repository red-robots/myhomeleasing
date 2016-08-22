

<?php get_header(); ?>


<div id="home-row1">
<div id="home-slider">
<?php 
remove_all_filters('posts_orderby');
// Query the Post type Slides
$querySlides = array(
'post_type' => 'post',
'posts_per_page' => '-1',
'category_name' => 'featured',
'orderby'        => 'rand',
//'order' => 'ASC'

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
              <!-- commphoto -->
              <div class="communities-photo">

              <?php
              $image = get_field('featured_photo');
              $size = 'large';
              if( !empty($image) ): ?>
                <?php echo wp_get_attachment_image( $image, $size ); ?>
              <?php endif; ?>

              </div>
              <div class="communities-short-description-wrapper">
                <div class="communities-short-description-content">
                  <div class="communities-short-description">
                    <h3><?php
                    $category = get_the_category(); 
                    echo $category[0]->cat_name;
                    ?></h3>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <a href="<?php the_permalink(); ?>"><?php the_field("short_description"); ?></a>
                  </div>
                </div>
              </div>
            </li>
            <?php endwhile; ?>
         </ul><!-- slides -->
</div><!-- .flexslider -->
<?php endif; // end loop ?>

  <div id="find-box-wrapper">
    <div id="find-box">

      <?php echo do_shortcode("[tabby title='Hot Properties']"); ?>
      <div id="home-search">
          <?php //echo do_shortcode('[idx mylistings="1" city="Charlotte" type="rent"]'); ?>
      </div><!-- home search -->

      <?php echo do_shortcode("[tabby title='For Renters']"); ?>
      <div class="find-box-content">
      </div><!-- find-box-content -->

      <?php echo do_shortcode("[tabby title='Let us manage']"); ?>
      <div class="find-box-content">
        
      </div><!-- find-box-content -->

      <?php echo do_shortcode("[tabby title='Quick Search']"); ?>
      <div id="home-search">
       <?php get_template_part('inc/manage-form'); ?>
      </div><!-- home search -->

    

    <?php echo do_shortcode("[tabbyending]"); ?> 


    </div><!-- find-box -->
  </div><!-- find-box-wrapper -->
         
    <?php wp_reset_postdata(); ?>
</div>
</div>
<div id="home-row2">
<div id="home-row2-row1">
<div id="home-row2-row1-content">
<div id="home-row2-row1-content-heading"><a href="<?php bloginfo('url'); ?>/townhome-communities">SHOP BY COMMUNITY</a></div>
<!-- -->
<div id="home-slider2">
<?php 
// Query the Post type Slides
$querySlides = array(
  'post_type' => 'post',
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
    <a href="http://myhomeleasing.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/mth-logo-2016.png" alt="" border="0"></a>
  </div><!-- logo -->

</div>
</div>
</div>
</div>
<div id="home-row3">

<div id="home-row3-content">

<div id="home-row3-content-heading">Why hire a property manager?</div>
<?php $recent = new WP_Query("page_id=22"); while($recent->have_posts()) : $recent->the_post();?>

<div id="home-row3-content-box1">
  <a href="<?php the_field("link_one"); ?>"><img src="<?php bloginfo('template_url'); ?>/images/box1image.png" alt="" border="0"></a>
  <div class="home-row3-content-link">
    <a href="<?php the_field("link_one"); ?>"><?php the_field("link_one_text"); ?></a>
  </div>
</div>

<div id="home-row3-content-box2"><a href="<?php the_field("link_two"); ?>"><img src="<?php bloginfo('template_url'); ?>/images/box2image.png" alt="" border="0"></a><div class="home-row3-content-link"><a href="<?php the_field("link_two"); ?>"><?php the_field("link_two_text"); ?></a></div></div>

<div id="home-row3-content-box3"><a href="<?php the_field("link_three"); ?>"><img src="<?php bloginfo('template_url'); ?>/images/box3image.png" alt="" border="0"></a><div class="home-row3-content-link"><a href="<?php the_field("link_three"); ?>"><?php the_field("link_three_text"); ?></a></div></div>
<?php endwhile; wp_reset_postdata(); // end of the loop. ?>
</div>
</div>
<div id="home-row4">
<div id="home-row4-content">
<h2>OUR AGENTS</h2>
<!-- -->
<div id="home-agents">
<?php
$args = array (
'role' => 'Agent',
'number' => 4,
'orderby' => 'rand',
);
$wp_user_query = new WP_User_Query($args);
$authors = $wp_user_query->get_results();
if (!empty($authors)) {
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
<div class="agent-profile-box">
<div class="agent-photo"><a href="<?php echo $link; ?>"><img src="<?php echo $thumb; ?>" /></a></div>
<div class="agent-profile-box-content">
<h2><a href="<?php echo $link; ?>"><?php echo $agentName; ?> <?php echo $agentName2; ?></a></h2>
</div>
</div>
<?php }
} 

?></div>
<!-- -->
<div id="agents-box"><div id="agents-box-padding">
<h2>Need help selecting an agent?</h2>
Fill out a simple form to get matched with an agent that meet your needs.
<a href="<?php bloginfo('url'); ?>/need-help-selecting-an-agent"><img src="<?php bloginfo('template_url'); ?>/images/agents-go-arrow.png" alt="" border="0"></a></div>
</div>
<div id="view-all-agents">
<div id="view-all-agents-box"><a href="<?php bloginfo('url'); ?>/my-townhome-agents">VIEW ALL AGENTS</a></div>
</div>
</div>
</div>

<?php get_footer(); ?>

