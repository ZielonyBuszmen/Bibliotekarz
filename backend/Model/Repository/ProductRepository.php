<?php

namespace Model\Repository;

use Doctrine\ORM\EntityRepository;

class ProductRepository extends EntityRepository
{
    public function getAll()
    {
        return $this->findAll();
    }
}