<?php

namespace Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
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
     * @ORM\ManyToOne(targetEntity="Publisher", inversedBy="books")
     * @ORM\JoinColumn(name="publisher_nid", referencedColumnName="publisher_nid")
     */
    private $publisher;

    /**
     * @ORM\Column(type="int")
     */
    private $publication_year;

}