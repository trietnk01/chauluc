<?php unset( $_GET['q'] ); global $acf_pr;  $acf_pr = p_var_ar("acf_pr"); ?>
<!DOCTYPE html>
<html <?php language_attributes() ?> data-user-agent="<?php echo $_SERVER['HTTP_USER_AGENT'] ?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="icon" href="<?php echo p_acf_o("logo_favicon") ? p_acf_o("logo_favicon") : P_IMG  . '/wp.png' ?>" sizes="16x16" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php if ( is_singular() && pings_open( get_queried_object())) { ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php } ?>
	<!-- Yoast seo build title,description. (No code title,des,keywords)  -->
	<?php wp_head(); ?>

	
	<?php if( !is_localhost() ) { //  google analytics ?> 


	<?php } ?>

	<?php do_action("p_add_code_head") ?>
	
</head>
<body <?php body_class() ?> id="body-top">
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<?php 
					$source_social=get_field('op_inf_sn_repeat','option');				
					?>
					<ul class="social-lst">
						<li>
							<a href="<?php echo @$source_social[0]['op_inf_sn_repeat_link']; ?>" title="tiêu đề tên" target="_blank" rel="nofollow">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="<?php echo @$source_social[1]['op_inf_sn_repeat_link']; ?>" title="tiêu đề tên" target="_blank" rel="nofollow">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="<?php echo @$source_social[2]['op_inf_sn_repeat_link']; ?>" title="tiêu đề tên" target="_blank" rel="nofollow">
								<i class="fa fa-youtube-play" aria-hidden="true"></i>
							</a>
						</li>					
						<li>
							<a href="<?php echo @$source_social[3]['op_inf_sn_repeat_link']; ?>" title="tiêu đề tên" target="_blank" rel="nofollow">
								<i class="fa fa-google-plus" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
					<div class="contact-info">
						<div class="hotline-block">
							<div class="hotline-icon"><i class="fa fa-phone" aria-hidden="true"></i></i></div>
							<div class="hotline-txt">(84) 900405 8885</div>
							<div class="clr"></div>
						</div>
						<div class="live-chat-block">
							<div class="live-chat-txt">Live chat support:</div>	
							<div class="live-chat-icon">
								<div class="live-chat-skype-online"><a href="javascript:void(0);"><img src="<?php echo P_IMG.'/icon_skype_online.png'; ?>"></a></div>			
								<div class="live-chat-skype-offline"><a href="javascript:void(0);"><img src="<?php echo P_IMG.'/icon_skype_offline.png'; ?>"></a></div>
								<div class="clr"></div>
							</div>
							<div class="clr"></div>
						</div>
						<div class="language-block">
							<div class="language-vi"><img src="<?php echo P_IMG.'/vi.png'; ?>"></div>
							<div class="language-en"><img src="<?php echo P_IMG.'/en.png'; ?>"></div>
							<div class="clr"></div>
						</div>
						<div class="clr"></div>
					</div>
					<div class="clr"></div>
				</div>
			</div>		
		</div>
	</div>
	<div class="header-menu">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="logo">
						<a href="<?php echo home_url() ?>" title="<?php echo get_bloginfo( 'name'); ?>">					
							<img src="<?php echo get_field('logo_header','option'); ?>" alt="<?php echo get_bloginfo( 'name'); ?>" >
						</a>
					</div>	
					<div id="smoothmainmenu" class="ddsmoothmenu">
						<?php			
						$args = array( 
							'menu'              => '', 
							'container'         => '', 
							'container_class'   => '', 
							'container_id'      => '', 
							'menu_class'        => 'main-menu',                             
							'echo'              => true, 
							'fallback_cb'       => 'wp_page_menu', 
							'before'            => '', 
							'after'             => '', 
							'link_before'       => '', 
							'link_after'        => '', 
							'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
							'depth'             => 3, 
							'walker'            => '', 
							'theme_location'    => 'primary' ,
							'menu_li_actived'       => 'current-menu-item',
							'menu_item_has_children'=> 'menu-item-has-children',
						);
						wp_nav_menu($args);
						?>        		
					</div>
					<div class="search-box">
						<a href="javascript:void(0);" onclick="showFrmSearch();"><i class="fa fa-search" aria-hidden="true"></i></a>
					</div>
					<div class="clr"></div>
				</div>
			</div>
		</div>
	</div>	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="box_logo_mobile">
			<a href="<?php echo home_url() ?>" title="Logo">					
				<img src="<?php echo get_field('logo_header','option'); ?>" alt="Logo" >
			</a>
		</div>		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="clr"></div>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul>
				<li><a href="javascript:void(0);">Homepage</a></li>
				<li><a href="javascript:void(0);">Service</a></li>
				<li><a href="javascript:void(0);">Quotation</a></li>
				<li><a href="javascript:void(0);">E-Commerce</a></li>
				<li><a href="javascript:void(0);">Network</a></li>
				<li><a href="javascript:void(0);">Contact us</a></li>
				<li><a href="javascript:void(0);">News & Event</a></li>
				<li><a href="javascript:void(0);">Login</a></li>							
			</ul>			
		</div>		
	</nav>	
	<?php do_action('p_after_header') ; ?>
