<?php 
/*
Template name: Template Register
Template Post Type: post, page
*/
get_header();
?>
<h1 style="display: none;"><?php echo get_bloginfo( 'name','' ); ?></h1>
<div class="container">
	<div class="row">
		<div class="col">
			<h1 class="single-title">Register</h1>
			<div class="login-box">
				<form class="your-account-box" method="POST">
					<h3 class="account-box-title">Create your account</h3>
					<div class="account-box-txt">
						<input type="text" name="username" placeholder="Username" autocomplete="off">
					</div>
					<div class="account-box-txt">
						<input type="text" name="password" placeholder="Password" autocomplete="off">
					</div>
					<div class="account-box-txt">
						<input type="text" name="username" placeholder="Re-password" autocomplete="off">
					</div>
					<div class="account-box-txt">
						<input type="text" name="username" placeholder="Your email" autocomplete="off">
					</div>
					<div class="account-box-txt">
						<input type="text" name="username" placeholder="Your address" autocomplete="off">
					</div>
					<div class="account-box-txt">
						<input type="text" name="username" placeholder="Your profile no." autocomplete="off">
					</div>
					<div class="box-main-register">
						<a href="<?php echo site_url( 'register', null ); ?>">Register</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
get_footer(); 
?>