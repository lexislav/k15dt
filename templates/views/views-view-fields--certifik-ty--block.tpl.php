<?php
$uricko = $row->field_field_cert_logo[0]['raw']['uri'];
?>
<div class="m-card_certificate l-single">
    <article class="m-story">
        <header>
            <div class="m-item--image" style="background-image: url(<?= image_style_url('x130', $uricko) ?>)">
                <a href="<?= drupal_get_path_alias('node/'.$row->nid)?>">
                    <img src="<?= image_style_url('x130', $uricko) ?>" alt=""/>
                </a>
            </div>
            <div class="m-item--summary">
                <h1 class="m-item--hed">
                    <a href="<?= drupal_get_path_alias('node/'.$row->nid)?>"><?= $row->node_title ?></a>
                </h1>

                <div class="m-item--description"><?= $fields['field_cert_popis']->content ?></div>
            </div>
        </header>
    </article>
</div>