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
            <form action="">
                <div class="l-left">

                    <ul class="m-filter--items">
                        <li class="label">
                            <div>vyber</div>
                        </li>
                        <li>
                            <select id="edit-name-selective" name="name_selective" class="form-select"><option value="All" selected="selected">ZEMĚ</option><option value="Belgie">Belgie</option><option value="Nizozemsko">Nizozemsko</option><option value="Německo">Německo</option><option value="Polsko">Polsko</option><option value="Slovensko">Slovensko</option><option value="Uzbekistán">Uzbekistán</option><option value="Zambie">Zambie</option><option value="Česká republika">Česká republika</option></select>
                        </li>
                        <li>
                            <select id="edit-field-reference-kategorie-stavby-tid" name="field_reference_kategorie_stavby_tid" class="form-select"><option value="All" selected="selected">SEGMENT / KATEGORIE</option><option value="102">Administrativní budovy</option><option value="49">-Kanceláře</option><option value="114">Ostatní</option><option value="75">-Banky</option><option value="76">-Celnice</option><option value="77">-Eventové moduly</option><option value="78">-Infostánky</option><option value="79">-Veletržní stánky</option><option value="74">-Vrátnice</option><option value="103">Realizace pro bydlení</option><option value="50">-Bytové domy</option><option value="51">-Domovy poklidného stáří stáří</option><option value="52">-Hotely</option><option value="53">-Kempy</option><option value="54">-Rodinné domy</option><option value="55">-Sociální bytové domy</option><option value="56">-Startovací bytové domy</option><option value="57">-Ubytovny</option><option value="104">Realizace pro kulturu</option><option value="64">-Kina</option><option value="65">-Konferenční místnosti</option><option value="66">-Kulturní domy</option><option value="111">Realizace pro sport</option><option value="45">-Fitcentra</option><option value="46">-Sportovní šatny</option><option value="47">-Wellnessy</option><option value="48">-Zázemí klubů</option><option value="105">Realizace pro stravování</option><option value="41">-Čajovny</option><option value="42">-Kavárny</option><option value="43">-Restaurace</option><option value="44">-Rychlá občerstvení</option><option value="106">Realizace pro zdravotnictví</option><option value="72">-Nemocnice</option><option value="73">-Ošetřovny</option><option value="107">Realizace školské</option><option value="67">-Hudební školy</option><option value="68">-Mateřské školy</option><option value="69">-Střední školy</option><option value="70">-Vysoké školy</option><option value="71">-Základní školy</option><option value="108">Sanitární moduly</option><option value="63">-Sanitární moduly</option><option value="109">Speciální moduly</option><option value="59">-City moduly</option><option value="60">-Moduly odolné proti výbuchu</option><option value="61">-Stany</option><option value="62">-Technologické kontejnery</option><option value="110">Zařízení staveniště</option><option value="58">-Zařízení staveniště</option><option value="92">Realizace pro podnikání</option><option value="34">-Autosalony</option><option value="35">-Čerpací stanice</option><option value="36">-Drobné výrobní provozy</option><option value="37">-Pekárny</option><option value="38">-Prodejny</option><option value="40">-Šatny pro dělníky</option><option value="39">-Sklady</option></select>
                        </li>
                        <li>
                            <select id="edit-field-reference-rok-value-selective" name="field_reference_rok_value_selective" class="form-select"><option value="All" selected="selected">ROK</option><option value="1993-01-01 00:00:00">1993</option><option value="1994-01-01 00:00:00">1994</option><option value="1995-01-01 00:00:00">1995</option><option value="1996-01-01 00:00:00">1996</option><option value="1997-01-01 00:00:00">1997</option><option value="1998-01-01 00:00:00">1998</option><option value="1999-01-01 00:00:00">1999</option><option value="2000-01-01 00:00:00">2000</option><option value="2001-01-01 00:00:00">2001</option><option value="2002-01-01 00:00:00">2002</option><option value="2003-01-01 00:00:00">2003</option><option value="2004-01-01 00:00:00">2004</option><option value="2005-01-01 00:00:00">2005</option><option value="2006-01-01 00:00:00">2006</option><option value="2007-01-01 00:00:00">2007</option><option value="2008-01-01 00:00:00">2008</option><option value="2009-01-01 00:00:00">2009</option><option value="2010-01-01 00:00:00">2010</option><option value="2011-01-01 00:00:00">2011</option><option value="2012-01-01 00:00:00">2012</option><option value="2013-01-01 00:00:00">2013</option><option value="2014-01-01 00:00:00">2014</option><option value="2015-01-01 00:00:00">2015</option></select>
                        </li>

                    </ul>
                </div>



            </form>
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



  //  print $widget->widget;
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
        <?php // print $reset_button; ?>
    </div>
<?php endif; ?>

