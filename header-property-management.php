<!DOCTYPE html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=9">
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/style.css?ver=01234" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/colorbox.css" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/tabs.css" />
<!-- liquid web -->

<!-- lFont Awesome -->
<script src="https://use.fontawesome.com/5001f6a306.js"></script>


<!-- -->

<script type="text/javascript" language="JavaScript">    
  // Callback to get the button working.
    function enableBtn1(){
        document.getElementById("chat-tab").style.display = "block";
    }
    //

    // Call to rendor the captcha

    var recaptcha1;
    var myCallBack = function() {
      
      //Render the recaptcha1 on the element with ID "recaptcha1"
      recaptcha1 = grecaptcha.render('recaptcha1', {
        //'sitekey' : '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI', //test key
        'sitekey' : '6LcD9BwUAAAAANiqrUTMgjkM1hrY_Dd_FTv9JOLR', // production
        'theme' : 'light',
        'callback' : 'enableBtn1'
      });
    }


</script>

<script type="text/javascript">
 
var namee;
function change(namee){
document.getElementById("Display_content").innerHTML=document.getElementById(namee).innerHTML;
 
//optional Javascript code below - To change color of clicked tab
var livetab, i;
switch(namee){
    case 'tab1':
        livetab='t1';
    break;
    case 'tab2':
        livetab='t2';
    break;
    case 'tab3':
        livetab='t3';
    break;
}
for(i=1;i<=3;i++){
    document.getElementById("t"+i).style.backgroundColor="gray";
}
document.getElementById(livetab).style.backgroundColor="silver";
//optional code ends here
 
}

</script>


<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<?php if( !is_singular('community') ) { ?>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<?php } ?>
<link href='https://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>

<!-- RECOMMEND PUTTING THESE CALLS IN THE "HEAD" SECTION, AFTER JQUERY IS DECLARED -->

<link href="https://c1203812.cdn.cloudfiles.rackspacecloud.com/jquery.autocomplete.css" rel="stylesheet" type="text/css" />
<?php the_field('google_analytics', 'option'); ?>

</head>
<body>

<div id="main-wrapper-all">
  <div id="header-wrapper">
    <div id="main-header">
      <div id="header">

        <div id="logo">
          <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="" border="0"></a> 
        </div><!-- #logo -->

        <div id="header-content-wrapper">
          <div id="header-content">
            
            <div id="header-content1">Residential Realtors serving Charlotte, NC</div><!-- header-content1 -->
          <div class="header-cont-right">
            <div id="social-icons">
              <div id="social1"><a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank"></a></div><!-- social1 -->
              <div id="social2"><a href="<?php the_field('youtube_link', 'option'); ?>" target="_blank"></a></div><!-- social1 -->
            </div><!-- social-icons -->

            <!-- <div id="header-content2">704.377.4567</div>header-content2 -->
             </div><!-- header cont right -->
          </div><!-- header-content -->
        </div><!-- header-content-wrapper -->

        <nav id="site-navigation" class="main-navigation" role="navigation">
          <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU', 'acstarter' ); ?></button>
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu',  ) ); ?>
        </nav><!-- #site-navigation -->

      </div><!-- header -->
    </div><!-- main-header -->
  </div> <!-- header-wrapper -->   
