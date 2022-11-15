@extends('layouts.app')
@include('home.navbar')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md p-3">
            {{-- <h3 class="mt-2 mb-4">Search Result for "product"</h3> --}}
            <h3 class="mt-2 mb-4">Brand : {{$brands->name}}</h3>
            <div class="d-flex flex-wrap gap-4 justify-content-center">
              @foreach ($products as $product)
              <div class="card card-product">
                  <img src="{{ asset('image/uploads/products/'.$product->_ProductImages->image) }}" class="card-img-top card-img-product" alt="product">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="">
                        <p class="card-title product-name">{{$product->name}}</p>
                        <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                        <p class="price">Rp. {{number_format($product->original_price,2,',','.');}},-</p>
                        <div class="d-flex align-items-center discount">
                          <div class="discount-percentage">50%</div>
                          <div class="discount-price text-muted">Rp. {{number_format($product->selling_price,2,',','.');}},-</div>
                        </div>
                        <div class="d-flex align-items-center conclusion-product">
                          <i class="bi bi-star-fill text-warning"></i>
                          <p class="rating-text text-muted">4.5</p>
                          |
                          <p class="rating-text text-muted sold">terjual 1260</p>
                        </div>
                      </div>

                      <div class="d-flex flex-column align-items-center justify-content-between">
                        <p class="weight-product">500g</p>
                        <div class="d-flex flex-column product-card-icon">
                          <div>
                            <img src="{{ asset('frontend/img/ico/wishlist/wishlist-off.svg') }}" alt=""
                            onclick="toggleWishlist(this)"
                            onmouseover="hoverWishlist(this)"
                            onmouseout="outWishlist(this)"
                            >
                          </div>
                          <div>
                            <img src="{{ asset('frontend/img/ico/addcart/addcart-off.svg') }}" alt="" 
                            onclick="toggleCart(this)"
                            onmouseover="hoverCart(this)"
                            onmouseout="outCart(this)"
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              @endforeach
            </div>
        </div>
    </div>
  </div>
@endsection