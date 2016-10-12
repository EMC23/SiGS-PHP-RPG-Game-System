<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsBuildings
 *
 * @ORM\Table(name="j17_jigs_buildings")
 * @ORM\Entity
 */
class J17JigsBuildings
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="posy", type="boolean", nullable=false)
     */
    private $posy;

    /**
     * @var boolean
     *
     * @ORM\Column(name="posx", type="boolean", nullable=false)
     */
    private $posx;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", nullable=false)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="protection", type="smallint", nullable=false)
     */
    private $protection;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=false)
     */
    private $type;

    /**
     * @var boolean
     *
     * @ORM\Column(name="public", type="boolean", nullable=false)
     */
    private $public;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="xp", type="smallint", nullable=false)
     */
    private $xp;

    /**
     * @var integer
     *
     * @ORM\Column(name="cash", type="integer", nullable=false)
     */
    private $cash;


    /**
     * @var integer
     *
     * @ORM\Column(name="owner", type="integer", nullable=false)
     */
    private $owner;

    /**
     * @var integer
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="timer", type="integer", nullable=false)
     */
    private $timer;

    /**
     * @var integer
     *
     * @ORM\Column(name="grid", type="integer", nullable=false)
     */
    private $grid;

    /**
     * @var integer
     *
     * @ORM\Column(name="map", type="integer", nullable=false)
     */
    private $map;

    /**
     * @var string
     *
     * @ORM\Column(name="messages", type="string", length=255, nullable=false)
     */
    private $messages;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", nullable=false)
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
     * Set posy
     *
     * @param boolean $posy
     * @return J17JigsBuildings
     */
    public function setPosy($posy)
    {
        $this->posy = $posy;

        return $this;
    }

    /**
     * Get posy
     *
     * @return boolean 
     */
    public function getPosy()
    {
        return $this->posy;
    }

    /**
     * Set posx
     *
     * @param boolean $posx
     * @return J17JigsBuildings
     */
    public function setPosx($posx)
    {
        $this->posx = $posx;

        return $this;
    }

    /**
     * Get posx
     *
     * @return boolean 
     */
    public function getPosx()
    {
        return $this->posx;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return J17JigsBuildings
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
     * Set level
     *
     * @param integer $level
     * @return J17JigsBuildings
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return J17JigsBuildings
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set protection
     *
     * @param integer $protection
     * @return J17JigsBuildings
     */
    public function setProtection($protection)
    {
        $this->protection = $protection;

        return $this;
    }

    /**
     * Get protection
     *
     * @return integer 
     */
    public function getProtection()
    {
        return $this->protection;
    }

    /**
     * Set coffre
     *
     * @param integer $cash
     * @return J17JigsBuildings
     */
    public function setCash($cash)
    {
        $this->cash = $cash;

        return $this;
    }

    /**
     * Get cash
     *
     * @return integer 
     */
    public function getCash()
    {
        return $this->cash;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return J17JigsBuildings
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set public
     *
     * @param boolean $public
     * @return J17JigsBuildings
     */
    public function setPublic($public)
    {
        $this->public = $public;

        return $this;
    }

    /**
     * Get public
     *
     * @return boolean 
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return J17JigsBuildings
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
     * Set couleur
     *
     * @param string $couleur
     * @return J17JigsBuildings
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return string 
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set xp
     *
     * @param integer $xp
     * @return J17JigsBuildings
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
     * Set owner
     *
     * @param integer $owner
     * @return J17JigsBuildings
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return integer 
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set proprioEquipe
     *
     * @param integer $proprioEquipe
     * @return J17JigsBuildings
     */
    public function setProprioEquipe($proprioEquipe)
    {
        $this->proprioEquipe = $proprioEquipe;

        return $this;
    }

    /**
     * Get proprioEquipe
     *
     * @return integer 
     */
    public function getProprioEquipe()
    {
        return $this->proprioEquipe;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return J17JigsBuildings
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set timer
     *
     * @param integer $timer
     * @return J17JigsBuildings
     */
    public function setTimer($timer)
    {
        $this->timer = $timer;

        return $this;
    }

    /**
     * Get timer
     *
     * @return integer 
     */
    public function getTimer()
    {
        return $this->timer;
    }

    /**
     * Set acces
     *
     * @param boolean $acces
     * @return J17JigsBuildings
     */
    public function setAcces($acces)
    {
        $this->acces = $acces;

        return $this;
    }

    /**
     * Get acces
     *
     * @return boolean 
     */
    public function getAcces()
    {
        return $this->acces;
    }

    /**
     * Set grid
     *
     * @param integer $grid
     * @return J17JigsBuildings
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
     * Set map
     *
     * @param integer $map
     * @return J17JigsBuildings
     */
    public function setMap($map)
    {
        $this->map = $map;

        return $this;
    }

    /**
     * Get map
     *
     * @return integer 
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Set messages
     *
     * @param string $messages
     * @return J17JigsBuildings
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * Get messages
     *
     * @return string 
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return J17JigsBuildings
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
