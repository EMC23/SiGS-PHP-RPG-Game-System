<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsMonsters
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
     * @var integer
     * @ORM\Column(name="grid", type="integer")
     */
    private $grid;

    /**
     * @var integer
     * @ORM\Column(name="map", type="integer")
     */
    private $map;





    /**
     * @var \AppBundle\Entity\J17JigsMonsterTypes

     * @ORM\ManyToOne(targetEntity="J17JigsMonsterTypes")
     * @ORM\JoinColumn(name="type", referencedColumnName="id")
     *
     */
    private $type;

    /**
     * Set grid
     *
     * @param string $grid
     *
     * @return J17JigsMonsters
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
     * Set health
     *
     * @param integer $health
     *
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
     * Set x
     *
     * @param float $x
     *
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
     * @return float
     */
    public function getY()
    {
        return $this->y;
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
     * Get type
     *
     * @return \AppBundle\Entity\J17JigsMonsterTypes
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set map
     *
     * @param integer $map
     *
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
}
