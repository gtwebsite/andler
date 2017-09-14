<header class="banner banner-default hidden-md-down">
	<?php if ( is_active_sidebar( 'sidebar-header' ) ) : ?>
	<div class="secondary-nav">
		<div class="container">
			<?php dynamic_sidebar('sidebar-header'); ?>
		</div>
	</div>
	<?php endif; ?>
	<div class="primary-nav">
		<div class="container">
			<nav class="navbar navbar-toggleable-md">
				<a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
				<div class="collapse navbar-collapse">
					<ul id="menu-main-menu" class="navbar-nav ml-auto">
						<li class="menu-item menu-about"><a href="#">About</a></li>
						<li class="menu-item menu-products"><a href="#">Products</a></li>
						<li class="menu-item menu-markets"><a href="#">Markets</a></li>
						<li class="menu-item menu-services"><a href="#">Services</a></li>
						<li class="menu-item menu-resources"><a href="#">Resources</a></li>
						<li class="menu-item menu-contact"><a href="#">Contact</a></li>
					</ul>
		      <?php
		      //if (has_nav_menu('primary_navigation')) :
		      //  wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav ml-auto']);
		      //endif;
		      ?>
				</div>
				<div class="searchbar">
					<span><a href="#">Product Catalog</a></span>
					<span>Toll Free: (800) 333-1113</span>
					<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
					    <label>
					        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
					        <input type="search" class="search-field"
					            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
					            value="<?php echo get_search_query() ?>" name="s"
					            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
					    </label>
					    <input type="submit" class="search-submit"
					        value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
					</form>
				</div>
			</nav>
		</div>
	</div>
	<div class="banner">
		<div class="banner-item dark" style="background: url(<?php echo get_stylesheet_directory_uri().'/assets/images/banner-1.jpg'; ?>) no-repeat 50% 50%; background-size: cover;">
			<div class="container vmiddle">
				<div class="vmiddleCenteredItem">
					<div class="banner-logo">
						<img src="<?php echo get_stylesheet_directory_uri().'/assets/images/logo-white.png'; ?>" alt="" title="" />
					</div>
					<div class="banner-headline">
						<h2>Packaging Professionals</br> <span>for over</span></br> 100 Years</h2>
					</div>
					<div class="banner-button">
						<a class="btn btn-md" href="#">Learn the Andler Advantage</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<header class="banner banner-mobile-default hidden-lg-up">
	<div class="container">
		<nav class="navbar navbar-toggleable-md">
			<a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
			<button class="navbar-toggler navbar-toggler-right menu-button" type="button">
				<span class="sr-only">Main Navigation</span>
				<i class="fa fa-bars"></i>
			</button>
			<ul id="menu-main-menu" class="flexnav list-unstyled with-js opacity sm-screen">
				<li class="menu-item menu-about"><a href="#">About</a></li>
				<li class="menu-item menu-products"><a href="#">Products</a></li>
				<li class="menu-item menu-markets"><a href="#">Markets</a></li>
				<li class="menu-item menu-services"><a href="#">Services</a></li>
				<li class="menu-item menu-resources"><a href="#">Resources</a></li>
				<li class="menu-item menu-contact"><a href="#">Contact</a></li>
			</ul>
			<?php
			//if (has_nav_menu('primary_navigation')) :
			//	wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flexnav list-unstyled']);
			//endif;
			?>
		</nav>
	</div>
	<div class="banner">
		<div class="banner-item dark" style="background: url(<?php echo get_stylesheet_directory_uri().'/assets/images/banner-1.jpg'; ?>) no-repeat 50% 50%; background-size: cover;">
			<div class="container vmiddle">
				<div class="vmiddleCenteredItem">
					<div class="banner-logo">
						<img src="<?php echo get_stylesheet_directory_uri().'/assets/images/logo-white.png'; ?>" alt="" title="" />
					</div>
					<div class="banner-headline">
						<h2>Packaging Professionals</br> <span>for over</span></br> 100 Years</h2>
					</div>
					<div class="banner-button">
						<a class="btn btn-md" href="#">Learn the Andler Advantage</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
