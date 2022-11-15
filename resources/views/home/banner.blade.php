<!-- Carousel -->
<div class="row bannerAtas">
  <div class="col-sm-8">
    <div id="carouselBanner" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="4000">
      <div class="carousel-inner bnr-size">
        <div class="carousel-item active">
          <img src="{{asset('frontend/img/banner/banner1.jpg')}}" class="img-edit" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('frontend/img/banner/banner2.jpg')}}" class="img-edit" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('frontend/img/banner/banner3.jpg')}}" class="img-edit" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('frontend/img/banner/banner4.jpg')}}" class="img-edit" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('frontend/img/banner/banner5.jpg')}}" class="img-edit" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('frontend/img/banner/banner6.jpg')}}" class="img-edit" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanner" data-bs-slide="prev">
        <span aria-hidden="true"><i class='fa fa-angle-left' style="font-size: 30px; color:black"></i></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselBanner" data-bs-slide="next">
        <span aria-hidden="true"><i class='fa fa-angle-right' style="font-size: 30px; color:black"></i></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <div class="col-sm">
      <video
        id="my-video"
        class="video-js vjs-tech"
        autoplay="true"
        loop
        controls
        preload="auto"
        poster="MY_VIDEO_POSTER.jpg"
        data-setup="{}"
        style="width:100%; height:100%;">
        <source src="{{asset('frontend/vid/web.mp4')}}" type="video/mp4" />
      </video>
  </div>
</div>
<!-- Carousel -->