<?php
	session_start();
?>

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
	<!--Uploader Plugin -->
	<script src="js/dropzone.js"></script>
	<link rel="stylesheet" href="css/dropzone.css" />



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
										<a href="photosharing-home.php">Home</a>
									</li>
									<li>
										<a href="index.html">View Job Offers</a>
									</li>
									<li>
										<a href="index-nivo.html">View Icon Updates</a>
									</li>
									
								</ul>
							</li>
							<li class="dropdown">
								<a href="photosharing-portfolio.php" class="dropdown-toggle" data-toggle="dropdown">Portfolio</a>
								<ul class="dropdown-menu">
									<li>
										<a href="photosharing-portfolio.php">View Portfolio</a>
									</li>
									<li>
										<a href="photosharing-portfolio.php">Modify Portfolio</a>
									</li>									
								</ul>
							</li>

							<li class="dropdown">
								<a href="blog.html" class="dropdown-toggle" data-toggle="dropdown">Profile</a>
								<ul class="dropdown-menu">
									<li>
										<a href="photosharing-profile.php">View Profile</a>
									</li>
									<li>
										<a href="photosharing-profile.php">Modify Profile</a>
									</li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pictures</a>
								<ul class="dropdown-menu">
									<li>
										<a href="photosharing-uploader.php">Quick Upload</a>
									</li>
									<li>
										<a href="photosharing-albumUpload.php">Album Management</a>
									</li>
									<li>
										<a href="gallery-implementation.php">Gallery</a>
									</li>
								</ul>
							</li>


							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact</a>
								<ul class="dropdown-menu">
									<li>
										<a href="contact.html">View Contact List</a>
									</li>
									<li>
										<a href="about.html">Modify Contact List</a>
									</li>	
								</ul>
							</li>


							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Messages</a>
								<ul class="dropdown-menu">
									<li>
										<a href="components.html">Inbox</a>
									</li>
									<li>
										<a href="icons.html">Outbox</a>
									</li>
									<li>
										<a href="anims.html">Compose Message</a>
									</li>

								</ul>
							</li>
						</ul>

						<form class="navbar-search pull-right" role="search">
							<input type="text" class="search-query" placeholder="Search For User">
						</form>

					</div>

				</div>
			</div>
			
			<!-- Top Navigation End ====================================================================================-->





      <section id='contact-main'>

      	<?php

      		if($_SERVER['REQUEST_METHOD']=='POST')
  			{
  				$ds = DIRECTORY_SEPARATOR;  //1
 
				$storeFolder = 'userUploads';   //2
 
				if (!empty($_FILES)) 
				{
     
    				$tempFile = $_FILES['file']['tmp_name'];          //3             
      
    				$targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4

    				$time = time();
     
    				$targetFile =  $targetPath.$time.$_SESSION['userId'].$_FILES['file']['name'];  //5
 
    				

    				// Save the uploaded image name and file path in a DB table

    				$userId = $_SESSION["userId"];
    				$imagePath = time().$_SESSION['userId'].$_FILES['file']['name'];//$targetFile;
    				$date = "".date("h:i:s a, d/m/Y");

    				// connecting to database

    				$server = "localhost";
					$username = "root";
					$pass = "";
					$db = "cse482project";

					$conn = new mysqli($server,$username,$pass,$db);

					if(!$conn)
					{
						die("Connection to Database Failed!!!"."<br>");
					}

					$sqlCmd = "INSERT INTO uploadedimage (userId,imagePath,uploadDate) VALUES ('$userId','$imagePath','$date')";

					if($conn->query($sqlCmd)===true)
					{
						$_SESSION['lastUpload'] = true;
						echo "<h1>image insertion successful</h1>";
						
					}

					else
					{
						$_SESSION['lastUpload'] = false;
						echo "<h1>image insertion unsuccessful</h1>";

					}    

					move_uploaded_file($tempFile,$targetFile); //6				
  			
  				}

  			}

      	?>
          
       
         
        <h1> <b class="emph">Upload </b></h1>
        
          
         <div class="row">
          <div class="">
          <div class="col-md-12">


                <h3>UPLOAD IMAGE</h3>
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
			      class="dropzone"
			      id="my-awesome-dropzone">				
			      <input type="submit" id="clickToUpload" value="clickToUpload">
			  </form><br><br><br>
			  
			
			  <!--
			  <h3>UPLOAD Preview Version IMAGE</h3>
              <form action="upload-prev.php"
			      class="dropzone"
			      id="my-awesome-dropzone">

					
			  </form>
			  
			  <h3>UPLOAD Thumbnail Version IMAGE</h3>
              <form action="upload-thumb.php"
			      class="dropzone"
			      id="my-awesome-dropzone">

					
			  </form>
			  
              -->

            </div>


          </div>
          
           </div>
        </section>


			<!-- Main Footer Begin =====================================================================================-->
			<footer>



			</footer>
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
