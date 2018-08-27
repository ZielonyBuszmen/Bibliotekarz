<?php

namespace Controller;

use Model\Book;
use Core\Request\Request;

class BooksController extends BaseCtrl
{

    public function getAllBooks(Request $request)
    {
        $book_repository = $this->entity_manager->getRepository(Book::class);
        $books_list = $book_repository->findAll();

        $result = [];
        /** @var Book $book */
        foreach ($books_list as $book) {
            $result[] = [
                'book_nid' => $book->getBookNid(),
                'title' => $book->getTitle(),
                'author' => $book->getAuthor()->getName(),
                'isbn' => $book->getIsbn(),
                'publisher' => $book->getPublisher()->getName(),
                'publication_year' => $book->getPublicationYear(),
            ];
        }

        return $this->buildResponse($request, $result);
    }

    public function searchBooks($wildcard)
    {

    }
}
