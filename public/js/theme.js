'use strict';
// jQuery code is in here


$(window).on('load', function () {
    // Preloder
    // --------------------------------------------------
    $('#loading').delay(1000).fadeOut(200);

    // Parallax
    // --------------------------------------------------
    if (($('body > main div').hasClass('parallax-window'))) {
        $(".parallax-window").lazyload({
            effect: "fadeIn",
            threshold: 200
        });
    }
});


$(function () {

    // Smooth Page Scroll
    // ---------------------------------------------------------------------------------------   
    $('.primary-navbar > li > a[href^="#"]').on('click', function (event) {
        event.preventDefault();
        if (($('body > main').hasClass('non-sticky'))) {
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top}, 1000);
        }
        else {
            $('.primary-navbar > li').removeClass('active');
            $(this).addClass('active');
            var header_height = $('.header-wrap').outerHeight();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top - header_height}, 1000);
        }

    });

    // Sticky Header
    // ---------------------------------------------------------------------------------------
    $(window).scroll(function () {
        if (!($('body > main').hasClass('non-sticky'))) {
            if ($(window).scrollTop()) {
                $(".header-wrap").addClass("slideDownScaleReversedIn").removeClass("slideDownScaleReversedOut");
            }
            else {
                $(".header-wrap").addClass("slideDownScaleReversedOut").removeClass("slideDownScaleReversedIn");
            }
        }
        else {
            console.log('sticky');
        }
    });


    // Dropdown Menu Hover
    // ---------------------------------------------------------------------------------------
   if ($(window).width() > 767) {
        $('.primary-navbar li.dropdown').hover(function () {
            $(this).find('.dropdown-menu').first().stop(true, true).delay(200).fadeIn(500);
        }, function () {
            $(this).find('.dropdown-menu').first().stop(true, true).delay(200).fadeOut(500);
        });
        $(".primary-navbar li.dropdown li").mouseover(function () {
            if ($(this).children('ul').length == 1) {
                var parent = $(this);
                var child_menu = $(this).children('ul');
                if ($(parent).offset().left + $(parent).width() + $(child_menu).width() > $(window).width()) {
                    $(child_menu).css('left', '-' + $(parent).width() + 'px');
                } else {
                    $(child_menu).css('left', $(parent).width() + 'px');
                }
            }
        });
    }

    // Scroll To Top Start
    // ---------------------------------------------------------------------------------------
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.to-top').fadeIn();
        } else {
            $('.to-top').fadeOut();
        }
    });
    //Click event to scroll to top
    $('.to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });

    // Slider Text Animation
    // ---------------------------------------------------------------------------------------
    $(".caption-text").addClass("animated fadeInUp");
    $(".owl-prev,.owl-next").addClass("animated fadeInDown");


    // ---------------------------------------------------------------------------------------
    // Testimonials Slider Start
    if ($('.testimonials-slider').length > 0) {
        $(".testimonials-slider").owlCarousel({
            rtl: false,
            loop: true,
            items: 1,
            nav: false,
            responsive: {
                0: {
                    items: 1
                }
            }
        });
        var test_owl = $('.testimonials-slider');
        test_owl.owlCarousel();
        $("#testimonials-slider .next").click(function () {
            test_owl.trigger('next.owl.carousel');
        });
        $("#testimonials-slider .prev").click(function () {
            test_owl.trigger('prev.owl.carousel', [300]);
        });
    }
    // Testimonials Slider End
    // ---------------------------------------------------------------------------------------


    // ---------------------------------------------------------------------------------------
    // Price Lists Slider Start
    if ($('.price-slider').length > 0) {
        $(".price-slider").owlCarousel({
            rtl: false,
            loop: true,
            autoplay: true,
            items: 4,
            nav: false,
            dots: false,
            responsive: {
                0: {items: 1},
                1200: {items: 4},
                992: {items: 3},
                568: {items: 2}
            }
        });
    }

    // ---------------------------------------------------------------------------------------
    // Price Lists Slider Start
    if ($('.post-slider').length > 0) {
        $(".post-slider").owlCarousel({
            rtl: false,
            loop: true,
            autoplay: true,
            items: 2,
            nav: false,
            dots: true,
            margin: 15,
            responsive: {
                0: {items: 1},
                1200: {items: 2},
                768: {items: 1},
                568: {items: 2}
            }
        });
    }

    // Video Popup
    // ---------------------------------------------------------------------------------------
    var $doc = $(document);
    $doc.on('hidden.bs.modal', '#video-popup', function () {
        $(this).find('iframe').attr('src', '');
    });
    $doc.on('show.bs.modal', '#video-popup', function (e) {
        var $a = $(e.relatedTarget);
        var src = $a.data('iframe');
        if (src) {
            $(this).find('iframe').attr('src', src);
        }
    });
    // Video Popup End
    // ---------------------------------------------------------------------------------------

    // ---------------------------------------------------------------------------------------
    // Main Slider Start
    if ($('#main-slider').length > 0) {
        $("#main-slider").owlCarousel({
            rtl: false,
            loop: true,
            autoplay: false,
            items: 1,
            nav: true,
            dots: true,
            margin: 15,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                }
            },
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ]
        });
    }
    //Main Slider End
    // ---------------------------------------------------------------------------------------   

    // prettyPhoto
    // ---------------------------------------------------------------------------------------  
    if ($().prettyPhoto) {
        $("a[data-gal^='prettyPhoto']").prettyPhoto({
            theme: 'facebook'
        });
        $("a[rel^='prettyPhoto']").prettyPhoto({
            theme: 'facebook',
            slideshow: 5000,
            autoplay_slideshow: true
        });
    }

    $(function () {
        if ($('.datepicker').length > 0) {
            $(".datepicker").datepicker();
        }
        if ($('.selectpicker').length > 0) {
            $(".selectpicker").selectmenu();
        }
    });

});

// Google map

var map;
function initMap() {
    var map = new google.maps.Map(document.getElementById('map-canvas'), {
        zoom: 8,
        center: {lat: 42.562786, lng: -114.460503}
    });

    var image = 'assets/img/icon-google-map.png';

    var beachMarker = new google.maps.Marker({
        position: {lat: 42.562786, lng: -114.460503},
        map: map,
        icon: image
    });
}

