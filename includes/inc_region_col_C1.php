<?php
/* 
 * Permet de créer une region pour la colonne C1 dans les node.tpl
 * <p>LA REGION EXISTE</p>
 */

?>
<?php //regions pour inserer un bloc dans la colonne C1
if ($page ['Colonne_C1']): ?>
<div id="region_col_G1">
    <?php  print render ($page ['Colonne_C1']); ?>
</div>
    <?php endif; ?>
<br clear="all"/>
<p>LA REGION EXISTE colonne C1</p>
