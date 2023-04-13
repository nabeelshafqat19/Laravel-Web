@extends('layouts.app')

@section('title','New Arrivals Product')

@section('content')

<div class="py-5">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
             <h4>New Arrivals</h4>
             <div class="underline mb-4"></div>
          </div>

                    @forelse ($newArrivalsProducts as $productItem)
                    <div class="col-md-3">
                        <div class="product-card">
                            <div class="product-card-img">
                                <label class="stock bg-primary" style="border-radius:20px">New</label>
                                
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
                    @empty
                        <div class="col-md-12 p-2">
                         <h4>No Products Available</h4>
                        </div>
                    @endforelse

                    <div class="text-center">
                        <a href="{{ url('collections') }}" style="border-radius:28px" class="btn btn-warning px-3">Shop More</a>
                    </div>
        </div>
    </div>
</div>
@endsection