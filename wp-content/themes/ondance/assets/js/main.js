;(function($) {
    'use strict';

    // init google map
    (function() {
        function initMap() {
            var myLatLng = {
                lat: 49.854593,
                lng: 24.028467
            };

            var map = new google.maps.Map(document.getElementById('google-map-id'), {
                zoom: 15,
                center: myLatLng
            });

            new google.maps.Marker({
                position: myLatLng,
                icon: ondance.assetsUrl + '/img/google-point.png',
                map: map,
            });
        }

        if ($('#google-map-id').length) {
            google.maps.event.addDomListener(window, 'load', initMap);
        }
    })();

    // hover on menu
    (function() {
        $('.mega-menu')
            .on('mouseover', '.mega-menu-link', function() {
                $(this).addClass('need-hover-line');
                $('.mega-menu-link:not(:hover)').addClass('need-hover');
            })
            .on('mouseleave', '.mega-menu-link, .mega-sub-menu', function() {
                $('.mega-menu-link').removeClass('need-hover need-hover-line');
            })
            .on('mouseover', '.mega-sub-menu', function() {
                $('.mega-menu-link').addClass('need-hover');
                $(this).prev('.mega-menu-link').addClass('need-hover-line').removeClass('need-hover');
            });
    })();

    // home page
    (function() {
        var $homeSlider = $('.home-slider');
        var $logosSlider = $('.logo-list');
        var $homeProducts = $('.man-products ul.products, .women-products ul.products');

        // init home slider
        if ($homeSlider.length) {
            $homeSlider.slick({
                dots: true,
                prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next"><i class="fas fa-arrow-right"></i></button>'
            });
        }

        // init logos slider
        if ($logosSlider.length) {
            $logosSlider.slick({
                autoplay: true,
                infinite: true,
                centerMode: true,
                variableWidth: true,
                slidesToShow: 6,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                ]
            });
        }

        // init home tabs
        $('.home-content .home-dropdown-menu > a').on('click', function(e) {
            e.preventDefault();

            var $ul = $(this).closest('ul.menu');
            var $li = $(this).closest('li.menu-item');

            if ($li.hasClass('active')) {
                return;
            }

            $ul.find('.sub-menu').hide('fast');
            $ul.find('.menu-item').removeClass('active');
            $li.addClass('active');

            if ($li.find('.sub-menu').length) {
                $li.find('.sub-menu').show('slow');
            }
        });

        // init home products slider
        if ($homeProducts.length) {
            $homeProducts.slick({
                infinite: true,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 4,
                responsive: [
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                ]
            });
        }

        // filter for products
        $('.select-type a').on('click', function(e) {
            e.preventDefault();

            var targetClass = $(this).data('target');

            $('.select-type > a').removeClass('active');
            $(this).addClass('active');

            $('.products-list > div').removeClass('active');
            $('.products-list').find(targetClass).addClass('active');

            $homeProducts.slick('setPosition');
        });
    })();

    // product single page
    (function() {
        var $btnWrap = $('#table-sizes--wrapper');
        var $variationTable = $('.variations .tawcvs-swatches[data-attribute_name="attribute_pa_rozmiri"]');

        if ($btnWrap.length && $variationTable.length) {
            $btnWrap.clone().insertAfter($variationTable.closest('tr'));
        }

        $btnWrap.remove();
    })();

})(jQuery);