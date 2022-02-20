$(function() {
    "use strict";

    var $header = $('header'),
        $sticky = $header.find('.sticky'),
        $btns_group_demo = $('main.single-item .btns-group-demo'),
        $slider = $('.slider'),
        $isotope = $('.isotope'),
        addResizeCarousels_timeout;

    //sticky
    function toggle_sticky() {
        var btns_t = $btns_group_demo.get(0).getBoundingClientRect().top;

        if(btns_t < 0) $sticky.addClass('active');
        else $sticky.removeClass('active');
    };

    //slider
    function addResizeCarousels(selector, breakpoint, options) {
        if(!selector) return false;

        var $carousels = $(selector),
            breakpoint = breakpoint || 768,
            options = options || null;

        var windW = window.innerWidth || $(window).width();

        if (windW < breakpoint) {
            $carousels.each(function() {
                var $this = $(this);

                $this.not('.slick-initialized').slick(options);

                var $slick_track = $this.find('.slick-track'),
                    $slick_slides = $slick_track.find('.slick-slide'),
                    slick_h = $slick_track.height();

                $slick_slides.each(function () {
                    var $this = $(this);

                    $this.css({ marginTop: '0'});

                    var slide_h = $this.height();

                    if(slide_h < slick_h) {
                        $this.css({ marginTop: (slick_h - slide_h)/2 + 'px'});
                    }
                });
            });
        } else {
            $carousels.each(function() {
                var $this = $(this);

                if ($this.hasClass('slick-initialized'))
                    $this.slick('unslick');

                $this.find('.slick-slide').removeAttr('style');
            });
        }
    };

    //change payment
    var $payment_method = $('.payment-method');
    if($payment_method.length) {
        $payment_method.find('> div').on('click', function () {
            $payment_method.find('> div').removeClass('active');
            $(this).addClass('active');
        });
    }

    //slider
    if($slider.length) {
        $slider.slick({
            dots: false,
            infinite: false,
            autoplay: true,
            speed: 600,
            slidesToShow: 1,
            centerMode: true,
            variableWidth: true,
            centerPadding: '0',
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 780,
                    settings: {
                        centerMode: false,
                        variableWidth: false,
                        adaptiveHeight: true,
                        autoplay: false
                    }
                }
            ]
        });
    }

    //isotope
    function isotopeInit() {
        var $navigation = $('.navigation-isotope');

        $navigation.find('.button').on('click', function (e) {
            var $this = $(this);

            $this.parent().children().removeClass('is-checked');
            $this.addClass('is-checked');

            var selector = $this.attr('data-filter');

            $isotope.isotope({
                itemSelector: '.block',
                layoutMode: 'packery',
                filter: selector
            });

            e.stopPropagation();
            e.preventDefault();
            return false;
        });
        $navigation.find('.button').first().trigger('click');
    };

    if($('video').length) {
        $('video').mediaelementplayer({
            alwaysShowControls: false,
            videoVolume: 'horizontal',
            features: ['playpause','progress','current','duration','tracks','volume','fullscreen'],
            enableKeyboard: true,
            pauseOtherPlayers: true,
            enableAutosize: true
        });
    }

    $(window).on('resize', function() {

        clearTimeout(addResizeCarousels_timeout);

        addResizeCarousels_timeout = setTimeout(function () {
            addResizeCarousels(
                '.brands-carousel',
                1025,
                {
                    dots: true,
                    infinite: false,
                    speed: 300,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    responsive: [
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        },
                        {
                            breakpoint: 380,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                }
            );
        }, 100);
    });

    $(window).trigger('resize');

    $(window).on('scroll', function () {
        if($sticky.length && $btns_group_demo.length) {
            toggle_sticky();
        }
    });

    $(window).on('load', function () {
        if($isotope.length) {
            isotopeInit();
        }
    });
});