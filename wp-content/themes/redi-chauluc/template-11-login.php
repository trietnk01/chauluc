<?php 
/*
Template name: Template News - Login
Template Post Type: post, page
*/
get_header();
?>
<h1 style="display: none;"><?php echo get_bloginfo( 'name','' ); ?></h1>
<div class="container">
	<div class="row">
		<div class="col">
			<h1 class="single-title">Login</h1>
			<div class="login-box">
				<?php include get_template_directory() . '/block/block-manage-account.php'; ?>	
			</div>
		</div>
	</div>
</div>
<?php
get_footer(); 
?>