(function() {
    var openBtn = document.getElementById( 'menu-btn' ),
        overlay = document.querySelector( 'div.nav-overlay' );
        transEndEventNames = {
          'WebkitTransition': 'webkitTransitionEnd',
          'MozTransition': 'transitionend',
          'OTransition': 'oTransitionEnd',
          'msTransition': 'MSTransitionEnd',
          'transition': 'transitionend'
        },
        transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
        support = { transitions : Modernizr.csstransitions };

  function toggleOverlay() {
    if( classie.has( overlay, 'nav-open' ) ) {
      classie.remove( overlay, 'nav-open' );
      classie.add( overlay, 'nav-close' );
      var onEndTransitionFn = function( ev ) {
        if( support.transitions ) {
          if( ev.propertyName !== 'visibility' ) return;
          this.removeEventListener( transEndEventName, onEndTransitionFn );
        }
        classie.remove( overlay, 'nav-close' );
      };
      if( support.transitions ) {
        overlay.addEventListener( transEndEventName, onEndTransitionFn );
      }
      else {
        onEndTransitionFn();
      }
    }
    else if( !classie.has( overlay, 'nav-close' ) ) {
      classie.add( overlay, 'nav-open' );
    }
  }

  openBtn.addEventListener( 'click', toggleOverlay );
})();

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

function fixNav(){
  var spySection = $(".header"),
      nav        = $(".nav-bar");

  $(window).scroll(function(){
    if ($(this).scrollTop() > spySection.outerHeight() - nav.outerHeight()) {
      $(".nav-bar").addClass('bg-active');
    } else {
      $(".nav-bar").removeClass('bg-active');
    }
  });
}

$(function(){
  fullHeight(".home .header");
  fixNav();
  menuToggle(".menu-btn");
});

$(window).resize(function(){
  fullHeight(".home .header");  
  fixNav();
});

$(window).bind('scroll', function(){
  var hVal  = (90 + $(window).scrollTop() * 2);

  $(".gradient-expander").css({
    'min-height' : '90px',
    'height'     : hVal + 'px',
    'max-height' : $(".header").height() + "px"
  });
});
