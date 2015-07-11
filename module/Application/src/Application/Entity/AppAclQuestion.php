<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppAclQuestion
 *
 * @ORM\Table(name="app_acl_question", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_767FF0CEB6F7494E", columns={"question"})})
 * @ORM\Entity
 */
class AppAclQuestion
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
     * @ORM\Column(name="question", type="string", length=50, nullable=false)
     */
    private $question;



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
     * Set question
     *
     * @param string $question
     *
     * @return AppAclQuestion
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }
}
