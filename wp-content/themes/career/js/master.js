function fullHeight(el) {
  var element = $(el);

  element.css({
    "height" : $(window).height() + "px"
  });
}

function menuToggle(element) {
  var menuBtn = $(element);

  menuBtn.click(function(e){
    e.preventDefault();
    $(this).toggleClass("open");
  });
}

$(window).resize(function(){
  fullHeight(".home .header");  
});

$(function(){
  fullHeight(".home .header");
  menuToggle(".menu-btn");
});

$(window).bind('scroll', function(){
  var hVal  = (90 + $(window).scrollTop() * 2);

  $(".nav-bar").css({
    'min-height' : '90px',
    'height'     : hVal + 'px',
    'max-height' : $(".header").height() + "px"
  });

  var nav = $('.nav-bar__container'),
      distance = $(window).scrollTop(),
      threshhold = $(".header").height() - nav.outerHeight();

  if (distance >= threshhold) { 
    nav.addClass("bg-active");
  } else {
    nav.removeClass("bg-active");
  }
});
