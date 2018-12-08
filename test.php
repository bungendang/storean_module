<?php

require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload
use storean\Brand;




$brand = new storean\Brand("AXxTVjvfbQAPTmROPQAmlKJtLgSMdZnO");

// var_dump($brand->getInfo());

// <<<<<<< HEAD
$data = $brand->getProducts();
// =======
// $data = $brand->getInfo();
// >>>>>>> 29b02e23761d49d7432e286548dbdb849d6d5859

// echo $data;

var_dump($data);