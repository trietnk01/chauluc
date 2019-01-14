<?php
/*
Template name: Template chi tiết dịch vụ
Template Post Type: post, page
*/
get_header();
global $zController;
$productModel=$zController->getModel("/frontend","ProductModel");
?>
<div class="container">
	<div class="row">
		<div class="col"><h1 class="single-title2">Door-to-Door services</h1></div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<p>
				In variety of services with which Chau Luc is providing Door-to-Door services is one of the most fundamental services. Chau Luc is not only an official member of WFG (World Freight Group) in Vietnam but also is one of the partners of Global Agents System. Therefore, we can pick up your goods at anywhere inside or outside Vietnam, handling all procedures and transport your goods to final pointed destinations and keep you in reach the status of your shipments by telephone, fax, E-mail systems.
			</p>
			<p>
				In variety of services with which Chau Luc is providing Door-to-Door services is one of the most fundamental services. Chau Luc is not only an official member of WFG (World Freight Group) in Vietnam but also is one of the partners of Global Agents System. Therefore, we can pick up your goods at anywhere inside or outside Vietnam, handling all procedures and transport your goods to final pointed destinations and keep you in reach the status of your shipments by telephone, fax, E-mail systems.
			</p>
		</div>
		<div class="col-lg-6">
			<div class="ser-detail" style="background-image: url(<?php echo P_IMG.'/service-detail.jpg'; ?>);background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (610/410))"></div>
		</div>
	</div>
</div>
<?php
get_footer(); 
?>