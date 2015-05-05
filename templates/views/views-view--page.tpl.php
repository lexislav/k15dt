<?php

$trida = 'l-feed_four';
if($view->name=='certifik_ty' OR $view->name=='zpravodaj'){
   $trida = 'l-feed_two';
}
?>

<div class="m-section <?=$trida?>">

    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-section--hed mm-big"><?=$view->human_name?></h2>
            </div>
        </header>
    </div>


    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
        <?php print $title; ?>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if ($header): ?>
        <div class="view-header">
            <?php print $header; ?>
        </div>
    <?php endif; ?>

    <?php if ($exposed): ?>
        <div class="m-filter">
            <div class="l-grid">
                <?php print $exposed; ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if ($attachment_before): ?>
        <div class="attachment attachment-before">
            <?php print $attachment_before; ?>
        </div>
    <?php endif; ?>

    <?php if ($rows): ?>
        <div class="row">
            <?php print $rows; ?>
        </div>
    <?php elseif ($empty): ?>
        <div class="view-empty">
            <?php print $empty; ?>
        </div>
    <?php endif; ?>



    <?php if ($attachment_after): ?>
        <div class="attachment attachment-after">
            <?php print $attachment_after; ?>
        </div>
    <?php endif; ?>

    <?php if ($more): ?>
        <?php print $more; ?>
    <?php endif; ?>

    <?php if ($footer): ?>
        <div class="view-footer">
            <?php print $footer; ?>
        </div>
    <?php endif; ?>

    <?php if ($feed_icon): ?>
        <div class="feed-icon">
            <?php print $feed_icon; ?>
        </div>
    <?php endif; ?>

</div>
<div class="m-section bg-white">
    <div class="row">

        <footer class="m-section--footer">
            <div class="l-left">
                <div class="m-section--top"><a href="">Nahoru &uarr;</a></div>
            </div>
            <div class="l-center">
                <?php if ($pager):
                    $pager = str_replace('class="item-list"', 'class="m-pagination"', $pager);
                    $pager = str_replace('class="pager"', 'class="m-pagination--container"', $pager);
                    $pager = str_replace('pager-current', 'class="current"', $pager);
                    $pager = str_replace('pager-next', 'pager-next arrow', $pager);
                    ?>
                    <?php print $pager; ?>
                <?php endif; ?>

            </div>
            <div class="l-right">
                <div class="m-section--more"><a href="">Celý archiv &rarr;</a></div>
            </div>
        </footer>

    </div>
</div>






