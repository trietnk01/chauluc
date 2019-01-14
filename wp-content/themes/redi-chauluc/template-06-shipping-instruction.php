<?php
/*
Template name: Template Ecommerce Shipping Instruction
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
			<h2 class="single-title3">Shipping instruction</h2>	
			<div class="schedule-box">
				<div class="kayog-tab">
					<div class="tab">
						<button class="tablinks h-title" onclick="openCity(event, 'sea-freight')">Sea freight</button>
						<button class="tablinks h-title" onclick="openCity(event, 'air-freight')">Air freight</button>
					</div>
					<div>
						<div id="sea-freight" class="tabcontent">
							<div class="transparent-booking-box">
								<div class="blue-box-booking-left">
									<div class="blue-box-booking-icon" style="background-image: url(<?php echo P_IMG.'/shipper-blue.png'; ?>);padding-top: calc(100% / (35/35))"></div>
								</div>
								<div class="blue-box-booking-right">
									<div class="blue-box-booking-title">Shipper</div>
									<div class="blue-box-booking-slogan">Shipper Information</div>									
								</div>
								<div class="clr"></div>					
							</div>
							<div class="clr"></div>
							<div class="instruction-shipment">
								<div class="row">
									<div class="col-sm-6">
										<input type="text" name="company_name" placeholder="Company name" autocomplete="off" class="instruction-row">
									</div>
									<div class="col-sm-6">
										<input type="text" name="company_name" placeholder="Company name" autocomplete="off" class="instruction-row">
									</div>
								</div>								
							</div>
							<div class="instruction-shipment">
								<div class="row">
									<div class="col-sm-6">
										<input type="text" name="company_name" placeholder="Company name" autocomplete="off" class="instruction-row">
									</div>
									<div class="col-sm-6">
										<input type="text" name="company_name" placeholder="Company name" autocomplete="off" class="instruction-row">
									</div>
								</div>								
							</div>
							<div class="transparent-booking-box">
								<div class="blue-box-booking-left">
									<div class="blue-box-booking-icon" style="background-image: url(<?php echo P_IMG.'/consignee.png'; ?>);padding-top: calc(100% / (35/35))"></div>
								</div>
								<div class="blue-box-booking-right blue-transparent-booking">
									<div class="blue-box-booking-title">Consignee</div>													
								</div>
								<div class="clr"></div>					
							</div>
							<div class="clr"></div>
							<div class="instruction-shipment">
								<div class="row">
									<div class="col-sm-6">
										<input type="text" name="company_name" placeholder="Company name" autocomplete="off" class="instruction-row">
									</div>
									<div class="col-sm-6">
										<input type="text" name="company_name" placeholder="Company name" autocomplete="off" class="instruction-row">
									</div>
								</div>								
							</div>		
							<div class="instruction-shipment">
								<div class="row">
									<div class="col-sm-6">
										<input type="text" name="company_name" placeholder="Company name" autocomplete="off" class="instruction-row">
									</div>
									<div class="col-sm-6">
										<input type="text" name="company_name" placeholder="Company name" autocomplete="off" class="instruction-row">
									</div>
								</div>								
							</div>	
							<div class="transparent-booking-box">
								<div class="blue-box-booking-left">
									<div class="blue-box-booking-icon" style="background-image: url(<?php echo P_IMG.'/notify-party.png'; ?>);padding-top: calc(100% / (35/35))"></div>
								</div>
								<div class="blue-box-booking-right blue-transparent-booking">
									<div class="blue-box-booking-title">Notify party</div>													
								</div>
								<div class="clr"></div>					
							</div>
							<div class="shipping-instruction-booking-add">
								<a href="javascript:void(0)" ><i class="fa fa-plus" aria-hidden="true"></i></a>
							</div>
							<div class="clr"></div>	
							<div class="instruction-shipment">
								<div class="row">
									<div class="col-sm-6">
										<input type="text" name="company_name" placeholder="Company name" autocomplete="off" class="instruction-row">
									</div>
									<div class="col-sm-6">
										<input type="text" name="company_name" placeholder="Company name" autocomplete="off" class="instruction-row">
									</div>
								</div>								
							</div>
							<div class="instruction-shipment">
								<div class="row">
									<div class="col-sm-6">
										<input type="text" name="company_name" placeholder="Company name" autocomplete="off" class="instruction-row">
									</div>
									<div class="col-sm-6">
										<input type="text" name="company_name" placeholder="Company name" autocomplete="off" class="instruction-row">
									</div>
								</div>								
							</div>	
							<div class="instruction-line"></div>
							<div class="instruction-shipment">
								<div class="row">
									<div class="col-sm-6">
										<input type="text" name="company_name" placeholder="Company name" autocomplete="off" class="instruction-row">
									</div>
									<div class="col-sm-6">
										<input type="text" name="company_name" placeholder="Company name" autocomplete="off" class="instruction-row">
									</div>
								</div>								
							</div>
							<div class="instruction-shipment">
								<div class="row">
									<div class="col-sm-6">
										<input type="text" name="company_name" placeholder="Company name" autocomplete="off" class="instruction-row">
									</div>
									<div class="col-sm-6">
										<input type="text" name="company_name" placeholder="Company name" autocomplete="off" class="instruction-row">
									</div>
								</div>								
							</div>		
							<div class="instruction-shipment">
								<div class="row">
									<div class="col-sm-6">
										<input type="text" name="company_name" placeholder="Company name" autocomplete="off" class="instruction-row">
									</div>
									<div class="col-sm-6">
										<input type="text" name="company_name" placeholder="Company name" autocomplete="off" class="instruction-row">
									</div>
								</div>								
							</div>	
							<div class="instruction-line"></div>	
							<div class="shipping-instruction-booking-add2">
								<a href="javascript:void(0)" ><i class="fa fa-plus" aria-hidden="true"></i></a>
							</div>
							<div class="clr"></div>	
							<div class="instruction-shipment">
								<div class="row">
									<div class="col-sm-6">
										<input type="text" name="company_name" placeholder="Company name" autocomplete="off" class="instruction-row">
									</div>
									<div class="col-sm-6">
										<input type="text" name="company_name" placeholder="Company name" autocomplete="off" class="instruction-row">
									</div>
								</div>								
							</div>		
							<div class="instruction-shipment">
								<div class="row">
									<div class="col-sm-6">
										<input type="text" name="company_name" placeholder="Company name" autocomplete="off" class="instruction-row">
									</div>
									<div class="col-sm-6">
										<input type="text" name="company_name" placeholder="Company name" autocomplete="off" class="instruction-row">
									</div>
								</div>								
							</div>		
							<div class="instruction-shipment">
								<div class="row">
									<div class="col-sm-6">
										<input type="text" name="company_name" placeholder="Company name" autocomplete="off" class="instruction-row">
									</div>
									<div class="col-sm-6">
										<input type="text" name="company_name" placeholder="Company name" autocomplete="off" class="instruction-row">
									</div>
								</div>								
							</div>		
							<div class="instruction-shipment">
								<div class="row">
									<div class="col-sm-6">
										<input type="text" name="company_name" placeholder="Company name" autocomplete="off" class="instruction-row">
									</div>
									<div class="col-sm-6">
										<input type="text" name="company_name" placeholder="Company name" autocomplete="off" class="instruction-row">
									</div>
								</div>								
							</div>		
						</div>
						<div id="air-freight" class="tabcontent" style="display: none;">
							Air freight
						</div>        
					</div>					
				</div>
			</div>
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