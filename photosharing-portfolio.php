<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basics ===================================================================== -->
  <meta charset="utf-8">
  <title>Posh | Portfolio</title>


  <!-- Mobile Specifics =========================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">



  <!-- Info ======================================================================= -->
  <meta name="description" content="Premium HTML Website Template">
  <meta name="author" content="Codehound">


  <!-- Styles ===================================================================== -->
  
  <!-- Bootstrap 3 -->
  <link rel="stylesheet" href="css/bootstrap.css">


  <!-- CSS to override Some Bootstrap styles -->
  <link rel="stylesheet" class="bs-overrides" href="css/bootstrap-overrides.css">


  <!-- Main StyleSheet for Posh  -->
  <link rel="stylesheet" class="main-style" href="css/styleCopy.css">


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

  <!-- Style Switcher Begin -->
  <a href="#" id="trigger2" class="trigger left"><i class="fa fa-wrench"></i></a>
  <div id="panel2" class="panel left">
    <div id="colorchanger">
      <h2>Colors</h2>
      <a class="colorbox colorblue" href="#"></a>
      <a class="colorbox colorred" href="#"></a>
      <a class="colorbox colorpurple" href="#"></a>
      <a class="colorbox colorgreen" href="#"></a>
      <a class="colorbox colororange" href="#"></a>
    </div>
  </div>
  <!-- Style Switcher End -->

  <div class="whole-wrapper">

    <!-- half-width wrapper to limit the width of everything =======================================================-->
    <div class="hw-wrapper">


      <!-- Top Navigation Begin ==================================================================================-->
      <div id="poshnav-half-width">

        <span class="color-band-thick"></span>
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





      <!-- Top Image and Text -->
      <section id='about-main'>


        <img src="img/portfolio-banner.png" alt='Portfolio Banner'>

        <header>
          
          <?php
            echo "<h1>".$_SESSION["userName"]."'s Portfolio"."</h1>";
          ?>

          <h2>My Work Will Speak For Me</h2>
        </header>
        <div class="about-banner">
          <p>
            If you leave off either the blur or spread radius, their values will default to zero. Looking around the web, you’re likely to see that most demos that you come across, including those on Design Shack, have no spread radius defined. Also note that the -webkit prefixed version of box-shadow is often still added to ensure browser compatibility when using box-shadow.
          </p>

          
        </div>
        

      </section>




      <section class="portfolio ">


        <form id="filter">


          <label><input type="radio" name="type" value="all" checked="checked">Everything</label>
          <label><input type="radio" name="type" value="app">Applications</label>
          <label><input type="radio" name="type" value="util">Utilities</label>

        </form>

        <div class="items section-body row">




          <ul id="applications" class="image-grid four-col">


            <!-- "data-type" attribute is used by the quicksand plugin for filtering -->
            <li data-id="id-1" data-type="util">
              <div class="portfolio-item">

               <div class="imgwrapper">
                 <!-- Thumbnail -->
                 <img src="img/port1.png" alt="Portfolio Thumbnail">
                 <div class="imgback"></div>

                 <!-- Full image to show in lightbox -->
                 <a href="img/port1.png" data-lightbox="portfolio" title="Awesome Food" class="rollover"></a>
                 <span class="color-band"></span>
               </div>

               <div class="imgcaption">
                 <h1>Mic is On</h1>
                 <p>Music Made for You</p>

                 <!-- Link to item details page -->
                 <a href="portfolio-single.html">
                   <img alt="Details" src="img/portfolio-link.png">
                 </a>
               </div>
             </div>
           </li>


           <li data-id="id-2" data-type="util">
            <div class="portfolio-item" id="item2">

             <div class="imgwrapper">
               <!-- Thumbnail -->
               <img src="img/port2.png" alt="Portfolio Thumbnail">
               <div class="imgback"></div>

               <!-- Full image to show in lightbox -->
               <a href="img/port2.png" data-lightbox="portfolio" title="Awesome Food" class="rollover"></a>
               <span class="color-band"></span>
               
             </div>

             <div class="imgcaption">
               <h1>Traditional </h1>
               <p>Traditional Footwear for all</p>

               <!-- Link to item details page -->
               <a href="portfolio-single.html">
                 <img alt="Details" src="img/portfolio-link.png">
               </a>
             </div>
           </div>
         </li>



         <li data-id="id-3" data-type="app">
          <div class="portfolio-item" id="item3">

           <div class="imgwrapper">
            <!-- Thumbnail -->
            <img src="img/port3.png" alt="Portfolio Thumbnail">
            <div class="imgback"></div>

            <!-- Full image to show in lightbox -->
            <a href="img/port3.png" data-lightbox="portfolio" title="Awesome Food" class="rollover"></a>
            <span class="color-band"></span>
          </div>

          <div class="imgcaption">
           <h1>Ancient Artifact</h1>
           <p>Artifact from Ming Dynasty</p>

           <!-- Link to item details page -->
           <a href="portfolio-single.html">
             <img alt="Details" src="img/portfolio-link.png">
           </a>
         </div>



       </div>
     </li>

     <li data-id="id-4" data-type="util">
      <div class="portfolio-item" id="item4">

        <div class="imgwrapper">
         <!-- Thumbnail -->
         <img src="img/port4.png" alt="Portfolio Thumbnail">
         <div class="imgback"></div>

         <!-- Full image to show in lightbox -->
         <a href="img/port4.png" data-lightbox="portfolio" title="Awesome Food" class="rollover"></a>
         <span class="color-band"></span>
       </div>
       <div class="imgcaption">
         <h1>Colors of Life</h1>
         <p>Our Colors variations will rock your world</p>

         <!-- Link to item details page -->
         <a href="portfolio-single.html">
           <img alt="Details" src="img/portfolio-link.png">
         </a>
       </div>



     </div>
   </li>
   <li data-id="id-5" data-type="app">
    <div class="portfolio-item" id="item5">

     <div class="imgwrapper">
      <!-- Thumbnail -->
      <img src="img/port5.png" alt="Portfolio Thumbnail">
      <div class="imgback"></div>

      <!-- Full image to show in lightbox -->
      <a href="img/port5.png" data-lightbox="portfolio" title="Awesome Food" class="rollover"></a>
      <span class="color-band"></span>
    </div>
    <div class="imgcaption">
     <h1>Protection </h1>
     <p>We protect your dreams</p>

     <!-- Link to item details page -->
     <a href="portfolio-single.html">
       <img alt="Details" src="img/portfolio-link.png">
     </a>
   </div>


 </div>
