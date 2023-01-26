// var prevScrollpos = window.pageYOffset;
// window.onscroll = function() {
// var currentScrollPos = window.pageYOffset;
//   if (prevScrollpos > currentScrollPos) {
//     document.getElementById("navbar").style.top = "0";
//   } else {
//     document.getElementById("navbar").style.top = "-90px";
//   }
//   prevScrollpos = currentScrollPos;
// }
$(document).on("click","body",function(e) { 
  if(!$(e.target).hasClass("dropdown-content")) { 
    $(".dropdown-content").hide(); 
  }
});
$(document).ready(function () {
  $(".menu-toggler").click(function () {
    $(".mobile-sidebar").css("left", "0");
    $(".overlay-sidebar").fadeIn("fast");
  });
  $(".overlay-sidebar").click(function () {
    $(".mobile-sidebar").css("left", "-300px");
    $(".overlay-sidebar").fadeOut("fast");
  });

  $("#mst-menu").click(function () {
    $("#mst-menu").addClass("mst-active").fadeIn("slow");
    $("#mst-category").removeClass("mst-active");
    $(".m-menu-dp").fadeIn("fast");
    $(".m-cat-dp").fadeOut("fast");
  });
  $("#mst-category").click(function () {
    $("#mst-category").addClass("mst-active");
    $("#mst-menu").removeClass("mst-active");
    $(".m-menu-dp").fadeOut("fast");
    $(".m-cat-dp").fadeIn("fast");
  });
  $(".search-dp").click(function () {
    $(".search-cat-dp").slideToggle("fast");
    
  });
  $(document).on("click", function(event){
    var $trigger = $(".search-dp");
    if($trigger !== event.target && !$trigger.has(event.target).length){
        $(".search-cat-dp").slideUp("fast");
    }            
});
  $(".cat-dp-main").hover(function () {
    $(".search-cat-dp-hover").slideToggle("fast");
  });

  // for all tabs

  $("#tab1").addClass("active");
  $("#tab1con").fadeIn("slow");
  $("#tab2con").css("display", "none");
  $("#tab1").click(function () {
    $("#tab1").addClass("active");
    $("#tab2").removeClass("active");
    $("#tab1con").fadeIn();
    $("#tab2con").css("display", 'none');
  });
  $("#tab2").click(function () {
    $("#tab2").addClass("active");
    $("#tab1").removeClass("active");
    $("#tab2con").fadeIn();
    $("#tab1con").css("display", 'none');
  });

  $("#tab3").addClass("active");
  $("#tab3con").fadeIn("slow");
  $("#tab4con").css("display", "none");
  $("#tab3").click(function () {
    $("#tab3").addClass("active");
    $("#tab4").removeClass("active");
    $("#tab3con").fadeIn("slow");
    $("#tab4con").fadeOut("fast");
  });
  $("#tab4").click(function () {
    $("#tab4").addClass("active");
    $("#tab3").removeClass("active");
    $("#tab4con").fadeIn("slow");
    $("#tab3con").fadeOut("fast");
  });
  $("#tab5").addClass("active");
  $("#tab5con").fadeIn("slow");
  $("#tab6con").css("display", "none");
  $("#tab5").click(function () {
    $("#tab5").addClass("active");
    $("#tab6").removeClass("active");
    $("#tab5con").fadeIn("slow");
    $("#tab6con").fadeOut("fast");
  });
  $("#tab6").click(function () {
    $("#tab6").addClass("active");
    $("#tab5").removeClass("active");
    $("#tab6con").fadeIn("slow");
    $("#tab5con").fadeOut("fast");
  });
  // $(".product .product-details .product-details-p").fadeOut("fast");
  $(".product .product-details").removeClass("ps-2");
  $("#product-12").click(function () {
    $(".product").addClass("col-lg-12");
    $(".product").removeClass("col-lg-3");
    $(".product").addClass("d-lg-flex");
    $(".product .product-details").addClass("text-start");
    $(".product .product-details").addClass("ps-3");
    $(".product .product-details").removeClass("text-center");
    $(".product .product-details .product-details-p").fadeIn("fast");
    $(".product .product-details a .button").removeClass("m-auto");
  });
  $("#product-3").click(function () {
    $(".product").removeClass("col-lg-3");
    $(".product").removeClass("col-lg-12");
    $(".product").removeClass("d-lg-flex");
    $(".product .product-details").removeClass("text-start");
    $(".product .product-details").removeClass("ps-2");
    $(".product .product-details").addClass("text-center");
    $(".product .product-details .product-details-p").fadeOut("fast");
    $(".product .product-details a .button").addClass("m-auto");
  });
  $(".filter-dropdown").css("display", "none");
  $("#filter").click(function () {
    $(".filter-dropdown").slideToggle("medium");
  });

  var counter = 1;
  var qty = $("#qty");
  $("#inc").click(function () {
    var inc = counter++;

    qty.val(inc);
  });
  $("#dec").click(function () {
    if (qty.val() > 1) {
      var dec = counter--;
    } else {
      dec = 1;
    }

    qty.val(dec);
  });

  $("#form-target-l").click(function(){
    $("#login-form").fadeIn(0);
    $("#signup-form").fadeOut(0);
    $("#form-target-l").fadeOut(0);
    $("#form-target-s").fadeIn(100);
  });
  $("#form-target-s").click(function(){
    $("#signup-form").fadeIn(0);
    $("#login-form").fadeOut(0);
    $("#form-target-s").fadeOut(0);
    $("#form-target-l").fadeIn(100);
  });
  $(function(){
    $('.carousel-inner').simpleLightbox();
  });
});
$(document).ready(function () {
  $('.slider-for-product').owlCarousel({
    items:1,
    loop:false,
    center:true,
    nav: true,
    dots: false,
    margin:10,
    URLhashListener:true,
    autoplayHoverPause:true,
    startPosition: 'URLHash'
});
  $(".cat-carousel").owlCarousel({
    loop: true,
    margin: 0,
    responsiveClass: true,
    dots: false,
    nav: true,
    autoplay: true,
    responsive: {
      0: {
        items: 2,
        nav: false,
        dots: false,
      },
      450: {
        items: 2,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
  });
  
});

$(document).ready(function () {
  $(".gift-card-owl").owlCarousel({
    loop: false,
    margin: 10,
    responsiveClass: true,
    dots: true,
    autoplay: false,
    responsive: {
      0: {
        items: 1,
        nav: false,
        dots: false,
      },
      600: {
        items: 2,
        nav: false,
      },
      1000: {
        items: 4,
        nav: false,
        loop: false,
        dots: false,
      },
    },
  });
  $(".recently-view").owlCarousel({
    loop: false,
    margin: 10,
    responsiveClass: true,
    dots: true,
    autoplay: false,
    nav:false,
    responsive: {
      0: {
        items: 1,
        nav: false,
        dots: false,
      },
      600: {
        items: 2,
        nav: false,
      },
      1000: {
        items: 4,
        nav: false,
        loop: false,
        dots: true,
      },
    },
  });
});

$(document).ready(function () {
  // Show the first tab and hide the rest
  $(".tab-box .accordion:first-child a").addClass("active");
  $(".tab-content").hide();
  $(".tab-content:first").slideDown();

  // Click function
  $(".tab-box .accordion a").click(function () {
    $(".tab-box .accordion a").removeClass("active");
    $(this).addClass("active");
    $(".tab-content").slideUp();

    var activeTab = $(".tab-box .accordion").find("a.active").attr("href");
    $(activeTab).slideDown();
    return false;
  });
});
$(document).ready(function () {
  // Show the first tab and hide the rest
  $(".dec-acc .accordion:first-child a").addClass("active");
  $(".tab-content2").hide();
  $(".tab-content2:first").slideDown();

  // Click function
  $(".dec-acc .accordion a").click(function () {
    $(".dec-acc .accordion a").removeClass("active");
    $(this).addClass("active");
    $(".tab-content2").slideUp();

    var activeTab = $(".dec-acc .accordion").find("a.active").attr("href");
    $(activeTab).slideDown();
    return false;
  });
});


$(document).ready(function() {
  $('.carousel-inner').magnificPopup({
      delegate: 'a', // child items selector, by clicking on it popup will open
      type: 'image',
      mainClass: 'mfp-with-zoom',
      
      zoom: {
          enabled: true,
          duration: 300,
          easing: 'ease-in-out',
          opener: function(openerElement) {
              return openerElement.is('img') ? openerElement : openerElement.find('img');
          }
      },
      gallery: {
          enabled: true
      }
  });
    
  });


  $(document).scroll(function(){

    var scroll_pos = $(window).scrollTop()
if(scroll_pos > 200){
    $("#scroll-top").fadeIn("medium");
    $("#navbar").slideDown("medium");
    $("#scroll-top").on("click", function() {
      window.scrollTo({top: 0, behavior: 'smooth'});
  });

}else{
  $("#scroll-top").fadeOut("medium");
  $("#navbar").slideUp("medium");
}
});

$(document).ready(function(){
  $("#account-sidebar").click(function(){
    $("#account-sidemenu").css("left", "0");
  });  
  $("#account-dismiss").click(function(){
    $("#account-sidemenu").css("left", "-300px");
  });  
  $('#filter-btn').click(function(){
    $(".shop-filter-sidebar").toggleClass('active');
  })
  $('.filter-sidebar-dismiss').click(function(){
    $(".shop-filter-sidebar").removeClass('active');
  })
});