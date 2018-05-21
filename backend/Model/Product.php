<?php

namespace Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity @ORM\Table(name="products")
 **/
class Product
{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue * */
    private $id;

    /** @ORM\Column(type="string") * */
    private $name;

    /** @ORM\Column(type="string") * */
    private $surname;


    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }
}