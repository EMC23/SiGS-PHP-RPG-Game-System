<?php

namespace Emc23\SigsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsFeedback
 *
 * @ORM\Table(name="j17_jigs_feedback", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id", "number"})})
 * @ORM\Entity
 */
class J17JigsFeedback
{
    /**
     * @var integer
     *
     * @ORM\Column(name="number", type="integer", nullable=false)
     */
    private $number;

    /**
     * @var integer
     *
     * @ORM\Column(name="user", type="integer", nullable=false)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="feedback", type="string", length=255, nullable=false)
     */
    private $feedback;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set number
     *
     * @param integer $number
     * @return J17JigsFeedback
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set user
     *
     * @param integer $user
     * @return J17JigsFeedback
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return integer 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set feedback
     *
     * @param string $feedback
     * @return J17JigsFeedback
     */
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;

        return $this;
    }

    /**
     * Get feedback
     *
     * @return string 
     */
    public function getFeedback()
    {
        return $this->feedback;
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
