<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AttributeType
 *
 * @ORM\Table(name="attribute_type", uniqueConstraints={@ORM\UniqueConstraint(name="name_UNIQUE", columns={"name"}), @ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})})
 * @ORM\Entity
 */
class AttributeType extends \Application\Model\Entity
{
    /**
     * @var string
     *
     * @ORM\Column(name="data_type", type="string", length=150, nullable=true)
     */
    private $dataType;

    /**
     * @var string
     *
     * @ORM\Column(name="default", type="text", length=65535, nullable=true)
     */
    private $default;



    /**
     * Set dataType
     *
     * @param string $dataType
     *
     * @return AttributeType
     */
    public function setDataType($dataType)
    {
        $this->dataType = $dataType;

        return $this;
    }

    /**
     * Get dataType
     *
     * @return string
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * Set default
     *
     * @param string $default
     *
     * @return AttributeType
     */
    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * Get default
     *
     * @return string
     */
    public function getDefault()
    {
        return $this->default;
    }
}
