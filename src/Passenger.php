<?php


namespace src;


class Passenger extends APerson
{
protected $weight;


    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight): void
    {

        $this->weight = $weight;
    }
}