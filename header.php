<!DOCTYPE html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=9">
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/colorbox.css" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/tabs.css" />
<!-- liquid web -->
<!-- -->
<?php if(is_page( 'Search Test' ) ) { ?>

<script src="http://img.localhomesearch.net/rs/jquery-1.10.2.min.js"></script>
    <script src="http://img.localhomesearch.net/rs/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://img.localhomesearch.net/rs/bootstrap/js/offcanvas.js"></script>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
  google.load("maps", "3",  {other_params:"sensor=false"});
 google.load("jquery", "1.3.2");

  var map;
  var infowindow;
  var firstload = false;
  var dragging = false;
  var arrMar = new Array();
  var inMap  = new Array();
  var isLoading = false;
  function initialize(def) {
    // default   35.227192 | -80.84419 
    var myLatlng = new google.maps.LatLng(35.227192,-80.84419);
    var myOptions = {
      zoom: 16,
      center: myLatlng,
    mapTypeControl: true,
    mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
    navigationControl: true,
    navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    // For more information on doing XMLHR with jQuery, see these resources:
    // http://net.tutsplus.com/tutorials/javascript-ajax/use-jquery-to-retrieve-data-from-an-xml-file/
    // http://marcgrabanski.com/article/jquery-makes-parsing-xml-easy
    //alert(map.get_center());

    //google.maps.event.addListener(map, 'zoom_changed', getResults);
    //google.maps.event.addListener(map, 'dragend', getResults);
    //google.maps.event.addListener(map, 'zoom_changed', getResults);
    google.maps.event.addListener(map,'zoom_changed',function() {
        firstload = false;
    });
    google.maps.event.addListener(map,'dragstart',function() {
        firstload = false;
        dragging = true;
    });
    google.maps.event.addListener(map,'dragend',function() {
        firstload = false;
        dragging = false;
        getResults();
    });
    google.maps.event.addListener(map, 'bounds_changed', getResults);
  }

  function createMarker(map, name, latlng) {
    var marker = new google.maps.Marker({position: latlng, map: map });
	google.maps.event.addListener(marker, 'mouseover', function() {
	  if (infowindow) infowindow.close();
      infowindow = new google.maps.InfoWindow({ content: name, maxWidth : 280, disableAutoPan : true });
      infowindow.open(map, marker);
	});
	// assuming you also want to hide the infowindow when user mouses-out
	//google.maps.event.addListener(marker, 'mouseout', function() {
	//	infowindow.close();
	//});
    google.maps.event.addListener(marker, "click", function() {
      if (infowindow) infowindow.close();
      // disableAutoPan : true
      infowindow = new google.maps.InfoWindow({ content: name, maxWidth : 280, disableAutoPan : true });
      infowindow.open(map, marker);
    });
    return marker;
  }

  function getResults() {
    var myerr;
	
	var pt = new Array();
	$('input.pt:checked').each(function() {
		pt.push($(this).attr('value'));
	});
	var ptstr = pt.join(',');

    jQuery("div.dfv2err").html('');
                jQuery("div.dfv2err").css("background","none");
                jQuery("div.dfv2err").css("padding","0px");
                jQuery("div.dfv2err").css("border","none");

    // blah blah
    var debug = dragging + ' - ' + firstload;
    if (dragging == false && firstload == false) {
     isLoading = true;
     jQuery('tr#inst').fadeOut("slow");
      inMap = [];
      var narrow = 0;
      for (var i=0; i < document.idx.elements.length; i++) {
        var f = document.idx.elements[i];
        if (f.value.length > 0) {
           narrow++;
        }
      }

       // assemble features
var zFeat = new Array();
    if (document.idx.has_pool.checked) { zFeat['has_pool'] = "1"; } else { zFeat['has_pool'] = "0"; }
    if (document.idx.has_garage.checked) { zFeat['has_garage'] = "1"; } else { zFeat['has_garage'] = "0"; }
    if (document.idx.has_golf.checked) { zFeat['has_golf'] = "1"; } else { zFeat['has_golf'] = "0"; }
    if (document.idx.is_waterfront.checked) { zFeat['is_waterfront'] = "1"; } else { zFeat['is_waterfront'] = "0"; }
    
      var bounds = map.getBounds();
      jQuery("img.loading").show();
      jQuery.get("search.xml", { center : map.getCenter(), zoom : map.getZoom(), corner : bounds.getSouthWest(),
                                beds : document.idx.beds.value, price_min : document.idx.price_min.value,
                                has_golf : zFeat['has_golf'], is_waterfront : zFeat['is_waterfront'],
                                has_pool : zFeat['has_pool'], has_garage : zFeat['has_garage'],
                                price_max : document.idx.price_max.value, baths : document.idx.baths.value, sqft : document.idx.sqft.value,
                                t : ptstr, market : "cmls",
                                narrow : narrow
                                     }, function(data) {
      // check errors first
        jQuery(data).find("err").each(function() {
          var err = jQuery(this);
          errtxt = err.attr("value");
          if (errtxt.length > 0) {
                if (errtxt.length > 2) {
                  myerr = errtxt + '<br>';
                  jQuery("div.dfv2err").css('margin-top','5px');
                  jQuery("div.dfv2err").css("background","#ff9");
                  jQuery("div.dfv2err").css("padding","2px");
                  jQuery("div.dfv2err").css("font","bold 8pt arial");
                  jQuery("div.dfv2err").css("border","1px dotted #333");
                  jQuery("div.dfv2err").html(myerr);
                  for (key in arrMar) {
                        var m = arrMar[key];
                        m.setMap(null);
                    }
                }
          } else {
            jQuery(data).find("marker").each(function() {
                var marker = jQuery(this);
                var info = $(this).find('info').text();
                var id = marker.attr("id");
                
                var latlng = new google.maps.LatLng(parseFloat(marker.attr("lat")),
                                    parseFloat(marker.attr("lng")));
                //var marker = new google.maps.Marker({position: latlng, map: map});
                inMap[id] = "1";
                if (arrMar[id] === undefined) {
                    var marker = createMarker(map, info,latlng);
                    arrMar[id] = marker;
                }
            });
            // Delete bad ones
            for (key in arrMar) {
                if (inMap[key] === undefined) {
                    var m = arrMar[key];
                    m.setMap(null);
                    delete arrMar[key];
                }
            }
        }
        jQuery("img.loading").hide();
     });
    });
       // thisdiv.removeChild(zloading);
           isLoading = false;
    }
  }

function fireIfLastEvent() {
    if (lastEvent.getTime() + 500 <= new Date().getTime()) {
       // alert('i am cool');
        getResults();
    }
}

function scheduleDelayedCallback()
{
    lastEvent = new Date();
    setTimeout(fireIfLastEvent, 500);
}

function fixNum() {
  var str1 = document.idx.price_min.value;
  var str2 = document.idx.price_max.value;
  document.idx.price_min.value = str1.replace(/[^\d]/g, "");
  document.idx.price_max.value = str2.replace(/[^\d]/g, "");
}

  google.setOnLoadCallback(initialize);

function doCSS() {
    jQuery('img.loading').css('z-index','1');
    jQuery('img.loading').css('position','absolute');
    jQuery('img.loading').css('border','1px solid #333');
    jQuery('img.loading').css('display','none');
    var width = parseInt(jQuery(window).width()) / 2;
    var height = parseInt(jQuery(window).height()) / 2.5;
    if (width > 400) {
        width = width - 200;
    }
    //alert(width + ' ' + height);
    jQuery('img.loading').css('top',height);
    jQuery('img.loading').css('left',width);
}

jQuery(function() {
    doCSS();
    jQuery(window).resize(function() {
        doCSS();
    });
});

</script>
  <?php } ?>

<!-- -->

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

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>



<link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic' rel='stylesheet' type='text/css'>


<?php wp_head(); ?>

<!-- RECOMMEND PUTTING THESE CALLS IN THE "HEAD" SECTION, AFTER JQUERY IS DECLARED -->

<link href="http://c1203812.cdn.cloudfiles.rackspacecloud.com/jquery.autocomplete.css" rel="stylesheet" type="text/css" />


<!-- mobile nav -->

<script type="text/javascript" language="JavaScript">
<!--
function HideContent(d) {
document.getElementById(d).style.display = "none";
}
function ShowContent(d) {
document.getElementById(d).style.display = "block";
}
function ReverseDisplay(d) {
if(document.getElementById(d).style.display == "none") { document.getElementById(d).style.display = "block"; }
else { document.getElementById(d).style.display = "none"; }
}
// --> 
</script>

 


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
          
            <div id="social-icons">
              <div id="social1"><a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank"></a></div><!-- social1 -->
              <div id="social1"><a href="<?php the_field('youtube_link', 'option'); ?>" target="_blank"></a></div><!-- social1 -->
            </div><!-- social-icons -->

            <div id="header-content2">704.377.4567</div><!-- header-content2 -->
          </div><!-- header-content -->
        </div><!-- header-content-wrapper -->

        <nav id="site-navigation" class="main-navigation" role="navigation">
          <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU', 'acstarter' ); ?></button>
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
        </nav><!-- #site-navigation -->

      </div><!-- header -->
    </div><!-- main-header -->
  </div> <!-- header-wrapper -->   
