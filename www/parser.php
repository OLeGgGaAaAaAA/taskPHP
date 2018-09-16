<?php

$data = file_get_contents('code.php');

$doc = new DOMDocument();
$doc->loadHTML($data);

$searchNodes = $doc->getElementsByTagName( "a");
$searchNodes->getAttribute( 'href' );

foreach ($searchNodes as $searchNode) {
	$todb = array();
	$todb['URL'] = $searchNode;
	$sql->Insert('searchNodes', $todb);
}

$searchDrugs = $doc->getElementByTagName( "ul");
$searchDrugs = $doc->getAttribute( 'class="branch"');

foreach ($searchDrugs as $searchDrug) {
	$todb1 = array();
	$todb1[`name_drug`] = $searchDrug;
	$sql1->Insert('searchDrugs', $todb1);
}

$searchManufacturers = $doc->getElementsByTagName( "a" );
$searchManufacturers = $doc->getAttribute( 'href="/makers"' );

foreach ($searchManufacturers as $searchManufacturer) {
	$todb2 = array();
	$todb2[`manufacturer`] = $searchManufacturer;
	$sql2->Insert('searchManufacturers', $todb2);
}
?>