<?php

namespace App;

class Calculator
{

    public function sum(...$values)
    {
        $s = 0;

        foreach ($values as $value) {
            $s += $value;
        }

        return $s;
    }

    public function pow($base, $exp)
    {
        return pow($base, $exp);
    }

    public function minus($a, $b)
    {
        return $a-$b;
    }

    public function multiply($a, $b)
    {
        return $a*$b;
    }

    public function split_up($a, $b)
    {
        return $a/$b;
    }

    public function percent($a, $b)
    {
        return $a%$b;
    }

    public function equally($a, $b)
    {
        if ($a == $b) {
            return true;
        } else {
            return false;
        }
    }

    public function more($a, $b)
    {
        if ($a > $b) {
            return true;
        } else {
            return false;
        }
    }

    public function less($a, $b)
    {
        if ($a < $b) {
            return true;
        } else {
            return false;
        }
    }

    function sort_up($array)
    {
        sort($array);
        return $array;
    }

    function reverse($array)
    {
        $reverse_array = array_reverse($array);
        return $reverse_array;
    }

    function add_one($array)
    {
        $array[array_keys($array)[1]]++;
        return $array;
        // $array[1] = $array[1] + 1;
        // return $array;
    }
}
