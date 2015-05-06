<div class="m-contact-tab--address">
    <div class="m-address">
        <div class="m-address--name"><?= $fields['title']->raw ?></div>
        <div class="m-address--job"><?= $fields['field_kontakt_pozice']->content ?></div>
        <?php if (($fields['field_kontakt_pevna']->content != '')) { ?>
            <div class="m-address--phone"><span>T</span> <?= $fields['field_kontakt_pevna']->content ?></div><?php } ?>
        <?php if (($fields['kontakt_telefon']->content != '')) { ?>
            <div class="m-address--phone"><span>M</span> <?= $fields['kontakt_telefon']->content ?></div><?php } ?>
        <?php if (($fields['kontakt_fax']->content != '')) { ?>
            <div class="m-address--fax"><span>F</span> <?= $fields['kontakt_fax']->content ?></div><?php } ?>
        <div class="m-address--mail"><span>E</span> <?= $fields['kontakt_email']->content ?>
        </div>
<!--        <div class="m-address--action">-->
<!--          -->
<!--            <a href="" title="" fillform data-subject="Pro vedoucí útvaru" data-name="Hana Babjarová" data-email="--><?//=$fields['kontakt_email']->content ?><!--" >Odeslat-->
<!--                zprávu-->
<!--                <i class="fa fa-envelope"></i></a>-->
<!--        </div>-->
    </div>

</div>

