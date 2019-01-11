<?php
/*
	Home template default
*/	
	get_header();
	global $zController;
	$productModel=$zController->getModel("/frontend","ProductModel");
	$source_banner=get_field('op_banner_repeat','option');	
	?>
	<h1 style="display: none;"><?php echo get_bloginfo( 'name'); ?></h1>
	<div class="banner_slideshow">
		<div class="owl_carousel_banner owl-carousel owl-theme owl-loaded">		
			<?php 
			foreach ($source_banner as $key => $value) {
				?>
				<div class="item">
					<div class="slideshow-box">
						<div style="background-image: url(<?php echo @$value["op_banner_repeat_img"]; ?>);background-repeat: no-repeat;background-size:cover;padding-top: calc(100% / (1440/591))"></div>
						<div class="slogan-banner">
							<div class="slogan-ger">
								<div class="slogan-txt">The difference is web get it done</div>
								<div class="slogan-excerpt">
									At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis <br/>
									praesentium voluptatum deleniti atque corup.
								</div>
							</div>			
						</div>		
					</div>								
				</div>
				<?php
			}
			?>								
		</div>		
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<h2 class="who-we-are-title">Who we are</h2>
				<div class="who-we-are-excerpt">
					We, Chau Luc Co., Ltd., were established by the end of 1999 while the whole Asian region had not overcome the financial crisis yet, we have recognised that all the challenges we were facing with could be only settled if we could provide the best services to the customers’ satisfaction. 
				</div>
			</div>
			<div class="col-lg-7"></div>
		</div>
	</div>
	<?php		
	get_footer();
	?>