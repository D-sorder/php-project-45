<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\greet;

function run($description, $generateRound)
{
    $name = greet();
    line($description);

    for ($i = 0; $i < 3; $i++) {
        [$question, $correctAnswer] = $generateRound();
        line("Question: %s", $question);
        $answer = prompt("Your answer");
        if ((string)$answer === (string)$correctAnswer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            exit(0);
        }
    }
    line("Congratulations, %s!", $name);
}
