<?php

namespace Src\Entity;

//require_once('vendor/autoload.php');
class Weapons
{
    private string $title;
    private float $damage;


    public function __construct(float $damage, string $title)
    {
        $this->title = $title;
        $this->damage = $damage;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of damage
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * Set the value of damage
     *
     * @return  self
     */
    public function setDamage($damage)
    {
        $this->damage = $damage;

        return $this;
    }
}
