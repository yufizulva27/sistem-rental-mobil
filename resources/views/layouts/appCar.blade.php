<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Rental Mobil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("assets/landingpage/css/open-iconic-bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/landingpage/css/animate.css") }}">
    
    <link rel="stylesheet" href="{{ asset("assets/landingpage/css/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/landingpage/css/owl.theme.default.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/landingpage/css/magnific-popup.css") }}">

    <link rel="stylesheet" href="{{ asset("assets/landingpage/css/aos.css") }}">

    <link rel="stylesheet" href="{{ asset("assets/landingpage/css/ionicons.min.css") }}">

    <link rel="stylesheet" href="{{ asset("assets/landingpage/css/bootstrap-datepicker.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/landingpage/css/jquery.timepicker.css") }}">

    
    <link rel="stylesheet" href="{{ asset("assets/landingpage/css/flaticon.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/landingpage/css/icomoon.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/landingpage/css/style.css") }}">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Rental<span>Mobil</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Cars</a></li>
	          <li class="nav-item active"><a href="{{ url('registrasi') }}" class="nav-link">Register</a></li>
	          <li class="nav-item active"><a href="{{ url('login') }}" class="nav-link">Login</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

	@yield('content')
    {{-- <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center" style="margin-top: 112px">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<h2 class="mb-2">List Mobil Sewaan</h2>
				</div>
        	</div>
    		<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="car-wrap rounded ftco-animate">
							<div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("assets/landingpage/images/car-1.jpg") }});">
							</div>
							<div class="text">
								<h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
								<div class="d-flex mb-3">
									<span class="cat">Cheverolet</span>
									<p class="price ml-auto">$500 <span>/day</span></p>
								</div>
								<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="{{ url('cars/carDetail') }}" class="btn btn-secondary py-2 ml-1">Details</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="car-wrap rounded ftco-animate">
							<div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("assets/landingpage/images/car-2.jpg") }});">
							</div>
							<div class="text">
								<h2 class="mb-0"><a href="car-single.html">Range Rover</a></h2>
								<div class="d-flex mb-3">
									<span class="cat">Subaru</span>
									<p class="price ml-auto">$500 <span>/day</span></p>
								</div>
								<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="car-wrap rounded ftco-animate">
							<div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("assets/landingpage/images/car-3.jpg") }});">
							</div>
							<div class="text">
								<h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
								<div class="d-flex mb-3">
									<span class="cat">Cheverolet</span>
									<p class="price ml-auto">$500 <span>/day</span></p>
								</div>
								<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
							</div>
						</div>
					</div>
	
					<div class="col-md-4">
						<div class="car-wrap rounded ftco-animate">
							<div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("assets/landingpage/images/car-4.jpg") }});">
							</div>
							<div class="text">
								<h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
								<div class="d-flex mb-3">
									<span class="cat">Cheverolet</span>
									<p class="price ml-auto">$500 <span>/day</span></p>
								</div>
								<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="car-wrap rounded ftco-animate">
							<div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("assets/landingpage/images/car-5.jpg") }});">
							</div>
							<div class="text">
								<h2 class="mb-0"><a href="car-single.html">Range Rover</a></h2>
								<div class="d-flex mb-3">
									<span class="cat">Subaru</span>
									<p class="price ml-auto">$500 <span>/day</span></p>
								</div>
								<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="car-wrap rounded ftco-animate">
							<div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("assets/landingpage/images/car-6.jpg") }});">
							</div>
							<div class="text">
								<h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
								<div class="d-flex mb-3">
									<span class="cat">Cheverolet</span>
									<p class="price ml-auto">$500 <span>/day</span></p>
								</div>
								<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
							</div>
						</div>
					</div>
	
					<div class="col-md-4">
						<div class="car-wrap rounded ftco-animate">
							<div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("assets/landingpage/images/car-7.jpg") }});">
							</div>
							<div class="text">
								<h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
								<div class="d-flex mb-3">
									<span class="cat">Cheverolet</span>
									<p class="price ml-auto">$500 <span>/day</span></p>
								</div>
								<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="car-wrap rounded ftco-animate">
							<div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("assets/landingpage/images/car-8.jpg") }});">
							</div>
							<div class="text">
								<h2 class="mb-0"><a href="car-single.html">Range Rover</a></h2>
								<div class="d-flex mb-3">
									<span class="cat">Subaru</span>
									<p class="price ml-auto">$500 <span>/day</span></p>
								</div>
								<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="car-wrap rounded ftco-animate">
							<div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("assets/landingpage/images/car-9.jpg") }});">
							</div>
							<div class="text">
								<h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
								<div class="d-flex mb-3">
									<span class="cat">Cheverolet</span>
									<p class="price ml-auto">$500 <span>/day</span></p>
								</div>
								<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
							</div>
						</div>
					</div>
	
					<div class="col-md-4">
						<div class="car-wrap rounded ftco-animate">
							<div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("assets/landingpage/images/car-10.jpg") }});">
							</div>
							<div class="text">
								<h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
								<div class="d-flex mb-3">
									<span class="cat">Cheverolet</span>
									<p class="price ml-auto">$500 <span>/day</span></p>
								</div>
								<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="car-wrap rounded ftco-animate">
							<div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("assets/landingpage/images/car-11.jpg") }});">
							</div>
							<div class="text">
								<h2 class="mb-0"><a href="car-single.html">Range Rover</a></h2>
								<div class="d-flex mb-3">
									<span class="cat">Subaru</span>
									<p class="price ml-auto">$500 <span>/day</span></p>
								</div>
								<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="car-wrap rounded ftco-animate">
							<div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("assets/landingpage/images/car-12.jpg") }});">
							</div>
							<div class="text">
								<h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
								<div class="d-flex mb-3">
									<span class="cat">Cheverolet</span>
									<p class="price ml-auto">$500 <span>/day</span></p>
								</div>
								<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
    	</div>
    </section> --}}

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
  </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset("assets/landingpage/js/jquery.min.js") }}"></script>
  <script src="{{ asset("assets/landingpage/js/jquery-migrate-3.0.1.min.js") }}"></script>
  <script src="{{ asset("assets/landingpage/js/popper.min.js") }}"></script>
  <script src="{{ asset("assets/landingpage/js/bootstrap.min.js") }}"></script>
  <script src="{{ asset("assets/landingpage/js/jquery.easing.1.3.js") }}"></script>
  <script src="{{ asset("assets/landingpage/js/jquery.waypoints.min.js") }}"></script>
  <script src="{{ asset("assets/landingpage/js/jquery.stellar.min.js") }}"></script>
  <script src="{{ asset("assets/landingpage/js/owl.carousel.min.js") }}"></script>
  <script src="{{ asset("assets/landingpage/js/jquery.magnific-popup.min.js") }}"></script>
  <script src="{{ asset("assets/landingpage/js/aos.js") }}"></script>
  <script src="{{ asset("assets/landingpage/js/jquery.animateNumber.min.js") }}"></script>
  <script src="{{ asset("assets/landingpage/js/bootstrap-datepicker.js") }}"></script>
  <script src="{{ asset("assets/landingpage/js/jquery.timepicker.min.js") }}"></script>
  <script src="{{ asset("assets/landingpage/js/scrollax.min.js") }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset("assets/landingpage/js/google-map.js") }}"></script>
  <script src="{{ asset("assets/landingpage/js/main.js") }}"></script>
    
  </body>
</html>