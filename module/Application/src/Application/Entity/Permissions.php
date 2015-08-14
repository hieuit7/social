<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permissions
 *
 * @ORM\Table(name="permissions", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"}), @ORM\UniqueConstraint(name="name_UNIQUE", columns={"name"})})
 * @ORM\Entity
 */
class Permissions extends \Application\Model\Entity
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="action", type="boolean", nullable=true)
     */
    private $action;



    /**
     * Set action
     *
     * @param boolean $action
     *
     * @return Permissions
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return boolean
     */
    public function getAction()
    {
        return $this->action;
    }
}
