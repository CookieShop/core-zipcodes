<?php
/**
 * Helper para formatear en json paginador
 * 
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @author Ing. Eduardo Ortiz
 * 
 */
namespace Adteam\Core\Zipcodes;

use Zend\ServiceManager\ServiceManager;
use Adteam\Core\Zipcodes\Entity\ZipCodes as ZipcodesEntity;
use Doctrine\ORM\EntityManager;

class Zipcodes
{
    protected $em;
    
    /**
     * 
     * @param ServiceManager $service
     */
    public function __construct(ServiceManager $service) {
        $this->em = $service->get(EntityManager::class);        
    }
    
    /**
     * 
     * @param type $zipcode
     * @return type
     */
    public function fetchAll($zipcode)
    {
        $zipcode = isset($zipcode['query'])?$zipcode['query']:'';
        return $this->em->getRepository(ZipcodesEntity::class)
                ->fetchAll($zipcode);
    }
    
    /**
     * 
     * @param type $id
     * @return type
     */
    public function fetchByZipCode($id)
    {
        return $this->em->getRepository(ZipcodesEntity::class)
                ->fetchByZipCode($id);        
    }
}
