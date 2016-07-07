<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsWeaponNames
 *
 * @ORM\Table(name="j17_jigs_weapon_names")
 * @ORM\Entity
 */
class J17JigsWeaponNames
{
    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=50, nullable=false)
     */
    private $image;

    /**
     * @var boolean
     *
     * @ORM\Column(name="max_ammunition", type="boolean", nullable=false)
     */
    private $maxAmmunition;

    /**
     * @var boolean
     *
     * @ORM\Column(name="attack", type="boolean", nullable=false)
     */
    private $attack;

    /**
     * @var boolean
     *
     * @ORM\Column(name="defence", type="boolean", nullable=false)
     */
    private $defence;

    /**
     * @var boolean
     *
     * @ORM\Column(name="precision", type="boolean", nullable=false)
     */
    private $precision;

    /**
     * @var boolean
     *
     * @ORM\Column(name="detente", type="boolean", nullable=false)
     */
    private $detente;

    /**
     * @var integer
     *
     * @ORM\Column(name="sell_price", type="integer", nullable=false)
     */
    private $sellPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix_munition", type="integer", nullable=false)
     */
    private $prixMunition;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", nullable=false)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=20, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmagasin", type="integer", nullable=false)
     */
    private $idmagasin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="nombre", type="boolean", nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="xp", type="smallint", nullable=false)
     */
    private $xp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="special", type="boolean", nullable=false)
     */
    private $special;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", nullable=false)
     */
    private $published;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set image
     *
     * @param string $image
     * @return J17JigsWeaponNames
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set maxAmmunition
     *
     * @param boolean $maxAmmunition
     * @return J17JigsWeaponNames
     */
    public function setMaxAmmunition($maxAmmunition)
    {
        $this->maxAmmunition = $maxAmmunition;

        return $this;
    }

    /**
     * Get maxAmmunition
     *
     * @return boolean 
     */
    public function getMaxAmmunition()
    {
        return $this->maxAmmunition;
    }

    /**
     * Set attack
     *
     * @param boolean $attack
     * @return J17JigsWeaponNames
     */
    public function setAttack($attack)
    {
        $this->attack = $attack;

        return $this;
    }

    /**
     * Get attack
     *
     * @return boolean 
     */
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * Set defence
     *
     * @param boolean $defence
     * @return J17JigsWeaponNames
     */
    public function setDefence($defence)
    {
        $this->defence = $defence;

        return $this;
    }

    /**
     * Get defence
     *
     * @return boolean 
     */
    public function getDefence()
    {
        return $this->defence;
    }

    /**
     * Set precision
     *
     * @param boolean $precision
     * @return J17JigsWeaponNames
     */
    public function setPrecision($precision)
    {
        $this->precision = $precision;

        return $this;
    }

    /**
     * Get precision
     *
     * @return boolean 
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * Set detente
     *
     * @param boolean $detente
     * @return J17JigsWeaponNames
     */
    public function setDetente($detente)
    {
        $this->detente = $detente;

        return $this;
    }

    /**
     * Get detente
     *
     * @return boolean 
     */
    public function getDetente()
    {
        return $this->detente;
    }

    /**
     * Set sellPrice
     *
     * @param integer $sellPrice
     * @return J17JigsWeaponNames
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
     * Set prixMunition
     *
     * @param integer $prixMunition
     * @return J17JigsWeaponNames
     */
    public function setPrixMunition($prixMunition)
    {
        $this->prixMunition = $prixMunition;

        return $this;
    }

    /**
     * Get prixMunition
     *
     * @return integer 
     */
    public function getPrixMunition()
    {
        return $this->prixMunition;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return J17JigsWeaponNames
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return J17JigsWeaponNames
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
     * Set idmagasin
     *
     * @param integer $idmagasin
     * @return J17JigsWeaponNames
     */
    public function setIdmagasin($idmagasin)
    {
        $this->idmagasin = $idmagasin;

        return $this;
    }

    /**
     * Get idmagasin
     *
     * @return integer 
     */
    public function getIdmagasin()
    {
        return $this->idmagasin;
    }

    /**
     * Set nombre
     *
     * @param boolean $nombre
     * @return J17JigsWeaponNames
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return boolean 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set xp
     *
     * @param integer $xp
     * @return J17JigsWeaponNames
     */
    public function setXp($xp)
    {
        $this->xp = $xp;

        return $this;
    }

    /**
     * Get xp
     *
     * @return integer 
     */
    public function getXp()
    {
        return $this->xp;
    }

    /**
     * Set special
     *
     * @param boolean $special
     * @return J17JigsWeaponNames
     */
    public function setSpecial($special)
    {
        $this->special = $special;

        return $this;
    }

    /**
     * Get special
     *
     * @return boolean 
     */
    public function getSpecial()
    {
        return $this->special;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return J17JigsWeaponNames
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
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
