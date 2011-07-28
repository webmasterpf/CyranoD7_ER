<?php
/* 
 * Le footer du site
 * Place en includes
 */

?>
<!-- ______________________ FOOTER _______________________ -->
<?php if ($page['footer']): ?>
    <div id="footer">
      <?php print render($page['footer']); ?>
    </div> <!-- /footer -->
  <?php endif; ?>
  <div id="bloc_stats"><?php include "js/code_stats.php";?></div>
    </div> <!-- /general OR /page -->