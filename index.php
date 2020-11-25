<?php
include 'config.php';
	$title = "Home";
	require_once( 'header.php' );
?>

<?php
include 'config.php';
	$title = "NavBar";
	require_once( 'nav.php' );
?>
  <body>					
				
					
			<section class="hero-slider slider-fullscreen">
			
				<ul class="slides">
					<li class="background-parallax">
						<img alt="Slider Background" class="background-image" src="img/videoframe.jpg">
						
						<div class="video-wrapper">
							<video autoplay="" muted="" loop="">
								<source src="video/CentauriRising_BackgroundVideo.webm" type="video/webm">
								<source src="video/CentauriRising_BackgroundVideo.mp4" type="video/mp4">
								<source src="video/CentauriRising_BackgroundVideo.ogv" type="video/ogg">	
							</video>
							<div class="overlay background-dark-grey"></div>
						</div>
						
						<div class="medium-centered" style="padding-top:384px">
							<div class="medium-10 medium-centered columns text-center">
								<!--<h1 class="text-white">Centauri Rising</h1>-->
								<img alt="Image" src="img/Centauri_Rising_MainLogo_Resize.png">
								<p class="lead text-white">
									 One ship. One captain. One destination. 
								</p>
								<a href="#more" class="button button-small button-white inner-link">Know more</a>
								<a href="https://twitter.com/CentauriRising" class="button button-small button-white button-filled">Twitter<i class="icon icon_heart"></i></a>
								<a href="https://discord.gg/bHVBTaw" class="button button-small button-white button-filled">Discord<i class="icon icon_chat"></i></a>
							</div>
						</div>
					</li>
		
				</ul>
			
			</section>
			
    
	<section class="divider-background background-parallax" id="more">
				<div class="overlay background-dark-grey"></div>
				<img alt="Divider Background" class="background-image" src="img/imagedivider1.jpg">
				
				<div class="row">
					<div class="medium-12 columns text-center">
						<h3 class="text-white page-title">Single Player Tactical Space Combat</h3>
						<p class="text-white lead">
							Centauri Rising is a RTT (Real Time Tactical) game currently in development for PC. The game follows the story of the Endeavour and you, her Captain. After being lost in space, you must hold your crew together and find a way back home. Along the way you'll encounter aliens both hostile and friendly, uncover ancient history, fight an epic struggle against interdimensional beings and lead your crew through the depths of space.	
						</p>
					</div>
				</div>
			
			</section>
			
			<section class="background-black">
				<div class="container">
					<div class="row">
						<div class="medium-8 columns medium-centered text-center">
							<h3 class="page-title">Screenshots</h3>
							
						</div>
					</div>
					
					<div class="row">
						<div class="image-gallery">
						
							<div class="medium-4 columns veo">
									<a href="img/CentauriRising_ScreenShot1.jpg" data-lightbox="true">
											<img class="lightbox-image" alt="Centauri Rising UI" src="img/CentauriRising_ScreenShot1.jpg">
									</a>
							</div>
							
							<div class="medium-4 columns veo">
									<a href="img/CentauriRising_ScreenShot2.jpg" data-lightbox="true">
											<img class="lightbox-image" alt="Centauri Rising Volcanic Planet" src="img/CentauriRising_ScreenShot2.jpg">
									</a>
							</div>
							
							<div class="medium-4 columns veo">
									<a href="img/CentauriRising_ScreenShot3.jpg" data-lightbox="true">
											<img class="lightbox-image" alt="Centauri Rising Nebula" src="img/CentauriRising_ScreenShot3.jpg">
									</a>
							</div>
														
						
						</div>
						
					</div>
				
					
				</div>
			</section>
			
			<section  class="background-dark-grey" >
			
				<div class="row">
				
					<div class="medium-4 columns text-center large-feature">

						<h6>Combat</h6>
						<div class="horizontal-line"></div>
						<p>
							Captain your ship by controlling weapons, assigning power distribution and targeting specific enemy systems to disable or destroy hostile forces.
						</p>
					</div>
					
					<div class="medium-4 columns text-center large-feature">

						<h6>Management</h6>
						<div class="horizontal-line"></div>
						<p>
							Promote and train your bridge officers. Scavenge for resources to repair and upgrade your ship's weapons and technology. 
						</p>
					</div>
					
					<div class="medium-4 columns text-center large-feature">

						<h6>Story</h6>
						<div class="horizontal-line"></div>
						<p>
							Experience a hand crafted, fully voiced narrative as you explore Unknown Space and unravel the mystery that brought you and your crew here. 
						</p>
					</div>
					
						
				</div>
			
			</section>
			
			<section class="background-black">
			
				<div class="row">
						<div class="medium-8 columns medium-centered text-center">
							<h3 class="page-title">Stay updated with our Newsletter</h3>
							
						</div>
					</div>
				
				<div class="row">
				
					<div class="medium-6 columns">
						<p class="lead">
							Sign up for our newsletter to receive exclusive updates on the development and special offers. We pinky promise to NOT spam you.
						</p>
						
					</div>
					
					<div class="medium-6 columns">
						<!-- Begin Mailchimp Signup Form -->
						<div id="mc_embed_signup">
							<form action="https://centauri-rising.us2.list-manage.com/subscribe/post?u=d1ba64fc6304ebebc56db85a9&amp;id=6598f9eb16" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								<div id="mc_embed_signup_scroll">
								<label for="mce-EMAIL"></label>
								<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="enter your email address" required>
								<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d1ba64fc6304ebebc56db85a9_6598f9eb16" tabindex="-1" value=""></div>
								<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button button-small button-white inner-link"></div>
								</div>
							</form>
						</div>

						<!--End mc_embed_signup-->
					</div>
		
				
				</div>
			
			</section>

			
			
	<?php
$title = "Footer";
require_once( 'footer.php' );
?>
				