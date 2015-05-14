<div class="m-section l-feed_three bg-white">

    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-section--hed mm-big"><?php print t('Faq / Znalostní báze') ?></h2>
            </div>
        </header>
    </div>

    <div class="row rowfix">
        <?php foreach ($element['#object']->field_segment_faq['und'] AS $pole) { ?>
            <div class="m-card_faq l-single">

                <article class="m-story">
                    <header>
                        <h1 class="m-item--hed">
                            <a href="<?= $GLOBALS['base_url'] ?>/node/<?= $pole['entity']->nid ?>"><?= $pole['entity']->title ?></a>
                        </h1>

                        <div class="m-item--summary">
                            <div class="m-item--description">
                            </div>
                        </div>
                    </header>
                </article>

            </div>
        <?php } ?>
    </div>


    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href=""><?php print t('Nahoru') ?> &uarr;</a></div>
            </div>
            <div class="l-half">
                <ul class="m-section--nav inline-right">
                    <li><a href="" title=""><?php print t('Technická pomoc') ?></a></li>
                    <li><a href=""><?php print t('informace pro architekty') ?></a></li>
                </ul>
            </div>
        </footer>
    </div>

</div>
