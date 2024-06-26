<?php

namespace Src\Entity;

//require_once('vendor/autoload.php');
class Skill
{
    private string $title;
    private float $damage;
    private float $cost; // energie utilisée pour une attaque

    public function __construct(float $damage, float $cost, string $title)
    {
        $this->damage = $damage;
        $this->cost = $cost;
        $this->title = $title;
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




    /**
     * Get the value of cost
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set the value of cost
     *
     * @return  self
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }
}
