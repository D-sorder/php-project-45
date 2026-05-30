<?php

namespace BrainGames\Games\Even;

function getDescription()
{
    return 'Answer "yes" if the number is even, otherwise answer "no".';
}

function generateRound()
{
    $num = rand(1, 100);
    $question = (string)$num;
    $correctAnswer = $num % 2 === 0 ? 'yes' : 'no';
    return [$question, $correctAnswer];
}
