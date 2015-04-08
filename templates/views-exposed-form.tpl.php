<?php

/**
 * @file
 * This template handles the layout of the views exposed filter form.
 *
 * Variables available:
 * - $widgets: An array of exposed form widgets. Each widget contains:
 * - $widget->label: The visible label to print. May be optional.
 * - $widget->operator: The operator for the widget. May be optional.
 * - $widget->widget: The widget itself.
 * - $sort_by: The select box to sort the view using an exposed form.
 * - $sort_order: The select box with the ASC, DESC options to define order. May be optional.
 * - $items_per_page: The select box with the available items per page. May be optional.
 * - $offset: A textfield to define the offset of the view. May be optional.
 * - $reset_button: A button to reset the exposed filter applied. May be optional.
 * - $button: The submit button for the form.
 *
 * @ingroup views_templates
 */


?>
<?php if (!empty($q)): ?>
    <?php
    // This ensures that, if clean URLs are off, the 'q' is added first so that
    // it shows up first in the URL.
    print $q;
    ?>
<?php endif; ?>

<div class="m-filter">
    <div class="l-grid">

        <div class="l-left">

            <ul class="m-filter--items">
                <li class="label">
                    <div>vyber</div>
                </li>
                <li>
                    <select id="edit-field-zpravodaj-kategorie-tid" name="field_zpravodaj_kategorie_tid"
                            class="form-select">
                        <option value="All" selected="selected">VŠE</option>
                        <option value="26">E-bulettin</option>
                        <option value="24">Novinky</option>
                        <option value="25">Příklady modulární výstavby ve světě</option>
                        <option value="120">Projekty</option>
                    </select>
                </li>
            </ul>
        </div>

        <div class="l-right">
            <ul class=" m-filter--items">
                <li>
                    <select class="date-year form-select" id="edit-field-zpravodaj-publikace-value-value-year"
                            name="field_zpravodaj_publikace_value[value][year]">
                        <option value="" selected="selected"> Datum</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                    </select>
                </li>
            </ul>
        </div>


    </div>
</div>



<?php foreach ($widgets as $id => $widget): ?>

    <?php if (!empty($widget->label)): ?>


    <?php endif; ?>
    <?php if (!empty($widget->operator)): ?>
        <div class="views-operator">
            <?php print $widget->operator; ?>
        </div>
    <?php endif; ?>


    <?php



 //   print $widget->widget;
    ?>



    <?php if (!empty($widget->description)): ?>
        <div class="description">
            <?php print $widget->description; ?>
        </div>
    <?php endif; ?>

<?php endforeach; ?>






<?php if (!empty($sort_by)): ?>
    <div class="views-exposed-widget views-widget-sort-by">
        <?php print $sort_by; ?>
    </div>
    <div class="views-exposed-widget views-widget-sort-order">
        <?php print $sort_order; ?>
    </div>
<?php endif; ?>
<?php if (!empty($items_per_page)): ?>
    <div class="views-exposed-widget views-widget-per-page">

        <?php print $items_per_page; ?>
    </div>
<?php endif; ?>
<?php if (!empty($offset)): ?>
    <div class="views-exposed-widget views-widget-offset">
        <?php print $offset; ?>
    </div>
<?php endif; ?>
<div class="views-exposed-widget views-submit-button">
    <?php print $button; ?>
</div>
<?php if (!empty($reset_button)): ?>
    <div class="views-exposed-widget views-reset-button">
        <?php print $reset_button; ?>
    </div>
<?php endif; ?>

