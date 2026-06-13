<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runGame;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';
const MIN_NUM = 1;
const MAX_NUM = 100;

function run(): void
{
    $generateRound = function (): array {
        $num1 = rand(MIN_NUM, MAX_NUM);
        $num2 = rand(MIN_NUM, MAX_NUM);

        $question = "{$num1} {$num2}";
        $result = findGcd($num1, $num2);

        return [$question, (string)$result];
    };
    runGame(DESCRIPTION, $generateRound);
}

function findGcd (int $a, int $b): int
{
    while ($b !== 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return abs($a);
}
