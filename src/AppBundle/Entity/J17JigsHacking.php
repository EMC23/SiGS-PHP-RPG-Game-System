<?php

namespace AppBundle\Entity;

/**
 * J17JigsHacking
 */
class J17JigsHacking
{
    /**
     * @var integer
     */
    private $level = '1';

    /**
     * @var integer
     */
    private $system = '1';

    /**
     * @var integer
     */
    private $speed = '1';

    /**
     * @var integer
     */
    private $firewall;

    /**
     * @var integer
     */
    private $modem;

    /**
     * @var integer
     */
    private $trace;

    /**
     * @var integer
     */
    private $hackCount;

    /**
     * @var integer
     */
    private $traceCount;

    /**
     * @var integer
     */
    private $scan;

    /**
     * @var integer
     */
    private $decrypt;

    /**
     * @var integer
     */
    private $connect;

    /**
     * @var integer
     */
    private $bouncedLinks;

    /**
     * @var integer
     */
    private $killTrace;

    /**
     * @var string
     */
    private $files;

    /**
     * @var integer
     */
    private $playerId;


    /**
     * Set level
     *
     * @param integer $level
     *
     * @return J17JigsHacking
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
     * Set system
     *
     * @param integer $system
     *
     * @return J17JigsHacking
     */
    public function setSystem($system)
    {
        $this->system = $system;

        return $this;
    }

    /**
     * Get system
     *
     * @return integer
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Set speed
     *
     * @param integer $speed
     *
     * @return J17JigsHacking
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
     * Set firewall
     *
     * @param integer $firewall
     *
     * @return J17JigsHacking
     */
    public function setFirewall($firewall)
    {
        $this->firewall = $firewall;

        return $this;
    }

    /**
     * Get firewall
     *
     * @return integer
     */
    public function getFirewall()
    {
        return $this->firewall;
    }

    /**
     * Set modem
     *
     * @param integer $modem
     *
     * @return J17JigsHacking
     */
    public function setModem($modem)
    {
        $this->modem = $modem;

        return $this;
    }

    /**
     * Get modem
     *
     * @return integer
     */
    public function getModem()
    {
        return $this->modem;
    }

    /**
     * Set trace
     *
     * @param integer $trace
     *
     * @return J17JigsHacking
     */
    public function setTrace($trace)
    {
        $this->trace = $trace;

        return $this;
    }

    /**
     * Get trace
     *
     * @return integer
     */
    public function getTrace()
    {
        return $this->trace;
    }

    /**
     * Set hackCount
     *
     * @param integer $hackCount
     *
     * @return J17JigsHacking
     */
    public function setHackCount($hackCount)
    {
        $this->hackCount = $hackCount;

        return $this;
    }

    /**
     * Get hackCount
     *
     * @return integer
     */
    public function getHackCount()
    {
        return $this->hackCount;
    }

    /**
     * Set traceCount
     *
     * @param integer $traceCount
     *
     * @return J17JigsHacking
     */
    public function setTraceCount($traceCount)
    {
        $this->traceCount = $traceCount;

        return $this;
    }

    /**
     * Get traceCount
     *
     * @return integer
     */
    public function getTraceCount()
    {
        return $this->traceCount;
    }

    /**
     * Set scan
     *
     * @param integer $scan
     *
     * @return J17JigsHacking
     */
    public function setScan($scan)
    {
        $this->scan = $scan;

        return $this;
    }

    /**
     * Get scan
     *
     * @return integer
     */
    public function getScan()
    {
        return $this->scan;
    }

    /**
     * Set decrypt
     *
     * @param integer $decrypt
     *
     * @return J17JigsHacking
     */
    public function setDecrypt($decrypt)
    {
        $this->decrypt = $decrypt;

        return $this;
    }

    /**
     * Get decrypt
     *
     * @return integer
     */
    public function getDecrypt()
    {
        return $this->decrypt;
    }

    /**
     * Set connect
     *
     * @param integer $connect
     *
     * @return J17JigsHacking
     */
    public function setConnect($connect)
    {
        $this->connect = $connect;

        return $this;
    }

    /**
     * Get connect
     *
     * @return integer
     */
    public function getConnect()
    {
        return $this->connect;
    }

    /**
     * Set bouncedLinks
     *
     * @param integer $bouncedLinks
     *
     * @return J17JigsHacking
     */
    public function setBouncedLinks($bouncedLinks)
    {
        $this->bouncedLinks = $bouncedLinks;

        return $this;
    }

    /**
     * Get bouncedLinks
     *
     * @return integer
     */
    public function getBouncedLinks()
    {
        return $this->bouncedLinks;
    }

    /**
     * Set killTrace
     *
     * @param integer $killTrace
     *
     * @return J17JigsHacking
     */
    public function setKillTrace($killTrace)
    {
        $this->killTrace = $killTrace;

        return $this;
    }

    /**
     * Get killTrace
     *
     * @return integer
     */
    public function getKillTrace()
    {
        return $this->killTrace;
    }

    /**
     * Set files
     *
     * @param string $files
     *
     * @return J17JigsHacking
     */
    public function setFiles($files)
    {
        $this->files = $files;

        return $this;
    }

    /**
     * Get files
     *
     * @return string
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Get playerId
     *
     * @return integer
     */
    public function getPlayerId()
    {
        return $this->playerId;
    }
}

