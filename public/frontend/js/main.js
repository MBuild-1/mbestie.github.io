function popUpBanner(e){
    alert('belom ada')
}


$('#testi').owlCarousel({
    autoplay: false,
    autoplayTimeout: 3000,
    autoplayHoverPause: false,
    items: 2,
    stagePadding: 145,
    center: true,
    nav: false,
    dots: false,
    loop: true,
});


$(document).ready(function(){
    var owl = $('#bundle').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        items:2,
        navText:["<div class='nav-btn prev-slide'><i class='fa fa-angle-left'></i></div>","<div class='nav-btn next-slide'><i class='fa fa-angle-right'></i></div>"],
        rtl:true,
        smartSpeed:1200,
    });

    owl.on('initialized.owl.carousel', function(event) {
        setTimeout(function() {
            const act = $('#bundle .owl-item.active').eq(0);
            if(act) {
                act.addClass('ayam')
            }
            const act2 = $('#bundle .owl-item.active').eq(1);
            if(act2) {
                act2.addClass('bebek')
            }
        },1)
    });

    owl.trigger('initialized.owl.carousel')
    owl.on('changed.owl.carousel', function(event) {
        setTimeout(function() {
            const act = $('#bundle .owl-item.active').eq(0);
            if(act) {
                $(".owl-item").removeClass('ayam')
                act.addClass('ayam')
            }
            const act2 = $('#bundle .owl-item.active').eq(1);
            if(act2) {
                $(".owl-item").removeClass('bebek')
                act2.addClass('bebek')
            }
        },1)
    });
});



$('#BannerPanjang').owlCarousel({
    rtl:true,
    nav: false,
    dots: false,
    loop: true,
    autoplay: true,
    autoplayTimeout:3000,

    items : 1,
    itemsDesktop : false,
    itemsDesktopSmall : false,
    itemsTablet: false,
    itemsMobile : false
});

// owl carousel product
$('#carou-cat').owlCarousel({
    center: false,
    loop:true,
    stagePadding: 50,
    nav:true,
    dots: false,
    navText:["<div class='nav-btn prev-slide'><i class='fa fa-angle-left'></i></div>","<div class='nav-btn next-slide'><i class='fa fa-angle-right'></i></div>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});

$('#carou-cat2').owlCarousel({
    stagePadding: 50,
    loop:true,
    center:false,
    margin:20,
    nav:true,
    dots: false,
    navText:["<div class='nav-btn prev-slide'><i class='fa fa-angle-left'></i></div>","<div class='nav-btn next-slide'><i class='fa fa-angle-right'></i></div>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});

$('.hashtag').owlCarousel({
    stagePadding:20,
    nav:true,
    dots:false,
    navText:["<div class='nav-btn prev-slide'><i class='fa fa-angle-left'></i></div>","<div class='nav-btn next-slide'><i class='fa fa-angle-right'></i></div>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});


// js Carocaro
$('#carocaro').owlCarousel({
    stagePadding: 9,
    center:false,
    nav:true,
    dots: false,
    navText:["<div class='nav-btn prev-slide'><i class='fa fa-angle-left'></i></div>","<div class='nav-btn next-slide'><i class='fa fa-angle-right'></i></div>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:4
        },
        1000:{
            items:3
        }
    }
});


// pop up delivery
function popUpDelivery(e){
    document.getElementById('popUpDelivery').style.display = "flex";
    document.body.style.overflow = 'hidden';
}

const closePopUpDelivery = () => {
    document.getElementById('popUpDelivery').style.display = "none";
    document.body.style.overflow = 'auto';
}

// pop up login
function popUpLogin(e){
    document.getElementById('popUpLogin').style.display = "flex";
    document.body.style.overflow = 'hidden';
}

const closePopUpLogin = () => {
    document.getElementById('popUpLogin').style.display = "none";
    document.body.style.overflow = 'auto';
}

function popUpRegister(e){
    document.getElementById('popUpRegister').style.display = "flex";
    document.getElementById('popUpLogin').style.display = "none";
    document.body.style.overflow = 'hidden';
}

const closePopUpRegister = () => {
    document.getElementById('popUpRegister').style.display = "none";
    document.body.style.overflow = 'auto';
}


// petaPopUp
$('.mapnih a').on('click', function (e) {
    e.preventDefault()
    document.getElementById('popUpPeta').style.display = 'flex';
    document.body.style.overflow = 'hidden';

    var daerah =  $(".mapnih a:focus").attr("xlink:title");
    document.getElementById('produk-daerah').innerHTML = daerah;
    // alert($(".mapnih a:focus").attr("xlink:title"));
});

const closePopUpPeta = () => {
    document.getElementById('popUpPeta').style.display = "none";
    document.body.style.overflow = 'auto';
}



// card product
$(function () {
    $(".product-name").each(function (i) {
        len = $(this).text().length;
        if (len > 40) {
            $(this).text($(this).text().substring(0, 40) + "...");
        }
    });
});

const toggleCart = (e) => {
    if (
        e.src.match("frontend/img/ico/addcart/addcart-off.svg") ||
        e.src.match("frontend/img/ico/addcart/addcart-hover.svg")
    ) {
        e.src = "frontend/img/ico/addcart/addcart-aktif.svg";
    } else {
        e.src = "frontend/img/ico/addcart/addcart-off.svg";
    }
};

const hoverCart = (e) => {
    if (!e.src.match("frontend/img/ico/addcart/addcart-aktif.svg")) {
        e.src = "frontend/img/ico/addcart/addcart-hover.svg";
    }
};

const outCart = (e) => {
    if (!e.src.match("frontend/img/ico/addcart/addcart-aktif.svg")) {
        e.src = "frontend/img/ico/addcart/addcart-off.svg";
    }
};

const toggleWishlist = (e) => {
    if (
        e.src.match("frontend/img/ico/wishlist/wishlist-off.svg") ||
        e.src.match("frontend/img/ico/wishlist/wishlist-hover.svg")
    ) {
        e.src = "frontend/img/ico/wishlist/wishlist-aktif.svg";
    } else {
        e.src = "frontend/img/ico/wishlist/wishlist-off.svg";
    }
};

const hoverWishlist = (e) => {
    if (!e.src.match("frontend/img/ico/wishlist/wishlist-aktif.svg")) {
        e.src = "frontend/img/ico/wishlist/wishlist-hover.svg";
    }
};

const outWishlist = (e) => {
    if (!e.src.match("frontend/img/ico/wishlist/wishlist-aktif.svg")) {
        e.src = "frontend/img/ico/wishlist/wishlist-off.svg";
    }
};

document.querySelector(".card-product").onclick = (e) => {
    if (document.querySelector(".product-card-icon").contains(e.target)) {
        return;
    } else {
        console.log("card product click");
    }
};
// card product end

// notif lonceng
$(".dropdown-menu").on("click", function (e) {
    e.stopPropagation();
});

$('#deliver-hover').hover(function () {
        // over
        $("#deliver-hover p").css({"color": "#000"});
        $("#deliver-hover span").css({"color": "#FF4200"});

    }, function () {
        // out
        $("#deliver-hover p").css({"color": "#898989"});
        $("#deliver-hover span").css({"color": "#898989"});
    }
);

const mainImg = document.getElementById("mainImgProd");
const smallimg = document.getElementsByClassName("small-img");

Array.from(smallimg).forEach((e) => {
    e.addEventListener("click", () => {
        mainImg.src = e.src;
    });
});

// banjang popup

$('#myPopup').on("click"), function (e){
    e.stopPropagation();
}

function popUpBanjang() {
    const popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
