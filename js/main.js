$(document).ready(function(){

$('.menu-btn').change(function() {
  if ($('.menu-btn').is(":checked")) {
    $('body').css('position','fixed');

  } else {
    $('body').css('position','relative');
  }
});

// ===== Fades in page on load ====
$('body').css('display', 'none');
$('body').fadeIn(100);

new WOW().init();

if ($('.wow').hasClass('animated')) {
            $(this).removeClass('animated');
            $(this).removeAttr('style');
            new WOW().init();
}

//
// $(".box-one").hover(function(){
//
//     $("#arrow").addClass("d-block");
//
// }, function () {
//     $("#arrow").removeClass("d-block");
// });
// $(".box-two").hover(function(){
//
//     $("#arrow-one").addClass("d-block");
//
// }, function () {
//     $("#arrow-one").removeClass("d-block");
// });
//
// $(".box-three").hover(function(){
//
//     $("#arrow-two").addClass("d-block");
//
// }, function () {
//     $("#arrow-two").removeClass("d-block");
// });




// ===== Parallax BG ====
$('.parallax').parallaxBackground();

// ===== Scroll to Top ====
$(window).scroll(function() {
  if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
    $('#return-to-top').fadeIn(200); // Fade in the arrow
  } else {
    $('#return-to-top').fadeOut(200); // Else fade out the arrow
  }
});
$('#return-to-top').click(function() { // When arrow is clicked
  $('body,html').animate({
    scrollTop: 0 // Scroll to top of body
  }, 500);
});

// if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
// window.onmousewheel = document.onmousewheel = wheel;
//
// function wheel(event) {
//     var delta = 0;
//     if (event.wheelDelta) delta = event.wheelDelta / 120;
//     else if (event.detail) delta = -event.detail / 3;
//
//     handle(delta);
//     if (event.preventDefault) event.preventDefault();
//     event.returnValue = false;
// }
//
// var goUp = true;
// var end = null;
// var interval = null;
//
// function handle(delta) {
// 	var animationInterval = 10; //lower is faster
//   var scrollSpeed = 10; //lower is faster
//
// 	if (end == null) {
//   	end = $(window).scrollTop();
//   }
//   end -= 20 * delta;
//   goUp = delta > 0;
//
//   if (interval == null) {
//     interval = setInterval(function () {
//       var scrollTop = $(window).scrollTop();
//       var step = Math.round((end - scrollTop) / scrollSpeed);
//       if (scrollTop <= 0 ||
//           scrollTop >= $(window).prop("scrollHeight") - $(window).height() ||
//           goUp && step > -1 ||
//           !goUp && step < 1 ) {
//         clearInterval(interval);
//         interval = null;
//         end = null;
//       }
//       $(window).scrollTop(scrollTop + step );
//     }, animationInterval);
//   }
// }
//



// $('.homepage-hero').parallaxBackground({
//   parallaxBgImage    :'../img/gr66-hp.jpg',
//   parallaxBgPosition :'center center',
//   parallaxBgRepeat   :'no-repeat',
//   parallaxBgSize     :'cover',
//   parallaxSpeed      : 0.5,
//   parallaxDirection  :'up'
// });

// ===== Show and Hide ====

//
//   $('#_____').mouseenter(function(){
//   $('._____').hide();
//   $('._____').show();
//   });
//
//   $('#_____').mouseleave(function(){
//   $('._____').hide();
//   $('._____').show();
//   });
//
//
// });

// ===== Change CSS ====

// $("p").css("background-color", "yellow");


// ===== Add Class ====

// $("em").addClass("selected");
// $("#myid").addClass("highlight");

// ===== Add Class ====



});
