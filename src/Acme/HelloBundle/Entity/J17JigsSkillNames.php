<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsSkillNames
 *
 * @ORM\Table(name="j17_jigs_skill_names")
 * @ORM\Entity
 */
class J17JigsSkillNames
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="cost_price", type="integer", nullable=false)
     */
    private $costPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="Modified", type="integer", nullable=false)
     */
    private $modified;

    /**
     * @var string
     *
     * @ORM\Column(name="modified_name", type="string", length=255, nullable=false)
     */
    private $modifiedName;

    /**
     * @var integer
     *
     * @ORM\Column(name="Secondary_Modified", type="integer", nullable=false)
     */
    private $secondaryModified;

    /**
     * @var string
     *
     * @ORM\Column(name="Secondary_Modified_name", type="string", length=255, nullable=false)
     */
    private $secondaryModifiedName;

    /**
     * @var integer
     *
     * @ORM\Column(name="Secondary_Modifier", type="integer", nullable=false)
     */
    private $secondaryModifier;

    /**
     * @var integer
     *
     * @ORM\Column(name="Modifier", type="integer", nullable=false)
     */
    private $modifier;

    /**
     * @var integer
     *
     * @ORM\Column(name="total", type="integer", nullable=false)
     */
    private $total;

    /**
     * @var integer
     *
     * @ORM\Column(name="remaining", type="integer", nullable=false)
     */
    private $remaining;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set name
     *
     * @param string $name
     * @return J17JigsSkillNames
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set costPrice
     *
     * @param integer $costPrice
     * @return J17JigsSkillNames
     */
    public function setCostPrice($costPrice)
    {
        $this->costPrice = $costPrice;

        return $this;
    }

    /**
     * Get costPrice
     *
     * @return integer 
     */
    public function getCostPrice()
    {
        return $this->costPrice;
    }

    /**
     * Set modified
     *
     * @param integer $modified
     * @return J17JigsSkillNames
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return integer 
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set modifiedName
     *
     * @param string $modifiedName
     * @return J17JigsSkillNames
     */
    public function setModifiedName($modifiedName)
    {
        $this->modifiedName = $modifiedName;

        return $this;
    }

    /**
     * Get modifiedName
     *
     * @return string 
     */
    public function getModifiedName()
    {
        return $this->modifiedName;
    }

    /**
     * Set secondaryModified
     *
     * @param integer $secondaryModified
     * @return J17JigsSkillNames
     */
    public function setSecondaryModified($secondaryModified)
    {
        $this->secondaryModified = $secondaryModified;

        return $this;
    }

    /**
     * Get secondaryModified
     *
     * @return integer 
     */
    public function getSecondaryModified()
    {
        return $this->secondaryModified;
    }

    /**
     * Set secondaryModifiedName
     *
     * @param string $secondaryModifiedName
     * @return J17JigsSkillNames
     */
    public function setSecondaryModifiedName($secondaryModifiedName)
    {
        $this->secondaryModifiedName = $secondaryModifiedName;

        return $this;
    }

    /**
     * Get secondaryModifiedName
     *
     * @return string 
     */
    public function getSecondaryModifiedName()
    {
        return $this->secondaryModifiedName;
    }

    /**
     * Set secondaryModifier
     *
     * @param integer $secondaryModifier
     * @return J17JigsSkillNames
     */
    public function setSecondaryModifier($secondaryModifier)
    {
        $this->secondaryModifier = $secondaryModifier;

        return $this;
    }

    /**
     * Get secondaryModifier
     *
     * @return integer 
     */
    public function getSecondaryModifier()
    {
        return $this->secondaryModifier;
    }

    /**
     * Set modifier
     *
     * @param integer $modifier
     * @return J17JigsSkillNames
     */
    public function setModifier($modifier)
    {
        $this->modifier = $modifier;

        return $this;
    }

    /**
     * Get modifier
     *
     * @return integer 
     */
    public function getModifier()
    {
        return $this->modifier;
    }

    /**
     * Set total
     *
     * @param integer $total
     * @return J17JigsSkillNames
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
     * Set remaining
     *
     * @param integer $remaining
     * @return J17JigsSkillNames
     */
    public function setRemaining($remaining)
    {
        $this->remaining = $remaining;

        return $this;
    }

    /**
     * Get remaining
     *
     * @return integer 
     */
    public function getRemaining()
    {
        return $this->remaining;
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
