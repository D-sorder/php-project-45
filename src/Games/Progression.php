<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\run;

const DESCRIPTION = 'What number is missing in the progression?';

const MIN_LENGTH = 6;
const MAX_LENGTH = 15;

const MIN_STEP = 2;
const MAX_STEP = 5;

const MIN_START = 1;
const MAX_START = 15;

function runProgression (): null
{
    $generateRound = function (): array {
        $progressionLength = rand(MIN_LENGTH, MAX_LENGTH);
        $step = rand(MIN_STEP, MAX_STEP);
        $start = rand(MIN_START, MAX_START);

        $progression = [];
        for ($i = 1; $i < $progressionLength; $i++) {
            $progression[] = $start + $i * $step;
        }

        $hiddenIndex = array_rand($progression);

        $correctAnswer = $progression[$hiddenIndex];
        $progression[$hiddenIndex] = '..';

        $question = implode(' ', $progression);

        return [$question, (string)$correctAnswer];
    };

    return run(DESCRIPTION, $generateRound);
}
