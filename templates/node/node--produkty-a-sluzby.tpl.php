<?php
//
dsm($node);
dsm($content);
//
//?>

<div class="m-section l-detail-page bg-white">
    <header class="m-section--header bg-secondary-light">
    </header>
    <article class="m-basic-page">
        <header class="m-basic-page--header">
            <div class="row">
                <div class="l-half">
                    <h1 class="m-basic-page--hed">PRODUKTY <span class="color-primary">A SLUŽBY</span></h1>
                </div>
                <div class="l-half">
                </div>
                <div class="l-full">
                    <div class="row">
                        <header class="m-section--header">
                            <div class="l-third">
                                <h2 class="mm-small color-primary"><?php print t('Produktové řady') ?></h2>
                            </div>
                            <?php
                            $tree = taxonomy_get_tree(5);
                            ?>

                            <div class="l-two-thirds">
                                <ul class="m-section--nav inline-right">

                                </ul>
                            </div>
                        </header>
                    </div>
                    <?php
                    if (isset($content['field_img_text_text'][0])) {
                        print render($content['field_img_text_text']);
                    }
                    ?>
                </div>
            </div>
        </header>
    </article>
</div>

<?php
if (isset($content['field_bigimg_a_text'][0])) {
    print render($content['field_bigimg_a_text']);
}
?>


<div class="m-section l-feed_three bg-white">

        <div class="row">
            <header class="m-section--header">
                <div class="l-full">
                    <h2 class="m-section--hed mm-big">KE STAŽENÍ</h2>
                </div>
            </header>
        </div>
        <div class="row">
            <div class="m-basic-page--content">
                <?php
                if (isset($content['field_brozury'][0])) {
                    print render($content['field_brozury']);
                }
                ?>
                <?php
                $block = module_invoke('views', 'block_view', 'buletin-block');
                print render($block);
                ?>
                <?php
                if (isset($content['field_ceniky'][0])) {
                    print render($content['field_ceniky']);
                }
                ?>
            </div>
        </div>

</div>
<?php
if (isset($content['field_sluzby2'][0])) {
    print render($content['field_sluzby2']);
}
?>

<?php
if (isset($content['field_segment_faq'][0])) {
    print render($content['field_segment_faq']);
}
?>


