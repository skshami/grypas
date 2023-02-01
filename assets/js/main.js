/* -----------------------------------------------
          Js Main
-------------------------------------------------- */
(function($) {
$(document).ready(function () {

  // Preloader
  $('.loading').delay(500).fadeOut(500);

  // Var Background image
  var pageSection = $(".bg-img, section");
  pageSection.each(function (indx) {

    if ($(this).attr("data-background")) {
      $(this).css("background-image", "url(" + $(this).data("background") + ")");
    }
  });


  // Navigation
  var btn = document.querySelector('.toggle');
  var btnst = true;
  btn.onclick = function () {
    if (btnst == true) {
      document.querySelector('.toggle span').classList.add('toggle');
      document.getElementById('sidebar').classList.add('sidebarshow');
      btnst = false;
    } else if (btnst == false) {
      document.querySelector('.toggle span').classList.remove('toggle');
      document.getElementById('sidebar').classList.remove('sidebarshow');
      btnst = true;
    }
  }


  var serveSlider = new Swiper('.serveSlider', {
    
    autoplay: {
      delay: 2000,
    },
    loop: true,
    breakpoints: {
      575: {
        slidesPerView: 1,
        spaceBetween: 40,
      },
      808: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'fraction',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  var testimonial = new Swiper('.testimonial', {
    slidesPerView: 1,
    centeredSlides: true,
    spaceBetween: 30,
    autoplay: {
      delay: 2500,
    },
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      type: 'fraction',
    },

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
  var priciples = new Swiper('.priciples', {

    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    coverflowEffect: {
      rotate: -15,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    breakpoints: {
      575: {
        slidesPerView: 1,
        spaceBetween: 40,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    },
    autoplay: {
      delay: 2500,
    },
    loop: true,
    pagination: {
      el: ".swiper-pagination",
    },
  });

  var brands = new Swiper('.brands', {
    //slidesPerColumn: 2,
    // autoplay: {
    //   delay: 1500,
    // },
    breakpoints: {
      360: {
        slidesPerView: 1.5,
        spaceBetween: 10,
      },
      410: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 30,
      },
    },
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      type: 'fraction',
    },
  });

  var blog_slider = new Swiper(".blog-slider", {
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
  var princi_single_slider = new Swiper(".princi-single-slider", {
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 3500,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  var appendNumber = 4;
  var prependNumber = 1;
  document
  .querySelector('.prepend-2-slides')
    .addEventListener('click', function (e) {
      e.preventDefault();
      swiper.prependSlide([
        '<div class="swiper-slide">Slide ' + --prependNumber + '</div>',
        '<div class="swiper-slide">Slide ' + --prependNumber + '</div>',
      ]);
    });
  document
    .querySelector('.prepend-slide')
    .addEventListener('click', function (e) {
      e.preventDefault();
      swiper.prependSlide(
        '<div class="swiper-slide">Slide ' + --prependNumber + '</div>'
      );
    });
  document
    .querySelector('.append-slide')
    .addEventListener('click', function (e) {
      e.preventDefault();
      swiper.appendSlide(
        '<div class="swiper-slide">Slide ' + ++appendNumber + '</div>'
      );
    });
  document
    .querySelector('.append-2-slides')
    .addEventListener('click', function (e) {
      e.preventDefault();
      swiper.appendSlide([
        '<div class="swiper-slide">Slide ' + ++appendNumber + '</div>',
        '<div class="swiper-slide">Slide ' + ++appendNumber + '</div>',
      ]);
    });


  })

})(jQuery);

jQuery(document).ready(function($){
  var offset = 100;
  var speed = 250;
  var duration = 500;
      $(window).scroll(function(){
          if ($(this).scrollTop() < offset) {
                    $('.topbutton') .fadeOut(duration);
          } else {
                    $('.topbutton') .fadeIn(duration);
          }
      });
   $('.topbutton').on('click', function(){
          $('html, body').animate({scrollTop:0}, speed);
          return false;
          });
});

