@extends ('layouts.app')
@section('content')
<div class="slider">
    <div class="all-slide owl-item">	
        <!-- Slider Single Item Start -->
        <div class="single-slide" style="background-image:url({{url('img/hero4.jpg')}});">
            <div class="slider-overlay-v2"></div>
            <div class="slider-wrapper">
                <div class="slider-text">
                    <div class="slider-caption">
                        <h1>Don't have the <span>luxury of time</span> for going through our NCLEX exam training course?</h1>	
                        <p>We got you covered. Become a Registered nurse today.</p>
                        
                        <ul>
                          @auth
                                <li><a href="{{ route('getResource', ['data' => 'License']) }}">GET YOUR LICENSE</a></li>
                          @else
                                <li><a href="/login">GET YOUR LICENSE</a></li>
                          @endauth
                            					
                        </ul>							
                    </div>	
                </div>
            </div>				
        </div>
        <!-- Slider Single Item End -->
        <!-- Slider Single Item Start -->
        <div class="single-slide" style="background-image:url({{url('img/hero1.jpg')}});">
            <div class="slider-overlay-v2"></div>
            <div class="slider-wrapper">
                <div class="slider-text">
                    <div class="slider-caption">
                        <h1>Pass your NCLEX exam with {{config('app.name')}} the first time.</h1>	
                        <p>Your entire career may be on the line. Pass using our unique test-based method. <span>Guaranteed.</span></p>
                        <ul>
                            <li><a href="/register">ENROLL TODAY</a></li>					
                        </ul>							
                    </div>	
                </div>
            </div>				
        </div>	
        <!-- Slider Single Item End -->	
    </div>			
</div>
<!-- Slider Section End -->	

<!-- promo Section Start -->
<div class="promo-sec pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="promo-inner">
                    <img src="{{url('img/promo-1.jpg')}}" alt=""/>
                    <div class="promo-text-inner">
                        <div class="promo-text">
                            <i class="icofont-read-book-alt"></i>
                            <h3>Questions and Answers</h3>
                        </div>
                    </div>
                    <div class="promo-title">
                        @auth
                        <h3><a href="{{ route('getResource', ['data' => 'Questions and Answers']) }}">Questions and Answers</a></h3>
                  @else
                        <h3><a href="/login">Questions and Answers</a></h3>
                  @endauth                                             
                    </div>	
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="promo-inner">
                    <img src="{{url('img/promo-2.jpg')}}" alt=""/>
                    <div class="promo-text-inner">
                        <div class="promo-text">
                            <i class="icofont-book-alt"></i>
                            <h3>Tutorials Materials</h3>
                        </div>
                    </div>
                    <div class="promo-title">
                        @auth
                        <h3><a href="{{ route('getResource', ['data' => 'Tutorials']) }}">Tutorials Materials</a></h3>
                  @else
                        <h3><a href="/login">Tutorials Materials</a></h3>
                  @endauth
                        
                    </div>	
                </div>
            </div>				
            <div class="col-md-4 col-sm-4">
                <div class="promo-inner">
                    <img src="{{url('img/promo_3.jpg')}}" alt=""/>
                    <div class="promo-text-inner">
                        <div class="promo-text">
                            <i class="icofont-graduate-alt"></i>
                            <h3>Direct License</h3>
                        </div>
                    </div>
                    <div class="promo-title">
                        @auth
                        <h3><a href="{{ route('getResource', ['data' => 'License']) }}">Direct License</a></h3>
                  @else
                        <h3><a href="/login">Direct License</a></h3>
                  @endauth
                        
                    </div>	
                </div>
            </div>	
        </div>
        <div class="row pt-100">
            <div class="col-md-4">
                <div class="promo-sec-title">
                    <div style="z-index: 999;">
                        <h1>We hold your hand while guiding you. Every Day!</h1>
                    </div>                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="promo-desc">
                    <p>At {{config('app.name')}}, our aim and objective is to add a substancial value to the lives of all that comes to you. We have an excellent archive of NCLEX exams past questions and answers, Tutorial materials, audios and videos on the most repeated question ON NCLEX exams.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="promo-desc">
                    <p>Are you a practicing nurse with years of experience? You don't have the luxury of time to go through our training materials? Don't worry we've got you covered. We offer instant LICENSE to people like you. This is a privilege giving to us because of our capability to produce excellent and wonderful nurses through our training program.</p>
                    
                    @auth
                    <a href="{{ route('getResource', ['data' => 'License']) }}" class="gray-btn">Get License</a>
              @else
                    <a href="/login"  class="gray-btn">Get License</a>
              @endauth
                </div>
            </div>
        </div>
    </div>
