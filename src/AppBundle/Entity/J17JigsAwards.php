<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsAwards
 *
 * @ORM\Table(name="j17_jigs_awards")
 * @ORM\Entity
 */
class J17JigsAwards
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iduser", type="integer", nullable=false)
     */
    private $iduser;

    /**
     * @var integer
     *
     * @ORM\Column(name="name_id", type="integer", nullable=false)
     */
    private $nameId;

    /**
     * @var integer
     *
     * @ORM\Column(name="published", type="integer", nullable=false)
     */
    private $published;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set iduser
     *
     * @param integer $iduser
     * @return J17JigsAwards
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return integer 
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set nameId
     *
     * @param integer $nameId
     * @return J17JigsAwards
     */
    public function setNameId($nameId)
    {
        $this->nameId = $nameId;

        return $this;
    }

    /**
     * Get nameId
     *
     * @return integer 
     */
    public function getNameId()
    {
        return $this->nameId;
    }

    /**
     * Set published
     *
     * @param integer $published
     * @return J17JigsAwards
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return integer 
     */
    public function getPublished()
    {
        return $this->published;
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
