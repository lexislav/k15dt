<?php
//
//dsm($node);
//dsm($content);
//
//?>

<article>

    <div class="m-section l-feed_carousel">
        <div class="row">
            <header class="m-section--header">
                <div class="l-half">
                    <h1 class="m-basic-page--hed">FIRMA <span class="color-primary">& LIDÉ</span></h1>
                </div>
            </header>
        </div>

        <div class="row rowfix">
            <div class="m-section--content">

                <div class="l-full">
                    <?php
                    if (isset($content['field_slider_2'][0])) {
                        print render($content['field_slider_2']);
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>

    <!-- sekce se 4 kartami-->
    <div class="m-section l-feed_four">
        <div class="row">
            <header class="m-section--header"></header>
        </div>

        <?php
        if (isset($content['field_img_text_text'][0])) {
            print render($content['field_img_text_text']);
        }
        ?>

        <div class="row">
            <footer class="m-section--footer"></footer>
        </div>
    </div>

</article>


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



