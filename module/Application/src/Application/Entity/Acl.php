<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acl
 *
 * @ORM\Table(name="acl", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"}), @ORM\UniqueConstraint(name="name_UNIQUE", columns={"name"})}, indexes={@ORM\Index(name="FK_PERMISSION_idx", columns={"permission"}), @ORM\Index(name="FK_MODULE_idx", columns={"module"})})
 * @ORM\Entity
 */
class Acl extends \Application\Model\Entity
{
    /**
     * @var \Application\Entity\Modules
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Modules")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="module", referencedColumnName="id")
     * })
     */
    private $module;

    /**
     * @var \Application\Entity\Permissions
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Permissions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="permission", referencedColumnName="id")
     * })
     */
    private $permission;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Application\Entity\Users", mappedBy="acl")
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set module
     *
     * @param \Application\Entity\Modules $module
     *
     * @return Acl
     */
    public function setModule(\Application\Entity\Modules $module = null)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return \Application\Entity\Modules
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set permission
     *
     * @param \Application\Entity\Permissions $permission
     *
     * @return Acl
     */
    public function setPermission(\Application\Entity\Permissions $permission = null)
    {
        $this->permission = $permission;

        return $this;
    }

    /**
     * Get permission
     *
     * @return \Application\Entity\Permissions
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * Add user
     *
     * @param \Application\Entity\Users $user
     *
     * @return Acl
     */
    public function addUser(\Application\Entity\Users $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \Application\Entity\Users $user
     */
    public function removeUser(\Application\Entity\Users $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUser()
    {
        return $this->user;
    }
}
