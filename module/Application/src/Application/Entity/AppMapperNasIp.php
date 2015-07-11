<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppMapperNasIp
 *
 * @ORM\Table(name="app_mapper_nas_ip")
 * @ORM\Entity
 */
class AppMapperNasIp
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
     * @ORM\Column(name="ip", type="string", length=15, nullable=true)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="nas", type="string", length=15, nullable=true)
     */
    private $nas;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptions", type="text", length=65535, nullable=true)
     */
    private $descriptions;



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
     * Set ip
     *
     * @param string $ip
     *
     * @return AppMapperNasIp
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set nas
     *
     * @param string $nas
     *
     * @return AppMapperNasIp
     */
    public function setNas($nas)
    {
        $this->nas = $nas;

        return $this;
    }

    /**
     * Get nas
     *
     * @return string
     */
    public function getNas()
    {
        return $this->nas;
    }

    /**
     * Set descriptions
     *
     * @param string $descriptions
     *
     * @return AppMapperNasIp
     */
    public function setDescriptions($descriptions)
    {
        $this->descriptions = $descriptions;

        return $this;
    }

    /**
     * Get descriptions
     *
     * @return string
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }
}
