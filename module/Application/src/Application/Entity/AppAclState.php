<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppAclState
 *
 * @ORM\Table(name="app_acl_state", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_8F65C071A393D2FB", columns={"state"})})
 * @ORM\Entity
 */
class AppAclState
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
     * @ORM\Column(name="state", type="string", length=50, nullable=false)
     */
    private $state;



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
     * Set state
     *
     * @param string $state
     *
     * @return AppAclState
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
}
