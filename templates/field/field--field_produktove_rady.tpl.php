<!-- produkt -->
<div class="m-section l-feed_four">
    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
            </div>
        </header>
    </div>
    <div class="row">
        <?php


        foreach ($element['#object']->field_produktove_rady['und'] AS $pole) {

            ?>
                <div class="m-card_product mm-color-{{ a }} l-single">
                    <article class="m-product">
                        <header>
                            <div class="m-item--image" style="background-image: url(<?= image_style_url('x595-0', $pole['entity']->field_hlavni_obrazek['und'][0]['uri']) ?>)">
                                <a href="">
                                    <img src="<?= image_style_url('x595-0', $pole['entity']->field_hlavni_obrazek['und'][0]['uri']) ?>" alt=""/>
                                </a>
                            </div>
                            <div class="m-item--summary">
                                <h1 class="m-item--hed">
                                    <a href=""><?=$pole['entity']->title?></a>
                                </h1>

                                <div class="m-item--description">
                                    <?=$pole['entity']->field_basic_popis_2[$pole['entity']->language][0]['value']?>
                                </div>
                            </div>
                        </header>
                    </article>
                    <div class="m-card--more"><a href="">&rarr;</a></div>
                </div>

        <?php
        }
        ?>
    </div>


    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href="">Nahoru <i class="fa fa-arrow-up"></i></a></div>
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