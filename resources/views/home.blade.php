@extends('layouts.app')
@include('home.navbar')
@section('content')

@include('home.banner')

  {{-- category
  <section class="cat-wrap mt-4">
    <div class="bg-cat">
      <p class="px-4" style="letter-spacing: 3px"><span class="fw-bold" style="font-size: 40px;">Semakin Mudah.</span>  Apapun yang kamu kangenin dari Indonesia, kami bawain.</p>
    </div>
    <div class="container mb-5">
      <div class="bks-cat">
        <div id="carou-cat" class="owl-carousel owl-theme">
          @foreach ($categories as $category)
          <a href="{{url('category/'.$category->slug)}}">
          <div class="d-flex flex-column">
            <div class="ms-2 mx-2 card">
              <img src="{{asset('image/uploads/category/'.$category->image)}}" class="card-img-top"  >
            </div>
           <a class="btn btn-danger mx-5">{{$category->name}}</a>
          </div>
          </a>
          @endforeach
        </div>
      </div>
    </div>
  </section> --}}

  {{-- category --}}
  <section class="cat-wrap mt-4">
    <div class="bg-cat">
      <p class="px-4" style="font-family: Inter; font-size:28px; font-weight:100px; letter-spacing: -1px; position:relative; top:20px"><span style="font-family: Gantari; font-size: 47px; font-weight:500; letter-spacing: -1px">Semakin Mudah.</span>  Apapun yang kamu kangenin dari Indonesia, ada disini.</p>
    </div>
    <div class="container mb-5">
      <div class="bks-cat">
        <div id="carou-cat" class="owl-carousel owl-theme">
          @foreach ($categories as $category)
          <div class="d-flex flex-column align-items-center">
            <a href="{{url('category/'.$category->slug)}}">
            <div class="card">
              <img src="{{asset('image/uploads/category/'.$category->image)}}" style="width: auto; height:100%">
            </div>
           <a class="btn btn-cat mx-auto p-2" style="font-family:Inter; font-weight: 500; font-size:15px; width: 80%; border-left: 3px solid #fda31b">{{$category->name}}</a>
          </a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  {{-- Brand Asli Indonesia --}}
  <section class="categories mt-4">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h4>Brand Asli Indonesia</h4>
        </div>
      </div>
    </div>
    <div id="carou-cat2" class="owl-carousel owl-theme cat-cat">
      @foreach ($brands as $brand)
      <a href="{{url('brands/'.$brand->slug)}}">
      <div class="ms-2 me-2 d-flex flex-column">
        <div class="circle brand-img">
          <img src="{{asset('image/uploads/brands/'.$brand->image)}}">
        </div>
        <span class="text-center mt-4" style="font-size: 18px; color:black;">{{$brand->name}}</span>
      </div>
    </a>
      @endforeach
    </div>
  </section>

  {{-- Lagi Viral --}}
  <section class="viral-wrap mt-4">
    <div class="bg-cat">
      <p class="px-4" style="letter-spacing: 3px"><span class="fw-bold" style="font-size: 40px;">Yuk Ikutan.</span>  Yang lagi viral di Indonesia</p>
    </div>
    <div class="container mb-5">
      <div class="bks-cat">
        <div id="carou-cat3" class="hashtag owl-carousel owl-theme">
          <div class="ms-2 me-2">
            <div class="d-flex flex-wrap gap-4">
              <div class="card card-product">
                  <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="">
                        <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                        <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                        <p class="price">Rp 7.500,-</p>
                        <div class="d-flex align-items-center discount">
                          <div class="discount-percentage">50%</div>
                          <div class="discount-price text-muted">Rp 15.000,-</div>
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
            </div>
          </div>
          <div class="ms-2 me-2">
            <div class="d-flex flex-wrap gap-4">
              <div class="card card-product">
                  <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="">
                        <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                        <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                        <p class="price">Rp 7.500,-</p>
                        <div class="d-flex align-items-center discount">
                          <div class="discount-percentage">50%</div>
                          <div class="discount-price text-muted">Rp 15.000,-</div>
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
            </div>
          </div>
          <div class="ms-2 me-2">
            <div class="d-flex flex-wrap gap-4">
              <div class="card card-product">
                  <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="">
                        <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                        <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                        <p class="price">Rp 7.500,-</p>
                        <div class="d-flex align-items-center discount">
                          <div class="discount-percentage">50%</div>
                          <div class="discount-price text-muted">Rp 15.000,-</div>
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
            </div>
          </div>
          <div class="ms-2 me-2">
            <div class="d-flex flex-wrap gap-4">
              <div class="card card-product">
                  <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="">
                        <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                        <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                        <p class="price">Rp 7.500,-</p>
                        <div class="d-flex align-items-center discount">
                          <div class="discount-percentage">50%</div>
                          <div class="discount-price text-muted">Rp 15.000,-</div>
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
            </div>
          </div>
          <div class="ms-2 me-2">
            <div class="d-flex flex-wrap gap-4">
              <div class="card card-product">
                  <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="">
                        <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                        <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                        <p class="price">Rp 7.500,-</p>
                        <div class="d-flex align-items-center discount">
                          <div class="discount-percentage">50%</div>
                          <div class="discount-price text-muted">Rp 15.000,-</div>
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
            </div>
          </div>
          <div class="ms-2 me-2">
            <div class="d-flex flex-wrap gap-4">
              <div class="card card-product">
                  <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="">
                        <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                        <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                        <p class="price">Rp 7.500,-</p>
                        <div class="d-flex align-items-center discount">
                          <div class="discount-percentage">50%</div>
                          <div class="discount-price text-muted">Rp 15.000,-</div>
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Banner panjang klik --}}
  <section class="banr mt-4">
    <div id="BannerPanjang" class="owl-carousel owl-theme">
      <div class="item">
        <img src="{{asset('frontend/img/banner/banjang.png')}}" class="d-block w-100">
      </div>
      <div class="item">
        <img src="{{asset('frontend/img/banner/banjang.png')}}" class="d-block w-100">
      </div>
      <div class="item">
        <img src="{{asset('frontend/img/banner/banjang.png')}}" class="d-block w-100">
      </div>
    </div>
    <div class="banr-btn popup-banjang" type="button" onclick="popUpBanjang()">
      Cek tarif ke Negara lainnya
    </div>
    <div class="banjang-pbox" id="myPopup">
      <div class="mt-2">
        <h5 style="font-weight: 600">View our delivery options and rates</h5>
      </div>
      <div class="row mt-4">
        <div class="col-6">
          <p class="m-0">Negara Asal</p>
          <div class="btn-banjang" width="100%">
            Indonesia
          </div>
        </div>
        <div class="col-6">
          <p class="m-0">Negara Tujuan</p>
          <select class="form-select">
            <option selected>Pilih negara tujuan</option>
            <option value="1">Indonesia</option>
            <option value="2">Indonesia</option>
            <option value="3">Indonesia</option>
          </select>
        </div>

        <div id="pop-banjang" class="container pop-banjang" style="color: #fff">
          <div class="row mt-5 pb-3">
            <div class="col-md">
              <div class="card text-center" style="background-color: #00A9EA" >
                <div class="card-header">Air Fraight</div>
              </div>
            </div>
          </div>
          <div class="row d-flex flex-row justify-content-center">
            <div class="col-md">
              <div class="card text-center" >
                <div class="card-header" style="background-color: #F9B973">1 Kg</div>
                <div class="card-bodyy">
                  <h5 class="card-title">Rp 450,000</h5>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card " >
                <div class="card-header" style="background-color: #FAA863">2 Kg</div>
                <div class="card-bodyy">
                  <h5 class="card-title">Rp 450,000</h5>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card text-center" >
                <div class="card-header" style="background-color: #FB9752">3 Kg</div>
                <div class="card-bodyy">
                  <h5 class="card-title">Rp 450,000</h5>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card text-center" >
                <div class="card-header" style="background-color: #FC8642">4 Kg</div>
                <div class="card-bodyy">
                  <h5 class="card-title">Rp 450,000</h5>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card text-center" >
                <div class="card-header" style="background-color: #FC7531">5 Kg</div>
                <div class="card-bodyy">
                  <h5 class="card-title">Rp 450,000</h5>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card text-center" >
                <div class="card-header" style="background-color: #FD6421">6 Kg</div>
                <div class="card-bodyy">
                  <h5 class="card-title">Rp 450,000</h5>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card text-center" >
                <div class="card-header" style="background-color: #FE5310">10 Kg</div>
                <div class="card-bodyy">
                  <h5 class="card-title">Rp 450,000</h5>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card text-center" >
                <div class="card-header" style="background-color: #FF4200">16 Kg</div>
                <div class="card-bodyy">
                  <h5 class="card-title">Rp 450,000</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="row pt-3">
            <div class="col-md">
              <div class="card text-center " style="background-color: #25258C;" >
                <div class="card-header">1 Kg</div>
                <div class="card-bodyy">
                  <h5 class="card-title mx-auto">Rp 450,000</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  {{-- Dapur --}}
  <section class="tag-wrap mt-4">
    <div class="bg-cat">
      <p class="px-5 pt-3 fw-bold" style="letter-spacing: 3px; font-size: 50px;">Dapur</p>
    </div>
    <div class="dapur-btn" type="button" onclick="popUpBanner()">
      Lihat selengkapnya
    </div>
    <div class="container">
      <div class="d-flex" style="position:absolute; top: 20%; right:1%">
        <div class="mx-4">
          <div class=" brand-img">
            <img src="{{asset('frontend/img/produk/dapur/dapur1.png')}}">
          </div>
        </div>
        <div class="mx-4">
          <div class=" brand-img">
            <img src="{{asset('frontend/img/produk/dapur/dapur2.png')}}">
          </div>
        </div>
        <div class="mx-4">
          <div class=" brand-img">
            <img src="{{asset('frontend/img/produk/dapur/dapur3.png')}}">
          </div>
        </div>
        <div class="mx-4">
          <div class=" brand-img">
            <img src="{{asset('frontend/img/produk/dapur/dapur4.png')}}">
          </div>
        </div>
        <div class="mx-4">
          <div class=" brand-img">
            <img src="{{asset('frontend/img/produk/dapur/dapur5.png')}}">
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Lagi Viral2 --}}
  <section class="viral-wrap2 mt-4">
    <div class="bg-cat">
      <p class="px-4" style="letter-spacing: 3px"><span class="fw-bold" style="font-size: 40px;">Sajian.</span>  Cemilan Rebahan</p>
    </div>
    <div class="container mb-5">
      <div class="bks-cat">
        <div id="carou-cat4" class="hashtag owl-carousel owl-theme">
          <div class="ms-2 me-2">
            <div class="d-flex flex-wrap gap-4">
              <div class="card card-product">
                  <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="">
                        <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                        <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                        <p class="price">Rp 7.500,-</p>
                        <div class="d-flex align-items-center discount">
                          <div class="discount-percentage">50%</div>
                          <div class="discount-price text-muted">Rp 15.000,-</div>
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
            </div>
          </div>
          <div class="ms-2 me-2">
            <div class="d-flex flex-wrap gap-4">
              <div class="card card-product">
                  <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="">
                        <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                        <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                        <p class="price">Rp 7.500,-</p>
                        <div class="d-flex align-items-center discount">
                          <div class="discount-percentage">50%</div>
                          <div class="discount-price text-muted">Rp 15.000,-</div>
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
            </div>
          </div>
          <div class="ms-2 me-2">
            <div class="d-flex flex-wrap gap-4">
              <div class="card card-product">
                  <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="">
                        <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                        <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                        <p class="price">Rp 7.500,-</p>
                        <div class="d-flex align-items-center discount">
                          <div class="discount-percentage">50%</div>
                          <div class="discount-price text-muted">Rp 15.000,-</div>
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
            </div>
          </div>
          <div class="ms-2 me-2">
            <div class="d-flex flex-wrap gap-4">
              <div class="card card-product">
                  <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="">
                        <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                        <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                        <p class="price">Rp 7.500,-</p>
                        <div class="d-flex align-items-center discount">
                          <div class="discount-percentage">50%</div>
                          <div class="discount-price text-muted">Rp 15.000,-</div>
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
            </div>
          </div>
          <div class="ms-2 me-2">
            <div class="d-flex flex-wrap gap-4">
              <div class="card card-product">
                  <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="">
                        <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                        <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                        <p class="price">Rp 7.500,-</p>
                        <div class="d-flex align-items-center discount">
                          <div class="discount-percentage">50%</div>
                          <div class="discount-price text-muted">Rp 15.000,-</div>
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
            </div>
          </div>
          <div class="ms-2 me-2">
            <div class="d-flex flex-wrap gap-4">
              <div class="card card-product">
                  <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="">
                        <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                        <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                        <p class="price">Rp 7.500,-</p>
                        <div class="d-flex align-items-center discount">
                          <div class="discount-percentage">50%</div>
                          <div class="discount-price text-muted">Rp 15.000,-</div>
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- bundling --}}
  <div class="bundling mt-4">
    <div class="bundle">
      <div class="slider pt-3">
        <div class="bks-bundle">
          <div id="bundle-caption">
            <h2 style="font-size: 65px; font-weight: 600; color: #00428C">Bundling <br> <span>Hari Raya</span></h2>
          </div>
          <div id="bundle" class="owl-carousel owl-theme pt-5">
            <div class="bundle-img">
              <div class="okay">
                <img src="{{asset('frontend/img/bundling/fitri.png')}}"
                    alt="">
              </div>
            </div>
            <div class="bundle-img">
              <div class="okay">
                <img src="{{asset('frontend/img/bundling/summer.png')}}"
                    alt="">
              </div>
            </div>
            <div class="bundle-img">
              <div class="okay">
                <img src="{{asset('frontend/img/bundling/winter.png')}}"
                    alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Video menarik --}}
  <section class="reels mt-4">
    <div class="section-title">
      <h2 style="font-family: Gantari; font-size: 40px; font-weight:500; letter-spacing: -1px">Video Menarik<br>Untuk Kamu</h2>
    </div>
    <div id="carocaro" class="owl-carousel owl-theme py-5" style="margin-left: 100px; width:923px">
      <div class="ms-2 me-2">
        <div class="video1" >
          <iframe width="270" height="481" style="border-radius: 5px;" src="https://www.youtube.com/embed/JpBvYhcHaK0" title="Tips menerima paket dari Indonesia yang dikirim oleh Master Bagasi✨🥰  #kirimpaketkeluarnegeri" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="ms-2 me-2">
        <div class=" video1">
          <iframe width="270" height="481"  style="border-radius: 5px;" src="https://www.youtube.com/embed/dWKPPHZwdcY" title="KEBANJIRAN BASO ACI SAMI RAOS❤️‍🔥 #kirimpaketkeluarnegeri #jasatitipindonesia #umkm #jastipmurah" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="ms-2 me-2">
        <div class=" video1">
          <iframe width="270" height="481" style="border-radius: 5px;" src="https://www.youtube.com/embed/mm8FQujQ1Ig" title="MAKAN 3 MIE SEDAP "TASTY" SEKALI MAKAN?!!!😱 PERUT SAMPE MAU MELEDAK!! #viralshorts #viral #shorts" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="ms-2 me-2">
        <div class=" video1">
          <iframe width="270" height="481" style="border-radius: 5px;" src="https://www.youtube.com/embed/Z8KFHkuH0_I" title="The one and only "Master Bagasi"😎 #kirimpaketkeluar negeri #virashorts  #jasatitip #jastipmurah" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="ms-2 me-2">
        <div class=" video1">
          <iframe width="270" height="481" style="border-radius: 5px;" src="https://www.youtube.com/embed/SIH2keG9Tn4" title="14 Juli 2022" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
  </section>

  {{-- Dapur2 --}}
  <section class="tag-wrap2 mt-4">
    <div class="bg-cat">
      <p class="px-5 pt-3 fw-bold" style="letter-spacing: 3px; font-size: 50px;">Dapur</p>
    </div>
    <div class="dapur-btn" type="button" onclick="popUpBanner()">
      Lihat selengkapnya
    </div>
    <div class="container">
      <div class="d-flex" style="position:absolute; top: 20%; right:1%">
        <div class="mx-4">
          <div class=" brand-img">
            <img src="{{asset('frontend/img/produk/dapur/dapur1.png')}}">
          </div>
        </div>
        <div class="mx-4">
          <div class=" brand-img">
            <img src="{{asset('frontend/img/produk/dapur/dapur2.png')}}">
          </div>
        </div>
        <div class="mx-4">
          <div class=" brand-img">
            <img src="{{asset('frontend/img/produk/dapur/dapur3.png')}}">
          </div>
        </div>
        <div class="mx-4">
          <div class=" brand-img">
            <img src="{{asset('frontend/img/produk/dapur/dapur4.png')}}">
          </div>
        </div>
        <div class="mx-4">
          <div class=" brand-img">
            <img src="{{asset('frontend/img/produk/dapur/dapur5.png')}}">
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Lagi Viral3 --}}
  <section class="viral-wrap3 mt-4">
    <div class="bg-cat">
      <p class="px-4" style="letter-spacing: 3px"><span class="fw-bold" style="font-size: 40px;">Kopi & Teh.</span>  Seduhan Kehangatan</p>
    </div>
    <div class="container mb-5">
      <div class="bks-cat">
        <div id="carou-cat5" class="hashtag owl-carousel owl-theme">
          <div class="ms-2 me-2">
            <div class="d-flex flex-wrap gap-4">
              <div class="card card-product">
                  <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="">
                        <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                        <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                        <p class="price">Rp 7.500,-</p>
                        <div class="d-flex align-items-center discount">
                          <div class="discount-percentage">50%</div>
                          <div class="discount-price text-muted">Rp 15.000,-</div>
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
            </div>
          </div>
          <div class="ms-2 me-2">
            <div class="d-flex flex-wrap gap-4">
              <div class="card card-product">
                  <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="">
                        <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                        <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                        <p class="price">Rp 7.500,-</p>
                        <div class="d-flex align-items-center discount">
                          <div class="discount-percentage">50%</div>
                          <div class="discount-price text-muted">Rp 15.000,-</div>
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
            </div>
          </div>
          <div class="ms-2 me-2">
            <div class="d-flex flex-wrap gap-4">
              <div class="card card-product">
                  <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="">
                        <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                        <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                        <p class="price">Rp 7.500,-</p>
                        <div class="d-flex align-items-center discount">
                          <div class="discount-percentage">50%</div>
                          <div class="discount-price text-muted">Rp 15.000,-</div>
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
            </div>
          </div>
          <div class="ms-2 me-2">
            <div class="d-flex flex-wrap gap-4">
              <div class="card card-product">
                  <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="">
                        <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                        <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                        <p class="price">Rp 7.500,-</p>
                        <div class="d-flex align-items-center discount">
                          <div class="discount-percentage">50%</div>
                          <div class="discount-price text-muted">Rp 15.000,-</div>
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
            </div>
          </div>
          <div class="ms-2 me-2">
            <div class="d-flex flex-wrap gap-4">
              <div class="card card-product">
                  <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="">
                        <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                        <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                        <p class="price">Rp 7.500,-</p>
                        <div class="d-flex align-items-center discount">
                          <div class="discount-percentage">50%</div>
                          <div class="discount-price text-muted">Rp 15.000,-</div>
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
            </div>
          </div>
          <div class="ms-2 me-2">
            <div class="d-flex flex-wrap gap-4">
              <div class="card card-product">
                  <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="">
                        <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                        <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                        <p class="price">Rp 7.500,-</p>
                        <div class="d-flex align-items-center discount">
                          <div class="discount-percentage">50%</div>
                          <div class="discount-price text-muted">Rp 15.000,-</div>
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- peta --}}
  <section class="categories mt-4">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
        <h4>Search by Map</h4>
        </div>
      </div>
    </div>
    @include('home.peta')
  </section>

  {{-- berita --}}
  <section class="categories mt-4">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h4>Berita & Youtube</h4>
        </div>
      </div>
    </div>
    @include('home.news')
  </section>

  {{-- testimoni --}}
  <section id="slider" class="my-4">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h4>Testimoni</h4>
        </div>
      </div>
    </div>
    <div class="testi">
      <div class="slider">
        <div id="testi" class="owl-carousel owl-theme mt-3">
          <div class="item">
            <div class="card mb-3 mx-auto" style="width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <div class="img-card">
                    <img src="{{asset('frontend/img/testi/suban.jpg')}}" alt="">
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <div class="testimonial mt-4 mb-2">
                      Subhan ganteng anaknya pak arifin bocah bekasi paling sangar
                    </div>
                    <div class="name">
                      Suban Gokil
                    </div>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card mb-3 mx-auto" style="width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <div class="img-card">
                    <img src="{{asset('frontend/img/testi/suban.jpg')}}" alt="">
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <div class="testimonial mt-4 mb-2">
                      Subhan ganteng anaknya pak arifin bocah bekasi paling sangar
                    </div>
                    <div class="name">
                      Suban Gokil
                    </div>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card mb-3 mx-auto" style="width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <div class="img-card">
                    <img src="{{asset('frontend/img/testi/suban.jpg')}}" alt="">
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <div class="testimonial mt-4 mb-2">
                      Subhan ganteng anaknya pak arifin bocah bekasi paling sangar
                    </div>
                    <div class="name">
                      Suban Gokil
                    </div>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card mb-3 mx-auto" style="width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <div class="img-card">
                    <img src="{{asset('frontend/img/testi/suban.jpg')}}" alt="">
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <div class="testimonial mt-4 mb-2">
                      Subhan ganteng anaknya pak arifin bocah bekasi paling sangar
                    </div>
                    <div class="name">
                      Suban Gokil
                    </div>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card mb-3 mx-auto" style="width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <div class="img-card">
                    <img src="{{asset('frontend/img/testi/suban.jpg')}}" alt="">
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <div class="testimonial mt-4 mb-2">
                      Subhan ganteng anaknya pak arifin bocah bekasi paling sangar
                    </div>
                    <div class="name">
                      Suban Gokil
                    </div>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card mb-3 mx-auto" style="width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <div class="img-card">
                    <img src="{{asset('frontend/img/testi/suban.jpg')}}" alt="">
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <div class="testimonial mt-4 mb-2">
                      Subhan ganteng anaknya pak arifin bocah bekasi paling sangar
                    </div>
                    <div class="name">
                      Suban Gokil
                    </div>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include('home.popup')
@endsection
