<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsSkills
 *
 * @ORM\Table(name="j17_jigs_skills", uniqueConstraints={@ORM\UniqueConstraint(name="iduser", columns={"iduser"})})
 * @ORM\Entity
 */
class J17JigsSkills
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
     * @ORM\Column(name="skill_1", type="integer", nullable=false)
     */
    private $skill1;

    /**
     * @var integer
     *
     * @ORM\Column(name="skill_2", type="integer", nullable=false)
     */
    private $skill2;

    /**
     * @var integer
     *
     * @ORM\Column(name="skill_3", type="integer", nullable=false)
     */
    private $skill3;

    /**
     * @var integer
     *
     * @ORM\Column(name="skill_4", type="integer", nullable=false)
     */
    private $skill4;

    /**
     * @var integer
     *
     * @ORM\Column(name="skill_5", type="integer", nullable=false)
     */
    private $skill5;

    /**
     * @var integer
     *
     * @ORM\Column(name="skill_6", type="integer", nullable=false)
     */
    private $skill6;

    /**
     * @var integer
     *
     * @ORM\Column(name="skill_7", type="integer", nullable=false)
     */
    private $skill7;

    /**
     * @var integer
     *
     * @ORM\Column(name="skill_8", type="integer", nullable=false)
     */
    private $skill8;

    /**
     * @var integer
     *
     * @ORM\Column(name="timer", type="integer", nullable=false)
     */
    private $timer;

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
     * @return J17JigsSkills
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
     * Set skill1
     *
     * @param integer $skill1
     * @return J17JigsSkills
     */
    public function setSkill1($skill1)
    {
        $this->skill1 = $skill1;

        return $this;
    }

    /**
     * Get skill1
     *
     * @return integer 
     */
    public function getSkill1()
    {
        return $this->skill1;
    }

    /**
     * Set skill2
     *
     * @param integer $skill2
     * @return J17JigsSkills
     */
    public function setSkill2($skill2)
    {
        $this->skill2 = $skill2;

        return $this;
    }

    /**
     * Get skill2
     *
     * @return integer 
     */
    public function getSkill2()
    {
        return $this->skill2;
    }

    /**
     * Set skill3
     *
     * @param integer $skill3
     * @return J17JigsSkills
     */
    public function setSkill3($skill3)
    {
        $this->skill3 = $skill3;

        return $this;
    }

    /**
     * Get skill3
     *
     * @return integer 
     */
    public function getSkill3()
    {
        return $this->skill3;
    }

    /**
     * Set skill4
     *
     * @param integer $skill4
     * @return J17JigsSkills
     */
    public function setSkill4($skill4)
    {
        $this->skill4 = $skill4;

        return $this;
    }

    /**
     * Get skill4
     *
     * @return integer 
     */
    public function getSkill4()
    {
        return $this->skill4;
    }

    /**
     * Set skill5
     *
     * @param integer $skill5
     * @return J17JigsSkills
     */
    public function setSkill5($skill5)
    {
        $this->skill5 = $skill5;

        return $this;
    }

    /**
     * Get skill5
     *
     * @return integer 
     */
    public function getSkill5()
    {
        return $this->skill5;
    }

    /**
     * Set skill6
     *
     * @param integer $skill6
     * @return J17JigsSkills
     */
    public function setSkill6($skill6)
    {
        $this->skill6 = $skill6;

        return $this;
    }

    /**
     * Get skill6
     *
     * @return integer 
     */
    public function getSkill6()
    {
        return $this->skill6;
    }

    /**
     * Set skill7
     *
     * @param integer $skill7
     * @return J17JigsSkills
     */
    public function setSkill7($skill7)
    {
        $this->skill7 = $skill7;

        return $this;
    }

    /**
     * Get skill7
     *
     * @return integer 
     */
    public function getSkill7()
    {
        return $this->skill7;
    }

    /**
     * Set skill8
     *
     * @param integer $skill8
     * @return J17JigsSkills
     */
    public function setSkill8($skill8)
    {
        $this->skill8 = $skill8;

        return $this;
    }

    /**
     * Get skill8
     *
     * @return integer 
     */
    public function getSkill8()
    {
        return $this->skill8;
    }

    /**
     * Set timer
     *
     * @param integer $timer
     * @return J17JigsSkills
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
