<?php


if ($row->_field_data['nid']['entity']->type == 'koma_zpravodaj') {
    if (isset($row->field_field_zpravodaj_main_img[0])) {
        $uricko = $row->field_field_zpravodaj_main_img[0]['raw']['uri'];
    } else {
        $uricko = $row->field_field_zpravodaj_foogalerie[0]['raw']['entity']->field_fotogalerie_main_img['und'][0]['uri'];
    }
    $kategorie = $row->field_field_zpravodaj_kategorie[0]['rendered']['#markup'];
    $rok = $row->field_field_zpravodaj_publikace[0]['rendered']['#markup'];
    $popis = $row->_field_data['nid']['entity']->type;
    $popis .= ' / ' . $kategorie;
    $popis .= ' | ' . $rok;
    $src_img = image_style_url('x595-0', $uricko);


} elseif ($row->_field_data['nid']['entity']->type == 'reference') {
    if (isset($row->field_field_reference_main_img[0])) {
        $uricko = $row->field_field_reference_main_img[0]['raw']['uri'];
    } else {
        $uricko = $row->field_field_reference_fotogalerie[0]['raw']['entity']->field_fotogalerie_main_img['und'][0]['uri'];
    }
    $popis = $row->_field_data['nid']['entity']->type;
    $kategorie = $row->field_field_reference_vyrobkova_rada[0]['rendered']['#markup'];
    $rok = str_replace('-01-01 00:00:00', '', $row->field_field_reference_rok[0]['raw']['value']);
    $popis .= ' / ' . $kategorie;
    $popis .= ' | ' . $rok;
    $src_img = image_style_url('x595-0', $uricko);
}else{
    $popis = 'Stránka';
}

$title = $fields['title']->content;
$horni_popis = $popis;
$link = drupal_get_path_alias('node/' . $row->nid);


echo $title . '<br />';
echo $src_img . '<br />';//obrazek neni vsude
echo $horni_popis . '<br />';
echo $link . '<br />';
echo '<br />-----<br />';


?>


