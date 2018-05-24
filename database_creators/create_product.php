<?php

use Model\Product;

$newProductName = $_GET['product_name'];

$product = new Product();
$product->setName($newProductName);
$product->setSurname($newProductName);

$entityManager = \Model\EntityManagerFactory::getEntityManager();
$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";