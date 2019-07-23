<?php


namespace src;


class Driver extends APerson
{
protected $ID_license;


    public function getIDLicense()
    {
        return $this->ID_license;
    }

    public function setIDLicense($ID_license ): void
    {
        $this->ID_license = $ID_license;
    }

}