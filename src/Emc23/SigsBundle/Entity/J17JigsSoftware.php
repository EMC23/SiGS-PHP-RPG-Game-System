<?php

namespace Emc23\SigsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * J17JigsSoftware
 *
 * @ORM\Table(name="j17_jigs_software")
 * @ORM\Entity
 */
class J17JigsSoftware
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
     * @ORM\Column(name="quantity_1", type="integer", nullable=false)
     */
    private $quantity1;

    /**
     * @var integer
     *
     * @ORM\Column(name="price_1", type="integer", nullable=false)
     */
    private $price1;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_2", type="integer", nullable=false)
     */
    private $quantity2;

    /**
     * @var integer
     *
     * @ORM\Column(name="price_2", type="integer", nullable=false)
     */
    private $price2;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_3", type="integer", nullable=false)
     */
    private $quantity3;

    /**
     * @var integer
     *
     * @ORM\Column(name="price_3", type="integer", nullable=false)
     */
    private $price3;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_4", type="integer", nullable=false)
     */
    private $quantity4;

    /**
     * @var integer
     *
     * @ORM\Column(name="price_4", type="integer", nullable=false)
     */
    private $price4;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_5", type="integer", nullable=false)
     */
    private $quantity5;

    /**
     * @var integer
     *
     * @ORM\Column(name="price_5", type="integer", nullable=false)
     */
    private $price5;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_6", type="integer", nullable=false)
     */
    private $quantity6;

    /**
     * @var integer
     *
     * @ORM\Column(name="price_6", type="integer", nullable=false)
     */
    private $price6;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_7", type="integer", nullable=false)
     */
    private $quantity7;

    /**
     * @var integer
     *
     * @ORM\Column(name="price_7", type="integer", nullable=false)
     */
    private $price7;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_8", type="integer", nullable=false)
     */
    private $quantity8;

    /**
     * @var integer
     *
     * @ORM\Column(name="price_8", type="integer", nullable=false)
     */
    private $price8;

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
     * @return J17JigsSoftware
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
     * Set quantity1
     *
     * @param integer $quantity1
     * @return J17JigsSoftware
     */
    public function setQuantity1($quantity1)
    {
        $this->quantity1 = $quantity1;

        return $this;
    }

    /**
     * Get quantity1
     *
     * @return integer 
     */
    public function getQuantity1()
    {
        return $this->quantity1;
    }

    /**
     * Set price1
     *
     * @param integer $price1
     * @return J17JigsSoftware
     */
    public function setPrice1($price1)
    {
        $this->price1 = $price1;

        return $this;
    }

    /**
     * Get price1
     *
     * @return integer 
     */
    public function getPrice1()
    {
        return $this->price1;
    }

    /**
     * Set quantity2
     *
     * @param integer $quantity2
     * @return J17JigsSoftware
     */
    public function setQuantity2($quantity2)
    {
        $this->quantity2 = $quantity2;

        return $this;
    }

    /**
     * Get quantity2
     *
     * @return integer 
     */
    public function getQuantity2()
    {
        return $this->quantity2;
    }

    /**
     * Set price2
     *
     * @param integer $price2
     * @return J17JigsSoftware
     */
    public function setPrice2($price2)
    {
        $this->price2 = $price2;

        return $this;
    }

    /**
     * Get price2
     *
     * @return integer 
     */
    public function getPrice2()
    {
        return $this->price2;
    }

    /**
     * Set quantity3
     *
     * @param integer $quantity3
     * @return J17JigsSoftware
     */
    public function setQuantity3($quantity3)
    {
        $this->quantity3 = $quantity3;

        return $this;
    }

    /**
     * Get quantity3
     *
     * @return integer 
     */
    public function getQuantity3()
    {
        return $this->quantity3;
    }

    /**
     * Set price3
     *
     * @param integer $price3
     * @return J17JigsSoftware
     */
    public function setPrice3($price3)
    {
        $this->price3 = $price3;

        return $this;
    }

    /**
     * Get price3
     *
     * @return integer 
     */
    public function getPrice3()
    {
        return $this->price3;
    }

    /**
     * Set quantity4
     *
     * @param integer $quantity4
     * @return J17JigsSoftware
     */
    public function setQuantity4($quantity4)
    {
        $this->quantity4 = $quantity4;

        return $this;
    }

    /**
     * Get quantity4
     *
     * @return integer 
     */
    public function getQuantity4()
    {
        return $this->quantity4;
    }

    /**
     * Set price4
     *
     * @param integer $price4
     * @return J17JigsSoftware
     */
    public function setPrice4($price4)
    {
        $this->price4 = $price4;

        return $this;
    }

    /**
     * Get price4
     *
     * @return integer 
     */
    public function getPrice4()
    {
        return $this->price4;
    }

    /**
     * Set quantity5
     *
     * @param integer $quantity5
     * @return J17JigsSoftware
     */
    public function setQuantity5($quantity5)
    {
        $this->quantity5 = $quantity5;

        return $this;
    }

    /**
     * Get quantity5
     *
     * @return integer 
     */
    public function getQuantity5()
    {
        return $this->quantity5;
    }

    /**
     * Set price5
     *
     * @param integer $price5
     * @return J17JigsSoftware
     */
    public function setPrice5($price5)
    {
        $this->price5 = $price5;

        return $this;
    }

    /**
     * Get price5
     *
     * @return integer 
     */
    public function getPrice5()
    {
        return $this->price5;
    }

    /**
     * Set quantity6
     *
     * @param integer $quantity6
     * @return J17JigsSoftware
     */
    public function setQuantity6($quantity6)
    {
        $this->quantity6 = $quantity6;

        return $this;
    }

    /**
     * Get quantity6
     *
     * @return integer 
     */
    public function getQuantity6()
    {
        return $this->quantity6;
    }

    /**
     * Set price6
     *
     * @param integer $price6
     * @return J17JigsSoftware
     */
    public function setPrice6($price6)
    {
        $this->price6 = $price6;

        return $this;
    }

    /**
     * Get price6
     *
     * @return integer 
     */
    public function getPrice6()
    {
        return $this->price6;
    }

    /**
     * Set quantity7
     *
     * @param integer $quantity7
     * @return J17JigsSoftware
     */
    public function setQuantity7($quantity7)
    {
        $this->quantity7 = $quantity7;

        return $this;
    }

    /**
     * Get quantity7
     *
     * @return integer 
     */
    public function getQuantity7()
    {
        return $this->quantity7;
    }

    /**
     * Set price7
     *
     * @param integer $price7
     * @return J17JigsSoftware
     */
    public function setPrice7($price7)
    {
        $this->price7 = $price7;

        return $this;
    }

    /**
     * Get price7
     *
     * @return integer 
     */
    public function getPrice7()
    {
        return $this->price7;
    }

    /**
     * Set quantity8
     *
     * @param integer $quantity8
     * @return J17JigsSoftware
     */
    public function setQuantity8($quantity8)
    {
        $this->quantity8 = $quantity8;

        return $this;
    }

    /**
     * Get quantity8
     *
     * @return integer 
     */
    public function getQuantity8()
    {
        return $this->quantity8;
    }

    /**
     * Set price8
     *
     * @param integer $price8
     * @return J17JigsSoftware
     */
    public function setPrice8($price8)
    {
        $this->price8 = $price8;

        return $this;
    }

    /**
     * Get price8
     *
     * @return integer 
     */
    public function getPrice8()
    {
        return $this->price8;
    }

    /**
     * Set timer
     *
     * @param integer $timer
     * @return J17JigsSoftware
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
