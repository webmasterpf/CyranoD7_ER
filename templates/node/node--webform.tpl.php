<?php
/* 
 * Permet d'avoir un template spécial pour le webform
 * NODE-WEBFORM.TPL GENERIK si besoin possible faire theme pour webform selon node-webform-NID.tpl.php
 */

?>
<!-- NODE-WEBFORM.TPL GENERIK -->
<div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
   
     
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
   * Couleur des H1 de page :
   * rouge
   * orange
   * vert
   * bleu
   * rose
   * violet
         */?>
    <!--______________COLONNE GAUCHE 1________________ -->
<div id="colonne-1" class="colG1_webform col1_layout_200_570_200">
     <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="title violet"><?php print $title; ?></h1>

    <?php endif; ?>
      <br clear="all"/>
       <!-- Deco page-->
       
    <?php  print $node->field_image_deco_lycee[0]['view'] /*Image deco page lycee*/ ?>

<?php //region colonne C1
global $theme_path;
include ($theme_path.'/includes/inc_region_col_C1.php');
?>

</div>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="colonne-2" class="colG2_webform noir-vert col2_layout_200_570_200">
     <?php if ($submitted) { ?>
    <span class="submitted"><?php print $submitted?></span>
  <?php }; ?>

 

  <div class="content">
    <table>
    <tr>
    <td><?php  print render($content['body']); ?></td>
    </tr>
    <tr>
    <td><?php  print render($content['webform']); ?></td>
    </tr>
    </table>
  </div>

               <?php //region colonne C2
global $theme_path;
include ($theme_path.'/includes/inc_region_col_C2.php');
?>

    <?php if ($links): ?>
    <div class="links"> <?php print $links; ?></div>
  <?php endif; ?>

     <?php if ($terms) { ?>
    <span class="taxonomy"><?php print $terms?></span>
  <?php }; ?>

</div>
<!--______________COLONNE GAUCHE 3________________ -->

<div id="colonne-3" class="colG3_webform col3_layout_200_570_200">
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


    <?php if ($terms): ?>
      <div class="taxonomy"><?php //print $terms; ?></div>
    <?php endif;?>

   

</div>


   
  <?php if ($picture) { print $picture; }?>

  <?php if ($page == 0) { ?>
    <?php if ($title) { ?>
      <h2 class="title"><a href="<?php print $node_url?>"><?php print $title?></a></h2>
    <?php }; ?>
  <?php }; ?>

<div class="clear-block clear"></div>

</div><!-- /node -->