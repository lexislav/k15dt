<?php
if (isset($row->field_field_zpravodaj_main_img[0])) {
    $uricko = $row->field_field_zpravodaj_main_img[0]['raw']['uri'];
} else {
    $uricko = $row->field_field_zpravodaj_foogalerie[0]['raw']['entity']->field_fotogalerie_main_img['und'][0]['uri'];
}
?>
<article class="m-story">
    <header>
        <div class="m-item--image" style="background-image: url(<?= image_style_url('x595-0', $uricko) ?>)">
            <a href="<?= $GLOBALS['base_url'] ?>/?q=node/<?= $row->nid ?>">
                <img src="<?= image_style_url('x595-0', $uricko) ?>" alt=""/>
            </a>
        </div>
        <div class="m-item--summary">
            <h1 class="m-item--hed">
                <?= $fields['title']->content ?>
            </h1>

            <div class="m-item--description">
                <p><?= $fields['field_zpravodaj_perex']->content ?><i class="fa fa-arrow-right"></i></p>
            </div>
            <div class="m-item--meta">
                <span><?= $row->field_field_zpravodaj_kategorie[0]['rendered']['#markup'] ?> /</span> <span
                    class="colored"><?= $row->field_field_zpravodaj_publikace[0]['rendered']['#markup'] ?></span>
            </div>
        </div>
    </header>
</article>
