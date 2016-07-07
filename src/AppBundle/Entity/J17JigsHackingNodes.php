<?php

namespace AppBundle\Entity;

/**
 * J17JigsHackingNodes
 */
class J17JigsHackingNodes
{
    /**
     * @var integer
     */
    private $playerId;

    /**
     * @var string
     */
    private $details;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set playerId
     *
     * @param integer $playerId
     *
     * @return J17JigsHackingNodes
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
     * Set details
     *
     * @param string $details
     *
     * @return J17JigsHackingNodes
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
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

