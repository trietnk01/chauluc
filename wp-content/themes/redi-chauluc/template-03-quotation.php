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
				<?php 
				for ($i=0; $i < 9; $i++) { 
					?>
					<div class="quotation-row">
						<input type="text" name="company_name" placeholder="Company name">
					</div>
					<?php
				}
				?>
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