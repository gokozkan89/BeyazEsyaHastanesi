<!DOCTYPE html>

<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	
	@include('includes.stylemeta')

</head>

<body id="body">

	<!-- preloader -->
	{{-- <div id="preloader">
		<div class="loder-box">
			<div class="battery"></div>
		</div>
	</div> --}}
	<header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
 		@include('includes.header')
	</header>	 


	<main class="site-content" role="main">
		<section id="home-slider">
			@include('section.slider')
		</section>
		
		<section id="hizmet">
			@include('section.referances')
		</section>

		<section id="about">
			@include('section.about')
		</section>

		<section id="service">
			@include('section.service')
		</section>
		<section id="deneme">
			@include('section.portfolio')
		</section>

		<section id="portfolio">
			@include('section.sertificates')
		</section>

		<section id="contact" >
			@include('section.contact')
		</section>
	</main>

	<footer id="footer">
		@include('includes.footer')
	</footer>
	@include('includes.scripts')
</body>

</html>