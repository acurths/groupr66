$(document).ready(function(){

$('.menu-btn').change(function() {
  if ($('.menu-btn').is(":checked")) {
    $('body').css('position','fixed');

  } else {
    $('body').css('position','relative');
  }
});



// ===== Fades in page on load ====
// $('body').css('display', 'none');
// $('body').fadeIn(500);

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
