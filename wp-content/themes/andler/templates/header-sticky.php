<header class="banner banner-default banner-sticky hidden-md-down">
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
					<span>Product Catalog</span>
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
</header>
