<div class="m-section l-detail-page">
    <div class="row">
        <header class="m-section--header">
            <div class="l-half">
                <h2 class="m-section--hed mm-medium">Kontakt</h2>
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
                <h1 class="m-contact--hed color-black">KOMA Modular s.r.o.</h1>

                <div class="m-contact--description">
                    Říčanská 1191 <br/>
                    763 12 Vizovice<br/>
                    Česká republika<br/>
                    <br/>
                    <span class="color-primary">T</span> +420 577 007 711<br/>
                    <span class="color-primary">F</span> +420 577 452 839<br/>
                    <span class="color-primary">E</span> info@container.cz<br/>
                </div>

                <div class="m-contact--meta"></div>

            </div>

            <div class="m-contact--image" style="background-image: url(http://lorempixel.com/650/500)">
                <a href=""><img src="http://lorempixel.com/650/500" alt=""/></a>
            </div>

            <div class="m-contact--map" style="background-image: url(http://lorempixel.com/650/500)">
                <a href=""><img src="http://lorempixel.com/650/500" alt=""/></a>
            </div>


        </header>
    </article>

    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <button class="button">Zeptejte se nás</button>
            </div>
            <div class="l-half">
                <ul class="m-section--nav inline-right">
                    <li><a href="">Kariéra v KOMA </a></li>
                    <li><a href="">Adresář </a></li>
                    <li><a href="">&darr; Kontaktní formulář</a></li>
                </ul>
            </div>
        </footer>
    </div>

</div>

<!-- contact list -->
<div class="m-section bg-white">
    <div class="row">
        <header class="m-section--header">
            <div class="l-half">
                <h2 class="m-section--hed mm-small color-primary">Adresář firmy</h2>
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



<div class="m-section" id="formSection">
    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-section--hed mm-tiny mm-medium mm-center">Chcete se na něco zeptat?
                    <span class="color-primary"> Napište Nám</span></h2>
            </div>
        </header>
    </div>

    <div class="row">
        <div class="m-contact-form">
            <header>
                <i class="fa fa-paper-plane-o"></i> Kontaktní formulář bude odeslán na adresu:
                <span id="targetMailInfo">adresa@koma.cz</span>
            </header>

            <div class="m-contact-form--content">
                <form action="">
                    <input type="hidden" name="mailto" id="mailto" value=""/>
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

<!--<div class="m-section">-->
<!--    <div class="row">-->
<!--        <header class="m-section--header">-->
<!--            <div class="l-full">-->
<!--                <h2 class="m-section--hed mm-tiny mm-medium mm-center">Formulář byl úspěšně odeslán</h2>-->
<!--            </div>-->
<!--        </header>-->
<!--    </div>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="m-contact-form mm-sent">-->
<!--            <div class="m-contact-form--content">-->
<!--                <p>-->
<!--                    <i class="fa fa-paper-plane-o"></i> Formulář byl úspěšně odeslán na adresu: <span>@email</span>-->
<!--                    <br/>a na vámi zadanou adresu <span>@formemail</span>-->
<!--                </p>-->
<!--                <button class="button">Odeslat novou zprávu <i class="fa fa-paper-plane-o"></i></button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<!-- volna mista-->

<!-- volna mista-->

<div class="m-section bg-white">
    <div class="row">
        <header class="m-section--header"></header>
    </div>

    <div class="row">
        <div class="m-card_bigpromo l-single bg-secondary-light">

            <article class="m-story">
                <header>
                    <div class="m-item--image" style="background-image: url(http://lorempixel.com/300/300)">
                        <a href="">
                            <img src="http://lorempixel.com/300/300" alt="">
                        </a>
                    </div>
                    <div class="m-item--summary">
                        <h1 class="m-item--hed mm-center">
                            <a href="">Kariéra v KOMA</a>
                        </h1>

                        <div class="m-item--description">
                            <p>Chcete pracovat v naší firmě neb hledáte zaměstnání.
                               Prohlédněte si aktuální volná místa případně zašlete Vaši motivační nabídku na naše personální oddělení.

                               Můžete využít výše umístěný kontaktní formulář.</p>
                        </div>

                        <div class="m-card--more bg-8">
                            <a href="" title="more">Aktuální volná místa&nbsp;→</a>
                        </div>
                    </div>
                </header>

            </article>

        </div>
    </div>

    <div class="row">
        <footer class="m-section--footer">
            <ul class="m-section--nav inline-right">
                <li><a href="">Kariéra v KOMA </a></li>
                <li><a href="">Adresář </a></li>
                <li><a href="">&darr; Kontaktní formulář</a></li>
            </ul>
        </footer>
    </div>
</div>



<!--@TODO nacitat drupaloidne-->
<script type="text/javascript" src="<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma/js/contact.js"></script>


