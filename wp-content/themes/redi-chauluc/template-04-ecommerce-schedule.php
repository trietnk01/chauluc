<?php
/*
Template name: Template Ecommerce Schedule
Template Post Type: post, page
*/
get_header();
global $zController;
$productModel=$zController->getModel("/frontend","ProductModel");
?>
<h1 style="display: none;"><?php echo get_bloginfo( 'name','' ); ?></h1>
<div class="container">
	<div class="row">
		<div class="col-lg-9 col-md-8">
			<h2 class="single-title3">Schedule</h2>
			<div class="schedule-box">
				<div class="schedule-slogan">Continue to remain and increase direct consol box service weekly from Hochiminh-Haiphong-Danang-to/via 2 main port Hongkong & Singapore. Further, Everich has opened weekly direct route to these port…</div>
				<form class="schedule-frm" name="frm-schedule-ecommerce" method="POST">
					<div class="vessel-schedule">
						<input type="radio" name="schedule_ecommerce_rad" checked="checked">&nbsp;&nbsp;<span class="vessel-checked">Vessel Schedule</span>
					</div>
					<div class="flight-schedule">
						<input type="radio" name="schedule_ecommerce_rad">&nbsp;&nbsp;<span class="vessel-checked">Flight Schedule</span>
					</div>
					<div class="clr"></div>
					<div class="port">
						<div class="port-left">
							<div>Port of loading</div>
							<div class="origin">
								<select class="selected2">
									<option>Please select origin first</option>
									<option>Origin 2</option>
									<option>Origin 3</option>
									<option>Origin 4</option>
									<option>Origin 5</option>
									<option>Origin 6</option>
								</select>
							</div>
							<div class="origin">
								<select class="selected2">
									<option>Please select origin first</option>
									<option>Origin 2</option>
									<option>Origin 3</option>
									<option>Origin 4</option>
									<option>Origin 5</option>
									<option>Origin 6</option>
								</select>
							</div>
						</div>
						<div class="port-right">
							<div>Port of Discharge</div>
							<div class="origin">
								<select class="selected2">
									<option>Please select origin first</option>
									<option>Origin 2</option>
									<option>Origin 3</option>
									<option>Origin 4</option>
									<option>Origin 5</option>
									<option>Origin 6</option>
								</select>
							</div>
							<div class="origin">
								<select class="selected2">
									<option>Please select origin first</option>
									<option>Origin 2</option>
									<option>Origin 3</option>
									<option>Origin 4</option>
									<option>Origin 5</option>
									<option>Origin 6</option>
								</select>
							</div>
						</div>
						<div class="clr"></div>
					</div>
					<div class="ecommerce-schedule-submit">
						<a href="javascript:void(0);">Submit</a>
					</div>					
				</form>
			</div>
			<div class="ecommerce-schedule-banner" style="background-image: url(<?php echo P_IMG.'/ecommerce-schedule.jpg'; ?>);"></div>
		</div>
		<div class="col-lg-3 col-md-4">
			<?php include get_template_directory() . '/block/block-categories.php'; ?>	
			<div class="account-margin-top">
				<?php include get_template_directory().'/block/block-manage-account.php'; ?>				
			</div>			
		</div>
	</div>
</div>
<?php
get_footer(); 
?>