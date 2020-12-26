$(document).ready(function () {
$('.property-index').owlCarousel({
    responsiveClass:true,
    lazyLoad : true,
    items:1,
    loop: true,
    margin: 0,
    dots: true,
})
 $('.gallery_single_owl').owlCarousel({
        responsiveClass:true,
        items:1,
        lazyLoad : true,
        loop: true,
        margin: 0,
        nav: true,
        dots: true,
    })
    
$('.blogs_owl').owlCarousel({
    responsiveClass:true,
    items:4,
    loop: false,
    margin: 20,
    lazyLoad : true,
    dots: true,
    responsive: {
        0: {
            items: 1,
            stagePadding: 40,

            nav: false
        },

        850: {
            items: 2,
            nav: true,
        },
        1400: {
            items: 4,
            nav: true,
        }
    }
})
$('.packet_slider').owlCarousel({
  responsiveClass:true,
  items:2,
  loop: false,
  lazyLoad : true,
  nav: false,

  responsive: {
    0: {
      items: 1,
      margin: 10,
      stagePadding: 20,
  },

  850: {
      items: 3,
      margin:50,

  },
      1400: {
          items: 3,
          margin:50,

      }
  }
})
});

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  