<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\runGame;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';
const MIN_NUM = 0;
const MAX_NUM = 100;

function run(): null
{
    $generateRound = function(): array {
        $round = rand(MIN_NUM, MAX_NUM);

        if (isPrime($round)) {
            $answer = 'yes';
        } else {
            $answer = 'no';
        }

        return [$round, $answer];
    };
    return run(DESCRIPTION, $generateRound);
}

function isPrime(int $num): bool
{
    if ($num < 2) {
        return false;
    }

    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }

    return true;
}
