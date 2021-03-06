<?php

namespace AppBundle\Repository;

/**
 * CarteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CarteRepository extends \Doctrine\ORM\EntityRepository
{

    //http://docs.doctrine-project.org/en/latest/reference/dql-doctrine-query-language.html#using-index-by
    public function getAll()
    {
        return $this->createQueryBuilder('c')
            ->indexBy('c','c.id')
            ->getQuery()
            ->getResult();
    }
}
