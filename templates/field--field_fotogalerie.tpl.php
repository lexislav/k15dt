<?php

//x323-268

foreach ($items AS $pole) {
    $cast = ($pole['entity']['field_collection_item'][key($pole['entity']['field_collection_item'])]['#entity']);

 //   dsm($cast);


}
?>
<div class="m-section">
    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-section--hed mm-big mm-tiny mm-center mm-pad-bottom mm-pad-top"><?= $cast->field_basic_title[$element['#language']][0]['value'] ?></h2>
            </div>
        </header>
    </div>

    <div class="row">


        <?php
        foreach ($cast->field_reference_fotogalerie['und'] AS $galerie) {
            ?>
            <ul class="clearing-thumbs clearing-feature" data-clearing>
                <?php
                foreach ($galerie['entity']->field_fotogalerie_imgs['und'] AS $poradi => $img){
                    ?>

                    <li class="<?=($poradi==0)?'clearing-featured-img':''?>"><a href="<?= image_style_url('none', $img['uri']) ?>"><img src="<?= image_style_url('x323-268', $img['uri']) ?>"></a></li>


                <?php
                }
                ?>


            </ul>
        <?php
        }
        ?>


    </div>


    <div class="row">
        <footer class="m-section--footer"></footer>
    </div>
</div>
