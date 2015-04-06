<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basics ===================================================================== -->
	<meta charset="utf-8">
	<title>Posh</title>


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
			

			<!-- Top Navigation End ====================================================================================-->





      <section id='contact-main'>
          
       
         
        <h1> <b class="emph">Login</b></h1>
        
          
         <div class="row">
          <div class="">
          <div class="col-md-12">
           
              <div class="contact-form">
               <form role="form">
                 <div class="form-group">
    			<div class="login-wrapper">
              
                <div class="button-wrapper">
                <a href="photosharing-login.php"><button type="button" class="btn btn-primary btn-lg">Login</button></a>
				<a href="photosharing-register.php"><button type="button" class="btn btn-primary btn-lg">Register</button></a>

                </div>
			

                </div>
			
			
               
                  
                 
               </div>
              

               
                
                
              </form>
              </div>
              

            </div>


          </div>
          
           </div>
        </section>


        


        







      






			<!-- Main Footer Begin =====================================================================================-->
			<
			<!-- Main Footer End =======================================================================================-->

		</div> <!-- /.hw-wrapper -->

	</div> <!-- /.whole-wrapper -->


	

	<!-- Scripts =======================================================================================================-->


	<!-- Basics -->
	<script src="js/slider/jquery-1.7.1.min.js"></script>
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
