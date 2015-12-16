<?php

namespace Emc23\SigsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsGenerators
 *
 * @ORM\Table(name="j17_jigs_generators", uniqueConstraints={@ORM\UniqueConstraint(name="building", columns={"building"})})
 * @ORM\Entity
 */
class J17JigsGenerators
{
    /**
     * @var integer
     *
     * @ORM\Column(name="building", type="integer", nullable=false)
     */
    private $building;

    /**
     * @var integer
     *
     * @ORM\Column(name="gen_type", type="integer", nullable=false)
     */
    private $genType;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set building
     *
     * @param integer $building
     * @return J17JigsGenerators
     */
    public function setBuilding($building)
    {
        $this->building = $building;

        return $this;
    }

    /**
     * Get building
     *
     * @return integer 
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * Set genType
     *
     * @param integer $genType
     * @return J17JigsGenerators
     */
    public function setGenType($genType)
    {
        $this->genType = $genType;

        return $this;
    }

    /**
     * Get genType
     *
     * @return integer 
     */
    public function getGenType()
    {
        return $this->genType;
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
