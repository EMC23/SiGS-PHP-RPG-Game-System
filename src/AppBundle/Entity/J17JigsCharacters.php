<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsCharacters
 *
 * @ORM\Table(name="j17_jigs_characters")
 * @ORM\Entity
 */
class J17JigsCharacters
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="gid", type="integer", nullable=false)
     */
    private $gid;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=255, nullable=false)
     */
    private $avatar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var integer
     *
     * @ORM\Column(name="time_killed", type="integer", nullable=false)
     */
    private $timeKilled;

    /**
     * @var integer
     *
     * @ORM\Column(name="money", type="integer", nullable=false)
     */
    private $money;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", nullable=false)
     */
    private $comment;

    /**
     * @var boolean
     *
     * @ORM\Column(name="health", type="boolean", nullable=false)
     */
    private $health;

    /**
     * @var integer
     *
     * @ORM\Column(name="strength", type="integer", nullable=false)
     */
    private $strength;


    /**
     * @var integer
     *
     * @ORM\Column(name="speed", type="integer", nullable=false)
     */
    private $speed;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false)
     */
    private $type;


    /**
     * @var string
     *
     * @ORM\Column(name="history", type="string", nullable=false)
     */
    private $history;

    /**
     * @var string
     *
     * @ORM\Column(name="slack", type="string", nullable=false)
     */
    private $slack;


    /**
     * @var int
     *
     * @ORM\Column(name="aggression", type="integer", nullable=false)
     */
    private $aggression;



    /**
     * @var int
     *
     * @ORM\Column(name="contentment", type="integer", nullable=false)
     */
    private $contentment;

    /**
     * @var int
     *
     * @ORM\Column(name="bank", type="string", nullable=false)
     */
    private $bank;

    /**
     * @var boolean
     *
     * @ORM\Column(name="mood", type="boolean", nullable=false)
     */
    private $mood;

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
     * @ORM\Column(name="nbr_attacks", type="boolean", nullable=false)
     */
    private $nbrAttacks;

    /**
     * @var boolean
     *
     * @ORM\Column(name="nbr_kills", type="boolean", nullable=false)
     */
    private $nbrKills;

    /**
     * @var boolean
     *
     * @ORM\Column(name="posx", type="boolean", nullable=false)
     */
    private $posx;

    /**
     * @var boolean
     *
     * @ORM\Column(name="posy", type="boolean", nullable=false)
     */
    private $posy;

    /**
     * @var integer
     *
     * @ORM\Column(name="map", type="integer", nullable=false)
     */
    private $map;

    /**
     * @var integer
     *
     * @ORM\Column(name="grid", type="integer", nullable=false)
     */
    private $grid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="id_weapon", type="boolean", nullable=false)
     */
    private $idWeapon;

    /**
     * @var boolean
     *
     * @ORM\Column(name="id_car", type="boolean", nullable=false)
     */
    private $idCar;

    /**
     * @var integer
     *
     * @ORM\Column(name="xp", type="smallint", nullable=false)
     */
    private $xp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="discuter", type="boolean", nullable=false)
     */
    private $discuter;

    /**
     * @var boolean
     *
     * @ORM\Column(name="taxi", type="boolean", nullable=false)
     */
    private $taxi;

    /**
     * @var boolean
     *
     * @ORM\Column(name="level", type="boolean", nullable=false)
     */
    private $level;

    /**
     * @var int
     *
     * @ORM\Column(name="ammunition", type="integer", nullable=false)
     */
    private $ammunition;

    /**
     * @var integer
     *
     * @ORM\Column(name="intelligence", type="integer", nullable=false)
     */
    private $intelligence;

    /**
     * @var boolean
     *
     * @ORM\Column(name="empty", type="boolean", nullable=false)
     */
    private $empty;





















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
     * Set name
     *
     * @param string $name
     * @return J17JigsCharacters
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
     * Set speed
     *
     * @param string $speed
     * @return J17JigsCharacters
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getSpeed()
    {
        return $this->speed;
    }










    /**
     * Set gid
     *
     * @param integer $gid
     * @return J17JigsCharacters
     */
    public function setGid($gid)
    {
        $this->gid = $gid;

        return $this;
    }

    /**
     * Get gid
     *
     * @return integer 
     */
    public function getGid()
    {
        return $this->gid;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return J17JigsCharacters
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
     * Set active
     *
     * @param boolean $active
     * @return J17JigsCharacters
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set timeKilled
     *
     * @param integer $timeKilled
     * @return J17JigsCharacters
     */
    public function setTimeKilled($timeKilled)
    {
        $this->timeKilled = $timeKilled;

        return $this;
    }

    /**
     * Get timeKilled
     *
     * @return integer 
     */
    public function getTimeKilled()
    {
        return $this->timeKilled;
    }

    /**
     * Set money
     *
     * @param integer $money
     * @return J17JigsCharacters
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money
     *
     * @return integer 
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return J17JigsCharacters
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
     * Set health
     *
     * @param boolean $health
     * @return J17JigsCharacters
     */
    public function setHealth($health)
    {
        $this->health = $health;

        return $this;
    }

    /**
     * Get health
     *
     * @return boolean 
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * Set strenght
     *
     * @param integer $strength
     * @return J17JigsCharacters
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;

        return $this;
    }

    /**
     * Get strength
     *
     * @return integer 
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Set mood
     *
     * @param boolean $mood
     * @return J17JigsCharacters
     */
    public function setMood($mood)
    {
        $this->mood = $mood;

        return $this;
    }

    /**
     * Get mood
     *
     * @return boolean 
     */
    public function getMood()
    {
        return $this->mood;
    }

    /**
     * Set attack
     *
     * @param boolean $attack
     * @return J17JigsCharacters
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
     * @return J17JigsCharacters
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
     * Set nbrAttacks
     *
     * @param boolean $nbrAttacks
     * @return J17JigsCharacters
     */
    public function setNbrAttacks($nbrAttacks)
    {
        $this->nbrAttacks = $nbrAttacks;

        return $this;
    }

    /**
     * Get nbrAttacks
     *
     * @return boolean 
     */
    public function getNbrAttacks()
    {
        return $this->nbrAttacks;
    }

    /**
     * Set nbrKills
     *
     * @param boolean $nbrKills
     * @return J17JigsCharacters
     */
    public function setNbrKills($nbrKills)
    {
        $this->nbrKills = $nbrKills;

        return $this;
    }

    /**
     * Get nbrKills
     *
     * @return boolean 
     */
    public function getNbrKills()
    {
        return $this->nbrKills;
    }

    /**
     * Set posx
     *
     * @param boolean $posx
     * @return J17JigsCharacters
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
     * Set posy
     *
     * @param boolean $posy
     * @return J17JigsCharacters
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
     * Set map
     *
     * @param integer $map
     * @return J17JigsCharacters
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
     * Set grid
     *
     * @param integer $grid
     * @return J17JigsCharacters
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
     * Set idWeapon
     *
     * @param boolean $idWeapon
     * @return J17JigsCharacters
     */
    public function setIdWeapon($idWeapon)
    {
        $this->idWeapon = $idWeapon;

        return $this;
    }

    /**
     * Get idWeapon
     *
     * @return boolean 
     */
    public function getIdWeapon()
    {
        return $this->idWeapon;
    }

    /**
     * Set idCar
     *
     * @param boolean $idCar
     * @return J17JigsCharacters
     */
    public function setIdCar($idCar)
    {
        $this->idCar = $idCar;

        return $this;
    }

    /**
     * Get idCar
     *
     * @return boolean 
     */
    public function getIdCar()
    {
        return $this->idCar;
    }

    /**
     * Set xp
     *
     * @param integer $xp
     * @return J17JigsCharacters
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
     * Set discuter
     *
     * @param boolean $discuter
     * @return J17JigsCharacters
     */
    public function setDiscuter($discuter)
    {
        $this->discuter = $discuter;

        return $this;
    }

    /**
     * Get discuter
     *
     * @return boolean 
     */
    public function getDiscuter()
    {
        return $this->discuter;
    }

    /**
     * Set taxi
     *
     * @param boolean $taxi
     * @return J17JigsCharacters
     */
    public function setTaxi($taxi)
    {
        $this->taxi = $taxi;

        return $this;
    }

    /**
     * Get taxi
     *
     * @return boolean 
     */
    public function getTaxi()
    {
        return $this->taxi;
    }

    /**
     * Set level
     *
     * @param boolean $level
     * @return J17JigsCharacters
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return boolean 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set munition
     *
     * @param boolean $Ammunition
     * @return J17JigsCharacters
     */
    public function setAmmunition($ammunition)
    {
        $this->ammunition = $ammunition;

        return $this;
    }

    /**
     * Get ammunition
     *
     * @return boolean 
     */
    public function getAmmunition()
    {
        return $this->ammunition;
    }

    /**
     * Set intelligence
     *
     * @param integer $intelligence
     * @return J17JigsCharacters
     */
    public function setIntelligence($intelligence)
    {
        $this->intelligence = $intelligence;

        return $this;
    }

    /**
     * Get intelligence
     *
     * @return integer 
     */
    public function getIntelligence()
    {
        return $this->intelligence;
    }






    /**
     * Get history
     *
     * @return boolean 
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * Set empty
     *
     * @param boolean $history
     * @return J17JigsCharacters
     */
    public function setHistory($history)
    {
        $this->history = $history;

        return $this;
    }

    /**
     * Get slack
     *
     * @return boolean
     */
    public function getSlack()
    {
        return $this->slack;
    }

    /**
     * Set slack
     *
     * @param boolean $slack
     * @return J17JigsCharacters
     */
    public function setSlack($slack)
    {
        $this->slack = $slack;

        return $this;
    }

    /**
     * Set bank
     *
     * @param boolean $bank
     * @return J17JigsCharacters
     */
    public function setBank($bank)
    {
        $this->bank = $bank;

        return $this;
    }

    /**
     * Get Aggression
     *
     * @return boolean
     */
    public function getAggression()
    {
        return $this->aggression;
    }

    /**
     * Set bank
     *
     * @param  $contentment
     * @return J17JigsCharacters
     */
    public function setContentment($contentment)
    {
        $this->contentment = $contentment;

        return $this;
    }

    /**
     * Get Contentment
     *
     * @return boolean
     */
    public function getContentment()
    {
        return $this->contentment;
    }

    /**
     * Set bank
     *
     * @param  $aggression
     * @return J17JigsCharacters
     */
    public function setAggression($aggression)
    {
        $this->aggression = $aggression;

        return $this;
    }

    /**
     * Get bank
     *
     * @return boolean
     */
    public function getBank()
    {
        return $this->bank;
    }



    /**
     * Set published
     *
     * @param boolean $published
     * @return J17JigsCharacters
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
