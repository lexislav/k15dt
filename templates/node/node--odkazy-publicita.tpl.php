<div class="m-section l-detail-page">
    <div class="row">
        <header class="m-section--header">
<!--            <div class="l-full">-->
<!--                <nav class="breadcrumbs">-->
<!--                    <a href="#">Home</a>-->
<!--                    <a href="#">Features</a>-->
<!--                    <a class="unavailable" href="#">Gene Splicing</a>-->
<!--                    <a class="current" href="#">Cloning</a>-->
<!--                </nav>-->
<!---->
<!--            </div>-->
        </header>
    </div>
<!--    --><?php


//    ?>
    <article class="m-reference">
        <header>
            <div class="m-reference--image mm-preview-fit"  >

            </div>
            <div class="m-reference--summary">
                <h1 class="m-reference--hed"><a href=""><?php print $title; ?></a></h1>
                <div class="m-reference--description">
                </div>
                <div class="m-reference--meta m-properties">
                    <dl>
                        <dt><?php print t('Zařazení publicity') ?></dt>
                        <dd><?= ($content['field_kategorie_publicity']['#items'][0]['taxonomy_term']->name); ?></dd>
                    </dl>
                    <dl>
                        <dt><?php print t('Odkaz') ?></dt>
                        <dd><a href="<?= ($content['field_odkazy_p_link']['#items'][0]['display_url']); ?>"><?=$title?></a> </dd>
                    </dl>
                    <dl>
                        <dt><?php print t('Popis publicity') ?></dt>
                        <dd><?=$content['field_odkazy_p_popisek']['#items'][0]['value']?></dd>
                    </dl>

                </div>
            </div>
        </header>

    </article>
    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href="">Nahoru &uarr;</a></div>
            </div>
            <div class="l-half">
                <div class="m-section--more"><a href="">Celý archiv &rarr;</a></div>
            </div>
        </footer>
    </div>
</div>
