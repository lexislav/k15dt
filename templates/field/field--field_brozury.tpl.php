<aside>
    <div class="m-aside-block bg-secondary-light mm-pad">
        <header class="m-aside-block--header">
            <h3 class="m-aside-block--hed"><?php print t('Brožury') ?></h3>
        </header>
        <div class="m-reference--meta m-properties">
            <?php
            foreach ($element['#items'] AS $soubor) {
                $trida = '';
                $typ = end(explode('.', $soubor['entity']->field_kestazeni_link['und'][0]['filename']));
                switch ($typ) {
                    case "zip":
                        $trida = 'fa-file-archive-o';
                        break;
                    case "xls":
                        $trida = 'fa-file-excel-o';
                        break;
                    case "xlsx":
                        $trida = 'fa-file-excel-o';
                        break;
                    case "doc":
                        $trida = 'fa-file-word-o';
                        break;
                    case "docx":
                        $trida = 'fa-file-word-o';
                        break;
                    case "pdf":
                        $trida = 'fa-file-pdf-o';
                        break;
                    case "txt":
                        $trida = 'fa-file-text-o';
                        break;
                    default:
                        $trida = 'fa-file-o';
                }
                ?>
                <dl class="mm-nolabels mm-noborder">
                    <dt><?=$soubor['entity']->field_kestazeni_link['und'][0]['description']?></dt>
                    <dd><a href="<?= file_create_url($soubor['entity']->field_kestazeni_link['und'][0]['uri'])?>" target="_blank" title="<?=$soubor['entity']->field_kestazeni_link['und'][0]['description']?>">
                            <i class="fa <?=$trida?>"></i> <?=$soubor['entity']->field_kestazeni_link['und'][0]['description']?></a></dd>
                </dl>
            <?php
            }
            ?>
        </div>
    </div>
</aside>




