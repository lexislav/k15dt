<ul class="button-group">
    <li class="text-label-button"><?= $items[0]['field_basic_title']['#items'][0]['value'] ?></li>
    <?php
    foreach ($items AS $poradi => $pole) {
        if ($poradi == 0) continue;
        ?>
        <li class="text-double-button">
            <a href="<?= @ $pole['field_page_link']['#items'][0]['display_url'] ?>"><?= @ $pole['field_basic_title']['#items'][0]['value'] ?>
                <span><?= $pole['field_basic_popis']['#items'][0]['value'] ?></span></a></li>
    <?php } ?>
</ul>
