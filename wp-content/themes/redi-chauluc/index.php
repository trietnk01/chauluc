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
	
	<?php		
	get_footer();
	?>