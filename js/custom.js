/*...................................................
              Slicknav Js 
....................................................*/
$(document).ready(function(){
  $('ul.navigation').slicknav({
    appendTo:".mainmenu",
  });
});
/*...................................................
              Multi page active Js 
....................................................*/
$(document).ready(function($){
  // Get current path and find target link
  var path = window.location.pathname.split("/").pop();
  
  // Account for home page with empty path
  if ( path == '' ) {
    path = 'index.php';
  }
      
  var target = $('nav a[href="'+path+'"]');
  // Add active class to target link
  target.addClass('active');
});
/*...................................................
            Banner Slider Section 
....................................................*/
$(document).ready(function(){
  $('.banner_slider_active').owlCarousel({
      loop:true,
      margin:0,
      nav:false,
      animateOut: 'slideOutDown',
      animateIn: 'fadeIn',
      autoplay:true,
      autoplayTimeout:5000,
      smartSpeed:1500,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
  });

  // slider-active
  $(".banner_slider_active").on('translate.owl.carousel', function(){
    $('.single_slider img')
      .removeClass('fitZoom')
      .addClass('fitZoomOut')
      .fadeOut();
      
    $('.slider-content h2').removeClass('lightSpeedIn animated').hide();
    $('.slider-content p').removeClass('fadeInUp animated').hide();
    $('.slider-content a').removeClass('fadeInUp animated').hide();
  }); 
    
  $(".banner_slider_active").on('translated.owl.carousel', function(){
    $('.owl-item.active .slider-content h2').addClass('lightSpeedIn animated').show();
    $('.owl-item.active .slider-content p').addClass('fadeInUp animated').show();
    $('.owl-item.active .slider-content a').addClass('fadeInUp animated').show();
  });
});
/*...................................................
            Book Table Active Js 
....................................................*/
$(document).ready(function(){
  // time picker
  $('.clockpicker').clockpicker({
    placement: 'bottom',
    align: 'left',
    donetext: 'Done',
    'default': 'now'
  });

  // date picker
  $('.datepicker').datepicker()
});
/*...................................................
            Home Chef Slider Section 
....................................................*/
$(document).ready(function(){
  $('.chef_slider_active').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      dots: true,
      animateOut: 'fadeOutDown',
      animateIn: 'fadeIn',
      autoplay:true,
      autoplayTimeout:5000,
      smartSpeed:1500,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
  });
});
/*...................................................
            About Client Slider Section 
....................................................*/
$(document).ready(function(){
  $('.clinet_slider_active').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      dots: false,
      autoplay:false,
      animateOut: 'lightSpeedOut',
      animateIn: 'lightSpeedIn',
      navText:['<i class="icofont icofont-double-left"></i>','<i class="icofont icofont-double-right"></i>'],
      autoplayTimeout:5000,
      smartSpeed:1500,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
  });
});