
<div class="m-section l-feed_block-carousel">

    <div class="m-section--underlay"></div>



    <div class="row">
        <div class="l-section--content slider block-feed-slider">
<?php print render($title_prefix); ?>
<?php if ($title): ?>
    <?php print $title; ?>
<?php endif; ?>
<?php print render($title_suffix); ?>
<?php if ($header): ?>

    <?php print $header; ?>

<?php endif; ?>

<?php if ($exposed): ?>
    <div class="view-filters">
        <?php print $exposed; ?>
    </div>
<?php endif; ?>

<?php if ($attachment_before): ?>
    <div class="attachment attachment-before">
        <?php print $attachment_before; ?>
    </div>
<?php endif; ?>

<?php if ($rows): ?>

    <?php print $rows; ?>

<?php elseif ($empty): ?>
    <div class="view-empty">
        <?php print $empty; ?>
    </div>
<?php endif; ?>

<?php if ($pager): ?>
    <?php print $pager; ?>
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
</div>

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
