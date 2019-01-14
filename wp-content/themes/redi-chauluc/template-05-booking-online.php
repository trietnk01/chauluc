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
					<div class="blue-box-booking-left">
						<div class="blue-box-booking-icon" style="background-image: url(<?php echo P_IMG.'/shipper.png'; ?>);padding-top: calc(100% / (28/29))"></div>
					</div>
					<div class="blue-box-booking-right">
						<div class="blue-box-booking-title">Shipper</div>
						<div class="blue-box-booking-slogan">Shipper Information</div>
					</div>
					<div class="clr"></div>					
				</div>
				<div class="clr"></div>
				<div class="quotation-row phaba">
					<input type="text" name="company_name" placeholder="Company name">
				</div>
				<div class="quotation-row phaba">
					<input type="text" name="company_address" placeholder="Address">
				</div>
				<div class="quotation-row phaba">
					<input type="text" name="company_vat_code" placeholder="VAT Code">
				</div>
				<div class="quotation-row phaba">
					<input type="text" name="company_email" placeholder="Email">
				</div>
				<div class="quotation-row phaba">
					<input type="text" name="company_phone" placeholder="Phone">
				</div>
				<div class="blue-booking-box phaba">
					<div class="blue-box-booking-left">
						<div class="blue-box-booking-icon" style="background-image: url(<?php echo P_IMG.'/package.png'; ?>);padding-top: calc(100% / (28/29))"></div>
					</div>
					<div class="blue-box-booking-right">
						<div class="blue-box-booking-title">Package</div>
						<div class="blue-box-booking-slogan">Package Information</div>
					</div>
					<div class="clr"></div>					
				</div>
				<div class="clr"></div>
				<div class="quotation-row phaba">
					<input type="text" name="company_commodity" placeholder="Commodity">
				</div>
				<div class="quotation-row phaba">
					<input type="text" name="company_place_of_package" placeholder="Place of package">
				</div>
				<div class="quotation-row phaba">
					<input type="text" name="company_time_of_package" placeholder="Time of package">
				</div>
				<div class="blue-booking-box phaba">
					<div class="blue-box-booking-left">
						<div class="blue-box-booking-icon" style="background-image: url(<?php echo P_IMG.'/routing.png'; ?>);padding-top: calc(100% / (28/29))"></div>
					</div>
					<div class="blue-box-booking-right">
						<div class="blue-box-booking-title">Routing</div>
						<div class="blue-box-booking-slogan">Routing Information</div>
					</div>
					<div class="clr"></div>					
				</div>
				<div class="clr"></div>	
				<div class="quotation-row phaba">
					<input type="text" name="company_vessel" placeholder="Vessel">
				</div>
				<div class="quotation-row phaba">
					<input type="text" name="company_pol" placeholder="POL">
				</div>
				<div class="quotation-row phaba">
					<input type="text" name="company_pod" placeholder="POD">
				</div>
				<div class="quotation-row phaba">
					<input type="text" name="company_etd" placeholder="Etd">
				</div>	
				<div class="blue-booking-box phaba">
					<div class="blue-box-booking-left">
						<div class="blue-box-booking-icon" style="background-image: url(<?php echo P_IMG.'/cargo.png'; ?>);padding-top: calc(100% / (28/29))"></div>
					</div>
					<div class="blue-box-booking-right">
						<div class="blue-box-booking-title">Cargo</div>
						<div class="blue-box-booking-slogan">Cargo Information</div>
					</div>
					<div class="clr"></div>					
				</div>
				<div class="clr"></div>	
				<div class="quotation-row phaba">
					<input type="text" name="company_volumn_cbm" placeholder="Volumn/Cbm">
				</div>
				<div class="quotation-row phaba">
					<div class="linhba-selected">
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
				<div class="quotation-row phaba">
					<input type="text" name="company_qty" placeholder="Quantity">
				</div>	
				<div class="quotation-row phaba">
					<div class="linhba-selected">
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
				<div class="booking-online-submit">
					<a href="javascript:void(0);">Submit</a>
				</div>
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