</li>


<li data-id="id-6" data-type="util">
  <div class="portfolio-item" id="item6">

    <div class="imgwrapper">
     <!-- Thumbnail -->
     <img src="img/port6.png" alt="Portfolio Thumbnail">
     <div class="imgback"></div>

     <!-- Full image to show in lightbox -->
     <a href="img/port6.png" data-lightbox="portfolio" title="Awesome Food" class="rollover"></a>
     <span class="color-band"></span>
   </div>
   <div class="imgcaption">
     <h1>Origamy</h1>
     <p>Chinese Paper Handcraft</p>

     <!-- Link to item details page -->
     <a href="portfolio-single.html">
       <img alt="Details" src="img/portfolio-link.png">
     </a>
   </div>


 </div>
</li>
<li data-id="id-7" data-type="app">
  <div class="portfolio-item" id="item7">

   <div class="imgwrapper">
    <!-- Thumbnail -->
    <img src="img/port7.png" alt="Portfolio Thumbnail">
    <div class="imgback"></div>

    <!-- Full image to show in lightbox -->
    <a href="img/port7.png" data-lightbox="portfolio" title="Awesome Food" class="rollover"></a>
    <span class="color-band"></span>
  </div>
  <div class="imgcaption">
   <h1>Knowledge</h1>
   <p>Our Vast Collection of Books</p>

   <!-- Link to item details page -->
   <a href="portfolio-single.html">
     <img alt="Details" src="img/portfolio-link.png">
   </a>
 </div>


</div>
</li>
<li data-id="id-8" data-type="app">
  <div class="portfolio-item" id="item8">

    <div class="imgwrapper">
     <!-- Thumbnail -->
     <img src="img/port8.png" alt="Portfolio Thumbnail">
     <div class="imgback"></div>

     <!-- Full image to show in lightbox -->
     <a href="img/port8.png" data-lightbox="portfolio" title="Awesome Food" class="rollover"></a>
     <span class="color-band"></span>
   </div>
   <div class="imgcaption">
     <h1>Soft Toys</h1>
     <p>Teddy Bears and all</p>
     
     <!-- Link to item details page -->
     <a href="portfolio-single.html">
       <img alt="Details" src="img/portfolio-link.png">
     </a>
   </div>


 </div>
