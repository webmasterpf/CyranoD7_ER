<!--_____________ /////////\\\\\\\\\\\_____________________ -->
<!--_____________  NODE.TPL PAGE LYCEE _____________________ -->
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>">
	<div class="node-inner">
  
      <?php /* choix du layout selon nombre de colonne
         * .col1_layout_200_570_200{} .col1_layout_330_all{} .col1_layout_18_56_25{}
         * .col2_layout_200_570_200{} .col2_layout_330_all{} .col2_layout_18_56_25{}
         * .col3_layout_200_570_200{} .col3_layout_330_all{} .col3_layout_18_56_25{}
       *
       * Couleur des border de separation,sur la colonne 2
       * .rouge-bleu
       * .rose-bleu
       * .noir-vert
       * .bleu-violet
       * .vert-violet
       *
       *    * Couleur des H1 de page :
   * rouge
   * orange
   * vert
   * bleu
   * rose
   * violet
         */?>
              <!-- ______________________ COLONNE C1 _______________________ -->
        <div id="colonne-1" class="col1_layout_200_570_200">
              <?php if ($title): ?>
                <h1 class="title rouge"><?php print $title; ?></h1>
              <?php endif; ?>
	 <?php //region colonne C1
global $theme_path;
include ($theme_path.'/includes/inc_region_col_C1.php');
?>
          </div>
             	<!--fin du contenu gauche -->

    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>

    <?php print $user_picture; ?>
		    
    <?php if ($display_submitted): ?>
      <span class="submitted"><?php print $date; ?> — <?php print $name; ?></span>
    <?php endif; ?>
<!-- ______________________ COLONNE C2 _______________________ -->
 <div id="colonne-2" class="col2_layout_200_570_200 rouge-bleu">
  	  <?php 
  	    // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        print render($content['body']);
       ?>
  	

<?php
/* inclure des champs CCK dans le node selon http://robotlikehuman.com/web/printing-cck-content-field-values-drupal-7
 * Ce qui donne pour D7
 */
print render($content['field_fichier_joint']);
?>


  	
    <?php if (!empty($content['links']['terms'])): ?>
      <div class="terms"><?php print render($content['links']['terms']); ?></div>
    <?php endif;?>
  	
    <?php if (!empty($content['links'])): ?>
	    <div class="links"><?php print render($content['links']); ?></div>
	  <?php endif; ?>
</div> <!-- /colonne 2 -->
         <!-- ______________________ COLONNE C3 _______________________ -->
       
           <div id="colonne-3" class="col3_layout_200_570_200">
             <?php
/* inclusion des termes de taxonomie associés
 * Nouveau dans  D7 - choisir si affiche nom du vocabulaire ou pas
 */
print render($content['taxonomy_vocabulary_1']);
?>

  <?php //inclusion d'une vue via php
global $theme_path;
include ($theme_path.'/includes/inc_vue_generik_tpl.php');
?>

            <?php //region colonne C3
global $theme_path;
include ($theme_path.'/includes/inc_region_col_C3.php');
?>

        </div>
         
        
	</div> <!-- /node-inner -->
</div> <!-- /node-->

<?php print render($content['comments']); ?>