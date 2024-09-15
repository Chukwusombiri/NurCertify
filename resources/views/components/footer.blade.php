
<footer class="footer">	
    <!-- Footer Top Start -->
    <div class="footer-sec">	
        <div class="container">
            <div class="row">
                <!-- Single Footer Widget Start -->
                <div class="col-md-4 col-sm-6 footer-widget">
                    <div class="footer-wedget-one">
                        <h4>{{config('app.name')}}</h4>
                        <p>An institute whose visions ang goals are perfectly aligned with yours. We always guarantee NCLEX Exam success.</p>		                        						
                    </div>					
                </div>	
                <!-- Single Footer Widget End -->
                <!-- Single Footer Widget Start -->
                <div class="col-md-2 col-sm-6 footer-widget">
                    <div class="footer-widget-menu">
                        <h2 class="footer-widget-title">Useful links</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/about">About us</a></li>
                            <li><a href="/contact">Contact us</a></li>
                            <li><a href="/team">Tutors</a></li>
                            <li><a href="/faq">FAQ</a></li>
                            <li><a href="/privacy">Privacy</a></li>
                        </ul>
                    </div>
                </div>	
                <!-- Single Footer Widget End -->
                <!-- Single Footer Widget Start -->
                <div class="col-md-3 col-sm-6 footer-widget">
                    <div class="widget-twitter">
                        <h2 class="footer-widget-title">CONTACT US</h2>
                        <div class="twitter-post">
                            <p class="twiter-post-title">3017 Prospect Valley Road</p>
                            <p class="post-time">Los Angeles, California 90067 USA</p>
                        </div>                      
                    </div>
                </div>
                                
                <!-- Single Footer Widget End -->
                <!-- Single Footer Widget Start -->
                <div class="col-md-3 col-sm-6 footer-widget">
                    <h2 class="footer-widget-title">ONLINE PRESENCE</h2>
                    <div class="footer-recent-inner">
                        <div class="media">			
                            <div class="media-body">
                                <h4  style="color:#fff">EMAIL</h4>
                                <span><a href="mailto:{{$email}}" style="color:#af9a7d">{{$email}}</a></span>
                            </div>
                        </div>						
                        <div class="media">			
                            <div class="media-body">
                                <h4 style="color:#fff">CALL PHONE</h4>
                                <span><a href="tel:{{$phone}}"  style="color:#af9a7d">{{$phone}}</a></span>
                            </div>
                        </div>																			
                    </div>
                </div>
                <!-- Single Footer Widget End -->
            </div>
        </div>
    </div>
    <!-- Footer Top End -->
    <!-- Footer Bottom Start -->
    <div class="footer-bottom-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="copy-right">
                        <p>&copy; {{$copyrightyear}} {{config('app.name')}}. All Rights Reserved.</p>
                    </div>
                </div>				
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->
</footer>
