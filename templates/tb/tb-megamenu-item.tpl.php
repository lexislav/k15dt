<div class="item">
    <a href="<?php print in_array($item['link']['href'], array('<nolink>')) ? "#" : url($item['link']['href'], $item['link']['options']); ?>" <?php echo drupal_attributes($item['link']['#attributes']); ?>>
        <?php print t($item['link']['title']); ?>
    </a>

    <?php if($submenu) {?>
        <div class="item-submenu">
            <div class="row">
                <?php print $submenu ? $submenu : ""; ?>
            </div>
        </div>
    <?php } ?>
</div>


