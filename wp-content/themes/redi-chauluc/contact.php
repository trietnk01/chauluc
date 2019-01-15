<?php
/*
Template name: Template liên hệ
Template Post Type: post, page
*/
get_header();
?>
<div class="container">
	<div class="row">
		<div class="col">
			<h1 class="single-title">Contact us</h1>
			<form class="contact-box">
				<div class="row">
					<div class="col-sm-6">
						<div class="contact-us-row">
							<input type="text" name="company_name" placeholder="Contact person *">
						</div>
						<div class="contact-us-row">
							<input type="text" name="company_name" placeholder="Company Name *">
						</div>
						<div class="contact-us-row">
							<input type="text" name="company_name" placeholder="Address *">
						</div>
						<div class="contact-us-row">
							<input type="text" name="company_name" placeholder="City *">
						</div>
						<div class="contact-us-row">
							<input type="text" name="company_name" placeholder="Postal Code *">
						</div>
						<div class="contact-us-row">
							<input type="text" name="company_name" placeholder="State/Province *">
						</div>
						<div class="contact-us-selected">
							<select class="selected2">
								<option>Country</option>
								<option>Origin 2</option>
								<option>Origin 3</option>
								<option>Origin 4</option>
								<option>Origin 5</option>
								<option>Origin 6</option>
							</select>
						</div>
					</div>
					<div class="col-sm-6"></div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
get_footer(); 
?>