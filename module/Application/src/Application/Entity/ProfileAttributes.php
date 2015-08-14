<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProfileAttributes
 *
 * @ORM\Table(name="profile_attributes", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"}), @ORM\UniqueConstraint(name="name_UNIQUE", columns={"name"})}, indexes={@ORM\Index(name="FK_PROFILE_ATTR_idx", columns={"type"})})
 * @ORM\Entity
 */
class ProfileAttributes extends \Application\Model\Entity
{
    /**
     * @var \Application\Entity\AttributeType
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\AttributeType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type", referencedColumnName="id")
     * })
     */
    private $type;



    /**
     * Set type
     *
     * @param \Application\Entity\AttributeType $type
     *
     * @return ProfileAttributes
     */
    public function setType(\Application\Entity\AttributeType $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Application\Entity\AttributeType
     */
    public function getType()
    {
        return $this->type;
    }
}
