<div class="m-section l-feed_one bg-white">

    <header class="m-section--header"></header>

    <div class="row rowfix">
        <div class="m-card_bigteaser l-single bg-secondary-light">

            <article class="m-story">
                <header>
                    <div class="m-item--image" style="background-image: url(<?= image_style_url('x633-540', $items[0]['field_basic_img']['#items'][0]['uri']) ?>)">
                        <a href=""><img src="<?= image_style_url('x633-540', $items[0]['field_basic_img']['#items'][0]['uri']) ?>" alt="" /></a>
                    </div>

                    <div class="m-item--summary">
                        <h1 class="m-item--hed"><a href=""><?= $items[0]['field_basic_title']['#items'][0]['value'] ?></a></h1>

                        <div class="m-item--description"><?= $items[0]['field_basic_text']['#items'][0]['value'] ?></div>

                        <?php
                        // @todo: tady se parsuje barevny kod a beru z nej jen cislo, zde by se měla používat classa bg-cisloBarvy, nikoli color-CisloBarvy
                        $barva = explode("-",$items[0]['field_barva_odkazu']['#items'][0]['value']);
                        $barvaClass = 'bg-'.$barva[1];
                        ?>

                        <div class="m-card--more <?php echo $barvaClass; ?>">
                            <a href="<?= test_lang_prefix($items[0]['field_page_link']['#items'][0]['url']) ?>" title="<?= $items[0]['field_page_link']['#items'][0]['title'] ?>"><?= $items[0]['field_page_link']['#items'][0]['title'] ?></a>
                        </div>
                    </div>
                </header>
            </article>

        </div>
    </div>

    <footer class="m-section--footer"></footer>

</div>