</div>
<!-- promo Section End -->				
<!-- Course Section Start -->
<div class="course-home2-sec bg-gray pt-100">
    <div class="container">
        <!-- Section Title Start -->
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 text-center">
                <div class="sec-title">
                    <h2>Trending Courses</h2>
                    <p>Our courses spans across all categories and module required to take you to the next level as a RN. Get full access to 2,500+ stimulating questions with detailed rationales.</p>
                </div>					
            </div>
            <div class="col-md-2"></div>
        </div>		
        <!-- Section Title End -->
        <div class="row">
            <div class="col-md-12">
                <div class="navbarsort">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarfiltr" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>							
                    </button>
                    <div class="shorttitle">
                        <h3>Course Filter</h3>
                    </div>
                </div>						
                <div class="collapse navbar-collapse" id="navbarfiltr">
                   <div class="course-tab">
                       <ul>
                            <li class="active">
                                <a data-toggle="tab" href="#tab_1" aria-expanded="true">Basic Care & Comfort</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#tab_2" aria-expanded="false">Pharmacological & Parenteral Therapies</a>
                            </li>				
                            <li class="">
                                <a data-toggle="tab" href="#tab_3" aria-expanded="false">Reduction of Risk Potential</a>
                            </li>												
                            <li class="">
                                <a data-toggle="tab" href="#tab_4" aria-expanded="false">Physiological Adaptation</a>
                            </li>								                            
                        </ul>
                    </div>
                </div>	
            </div>	
        </div>			
        <div class="row">
            <div class="col-md-12">
                <div class="tab-content">
                    <!-- tab_1 Start -->
                    <div id="tab_1" class="tab-pane fade in active">				
                        <div class="all-course">
                            <div class="course-inner">
                                <div class="course-inner-thumb">
                                    <img src="img/course-1.jpg" alt=""/>
                                </div>
                                <div class="course-inner-text">
                                    <div class="course-author">
                                        <img src="img/author-1.jpg" alt=""/>
                                    </div>
                                    <h3>
                                        @auth
                                            <a href="{{ route('getResource', ['data' => 'Tutorials']) }}">What is basic care and comfort in nursing?</a>  
                                        @else
                                            <a href="/login">What is basic care and comfort in nursing?</a>  
                                        @endauth
                                        
                                    </h3>
                                    <span class="publish-date">Dec 27, 2019</span>
                                    <p>Basic Care and Comfort includes assisting with all activities of daily living (ADL). It also includes assistive devices, mobility/immobility, non-pharmacological comfort measures, nutrition and oral hydration, and post-mortem care.</p>
                                    <div class="course-meta">
                                        <ul>
                                            <li>
                                                @auth
                                                    <a href="{{ route('getResource', ['data' => 'Tutorials']) }}"><i class="fa fa-heart" aria-hidden="true"></i> 553</a>
                                                @else
                                                    <a href="/login"><i class="fa fa-heart" aria-hidden="true"></i> 553</a>
                                                @endauth                            
                                            </li>
                                            <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 1:30 Hours</a></li>
                                        </ul>
                                        <div class="course-rating">
                                            <a href="">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>					
                            <div class="course-inner">
                                <div class="course-inner-thumb">
                                    <img src="img/course-2.jpg" alt=""/>
                                </div>
                                <div class="course-inner-text">
                                    <div class="course-author">
                                        <img src="img/author-1.jpg" alt=""/>
                                    </div>
                                    <h3><a href="#">Why is basic care and comfort important in nursing?</a></h3>
                                    <span class="publish-date">Jan 10, 2020</span>
                                    <p>The nurse promotes physical health and wellness by providing care and comfort, reducing client risk potential and managing health alterations, living and parenteral therapies. health problems related to existing conditions, treatments or procedures.</p>
                                    <div class="course-meta">
                                        <ul>
                                            <li>
                                                @auth
                                                    <a href="{{ route('getResource', ['data' => 'Tutorials']) }}"><i class="fa fa-heart" aria-hidden="true"></i> 903</a>
                                                @else
                                                    <a href="/login"><i class="fa fa-heart" aria-hidden="true"></i> 903</a>
                                                @endauth
                                            </li>
                                            <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 1 Hours</a></li>
                                        </ul>
                                        <div class="course-rating">
                                            <a href="">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>						
                            <div class="course-inner">
                                <div class="course-inner-thumb">
                                    <img src="img/course-3.jpg" alt=""/>
                                </div>
                                <div class="course-inner-text">
                                    <div class="course-author">
                                        <img src="img/author-1.jpg" alt=""/>
                                    </div>
                                    <h3>
                                        @auth
                                            <a href="{{ route('getResource', ['data' => 'Tutorials']) }}">Evaluating Outcomes</a>
                                        @else
                                            <a href="/login">Evaluating Outcomes</a>
                                        @endauth
                                    </h3>
                                    <span class="publish-date">May 2, 2021</span>
                                    <p>When evaluating the outcome of alternative therapies and comfort measures, it is important to ask for, and incorporate, your patient’s feedback into your evaluation. </p>
                                    <div class="course-meta">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 1026</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 1:45 Hours</a></li>
                                        </ul>
                                        <div class="course-rating">
                                            <a href="">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>					                            
                        </div>
                    </div>	
                    <!-- tab_1 End -->						
                    <!-- tab_2 Start -->
                    <div id="tab_2" class="tab-pane fade in">				
                        <div class="all-course">
                            <div class="course-inner">
                                <div class="course-inner-thumb">
                                    <img src="img/course-6.jpg" alt=""/>
                                </div>
                                <div class="course-inner-text">
                                    <div class="course-author">
                                        <img src="img/author-2.jpg" alt=""/>
                                    </div>
                                    <h3>
                                        @auth
                                            <a href="{{ route('getResource', ['data' => 'Tutorials']) }}">Medication Effects</a>
                                        @else
                                            <a href="/login">Medication Effects</a>
                                        @endauth
                                    </h3>
                                    <span class="publish-date">June, 2020</span>
                                    <p>Administering medication is much more than “giving” clients medicine. It requires a substantial amount of knowledge about each medication, including the potential effects (both intended and otherwise), interactions with other medications,</p>
                                    <div class="course-meta">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 326</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 2 Hours</a></li>
                                        </ul>
                                        <div class="course-rating">
                                            <a href="">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>					
                            <div class="course-inner">
                                <div class="course-inner-thumb">
                                    <img src="img/course-5.jpg" alt=""/>
                                </div>
                                <div class="course-inner-text">
                                    <div class="course-author">
                                        <img src="img/author-2.jpg" alt=""/>
                                    </div>
                                    <h3>
                                        @auth
                                        <a href="{{ route('getResource', ['data' => 'Tutorials']) }}">Contraindications</a>
                                        @else
                                        <a href="/login">Contraindications</a>
                                        @endauth

                                    </h3>
                                    <span class="publish-date">March 2020/span>
                                    <p>Every medication has a list of conditions in which its use is not acceptable or safe. Common conditions that have medication contraindications include pregnancy, organ dysfunction, and allergy/sensitivity.</p>
                                    <div class="course-meta">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 706</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 50 min</a></li>
                                        </ul>
                                        <div class="course-rating">
                                            <a href="">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>						
                            <div class="course-inner">
                                <div class="course-inner-thumb">
                                    <img src="img/course-4.jpg" alt=""/>
                                </div>
                                <div class="course-inner-text">
                                    <div class="course-author">
                                        <img src="img/author-2.jpg" alt=""/>
                                    </div>
                                    <h3> @auth
                                        <a href="{{ route('getResource', ['data' => 'Tutorials']) }}">Nurse Responsibilities</a>
                                        @else
                                        <a href="/login">Nurse Resonsibilities</a>
                                        @endauth</h3>
                                    <span class="publish-date">May 12, 2021</span>
                                    <p> Nurses are key in discussing medication names, dosages, rationales, intended effects, unintended effects, and contraindications with their clients.</p>
                                    <div class="course-meta">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 543</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 1:20 Hours</a></li>
                                        </ul>
                                        <div class="course-rating">
                                            <a href="">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>	
                    <!-- tab_2 End -->					
                    <!-- tab_3 Start -->
                    <div id="tab_3" class="tab-pane fade in">				
                        <div class="all-course">
                            <div class="course-inner">
                                <div class="course-inner-thumb">
                                    <img src="img/course-7.jpg" alt=""/>
                                </div>
                                <div class="course-inner-text">
                                    <div class="course-author">
                                        <img src="img/author-3.jpg" alt=""/>
                                    </div>
                                    <h3>
                                        @auth
                                        <a href="{{ route('getResource', ['data' => 'Tutorials']) }}">Vital Signs</a>
                                        @else
                                        <a href="/login">Vital Signs</a>
                                        @endauth
                                    </h3>
                                    <span class="publish-date">Sep 13, 2021</span>
                                    <p>A patient’s vital signs are the most rapid assessment tool that one can use to monitor for drastic changes in physiologic function as well as responses to interventions. </p>
                                    <div class="course-meta">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 678</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 1 Hours</a></li>
                                        </ul>
                                        <div class="course-rating">
                                            <a href="">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>					
                            <div class="course-inner">
                                <div class="course-inner-thumb">
                                    <img src="img/course-9.jpg" alt=""/>
                                </div>
                                <div class="course-inner-text">
                                    <div class="course-author">
                                        <img src="img/author-3.jpg" alt=""/>
                                    </div>
                                    <h3>
                                        
                                        @auth
                                        <a href="{{ route('getResource', ['data' => 'Tutorials']) }}">Invasive hemodynamic monitoring</a>
                                        @else
                                        <a href="/login">Invasive hemodynamic monitoring</a>
                                        @endauth
                                    </h3>
                                    <span class="publish-date">April 2022</span>
                                    <p>This includes measurements of pulmonary artery pressure, continuous blood pressure monitoring, pulmonary artery wedge pressure, central venous pressure, cardiac output, and intra-arterial pressure.</p>
                                    <div class="course-meta">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 102</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 2:12 Hours</a></li>
                                        </ul>
                                        <div class="course-rating">
                                            <a href="">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>						
                            <div class="course-inner">
                                <div class="course-inner-thumb">
                                    <img src="img/course-8.png" alt=""/>
                                </div>
                                <div class="course-inner-text">
                                    <div class="course-author">
                                        <img src="img/author-3.jpg" alt=""/>
                                    </div>
                                    <h3>
                                         
                                        @auth
                                        <a href="{{ route('getResource', ['data' => 'Tutorials']) }}">Diagnostic Tests</a>
                                        @else
                                        <a href="/login">Diagnostic Tests</a>
                                        @endauth
                                    
                                    </h3>
                                    <span class="publish-date">Dec 11, 2020</span>
                                    <p>Diagnostic testing is an essential part of risk reduction, as it may indicate one or more underlying problems that may be addressed with potentially life-saving intervention. </p>
                                    <div class="course-meta">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 426</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 2 Hours</a></li>
                                        </ul>
                                        <div class="course-rating">
                                            <a href="">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>													
                        </div>
                    </div>	
                    <!-- tab_3 End -->					
                    <!-- tab_4 Start -->
                    <div id="tab_4" class="tab-pane fade in">				
                        <div class="all-course">
                            <div class="course-inner">
                                <div class="course-inner-thumb">
                                    <img src="img/course-10.jpg" alt=""/>
                                </div>
                                <div class="course-inner-text">
                                    <div class="course-author">
                                        <img src="img/author-4.jpg" alt=""/>
                                    </div>
                                    <h3>                                       
                                        @auth
                                        <a href="{{ route('getResource', ['data' => 'Tutorials']) }}">Body System Alterations</a>
                                        @else
                                        <a href="/login">Body System Alterations</a>
                                        @endauth
                                    </h3>
                                    <span class="publish-date">Aug 27, 2019</span>
                                    <p>A patient’s body undergoes numerous alterations in response to an illness, disease process, intervention, and/or surgery.</p>
                                    <div class="course-meta">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 826</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 2 Hours</a></li>
                                        </ul>
                                        <div class="course-rating">
                                            <a href="">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>					
                            <div class="course-inner">
                                <div class="course-inner-thumb">
                                    <img src="img/course-11.jpg" alt=""/>
                                </div>
                                <div class="course-inner-text">
                                    <div class="course-author">
                                        <img src="img/author-4.jpg" alt=""/>
                                    </div>
                                    <h3>                                        
                                        @auth
                                        <a href="{{ route('getResource', ['data' => 'Tutorials']) }}">Patient Assessment</a>
                                        @else
                                        <a href="/login">Patient Assessment</a>
                                        @endauth
                                    </h3>
                                    <span class="publish-date">Jul 2, 2020</span>
                                    <p>Assessment of the health and psychological status of the patient includes not only alterations due to illness, disease, or interventions/treatments, but also the patient’s ability to cope with his or her health situation and adaptation to an altered (sometimes permanently) state of impairment.</p>
                                    <div class="course-meta">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 1026</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 1 Hours</a></li>
                                        </ul>
                                        <div class="course-rating">
                                            <a href="">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>						
                            <div class="course-inner">
                                <div class="course-inner-thumb">
                                    <img src="img/course-12.jpg" alt=""/>
                                </div>
                                <div class="course-inner-text">
                                    <div class="course-author">
                                        <img src="img/author-4.jpg" alt=""/>
                                    </div>
                                    <h3>
                                       
                                        @auth
                                        <a href="{{ route('getResource', ['data' => 'Tutorials']) }}">Patient Education</a>
                                        @else
                                        <a href="/login">Patient Education</a>
                                        @endauth
                                    </h3>
                                    <span class="publish-date">Mar 19, 2022</span>
                                    <p>Also, incorporate education into patient care to promote the patient’s progress toward his or her health goals. Be mindful of all intrinsic and extrinsic factors that can help or hinder the patient’s progress.</p>
                                    <div class="course-meta">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 226</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 59 min</a></li>
                                        </ul>
                                        <div class="course-rating">
                                            <a href="">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>													
                        </div>
                    </div>	
                    <!-- tab_4 End -->
                </div>		
            </div>
        </div>
    </div>
