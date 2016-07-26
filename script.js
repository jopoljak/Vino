jQuery(document).ready(function($) {
  var toggle = document.getElementById('header-nav-toggle'),
  nav = document.getElementById('header-nav');
        
  toggle.className = 'is-visible';
  nav.className = 'is-hidden';

  // Change Visibility On Click
  toggle.addEventListener('click', function() {
    if (nav.className === 'is-hidden') {
      nav.className = '';
    } else {
      nav.className = 'is-hidden';
    }
  })
  
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }

  });
    
});
