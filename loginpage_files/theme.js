/**
 * Profit | Investment and Stock Broker Template
 * Theme core scripts
 * 
 * @author Chitrakoot Web
 * @version 1.0
 */

    /* ----------------------------------

    JS Active Code Index
            
        01. Preloader
        02. Navigation
        03. mySVGsToInject
        04. Scroll To Top
        05. Video
        06. Jarallax
        07. Menu Selector
        08. Copy to clipboard
        09. Sliders
        10. Tabs
        11. CountUp
        12. Popover
        13. Tooltips
        14. Redirection
        15. Current Year
            
    ---------------------------------- */    

(function($) {

    "use strict";

    var $window = $(window);


        /*------------------------------------
            01. Preloader
        --------------------------------------*/

        $('#preloader').fadeOut('normall', function () {
            $(this).remove();
        });


        /*------------------------------------
            02. Navigation
        --------------------------------------*/
      
          /* multi level dropdowns */
          $("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
                event.preventDefault();
                event.stopPropagation();

                $(this).siblings().toggleClass("show");

                if (!$(this).next().hasClass('show')) {
                  $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
                }
                $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                  $('.dropdown-submenu .show').removeClass("show");
                });

          });

        /* dropdowns submenu */
          $('.dropdown-submenu > a').on("click", function(e) {
                var submenu = $(this);
                $('.dropdown-submenu .dropdown-menu').removeClass('show');
                submenu.next('.dropdown-menu').toggle();
                submenu.parents('.dropdown-submenu').siblings('li').children('.dropdown-menu').hide();

                submenu.toggleClass('active');
                submenu.parents('.dropdown-submenu').siblings('li').children('.dropdown-item').removeClass('active');

                e.stopPropagation();
                
            });


          /*------------------------------------
            03. mySVGsToInject
        --------------------------------------*/

          if ($(".feather,.svg-injector").length !== 0) {
          
            // Elements to inject
              var mySVGsToInject = document.querySelectorAll('img.feather, img.svg-injector');

              // Do the injection
              SVGInjector(mySVGsToInject);
          }
       

        /*------------------------------------
            04. Scroll To Top
        --------------------------------------*/

        $window.on('scroll', function() {
            if ($(this).scrollTop() > 500) {
                $(".scroll-to-top").fadeIn(400);

            } else {
                $(".scroll-to-top").fadeOut(400);
            }
        });

        $(".scroll-to-top").on('click', function(event) {
            event.preventDefault();
            $("html, body").animate({
                scrollTop: 0
            }, 600);
        });

       
        /*------------------------------------
            05. Video
        --------------------------------------*/

        if ($(".popup-social-video").length !== 0) {                
            $('.popup-social-video').magnificPopup({
                    disableOn: 700,
                    type: 'iframe',
                    mainClass: 'mfp-fade',
                    removalDelay: 160,
                    preloader: false,
                    fixedContentPos: false
            });
        }

        /*------------------------------------
            06. Jarallax
        --------------------------------------*/

        /* init Jarallax */
        if ($(".jarallax").length !== 0) {
            jarallax(document.querySelectorAll('.jarallax'));
        };


    // === when document ready === //
    $(document).ready(function(){

        /*------------------------------------
            07. Menu Selector
        --------------------------------------*/

        var urlparam = window.location.pathname.split('/');
        var menuselctor = window.location.pathname;
        if (urlparam[urlparam.length - 1].length > 0) menuselctor = urlparam[urlparam.length - 1];
        else menuselctor = urlparam[urlparam.length - 2];
        $('.navbar-nav li').find('a[href="' + menuselctor + '"]').closest('li').addClass('active').parents().eq(1).addClass('current');
        $('.navbar-nav ul.dropdown-menu li').find('a[href="' + menuselctor + '"]').closest('li').addClass('active').parents().eq(3).addClass('current');
        $('.navbar-nav li ul li').find('a[href="' + menuselctor + '"]').parents().eq(7).addClass('current');


        /*------------------------------------
            08. Copy to clipboard
        --------------------------------------*/

        if ($(".copy-clipboard").length !== 0) {
            new ClipboardJS('.copy-clipboard');
            $('.copy-clipboard').on('click', function() {
                var $this = $(this);
                var originalText = $this.text();
                $this.text('Copied');
                setTimeout(function() {
                    $this.text('Copy')
                    }, 2000);
            });
        };        


        /*------------------------------------
            09. Sliders
        --------------------------------------*/

        if ($(".owl-carousel").length !== 0) {
            $('.main-slider .owl-carousel').owlCarousel({
                items: 1,
                loop: true,
                margin: 0,
                dots: true,
                nav: false,
                autoplay: false,
                smartSpeed: 1500,
                navText: ["<i class='fas fa-arrow-left'></i>", "<i class='fas fa-arrow-right'></i>"],
                responsive: {
                    992: {
                        dots: false,
                        nav: true
                    }
                }
            });
            $('.markets.owl-carousel').owlCarousel({
                items: 1,
                loop: true,
                dots: false,
                nav: false,
                autoplay: true,
                smartSpeed: 1200,
                margin: 30,
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 2
                    },
                    992: {
                        items: 3
                    },
                    1400: {
                        items: 5
                    }
                }
            });
        };

        /*------------------------------------
            10. Tabs
        --------------------------------------*/

        //Horizontal Tab
        if ($(".horizontaltab").length !== 0) {
            $('.horizontaltab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        }

        /*------------------------------------
            11. CountUp
        --------------------------------------*/

        if ($(".countup").length !== 0) {
            $('.countup').counterUp({
            delay: 25,
            time: 2000
        });
        }
        
        /*------------------------------------
            12. Popover
        --------------------------------------*/

        $(function () {
            $('[data-bs-toggle="popover"]').popover()
        })

        /*------------------------------------
            13. Tooltips
        --------------------------------------*/

        $(function () {
            $('[data-bs-toggle="tooltip"]').tooltip()
        })

        /*------------------------------------
            14. Redirection
        --------------------------------------*/

        $(".sidenav-right a[href^='#']").click(function(e) {
                e.preventDefault();

                var position = $($(this).attr("href")).offset().top - 120;

                $("body, html").animate({
                    scrollTop: position
                }, 500);
        });

        /*------------------------------------
            15. Current Year
        --------------------------------------*/

        $('.current-year').text(new Date().getFullYear());
      
    });


})(jQuery);

