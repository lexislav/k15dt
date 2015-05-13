<div class="m-section bg-white">

    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h1 class="m-section--hed mm-big mm-tiny mm-left">Vyhledávání</h1>
            </div>
        </header>
    </div>

    <?php

    if ($exposed): ?>
        <div class="row">

            <div class="l-full">
                <div class="m-filter m-search--filters">
                    <?php print $exposed; ?>
                </div>
            </div>

        </div>
    <?php endif;

    ?>

    <?php if ($rows){ ?>
        <div class="row">
            <div class="l-full">
                <h2 class="m-search--hed">výsledky vyhledávání: <?=$view->exposed_raw_input['keys']?></h2>
            </div>

            <div class="m-search--results l-feed_list">
                <?php print $rows; ?>
            </div>
        </div>

    <?php }

    if(@$view->total_rows==0 AND (strlen(@$view->exposed_raw_input['keys'])>0)){ ?>
        <div class="row">
            <div class="l-single">
                <div class="m-search--noresults">
                    <h2 class="m-search--hed">Vyhledávání nepřineslo žádné výsledky.</h2>

                    <div class="m-search--description">
                        <p> Zkontrolujte správnost vašeho pravopisu.
                            Odstraňte uvozovky. Výrazu Výhody modulární výstavby ukaže více výsledků než "výhody modulární výstavby".
                            Doplnění dotazu o logickou spojku OR, například modul OR kontejner zobrazí více výsledků než modul kontejner. </p>

                        <?php print $empty; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="row">
        <footer class="m-section--footer">
            <div class="l-left">
                <div class="m-section--top"><a href="">Nahoru &uarr;</a></div>
            </div>
            <div class="l-center">
                <?php if ($pager):
                    $pager = str_replace('class="item-list"', 'class="m-pagination"', $pager);
                    $pager = str_replace('class="pager"', 'class="m-pagination--container"', $pager);
                    $pager = str_replace('pager-current', 'current', $pager);
                    $pager = str_replace('pager-next', 'pager-next arrow', $pager);
                    ?>
                    <?php print $pager; ?>
                <?php endif; ?>
            </div>
            <div class="l-right"></div>
        </footer>
    </div>

</div>
