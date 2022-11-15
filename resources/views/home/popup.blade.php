
  {{-- popup lokasi --}}
  <div class="bg-popContainer" id="popUpDelivery">
    <div class="pop-box">
      <div class="card-header">
        Pilih Negara Tujuan
      </div>
      <div class="d-flex flex-column box-body">
          <div class="mb_maskot d-flex">
            <div class="popup-bagas"></div>
            <div class="popup-mastah"></div>
          </div>
            <div class="btn-group pop-dd mb-3">
              <div class="btn btn-outline-secondary d-flex justify-content-between" data-bs-toggle="dropdown" aria-expanded="false">
                <span>Daftar Negara Tujuan</span>
                <i class="fa-sharp fa-solid fa-caret-down"></i>
              </div>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><button class="dropdown-item" type="button">Indonesia</button></li>
                <li><button class="dropdown-item" type="button">Indonesia</button></li>
                <li><button class="dropdown-item" type="button">Indonesia</button></li>
                <li><button class="dropdown-item" type="button">Indonesia</button></li>
                <li><button class="dropdown-item" type="button">Indonesia</button></li>
                <li><button class="dropdown-item" type="button">Indonesia</button></li>
              </ul>
            </div>
            <div class="d-flex justify-content-end">
              <button type="button" class="btn btn-danger">Done</button>
            </div>
      </div>
     

      <div id="btn-exit" class="btn x_btn" onclick="closePopUpDelivery()">x</div>
    </div>
  </div>
  
  {{-- popup login --}}
  <div class="bg-popContainer" id="popUpLogin">
    <section class="vh-80">
      <div class="container py-5">
        <div style="width:500px;">
          <div class="row d-flex justify-content-center align-items-center">
            <div class="col-10 col-md-11">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                  <h2 class="mb-2"><b>Halo</b></h2>
                  <h6 class="mb-3">Masuk ke Masterbagasi atau <a class="font-color:blue;" onclick="popUpRegister()">Daftar</a></h6>
                  <div class="form-outline mb-2">
                    <form class="container">
                      <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="Email Atau Username">
                        <label for="floatingInput"> Email Atau Username</label>
                      </div>
                      <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                      </div>
                      <hr class="my-3">
                      <div class="pb-2">
                        <button class="button_slide slide_right" style="width:100%; background-color: #e52c2c;"
                        type="submit"><i class="fab fa-google me-2"></i> Lanjut Dengan Google</button>
                      </div>
                      <div class="pb-2">
                        <button class="button_slide slide_right" style="width:100%; background-color: #3b5998;"
                        type="submit"><i class="fab fa-facebook-f me-2"></i> Lanjut Dengan Facebook</button>
                      </div>
                      <div>
                        <button class="button_slide slide_right" style="width:100%; background-color: #09090a;"
                        type="submit"><i class="fab fa-apple me-2"></i> Lanjut Dengan Apple ID</button>
                      </div>
                    </form>
                    {{-- <a href="{{Auth::logout()}}">Logout</a> --}}
                    <div class="col">
                      <!-- Simple link -->
                      <a href="#!">Lupa Password?</a>
                    </div>
                  </div>         
                </div>
                <div id="btn-exit" class="btn x-btn" onclick="closePopUpLogin()"><span style="color: #FF4200">X</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  {{-- popup register --}}
  <div class="bg-popContainer" id="popUpRegister">
    <section class="vh-80">
      <div class="container py-5">
        <div style="width:500px;">
          <div class="row d-flex justify-content-center align-items-center">
            <div class="col-10 col-md-11">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                  <h2 class="mb-2"><b>Halo</b></h2>
                  <h6 class="mb-3">Masuk ke Masterbagasi atau <a href="#">Daftar</a></h6>
                  <div class="form-outline mb-2">
                    <form class="container">
                      <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="Email Atau Username">
                        <label for="floatingInput"> Email Atau Username</label>
                      </div>
                      <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                      </div>
                      <div>
                        <button class="button_slide slide_right" style="width:100%; background-color: #216fe2cd;"
                        type="submit"><i class="fab fa fa-user me-2"></i>Masuk</button>
                      </div>
                    </form>
                    <div class="col">
                      <!-- Simple link -->
                      <a href="#!">Lupa Password?</a>
                    </div>
                  </div>         
                </div>
                <div id="btn-exit" class="btn x-btn" onclick="closePopUpRegister()"><span style="color: #FF4200">X</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  {{-- popup peta --}}
  <div class="bg-popContainer" id="popUpPeta">
      <div class="container py-5">
          <div class="row d-flex justify-content-center align-items-center">
            <div class="col-10 col-md-11">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="carddd pt-4">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="pup-line mt-1">
                        <h4>Produk Dari <span style="color: #FF4200" id="produk-daerah"></span></h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body p-5 d-flex gap-4 flex-wrap overflow-auto" style="max-height: 40em">
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
                <div id="btn-exit" class="btn x-btn" onclick="closePopUpPeta()"><span style="color: #FF4200">X</span></div>
              </div>
            </div>
          </div>
      </div>
  </div>