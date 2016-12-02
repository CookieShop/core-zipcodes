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
use Adteam\Core\Zipcodes\Entity\Zipcodes;
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
    
    public function fetchAll()
    {
        return $this->em->getRepository(CoreCedis::class)->fetchAll();
    }
}
