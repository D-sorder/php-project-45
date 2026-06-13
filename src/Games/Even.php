<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runGame;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';
const MIN_NUM = 1;
const MAX_NUM = 100;

function run(): void
{
    $generateRound = function (): array {
	$number = rand(MIN_NUM, MAX_NUM);
        $correctAnswer = isEven($number) ? 'yes' : 'no';
	return [$number, $correctAnswer];
    };

    runGame(DESCRIPTION, $generateRound);
}

function isEven(int $num): bool
{
    return $num % 2 === 0;
}
