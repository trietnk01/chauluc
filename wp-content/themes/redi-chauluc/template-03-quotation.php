<?php
/*
Template name: Template quotation
Template Post Type: post, page
*/
get_header();
global $zController;
$productModel=$zController->getModel("/frontend","ProductModel");
?>
<div class="container">
	<div class="row">
		<div class="col">
			<h1 class="single-title">Quotation</h1>
			<form class="quotation-hw-box" method="POST">
				<div class="quotation-row">
					<input type="text" name="company_name" placeholder="Company name">
				</div>
				<div class="quotation-row">
					<input type="text" name="company_name" placeholder="Company address">
				</div>
				<div class="quotation-row">
					<input type="text" name="company_name" placeholder="Contact Email">
				</div>
				<div class="quotation-row">
					<input type="text" name="company_name" placeholder="Contact Phone">
				</div>
				<div class="quotation-row">
					<input type="text" name="company_name" placeholder="Loading">
				</div>
				<div class="quotation-row">
					<input type="text" name="company_name" placeholder="Delivery">
				</div>
				<div class="quotation-row">
					<input type="text" name="company_name" placeholder="Vol">
				</div>
				<div class="quotation-row">
					<input type="text" name="company_name" placeholder="ETD">
				</div>
				<div class="quotation-row">
					<input type="text" name="company_name" placeholder="ETA">
				</div>				
				<div class="quotation-submit">
					<a href="javascript:void(0);">Submit</a>
				</div>				
			</form>
		</div>
	</div>
</div>
<?php
get_footer(); 
?>