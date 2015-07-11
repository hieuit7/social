<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppBuilding
 *
 * @ORM\Table(name="app_building")
 * @ORM\Entity
 */
class AppBuilding
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
     * @ORM\Column(name="building_name", type="string", length=45, nullable=true)
     */
    private $buildingName;

    /**
     * @var string
     *
     * @ORM\Column(name="building_address", type="string", length=45, nullable=true)
     */
    private $buildingAddress;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set buildingName
     *
     * @param string $buildingName
     *
     * @return AppBuilding
     */
    public function setBuildingName($buildingName)
    {
        $this->buildingName = $buildingName;

        return $this;
    }

    /**
     * Get buildingName
     *
     * @return string
     */
    public function getBuildingName()
    {
        return $this->buildingName;
    }

    /**
     * Set buildingAddress
     *
     * @param string $buildingAddress
     *
     * @return AppBuilding
     */
    public function setBuildingAddress($buildingAddress)
    {
        $this->buildingAddress = $buildingAddress;

        return $this;
    }

    /**
     * Get buildingAddress
     *
     * @return string
     */
    public function getBuildingAddress()
    {
        return $this->buildingAddress;
    }
}
