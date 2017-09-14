<footer class="content-info">
	<?php /*
	<?php if ( is_active_sidebar( 'sidebar-footer' ) ) : ?>
	<div class="buckets">
	  <div class="container">
	  	<aside class="widgets matchHeight">
	    	<?php dynamic_sidebar('sidebar-footer'); ?>
	    </aside>
	  </div>
	</div>
	<?php endif; ?>
	*/ ?>
	<div class="banner">
		<div class="banner-item dark" style="background: url(<?php echo get_stylesheet_directory_uri().'/assets/images/footer-banner-1.jpg'; ?>) no-repeat 50% 50%; background-size: cover;">
			<div class="container vmiddle">
				<div class="vmiddleCenteredItem">
					<div class="banner-headline">
						<h5>At Andler Packaging, <span>we’ll work with you</span> to understand your product’s</br> specific needs, and <span>we’ll work for you</span>, to make sure it is delivered to our</br> customer’s satisfaction.</h5>
					</div>
					<div class="banner-button">
						<a class="btn btn-md" href="#">CONTACT A SALES REP TODAY</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="buckets dark">
	  <div class="container">
	  	<aside class="widgets matchHeight">
	  		<div class="widget matchItem">
				<div class="footer-logo">
	  				<img src="<?php echo get_stylesheet_directory_uri().'/assets/images/footer-image.png'; ?>" alt="" title="" />
	  			</div>
	  		</div>
	  		<div class="widget matchItem">
  				<div class="contact-info">
  					<h5>Contact Us</h5>
  					<div class="contact-data"><span class="label">Toll Free: </span><span class="data">(800) 333-1113</span></div>
  					<div class="contact-data"><span class="label">Fax: </span><span class="data">(617) 387-9858</span></div>
  					<div class="contact-data"><span class="label">Email: </span><span class="data">sales@andler.com</span></div>
  				</div>
	  		</div>
	  		<div class="widget matchItem">
	  			<div class="corporate-office">
	  				<h5>Corporate Office</h5>
	  				<div class="corporate-data">
	  					<address>
	  						376 third street</br>
	  						everett, massachusetts</br>
	  						02149
	  					</address>
	  				</div>
	  			</div>
	  		</div>
	    </aside>
	  </div>
	</div>
	<div class="footer">
		<div class="container">
			<div class="copyright"><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/logo-footer.png'; ?>" alt="" title="" /> Copyright 2017 Andler Packaging Group. All Rights Reserved. | Site by 1059 Creative</div>
			<?php
			if (has_nav_menu('footer_navigation')) :
				wp_nav_menu(['theme_location' => 'footer_navigation','menu_class'=>'list-inline']);
			endif;
			?>
		</div>
	</div>
</footer>
<div class="backtotop pagetoscroll">
	<div class="container">
		<a href="#verytop"><i class="fa fa-angle-up"></i></a>
	</div>
</div>
