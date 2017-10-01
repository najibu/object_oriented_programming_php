<?php

class Math
{
    public static function add(...$nums)
    {
        return array_sum($nums);
    }
}


var_dump(Math::add(1, 2, 3, 4));
