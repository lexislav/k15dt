<?php
//
//dsm($node);
//dsm($content);
//
//?>

<article>
    <div class="m-section">
        <div class="row">
            <header class="m-section--header">
                <div class="l-half">
                    <h1 class="m-basic-page--hed mm-big">PRODUKTY <span class="color-primary">A SLUŽBY</span></h1>
                </div>
                <div class="l-half"></div>
            </header>
        </div>
    </div>

    <div class="m-section l-feed_four">
        <div class="row">
            <header class="m-section--header">
                <div class="l-third">
                    <h2 class="mm-small color-primary"><?php print t('Produktové řady') ?></h2>
                </div>

                <?php
                // @todo: to dělá co?
                $tree = taxonomy_get_tree(5);
                ?>

                <div class="l-two-thirds">
                    <ul class="m-section--nav inline-right">
                        <li><a href=""  title="">menu</a></li>
                        <li><a href=""  title="">správné</a></li>
                        <li><a href=""  title="">dát</a></li>
                        <li><a href=""  title="">sem</a></li>
                    </ul>
                </div>
            </header>
        </div>

        <?php
        // @todo: REZ vyměnit za správnou šablonu!

        if (isset($content['field_img_text_text'][0])) {
            print render($content['field_img_text_text']);
        }
        ?>

        <div class="row">
            <footer class="m-section--footer">
            </footer>
        </div>
    </div>
</article>


<?php
if (isset($content['field_bigimg_a_text'][0])) {
    print render($content['field_bigimg_a_text']);
}
?>


<div class="m-section l-feed_two bg-white">

    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-section--hed mm-big"><span class="color-primary">AKTUÁLNÍ</span> NABÍDKA</h2>
            </div>
        </header>
    </div>

    <div class="row">
        <div class="l-single">
            <?php
            $block = module_invoke('views', 'block_view', 'nabidka-block');
            print render($block);
            ?>

            <!--
            @todo: rez: davas tam kod z detailu stránky, ktery tam nema co dělat
            ten blok by měl generovat pouze tabulku s daty
            vnitřek tohoto bloku by měl vypada následně:

            <div class="m-reference--meta m-properties">
                <dl class="mm-nolabels mm-noborder">
                <dt>Modulární prodejna</dt>
                <dd><a href="nabidka/modularni-prodejna" title="Modulární prodejna">
                <i class="fa fa-file-pdf-o"></i> Modulární prodejna</a></dd>
                </dl>
            </div>

            nic víc žádné aside, žádné basic page atd...

            -->

        </div>

        <div class="l-single">
            <?php
            $block = module_invoke('views', 'block_view', 'nabidka-block_1');
            print render($block);
            ?>

            <!--
           @todo: rez: davas tam kod z detailu stránky, ktery tam nema co dělat
           ten blok by měl generovat pouze tabulku s daty
           vnitřek tohoto bloku by měl vypada následně:

           <div class="m-reference--meta m-properties">
               <dl class="mm-nolabels mm-noborder">
               <dt>Modulární prodejna</dt>
               <dd><a href="nabidka/modularni-prodejna" title="Modulární prodejna">
               <i class="fa fa-file-pdf-o"></i> Modulární prodejna</a></dd>
               </dl>
           </div>

           nic víc žádné aside, žádné basic page atd...

           -->

        </div>
    </div>
</div>

<?php
if (isset($content['field_sluzby2'][0])) {
    print render($content['field_sluzby2']);
}
if (isset($content['field_segment_faq'][0])) {
    print render($content['field_segment_faq']);
}
?>
<div class="m-section l-feed_four" style="background-image: url('/sites/all/themes/koma/assets/images/mozaika-koma.png')">

    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-section--hed mm-big mm-tiny mm-center mm-pad-bottom mm-pad-top">JSME PŘEDNÍ ČESKÝ VÝROBCE
                    <br /><span class="color-primary">MODULÁRNÍ VÝSTAVBY</span></h2>
            </div>
        </header>
    </div>
    <?php
    if (isset($content['field_img_text_text'][0])) {
        print render($content['field_img_text_text']);
    }
    ?>
    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href=""><?php print t('Nahoru') ?> &uarr;</a></div>
            </div>
            <div class="l-half"></div>
        </footer>
    </div>
</div>


