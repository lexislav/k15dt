<div class="m-card_faq l-single">
    <article class="m-story">
        <header>
            <h1 class="m-item--hed">
                <a href="<?=drupal_get_path_alias('node/'.$row->nid)?>">
                    <?= $row->node_title  ?>
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