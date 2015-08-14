<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersGroups
 *
 * @ORM\Table(name="users_groups", indexes={@ORM\Index(name="FK_GROUP_idx", columns={"group_id"})})
 * @ORM\Entity
 */
class UsersGroups extends \Application\Model\Entity
{
    /**
     * @var \Application\Entity\Groups
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Groups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     * })
     */
    private $group;

    /**
     * @var \Application\Entity\Users
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Application\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



    /**
     * Set group
     *
     * @param \Application\Entity\Groups $group
     *
     * @return UsersGroups
     */
    public function setGroup(\Application\Entity\Groups $group = null)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \Application\Entity\Groups
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set user
     *
     * @param \Application\Entity\Users $user
     *
     * @return UsersGroups
     */
    public function setUser(\Application\Entity\Users $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Application\Entity\Users
     */
    public function getUser()
    {
        return $this->user;
    }
}
