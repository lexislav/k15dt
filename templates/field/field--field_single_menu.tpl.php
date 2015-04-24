
<div class="l-half">
    <header class="m-section--header">
        <h2 class="m-section--hed mm-tiny"><?= $items[0]['field_basic_title']['#items'][0]['value'] ?></h2>
    </header>
    <ul class="button-group">
        <?php
        foreach ($items AS $poradi => $pole) {
            if ($poradi == 0) continue;
            ?>
            <li><a href="<?= $pole['field_page_link']['#items'][0]['display_url'] ?>" class="button"><?= $pole['field_basic_title']['#items'][0]['value'] ?> <span><?= $pole['field_basic_popis']['#items'][0]['value'] ?></span></a></li>
        <?php
        }
        ?>
    </ul>
</div>