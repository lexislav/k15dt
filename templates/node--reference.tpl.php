<?php
$prev_nid = prev_next_nid($node->nid, 'prev');
$next_nid = prev_next_nid($node->nid, 'next');
$next_title = db_query('SELECT title_field_value FROM {field_data_title_field} WHERE entity_id = :nid AND language = :lang', array(':nid' => $next_nid[0]->next_nid, ':lang' => $node->language))->fetchField();
$prev_title = db_query('SELECT title_field_value FROM {field_data_title_field} WHERE entity_id = :nid AND language = :lang', array(':nid' => $prev_nid[0]->prev_nid, ':lang' => $node->language))->fetchField();
?>
<div class="m-section l-navigation">
    <div class="row">
        <?php
        if ($prev_nid[0]->prev_nid > 0) {
            ?>
            <div class="l-prev m-card_nav">

                <article class="m-story">
                    <header>
                        <div class="m-item--image"
                             style="background-image: url(<?= image_style_url('thumbnail', $prev_nid[0]->prev_img) ?>)">
                            <a href="<?= $GLOBALS['base_url'] ?>/?q=node/<?= $prev_nid[0]->prev_nid ?>">
                                <img src="<?= image_style_url('thumbnail', $prev_nid[0]->prev_img) ?>" alt=""/>
                            </a>
                        </div>
                        <div class="m-item--summary">
                            <h1 class="m-item--hed">
                                <a href="<?= $GLOBALS['base_url'] ?>/?q=node/<?= $prev_nid[0]->prev_nid ?>"><?= $prev_title ?></a>
                            </h1>

                            <div class="m-item--description">
                                <p>Morbi vulputate ac quam quis feugiat. Mauris dapibus dictum ex, at sodales mauris
                                    rutrum
                                    vel. Suspendisse vestibulum enim sit amet ultricies hendrerit.</p>
                            </div>
                        </div>
                    </header>
                </article>
            </div>
        <?php
        }
        ?>
        <?php
        if ($next_nid[0]->next_nid > 0) {
            ?>
            <div class="l-next m-card_nav">
                <article class="m-story">
                    <header>
                        <div class="m-item--image"
                             style="background-image: url(<?= image_style_url('thumbnail', $next_nid[0]->next_img) ?>)">
                            <a href="<?= $GLOBALS['base_url'] ?>/?q=node/<?= $next_nid[0]->next_nid ?>">
                                <img src="<?= image_style_url('thumbnail', $next_nid[0]->next_img) ?>" alt=""/>
                            </a>
                        </div>
                        <div class="m-item--summary">
                            <h1 class="m-item--hed">
                                <a href="<?= $GLOBALS['base_url'] ?>/?q=node/<?= $next_nid[0]->next_nid ?>"><?= $next_title ?></a>
                            </h1>

                            <div class="m-item--description">
                                <p>Morbi vulputate ac quam quis feugiat. Mauris dapibus dictum ex, at sodales mauris
                                    rutrum
                                    vel. Suspendisse vestibulum enim sit amet ultricies hendrerit.</p>
                            </div>
                        </div>
                    </header>
                </article>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<div class="m-section l-detail-page">
    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <nav class="breadcrumbs">
                    <a href="#">Home</a>
                    <a href="#">Features</a>
                    <a class="unavailable" href="#">Gene Splicing</a>
                    <a class="current" href="#">Cloning</a>
                </nav>

            </div>
        </header>
    </div>
    <article class="m-reference">
        <header>
            <div class="m-reference--image"
                 style="background-image: url(<?= image_style_url('x618-480', $node->field_reference_main_img['und'][0]['uri']) ?>)">
                <a href=""><img
                        src="<?= image_style_url('x618-480', $node->field_reference_main_img['und'][0]['uri']) ?>"
                        alt=""/></a>
            </div>
            <div class="m-reference--summary">
                <h1 class="m-reference--hed"><a href=""><?php print $title; ?></a></h1>

                <div class="m-reference--description">
                    <p>Morbi vulputate ac quam quis feugiat. Mauris dapibus dictum ex, at sodales mauris rutrum vel.
                        Suspendisse vestibulum enim sit amet ultricies hendrerit.</p>
                </div>
                <div class="m-reference--meta">
                    <dl>
                        <!--                        @TODO kategorie predelat-->
                        <dt><?php print t('Zařazení') ?></dt>
                        <dd><?= ($content['field_reference_kategorie_stavby'][0]['#title']); ?>
                            – <?= ($content['field_reference_kategorie_stavby'][1]['#title']); ?></dd>
                    </dl>
                    <dl>
                        <dt><?php print t('Rok realizace') ?></dt>
                        <dd><?= ($content['field_reference_rok'][0]['#markup']); ?></dd>
                    </dl>
                    <dl>
                        <dt>Místo realizace</dt>
                        <dd>Vizovice, Česká republika</dd>
                    </dl>
                    <?php if (isset($content['field_reference_pomodulu']['#items'][0]['value'])): ?>
                        <dl>
                            <dt class="mm-label"><?php print t('Technické specifikace') ?></dt>
                            <?php if (isset($content['field_reference_pomodulu']['#items'][0]['value'])): ?>
                                <dt class="mm-sub"><?= ($content['field_reference_pomodulu']['#title']); ?></dt>
                                <dd><?= ($content['field_reference_pomodulu']['#items'][0]['value']); ?></dd><?php endif ?>
                            <?php if (isset($content['field_reference_delka']['#items'][0]['value'])): ?>
                                <dt class="mm-sub"><?= ($content['field_reference_delka']['#title']); ?></dt>
                                <dd><?= ($content['field_reference_delka']['#items'][0]['value']); ?></dd><?php endif ?>
                            <?php if (isset($content['field_reference_dstavby']['#items'][0]['value'])): ?>
                                <dt class="mm-sub"><?= ($content['field_reference_dstavby']['#title']); ?></dt>
                                <dd><?= ($content['field_reference_dstavby']['#items'][0]['value']); ?></dd><?php endif ?>
                            <?php if (isset($content['field_reference_plocha']['#items'][0]['value'])): ?>
                                <dt class="mm-sub"><?= ($content['field_reference_plocha']['#title']); ?></dt>
                                <dd><?= ($content['field_reference_plocha']['#items'][0]['value']); ?> m<sup>2</sup>
                                </dd><?php endif ?>
                            <?php if (isset($content['field_reference_poznamka']['#items'][0]['value'])): ?>
                                <dt class="mm-sub"><?= ($content['field_reference_poznamka']['#title']); ?></dt>
                                <dd><?= ($content['field_reference_poznamka']['#items'][0]['value']); ?></dd><?php endif ?>
                        </dl>
                    <?php endif ?>
                </div>
            </div>
        </header>
        <div class="m-reference--content">
            <div class="m-body--content"><?= ($content['field_reference_text']['#items'][0]['value']); ?></div>
            <aside>
                <div class="m-aside-block">
                    <header class="m-aside-block--header">
                        <div class="m-aside-block--summary">
                            <h2 class="m-aside-block--hed"><i
                                    class="fa fa-arrow-right"></i> <?php print t('Fotogalerie') ?></h2>

                            <div class="m-aside-block--meta">
                                (<?= count($node->field_reference_fotogalerie['und'][0]['entity']->field_fotogalerie_imgs['und']) ?>
                                <?php print t('fotografií') ?>)
                            </div>
                        </div>
                    </header>
                    <div class="m-aside-block--content">
                        <div class="m-gallery">
                            <?php foreach ($node->field_reference_fotogalerie['und'][0]['entity']->field_fotogalerie_imgs['und'] AS $obrazek) { ?>
                                <div class="m-gallery-item">
                                    <div class="m-gallery-item--image"
                                         style="background-image: url(<?= image_style_url('x186-139', $obrazek['uri']) ?>)">
                                        <a href=""><img src="<?= image_style_url('x186-139', $obrazek['uri']) ?>"
                                                        alt=""/></a>
                                    </div>
                                    <div class="m-gallery-item--summary">
                                        <h2 class="m-gallery-item--hed"><?= $obrazek['title'] ?></h2>

                                        <div class="m-gallery-item--description"></div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <footer class="m-aside-block--footer">
                        <div class="l-half">
                            <div class="m-aside-block--top"><a href="">Block footer<i class="fa fa-arrow-up"></i></a>
                            </div>
                        </div>
                        <div class="l-half">
                            <div class="m-aside-block--more"><a href="">Block footer2<i
                                        class="fa fa-arrow-right"></i></a></div>
                        </div>
                    </footer>
                </div>
            </aside>
        </div>
    </article>
    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href="">Nahoru <i class="fa fa-arrow-up"></i></a></div>
            </div>
            <div class="l-half">
                <div class="m-section--more"><a href="">Celý archiv <i class="fa fa-arrow-right"></i></a></div>
            </div>
        </footer>
    </div>
</div>
