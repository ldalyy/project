<!DOCTYPE html>

<!-- still need to figure out how to disable scraped stylesheet/ fix js/ style -->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ThreeSixty Bootstrap Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ThreeSixty Bootstrap Template">
    <meta name="author" content="Fabian Bentz Webdesign">

    <!-- google web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,500,400italic,700' rel='stylesheet' type='text/css'>
    
    <!-- CSS Styles -->
    
    <!-- bootstrap css -->
    <link href="./css/bootstrap.css" rel="stylesheet">
    
    <!-- custom css -->
    <link href="./css/custom.css" rel="stylesheet">
    
    <!-- standart theme css -->
    <link rel="stylesheet" id="theme" href="./css/theme1.css" type="text/css" />
    
    <!-- Font Awesome Icons css -->
    <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
    
    <!-- BxSlider and Sequence Slider css -->
    <link rel="stylesheet" href="./css/jquery.bxslider.css" type="text/css" />
    <link rel="stylesheet" media="screen" href="./css/sequence-slider.css" />
    
    <!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="./css/magnific-popup.css"> 
    
    <!-- Color Switch Panel css -->
    <link rel="stylesheet" href="./css/color.switch.css" type="text/css" />
    
    <!-- Back to Top Button css -->
    <link rel="stylesheet" href="./css/top.css" type="text/css" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="./img/favicon.ico">
	<link rel="apple-touch-icon" href="./img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="./img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="./img/apple-touch-icon-114x114.png">
	
	
	<!-- Your Google Analytics Code Here!! -->

	
  </head>

<body>
  
<!-- START PRIMARY LAYOUT
======================== -->



<!-- NAVBAR -->
    
<!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->

<nav class="navbar navbar-inverse navbar-static-top" role="navigation" id="menu">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
           <!-- MENU LINKS -->
           <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav" id="navigation">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="#service">Spring</a></li>
                <li><a href="#price">Summer</a></li>
                <li><a href="#clients">Autumn</a></li>
                <li><a href="#facts">Winter</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
          </div>
        </div>
</nav>

<!-- NAVBAR END -->
  

<?php

    // Defining the basic scraping function
    function scrape_between($data, $start, $end){
        $data = stristr($data, $start); // Stripping all data from before $start
        $data = substr($data, strlen($start));  // Stripping $start
        $stop = stripos($data, $end);   // Getting the position of the $end of the data to scrape
        $data = substr($data, 0, $stop);    // Stripping all data from after and including the $end of the data to scrape
        return $data;   // Returning the scraped data from the function
    }

  
    // Defining the basic cURL function
    function curl($url) {
        // Assigning cURL options to an array
        $options = Array(
            CURLOPT_RETURNTRANSFER => TRUE,  // Setting cURL's option to return the webpage data
            CURLOPT_FOLLOWLOCATION => TRUE,  // Setting cURL to follow 'location' HTTP headers
            CURLOPT_AUTOREFERER => TRUE, // Automatically set the referer where following 'location' HTTP headers
            CURLOPT_CONNECTTIMEOUT => 120,   // Setting the amount of time (in seconds) before the request times out
            CURLOPT_TIMEOUT => 120,  // Setting the maximum amount of time for cURL to execute queries
            CURLOPT_MAXREDIRS => 10, // Setting the maximum number of redirections to follow
            CURLOPT_USERAGENT => "Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1a2pre) Gecko/2008073000 Shredder/3.0a2pre ThunderBrowse/3.2.1.8",  // Setting the useragent
            CURLOPT_URL => $url, // Setting cURL's URL option with the $url variable passed into the function
        );

        $ch = curl_init();  // Initialising cURL 
        curl_setopt_array($ch, $options);   // Setting cURL's options using the previously assigned array data in $options
        $data = curl_exec($ch); // Executing the cURL request and assigning the returned data to the $data variable
        curl_close($ch);    // Closing cURL 
        return $data;   // Returning the data from the function 
    }


     $scraped_page = curl("http://getthere.ie/cork-dublin/16-Feb");    // Downloading IMDB home page to variable $scraped_page
    $scraped_data = scrape_between($scraped_page, "<div class=\"result-list\" id=\"result-list-outer\">","<p style=\"margin-bottom: 0;\">");   // Scraping downloaded dara in $scraped_page for content between <title> and </title> tags

    echo $scraped_data; // Echoing $scraped data, should show "The Internet Movie Database (IMDb)"
?>
<script type="text/javascript">
  window.onload = function()
        {
			var els = document.getElementsByTagName("link");
				for (var i = 0, l = els.length; i < l; i++) {
					var el = els[i];
						if (el.href === '/static/packed-c4447a94ea.css') {
							document.getElementById('first_style').removeAttribute('disabled');          
						}
				}
		}	
		  
