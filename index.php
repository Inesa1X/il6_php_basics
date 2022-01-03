<?php

	$string = 'Hello World';

	$productName = 'Rudeniniai Batai Rudi';
	$productDescription = 'lorem ipsum blahh blah blah';
	$productBrand = 'Nike';
	$symbol = '@';
	$number = '1';

	$integer = 1;
	$integer2 =123;
	$integer3 = -233232;

	$productQty = 4;
	$holesCount = 32;
	$productsManufacturerYears = 2021;

	$productPrice = 67.99;
	$size = 41.5;
	$weight = 0.234;

	$isInStock = true;
	$waterProof = true;
	$airless = false;
echo "<pre>";

$product = [
	'name' => $productName,
	'qty' => $productQty,
	'price' => $productPrice,
	'water_proof' => $waterProof
];

$product2 = [
	'name' => 'vasariniai batai balti',
	'qty' => 1,
	'price' => 87.99,
	'water_proof' => true
];
$products = [$product, $product2];

$x = 6;
$y = 2;
$z = $x + $y;
// echo $z;

// print_r($products);
// echo $product['name'];
// echo $product['price'];
// echo '<br>';
// echo $product2['name'];
// echo $product2['price'];
// echo $productDescription;
// echo '<br>';
// echo $productBrand;

$pvm = 21;
$priceWithTax = $productPrice * (1+($pvm / 100));

echo $priceWithTax;
