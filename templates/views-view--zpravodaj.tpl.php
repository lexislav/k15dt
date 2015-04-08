

<div class="m-section l-feed_two">
        <header class="m-section--header">
            <h2 class="m-section--hed mm-medium mm-center"><?php print t('Zpravodaj')?></h2>
        </header>


    <!-- filter markup-->

    <div class="m-filter">
        <div class="l-grid">
            <form action="">
                <div class="l-left">

                    <ul class="m-filter--items">
                        <li class="label">
                            <div>vyber</div>
                        </li>
                        <li>
                            <select name="timepass" class="ch-select">
                                <option value="A">Option A</option>
                                <option value="A">Option A</option>
                                <option value="A">Option A</option>
                                <option value="A">Option A</option>
                            </select>
                        </li>

                        <li>
                            <select name="timepass" class="ch-select">
                                <option value="A">Option A</option>
                                <option value="A" class="category">Category A</option>
                                <option value="A">Option A</option>
                                <option value="A">Option A</option>
                                <option value="A">Option A</option>
                                <option value="A" class="category">Category B</option>
                                <option value="A">Option A</option>
                            </select>
                        </li>

                    </ul>
                </div>

                <div class="l-right">
                    <ul class=" m-filter--items">
                        <li>
                            <select name="timepass" class="ch-select">
                                <option value="A">Option A</option>
                                <option value="A">Option A</option>
                                <option value="A">Option A</option>
                                <option value="A">Option A</option>
                            </select>
                        </li>
                    </ul>
                </div>

            </form>
        </div>
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
        <div class="row">
            <?php print $rows; ?>
        </div>
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
