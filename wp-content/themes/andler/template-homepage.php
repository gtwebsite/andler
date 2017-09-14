<?php
/**
 * Template Name: Homepage Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<article <?php post_class(); ?>>
	  	<?php //get_template_part('templates/page', 'header'); ?>
	  	<?php //get_template_part('templates/content', 'page'); ?>
	  	<section class="section section-1">
			<div class="container">
				<div class="welcome">
					<div class="row">
						<div class="col-lg-8">	
							<h1>
								<img src="<?php echo get_stylesheet_directory_uri().'/assets/images/logo-title.png'; ?>" alt="" title="" /> <span>Welcome to</span></br>
								Andler Packaging Group
							</h1>
							<div class="welcome-data">
								<p>With over 100 years of experience under our belts, and a long standing member of the NACD, we at Andler Packaging Group take ride in saying that we are among the leaders in not only the quality of our product, but also in customer service and satisfaction. Whether you need bottles and jars, plastic or glass, along with caps, dispensing systems or any number of other options, Andler Packaging is the obvious choice. Whether it’s folding cartons, labels, printed materials or packaging options for the healthcare, scientific, or pharmaceutical industries along with any retail packaging, our products get the results you want. To sum it up, if you need packaging, we’re the guys you want to go to.</p>
							</div>
							<div class="featured matchHeight">
								<div class="row">
									<div class="col-md-4">
										<div class="featured-item">
											<a href="#">
												<img src="<?php echo get_stylesheet_directory_uri().'/assets/images/featured-1.jpg'; ?>" alt="" title="" />
												<h6 class="matchItem">Bottles</h6>
											</a>
										</div>
									</div>
									<div class="col-md-4">
										<div class="featured-item">
											<a href="#">
												<img src="<?php echo get_stylesheet_directory_uri().'/assets/images/featured-2.jpg'; ?>" alt="" title="" />
												<h6 class="matchItem">Closures</h6>
											</a>
										</div>
									</div>
									<div class="col-md-4">
										<div class="featured-item">
											<a href="#">
												<img src="<?php echo get_stylesheet_directory_uri().'/assets/images/featured-3.jpg'; ?>" alt="" title="" />
												<h6 class="matchItem">Complete Catalog</h6>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 hidden-md-down">
							<img src="<?php echo get_stylesheet_directory_uri().'/assets/images/welcome-image.jpg'; ?>" alt="" title="" />
						</div>
					</div>
				</div>
		  	</div>
	  	</section>

	  	<section class="section section-2">
	  		<div class="container">
				<div class="services-products">
					<div class="row">
						<div class="col-md-8">
							<div class="services-data">
								<h5>EYE APPEAL IS “BUY APPEAL”</h5>
								<p class="emphasize">
									Andler Packaging is an award-winning "turn-key" supplier that continually produces eye-popping packaging solutions.
								</p>
								<p>Let Andler Packaging be your "single-source" supplier. We can create eye-catching packaging, graphics, and point of sale / point of purchase content like displays, labels, blister cards, cartons, sleeves, and more. Whether you're a small, medium, or large sized business, we can help you develop a harmonious presentation that employ's good branding techniques aimed at increasing your bottom-line.</p>
								<div class="content-button">
									<a class="btn" href="#">LEARN MORE ABOUT OUR SERVICES</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="products-data">
								<h5>OUR PRODUCTS</h5>
								<ul>
									<li><a href="#">Glass Bottles and Jars</a></li>
									<li><a href="#">Plastic Bottles and Jars</a></li>
									<li><a href="#">Metal and Plastic Closures</a></li>
									<li><a href="#">Sprayers and Pumps</a></li>
									<li><a href="#">Flexible Packaging</a></li>
									<li><a href="#">Pails, Lids, and Drums</a></li>
									<li><a href="#">Droppers, Syringes, and Applicators</a></li>
									<li><a href="#">Tubing Glass, vials, and Seals</a></li>
									<li><a href="#">Corrugated and Displays</a></li>
									<li><a href="#">Labels and Printing</a></li>
									<li><a href="#">Desiccants and Cotton</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
		  	</div>	
	  	</section>
	  	<section class="section section-3">
	  		<div class="container">
	  			<div class="markets">
	  				<h5 class="text-center">MARKETS WE SPECIALIZE IN</h5>
	  				<div class="row">
						<div class="col-md-4">
							<div class="market-item">
								<a href="#">
									<i><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/Food-&-Beverage.png'; ?>" alt="" title="" /></i>
									<span>Food & Beverage</span>
								</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="market-item">
								<a href="#">
									<i><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/Pharmaceutical-&-Opthalmic.png'; ?>" alt="" title="" /></i>
									<span>Pharmaceutical & Opthalmic</span>
								</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="market-item">
								<a href="#">
									<i><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/Paint-&-Hobby-Supplies.png'; ?>" alt="" title="" /></i>
									<span>Paint & Hobby Supplies</span>
								</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="market-item">
								<a href="#">
									<i><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/Beer-&-Spirits.png'; ?>" alt="" title="" /></i>
									<span>Beer & Spirits</span>
								</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="market-item">
								<a href="#">
									<i><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/Nutraceutical-&-Vitamin.png'; ?>" alt="" title="" /></i>
									<span>Nutraceutical & Vitamin</span>
								</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="market-item">
								<a href="#">
									<i><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/Science-&-Labware.png'; ?>" alt="" title="" /></i>
									<span>Science & Labware</span>
								</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="market-item">
								<a href="#">
									<i><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/Cosmetic-&-Personal-Care.png'; ?>" alt="" title="" /></i>
									<span>Cosmetic & Personal Care</span>
								</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="market-item">
								<a href="#">
									<i><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/Industrial-&-Chemical.png'; ?>" alt="" title="" /></i>
									<span>Industrial & Chemical</span>
								</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="market-item">
								<a href="#">
									<i><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/Marijuana-&-E-Cigarette.png'; ?>" alt="" title="" /></i>
									<span>Marijuana & E-Cigarette</span>
								</a>
							</div>
						</div>
					</div>
	  			</div>
	  		</div>
	  	</section>
  	</article>
<?php endwhile; ?>
