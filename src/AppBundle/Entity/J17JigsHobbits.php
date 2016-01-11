<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsHobbits
 * @ORM\Table(name="j17_jigs_hobbits", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class J17JigsHobbits
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     *
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @var integer
     * @ORM\Column(name="health", type="integer")
     */
    private $health;

    /**
     * @var integer
     * @ORM\Column(name="strength", type="integer")
     */
    private $strength;

    /**
     * @var integer
     * @ORM\Column(name="intelligence", type="integer")
     */
    private $intelligence;

    /**
     * @var integer
     * @ORM\Column(name="faction", type="integer")
     */
    private $faction;

    /**
     * @var integer
     * @ORM\Column(name="gid", type="integer")
     */
    private $gid;

    /**
     * @var integer
     * @ORM\Column(name="owner", type="integer")
     */
    private $owner;

    /**
     * @var string
     * @ORM\Column(name="owner_type", type="integer")
     */
    private $owner_type;

    /**
     * @var float
     * @ORM\Column(name="x", type="integer")
     */
    private $x;

    /**
     * @var float
     * @ORM\Column(name="y", type="integer")
     */
    private $y;

    /**
     * @var string
     * @ORM\Column(name="birth", type="integer")
     */
    private $birth;

    /**
     * @var integer
     * @ORM\Column(name="contentment", type="integer")
     */
    private $contentment;

    /**
     * @var integer
     * @ORM\Column(name="grid", type="integer")
     */
    private $grid;

    /**
     * @var \AppBundle\Entity\J17JigsHobbitTypes

     * @ORM\ManyToOne(targetEntity="J17JigsHobbitTypes")
     * @ORM\JoinColumn(name="type", referencedColumnName="id")
     *
     */
    private $type;

    /**
     * Set grid
     *
     * @param string $grid
     *
     * @return J17JigsHobbits
     */
    public function setGrid($grid)
    {
        $this->grid = $grid;

        return $this;
    }

    /**
     * Get grid
     *
     * @return string
     */
    public function getGrid()
    {
        return $this->grid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
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
     *
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
     *
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
     *
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
     *
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
     * @param integer $gid
     *
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
     *
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
     * Set ownerType
     *
     * @param string $ownerType
     *
     * @return J17JigsHobbits
     */
    public function setOwnerType($ownerType)
    {
        $this->owner_type = $ownerType;

        return $this;
    }

    /**
     * Get ownerType
     *
     * @return string
     */
    public function getOwnerType()
    {
        return $this->owner_type;
    }

    /**
     * Set x
     *
     * @param float $x
     *
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
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set y
     *
     * @param float $y
     *
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
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set birth
     *
     * @param string $birth
     *
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
     * Set contentment
     *
     * @param integer $contentment
     *
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
     * @return integer
     */
    public function getContentment()
    {
        return $this->contentment;
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
     * Set type
     *
     * @param \AppBundle\Entity\J17JigsHobbitTypes $type
     *
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
     * @return \AppBundle\Entity\J17JigsHobbitTypes
     */
    public function getType()
    {
        return $this->type;
    }
}
