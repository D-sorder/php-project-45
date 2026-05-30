<?php
namespace BrainGames\Games\Progression;

function getDescription()
{
        return 'What number is missing in the progression?';
}

function generateRound()
{
        $progressionLength = rand(6, 15);
        $step = rand(2, 5);
        $start = rand(1, 15);

        $progression = [];
        for ($i = 1; $i < $progressionLength; $i++) {
                $progression[] = $start + $i * $step;
        }

        $hiddenIndex = array_rand($progression);

        $correctAnswer = $progression[$hiddenIndex];
        $progression[$hiddenIndex] = '..';

        $question = implode(' ', $progression);

        return [$question, $correctAnswer];
}
