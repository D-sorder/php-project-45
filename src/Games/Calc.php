<?php

namespace BrainGames\Games\Calc;

function getDescription()
{
        return "What is the result of the expression?";
}

function generateRound()
{
        $operations = ['+', '-', '*'];
        $num1 = rand(1, 30);
        $num2 = rand(1, 30);
        $operator = $operations[array_rand($operations)];

        $question = "{$num1} {$operator} {$num2}";

    switch ($operator) {
        case '+':
                $result = $num1 + $num2;
            break;
        case '-':
                $result = $num1 - $num2;
            break;
        case '*':
                $result = $num1 * $num2;
            break;
        default:
                $result = 0;
    }
        return [$question, $result];
}
