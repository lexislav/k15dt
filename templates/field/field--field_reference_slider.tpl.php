<div class="m-section l-feed_carousel">

    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-section--hed mm-big">Reference</h2>
            </div>
        </header>
    </div>

    <div class="row rowfix">
        <div class="l-full">
            <div class="slides full-carousel">

                <?php
                foreach ($element['#object']->field_reference_slider['und'] AS $pole) {

                    $rok = str_replace('-01-01 00:00:00', '', $pole['entity']->field_reference_rok['und'][0]['value']);
                    //  if (isset($pole['entity']->field_field_reference_main_img['und'][0])) {
                    //      $uricko = $pole['entity']->field_field_reference_main_img['und'][0]['uri'];
                    //  } else {
                    //        @TODO DODELAT
                    // $uricko = $pole['entity']->field_field_reference_fotogalerie['und'][0]['raw']['target_id'];
                    //     }
                    $uricko = $pole['entity']->field_reference_main_img['und'][0]['uri'];
                    ?>

                    <div class="m-card_reference l-single slide">

                        <article class="m-story">
                            <header>
                                <div class="m-item--image" style="background-image: url(<?= image_style_url('x1266-0', $uricko) ?>)">
                                    <a href="<?= $GLOBALS['base_url'] ?>/?q=node/<?= $pole['entity']->nid ?>">
                                        <img src="<?= image_style_url('x1266-0', $uricko) ?>" alt="" />
                                    </a>
                                </div>

                                <div class="m-item--summary">
                                    <h1 class="m-item--hed">VYBRANÉ REFERENCE</h1>

                                    <div class="m-item--description">
                                        <p>
                                            <a href="<?= $GLOBALS['base_url'] ?>/?q=node/<?= $pole['entity']->nid ?>"><?= $pole['entity']->title ?></a>
                                            <span class="color-body-font">[<?= $rok ?>]</span></p>
                                    </div>
                                </div>
                            </header>

                            <div class="m-card--more">&rarr;</div>
                        </article>

                    </div>
                <?php } ?>

            </div>
        </div>
    </div>


    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href="">Nahoru &uarr;</a></div>
            </div>
            <div class="l-half">
                <div class="m-section--more"><a href="">Celý archiv &rarr;</a></div>
            </div>
        </footer>
    </div>

</div>


