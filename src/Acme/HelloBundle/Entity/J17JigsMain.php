<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsMain
 *
 * @ORM\Table(name="j17_jigs_main")
 * @ORM\Entity
 */
class J17JigsMain
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sbid", type="integer", nullable=false)
     */
    private $sbid;

    /**
     * @var string
     *
     * @ORM\Column(name="params", type="string", length=255, nullable=false)
     */
    private $params;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set sbid
     *
     * @param integer $sbid
     * @return J17JigsMain
     */
    public function setSbid($sbid)
    {
        $this->sbid = $sbid;

        return $this;
    }

    /**
     * Get sbid
     *
     * @return integer 
     */
    public function getSbid()
    {
        return $this->sbid;
    }

    /**
     * Set params
     *
     * @param string $params
     * @return J17JigsMain
     */
    public function setParams($params)
    {
        $this->params = $params;

        return $this;
    }

    /**
     * Get params
     *
     * @return string 
     */
    public function getParams()
    {
        return $this->params;
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
