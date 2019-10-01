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

}
