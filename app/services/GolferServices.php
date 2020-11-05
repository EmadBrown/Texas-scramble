<?php


class GolferServices
{
    private $name;
    private $handicap = null;
    private $gender;

    function __construct($name, $handicap, $gender)
    {
        $this->name = $name;
        $this->handicap = $handicap;
        $this->gender = $gender;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHandicap()
    {
        return $this->handicap;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setHandicap($handicap)
    {
        $this->handicap = $handicap;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }


}