<div>
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4 class="footer-heading">Best Cotton</h4>
                    <div class="footer-underline"></div>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    </p>
                </div>
                <div class="col-md-3">
                    <h4 class="footer-heading">Quick Links</h4>
                    <div class="footer-underline"></div>
                    <div class="mb-2"><a href="{{ url('/') }}" class="text-black">Home</a></div>
                    <div class="mb-2"><a href="{{ url('/about-us') }}" class="text-black">About Us</a></div>
                    <div class="mb-2"><a href="{{ url('/contact-us') }}" class="text-black">Contact Us</a></div>
                    <div class="mb-2"><a href="{{ url('/blogs') }}" class="text-black">Blogs</a></div>
                    <!-- <div class="mb-2"><a href="" class="text-black">Sitemaps</a></div> -->
                </div>
                <div class="col-md-3">
                    <h4 class="footer-heading">Shop Now</h4>
                    <div class="footer-underline"></div>
                    <div class="mb-2"><a href="{{ url('/collections') }}" class="text-black">Collections</a></div>
                    <div class="mb-2"><a href="{{ url('/') }}" class="text-black">Trending Products</a></div>
                    <div class="mb-2"><a href="{{ url('/new-arrivals') }}" class="text-black">New Arrivals Products</a></div>
                    <div class="mb-2"><a href="{{ url('/featured-products') }}" class="text-black">Featured Products</a></div>
                    <div class="mb-2"><a href="{{ url('/cart') }}" class="text-black">Cart</a></div>
                </div>
                <div class="col-md-3">
                    <h4 class="footer-heading">Reach Us</h4>
                    <div class="footer-underline"></div>
                    <div class="mb-2">
                        <p>
                            <i class="fa fa-map-marker"></i>
                            {{ $appSetting->address ?? 'address'}}
                        </p>
                    </div>
                    <div class="mb-2">
                        <a href="" class="text-black">
                            <i class="fa fa-phone"></i>{{ $appSetting->phone1 ?? 'phone1'}}
                        </a>
                    </div>
                    <div class="mb-2">
                        <a href="" class="text-black">
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
                    <p class=""> &copy; 2023 - Best Cotton. All rights reserved.</p>
                </div>
                <div class="col-md-4">
                    <div class="social-media">
                        Get Connected:
                        {{ $appSetting->phone1 ?? 'phone 1'}}
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