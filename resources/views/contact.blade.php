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
	<div id="map" data-position-latitude="48.858370" data-position-longitude="2.294481"></div>
	</div>

@endsection