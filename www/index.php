<?php

$html = curl_get('https://compendium.com.ua/atc/#C01E_X');
$dom = str_get_html('$html');
file_put_contents('index.html', $html);

$medical_products = $dom ->find('.navbar-text');

foreach ($medical_products as $medical_product) {

$to_db = array('code_group');

}
