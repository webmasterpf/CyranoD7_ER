<?php
/* 
 * Le footer du site
 * Placé en includes
 */

?>
<!-- ______________________ FOOTER _______________________ -->
<?php if ($page['footer']): ?>
    <div id="footer">
      <?php print render($page['footer']); ?>
    </div> <!-- /footer -->
  <?php endif; ?>
  <div id="bloc_stats">
<?php
  global $theme_path;
  include ($theme_path.'/js/code_stats.php');
  ?>
</div>
    </div> <!-- /general OR /page -->
