<?php 

/**

* Template Name: Communities

*/

 get_header(); ?>

<div id="main-wrapper">

<div id="main2">

<div class="page-content">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="page-heading"><h1><?php the_title()?></h1></div>
<div id="page-text"><?php the_content()?></div>
<?php endwhile; endif; ?>


  <div id="filter-by"><h2>Filter by Neighborhood</h2></div>

  <div id="filter-by-categories">
    <ul>
      <li>
        <a href="<?php bloginfo('url'); ?>/townhome-communities">ALL</a>
      </li>
      <?php wp_list_cats('sort_column=name') ?>
    </ul>
  </div>

<?php 
 $the_query = new WP_Query( 'showposts=-1' ); 
  if ($the_query -> have_posts()) : while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

  <div class="community-box">
  <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    <?php 
    $image = get_field('featured_photo');
    $size = 'communities-gallery';
    if( !empty($image) ): ?>
      <?php echo wp_get_attachment_image( $image, $size ); ?>
    <?php endif; ?>
    
    <div class="communities-box-title">
      <?php the_title(); ?>
       <span class="price-range">
        <?php the_field("price_range"); ?>
       </span>
    </div><!-- community-box title -->

  </div><!-- community-box -->



<?php endwhile; endif; ?>

</div><!-- / page content -->


<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>