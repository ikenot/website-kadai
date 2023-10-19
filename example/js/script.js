
$(function(){
  $('.carousel, .carouselsp').slick({
    autoplay: true,
    dots: true,
    infinite: true,
    autoplaySpeed: 2000,
    arrows: false,
  });
  $( ".header__hamberger--cross" ).click(function() {
    $('.header__hamberger--line:nth-child(1)').toggleClass('cross__animation--one');
    $('.header__hamberger--line:nth-child(2)').toggleClass('cross__animation--two');
    $('.header__hamberger--line:nth-child(3)').toggleClass('cross__animation--three');  
    $( ".header__hamberger--list, .header__hamberger--empty" ).fadeToggle( function() {
    });
});


$( ".header__hamberger--child" ).click(function() {
  $( ".header__hamberger--list, .header__hamberger--empty" ).fadeOut( function() {});
  $('.header__hamberger--line:nth-child(1)').removeClass('cross__animation--one');
  $('.header__hamberger--line:nth-child(2)').removeClass('cross__animation--two');
  $('.header__hamberger--line:nth-child(3)').removeClass('cross__animation--three');      
  });

});