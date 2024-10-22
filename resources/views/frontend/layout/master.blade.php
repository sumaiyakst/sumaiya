<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">
        
        <!-- title of site -->
        <title>Limon Online Shop</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="{{asset('frontend/logo/favicon.jpg')}}"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">

		<!--flat icon css-->
		<link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">

		<!--animate.css-->
        <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="{{asset('frontend/css/bootsnav.css')}}" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		<!-- top-area Start -->
		<header class="top-area">
			<div class="header-area">
				<!-- Start Navigation -->
			    <nav class="navbar navbar-default bootsnav navbar-fixed dark no-background">

			        <div class="container">

			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
							<a href="{{url('/')}}"><img src="{{asset('frontend/logo/favicon.jpg')}}" alt="LLOgo" width="60px"></a>
							
			                <a class="navbar-brand" href="{{url('/')}}">Limon Online Shop</a>
							
							
			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			                	<li class=" smooth-menu active"></li>
			                    <li ><a href="{{url('/')}}">Home</a></li>
			                    <li ><a href="{{url('/computer')}}">Computer</a></li>
			                    <li ><a href="{{url('/laptop')}}">Laptop</a></li>
			                    <li ><a href="{{url('/phone')}}">Phone</a></li>
			                    <li ><a href="{{url('/')}}">Monitor</a></li>
			                    <li ><a href="{{url('/')}}">Tv</a></li>
			                    <li ><a href="{{url('/')}}">contact</a></li>
			                    
			                </ul><!--/.nav -->
			            </div><!-- /.navbar-collapse -->
			            <!-- /.navbar-collapse -->
			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->

		    <div class="clearfix"></div>

		</header><!-- /.top-area-->
		<!-- top-area End -->

		<!-- <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			                	<li class=" smooth-menu active"></li>
			                    <li class=" smooth-menu"><a href="#">education</a></li>
			                    <li class="smooth-menu"><a href="#">skills</a></li>
			                    <li class="smooth-menu"><a href="#">experience</a></li>
			                    <li class="smooth-menu"><a href="#">profile</a></li>
			                    <li class="smooth-menu"><a href="#">portfolio</a></li>
			                    <li class="smooth-menu"><a href="#">clients</a></li>
			                    <li class="smooth-menu"><a href="#">contact</a></li>
			                    <li class="smooth-menu"><a href="{{url('/services')}}">Services</a></li>
			                </ul>
			            </div> -->
	
		@yield('welcome')
    @yield('service')
    @yield('showp')
		<!--footer-copyright start-->
		<footer id="footer-copyright" class="footer-copyright">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					<p>
						&copy; copyright yourname. design and developed by <a href="https://www.themesine.com/">themesine</a>
					</p><!--/p-->
				</div><!--/.text-center-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" ></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.footer-copyright-->
		<!--footer-copyright end-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="{{asset('frontend/js/jquery.js')}}"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js')}}"></script>
		
		<!--bootstrap.min.js-->
        <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
		
		<!-- bootsnav js -->
		<script src="{{asset('frontend/js/bootsnav.js')}}"></script>
		
		<!-- jquery.sticky.js -->
		<script src="{{asset('frontend/js/jquery.sticky.js')}}"></script>
		
		<!-- for progress bar start-->

		<!-- progressbar js -->
		<script src="{{asset('frontend/js/progressbar.js')}}"></script>

		<!-- appear js -->
		<script src="{{asset('frontend/js/jquery.appear.js')}}"></script>

		<!-- for progress bar end -->

		<!--owl.carousel.js-->
        <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		
        
        <!--Custom JS-->
        <script src="{{asset('frontend/js/custom.js')}}"></script>
        
    </body>
	
</html>