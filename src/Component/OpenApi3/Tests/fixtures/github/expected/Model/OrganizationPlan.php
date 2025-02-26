<?php

namespace Github\Model;

class OrganizationPlan extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $space;
    /**
     * 
     *
     * @var int
     */
    protected $privateRepos;
    /**
     * 
     *
     * @var int
     */
    protected $filledSeats;
    /**
     * 
     *
     * @var int
     */
    protected $seats;
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSpace() : int
    {
        return $this->space;
    }
    /**
     * 
     *
     * @param int $space
     *
     * @return self
     */
    public function setSpace(int $space) : self
    {
        $this->initialized['space'] = true;
        $this->space = $space;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPrivateRepos() : int
    {
        return $this->privateRepos;
    }
    /**
     * 
     *
     * @param int $privateRepos
     *
     * @return self
     */
    public function setPrivateRepos(int $privateRepos) : self
    {
        $this->initialized['privateRepos'] = true;
        $this->privateRepos = $privateRepos;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFilledSeats() : int
    {
        return $this->filledSeats;
    }
    /**
     * 
     *
     * @param int $filledSeats
     *
     * @return self
     */
    public function setFilledSeats(int $filledSeats) : self
    {
        $this->initialized['filledSeats'] = true;
        $this->filledSeats = $filledSeats;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSeats() : int
    {
        return $this->seats;
    }
    /**
     * 
     *
     * @param int $seats
     *
     * @return self
     */
    public function setSeats(int $seats) : self
    {
        $this->initialized['seats'] = true;
        $this->seats = $seats;
        return $this;
    }
}