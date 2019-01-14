<?php
/*
Template name: Template Ecommerce Booking Online
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
			<h2 class="single-title3">Booking online</h2>	
			<form class="schedule-box">
				<div class="blue-booking-box">
					<div class="blue-boxbooking-left">
						
					</div>
					<div class="blue-boxbooking-right"></div>
					<div class="clr"></div>					
				</div>
				<div class="clr"></div>
			</form>		
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