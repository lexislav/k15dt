<?php

$nid = 'node/'.$row->nid;

?>

<dl class="mm-nolabels mm-noborder">
    <dt><?=$row->node_title?></dt>
    <dd><a href="<?=drupal_get_path_alias($nid)?>" title="<?=$row->node_title?>">
            <i class="fa fa-file-pdf-o"></i> <?=$row->node_title?></a></dd>
</dl>