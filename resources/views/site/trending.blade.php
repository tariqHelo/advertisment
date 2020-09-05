@php
use App\Models\Product ;
$products = Product::orderBy('reviews')->take(6)->get();

@endphp
<div class="site-section bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-7 text-left border-primary">
                <h2 class="font-weight-light text-primary">Trending Today</h2>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6">
              {{-- @for($i = 0 ; $i <= (count($products)/2) + 1  ; $i++ )

                <div class="d-block d-md-flex listing">
                    <a href="listings-single.html" class="img d-block" style="background-image: url('{{ asset('storage/'.$products[$i]->image) }}')"></a>
                    <div class="lh-content">
                        <span class="category">{{ $products[$i]->category->title ?? "empty" }}</span>
                        <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                        <h3><a href="listings-single.html">{{ $products[$i]->title }}</a></h3>
                        <address> {{ $products[$i]->address }} </address>
                        <p class="mb-0">
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-secondary"></span>
                            <span class="review">({{$products[$i]->reviews}} Reviews)</span>
                        </p>
                    </div>
                </div>

@endfor
            </div>
            <div class="col-lg-6">
                @for($i = 3 ; $i >= (count($products)/2)   ; $i++ )

                    <div class="d-block d-md-flex listing">
                        <a href="listings-single.html" class="img d-block" style="background-image: url('{{ asset('storage/'.$products[$i]->image) }}')"></a>
                        <div class="lh-content">
                            <span class="category">{{ $products[$i]->category->title ?? "empty" }}</span>
                            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                            <h3><a href="listings-single.html">{{ $products[$i]->title }}</a></h3>
                            <address> {{ $products[$i]->address }} </address>
                            <p class="mb-0">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-secondary"></span>
                                <span class="review">({{$products[$i]->reviews}} Reviews)</span>
                            </p>
                        </div>
                    </div>

                @endfor --}}
            </div>
        </div>
    </div>
</div>
