<?php

namespace Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="books")
 **/
class Book
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $book_nid;

    /**
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @ORM\ManyToOne(targetEntity="Author", inversedBy="books")
     * @ORM\JoinColumn(name="author_nid", referencedColumnName="author_nid")
     */
    private $author;

    /**
     * @ORM\Column(type="string")
     */
    private $isbn;

    /**
     * @ORM\ManyToOne(targetEntity="Publisher")
     * @ORM\JoinColumn(name="publisher_nid", referencedColumnName="publisher_nid")
     */
    private $publisher;

    /**
     * @ORM\Column(type="integer")
     */
    private $publication_year;

    public function getBookNid(): int
    {
        return $this->book_nid;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getAuthor(): Author
    {
        return $this->author;
    }

    public function setAuthor(Author $author): void
    {
        $this->author = $author;
    }

    public function getIsbn(): string
    {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): void
    {
        $this->isbn = $isbn;
    }

    public function getPublisher(): Publisher
    {
        return $this->publisher;
    }

    public function setPublisher(Publisher $publisher): void
    {
        $this->publisher = $publisher;
    }

    public function getPublicationYear(): int
    {
        return $this->publication_year;
    }

    public function setPublicationYear(int $publication_year): void
    {
        $this->publication_year = $publication_year;
    }
}
