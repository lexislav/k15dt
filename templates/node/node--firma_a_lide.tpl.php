<?php
//
//dsm($node);
//dsm($content);
//
//?>

<div class="m-section l-detail-page l-feed_four">
    <header class="m-section--header bg-secondary-light">
    </header>
    <article class="m-basic-page">
        <header class="m-basic-page--header">
            <div class="row">
                <div class="l-half">
                    <h1 class="m-basic-page--hed">FIRMA <span class="color-primary">& LIDÉ</span></h1>
                </div>
                <div class="l-half"></div>
                <div class="l-full">
                    <?php
                    if (isset($content['field_slider_2'][0])) {
                        print render($content['field_slider_2']);
                    }
                    ?>
                </div>
            </div>
        </header>
    </article>

    <?php
    if (isset($content['field_img_text_text'][0])) {
        print render($content['field_img_text_text']);
    }
    ?>

</div>



<div class="m-section l-feed_three bg-white">

    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-section--hed mm-big">KE STAŽENÍ</h2>
            </div>
        </header>
    </div>
    <div class="row">
        <div class="l-single">
            <?php
            if (isset($content['field_brozury'][0])) {
                print render($content['field_brozury']);
            }
            ?>
        </div>
        <div class="l-single">
            <?php
            $block = module_invoke('views', 'block_view', 'buletin-block');
            print render($block);
            ?>
        </div>
        <div class="l-single">
            <?php
            if (isset($content['field_ceniky'][0])) {
                print render($content['field_ceniky']);
            }
            ?>
        </div>
    </div>

</div>


<?php
$block = module_invoke('views', 'block_view', 'publicita-block');
print render($block);
?>

<?php
if (isset($content['field_text_text_link'][0])) {
    print render($content['field_text_text_link']);
}
?>



