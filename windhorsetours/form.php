<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Wind Horse Tours</title>
        <meta name="description" content="">

        <!-- Head start -->
        <?php include ('includes/head.php') ?>
        <!-- Head end -->
        
    </head>
    <body class="no-large-banner">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Header start -->
        <?php include ('includes/header.php') ?>
        <!-- Header end -->
        
        <!-- Banner start -->
        <div class="banner">
        	<div class="centralizer">
            	<div class="banner-small">
                	<img src="img/temp/tile-banner.png" alt="Banner">
                </div>
            </div>
        </div>
        <!-- Banner end -->
        
        <!-- Main contents start -->
        <div class="main-contents"><div class="centralizer clearfix">
        	
            <div class="main-contents-full clearfix">
            
            <article><div class="inner">
            <h1>Customize your journey</h1>
            <div class="form-info">
                        We do not sell, share or trade your information !
						<span>Fields denoted by (*) are mandatory.</span>
                        </div>
                <form class="general-form hotel-search">
                        
                        	<div class="clearfix">
                            <label>Search by country:</label>
                            <span>
                            <select name="Country">
                            	<option value="">Select</option>
                            	<option value="Nepal">Nepal</option>
                            	<option value="Bhutan">Bhutan</option>
                            	<option value="India">India</option>
                            	<option value="Tibet">Tibet</option>
                            </select>
                            </span>
                            </div>
                            
                        	<div class="clearfix">
                            <label>Search by place:</label>
                            <span>
                            <select name="Place">
                            	<option value="">Select</option>
                            	<option value="Nepal">Kathmandu</option>
                            	<option value="Bhutan">Bhaktapur</option>
                            	<option value="India">Lalitpur</option>
                            	<option value="Tibet">Kirtipur</option>
                            </select>
                            </span>
                            </div>
                            
                        	<div class="clearfix">
                            <label>Hotel name:</label>
                            <span><input type="text"></span>
                            </div>
                            
                        	<div class="clearfix">
                            <label>Textarea:</label>
                            <span><textarea name="" cols="50" rows="5"></textarea></span>
                            </div>
                            
                        	<div class="clearfix">
                            <label>Radio:</label>
                            <span>
                              
                                <label><input type="radio" name="RadioGroup2" value="radio" id="RadioGroup2_0">
                                Yes</label> &nbsp; 
                                <label><input type="radio" name="RadioGroup2" value="radio" id="RadioGroup2_1"> 
                                No</label>
<small>This is sent once a month.</small>
                            </span>
                            </div>
                            
                        	<div class="clearfix">
                            <label><sup>*</sup>Checkbox:</label>
                            <span>
                              
                                <label><input type="checkbox" name="RadioGroup2" value="a" id="as">
                                option one</label> &nbsp; 
                                <label><input type="checkbox" name="RadioGroup2" value="b" id="ad"> 
                                Option two</label>
<small>This is sent once a month.</small>
                            </span>
                            </div>
                            
                            <div class="clearfix">
                            <label>&nbsp;</label>
                            <span><input type="submit" value="Submit"></span>
                            </div>
                            
                            
                        </form>
            </div></article>
            
            <aside>
            
            	<!-- About windhorse start -->
				<?php include ('includes/about-windhorse.php') ?>
                <!-- About windhorse end -->
                
            </aside>
            
            </div>
            
        </div></div>
        <!-- Main contents end -->
        
        <!-- Blue bar start -->
        <?php include ('includes/blue-bar.php') ?>
        <!-- Blue bar end -->
        
        <!-- Footer top start -->
        <?php include ('includes/footer-top.php') ?>
        <!-- Footer top end -->
        
        <!-- Footer start -->
        <?php include ('includes/footer.php') ?>
        <!-- Footer end -->
        
        <!-- Footer last start -->
        <?php include ('includes/footer-last.php') ?>
        <!-- Footer last end -->
        
        <!-- End scripts start -->
        <?php include ('includes/end-scripts.php') ?>
        <!-- End scripts end -->
        
        
        
        <!-- Owl Carousel Assets Start-->
        <link href="owl-carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="owl-carousel/owl-carousel/owl.theme.css" rel="stylesheet">
        <!-- Owl Carousel Assets end-->
    
    	<!-- Owl Carousel Start -->
		<script src="owl-carousel/owl-carousel/owl.carousel.js"></script>
        <script>
    
        $(document).ready(function($) {
          $("#owl-example").owlCarousel({
			singleItem : true,
			
			// Navigation
			navigation : true,
			navigationText : ["",""],
			rewindNav : false,
			scrollPerPage : false,

			pagination : false,
			paginationNumbers : false,
			
			//Lazy load
			lazyLoad : true,
			lazyFollow : true,
			lazyEffect : "fade",
			
			// Responsive
			responsive: true,
			responsiveRefreshRate : 0,
			responsiveBaseWidth: window,

			// Responsive
			autoPlay : true,
			stopOnHover : true,
		  });
        });
		    
        $("body").data("page", "frontpage");
    
        </script>    
    	<!-- Owl Carousel end -->
        
    </body>
</html>
