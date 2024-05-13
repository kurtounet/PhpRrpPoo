<?php

namespace Src\Entity;

//require_once('vendor/autoload.php');
class Stats
{
    private float $atk;
    private float $def;
    private float $vit;
    private float $pv;
    private float $mana;

    public function __construct(float $pv, float $vit, float $def, float $atk, float $mana)
    {
        $this->atk = $atk;
        $this->def = $def;
        $this->vit = $vit;
        $this->pv = $pv;
        $this->mana = $mana;
    }


    /**
     * Get the value of atk
     */
    public function getAtk()
    {
        return $this->atk;
    }

    /**
     * Set the value of atk
     *
     * @return  self
     */
    public function setAtk($atk)
    {
        $this->atk = $atk;

        return $this;
    }

    /**
     * Get the value of def
     */
    public function getDef()
    {
        return $this->def;
    }

    /**
     * Set the value of def
     *
     * @return  self
     */
    public function setDef($def)
    {
        $this->def = $def;

        return $this;
    }

    /**
     * Get the value of vit
     */
    public function getVit()
    {
        return $this->vit;
    }

    /**
     * Set the value of vit
     *
     * @return  self
     */
    public function setVit($vit)
    {
        $this->vit = $vit;

        return $this;
    }

    /**
     * Get the value of pv
     */
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Set the value of pv
     *
     * @return  self
     */
    public function setPv($pv)
    {
        $this->pv = $pv;

        return $this;
    }

    /**
     * Get the value of mana
     */
    public function getMana()
    {
        return $this->mana;
    }

    /**
     * Set the value of mana
     *
     * @return  self
     */
    public function setMana($mana)
    {
        $this->mana = $mana;

        return $this;
    }
}
