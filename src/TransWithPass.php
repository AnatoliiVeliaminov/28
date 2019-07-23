<?php


namespace src;


class TransWithPass extends ATransport
{
protected $passenger;

    public function getPassenger(): APerson
    {
        return $this->passenger;
    }

    public function setPassenger(APerson $passenger): void
    {
        $this->passenger = $passenger;
    }
}