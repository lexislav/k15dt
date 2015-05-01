<div class="m-section l-detail-page">
    <div class="row">
        <header class="m-section--header">
<!--            <div class="l-full">-->
<!--                <nav class="breadcrumbs">-->
<!--                    <a href="#">Home</a>-->
<!--                    <a href="#">Features</a>-->
<!--                    <a class="unavailable" href="#">Gene Splicing</a>-->
<!--                    <a class="current" href="#">Cloning</a>-->
<!--                </nav>-->
<!---->
<!--            </div>-->
        </header>
    </div>
    <!--    --><?php

//    dsm($content);
//    dpm($content);


    //    ?>
    <article class="m-story">
        <header>



            <div class="m-story--image" style="background-image: url(http://lorempixel.com/650/500)">
                <a href=""><img src="http://lorempixel.com/650/500" alt="" /></a>
            </div>

            <div class="m-story--summary">

                <h1 class="m-story--hed"><a href=""><?php print $title; ?></a></h1>

                <div class="m-story--description">
                    <p>Morbi vulputate ac quam quis feugiat. Mauris dapibus dictum ex, at sodales mauris rutrum vel. Suspendisse vestibulum enim sit amet ultricies hendrerit.</p>
                </div>

                <div class="m-story--meta">

                    <dl>
                        <dt><?php print t('Kategorie') ?></dt><dd><?= ($content['field_zpravodaj_kategorie'][0]['#title']); ?></dd>
                    </dl>

                    <dl>
                        <dt><?php print t('Datum') ?></dt><dd><?= ($content['field_zpravodaj_publikace'][0]['#markup']); ?></dd>
                    </dl>

                </div>
            </div>


        </header>
        <div class="m-story--content">
            <div class="m-body--content">
                <?= ($content['field_nabidka_text']['#items'][0]['value']); ?>
            </div>
            <?php
            if (isset($node->field_nabidka_fotogalerie['und'])):
                ?>
                <aside>
                    <div class="m-aside-block">
                        <header class="m-aside-block--header">
                            <div class="m-aside-block--summary">
                                <h2 class="m-aside-block--hed">
                                    &rarr; <?php print t('Fotogalerie') ?></h2>

                                <div class="m-aside-block--meta">
                                    (<?= count($node->field_nabidka_fotogalerie['und'][0]['entity']->field_fotogalerie_imgs['und']) ?> <?php print t('fotografií') ?>)
                                </div>
                            </div>
                        </header>
                        <div class="m-aside-block--content">
                            <div class="m-gallery mm-medium">
                                <?php foreach ($node->field_nabidka_fotogalerie['und'][0]['entity']->field_fotogalerie_imgs['und'] AS $obrazek) { ?>

                                    <div class="m-gallery-item">
                                        <div class="m-gallery-item--image" style="background-image: url(<?= image_style_url('x412-300', $obrazek['uri']) ?>)">
                                            <a href=""><img src="<?= image_style_url('x412-300', $obrazek['uri']) ?>" alt="" /></a>
                                        </div>
                                        <div class="m-gallery-item--summary">
                                            <h2 class="m-gallery-item--hed">Item header</h2>

                                            <div class="m-gallery-item--description">Description</div>
                                        </div>
                                    </div>

                                <?php } ?>
                            </div>
                        </div>

                        <!--
                            not used here
                        <footer class="m-aside-block--footer">
                            <div class="l-half">
                                <div class="m-aside-block--top"><a href="">Block footer&uarr;</a></div>
                            </div>
                            <div class="l-half">
                                <div class="m-aside-block--more"><a href="">Block footer2<i class="fa fa-arrow-right"></i></a></div>
                            </div>
                        </footer>
                        -->

                    </div>
                </aside>
                <?php
            endif;
            ?>
        </div>
    </article>
    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href="">Nahoru &uarr;</a></div>
            </div>
            <div class="l-half">
                <?php
                $tree = taxonomy_get_tree(6);
                ?>
                <ul class="m-section--nav inline-right">
                    <?php
                    foreach ($tree as $term) {

                        ?>
                        <li>
                            <!--                            @TODO UPRAVIT CESTU-->
                            <a href="<?= $GLOBALS['base_url'] ?>?q=mabidka&field_zpravodaj_kategorie_tid=<?= $term->tid ?>"
                               title="<?= $term->name ?>"><?= $term->name ?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </footer>
    </div>
</div>
