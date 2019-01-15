<?php
/*
Template name: Template Ecommerce Tracking
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
			<form class="schedule-box">
				<div class="tracking-no">Tracking No.</div>
				<div class="rad-tracking">
					<div class="hbl">
						<input type="radio" name="schedule_ecommerce_rad" checked="checked">&nbsp;&nbsp;<span class="vessel-checked">HBL</span>
					</div>
					<div class="mbl">
						<input type="radio" name="schedule_ecommerce_rad" checked="checked">&nbsp;&nbsp;<span class="vessel-checked">MBL</span>
					</div>
					<div class="no-tracking">
						<input type="radio" name="schedule_ecommerce_rad" checked="checked">&nbsp;&nbsp;<span class="vessel-checked">Booking No</span>
					</div>
					<div class="clr"></div>
				</div>
				<div class="quotation-row enter-hbl">
					<input type="text" name="company_name" placeholder="Please enter HBL">
				</div>
				<div class="tracking-submit">
					<a href="javascript:void(0);">Submit</a>
				</div>	
			</form>
			<div class="tracking-banner" style="background-image: url(<?php echo P_IMG.'/ecommerce-schedule.jpg'; ?>);"></div>
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