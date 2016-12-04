<?php

namespace Adteam\Core\Zipcodes\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZipCodes
 *
 * @ORM\Table(name="zip_codes", indexes={@ORM\Index(name="zip_code", columns={"zip_code"})})
 * @ORM\Entity(repositoryClass="Adteam\Core\Zipcodes\Repository\ZipCodesRepository")
 */
class ZipCodes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="zip_code", type="string", length=8, nullable=false)
     */
    private $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=100, nullable=false)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=25, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="town", type="string", length=30, nullable=false)
     */
    private $town;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=35, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=30, nullable=false)
     */
    private $state;


}

