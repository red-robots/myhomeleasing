</div> <!-- main -->
</div> <!-- main-wrapper -->

	<div id="footer">
		<div id="footer-wrapper">
			<div id="footer-row1">
				<div id="footer-row1-box1">
				<div class="item-address">
					<h2><?php the_field('office_name', 'option'); ?></h2>
					<?php the_field('office_address', 'option'); ?> <?php the_field('office_address_line2', 'option'); ?> <?php the_field('office_address_line3', 'option'); ?>
				</div><!-- address -->
				<div class="item-address">
					<h2><?php the_field('office_name2', 'option'); ?></h2>
					<?php the_field('office_address2', 'option'); ?> <?php the_field('office_address2_line2', 'option'); ?> <?php the_field('office_address2_line3', 'option'); ?>
				</div><!-- address -->
				<div class="item-address">
					<h2><?php the_field('office_name3', 'option'); ?></h2>
					<?php the_field('office_address3', 'option'); ?> <?php the_field('office_address3_line2', 'option'); ?> <?php the_field('office_address3_line3', 'option'); ?>
				</div><!-- address -->
				</div><!-- footer-row1-box1 -->

				<div id="footer-newsletter">
					<div class="newsletter-signup">
						<a href="<?php bloginfo('url'); ?>/newsletter">Newsletter Signup</a>
					</div><!-- newsletter-signup -->
				</div><!-- footer-newsletter -->

				<div id="footer-content2">
					<div id="footer-social">
						<div id="social4">
							<a href="<?php the_field('youtube_link', 'option'); ?>" target="_blank"></a>
						</div><!-- social4 -->
						<div id="social3">
							<a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank"></a>
						</div><!-- social3 -->
					</div><!-- footer-social -->

					<div id="footer-links">
						<ul>
							<li><a href="<?php bloginfo('url'); ?>/about">ABOUT</a></li>
							<li><a href="<?php bloginfo('url'); ?>/my-home-leasing-agents">OUR AGENTS</a></li>
							<li><a href="<?php bloginfo('url'); ?>/careers">CAREERS</a></li>
							<li><a href="<?php bloginfo('url'); ?>/resources">RESOURCES</a></li>
							<li><a href="<?php bloginfo('url'); ?>/contact">CONTACT US</a></li>
						</ul>
					</div><!-- footer-links -->
				</div><!-- footer-content2 -->
			</div><!-- footer-row1 -->

			<div id="footer2">
				<a href="<?php bloginfo('url'); ?>/sitemap">sitemap</a> | site by <a href="http://www.bellaworksweb.com" target="_blank">bellaworks</a>
			</div><!-- footer2 -->
		</div><!-- footer-wrapper -->
	</div><!-- footer -->

	<div id="chat-bar">
		<div id="chat-bar-background">
			<div id="chat-bar-background-wrapper">
				<div id="chat-tab">
					<!-- This code must be installed within the body tags -->
					<script type="text/javascript">
					    var lhnAccountN = "30659-1";
					    var lhnButtonN = 8234;
					    var lhnChatPosition = 'default';
					    var lhnInviteEnabled = 1;
					    var lhnWindowN = 0;
					    var lhnDepartmentN = 35805;
					    var lhnCustomInvitation = '1';
					  

					    // var lhnInviteN = "41887";
					    // var lhnChatPositionYVal = 150;
					</script>
					<a href="http://www.livehelpnow.net/products/live-chat-system" target="_blank" style="font-size:10px;" id="lhnHelp">live chat service provider</a>
					<script src="//www.livehelpnow.net/lhn/widgets/chatbutton/lhnchatbutton-current.min.js" type="text/javascript" id="lhnscript"></script>   
				</div><!-- chat-tab -->
			</div><!-- chat-bar-background-wrapper -->
		</div><!-- chat-bar-background" -->
	</div><!-- chat-bar -->

	
	<?php 

// If on homepage for at least 10 seconds

if(is_page('property-management-services')) : ?>

	<div id="Zsmenu" class="lhnInviteContainer">
		<div class="chatwrap">
			<div class="LHNInviteTitle">Live Help</div><!-- LHNInviteTitle -->
			<div class="chat-window-person"><img src="<?php bloginfo('template_url'); ?>/images/operator.png"></div>
			<div id="Zsleft" class="LHNInviteMessage">
				<p>Welcome to My Home Leasing.</p>
				<p>How can we help you today?</p>
			</div><!-- Zsleft -->
			<div class="LHNInviteButtons">
				<a class="LHNInviteCloseButton" onclick="CloseLHNInvite();return false;" href="#">x</a>
				<a class="LHNInviteAcceptButton" onclick="OpenLHNChat();return false;" href="#">Start Chat</a>
			</div><!-- LHNInviteButtons -->
		</div><!-- chatwrap -->
	</div><!-- Zsmenu -->

<?php endif; ?>
	


<?php 

// If on homepage for at least 10 seconds

if(is_page('property-management-services')) : ?>
  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded",function(){

      var mes='Welcome to My Home Leasing. How can we help you?';
 
      setTimeout(function(){
        if (typeof lhnWin == 'undefined') {
        	$('#Zsmenu').css("top","-9999");
        	WriteLHNMessage(mes,1);
        }
      },10000);
    });

    // document.addEventListener("DOMContentLoaded",function(){

    //   var mes='Welcome to My Home Leasing. How can we help you?';
 
    //   setTimeout(function(){
    //     if (typeof lhnWin == 'undefined') {WriteLHNMessage(mes,0);}
    //   },10000);
    // });
  </script>
<?php endif; ?>

</div><!-- main-wrapper-all -->

<?php wp_footer(); ?>
</body>
</html>