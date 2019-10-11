<?php

namespace Nfq\Akademija;

class NotTyped {

    public function calculateHomeWorkSum(...$numbers): int {

        $sum = 0;

        foreach ($numbers as $num) {
            $sum += $num;
        }

        return $sum;
    }

}

