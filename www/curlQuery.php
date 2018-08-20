<?php

function curlGet($url, $referer = 'https://www.google.com') {
	$var = curl_init();
	curl_setopt($var, CURLOPT_URL, $url);
	curl_setopt($var, CURLOPT_HEADER, 0);
	curl_setopt($var, CURLOPT_REFERER, $referer);
	curl_setopt($var, CURLOPT_RETURNTRANSFER, true);
	$data = curl_exec($var);
	curl_close($var);
	return $data;
}
