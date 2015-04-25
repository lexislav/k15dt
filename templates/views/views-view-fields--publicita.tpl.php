<?php
$nid = 'node/'.$row->nid;
?>
<div class="m-card_faq l-single">

    <article class="m-story">
        <header>
            <h1 class="m-item--hed">
                <a href="<?=drupal_get_path_alias($nid)?>">
                    <?= $row->node_title ?>
                </a>
            </h1>

            <div class="m-item--summary">
                <div class="m-item--description">
                    <p><?= $row->field_field_odkazy_p_popisek[0]['rendered']['#markup'] ?></p>
                </div>
            </div>
        </header>
    </article>

</div>