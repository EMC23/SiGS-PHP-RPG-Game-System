<?php

namespace AppBundle\Entity;

/**
 * J17JigsHackingActions
 */
class J17JigsHackingActions
{
    /**
     * @var integer
     */
    private $playerId;

    /**
     * @var string
     */
    private $sourceId;

    /**
     * @var string
     */
    private $destinationId;

    /**
     * @var string
     */
    private $timestamp;

    /**
     * @var string
     */
    private $eta;

    /**
     * @var string
     */
    private $type = 'decrypt';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set playerId
     *
     * @param integer $playerId
     *
     * @return J17JigsHackingActions
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
     * Set sourceId
     *
     * @param string $sourceId
     *
     * @return J17JigsHackingActions
     */
    public function setSourceId($sourceId)
    {
        $this->sourceId = $sourceId;

        return $this;
    }

    /**
     * Get sourceId
     *
     * @return string
     */
    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * Set destinationId
     *
     * @param string $destinationId
     *
     * @return J17JigsHackingActions
     */
    public function setDestinationId($destinationId)
    {
        $this->destinationId = $destinationId;

        return $this;
    }

    /**
     * Get destinationId
     *
     * @return string
     */
    public function getDestinationId()
    {
        return $this->destinationId;
    }

    /**
     * Set timestamp
     *
     * @param string $timestamp
     *
     * @return J17JigsHackingActions
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set eta
     *
     * @param string $eta
     *
     * @return J17JigsHackingActions
     */
    public function setEta($eta)
    {
        $this->eta = $eta;

        return $this;
    }

    /**
     * Get eta
     *
     * @return string
     */
    public function getEta()
    {
        return $this->eta;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return J17JigsHackingActions
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
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

