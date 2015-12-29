<?php

namespace Emc23\SigsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsMonsterTypes
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class J17JigsMonsterTypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


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
     * @var integer
     */
    private $type = '1';

    /**
     * @var integer
     */
    private $health = '100';

    /**
     * @var integer
     */
    private $map = '1';

    /**
     * @var integer
     */
    private $grid = '99';

    /**
     * @var integer
     */
    private $x;

    /**
     * @var integer
     */
    private $y;


    /**
     * Set type
     *
     * @param integer $type
     *
     * @return J17JigsMonsters
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set health
     *
     * @param integer $health
     *
     * @return J17JigsMonsters
     */
    public function setHealth($health)
    {
        $this->health = $health;

        return $this;
    }

    /**
     * Get health
     *
     * @return integer
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * Set map
     *
     * @param integer $map
     *
     * @return J17JigsMonsters
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
     *
     * @return J17JigsMonsters
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
     * Set x
     *
     * @param integer $x
     *
     * @return J17JigsMonsters
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get x
     *
     * @return integer
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set y
     *
     * @param integer $y
     *
     * @return J17JigsMonsters
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Get y
     *
     * @return integer
     */
    public function getY()
    {
        return $this->y;
    }
    /**
     * @var string
     */
    private $name = '';

    /**
     * @var integer
     */
    private $level = '0';

    /**
     * @var string
     */
    private $avatar = 'noimage.png';

    /**
     * @var string
     */
    private $spritesheet;

    /**
     * @var integer
     */
    private $cellwidth = '32';

    /**
     * @var integer
     */
    private $cellheight = '32';

    /**
     * @var integer
     */
    private $numberofcells = '16';

    /**
     * @var boolean
     */
    private $active = '1';

    /**
     * @var integer
     */
    private $money = '0';

    /**
     * @var integer
     */
    private $bank = '1000';

    /**
     * @var string
     */
    private $comment;

    /**
     * @var string
     */
    private $history;

    /**
     * @var boolean
     */
    private $maxhealth = '0';

    /**
     * @var integer
     */
    private $slack = '100';

    /**
     * @var integer
     */
    private $mood = '33';

    /**
     * @var boolean
     */
    private $aggression = '0';

    /**
     * @var boolean
     */
    private $attack = '0';

    /**
     * @var boolean
     */
    private $defence = '0';

    /**
     * @var integer
     */
    private $nbrAttacks = '1';

    /**
     * @var boolean
     */
    private $nbrKills = '1';

    /**
     * @var boolean
     */
    private $idWeapon = '2';

    /**
     * @var integer
     */
    private $xp = '0';

    /**
     * @var boolean
     */
    private $discuter = '0';

    /**
     * @var boolean
     */
    private $ammunition = '0';

    /**
     * @var integer
     */
    private $intelligence = '30';

    /**
     * @var integer
     */
    private $strength = '30';

    /**
     * @var integer
     */
    private $speed = '30';

    /**
     * @var boolean
     */
    private $empty = '1';

    /**
     * @var boolean
     */
    private $published = '1';


    /**
     * Set name
     *
     * @param string $name
     *
     * @return J17JigsMonsterTypes
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
     *
     * @return J17JigsMonsterTypes
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
     * Set avatar
     *
     * @param string $avatar
     *
     * @return J17JigsMonsterTypes
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
     * Set spritesheet
     *
     * @param string $spritesheet
     *
     * @return J17JigsMonsterTypes
     */
    public function setSpritesheet($spritesheet)
    {
        $this->spritesheet = $spritesheet;

        return $this;
    }

    /**
     * Get spritesheet
     *
     * @return string
     */
    public function getSpritesheet()
    {
        return $this->spritesheet;
    }

    /**
     * Set cellwidth
     *
     * @param integer $cellwidth
     *
     * @return J17JigsMonsterTypes
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
     * @return J17JigsMonsterTypes
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
     * Set numberofcells
     *
     * @param integer $numberofcells
     *
     * @return J17JigsMonsterTypes
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

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return J17JigsMonsterTypes
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
     * Set money
     *
     * @param integer $money
     *
     * @return J17JigsMonsterTypes
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
     * Set bank
     *
     * @param integer $bank
     *
     * @return J17JigsMonsterTypes
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
     * Set comment
     *
     * @param string $comment
     *
     * @return J17JigsMonsterTypes
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
     * Set history
     *
     * @param string $history
     *
     * @return J17JigsMonsterTypes
     */
    public function setHistory($history)
    {
        $this->history = $history;

        return $this;
    }

    /**
     * Get history
     *
     * @return string
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * Set maxhealth
     *
     * @param boolean $maxhealth
     *
     * @return J17JigsMonsterTypes
     */
    public function setMaxhealth($maxhealth)
    {
        $this->maxhealth = $maxhealth;

        return $this;
    }

    /**
     * Get maxhealth
     *
     * @return boolean
     */
    public function getMaxhealth()
    {
        return $this->maxhealth;
    }

    /**
     * Set slack
     *
     * @param integer $slack
     *
     * @return J17JigsMonsterTypes
     */
    public function setSlack($slack)
    {
        $this->slack = $slack;

        return $this;
    }

    /**
     * Get slack
     *
     * @return integer
     */
    public function getSlack()
    {
        return $this->slack;
    }

    /**
     * Set mood
     *
     * @param integer $mood
     *
     * @return J17JigsMonsterTypes
     */
    public function setMood($mood)
    {
        $this->mood = $mood;

        return $this;
    }

    /**
     * Get mood
     *
     * @return integer
     */
    public function getMood()
    {
        return $this->mood;
    }

    /**
     * Set aggression
     *
     * @param boolean $aggression
     *
     * @return J17JigsMonsterTypes
     */
    public function setAggression($aggression)
    {
        $this->aggression = $aggression;

        return $this;
    }

    /**
     * Get aggression
     *
     * @return boolean
     */
    public function getAggression()
    {
        return $this->aggression;
    }

    /**
     * Set attack
     *
     * @param boolean $attack
     *
     * @return J17JigsMonsterTypes
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
     *
     * @return J17JigsMonsterTypes
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
     * @param integer $nbrAttacks
     *
     * @return J17JigsMonsterTypes
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
     * @param boolean $nbrKills
     *
     * @return J17JigsMonsterTypes
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
     * Set idWeapon
     *
     * @param boolean $idWeapon
     *
     * @return J17JigsMonsterTypes
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
     * Set xp
     *
     * @param integer $xp
     *
     * @return J17JigsMonsterTypes
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
     *
     * @return J17JigsMonsterTypes
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
     * Set ammunition
     *
     * @param boolean $ammunition
     *
     * @return J17JigsMonsterTypes
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
     *
     * @return J17JigsMonsterTypes
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
     * Set strength
     *
     * @param integer $strength
     *
     * @return J17JigsMonsterTypes
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
     *
     * @return J17JigsMonsterTypes
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
     * Set empty
     *
     * @param boolean $empty
     *
     * @return J17JigsMonsterTypes
     */
    public function setEmpty($empty)
    {
        $this->empty = $empty;

        return $this;
    }

    /**
     * Get empty
     *
     * @return boolean
     */
    public function getEmpty()
    {
        return $this->empty;
    }

    /**
     * Set published
     *
     * @param boolean $published
     *
     * @return J17JigsMonsterTypes
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
}