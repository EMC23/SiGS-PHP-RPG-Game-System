<?php

namespace Emc23\SigsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsFarms
 *
 * @ORM\Table(name="j17_jigs_farms", uniqueConstraints={@ORM\UniqueConstraint(name="building", columns={"building", "field"})})
 * @ORM\Entity
 */
class J17JigsFarms
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
     * @ORM\Column(name="field", type="integer", nullable=false)
     */
    private $field;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="timestamp", type="integer", nullable=false)
     */
    private $timestamp;

    /**
     * @var integer
     *
     * @ORM\Column(name="crop", type="integer", nullable=false)
     */
    private $crop;

    /**
     * @var integer
     *
     * @ORM\Column(name="total", type="integer", nullable=false)
     */
    private $total;

    /**
     * @var integer
     *
     * @ORM\Column(name="finished", type="integer", nullable=false)
     */
    private $finished;

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
     * @return J17JigsFarms
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
     * Set field
     *
     * @param integer $field
     * @return J17JigsFarms
     */
    public function setField($field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * Get field
     *
     * @return integer 
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return J17JigsFarms
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
     * Set timestamp
     *
     * @param integer $timestamp
     * @return J17JigsFarms
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
     * Set crop
     *
     * @param integer $crop
     * @return J17JigsFarms
     */
    public function setCrop($crop)
    {
        $this->crop = $crop;

        return $this;
    }

    /**
     * Get crop
     *
     * @return integer 
     */
    public function getCrop()
    {
        return $this->crop;
    }

    /**
     * Set total
     *
     * @param integer $total
     * @return J17JigsFarms
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer 
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set finished
     *
     * @param integer $finished
     * @return J17JigsFarms
     */
    public function setFinished($finished)
    {
        $this->finished = $finished;

        return $this;
    }

    /**
     * Get finished
     *
     * @return integer 
     */
    public function getFinished()
    {
        return $this->finished;
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
