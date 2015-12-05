<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsPaperNames
 *
 * @ORM\Table(name="j17_jigs_paper_names")
 * @ORM\Entity
 */
class J17JigsPaperNames
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="positon", type="string", length=255, nullable=false)
     */
    private $positon;

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
     * @return J17JigsPaperNames
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
     * Set positon
     *
     * @param string $positon
     * @return J17JigsPaperNames
     */
    public function setPositon($positon)
    {
        $this->positon = $positon;

        return $this;
    }

    /**
     * Get positon
     *
     * @return string 
     */
    public function getPositon()
    {
        return $this->positon;
    }

    /**
     * Set total
     *
     * @param integer $total
     * @return J17JigsPaperNames
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
     * @return J17JigsPaperNames
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
