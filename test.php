<?php

require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload
use storean\Brand;




$brand = new storean\Brand("AXxTVjvfbQAPTmROPQAmlKJtLgSMdZnO");

// var_dump($brand->getInfo());

$data = $brand->getProducts();

// echo $data;

var_dump($data);