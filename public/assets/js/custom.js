$(document).ready(function () {

    /**********To Top**********/
    $(function(){
        $(document).on( 'scroll', function(){
            if ($(window).scrollTop() > 100) {
                $('.scroll-top-wrapper').addClass('show');
            } else {
                $('.scroll-top-wrapper').removeClass('show');
            }
        });
        $('.scroll-top-wrapper').on('click', scrollToTop);
    });
    function scrollToTop() {
        verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
        element = $('body');
        offset = element.offset();
        offsetTop = offset.top;
        $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
    }

    if (window.innerWidth <= 768) {
        $(".ms-main-nav").navigation({
        sideBarWidth: 300,
        slideSpeed: 800,
        subMenuSlideDirection: "right",
        theme: "overlay", //overlay, bodycollapse, bodyfit
        triggerButton: "topmenu-btn",
        backButtonText: '',
        environment: "development",
        });
    }
    

    //Counter
    $('.counter').each(function () {
        $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
        }, {
        duration: 2000,
        easing: 'swing',
        step: function (now) {
        $(this).text(Math.ceil(now));
        }
        });
    });

    //Testimonial Slider
    $('.testimonial-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.testimonial-thumb'
      });
      $('.testimonial-thumb').slick({
        slidesToShow: 9,
        slidesToScroll: 1,
        asNavFor: '.testimonial-slider',
        dots: true,
        arrows: false,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                slidesToShow: 8,
                }
            },
            {
                breakpoint: 992,
                settings: {
                slidesToShow: 6,
                }
            },
            {
                breakpoint: 768,
                settings: {
                slidesToShow: 5,
                }
            },
            {
                breakpoint: 576,
                settings: {
                slidesToShow: 4,
                }
            },
            {
                breakpoint: 400,
                settings: {
                slidesToShow: 3,
                }
            }
        ]
      });

    //Video Slider / Event Slider
    $('.video-slider,.event-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        speed: 300,
        infinite: true,
        autoplaySpeed: 2000,
        autoplay: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                slidesToShow: 2,
                }
            },
            {
                breakpoint: 576,
                settings: {
                slidesToShow: 1,
                }
            }
        ]
    });

    //News Slider
    $('.news-slider').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        speed: 300,
        infinite: true,
        autoplaySpeed: 2000,
        autoplay: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                slidesToShow: 5,
                }
            },
            {
                breakpoint: 992,
                settings: {
                slidesToShow: 4,
                }
            },
            {
                breakpoint: 768,
                settings: {
                slidesToShow: 3,
                }
            },
            {
                breakpoint: 480,
                settings: {
                slidesToShow: 2,
                }
            }
        ]
    });

    //video Modal
    let videoSrc;
    document.querySelectorAll('.video-btn').forEach(button => {
        button.addEventListener('click', () => {
            videoSrc = button.dataset.src;
            console.log(videoSrc);
        });
    });
    // document.getElementById('videoModal').addEventListener('shown.bs.modal', () => {
    // document.getElementById('video').src = videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0";
    // });
    // document.getElementById('videoModal').addEventListener('hide.bs.modal', () => {
    // document.getElementById('video').src = videoSrc;
    // });

    
    //Load More Toggles
    if ($(window).width() <= 575){
        $(".price-b-cnt .col").slice(0, 6).show();
        $(".price-b-cnt .col:hidden").css("opacity", 0);
        $(".loadmore-price").on("click", function(e) {
            $(".price-b-cnt .col:hidden").slice(0, 6).slideDown("slow").animate(
                {opacity: 1},
                {queue: false, duration: "slow"}
            );
            if ($(".price-b-cnt .col:hidden").length == 0) {
            $(".loadmore-price").fadeOut("slow");
            }
            e.preventDefault();
        });
        // Services
        $(".service-cnt .col").slice(0, 6).show();
        $(".service-cnt .col:hidden").css("opacity", 0);
        $(".loadmore-services").on("click", function(e) {
            $(".service-cnt .col:hidden").slice(0, 6).slideDown("slow").animate(
                {opacity: 1},
                {queue: false, duration: "slow"}
            );
            if ($(".service-cnt .col:hidden").length == 0) {
            $(".loadmore-services").fadeOut("slow");
            }
            e.preventDefault();
        });
    }

    //Load More Toggles
    myID = document.getElementById("menu-bottom");
    var myScrollFunc = function () {
        var y = window.scrollY;
        if (y >= 100) {
            myID.className = "bottom-menu show"
        } else {
            myID.className = "bottom-menu"
        }
    };
    window.addEventListener("scroll", myScrollFunc);


});