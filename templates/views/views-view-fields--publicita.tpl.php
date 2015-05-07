<div class="m-card_faq l-single">
    <article class="m-story">
        <header>
            <h1 class="m-item--hed">
                <a target="_blank" href="<?=@$row->field_field_odkazy_p_link[0]['raw']['url']?>">
                    <?= $row->node_title ?>
                </a>
            </h1>

            <div class="m-item--summary">
                <div class="m-item--description">
                    <p><?= $fields['nothing']->content ?></p>
                </div>
            </div>
        </header>
    </article>
</div>