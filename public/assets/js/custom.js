// ==================================================
// Project Name  :  Printem - HTML5 Template
// File          :  JS Base
// Version       :  1.0.0
// Last change   :  05 Octobar 2020
// Author        :  BDevs (https://themeforest.net/user/bdevs)
// Developer:    :  Rakibul Islam Dewan
// ==================================================


(function($) {
    "use strict";
  
  
    // back to top - start
    // --------------------------------------------------
    $(window).scroll(function() {
      if ($(this).scrollTop() > 200) {
        $('#backtotop:hidden').stop(true, true).fadeIn();
      } else {
        $('#backtotop').stop(true, true).fadeOut();
      }
    });
    $(function() {
      $("#scroll").on('click', function() {
        $("html,body").animate({
          scrollTop: $("#thetop").offset().top
        }, "slow");
        return false
      })
    });
    // back to top - end
    // --------------------------------------------------
  
  
    // preloader - start
    // --------------------------------------------------
    $(window).on('load', function() {
      $('.preloader').addClass('loaded');
      if ($('.preloader').hasClass('loaded')) {
        $('.spinner').delay(1000).queue(function () {
          $(this).remove();
        });
      }
    });
    // preloader - end
    // --------------------------------------------------
  
  
    // search box - start
    // --------------------------------------------------
    $('.search_btn').on('click', function() {
      $('.search_btn > .fa-search').toggleClass('fa-times');
    });
    // search box - end
    // --------------------------------------------------
  
  
    // background image - start
    // --------------------------------------------------
    $('[data-background]').each(function() {
      $(this).css('background-image', 'url('+ $(this).attr('data-background') + ')');
    });
    // background image - end
    // --------------------------------------------------
  
  
    // nice select - start
    // --------------------------------------------------
    $('select').niceSelect();
    // nice select - end
    // --------------------------------------------------
  
  
    // sidebar mobile menu - start
    // --------------------------------------------------
    $(document).ready(function () {
      $('.close_btn, .overlay').on('click', function () {
        $('.sidebar_mobile_menu').removeClass('active');
        $('.overlay').removeClass('active');
      });
  
      $('.mobile_menu_btn').on('click', function () {
        $('.sidebar_mobile_menu').addClass('active');
        $('.overlay').addClass('active');
      });
    });  

    // sidebar mobile menu - end
    // --------------------------------------------------
  
  
    // sticky header - start
    // --------------------------------------------------
    $(window).on('scroll', function () {
      if ($(this).scrollTop() > 10) {        
        $('.sticky_header').addClass("stuck");
        $('#site-top-bar').addClass('top-bar-hidden');
      } else {
        $('.sticky_header').removeClass("stuck");
        $('#site-top-bar').removeClass('top-bar-hidden');
      }
    });
    // sticky header - end
    // --------------------------------------------------

    // columns of carousel - start
    // --------------------------------------------------
    $('.main_slider').owlCarousel({
      items:1,
      margin:0,
      nav:false,
      loop:true,
      dots:true,
      autoplay:true,
      smartSpeed:1000,
      autoplayTimeout:6000
      // autoplayHoverPause:true,
    });
    // columns of carousel - end
    // --------------------------------------------------
  
  
    // columns of carousel - start
    // --------------------------------------------------
    $('.creative_testimonial_carousel').owlCarousel({
      items:1,
      nav:true,
      loop:true,
      margin:30,
      dots:false,
      autoplay:true,
      smartSpeed:1000,
      autoplayTimeout:6000,
      autoplayHoverPause:true,
    });
  
  
    $('.column_1_carousel').owlCarousel({
      items:1,
      nav:true,
      loop:true,
      margin:30,
      dots:true,
      autoplay:true,
      smartSpeed:1000,
      autoplayTimeout:6000,
      autoplayHoverPause:true,
    });
  
    $('.column_2_carousel').owlCarousel({
      loop:true,
      nav:true,
      margin:30,
      dots:true,
      autoplay:true,
      smartSpeed:1000,
      autoplayTimeout:6000,
      autoplayHoverPause:true,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:2
        },
        1200:{
          items:2
        }
      }
    });
  
    $('.column_3_carousel').owlCarousel({
      loop:true,
      nav:true,
      margin:30,
      dots:true,
      autoplay:true,
      smartSpeed:1000,
      autoplayTimeout:6000,
      autoplayHoverPause:true,
      responsive:{
        0:{
          items:1
        },
        700:{
          items:2
        },
        1100:{
          items:3
        }
      }
    });
    // columns of carousel - end
    // --------------------------------------------------
  
  
    
    // parallax - start
    // --------------------------------------------------
    if ($('.scene').length > 0 ) {
      $('.scene').parallax({
        scalarX: 10.0,
        scalarY: 10.0,
      }); 
    }
    // parallax - end
    // --------------------------------------------------
  
  
    // wow animation - start
    // --------------------------------------------------
    function wowAnimation() {
      new WOW({
        offset: 100,
        mobile: true
      }).init()
    }
    wowAnimation();
    // wow animation - end
    // --------------------------------------------------
    
  })(jQuery);