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
							<input type="text" name="company_name" placeholder="Contact person *" autocomplete="off">
						</div>
						<div class="contact-us-row">
							<input type="text" name="company_name" placeholder="Company Name *" autocomplete="off">
						</div>
						<div class="contact-us-row">
							<input type="text" name="company_name" placeholder="Address *" autocomplete="off">
						</div>
						<div class="contact-us-row">
							<input type="text" name="company_name" placeholder="City *" autocomplete="off">
						</div>
						<div class="contact-us-row">
							<input type="text" name="company_name" placeholder="Postal Code *" autocomplete="off">
						</div>
						<div class="contact-us-row">
							<input type="text" name="company_name" placeholder="State/Province *" autocomplete="off">
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
						<div class="capcha">
							<div class="capcha-left">
								<div style="background-image: url(<?php echo P_IMG.'/capcha.png'; ?>);background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (190 / 30))"></div>
							</div>
							<div class="capcha-right">
								<a href="javascript:void(0);"><i class="fa fa-refresh" aria-hidden="true"></i></a>
							</div>
							<div class="clr"></div>
						</div>
						<div class="contact-us-row loa-soa">Please type confirmation code</div>
						<div class="contact-us-row">
							<input type="text" name="company_name" placeholder="Confirmation code *" autocomplete="off">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="contact-us-row">
							<input type="text" name="company_name" placeholder="Email *" autocomplete="off">
						</div>
						<div class="contact-us-row">
							<input type="text" name="company_name" placeholder="Phone number *" autocomplete="off">
						</div>
						<div class="contact-us-selected everich-handling-office">
							<select class="selected2">
								<option>Everich Handling Office</option>
								<option>Origin 2</option>
								<option>Origin 3</option>
								<option>Origin 4</option>
								<option>Origin 5</option>
								<option>Origin 6</option>
							</select>
						</div>
						<div class="contact-us-selected everich-handling-office">
							<select class="selected2">
								<option>Inquiry subject</option>
								<option>Origin 2</option>
								<option>Origin 3</option>
								<option>Origin 4</option>
								<option>Origin 5</option>
								<option>Origin 6</option>
							</select>
						</div>
						<div>
							<textarea class="contact-us-textarea" placeholder="Contents" >
								
							</textarea>
						</div>
						<div class="contactus-submit">
							<a href="javascript:void(0);">Send Request</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
get_footer(); 
?>