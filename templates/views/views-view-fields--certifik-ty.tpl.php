<?php



if (isset($row->field_field_cert_nahled[0])) {
    $uricko = $row->field_field_cert_nahled[0]['raw']['uri'];
} else {
    $uricko = $row->field_field_cert_cert[0]['rendered']['#preview'];
}
?>
<article class="m-story">
    <header>
        <div class="m-item--image mm-preview-fit" style="background-image: url(<?= image_style_url('x595-0', $uricko) ?>)">
            <a href="<?=drupal_get_path_alias('node/'.$row->nid)?>">
                <img src="<?= image_style_url('x595-0', $uricko) ?>" alt=""/>
            </a>
        </div>
        <div class="m-item--summary">
            <h1 class="m-item--hed">
                <?= $fields['title']->content ?>
            </h1>

            <div class="m-item--description">
                <p><?= $fields['field_cert_popis']->content ?></p>
                <a href="<?=drupal_get_path_alias('node/'.$row->nid)?>">&rarr;</a>
            </div>
            <div class="m-item--meta">
                <span><?= $row->field_field_cert_kategorie[0]['rendered']['#markup'] ?>
            </div>
        </div>
    </header>
</article>
