<?php
/* 
 * Permet de créer une region pour la colonne G2 dans les node.tpl
 * 
 */

?>
<?php //regions pour inserer un bloc dans la colonne C2
if (block_get_blocks_by_region('Colonne_C2')): ?>
<div id="region_col_C2">
    <?php  print render(block_get_blocks_by_region('Colonne_C2')); ?>
</div>
    <?php endif; ?>
<br clear="all"/>
<h2>LA REGION EXISTE colonne c2</h2>