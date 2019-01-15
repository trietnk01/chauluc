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
							<form class="sea-freight-frm">
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
											<input type="text" name="company_name" placeholder="Name" autocomplete="off" class="instruction-row">
										</div>
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Tel / Fax" autocomplete="off" class="instruction-row">
										</div>
									</div>								
								</div>
								<div class="instruction-shipment">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Address" autocomplete="off" class="instruction-row">
										</div>
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Email" autocomplete="off" class="instruction-row">
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
											<input type="text" name="company_name" placeholder="Name" autocomplete="off" class="instruction-row">
										</div>
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Tel / Fax" autocomplete="off" class="instruction-row">
										</div>
									</div>								
								</div>		
								<div class="instruction-shipment">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Address" autocomplete="off" class="instruction-row">
										</div>
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Email" autocomplete="off" class="instruction-row">
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
											<input type="text" name="company_name" placeholder="Name" autocomplete="off" class="instruction-row">
										</div>
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Tel / Fax" autocomplete="off" class="instruction-row">
										</div>
									</div>								
								</div>
								<div class="instruction-shipment">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Address" autocomplete="off" class="instruction-row">
										</div>
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Email" autocomplete="off" class="instruction-row">
										</div>
									</div>								
								</div>	
								<div class="instruction-line"></div>
								<div class="instruction-shipment">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Vessel" autocomplete="off" class="instruction-row">
										</div>
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Voy No" autocomplete="off" class="instruction-row">
										</div>
									</div>								
								</div>
								<div class="instruction-shipment">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Place of receipt" autocomplete="off" class="instruction-row">
										</div>
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Port of loading" autocomplete="off" class="instruction-row">
										</div>
									</div>								
								</div>		
								<div class="instruction-shipment">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Port of discharge" autocomplete="off" class="instruction-row">
										</div>
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Place of delivery" autocomplete="off" class="instruction-row">
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
											<input type="text" name="company_name" placeholder="Container number" autocomplete="off" class="instruction-row">
										</div>
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Seal number" autocomplete="off" class="instruction-row">
										</div>
									</div>								
								</div>		
								<div class="instruction-shipment">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Size / Type" autocomplete="off" class="instruction-row">
										</div>
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Number of package" autocomplete="off" class="instruction-row">
										</div>
									</div>								
								</div>		
								<div class="instruction-shipment">
									<div class="row">
										<div class="col-sm-6">
											<div class="shipping-instruction-selected">
												<select class="selected2">
													<option>Unit</option>
													<option>Origin 2</option>
													<option>Origin 3</option>
													<option>Origin 4</option>
													<option>Origin 5</option>
													<option>Origin 6</option>
												</select>
											</div>			
										</div>
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Net Weight KGS (Without Tare)" autocomplete="off" class="instruction-row">
										</div>
									</div>								
								</div>
								<div class="instruction-shipment">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Gross Weight KGS (Without Tare)" autocomplete="off" class="instruction-row">
										</div>
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Measurement Cbm" autocomplete="off" class="instruction-row">
										</div>
									</div>								
								</div>		
								<div class="instruction-shipment">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="HS Code" autocomplete="off" class="instruction-row">
										</div>
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Shipping mark" autocomplete="off" class="instruction-row">
										</div>
									</div>								
								</div>
								<div class="instruction-shipment">
									<div class="row">
										<div class="col-lg-12">
											<textarea rows="10"  placeholder="Description of goods" class="sabara"></textarea>
										</div>									
									</div>								
								</div>	
								<div class="booking-online-submit">
									<a href="javascript:void(0);">Submit</a>
								</div>					
							</form>												
						</div>
						<div id="air-freight" class="tabcontent" style="display: none;">
							<form class="sea-freight-frm">
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
											<input type="text" name="company_name" placeholder="Name" autocomplete="off" class="instruction-row">
										</div>
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Tel / Fax" autocomplete="off" class="instruction-row">
										</div>
									</div>								
								</div>
								<div class="instruction-shipment">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Address" autocomplete="off" class="instruction-row">
										</div>
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Email" autocomplete="off" class="instruction-row">
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
											<input type="text" name="company_name" placeholder="Name" autocomplete="off" class="instruction-row">
										</div>
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Tel / Fax" autocomplete="off" class="instruction-row">
										</div>
									</div>								
								</div>		
								<div class="instruction-shipment">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Address" autocomplete="off" class="instruction-row">
										</div>
										<div class="col-sm-6">											
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
											<input type="text" name="company_name" placeholder="Name" autocomplete="off" class="instruction-row">
										</div>
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Tel / Fax" autocomplete="off" class="instruction-row">
										</div>
									</div>								
								</div>
								<div class="instruction-shipment">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Address" autocomplete="off" class="instruction-row">
										</div>
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Email" autocomplete="off" class="instruction-row">
										</div>
									</div>								
								</div>	
								<div class="instruction-line"></div>
								<div class="instruction-shipment">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Carrier" autocomplete="off" class="instruction-row">
										</div>
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="From (Airport of departure)" autocomplete="off" class="instruction-row">
										</div>
									</div>								
								</div>
								<div class="instruction-shipment">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="To (Airport of destination)" autocomplete="off" class="instruction-row">
										</div>
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Other charges payable at" autocomplete="off" class="instruction-row">
										</div>
									</div>								
								</div>		
								<div class="instruction-shipment">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Airfreight charges payable at" autocomplete="off" class="instruction-row">
										</div>
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Value of Carrier" autocomplete="off" class="instruction-row">
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
											<input type="text" name="company_name" placeholder="Marks & Numbers" autocomplete="off" class="instruction-row">
										</div>
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Description of goods" autocomplete="off" class="instruction-row">
										</div>
									</div>								
								</div>		
								<div class="instruction-shipment">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="No of package" autocomplete="off" class="instruction-row">
										</div>
										<div class="col-sm-6">
											<div class="shipping-instruction-selected">
												<select class="selected2">
													<option>Size of package</option>
													<option>Origin 2</option>
													<option>Origin 3</option>
													<option>Origin 4</option>
													<option>Origin 5</option>
													<option>Origin 6</option>
												</select>
											</div>		
										</div>
									</div>								
								</div>		
								<div class="instruction-shipment">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Gross weight (kgs)" autocomplete="off" class="instruction-row">
										</div>
										<div class="col-sm-6">
											<input type="text" name="company_name" placeholder="Volumn (cbm)" autocomplete="off" class="instruction-row">
										</div>
									</div>								
								</div>
								<div class="instruction-line"></div>								
								<div class="instruction-shipment">
									<div class="row">
										<div class="col-lg-12">
											<div class="shipping-instruction-selected">
												<select class="selected2">
													<option>Document accompanying air waybill</option>
													<option>Origin 2</option>
													<option>Origin 3</option>
													<option>Origin 4</option>
													<option>Origin 5</option>
													<option>Origin 6</option>
												</select>
											</div>		
										</div>									
									</div>								
								</div>	
								<div class="booking-online-submit">
									<a href="javascript:void(0);">Submit</a>
								</div>					
							</form>		
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