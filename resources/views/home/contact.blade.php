@extends('home.header')


@section('content')



<!-- HOME SLIDER -->
<!-- heading-banner start -->
<div class="heading-banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Contact Us</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- heading-banner end -->
<!-- map-area start -->
<div class="map-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="googleMap" style="width: 100%; height: 410px;">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- map-area end -->
<!-- contact-area start -->
<div class="contact-area">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="contact-form">
					<h3>
						<i class="fa fa-envelope-o"></i>Leave a Message</h3>
					<div class="row">
						<form action="sendmail.php" method="POST">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input name="name" type="text" placeholder="Name (required)" />
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input name="email" type="email" placeholder="Email (required)" />
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input name="subject" type="text" placeholder="Subject" />
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
							<input type="submit" value="Submit Form" />
						</div>
						</form>
					</div>
				</div>
			</div>
			<!-- contact-info start -->
			<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="contact-info">
					<h3>
						Contact info</h3>
					<ul>
						<li><i class="fa fa-map-marker"></i><strong>Address</strong> 1234 Pall Mall Street,
							London England </li>
						<li><i class="fa fa-envelope"></i><strong>Phone</strong> +8801912-199981 </li>
						<li><i class="fa fa-mobile"></i><strong>Email:</strong> <a href="#">admin@themepure.net</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- contact-info end -->
		</div>
	</div>
</div>
<!-- contact-area end -->
<!-- brand-area start -->
<div class="brand-area pad-bottom">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h2>
						Our Brands</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="brand-carousel">
				<div class="col-lg-12">
					<div class="single-brand">
						<a href="#">
							<img src="img/brand/1.png" alt="" /></a>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-brand">
						<a href="#">
							<img src="img/brand/1.png" alt="" /></a>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-brand">
						<a href="#">
							<img src="img/brand/1.png" alt="" /></a>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-brand">
						<a href="#">
							<img src="img/brand/1.png" alt="" /></a>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-brand">
						<a href="#">
							<img src="img/brand/1.png" alt="" /></a>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-brand">
						<a href="#">
							<img src="img/brand/1.png" alt="" /></a>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-brand">
						<a href="#">
							<img src="img/brand/1.png" alt="" /></a>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-brand">
						<a href="#">
							<img src="img/brand/1.png" alt="" /></a>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-brand">
						<a href="#">
							<img src="img/brand/1.png" alt="" /></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- brand-area end -->


@endsection