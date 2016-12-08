<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Adteam\Core\Zipcodes\Repository;
/**
 * Description of ZipCodesRepository
 *
 * @author dev
 */
use Doctrine\ORM\EntityRepository;

class ZipCodesRepository extends EntityRepository
{
    /**
     * 
     * @param type $zipcode
     * @return type
     */
    public function fetchAll($zipcode)
    {
        return $this
                ->createQueryBuilder('U')
                ->select(
                    "U.id, U.zipCode, U.location, U.type,U.town,U.city,U.state")
                ->setFirstResult(0)
                ->setMaxResults(100)
                ->addGroupBy('U.zipCode')
                ->having('U.zipCode LIKE :zipcode')
                ->setParameter('zipcode', $zipcode.'%')
                ->getQuery()->getResult();
    }
    
    /**
     * 
     * @param type $id
     * @return type
     */
    public function fetchByZipCode($id)
    {
        return $this
                ->createQueryBuilder('U')
                ->select(
                    "U.id, U.zipCode, U.location, U.type,U.town,U.city,U.state")
                ->where('U.zipCode LIKE :zipcode')
                ->setParameter('zipcode', $id)
                ->getQuery()->getResult();         
    }
}
