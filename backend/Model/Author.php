<?php

namespace Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="authors")
 **/
class Author
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $author_nid;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    public function getName(): string
    {
        return $this->name;
    }

}