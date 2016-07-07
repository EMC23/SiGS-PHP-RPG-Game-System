<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsPortals
 *
 * @ORM\Table(name="j17_jigs_portals")
 * @ORM\Entity
 */
class J17JigsPortals
{
    /**
     * @var string
     *
     * @ORM\Column(name="direction", type="string", length=1, nullable=false)
     */
    private $direction;

    /**
     * @var integer
     *
     * @ORM\Column(name="from_x", type="integer", nullable=false)
     */
    private $fromX;

    /**
     * @var integer
     *
     * @ORM\Column(name="from_y", type="integer", nullable=false)
     */
    private $fromY;

    /**
     * @var integer
     *
     * @ORM\Column(name="from_map", type="integer", nullable=false)
     */
    private $fromMap;

    /**
     * @var integer
     *
     * @ORM\Column(name="from_grid", type="integer", nullable=false)
     */
    private $fromGrid;

    /**
     * @var integer
     *
     * @ORM\Column(name="to_x", type="integer", nullable=false)
     */
    private $toX;

    /**
     * @var integer
     *
     * @ORM\Column(name="to_y", type="integer", nullable=false)
     */
    private $toY;

    /**
     * @var integer
     *
     * @ORM\Column(name="to_map", type="integer", nullable=false)
     */
    private $toMap;

    /**
     * @var integer
     *
     * @ORM\Column(name="to_grid", type="integer", nullable=false)
     */
    private $toGrid;

    /**
     * @var integer
     *
     * @ORM\Column(name="published", type="integer", nullable=false)
     */
    private $published;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set direction
     *
     * @param string $direction
     * @return J17JigsPortals
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * Get direction
     *
     * @return string 
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Set fromX
     *
     * @param integer $fromX
     * @return J17JigsPortals
     */
    public function setFromX($fromX)
    {
        $this->fromX = $fromX;

        return $this;
    }

    /**
     * Get fromX
     *
     * @return integer 
     */
    public function getFromX()
    {
        return $this->fromX;
    }

    /**
     * Set fromY
     *
     * @param integer $fromY
     * @return J17JigsPortals
     */
    public function setFromY($fromY)
    {
        $this->fromY = $fromY;

        return $this;
    }

    /**
     * Get fromY
     *
     * @return integer 
     */
    public function getFromY()
    {
        return $this->fromY;
    }

    /**
     * Set fromMap
     *
     * @param integer $fromMap
     * @return J17JigsPortals
     */
    public function setFromMap($fromMap)
    {
        $this->fromMap = $fromMap;

        return $this;
    }

    /**
     * Get fromMap
     *
     * @return integer 
     */
    public function getFromMap()
    {
        return $this->fromMap;
    }

    /**
     * Set fromGrid
     *
     * @param integer $fromGrid
     * @return J17JigsPortals
     */
    public function setFromGrid($fromGrid)
    {
        $this->fromGrid = $fromGrid;

        return $this;
    }

    /**
     * Get fromGrid
     *
     * @return integer 
     */
    public function getFromGrid()
    {
        return $this->fromGrid;
    }

    /**
     * Set toX
     *
     * @param integer $toX
     * @return J17JigsPortals
     */
    public function setToX($toX)
    {
        $this->toX = $toX;

        return $this;
    }

    /**
     * Get toX
     *
     * @return integer 
     */
    public function getToX()
    {
        return $this->toX;
    }

    /**
     * Set toY
     *
     * @param integer $toY
     * @return J17JigsPortals
     */
    public function setToY($toY)
    {
        $this->toY = $toY;

        return $this;
    }

    /**
     * Get toY
     *
     * @return integer 
     */
    public function getToY()
    {
        return $this->toY;
    }

    /**
     * Set toMap
     *
     * @param integer $toMap
     * @return J17JigsPortals
     */
    public function setToMap($toMap)
    {
        $this->toMap = $toMap;

        return $this;
    }

    /**
     * Get toMap
     *
     * @return integer 
     */
    public function getToMap()
    {
        return $this->toMap;
    }

    /**
     * Set toGrid
     *
     * @param integer $toGrid
     * @return J17JigsPortals
     */
    public function setToGrid($toGrid)
    {
        $this->toGrid = $toGrid;

        return $this;
    }

    /**
     * Get toGrid
     *
     * @return integer 
     */
    public function getToGrid()
    {
        return $this->toGrid;
    }

    /**
     * Set published
     *
     * @param integer $published
     * @return J17JigsPortals
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return integer 
     */
    public function getPublished()
    {
        return $this->published;
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
