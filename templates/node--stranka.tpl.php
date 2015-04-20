<?php
dsm(get_defined_vars());
dsm($node);
dsm($content);
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

                    <figure class="m-basic-page--image" style="background-image: url(<?= image_style_url('x1266-0', $node->field_stranka_mainimg['und'][0]['uri']) ?>)">
                        <a href=""><img src="<?= image_style_url('x1266-0', $node->field_stranka_mainimg['und'][0]['uri']) ?>" alt="" /></a>
                        <figcaption>
                            <?= $content['field_stranka_imgtext']['#items'][0]['value'] ?>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </header>

        <div class="row">
            <div class="m-basic-page--content">


                <div class="m-body--content">
                    <?= $content['field_stranka_text']['#items'][0]['value'] ?>
                </div>


                <?php
                if(isset($content['field_stranka_soubory'][0])){
                    ?>
                    <aside>
                        <div class="m-aside-block bg-secondary-light mm-pad">
                            <header class="m-aside-block--header">
                                <h3 class="m-aside-block--hed">Ke stažení</h3>
                            </header>
                            <div class="m-reference--meta m-properties">

                                <?php



                                foreach ($content['field_stranka_soubory'][0]['entity']['field_collection_item'] AS $presoubor) {


                                foreach ($presoubor['field_cs_soubor']['#items'] AS $soubor) {

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
                                        <dd><a href="<?= $GLOBALS['base_url'] ?>/sites/default/files/stranka/soubory/<?=$soubor['filename']?>" target="_blank" title="<?=$soubor['description']?>">
                                                <i class="fa <?=$trida?>"></i> <?=$soubor['description']?></a></dd>
                                    </dl>
                                <?php

                                }
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

<div class="m-section l-feed_one bg-white">

    <header class="m-section--header">
        <h2 class="m-section--hed mm-medium mm-center">Section title</h2>
    </header>

    <div class="row">

        <div class="m-card_bigteaser l-single bg-secondary-light">

            <article class="m-story">
                <header>
                    <div class="m-item--image" style="background-image: url(http://lorempixel.com/300/300)">
                        <a href="">
                            <img src="http://lorempixel.com/300/300" alt="" />
                        </a>
                    </div>
                    <div class="m-item--summary">
                        <h1 class="m-item--hed">
                            <a href="">titulek titulek</a>
                        </h1>

                        <div class="m-item--description">
                            <p>Obytné kontejnery si můžete vybrat podle sebe, žádné vaše přání není nerealizovatelné. Renomované specializované firmy nabízí řadu variant: na výběr jsou samostatné obytné a sanitární kontejnery i složité sestavy, které mohou mít i tři patra. Obytné buňky se tak stávají jedinečným řešením třeba pro zmíněné mládežnické ubytovny nebo pro školky, kterých je v Česku stále nedostatek.</p>

                            <p>Ke školkám se pojí i různé formy financování stavby, očínaje klasickým prodejem až po velmi atraktivní pronájem se zpětným odkupem. Školské stavby často těí z výhody modulární výstavy – její flexibility, kdy je možné v reálném čase navyšovat či snižovat kapacitu stavby.</p>
                        </div>

                        <div class="m-card--more bg-8">
                            <a href="" title="more">more</a>
                        </div>
                    </div>
                </header>

            </article>

        </div>

    </div>


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



<div class="m-section l-feed_two bg-secondary-light">

    <header class="m-section--header">
        <h2 class="m-section--hed mm-medium mm-tiny mm-center mm-border">Variabilita</h2>
    </header>

    <div class="row">
        <?php
        for($i=0;$i<4;$i++) {
            ?>
            <div class="m-card_centered-text l-single bg-secondary-light">

                <article class="m-story">
                    <header>

                        <div class="m-item--summary">
                            <h1 class="m-item--hed">
                                <a href="">titulek titulek</a>
                            </h1>

                            <div class="m-item--description">
                                <p>Obytné kontejnery si můžete vybrat podle sebe, žádné vaše přání není
                                    nerealizovatelné. Renomované specializované firmy nabízí řadu variant: na výběr jsou
                                    samostatné obytné a sanitární kontejnery i složité sestavy, které mohou mít i tři
                                    patra. Obytné buňky se tak stávají jedinečným řešením třeba pro zmíněné mládežnické
                                    ubytovny nebo pro školky, kterých je v Česku stále nedostatek.</p>
                            </div>
                        </div>
                    </header>

                    <footer class="m-item--footer">
                        tady bude fotka, nebo gallerka
                    </footer>

                </article>


            </div>
        <?php
        }
        ?>
    </div>

</div>


<div class="m-section l-feed_one bg-secondary-light mm-has-background" style="background-image: url(http://lorempixel.com/900/600)">

    <header class="m-section--header">
        <h2 class="m-section--hed mm-medium mm-tiny mm-center mm-border">Mobilita</h2>
    </header>

    <div class="row">
        <div class="m-card_centered-text l-single bg-secondary-light">

            <article class="m-story">
                <header class="m-item--header">
                    <div class="m-item--summary">
                        <div class="m-item--description">
                            <p>Obytné kontejnery si můžete vybrat podle sebe, žádné vaše přání není nerealizovatelné. Renomované specializované firmy nabízí řadu variant: na výběr jsou samostatné obytné a sanitární kontejnery i složité sestavy, které mohou mít i tři patra. Obytné buňky se tak stávají jedinečným řešením třeba pro zmíněné mládežnické ubytovny nebo pro školky, kterých je v Česku stále nedostatek.</p>
                        </div>
                    </div>
                </header>

                <footer class="m-item--footer">
                    tady bude fotka, nebo gallerka
                </footer>
            </article>


        </div>
    </div>

</div>



{% include "subtemplates/feed-block-carousel.twig" %} {# @todo musi byt bez hlavičky a patičky#}

{% include "subtemplates/feed-three_faq.twig" %}