</div>
<!-- Course Section End -->	

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
                                <h2>Learn from any resource</h2>
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
<!-- Testimonial Section Start -->
<div class="testimonial-sec">
    <div class="testimonial-overlay"></div>
    <div class="container">	
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="all-testimonial">
                    <div class="single-testimonial">					
                        <div class="client-comment">
                            <div class="client-thumb">
                                <img src="img/client-1.jpg" alt=""/>
                            </div>													
                            <p>Thank you so much I am foreigner from Trinidad and I have been here in the states for nine years now i passed my NCLEX and has become a registered nurse thank you so much for coming to my rescue</p>	
                            <div class="client-info">
                                <h2>Mich J.</h2>
                                <h3>Ohio,USA</h3>									
                            </div>
                        </div>													
                    </div>	
                    <div class="single-testimonial">					
                        <div class="client-comment">
                            <div class="client-thumb">
                                <img src="img/client-5.png" alt=""/>
                            </div>													
                            <p>Seen my exact question and answer before the exam dates system like magic lol</p>	
                            <div class="client-info">
                                <h2>Peter Hans</h2>
                                <h3>North Carolina, USA</h3>									
                            </div>
                        </div>													
                    </div>					
                    <div class="single-testimonial">					
                        <div class="client-comment">
                            <div class="client-thumb">
                                <img src="img/client-2.png" alt=""/>
                            </div>													
                            <p>I took several hours and compared various resources available to me. The exams here and the feedback is far better than any services I've looked into. It's also a big plus to be able to complete the quizzes on any device. The price is amazing for a year subscription, so why not spend a little more now for good quality training?</p>	
                            <div class="client-info">
                                <h2>Heath G</h2>
                                <h3>Florida, USA</h3>									
                            </div>
                        </div>													
                    </div>	
                    
                    <div class="single-testimonial">					
                        <div class="client-comment">
                            <div class="client-thumb">
                                <img src="img/client-3.jpg" alt=""/>
                            </div>													
                            <p>I love that there is a step by step program that leads you all the way to the NCLEX simulator! I am so happy with my purchase & have already told so many friends & nursing students about it!</p>	
                            <div class="client-info">
                                <h2>Kanan Joe</h2>
                                <h3>Wincosin, USA</h3>									
                            </div>
                        </div>													
                    </div>

                    <div class="single-testimonial">					
                        <div class="client-comment">
                            <div class="client-thumb">
                                <img src="img/client-4.png" alt=""/>
                            </div>													
                            <p>Love everything about this review questions, worth every dime l paid for. Encourage every nursing student to get it</p>	
                            <div class="client-info">
                                <h2>Assumpta Bourgeois</h2>
                                <h3>California, USA</h3>									
                            </div>
                        </div>													
                    </div>
                    
                </div>			
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
<!-- Testimonial Section End -->			
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
                    <h2>Shirley Jim</h2>
                </div>
            </div>																													
        </div>			     
    </div>	
