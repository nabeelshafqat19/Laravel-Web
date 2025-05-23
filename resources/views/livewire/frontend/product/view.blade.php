<div>
    <div class="py-3 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mt-3">
                    <div class="bg-white border" wire:ignore>
                        @if($product->productImages)
                        <!-- <img src="{{ asset($product->productImages[0]->image) }}" class="w-100" alt="Img"> -->
                        <div class="exzoom" id="exzoom">
                            <div class="exzoom_img_box">
                            <ul class='exzoom_img_ul'>
                                @foreach ($product->productImages as $itemImg)
                                 <li><img src="{{ asset($itemImg->image) }}"/></li>
                                @endforeach
                                </ul>
                            </div>
                            <div class="exzoom_nav"></div>
                            <p class="exzoom_btn">
                                <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
                                <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                            </p>
                        </div>

                        @else
                         No Image Added
                        @endif
                    </div>
                </div>
                <div class="col-md-7 mt-3">
                    <div class="product-view">
                        <h4 class="product-name">
                            {{ $product->name }}
                        </h4>
                        <hr>
                        <p class="product-path">
                            Home / {{ $product->category->name }} / {{ $product->name }}
                        </p>
                        <p class="product-path">Quality : {{ $product->brand}}</p>
                        <div>
                            <span class="selling-price">Rs{{ $product->selling_price }}</span>
                            <span class="original-price">Rs{{ $product->original_price }}</span>
                        </div>
                        <hr>
                        <div>
                            <h6>Select Color</h6>
                            @if($product->productColors->count() > 0)
                                @if($product->productColors)
                                    @foreach($product->productColors as $colorItem)
                                     <!-- <input type="radio" name="colorSelection" value="{{ $colorItem->id }}" /> {{ $colorItem->color->name }} -->
                                     <label class="colorSelectionLabel" style="background-color: {{ $colorItem->color->code }}" 
                                     wire:click="colorSelected({{ $colorItem->id }})">
                                         
                                     </label>
                                    @endforeach
                                @endif
                                <div>
                                    @if ($this->prodColorSelectedQuantity == 'outOfStock')
                                        <label class="btn-sm py-1 mt-2 text-white bg-danger" style="border-radius:20px">Out of Stock</label>
                                    @elseif($this->prodColorSelectedQuantity > 0)
                                        <label class="btn-sm py-1 mt-2 text-white bg-success" style="border-radius:20px">In Stock</label>
                                    @endif
                                </div>
                            @else    

                                @if($product->quantity)
                                 <label class="btn-sm py-1 mt-2 text-white bg-success" style="border-radius:20px">In Stock</label>
                                @else
                                 <label class="btn-sm py-1 mt-2 text-white bg-danger" style="border-radius:20px">Out of Stock</label>
                                @endif

                            @endif
                        </div>
                        <div class="mt-2">
                            <div class="input-group">
                                <span class="btn btn1" wire:click="decrementQuantity"><i class="fa fa-minus"></i></span>
                                <input type="text" wire:model="quantityCount" value="{{ $this->quantityCount }}" class="input-quantity" />
                                <span class="btn btn1" wire:click="incrementQuantity"><i class="fa fa-plus"></i></span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="button" wire:click="addToCart({{$product->id}})" class="btn btn2">
                                <span wire:loading.remove wire:target="addToCart">
                                <i class="fa fa-shopping-cart"></i>
                                </span>
                                <span wire:loading wire:target="addToCart">Adding...</span>
                            </button>

                            <button type="button" wire:click="addToWishList({{ $product->id }})" class="btn btn2"> 
                                <span wire:loading.remove wire:target="addToWishList">
                                 <i class="fa fa-heart"></i>
                                </span>
                                <span wire:loading wire:target="addToWishList">Adding...</span>
                             </button>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-0">Small Description</h5>
                            <p>
                              {!! $product->small_description !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
<br />
<br />
<br />
            <!-- Product Description -->

<div class="row">
    <div class="col-md-12">
              <form action="{{ url('admin/products') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <ul class="nav nav-tabs" id="myTab" role="tablist">
               <li class="nav-item" role="presentation">
                  <button style=" font-weight: bold" class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                    DESCRIPTION
                  </button>
                </li>
               <li class="nav-item" role="presentation">
                  <button style=" font-weight: bold" class="nav-link" id="information-tab" data-bs-toggle="tab" data-bs-target="#information-tab-pane" type="button" role="tab" aria-controls="seotags-tab-pane" aria-selected="false">
                  ADDITIONAL INFORMATION
                  </button>
                </li>
                </ul>
               <div class="tab-content" id="myTabContent">
                 <div class="tab-pane fade border p-3 show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                   <div class="mb-3">
                     <div class="card-header bg-white">
                            <h4>Description</h4>
                            <div class="underline"></div>
                        </div>
                        <div class="card-body">
                            <p>
                              {!! $product->description !!}
                            </p>
                        </div>
                    </div>
                 </div>
                 <div class="tab-pane fade border p-3" id="information-tab-pane" role="tabpanel" aria-labelledby="information-tab" tabindex="0">
                    <div class="mb-3">
                     <div class="card-header bg-white">
                            <h4>Additional Information</h4>
                            <div class="underline"></div>
                        </div>
                        <div class="card-body">
                            <p>
                              {!! $product->additional_information !!}
                            </p>
                        </div>
                    </div>
                 </div>
                    </div>
                    </div>
                </div>
               </div>
              </form>
            </div>
       </div>     
   </div>
</div>

    </div>

     <!-- Related Product -->

    <div class="py-3 py-md-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <h3>Related 
                        @if($category) {{ $category->name}} @endif
                        Products</h3>
                    <div class="underline"></div>
                </div>

                <div class="col-md-12">
                    @if ($category)
                 <div class="owl-carousel owl-theme four-carousel">
                @foreach ($category->relatedproducts as $relatedproductItem)
                    <div class="item mb-3">
                        <div class="product-card">
                            <div class="product-card-img">
                                <label class="stock bg-primary" style="border-radius:20px">New</label>
                                
                                @if ($relatedproductItem->productImages->count() > 0)
                                <a href="{{ url('/collections/'.$relatedproductItem->category->slug.'/'.$relatedproductItem->slug) }}">
                                    <img src="{{ asset($relatedproductItem->productImages[0]->image) }}" alt="{{ $relatedproductItem->name }}">
                                </a>
                                @endif
                            </div>
                            <div class="product-card-body">
                                <p class="product-brand">{{ $relatedproductItem->brand }}</p>
                                <h5 class="product-name">
                                    <a href="{{ url('/collections/'.$relatedproductItem->category->slug.'/'.$relatedproductItem->slug) }}" class="text-dark">
                                        {{$relatedproductItem->name}}
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price">Rs{{$relatedproductItem->selling_price}}</span>
                                    <span class="original-price">Rs{{$relatedproductItem->original_price}}</span>
                                </div>
                            </div>
                        </div>
                        </div>
                    @endforeach
                    </div>
                    @else
                    <div class="p-2">
                         <h4>No Related Products Available</h4>
                        </div>
                    @endif
                 </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')

<script>
    $(function(){

        $("#exzoom").exzoom({
            "navWidth": 60,
            "navHeight": 60,
            "navItemNum": 5,
            "navItemMargin": 7,
            "navBorder": 1,
            "autoPlay": false,
            "autoPlayTimeout": 2000
        });
    });

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
@endpush