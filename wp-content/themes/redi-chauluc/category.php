<?php 
get_header();
?>
<h1 style="display: none;"><?php echo get_bloginfo( 'name','' ); ?></h1>
<h2 style="display: none;"><?php echo get_bloginfo( 'name','' ); ?></h2>
<div class="container">
	<div class="row">
		<div class="col-lg-9 col-md-8">
			<h2 class="single-title3">News & Event</h2>
			<div class="row">
				<div class="col-lg-5">
					<div class="news-event-box">
						<a href="javascript:void(0)">
							<figure><div style="background-image: url(<?php echo P_IMG.'/news-event-0.png'; ?>);" class="news-event-img"></div></figure>
						</a>						
						<h3 class="news-event-title"><a href="javascript:void(0);">Say Aloha to Hawai</a></h3>
						<div class="news-event-date-post">October 31, 2018</div>
						<div class="news-event-excerpt">
							Famous Pacific Shipping (NZ) is enhancing its intra-Pacifi c Islands freight connections with the launch of a regular direct oceanfreight consolidation
						</div>
					</div>					
				</div>
				<div class="col-lg-7">
					<?php 
					$k=1;
					for ($i=0; $i < 3; $i++) { 
						?>
						<div class="news-event-hw-box">
							<div class="news-event-img">
								<a href="javascript:void(0)">
									<figure><div style="background-image: url(<?php echo P_IMG.'/news-event-'.$k.'.png'; ?>);background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (370/285))" ></div></figure>
								</a>	
							</div>
							<div class="news-event-info">
								<h3 class="news-event-title"><a href="javascript:void(0);">Say Aloha to Hawai</a></h3>
								<div class="news-event-date-post">October 31, 2018</div>
								<div class="news-event-excerpt">
									Famous Pacific Shipping (NZ) is enhancing its intra-Pacifi c Islands freight connections with the launch of a regular direct oceanfreight consolidation
								</div>
							</div>
							<div class="clr"></div>
						</div>
						<?php
						$k++;
					}
					?>					
				</div>
			</div>
			<hr class="news-event-line" />
			<?php 
			$k=1;
			for ($i=0; $i < 3; $i++) { 
				?>
				<div class="news-event-hw-box2">
					<div class="row">
						<div class="col-lg-4">
							<div class="news-event-img">
								<a href="javascript:void(0)">
									<figure><div style="background-image: url(<?php echo P_IMG.'/news-event-'.$k.'.png'; ?>);background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (370/285))" ></div></figure>
								</a>	
							</div>
						</div>
						<div class="col-lg-8">
							<div class="news-event-info">
								<h3 class="news-event-title"><a href="javascript:void(0);">Say Aloha to Hawai</a></h3>
								<div class="news-event-date-post">October 31, 2018</div>
								<div class="news-event-excerpt">
									Famous Pacific Shipping (NZ) is enhancing its intra-Pacifi c Islands freight connections with the launch of a regular direct oceanfreight consolidation
								</div>
							</div>
						</div>
					</div>					
				</div>
				<?php
				$k++;
			}
			?>		
		</div>
		<div class="col-lg-3 col-md-4">
			<?php include get_template_directory() . '/block/block-categories.php'; ?>	
			<div class="account-margin-top">
				<?php include get_template_directory().'/block/block-manage-account.php'; ?>				
			</div>	
			<div class="news-event-quotation-online-box">
				<div style="background-image: url(<?php echo P_IMG.'/bg-0.jpg'; ?>);background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / ( 270 / 320 ))"></div>
				<div class="news-event-brochure-brochure-title">
					<div><img src="<?php echo P_IMG.'/dollars-icon.png'; ?>"></div>
					<div class="news-event-brochure-brochure-link"><a href="javascript:void(0);">Quotation online</a></div>							
				</div>
			</div>
			<div class="news-event-brochure-box">
				<div style="background-image: url(<?php echo P_IMG.'/bg-0.jpg'; ?>);background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / ( 270 / 320 ))"></div>
				<div class="news-event-brochure-brochure-title">
					<div><img src="<?php echo P_IMG.'/pdf-icon.png'; ?>"></div>
					<div class="news-event-brochure-brochure-link"><a href="javascript:void(0);">Download brochure</a></div>							
				</div>
			</div>		
		</div>
	</div>
</div>
<?php
get_footer(); 
?>