<!--slider-->
<?php
$wrapper = entity_metadata_wrapper('node', $node);
$pole_slider = $wrapper->field_hp_slider->value();
$pole_prvnitri = $wrapper->field_hp_1_odkaz->value();
$pole_druhetri = $wrapper->field_hp_2_odkaz->value();


?>
<div class="hero-tabs" slick>
    <div class="hero-slides" carousel>


        <?php
        foreach ($pole_slider as $cislo => $r) {
            if ($cislo == 0) {
                ?>
                <div class="content-tab mm-center mm-welcome" style="background-image: url(<?= image_style_url('none', $r->field_c_hp_img['und'][0]['uri']) ?>);">
                    <div class="row">
                        <div class="description">
                            <p><?= $r->field_c_hp_text['und'][0]['value'] ?></p>
                            <img src="<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma/assets/images/square-down.svg" alt="" />
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="content-tab <?php echo ($cislo <= 3) ? '' : 'mm-right'; ?>" style="background-image: url(<?= image_style_url('none', $r->field_c_hp_img['und'][0]['uri']) ?>);">
                    <div class="row">
                        <div class="description">
                            <p><?= $r->field_c_hp_text['und'][0]['value'] ?></p>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
    <div class="navigation" carouselnav slick-method="mouseenter">
        <div class="l-grid">
            <?php
            foreach ($pole_slider as $cislo => $r) {
                if ($cislo == 0) continue;
                ?>
                <div class="tab color-<?= $cislo ?>" slick-to="<?= $cislo ?>">
                    <a href="<?= $GLOBALS['base_url'] ?>/node/<?= $r->field_c_hp_odkaz['und'][0]['target_id'] ?>"><?= $r->field_c_hp_popiska['und'][0]['value'] ?></a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div><!--slider-->





<!-- dummy gallery-->
<div class="m-section">
    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-section--hed mm-big mm-tiny mm-center mm-pad-bottom mm-pad-top">galerie</h2>
            </div>
        </header>
    </div>

    <div class="row">
        <!-- gallerie -->
        <!-- zobrazení přes featured image-->
        <ul class="clearing-thumbs clearing-feature" data-clearing>
            <li><a href="/sites/all/themes/koma/assets/gallery/full/img-1.jpg"><img src="/sites/all/themes/koma/assets/gallery/thumb/img-1.jpg"></a></li>
            <li><a href="/sites/all/themes/koma/assets/gallery/full/img-2.jpg"><img src="/sites/all/themes/koma/assets/gallery/thumb/img-2.jpg"></a></li>
            <li><a href="/sites/all/themes/koma/assets/gallery/full/img-3.jpg"><img src="/sites/all/themes/koma/assets/gallery/thumb/img-3.jpg"></a></li>
            <li class="clearing-featured-img"><a href="/sites/all/themes/koma/assets/gallery/full/img-4.jpg"><img src="/sites/all/themes/koma/assets/gallery/thumb/img-4.jpg"></a></li>
            <li><a href="/sites/all/themes/koma/assets/gallery/full/img-5.jpg"><img src="/sites/all/themes/koma/assets/gallery/thumb/img-5.jpg"></a></li>
        </ul>
        <!-- konec galerie-->
    </div>
    <hr />
    <div class="row">
        <!-- gallerie -->
        <!-- obecná galerie -->
        <ul class="clearing-thumbs" data-clearing>
            <li><a href="/sites/all/themes/koma/assets/gallery/full/img-1.jpg"><img src="/sites/all/themes/koma/assets/gallery/thumb/img-1.jpg"></a></li>
            <li><a href="/sites/all/themes/koma/assets/gallery/full/img-2.jpg"><img src="/sites/all/themes/koma/assets/gallery/thumb/img-2.jpg"></a></li>
            <li><a href="/sites/all/themes/koma/assets/gallery/full/img-3.jpg"><img src="/sites/all/themes/koma/assets/gallery/thumb/img-3.jpg"></a></li>
            <li><a href="/sites/all/themes/koma/assets/gallery/full/img-4.jpg"><img src="/sites/all/themes/koma/assets/gallery/thumb/img-4.jpg"></a></li>
            <li><a href="/sites/all/themes/koma/assets/gallery/full/img-5.jpg"><img src="/sites/all/themes/koma/assets/gallery/thumb/img-5.jpg"></a></li>
        </ul>
        <!-- konec galerie-->
    </div>

    <div class="row">
        <footer class="m-section--footer">Každá sekce musí mít markup patičky i hlavičky, i když bude jejich obsah prázdný</footer>
    </div>
</div>
<!-- dummy gallery-->

<!-- dummy bannery-->

<div class="m-section bg-primary">
    <div class="m-section--close" close-section>&times;</div>
    <article class="m-banner">
        <header>
            <div class="m-banner--image" style="background-image: url(http://lorempixel.com/300/300)">
                <a href="">
                    <img src="http://lorempixel.com/300/300" alt="" />
                </a>
            </div>
            <div class="m-banner--summary">
                <h1 class="m-banner--hed">
                    Obytné kontejnery si můžete vybrat podle sebe,<a href=""> žádné vaše přání není nerealizovatelné.</a>
                </h1>
            </div>
        </header>
    </article>
</div>

<div class="m-section bg-secondary">
    <div class="m-section--close" close-section>&times;</div>
    <article class="m-banner">
        <header>
            <!--<div class="m-banner--image" style="background-image: url(http://lorempixel.com/300/300)">
                <a href="">
                    <img src="http://lorempixel.com/300/300" alt="" />
                </a>
            </div>-->
            <div class="m-banner--summary">
                <h1 class="m-banner--hed">
                    Obytné kontejnery si můžete vybrat podle sebe,<a href=""> žádné vaše přání není nerealizovatelné.</a>
                </h1>
            </div>
        </header>
    </article>
</div>

<div class="m-section bg-secondary-light">
    <div class="m-section--close" close-section>&times;</div>
    <article class="m-banner">
        <header>
            <div class="m-banner--image" style="background-image: url(http://lorempixel.com/300/300)">
                <a href="">
                    <img src="http://lorempixel.com/300/300" alt="" />
                </a>
            </div>
            <div class="m-banner--summary">
                <h1 class="m-banner--hed">
                    Obytné kontejnery si můžete vybrat podle sebe,<a href=""> žádné vaše přání není nerealizovatelné.</a>
                </h1>
            </div>
        </header>
    </article>
</div>

<div class="m-section bg-secondary-light">
    <div class="m-section--close" close-section>&times;</div>
    <article class="m-banner">
        <header>
            <div class="m-banner--image" style="background-image: url(http://lorempixel.com/300/300)">
                <a href="">
                    <img src="http://lorempixel.com/300/300" alt="" />
                </a>
            </div>
            <div class="m-banner--summary">
                <h1 class="m-banner--hed">
                    <a href=""> žádné vaše přání není nerealizovatelné.</a>
                </h1>
            </div>
        </header>
    </article>
</div>

<!-- dummy bannery-->



<!--tri odkazy-->
<div class="m-section l-feed_triple-card">

    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-section--hed mm-big mm-tiny mm-center mm-pad-bottom mm-pad-top"><?= $wrapper->field_hp_1_prvni_text->value() ?>
                    <br /><span class="color-primary"><?= $wrapper->field_hp_1_druhy_text->value() ?></span></h2>
            </div>
        </header>
    </div>

    <div class="row">

        <?php
        foreach ($pole_prvnitri as $prvnitri) {
            ?>
            <div class="m-card_standard l-single">

                <article class="m-story">
                    <header>
                        <div class="m-item--image" style="background-image: url(<?= image_style_url('x282-181', $prvnitri->field_hpc_1_img['und'][0]['uri']) ?>)">
                            <a href="<?= $prvnitri->field_hpc_1_odkaz['und'][0]['value'] ?>" title="<?= $prvnitri->field_hpc_1_nadpis['und'][0]['value'] ?>">
                                <img src="<?= image_style_url('x282-181', $prvnitri->field_hpc_1_img['und'][0]['uri']) ?>" alt="<?= $prvnitri->field_hpc_1_nadpis['und'][0]['value'] ?>" />
                            </a>
                        </div>
                        <div class="m-item--summary">
                            <h1 class="m-item--hed">
                                <a href="<?= $prvnitri->field_hpc_1_odkaz['und'][0]['value'] ?>" title="<?= $prvnitri->field_hpc_1_nadpis['und'][0]['value'] ?>"><?= $prvnitri->field_hpc_1_nadpis['und'][0]['value'] ?></a>
                            </h1>

                            <div class="m-item--description">
                                <p><?= $prvnitri->field_hpc_1_text['und'][0]['value'] ?></p>
                            </div>
                        </div>
                    </header>
                </article>
                <div class="m-card--more">
                    <a href="<?= $prvnitri->field_hpc_1_odkaz['und'][0]['value'] ?>" title="<?= $prvnitri->field_hpc_1_nadpis['und'][0]['value'] ?>"><i class="fa fa-arrow-right"></i></a>
                </div>

            </div>

            <?php
        }
        ?>
    </div>
</div><!--tri odkazy-->

<!--koma zpravodaj-->
<div class="m-section l-feed_block-carousel bg-white">

    <div class="m-section--underlay"></div>

    <div class="l-grid">
        <header class="m-section--header">
            <div class="l-third">
                <h2 class="m-section--hed mm-small">Koma zpravodaj</h2>
            </div>
            <?php
          $tree = taxonomy_get_tree(5);
            ?>

            <div class="l-two-thirds">
                <ul class="m-section--nav inline-right">
                    <?php
                    foreach ($tree as $term) {
                        break;
                        $term = i18n_taxonomy_localize_terms($term);
                        ?>
                        <li>
                            <!--                            @TODO UPRAVIT CESTU-->
                            <a href="<?= $GLOBALS['base_url'] ?>?q=zpravodaj&field_zpravodaj_kategorie_tid=<?= $term->tid ?>"
                               title="<?= $term->name ?>"><?= $term->name ?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </header>
    </div>

    <div class="row">
        <div class="l-section--content slider block-feed-slider">

            <?php
            $block = module_invoke('views', 'block_view', 'zpravodajhp-block');
            print render($block);
            ?>


        </div>
    </div>
    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href=""><?php print t('Nahoru') ?> <i class="fa fa-arrow-up"></i></a></div>
            </div>
            <div class="l-half">
                <div class="m-section--more"><a href="<?= $GLOBALS['base_url'] ?>?q=zpravodaj"><?php print t('Celý archiv') ?> <i class="fa fa-arrow-right"></i></a></div>
            </div>
        </footer>
    </div>
</div>
<!--koma zpravodaj-->

<!--cim se lisime-->
<div class="m-section l-section_side-triple bg-white" style="background-image: url('/sites/all/themes/koma/assets/images/mozaika-koma.png')">

    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
            </div>
        </header>
    </div>

    <div class="l-grid">
        <h2 class="m-section--hed mm-big mm-tiny mm-pad-bottom firstline-primary">
            <?php foreach ($content['field_hp_2_text']['#items'] as $cislo2 => $text) { ?><?= $text['value'] ?><br/><?php } ?>
        </h2>

        <?php
        foreach ($pole_druhetri as $druhetri) {
            ?>

            <div class="l-section--item m-card_image">
                <article class="m-story">
                    <header>
                        <div class="m-item--image" style="background-image: url(<?= image_style_url('x294-430', $druhetri->field_hpc_2_img['und'][0]['uri']) ?>)">
                            <a href="<?= $druhetri->field_hpc_2_odkaz['und'][0]['value'] ?>">
                                <img src="<?= image_style_url('x294-430', $druhetri->field_hpc_2_img['und'][0]['uri']) ?>" alt="" />
                            </a>
                        </div>
                        <div class="m-item--summary">
                            <h1 class="m-item--hed">
                                <a href="<?= $druhetri->field_hpc_2_odkaz['und'][0]['value'] ?>"><?= $druhetri->field_hpc_2_nadpis['und'][0]['value'] ?></a>
                            </h1>

                            <div class="m-item--description ellipsis"></div>
                        </div>
                    </header>
                    <div class="m-card--more"><a href="<?= $druhetri->field_hpc_2_odkaz['und'][0]['value'] ?>"><i class="fa fa-arrow-right"></i></a></div>
                </article>
            </div>
            <?php
        }
        ?>
    </div>
    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href=""><?php print t('Nahoru') ?> <i class="fa fa-arrow-up"></i></a></div>
            </div>
            <div class="l-half">
                <div class="m-section--more"><a href="">Firma a lidé <i class="fa fa-arrow-right"></i></a></div>
            </div>
        </footer>
    </div>
</div><!--cim se lisime-->

<script type="text/javascript" src="<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma/components/slick-carousel/slick/slick.min.js"></script>
<!---->
<!--<script type="text/javascript">-->
<!--    (function (jQuery) {-->
<!--        jQuery('[slick]').each(function () {-->
<!--            var SlickWrapper = jQuery(this);-->
<!--            var carousel = SlickWrapper.find('[carousel]');-->
<!--            var oldActive = null;-->
<!--            var nav = SlickWrapper.find('[carouselnav]');-->
<!---->
<!--            if (carousel) {-->
<!--                carousel.slick({-->
<!--                    dots: false,-->
<!--                    infinite: true,-->
<!--                    //fade: true,-->
<!--                    //cssEase: 'linear',-->
<!--                    draggable: false,-->
<!--                    speed: 300,-->
<!--                    slidesToShow: 1,-->
<!--                    adaptiveHeight: true-->
<!--                })-->
<!--            }-->
<!---->
<!--            if (nav) {-->
<!--                console.log("nav");-->
<!--                var count = 0;-->
<!--                var items = nav.find('[slick-to]');-->
<!--                for (var i = 0; i < items.length; i++) {-->
<!--                    var item = jQuery(items[i]);-->
<!---->
<!--                    if (nav.attr("slick-method") == "mouseenter") {-->
<!--                        item.mouseenter(function (e) {-->
<!---->
<!--                            if (oldActive) {-->
<!--                                oldActive.removeClass("active");-->
<!--                            }-->
<!---->
<!--                            e.preventDefault();-->
<!--                            carousel.slick('slickGoTo', jQuery(this).attr('slick-to'));-->
<!--                            jQuery(this).addClass("active");-->
<!--                            oldActive = jQuery(this);-->
<!--                        });-->
<!--                    } else {-->
<!--                        item.click(function (e) {-->
<!---->
<!--                            if (oldActive) {-->
<!--                                oldActive.removeClass("active");-->
<!--                            }-->
<!---->
<!--                            e.preventDefault();-->
<!--                            carousel.slick('slickGoTo', jQuery(this).attr('slick-to'));-->
<!--                            jQuery(this).addClass("active");-->
<!--                            oldActive = jQuery(this);-->
<!--                        });-->
<!--                    }-->
<!---->
<!---->
<!--                }-->
<!--            }-->
<!---->
<!--        });-->
<!---->
<!---->
<!--        // block feed JS-->
<!---->
<!--        var blogSlick = jQuery('.block-feed-slider').slick({-->
<!--            dots: false,-->
<!--            infinite: true,-->
<!--            speed: 300,-->
<!--            slidesToShow: 2,-->
<!--            slidesToScroll: 2,-->
<!--            adaptiveHeight: true,-->
<!--            responsive: [-->
<!--                {-->
<!--                    breakpoint: 960,-->
<!--                    settings: {-->
<!--                        slidesToShow: 1,-->
<!--                        slidesToScroll: 1-->
<!--                    }-->
<!--                }-->
<!--            ]-->
<!--        });-->
<!--        // full size carousel-->
<!---->
<!--        var blogSlick = jQuery('.full-carousel').slick({-->
<!--            dots: true,-->
<!--            infinite: true,-->
<!--            speed: 300,-->
<!--            slidesToShow: 1,-->
<!--            slidesToScroll: 1,-->
<!--            adaptiveHeight: true-->
<!--        });-->
<!---->
<!---->
<!--    })(jQuery);-->
<!---->
<!---->
<!--</script>-->
