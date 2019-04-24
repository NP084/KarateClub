<?php


namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;


class Child
{
    protected $phone;

    protected $user;

    public function __construct()
    {
        $this->user = new ArrayCollection();
    }

    public function getphone()
    {
        return $this->phone;
    }

    public function setphone($phone)
    {
        $this->phone = $phone;
    }

    public function getuser()
    {
        return $this->user;
    }
}