<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsPages
 *
 * @ORM\Table(name="j17_jigs_pages")
 * @ORM\Entity
 */
class J17JigsPages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level;

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
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="string", length=50, nullable=false)
     */
    private $details;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=false)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="owner", type="integer", nullable=false)
     */
    private $owner;

    /**
     * @var integer
     *
     * @ORM\Column(name="proprio_equipe", type="integer", nullable=false)
     */
    private $proprioEquipe;

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
     * @var boolean
     *
     * @ORM\Column(name="acces", type="boolean", nullable=false)
     */
    private $acces;

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
     * Set level
     *
     * @param integer $level
     * @return J17JigsPages
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
     * Set posy
     *
     * @param boolean $posy
     * @return J17JigsPages
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
     * @return J17JigsPages
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
     * @return J17JigsPages
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
     * Set type
     *
     * @param string $type
     * @return J17JigsPages
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
     * Set details
     *
     * @param string $details
     * @return J17JigsPages
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string 
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return J17JigsPages
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
     * Set image
     *
     * @param string $image
     * @return J17JigsPages
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
     * Set owner
     *
     * @param integer $owner
     * @return J17JigsPages
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
     * @return J17JigsPages
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
     * @return J17JigsPages
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
     * @return J17JigsPages
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
     * @return J17JigsPages
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
     * @return J17JigsPages
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
     * @return J17JigsPages
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
     * Set published
     *
     * @param integer $published
     * @return J17JigsPages
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