</div>		
<!-- Team Section End -->
<!-- Count Up Section Start -->	
<div class="count-up-home-v2-sec bg-gray pt-100 pb-100">
    <div class="container">
        <!-- Section Title Start -->
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 text-center">
                <div class="sec-title">
                    <h2>Important Facts</h2>
                    <p>Our numbers speaks success, proven success and propensity for more mile stones in the future. You’re fully protected by our Pass Guarantee.</p>
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
                        <h2 class="counter">250</h2>
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
                        <h2 class="counter">150</h2>
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
                        <h2>100%</h2>
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
                        <h2>89%</h2>
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
                        <br>
                        <h2>66%</h2>
                        <h4>Passed with Tutorial Materials</h4>						
                    </div>
                </div>
            </div>																	
        </div>					
    </div>
</div>
<!-- Count Up Section End -->		
<!-- Latest Blog Section Start -->
<div class="latest-blog-sec pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="latest-blog-title">
                    <h2>Latest News</h2>
                </div>				
                <div class="all-latest-blog">
                    <div class="single-latest-blog">
                        <img src="img/latest-blog-1.jpg" alt=""/>
                        <div class="latest-blog-desc">
                            <div class="latest-blog-desc-inner">
                                <ul>
                                    <li><a href="#">5 May, 2022</a></li>
                                    <li><a>By : Admin</a></li>
                                </ul>
                                <h4>
                                    @auth
                                    <a href="/regbootcamp">Summer NCLEX Prep bootcamp coming up. Register now to participate. 100% free</a>
                                    @else
                                    <a href="/login">Summer NCLEX Prep bootcamp coming up. Register now to participate. 100% free</a>
                                    @endauth
                                </h4>
                            </div>
                        </div>
                    </div>						
                    <div class="single-latest-blog">
                        <img src="img/latest-blog-2.jpg" alt=""/>
                        <div class="latest-blog-desc">
                            <div class="latest-blog-desc-inner">
                                <ul>
                                    <li><a href="#">7 May, 2022</a></li>
                                    <li><a href="#">By : Admin</a></li>
                                </ul>
                                <h4>
                                    @auth
                                    <a href="/regbootcamp">100% NCLEX RN LICENSE FOR BEST STUDENTS FROM THE SUMMER BOOTCAMP</a>
                                    @else
                                    <a href="/login">100% NCLEX RN LICENSE FOR BEST STUDENTS FROM THE SUMMER BOOTCAMP</a>
                                    @endauth
                                </h4>
                            </div>
                        </div>
                    </div>						                   
                </div>
            </div>
            <div class="col-md-6">
                <div class="latest-blog-title">
                    <h2>Notable Events</h2>
                </div>				
                <div class="event-sec">
                    <div class="single-event">
                        <h4><a>{{config('app.name')}} incorporated</a></h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>Feb 12, 2009</a></li>                            
                        </ul>
                    </div>					
                    <div class="single-event">
                        <h4><a href="#">First Award won for Best NCLEX PREP PLATFORM</a></h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> Jun 30, 2011</a></li>
                        </ul>
                    </div>						
                    <div class="single-event">
                        <h4><a href="#">Received Honors for Issuance of LICENSE</a></h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>Nov 12, 2015</a></li>                          
                        </ul>
                    </div>					
                    <div class="single-event">
                        <h4><a href="#">Called upon by NHS for Covid-19 prepping of nurses</a></h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>Aug 3, 2020</a></li>                           
                        </ul>
                    </div>                  
                </div>
            </div>
        </div>
    </div>
</div>      
@endsection