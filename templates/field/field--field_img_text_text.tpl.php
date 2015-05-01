<div class="m-section l-feed_<?= (count($items) == 3) ? 'triple-card' : 'four' ?>">

    <div class="row rowfix">

        <?php
        foreach ($items AS $cast) {
            ?>
            <div class="m-card_standard l-single">

                <article class="m-story">
                    <header>
                        <div class="m-item--image" style="background-image: url(<?= image_style_url('x282-181', $cast['field_basic_img']['#items'][0]['uri']) ?>)">
                            <a href="<?= $cast['field_page_link']['#items'][0]['display_url'] ?>" title="<?= $cast['field_basic_title']['#items'][0]['value'] ?>">
                                <img src="<?= image_style_url('x282-181', $cast['field_basic_img']['#items'][0]['uri']) ?>" alt="" />
                            </a>
                        </div>
                        <div class="m-item--summary">
                            <h1 class="m-item--hed">
                                <a href="<?= $cast['field_page_link']['#items'][0]['display_url'] ?>" title="<?= $cast['field_basic_title']['#items'][0]['value'] ?>"><?= $cast['field_basic_title']['#items'][0]['value'] ?></a>
                            </h1>

                            <div class="m-item--description">
                                <p><?= @$cast['field_basic_text']['#items'][0]['value'] ?></p>
                            </div>
                        </div>
                    </header>
                </article>

                <div class="m-card--more">
                    <a href="<?= $cast['field_page_link']['#items'][0]['display_url'] ?>" title="<?= $cast['field_basic_title']['#items'][0]['value'] ?>">&rarr;</a>
                </div>
            </div>

        <?php } ?>
    </div>

</div>
