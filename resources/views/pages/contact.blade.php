@extends('layouts.app')

@section('content')
    <!-- Page Heading Section Start -->	
	<div class="pagehding-sec">
		<div class="breadcrumb-overlay"></div>		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-heading">
						<h1>Contact Us</h1>
					</div>				
				</div>				
			</div>
		</div>
	</div>
	<!-- Page Heading Section End -->
	
	<!-- Contact Page Start -->		
	<div class="contact-page-sec">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 pt-100">
					<div class="contact-form contact-page-form">	
						<div class="contact-field">	
							<div class="contact-form-title">
								<h3>Get In Touch</h3>
								<p>Feel free to write to us. We'll respond immediately.</p>							
							</div>
							<div class="row">
								@include('inc.messages')
								<form action="{{route('contactmail')}}" method="post">	
									@csrf							
									<div class="col-md-6 col-sm-6 col-xs-12 pd-right-10">
										<div class="single-input-field">
											<input placeholder="Your Name *" name="subject" type="text">
										</div>
									</div>							
									<div class="col-md-6 col-sm-6 col-xs-12 pd-left-10">
										<div class="single-input-field">
											<input placeholder="Email Address *" name="email" type="email">
										</div>
									</div>		
									<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="single-input-field">
											<textarea placeholder="Your Message" name="msg"></textarea>
										</div>
									</div>															
									<div class="col-md-3 col-sm-12 col-xs-12">
										<div class="single-input-fieldsbtn">
											<input value="Submit" type="submit">
										</div>	
									</div>																
								</form>
							</div>
						</div>															
					</div>
				</div>			
				<div class="col-md-4 col-sm-6 contact-form-sec">
					<div class="contact-info-inner">
						<div class="contact-info-text">
							<h3 class="contact-info-title">EMail</h3>
							<div class="contact-info-icon">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="contact-info-desc">
								<span>{{$email}}</span>
							</div>
						</div>				
						<div class="contact-info-text">
							<h3 class="contact-info-title">Phone</h3>
							<div class="contact-info-icon">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="contact-info-desc">
								<span>{{$phone}}</span>
							</div>
						</div>				
						<div class="contact-info-text">
							<h3 class="contact-info-title">Address</h3>
							<div class="contact-info-icon">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="contact-info-desc">
								<span>3017 Prospect Valley Road</span>
								<span>Los Angeles, California 90067 USA</span>
							</div>
						</div>				
					</div>
				</div>	
				<div class="col-md-2 col-sm-12 contact-social">
					<div class="contact-social-profile">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google"></i></a></li>
							<li><a href="#"><i class="fa fa-skype"></i></a></li>
						</ul>						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact Page End -->		
	<div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3306.763877409185!2d-117.80685488569334!3d34.02427142665287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c32c4321eea323%3A0x1048783becd0d580!2sProspect%20Valley%20Dr%2C%20Diamond%20Bar%2C%20CA%2091765%2C%20USA!5e0!3m2!1sen!2sng!4v1652227541288!5m2!1sen!2sng" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
    </div>	
@endsection