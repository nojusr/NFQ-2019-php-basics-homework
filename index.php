<?php

require_once(__DIR__."/vendor/autoload.php");


$notTyped = new Nfq\Akademija\NotTyped();
$soft = new Nfq\Akademija\Soft();
$strict = new Nfq\Akademija\Strict();

function calculateHomeWorkSum(...$numbers) {

    $sum = 0;

    for($i = 0 ; $i < func_num_args(); $i++) {
        $sum += func_get_arg($i);
    }

    return $sum;

}


echo "calculateHomeworkSum: ";
echo str_cli_color(calculateHomeWorkSum(3, 2.2, '1'), "f_red")."\n";

echo "Nfq\\Akademija\\NotTyped::calculateHomeWorkSum: ";
echo str_cli_color($notTyped::calculateHomeWorkSum(3, 2.2, '1'), "f_green")."\n";

echo "Nfq\\Akademija\\Soft::calculateHomeWorkSum: ";
echo str_cli_color($soft::calculateHomeWorkSum(3, 2.2, '1'), "f_blue")."\n";

echo "Nfq\\Akademija\\Strict::calculateHomeWorkSum: ";
echo str_cli_color($strict::calculateHomeWorkSum(3, 2.2, '1'), "f_purple")."\n";

