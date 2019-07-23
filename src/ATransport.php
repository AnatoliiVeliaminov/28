<?php


namespace src;


abstract class ATransport implements IMove {

    protected $driver;

    public function getDriver(): APerson
    {
        return $this->driver;
    }

    public function setDriver(APerson $driver): void
    {
        $this->driver = $driver;
        echo  $this->driver->getName()."<br>";
    }

    public function move_forward()
    {
        echo "forward"."<br>";
    }

    public function move_backward()
    {
        echo "back <br>";
    }

    public function turn_left()
    {
        echo "left <br>";
    }

    public function turn_right()
    {
        echo "right <br>";
    }

    public function speed_up()
    {
        echo "speed increase <br> ";
    }

    public function speed_down()
    {
        echo "speed reduce <br>";
    }
}