</li>
<li data-id="id-9" data-type="app">
  <div class="portfolio-item" id="item9">

   <div class="imgwrapper">
    <!-- Thumbnail -->
    <img src="img/port9.png" alt="Portfolio Thumbnail">
    <div class="imgback"></div>

    <!-- Full image to show in lightbox -->
    <a href="img/port9.png" data-lightbox="portfolio" title="Awesome Food" class="rollover"></a>
    <span class="color-band"></span>
  </div>

  <div class="imgcaption">
   <h1>Office Chair</h1>
   <p>Our Designer Chirs</p>

   <!-- Link to item details page -->
   <a href="portfolio-single.html">
     <img alt="Details" src="img/portfolio-link.png">
   </a>
 </div>


</div>
</li>

</ul>




</div>

</section>



<section class="portfolio-footer-wrapper">
  <div class="portfolio-footer">

    <!-- Pagination -->
    <ul class='pagination'>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">Next</a></li>

    </ul>
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
              <a class="pull-left" href="#"><i class="fa fa-twitter fa-2x"></i></a>
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
              <a class="pull-left" href="#"><i class="fa fa-twitter fa-2x"></i></a>
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
          <textarea  placeholder='Message'></textarea>
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

<span class="color-band-thick"></span>
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



<script src="js/jquery.quicksand.js"></script>

<!-- Handles portfolio hover effect -->
<script src="js/portfolio-adjust.js"></script>    

<script src="js/jquery.easing-1.3.min.js"></script>


<!-- Top Navigation transparency on scroll -->
<script src="js/transnav.js"></script>

<!-- Style Switcher -->
<script type="text/javascript" src="js/jquery.slidePanel.min.js"></script>
<script type="text/javascript" src="js/style-switcher.js"></script>

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


  $(document).ready(function(){





    adjustPortfolioHover(20);



    colorSwitcherInit();

    $('#filter-food').click(function(){

      $('#container').quicksand( $('#food li'),{

        adjustHeight : true,
        adjustWidth : true

      } );


    });

    $('#filter-drink').click(function(){

      $('#container').quicksand( $('#drink li'),{

        adjustHeight : true,
        adjustWidth : true

      } );


    });

    $('#filter-all').click(function(){

      $('#container').quicksand( $('#all li'),{

        adjustHeight : true,
        adjustWidth : true

      } );


    });
    // Top nav transparency on Scroll 
        transNav('#poshnav-half-width');

  });


  $(window).resize(function() {


   adjustPortfolioHover(20);


 });

</script>


<script type="text/javascript">

  (function($) {
    $.fn.sorted = function(customOptions) {
      var options = {
        reversed: false,
        by: function(a) { return a.text(); }
      };
      $.extend(options, customOptions);
      $data = $(this);
      arr = $data.get();
      arr.sort(function(a, b) {
        var valA = options.by($(a));
        var valB = options.by($(b));
        if (options.reversed) {
          return (valA < valB) ? 1 : (valA > valB) ? -1 : 0;        
        } else {    
          return (valA < valB) ? -1 : (valA > valB) ? 1 : 0;  
        }
      });
      return $(arr);
    };
  })(jQuery);

// DOMContentLoaded
$(function() {

  // bind radiobuttons in the form
  var $filterType = $('#filter input[name="type"]');
  var $filterSort = $('#filter input[name="sort"]');

  // get the first collection
  var $applications = $('#applications');

  // clone applications to get a second collection
  var $data = $applications.clone();

  // attempt to call Quicksand on every form change
  $filterType.add($filterSort).change(function(e) {
    if ($($filterType+':checked').val() == 'all') {
      var $filteredData = $data.find('li');
    } else {
      var $filteredData = $data.find('li[data-type=' + $($filterType+":checked").val() + ']');
    }

    // if sorted by size
    if ($('#filter input[name="sort"]:checked').val() == "size") {
      var $sortedData = $filteredData.sorted({
        by: function(v) {
          return parseFloat($(v).find('span[data-type=size]').text());
        }
      });
    } else {
      // if sorted by name
      var $sortedData = $filteredData.sorted({
        by: function(v) {
          return $(v).find('strong').text().toLowerCase();
        }
      });
    }   

    // finally, call quicksand
    $applications.quicksand($sortedData, {
      duration: 800,
      adjustHeight : true,
      adjustWidth : true,
      atomic: true,
      easing: 'easeInOutQuad'
    });
    adjustPortfolioHover(20);

  });

});


</script>



</body>
</html>
