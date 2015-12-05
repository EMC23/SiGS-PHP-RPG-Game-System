<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsCars
 *
 * @ORM\Table(name="j17_jigs_cars")
 * @ORM\Entity
 */
class J17JigsCars
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
     * @ORM\Column(name="reservoir", type="boolean", nullable=false)
     */
    private $reservoir;

    /**
     * @var boolean
     *
     * @ORM\Column(name="temps", type="boolean", nullable=false)
     */
    private $temps;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", nullable=false)
     */
    private $commentaire;

    /**
     * @var boolean
     *
     * @ORM\Column(name="defense", type="boolean", nullable=false)
     */
    private $defense;

    /**
     * @var boolean
     *
     * @ORM\Column(name="consommation", type="boolean", nullable=false)
     */
    private $consommation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tenue_route", type="boolean", nullable=false)
     */
    private $tenueRoute;

    /**
     * @var boolean
     *
     * @ORM\Column(name="puissance", type="boolean", nullable=false)
     */
    private $puissance;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix_plein", type="smallint", nullable=false)
     */
    private $prixPlein;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix_achat", type="integer", nullable=false)
     */
    private $prixAchat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rapidite", type="boolean", nullable=false)
     */
    private $rapidite;

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
     * @ORM\Column(name="grid", type="integer", nullable=false)
     */
    private $grid;

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
     * @return J17JigsCars
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
     * Set reservoir
     *
     * @param boolean $reservoir
     * @return J17JigsCars
     */
    public function setReservoir($reservoir)
    {
        $this->reservoir = $reservoir;

        return $this;
    }

    /**
     * Get reservoir
     *
     * @return boolean 
     */
    public function getReservoir()
    {
        return $this->reservoir;
    }

    /**
     * Set temps
     *
     * @param boolean $temps
     * @return J17JigsCars
     */
    public function setTemps($temps)
    {
        $this->temps = $temps;

        return $this;
    }

    /**
     * Get temps
     *
     * @return boolean 
     */
    public function getTemps()
    {
        return $this->temps;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return J17JigsCars
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
     * Set commentaire
     *
     * @param string $commentaire
     * @return J17JigsCars
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
     * Set defense
     *
     * @param boolean $defense
     * @return J17JigsCars
     */
    public function setDefense($defense)
    {
        $this->defense = $defense;

        return $this;
    }

    /**
     * Get defense
     *
     * @return boolean 
     */
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Set consommation
     *
     * @param boolean $consommation
     * @return J17JigsCars
     */
    public function setConsommation($consommation)
    {
        $this->consommation = $consommation;

        return $this;
    }

    /**
     * Get consommation
     *
     * @return boolean 
     */
    public function getConsommation()
    {
        return $this->consommation;
    }

    /**
     * Set tenueRoute
     *
     * @param boolean $tenueRoute
     * @return J17JigsCars
     */
    public function setTenueRoute($tenueRoute)
    {
        $this->tenueRoute = $tenueRoute;

        return $this;
    }

    /**
     * Get tenueRoute
     *
     * @return boolean 
     */
    public function getTenueRoute()
    {
        return $this->tenueRoute;
    }

    /**
     * Set puissance
     *
     * @param boolean $puissance
     * @return J17JigsCars
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

        return $this;
    }

    /**
     * Get puissance
     *
     * @return boolean 
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * Set prixPlein
     *
     * @param integer $prixPlein
     * @return J17JigsCars
     */
    public function setPrixPlein($prixPlein)
    {
        $this->prixPlein = $prixPlein;

        return $this;
    }

    /**
     * Get prixPlein
     *
     * @return integer 
     */
    public function getPrixPlein()
    {
        return $this->prixPlein;
    }

    /**
     * Set prixAchat
     *
     * @param integer $prixAchat
     * @return J17JigsCars
     */
    public function setPrixAchat($prixAchat)
    {
        $this->prixAchat = $prixAchat;

        return $this;
    }

    /**
     * Get prixAchat
     *
     * @return integer 
     */
    public function getPrixAchat()
    {
        return $this->prixAchat;
    }

    /**
     * Set rapidite
     *
     * @param boolean $rapidite
     * @return J17JigsCars
     */
    public function setRapidite($rapidite)
    {
        $this->rapidite = $rapidite;

        return $this;
    }

    /**
     * Get rapidite
     *
     * @return boolean 
     */
    public function getRapidite()
    {
        return $this->rapidite;
    }

    /**
     * Set idmagasin
     *
     * @param integer $idmagasin
     * @return J17JigsCars
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
     * @return J17JigsCars
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
     * @return J17JigsCars
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
     * @return J17JigsCars
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
     * @return J17JigsCars
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
     * Set grid
     *
     * @param integer $grid
     * @return J17JigsCars
     */
    public function setGrid($grid)
    {
        $this->grid = $grid;

        return $this;
    }

    /**
     * Get grid
     *
     * @return integer 
     */
    public function getGrid()
    {
        return $this->grid;
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
