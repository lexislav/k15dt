<?php
if (count($items) > 0) {
    ?>
    <div class="m-section">
        <div class="row">
            <header class="m-section--header">
                <div class="l-full">
                    <!--                jako nazev se vklada jen cast za Fotogalerie, to vzdy zustava-->
                    <h2 class="m-section--hed mm-big mm-tiny mm-center mm-pad-bottom mm-pad-top"><span class="color-primary"><i class="fa fa-picture-o"></i> Fotogalerie</span> <?=$items[0]['#markup']?></h2>
                </div>
            </header>
        </div>
    </div>
<?php
}
?>