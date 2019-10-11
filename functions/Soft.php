<?php

namespace Nfq\Akademija;

class Soft {

    public function calculateHomeWorkSum(int ...$numbers): int {

        $sum = 0;

        for($i = 0 ; $i < func_num_args(); $i++) {
            $sum += func_get_arg($i);
        }

        return $sum;
    }
}


