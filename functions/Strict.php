<?php
declare(strict_types=1);

namespace Nfq\Akademija;


class Strict {

    public function calculateHomeWorkSum(...$numbers): int {

        $sum = 0;

        foreach ($numbers as $num) {

            $sum += $num;

        }

        return (int)$sum;
    }
}


