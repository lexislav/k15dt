<div class="m-section l-detail-page">
    <div class="row">
        <header class="m-section--header">
            <div class="l-half">
                <h2 class="m-section--hed mm-medium"><?= $node->title ?></h2>
            </div>
            <div class="l-half">
                <ul class="m-section--nav inline-right">
                    <li><a href="" target="" title=""><i class="fa fa-facebook"></i></a></li>
                    <li><a href="" target="" title=""><i class="fa fa-twitter"></i></a></li>
                    <li><a href="" target="" title=""><i class="fa fa-youtube-play"></i></a></li>
                </ul>
            </div>
        </header>
    </div>

    <article class="m-contact">
        <header>

            <div class="m-contact--summary">
                <h1 class="m-contact--hed color-black"><?php print t('KOMA Modular s.r.o.') ?></h1>

                <div class="m-contact--description">
                    <?= $content['field_basic_text']['#items'][0]['value'] ?>
                    <br/>
                    <span class="color-primary">T</span> <?= $content['kontakt_telefon']['#items'][0]['value'] ?><br/>
                    <span class="color-primary">F</span> <?= $content['kontakt_fax']['#items'][0]['value'] ?><br/>
                    <span class="color-primary">E</span> <?= $content['kontakt_email']['#items'][0]['value'] ?><br/>
                </div>

                <div class="m-contact--meta"></div>

            </div>

            <div class="m-contact--image"
                 style="background-image: url(<?= image_style_url('x294-226', $content['field_image']['#items'][0]['uri']) ?>)">
                <a href=""><img src="<?= image_style_url('x294-226', $content['field_image']['#items'][0]['uri']) ?>"
                                alt=""/></a>
            </div>

            <div class="m-contact--map"
                 style="background-image: url(<?= image_style_url('x294-226', $content['field_image']['#items'][1]['uri']) ?>)">
                <a href="https://www.google.cz/maps/place/KOMA+MODULAR+s.r.o./@49.212273,17.862165,17z/data=!3m1!4b1!4m2!3m1!1s0x4713774877b90479:0xf22380988353fbe9"><img
                        src="<?= image_style_url('x294-226', $content['field_image']['#items'][1]['uri']) ?>"
                        alt=""/></a>
            </div>


        </header>
    </article>

    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <button class="button"><?php print t('Zeptejte se nás') ?></button>
            </div>
            <div class="l-half">
                <ul class="m-section--nav inline-right">
                    <li><a href="#kariera"><?php print t('Kariéra v KOMA') ?> </a></li>
                    <li><a href="#adresar"><?php print t('Adresář') ?> </a></li>
                    <li><a href="#formSection">&darr; <?php print t('Kontaktní formulář') ?> </a></li>
                </ul>
            </div>
        </footer>
    </div>

</div>

<!-- contact list -->
<div class="m-section bg-white" id="adresar">
    <div class="row">
        <header class="m-section--header">
            <div class="l-half">
                <h2 class="m-section--hed mm-small color-primary"><?php print t('Adresář firmy') ?></h2>
            </div>
        </header>
    </div>
    <?php
    $block = module_invoke('views', 'block_view', 'kontakty-block');
    print render($block);
    ?>

    <div class="row">
        <footer class="m-section--footer"></footer>
    </div>
</div>

<?php

