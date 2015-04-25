<div class="m-section l-feed_one bg-secondary-light mm-has-background" style="background-image: url(<?= image_style_url('none', $items[0]['field_basic_img']['#items'][0]['uri']) ?>)">

    <header class="m-section--header">
        <h2 class="m-section--hed mm-medium mm-normal mm-center color-white"><?=$items[0]['field_basic_title']['#items'][0]['value']?></h2>
    </header>

    <div class="row">
        <div class="m-card_centered-text l-single bg-secondary-light">

            <article class="m-story">
                <header class="m-item--header">
                    <div class="m-item--summary">
                        <div class="m-item--description color-white mm-bold ">
                            <?=$items[0]['field_basic_text']['#items'][0]['value']?>
                        </div>
                    </div>
                </header>
            </article>
            <div class="m-card--more "><a class="button" href=""><?=$items[0]['field_page_link']['#items'][0]['title']?> &rarr;</a></div>
        </div>
    </div>

</div>