<?php

namespace Emc23\SigsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsMines
 *
 * @ORM\Table(name="j17_jigs_mines", uniqueConstraints={@ORM\UniqueConstraint(name="building_id", columns={"building", "mine"})})
 * @ORM\Entity
 */
class J17JigsMines
{
    /**
     * @var integer
     *
     * @ORM\Column(name="building", type="integer", nullable=false)
     */
    private $building;

    /**
     * @var integer
     *
     * @ORM\Column(name="mine", type="integer", nullable=false)
     */
    private $mine;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="smallint", nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="timestamp", type="integer", nullable=false)
     */
    private $timestamp;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set building
     *
     * @param integer $building
     * @return J17JigsMines
     */
    public function setBuilding($building)
    {
        $this->building = $building;

        return $this;
    }

    /**
     * Get building
     *
     * @return integer 
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * Set mine
     *
     * @param integer $mine
     * @return J17JigsMines
     */
    public function setMine($mine)
    {
        $this->mine = $mine;

        return $this;
    }

    /**
     * Get mine
     *
     * @return integer 
     */
    public function getMine()
    {
        return $this->mine;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return J17JigsMines
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
     * Set type
     *
     * @param integer $type
     * @return J17JigsMines
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
     * Set timestamp
     *
     * @param integer $timestamp
     * @return J17JigsMines
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return integer 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
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
