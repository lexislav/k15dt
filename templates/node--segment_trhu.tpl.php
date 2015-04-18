<?php
//
//dsm($node);
//dsm($content);

$polezemi = country_get_list();
?>



<div class="m-section l-detail-page bg-white">

    <header class="m-section--header bg-secondary-light">
        <div class="row ">
            <div class="l-full">

                <nav class="breadcrumbs">
                    <a href="#">Home</a>
                    <a href="#">Features</a>
                    <a class="unavailable" href="#">Gene Splicing</a>
                    <a class="current" href="#">Cloning</a>
                </nav>

            </div>
        </div>
    </header>

    <article class="m-basic-page">
        <header class="m-basic-page--header">

            <div class="row">
                <div class="l-half">
                    <h1 class="m-basic-page--hed"><a href=""><?= $node->title ?></a></h1>
                </div>

                <div class="l-full">

                    <figure class="m-basic-page--image"
                            style="background-image: url(<?= $GLOBALS['base_url'] ?>/sites/default/files/segment_trhu/<?= $node->field_segment_img['und'][0]['filename'] ?>)">
                        <a href=""><img
                                src="<?= $GLOBALS['base_url'] ?>/sites/default/files/segment_trhu/<?= $node->field_segment_img['und'][0]['filename'] ?>"
                                alt=""/></a>
                        <figcaption>
                            <?= $content['field_segment_img_text']['#items'][0]['value'] ?>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </header>

        <div class="row">
            <div class="m-basic-page--content">


                <div class="m-body--content">
                    <?= $content['field_segment_text']['#items'][0]['value'] ?>
                </div>


                <!--                 --><?php //print render($content['field_segment_reference']); ?>

                <?php
                if(isset($content['field_segment_soubory']['#items'])){
                ?>
                <aside>
                    <div class="m-aside-block bg-secondary-light mm-pad">
                        <header class="m-aside-block--header">
                            <h3 class="m-aside-block--hed">Ke stažení</h3>
                        </header>
                        <div class="m-reference--meta m-properties">

                                <?php

                                foreach ($content['field_segment_soubory']['#items'] AS $soubor) {

                                    $trida = '';
                                    $typ = end(explode('.', $soubor['filename']));


                                    switch ($typ) {
                                        case "zip":
                                            $trida = 'fa-file-archive-o';
                                            break;
                                        case "xls":
                                            $trida = 'fa-file-excel-o';
                                            break;
                                        case "xlsx":
                                            $trida = 'fa-file-excel-o';
                                            break;
                                        case "doc":
                                            $trida = 'fa-file-word-o';
                                            break;
                                        case "docx":
                                            $trida = 'fa-file-word-o';
                                            break;
                                        case "pdf":
                                            $trida = 'fa-file-pdf-o';
                                            break;
                                        case "txt":
                                            $trida = 'fa-file-text-o';
                                            break;
                                        default:
                                            $trida = 'fa-file-o';
                                    }

                                    ?>
                            <dl class="mm-nolabels mm-noborder">
                                    <dt><?=$soubor['description']?></dt>
                                    <dd><a href="<?= $GLOBALS['base_url'] ?>/sites/default/files/segment_trhu/soubory/<?=$soubor['filename']?>" target="_blank" title="<?=$soubor['description']?>">
                                            <i class="fa <?=$trida?>"></i> <?=$soubor['description']?></a></dd>
                            </dl>
                                <?php
                                }

                                ?>



                        </div>
                    </div>
                </aside>
                <?php
                }

                ?>
            </div>
        </div>

    </article>


</div>


