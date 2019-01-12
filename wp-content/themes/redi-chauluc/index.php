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
		<div class="owl-carousel-banner owl-carousel owl-theme owl-loaded">		
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
			<div class="col-lg-7">
				<form class="saling-schedule" name="frm" method="POST">
					<div class="cut-off-date">
						<span class="cut-left">Cut of date</span> <span class="cut-right">*</span>
					</div>
					<div class="schedule-txt-box">
						<div class="schedule-box-1">
							<input type="text" name="cut_off_txt_1" class="cut-off-para" placeholder="05/10/2018">
						</div>
						<div class="schedule-box-2">
							<input type="text" name="cut_off_txt_2" class="cut-off-para" placeholder="05/10/2018">
						</div>
						<div class="clr"></div>
					</div>
					<div class="cut-off-date-2">
						<div class="rum-self-left">
							<span class="cut-left">Origin</span> <span class="cut-right">*</span>
						</div>
						<div class="rum-self-right">
							<span class="cut-left">Destination</span> <span class="cut-right">*</span>
						</div>
						<div class="clr"></div>
					</div>
					<div class="dropdownlist">
						<div class="dropdown-1 dropdown-selected">
							<select class="selected2">
								<option>Origin 1</option>
								<option>Origin 2</option>
								<option>Origin 3</option>
								<option>Origin 4</option>
								<option>Origin 5</option>
								<option>Origin 6</option>
							</select>
						</div>
						<div class="dropdown-2 dropdown-selected">
							<select class="selected2">
								<option>Origin 1</option>
								<option>Origin 2</option>
								<option>Origin 3</option>
								<option>Origin 4</option>
								<option>Origin 5</option>
								<option>Origin 6</option>
							</select>
						</div>
						<div class="sailing-schedule-submit">
							<a href="javascript:void(0);">Submit</a>
						</div>
						<div class="clr"></div>
					</div>
					<div class="saling-schedule-message">
						Download or subscribe to sailing schedules
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="service-bg">
		<div class="container">
			<div class="row">
				<div class="col">					
					<h2 class="service-title">
						Services
					</h2>
					<div class="service-line-title"></div>
					<div class="service-box">
						<div class="owl-carousel-service owl-carousel owl-theme owl-loaded">							
						<?php 
						$source_logo=get_field('op_hp_logo_rpt','option');
						foreach ($source_logo as $key => $value) { 
							?>
							<div class="item">
								<a href="javascript:void(0);" title="tiêu đề tên" target="_blank" rel="nofollow">
									<div style="background-image: url(<?php echo @$value['op_hp_logo_img']; ?>);background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / ( 197 / 93 ))"></div>
								</a>
							</div>
							<?php
						}						
						?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php		
	get_footer();
	?>