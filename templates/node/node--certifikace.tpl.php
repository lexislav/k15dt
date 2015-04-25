<div class="m-section l-detail-page">
    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <nav class="breadcrumbs">
                    <a href="#">Home</a>
                    <a href="#">Features</a>
                    <a class="unavailable" href="#">Gene Splicing</a>
                    <a class="current" href="#">Cloning</a>
                </nav>

            </div>
        </header>
    </div>
<!--    --><?php
//    dsm($content);
//    dsm($node);
//    ?>
    <article class="m-reference">
        <header>
            <div class="m-reference--image"
                 style="background-image: url(<?= image_style_url('x618-0', $content['field_cert_nahled']['#items'][0]['uri']) ?>)">
                <a href=""><img
                        src="<?= image_style_url('x618-0', $content['field_cert_nahled']['#items'][0]['uri']) ?>"
                        alt=""/></a>
            </div>
            <div class="m-reference--summary">
                <h1 class="m-reference--hed"><a href=""><?php print $title; ?></a></h1>

                <div class="">
                  <?=$content['field_cert_popis']['#items'][0]['value']?>
                </div>
                <div class="m-reference--meta m-properties">
                    <dl>
                        <!--                        @TODO kategorie predelat-->
                        <dt><?php print t('Zařazení') ?></dt>
                        <dd><?= ($content['field_cert_kategorie'][0]['#title']); ?></dd>
                    </dl>
                    <dl>
                        <!--                        @TODO kategorie predelat-->
                        <dt><?php print t('Certifikát ke stažení') ?></dt>
                        <dd><a href="<?= (file_create_url($content['field_cert_cert']['#items'][0]['uri'])); ?>"><?=$title?></a> </dd>
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
