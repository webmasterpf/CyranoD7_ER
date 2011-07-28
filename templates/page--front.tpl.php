<?php
global $theme_path;
include ($theme_path.'/includes/inc_header.php');
?>
<!-- ______________________ LAYOUT HOMEPAGE _______________________ -->
 <!-- ______________________ CONTENU _______________________ -->
    
	<div id="mainPage">
	
     
   

          <?php if ($page ['content_top']): ?>
            <div id="content-top">
              <?php print render ($page ['content_top']); ?>
            </div> <!-- /#content-top -->
          <?php endif; ?>

   <!-- ______________________ ZONE DIAPO _______________________ -->
			
              <?php if ($page['DiapoHP']): ?>
                 <div id="HPDiapo">
                  <?php print render($page['DiapoHP']); ?>
                 </div>
              <?php endif; ?>
              
            
         
<br clear="all"/>


<!-- ______________________ PARTIE BAS GAUCHE _______________________ -->
                 <?php if ($page ['HPBasGauche']): ?>
                 <div id="BasGaucheHP"><?php print render ($page ['HPBasGauche']); ?></div>
              <?php endif; ?>  
		 
<!-- ______________________ PARTIE BAS DROITE _______________________ -->
      
	  
	 
        <?php if ($page ['HPBasDroit']): ?>
     <div id="BasDroitHP"><?php print render ($page ['HPBasDroit']); ?></div>
        <?php endif; ?>
		
     
	  
   
	<br clear="all"/>
	<!-- ______________________ CONTENU BAS _______________________ -->
    <?php if ($page ['content_bottom_home']): ?>
    <div id="content-bottom-home">
      <?php print render ($page ['content_bottom_home']); ?>
         <?php print $feed_icons; ?>
    </div><!-- /#content-bottom -->
    <?php endif; ?>
    
    <?php if ($page ['content_bottom']): ?>
            <div id="content-bottom">
              <?php print ($page ['content_bottom']); ?>
            </div><!-- /#content-bottom -->
          <?php endif; ?>
	
	
	 </div> <!-- /mainPage -->
     <?php
global $theme_path;
include ($theme_path.'/includes/inc_footer.php');
?>
 