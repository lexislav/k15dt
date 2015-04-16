<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */

dsm($fields);

?>


    <div class="m-contact-tab--content ">
        <div class="m-contact-tab--address">
            <div class="m-address">
                <div class="m-address--name"><?=$fields['title']->raw?></div>
                <div class="m-address--job"><?=$fields['field_kontakt_pozice']->content?></div>
                <div class="m-address--phone"><span>T</span> <?=$fields['field_kontakt_pevna']->content?></div>
                <div class="m-address--phone"><span>M</span> <?=$fields['kontakt_telefon']->content?></div>
                <div class="m-address--fax"><span>F</span> <?=$fields['kontakt_fax']->content?></div>
                <div class="m-address--mail"><span>E</span> <?=$fields['kontakt_email']->content?>
                </div>
                <div class="m-address--action">
                    <a href="" title="" fillform data-subject="Pro vedoucí útvaru"
                       data-name="Hana Babjarová" data-email="<?=$fields['kontakt_email']->content?>">Odeslat
                        zprávu
                        <i class="fa fa-envelope-o"></i></a></div>
            </div>

        </div>


    </div>
