<script src="js/vendor/jquery-1.10.2.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        
        
        
        <!-- Trip search start -->
		<script>
		
		$(document).on('click', '.search-options label', function (event) {
 		$('.show-option').removeClass('show-option');	
 		$(this).siblings().removeClass('active-option');				
 		$(this).addClass('active-option');			
		});
		
		$(document).on('click', '.trip-search', function (event) {
 		$('.show-option').removeClass('show-option');			
		});
		
		$(document).on('click', '.search-term-wrapper:first-child .search-options label', function () {		
 		$('.search-term:first-child').text($(this).text());			
		});
		
		$(document).on('click', '.search-term-wrapper:first-child + div .search-options label', function () {		
 		$('span:first-child + .search-term').text($(this).text());			
		});
		
		$(document).on('click', '.search-term-wrapper:first-child + div + div .search-options label', function () {		
 		$('span:first-child + span + .search-term').text($(this).text());			
		});
		
		$(document).on('click', '.search-term', function () {
 		$('.search-term-wrapper').removeClass('show-option');
 		$(this).parents('.search-term-wrapper').addClass('show-option');			
		});
		
		$(document).on('click', '.trip-search-wrap > a', function () {
 		$('.trip-search-wrap').addClass('trip-search-show');		
		});
		
		
		</script>
        <!-- Trip search end -->
        
        <!-- Dropdown menu start -->
		<script>				
		$(document).on('click', '.have-child', function () {
 		$(this).siblings('.have-child').removeClass('show-child');		
 		$(this).addClass('show-child');			
		});
		
		$(document).ready(function() {
 		$('.more-menu .centralizer').removeClass('centralizer');
		});				   
		</script>
        <!-- Dropdown menu end -->
        
		<!-- Menu overflow start -->
        <script>		
		$(document).on('click', '.more-menu .have-child > a, .search-term', function (event) {
			// alert ($(window).height());
		if ($(window).height() < 620) {
             $('.more-menu .have-child').removeClass('menuheight');	
             $(this).parent('li').addClass('menuheight');	
			 
             $('.search-term-wrapper').removeClass('menuheight');		
             $(this).parent('.search-term-wrapper').addClass('menuheight');	
         }
         else {
             $(this).removeClass('menuheight');	
             $(this).parent('.search-term-wrapper').removeClass('menuheight');
         }
		});		
		</script>
		<!-- Menu overflow end -->
        
        <!-- Menu showhide on scroll up or down start --> 
		<script>
		var lastScrollTop = 0;
		$(window).scroll(function(event){
		   var st = $(this).scrollTop();
		   if (st > lastScrollTop){
			   // downscroll code
			   $('.stickynav nav').css('top',-61);
		   } else {
			  // upscroll code
			   $('.stickynav nav').css('top',0);
		   }
		   lastScrollTop = st;
		});
		</script>
        <!-- Menu showhide on scroll up or down start -->
        
        <!-- Trip date popup start -->
		<script>				
		$(document).on('click', '.trip-btns span', function () {
 		$('.active-dates').removeClass();
 		$(this).addClass('active-dates');		
		});			   
		</script>
        <!-- Trip date popup end --> 
        
        <!-- Propagation start -->
        <script>	
		$(document).on('click', 'body', function () {
 		$('.search-term-wrapper').removeClass('show-option');
 		$('.have-child').removeClass('show-child');
        $('.more-menu .have-child').removeClass('menuheight');
        $('.trip-search-wrap').removeClass('trip-search-show');	
        $('.search-term-wrapper').removeClass('show-option');	
        $('.active-dates').removeClass('active-dates');
		});
   
	   $(document).on('click', '.search-term, .have-child, .trip-search-wrap, .trip-btns span', function(event) {
		  event.stopImmediatePropagation();
	   });
		</script>
        <!-- Propagation start -->
        
        <!-- Relatives start -->
        <script>
		$(document).on('click', 'nav ul li a', function () {
        $('.trip-search-wrap').removeClass('trip-search-show');
		});
		$(document).on('click', '.trip-search-wrap a', function () {
        $('nav > ul > .have-child').removeClass('show-child');
		});
		</script>
        <!-- Relatives start -->
        
        <!-- Sticky menu start -->
        <script>
		 $(window).bind('scroll', function(event) {
		
		var headerheight = $('.header-top').height();
		 
         if ($(window).scrollTop() > headerheight+50) {
             $('body').addClass('stickynav');
             $('.trip-search-wrap').addClass('trip-search-full');
             $('.header').addClass('header-nopos');
         }
         else {
             $('body').removeClass('stickynav');
             $('.trip-search-wrap').removeClass('trip-search-full');
             $('.header').removeClass('header-nopos');
         }
   		 });
		</script>
        <!-- Sticky menu end -->
        
        <!-- Linklist collapse start -->
        <script>
		
		$(document).on('click', '.rightcol-linklist h3', function () {
        $(this).parent('.rightcol-linklist').addClass('show-linklist');
		});
		
		$(document).on('click', '.show-linklist h3', function () {
        $(this).parent('.show-linklist').removeClass('show-linklist');
		});
		
		</script>
        <!-- Linklist collapse start -->
        
        <!-- Slider tab start -->
		  <script src="js/vendor/jquery-1.10.2.min.js"></script></script>
          <script src="slidertab/js/jquery.touchSwipe.min.js"></script>
          <script src="slidertab/js/jquery.liquid-slider.min.js"></script>  
          <script>
            /**
             * If you need to access the internal property or methods, use this:
             * var api = $.data( $('#main-slider')[0], 'liquidSlider');
             * console.log(api);
             */
            $('#main-slider').liquidSlider();
          </script>
        <!-- Slider tab end -->
    
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
        
        <!-- Featherlight lightbox start -->
		<script src="featherlight/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
        <!-- Featherlight lightbox end -->
    
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
        
        <!-- Featured trips -->
		<script>
    
        $(document).ready(function($) {
          $("#ftrip").owlCarousel({
			singleItem : false,
			items: 2,
			
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
			
			itemsCustom : [[0, 1], [400, 1], [700, 2], [1000, 2], [1200, 2], [1600, 2]]
			
		  });
        });
		    
        $("body").data("page", "frontpage");
    
        </script>  
        <!-- Featured trips -->
    	
        <!-- Owl Carousel end -->
        
        <!-- Wordpress image start -->
        <script>
        $(document).ready(function() {
 		$('.alignleft').parent('a').addClass('align-left');
		});
        $(document).ready(function() {
 		$('.alignright').parent('a').addClass('align-right');
		});
		</script>
        <!-- Wordpress image end -->
        
        <!-- Article banner page start -->
		<script>
        $(document).ready(function() {
 		$('.banner-side').parents('.main-contents-full').css('border-top','1px solid #ccc');
		});
		</script>
        <!-- Article banner page end -->
        
        <!-- Height according to max height start -->
        <script>
		
		$(document).ready(function() {
 			$('.home-contents article, .home-testimonials').css('height', 'auto');
			
		if($(this).width() < 481)
 			$('.home-contents article, .home-testimonials').css('height', 'auto');
			
		else if($(this).width() < 993)
 			$('.home-contents article, .home-testimonials').height($('.home-contents').height()-50);
			
        else 
 			$('.home-contents article, .home-testimonials').height($('.home-contents').height()-100);
        });
		
		$(window).resize(function(){
 			$('.home-contents article, .home-testimonials').css('height', 'auto');
			
		if($(this).width() < 481)
 			$('.home-contents article, .home-testimonials').css('height', 'auto');
			
		else if($(this).width() < 993)
 			$('.home-contents article, .home-testimonials').height($('.home-contents').height()-50);
			
        else 
 			$('.home-contents article, .home-testimonials').height($('.home-contents').height()-100);
        });
		
		</script>
        
        <!-- Height according to max height end --> 

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. 
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>