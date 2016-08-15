

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
        <form name="dfform" action="http://myhomeleasing.localhomesearch.net/idx/" target="_new">
        <input type="hidden" name="op" value="query">
        <input type="hidden" name="stype" value="area">
        <input type="hidden" name="_srf" value="1">
        Property Type:<br/><select name="proptype">
        <option value="res">Single-family Homes</option>
        <option value="cnd">Condos/Townhomes</option>
        <option value="mul">Multifamily</option>
        <option value="lnd">Land</option>
        </select><br/>


        <script type="text/javascript">
        if (typeof jQuery == 'undefined') {
            document.write('<scr' + 'ipt type="text/javascript" src="http://c1203812.cdn.cloudfiles.rackspacecloud.com/jquery-min.js"></scr' + 'ipt>');
        } else {
        // nothing
        }
        </script>
          <script src="http://c1203812.cdn.cloudfiles.rackspacecloud.com/jquery.autocomplete.min.j…" type="text/javascript"></script>
          <link href="http://c1203812.cdn.cloudfiles.rackspacecloud.com/jquery.autocomplete.css" rel="stylesheet" type="text/css" />
          <script src="http://img.davisfarrell.com/js/localdata.js" type="text/javascript"></script>
          <script src="http://img.davisfarrell.com/js/autosub_so.js" type="text/javascript"></script>
        Area:<br/><select name="area">
        <option value="">Choose an area</option>
        <option value="1"> N Mecklenburg
        <option value="2"> NE Mecklenburg
        <option value="3"> E Mecklenburg
        <option value="4"> SE Mecklenburg
        <option value="sc"> S Mecklenburg
        <option value="7"> SW Mecklenburg
        <option value="8"> W Mecklenburg
        <option value="9"> NW Mecklenburg
        <option value="99"> Uptown Charlotte
        <option value="13"> Lake Norman
        <option value="15"> Lake Wylie
        <option value="42"> Mtn. Island Lake
        <option value="10"> Union County
        <option value="11"> Cabarrus County
        <option value="12"> Iredell County
        <option value="14"> Lincoln County
        <option value="16"> Gaston County
        <option value="17"> York County
        <option value="24"> Lancaster County
        <option value="35"> Chester County
        <option value="">-----</option>
        <option value="20"> Alexander County
        <option value="44"> Alleghany County
        <option value="25"> Anson County
        <option value="40"> Ashe County
        <option value="38"> Avery County
        <option value="27"> Burke County
        <option value="26"> Caldwell County
        <option value="29"> Catawba County
        <option value="36"> Chesterfield County
        <option value="22"> Cleveland County
        <option value="28"> Davidson County
        <option value="31"> Davie County
        <option value="51"> Forsyth County
        <option value="50"> McDowell County
        <option value="49"> Mitchell County
        <option value="30"> Montgomery County
        <option value="33"> Moore County
        <option value="47"> Polk County
        <option value="34"> Randolph County
        <option value="32"> Richmond County
        <option value="46"> Rockingham County
        <option value="21"> Rowan County
        <option value="45"> Rutherford County
        <option value="23"> Stanly County
        <option value="41"> Surry County
        <option value="43"> Watauga County
        <option value="39"> Wilkes County
        <option value="37"> Yadkin County
        <option value="48"> Yancey County
        </select><br/>
        Subdivision/Complex:<br/> 
        <input type="text" id="suggest1" name="subdivision" size="35" value=""/><br/>

        City : <input type="text" size="15" name="city"><br/>

        Zip: <input type="text" name="zip" size="5" maxlength="5"><br/>

        Beds: <select name="beds">
        <option value="">any</option>
        <option value="1">1+</option>
        <option value="2">2+</option>
        <option value="3">3+</option>
        <option value="4">4+</option>
        <option value="5">5+</option>
        </select><br/>

        Baths: <select name="baths">
        <option value="">any</option>
        <option value="1">1+</option>
        <option value="2">2+</option>
        <option value="3">3+</option>
        <option value="4">4+</option>
        </select><br/>

        Min. Price:<select name="price_min">
        <option value="">none</option>
        <option value="100000">$100,000
        <option value="150000">$150,000
        <option value="200000">$200,000
        <option value="250000">$250,000
        <option value="300000">$300,000
        <option value="350000">$350,000
        <option value="400000">$400,000
        <option value="450000">$450,000
        <option value="500000">$500,000
        <option value="600000">$600,000
        <option value="700000">$700,000
        <option value="800000">$800,000
        <option value="900000">$900,000
        <option value="1000000">$1,000,000
        </select><br/>

        Max Price:<select name="price_max">
        <option value="">none</option>
        <option value="100000">$100,000
        <option value="150000">$150,000
        <option value="200000">$200,000
        <option value="250000">$250,000
        <option value="300000">$300,000
        <option value="350000">$350,000
        <option value="400000">$400,000
        <option value="450000">$450,000
        <option value="500000">$500,000
        <option value="600000">$600,000
        <option value="700000">$700,000
        <option value="800000">$800,000
        <option value="900000">$900,000
        <option value="1000000">$1,000,000
        </select><br/>

        MLS #: <input type="text" name="mls" size="10" maxlength="15"><br/>

        Street name: <input type="text" name="street" size="15"><br/>

        <input type="submit" value="Search">
        </form>
      </div><!-- home search -->

      <?php echo do_shortcode("[tabby title='For Renters']"); ?>
      <div class="find-box-content">
      </div><!-- find-box-content -->

      <?php echo do_shortcode("[tabby title='Let us manage']"); ?>
      <div class="find-box-content">
      </div><!-- find-box-content -->

      <?php echo do_shortcode("[tabby title='Quick Search']"); ?>
      <div id="home-search">
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

<div id="home-row3-content-heading">SELLING?  KNOWLEDGE IS EVERYTHING.</div>
<?php $recent = new WP_Query("page_id=22"); while($recent->have_posts()) : $recent->the_post();?>

<div id="home-row3-content-box1"><a href="<?php the_field("link_one"); ?>"><img src="<?php bloginfo('template_url'); ?>/images/box1image.png" alt="" border="0"></a><div class="home-row3-content-link"><a href="<?php the_field("link_one"); ?>"><?php the_field("link_one_text"); ?></a></div></div>

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

