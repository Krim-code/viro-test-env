$(document).ready(function(){
    $('.offer-slider').slick({
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000,
        prevArrow: `<button type="button" class="slick-prev">
            <i class="fa fa-angle-left"></i>
        </button>`,
        nextArrow: `<button type="button" class="slick-next">
            <i class="fa fa-angle-right"></i>
        </button>`,
        responsive: [
            {
              breakpoint: 576,
              settings: {
                arrows: false,
                dots: true
              }
            },
        ]
    });
});