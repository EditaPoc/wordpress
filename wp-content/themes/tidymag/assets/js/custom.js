jQuery(document).ready(function($) {

    if(tidymag_ajax_object.sticky_menu){
    // grab the initial top offset of the navigation 
    var tidymagstickyNavTop = $('.tidymag-primary-menu-container').offset().top;
    
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var tidymagstickyNav = function(){
        var tidymagscrollTop = $(window).scrollTop(); // our current vertical position from the top
             
        // if we've scrolled more than the navigation, change its position to fixed to stick to top,
        // otherwise change it back to relative

        if(window.innerWidth > 1076) {
            if (tidymagscrollTop > tidymagstickyNavTop) {
                $('.tidymag-primary-menu-container').addClass('tidymag-fixed');
            } else {
                $('.tidymag-primary-menu-container').removeClass('tidymag-fixed'); 
            }
        }
    };

    tidymagstickyNav();
    // and run it again every time you scroll
    $(window).scroll(function() {
        tidymagstickyNav();
    });
    }

    $(".tidymag-nav-primary .tidymag-primary-nav-menu").addClass("tidymag-primary-responsive-menu");

    $(".tidymag-primary-responsive-menu-icon").click(function(){
        $(this).next(".tidymag-nav-primary .tidymag-primary-nav-menu").slideToggle();
    });

    $(window).resize(function(){
        if(window.innerWidth > 1076) {
            $(".tidymag-nav-primary .tidymag-primary-nav-menu, nav .sub-menu, nav .children").removeAttr("style");
            $(".tidymag-primary-responsive-menu > li").removeClass("tidymag-primary-menu-open");
        }
    });

    $(".tidymag-primary-responsive-menu > li").click(function(event){
        if (event.target !== this)
        return;
        $(this).find(".sub-menu:first").toggleClass('tidymag-submenu-toggle').parent().toggleClass("tidymag-primary-menu-open");
        $(this).find(".children:first").toggleClass('tidymag-submenu-toggle').parent().toggleClass("tidymag-primary-menu-open");
    });

    $("div.tidymag-primary-responsive-menu > ul > li").click(function(event) {
        if (event.target !== this)
            return;
        $(this).find("ul:first").toggleClass('tidymag-submenu-toggle').parent().toggleClass("tidymag-primary-menu-open");
    });

    $(".tidymag-social-search-icon").on('click', function (e) {
        e.preventDefault();
        $('.tidymag-social-search-box').slideToggle(400);
    });

    $(".post").fitVids();

    var scrollButtonEl = $( '.tidymag-scroll-top' );
    scrollButtonEl.hide();

    $( window ).scroll( function () {
        if ( $( window ).scrollTop() < 20 ) {
            $( '.tidymag-scroll-top' ).fadeOut();
        } else {
            $( '.tidymag-scroll-top' ).fadeIn();
        }
    } );

    scrollButtonEl.click( function () {
        $( "html, body" ).animate( { scrollTop: 0 }, 300 );
        return false;
    } );


    if(tidymag_ajax_object.sticky_sidebar){
    $('.tidymag-sticky-sidebars .tidymag-main-wrapper, .tidymag-sticky-sidebars .tidymag-sidebar-one-wrapper, .tidymag-sticky-sidebars .tidymag-sidebar-two-wrapper').theiaStickySidebar({
        containerSelector: ".tidymag-sticky-sidebars .tidymag-content-inner-wrapper",
        additionalMarginTop: 0,
        additionalMarginBottom: 0,
        minWidth: 1107,
    });
    }

});