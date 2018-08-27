<?php

use Model\Author;
use Model\Book;
use Model\Publisher;

function createBook($title, $isbn, $publication_year, $author_name, $publisher_name)
{
    $book = new Book();
    $book->setTitle($title);
    $book->setIsbn($isbn);
    $book->setPublicationYear($publication_year);
    $author = new Author();
    $author->setName($author_name);
    $book->setAuthor($author);
    $publisher = new Publisher();
    $publisher->setName($publisher_name);
    $book->setPublisher($publisher);

    $entityManager = \Core\EntityManagerFactory::getEntityManager();
    $entityManager->persist($book);
    $entityManager->persist($author);
    $entityManager->persist($publisher);
    $entityManager->flush();

    echo "Created Book with ID " . $book->getBookNid() . "\n";
}

createBook("Pan Kleks", "IS$123567 34", 1995, "Jan Brzechwa", "Wydawnictwo Krzak");
createBook("Czyty Kot", "ABN123425367", 2015, "Wujek Sknerus", "M i spółka");
createBook("Kolejna książka", "KRI453647", 2000, "Ksiądz Robak", "Średniowieczna Prasa");
