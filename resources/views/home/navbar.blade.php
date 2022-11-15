<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid px-5">
        {{-- Logo --}}
        <a href="/" class="nav-logo">
            <img src="{{ asset('frontend/img/ico/default/logo.svg') }}" alt="">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            {{-- deliver --}}
            <div class="d-flex flex-row justify-content-center align-content-center mx-3 deliver" onclick="popUpDelivery()">
                <div>
                    <img src="{{asset('frontend/img/ico/default/location-off.svg')}}" class="pt-3" alt="">
                </div>
                <div id="deliver-hover" style="min-width: 110px">
                    <p style="font-size:12px; margin-bottom:0">Deliver to
                    <span style="font-weight:bold; font-size: 1vw " class=" d-block">United Kindom</span></p>
                </div>
            </div>
            {{-- Search --}}
            <form class="d-flex my-0" style="width: 68%;" action="/productSearch">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
            </form>
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="inbox-icon ic-size"></div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg-end chat_ul" aria-labelledby="navbarDropdown">
                      <li class="chat_li">
                        <div class="dropdown-item d-flex p-0" href="#">
                            <div class="chat_icon"></div>
                            <div class="chat_data">
                                <div class="chat_title">
                                    Chat
                                </div>
                                <div class="chat_subtit">
                                    Percakapan pribadi Anda
                                </div>
                            </div>
                        </div>
                      </li>
                      <li class="chat_li">
                        <div class="dropdown-item d-flex p-0" href="#">
                            <div class="diskusi_icon"></div>
                            <div class="chat_data">
                                <div class="chat_title">
                                    Diskusi
                                </div>
                                <div class="chat_subtit">
                                    Tanya jawab seputar produk
                                </div>
                            </div>
                        </div>
                      </li>
                      <li class="chat_li">
                        <div class="dropdown-item d-flex p-0" href="#">
                            <div class="ulasan_icon"></div>
                            <div class="chat_data">
                                <div class="chat_title">
                                    Ulasan
                                </div>
                                <div class="chat_subtit">
                                    Berikan penilaian dan ulasan Produk
                                </div>
                            </div>
                        </div>
                      </li>
                      <li class="chat_li">
                        <div class="dropdown-item d-flex p-0" href="#">
                            <div class="bantuan_icon"></div>
                            <div class="chat_data">
                                <div class="chat_title">
                                    Pesan Bantuan
                                </div>
                                <div class="chat_subtit">
                                    Pantau status bantuan dari Master bagasi
                                </div>
                            </div>
                        </div>
                      </li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="notif-icon ic-size"></div>
                    </a>
                    {{-- nav-tabs => nav-link --}}
                    <div class="dropdown-menu dropdown-menu-lg-end nav-tabs my-0"  style="
                    border-top-left-radius: 0;
                    border-top-right-radius: 0;
                  ">
                      <div class="container p-4" style="width: 500px">
                        <ul class="nav nav-tabs row" id="myTab" role="tablist">
                            <li class="nav-item col-6" role="presentation">
                            <button class="nav-link active" id="transaksi-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Transaksi</button>
                            </li>
                            <li class="nav-item col" role="presentation">
                            <button class="nav-link" id="update-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Update</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="transaksi-tab">
                                <div style="width: 100%; height: 200px; background-color: #ffffff" class="container mt-2">
                                    <p>Pembelian</p>

                                    <p>Menunggu Pembayaran</p>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <button type="button" class="btn btn-default btnn-circle mb-4">
                                                    <img src="{{asset('frontend/img/ico/proses/waktu.svg')}}">
                                                </button>
                                                <p style="font-size: 12px" align="center">Menunggu Konfirmasi</p>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-default btnn-circle mb-4">
                                                    <img src="{{asset('frontend/img/ico/proses/proses.svg')}}">
                                                </button>
                                                <p style="font-size: 12px">Sedang Proses</p>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-default btnn-circle mb-4">
                                                    <img src="{{asset('frontend/img/ico/proses/ceklis.svg')}}">
                                                </button>
                                                <p style="font-size: 12px">Siap Dikirim</p>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-default btnn-circle mb-4">
                                                    <img src="{{asset('frontend/img/ico/proses/pesawat.svg')}}">
                                                </button>
                                                <p style="font-size: 12px">Sedang Dikirim</p>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-default btnn-circle mb-4">
                                                    <img src="{{asset('frontend/img/ico/proses/lokasi.svg')}}">
                                                </button>
                                                <p style="font-size: 12px">Sampai Tujuan</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div style="width: 100%; height: auto; background-color:  #ffffff; z-index: -1; position: relative;"  class="container mt-2 d-flex justify-content-center ">
                                   <img src="{{asset('frontend/img/maskot/bgmaskot.svg')}}" style="position: fixed; z-index:-1;" >
                                        <div class="mb_maskot d-flex">
                                        <div class="sleepybagas"></div>
                                        <div class="sleepymasta"></div>
  </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="update-tab">Kosong bray.</div>
                        </div>
                      </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="mycart-icon ic-size"></div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg-end keranjang_ul" aria-labelledby="navbarDropdown">
                        <div class="keranjang_lihatsemua">
                            <div class="col-8">
                                <div class="keranjang_title">
                                    Keranjang(6)
                                </div>
                            </div>
                            <div class="col">
                                <div style="margin-left: 23px">
                                    <a href="">Lihat semua</a>
                                </div>
                            </div>
                        </div>
                        <li class="keranjang_li">
                          <div class="dropdown-item d-flex p-0" href="#">
                                <img src="{{asset('frontend/img/ico/default/profile-default.svg')}}" style="padding-right:5px">
                                <div class="keranjang_data">
                                    <div class="keranjang_title">
                                        Nasi padang serba 12.000
                                    </div>
                                    <div class="keranjang_subtit">
                                        3 Barang (960 g)
                                    </div>
                                </div>
                                <div class="keranjang_harga">
                                    Rp126.000
                                </div>
                          </div>
                        </li>
                        <li class="keranjang_li">
                          <div class="dropdown-item d-flex p-0" href="#">
                                <img src="{{asset('frontend/img/ico/default/profile-default.svg')}}" style="padding-right:5px">
                                <div class="keranjang_data">
                                    <div class="keranjang_title">
                                        Nasi padang serba 12.000
                                    </div>
                                    <div class="keranjang_subtit">
                                        3 Barang (960 g)
                                    </div>
                                </div>
                                <div class="keranjang_harga">
                                    Rp126.000
                                </div>
                          </div>
                        </li>
                        <li class="keranjang_li">
                          <div class="dropdown-item d-flex p-0" href="#">
                                <img src="{{asset('frontend/img/ico/default/profile-default.svg')}}" style="padding-right:5px">
                                <div class="keranjang_data">
                                    <div class="keranjang_title">
                                        Nasi padang serba 12.000
                                    </div>
                                    <div class="keranjang_subtit">
                                        3 Barang (960 g)
                                    </div>
                                </div>
                                <div class="keranjang_harga">
                                    Rp126.000
                                </div>
                          </div>
                        </li>
                        <li class="keranjang_li">
                          <div class="dropdown-item d-flex p-0" href="#">
                                <img src="{{asset('frontend/img/ico/default/profile-default.svg')}}" style="padding-right:5px">
                                <div class="keranjang_data">
                                    <div class="keranjang_title">
                                        Nasi padang serba 12.000
                                    </div>
                                    <div class="keranjang_subtit">
                                        3 Barang (960 g)
                                    </div>
                                </div>
                                <div class="keranjang_harga">
                                    Rp126.000
                                </div>
                          </div>
                        </li>
                      </ul>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <img src="{{asset('frontend/img/ico/default/inbox-off.svg')}}" alt="">
                    </a>
                </li> --}}
            </ul>

            <div class="d-flex flex-row justify-content-center align-content-center" style="text-decoration: none; color:#898989; cursor: pointer;" onclick="popUpLogin()" href="">
               {{-- <a href="{{Auth::logout()}}">Logout</a> --}}
                @if (!Auth::user())
                    <a href="{{route('login')}}" style="color:black;text-decoration:none;">
                        <p style="font-size:12px; margin-bottom: 0">Halo, Masuk</p>
                        <Span style="font-weight:bold; font-size:16.5px;">Akun & Lainnya</Span>
                    </a>
                @else
                <div class="d-flex flex-row justify-content-center align-items-center">
                    <div style="margin: auto 0;">
                        <img src="{{Auth::user()->avatar}}" style="padding-right:5px" class="rounded-circle" width="50px">
                    </div>
                    <div>
                        <p  style="font-size:12px; margin-bottom: 0">Halo, {{Auth::user()->name}}</p>
                    </div>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="btn btn-danger">Logout</button>
                    </form>
                </div>

                @endif
            </div>
        </div>
    </div>
</nav>
