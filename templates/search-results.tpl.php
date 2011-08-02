<?php

/**
 * @file
 * Default theme implementation for displaying search results.
 *
 * This template collects each invocation of theme_search_result(). This and
 * the child template are dependent to one another sharing the markup for
 * definition lists.
 *
 * Note that modules may implement their own search type and theme function
 * completely bypassing this template.
 *
 * Available variables:
 * - $search_results: All results as it is rendered through
 *   search-result.tpl.php
 * - $module: The machine-readable name of the module (tab) being searched, such
 *   as "node" or "user".
 *
 *
 * @see template_preprocess_search_results()
 */
?>
<!--____________ TEMPLATE CUSTOM POUR RESULTATS RECHERCHE _____-->
<!--____________ search-results.tpl.php _____-->

<!--______________COLONNE 1________________ -->
<div id="colonne-1" class="col1_layout_200_570_200">

    <?php if ($search_results) : ?>
     <h1 class="title violet"><?php print t('Search results');?></h1>
<?php else : ?>
  <h2><?php print t('Your search yielded no results');?></h2>
<?php endif; ?>


    

 


      <br clear="all"/>
   <h1 class="title violet"><?php print $title; ?></h1>



<?php //region colonne C1
global $theme_path;
include ($theme_path.'/includes/inc_region_col_C1.php');
?>


  

        
</div>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="result-search" class="col2_layout_200_570_200">
<?php if ($search_results) : ?>
 
  <ol class="search-results <?php print $module; ?>-results">
    <?php print $search_results; ?>
  </ol>
  <?php print $pager; ?>
<?php else : ?>
  <?php print search_help('search#noresults', drupal_help_arg()); ?>
<?php endif; ?>
</div>
<!--______________COLONNE GAUCHE 3________________ -->

<div id="colonne-3" class="col3_layout_200_570_200">
     <?php print $picture; ?>



    <div class="content">

        <br clear="all"/>
           <?php if ($content['field_vue_actus_lycee']): ?>
        <div id="bloc-actu-lycee">
           <?php  print render($content['field_vue_actus_lycee']); /*Vue actus du lycée*/ ?>
        </div>
           <?php endif;?>
    </div>
           <?php //inclusion d'une vue via php
global $theme_path;
include ($theme_path.'/includes/inc_vue_generik_tpl.php');
?>


           <?php //region colonne C3
global $theme_path;
include ($theme_path.'/includes/inc_region_col_C3.php');
?>
