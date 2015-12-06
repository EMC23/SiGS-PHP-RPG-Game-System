<?php

namespace Emc23\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsFactions
 *
 * @ORM\Table(name="j17_jigs_factions")
 * @ORM\Entity
 */
class J17JigsFactions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="total_groups", type="integer", nullable=false)
     */
    private $totalGroups;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_players", type="integer", nullable=false)
     */
    private $totalPlayers;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_xp", type="integer", nullable=false)
     */
    private $totalXp;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_money", type="integer", nullable=false)
     */
    private $totalMoney;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_buildings", type="integer", nullable=false)
     */
    private $totalBuildings;

    /**
     * @var integer
     *
     * @ORM\Column(name="coffers", type="integer", nullable=false)
     */
    private $coffers;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set totalGroups
     *
     * @param integer $totalGroups
     * @return J17JigsFactions
     */
    public function setTotalGroups($totalGroups)
    {
        $this->totalGroups = $totalGroups;

        return $this;
    }

    /**
     * Get totalGroups
     *
     * @return integer 
     */
    public function getTotalGroups()
    {
        return $this->totalGroups;
    }

    /**
     * Set totalPlayers
     *
     * @param integer $totalPlayers
     * @return J17JigsFactions
     */
    public function setTotalPlayers($totalPlayers)
    {
        $this->totalPlayers = $totalPlayers;

        return $this;
    }

    /**
     * Get totalPlayers
     *
     * @return integer 
     */
    public function getTotalPlayers()
    {
        return $this->totalPlayers;
    }

    /**
     * Set totalXp
     *
     * @param integer $totalXp
     * @return J17JigsFactions
     */
    public function setTotalXp($totalXp)
    {
        $this->totalXp = $totalXp;

        return $this;
    }

    /**
     * Get totalXp
     *
     * @return integer 
     */
    public function getTotalXp()
    {
        return $this->totalXp;
    }

    /**
     * Set totalMoney
     *
     * @param integer $totalMoney
     * @return J17JigsFactions
     */
    public function setTotalMoney($totalMoney)
    {
        $this->totalMoney = $totalMoney;

        return $this;
    }

    /**
     * Get totalMoney
     *
     * @return integer 
     */
    public function getTotalMoney()
    {
        return $this->totalMoney;
    }

    /**
     * Set totalBuildings
     *
     * @param integer $totalBuildings
     * @return J17JigsFactions
     */
    public function setTotalBuildings($totalBuildings)
    {
        $this->totalBuildings = $totalBuildings;

        return $this;
    }

    /**
     * Get totalBuildings
     *
     * @return integer 
     */
    public function getTotalBuildings()
    {
        return $this->totalBuildings;
    }

    /**
     * Set coffers
     *
     * @param integer $coffers
     * @return J17JigsFactions
     */
    public function setCoffers($coffers)
    {
        $this->coffers = $coffers;

        return $this;
    }

    /**
     * Get coffers
     *
     * @return integer 
     */
    public function getCoffers()
    {
        return $this->coffers;
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