</script>
<!-- SOCIAL MEDIA DIVIDER -->

<div id="divider">
		<div class="divider-bg"></div>

  <div class="container">
  
	<div class="row">
        <div class="col-12-lg social-media">
        
    		<div class="social-icons">
    		
                <a class="social-media facebook" href=""><i class="fa fa-facebook-square fa-8x"></i></a>
				<a class="social-media white twitter" href=""><i class="fa fa-twitter-square fa-8x"></i></a>
				<a class="social-media white linkedin" href=""><i class="fa fa-linkedin-square fa-8x"></i></a>
				<a class="social-media white pinterest" href=""><i class="fa fa-pinterest-square fa-8x"></i></a>
				<a class="social-media white google" href=""><i class="fa fa-google-plus-square fa-8x"></i></a>
				<a class="social-media white tumblr" href=""><i class="fa fa-tumblr-square fa-8x"></i></a>
				<a class="social-media white instagram" href=""><i class="fa fa-instagram fa-8x"></i></a>
              
            </div>  
              
        </div>
	</div>
  
  </div>

</div>

<!-- SOCIAL MEDIA DIVIDER END --> 

<!-- BOTTOM -->

<div id="foot">

  <div class="container">
     <div class="row">
     
      <div class="col-lg-4 col-md-4">
        <div class="bottom-con">
        
           <h5>Visit Us</h5>
           <hr class="head-border-white">
            
             <div class="">
             <p><i class="fa fa-location-arrow"><span> 10 Lorum Ipsum Street</span></i></p>
             <p><i class="fa fa-map-marker"><span> 68123 Dublin</span></i></p>
             <p><i class="fa fa-flag"><span> Ireland</span></i></p>
           </div>
            
        </div>
    </div>
 
    <div class="col-lg-4 col-md-4">
        <div class="bottom-con">
        
           <h5>Write Us</h5>
           <hr class="head-border-white">
            
             <div class="">
             <p><i class="fa fa-phone"><span> +49 621 123 321 123</span></i></p>
             <p><i class="fa fa-envelope"><span> info@fabianbentz.de</span></i></p>
             <p><i class="fa fa-print"><span> +49 621 123 321 124</span></i></p>
           </div>
            
        </div>
    </div>
       
    <div class="col-lg-4 col-md-4">
            
            <div class="bottom-con">
    		
                <h5>Information Pack</h5>
                <hr class="head-border-white">

              <form action="#" method="post" class="newsletter">
                    <div class="input-group">
                      <span class="input-group-addon .glyphicon-envelope"><i class="fa fa-envelope orange"></i></span>
                      <input type="email" class="form-control input-md" placeholder="Enter email">
                     </div>
                <br>
                
                <div class="control-group submit center">
                  <input type="submit" value="Order Now!" class="btn btn-md btn-primary" />
                </div>
                    
              </form>
              
            </div> 
            
    </div>
          
           <div class="col-lg-12 col-md-12 footer">
               <p class="pull-right"><a href="#about">Back to top</a></p>
                  <p>&copy; . &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
           </div> 
           
     </div>
  </div>
  
</div>



<!-- COLOR SWITCH END -->

<!-- END PRIMARY LAYOUT
====================== -->


<!-- JAVASCRIPT
================================================== -->

<!-- BOOTSTRAP JAVASCRIPT -->
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="./js/bootstrap.min.js"></script>

<!-- CUSTOM JAVASCRIPT -->
<!-- Custom Functions -->
<script type="text/javascript" src="./js/functions.js"></script> 

<!-- Portfolio with mixitup filter and prettyphoto -->
<script type="text/javascript" src="./js/jquery.mixitup.min.js"></script> 
<!-- Magnific Popup core JS file -->
<script type="text/javascript" src="./js/magnific.js"></script>

<!-- BxSlider -->
<script type="text/javascript" src="./js/jquery.bxslider.min.js"></script>

<!-- Sequence Slider -->
<script type="text/javascript" src="./js/jquery.sequence-min.js"></script>

<!-- Parallax Background -->
<script type="text/javascript" src="./js/nbw-parallax.js"></script>
<script type="text/javascript" src="./js/jquery.inview.js"></script>

<!-- Smooth Scrolling -->
<script type="text/javascript" src="./js/smoothscroll.js"></script>

<!-- Sticky Navigation --> 
<script type="text/javascript" src="./js/jquery.sticky.js"></script>

<!-- Style Switcher --> 
<script type="text/javascript" src="./js/jquery.style-switcher.js"></script>

<!-- Clients Slider -->
<script type="text/javascript" src="./js/jquery.flexisel.js"></script>

<!-- Retina JS -->
<script type="text/javascript" src="./js/retina-1.1.0.min.js"></script>


</body>
</html>
