@section('header')
<!-- Main Menu Area Start -->
	<header id="mainHeader" class="header">
		<!-- Start Navigation -->
		<nav class="navbar navbar-expand-lg navbar-light p-0">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="img/logo3.png" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link active" href={{url('/')}}>Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="aboutUs.html">About</a>
						</li>
						<!-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="service" role="button" data-toggle="dropdown" aria-haspopup="true"
							 aria-expanded="false">
								Service
							</a>
							<div class="dropdown-menu" aria-labelledby="service">
								<a class="dropdown-item" href="service.html">Service</a>
								<a class="dropdown-item" href="serviceDetails.html">Service Single</a>
							</div>
						</li> -->

						<!-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="blog" role="button" data-toggle="dropdown" aria-haspopup="true"
							 aria-expanded="false">
								Blog
							</a>
							<div class="dropdown-menu" aria-labelledby="blog">
								<a class="dropdown-item" href="blog.html">Blog</a>
								<a class="dropdown-item" href="blogDetails.html">Blog Details</a>
							</div>
						</li> -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="pages" role="button" data-toggle="dropdown" aria-haspopup="true"
							 aria-expanded="false">
								Pages
							</a>
							<div class="dropdown-menu" aria-labelledby="pages">
								<a class="dropdown-item" href="doctor.html">Doctors</a>
								<a class="dropdown-item" href="aboutdoctor.html">About Doctor</a>
								<a class="dropdown-item" href="appointment.html">Appointment</a>
								<!-- <a class="dropdown-item" href="login.html">Login</a>
								<a class="dropdown-item" href="register.html">Register</a> -->
								<!-- <a class="dropdown-item" href="faq.html">Faq</a>
								<a class="dropdown-item" href="404.html">404</a> -->
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html">Contact</a>
						</li>
					</ul>
					<div class="call_btn">
						<a href="{{route('login')}}">
							LOGIN
						</a>
					</div>
					<div class="call_btn">
						<a href="{{route('register')}}">
							REGISTER
						</a>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<!-- Main Menu Area End -->
@endsection