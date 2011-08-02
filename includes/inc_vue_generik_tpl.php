<?php
/*
 * Inclusion d'une vue dans node.tpl
 * Usage pour drupal 7 selon evolution du code
 */

?>
<h2>VERSION AVEC TITRE</h2>
<?php

$viewname = 'liste_annonce_accueil';
$view = views_get_view ($viewname);
$view->set_display('block_2');


//Exécution de le vue
$view->pre_execute();
$view->execute();

if ($view->result) {
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu)
  $output = '<div id="bloc_vdl_sortie"><h3>'.$view->get_title().'</h3>' . $view->render().'</div>';
}

//Affiche la vue
print render ($output);

?>
<h2> OU VERSION SIMPLE SANS TITRE</h2>
<?php
$viewName = 'liste_annonce_accueil';
print views_embed_view($viewName,'block_2');
?>