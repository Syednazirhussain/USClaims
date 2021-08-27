@extends('layout')


@section('content')

	<!-- Start Header Section -->
	<div class="page-header">
	<div class="overlay">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12">
	                <h1>Contact with Us</h1>
	            </div>
	        </div>
	    </div>
	</div>
	</div>
	<!-- End Header Section -->

	<!-- Start Contact Us Section -->
	<section id="contact" class="contact">
	<div class="container">
	<div class="row">
	    <div class="col-lg-12">
	        <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
	            <h2>Contact With Us</h2>
	            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
	        </div>
	    </div>
	</div>
	<div class="row">
	    <div class="col-lg-12">
	        <form name="sentMessage" id="contactForm" novalidate>
	            <div class="row">
	                <div class="col-md-6 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="600ms">
	                    <div class="form-group">
	                        <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
	                        <p class="help-block text-danger"></p>
	                    </div>
	                    <div class="form-group">
	                        <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
	                        <p class="help-block text-danger"></p>
	                    </div>
	                    <div class="form-group">
	                        <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
	                        <p class="help-block text-danger"></p>
	                    </div>
	                </div>
	                <div class="col-md-6 wow fadeInRight" data-wow-duration="2s" data-wow-delay="600ms">
	                    <div class="form-group">
	                        <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
	                        <p class="help-block text-danger"></p>
	                    </div>
	                </div>
	                <div class="clearfix"></div>
	                <div class="col-lg-12 text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="600ms">
	                    <div id="success"></div>
	                    <button type="submit" class="btn btn-primary">Send Message</button>
	                </div>
	            </div>
	        </form>
	    </div>
	</div>
	</div>
	</section>
	<div class="google-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2901.6517033977398!2d102.27154655836036!3d2.2527155229352465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d1e5a53f2b278f%3A0xa5f298ea12823bf!2sBBU%20Apartment!5e0!3m2!1sen!2smy!4v1629953083230!5m2!1sen!2smy" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		{{-- <div id="map" data-position-latitude="48.858370" data-position-longitude="2.294481"></div> --}}
	</div>

@endsection