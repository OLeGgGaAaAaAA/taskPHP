<?php

$url = 'https://compendium.com.ua/atc/';

$ch = curl_init();

curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, TRUE);

$site = curl_exec ($ch);

curl_close($ch);
header("Content-type: text/plain");
file_put_contents('code.php', $site);

?>