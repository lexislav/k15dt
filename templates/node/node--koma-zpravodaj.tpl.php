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

    <article class="m-story">
        <header>
            <div class="m-story--image" style="background-image: url(http://lorempixel.com/650/500)">
                <a href=""><img src="http://lorempixel.com/650/500" alt="" /></a>
            </div>

            <div class="m-story--summary">

                <h1 class="m-story--hed"><a href="">lalalal<?php print $title; ?></a></h1>

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
                <?= ($content['field_zpravodaj_text']['#items'][0]['value']); ?>

                <?php
                if (isset($content['field_zpravodaj_video']['#items'])) {

                    foreach ($content['field_zpravodaj_video']['#items'] AS $video) { ?>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $video['video_id'] ?>?rel=0" frameborder="0" allowfullscreen></iframe>
                        <br />
                    <?php };
                } ?>
            </div>

            <?php
            if (isset($node->field_zpravodaj_foogalerie['und'])):
                ?>
                <aside>
                    <div class="m-aside-block">
                        <header class="m-aside-block--header">
                            <div class="m-aside-block--summary">
                                <h2 class="m-aside-block--hed">&rarr; <?php print t('Fotogalerie') ?></h2>

                                <div class="m-aside-block--meta">
                                    (<?= count($node->field_zpravodaj_foogalerie['und'][0]['entity']->field_fotogalerie_imgs['und']) ?> <?php print t('fotografií') ?>)
                                </div>
                            </div>
                        </header>
                        <div class="m-aside-block--content">
                            <ul class="m-gallery mm-medium" class="clearing-thumbs" data-clearing>
                                <?php foreach ($node->field_zpravodaj_foogalerie['und'][0]['entity']->field_fotogalerie_imgs['und'] AS $obrazek) { ?>
                                    <li class="m-gallery--item">
                                        <a href="<?= image_style_url('x186-139', $obrazek['uri']) ?>"><img src="<?= image_style_url('x412-300', $obrazek['uri']) ?>"></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>


                    </div>
                </aside>
                <?php
            endif;
            ?>
        </div>
    </article>
    <div class="row">
        <footer class="m-section--footer">
            <div class="l-third">
                <div class="m-section--top"><a href="">Nahoru &uarr;</a></div>
            </div>
            <div class="l-two-thirds">
                <?php
                $tree = taxonomy_get_tree(5);
                ?>
                <ul class="m-section--nav inline-right">
                    <?php
                    foreach ($tree as $term) {

                        ?>
                        <li>
                            <!--                            @TODO UPRAVIT CESTU-->
                            <a href="<?= $GLOBALS['base_url'] ?>?q=zpravodaj&field_zpravodaj_kategorie_tid=<?= $term->tid ?>" title="<?= $term->name ?>"><?= $term->name ?></a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </footer>
    </div>
</div>
