//Pour avoir un retour haut dynamique selon longueur du contenu
/*
 *Utiliser dans le html cette ancre:
 *
 * <!-- retour haut selon resolution de l'ecran -->
          <a href="#general" id="retour_haut">Haut de page</a>
 *
 **/
Drupal.behaviors.goTop = function(context) {
  var link = $('#retour_haut', context);

  $(window).scroll(function(){
    if ($(window).scrollTop() >= 250) { // Si la page est descendue de 250px.
      link.fadeIn(500); // On fait un fadeIn pendant 500ms.
    } else {
      link.fadeOut(500); // On est au dessus de 250 donc fadeOut pendant 500ms.
    }
  });

  link.click(function(e) {
    e.preventDefault; // Lors d'un click on empêche le navigateur de rafraichir
    //$.scrollTo(400); // Et on va en haut de page.
    $('html,body').animate({scrollTop:0},'slow');
  });
}
//Pour avoir un scroll smooth. http://www.learningjquery.com/2007/08/animated-scrolling-for-same-page-links
 $(document).ready(function() {
 $('a[href*=#]').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
            && location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
            if ($target.length) {
                $target.ScrollTo(400);
                return false;
            }
        };
    });
});
