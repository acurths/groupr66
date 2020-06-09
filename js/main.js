$(document).ready(function(){


// ===== Fades in page on load ====
// $('body').css('display', 'none');
// $('body').fadeIn(500);

new WOW().init();

if ($('.wow').hasClass('animated')) {
            $(this).removeClass('animated');
            $(this).removeAttr('style');
            new WOW().init();
}

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

$('.parallax').parallaxBackground();


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
