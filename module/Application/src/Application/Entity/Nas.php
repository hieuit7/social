<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nas
 *
 * @ORM\Table(name="nas", indexes={@ORM\Index(name="nasname", columns={"nasname"})})
 * @ORM\Entity
 */
class Nas
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
     * @ORM\Column(name="nasname", type="string", length=128, nullable=false)
     */
    private $nasname;

    /**
     * @var string
     *
     * @ORM\Column(name="shortname", type="string", length=32, nullable=true)
     */
    private $shortname;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=30, nullable=true)
     */
    private $type = 'other';

    /**
     * @var integer
     *
     * @ORM\Column(name="ports", type="integer", nullable=true)
     */
    private $ports;

    /**
     * @var string
     *
     * @ORM\Column(name="secret", type="string", length=60, nullable=false)
     */
    private $secret = 'secret';

    /**
     * @var string
     *
     * @ORM\Column(name="server", type="string", length=64, nullable=true)
     */
    private $server;

    /**
     * @var string
     *
     * @ORM\Column(name="community", type="string", length=50, nullable=true)
     */
    private $community;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=200, nullable=true)
     */
    private $description = 'RADIUS Client';



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
     * Set nasname
     *
     * @param string $nasname
     *
     * @return Nas
     */
    public function setNasname($nasname)
    {
        $this->nasname = $nasname;

        return $this;
    }

    /**
     * Get nasname
     *
     * @return string
     */
    public function getNasname()
    {
        return $this->nasname;
    }

    /**
     * Set shortname
     *
     * @param string $shortname
     *
     * @return Nas
     */
    public function setShortname($shortname)
    {
        $this->shortname = $shortname;

        return $this;
    }

    /**
     * Get shortname
     *
     * @return string
     */
    public function getShortname()
    {
        return $this->shortname;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Nas
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set ports
     *
     * @param integer $ports
     *
     * @return Nas
     */
    public function setPorts($ports)
    {
        $this->ports = $ports;

        return $this;
    }

    /**
     * Get ports
     *
     * @return integer
     */
    public function getPorts()
    {
        return $this->ports;
    }

    /**
     * Set secret
     *
     * @param string $secret
     *
     * @return Nas
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * Get secret
     *
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Set server
     *
     * @param string $server
     *
     * @return Nas
     */
    public function setServer($server)
    {
        $this->server = $server;

        return $this;
    }

    /**
     * Get server
     *
     * @return string
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * Set community
     *
     * @param string $community
     *
     * @return Nas
     */
    public function setCommunity($community)
    {
        $this->community = $community;

        return $this;
    }

    /**
     * Get community
     *
     * @return string
     */
    public function getCommunity()
    {
        return $this->community;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Nas
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