if (isset($_POST['mailto'])) {
    $mailto = $_POST['mailto'];
    $mailfrom = $_POST['email'];
    $name = $_POST['name'];
    $text = $_POST['body'];


    test_mail('info@container.cz', $mailto, 'Nová zpráva - kontaktní formulář KOMA',  $name."\n".$text);
    test_mail('info@container.cz', $mailfrom, 'Nová zpráva - kontaktní formulář KOMA',  $name."\n".$text);


    ?>

    <div class="m-section">
        <div class="row">
            <header class="m-section--header">
                <div class="l-full">
                    <h2 class="m-section--hed mm-tiny mm-medium mm-center">Formulář byl úspěšně odeslán</h2>
                </div>
            </header>
        </div>

        <div class="row">
            <div class="m-contact-form mm-sent">
                <div class="m-contact-form--content">
                    <p>
                        <i class="fa fa-paper-plane-o"></i> Formulář byl úspěšně odeslán na adresu: <span><?=$mailto?></span>
                        <br/>a na vámi zadanou adresu <span><?=$mailfrom?></span>
                    </p>
                    <button class="button">Odeslat novou zprávu <i class="fa fa-paper-plane-o"></i></button>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div class="m-section" id="formSection">
        <div class="row">
            <header class="m-section--header">
                <div class="l-full">
                    <h2 class="m-section--hed mm-tiny mm-medium mm-center"><?php print t('Chcete se na něco zeptat?') ?>
                        <span class="color-primary"> <?php print t('Napište Nám') ?></span></h2>
                </div>
            </header>
        </div>

        <div class="row">
            <div class="m-contact-form">
                <header>
                    <i class="fa fa-paper-plane-o"></i> <?php print t('Kontaktní formulář bude odeslán na adresu:') ?>
                    <span id="targetMailInfo">info@container.cz</span>
                </header>


                <!--@TODO dodelat cele vsechno omg-->

                <div class="m-contact-form--content">
                    <form action="http://new.koma-modular.cz/?q=kontakty" method="post">
                        <input type="hidden" name="mailto" id="mailto" value="info@container.cz"/>
                        <input type="text" id="name" name="name" placeholder="Vaše jméno a příjmení" required/>
                        <input type="email" id="email" name="email" placeholder="Váš email" required/>
                    <textarea id="body" name="body" style="height: 200px" required
                              placeholder="Text sdělení vašeho dotazu"></textarea>
                        <button type="submit" class="button">Odeslat zprávu <i class="fa fa-paper-plane-o"></i></button>
                    </form>
                </div>


            </div>
        </div>

        <div class="row">
            <footer class="m-section--footer"></footer>
        </div>
    </div>

<?php
}
?>


<!-- volna mista-->

<!-- volna mista-->

<div class="m-section bg-white" id="kariera">
    <div class="row">
        <header class="m-section--header"></header>
    </div>

    <div class="row">
        <div class="m-card_bigpromo l-single bg-secondary-light">

            <article class="m-story">
                <header>
                    <div class="m-item--image"
                         style="background-image: url(<?= image_style_url('x633-540', $content['field_basic_img']['#items'][0]['uri']) ?>)">
                        <a href="">
                            <img
                                src="<?= image_style_url('x633-540', $content['field_basic_img']['#items'][0]['uri']) ?>"
                                alt="">
                        </a>
                    </div>
                    <div class="m-item--summary">
                        <h1 class="m-item--hed mm-center">
                            <a href="">Kariéra v KOMA</a>
                        </h1>

                        <div class="m-item--description">
                            <?= $content['field_basic_popis_2']['#items'][0]['value'] ?>
                        </div>

                        <div class="m-card--more bg-8">
                            <a href="<?= drupal_get_path_alias('firma-a-lide/kariera') ?>"
                               title="<?php print t('Aktuální volná místa') ?>"><?php print t('Aktuální volná místa') ?>
                                &nbsp;→</a>
                        </div>
                    </div>
                </header>

            </article>

        </div>
    </div>
    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href=""><?php print t('Nahoru') ?> &uarr;</a></div>
            </div>
            <div class="l-half">
                <ul class="m-section--nav inline-right">
                    <li><a href="<?= drupal_get_path_alias('node/1552 ') ?>">FIRMA A LIDÉ</a></li>
                    <li><a href="<?= drupal_get_path_alias('node/1612') ?>">HODNOTY, FILOZOFIE, VIZE </a></li>
                </ul>
            </div>
        </footer>
    </div>
</div>


<!--@TODO nacitat drupaloidne-->
<script type="text/javascript" src="<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma/js/contact.js"></script>


