<br><br><br>
            <center><div style="display: flex; align-items: center; justify-content: center; width: 1000px; height: 200px; border: 1px solid white; padding: 20px;margin:40px;">        
            <div style="flex: 1; padding: 50px;">
            <img src="{{Url('/admin/images/aboutus/aboutus-main.jpg')}}" alt="Image" width=100%;>
        </div>
        <div style="flex: 2; padding: 10px;">
            <h2>About Us</h2>
            <p>"To be the one stop shop only; by selling, executing and enhancing consumer satisfaction globally with constant improvement and innovation while positively contributing to our society."</p>
            <a href="{{ url('/about-us') }}" class="text-black"><button style="background-color: Navy; color: white; border: none; padding: 10px 20px; border-radius: 0;">More About Us</button></a>

        </div>
    </div></center>
    <br><br><br>    
<div>
    <div class="footer">
        <div class="banner-with-contents">
            <div class="content-asset">
                <div class="position-relative main-email-container">
                    <picture>
                            <source media="(min-width: 768px)" srcset="{{ URL::asset('/admin/images/faces/emailsignupbackground.jpg') }}" alt="Email Footer banner">
                            <source media="(min-width: 320px)" srcset="{{ URL::asset('/admin/images/faces/emailsignupbackground.jpg') }}" alt="Email Footer banner">
                            <img alt="Email Footer banner" src="{{ URL::asset('/admin/images/faces/emailsignupbackground.jpg') }}" title="">
                    </picture>
                    <div class="content-container-main-email">
                        <div class="container">
                            <div class="row align-items-center row-contanier-box-2 pt-zero-wrapper">
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <div class="left-content-section left-content-1" style="font-style: italic">
                                        <p>Join the best cotton Get 10% off</p>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <div class="main-form">
                                        <form role="form" class="d-flex form-subscription-wrapper" name="newsletterSubscribeFooterRedesign" id="newsletterSubscribeFooterRedesign" action="https://www.mvmt.com/on/demandware.store/Sites-MVMTUS-Site/en_US/Newsletter-Subscribe?pageType=footer" method="POST">
                                            <div class="input-group">
                                                <input type="email" class="form-control email-subscription-input email-input" id="hpEmailSignUp" name="hpEmailSignUp" placeholder="Enter Email Address">
                                                <button type="button" style="border-radius:28px" class="btn btn-subscribe-wrapper-box">Subscribe</button>
                                            </div>
                                            <div class="invalid-feedback"></div>
                                            <div class="submission-status-1 d-none" data-errormsg="Please enter valid email address">
                                                Please enter valid email address
                                            </div>
                                            <p class="bottom-slot-content-wrapper bottom-text">
                                                <span class="bolder"><a href="">Terms and
                                                    Conditions</a>&nbsp;apply.
                                                </span>
                                                <span class="bolder">View our <a href="">privacy
                                                policy</a>
                                                </span>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4 class="footer-heading">Best Cotton</h4>
                    <div class="footer-underline"></div>
                    <p>
                    Welcome to our website! We are a leading provider of high-quality cotton towels and other cotton products. Our products are made from the finest cotton available to ensure maximum comfort and durability. We offer a wide range of products, including bath towels, beach towels, hand towels, washcloths, and more. Our towels come in a variety of colors and sizes to suit your needs. 
 
 At our website, we are committed to providing our customers with the best possible shopping experience. 
                    </p>
                </div>
                <div class="col-md-3">
                    <h4 class="footer-heading">Quick Links</h4>
                    <div class="footer-underline"></div>
                    <div class="mb-2"><a href="{{ url('/') }}" class="text-black">Home</a></div>
                    <div class="mb-2"><a href="{{ url('/about-us') }}" class="text-black">About Us</a></div>
                    <div class="mb-2"><a href="{{ url('/contact-us') }}" class="text-black">Contact Us</a></div>
                    <!-- <div class="mb-2"><a href="" class="text-black">Sitemaps</a></div> -->
                </div>
                <div class="col-md-3">
                    <h4 class="footer-heading">Shop Now</h4>
                    <div class="footer-underline"></div>
                    <div class="mb-2"><a href="{{ url('/collections') }}" class="text-black">Collections</a></div>
                    <div class="mb-2"><a href="{{ url('/') }}" class="text-black">Trending Products</a></div>
                    <div class="mb-2"><a href="{{ url('/new-arrivals') }}" class="text-black">New Arrivals Products</a></div>
                    <div class="mb-2"><a href="{{ url('/featured-products') }}" class="text-black">Featured Products</a></div>
                </div>
                <div class="col-md-3">
                    <h4 class="footer-heading">Reach Us</h4>
                    <div class="footer-underline"></div>
                    <div class="mb-2">
                        <p>
                            <a href="" class="text-black">
                                <i class="fa fa-map-marker"></i>
                                {{ $appSetting->address ?? 'address'}}
                            </a>
                        </p>
                    </div>
                    <div class="mb-2">
                        <a href="tel:{{ $appSetting->phone1 ?? 'phone1'}}" class="text-black">
                            <i class="fa fa-phone"></i>{{ $appSetting->phone1 ?? 'phone1'}}
                        </a>
                    </div>
                    <div class="mb-2">
                        <a href="mailto:{{ $appSetting->email1 ?? 'email 1'}}" class="text-black">
                            <i class="fa fa-envelope"></i>{{ $appSetting->email1 ?? 'email 1'}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class=""> &copy; 2025 - Best Cotton. All rights reserved.</p>
                </div>
                <div class="col-md-4">
                    <div class="social-media">
                        Get Connected:
                        @if($appSetting->facebook)
                        <a href="{{ $appSetting->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>
                        @endif
                        @if($appSetting->twitter)
                        <a href="{{ $appSetting->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a>
                        @endif
                        @if($appSetting->instagram)
                        <a href="https://instagram.com/talhanaveed671?igshid=ZDdkNTZiNTM=" target="_blank"><i class="fa fa-instagram"></i></a>
                        @endif
                        @if($appSetting->youtube)
                        <a href="{{ $appSetting->youtube }}" target="_blank"><i class="fa fa-youtube"></i></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>