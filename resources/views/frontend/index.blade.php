@extends('layouts.app')

@section('title','Home Page')

@section('content')


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
   <div class="carousel-inner">

       @foreach ($sliders as $key => $sliderItem)
       <div class="carousel-item {{ $key == 0 ? 'active':'' }}">
         @if($sliderItem->image)
         <img src="{{ asset($sliderItem->image) }}" class="d-block w-100" alt="...">
         @endif
          <div class="carousel-caption d-none d-md-block">
                    <div class="custom-carousel-content">
                        <h1>
                         {!! $sliderItem->title !!}
                        </h1>
                        <p>{!! $sliderItem->description !!}</p>
                        <div>
                            <a href="{{ url('/collections') }}"  style="border-radius:28px" class="btn btn-slider">
                                Get Now
                            </a>
                        </div>
                    </div>
                </div>
        </div>
        @endforeach
    </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>
</div>

<div class="py-5 bg-white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
      <img src="{{ URL::asset('/admin/images/signup/signup (2).png')}}">
        <div class="underline mx-auto"></div>
        <h4>
          We Make every type of product with pure cotton.
</h4>
      </div>
    </div>
  </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h4>Trending Products</h4>
            <div class="underline mb-4"></div>
          </div>
          @if($trendingProducts)
            <div class="col-md-12">
                <div class="owl-carousel owl-theme four-carousel">
                @foreach ($trendingProducts as $productItem)
                    <div class="item">
                    <div class="product-card">
                        <div class="product-card-img">
                          <label class="stock bg-primary" style="border-radius:20px">Trending</label>
                          

                          @if ($productItem->productImages->count() > 0)
                          <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                          <img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{ $productItem->name }}">
                          </a>
                          @endif
                      </div>
                        <div class="product-card-body">
                          <p class="product-brand">{{ $productItem->brand }}</p>
                            <h5 class="product-name">
                              <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}" class="text-dark">
                                {{$productItem->name}}
                              </a>
                            </h5>
                        <div>
                            <span class="selling-price">Rs{{$productItem->selling_price}}</span>
                            <span class="original-price">Rs{{$productItem->original_price}}</span>
                        </div>
                      </div>
                    </div>
                    </div>
                    @endforeach
                    </div>
                    </div>
                    @else
                        <div class="col-md-12">
                            <div class="p-2">
                              <h4>No Products Available</h4>
                            </div>
                       </div>
                    </div>
                    @endif
                </div>
            </div>

            <div class="py-5 bg-white">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h4>New Arrivals
             <a href="{{ url('new-arrivals') }}" style="border-radius:28px" class="btn btn-warning float-end">View More</a>
            </h4>
            <div class="underline mb-4"></div>
          </div>
          @if($newArrivalsProducts)
            <div class="col-md-12">
                <div class="owl-carousel owl-theme four-carousel">
                @foreach ($newArrivalsProducts as $productItem)
                    <div class="item">
                    <div class="product-card">
                        <div class="product-card-img">
                          <label class="stock bg-primary" style="border-radius:20px">Latest</label>
                          

                          @if ($productItem->productImages->count() > 0)
                          <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                          <img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{ $productItem->name }}">
                          </a>
                          @endif
                      </div>
                        <div class="product-card-body">
                          <p class="product-brand">{{ $productItem->brand }}</p>
                            <h5 class="product-name">
                              <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}" class="text-dark">
                                {{$productItem->name}}
                              </a>
                            </h5>
                        <div>
                            <span class="selling-price">Rs{{$productItem->selling_price}}</span>
                            <span class="original-price">Rs{{$productItem->original_price}}</span>
                        </div>
                      </div>
                    </div>
                    </div>
                    @endforeach
                    </div>
                    </div>
                    @else
                        <div class="col-md-12">
                            <div class="p-2">
                              <h4>No New Arrivals Available</h4>
                            </div>
                       </div>
                    </div>
                    @endif
                </div>
            </div>

            <div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 700px;">
        <img style="position: relative; width: 100%; height: 100%;" src="{{Url('admin/images/closeup/white.jpg')}}" alt="Image">
        <div style="position: absolute; top: 270%; left:50%; transform: translate(-50%, -50%); color: black; font-size: 24px; text-align: center;">
            <h2><img src="{{Url('/admin/images/perfection.png')}}"></h2>
            <a href="{{ url('/collections') }}" style="background-color: Navy; color: white; border: none; padding: 10px 20px; border-radius: 0; text-decoration: none;">Go to Our Best Collections</a>
                </div>
            </div>

            <div class="py-5">
    <div class="container">
        <div class="row">
          @if($featuredProducts)
            <div class="col-md-12">
                <div class="owl-carousel owl-theme four-carousel">
                @foreach ($featuredProducts as $productItem)
                    @endforeach
                    </div>
                    </div>
                    @else
                        <div class="col-md-12">
                            <div class="p-2">
                              <h4>No Featured Product Available</h4>
                            </div>
                       </div>
                    </div>
                    @endif
                </div>
            </div>
            

            <div class="py-5">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h4>Featured Products
              <a href="{{ url('featured-products') }}" style="border-radius:28px" class="btn btn-warning float-end">View More</a>
            </h4>
            <div class="underline mb-4"></div>
          </div>
          @if($featuredProducts)
            <div class="col-md-12">
                <div class="owl-carousel owl-theme four-carousel">
                @foreach ($featuredProducts as $productItem)
                    <div class="item">
                    <div class="product-card">
                        <div class="product-card-img">
                          <label class="stock bg-primary" style="border-radius:20px">Featured</label>
                          @if ($productItem->productImages->count() > 0)
                          <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                          <img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{ $productItem->name }}">
                          </a>
                          @endif
                      </div>
                        <div class="product-card-body">
                          <p class="product-brand">{{ $productItem->brand }}</p>
                            <h5 class="product-name">
                              <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}" class="text-dark">
                                {{$productItem->name}}
                              </a>
                            </h5>
                        <div>
                            <span class="selling-price">Rs{{$productItem->selling_price}}</span>
                            <span class="original-price">Rs{{$productItem->original_price}}</span>
                        </div>
                      </div>
                    </div>
                    </div>
                    @endforeach
                    </div>
                    </div>
                    @else
                        <div class="col-md-12">
                            <div class="p-2">
                              <h4>No Featured Product Available</h4>
                            </div>
                       </div>
                    </div>
                    @endif
                </div>
            </div>
    @endsection
    @section('script')
<script>
  $('.four-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots:true,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
</script>

@endsection