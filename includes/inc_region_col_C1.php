<?php
/* 
 * Permet de créer une region pour la colonne G1 dans les node.tpl
 * <p>LA REGION EXISTE</p>
 */

?>

<?php //regions pour inserer un bloc dans la colonne G1
if ($page ['colonne_c1']): ?>
<div id="region_col_G1">
    <?php  print render ($page ['colonne_c1']); ?>
</div>
    <?php endif; ?>
<br clear="all"/>

<?php  print $colonne_c1; ?>


 <?php  print render ($page ['colonne_c1']); ?>
