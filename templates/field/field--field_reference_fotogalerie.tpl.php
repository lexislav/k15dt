<?php
if (count($items) > 0) {
    ?>
    <div class="m-section">
        <div class="row">
            <header class="m-section--header mm-center">Fotogalerie</header>
        </div>
        <?php
        foreach ($items AS $pole) {
        $cast = ($pole['node'][key($pole['node'])]['field_fotogalerie_imgs']['#items']);
        ?>
        <div class="row">
            <ul class="m-gallery mm-wide clearing-thumbs" data-clearing>
                <?php foreach ($cast AS $poradi => $img) {// prochazi jednotlive obrazky ?>
                    <li class="m-gallery--item <?= ($poradi == 0) ? 'clearing-featured-img' : '' ?>">
                        <a href="<?= image_style_url('none', $img['uri']) ?>"><img src="<?= image_style_url('x323-268', $img['uri']) ?>"></a>
                    </li>
                <?php } ?>
            </ul>
            <?php } ?>
        </div>
        <div class="row">
            <footer class="m-section--footer"></footer>
        </div>
    </div>
    <?php
}
?>
