<?php print render($tabs); ?>
<?php print $messages; ?>

<div class="l-navbar">

    <div class="m-navbar mm-secondary" id="navbarSecondary">
        <div class="m-navbar--container">

            <ul class="m-navbar--menu m-navbar--menu-tertiary">

                <li class="m-navbar--menu-social m-navbar--menu-twitter">
                    <a target="_blank" title="" href="https://twitter.com/rww">
                        <span class="fa fa-twitter"><em class="">Twitter</em></span>
                    </a>
                </li>

                <li class="m-navbar--menu-social m-navbar--menu-facebook">
                    <a target="_blank" title="" href="https://twitter.com/rww">
                        <span class="fa fa-facebook"><em>Facebook</em></span>
                    </a>
                </li>

                <li class="m-navbar--menu-social m-navbar--menu-youtube">
                    <a target="_blank" title="" href="https://twitter.com/rww">
                        <span class="fa fa-youtube-play"><em class="">YouTube</em></span>
                    </a>
                </li>
            </ul>

            <ul class="m-navbar--menu m-navbar--menu-secondary">
                <li class="m-navbar--menu-dropdown">
                    <a target="" title="Topics"><em class="">Language</em></a>
                </li>
            </ul>

            <ul class="m-navbar--menu m-navbar--menu-primary">
                <li class="m-navbar--menu-callout">
                    <span class="color-primary"><?php print t('Call us') ?>:</span> <?php print t('(+421) 20 577 007 711') ?>
                </li>
            </ul>

        </div>
    </div>

    <div class="m-navbar mm-primary" id="navbarPrimary">
        <div class="m-navbar--container">
            <a class="m-navbar--logo" href="/">
                <div class="mm-has-svg" style="background-image: url('/sites/koma/assets/images/logo-koma-modular.svg');"></div>
            </a>

            <!--            @TODO Upravit podle predlohy, kuli megamenu-->
            <!--            --><?php //if ($main_menu): ?>
            <!--                --><?php
            //                print theme('links__system_main_menu', array(
            //                    'links' => $main_menu,
            //                    'attributes' => array(
            //                        'class' => array('m-navbar--menu', 'm-navbar--menu-secondary'),
            //                    ),
            //                )); ?>
            <!--            --><?php //endif; ?>
            <!--            @TODO Upravit podle predlohy, kuli megamenu-->

            <ul class="m-navbar--menu m-navbar--menu-secondary">
                <li class="m-navbar--menu-link">
                    <a href="<?= $GLOBALS['base_url'] ?>/?q=kontakty" target="" title=""><em class="">Kontakt</em></a>
                </li>
                <li class="m-navbar--menu-link">
                    <a target="" title="" mega-open="#megaFirma"><em class="">Firma a lidé</em></a>
                </li>
                <li class="m-navbar--menu-link">
                    <a target="" title="" mega-open="#megaReference"><em class="">Reference</em></a>
                </li>
                <li class="m-navbar--menu-link">
                    <a target="" title="" mega-open="#megaObjekty"><em class="">Objekty dle účelu</em></a>
                </li>
                <li class="m-navbar--menu-link">
                    <a target="" title="" mega-open="#megaProdukty"><em class="">Produkty a služby</em></a>
                </li>
            </ul>

        </div>
    </div>
    <?= $zip_code = db_query("SELECT field_megamenu_html_value from {field_data_field_megamenu_html} ")->fetchField(); ?>

</div>
<?php print render($page['hledani']); ?>
<?php print render($page['content']); ?>


<!--certifikace-->
<div class="m-section l-feed_six">
    <header class="m-section--header">
        <h2 class="m-section--hed mm-medium mm-center"><?php print t('Certifikace') ?></h2>
    </header>
    <div class="row">
        <?php
        $block = module_invoke('views', 'block_view', 'certifik_ty-block');
        print render($block);
        ?>
    </div>
</div>
<!--certifikace-->


<!--support-->
<div class="m-section m-section_support">

    <div class="l-grid">
        <div class="m-section--item">

            <article class="m-newsletter">
                <header>
                    <h1 class="m-item--hed"><?php print t('Podpora pro zákazníky') ?></h1>
                </header>

                <div class="m-item--description"><?php print t('Nenašli jste zde odpověď na Vaše otázky? Zeptejte se nás přímo!') ?></div>
                <button><?php print t('Zeptejte se nás') ?> <i class="fa fa-arrow-right"></i></button>
            </article>

        </div>

        <div class="m-section--item worker">
            <img src="<?= $GLOBALS['base_url'] ?>/sites/koma/assets/images/worker.jpg" />
        </div>

        <div class="m-section--item">

            <article class="m-bulletin">
                <header>
                    <h1 class="m-item--hed"><?php print t('Podpora pro zákazníky') ?></h1>
                </header>

                <?php print render($page['form_email']); ?>
                <div class="m-item--description"><?php print t('Odběrem našeho měsíčního ebulletinu získáte přehled o dění ve světě modulární architektury i o novinkách systému modulární výstavby KOMA.') ?></div>

            </article>

        </div>
    </div>
</div>
<!--support-->

<!--paticka-->
<footer class="m-footer m-section l-footer">
    <div class="m-footer--container">
        <div class="row">


            <section class="m-footer--section">
                <a class="m-footer--logo" href="/">
                    <img src="<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma/assets/images/logo-koma-modular-inline-white.svg" alt="" />
                </a>

            </section>


            <section class="m-footer--section">


                <?php print theme('links__system_secondary_menu', array(
                    'links' => $secondary_menu,
                    'attributes' => array(
                        'class' => array('m-footer--menu-primary'),
                    )
                )); ?>
                <!--            @TODO Upravit podle predlohy-->
                <!--                    <li class="m-footer--menu-link">-->
                <!--                        <a target="{{ link.target }}" title="{{ link.title }}"><em class="">{{ link.title }}</em></a>-->
                <!--                    </li>-->
            </section>

            <section class="m-footer--section">
                <ul class="m-footer--menu-secondary">

                    <li class="m-footer--menu-link">
                        <a href="" target="" title=""><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="m-footer--menu-link">
                        <a href="" target="" title=""><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="m-footer--menu-link">
                        <a href="" target="" title=""><i class="fa fa-youtube-play"></i></a>
                    </li>
                </ul>

            </section>
        </div>

        <div class="row">

            <section class="m-footer--subsection">
                <a class="m-footer--author" href="/">
                    <a href="">© 2015 – 2017 KOMA Modular, s. r. o.</a>
                </a>
            </section>

            <section class="m-footer--subsection">
                <a class="m-footer--author" href="/">
                    <a href="">Od Oka</a>
                </a>
            </section>
        </div>


    </div>
</footer><!--paticka-->
