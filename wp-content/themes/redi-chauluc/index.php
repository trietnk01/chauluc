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
				<div class="product-tab">
					<div class="tab">
						<button class="tablinks h-title" onclick="openCity(event, 'saling-schedules')">Saling Schedules</button>
						<button class="tablinks h-title" onclick="openCity(event, 'track-a-shipment')">Track a shipment</button>
						<button class="tablinks h-title" onclick="openCity(event, 'find-a-rate')">Find a rate</button>               		
					</div>
					<div>
						<div id="saling-schedules" class="tabcontent">
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
						<div id="track-a-shipment" class="tabcontent" style="display: none;">
							Track a shipment
						</div>        
						<div id="find-a-rate" class="tabcontent"  style="display: none;">
							Find a rate
						</div>  
					</div>														                                            
				</div> 				
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
							for ($i=0;$i<13;$i++) { 
								?>
								<div class="item">
									<div class="service-item">
										<a href="<?php echo site_url( 'service-detail', null ); ?>" class="smlightbox" title="tiêu đề tên" >
											<div style="background-image: url(<?php echo P_IMG.'/bg-'.$i.'.jpg'; ?>);background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / ( 10 / 10 ))"></div>
										</a>
										<h3 class="service-item-title"><a href="<?php echo site_url( 'service-detail', null ); ?>">Industrial Broker</a></h3>
									</div>								
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
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="content-bottom">
					<h3 class="content-bottom-title">Video Clip</h3>
					<div class="content-bottom-video">
						<a href="javascript:void(0);" class="js-modal-btn" data-video-id="RPWasgGJsK8">
							<div style="background-image: url(<?php echo P_IMG.'/video.png'; ?>);background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / ( 570 / 323 ))"></div>
							<div class="video-opacity">								
							</div>			
							<div class="youtube-play-box">
								<div class="youtube-icon">									
								</div>
							</div>				
						</a>
					</div>
				</div>				
			</div>
			<div class="col-lg-6">
				<div class="content-bottom">
					<h3 class="content-bottom-title">Download</h3>
					<div>
						<div class="brochure-box">
							<div style="background-image: url(<?php echo P_IMG.'/bg-0.jpg'; ?>);background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / ( 270 / 320 ))"></div>
							<div class="brochure-title">
								<div><img src="<?php echo P_IMG.'/pdf-icon.png'; ?>"></div>
								<div class="brochure-link"><a href="javascript:void(0);">Download brochure</a></div>							
							</div>
						</div>
						<div class="quotation-box">	
							<div style="background-image: url(<?php echo P_IMG.'/bg-0.jpg'; ?>);background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / ( 270 / 320 ))"></div>
							<div class="brochure-title">
								<div><img src="<?php echo P_IMG.'/dollars-icon.png'; ?>"></div>
								<div class="brochure-link"><a href="javascript:void(0);">Quotation online</a></div>							
							</div>					
						</div>
						<div class="clr"></div>
					</div>					
				</div>				
			</div>
		</div>
	</div>
	<?php		
	get_footer();
	?>