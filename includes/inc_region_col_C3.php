<?php
/* 
 * Permet de créer une region pour la colonne G3 dans les node.tpl
 * 
 */

?>
<?php //regions pour inserer un bloc dans la colonne C3
if (block_get_blocks_by_region('Colonne_C3')): ?>
<div id="region_col_C3">
    <?php  print render(block_get_blocks_by_region('Colonne_C3')); ?>
</div>
    <?php endif; ?>
<br clear="all"/>

<p>LA REGION EXISTE colonne c3</p>
