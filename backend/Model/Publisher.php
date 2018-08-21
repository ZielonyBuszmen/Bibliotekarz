<?php

namespace Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="publishers")
 **/
class Publisher
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $publisher_nid;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    public function getName(): string
    {
        return $this->name;
    }

}