<?php

namespace Emc23\SigsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsMonsters
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class J17JigsMonsters
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var integer
     */
    private $type = '1';

    /**
     * @var integer
     */
    private $health = '100';

    /**
     * @var integer
     */
    private $strength = '100';

    /**
     * @var integer
     */
    private $intelligence = '100';

    /**
     * @var integer
     */
    private $map = '1';

    /**
     * @var integer
     */
    private $grid = '99';

    /**
     * @var integer
     */
    private $x;

    /**
     * @var integer
     */
    private $y;

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
     * Set type
     *
     * @param integer $type
     *
     * @return J17JigsMonsters
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
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



    /**
     * Set strength
     *
     * @param integer $strength
     *
     * @return J17JigsMonsters
     */
    public function setStrength($strength)
    {
        $this->grid = $strength;

        return $this;
    }

    /**
     * Get strength
     *
     * @return strength
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Set grid
     *
     * @param integer $grid
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
     * @return integer
     */
    public function getGrid()
    {
        return $this->grid;
    }

    /**
     * Set x
     *
     * @param integer $x
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
     * @return integer
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Get type
     *
     * @return \Emc23\SigsBundle\Entity\J17JigsMonsterTypes
     */
    public function getType()
    {
        return $this->type;
    }
}
