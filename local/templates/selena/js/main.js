function is_mobile() {
    return (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
}

$(window).on('load', function () {
    if (!is_mobile()) {
        $('.wrapper-loader').addClass('is-fade');
        setTimeout(function () {
            $('.wrapper-loader').fadeOut(200);
        }, 1000);
    }
    heightHead = parseInt($('.ui-header').outerHeight());
    jQuery(window).on("scroll load", function () {
        var hFooter = $('.main-footer').offset().top;
        var pMenu = $('.menu-fixed').offset().top;
        var hNenu = $('.menu-fixed').outerHeight();
        if (hNenu + pMenu > hFooter) {
            $('.menu-fixed').addClass('is-hidden');
        } else {
            $('.menu-fixed').removeClass('is-hidden');
        }

        if ($(window).width() < 768) {
            if ($(window).scrollTop() > heightHead) {
                $('.ui-header').addClass('fixed-menu');
                setTimeout(function () {
                    $('.ui-header').addClass('scroll-transform');
                }, 100);
            } else {
                $('.ui-header').removeClass('fixed-menu');
                $('.ui-header').removeClass('scroll-transform');
            }
        }
        if ($(window).scrollTop() > $(window).height()) {
            $('.scroll-to-top').addClass('scroll-to-top-visible');
        } else {
            $('.scroll-to-top').removeClass('scroll-to-top-visible');
        }
    });
});
jQuery(document).ready(function ($) {
    if (is_mobile()) {
        $('.wrapper-loader').addClass('is-fade');
        setTimeout(function () {
            $('.wrapper-loader').fadeOut(150);
        }, 500);
    }
    lazyLoad($('body'));
    $(".hamburger").on("click", function () {
        $(this).toggleClass('is-active');
        $('.menu-fixed').toggleClass('is-open');
        $('.bg-overlay').fadeIn(250);
        if (is_mobile()) {
            $('html').toggleClass('is-hidden');
        }
    });
    $(".menu-fixed_close-btn").on("click", function () {
        $(".hamburger").removeClass('is-active');
        $('.menu-fixed').removeClass('is-open');
        $('.bg-overlay').fadeOut(250);
        if (is_mobile()) {
            $('html').removeClass('is-hidden');
        }
    });

    $('.bg-overlay').on("click", function () {
        $(".hamburger").removeClass('is-active');
        $('.menu-fixed').removeClass('is-open');
        $(this).fadeOut(250);
        if (is_mobile()) {
            $('html').removeClass('is-hidden');
        }
    });
    $('.menu-fixed_text').on("click", function () {
        $(this).toggleClass('is-active');
        $('.menu-fixed_body').fadeToggle(200);
    });
    $('body').on("touchend, click", function (e) {
        if ($(e.target).closest(".menu-fixed").length) return;
        $('.menu-fixed_text').removeClass('is-active');
        $('.menu-fixed_body').fadeOut(200);
    });
    $('.form-control').focus(function () {
        $(this).closest('.form-group').addClass('focus');
    });
    $('.form-control').blur(function () {
        if ($(this).val().length == 0) {
            $(this).closest('.form-group').removeClass('focus');
        }
    });
    $('form').find('.form-control').each(function () {
        if ($(this).val().length > 1) {
            $(this).closest('.form-group').addClass('focus');
        }
    })
    $('.services-slider').slick({
        variableWidth: true,
        infinity: false,
        responsive: [
            {
                breakpoint: 576,
                settings: {
                    arrows: false,
                    dots: true,
                    speed: 400,
                }
            },
        ]
    });
    $('.my-office_slider').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        infinity: false,
        responsive: [
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    speed: 400,
                }
            },]
    });
    $('.my-office_slider-mod').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        infinity: false,
        responsive: [
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    speed: 400,
                }
            },]
    });

    $('.js-select').selectric({
        maxHeight: 300,
        disableOnMobile: false,
        nativeOnMobile: false,
    });
    $(document).find('.slick-cloned a').removeAttr('data-fancybox');
    $(".fancybox").fancybox({
        afterLoad: function (instance, current) {
            if (!is_mobile()) {
                $('.fixed-menu').addClass('is-overflow');
                $('.scroll-to-top').addClass('is-hidden');
            }
        },
        afterClose: function (instance, current) {
            if (!is_mobile()) {
                $('.fixed-menu').removeClass('is-overflow');
                $('.scroll-to-top').removeClass('is-hidden');
            }
        },
        backFocus: false,
    });
    if (!is_mobile()) {
        $('.js-modal').on('show.bs.modal', function (event) {
            $('.ui-header').addClass('is-overflow');
            $('.scroll-to-top').addClass('is-hidden');
        });
        $('.js-modal').on('hidden.bs.modal', function (event) {
            $('.ui-header').removeClass('is-overflow');
            $('.scroll-to-top').removeClass('is-hidden');
        });
    }

    $('.scroll-to-top').on('click', function () {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
    $(document).on("click", '.js_form-submit', function () {
        var jhis = $(this).closest('form');
        $(jhis).find('.requiredField').removeClass('input-error');
        $(jhis).find('.error').remove();
        var error = 0;
        $(jhis).find('.requiredField').each(function () {
            if ($(this).hasClass('callback-phone')) {
                if ($(this).val().length < 10) {
                    $(this).after('<span class="error">?????????????? ?????????? ????????????????</span>');
                    $(this).addClass('input-error');
                    error = 1;
                }
            } else if ($(this).hasClass('callback-email')) {
                var emailReg = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
                if (emailReg.test($(this).val()) == false) {
                    $(this).after('<span class="error">?????????????? ???????????????????? E-mail</span>');
                    $(this).addClass('input-error');
                    error = 2;
                }
            } else if ($(this).hasClass('callback-name')) {
                if ($(this).val().length < 3) {
                    $(this).addClass('input-error');
                    $(this).after('<span class="error">?????????????????? ????????</span>');
                    error = 3;
                }
            } else if ($(this).hasClass('callback-text')) {
                if ($(this).val().length < 2) {
                    $(this).addClass('input-error');
                    $(this).after('<span class="error">?????????????????? ????????</span>');
                    error = 4;
                }
            }
        });
        if (error == 0) {
            /*???????????????? ??????????**/
        } else {
            return false;
        }
    });
    $('input[type="tel"]').inputmask("+7 (999) 999 99 99", {
        "clearIncomplete": true,
        showMaskOnHover: false,
    });
});

