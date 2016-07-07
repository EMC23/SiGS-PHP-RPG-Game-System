<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsPlayers
 *
 * @ORM\Table(name="j17_jigs_players", uniqueConstraints={@ORM\UniqueConstraint(name="iduser", columns={"id"})})
 * @ORM\Entity
 */
class J17JigsPlayers
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

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
     * @var integer
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level;

    /**
     * @var integer
     *
     * @ORM\Column(name="xp", type="integer", nullable=false)
     */
    private $xp;

    /**
     * @var integer
     *
     * @ORM\Column(name="energy", type="integer", nullable=false)
     */
    private $energy;

    /**
     * @var integer
     *
     * @ORM\Column(name="statpoints", type="integer", nullable=false)
     */
    private $statpoints;

    /**
     * @var boolean
     *
     * @ORM\Column(name="health", type="boolean", nullable=false)
     */
    private $health;

    /**
     * @var boolean
     *
     * @ORM\Column(name="attack", type="boolean", nullable=false)
     */
    private $attack;

    /**
     * @var integer
     *
     * @ORM\Column(name="final_attack", type="integer", nullable=false)
     */
    private $finalAttack;

    /**
     * @var boolean
     *
     * @ORM\Column(name="defence", type="boolean", nullable=false)
     */
    private $defence;

    /**
     * @var integer
     *
     * @ORM\Column(name="final_defence", type="integer", nullable=false)
     */
    private $finalDefence;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_weapon", type="integer", nullable=false)
     */
    private $idWeapon;

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
     * @var integer
     *
     * @ORM\Column(name="intelligence", type="integer", nullable=false)
     */
    private $intelligence;

    /**
     * @var integer
     *
     * @ORM\Column(name="dexterity", type="integer", nullable=false)
     */
    private $dexterity;

    /**
     * @var boolean
     *
     * @ORM\Column(name="team", type="boolean", nullable=false)
     */
    private $team;

    /**
     * @var integer
     *
     * @ORM\Column(name="money", type="integer", nullable=false)
     */
    private $money;

    /**
     * @var boolean
     *
     * @ORM\Column(name="id_car", type="boolean", nullable=false)
     */
    private $idCar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="reservoir", type="boolean", nullable=false)
     */
    private $reservoir;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ammunition", type="boolean", nullable=false)
     */
    private $ammunition;

    /**
     * @var integer
     *
     * @ORM\Column(name="tempsplanque", type="integer", nullable=false)
     */
    private $tempsplanque;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="tempsmove", type="integer", nullable=false)
     */
    private $tempsmove;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=20, nullable=true)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255, nullable=false)
     */
    private $commentaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="bank", type="integer", nullable=false)
     */
    private $bank;

    /**
     * @var integer
     *
     * @ORM\Column(name="parrainage", type="integer", nullable=false)
     */
    private $parrainage;

    /**
     * @var integer
     *
     * @ORM\Column(name="stupefiant", type="integer", nullable=false)
     */
    private $stupefiant;

    /**
     * @var integer
     *
     * @ORM\Column(name="volevoiture", type="smallint", nullable=false)
     */
    private $volevoiture;

    /**
     * @var integer
     *
     * @ORM\Column(name="volearme", type="smallint", nullable=false)
     */
    private $volearme;

    /**
     * @var integer
     *
     * @ORM\Column(name="voleargent", type="smallint", nullable=false)
     */
    private $voleargent;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_attacks", type="integer", nullable=false)
     */
    private $nbrAttacks;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_kills", type="integer", nullable=false)
     */
    private $nbrKills;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_crops", type="integer", nullable=false)
     */
    private $nbrCrops;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_objs", type="integer", nullable=false)
     */
    private $nbrObjs;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_drills", type="integer", nullable=false)
     */
    private $nbrDrills;

    /**
     * @var integer
     *
     * @ORM\Column(name="active", type="integer", nullable=false)
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
     * @ORM\Column(name="empty", type="integer", nullable=false)
     */
    private $empty;

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
     * @var string
     *
     * @ORM\Column(name="flags", type="string", length=255, nullable=false)
     */
    private $flags;

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
     * @return J17JigsPlayers
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
     * Set posx
     *
     * @param boolean $posx
     * @return J17JigsPlayers
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
     * @return J17JigsPlayers
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
     * @return J17JigsPlayers
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
     * @return J17JigsPlayers
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
     * Set level
     *
     * @param integer $level
     * @return J17JigsPlayers
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
     * Set xp
     *
     * @param integer $xp
     * @return J17JigsPlayers
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
     * Set energy
     *
     * @param integer $energy
     * @return J17JigsPlayers
     */
    public function setEnergy($energy)
    {
        $this->energy = $energy;

        return $this;
    }

    /**
     * Get energy
     *
     * @return integer 
     */
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * Set statpoints
     *
     * @param integer $statpoints
     * @return J17JigsPlayers
     */
    public function setStatpoints($statpoints)
    {
        $this->statpoints = $statpoints;

        return $this;
    }

    /**
     * Get statpoints
     *
     * @return integer 
     */
    public function getStatpoints()
    {
        return $this->statpoints;
    }

    /**
     * Set health
     *
     * @param boolean $health
     * @return J17JigsPlayers
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
     * Set attack
     *
     * @param boolean $attack
     * @return J17JigsPlayers
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
     * Set finalAttack
     *
     * @param integer $finalAttack
     * @return J17JigsPlayers
     */
    public function setFinalAttack($finalAttack)
    {
        $this->finalAttack = $finalAttack;

        return $this;
    }

    /**
     * Get finalAttack
     *
     * @return integer 
     */
    public function getFinalAttack()
    {
        return $this->finalAttack;
    }

    /**
     * Set defence
     *
     * @param boolean $defence
     * @return J17JigsPlayers
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
     * Set finalDefence
     *
     * @param integer $finalDefence
     * @return J17JigsPlayers
     */
    public function setFinalDefence($finalDefence)
    {
        $this->finalDefence = $finalDefence;

        return $this;
    }

    /**
     * Get finalDefence
     *
     * @return integer 
     */
    public function getFinalDefence()
    {
        return $this->finalDefence;
    }

    /**
     * Set idWeapon
     *
     * @param integer $idWeapon
     * @return J17JigsPlayers
     */
    public function setIdWeapon($idWeapon)
    {
        $this->idWeapon = $idWeapon;

        return $this;
    }

    /**
     * Get idWeapon
     *
     * @return integer 
     */
    public function getIdWeapon()
    {
        return $this->idWeapon;
    }

    /**
     * Set strength
     *
     * @param integer $strength
     * @return J17JigsPlayers
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
     * Set speed
     *
     * @param integer $speed
     * @return J17JigsPlayers
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get speed
     *
     * @return integer 
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set intelligence
     *
     * @param integer $intelligence
     * @return J17JigsPlayers
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
     * Set dexterity
     *
     * @param integer $dexterity
     * @return J17JigsPlayers
     */
    public function setDexterity($dexterity)
    {
        $this->dexterity = $dexterity;

        return $this;
    }

    /**
     * Get dexterity
     *
     * @return integer 
     */
    public function getDexterity()
    {
        return $this->dexterity;
    }

    /**
     * Set team
     *
     * @param boolean $team
     * @return J17JigsPlayers
     */
    public function setTeam($team)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return boolean 
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Set money
     *
     * @param integer $money
     * @return J17JigsPlayers
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
     * Set idCar
     *
     * @param boolean $idCar
     * @return J17JigsPlayers
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
     * Set reservoir
     *
     * @param boolean $reservoir
     * @return J17JigsPlayers
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
     * Set ammunition
     *
     * @param boolean $ammunition
     * @return J17JigsPlayers
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
     * Set tempsplanque
     *
     * @param integer $tempsplanque
     * @return J17JigsPlayers
     */
    public function setTempsplanque($tempsplanque)
    {
        $this->tempsplanque = $tempsplanque;

        return $this;
    }

    /**
     * Get tempsplanque
     *
     * @return integer 
     */
    public function getTempsplanque()
    {
        return $this->tempsplanque;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return J17JigsPlayers
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
     * Set tempsmove
     *
     * @param integer $tempsmove
     * @return J17JigsPlayers
     */
    public function setTempsmove($tempsmove)
    {
        $this->tempsmove = $tempsmove;

        return $this;
    }

    /**
     * Get tempsmove
     *
     * @return integer 
     */
    public function getTempsmove()
    {
        return $this->tempsmove;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return J17JigsPlayers
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return J17JigsPlayers
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
     * Set bank
     *
     * @param integer $bank
     * @return J17JigsPlayers
     */
    public function setBank($bank)
    {
        $this->bank = $bank;

        return $this;
    }

    /**
     * Get bank
     *
     * @return integer 
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * Set parrainage
     *
     * @param integer $parrainage
     * @return J17JigsPlayers
     */
    public function setParrainage($parrainage)
    {
        $this->parrainage = $parrainage;

        return $this;
    }

    /**
     * Get parrainage
     *
     * @return integer 
     */
    public function getParrainage()
    {
        return $this->parrainage;
    }

    /**
     * Set stupefiant
     *
     * @param integer $stupefiant
     * @return J17JigsPlayers
     */
    public function setStupefiant($stupefiant)
    {
        $this->stupefiant = $stupefiant;

        return $this;
    }

    /**
     * Get stupefiant
     *
     * @return integer 
     */
    public function getStupefiant()
    {
        return $this->stupefiant;
    }

    /**
     * Set volevoiture
     *
     * @param integer $volevoiture
     * @return J17JigsPlayers
     */
    public function setVolevoiture($volevoiture)
    {
        $this->volevoiture = $volevoiture;

        return $this;
    }

    /**
     * Get volevoiture
     *
     * @return integer 
     */
    public function getVolevoiture()
    {
        return $this->volevoiture;
    }

    /**
     * Set volearme
     *
     * @param integer $volearme
     * @return J17JigsPlayers
     */
    public function setVolearme($volearme)
    {
        $this->volearme = $volearme;

        return $this;
    }

    /**
     * Get volearme
     *
     * @return integer 
     */
    public function getVolearme()
    {
        return $this->volearme;
    }

    /**
     * Set voleargent
     *
     * @param integer $voleargent
     * @return J17JigsPlayers
     */
    public function setVoleargent($voleargent)
    {
        $this->voleargent = $voleargent;

        return $this;
    }

    /**
     * Get voleargent
     *
     * @return integer 
     */
    public function getVoleargent()
    {
        return $this->voleargent;
    }

    /**
     * Set nbrAttacks
     *
     * @param integer $nbrAttacks
     * @return J17JigsPlayers
     */
    public function setNbrAttacks($nbrAttacks)
    {
        $this->nbrAttacks = $nbrAttacks;

        return $this;
    }

    /**
     * Get nbrAttacks
     *
     * @return integer 
     */
    public function getNbrAttacks()
    {
        return $this->nbrAttacks;
    }

    /**
     * Set nbrKills
     *
     * @param integer $nbrKills
     * @return J17JigsPlayers
     */
    public function setNbrKills($nbrKills)
    {
        $this->nbrKills = $nbrKills;

        return $this;
    }

    /**
     * Get nbrKills
     *
     * @return integer 
     */
    public function getNbrKills()
    {
        return $this->nbrKills;
    }

    /**
     * Set nbrCrops
     *
     * @param integer $nbrCrops
     * @return J17JigsPlayers
     */
    public function setNbrCrops($nbrCrops)
    {
        $this->nbrCrops = $nbrCrops;

        return $this;
    }

    /**
     * Get nbrCrops
     *
     * @return integer 
     */
    public function getNbrCrops()
    {
        return $this->nbrCrops;
    }

    /**
     * Set nbrObjs
     *
     * @param integer $nbrObjs
     * @return J17JigsPlayers
     */
    public function setNbrObjs($nbrObjs)
    {
        $this->nbrObjs = $nbrObjs;

        return $this;
    }

    /**
     * Get nbrObjs
     *
     * @return integer 
     */
    public function getNbrObjs()
    {
        return $this->nbrObjs;
    }

    /**
     * Set nbrDrills
     *
     * @param integer $nbrDrills
     * @return J17JigsPlayers
     */
    public function setNbrDrills($nbrDrills)
    {
        $this->nbrDrills = $nbrDrills;

        return $this;
    }

    /**
     * Get nbrDrills
     *
     * @return integer 
     */
    public function getNbrDrills()
    {
        return $this->nbrDrills;
    }

    /**
     * Set active
     *
     * @param integer $active
     * @return J17JigsPlayers
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return integer 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set timeKilled
     *
     * @param integer $timeKilled
     * @return J17JigsPlayers
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
     * Set empty
     *
     * @param integer $empty
     * @return J17JigsPlayers
     */
    public function setEmpty($empty)
    {
        $this->empty = $empty;

        return $this;
    }

    /**
     * Get empty
     *
     * @return integer 
     */
    public function getEmpty()
    {
        return $this->empty;
    }

    /**
     * Set messages
     *
     * @param string $messages
     * @return J17JigsPlayers
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
     * @return J17JigsPlayers
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
     * Set flags
     *
     * @param string $flags
     * @return J17JigsPlayers
     */
    public function setFlags($flags)
    {
        $this->flags = $flags;

        return $this;
    }

    /**
     * Get flags
     *
     * @return string 
     */
    public function getFlags()
    {
        return $this->flags;
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
