<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsHobbits
 *
 * @ORM\Table(name="j17_jigs_hobbits", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class J17JigsHobbits
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="health", type="integer", nullable=false)
     */
    private $health;

    /**
     * @var integer
     *
     * @ORM\Column(name="strength", type="integer", nullable=false)
     */
    private $strength;

    /**
     * @var integer
     *
     * @ORM\Column(name="intelligence", type="integer", nullable=false)
     */
    private $intelligence;

    /**
     * @var integer
     *
     * @ORM\Column(name="faction", type="integer", nullable=false)
     */
    private $faction;

    /**
     * @var integer
     *
     * @ORM\Column(name="gid", type="integer", nullable=true)
     */
    private $gid;

    /**
     * @var integer
     *
     * @ORM\Column(name="owner", type="integer", nullable=true)
     */
    private $owner;

     /**
     * @var text
     *
     * @ORM\Column(name="birth", type="integer", nullable=true)
     */
    private $birth;


    /**
     * @var integer
     *
     * @ORM\Column(name="contentment", type="integer", nullable=true)
     */
    private $contentment;
    

     /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    
        /**
     * Set birth
     *
     * @param string $birth
     * @return J17JigsHobbits
     */
    public function setContentment($contentment)
    {
        $this->birth = $contentment;

        return $this;
    }

    /**
     * Get contentment
     *
     * @return string 
     */
    public function getContentment()
    {
        return $this->contentment;
    }
      
      /**
     * Set birth
     *
     * @param string $birth
     * @return J17JigsHobbits
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;

        return $this;
    }

    /**
     * Get birth
     *
     * @return string 
     */
    public function getBirth()
    {
        return $this->birth;
    }
    
    
    
      
    /**
     * Set name
     *
     * @param string $name
     * @return J17JigsHobbits
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
     * Set health
     *
     * @param integer $health
     * @return J17JigsHobbits
     */
    public function setHealth($health)
    {
        $this->health = $health;

        return $this;
    }

    /**
     * Get health
     *
     * @return integer 
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * Set strength
     *
     * @param integer $strength
     * @return J17JigsHobbits
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;

        return $this;
    }

    /**
     * Get strength
     *
     * @return integer 
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Set intelligence
     *
     * @param integer $intelligence
     * @return J17JigsHobbits
     */
    public function setIntelligence($intelligence)
    {
        $this->intelligence = $intelligence;

        return $this;
    }

    /**
     * Get intelligence
     *
     * @return integer 
     */
    public function getIntelligence()
    {
        return $this->intelligence;
    }

    /**
     * Set faction
     *
     * @param integer $faction
     * @return J17JigsHobbits
     */
    public function setFaction($faction)
    {
        $this->faction = $faction;

        return $this;
    }

    /**
     * Get faction
     *
     * @return integer 
     */
    public function getFaction()
    {
        return $this->faction;
    }

    /**
     * Set gid
     *
     * @param integer $group
     * @return J17JigsHobbits
     */
    public function setGid($gid)
    {
        $this->gid = $gid;

        return $this;
    }

    /**
     * Get gid
     *
     * @return integer 
     */
    public function getGid()
    {
        return $this->gid;
    }

    /**
     * Set owner
     *
     * @param integer $owner
     * @return J17JigsHobbits
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return integer 
     */
    public function getOwner()
    {
        return $this->owner;
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
    
 
    
}




























