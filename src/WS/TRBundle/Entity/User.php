<?php

namespace WS\TRBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", indexes={@ORM\Index(name="fk_user_user_idx", columns={"boss"}), @ORM\Index(name="fk_user_user_status1_idx", columns={"status"}), @ORM\Index(name="fk_user_factory1_idx", columns={"factory_id"})})
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=45)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=45, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=45, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name_th", type="string", length=45, nullable=true)
     */
    private $firstNameTh;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name_th", type="string", length=45, nullable=true)
     */
    private $lastNameTh;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="date", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_date", type="date", nullable=true)
     */
    private $lastDate;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=45, nullable=true)
     */
    private $position;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_time", type="datetime", nullable=true)
     */
    private $createTime = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_time", type="datetime", nullable=true)
     */
    private $updateTime;

    /**
     * @var \WS\TRBundle\Entity\Factory
     *
     * @ORM\ManyToOne(targetEntity="WS\TRBundle\Entity\Factory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="factory_id", referencedColumnName="id")
     * })
     */
    private $factory;

    /**
     * @var \WS\TRBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="WS\TRBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="boss", referencedColumnName="id")
     * })
     */
    private $boss;

    /**
     * @var \WS\TRBundle\Entity\UserStatus
     *
     * @ORM\ManyToOne(targetEntity="WS\TRBundle\Entity\UserStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status", referencedColumnName="id")
     * })
     */
    private $status;
    
     public function __construct()
    {
        $this->isActive = true;
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid(null, true));
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function eraseCredentials()
    {
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }

    /**
     * Set id
     *
     * @param string $id
     *
     * @return User
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
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
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
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
     * @return User
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
     * Set firstNameTh
     *
     * @param string $firstNameTh
     *
     * @return User
     */
    public function setFirstNameTh($firstNameTh)
    {
        $this->firstNameTh = $firstNameTh;

        return $this;
    }

    /**
     * Get firstNameTh
     *
     * @return string
     */
    public function getFirstNameTh()
    {
        return $this->firstNameTh;
    }

    /**
     * Set lastNameTh
     *
     * @param string $lastNameTh
     *
     * @return User
     */
    public function setLastNameTh($lastNameTh)
    {
        $this->lastNameTh = $lastNameTh;

        return $this;
    }

    /**
     * Get lastNameTh
     *
     * @return string
     */
    public function getLastNameTh()
    {
        return $this->lastNameTh;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return User
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set lastDate
     *
     * @param \DateTime $lastDate
     *
     * @return User
     */
    public function setLastDate($lastDate)
    {
        $this->lastDate = $lastDate;

        return $this;
    }

    /**
     * Get lastDate
     *
     * @return \DateTime
     */
    public function getLastDate()
    {
        return $this->lastDate;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return User
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set createTime
     *
     * @param \DateTime $createTime
     *
     * @return User
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * Get createTime
     *
     * @return \DateTime
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * Set updateTime
     *
     * @param \DateTime $updateTime
     *
     * @return User
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;

        return $this;
    }

    /**
     * Get updateTime
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Set factory
     *
     * @param \WS\TRBundle\Entity\Factory $factory
     *
     * @return User
     */
    public function setFactory(\WS\TRBundle\Entity\Factory $factory = null)
    {
        $this->factory = $factory;

        return $this;
    }

    /**
     * Get factory
     *
     * @return \WS\TRBundle\Entity\Factory
     */
    public function getFactory()
    {
        return $this->factory;
    }

    /**
     * Set boss
     *
     * @param \WS\TRBundle\Entity\User $boss
     *
     * @return User
     */
    public function setBoss(\WS\TRBundle\Entity\User $boss = null)
    {
        $this->boss = $boss;

        return $this;
    }

    /**
     * Get boss
     *
     * @return \WS\TRBundle\Entity\User
     */
    public function getBoss()
    {
        return $this->boss;
    }

    /**
     * Set status
     *
     * @param \WS\TRBundle\Entity\UserStatus $status
     *
     * @return User
     */
    public function setStatus(\WS\TRBundle\Entity\UserStatus $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \WS\TRBundle\Entity\UserStatus
     */
    public function getStatus()
    {
        return $this->status;
    }
}
