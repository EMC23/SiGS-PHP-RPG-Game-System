<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsMaps
 *
 * @ORM\Table(name="j17_jigs_maps")
 * @ORM\Entity
 */
class J17JigsMaps
{
    /**
     * @var integer
     *
     * @ORM\Column(name="grid", type="integer", nullable=false)
     */
    private $grid;

    /**
     * @var integer
     *
     * @ORM\Column(name="grid_index", type="integer", nullable=false)
     */
    private $gridIndex;

    /**
     * @var string
     *
     * @ORM\Column(name="row0", type="string", length=255, nullable=true)
     */
    private $row0;

    /**
     * @var string
     *
     * @ORM\Column(name="row1", type="string", length=255, nullable=true)
     */
    private $row1;

    /**
     * @var string
     *
     * @ORM\Column(name="row2", type="string", length=255, nullable=false)
     */
    private $row2;

    /**
     * @var string
     *
     * @ORM\Column(name="row3", type="string", length=255, nullable=true)
     */
    private $row3;

    /**
     * @var string
     *
     * @ORM\Column(name="row4", type="string", length=255, nullable=false)
     */
    private $row4;

    /**
     * @var string
     *
     * @ORM\Column(name="row5", type="string", length=255, nullable=true)
     */
    private $row5;

    /**
     * @var string
     *
     * @ORM\Column(name="row6", type="string", length=255, nullable=false)
     */
    private $row6;

    /**
     * @var string
     *
     * @ORM\Column(name="row7", type="string", length=255, nullable=false)
     */
    private $row7;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", nullable=false)
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
     * Set grid
     *
     * @param integer $grid
     * @return J17JigsMaps
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
     * Set gridIndex
     *
     * @param integer $gridIndex
     * @return J17JigsMaps
     */
    public function setGridIndex($gridIndex)
    {
        $this->gridIndex = $gridIndex;

        return $this;
    }

    /**
     * Get gridIndex
     *
     * @return integer 
     */
    public function getGridIndex()
    {
        return $this->gridIndex;
    }

    /**
     * Set row0
     *
     * @param string $row0
     * @return J17JigsMaps
     */
    public function setRow0($row0)
    {
        $this->row0 = $row0;

        return $this;
    }

    /**
     * Get row0
     *
     * @return string 
     */
    public function getRow0()
    {
        return $this->row0;
    }

    /**
     * Set row1
     *
     * @param string $row1
     * @return J17JigsMaps
     */
    public function setRow1($row1)
    {
        $this->row1 = $row1;

        return $this;
    }

    /**
     * Get row1
     *
     * @return string 
     */
    public function getRow1()
    {
        return $this->row1;
    }

    /**
     * Set row2
     *
     * @param string $row2
     * @return J17JigsMaps
     */
    public function setRow2($row2)
    {
        $this->row2 = $row2;

        return $this;
    }

    /**
     * Get row2
     *
     * @return string 
     */
    public function getRow2()
    {
        return $this->row2;
    }

    /**
     * Set row3
     *
     * @param string $row3
     * @return J17JigsMaps
     */
    public function setRow3($row3)
    {
        $this->row3 = $row3;

        return $this;
    }

    /**
     * Get row3
     *
     * @return string 
     */
    public function getRow3()
    {
        return $this->row3;
    }

    /**
     * Set row4
     *
     * @param string $row4
     * @return J17JigsMaps
     */
    public function setRow4($row4)
    {
        $this->row4 = $row4;

        return $this;
    }

    /**
     * Get row4
     *
     * @return string 
     */
    public function getRow4()
    {
        return $this->row4;
    }

    /**
     * Set row5
     *
     * @param string $row5
     * @return J17JigsMaps
     */
    public function setRow5($row5)
    {
        $this->row5 = $row5;

        return $this;
    }

    /**
     * Get row5
     *
     * @return string 
     */
    public function getRow5()
    {
        return $this->row5;
    }

    /**
     * Set row6
     *
     * @param string $row6
     * @return J17JigsMaps
     */
    public function setRow6($row6)
    {
        $this->row6 = $row6;

        return $this;
    }

    /**
     * Get row6
     *
     * @return string 
     */
    public function getRow6()
    {
        return $this->row6;
    }

    /**
     * Set row7
     *
     * @param string $row7
     * @return J17JigsMaps
     */
    public function setRow7($row7)
    {
        $this->row7 = $row7;

        return $this;
    }

    /**
     * Get row7
     *
     * @return string 
     */
    public function getRow7()
    {
        return $this->row7;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return J17JigsMaps
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
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
