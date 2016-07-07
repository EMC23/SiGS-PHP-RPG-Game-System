<?php

namespace AppBundle\Entity;

/**
 * J17JigsHackingStates
 */
class J17JigsHackingStates
{
    /**
     * @var integer
     */
    private $playerId;

    /**
     * @var string
     */
    private $ip = '000.000.000.000';

    /**
     * @var boolean
     */
    private $state = '0';

    /**
     * @var \DateTime
     */
    private $timestamp = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set playerId
     *
     * @param integer $playerId
     *
     * @return J17JigsHackingStates
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
     * Set ip
     *
     * @param string $ip
     *
     * @return J17JigsHackingStates
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set state
     *
     * @param boolean $state
     *
     * @return J17JigsHackingStates
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return boolean
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     *
     * @return J17JigsHackingStates
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime
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

