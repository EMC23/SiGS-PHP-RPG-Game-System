<?php

namespace Emc23\SigsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * J17JigsHobbitTypes
 *
 * @ORM\Table(name="j17_jigs_hobbits", uniqueConstraints={@ORM\UniqueConstraint(name="type", columns={"type"})})
 * @ORM\Entity
 */
class J17JigsHobbitTypes
{

    public function __construct()
    {
        $this->J17JigsHobbits = new ArrayCollection();
    }

     /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="typename", type="string", length=255, nullable=false)
     */
    private $typename;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=255, nullable=false)
     */
    private $avatar;

    /**
     * @var integer
     *
     * @ORM\Column(name="cellwidth", type="integer", length=3, nullable=true)
     */
    private $cellwidth;

    /**
     * @var integer
     *
     * @ORM\Column(name="cellheight", type="integer", length=3, nullable=true)
     */
    private $cellheight;

    /**
     * Set type
     *
     * @param string $typename
     * @return J17JigsHobbits
     */

   public function setTypeName($typename)
    {
        $this->typename = $typename;

        return $this;
    }

    /**
     * Get typename
     *
     * @return string 
     */
    public function getTypeName()
    {
        return $this->typename;
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
     * Set avatar
     *
     * @param string $avatar
     *
     * @return J17JigsHobbitTypes
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set cellwidth
     *
      *
     * @return J17JigsHobbitTypes
     */
    public function setCellwidth($cellwidth)
    {
        $this->cellwidth = $cellwidth;

        return $this;
    }

    /**
     * Get cellwidth
     *
     * @return integer
     */
    public function getCellwidth()
    {
        return $this->cellwidth;
    }

    /**
     * Set cellheight
     *
     * @param integer $cellheight
     *
     * @return J17JigsHobbitTypes
     */
    public function setCellheight($cellheight)
    {
        $this->cellheight = $cellheight;

        return $this;
    }

    /**
     * Get cellheight
     *
     * @return integer
     */
    public function getCellheight()
    {
        return $this->cellheight;
    }
    /**
     * @var integer
     */
    private $numberofcells;


    /**
     * Set numberofcells
     *
     * @param integer $numberofcells
     *
     * @return J17JigsHobbitTypes
     */
    public function setNumberofcells($numberofcells)
    {
        $this->numberofcells = $numberofcells;

        return $this;
    }

    /**
     * Get numberofcells
     *
     * @return integer
     */
    public function getNumberofcells()
    {
        return $this->numberofcells;
    }


}
