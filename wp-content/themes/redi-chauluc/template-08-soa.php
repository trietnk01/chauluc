<?php
/*
Template name: Template Ecommerce Soa
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
			<h2 class="single-title3">Soa</h2>	
			<form class="schedule-box">
				<div class="row">
					<div class="col-sm-7">Please login button to use the functionality of the website</div>					
					<div class="col-sm-5">
						<div class="soa-login">
							<a href="javascript:void">Login</a>
						</div>
					</div>					
				</div>
				<div class="quotation-row enter-hbl">
					<input type="text" name="company_name" placeholder="Please enter SOA No.">
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