<div class="m-section l-feed_list bg-white">
    <div class="row">
        <?php
        $poletid = array();
        foreach ($node->field_segment_reference['und'] AS $referencetemp) {
            $poletid[] = ($referencetemp['entity']->field_reference_kategorie_stavby['und'][0]['tid']);
            if (isset($referencetemp['entity']->field_reference_kategorie_stavby['und'][1]['tid'])) {
                $poletid[] = ($referencetemp['entity']->field_reference_kategorie_stavby['und'][1]['tid']);
            }
        }
        $polejmen = taxonomy_term_load_multiple($poletid);
        foreach ($node->field_segment_reference['und'] AS $reference) {


            $reference['entity']->field_reference_zeme['und'][0]['iso2'];


            $rok = str_replace('-01-01 00:00:00', '', $reference['entity']->field_reference_rok['und'][0]['value']);
            ?>
            <div class="m-card_reference-horizontal l-single">
                <article class="m-reference ">
                    <header>
                        <!--                        @TODO dodelat nacitani main img z fotogalerie-->
                        <div class="m-item--image"
                             style="background-image: url(<?= image_style_url('x310-340', $reference['entity']->field_reference_main_img['und'][0]['uri']) ?>)">
                            <a href="">
                                <img
                                    src="<?= image_style_url('x310-340', $reference['entity']->field_reference_main_img['und'][0]['uri']) ?>"
                                    alt=""/>
                            </a>
                        </div>

                        <div class="m-item--summary">
                            <h1 class="m-item--hed">
                                <a href="<?= $GLOBALS['base_url'] ?>/node/<?= $reference['entity']->nid ?>"><?= $reference['entity']->title ?></a>
                            </h1>

                            <div class="m-item--description">
                                <p><?= $reference['entity']->field_reference_text[$node->language][0]['value'] ?>
                                    &rarr;</p>
                            </div>
                            <a href="<?= $GLOBALS['base_url'] ?>/node/<?= $reference['entity']->nid ?>/edit">editovat</a>
                        </div>

                        <div class="m-properties">
                            <dl>
                                <dt>Zařazení</dt>
                                <dd><?= $polejmen[$reference['entity']->field_reference_kategorie_stavby['und'][0]['tid']]->name ?>
                                    – <?= $polejmen[$reference['entity']->field_reference_kategorie_stavby['und'][1]['tid']]->name ?></dd>
                            </dl>

                            <dl>
                                <dt>Rok realizace</dt>
                                <dd><?= $rok ?></dd>
                            </dl>

                            <dl>
                                <dt>Země realizace</dt>
                                <dd><?= $polezemi[$reference['entity']->field_reference_zeme['und'][0]['iso2']] ?></dd>
                            </dl>
<!--@TODO dodelat if pro zobrazeni-->
                            <dl>
                                <dt class="mm-label">Technické specifikace</dt>

                                <?php if (isset($reference['entity']->field_reference_pomodulu['und'][0]['value'])) { ?>
                                    <dt class="mm-sub">počet modulů</dt>
                                    <dd><?= $reference['entity']->field_reference_pomodulu['und'][0]['value'] ?></dd>
                                <?php } ?>
                                <?php if (isset($reference['entity']->field_reference_delka[$node->language][0]['value'])) { ?>
                                    <dt class="mm-sub">Délka výroby</dt>
                                    <dd><?= $reference['entity']->field_reference_delka[$node->language][0]['value'] ?></dd>
                                <?php } ?>
                                <?php if (isset($reference['entity']->field_reference_dstavby[$node->language][0]['value'])) { ?>
                                    <dt class="mm-sub">Délka stavby</dt>
                                    <dd><?=$reference['entity']->field_reference_dstavby[$node->language][0]['value']?></dd>
                                <?php } ?>
                                <?php if (isset($reference['entity']->field_reference_plocha['und'][0]['value'])) { ?>
                                    <dt class="mm-sub">užitná plocha</dt>
                                    <dd><?= $reference['entity']->field_reference_plocha['und'][0]['value'] ?> m <sup>2</sup>
                                    </dd>
                                <?php } ?>

                            </dl>
                        </div>

                    </header>
                </article>
            </div>

        <?php
        }
        ?>
    </div>
</div>
<?php
if(isset($node->field_segment_faq['und'])){
?>
<div class="m-section l-feed_three">

    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-section--hed mm-big">Faq / Znalostní báze</h2>
            </div>
        </header>
    </div>

    <div class="row">
        <?php



        foreach ($node->field_segment_faq['und'] AS $faq) {
            ?>
            <div class="m-card_faq l-single">

                <article class="m-story">
                    <header>
                        <h1 class="m-item--hed">
                            <a href="<?= $GLOBALS['base_url'] ?>/node/<?= $faq['entity']->nid ?>">
                                <?= $faq['entity']->title ?>
                            </a>
                        </h1>

                        <div class="m-item--summary">
                            <div class="m-item--description">
                                <p><?= $faq['entity']->field_knowledgebase_perex[$node->language][0]['value'] ?></p>
                            </div>
                        </div>
                    </header>
                </article>

            </div>
        <?php
        }
        ?>
    </div>


    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href="">Nahoru &uarr;</a></div>
            </div>
            <div class="l-half">
                <ul class="m-section--nav inline-right">
                    <li><a href="" title="Novinky">Technická pomoc</a></li>
                    <li><a href="">informace pro architekty</a></li>
                </ul>
            </div>
        </footer>
    </div>

</div>
<?php
}
?>
<?php
$block = module_invoke('views', 'block_view', 'segmentreference-block');
print render($block);
?>




