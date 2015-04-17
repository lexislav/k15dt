<?php
/**
 * @file
 * Returns the HTML for the basic html structure of a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728208
 */
?><!DOCTYPE html><!--[if IEMobile 7]>
<html class="iem7" <?php print $html_attributes; ?>><![endif]--><!--[if lte IE 6]>
<html class="lt-ie9 lt-ie8 lt-ie7" <?php print $html_attributes; ?>><![endif]--><!--[if (IE 7)&(!IEMobile)]>
<html class="lt-ie9 lt-ie8" <?php print $html_attributes; ?>><![endif]--><!--[if IE 8]>
<html class="lt-ie9" <?php print $html_attributes; ?>><![endif]--><!--[if (gte IE 9)|(gt IEMobile 7)]><!-->
<html <?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->

<head>
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>

    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <!--PRYYYYYYCCCCC-->
    <!--PRYYYYYYCCCCC-->
    <!--PRYYYYYYCCCCC-->
    <!--PRYYYYYYCCCCC-->
    <!--PRYYYYYYCCCCC-->
    <!--PRYYYYYYCCCCC-->
    <!--PRYYYYYYCCCCC-->
    <!--PRYYYYYYCCCCC-->
    <!--PRYYYYYYCCCCC-->
    <!--PRYYYYYYCCCCC-->
    <meta name="robots" content="noindex,nofollow"/>
    <!--PRYYYYYYCCCCC-->
    <!--PRYYYYYYCCCCC-->
    <!--PRYYYYYYCCCCC-->
    <!--PRYYYYYYCCCCC-->
    <!--PRYYYYYYCCCCC-->
    <!--PRYYYYYYCCCCC-->
    <!--PRYYYYYYCCCCC-->
    <!--PRYYYYYYCCCCC-->
    <!--PRYYYYYYCCCCC-->
    <!--PRYYYYYYCCCCC-->


    <meta http-equiv="cleartype" content="on">

    <meta name="format-detection" content="telephone=no"/>
    <meta name="format-detection" content="address=no"/>
    <?php print $styles; ?>
    <link rel="stylesheet" href="<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma/components/chosen/chosen.min.css"/>
<!--    <script type="text/javascript"-->
<!--            src="--><?//= $GLOBALS['base_url'] ?><!--/jquery-2.1.3.min.js"></script>-->
    <?php print $scripts; ?>


    <?php if ($add_html5_shim and !$add_respond_js): ?>
        <!--[if lt IE 9]>
        <script src="<?php print $base_path . $path_to_zen; ?>/js/html5.js"></script><![endif]-->
    <?php elseif ($add_html5_shim and $add_respond_js): ?>
        <!--[if lt IE 9]>
        <script src="<?php print $base_path . $path_to_zen; ?>/js/html5-respond.js"></script><![endif]-->
    <?php elseif ($add_respond_js): ?>
        <!--[if lt IE 9]>
        <script src="<?php print $base_path . $path_to_zen; ?>/js/respond.js"></script><![endif]-->
    <?php endif; ?>


</head>
<body class="l-page <?php print $classes; ?>" <?php print $attributes; ?>>
<?php if ($skip_link_text && $skip_link_anchor): ?>
    <p id="skip-link">
        <a href="#<?php print $skip_link_anchor; ?>"
           class="element-invisible element-focusable"><?php print $skip_link_text; ?></a>
    </p>
<?php endif; ?>


<!--@TODO megatodo: domenu kde je fixne nahradit promennou -->


<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>


<div class="m-page-scroll">
    <div class="m-page-scroll--item">
        <img src="<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma/assets/images/scroll-down-sipka.svg"
             alt="Scroll Down" class="scroll-sipka"/> Scroll down
    </div>
</div>


<script type="text/javascript"
        src="<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma/components/chosen/chosen.jquery.min.js"></script>
<script type="text/javascript"
        src="<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma/js/app.js"></script>
<!--
<script type="text/javascript" src="<? /*= $GLOBALS['base_url'] */ ?>/sites/all/themes/koma/components/foundation/js/foundation.min.js"></script>
<script type="text/javascript" src="<? /*= $GLOBALS['base_url'] */ ?>/sites/all/themes/koma/components/foundation/js/foundation.clearing.js"></script>
<script>jQuery(document).foundation();</script>
-->
<!--<script>-->
<!---->
<!--    // slick controll-->
<!--    jQuery(function () {-->
<!---->
<!--        // mega menu-->
<!---->
<!--        var lastMegaTab = null;-->
<!---->
<!--        jQuery('[mega-open]').each(function () {-->
<!--            var item = jQuery(this);-->
<!--            var mega = jQuery("#mega");-->
<!--            var tabName = item.attr("mega-open");-->
<!--            var tab = jQuery(tabName);-->
<!---->
<!--            item.click(function (e) {-->
<!--                e.preventDefault();-->
<!---->
<!--                if (lastMegaTab) {-->
<!--                    lastMegaTab.removeClass("is-active");-->
<!--                }-->
<!---->
<!--                mega.addClass("is-open");-->
<!--                tab.addClass("is-active");-->
<!--                lastMegaTab = tab;-->
<!--            });-->
<!---->
<!--        });-->
<!---->
<!--        jQuery('[mega-close]').each(function () {-->
<!--            var item = jQuery(this);-->
<!--            var mega = jQuery("#mega");-->
<!---->
<!--            item.click(function (e) {-->
<!--                e.preventDefault();-->
<!--                if (lastMegaTab) {-->
<!--                    lastMegaTab.removeClass("is-active");-->
<!--                }-->
<!--                mega.removeClass("is-open");-->
<!--                lastMegaTab.removeClass("is-active");-->
<!--            });-->
<!---->
<!--        });-->
<!---->
<!--        // end mega menu-->
<!---->
<!---->
<!--        // resize Navbar-->
<!---->
<!--        var navbarPrimary = jQuery('#navbarPrimary');-->
<!--        var navbarSecondary = jQuery('#navbarSecondary');-->
<!--        var scrollDriver = jQuery('body');-->
<!---->
<!--        var currentTop = function () {-->
<!--            return scrollDriver.scrollTop();-->
<!--        }-->
<!---->
<!--        jQuery(window).scroll(function () {-->
<!--            if (currentTop() > 150) {-->
<!--                if (!navbarPrimary.hasClass("is-collapsed")) {-->
<!--                    navbarPrimary.addClass("is-collapsed");-->
<!--                }-->
<!--                if (!navbarSecondary.hasClass("is-hidden")) {-->
<!--                    navbarSecondary.addClass("is-hidden");-->
<!--                }-->
<!--            } else {-->
<!--                navbarPrimary.removeClass("is-collapsed");-->
<!--                navbarSecondary.removeClass("is-hidden");-->
<!--            }-->
<!--        });-->
<!---->
<!--        // end resize Navbar-->
<!---->
<!---->
<!--        // chosen select box-->
<!--        jQuery(".ch-select").chosen({-->
<!--            create_option: true,-->
<!--            persistent_create_option: true,-->
<!--            create_option_text: 'add'-->
<!--        });-->
<!--    });-->
<!---->
<!--</script>-->
</body>
</html>
