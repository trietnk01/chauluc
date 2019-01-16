<?php
/*
Template name: Template dịch vụ
Template Post Type: post, page
*/
get_header();
global $zController;
$productModel=$zController->getModel("/frontend","ProductModel");
global $acf_pr;
?>
<div class="container">
	<div class="row">
		<div class="col"><h1 class="single-title">Services</h1></div>
	</div>
	<?php
	$k=0; 
	for ($i=0; $i < 9; $i++) { 
		if($k%3==0){
			echo '<div class="row">';
		}
		?>
		<div class="col-sm-4">
			<div class="service-item2">
				<a href="<?php echo site_url( 'service-detail', null ); ?>" title="tiêu đề tên"  rel="nofollow">
					<div class="hw-service" style="background-image: url(<?php echo P_IMG.'/bg-'.$i.'.jpg'; ?>)"></div>
				</a>
				<h3 class="service-item-title2"><a href="<?php echo site_url( 'service-detail', null ); ?>">Industrial Broker</a></h3>
			</div>		
		</div>
		<?php
		$k++;
		if($k%3==0 || $k==9){
			echo '</div>';
		}
	}
	?>
	<div class="row">
		<div class="col">
			<div class="pagination2">
				<ul class="page-numbers">
					<?php 
					for ($i=1; $i <= 6; $i++) { 
						?>
						<li><a href="javascript:void(0);"><?php echo @$i; ?></a></li>
						<?php
					}
					?>				
				</ul>
			</div>			
		</div>
	</div>
</div>
<?php
get_footer(); 
?>