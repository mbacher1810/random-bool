<?php

namespace Mbacher\RandomBool;

/**
 * @return bool A random bool
 */
class Rand
{
    public function getBool(): bool {
        $gen = rand(0,1);

        if ($gen === 1) {
            return true;
        }
        else
        {
            return false;
        }

        // return $gen === 1;
    }
}