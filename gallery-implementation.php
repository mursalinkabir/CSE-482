<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basics ===================================================================== -->
	<meta charset="utf-8">
	<title>Posh | Contact Us</title>


	<!-- Mobile Specifics =========================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">



	<!-- Info ======================================================================= -->
	<meta name="description" content="Premium HTML Website Template">
	<meta name="author" content="Codehound">


	<!-- Styles ===================================================================== -->
	
	<!-- Bootstrap 3 -->
	<link rel="stylesheet" href="css/bootstrap.css">


	<!-- CSS to override Some Bootstrap styles -->
	<link rel="stylesheet" href="css/bootstrap-overrides.css">


	<!-- Main StyleSheet for Posh  -->
	<link rel="stylesheet" href="css/style.css">


	<!-- Styles specific to only the half-widh/boxed layout -->
	<link rel="stylesheet" href="css/style-hw.css">


	<!-- Some Overrides for responsiveness -->
	<link rel="stylesheet" href="css/style-responsive.css">


	<!-- CSS for lightbox -->
	<link href="css/lightbox.css" rel="stylesheet"/>


	<!-- FontAwesome Icons -->
	<link href="css/font-awesome.min.css" rel="stylesheet"/>


	<!-- Modernizr is used by some jQuery plugins -->
	<script src="js/modernizr.custom.js"></script>

<!-- Gallery implementation Uimports-->
<link href="includes/gallery.css" rel="stylesheet" type="text/css" />
<link href="includes/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="includes/jquery-1.5.min.js"></script>
<script type="text/javascript" src="includes/farinspace/jquery.imgpreload.min.js"></script>

<script type="text/javascript" src="includes/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.js"></script>

<script type="text/javascript" src="includes/gallery.js"></script>


	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="ico/favicon.png">


</head>

  <body>


	<div class="whole-wrapper">
		
		<!-- half-width wrapper to limit the width of everything =======================================================-->
		<div class="hw-wrapper">


			<!-- Top Navigation Begin ==================================================================================-->
			<div id="poshnav-half-width">
				<div class="navbar navbar-inverse" >

					<div class="navbar-header">

						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

						<a class="navbar-brand" href="index.html"><img src="img/logo-nav.png" alt="Nav Logo"></a>

					</div>	
					<div class="collapse navbar-collapse">

						<ul class="nav navbar-nav">

							<li class="dropdown">
								<a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Home</a>
								<ul class="dropdown-menu">

									<li>
										<a href="index.html">iView Slider</a>
									</li>
									<li>
										<a href="index-nivo.html">Nivo Slider</a>
									</li>

									<li>
										<a href="index-camera.html">Camera Slider</a>
									</li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="portfolio.html" class="dropdown-toggle" data-toggle="dropdown">Portfolio</a>
								<ul class="dropdown-menu">
									<li>
										<a href="portfolio-4c.html">4 Column</a>
									</li>
									<li>
										<a href="portfolio.html">3 Column</a>
									</li>
									<li>
										<a href="portfolio-2c.html">2 Column</a>
									</li>

									<li>
										<a href="portfolio-single.html">Single Portfolio</a>
									</li>

								</ul>
							</li>

							<li class="dropdown">
								<a href="blog.html" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
								<ul class="dropdown-menu">
									<li>
										<a href="blog-ls.html">Left Sidebar</a>
									</li>
									<li>
										<a href="blog.html">Right Sidebar</a>
									</li>
									<li>
										<a href="blog-single.html">Single Blog</a>
									</li>



								</ul>
							</li>


							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
								<ul class="dropdown-menu">
									<li>
										<a href="contact.html">Contact</a>
									</li>
									<li>
										<a href="about.html">About</a>
									</li>

									<li>
										<a href="services.html">Services</a>
									</li>

									<li>
										<a href="page404.html">404</a>
									</li>



								</ul>
							</li>


							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Elements</a>
								<ul class="dropdown-menu">
									<li>
										<a href="components.html">Components</a>
									</li>
									<li>
										<a href="icons.html">Icons</a>
									</li>
									<li>
										<a href="anims.html">Animations</a>
									</li>

								</ul>
							</li>
						</ul>

						<form class="navbar-search pull-right" role="search">
							<input type="text" class="search-query">
						</form>

					</div>

				</div>
			</div>

			<!-- Top Navigation End ====================================================================================-->





      <section id='contact-main'>
          
       


