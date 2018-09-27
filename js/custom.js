
(function($) {
  
  "use strict";
    /*--=====================
  hide double popup
  ======================--*/
    $("#buttonid").click(function(){
        $('#modal_id_you_want_to_hid').modal('hide');
    });

  /*==========================
  landing area slider
  =========================*/

	$('.landing-slider-area').slick({
	  dots: true,
	  infinite: true,
	  speed: 500,
	  autoplay:true,
	  arrows:false,
	  fade: true,
	  cssEase: 'linear'
	});



 /*--======================
 clients slider
 ========================--*/
 	$('#site-carosel').slick({
	  slidesToShow: 5,
	  slidesToScroll: 1,
	  autoplay: true,
	  arrow:true,
	  dots: false,
	  autoplaySpeed: 2000,
	   responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 3
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1
	      }
	    }
	  ]
	});



})(window.jQuery);

// pagination js call
const c = document.querySelector('.pagination-sites')
const indexs = Array.from(document.querySelectorAll('.index'))
let cur = -1
indexs.forEach((index, i) => {
  index.addEventListener('click', (e) => {
    // clear
    c.className = 'pagination-sites'
    void c.offsetWidth; // Reflow
    c.classList.add('open')
    c.classList.add(`i${i + 1}`)
    if (cur > i) {
      c.classList.add('flip')
    }
    cur = i
  })
})