<div class="m-section l-detail-page">
    <div class="row">
        <header class="m-section--header"></header>
    </div>

    <article class="m-story">
        <header>

            <div class="m-story--image" style="background-image: url(http://lorempixel.com/650/500)">
                <a href=""><img src="http://lorempixel.com/650/500" alt="" /></a>
            </div>

            <div class="m-story--summary">

                <h1 class="m-story--hed"><a href=""><?php print $title; ?></a></h1>

                <div class="m-story--description">
                    <p>Morbi vulputate ac quam quis feugiat. Mauris dapibus dictum ex, at sodales mauris rutrum vel. Suspendisse vestibulum enim sit amet ultricies hendrerit.</p>
                </div>

                <div class="m-story--meta">

                    <dl>
                        <dt><?php print t('Kategorie') ?></dt><dd><?= ($content['field_knowledgebase_kategorie'][0]['#title']); ?></dd>
                    </dl>

<!--                    <dl>-->
<!--                        <dt>--><?php //print t('Datum') ?><!--</dt><dd>--><?//= ($content['field_zpravodaj_publikace'][0]['#markup']); ?><!--</dd>-->
<!--                    </dl>-->

                </div>
            </div>
        </header>
        <div class="m-story--content">
            <div class="m-body--content">
                <?= ($content['field_knowledgebase_text']['#items'][0]['value']); ?>
            </div>
        </div>
    </article>
    <div class="row">
        <footer class="m-section--footer">
            <div class="l-third">
                <div class="m-section--top"><a href="">Nahoru &uarr;</a></div>
            </div>
            <div class="l-two-thirds">

            </div>
        </footer>
    </div>
</div>
