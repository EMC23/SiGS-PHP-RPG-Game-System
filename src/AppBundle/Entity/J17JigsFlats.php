<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsFlats
 *
 * @ORM\Table(name="j17_jigs_flats", uniqueConstraints={@ORM\UniqueConstraint(name="building", columns={"building", "flat"})})
 * @ORM\Entity
 */
class J17JigsFlats
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
     * @ORM\Column(name="flat", type="integer", nullable=false)
     */
    private $flat;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="resident", type="integer", nullable=false)
     */
    private $resident;

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
     * @return J17JigsFlats
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
     * Set flat
     *
     * @param integer $flat
     * @return J17JigsFlats
     */
    public function setFlat($flat)
    {
        $this->flat = $flat;

        return $this;
    }

    /**
     * Get flat
     *
     * @return integer 
     */
    public function getFlat()
    {
        return $this->flat;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return J17JigsFlats
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
     * Set resident
     *
     * @param integer $resident
     * @return J17JigsFlats
     */
    public function setResident($resident)
    {
        $this->resident = $resident;

        return $this;
    }

    /**
     * Get resident
     *
     * @return integer 
     */
    public function getResident()
    {
        return $this->resident;
    }

    /**
     * Set timestamp
     *
     * @param integer $timestamp
     * @return J17JigsFlats
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