<div class="m-section l-feed_block-carousel">

    <div class="m-section--underlay"></div>



    <div class="row">
        <div class="l-section--content slider block-feed-slider">
            <?php
            for($i=0;$i<=3;$i++){
            ?>

            <div class="blok-feed-slide">
                <div class="m-card_thumb mm-has-hover l-double">

                    <article class="m-story">
                        <header>
                            <div class="m-item--image" style="background-image: url(http://lorempixel.com/300/300)">
                                <a href="">
                                    <img src="http://lorempixel.com/400/600" alt="" />
                                </a>
                            </div>
                            <div class="m-item--summary">
                                <h1 class="m-item--hed">
                                    <a href="">titulek titulek</a>
                                </h1>

                                <div class="m-item--description">
                                    <p>Morbi vulputate ac quam quis feugiat. Mauris dapibus dictum ex, at sodales mauris rutrum vel. Suspendisse vestibulum enim sit amet ultricies hendrerit.</p>
                                </div>
                            </div>
                            <div class="m-card--more">&rarr;</div>
                        </header>
                    </article>

                </div>

                <div class="m-card_thumb  mm-has-hover l-single">

                    <article class="m-story">
                        <header>
                            <div class="m-item--image" style="background-image: url(http://lorempixel.com/300/300)">
                                <a href="">
                                    <img src="http://lorempixel.com/400/600" alt="" />
                                </a>
                            </div>
                            <div class="m-item--summary">
                                <h1 class="m-item--hed">
                                    <a href="">titulek titulek</a>
                                </h1>

                                <div class="m-item--description">
                                    <p>Morbi vulputate ac quam quis feugiat. Mauris dapibus dictum ex, at sodales mauris rutrum vel. Suspendisse vestibulum enim sit amet ultricies hendrerit.</p>
                                </div>
                            </div>
                            <div class="m-card--more">&rarr;</div>
                        </header>
                    </article>

                </div>

                <div class="m-card_thumb  mm-has-hover l-single">

                    <article class="m-story">
                        <header>
                            <div class="m-item--image" style="background-image: url(http://lorempixel.com/300/300)">
                                <a href="">
                                    <img src="http://lorempixel.com/400/600" alt="" />
                                </a>
                            </div>
                            <div class="m-item--summary">
                                <h1 class="m-item--hed">
                                    <a href="">titulek titulek</a>
                                </h1>

                                <div class="m-item--description">
                                    <p>Morbi vulputate ac quam quis feugiat. Mauris dapibus dictum ex, at sodales mauris rutrum vel. Suspendisse vestibulum enim sit amet ultricies hendrerit.</p>
                                </div>
                            </div>
                            <div class="m-card--more">&rarr;</div>
                        </header>
                    </article>

                </div>
            </div>

            <div class="blok-feed-slide">
                <div class="m-card_thumb l-single">

                    <article class="m-story">
                        <header>
                            <div class="m-item--image" style="background-image: url(http://lorempixel.com/300/300)">
                                <a href="">
                                    <img src="http://lorempixel.com/400/600" alt="" />
                                </a>
                            </div>
                            <div class="m-item--summary">
                                <h1 class="m-item--hed">
                                    <a href="">titulek titulek</a>
                                </h1>

                                <div class="m-item--description">
                                    <p>Morbi vulputate ac quam quis feugiat. Mauris dapibus dictum ex, at sodales mauris rutrum vel. Suspendisse vestibulum enim sit amet ultricies hendrerit.</p>
                                </div>
                            </div>
                            <div class="m-card--more">&rarr;</div>
                        </header>
                    </article>

                </div>

                <div class="m-card_thumb l-single">

                    <article class="m-story">
                        <header>
                            <div class="m-item--image" style="background-image: url(http://lorempixel.com/300/300)">
                                <a href="">
                                    <img src="http://lorempixel.com/400/600" alt="" />
                                </a>
                            </div>
                            <div class="m-item--summary">
                                <h1 class="m-item--hed">
                                    <a href="">titulek titulek</a>
                                </h1>

                                <div class="m-item--description">
                                    <p>Morbi vulputate ac quam quis feugiat. Mauris dapibus dictum ex, at sodales mauris rutrum vel. Suspendisse vestibulum enim sit amet ultricies hendrerit.</p>
                                </div>
                            </div>
                            <div class="m-card--more">&rarr;</div>
                        </header>
                    </article>

                </div>

                <div class="m-card_thumb l-double">

                    <article class="m-story">
                        <header>
                            <div class="m-item--image" style="background-image: url(http://lorempixel.com/300/300)">
                                <a href="">
                                    <img src="http://lorempixel.com/400/600" alt="" />
                                </a>
                            </div>
                            <div class="m-item--summary">
                                <h1 class="m-item--hed">
                                    <a href="">titulek titulek</a>
                                </h1>

                                <div class="m-item--description">
                                    <p>Morbi vulputate ac quam quis feugiat. Mauris dapibus dictum ex, at sodales mauris rutrum vel. Suspendisse vestibulum enim sit amet ultricies hendrerit.</p>
                                </div>
                            </div>
                            <div class="m-card--more">&rarr;</div>
                        </header>
                    </article>

                </div>
            </div>
          <?php } ?>
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




