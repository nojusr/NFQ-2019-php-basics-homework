<?php

namespace Nfq\Akademija;

class NotTyped {

    public function calculateHomeWorkSum(...$numbers): int {

        $sum = 0;

        for($i = 0; $i < func_num_args(); $i++) {
            $sum += func_get_arg($i);
        }

        return $sum;
    }

}

