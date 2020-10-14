$(document).ready(function(){

  /***** Main Menu Alternative *****/
  $('.list-parent > li').hover(function() {
    // $(this).children('.list-child').css("display", "block");
    $(this).children('.list-child').fadeIn();
  }, function() {
    // $(this).children('.list-child').css("display", "none");
    $(this).children('.list-child').fadeOut();
  });
  
  /***** Main Menu *****/
  $('#btn-menu, .nav-close-chevron').click(function(){
    var effect = 'slide';
    var option = { direction: 'right' };
    var duration = 500;

    // apply active style
    if($('#nav-mainmenu').is(":visible") == true) {
      $('#btn-menu span').removeClass('btn-main-active');
    } else {
      $('#btn-menu span').addClass('btn-main-active');
      
      // console.log($(window).outerHeight()); // if enable IE will cry
      if($(window).outerWidth() <= 320 || $(window).outerHeight() <= 320) // optimizing UX for device thas has width/height <= 320
      {
        $('html, body').animate({scrollTop: parseInt($('#hdr-subnav').offset().top) + 48}, 'slow');
      }
      
    }

    $('#nav-mainmenu').toggle(effect, option, duration);
  });

  /***** Search Menu *****/
  $('#btn-search').click(function(){
    /*
    var effect = 'slide';
    var option = { direction: 'up' };
    var duration = 500;

    $('#hdr-search').toggle(effect, option, duration);
    */

    // alternative of "toggle"
    if($('#hdr-search').is(":visible") == true) { // to close search input
      $('#hdr-search').slideUp();
      $('#hdr-newsticker').slideDown();
      $(this).children('span').removeClass('btn-main-active'); // un-apply active style
    } else { // to open search input
      $('#hdr-search').slideDown();
      $('#hdr-newsticker').slideUp();
      $("#src-input").focus(); // set focus on search input
      $(this).children('span').addClass('btn-main-active'); // apply active style
    }
  });

  /***** Show Children of Parent Menu *****/
  $('.nav-child-chevron').click(function(){
    // initialize
    var nav_child_visibility = $(this).parent().children('.nav-child').is(":visible");

    $('.nav-child-chevron span').removeClass('rot180');
    if(nav_child_visibility == false) { // not visible
    	$('.nav-child').hide();
    	$(this).children('span').addClass('rot180');
    } else {	  	
    	$(this).children('span').removeClass('rot180');
    }

    var effect = 'slide';
    var option = { direction: 'up' };
    var duration = 0;

    $(this).parent().children('.nav-child').toggle(effect, option, duration);
  });

  /***** Styling Scrollbar Menu *****/
	$(".nav-mainmenu ul.nav-mainmenu-list").niceScroll({
		cursorcolor: "#E88229",
		cursorborder: "none",
		cursorwidth: "7px",
		background: "#F8F0DB"
	});

  /***** News Ticker [jquery.easy-ticker.js] -- For Medium & Large Resolution (Desktop) *****/
  var nticker = $('#newsticker-list').easyTicker({
    direction: 'up',
    easing: 'easeInOutExpo',
    speed: 'slow',
    interval: 7000,
    height: 'auto',
    visible: 1,
    mousePause: 1,
    controls: {
      up: '.nticker-ctrl-down',
      down: '.nticker-ctrl-up',
      toggle: '.nticker-ctrl-toggle',
      // stopText: 'Stop'
    }
  }).data('easyTicker');

  /***** jQuery Marquee [jquery.marquee.js] -- For Small Resolution (Mobile) *****/
  $('#newsticker-marquee').marquee({
    pauseOnHover: true,
    duration: 15000,
    gap: 0,
    delayBeforeStart: 0,
    direction: 'left',
    duplicated: true,
  });

  /***** Headline Slider *****/
  $('.headline-list').lightSlider({
      gallery: true,
      item: 1,
      thumbItem: 5,
      slideMargin: 0,
      speed: 700, // switch speed
      pause: 3000, // delay per slide
      auto: true,
      loop: true,
      pauseOnHover: true,
      keyPress: true,
      controls: true,
      adaptiveHeight: false,
      /*onSliderLoad: function() {
        
      }*/
  });

  $('.headline-archive-list').lightSlider({
      gallery: false,
      item: 1,
      thumbItem: 5,
      slideMargin: 0,
      speed: 700, // switch speed
      pause: 3000, // delay per slide
      auto: true,
      loop: true,
      pauseOnHover: true,
      keyPress: true,
      controls: true,
      adaptiveHeight: false,
      /*onSliderLoad: function() {
        
      }*/
  });

   $('.media-single-slider').lightSlider({
      gallery: false,
      item: 1,
      thumbItem: 5,
      slideMargin: 0,
      speed: 700, // switch speed
      pause: 3000, // delay per slide
      auto: false,
      loop: true,
      pauseOnHover: true,
      keyPress: true,
      controls: true,
      adaptiveHeight: false,
      /*onSliderLoad: function() {
        
      }*/
  });

  /***** Lazy Load Images *****/
  $("img.img-lazy").show().lazyload({
    effect: "fadeIn",
    /*load: function(){
      
    }*/
  });

  /***** Show Caption Gallery *****/
  /*$('#col-gallery figure').hover(function(){
    $(this).children('figcaption').slideDown();
  }, function(){
    $(this).children('figcaption').slideUp();
  });*/

  /***** Banner KPU *****/
  // find elements
  var banner = $("#banner-kpu");
  var button = $("#banner-kpu-button");

  // handle click and add class
  button.on("click", function() {
    if (banner.hasClass('alt')) {
      banner.removeClass("alt");
      button.text("Hide");
    } else {
      banner.addClass("alt");
      button.text("Show");
    }
  });

  /***** Scroll To Top Navigation *****/
  $(window).scroll(function(){
    if($(this).scrollTop() >= $('footer').offset().top - 500){
      $('.scroll-to-top').fadeIn('slow');
    } else {
      $('.scroll-to-top').fadeOut('slow');
    }
  });

  $(".scroll-to-top").click(function(){
    $('html, body').animate({scrollTop: 0}, 'slow');
  });

});