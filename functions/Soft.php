<?php

namespace Nfq\Akademija;

class Soft {

    public function calculateHomeWorkSum(int ...$numbers): int {

        $sum = 0;

        foreach ($numbers as $num) {
            $sum += $num;
        }

        return $sum;
    }
}


