<?php
$cislo = $view->row_index + 1;
$coco = 'l-single';
if ($cislo == 1 OR $cislo == 6 OR $cislo == 7 OR $cislo == 12 OR $cislo == 13 OR $cislo == 18) {
    $coco = 'l-double';
}
if (isset($row->field_field_zpravodaj_main_img[0])) {
    $uricko = $row->field_field_zpravodaj_main_img[0]['raw']['uri'];
} else {
    $uricko = $row->field_field_zpravodaj_foogalerie[0]['raw']['entity']->field_fotogalerie_main_img['und'][0]['uri'];
}
if ($cislo == 1 OR $cislo == 4 OR $cislo == 7 OR $cislo == 10  OR $cislo == 13 OR $cislo == 16 ) {
    echo ' <div class="blok-feed-slide">';
}
?>
    <div class="m-card_thumb  mm-has-hover <?= $coco ?>">
        <article class="m-story">
            <header>
                <div class="m-item--image" style="background-image: url(<?= image_style_url('x618-480', $uricko) ?>)">
                    <a href="<?= $GLOBALS['base_url'] ?>/?q=node/<?= $row->nid ?>">
                        <img src="<?= image_style_url('x618-480', $uricko) ?>" alt=""/>
                    </a>
                </div>
                <div class="m-item--summary">
                    <h1 class="m-item--hed">
                        <?= $fields['title']->content ?>
                    </h1>

                    <div class="m-item--description">
                        <p>Morbi vulputate ac quam quis feugiat. Mauris dapibus dictum ex, at sodales mauris rutrum vel.
                            Suspendisse vestibulum enim sit amet ultricies hendrerit.</p>
                    </div>
                </div>
                <div class="m-card--more"><i class="fa fa-arrow-right"></i></div>
            </header>
        </article>
    </div>
<?php
if ($cislo == 3 OR $cislo == 6 OR $cislo == 9 OR $cislo == 12  OR $cislo == 15 OR $cislo == 18 ) {
    echo '</div>';
}
