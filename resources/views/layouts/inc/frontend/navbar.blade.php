<div class="main-navbar shadow-sm sticky-top">
        <div class="top-navbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 my-auto d-none d-sm-none d-md-block d-lg-block">
                     <img src="{{ URL::asset('/admin/images/Logo/logo.png')}}" alt="Profile Pic" width="120px" height="70px"/></a>
                     <a href="{{ url('/') }}"></a>
                    </div>
                    <div class="col-md-5 my-auto">
                        <form action="{{ url('search') }}" method="GET" role="search">
                            <div class="input-group">
                                <input type="search" name="search" value="{{ Request::get('search') }}" placeholder="Search your product" class="form-control" />
                                <button class="btn bg-black" type="submit">
                                    <i style="color: whitesmoke;" class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 my-auto">
                        <ul class="nav justify-content-end">
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('cart') }}">
                                    <i class="fa fa-shopping-cart"></i>(<livewire:frontend.cart.cart-count />)
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('wishlist') }}">
                                    <i class="fa fa-heart"></i>(<livewire:frontend.wishlist-count />)
                                </a>
                            </li>
                            @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                         @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user"></i> 
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ url('profile')}}"><i class="fa fa-user"></i> Profile</a></li>
                                <li><a class="dropdown-item" href="{{ url('orders') }}"><i class="fa fa-list"></i> My Orders</a></li>
                                <li><a class="dropdown-item" href="{{ url('wishlist') }}"><i class="fa fa-heart"></i> My Wishlist</a></li>
                                <li><a class="dropdown-item" href="{{ url('cart') }}"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                                </ul>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand d-block d-sm-block d-md-none d-lg-none" href="#">
                    Best Cotton
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                        <div class="dropdown">
                        <button class="dropbtn"><a class="nav-link" href="{{ url('/collections') }}">Categories</a></button>
                     <div class="dropdown-content">
                     <a href="{{ url('/collections/prayer-rug') }}">Prayer Rug</a>
                     <a href="{{ url('/collections/kitchen-towels') }}">Kitchen Towels</a>
                     <a href="{{ url('/collections/thermal-blankets') }}">Thermal blanket</a>
                     <a href="{{ url('/collections/ihram-set') }}">Ihram Set</a>
                     <a href="{{ url('/collections') }}">..More</a>
                    </div>
                </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('contact-us') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>