<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
//dpm(get_defined_vars());
//dpm($static);
//dpm($view);

global $kontaktcount;
$kontaktcount++;
?>


<?php
// tohle neni hezky ani elegantni ale ted to funguje
if ($kontaktcount == 12) { ?>
    </div><div class="m-contact-list--column">
<?php } ?>


    <div class="m-contact-tab contact-tab-<?= $kontaktcount; ?>">
        <?php if (!empty($title)): ?>
            <header class="m-contact-tab--header" collapsible data-target="parent">
                <div class="m-contact-tab--mark">+</div>
                <h3 class="m-contact-tab--hed"><?= $title; ?></h3>

                <div class="m-contact-tab--action"><a href=""><i class="fa fa-envelope"></i></a></div>
            </header>

        <?php endif; ?>
        <div class="m-contact-tab--content ">
            <?php foreach ($rows as $id => $row): ?>

                <?php print $row; ?>

            <?php endforeach; ?>
        </div>
    </div>
