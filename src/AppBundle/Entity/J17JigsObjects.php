<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsObjects
 *
 * @ORM\Table(name="j17_jigs_objects")
 * @ORM\Entity
 */
class J17JigsObjects
{
    /**
     * @var integer
     *
     * @ORM\Column(name="player_id", type="integer", nullable=false)
     */
    private $playerId;

    /**
     * @ORM\ManyToOne(targetEntity="J17JigsObjectTypes")
     * @ORM\JoinColumn(name="type", referencedColumnName="id")
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="location", type="integer", nullable=false)
     */
    private $location;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * Set playerId
     *
     * @param integer $playerId
     * @return J17JigsObjects
     */
    public function setPlayerId($playerId)
    {
        $this->playerId = $playerId;

        return $this;
    }

    /**
     * Get playerId
     *
     * @return integer 
     */
    public function getPlayerId()
    {
        return $this->playerId;
    }

    /**
     * Set location
     *
     * @param integer $location
     * @return J17JigsInventory
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return integer 
     */
    public function getLocation()
    {
        return $this->location;
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
     * @param \AppBundle\Entity\J17JigsObjects $type
     *
     * @return J17JigsObjects
     */
    public function setId($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \AppBundle\Entity\J17JigsObjectTypes
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type
     *
     * @param \AppBundle\Entity\J17JigsObjectTypes $type
     *
     * @return J17JigsMonsters
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
