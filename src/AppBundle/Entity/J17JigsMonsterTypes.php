<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsMonsterTypes
 *
 * @ORM\Table(name="j17_jigs_monster_types")
 * @ORM\Entity
 */
class J17JigsMonsterTypes
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
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


    /**
     * @var string
     * @ORM\Column(name="spritesheet", type="string")
     */
    private $spritesheet;

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
    private $numberofcells = '16';





















    /**
     * Set name
     *
     * @param string $name
     * @return J17JigsMonsterTypes
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

























    /**
     * Set spritesheet
     *
     * @param string $spritesheet
     *
     * @return J17JigsMonsterTypes
     */
    public function setSpritesheet($spritesheet)
    {
        $this->spritesheet = $spritesheet;

        return $this;
    }

    /**
     * Get spritesheet
     *
     * @return string
     */
    public function getSpritesheet()
    {
        return $this->spritesheet;
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
