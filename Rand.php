<?php

namespace Mbacher\RandomBool;

/**
 * @return bool A random bool
 */
class Rand
{
    public function getBool(): bool {
        $gen = rand(0,1);

        return $gen === 1;
    }
}