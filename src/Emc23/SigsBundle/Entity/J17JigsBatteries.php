<?php

namespace Emc23\SigsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsBatteries
 *
 * @ORM\Table(name="j17_jigs_batteries")
 * @ORM\Entity
 */
class J17JigsBatteries
{
    /**
     * @var integer
     *
     * @ORM\Column(name="units", type="integer", nullable=false)
     */
    private $units;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_units", type="integer", nullable=false)
     */
    private $maxUnits;

    /**
     * @var integer
     *
     * @ORM\Column(name="iduser", type="integer", nullable=false)
     */
    private $iduser;

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
     * Set units
     *
     * @param integer $units
     * @return J17JigsBatteries
     */
    public function setUnits($units)
    {
        $this->units = $units;

        return $this;
    }

    /**
     * Get units
     *
     * @return integer 
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Set maxUnits
     *
     * @param integer $maxUnits
     * @return J17JigsBatteries
     */
    public function setMaxUnits($maxUnits)
    {
        $this->maxUnits = $maxUnits;

        return $this;
    }

    /**
     * Get maxUnits
     *
     * @return integer 
     */
    public function getMaxUnits()
    {
        return $this->maxUnits;
    }

    /**
     * Set iduser
     *
     * @param integer $iduser
     * @return J17JigsBatteries
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return integer 
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set timestamp
     *
     * @param integer $timestamp
     * @return J17JigsBatteries
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