<div class="gallery_top"></div>
<div class="gallery_content">
<div class="gallery_thumbnails">
<?php 


$dir = "images/thumb/*.jpg";
$dir2 = "images/full/*.jpg";

$thumb = glob($dir);
$full = glob($dir2);


for( $i=0;$i<count($thumb); $i++) 
	{
		
		echo "<a  href=\"$full[$i]  \"   title=\"Caption Goes her for Image\"><img src=\"$thumb[$i]\" width=\"75\" height=\"75\" alt=\"\"/></a>";
	}



?>
  <div class="clear_both"></div>
</div>
<div class="gallery_preview" style="display : block;">
	<a class="overlaylink" href="images/photos/refraction_fullsize.jpg" title="Caption Goes her for Refraction" style="background-image:url(images/photos/refraction_preview.jpg);"></a>
</div>
<div class="clear_both"></div>
<div class="gallery_contact">Text</div>
<div class="gallery_caption">Text</div>
<div class="clear_both"></div>
<div class="gallery_preload_area">
	<img src="images/photos/acrobats_preview.jpg"/>
</div>
</div>

<div class="gallery_bottom"></div>
         
        
              

        


          </div>
          
           </div>
        </section>


        


        







      






			<!-- Main Footer Begin =====================================================================================-->
			<footer>


				<!-- Continuous Headers visible only in large screens -->
				<div class="row footer-header-wrapper visible-lg visible-md">
					<div class="row footer-header">
						<div class="col-md-3">
							Categories
						</div>

						<div class="col-md-3">
							Flickr Stream
						</div>

						<div class="col-md-3">
							Recent Tweets
						</div>

						<div class="col-md-3">
							Contact us
						</div>

					</div>

				</div>

				<div class="row" id='footer-body'>

					<div class="col-md-3 col-sm-12">

						<!-- Footer Section header, only visible in small screens. -->
						<div class="row footer-header-collapse">
							<div class="row footer-header">
								<div class="col-md-3">
									Categories
								</div>
							</div>
						</div>

						<!-- Categories -->
						<div class="row footer-section-body" id='footer-categories'>
							<ul>
								<li>
									<a href="#">Learn HTML & CSS</a>
								</li>
								<li>
									<a href="#">Teach Yourself Coding </a>
								</li>
								<li>
									<a href="#">Knowled of PHP</a>
								</li>
								<li>
									<a href="#">Custom Coding</a>
								</li>
								<li>
									<a href="#">Full Size Documentation </a>
								</li>
							</ul>

						</div>
					</div>

					<div class="col-md-3">

						<!-- Footer Section header, only visible in small screens. -->
						<div class="row footer-header-collapse">
							<div class="row footer-header">
								<div class="col-md-3">
									Flickr Stream
								</div>
							</div>
						</div>
						<div class="row footer-section-body">


							<!-- Flickr Images are loaded by the jFlickrFeed plugin -->
							<div id="flickrImages"></div>  


						</div>
					</div>

					<div class="col-md-3" id='footer-tweeter-feed'>

						<!-- Footer Section header, only visible in small screens. -->
						<div class="row footer-header-collapse">
							<div class="row footer-header">
								<div class="col-md-3">
									Recent tweets
								</div>
							</div>
						</div>
						<div class="row footer-section-body">

							<ul>
								<li>

									<div class="media">
										<a class="pull-left" href="#"><i class="icon-twitter icon-2x"></i></a>
										<div class="media-body">
											<h4 class="media-heading">@LorenIpsum</h4>
											<p>
												<a href="https://twitter.com">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
											</p>
										</div>
									</div>

								</li>

								<li>

									<div class="media">
										<a class="pull-left" href="#"> <i class="icon-twitter icon-2x"></i></a>
										<div class="media-body">
											<h4 class="media-heading">@DolorAmet</h4>
											<p>
												<a href="https://twitter.com">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
											</p>
										</div>
									</div>

								</li>
							</ul>

						</div>
					</div>

					<div class="col-md-3">

						<!-- Footer Section header, only visible in small screens. -->
						<div class="row footer-header-collapse">
							<div class="row footer-header">
								<div class="col-md-3">
									Contact Us
								</div>
							</div>
						</div>
						<div class="row footer-section-body">

							<form>

								<input type='text' placeholder='Name'>
								<input type='text' placeholder='Email'>
								<textarea type='text' placeholder='Message'></textarea>
								<button class='pull-right'>
									Send
								</button>
							</form>

						</div>
					</div>

				</div>

				<div class="row" id='footer-bottom'>

					<div class="col-md-6" id='footer-bottom-left'>

						<span id='footer-brand'>Codehound </span> &copy; 2013 All rights reserved

					</div>

					<div class="col-md-6 hidden-xs hidden-sm">
						<nav>
							<ul class="breadcrumb">
								<li>
									<a href="#">Home</a>
								</li>
								<li>
									<a href="#">About </a>
								</li>
								<li>
									<a href="#">Contact </a>
								</li>
								<li>
									<a href="#">Services </a>
								</li>

								<li>
									<a href="#">Blog </a>
								</li>

							</ul>

						</nav>

					</div>

				</div>

			</footer>
			<!-- Main Footer End =======================================================================================-->

		</div> <!-- /.hw-wrapper -->

	</div> <!-- /.whole-wrapper -->


	

	<!-- Scripts =======================================================================================================-->


	<!-- Basics // <script src="js/slider/jquery-1.7.1.min.js"></script> -->
	
	<script src="js/bootstrap.min.js"></script>

	<!-- used by some plugins -->
	<script type="text/javascript" src="js/slider/raphael-min.js"></script>
	<script type="text/javascript" src="js/slider/jquery.easing.js"></script>


	<!-- Top Navigation transparency on scroll -->
	<script src="js/transnav.js"></script>

	<!-- jQuery plugin to load flickr images in footer flickr stream -->
	<script src="js/jflickrfeed.min.js"></script>


	<script type="text/javascript">  
		$(function() {
			$('#flickrImages').jflickrfeed({
				limit: 9,
				qstrings: {
					id: '71865026@N00'
				},
				itemTemplate: 
				'<div class="flickr-thumb">' +
				'<a href="{{image_b}}" data-lightbox="flickr" title="{{title}}">' +
				'<img src="{{image_s}}" alt="{{title}}" />' +
				'</a>' +
				'</div>'
			}); 
		});

	</script>

	<!-- Lightbox, loaded after jFlickrFeed, so it works on footer flickr stream thumbnails -->
	<script src="js/lightbox.js"></script>


	<script>


		$(document).ready(function() {



				// Menu Hover effect
				$('.dropdown-menu').hover(function() {

					$(this).closest('.dropdown').addClass('active');
				}, function() {
					$(this).closest('.dropdown').removeClass('active');

				});


				// Top nav transparency on Scroll 
				transNav('#poshnav-half-width');

			});


	</script>

    <!-- Script to show Google Map-->
    <script
    src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
    </script>

    <script>
    function initialize()
    {
      var mapProp = {
        center:new google.maps.LatLng(51.508742,-0.120850),
        zoom:10,
        mapTypeId:google.maps.MapTypeId.ROADMAP
      };
      var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    

    
   

  </body>
  </html>
