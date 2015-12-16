<?php

namespace Emc23\SigsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsGroups
 *
 * @ORM\Table(name="j17_jigs_groups", uniqueConstraints={@ORM\UniqueConstraint(name="gid_5", columns={"gid"}), @ORM\UniqueConstraint(name="id_2", columns={"id"})})
 * @ORM\Entity
 */
class J17JigsGroups
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gid", type="integer", nullable=false)
     */
    private $gid;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_members", type="integer", nullable=true)
     */
    private $totalMembers;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_bank", type="integer", nullable=true)
     */
    private $totalBank;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_xp", type="integer", nullable=true)
     */
    private $totalXp;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_money", type="integer", nullable=true)
     */
    private $totalMoney;

    /**
     * @var integer
     *
     * @ORM\Column(name="coffers", type="integer", nullable=false)
     */
    private $coffers;



    /**
     * Set gid
     *
     * @param integer $gid
     * @return J17JigsGroups
     */
    public function setGid($gid)
    {
        $this->gid = $gid;

        return $this;
    }

    /**
     * Get gid
     *
     * @return integer 
     */
    public function getGid()
    {
        return $this->gid;
    }

    /**
     * Set totalMembers
     *
     * @param integer $totalMembers
     * @return J17JigsGroups
     */
    public function setTotalMembers($totalMembers)
    {
        $this->totalMembers = $totalMembers;

        return $this;
    }

    /**
     * Get totalMembers
     *
     * @return integer 
     */
    public function getTotalMembers()
    {
        return $this->totalMembers;
    }

    /**
     * Set totalBank
     *
     * @param integer $totalBank
     * @return J17JigsGroups
     */
    public function setTotalBank($totalBank)
    {
        $this->totalBank = $totalBank;

        return $this;
    }

    /**
     * Get totalBank
     *
     * @return integer 
     */
    public function getTotalBank()
    {
        return $this->totalBank;
    }

    /**
     * Set totalXp
     *
     * @param integer $totalXp
     * @return J17JigsGroups
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
     * @return J17JigsGroups
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
     * Set coffers
     *
     * @param integer $coffers
     * @return J17JigsGroups
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
