/**
 * External Dependencies
 */
import 'jquery';
import 'imagesloaded';
import Slideout from 'slideout';

$(document).ready(() => {
    windowLoad();
    mobileMenu();
    animateOnScroll();
    scroller();
    homepageParallax();
    faqToggle();
    var url_pathname = window.location.pathname;
    if (url_pathname == "/") {
        typedText();

    }
});

/*
 * Removes loading animation when page load is completed
 */
function windowLoad() {
    // var loader;
    if (document.readyState == 'loading') {
        // loader = requestAnimationFrame(animateLoaderScript);
    }

        $(".page-loader").fadeOut("slow");
        $("body").removeClass("preload");

    $('section:first-of-type').imagesLoaded( function() {
        $(".page-loader").fadeOut("fast");
        $("body").removeClass("preload");
    });
}


/*
 * Adds a button to nav links with sub menus, when clicked shows the sub menu
 */
function mobileMenu() {
    var $menu = $('#mobile-menu'),
        $menuButton = '<button type="button" class="mobile-nav-sub-menu-button"><i class="fas fa-chevron-down"></i></button>';

    $menu.find('.menu-item-has-children').each(function () {
        $(this).append($menuButton);
    });

    var current = $(".current-menu-ancestor");
    current.addClass('visible');
    current.find(".mobile-nav-sub-menu-button").addClass('open');

    $('.mobile-nav-sub-menu-button').on('click', function () {
        $(this).parent().toggleClass('visible');
        $(this).parent().siblings().removeClass('visible');
        $(this).toggleClass('open');
        $(this).parent().siblings().find('.open').removeClass('open');
    });

        console.log('here');

        var btnSidebar = document.querySelector('.js-slideout-toggle');
        var blockFixed = $('.fixed');
        var blockMain = document.querySelector('#panel');
        var blockSidebar = document.querySelector('#mobile-menu-slide');
        var blockSidebarWidth = 280;

        var slideoutSidebar = new Slideout({
            'panel': blockMain,
            'menu': blockSidebar,
            'padding': blockSidebarWidth,
            'tolerance': 70,
            'side': 'right', // move sidebar to right
            'touch': false,
        });

        btnSidebar.addEventListener('click', function () {
            slideoutSidebar.toggle();
            $('.btn-nav').toggleClass('is-active');
            // $('#mountainsHome').css('position', 'relative');
            window.dispatchEvent(new Event('resize'));
        });

        slideoutSidebar.on('beforeopen', function () {
            blockFixed.addClass('fixed-open');
        });

        slideoutSidebar.on('beforeclose', function () {
            blockFixed.removeClass('fixed-open');
        });

        function checkOpen(eve) {
            if (slideoutSidebar.isOpen()) {
                eve.preventDefault();
                slideoutSidebar.close();
                $('.btn-nav').toggleClass('is-active');
            }
        }

        function addClick() {
            document.querySelector('#panel').addEventListener('click', checkOpen);
        }

        function removeClick() {
            document.querySelector('#panel').removeEventListener('click', checkOpen);
            // $(window).trigger('resize');
        }

        slideoutSidebar.on('open', addClick);
        slideoutSidebar.on('close', removeClick);

}


/*
 * Any on scroll functionality should be placed here so only one window scroll is called
 */
function scroller() {

    // == Change Header on scroll ==
    var header = $(".header-primary");

    // ******* SCROLL ************\\
    $(window).on('scroll', function () {

        // == Change Header on scroll ==
        scroll = $(window).scrollTop();
        // set scroll amount (px)
        if (scroll >= 1) {
            header.addClass("header-secondary");// if scroll is further than #px change class
            // splashBox.css("z-index", -100);
        } else {
            header.removeClass("header-secondary"); // if not (is at top) change class back
        }

    });

    // == Change Header on scroll ==
    var scroll = scroll;
    if (scroll >= 1) {
        header.addClass("header-secondary");// if scroll is further than #px change class
    } else {
        header.removeClass("header-secondary"); // if not (is at top) change class back
    }
}

/*
 * Adds scroll to animation functionality
 * add class="animation-element" to an element you want to be triggered when scrolled to,
 * then your animation found in animation.less
 */
function animateOnScroll() {
    var $animation_elements = $('.animation-element');
    var $tab_animation_elements = $('.tab-animation-element');
    var $force_in_view = $('.force-in-view');
    var $window = $(window);

    function check_if_in_view() {
        var window_height = $window.height() - 200;
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

        if($animation_elements){
            $.each($animation_elements, function () {
                var $element = $(this);
                var element_height = $element.outerHeight();
                var element_top_position = $element.offset().top;
                var element_bottom_position = (element_top_position + element_height);

                //check to see if this current container is within viewport
                if ((element_bottom_position >= window_top_position) &&
                    (element_top_position <= window_bottom_position)) {
                    $element.addClass('in-view');
                }
            });
        }
        if($force_in_view){
            $.each($force_in_view, function () {
                $(this).addClass('in-view');
            });
        }
    }



    setTimeout(function(){
        $window.on('scroll resize', check_if_in_view);
        $window.trigger('scroll');
    }, 600)
}

function homepageParallax(){
    $.parallaxify({
        positionProperty: 'transform',
    });
}

// Can also be included with a regular script tag
function typedText(){
    var typed = new Typed('#typed', {
        stringsElement: '#typed-strings',
        typeSpeed: 80,
        backSpeed: 40,
        backDelay: 2000,
        loop: true,
    });
}

function faqToggle(){
    $('.faq-module__answer').slideUp();
    $('.faq-module__question').on('click', function() {
        $(this).toggleClass('faq-module__question--active');
        $(this).next('.faq-module__answer').slideToggle();
        $(this).find('i').toggleClass('fas fa-plus fas fa-minus');
    });
}