function lazyLoad($content) {
    $content.find('img[data-src], source[data-src], audio[data-src], iframe[data-src]').each(function () {
        $(this).attr('src', $(this).data('src'));
        $(this).removeAttr('data-src');
        if ($(this).is('source')) {
            $(this).closest('video').get(0).load();
        }
    });
}

/*
if ($('#map').length) {

    function showYaMaps() {
        var script = document.createElement("script");
        script.type = "text/javascript";
        script.src = "https://api-maps.yandex.ru/2.1/?lang=ru_RU";
        document.getElementById("map").appendChild(script);
        script.onload = function () {
            ymaps.ready(init);
            var myMap,
                myPlacemark;

            function init() {
                myMap = new ymaps.Map("map", {
                    center: [55.868177516826606, 37.49290399999994],
                    zoom: 16,
                    behaviors: ['default', 'scrollZoom'],
                });
                myMap.behaviors.disable('scrollZoom');
                myMap.controls.remove('geolocationControl');
                myMap.controls.remove('searchControl');
                myMap.controls.remove('trafficControl');
                myMap.controls.remove('typeSelector');
                myMap.controls.remove('fullscreenControl');
                myMap.controls.remove('rulerControl');
                myMap.behaviors.disable('scrollZoom');
                myMap.geoObjects.add(new ymaps.Placemark([55.868177516826606, 37.49290399999994], {
                    balloonContent: '????????????, ????. ?????????????? 130, ????. 58 ',
                }, {
                    iconLayout: 'default#image',
                    iconImageHref: 'img/icons/marker.svg',
                    iconImageSize: [42, 54],
                }));
            }
        }
    }

    showYaMaps();
}*/
