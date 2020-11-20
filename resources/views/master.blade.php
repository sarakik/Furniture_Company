	<!DOCTYPE html>
	<html lang="en">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Furniture - Home</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">				
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">	
			<link rel="stylesheet" href="css/owl.theme.default.css">
			<link rel="stylesheet" href="css/testimonial_carousel.css">		
			<link rel="stylesheet" href="css/blog.css">	
			<link rel="stylesheet" href="css/packages.css">
			<link rel="stylesheet" href="css/main_slider.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
			<header id="header"><!-- #header -->
				<div class="header-top">
					<div class="container">
			  		<div class="row align-items-center">
			  			<div class="col-lg-6 col-sm-6 col-6 header-top-left">
			  				<ul>
			  					<li><a href="#">Visit Us</a></li>
			  					<li><a href="#">Buy Tickets</a></li>
			  				</ul>			
			  			</div>
			  			<div class="col-lg-6 col-sm-6 col-6 header-top-right">
							<div class="header-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
							</div>
			  			</div>
			  		</div>			  					
					</div>
				</div>
				<div class="container main-menu">
					<div class="row align-items-center justify-content-between d-flex">
				      
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li><a href="{{route('index')}}">Home</a></li>
				          <li><a href="{{route('about')}}">About</a></li>
				          <li><a href="{{route('catalog')}}">Catalog</a></li>
				          <li class="menu-has-children"><a href="">Sections</a>
				            <ul>
				            	  <li><a href="{{route('living_room')}}">Living Room</a></li>					
				            	  <li><a href="{{route('bed_room')}}">Bed Room</a></li>	
				            	  <li><a href="{{route('sofa')}}">sofa</a></li>	
				            	  <li><a href="{{route('kitchen')}}">Kitchen</a></li>	
				            	  	
				            	                  		
				            </ul>
				          </li>	
				          <li class="menu-has-children"><a href="">Blog</a>
				            <ul>
				              <li><a href="{{route('blog_home')}}">Blog Home</a></li>
				            </ul>
				          </li>	
				     				          					          		          
				          <li><a href="{{route('contact')}}">Contact</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->					      		  
					</div>
				</div>
			</header><!-- #header -->
			

@yield('content')



		<!-- start footer Area -->		
		<footer class="footer-area">
			<div class="container">

				<div class="row">
					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>Travelish</h6>
							<p>
								The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has to understand the message. 
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>Navigation Links</h6>
							<div class="row">
								<div class="col">
									<ul>
										<li><a href="{{route('index')}}">Home</a></li>
										<li><a href="{{route('about')}}">About</a></li>
										<li><a href="{{route('catalog')}}">Catalog</a></li>
										
									</ul>
								</div>
								<div class="col">
									<ul>
										
										<li><a href="{{route('blog_home')}}">Blog</a></li>
										<li><a href="{{route('contact')}}">Contact</a></li>
									</ul>
								</div>										
							</div>							
						</div>
					</div>							
					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>Newsletter</h6>
							<p>
								For business professionals caught between high OEM price and mediocre print and graphic output and to understand the message.								
							</p>								
							<div id="mc_embed_signup">
								<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
																		
									<div class="mt-10 info"></div>
								</form>
							</div>
						</div>
					</div>
										
				</div>
			</div>
		</footer>
		
		<div class="copyrights">
			<div class="container">
				<div class="row footer-bottom d-flex justify-content-between align-items-center">
					<p class="col-lg-8 col-sm-12 footer-text m-0">
						Copyright &copy; All rights reserved.
					</p>
					<div class="col-lg-4 col-sm-12 footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- End footer Area -->


		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>			
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
			<script src="js/jquery-ui.js"></script>					
			<script src="js/easing.min.js"></script>			
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.min.js"></script>	
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>						
		<script src="js/jquery.nice-select.min.js"></script>					
		<script src="js/owl.carousel.min.js"></script>							
		<script src="js/mail-script.js"></script>	
		<script src="js/jquery.touchSwipe.min.js"></script>
		<script src="js/responsive_bootstrap_carousel.js"></script>
		<script src="js/blog_slider_min.js"></script>
		<script src="js/main.js"></script>	
	</body>
</html>