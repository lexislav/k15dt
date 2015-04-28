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
        foreach ($element['#items'] AS $pole) {
             ?>
                <div class="m-card_product l-single">
                    <article class="m-product">
                        <header>
                            <div class="m-item--image" style="background-image: url(<?=@ image_style_url('x595-0', $pole['entity']->field_single_header['cs'][0]['field_basic_img']['und'][0]['uri']) ?>)">
                                <a href="<?=drupal_get_path_alias('node/'.$pole['target_id'])?>">
                                    <img src="<?= @image_style_url('x595-0', $pole['entity']->field_single_header['cs'][0]['field_basic_img']['und'][0]['uri']) ?>" alt=""/>
                                </a>
                            </div>
                            <div class="m-item--summary">
                                <h1 class="m-item--hed">
                                    <a href="<?=drupal_get_path_alias('node/'.$pole['target_id'])?>"><?=$pole['entity']->title?></a>
                                </h1>

                                <div class="m-item--description">
                                    <?=@$pole['entity']->field_basic_popis_2[$pole['entity']->language][0]['value']?>
                                </div>
                            </div>
                        </header>
                    </article>
                    <div class="m-card--more"><a href="<?=drupal_get_path_alias('node/'.$pole['target_id'])?>">&rarr;</a></div>
                </div>
        <?php
        }
        ?>
    </div>
    <div class="row">
        <footer class="m-section--footer">

        </footer>
    </div>

</div>