<?php 
get_header();
?>
<h1 style="display: none;"><?php echo get_bloginfo( 'name','' ); ?></h1>
<div class="container">
	<div class="row">
		<div class="col-lg-9 col-md-8">
			<h2 class="single-title3">News & Event</h2>
			<div class="row">
				<div class="col-lg-5">
					<div class="news-event-box">
						<a href="<?php echo site_url( 'news-event-detail',null ); ?>">
							<figure><div style="background-image: url(<?php echo P_IMG.'/news-event-0.png'; ?>);" class="news-event-img"></div></figure>
						</a>						
						<h3 class="news-event-title"><a href="<?php echo site_url( 'news-event-detail',null ); ?>">Say Aloha to Hawai</a></h3>
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
								<a href="<?php echo site_url( 'news-event-detail',null ); ?>">
									<figure><div style="background-image: url(<?php echo P_IMG.'/news-event-'.$k.'.png'; ?>);background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (370/285))" ></div></figure>
								</a>	
							</div>
							<div class="news-event-info">
								<h3 class="news-event-title"><a href="<?php echo site_url( 'news-event-detail',null ); ?>">Say Aloha to Hawai</a></h3>
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
								<a href="<?php echo site_url( 'news-event-detail',null ); ?>">
									<figure><div style="background-image: url(<?php echo P_IMG.'/news-event-'.$k.'.png'; ?>);background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (370/285))" ></div></figure>
								</a>	
							</div>
						</div>
						<div class="col-lg-8">
							<div class="news-event-info">
								<h3 class="news-event-title"><a href="<?php echo site_url( 'news-event-detail',null ); ?>">Say Aloha to Hawai</a></h3>
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
			<?php include get_template_directory() . '/block/block-online.php'; ?>	
		</div>
	</div>
</div>
<?php
get_footer(); 
?>