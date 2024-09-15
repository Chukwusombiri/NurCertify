@extends('layouts.app')

@section('content')
    <!-- Page Heading Section Start -->	
	<div class="pagehding-sec">
		<div class="breadcrumb-overlay"></div>		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-heading">
						<h1>about us</h1>
					</div>				
				</div>				
			</div>
		</div>
	</div>
	<!-- Page Heading Section End -->
	<!-- About Page Start -->
	<div class="about-page-sec pt-100 pb-100">
		<div class="container">
			<div class="row">		
				<div class="col-md-6 col-sm-7">
					<div class="campus-desc">
						<h2>About {{config('app.name')}}</h2>
						<p style="color: #475569 ">{{config('app.name')}} is a world-leading Online Educational and training platform. We take in ordinary students and turn them into registered nurses with so much real life experience and job ready skills. You can't go through our training and fail NCLEX Exam or any nurse related examination. GUARANTEED. EVERYDAY.</p>
                        <p style="color: #475569 ">Proven time and time again as the Best NCLEX Examination Prepping Platfom, our numbers vindicates us. You don't have to worry about anything or meeting up with deadline because we've got you covered: We offer One-time License for almost a PENNY!!</p>
					</div>																													
				</div>	
				<div class="col-md-6 col-sm-5">
					<div class="vedio-inner">
						<img src="img/video-thumb.jpg" alt=""/>
						
					</div>
				</div>
			</div>
		</div>	
	</div>	
	<!-- About Page End -->	
	<!-- About pillar section Start -->
	<div class="about-pillar-sec pb-70">
		<div class="container">
			<div class="row">		
				<div class="col-md-4 col-sm-4">
					<div class="about-pillar-inner">
						<div class="about-pillar-thumb">
							<img src="img/pilar-1.jpg" alt=""/>
						</div>		
						<div class="about-pillar-desc">
							<h4>What we do </h4>
							<p>Designed to get you to think like a nurse, {{config('app.name')}} will show you how to make sense of confusing information. It will get you to practice making decisions under pressure, so you can do the same thing on the NCLEX®.</p>
						</div>	
					</div>																													
				</div>		
				<div class="col-md-4 col-sm-4">
					<div class="about-pillar-inner">
						<div class="about-pillar-thumb">
							<img src="img/pilar-2.jpg" alt=""/>
						</div>		
						<div class="about-pillar-desc">
							<h4>Our Mission </h4>
							<p>To Produce nurses that no matter difficult the days may get, don't forget the reason they became a nurse.</p>
						</div>	
					</div>																													
				</div>		
				<div class="col-md-4 col-sm-4">
					<div class="about-pillar-inner">
						<div class="about-pillar-thumb">
							<img src="img/pilar-3.jpg" alt=""/>
						</div>		
						<div class="about-pillar-desc">
							<h4>Our Vision</h4>
							<p>We strive to train Hands that turn caring into action; Touch that turns compassion into comfort; Smiles that Love into hearing.</p>
						</div>	
					</div>																													
				</div>	
			</div>
		</div>	
	</div>	
	<!-- About pillar section End -->
	<!-- Count Up Section Start -->	
	<div class="count-up-sec pt-100 pb-100">
		<div class="count-up-sec-overlay"></div>
		<div class="container">
			<!-- Section Title Start -->
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8 text-center">
					<div class="sec-title">
						<h2>Our Attained Facts</h2>
						<p>Learning to soar high is only possible when you fly with the eagles! Our numbers speaks volumes. </p>
					</div>					
				</div>
				<div class="col-md-2"></div>
			</div>		
			<!-- Section Title End -->		
			<div class="row">						
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="counting_sl">
						<div class="countup-text">
							<div class="counter-icon">
								<i class="icofont-award"></i>
							</div>
							<h2 class="counter" style="color: #fff">250</h2>
							<h4>Awards</h4>						
						</div>
					</div>
				</div>				
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="counting_sl">
						<div class="countup-text">
							<div class="counter-icon">
								<i class="icofont-read-book-alt"></i>
							</div>
							<h2 class="counter" style="color: #fff">150</h2>
							<h4>Tutors</h4>						
						</div>
					</div>
				</div>				
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="counting_sl">
						<div class="countup-text">
							<div class="counter-icon">
								<i class="icofont-graduate"></i>
							</div>
							<h2  style="color: #fff">100%</h2>
							<h4>Successful issuance of LICENSE</h4>						
						</div>
					</div>
				</div>				
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="counting_sl">
						<div class="countup-text">
							<div class="counter-icon">
								<i class="icofont-book-alt"></i>
							</div>
							<h2  style="color: #fff">89%</h2>
							<h4>Passed with Past Questions and Answers</h4>						
						</div>
					</div>
				</div>
                <div class="col-md-3 col-sm-6 col-xs-6">
					<div class="counting_sl">
						<div class="countup-text">
							<div class="counter-icon">
								<i class="icofont-book-alt"></i>
							</div>
							<h2  style="color: #fff">66%</h2>
							<h4>Passed with Tutorial Materials</h4>						
						</div>
					</div>
				</div>																
			</div>					
		</div>
	</div>
	<!-- Count Up Section End -->		
	<!-- FAQ Section Start -->
	<div class="faq-section pt-100 pb-70">
		<div class="container">			
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="faq-sec">
						<div class="sec-title">
							<h2>Why choose us</h2>
							<p>{{config('app.name')}} has the a reputation for taking you from an ordinary nurse to a registered nurse under a very short time. Our Ecosystem of resources is schemed bearing you in mind so as to give you the easiest route to the next step in your nursing career.</p>
						</div>					
						<div class="faq-single">
							<div class="media">
								<div class="media-left">
									<div class="icon">
										<i class="icofont-book-alt"></i>
									</div>						
								</div>						
								<div class="media-body">
									<h2>Learn Anything</h2>
									<p>We have a very rich library of Past Questions and Answers, Videos and audio lectures, Tutorial notes and scheduled NCLEX Exams bootcamp.</p>
								</div>				
							</div>						
						</div>					
						<div class="faq-single">
							<div class="media">
								<div class="media-left">
									<div class="icon">
										<i class="icofont-read-book-alt"></i>
									</div>						
								</div>						
								<div class="media-body">
									<h2>Professonal Tutors</h2>
									<p>Our tutors are very friendly and homely. Feel free to meet them up at a coffee shop for a chat!!</p>
								</div>				
							</div>						
						</div>						
						<div class="faq-single">
							<div class="media">
								<div class="media-left">
									<div class="icon">
										<i class="icofont-award"></i>
									</div>						
								</div>						
								<div class="media-body">
									<h2>National Awards</h2>
									<p>We have been nominated and won many awards. Most  notably, 'The Best Online Nursing Education' for NCLEX Exam.</p>
								</div>				
							</div>						
						</div>						
								
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="faq-thumb">
						<img src="img/faq-img.jpg" alt=""/>
					</div>
				</div>
			</div>					
		</div>
	</div>	
	<!-- FAQ Section End -->	
	
	<!-- Team Section Start -->		
	<div class="team-sec pt-100 pb-70">	
		<div class="container">		
			<!-- Section Title Start -->
			<div class="row">
				<div class="col-md-7 text-left">
					<div class="sec-title">
						<h2>Trending Tutors</h2>
						<p>We employ the best tutors whom have all been through the NCLEX Exam with outstanding success. It will be a whole lot of learning experience for you.</p>
					</div>					
				</div>
			</div>		
			<!-- Section Title End -->				
			<div class="row">		
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="team-member">
						<div class="team-thumb wow slideInUp"  data-wow-duration="1000ms" data-wow-delay="330ms">
							<img src="img/team-1.jpg" alt=""/>
							<div class="team-overlay">
								<ul>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-dribbble"></i></a></li>									
									<li><a href="#"><i class="icofont-behance"></i></a></li>
								</ul>							
							</div>							
						</div>
						<h2>William Barnett</h2>
					</div>
				</div>			
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="team-member">
						<div class="team-thumb wow slideInUp"  data-wow-duration="1000ms" data-wow-delay="330ms">
							<img src="img/team-2.jpg" alt=""/>
							<div class="team-overlay">
								<ul>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-dribbble"></i></a></li>									
									<li><a href="#"><i class="icofont-behance"></i></a></li>
								</ul>							
							</div>							
						</div>
						<h2>Evelyn Gibson</h2>
					</div>
				</div>					
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="team-member">
						<div class="team-thumb wow slideInUp"  data-wow-duration="1000ms" data-wow-delay="330ms">
							<img src="img/team-3.jpg" alt=""/>
							<div class="team-overlay">
								<ul>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-dribbble"></i></a></li>									
									<li><a href="#"><i class="icofont-behance"></i></a></li>
								</ul>							
							</div>							
						</div>
						<h2>Smith Taylor</h2>
					</div>
				</div>				
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="team-member">
						<div class="team-thumb wow slideInUp"  data-wow-duration="1000ms" data-wow-delay="330ms">
							<img src="img/team-4.jpg" alt=""/>
							<div class="team-overlay">
								<ul>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-dribbble"></i></a></li>									
									<li><a href="#"><i class="icofont-behance"></i></a></li>
								</ul>							
							</div>							
						</div>
						<h2>Dwoney Jim</h2>
					</div>
				</div>																													
			</div>			     
		</div>	
	</div>		
	<!-- Team Section End -->	
@endsection