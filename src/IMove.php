<?php

namespace src;
interface IMove
{
    public function move_forward();
    public function move_backward();
    public function turn_left();
    public function turn_right();
    public function speed_up();
    public function speed_down();
}