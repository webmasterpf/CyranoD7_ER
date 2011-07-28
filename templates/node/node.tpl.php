<!--_____________  NODE.TPL BASIQUE _____________________ -->
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>">
	<div class="node-inner">
    <!-- ______________________ COLONNE C1 _______________________ -->
      <?php /* choix du layout selon nombre de colonne
         * .col1_layout_200_590_200{} .col1_layout_330_all{} .col1_layout_18_56_25{}
         * .col2_layout_200_590_200{} .col2_layout_330_all{} .col2_layout_18_56_25{}
         * .col3_layout_200_590_200{} .col3_layout_330_all{} .col3_layout_18_56_25{}
         */?>
        <div id="colonne-1" class="CHOIX_DU_LAYOUT">
              <?php if ($title): ?>
                <h1 class="title"><?php print $title; ?></h1>
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
 <div id="colonne-2" class="CHOIX_DU_LAYOUT">
  	  <?php 
  	    // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        print render($content['body']);
       ?>
  	</div>
  	
    <?php if (!empty($content['links']['terms'])): ?>
      <div class="terms"><?php print render($content['links']['terms']); ?></div>
    <?php endif;?>
  	
    <?php if (!empty($content['links'])): ?>
	    <div class="links"><?php print render($content['links']); ?></div>
	  <?php endif; ?>
            
         <!-- ______________________ COLONNE C3 _______________________ -->
       
           <div id="colonne-3" class="CHOIX_DU_LAYOUT">
            <?php //region colonne C3
global $theme_path;
include ($theme_path.'/includes/inc_region_col_C1.php');
?>
        </div>
         
        
	</div> <!-- /node-inner -->
</div> <!-- /node-->

<?php print render($content['comments']); ?>