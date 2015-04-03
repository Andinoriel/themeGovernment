"use strict";

appMakeBeCool.gateway.addClass('Parallax', function (properties, $, $window, $document) {
    //PRIVATE VARIABLES
    var _parallax = this,
        _defaults = {
            // elements
            parallaxId: '#goverment-parallax',
            parallaxClass: '.fw-image-parallax'

            // prop
            // data
            // classes ans styles
        },
        _properties = $.extend(_defaults, properties),
        _globals = {
            // elements
            parallaxVariable: null,
            parallaxNode: null,
            parallaxDiv: null,

            // prop
            preloaded: false
        },

        //PRIVATE METHODS
        _init = function () {
            appMakeBeCool.gateway.base.Class.apply(_parallax, [_properties]);
            if (!_globals.preloaded) {
                return _parallax.init();
            }
            _parallax.globals.customCreate = function () {
                _config();
                _setup();
                _setBinds();
                _setCustomMethods();
            }
            _parallax.create();
        },

        _config = function () {
            _globals.parallaxNode = $(_properties.parallaxId);
            _globals.parallaxDiv = $(_properties.parallaxClass);
        },

        _setup = function () {
            if (_globals.parallaxNode.length && $window.width() >= 1200) {


                $('.slider__bg-img').parallax("50%", 0.4); // Welcome Image
                // if (_globals.parallaxNode.length && $window.width() >= 768) {

                // _globals.parallaxVariable = skrollr.init({
                //     smoothScrolling: false,
                //     smoothScrollingDuration: 200
                // });

                // function screenHeight() {
                //     return $.browser.opera ? window.innerHeight : $(window).height();
                // }

                // function screenWidth() {
                //     return $.browser.opera ? window.innerWidth : $(window).width();
                // }

                // function getBodyScrollTop() {
                //     return self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop);
                // }

                // function wheel(event) {
                //     var delta_costom = 100,
                //         delta, scroll;
                //     event = event || window.event;
                //     if (event.wheelDelta) {
                //         delta = event.wheelDelta / 120;
                //         if (window.opera)
                //             delta = -delta;
                //     } else if (event.detail) {
                //         delta = -event.detail / 3;
                //     }
                //     if (event.preventDefault)
                //         event.preventDefault();
                //     event.returnValue = false;
                //     if (delta < 0) {
                //         scroll = getBodyScrollTop() + delta_costom;
                //         $("body,html").animate({
                //             "scrollTop": scroll
                //         }, 10);
                //     } else {
                //         scroll = getBodyScrollTop() - delta_costom;
                //         $("body,html").animate({
                //             "scrollTop": scroll
                //         }, 10);
                //     }
                // }
                // $(document).on('scroll', function() {
                //     var h = screenHeight();
                //     var w = screenWidth();
                //     if (h < w && h > 400) {
                //         var scroll = getBodyScrollTop();
                //         var statistic_h = $("#aboutSection").height() + 100;
                //         var dif = scroll - statistic_h;
                //         var partners_h = $("#aboutSection").height() + $("#statistic").height() + $("#benefits").height() + 2 * 126;
                //         var dif_h = scroll - partners_h;
                //         $('.slider__bg-img').css({
                //             'transform': 'translate3d(0px, ' + scroll + 'px, 0px)'
                //         });

                //         // transform: translate3d(0px, 0px, 0px);


                //         // $('#video-src').css('height', h + 'px');
                //         // $('.video-src').css('bottom', $("#statistic").height() + 'px');
                //         // $('#bImg').css({
                //         //     'bottom': $('#partners').height() + 'px'
                //         // });
                //         // if (scroll >= statistic_h) {
                //         //     $('.video-src').css('bottom', +$("#statistic").height() - dif + 'px');
                //         // }
                //         // if (scroll >= partners_h) {
                //         //     $('#bImg').css({
                //         //         'bottom': +$('#partners').height() - dif_h + 'px'
                //         //     });
                //         // }


                //         //                      <script src="js/jquery/plugins/jquery.mousewheel.min.js"></script>
                //         // <script src="js/jquery/plugins/jquery.simplr.smoothscroll.js"></script>
                //         // <script src="js/jquery/plugins/query.smooth-scroll.js"></script>

                //         //  <script>
                //         //     $(function () {
                //         //         if ($(window).width()>=1200) {
                //         //         $.srSmoothscroll({
                //         //         // defaults
                //         //              step: 75,
                //         //             speed: 300,
                //         //             ease: 'linear'
                //         //         });}

                //         //     });
                //         //  </script>
                //     }
                // });

            }
        },

        _setBinds = function () {},

        _binds = function () {
            return {}
        },

        _triggers = function () {
            return {}
        },

        _setCustomMethods = function () {
            return {
                getBodyScrollTop: function () {
                    return self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop);
                }
            }
        }

    //PUBLIC METHODS
    _parallax.addMethod('init', function () {
        _parallax.bind($window, _parallax.globals.classType + '_Init', function (e, data, el) {
            _globals.preloaded = true;
            _init();
        });
    });

    //GO!
    _init();
});