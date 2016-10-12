<?php

namespace AppBundle\Entity;

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
     * @ORM\Column(name="section", type="integer", nullable=true)
     */
    private $section;
    /**
     * @var integer
     *
     * @ORM\Column(name="owner", type="integer", nullable=true)
     */
    private $owner;

    /**
     * @var integer
     *
     * @ORM\Column(name="xp", type="integer", nullable=true)
     */
    private $xp;

    /**
     * @var string
     *
     * @ORM\Column(name="owner_type", type="string", nullable=true)
     */
    private $owner_type;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=true)
     */
    private $type;

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
     * @ORM\Column(name="x", type="integer", nullable=true)
     */
    private $x;
    /**
     * @var integer
     *
     * @ORM\Column(name="y", type="integer", nullable=true)
     */
    private $y;
    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

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
        $this->contentment = $contentment;

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
     * @var integer
     *
     * @ORM\Column(name="grid", type="integer", nullable=false)
     */
    private $grid;

    /**
     * @var integer
     *
     * @ORM\Column(name="map", type="integer", nullable=false)
     */
    private $map;

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
     * Set map
     *
     * @param integer $map
     * @return J17JigsHobbits
     */
    public function setMap($map)
    {
        $this->map = $map;

        return $this;
    }

    /**
     * Get map
     *
     * @return integer
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Set grid
     *
     * @param integer $grid
     * @return J17JigsHobbits
     */
    public function setGrid($grid)
    {
        $this->y = $grid;

        return $this;
    }

    /**
     * Get grid
     *
     * @return integer
     */
    public function getGrid()
    {
        return $this->grid;
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
//////////////////////////////////////////////////////////////////////

    /**
     * Set owner
     *
     * @param integer $owner_type
     * @return J17JigsHobbits
     */
    public function setOwnerType($owner_type)
    {
        $this->owner_type = $owner_type;
        return $this;
    }

    /**
     * Get owner
     *
     * @return integer 
     */
    public function getOwnerType()
    {
        return $this->owner_type;
    }

    /**
     * Set section
     *
     * @param integer $section
     * @return J17JigsHobbits
     */
    public function setSection($section)
    {
        $this->section = $section;
        return $this;
    }

    /**
     * Get section
     *
     * @return integer
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return J17JigsHobbits
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return J17JigsHobbits
     */
    public function setXp($xp)
    {
        $this->xp = $xp;
        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getXp()
    {
        return $this->xp;
    }
////////////////////////////////////////////////////


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
     * Set y
     *
     * @param integer $y
     * @return J17JigsHobbits
     */
    public function setY($y)
    {
        $this->y = $y;
        return $this;
    }

    /**
     * Get y
     *
     * @return integer
     */
    public function getY()
    {
        return $this->y;
    }
    /**
     * Set x
     *
     * @param integer $x
     * @return J17JigsHobbits
     */
    public function setX($x)
    {
        $this->x = $x;
        return $this;
    }

    /**
     * Get x
     *
     * @return integer
     */
    public function getX()
    {
        return $this->x;
    }
///////////
    /**
     * Set status
     *
     * @param integer $status
     * @return J17JigsHobbits
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }
}

