<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsMonsters
 *
 * @ORM\Table(name="j17_jigs_monsters", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class J17JigsMonsters
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
     * @ORM\ManyToOne(targetEntity="J17JigsMonsterTypes")
     * @ORM\JoinColumn(name="type", referencedColumnName="id")
     */
    private $type;
    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;
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
     * @ORM\Column(name="attack", type="integer", nullable=false)
     */
    private $attack;

    /**
     * @var integer
     *
     * @ORM\Column(name="defence", type="integer", nullable=false)
     */
    private $defence;

    /**
     * @var integer
     *
     * @ORM\Column(name="x", type="integer", nullable=false)
     */
    private $x;

    /**
     * @var integer
     *
     * @ORM\Column(name="y", type="integer", nullable=false)
     */
    private $y;

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



    function __construct(){

        $this->type = $this->getType();

}


    /**
     * Set status
     *
     * @param integer $status
     * @return J17JigsMonsters
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

    /**
     * Get attack
     *
     * @return integer
     */
    public function getAttack()
    {
        return $this->attack;
    }
    /**
     * Set attack
     *
     * @param integer $attack
     * @return J17JigsMonsters
     */
    public function setAttack($attack)
    {
        $this->attack = $attack;

        return $this;
    }
    /**
     * Get defence
     *
     * @return integer
     */
    public function getDefence()
    {
        return $this->defence;
    }
    /**
     * Set defence
     *
     * @param integer $defence
     * @return J17JigsMonsters
     */
    public function setDefence($defence)
    {
        $this->defence = $defence;

        return $this;
    }
    /**
     * Set x
     *
     * @param integer $x
     * @return J17JigsMonsters
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

    /**
     * Set y
     *
     * @param integer $y
     * @return J17JigsMonsters
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
     * Set map
     *
     * @param integer $map
     * @return J17JigsMonsters
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
     * @return J17JigsMonsters
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
     * Set health
     *
     * @param integer $health
     * @return J17JigsMonsters
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
     * Get type
     *
     * @return \AppBundle\Entity\J17JigsMonsterTypes
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * Set type
     *
     * @param \AppBundle\Entity\J17JigsMonsterTypes $type
     *
     * @return J17JigsMonsters
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
    /**
     * Get Name
     *
     * @return integer
     */
    public function getName()
    {
        return $this->type->getName();
    }

    /**
     * Set strength
     *
     * @param integer $strength
     * @return J17JigsMonsters
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
     * @return J17JigsMonsters
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

