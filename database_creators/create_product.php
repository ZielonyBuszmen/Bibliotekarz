<?php
require_once "bootstrap.php"; // to moj bootstrap z głównego folderu

use Model\Product;

$newProductName = $argv[1];

$product = new Product();
$product->setName($newProductName);
$product->setSurname($newProductName);

$entityManager = getEntityManager();
$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";