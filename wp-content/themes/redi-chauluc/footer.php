<?php 
/*

Footer template

*/
?>
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="footer-col-1">
					<h4 class="footer-title">
						Internationnal Freight Forwarders
					</h4>
					<div class="footer-r">
						R. 467, Van Nam Building, 26 Duong Lang, Dong Da, Hanoi
					</div>
					<div class="footer-tel-fax-email">
						Tel: <a href="javascript:void(0);">(84) 4 35642514</a>/<a href="javascript:void(0);">35642515</a>
					</div>
					<div class="footer-tel-fax-email">
						Fax: <a href="javascript:void(0);">(84) 4 35642513</a> - Mobile: <a href="javascript:void(0);">(84) 900405 8885</a>
					</div>
					<div class="footer-tel-fax-email">
						Email: <a href="javascript:void(0);">quynh@worldfreightvn.com</a>
					</div>
				</div>
				<div class="footer-col-2">
					<h4 class="footer-title">
						Inquiry
					</h4>
					<div class="bf-box">
						<div class="bf-left">
							<div style="background-image: url(<?php echo P_IMG.'/wf.png'; ?>);background-size: cover;background-repeat: no-repeat;padding-top: calc(100% / (190 / 40));"></div>
						</div>
						<div class="bf-right">
							Member of the World <br/>
							Freight Group since <br/>
							November 200
						</div>
						<div class="clr"></div>
					</div>
					<div class="business-forum">
						<div class="business-left">
							<div style="background-image: url(<?php echo P_IMG.'/bf.png'; ?>);background-size: cover;background-repeat: no-repeat;padding-top: calc(100% / (190 / 40));"></div>
						</div>
						<div class="business-right">
							Vietnam Chamber of <br/>
							Commerce and <br/>
							Industry (VCCI)
						</div>
						<div class="clr"></div>
					</div>
				</div>
				<div class="footer-col-3">
					<h4 class="footer-title">
						Member & Partner
					</h4>
					<div class="member-partner-box">
						<?php
						$k=0; 
						for($i=0;$i<6;$i++){
							if($k%3==0){
								echo '<div class="member-row">';
							}
							?>
							<div class="parter-item">
								<div style="background-image: url(<?php echo P_IMG.'/partner-'.$i.'.png'; ?>);background-size: cover;background-repeat: no-repeat;padding-top: calc(100% / (60 / 45));"></div>
							</div>
							<?php
							$k++;
							if($k%3==0 || $k==6){
								echo '<div class="clr"></div>';
								echo '</div>';
							}
						}
						?>					
					</div>
				</div>
				<div class="clr"></div>
			</div>			
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="bottom-left">
						<ul class="footer-menu">
							<li><a href="javascript:void(0);">Homepage</a></li>
							<li><a href="javascript:void(0);">Who we are</a></li>
							<li><a href="javascript:void(0);">Tracking</a></li>
							<li><a href="javascript:void(0);">Service</a></li>
							<li><a href="javascript:void(0);">News & Event</a></li>
						</ul>
						<div class="clr"></div>
						<div class="chauluc-transport">
							Chau Luc Transport B/L Terms & Conditions&nbsp;&nbsp;|&nbsp;&nbsp;Chau Luc Transport Air Way Bill Conditions of Contract
						</div>
					</div>	
					<div class="bottom-right">
						<div class="connect-us">
							<ul class="social-list">
								<li><a href="javascript:void(0);" rel="nofollow"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
								<li><a href="javascript:void(0);" rel="nofollow"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
								<li><a href="javascript:void(0);" rel="nofollow"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
								<li><a href="javascript:void(0);" rel="nofollow"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
							</ul>
							<div class="ken-us">Connect Us</div>							
							<div class="clr"></div>
						</div>
						<div class="copy-right">
							Copyright &copy; 2018 <span class="chauluc-co-ltd"><a href="javascript:void(0);">Chau Luc Co.,Ltd. (CSC).</a></span> Design by <span class="chauluc-co-ltd"><a href="javascript:void(0);">Redi</a></span>
						</div>
					</div>
					<div class="clr"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
wp_footer();
?>
</body>
</html>
