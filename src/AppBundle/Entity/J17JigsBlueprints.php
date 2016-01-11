<?php

namespace Emc23\SigsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsBlueprints
 *
 * @ORM\Table(name="j17_jigs_blueprints", uniqueConstraints={@ORM\UniqueConstraint(name="object", columns={"object", "user_id"})})
 * @ORM\Entity
 */
class J17JigsBlueprints
{
    /**
     * @var integer
     *
     * @ORM\Column(name="object", type="integer", nullable=false)
     */
    private $object;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="sell_price", type="integer", nullable=false)
     */
    private $sellPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set object
     *
     * @param integer $object
     * @return J17JigsBlueprints
     */
    public function setObject($object)
    {
        $this->object = $object;

        return $this;
    }

    /**
     * Get object
     *
     * @return integer 
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return J17JigsBlueprints
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set sellPrice
     *
     * @param integer $sellPrice
     * @return J17JigsBlueprints
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
