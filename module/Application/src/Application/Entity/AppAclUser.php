<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppAclUser
 *
 * @ORM\Table(name="app_acl_user", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_A21FD7F7F85E0677", columns={"username"}), @ORM\UniqueConstraint(name="UNIQ_A21FD7F7E7927C74", columns={"email"})}, indexes={@ORM\Index(name="IDX_A21FD7F7D60322AC", columns={"role_id"}), @ORM\Index(name="IDX_A21FD7F782F1BAF4", columns={"language_id"}), @ORM\Index(name="IDX_A21FD7F75D83CC1", columns={"state_id"}), @ORM\Index(name="IDX_A21FD7F71E27F6BF", columns={"question_id"}), @ORM\Index(name="search_idx", columns={"username", "first_name", "last_name", "email"})})
 * @ORM\Entity
 */
class AppAclUser
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
     * @ORM\Column(name="username", type="string", length=30, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=40, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=40, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=60, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=60, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="string", length=100, nullable=false)
     */
    private $answer;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registration_date", type="datetime", nullable=true)
     */
    private $registrationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="registration_token", type="string", length=32, nullable=true)
     */
    private $registrationToken;

    /**
     * @var boolean
     *
     * @ORM\Column(name="email_confirmed", type="boolean", nullable=false)
     */
    private $emailConfirmed;

    /**
     * @var \Application\Entity\AppAclQuestion
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\AppAclQuestion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="question_id", referencedColumnName="id")
     * })
     */
    private $question;

    /**
     * @var \Application\Entity\AppAclState
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\AppAclState")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="state_id", referencedColumnName="id")
     * })
     */
    private $state;

    /**
     * @var \Application\Entity\AppAclLanguage
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\AppAclLanguage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="language_id", referencedColumnName="id")
     * })
     */
    private $language;

    /**
     * @var \Application\Entity\AppAclRole
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\AppAclRole")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="role_id", referencedColumnName="id")
     * })
     */
    private $role;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Application\Entity\AppAclUser", mappedBy="friend")
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return AppAclUser
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return AppAclUser
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return AppAclUser
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return AppAclUser
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return AppAclUser
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set answer
     *
     * @param string $answer
     *
     * @return AppAclUser
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return AppAclUser
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set registrationDate
     *
     * @param \DateTime $registrationDate
     *
     * @return AppAclUser
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

    /**
     * Get registrationDate
     *
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * Set registrationToken
     *
     * @param string $registrationToken
     *
     * @return AppAclUser
     */
    public function setRegistrationToken($registrationToken)
    {
        $this->registrationToken = $registrationToken;

        return $this;
    }

    /**
     * Get registrationToken
     *
     * @return string
     */
    public function getRegistrationToken()
    {
        return $this->registrationToken;
    }

    /**
     * Set emailConfirmed
     *
     * @param boolean $emailConfirmed
     *
     * @return AppAclUser
     */
    public function setEmailConfirmed($emailConfirmed)
    {
        $this->emailConfirmed = $emailConfirmed;

        return $this;
    }

    /**
     * Get emailConfirmed
     *
     * @return boolean
     */
    public function getEmailConfirmed()
    {
        return $this->emailConfirmed;
    }

    /**
     * Set question
     *
     * @param \Application\Entity\AppAclQuestion $question
     *
     * @return AppAclUser
     */
    public function setQuestion(\Application\Entity\AppAclQuestion $question = null)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \Application\Entity\AppAclQuestion
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set state
     *
     * @param \Application\Entity\AppAclState $state
     *
     * @return AppAclUser
     */
    public function setState(\Application\Entity\AppAclState $state = null)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return \Application\Entity\AppAclState
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set language
     *
     * @param \Application\Entity\AppAclLanguage $language
     *
     * @return AppAclUser
     */
    public function setLanguage(\Application\Entity\AppAclLanguage $language = null)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return \Application\Entity\AppAclLanguage
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set role
     *
     * @param \Application\Entity\AppAclRole $role
     *
     * @return AppAclUser
     */
    public function setRole(\Application\Entity\AppAclRole $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \Application\Entity\AppAclRole
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Add user
     *
     * @param \Application\Entity\AppAclUser $user
     *
     * @return AppAclUser
     */
    public function addUser(\Application\Entity\AppAclUser $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \Application\Entity\AppAclUser $user
     */
    public function removeUser(\Application\Entity\AppAclUser $user)
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
