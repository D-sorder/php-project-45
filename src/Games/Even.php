<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\run;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';
const MIN_NUM = 1;
const MAX_NUM = 100;

function isEven (int $num): bool
{
    return $num % 2 === 0;
}

function runEven(): null
{
    $generateRound = function (): array {
	$number = rand(1, 100);
        $correctAnswer = isEven($number) ? 'yes' : 'no';
	return [$number, (string)$correctAnswer];
    };

    return run(DESCRIPTION, $generateRound);
}
