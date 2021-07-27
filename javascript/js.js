
//inicializaa el smot scrooll
var scroll = new SmoothScroll('a[href*="#"]', {
    offset: 100,speed: 800,

  });
      
// se esconda el vavbar collapse

  $('.js-scroll-trigger').click(function () {
      $('.navbar-collapse').collapse('hide');
    });
    // inicializar animaciones
  
  $(document).ready(function () {
        new WOW().init();
      
  
      });
      
      