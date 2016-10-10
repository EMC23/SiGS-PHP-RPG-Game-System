<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsObjectTypes
 *
 * @ORM\Table(name="j17_jigs_object_types")
 * @ORM\Entity
 */
class J17JigsObjectTypes
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255, nullable=false)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="man_time", type="integer", nullable=false)
     */
    private $manTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="metal_1", type="integer", nullable=false)
     */
    private $metal1;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_1", type="integer", nullable=false)
     */
    private $quantity1;

    /**
     * @var integer
     *
     * @ORM\Column(name="metal_2", type="integer", nullable=false)
     */
    private $metal2;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_2", type="integer", nullable=false)
     */
    private $quantity2;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level;

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
     * @ORM\Column(name="cellwidth", type="integer")
     */
    private $cellWidth;

    /**
     * @var integer
     * @ORM\Column(name="cellheight", type="integer")
     */
    private $cellHeight;

    /**
     * @var integer
     */
    private $numberofcells = '1';

    /**
     * Set name
     *
     * @param string $name
     * @return J17JigsObjects
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
     * Set name
     *
     * @param string $name
     * @return J17JigsObjectType
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }
    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }




    /**
     * Set description
     *
     * @param string $description
     * @return J17JigsObjects
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set manTime
     *
     * @param integer $manTime
     * @return J17JigsObjects
     */
    public function setManTime($manTime)
    {
        $this->manTime = $manTime;

        return $this;
    }

    /**
     * Get manTime
     *
     * @return integer 
     */
    public function getManTime()
    {
        return $this->manTime;
    }

    /**
     * Set metal1
     *
     * @param integer $metal1
     * @return J17JigsObjects
     */
    public function setMetal1($metal1)
    {
        $this->metal1 = $metal1;

        return $this;
    }

    /**
     * Get metal1
     *
     * @return integer 
     */
    public function getMetal1()
    {
        return $this->metal1;
    }

    /**
     * Set quantity1
     *
     * @param integer $quantity1
     * @return J17JigsObjects
     */
    public function setQuantity1($quantity1)
    {
        $this->quantity1 = $quantity1;

        return $this;
    }

    /**
     * Get quantity1
     *
     * @return integer 
     */
    public function getQuantity1()
    {
        return $this->quantity1;
    }

    /**
     * Set metal2
     *
     * @param integer $metal2
     * @return J17JigsObjects
     */
    public function setMetal2($metal2)
    {
        $this->metal2 = $metal2;

        return $this;
    }

    /**
     * Get metal2
     *
     * @return integer 
     */
    public function getMetal2()
    {
        return $this->metal2;
    }

    /**
     * Set quantity2
     *
     * @param integer $quantity2
     * @return J17JigsObjects
     */
    public function setQuantity2($quantity2)
    {
        $this->quantity2 = $quantity2;

        return $this;
    }

    /**
     * Get quantity2
     *
     * @return integer 
     */
    public function getQuantity2()
    {
        return $this->quantity2;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return J17JigsObjects
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
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
     * Set cellWidth
     *
     * @param integer $cellWidth
     *
     * @return J17JigsMonsterTypes
     */
    public function setCellWidth($cellWidth)
    {
        $this->cellWidth = $cellWidth;

        return $this;
    }

    /**
     * Get cellWidth
     *
     * @return integer
     */
    public function getCellWidth()
    {
        return $this->cellWidth;
    }

    /**
     * Set cellHeight
     *
     * @param integer $cellHeight
     *
     * @return J17JigsMonsterTypes
     */
    public function setCellHeight($cellHeight)
    {
        $this->cellHeight = $cellHeight;

        return $this;
    }

    /**
     * Get cellHeight
     *
     * @return integer
     */
    public function getCellHeight()
    {
        return $this->cellHeight;
    }


    /**
     * Set numberofcells
     *
     * @param integer $numberofcells
     *
     * @return J17JigsMonsterTypes
     */
    public function setNumberofcells($numberofcells)
    {
        $this->numberofcells = $numberofcells;

        return $this;
    }

    /**
     * Get numberofcells
     *
     * @return integer
     */
    public function getNumberofcells()
    {
        return $this->numberofcells;
    }







}
