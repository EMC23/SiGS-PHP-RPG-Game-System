<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsPapers
 *
 * @ORM\Table(name="j17_jigs_papers")
 * @ORM\Entity
 */
class J17JigsPapers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="player_id", type="integer", nullable=false)
     */
    private $playerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="item_id", type="integer", nullable=false)
     */
    private $itemId;

    /**
     * @var integer
     *
     * @ORM\Column(name="sell_price", type="integer", nullable=false)
     */
    private $sellPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="buy_price", type="integer", nullable=false)
     */
    private $buyPrice;

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
     * @return J17JigsPapers
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
     * Set itemId
     *
     * @param integer $itemId
     * @return J17JigsPapers
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }

    /**
     * Get itemId
     *
     * @return integer 
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * Set sellPrice
     *
     * @param integer $sellPrice
     * @return J17JigsPapers
     */
    public function setSellPrice($sellPrice)
    {
        $this->sellPrice = $sellPrice;

        return $this;
    }

    /**
     * Get sellPrice
     *
     * @return integer 
     */
    public function getSellPrice()
    {
        return $this->sellPrice;
    }

    /**
     * Set buyPrice
     *
     * @param integer $buyPrice
     * @return J17JigsPapers
     */
    public function setBuyPrice($buyPrice)
    {
        $this->buyPrice = $buyPrice;

        return $this;
    }

    /**
     * Get buyPrice
     *
     * @return integer 
     */
    public function getBuyPrice()
    {
        return $this->buyPrice;
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
