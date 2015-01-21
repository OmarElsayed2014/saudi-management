<?php

namespace Omar\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints AS Assert;

/**
 * Dealer
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Dealer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="\Omar\SiteBundle\Entity\Avatar", inversedBy="dealers",cascade={"persist"})
     * @ORM\JoinColumn(name="avatar_id", referencedColumnName="id", onDelete="CASCADE")},
     */
    private $avatar;

    /**
     * @var string
     * @Assert\Length(max=255)
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;
    
    /**
     * @var string
     * @Assert\NotBlank
     * @Assert\Length(max=255)
     * @ORM\Column(name="nickname", type="string", length=255)
     */
    private $nickname;
    
    /**
     * @var string
     * @Assert\NotBlank
     * @Assert\Length(max=255)
     * @ORM\Column(name="passport", type="string", length=255)
     */
    private $passport;

    /**
     * @var string
     * @Assert\NotBlank
     * @ORM\Column(name="address", type="text")
     */
    private $address;

    /**
     * @var string
     * @Assert\Length(min=7, max=9)
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone;

    /**
     * @var string
     * @Assert\NotBlank
     * @Assert\Length(min=7, max=13)
     * @ORM\Column(name="mobile", type="string", length=255)
     */
    private $mobile;

    /**
     * @var string
     * @Assert\NotBlank
     * @Assert\Length(max=255)
     * @ORM\Column(name="relation", type="string", length=255)
     */
    private $relation;


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
     * Set name
     *
     * @param string $name
     * @return Dealer
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Dealer
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Dealer
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return Dealer
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set relation
     *
     * @param string $relation
     * @return Dealer
     */
    public function setRelation($relation)
    {
        $this->relation = $relation;

        return $this;
    }

    /**
     * Get relation
     *
     * @return string 
     */
    public function getRelation()
    {
        return $this->relation;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->deals = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nickname
     *
     * @param string $nickname
     * @return Dealer
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string 
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set avatar
     *
     * @param \Omar\SiteBundle\Entity\Avatar $avatar
     * @return Dealer
     */
    public function setAvatar(\Omar\SiteBundle\Entity\Avatar $avatar = null)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return \Omar\SiteBundle\Entity\Avatar 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }
    
    public function __toString() {
        return (String) $this->nickname;
    }
}
